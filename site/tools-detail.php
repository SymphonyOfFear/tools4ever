<?php
require 'database.php';
$id = $_GET['tool_id'];

$sql = "SELECT * FROM tools WHERE tool_id = $id";

$result = mysqli_query($conn, $sql);

$tool = mysqli_fetch_assoc($result);
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
    <table class="styled-table">
        <thead>
            <th>Tool id</th>
            <th>Naam</th>
            <th>Categorie</th>
            <th>Prijs</th>
            <th>Merk</th>

        </thead>
        <tbody>
        
                <tr class="active-row">
                    <td>
                        <?php echo $tool['tool_id']; ?>
                    </td>
                    <td>
                        <?php echo $tool['tool_name']; ?>
                    </td>

                    <td>
                        <?php echo $tool['tool_category']; ?>
                    </td>

                    <td>
                        <?php echo $tool['tool_price']; ?>
                    </td>

                    <td>
                        <?php echo $tool['tool_brand']; ?>
                    </td>
                </tr>
                <tr class="active-row">
                <td><a href="tools-overzicht.php">Vorige Pagina</a>
                </td>
</tr>
        </tbody>
    </table>

</body>
</body>

</html>