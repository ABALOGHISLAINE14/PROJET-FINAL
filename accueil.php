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

    <!-- boostrap --><!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,400&display=swap" rel="stylesheet">  -->


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
    <a href="index.php">LOGIN</a> 
    
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
    <section class="bloc2">
        <div class="container-fluid ">
            <div class="row ass">
                <div class="col propos">
                    <img src="./IMAGES/image1.jpg.jpg" alt="">
                </div>

                <div class="col order-5 propos">
                    <h2>A propos de nous</h2>
                    <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                       Fugit odio perspiciatis fugiat totam. Atque recusandae 
                       reiciendis delectus eveniet consequatur natus,
                      quod blanditiis at accusamus dolores impedit
                       quisquam optio doloribus? Quas.
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                       Fugit odio perspiciatis fugiat totam. 
                       quod blanditiis at accusamus dolores impedit
                       quisquam optio doloribus? Quas.
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                       Fugit odio perspiciatis fugiat totam. 

                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Ends section deux -->


    <!-- start section trois -->

    <section class="bloc2">
        <div class="container-fluid">
            <div class="row test">
                <div class="col texte">
                    <h2>Nos Objectifs</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Natus inventore cupiditate enim possimus eaque incidunt. 
                        Harum sapiente aut blanditiis molestiae ex perferendis omnis qui voluptate dolorem.
                    </p>
                </div>

                <div class="col order-5 texte">
                    <h2>Nos missions</h2>
                    <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                       Fugit odio perspiciatis fugiat totam. Atque recusandae reicie
                      quod blanditiis at accusamus dolores impedit quisquam optio doloribus? Quas.
                    </p>
                </div>

            </div>
        </div>

    </section>
    <!-- Ends section trois -->

    <!-- start section quatre -->

      <section class="service" id="service">
        <h1 class="heading">.. <span>....</span></h1>
        <div class="bos-container">
            <div class="bos">
                <img class="imge" src="" alt="">
                <div class="content">
                    <img src="./IMAGES/image6.jpg" alt="">
                    <h3>Activités</h3>
                    <p>Lorem ipsum dolor sit, amet </p> <br>
                    <button type="button" class="btn btn-dark">En savoir plus</button>

                </div>
            </div>
            <div class="bos">
                <img class="imge"imge src="" alt="">
                <div class="content">
                    <img src="./IMAGES/image6.jpg" alt="">
                    <h3>Offres</h3>
                    <p>Lorem ipsum dolor sit, amet </p> <br>
                    <button type="button" class="btn btn-dark">En savoir plus</button>

                </div> 
            </div>
            <div class="bos">
                <img class="imge"src="" alt="">
                <div class="content">
                    <img src="./IMAGES/image5.jpg" alt="">
                    <h3>Projets</h3>
                    <p>Lorem ipsum dolor sit, amet </p> <br>
                    <button type="button" class="btn btn-dark">En savoir plus</button>
                </div>
            </div>
            
            <div class="bos">
                <img class="imge"src="" alt="">
                <div class="content">
                    <img src="./IMAGES/image5.jpg" alt="">
                    <h3>Inscrivez-vous</h3>
                    <p>Lorem ipsum dolor sit, amet </p> <br>
                    <button type="button" class="btn btn-dark">En savoir plus</button>

                </div>
            </div> 
        </div>

    </section> 

    <!-- footer section start -->

    <?php include('footer.php') ?>
    <!-- footer section ends -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>