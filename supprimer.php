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
    <form name="formdelet"class="formulaire">

        <p><a href="admin.php" class="submit">Tableau de bord</a></p>
       
        <label style="text-align:center" for="">
           
           <?php
        
            if(isset($_GET['supService'])){

            $sup=$_GET ['supService'];

            $reqDelete="DELETE FROM services_ajdl WHERE ID='$sup'";
             $resultat=mysqli_query($cnconnexion, $reqDelete);
            
            
            
             if($resultat){
                echo "Mis à jour des données validés";

            }
            else{
                echo "suppression à échouée";
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