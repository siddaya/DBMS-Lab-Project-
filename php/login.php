<?php

error_reporting(0);

@include('connection/connection.php');




$email = $_POST['email'];
$password = $_POST['password'];



$sql = "SELECT * FROM users WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($password == $row['password']){
        header('Location: ../index.php');
    }
    else{
        header('Location: ../login.php?err=000000');
    }
  }
} else {
    header('Location: ../login.php?err=0000000');
}

?>