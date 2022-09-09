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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <form action="" method="post" class="formulaire">
            <h2>connexion</h2>
            <label for="Nom d'utilisateur"></label>
            <input type="text" placeholder="entrer le nom d'utilisateur" name="txtlogin"required class="zonetext">

            <label for="MOT de passe"></label>
            <input type="password" placeholder="entrer le mot de passe" name="txtpw"required class="zonetext">
            <input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit">
            <!-- <a href="offres.php" class="submit">Retour </a> -->

            <?php
            if(isset($_POST['btlogin'])){
             $req="select * from utilisateurs_admin where login='".$_POST['txtlogin']."' and motPasse='".$_POST['txtpw']."'";
                    if ($resultat=mysqli_query($cnconnexion, $req))
                    {
                            $ligne=mysqli_fetch_assoc($resultat);
                            if($ligne!=0){
                                    session_start();
                                        $_SESSION['monlogin']=$_POST['txtlogin'];
                                        header("location:admin.php");
                                     }

                                        else{
                                    echo ("Login ou mot de passe est invalide");
                             }
                             }
                                }
            
            ?>
               
            
        </form>
    </div>
</body>
</html>