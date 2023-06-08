<?php 
session_start();

$id = $_SESSION['user_id'];

require 'database.php';

$sql = "SELECT * FROM users
                INNER JOIN user_settings
                ON user_settings.user_id = users.id
                WHERE users.id = $id";
$result = mysqli_query($conn, $sql);

$gebruiker_gegevens = mysqli_fetch_all($result);
var_dump($gebruiker_gegevens);
?>