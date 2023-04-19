<?php

// Dit is het startpunt van je applicatie.
require 'database.php';

$sql = "SELECT * FROM tools";

$result = mysqli_query($conn, $sql);

$tools = mysqli_fetch_all($result, MYSQLI_ASSOC);

//verwerk-nieuw-product.php
if($_SERVER['REQUEST_METHOD'] != "POST"){
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include
    exit;
}

// check of er wel een correct getal is ingevoerd
if(is_numeric($_POST['prijsTool'])){
    echo 'number found';

    $email = $_POST['emailGebruiker'];
    $password = $_POST['passwordGebruiker'];
    $firstname = $_POST['firstnameGebruiker'];
    $lastname = $_POST['lastnameGebruiker'];
    $adress = $_POST['adressGebruiker'];
    $city = $_POST['cityGebruiker'];

    $sql = "INSERT INTO tools (tool_name,tool_category,tool_price,tool_brand) VALUES ('$naam', '$categorie', '$prijs', '$merk')";

    mysqli_query($conn, $sql);
}

// checken hoe lang de string is

if(strlen($_POST['naamTool']) < 3)
{
    echo "Een naam moet minimaal uit 3 tekens bestaan";
    exit;
}
if(empty($_POST['categorieTool']))
{
    echo "Er moet een categorie opgegeven worden! Deze mag niet leeg zijn!";
}

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
        <h2>Nieuwe Gereedschap</h2>
        <form action="verwerk-nieuw-product.php" method="post">
        <div class="user-box">
                <input type="text" name="emailGebruiker" id="emailGebruiker" required="">
                <label for="emailGebruiker">Merk</label>
            </div>
        <div class="user-box">
                <input type="text" name="passwordGebruiker" id="passwordGebruiker" required="">
                <label for="passwordGebruiker">Merk</label>
            </div>
        <div class="user-box">
                <input type="text" name="firstNameGebruiker" id="firstNameGebruiker" required="">
                <label for="firstNameGebruiker">Merk</label>
            </div>
        <div class="user-box">
                <input type="text" name="lastNameGebruiker" id="lastNameGebruiker" required="">
                <label for="lastNameGebruiker">Merk</label>
            </div>
        <div class="user-box">
                <input type="text" name="adressGebruiker" id="adressGebruiker" required="">
                <label for="adressGebruiker">Merk</label>
            </div>
        <div class="user-box">
                <input type="text" name="cityGebruiker" id="cityGebruiker" required="">
                <label for="cityGebruiker">Merk</label>
            </div>
        
           
            
            <button type="submit"><a><span></span><span></span><span></span>Registreer het nieuwe product!</a></button>
        </form>
    </div>
</body>

</html>