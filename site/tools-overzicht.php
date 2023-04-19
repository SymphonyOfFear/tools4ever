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
    <table class="styled-table">
        <thead>
            <th>Naam</th>
            <th>Categorie</th>
            <th>Prijs</th>
            <th>Merk</th>
            <th>Details</th>
        </thead>
        <tbody>
            <?php foreach ($tools as $tool): ?>
                <tr class="active-row">
                    <td>
                        <?php echo $tool['tool_name']; ?>
                    </td>

                    <td>
                        <?php echo $tool['tool_category']; ?>
                    </td>

                    <td>&euro;
                        <?php echo $tool['tool_price']; ?>
                    </td>

                    <td>
                        <?php echo $tool['tool_brand']; ?>
                    </td>

                    <td><a href="tools-detail.php?tool_id=<?php echo $tool['tool_id'] ?>">Details bekijken</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>