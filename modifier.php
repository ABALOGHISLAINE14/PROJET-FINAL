<?php
        require_once('service.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
      <div id="container">
        <form name="formUpdate" method="post" action="" class="formulaire"enctype="multipart/form-data">

        <h2 align="center">Mettre à jour une offre</h2>
       
        <label for="">ID</label>
        <input type="text" name="txtid" class="zonetext" value="<?php echo $_GET['mod'] ?>" readonly>
        
        <label for="">SERVICE</label>
        <input type="text" name="txtService" class="zonetext" placeholder="Entrer l'offre" required>

        <label for="">PRIX </label>
        <input type="number" name="txtPrix" class="zonetext" placeholder="Entrer le prix" required>

        <label for="">PHOTO</label>
        <input type="file" name="txtphoto" class="zonetext" placeholder="choisir une image..." required>

        <input type="submit" name="btmod" value="ajouter" class="submit"> <br>

        <p><a href="admin.php"class="submit">Tableau de bord</a></p>
        <label style="text-align:center"for="">
        <?php
        
        if(isset($_POST['btmod'])){

            $ID=$_POST ['txtid'];
            $SERVICE=$_POST['txtService'];
            $PRIX=$_POST['txtPrix'];
            $modifier=$_GET['mod'];

            $image=$_FILES['txtphoto']['tmp_name'];

            $trajet="IMAGES/".$_FILES['txtphoto']['name'];
            
            move_uploaded_file($image, $trajet);
            

            $reqUp="UPDATE services_ajdl  SET ID='$ID', SERVICE='$SERVICE', PRIX='$PRIX', PHOTO='$trajet' WHERE ID='$modifier'";
            

             $resultat=mysqli_query($cnconnexion, $reqUp);
            
            
            
             if($resultat){
                echo "Mis à jour des données validés";

            }
            else{
                echo "Echec echec de modification des données";
                // var_dump($resultat);
                // echo "error:" .$reqadd . "<br>" . mysqli_error($cnconnexion);

            }


              }

            ?>









        
    
        </label>

      </div>
        
    
    
</body>
</html>