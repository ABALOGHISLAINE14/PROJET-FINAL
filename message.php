<!-- <?php

$connection = mysqli_connect('localhost', 'root', '', 'connexion');


if(isset($_POST['envoyer']))
{    
     $nom = $_POST['nom'];
     $email = $_POST['email'];
     $message = $_POST['message'];

     $sql = "INSERT INTO messages (nom,email,mobile)
     VALUES ('$nom','$email','$message')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?> -->