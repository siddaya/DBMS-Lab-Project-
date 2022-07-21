<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);


@include('connection/connection.php');

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$phone = $_POST['number'];


// $sql = "INSERT INTO users (email, phone, name , password) VALUES($email, $phone, $name , $password)";

$sql = "INSERT INTO users (email, phone, name , password) VALUES('$email', '$phone', '$name ', '$password')";

if ( mysqli_query($conn, $sql)) {
    header('Location: ../index.php');
} else {
    header('Location: ../register.php?err=000000');
}


