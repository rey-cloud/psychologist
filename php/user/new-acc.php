<?php

require $_SERVER["DOCUMENT_ROOT"] . '/psychologist/config/database.php';


$stmt = $conn->prepare("INSERT INTO users (user_name, email, pass)
    VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?save-success=true");