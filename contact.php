<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="contact_form.php">
            
            <title>CONTACT</title>
        </head>
        <body> 
            <!--Starts header section -->
   
   <?php include('navbar.php') ?>

        <body> 
            <!--Starts header section -->
            <section class=" container contact">
                <h2 >RESERVATION</h2>
                <form action="" method="post" class="contact-form">
                    <div class="flex">
                        <div class="inputbox">
                            <span>Nom et prénoms :</span>
                            <input type="text"  required placeholder="entrer votre nom et prénoms" name="name">
                        </div>
                        <div class="inputbox">
                            <span>E-mail:</span>
                            <input type="email"  required placeholder="entrer votre mail" name="email">
                        </div>
                        <div class="inputbox">
                            <span>Téléphone :</span>
                            <input type="phone"  required placeholder="entrer votre numéro" name="phone">
                        </div>
                        <div class="inputbox">
                            <span>address:</span>
                            <input type="number"  required placeholder="entrer votre numéro" name="address">
                        </div>
                        <div class="inputbox">
                            <span>Lieu :</span>
                            <input type="numero"  required placeholder="place ou ville à visiter" name="location">
                        </div>
                        
                        <div class="inputbox">
                            <span>nombre de jour :</span>
                            <input type="number" required  placeholder="entrer votre numéro" name="guests">
                        </div>
                        
                        <div class="inputbox">
                            <span>Arrivée :</span>
                            <input required type="date" name="arrivals">
                        </div>
                        
                        <div class="inputbox">
                            <span>Départ :</span>
                            <input required type="date" name="leaving">
                        </div>
                        <br>

                    </div>
                    
                    <input type="submit" value="submit" class="btn btn-warning" name="send">
                    <?php

$connection = mysqli_connect('localhost', 'root', '', 'connexion');

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
    //   mysqli_close($connection);
    } 
    // else{ header('Location: offres.php'); die();}

?>

                </form>

            </section>
<!-- ......................................... -->
            
<div id="container">
        <form action="" method="post" class="formulaire container">
            <h2 class="text-center">Contactez-nous</h2>
            <label for="Nom et prénoms"></label>
            <input type="text" placeholder="entrer votre nom et prénom" name="nom" class="zonetext mb-3">
            <label for="email"></label>
            <input type="text" placeholder="entrer votre email" name="email" class="zonetext mb-3">
            <label for="Téléphone">

            </label>
            <input type="text" placeholder="entrer numéro de téléphone" name="phone" class="zonetext mb-3">

            <textarea class="zonetext mb-3" name="message" id="" placeholder="entrer votre message" cols="30" rows="10"></textarea>

            <input type="submit" name="envoyer" value="envoyer" id="envoyer" class="submit mb-3">
            
            <?php

            $connection = mysqli_connect('localhost', 'root', '', 'connexion');


            if(isset($_POST['envoyer']))
                {    
     
     $nom = $_POST['nom'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $message = $_POST['message'];


     $sql = "INSERT INTO messages (nom, email, phone, message) VALUES ('$nom','$email', '$phone', '$message')";
     if (mysqli_query($connection, $sql)) {
        echo "Message envoyé!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($connection);
     }
     mysqli_close($connection);
        }
            ?>
            
        </form>
    </div>

<!-- footer section start -->

<?php include('footer.php') ?>
    <!-- footer section ends -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="srcipt.js"></script>

</body>
        
</body>
</html>