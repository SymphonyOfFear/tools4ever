<?php


$naam = $_POST['naamTool'];
$categorie = $_POST['categorieTool'];
$prijs = $_POST['prijsTool'];
$merk = $_POST['merkTool'];

require 'database.php';

$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand) VALUES
                  ('$naam', '$categorie', '$prijs', '$merk')";

mysqli_query($conn, $sql);


?>