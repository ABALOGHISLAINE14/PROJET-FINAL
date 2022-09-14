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
            <title>Connexion</title>
        </head>
        <body> 
            <!--Starts header section -->
   <section class="header">
    <img src="./IMAGES/logo.png.jpg" class="logo" alt="">
    <!-- <a href="accueil.php" class="logo"> <img src="images/logo.png" alt=""> LOGO</a> -->
    <nav class="navbar">
    <a href="accueil.php">ACCUIEL</a>
    <a href="ajdl.php">GALERIE</a>
    <a href="activite.php">ACTIVITES</a>
    <a href="offres.php">OFFRES</a>
    <a href="projet.php">PROJETS</a>
    <a href="contact.php">CONTACT</a>
    <a class="btn btn-warning"href="index.php">INSCRIPTION</a> 
    
    
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
   </section>
        <body> 
            <!--Starts header section -->
            <section class=" container contact">
                <h2 >RESERVATION</h2>
                <form action="contact_form.php" method="post" class="contact-form">
                    <div class="flex">
                        <div class="inputbox">
                            <span>name :</span>
                            <input type="text"  required placeholder="entrer votre nom" name="name">
                        </div>
                        <div class="inputbox">
                            <span>email :</span>
                            <input type="email"  required placeholder="entrer votre mail" name="email">
                        </div>
                        <div class="inputbox">
                            <span>phone :</span>
                            <input type="phone"  required placeholder="entrer votre numéro" name="phone">
                        </div>
                        <div class="inputbox">
                            <span>address:</span>
                            <input type="number"  required placeholder="entrer votre numéro" name="address">
                        </div>
                        <div class="inputbox">
                            <span>where to :</span>
                            <input type="numero"  required placeholder="place you want to visit" name="location">
                        </div>
                        
                        <div class="inputbox">
                            <span>how many :</span>
                            <input type="number" required  placeholder="entrer votre numéro" name="guests">
                        </div>
                        
                        <div class="inputbox">
                            <span>arrivals :</span>
                            <input required type="date" name="arrivals">
                        </div>
                        
                        <div class="inputbox">
                            <span>leaving :</span>
                            <input required type="date" name="leaving">
                        </div>
                        <br>

                    </div>
                    
                    <input type="submit" value="submit" class="btn" name="send">

                </form>

            </section>
<!-- ......................................... -->
            
<div id="container">
        <form action="" method="post" class="formulaire">
            <h2>Contactez-nous</h2>
            <label for="Nom et prénoms"></label>
            <input type="text" placeholder="entrer votre nom et prénom" name="nom" class="zonetext">
            <label for="email"></label>
            <input type="text" placeholder="entrer votre email" name="email" class="zonetext">
            <label for="Téléphone">

            </label>
            <input type="text" placeholder="entrer numéro de téléphone" name="phone" class="zonetext">

            <textarea class="zonetext" name="message" id="" placeholder="entrer votre message" cols="30" rows="10"></textarea>

            <input type="submit" name="envoyer" value="envoyer" id="envoyer" class="submit">
            
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
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($connection);
     }
     mysqli_close($connection);
        }
            ?>
            
        </form>
    </div>
</body>
        
</body>
</html>