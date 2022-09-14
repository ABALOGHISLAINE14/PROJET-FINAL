<?php
        require_once('service.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .myphoto{
            width:50px;
            height:50px;
            border: 1px solid;
            border-radius:50%
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="global">
        <div id="profil">
            <?php
            session_start();
            echo"bonjour et bienvenue".$_SESSION['monLogin']. "<br>";

            $req="select * from utilisateurs_admin where login ='".$_SESSION['monLogin']."'";

            $resultat=mysqli_query($cnconnexion, $req);

            $ligne=mysqli_fetch_assoc($resultat);
            
            ?>

            <img src="<?php echo $ligne['my_photo'];?>" class="myphoto">

            <br>
            <a href="deconnecter.php">Deconnecter</a>

        </div>

        <div id="tableaubord">
            <?php include("tableaubord.php")?>


        </div>

    </div>
    
</body>
</html>