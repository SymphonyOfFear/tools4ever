<?php

// Dit is het startpunt van je applicatie.
require 'database.php';

$sql = "SELECT * FROM tools";

$result = mysqli_query($conn, $sql);

$tools = mysqli_fetch_all($result, MYSQLI_ASSOC);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="registreer-box">
        <h2>Nieuwe Gebruiker</h2>
        <form action="verwerk-nieuwe-gebruiker.php" method="post">

            <div class="user-box">
                <input type="email" name="emailGebruiker" id="emailGebruiker" required="">
                <label for="emailGebruiker">E-mail</label>
            </div>
            <div class="user-box">
                <input type="password" name="passwordGebruiker" id="passwordGebruiker" required="">
                <label for="passwordGebruiker">Wachtwoord</label>
            </div>
            <div class="user-box">
                <input type="text" name="firstNameGebruiker" id="firstNameGebruiker" required="">
                <label for="firstNameGebruiker">Voornaam</label>
            </div>
            <div class="user-box">
                <input type="text" name="lastNameGebruiker" id="lastNameGebruiker" required="">
                <label for="lastNameGebruiker">Achternaam</label>
            </div>
            <div class="user-box">
                <input type="text" name="adressGebruiker" id="adressGebruiker" required="">
                <label for="adressGebruiker">Adress</label>
            </div>
            <div class="user-box">
                <input type="text" name="cityGebruiker" id="cityGebruiker" required="">
                <label for="cityGebruiker">Stad</label>
            </div>


            <button type="submit"><a><span></span><span></span><span></span>Registreren nu!</a></button>
        </form>
    </div>
</body>

</html>