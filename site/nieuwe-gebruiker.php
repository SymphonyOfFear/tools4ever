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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="registreer-box">
        <h2>Nieuwe Gebruiker</h2>
        <form action="verwerk-nieuwe-gebruiker.php" method="post">
            <div class="user-box">
                <input type="email" name="emailGebruiker" id="emailGebruiker">
                <label for="emailGebruiker">E-mail</label>
            </div>
            <div class="user-box">
                <input type="password" name="passwordGebruiker" id="passwordGebruiker" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    required>>
                <label for="passwordGebruiker" >Wachtwoord</label>
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