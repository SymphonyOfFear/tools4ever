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

    $naam = $_POST['naamTool'];
    $categorie = $_POST['categorieTool'];
    $prijs = $_POST['prijsTool'];
    $merk = $_POST['merkTool'];

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
                <input type="text" name="naamTool" id="naamTool" required="">
                <label for="naamTool">Naam</label>
            </div>
            <div class="user-box">
                <input type="text" name="categorieTool" id="categorieTool" required="">
                <label for="categorieTool">Categorie</label>
            </div>
            <div class="user-box">
                <input type="text" name="prijsTool" id="prijsTool" required="">
                <label for="prijsTool">Prijs in &euro;</label>
            </div>
            <div class="user-box">
                <input type="text" name="merkTool" id="merkTool" required="">
                <label for="merkTool">Merk</label>
            </div>
            <button type="submit"><a><span></span><span></span><span></span>Registreer het nieuwe product!</a></button>
        </form>
    </div>
</body>

</html>