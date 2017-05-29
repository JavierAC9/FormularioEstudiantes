<?php
//Se inicia sesión
session_start();
?>

<?php 

require_once 'funciones.php';


// destroy the session 
session_destroy();//Se sale de la sesión actual

logOut();//Se ejecuta la función 'logOut'

 ?>

