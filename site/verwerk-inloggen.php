<?php
require 'database.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM Users WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if (!is_array($user)) {
    echo "Deze gebruiker is niet bij ons bekened";
    exit;
}
if ($_POST['password'] == $user['password']) {
    echo "Deze gebruiker is bekend EN heeft een juiste wachtwoord opgegeven";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Welkom
        <?php echo $user['firstname'] ?>
    </h1>
</body>

</html>