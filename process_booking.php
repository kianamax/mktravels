<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $tourOption = $_POST["tour_option"];
    $payment = isset($_POST["payment"]) ? floatval(str_replace('$', '', $_POST["payment"])) : null;
    $email = $_POST["email"];

    
    if (empty($name) || empty($tourOption) || empty($email)) {
        $response = array("status" => "error", "message" => "Please fill in all required fields.");
        header("Content-Type: application/json");
        echo json_encode($response);
        exit;
    }

    //database connection
    $host = "localhost"; 
    $username = "root";
    $password = "";
    $database = "assino";

    // Create a connection to the database
    $connection = mysqli_connect($host, $username, $password, $database);

    // Check if the connection was successful
    if (!$connection) {
        $response = array("status" => "error", "message" => "Database connection failed: " . mysqli_connect_error());
        header("Content-Type: application/json");
        echo json_encode($response);
        exit;
    }

    // Insert data into the database
    $insertQuery = "INSERT INTO bookings (name, tour_option, payment, email) VALUES ('$name', '$tourOption', '$payment', '$email')";
    $result = mysqli_query($connection, $insertQuery);

    if (!$result) {
        $response = array("status" => "error", "message" => "Failed to insert data into the database: " . mysqli_error($connection));
        header("Content-Type: application/json");
        echo json_encode($response);
        mysqli_close($connection);
        exit;
    }

    // Generate the invoice
    $invoice = "
        <h2>Booking Invoice</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Tour Option:</strong> $tourOption</p>
        <p><strong>Payment:</strong> $" . number_format($payment, 2) . "</p>
        <p><strong>Email:</strong> $email</p>
    ";

    // Close the database connection
    mysqli_close($connection);

    // Return the invoice as JSON
    $response = array("status" => "success", "invoice" => $invoice);
    header("Content-Type: application/json");
    echo json_encode($response);
}
?>
