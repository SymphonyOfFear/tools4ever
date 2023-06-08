<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}

if (!isset($_POST['email'])) {
    // We controleren of de key email in de POST-array bestaat
    header("location: inloggen.php");
    exit;
}

// daarna controleren of het emailadress is ingevuld (dus niet leeg)
if (empty($_POST['email'])) {
    header("location: inloggen.php");
    exit;
}

// dan komt hier de rest van de code....

// het eerste input field met een name attribuut `email`
$email = $_POST['email'];
$password = $_POST['password'];

// We hebben een database connectie nodig
require 'database.php';
// We gaan nu het emailadres dat is ingevuld vergelijken met de waardes in de database.

$sql = "SELECT * FROM users WHERE email = '$email' ";

// dan voeren we de query uit
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);
if (!is_array($user)) {

    header("location: inloggen.php");
    echo "De gebruiker heeft het correcte email-adres ingevuld!";
}


if (password_verify($password, $user['password'])) {

    session_start();
    $_SESSION['isIngelogd'] = true;
    $_SESSION['voornaam'] = $user['firstname'];
    $_SESSION['role'] = $user['role'];

    switch ($user['role']) {
        case 'administrator':
            header("location: admin-dashboard.php");
            break;
        case 'employee':
            header("location: dashboard.php");

            break;
        case 'customer':
            header("location: store.php");
            break;
        default:
            header("location: store.php");
            break;
    }
    exit;
}

header("location: dashboard.php");
exit;

?>