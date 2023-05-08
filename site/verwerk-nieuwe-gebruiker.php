 <?php
 require 'database.php';
  
    $email = $_POST['emailGebruiker'];
    $password = $_POST['passwordGebruiker'];
    $firstname = $_POST['firstNameGebruiker'];
    $lastname = $_POST['lastNameGebruiker'];
    $adress = $_POST['adressGebruiker'];
    $city = $_POST['cityGebruiker'];
    


   //  if($_SERVER['REQUESTED_METHOD'] != "POST")
   //  {
   //    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
   //    include '405.php';
   //    exit;
   //  }
    
    $sql = "INSERT INTO Users (`email`, `password`, `firstname`, `lastname`, `adress`, `city`) VALUES ( '$email','$password', '$firstname', '$lastname', '$adress', '$city');;";
   mysqli_query($conn, $sql);
   ?>

  
   
   
