<?php
//Se inicia sesión
session_start();
?>

<?php 

require 'funciones.php';

crearArchivo()//Se ejecuta la función 'crearArchivo'

 ?>

<form action='menu.php' method='post' >
    <input  type="submit" value="Menu" >
</form>


