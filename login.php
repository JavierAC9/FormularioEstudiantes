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


<img src="img/logoMEP.png" style="width: 120px;height: auto;margin-top: 10px;margin-left: 45%;" >

<form action='login.php' method='post' >
  <fieldset style="margin-top:20px; text-align: center; position: absolute; left: 200px; right: 200px;">
    <legend id="Info"><h2>Iniciar sesión</h2></legend>
    <br>
    <label>Usuario</label><br><br>
    <label title="Por favor digite el usuario">*<label>
    <input type="text"  name="usuario" id="usuario">   
    <br><br>
    <label>Contraseña</label><br><br>
    <label title="Por favor digite la contraseña">*<label>
    <input type="password" name="password" id="password" >
    <br><br>
    <?php require_once 'funciones.php'; login()//Se ejecuta la función 'login'; ?>
    <br><br>
    <input  type="submit" value="Iniciar" style="padding: 10px;"><br><br>
  </form>
  </fieldset>

</body>


</html>



