
<?php 


//Función para iniciar sesión
function login(){

$_SESSION['usuarios'] = ["Admin" => "12345", "Javier" => "6789", "Admin2" => "2468"];//Nombres de usuario con su password respectivo


foreach($_SESSION['usuarios'] as $usuario => $password){//Por cada elemento del arreglo que contiene las nombres de usuario y passwords 

  
  if (!empty($_POST['usuario']) and !empty($_POST['password'])) {//Si el campo del usuario y del password están vacíos


    if (isset($_POST['usuario']) and isset($_POST['password'])) {//Si los campos del usuario y el password están establecidos

      if ( $_POST['usuario'] == $usuario and $_POST['password'] == $_SESSION['usuarios'][$usuario]) {//Si el campo del usuario es igual a algún elemento de usuario dentro del arreglo al igual que la contraseña

            $_SESSION["usuario"] = $_POST['usuario'];//Se le asigna el valor del usuario a la variable de sesión usuario
            header('location: menu.php');//Redirige la dirección a la página 'menu.php'
      
     }
    
    }

  }else{


      if (!isset($_POST['usuario']) and !isset($_POST['password'])) {//Si los campos del usuario y password no están establecidos muestra cadena vacía
            echo "";
            break;
      }else{
            if(empty($_POST['usuario']) and empty($_POST['password'])) {//Si el campo del usuario y password están vacíos muestra el mensaje 'Los campos de Usuario y Contraseña están vacíos'
            echo "Los campos de Usuario y Contraseña están vacíos";
            break;
      }elseif(empty($_POST['usuario'])) {//Si el campo de usuario está vacío muestra mensaje 'El campo de Usuario está vacío'
            echo "El campo de Usuario está vacío";
            break;
      }else{
            echo "El campo de Contraseña está vacío";//De lo contrario muestra mensaje 'El campo de Contraseña está vacío'
            break;
           }
      }

  }


}
}


function logOut(){

	header('location: login.php');

}


//Función para mostrar la información del formulario
function mostrar(){

	require 'variables.php';
//Información de alumno
	echo "<h3>Información alumno(a)</h3>";
	echo "Nombre del alumno: ".$_SESSION["nombre"]." ".$_SESSION["apellido1"]." ".$_SESSION["apellido2"];
	echo "<br>Cédula: ".$_SESSION["cedula"];
	echo "<br>Fecha de nacimiento: ".$_SESSION["fechaNac"];
	echo "<br>Género: ".$_SESSION["genero"]; 
//Vinculos prenatales
	echo "<h3>Vinculos prenatales</h3>";
	echo "Número de embarazo: ".$_SESSION["embarazo"]."<br>";
	echo "Semanas de gestación: ".$_SESSION["gestacion"]."<br>";
	echo  $_SESSION["controlPre"]."<br>";
	echo "Tipo de alimentación: ".$_SESSION["alimentacion"]."<br>";
	echo  $_SESSION["trauma"].$_SESSION["traumaEsp"]."<br>";
	echo "Durante el embarazo: ";
	echo "<ul>";
	echo "<li>".$_SESSION["consumo1"]."</li>";
	echo "<li>".$_SESSION["consumo2"]."</li>";
	echo "<li>".$_SESSION["consumo3"]."</li>";
	echo "<li>".$_SESSION["consumo4"].$_SESSION["consumoEsp"]."</li>";
	echo "</ul>";
//Vinculos perinatales
	echo "<h3>Vinculos perinatales</h3>";
	echo "Labor de parto: ".$_SESSION["labor"].$_SESSION["laborEsp"]."<br>";
	echo $_SESSION["llorar"]."<br>";
	echo $_SESSION["cordonUmb"]."<br>";
	echo $_SESSION["problemaResp"]."<br>";
	echo "Peso al nacer: ".$_SESSION["pesoNacer"]." gramos<br>";
	echo "Talla al nacer: ".$_SESSION["tallaNacer"]." centímetros";
//Vinculos post natales
	echo "<h3>Vinculos postnatales</h3>";
	echo $_SESSION["mamar"]."<br>";
	echo $_SESSION["lactancia"].$_SESSION["lactanciaEsp"]."<br>";
	echo $_SESSION["biberon"]."<br>";
//Desarrollo infantil
	echo "<h3>Desarrollo Infantil</h3>";
	//Motor
	echo "<b>-Motor</b><br><br>";
	echo "Sostuvo la cabeza: ".$_SESSION["sostenerCabeza"]." meses. ".$_SESSION["sostenerCabezaObs"]."<br>";
	echo "Se sentó solo: ".$_SESSION["sentarseSolo"]." meses. ".$_SESSION["sentarseSoloObs"]."<br>";
	echo "Se puso de pie solo(a): ".$_SESSION["ponersePie"]." meses. ".$_SESSION["ponersePieObs"]."<br>";
	echo "Gateó: ".$_SESSION["gatear"]." meses. ".$_SESSION["gatearObs"]."<br>";
	echo "Caminó: ".$_SESSION["caminar"]." meses. ".$_SESSION["caminarObs"]."<br>";
	echo "Controló esfínteres: ".$_SESSION["controlarEsfinter"]." meses. ".$_SESSION["controlarEsfinterObs"]."<br>";
	echo "Ocurrió alguna lesión: ";
	echo "<ul>";
	echo "<li>".$_SESSION["lesion1"]."</li>";
	echo "<li>".$_SESSION["lesion2"]."</li>";
	echo "<li>".$_SESSION["lesion3"]."</li>";
	echo "</ul>";
	//Lenguaje
	echo "<b>-Lenguaje</b><br><br>";
	echo "Hizo las primeras vocalizaciones: ".$_SESSION["primeraVoc"]." meses. ".$_SESSION["primeraVocObs"]."<br>";
	echo "Dijo las primeras palabras: ".$_SESSION["primerasPal"]." meses. ".$_SESSION["primerasPalObs"]."<br>";
	echo "Dijo las primeras frases: ".$_SESSION["primerasFra"]." meses. ".$_SESSION["primerasFraObs"]."<br>";
	echo "Tuvo problemas de lenguaje: ".$_SESSION["problemasLeng"]." meses. ".$_SESSION["problemasLengObs"]."<br>";
	echo "Salieron los primeros dientes: ".$_SESSION["primerosDientes"]." meses. ".$_SESSION["primerosDientesObs"]."<br>";
//Socio afectivo
	echo "<h3>Socio afectivo</h3>";
	echo "Su niño(a): <br>";
	echo "<ul>";
	echo "<li>".$_SESSION["socioafectivo1"]."</li>";
	echo "<li>".$_SESSION["socioafectivo2"]."</li>";
	echo "<li>".$_SESSION["socioafectivo3"]."</li>";
	echo "<li>".$_SESSION["socioafectivo4"]."</li>";
	echo "<li>".$_SESSION["socioafectivo5"]."</li>";
	echo "<li>".$_SESSION["socioafectivo6"]."</li>";
	echo "<li>".$_SESSION["socioafectivo7"]."</li>";
	echo "<li>".$_SESSION["socioafectivo8"]."</li>";
	echo "<li>".$_SESSION["socioafectivo9"]."</li>";
	echo "<li>".$_SESSION["socioafectivo10"]."</li>";
	echo "<li>".$_SESSION["socioafectivo11"]."</li>";
	echo "<li>".$_SESSION["socioafectivo12"]."</li>";
	echo "<li>".$_SESSION["socioafectivo13"]."</li>";
	echo "<li>".$_SESSION["socioafectivo14"]."</li>";
	echo "<li>".$_SESSION["socioafectivo15"]."</li>";
	echo "<li>".$_SESSION["socioafectivo16"]."</li>";
	echo "<li>".$_SESSION["socioafectivo17"]."</li>";
	echo "<li>".$_SESSION["socioafectivo18"]."</li>";
	echo "</ul>";
	echo "Manifiesta temor a: <br>";
	echo "<ul>";
	echo "<li>".$_SESSION["socioafectivo19"]."</li>";
	echo "<li>".$_SESSION["socioafectivo20"]."</li>";
	echo "<li>".$_SESSION["socioafectivo21"]."</li>";
	echo "<li>".$_SESSION["socioafectivo22"]."</li>";
	echo "<li>".$_SESSION["socioafectivo23"]."</li>";
	echo "<li>".$_SESSION["socioafectivo24"]."</li>";
	echo "<li>".$_SESSION["socioafectivo25"].$_SESSION["temorEsp"]."</li>";
	echo "</ul><br>";
	echo $_SESSION["prefiereJugar"]."<br>";
	echo "Juegos preferidos: ".$_SESSION["juegosPre"]."<br>";
	echo "Horas de TV al día: ".$_SESSION["horasTV"]."<br>";
	echo "Programas TV: ".$_SESSION["programasTV"]."<br>";
	echo "Actividades en tiempo libre: ".$_SESSION["actividadesTL"]."<br><br>";
	echo "<b>-Relación padre-madre de familia o encargado legal</b><br><br>";
	echo "Relación entre adultos que viven en el hogar y el niño(a): ".$_SESSION["adultosRel"]."<br>";
	echo "Relación entre amigos del vecindario y el niño(a): ".$_SESSION["vecindarioRel"]."<br>";
	echo "Cuando su hijo(a) discute con personas (hermanos(as), amigos, vecinos, etc): ".$_SESSION["discutirRel"]."<br>";
	echo "Normas y comportamiento de su hijo(a): ".$_SESSION["normasRel"]."<br>";
	echo "Opinión de la madre y el padre del infante: ".$_SESSION["opinionRel"]."<br><br>";
//Salud
	echo "<h3>Salud</h3>";
	echo $_SESSION["accidentes"].$_SESSION["saludPQ"]."<br>";
	echo "<ul>".$_SESSION["revisionMed"].$_SESSION["hospital"]."<ul><br>";
	echo $_SESSION["medicamentos"].$_SESSION["medicamentosCuales"]."<br>";
	echo $_SESSION["crecimiento"].$_SESSION["crecimientoLugar"]."<br>";
	echo $_SESSION["vacunas"].$_SESSION["vacunasLugar"]."<br>";
	echo $_SESSION["bucal"].$_SESSION["bucalLugar"]."<br>";
	echo $_SESSION["laboratorio"].$_SESSION["laboratorioLugar"]."<br>";
	echo $_SESSION["tratMedico"].$_SESSION["tratMedicoLugar"]."<br>";
	echo "Hábitos alimenticios del niño(a): ".$_SESSION["habitosAlim"]."<br><br>";
	echo "<b>-Presenta alguna discapacidad</b><br><br>";
	echo "<ul>";
	echo "<li>".$_SESSION["visual"].$_SESSION["visualEsp"]."</li>";
	echo "<li>".$_SESSION["auditiva"].$_SESSION["auditivaEsp"]."</li>";
	echo "<li>".$_SESSION["motora"].$_SESSION["motoraEsp"]."</li>";
	echo "<li>".$_SESSION["lenguaje"].$_SESSION["lenguajeEsp"]."</li>";
	echo "<li>".$_SESSION["emocional"].$_SESSION["emocionalEsp"]."</li>";
	echo "</ul>";
	echo "<br>Observaciones generales: ".$_SESSION["obsGenerales"]."<br>";

}


//Función para crear el archivo de texto con los datos del formulario
function crearArchivo(){

	$crear = "Estudiantes/".$_SESSION["cedula"].".txt";//Nombre del archivo a crear

	if (empty($crear)) {//Si la variable está vacía muestra mensaje 'No digitó el nombre del archivo!'
		echo '<h1>No digitó el nombre del archivo!</h1>';
	}elseif(file_exists($crear) == true){//Si el archivo existe muestra el mensaje 'El archivo ya existe!'. De lo contrario abre el archivo y escribe la información del formulario
    	echo "<h1>El archivo ya existe!</h1>";
	}else{
	$archivo = fopen($crear, "w+b");
	echo "<h1>El archivo se ha creado con éxito</h1>";
	fwrite($archivo, "Nombre completo: ");
	fwrite($archivo, $_SESSION["nombre"]." ".$_SESSION["apellido1"]." ".$_SESSION["apellido2"]."\r\n" );
	fwrite($archivo, "Cédula: ".$_SESSION["cedula"]."\r\n" );
	fwrite($archivo, "Fecha de nacimiento: ".$_SESSION["fechaNac"]."\r\n" );
	fwrite($archivo, $_SESSION["genero"]."\r\n\r\n");
	fwrite($archivo, "Vinculos prenatales: \r\n\r\n");
	fwrite($archivo, "Número de embarazo: ".$_SESSION["embarazo"]."\r\n");
	fwrite($archivo, "Semanas de gestación: ".$_SESSION["gestacion"]."\r\n");
	fwrite($archivo, $_SESSION["controlPre"]."\r\n");
	fwrite($archivo, "Tipo de alimentación: ".$_SESSION["alimentacion"]."\r\n");
	fwrite($archivo, $_SESSION["trauma"].$_SESSION["traumaEsp"]."\r\n");
	fwrite($archivo, "Durante el embarazo: ".$_SESSION["consumo1"].$_SESSION["consumo2"].$_SESSION["consumo3"].
			$_SESSION["consumo4"].$_SESSION["consumoEsp"]."\r\n\r\n");
	fwrite($archivo, "Vinculos perinatales: \r\n\r\n");
	fwrite($archivo, "Labor de parto: ".$_SESSION["labor"].$_SESSION["laborEsp"]."\r\n");
	fwrite($archivo, $_SESSION["llorar"]."\r\n");
	fwrite($archivo, $_SESSION["cordonUmb"]."\r\n");
	fwrite($archivo, $_SESSION["problemaResp"]."\r\n");
	fwrite($archivo, "Peso al nacer: ".$_SESSION["pesoNacer"]." gramos\r\n");
	fwrite($archivo, "Talla al nacer: ".$_SESSION["tallaNacer"]." centímetros\r\n\r\n");
	fwrite($archivo, "Vinculos post natales: \r\n\r\n");
	fwrite($archivo, $_SESSION["mamar"]."\r\n");
	fwrite($archivo, $_SESSION["lactancia"].$_SESSION["lactanciaEsp"]."\r\n");
	fwrite($archivo, $_SESSION["biberon"]."\r\n\r\n");
	fwrite($archivo, "Desarrollo Infantil: \r\n\r\n");
	fwrite($archivo, "Motor \r\n\r\n");
	fwrite($archivo, "Sostuvo la cabeza: ".$_SESSION["sostenerCabeza"]." meses. ".$_SESSION["sostenerCabezaObs"]."\r\n");
	fwrite($archivo, "Se sentó solo: ".$_SESSION["sentarseSolo"]." meses. ".$_SESSION["sentarseSoloObs"]."\r\n");
	fwrite($archivo, "Se puso de pie solo(a): ".$_SESSION["ponersePie"]." meses. ".$_SESSION["ponersePieObs"]."\r\n");
	fwrite($archivo, "Gateó: ".$_SESSION["gatear"]." meses. ".$_SESSION["gatearObs"]."\r\n");
	fwrite($archivo, "Caminó: ".$_SESSION["caminar"]." meses. ".$_SESSION["caminarObs"]."\r\n");
	fwrite($archivo, "Controló esfínteres: ".$_SESSION["controlarEsfinter"]." meses. ".$_SESSION["controlarEsfinterObs"]."\r\n");
	fwrite($archivo, "Ocurrió alguna lesión: ".$_SESSION["lesion1"].$_SESSION["lesion2"].$_SESSION["lesion3"]."\r\n\r\n");
	fwrite($archivo, "Lenguaje \r\n\r\n");
	fwrite($archivo, "Hizo las primeras vocalizaciones: ".$_SESSION["primeraVoc"]." meses. ".$_SESSION["primeraVocObs"]."\r\n");
	fwrite($archivo, "Dijo las primeras palabras: ".$_SESSION["primerasPal"]." meses. ".$_SESSION["primerasPalObs"]."\r\n");
	fwrite($archivo, "Dijo las primeras frases: ".$_SESSION["primerasFra"]." meses. ".$_SESSION["primerasFraObs"]."\r\n");
	fwrite($archivo, "Tuvo problemas de lenguaje: ".$_SESSION["problemasLeng"]." meses. ".$_SESSION["problemasLengObs"]."\r\n");
	fwrite($archivo, "Salieron los primeros dientes: ".$_SESSION["primerosDientes"]." meses. ".$_SESSION["primerosDientesObs"]."\r\n\r\n");
	fwrite($archivo, "Socio afectivo: \r\n\r\n");
	fwrite($archivo, "Su niño(a): ".$_SESSION["socioafectivo1"].$_SESSION["socioafectivo2"].$_SESSION["socioafectivo3"].$_SESSION["socioafectivo4"].$_SESSION["socioafectivo5"].$_SESSION["socioafectivo6"].$_SESSION["socioafectivo7"].$_SESSION["socioafectivo8"].$_SESSION["socioafectivo9"].$_SESSION["socioafectivo10"].$_SESSION["socioafectivo11"].$_SESSION["socioafectivo12"].$_SESSION["socioafectivo13"].$_SESSION["socioafectivo14"].$_SESSION["socioafectivo15"].$_SESSION["socioafectivo16"].$_SESSION["socioafectivo17"].$_SESSION["socioafectivo18"]."\r\n");
	fwrite($archivo, "Manifiesta temor a: ".$_SESSION["socioafectivo19"].$_SESSION["socioafectivo20"].$_SESSION["socioafectivo21"].$_SESSION["socioafectivo22"].$_SESSION["socioafectivo23"].$_SESSION["socioafectivo24"].$_SESSION["socioafectivo25"].$_SESSION["temorEsp"]."\r\n");
	fwrite($archivo, $_SESSION["prefiereJugar"]."\r\n");
	fwrite($archivo, "Juegos preferidos: ".$_SESSION["juegosPre"]."\r\n");
	fwrite($archivo, "Horas de TV al día: ".$_SESSION["horasTV"]."\r\n");
	fwrite($archivo, "Programas TV: ".$_SESSION["programasTV"]."\r\n");
	fwrite($archivo, "Actividades en tiempo libre: ".$_SESSION["actividadesTL"]."\r\n");
	fwrite($archivo, "Actividades en tiempo libre: ".$_SESSION["actividadesTL"]."\r\n\r\n");
	fwrite($archivo, "-Relación padre-madre de familia o encargado legal: \r\n\r\n");
	fwrite($archivo, "Relación entre adultos que viven en el hogar y el niño(a): ".$_SESSION["adultosRel"]."\r\n");
	fwrite($archivo, "Relación entre amigos del vecindario y el niño(a): ".$_SESSION["vecindarioRel"]."\r\n");
	fwrite($archivo, "Cuando su hijo(a) discute con personas (hermanos(as), amigos, vecinos, etc): ".$_SESSION["discutirRel"]."\r\n");
	fwrite($archivo, "Normas y comportamiento de su hijo(a): ".$_SESSION["normasRel"]."\r\n");
	fwrite($archivo, "Opinión de la madre y el padre del infante: ".$_SESSION["opinionRel"]."\r\n\r\n");
	fwrite($archivo, "Salud: \r\n\r\n");
	fwrite($archivo, $_SESSION["accidentes"].$_SESSION["saludPQ"]."\r\n");
	fwrite($archivo, $_SESSION["revisionMed"].$_SESSION["hospital"]."\r\n");
	fwrite($archivo, $_SESSION["medicamentos"].$_SESSION["medicamentosCuales"]."\r\n");
	fwrite($archivo, $_SESSION["crecimiento"].$_SESSION["crecimientoLugar"]."\r\n");
	fwrite($archivo, $_SESSION["vacunas"].$_SESSION["vacunasLugar"]."\r\n");
	fwrite($archivo, $_SESSION["bucal"].$_SESSION["bucalLugar"]."\r\n");
	fwrite($archivo, $_SESSION["laboratorio"].$_SESSION["laboratorioLugar"]."\r\n");
	fwrite($archivo, $_SESSION["tratMedico"].$_SESSION["tratMedicoLugar"]."\r\n");
	fwrite($archivo, "Hábitos alimenticios del niño(a): ".$_SESSION["habitosAlim"]."\r\n\r\n");
	fwrite($archivo, "-Presenta alguna discapacidad: \r\n\r\n");
	fwrite($archivo, $_SESSION["visual"].$_SESSION["visualEsp"]."\r\n");
	fwrite($archivo, $_SESSION["auditiva"].$_SESSION["auditivaEsp"]."\r\n");
	fwrite($archivo, $_SESSION["motora"].$_SESSION["motoraEsp"]."\r\n");
	fwrite($archivo, $_SESSION["lenguaje"].$_SESSION["lenguajeEsp"]."\r\n");
	fwrite($archivo, $_SESSION["emocional"].$_SESSION["emocionalEsp"]."\r\n\r\n");
	fwrite($archivo, "Observaciones generales: ".$_SESSION["obsGenerales"]."\r\n\r\n");
	}

}



function buscar(){


if(isset($_POST['text'])){//Si hay un valor establecido se le asigna a la variable $text

$text = $_POST['text'];

if (empty($text)) {//Si la variable $text está vacía muestra mensaje 'Debe digitar el nombre del archivo'
  echo '<strong>Debe digitar el nombre del archivo</strong>';
}elseif(file_exists("Estudiantes/".$text.".txt") == true){//Si el archivo existe muestra el mensaje 'El archivo existe!' y abre el archivo en modo lectura. De lo contrario muestra el mensaje 'El archivo no existe' 
    echo "<strong>El archivo existe!</strong><br><br>";
    $fp = fopen("Estudiantes/".$text.".txt", "r");
while (!feof($fp)){//Mientras no sea el final del archivo imprimir la línea
    $linea = fgets($fp);
    echo $linea."<br>";
}
fclose($fp);//Se cierra el archivo

}else{
    echo "<strong>El archivo no existe</strong><br><br>";
}
}


}


?>