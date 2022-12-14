<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres</title>
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
  
   <?php 
    include('navbar.php')
    ?>

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

        
        <div id="entete">
        
        <a href="loginn.php"class="login">se connecter</a>
          
            <img src="" alt="">
            <p >LES SERVICES DE AJDL</p>
            <div id="formservice">

<!-- <a href="loginn.php"class="login">se connecter</a> -->
            <!-- <label for="t">uuiiiiiiii</label>
            <a href="loginn.php"class="login">se connecter</a>
            <img src="" alt="">
            <p >LES SERVICES DE AJDL</p> -->

                <form  name="formservice"action="" method="post">
                    <input id="motcle" type="text" name="motcle" placeholder="Entrer votre demande">
                    <input class="btfind" type="submit" name="btsubmit" value="recherche"> 
                    <br> <br>  <br> <br>
                    <button type="submit" >  </button>  
                     <a href="contact.php"  class="btn btn-warning center"> r??server</a>   
    
                    <!-- <a class="btfind"href="contact.php"><input type="submit" name="btsubmit" value="">R??server</a> -->
                    
                </form>

                <!-- <a href="loginn.php"class="login">se connecter</a> -->
            </div>
            <!-- <a href="loginn.php"class="login">se connecter</a> -->


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
            <p>
            <?php  echo $ligne['SERVICE'];?>

            </p>
            <br>
            <p>
            <?php  echo $ligne['PRIX'];?>

            </p>
        </div>

        <?php  } ?>
        
        <!-- <button type="button" class="btn btn-dark ">reserver</button> -->



        </div>




    




    <!-- footer section start --
    
    <!-- footer section ends -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>