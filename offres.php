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

   <!-- Start section une -->
    <!-- <section class="">
      <div class="titre1">
        <div class="titre0">
            <h1>LES OFFRES DE L'ASSOCIATION DES JEUNES POUR LE DEVELOPPEMENT LOCAL</h1>
        </div>
      </div>
    </section> -->
    <!-- ends de la section une --> 
    
        <?php
        require_once('service.php');


        ?>

        <!-- <div class="formservice">
            <form action="offres" method="post">
                

            </form>
        </div> -->
        
        <!-- <nav class="navbar bg-light offre">
                <div class="container-fluid offre">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" name="motcle" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit" name="btsubmit">Search</button> 
                        <br>

                        <button type="button" class="btn btn-dark">Reserver</button>
                        <a href="login.php" class="loginn">LOGIN</a>


                    </form>
                </div>
        </nav> -->
        <div id="entete">
            <a href="loginn.php"class="login">se connecter</a>
            <img src="" alt="">
            <p >LES SERVICES DE AJDL</p>
            <div id="formservice">
                <form  name="formservice"action="" method="post">
                    <input id="motcle" type="text" name="motcle" placeholder="Recherche">
                    <input class="btfind" type="submit" name="btsubmit" value="recherche">
                </form>
            </div>

        </div>




        <div id="article">
        <?php
        if(isset($_POST['btsubmit'])){
            $mc= $_POST['motcle'];
            $reqSelect="select * from services_ajdl where SERVICE like '%$mc%' ";

        }
        else{
            $reqSelect="select * from services_ajdl";

        }

        $resultat= mysqli_query($cnconnexion, $reqSelect);
        $nbr=mysqli_num_rows($resultat);
        echo "<p><b>" .$nbr." </b>Resultats de votre recherche....</p>";
         while ($ligne=mysqli_fetch_assoc($resultat))

         {   
        ?>
        <div id="services">
            <img src=" <?php echo $ligne ['PHOTO'] ?>   " alt=""/> <BR></BR>
            
            <!-- <?php  echo $ligne['ID'];?> -->
            <?php  echo $ligne['SERVICE'];?>
            <br>
            <?php  echo $ligne['PRIX'];?>

        </div>

        <?php  } ?>
        
        <!-- <button type="button" class="btn btn-dark ">reserver</button> -->



        </div>




    




    <!-- footer section start -->


    
    <!-- footer section ends -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>