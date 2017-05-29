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

<header style="margin-top: 120px;" >
  <section class="wrapper">
    <nav >
        <ul>
          <li><a href="#Info">Información niño(a)</a></li>
          <li><a href="#Pre">Vinculos prenatales</a></li>
          <li><a href="#Peri">Vinculos perinatales</a></li>
          <li><a href="#Post">Vinculos postnatales</a></li>
          <li><a href="#Desa">Desarrollo infantil</a></li>
          <li><a href="#Socio">Socio afectivo</a></li>
          <li><a href="#Salud">Salud</a></li>
          <li><a href="#boton">Ir a Revisar</a></li>
        </ul>
    </nav>
  </section>
</header>
<div style="display:block;">
<img src="img/logoMEP.png" class="logo" style=" float: left;">
<form action='logOut.php' method='post' >
    <input style="padding: 10px; float: right; margin-right: 50px; margin-top: 51px;" type="submit" value="Salir" ><br><br>
</form>
<form action='menu.php' method='post' >
    <input style="padding: 10px; float: right; margin-right: 10px; margin-top: 15px;" type="submit" value="Menu" ><br><br>
</form>
<?php echo '<h3 style="float: right; margin-right: 15px; color:#e6b800;">Bienvenido(a) '.$_SESSION["usuario"].'</h3>'; ?>
</div>
<br><br>



<h1 id="titulo">Cuestionario aplicable a encargados legales de niños(as) <br> que asisten a educación preescolar</h1>
<form action='logica.php' method='post' id="Form1" >
  <fieldset>
    <legend id="Info"><h2>Información niño(a)</h2></legend>
    <br>
    <label>Nombre</label>
    <label title="Por favor digite sólo letras">*<label>
    <input type="text"  name="nombre" id="nombre" placeholder="Nombre" required>    
    <label>Primer apellido</label>
    <label title="Por favor digite sólo letras">*<label>
    <input type="text" name="apellido1" id="apellido1" placeholder="Primer apellido" required>
    <label>Segundo apellido</label>
    <label title="Por favor digite sólo letras">*<label>
    <input type="text" name="apellido2" id="apellido2" placeholder="Segundo apellido" required>    
    <br><br>
    <label>Cédula</label>
    <label title="Por favor digite sólo números. 9 dígitos">*<label>
    <input type="text"  name="cedula" id="cedula" maxlength="9" placeholder="Cédula" required>  
    <label>Fecha de nacimiento</label>
    <input type="date" name="fechaNac" id="fechaNac" data-date-format="DD MMMM YYYY" required>
    <label>Género</label>
    <select name="genero">
      <option value="Masculino">Masculino</option>
      <option value="Femenino">Femenino</option>
      <option value="Otro">Otro</option>
    </select>
    <br><br>    
  </fieldset>
  <br>

  <fieldset>
    <legend id="Pre"><h2>Vinculos prenatales</h2></legend>
    <br>
    <label>Número de embarazo</label>
    <label title="Por favor elija un número">*<label>
    <input type="number" min="1" max="20" name="embarazo" id="embarazo" required>
    <label>Semanas de gestación</label>
    <label title="Por favor elija un número">*<label>
    <input type="number" min="1" max="40" name="gestacion"  id="gestacion" required>
    <label>Control prenatal</label>
    <select name="controlPre">
      <option value="Sí tuvo control prenatal">Sí</option>
      <option value="No tuvo control prenatal">No</option>
    </select>
    <br><br>
    <label>Tipo de alimentación</label>
    <br><br>
    <label title="Por favor digite el tipo de alimentación del niño(a)">*<label>
    <input type="text"  name="alimentacion" id="alimentacion" placeholder="Especifique" size="120" required>
    <br><br>
    <label>Presentó traumatismo en este embarazo</label>
    <select name="trauma">
      <option value="Sí presentó traumatismo en este embarazo">Sí</option>
      <option value="No presentó traumatismo en este embarazo" selected>No</option>
    </select>
    <br><br>
    <label title="Si presentó traumatismo especifique">*<label>
    <input type="text"  name="traumaEsp" id="traumaEsp" placeholder="Especifique" size="120">
    <br><br>
    <label>Durante el embarazo consumió: </label>
    Alcohol  <input type="checkbox" name="consumo1" value="alcohol">
    Cigarrillos  <input type="checkbox" name="consumo2" value="cigarrillos"> 
    Drogas  <input type="checkbox" name="consumo3" value="drogas"> 
    Medicamentos o sustancias  <input type="checkbox" name="consumo4" value="medicamentos"> 
    <br><br>
    <label title="Si consumió medicamentos o sustancias especifique">*<label>
    <input type="text" name="consumoEsp" id="consumoEsp" placeholder="Especifique" size="120">
    <br><br>
  </fieldset>

  <br>

  <fieldset>
    <legend id="Peri"><h2>Vinculos perinatales</h2></legend>
    <br>
     <label>La labor de parto fue</label>
      <select name="labor">
      <option value="Normal">Normal</option>
      <option value="Complicada">Complicada</option>
      <option value="Alto riesgo">Alto riesgo</option>
    </select>
    <br>
    <br>
    <label title="Si la labor de parto fue de alto riesgo especifique">*<label>
    <input type="text"  name="laborEsp" id="laborEsp" placeholder="Especifique" size="120">
    <br>
    <br>
    <label>Lloró al nacer</label>
    <select name="llorar">
      <option value="Sí lloró al nacer">Sí</option>
      <option value="No lloró al nacer">No</option>
    </select>
    <label>Cordón umbilical arrollado</label>
    <select name="cordonUmb">
      <option value="Sí tuvo el cordón umbilical arrollado">Sí</option>
      <option value="No tuvo el cordón umbilical arrollado" selected>No</option>
    </select>
    <label>Problemas respiratorios</label>
    <select name="problemaResp">
      <option value="Sí tuvo problemas respiratorios">Sí</option>
      <option value="No tuvo problemas respiratorios" selected>No</option>
    </select>
    <br><br>
    <label>Peso al nacer</label>
    <label title="Por favor elija un número">*<label>
    <input type="number" min="100" max="5000" name="pesoNacer"  id="peroNacer" required>
    <label>gramos</label>
    <br><br>
    <label>Talla al nacer</label>
    <label title="Por favor elija un número">*<label>
    <input type="number" min="20" max="80" name="tallaNacer"  id="tallaNacer" required>
    <label>centímetros</label>
    <br><br>
  </fieldset>

  <br>

  <fieldset>
    <legend id="Post"><h2>Vinculos post natales</h2></legend>
    <br>
    <label>El niño(a) tuvo dificultades para succionar (mamar)</label>
    <select name="mamar">
      <option value="Sí tuvo dificultades para succionar (mamar)">Sí</option>
      <option value="No tuvo dificultades para succionar (mamar)" selected>No</option>
    </select>
    <br><br>
    <label>Tuvo período de lactancia</label>
    <select name="lactancia">
      <option value="Sí tuvo lactancia">Sí</option>
      <option value="No tuvo lactancia">No</option>
    </select>
    <br><br>
    <label title="Si no tuvo período de lactancia especifique">*<label>
    <input type="text"  name="lactanciaEsp" id="lactanciaEsp" placeholder="Especifique" size="120">
    <br><br>
    <label>Hasta qué edad mamó</label>
    <label title="Por favor elija un número(edad en meses)">*<label>
    <input type="number" min="1" max="72" name="edadMamar"  id="edadMamar" required>
    <label>meses</label>
    <br><br>
    <label>Biberón</label>
    <select name="biberon">
      <option value="Sí tomó biberón">Sí</option>
      <option value="No tomó biberón">No</option>
    </select>
    <label>Desde</label>
    <label title="Por favor elija un número(edad en meses)">*<label>
    <input type="number" min="1" max="72" name="edadBiberonDesde"  id="edadBiberonDesde" required>
    <label>meses</label>
    <label>- Hasta</label>
    <label title="Por favor elija un número(edad en meses)">*<label>
    <input type="number" min="1" max="72" name="edadBiberonHasta"  id="edadBiberonHasta" required>
    <label>meses</label>
    <br><br>
  </fieldset>

  <br>

  <fieldset>
    <legend id="Desa"><h2>Desarrollo infantil</h2></legend>
    <br>
      <fieldset class="fieldsetInterno">

      <legend><h3>Motor</h3></legend>
      <br>
      <h4>A qué edad:</h4>

        <ul>
        <li>
        <label>Sostuvo la cabeza</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="1" max="12" name="sostenerCabeza"  id="sostenerCabeza" required>
        <label>meses</label> 
        <br><br>
        <label title="Epecifique">*<label>
        <input type="text" name="sostenerCabezaObs" id="sostenerCabezaObs" placeholder="Observaciones" size="120" >
        <br><br>
        </li>
        <li>
        <label>Se sentó sólo</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="1" max="12" name="sentarseSolo"  id="sentarseSolo" >
        <label>meses</label>   
        <br><br>
        <label title="Epecifique">*<label>
        <input type="text"  name="sentarseSoloObs" id="sentarseSoloObs" placeholder="Observaciones" size="120" >
        <br><br>
        </li>
        <li>
        <label>Se puso de pie solo(a)</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="6" max="18" name="ponersePie"  id="ponersePie" >
        <label>meses</label> 
        <br><br>          
        <label title="Epecifique">*<label>
        <input type="text"  name="ponersePieObs" id="ponersePieObs" placeholder="Observaciones" size="120" >
        <br><br>
        </li>
        <li>
        <label>Gateó</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="6" max="18" name="gatear"  id="gatear" required>
        <label>meses</label> 
        <br><br>     
        <label title="Epecifique">*<label>
        <input type="text"  name="gatearObs" id="gatearObs" placeholder="Observaciones" size="120" >
        <br><br>  
        </li> 
        <li>
        <label>Caminó</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="6" max="20" name="caminar"  id="caminar" required>
        <label>meses</label> 
        <br><br>     
        <label title="Epecifique">*<label>
        <input type="text"  name="caminarObs" id="caminarObs" placeholder="Observaciones" size="120" >
        <br><br>  
        </li> 
        <li>
        <label>Controló esfínteres</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="1" max="72" name="controlarEsfinter"  id="controlarEsfinter" required>
        <label>meses</label>
        <br><br>
        <label title="Epecifique">*<label>
        <input type="text"  name="controlarEsfinterObs" id="controlarEsfinterObs" placeholder="Observaciones" size="120" >
        <br><br>  
        </li>
        <li>
        <label>Ocurrió alguna lesión: </label>
        <input type="checkbox" name="lesion1" value="extremidades superiores">Extremidades superiores
        <input type="checkbox" name="lesion2" value="tronco"> Tronco
        <input type="checkbox" name="lesion3" value="extremidades inferiores"> Extremidades inferiores
        <br><br>
        </li>
        </ul> 
      </fieldset>

      <br>

      <fieldset class="fieldsetInterno">
      <br>
      <legend><h3>Lenguaje</h3></legend>
        <h4>A qué edad:</h4>
        <br>
        <ul>
        <li>
        <label>Hizo las primeras vocalizaciones</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="1" max="72" name="primeraVoc"  id="primeraVoc" required>
        <label>meses</label> 
        <br><br>
        <label title="Epecifique">*<label>
        <input type="text"  name="primeraVocObs" id="primeraVocObs" placeholder="Observaciones" size="120" >
        <br><br>
        </li>
        <li>
        <label>Dijo las primeras palabras</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="1" max="72" name="primerasPal"  id="primerasPal" required>
        <label>meses</label>   
        <br><br>
        <label title="Epecifique">*<label>
        <input type="text"  name="primerasPalObs" id="primerasPalObs" placeholder="Observaciones" size="120" >
        <br><br>
        </li>
        <li>
        <label>Dijo las primeras frases</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="1" max="72" name="primerasFra"  id="primerasFra" required>
        <label>meses</label> 
        <br><br>           
        <label title="Epecifique">*<label>
        <input type="text"  name="primerasFraObs" id="primerasFraObs" placeholder="Observaciones" size="120" >
        <br><br>
        </li>
        <li>
        <label>Problemas de languaje</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="1" max="72" name="problemasLeng"  id="problemasLeng" required>
        <label>meses</label> 
        <br><br>      
        <label title="Epecifique">*<label>
        <input type="text"  name="problemasLengObs" id="problemasLengObs" placeholder="Observaciones" size="120" >
        <br><br>  
        </li> 
        <li>
        <label>Salieron los primeros dientes</label>
        <label title="Por favor elija un número(edad en meses)">*<label>
        <input type="number" min="1" max="72" name="primerosDientes"  id="primerosDientes" required>
        <label>meses</label> 
        <br><br>      
        <label title="Epecifique">*<label>
        <input type="text" name="primerosDientesObs" id="primerosDientesObs" placeholder="Observaciones" size="120" >
        <br><br>  
        </li> 
        </ul>
      </fieldset>

      <br>

  </fieldset>

  <br>

  <fieldset>
  <legend id="Socio"><h2>Socio afectivo</h2></legend>
      <br>
      <h4>Su niño(a)</h4>
      <br>
          Duerme tranquilo  <input type="checkbox" name="socioafectivo1" value="duerme tranquilo">
          Sufre de pesadillas  <input type="checkbox" name="socioafectivo2" value="sufre de pesadillas"> 
          Problemas respiratorios  <input type="checkbox" name="socioafectivo3" value="problemas respiratorios"> 
          Se orina en la cama  <input type="checkbox" name="socioafectivo4" value="se orina en la cama"> 
          <br><br>
      <h4>Su niño(a) es</h4>
      <br>
          Cariñoso  <input type="checkbox" name="socioafectivo5" value="cariñoso">
          Tímido  <input type="checkbox" name="socioafectivo6" value="tímido">
          Nervioso  <input type="checkbox" name="socioafectivo7" value="nervioso">
          Peleador  <input type="checkbox" name="socioafectivo8" value="peleador">
          Temeroso  <input type="checkbox" name="socioafectivo9" value="temeroso">
          Activo  <input type="checkbox" name="socioafectivo10" value="activo">
          Pasivo  <input type="checkbox" name="socioafectivo11" value="pasivo">
          Alegre  <input type="checkbox" name="socioafectivo12" value="alegre">
          Triste  <input type="checkbox" name="socioafectivo13" value="triste">
          Disperso  <input type="checkbox" name="socioafectivo14" value="disperso">
          Comunicativo  <input type="checkbox" name="socioafectivo15" value="comunicativo">
          Amistoso  <input type="checkbox" name="socioafectivo16" value="amistoso">
          Obediente  <input type="checkbox" name="socioafectivo17" value="obediente">
          <br>
          Llora con frecuencia  <input type="checkbox" name="socioafectivo18" value="llora con frecuencia">
          <br> <br>
      <h4>Manifiesta temor a</h4>
      <br>
          Ruidos  <input type="checkbox" name="socioafectivo19" value="ruidos">
          Oscuridad  <input type="checkbox" name="socioafectivo20" value="oscuridad">
          Alturas  <input type="checkbox" name="socioafectivo21" value="alturas">
          Soledad  <input type="checkbox" name="socioafectivo22" value="soledad">
          Personas  <input type="checkbox" name="socioafectivo23" value="personas">
          Animales  <input type="checkbox" name="socioafectivo24" value="animales">
          Otras  <input type="checkbox" name="socioafectivo25" id="socioafectivo25" value="otros"> 
          <br><br>
          <label title="Si manifiesta temor a otras cosas especifique">*<label>
          <input type="text"  name="temorEsp" id="temorEsp" placeholder="Especifique" size="120">
          <br><br>
           <label>Prefiere jugar</label>
          <select name="prefiereJugar">
          <option value="Prefiere jugar solo">Solo</option>
          <option value="Prefiere jugar en grupo">En grupo</option>
          </select>
          <br><br>
          <label>Juegos preferidos</label>
          <br><br>
          <label title="Enumerar los juegos preferidos del niño(a)">*<label>
          <input type="text" name="juegosPre" id="juegosPre" placeholder="Especifique" size="120" required>
          <br><br>
          <label>Horas al día de TV</label>
          <label title="Por favor elija un número">*<label>
          <input type="number" min="1" max="12" name="horasTV"  id="horasTV" required>
          <br><br>
          <label>Programas TV</label>
          <br><br>
          <label title="Enumerar los programas preferidos del niño(a)">*<label>
          <input type="text" name="programasTV" id="programasTV" placeholder="Especifique" size="120" required>
          <br><br>
          <label>Actividades en tiempo libre</label>
          <br><br>
          <label title="Enumerar las actividades preferidas del niño(a) en su tiempo libre">*<label>
          <input type="text" name="actividadesTL" id="actividadesTL" placeholder="Especifique" size="120" required>
          <br><br>
          <h4>Relación Padre-Madre de familia o Encargado Legal</h4>
          <br>
          <label>Relación entre adultos que viven en el hogar y el niño(a)</label>
          <br><br>
          <label title="Especifique">*<label>
          <input type="text" name="adultosRel" id="adultosRel" placeholder="Especifique" size="120" required>
          <br><br>
          <label>Relación entre amigos del vecindario y el niño(a)</label>
          <br><br>
          <label title="Especifique">*<label>
          <input type="text"  name="vecindarioRel" id="vecindarioRel" placeholder="Especifique" size="120" required>
          <br><br>
          <label>Cuando su hijo(a) discute con personas (hermanos(as), amigos, vecinos, etc) cómo interviene usted?</label>
          <br><br>
          <label title="Especifique">*<label>
          <input type="text" name="discutirRel" id="discutirRel" placeholder="Especifique" size="120" required>
          <br><br>
          <label>Qué normas y cómo las establece para el comportamiento de su hijo(a)</label>
          <br><br>
          <label title="Especifique">*<label>
          <input type="text"  name="normasRel" id="normasRel" placeholder="Especifique" size="120" required>
          <br><br>
          <label>Qué opina la madre y el padre del infante? Qué concepto tiene de él o ella?</label>
          <br><br>
          <label title="Especifique">*<label>
          <input type="text" name="opinionRel" id="opinionRel" placeholder="Especifique" size="120" required>
          <br><br>

  </fieldset>

<br>

  <fieldset>
  <legend id="Salud"><h2>Salud</h2></legend>
  <br>
  <label>Ha sufrido accidentes</label>
    <select name="accidentes">
        <option value="Sí ha sufrido accidentes">Sí</option>
        <option value="No ha sufrido accidentes" selected>No</option>
    </select >
    <br><br>
    Fue a revisión médica  <input type="checkbox" name="revisionMed" value="Fue a revisión médica">
    Fue hospitalizado  <input type="checkbox" name="hospital" value="Se hospitalizó"> 
    <br><br>
    <label>Por qué?</label>
          <br><br>
          <label title="Si fue a revisión médica o fue hospitalizado especifique">*<label>
          <input type="text"  name="saludPQ" id="saludPQ" placeholder="Especifique" size="120">
          <br><br>
    <label>Toma medicamentos antes de ir a la institución</label>
    <select name="medicamentos">
        <option value="Sí toma medicamentos antes de ir a la institución">Sí</option>
        <option value="No toma medicamentos antes de ir a la institución" selected>No</option>
    </select>
   <br><br>
   <label>Cuáles?</label>
          <br><br>
          <label title="Si toma medicamentos antes de ir a la institución especifique">*<label>
          <input type="text"  name="medicamentosCuales" id="medicamentosCuales" placeholder="Especifique" size="120">
          <br><br>
  <label>Cuántas veces al día?</label>
    <label title="Por favor elija un número">*<label>
    <input type="number" min="1" max="10" name="medicamentosDia"  id="medicamentosDia"> 
    <br><br>
    <label>Control de crecimiento</label>
    <select name="crecimiento">
        <option value="Sí ha tenido control de crecimiento">Sí</option>
        <option value="No ha tenido control de crecimiento" selected>No</option>
    </select><br><br>
          <label title="Especifique el lugar en el que fue atendido el niño(a)">*<label>
          <input type="text"   name="crecimientoLugar" id="crecimientoLugar" placeholder="Especifique el lugar" size="50">
    <br><br>
    <label>Control de vacunas</label>
    <select name="vacunas">
        <option value="Sí tiene control de vacunas">Sí</option>
        <option value="No tiene control de vacunas" selected>No</option>
    </select><br><br>
          <label title="Especifique el lugar en el que fue atendido el niño(a)">*<label>
          <input type="text"   name="vacunasLugar" id="vacunasLugar" placeholder="Especifique el lugar" size="50">
    <br><br>
    <label>Tratamiento bucal</label>
    <select name="bucal">
        <option value="Sí tiene tratamiento bucal">Sí</option>
        <option value="No tiene tratamiento bucal" selected>No</option>
    </select><br><br>
          <label title="Especifique el lugar en el que fue atendido el niño(a)">*<label>
          <input type="text"  name="bucalLugar" id="bucalLugar" placeholder="Especifique el lugar" size="50">
    <br><br>
    <label>Exámenes de laboratorio</label>
    <select name="laboratorio">  
        <option value="Sí le han hecho examenes de laboratorio">Sí</option>
        <option value="No le han hecho examenes de laboratorio" selected>No</option>
    </select><br><br>
          <label title="Especifique el lugar en el que fue atendido el niño(a)">*<label>
          <input type="text" name="laboratorioLugar" id="laboratorioLugar" placeholder="Especifique el lugar" size="50">
    <br><br>
    <label>Tratamiento médico</label>
    <select name="tratMedico">
        <option value="Sí ha recibido tratamiento médico">Sí</option>
        <option value="No ha recibido tratamiento médico" selected>No</option>
    </select><br><br>
          <label title="Especifique el lugar en el que fue atendido el niño(a)">*<label>
          <input type="text"   name="tratMedicoLugar" id="tratMedicoLugar" placeholder="Especifique el lugar" size="50">
    <br><br>
    <label>Cómo han sido los hábitos alimenticios del niño(a)?</label><br><br>
          <label title="Especifique los hábitos alimenticios del niño(a)">*<label>
          <input type="text"  name="habitosAlim" id="habitosAlim" placeholder="Especifique" size="120" required>
    <br><br>
    <h4>Presenta alguna discapacidad</h4>
    <br>
    Visual  <input type="checkbox" name="visual" value="Tiene discapacidad visual"><br><br>
    <label title="Especifique">*<label>
    <input type="text"  name="visualEsp" id="visualEsp" placeholder="Especifique" size="120"><br><br>

    Auditiva  <input type="checkbox" name="auditiva" value="Tiene discapacidad auditiva"><br><br>
    <label title="Especifique">*<label>
    <input type="text"   name="auditivaEsp" id="auditivaEsp" placeholder="Especifique" size="120"><br><br>

    Motora  <input type="checkbox" name="motora" value="Tiene discapacidad motora"><br><br>
    <label title="Especifique">*<label>
    <input type="text"  name="motoraEsp" id="motoraEsp" placeholder="Especifique" size="120"><br><br>

    Lenguaje  <input type="checkbox" name="lenguaje" value="Tiene discapacidad en lenguaje"><br><br>
    <label title="Especifique">*<label>
    <input type="text"  name="lenguajeEsp" id="lenguajeEsp" placeholder="Especifique" size="120"><br><br>

    Trastorno emocional  <input type="checkbox" name="emocional" value="Tiene trastorno emocional"><br><br>
    <label title="Especifique">*<label>
    <input type="text"   name="emocionalEsp" id="emocionalEsp" placeholder="Especifique" size="120"><br><br>
    <br>
    <h4>Observaciones generales</h4>
    <br>
    <textarea rows="5" cols="124" name="obsGenerales" required></textarea>
    <br><br>



  </fieldset>

  <input style="position: absolute; left: 50%;" type="submit" value="Revisar" id="boton"><br><br>

  </form>

</body>

</html>


