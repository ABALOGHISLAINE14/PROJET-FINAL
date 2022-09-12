<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accuiel</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">	
    <link rel="stylesheet" href="dist/css/lightbox.min.css">


    <!-- boostrap --><!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
    
<body>
    
    <!--Starts header section -->
   <section class="header">
    <img src="./IMAGES/logo.png.jpg" class="logo" alt="">
    <!-- <a href="accueil.php" class="logo"> <img src="images/logo.png" alt=""> LOGO</a> -->
    <nav class="navbar">
    <a href="accueil.php">ACCUIEL</a>
    <a href="ajdl.php">AJDL</a>
    <a href="activite.php">ACTIVITES</a>
    <a href="offres.php">OFFRES</a>
    <a href="projet.php">PROJETS</a>
    <a href="contact.php">CONTACT</a>
    <a class="btn btn-warning"href="index.php">INSCRIPTION</a> 
    
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
   </section>
   <!-- Ends header section -->


   <!-- accueil section -->
   
   <section class="accueil">
    <!-- sous-section une -->

    <div class="titre1">
        
        <div class="titre0">
            <h1>BIENVENUE A L'ASSOCIATION DES JEUNES POUR LE DEVELOPPEMENT LOCAL</h1>
        </div>
    </div>
    <!-- end sous section une -->


    <!-- start section deux -->

    <!-- <section class="photo">
        <H2>FOIRE</H2> <br>
        <div class="container-fluid">
            <div class="row galerie">
                 <div class="col">
                    <img src="./IMAGES/image4.jpg" alt="">
                </div>
                <div class="col">
                    <img src="./IMAGES/image4.jpg" alt="">
                </div>
                <div class="col">
                    <img src="./IMAGES/image4.jpg" alt="">
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row galerie">
                 <div class="col">
                    <img src="./IMAGES/image4.jpg" alt="">
                </div>
                <div class="col">
                    <img src="./IMAGES/image4.jpg" alt="">
                </div>
                <div class="col">
                    <img src="./IMAGES/image4.jpg" alt="">
                </div>
            </div>
        </div>

    </section> -->
    
     <div class="container">
        <div class="photo">

            <a href="./IMAGES/image4.jpg"data-lightbox="mygallery"><img src="./IMAGES/image4.jpg" alt=""></a>
            <a href="./IMAGES/image5.jpg"data-lightbox="mygallery"><img src="./IMAGES/image5.jpg" alt=""></a> 
            <a href="./IMAGES/image6.jpg"data-lightbox="mygallery"><img src="./IMAGES/image6.jpg" alt=""></a> 
            <a href="./IMAGES/image4.jpg"data-lightbox="mygallery"><img src="./IMAGES/image4.jpg" alt=""></a> 
            <a href="./IMAGES/image6.jpg"data-lightbox="mygallery"><img src="./IMAGES/image6.jpg" alt=""></a> 
            <a href="./IMAGES/image5.jpg"data-lightbox="mygallery"><img src="./IMAGES/image5.jpg" alt=""></a>
            <!-- <a href="./IMAGES/image5.jpg"data-lightbox="mygallery"><img src="./IMAGES/image5.jpg" alt=""></a>
            <a href="./IMAGES/image5.jpg"data-lightbox="mygallery"><img src="./IMAGES/image5.jpg" alt=""></a> -->


        </div>

    </div> -->
    
    

    <!-- fin section deux -->

    <!-- footer section start -->

    <?php include('footer.php') ?>
    
    <!-- footer section ends -->
    <script src="/path/to/cdn/jquery.min.js"></script>

    <script src="dist/js/lightbox.js"></script>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>