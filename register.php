<?php
include "localhost.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($confirm_password != $password){
    die("<br>Password do not match!");
}

$usersql = "INSERT into users (firstname, lastname, phone, email, password) values ('$firstname', '$lastname', '$phone', '$email', '$password')";

$sql = mysqli_query($con, $usersql);
if($sql){
    echo "<br>User registered";
}

else
    echo "Error";


?>