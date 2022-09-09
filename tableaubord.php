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
    <p><h2><b>liste des offres</b></h2></p>
    <?php
    $reqselect="select * from services_ajdl";
    $resultat=mysqli_query($cnconnexion, $reqselect);


    $nbr=mysqli_num_rows($resultat);

    echo "<p>Total  <b> " .$nbr. "</b> offres.......</p>";

    ?>
    <p><a class="add" href="ajouter.php"><i class="fa-solid fa-circle-plus"></i></a></p>

    <table width="100%" border="1">
        <tr>
            <th>ID</th>
            <th>services</th>
            <th>PRIX</th>
            <th>PHOTO</th>
            <th>supprimer</th>
            <th>modifier</th>
        </tr>
        <?php
       while($ligne=mysqli_fetch_assoc($resultat)){

       

        ?>
        <tr>
            <td><?php echo $ligne['ID']?></td>
            <td><?php echo $ligne['SERVICE']?></td>
            <td><?php echo $ligne['PRIX']?></td>
            <td> <img src='<?php echo $ligne['PHOTO']?>' class="photoservice"></td>
            <td><a class="delete" href="supprimer.php"><i class="fa-solid fa-trash"></i></a></td>
            <td><a class="edit" href="modifier.php"><i class="fa-solid fa-user-pen"></i></a></td>


        </tr>

        <?php
          }

        ?>

    </table>
    
    
</body>
</html>