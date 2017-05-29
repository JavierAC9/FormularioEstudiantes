

<?php


$crearBoton = '<input id="botonL" type="submit" value="Crear">';//Variable para insertar boton en el form de Crear Archivo de texto en logica.php

//Expresiones regulares
$noPermitido = "<strong style='color:red'>(TIPO DE DATOS NO PERMITIDO)</strong>";//Mensaje si el campo tiene tipo de datos no permitido
$vacio = "<strong style='color:blue'>(CAMPO VACÍO)</strong>";//Mensaje si el campo está vacío
$patronSoloLetras = "/^[A-ZÑÁÉÍÓÚÜ]{1}[A-ZÑÁÉÍÓÚÜa-zñáéíóúü-]+$/";//Sólo letras empezando con mayúscula
$patronSoloNumeros = "/^[0-9]{9}+$/";//Sólo números 



//Variables información niño(a) ----------------------------------------------------------------------------------------------
if (empty($_POST['nombre'])) {//Si el campo del nombre está vacío se muestra mensaje de la variable $vacío
	$_SESSION["nombre"] = "Nombre".$vacio;
}else{
	if(preg_match($patronSoloLetras, $_POST['nombre'])) {//Si el nombre tiene el patrón de caracteres permitido se le asigna el nombre a la variable de sesion. De lo contrario se muestra mensaje de la variable $noPermitido
	$_SESSION["nombre"] = $_POST['nombre'];
    } else {
    $_SESSION["nombre"] = "Nombre: ". $_POST['nombre'].$noPermitido;
    }
}

if (empty($_POST['apellido1'])) {//Si el campo del apellido1 está vacío se muestra mensaje de la variable $vacío
	$_SESSION["apellido1"] = "Primer apellido".$vacio;
}else{
	if(preg_match($patronSoloLetras, $_POST['apellido1'])) {//Si el apellido1 tiene el patrón de caracteres permitido se le asigna el nombre a la variable de sesion. De lo contrario se muestra mensaje de la variable $noPermitido
	$_SESSION["apellido1"] = $_POST['apellido1'];
    } else {
    $_SESSION["apellido1"] = "Primer apellido: ".$_POST['apellido1'].$noPermitido;
    }
}

if (empty($_POST['apellido2'])) {//Si el campo del apellido2 está vacío se muestra mensaje de la variable $vacío
	$_SESSION["apellido2"]  = "Segundo apellido".$vacio;
}else{
if(preg_match($patronSoloLetras, $_POST['apellido2'])) {//Si el apellido2 tiene el patrón de caracteres permitido se le asigna el nombre a la variable de sesion. De lo contrario se muestra mensaje de la variable $noPermitido
	$_SESSION["apellido2"]  = $_POST['apellido2'];
    } else {
    $_SESSION["apellido2"]  = "Segundo apellido: ".$_POST['apellido2'].$noPermitido;
    }
}

if (empty($_POST['cedula'])) {//Si el campo de cedula está vacío se muestra mensaje de la variable $vacío
	$_SESSION["cedula"] = "Cédula".$vacio;
}else{
	if(preg_match($patronSoloNumeros, $_POST['cedula'])) {//Si la cédula tiene el patrón de caracteres permitido se le asigna el nombre a la variable de sesion. De lo contrario se muestra mensaje de la variable $noPermitido
	$_SESSION["cedula"] = $_POST['cedula'];
    }else {
    $_SESSION["cedula"] = "Cédula: ".$_POST['cedula'].$noPermitido;
    }
}


if (empty($_POST['fechaNac'])) {$_SESSION["fechaNac"] = $vacio;//Si el campo de fechaNac está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["fechaNac"] = $_POST['fechaNac'];}

$_SESSION["genero"] = $_POST['genero'];

//Variables vinculos prenatales-----------------------------------------------------------------------------------------------
if (empty($_POST['embarazo'])) {$_SESSION["embarazo"] = $vacio;//Si el campo de enbarazo está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["embarazo"] = $_POST['embarazo'];}

if (empty($_POST['gestacion'])) {$_SESSION["gestacion"] = $vacio;//Si el campo de gestacion está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["gestacion"] = $_POST['gestacion'];}

$_SESSION["controlPre"] = $_POST['controlPre'];

if (empty($_POST['alimentacion'])) {$_SESSION["alimentacion"] = $vacio;//Si el campo de alimentacion está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["alimentacion"] = $_POST['alimentacion'];}


if ($_POST['trauma'] == 'Sí presentó traumatismo en este embarazo') {
	$_SESSION["trauma"] = 'Sí presentó traumatismo en este embarazo. Especificamente: ';
	if (empty($_POST['traumaEsp'])) {$_SESSION["traumaEsp"] = $vacio;//Si el campo de traumaEsp está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["traumaEsp"] = $_POST['traumaEsp'];}
}else{
	$_SESSION["trauma"] = 'No presentó traumatismo en este embarazo';
	$_SESSION["traumaEsp"] = '';
}

	//Checkbox
if(isset($_POST['consumo1'])) {$_SESSION["consumo1"] = 'Consumió alcohol. ';}else{$_SESSION["consumo1"] = '';}
if(isset($_POST['consumo2'])) {$_SESSION["consumo2"] = 'Consumió cigarrillos. ';}else{$_SESSION["consumo2"] = '';}
if(isset($_POST['consumo3'])) {$_SESSION["consumo3"] = 'Consumió drogas. ';}else{$_SESSION["consumo3"] = '';}
if(isset($_POST['consumo4'])) {$_SESSION["consumo4"] = 'Consumió medicamentos o sustancias. Especificamente: ';
		if (empty($_POST['consumoEsp'])) {$_SESSION["consumoEsp"] = $vacio;//Si el campo de consumoEsp está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["consumoEsp"] = $_POST['consumoEsp'];}		
}else{$_SESSION["consumo4"] = 'No consumió medicamentos o sustancias. ';$_SESSION["consumoEsp"] = "";}


//Variables vinculos perinatales-----------------------------------------------------------------------------------------------
if ($_POST['labor'] == 'Alto riesgo') {
	$_SESSION["labor"] = 'Alto riesgo. Especificamente: ';
	if (empty($_POST['laborEsp'])) {$_SESSION["laborEsp"] = $vacio;//Si el campo de laborEsp está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["laborEsp"] = $_POST['laborEsp'];}
}elseif ($_POST['labor'] == 'Complicada') {
	$_SESSION["labor"] = 'Complicada. Especificamente: ';
	if (empty($_POST['laborEsp'])) {$_SESSION["laborEsp"] = $vacio;//Si el campo de laborEsp está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["laborEsp"] = $_POST['laborEsp'];}
}else{
	$_SESSION["labor"] = 'Normal';
	$_SESSION["laborEsp"] = '';
}

$_SESSION["llorar"] = $_POST['llorar'];
$_SESSION["cordonUmb"] = $_POST['cordonUmb'];
$_SESSION["problemaResp"] = $_POST['problemaResp'];

if (empty($_POST['pesoNacer'])) {$_SESSION["pesoNacer"] = $vacio;//Si el campo de pesoNacer está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["pesoNacer"] = $_POST['pesoNacer'];}

if (empty($_POST['tallaNacer'])) {$_SESSION["tallaNacer"] = $vacio;//Si el campo de tallaNacer está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["tallaNacer"] = $_POST['tallaNacer'];}

//Variables vinculos postnatales-----------------------------------------------------------------------------------------------
$_SESSION["mamar"] = $_POST['mamar'];


if (empty($_POST['edadMamar'])) {$_SESSION["edadMamar"] = $vacio;//Si el campo de edadMamar está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["edadMamar"] = $_POST['edadMamar'];}

if ($_POST['lactancia'] == 'No tuvo lactancia') {
	$_SESSION["lactancia"] = 'No tuvo período de lactancia. Especificamente: ';
	if (empty($_POST['lactanciaEsp'])) {$_SESSION["lactanciaEsp"] = $vacio; $_POST['lactanciaEsp'] = $vacio;//Si el campo de lactancia está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["lactanciaEsp"] = $_POST['lactanciaEsp'];}
}else{
	$_SESSION["lactancia"] = 'Sí tuvo período de lactancia'.'.Hasta los '.$_SESSION["edadMamar"].' meses.';
	$_SESSION["lactanciaEsp"] = "";
}

if ($_POST['biberon'] == 'Sí tomó biberón') {
	if (empty($_POST['edadBiberonDesde'])) {$_SESSION["edadBiberonDesde"] = $vacio;//Si el campo de edadBiberonDesde está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["edadBiberonDesde"] = $_POST['edadBiberonDesde'];}
	if (empty($_POST['edadBiberonHasta'])) {$_SESSION["edadBiberonHasta"] = $vacio;//Si el campo de edadBiberonHasta está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["edadBiberonHasta"] = $_POST['edadBiberonHasta'];}
	$_SESSION["biberon"] = 'Sí tomó biberón. Desde '.$_SESSION["edadBiberonDesde"]." meses hasta ".$_SESSION["edadBiberonHasta"]." meses";
	
}else{
	$_SESSION["biberon"] = 'No tomó biberón';
	$_SESSION["edadBiberonDesde"] = '';
	$_SESSION["edadBiberonHasta"] = '';
}

//Variables desarrollo infantil-----------------------------------------------------------------------------------------------

	//Variables Motor
if (empty($_POST['sostenerCabeza'])) {$_SESSION["sostenerCabeza"] = $vacio;//Si el campo de sostenerCabeza está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["sostenerCabeza"] = $_POST['sostenerCabeza'];}

if (empty($_POST['sostenerCabezaObs'])) {$_SESSION["sostenerCabezaObs"] = "";
}else{$_SESSION["sostenerCabezaObs"] = $_POST['sostenerCabezaObs'];}

if (empty($_POST['sentarseSolo'])) {$_SESSION["sentarseSolo"] = $vacio;//Si el campo de sentarseSolo está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["sentarseSolo"] = $_POST['sentarseSolo'];}

if (empty($_POST['sentarseSoloObs'])) {$_SESSION["sentarseSoloObs"] = "";
}else{$_SESSION["sentarseSoloObs"] = $_POST['sentarseSoloObs'];}

if (empty($_POST['ponersePie'])) {$_SESSION["ponersePie"] = $vacio;//Si el campo de ponersePie está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["ponersePie"] = $_POST['ponersePie'];}

if (empty($_POST['ponersePieObs'])) {$_SESSION["ponersePieObs"] = "";
}else{$_SESSION["ponersePieObs"] = $_POST['ponersePieObs'];}

if (empty($_POST['gatear'])) {$_SESSION["gatear"] = $vacio;//Si el campo de gatear está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["gatear"] = $_POST['gatear'];}

if (empty($_POST['gatearObs'])) {$_SESSION["gatearObs"] = "";
}else{$_SESSION["gatearObs"] = $_POST['gatearObs'];}

if (empty($_POST['caminar'])) {$_SESSION["caminar"] = $vacio;//Si el campo de caminar está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["caminar"] = $_POST['caminar'];}

if (empty($_POST['caminarObs'])) {$_SESSION["caminarObs"] = "";
}else{$_SESSION["caminarObs"] = $_POST['caminarObs'];}

if (empty($_POST['controlarEsfinter'])) {$_SESSION["controlarEsfinter"] = $vacio;//Si el campo de controlarEsfinter está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["controlarEsfinter"] = $_POST['controlarEsfinter'];}

if (empty($_POST['controlarEsfinterObs'])) {$_SESSION["controlarEsfinterObs"] = "";
}else{$_SESSION["controlarEsfinterObs"] = $_POST['controlarEsfinterObs'];}

	//Checkbox
if (!isset($_POST['lesion1']) and !isset($_POST['lesion2']) and !isset($_POST['lesion3'])) {
	$_SESSION["lesion1"] = "No tuvo lesiones en las extremidades superiores. ";
	$_SESSION["lesion2"] = "No tuvo lesiones en el tronco. ";
	$_SESSION["lesion3"] = "No tuvo lesiones en las extremidades inferiores. ";
}else{
	if(isset($_POST['lesion1'])) {$_SESSION["lesion1"] = 'En las extremidades superiores';}else{$_SESSION["lesion1"] = '';}
	if(isset($_POST['lesion2'])) {$_SESSION["lesion2"] = 'En el tronco';}else{$_SESSION["lesion2"] = '';}
	if(isset($_POST['lesion3'])) {$_SESSION["lesion3"] = 'En las extremidades inferiores';}else{$_SESSION["lesion3"] = '';}
}

	//Variables Lenguaje

if (empty($_POST['primeraVoc'])) {$_SESSION["primeraVoc"] = $vacio;//Si el campo de primeraVoc está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["primeraVoc"] = $_POST['primeraVoc'];}

if (empty($_POST['primeraVocObs'])) {$_SESSION["primeraVocObs"] = "";
}else{$_SESSION["primeraVocObs"] = $_POST['primeraVocObs'];}

if (empty($_POST['primerasPal'])) {$_SESSION["primerasPal"] = $vacio;//Si el campo de primerasPal está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["primerasPal"] = $_POST['primerasPal'];}

if (empty($_POST['primerasPalObs'])) {$_SESSION["primerasPalObs"] = "";
}else{$_SESSION["primerasPalObs"] = $_POST['primerasPalObs'];}

if (empty($_POST['primerasFra'])) {$_SESSION["primerasFra"] = $vacio;//Si el campo de primerasFra está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["primerasFra"] = $_POST['primerasFra'];}

if (empty($_POST['primerasFraObs'])) {$_SESSION["primerasFraObs"] = "";
}else{$_SESSION["primerasFraObs"] = $_POST['primerasFraObs'];}

if (empty($_POST['problemasLeng'])) {$_SESSION["problemasLeng"] = $vacio;//Si el campo de problemasLeng está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["problemasLeng"] = $_POST['problemasLeng'];}

if (empty($_POST['problemasLengObs'])) {$_SESSION["problemasLengObs"] = "";
}else{$_SESSION["problemasLengObs"] = $_POST['problemasLengObs'];}

if (empty($_POST['primerosDientes'])) {$_SESSION["primerosDientes"] = $vacio;//Si el campo de primerosDientes está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["primerosDientes"] = $_POST['primerosDientes'];}

if (empty($_POST['primerosDientesObs'])) {$_SESSION["primerosDientesObs"] = "";
}else{$_SESSION["primerosDientesObs"] = $_POST['primerosDientesObs'];}


//Variables socio afectivo-----------------------------------------------------------------------------------------------
	
	//El niño(a)
	//Checkbox
if(isset($_POST['socioafectivo1'])) {$_SESSION["socioafectivo1"] = 'Duerme tranquilo. ';}else{$_SESSION["socioafectivo1"] = '';}
if(isset($_POST['socioafectivo2'])) {$_SESSION["socioafectivo2"] = 'Sufre de pesadillas. ';}else{$_SESSION["socioafectivo2"] = '';}
if(isset($_POST['socioafectivo3'])) {$_SESSION["socioafectivo3"] = 'Tiene problemas respiratorios. ';}else{$_SESSION["socioafectivo3"] = '';}
if(isset($_POST['socioafectivo4'])) {$_SESSION["socioafectivo4"] = 'Se orina en la cama. ';}else{$_SESSION["socioafectivo4"] = '';}

	//El niño(a) es
	//Checkbox
if(isset($_POST['socioafectivo5'])) {$_SESSION["socioafectivo5"] = 'Es cariñoso(a). ';}else{$_SESSION["socioafectivo5"] = '';}
if(isset($_POST['socioafectivo6'])) {$_SESSION["socioafectivo6"] = 'Es tímido(a). ';}else{$_SESSION["socioafectivo6"] = '';}
if(isset($_POST['socioafectivo7'])) {$_SESSION["socioafectivo7"] = 'Es nervioso(a). ';}else{$_SESSION["socioafectivo7"] = '';}
if(isset($_POST['socioafectivo8'])) {$_SESSION["socioafectivo8"] = 'Es peleador(a). ';}else{$_SESSION["socioafectivo8"] = '';}
if(isset($_POST['socioafectivo9'])) {$_SESSION["socioafectivo9"] = 'Es temeroso(a). ';}else{$_SESSION["socioafectivo9"] = '';}
if(isset($_POST['socioafectivo10'])) {$_SESSION["socioafectivo10"] = 'Es activo(a). ';}else{$_SESSION["socioafectivo10"] = '';}
if(isset($_POST['socioafectivo11'])) {$_SESSION["socioafectivo11"] = 'Es pasivo(a). ';}else{$_SESSION["socioafectivo11"] = '';}
if(isset($_POST['socioafectivo12'])) {$_SESSION["socioafectivo12"] = 'Es alegre. ';}else{$_SESSION["socioafectivo12"] = '';}
if(isset($_POST['socioafectivo13'])) {$_SESSION["socioafectivo13"] = 'Es triste. ';}else{$_SESSION["socioafectivo13"] = '';}
if(isset($_POST['socioafectivo14'])) {$_SESSION["socioafectivo14"] = 'Es disperso(a). ';}else{$_SESSION["socioafectivo14"] = '';}
if(isset($_POST['socioafectivo15'])) {$_SESSION["socioafectivo15"] = 'Es comunicativo(a). ';}else{$_SESSION["socioafectivo15"] = '';}
if(isset($_POST['socioafectivo16'])) {$_SESSION["socioafectivo16"] = 'Es amistoso(a). ';}else{$_SESSION["socioafectivo16"] = '';}
if(isset($_POST['socioafectivo17'])) {$_SESSION["socioafectivo17"] = 'Es obediente. ';}else{$_SESSION["socioafectivo17"] = '';}
if(isset($_POST['socioafectivo18'])) {$_SESSION["socioafectivo18"] = 'Llora con frecuencia. ';}else{$_SESSION["socioafectivo18"] = '';}

	//Temores
	//Checkbox
if(isset($_POST['socioafectivo19'])) {$_SESSION["socioafectivo19"] = 'Ruidos. ';}else{$_SESSION["socioafectivo19"] = '';}
if(isset($_POST['socioafectivo20'])) {$_SESSION["socioafectivo20"] = 'Oscuridad. ';}else{$_SESSION["socioafectivo20"] = '';}
if(isset($_POST['socioafectivo21'])) {$_SESSION["socioafectivo21"] = 'Alturas. ';}else{$_SESSION["socioafectivo21"] = '';}
if(isset($_POST['socioafectivo22'])) {$_SESSION["socioafectivo22"] = 'Soledad. ';}else{$_SESSION["socioafectivo22"] = '';}
if(isset($_POST['socioafectivo23'])) {$_SESSION["socioafectivo23"] = 'Personas. ';}else{$_SESSION["socioafectivo23"] = '';}
if(isset($_POST['socioafectivo24'])) {$_SESSION["socioafectivo24"] = 'Animales. ';}else{$_SESSION["socioafectivo24"] = '';}

if(isset($_POST['socioafectivo25'])) {$_SESSION["socioafectivo25"] = 'Otros. Especificamente: ';
		if (empty($_POST['temorEsp'])) {$_SESSION["temorEsp"] = $vacio;//Si el campo de temorEsp está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["temorEsp"] = $_POST['temorEsp'];}		
}else{$_SESSION["socioafectivo25"] = '';$_SESSION["temorEsp"] = "";}

$_SESSION["prefiereJugar"] = $_POST['prefiereJugar'];

if (empty($_POST['juegosPre'])) {$_SESSION["juegosPre"] = $vacio;//Si el campo de juegosPre está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["juegosPre"] = $_POST['juegosPre'];}

if (empty($_POST['horasTV'])) {$_SESSION["horasTV"] = $vacio;//Si el campo de horasTV está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["horasTV"] = $_POST['horasTV'];}

if (empty($_POST['programasTV'])) {$_SESSION["programasTV"] = $vacio;//Si el campo de programasTV está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["programasTV"] = $_POST['programasTV'];}

if (empty($_POST['actividadesTL'])) {$_SESSION["actividadesTL"] = $vacio;//Si el campo de actividadesTL está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["actividadesTL"] = $_POST['actividadesTL'];}

	//Relación Padre-Madre de familia o Encargado Legal
if (empty($_POST['adultosRel'])) {$_SESSION["adultosRel"] = $vacio;//Si el campo de adultosRel está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["adultosRel"] = $_POST['adultosRel'];}

if (empty($_POST['vecindarioRel'])) {$_SESSION["vecindarioRel"] = $vacio;//Si el campo de vecindarioRel está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["vecindarioRel"] = $_POST['vecindarioRel'];}

if (empty($_POST['discutirRel'])) {$_SESSION["discutirRel"] = $vacio;//Si el campo de discutirRel está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["discutirRel"] = $_POST['discutirRel'];}

if (empty($_POST['normasRel'])) {$_SESSION["normasRel"] = $vacio;//Si el campo de normasRel está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["normasRel"] = $_POST['normasRel'];}

if (empty($_POST['opinionRel'])) {$_SESSION["opinionRel"] = $vacio;//Si el campo de opinionRel está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["opinionRel"] = $_POST['opinionRel'];}

//Variables salud-----------------------------------------------------------------------------------------------
if ($_POST['accidentes'] == 'Sí ha sufrido accidentes') {
	$_SESSION["accidentes"] = 'Sí ha sufrido accidentes. Especifique: ';
			if (empty($_POST['saludPQ'])) {$_SESSION["saludPQ"] = $vacio;//Si el campo de saludPQ está vacío se muestra mensaje de la variable $vacío
			}else{$_SESSION["saludPQ"] = $_POST['saludPQ'];}
}else{
	$_SESSION["accidentes"] = 'No ha sufrido accidentes';
	$_SESSION["saludPQ"] = '';
}

	//Checkbox
if(isset($_POST['revisionMed'])) {$_SESSION["revisionMed"] = '<li>Fue a revisión médica</li>';}else{$_SESSION["revisionMed"] = '';}
if(isset($_POST['hospital'])) {$_SESSION["hospital"] = '<li>Se hospitalizó</li>';}else{$_SESSION["hospital"] = '';}

if (empty($_POST['medicamentosDia'])) {$_SESSION["medicamentosDia"] = $vacio;//Si el campo de medicamentosDia está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["medicamentosDia"] = $_POST['medicamentosDia'];}

if ($_POST['medicamentos'] == 'Sí toma medicamentos antes de ir a la institución') {
	$_SESSION["medicamentos"] = 'Sí toma medicamentos antes de ir a la institución: '.$_SESSION["medicamentosDia"]." veces al día. Especificamente: ";
	if (empty($_POST['medicamentosCuales'])) {$_SESSION["medicamentosCuales"] = $vacio;//Si el campo de medicamentosCuales está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["medicamentosCuales"] = $_POST['medicamentosCuales'];}
}else{
	$_SESSION["medicamentos"] = 'No toma medicamentos antes de ir a la institución';
	$_SESSION["medicamentosCuales"] = '';
}

if ($_POST['crecimiento'] == 'Sí ha tenido control de crecimiento') {
	$_SESSION["crecimiento"] = 'Sí ha tenido control de crecimiento. Lugar: ';
	if (empty($_POST['crecimientoLugar'])) {$_SESSION["crecimientoLugar"] = $vacio;//Si el campo de crecimientoLugar está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["crecimientoLugar"] = $_POST['crecimientoLugar'];}
}else{
	$_SESSION["crecimiento"] = 'No ha tenido control de crecimiento';
	$_SESSION["crecimientoLugar"] = '';
}

if ($_POST['vacunas'] == 'Sí tiene control de vacunas') {
	$_SESSION["vacunas"] = 'Sí tiene control de vacunas. Lugar: ';
	if (empty($_POST['vacunasLugar'])) {$_SESSION["vacunasLugar"] = $vacio;//Si el campo de vacunasLugar está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["vacunasLugar"] = $_POST['vacunasLugar'];}
}else{
	$_SESSION["vacunas"] = 'No tiene control de vacunas';
	$_SESSION["vacunasLugar"] = '';
}

if ($_POST['bucal'] == 'Sí tiene tratamiento bucal') {
	$_SESSION["bucal"] = 'Sí tiene tratamiento bucal. Lugar: ';
	if (empty($_POST['bucalLugar'])) {$_SESSION["bucalLugar"] = $vacio;//Si el campo de bucalLugar está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["bucalLugar"] = $_POST['bucalLugar'];}
}else{
	$_SESSION["bucal"] = 'No tiene tratamiento bucal';
	$_SESSION["bucalLugar"] = '';
}

if ($_POST['laboratorio'] == 'Sí le han hecho examenes de laboratorio') {
	$_SESSION["laboratorio"] = 'Sí le han hecho examenes de laboratorio. Lugar: ';
	if (empty($_POST['laboratorioLugar'])) {$_SESSION["laboratorioLugar"] = $vacio;//Si el campo de laboratorioLugar está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["laboratorioLugar"] = $_POST['laboratorioLugar'];}
}else{
	$_SESSION["laboratorio"] = 'No le han hecho examenes de laboratorio';
	$_SESSION["laboratorioLugar"] = '';
}

if ($_POST['tratMedico'] == 'Sí ha recibido tratamiento médico') {
	$_SESSION["tratMedico"] = 'Sí ha recibido tratamiento médico. Lugar: ';
	if (empty($_POST['tratMedicoLugar'])) {$_SESSION["tratMedicoLugar"] = $vacio;//Si el campo de tratMedicoLugar está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["tratMedicoLugar"] = $_POST['tratMedicoLugar'];}
}else{
	$_SESSION["tratMedico"] = 'No ha recibido tratamiento médico';
	$_SESSION["tratMedicoLugar"] = '';
}

if (empty($_POST['habitosAlim'])) {$_SESSION["habitosAlim"] = $vacio;//Si el campo de habitosAlim está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["habitosAlim"] = $_POST['habitosAlim'];}

	//Discapacidad
if(isset($_POST['visual'])) {$_SESSION["visual"] = 'Tiene discapacidad visual. Lugar: ';
		if (empty($_POST['visualEsp'])) {$_SESSION["visualEsp"] = $vacio;//Si el campo de visualEsp está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["visualEsp"] = $_POST['visualEsp'];}		
}else{$_SESSION["visual"] = 'No tiene discapacidad visual. ';$_SESSION["visualEsp"] = "";}

if(isset($_POST['auditiva'])) {$_SESSION["auditiva"] = 'Tiene discapacidad auditiva. Lugar: ';
		if (empty($_POST['auditivaEsp'])) {$$_SESSION["auditivaEsp"] = $vacio;//Si el campo de auditivaEsp está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["auditivaEsp"] = $_POST['auditivaEsp'];}		
}else{$_SESSION["auditiva"] = 'No tiene discapacidad auditiva. ';$_SESSION["auditivaEsp"] = "";}

if(isset($_POST['motora'])) {$_SESSION["motora"] = 'Tiene discapacidad motora. Lugar:  ';
		if (empty($_POST['motoraEsp'])) {$_SESSION["motoraEsp"] = $vacio;//Si el campo de motoraEsp está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["motoraEsp"] = $_POST['motoraEsp'];}		
}else{$_SESSION["motora"] = 'No tiene discapacidad motora. ';$_SESSION["motoraEsp"] = "";}

if(isset($_POST['lenguaje'])) {$_SESSION["lenguaje"] = 'Tiene discapacidad de lenguaje. Lugar:  ';
		if (empty($_POST['lenguajeEsp'])) {$_SESSION["lenguajeEsp"] = $vacio;//Si el campo de lenguajeEsp está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["lenguajeEsp"] = $_POST['lenguajeEsp'];}
}else{$_SESSION["lenguaje"] = 'No tiene discapacidad de lenguaje. ';$_SESSION["lenguajeEsp"] = "";}

if(isset($_POST['emocional'])) {$_SESSION["emocional"] = 'Tiene trastorno emocional. Lugar:  ';
		if (empty($_POST['emocionalEsp'])) {$_SESSION["emocionalEsp"] = $vacio;//Si el campo de emocionalEsp está vacío se muestra mensaje de la variable $vacío
		}else{$_SESSION["emocionalEsp"] = $_POST['emocionalEsp'];}
}else{$_SESSION["emocional"] = 'No tiene trastorno emocional. ';$_SESSION["emocionalEsp"] = "";}

if (empty($_POST['obsGenerales'])) {$_SESSION["obsGenerales"] = $vacio;//Si el campo de obsGenerales está vacío se muestra mensaje de la variable $vacío
}else{$_SESSION["obsGenerales"] = $_POST['obsGenerales'];}


?>