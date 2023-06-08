<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
use Carbon\Traits\ToStringFormat;
use Symfony\Component\Translation\Util\ArrayConverter;

require 'database.php';

$sql = "SELECT AVG(tool_price) AS prijs, tool_price FROM tools GROUP BY tool_price";
$result = mysqli_query($conn, $sql);
$avgPrice = mysqli_fetch_all($result, MYSQLI_ASSOC);



$sql = "SELECT AVG(tool_category) AS category, tool_category FROM tools GROUP BY tool_category";
$result = mysqli_query($conn, $sql);
$avgCategory = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql = "SELECT COUNT('role') as Aantal_Werknemers, role FROM users WHERE role = 'administrator'";
$result = mysqli_query($conn, $sql);
$aantalWerknemers = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin-dashboard.css">
</head>

<body>
    <h1>Welkom Beste Admin</h1>
    <a href="instellingen.php">Ga naar gebruikersinstellingen</a>
    <h2>Data</h2>
    <p>
        <?php $Datum = Carbon::today()->toDateString();
        printf("De datum van vandaag is: %s", $Datum); ?>
    </p>
    <p>
        Het aantal werknemers momenteel is:
        <?php foreach ($aantalWerknemers as $werknemers) : ?>
            <?php echo $werknemers['role']  ?>
        <?php endforeach ?>
    </p>

    <table>
        <thead>
            <th>Categorie</th>
            <th>Gemiddelde Prijs</th>
        </thead>
        <tbody>


            <?php foreach ($avgCategory as $categorie) : ?>
                <td>
                    <?php echo $categorie['tool_category'] ?>
                </td>
            <?php endforeach ?>

            <tr>
                <?php foreach ($avgPrice as $prijs) : ?>

                    <td>
                        <?php echo $prijs['tool_price'] ?>
                    </td>


                <?php endforeach ?>
            </tr>
        </tbody>
    </table>

</body>

</html>