<?php
//Se inicia sesión
session_start();
?>


<!DOCTYPE html>
<html>
  
<head>
  
  <meta charset="utf-8">
  <title>Proyecto final</title>
  <meta name="autor" content="Javier Álvarez Chavarría">
  <meta name="description" content="PHP">

</head>

<body>

<div style="display:block;">

<img src="img/logoMEP.png" style="width: 120px;height: auto;margin-top: 0px;margin-left: 45%;" >
<form action='logOut.php' method='post' >
    <input style="padding: 10px; float: right; margin-right: 50px; margin-top: 16px;" type="submit" value="Salir" ><br><br>
</form>
<form action='menu.php' method='post' >
    <input style="padding: 10px; float: right; margin-right: 10px; margin-top: -20px;" type="submit" value="Menu" ><br><br>
</form>
<?php echo '<h3 style="float: right; margin-right: 200px; margin-top:-35px; color:#e6b800;">Bienvenido(a) '.$_SESSION["usuario"].'</h3>'; ?>

</div>

<h1 style=" margin-top:-50px;">Información de estudiantes</h1>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

<label>Buscar archivo de texto</label>
<label title="Sólo el nombre del archivo(número de cédula), sin la extensión del tipo de archivo">*<label>
<input type="text" name="text" placeholder="Nombre de archivo">
<input type="submit" value="Buscar"><br><br>

</form>

<?php

require_once 'funciones.php';

buscar();//Se ejecuta la función 'buscar'

?>

</body>


</html>
