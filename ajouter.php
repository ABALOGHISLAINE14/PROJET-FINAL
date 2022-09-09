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
    <style>
    .photoservice{
            width: 130px;  height: 100px; border-radius: 5%; border: 1px solid;
            }
    </style>
        
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <form name="formadd" action="" method="post" class="formulaire" enctype="multipart/form-data">

        <h2 align="center">Ajouter une offre</h2>

        <label for="">ID</label>
        <input type="text" name="txtid" class="zonetext" placeholder="Entrer le numéro d'odre" required>
        
        <label for="">SERVICE</label>
        <input type="text" name="txtService" class="zonetext" placeholder="Entrer l'offre" required>

        <label for="">PRIX </label>
        <input type="number" name="txtPrix" class="zonetext" placeholder="Entrer le prix" required>

        <label for="">PHOTO</label>
        <input type="file" name="txtphoto" class="zonetext" placeholder="choisir l'image" required>

        <input type="submit" name="btadd" value="ajouter" class="submit"> <br>
        <p><a href="admin.php"class="submit">Tableau de bord</a></p>


        <label for="" style="text-align:center;color:#960406;">

        <?php
        if(isset($_POST['btadd'])){
            $ID=$_POST ['txtid'];
            $SERVICE=$_POST['txtService'];
            $PRIX=$_POST['txtPrix'];

            $image=$_FILES['txtphoto']['tmp_name'];

            $trajet="IMAGES/".$_FILES['txtphoto']['name'];

            move_uploaded_file($image, $trajet);
            

            $reqadd="INSERT INTO services_ajdl (ID, SERVICE, PRIX, PHOTO) values ('$ID', '$SERVICE', '$PRIX', '$trajet')";
            

             $resultat=mysqli_query($cnconnexion, $reqadd);
            
            
            
             if($resultat){
                echo "insertion des données validés";

            }
            else{
                echo "Echec d'insertion des données";
                // var_dump($resultat);
                // echo "error:" .$reqadd . "<br>" . mysqli_error($cnconnexion);

            }

        }
        ?>
    
    
        
    
        </label>



            
        </form>
        

    </div>

       

        
    
    
</body>
</html>