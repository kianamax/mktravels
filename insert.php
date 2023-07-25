<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "assino";

$link = mysqli_connect($host, $user, $password);

if ($link == false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
}

mysqli_select_db($link, $db);

$stmt = $link->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt->execute();

$stmt->close();
$link->close();


header("Location: home.php");
exit();
?>