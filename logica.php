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
	<link rel="stylesheet"  href="css/styleLogica.css">

</head>

<body>

<?php

require_once 'funciones.php';

mostrar();//Se ejecuta la función 'mostrar'

?>

<br><br>
<fieldset style="text-align: center">
<legend id="Info"><h2>Regresar</h2></legend>

<h3>Para crear el archivo de texto es necesario que todos los campos tengan datos.<br> Si hay campos vacíos o datos no permitidos, regresar al formulario y modificar los campos</h3>
<button id="botonL" onclick="goBack()">Regresar</button>
<br><br>
</fieldset>


<script>
function goBack() {
    window.history.back();
}
</script>

<br><br>
<fieldset style="text-align: center">
<legend id="Info"><h2>Crear Archivo de texto</h2></legend>
<form action="archivoCreado.php" method="post">
<label><h3>Nombre del archivo</h3></label>
<input type="text" name="crear" value="<?php echo "Estudiantes/".$_SESSION["cedula"].".txt" ?>" size='140' disabled>
<br><br>

<?php require 'variables.php'; 

//Si el las variables del nombre, primer apellido, segundo apellido y cédula no están vacíos ni contienen datos no permitidos entonces se crea el botón para crear el archivo de texto
if (($_SESSION["nombre"] !== "Nombre".$vacio and $_SESSION["apellido1"] !== "Primer apellido".$vacio and $_SESSION["apellido2"] !== "Segundo apellido".$vacio and   $_SESSION["cedula"] !== "Cédula".$vacio) and  ($_SESSION["nombre"] !== "Nombre: ". $_POST['nombre'].$noPermitido and $_SESSION["apellido1"] !== "Primer apellido: ".$_POST['apellido1'].$noPermitido and $_SESSION["apellido2"]  !== "Segundo apellido: ".$_POST['apellido2'].$noPermitido and $_SESSION["cedula"] !== "Cédula: ". $_POST['cedula'].$noPermitido)){

	echo $crearBoton;//Se crea el botón para crear el archivo de texto
}

?>

<br><br>

</form>
</fieldset>


</body>

</html>


