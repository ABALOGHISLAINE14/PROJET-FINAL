<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJET</title>
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
  
    <?php include('navbar.php') ?> 

   <!-- Ends header section -->

   <!-- Start section une -->
    <section class="projects">
      <div class="titre1 "style="height: 500px" >
        <!-- <div class="titre0"style="height: 500px" > -->
            <!-- <h1>LES PROJETS DE L'ASSOCIATION DES JEUNES POUR LE DEVELOPPEMENT LOCAL</h1> -->
            <h1 class=" ">SOUTENEZ NOS PROJETS <br>
            <a href="contact.php"> <button class="btn btn-warning"type="submit">Contactez-nous</button></a>
            </h1>
            
        </div>
      </div>

      <div class="projects container">
        <p class="fs-2 projects">Vous trouvez notre initiative légitime et souhaiterez nous encourager? 
        Vous pouvez nous aider de nombreuses manières, soit en devenant adhérant et joignez vous à cette belle
        aventure ou soit en nous faisant un dons.
            </p>



      </div>
    </section>

    

    <div class="projet"> 
      <!-- <h2>SOUTENEZ NOS PROJETS</h2>
      <p>Vous trouvez notre initiative légitime et souhaiterez nous encourager? <br>
        Vous pouvez nous aider de nombreuses manières, soit en devenant adhérant et joignez vous à cette belle
        aventure ou soit en nous faisant un dons

      </p> -->
    </div>
    <section class=" container But" >
      
        <div class="row">
            <div class="imgg">
                <img src="./IMAGES/58.jpg" alt=""class="w-100"  >
            </div>
            <div class="bose-container"> 
                <div class="bose">
                    <h3> <i class="fas fa-user"> Projet 1</i></h3>
                    <br>
                    <P>TROISIEME EDITION DE LA FOIRE  ENTREPRENEURIAL  A KPALIME DU 06 AU 09 OCTOBRE 2022.</P>
                </div>
                <div class="bose">
                  <h3><i class="fas fa-user">  projet 2</i></h3>
                  <br>
                    <P>FORMATION DES JEUNES ET DES ARTISANTS DANS LA REGION DES SAVANES.
                    
                    </P>
                </div>
                <div class="bose">
                    <h3><i class="fas fa-user">  projet 3</i></h3>
                    <br>
                    <P>PREPARATION DE LA QUATRIEME EDITION DE LA FOIRE ENTREPRENEURIAL AU NORD DU TOGO (KARA).</P>
                </div>
                <div class="bose">
                    <h3><i class="fas fa-user">  Projet 4</i></h3>
                    <P>
                      ACCOMPAGNEMENT DES NOUVEAUX ENTREPREUNEURS DE LA REGION DES PLATEAUX.
                    </P>
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