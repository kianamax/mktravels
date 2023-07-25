<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $tourOption = $_POST["tour_options"];
    $payment = isset($_POST["payment"]) ? $_POST["payment"] : "-";
    $email = $_POST["email"];

    // Validation (you can add more validation based on your requirements)
    if (empty($name) || empty($tourOption) || empty($email)) {
        $response = array("status" => "error", "message" => "Please fill in all required fields.");
        header("Content-Type: application/json");
        echo json_encode($response);
        exit;
    }

    // Generate the invoice
    $invoice = "
        <h2>Booking Invoice</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Tour Option:</strong> $tourOption</p>
        <p><strong>Payment:</strong> $payment</p>
        <p><strong>Email:</strong> $email</p>
    ";

    // Return the invoice as JSON
    $response = array("status" => "success", "invoice" => $invoice);
    header("Content-Type: application/json");
    echo json_encode($response);
}
?>
