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
	<link rel="stylesheet"  href="css/style.css">

</head>

<body>

<div style="display:block;">
<img src="img/logoMEP.png" class="logo" style=" float: left;">
<form action='logOut.php' method='post' >
    <input style="padding: 10px; float: right; margin-right: 20px; margin-top: 20px;" type="submit" value="Salir" ><br><br>
</form>
<?php echo '<h3 style="float: right; margin-right: 25px; color:#e6b800;">Bienvenido(a) '.$_SESSION["usuario"].'</h3>'; //Muestra el nombre del usuario que está conectado en la sesión actual?>

</div>
<br><br>



<fieldset style="margin-right: 20%; margin-left: 20%; margin-top: 10%;">
<legend style="text-align: center;"><h1>Menú</h1></legend>

<div style="position: relative;overflow: hidden; margin-top:10px; ">


      <form action='index.php' method='post' >
            <input type="submit" value="Formulario" id="boton" style="float: left;margin-left: 50px;">
      </form>  
      <form action='buscar.php' method='post' >
            <input type="submit" value="Buscar" id="boton" style="float: left; margin-left: 100px;">
      </form>  
      <form action='#' method='post' >
            <input type="submit" value="Mantenimiento" id="boton" style="float: left;margin-left: 100px;">
      </form>  

  <br>

</div>
</fieldset>

</body>

</html>


