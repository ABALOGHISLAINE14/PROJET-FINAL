<!DOCTYPE html>
<?php

session_start(); // demarrage de la session
session_unset();
session_destroy(); // on détruit la/les session(s), soit si vous utilisez une autre session, utilisez de préférence le unset()
header('location:loginn.php'); // On redirige

?>