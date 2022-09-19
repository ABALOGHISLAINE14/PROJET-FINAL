<?php

//$connection = mysqli_connect('localhost', 'root', '', 'connexion');
$connection = mysqli_connect('mysql-ghislaine.alwaysdata.net', 'ghislaine', 'Ghislaine1234@1234', 'ghislaine_projet');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];


    $request = "insert into contact_form (name, email, phone, address, location, guests, arrivals, leaving) 
    values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

    if (mysqli_query($connection, $request)) {
        echo "Réservation envoyée";
      } else {
        echo "Error: " . $request . "<br>" . mysqli_error($connection);
      }
      mysqli_close($connection);
    } else{ header('Location: offres.php'); die();}

?>








