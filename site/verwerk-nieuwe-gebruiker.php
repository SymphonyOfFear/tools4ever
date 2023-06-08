<?php
session_start();

require 'database.php';



$email = $_POST['emailGebruiker'];
$password = $_POST['passwordGebruiker'];
$firstname = $_POST['firstNameGebruiker'];
$lastname = $_POST['lastNameGebruiker'];
$adress = $_POST['adressGebruiker'];
$city = $_POST['cityGebruiker'];

$hassed_password = password_hash($password, PASSWORD_DEFAULT);









$sql = "INSERT INTO users (`email`, `password`, `firstname`, `lastname`, `adress`, `city`) VALUES ( '$email','$hassed_password', '$firstname', '$lastname', '$adress', '$city')";
mysqli_query($conn, $sql);

session_destroy();
header("location: inloggen.php");
exit;
