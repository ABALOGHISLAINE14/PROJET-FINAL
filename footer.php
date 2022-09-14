<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

    <!-- boostrap --><!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<section class="footer">

<div class="box-container">
<div class="box menu">
<h3>Navigation</h3>
<a href="accueil.php"> <i class="fas fa-angle-right"></i> Accueil</a>
<a href="ajdl.php"> <i class="fas fa-angle-right"></i>  Galerie</a>
<a href="activite.php"> <i class="fas fa-angle-right"></i>  Ativités</a>
<a href="offres.php"> <i class="fas fa-angle-right"></i> Offres</a>
<a href="projet.php">  <i class="fas fa-angle-right"></i> Projets</a>
<a href="contact.php"> <i class="fas fa-angle-right"></i> Contact</a>
<a href="index.php">  <i class="fas fa-angle-right"></i> Inscription</a> 
</div>

<div class="box">
<h3>Contactez-nous</h3>
<a href="accueil.php"> <i class="fas fa-phone"></i> 228 93 98 44 33</a>
<a href="ajdl.php"> <i class="fas fa-phone"></i>  228 98 98 44 33</a>
<a href="activite.php"> <i class="fas fa-envelope"></i>  ajdl_tgafrique@gmail.com</a>
<a href="projet.php">  <i class="fas fa-map"></i> TOGO-LOME</a>
 
</div>

<div class="box">
<h3>Follow us</h3>
<a href="https://www.facebook.com/AJDLTogo/"> <i class="fab fa-facebook"></i> Facebook</a>
<a href="https://twitter.com/africube_"> <i class="fab fa-twitter"></i> Twitter</a>
<a href="https://www.instagram.com/ala_togolaise/"> <i class="fab fa-instagram"></i>  instagram</a>
<a href="https://tg.linkedin.com/in/ajd-togo-59b6ba225/en?trk=people-guest_people_search-card"> <i class="fab fa-linkedin"></i> Linkedin</a>
</div>

<div class="box">
    <h3>Notre Newsletter</h3>
    <label for="">Revevez les dernières nouvelles de <br>
    l'AJDL directement dans votre boîte mail
</label> <br>
<br>


<form action="" method="post">
    
<div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping"> @</span>
 <input type="text" class="form-control" 
 placeholder="Entrer votre mail" name="email" aria-label="Username" aria-describedby="addon-wrapping"> <br>
 <br>
 <input type="submit" class="btn btn-dark" name="subscribe" value="Subscribe">

</div>
 <?php
    
    
$connection = mysqli_connect('localhost', 'root', '', 'connexion');

if(isset($_POST['subscribe'])){
    $email = $_POST['email'];
    
    $request = "insert into newsletter (email) 
    values('$email')";

    if (mysqli_query($connection, $request)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $request . "<br>" . mysqli_error($connection);
      };
    }

 ?>
</form>
 
</div>
</div>

<div class="box2">created by <span>web designer</span> all rights reserved</div>

</section>

</body>
</html>