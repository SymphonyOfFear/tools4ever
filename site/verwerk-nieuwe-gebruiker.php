 <?php
 $email = $_POST['emailGebruiker'];
    $password = $_POST['passwordGebruiker'];
    $firstname = $_POST['firstnameGebruiker'];
    $lastname = $_POST['lastnameGebruiker'];
    $adress = $_POST['adressGebruiker'];
    $city = $_POST['cityGebruiker'];

    require 'database.php';

    $sql = "INSERT INTO Users (email, 'password', firstname, lastname, adress, city) VALUES ('$email','$password', '$firstname', '$lastname',  '$adress',  '$city' )";
    ?>