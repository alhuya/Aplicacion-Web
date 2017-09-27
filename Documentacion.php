<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link rel="stylesheet" href="bootstrap-3.3.5-dist\css\bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="Css\style.css">
</head>
<body>

<div class="container">
<h3>Documentaciòn</h3>
	<form action="insertar_datos_documentacion.php" method="post">
		<label>Curp</label>
		<input type="text" name="curp">
		<label>RFC</label>
		<input type="text" name="rfc">
		<label>Numero de seguro social</label>
		<input type="text" name="seguro_social">
		<label>Licencia de manejo</label>
		<label>si</label>
		<input type="radio" name="num_licencia" value="si">
		<label>no</label>
		<input type="radio" name="num_licencia" value="no">
		<label></label>
	
	
	<h3>Estado de Salud</h3>
		
			<label>Actualmente ¿Como considera su estado de salud?</label><br>
			<label>Bueno</label>
			<input type="radio" name="est_salud" value="bueno">
			<label>Malo</label>
			<input type="radio" name="est_salud" value="malo"><br>
			<label>¿Padece alguna enfermedad cronica?</label>
			<label>si</label>
			<input type="radio" name="enfermedad" value="si">
			<label>no</label>
			<input type="radio" name="enfermedad" value="no">
			<label>¿Què deporte practica?</label>
			<input type="text" name="deporte">
			<label>¿Cùal es su pasatiempo favorito?</label>
			<input type="text" name="pasatiempo">
			<label>¿Cùal es su meta en la vida?</label>
			<input type="text" name="meta">
			<h3>Datos Familiares</h3>
			<label>Nombre</label>
			<input type="text" name="padre" placeholder="Padre">
			<label>Vive</label>
			<input type="radio" name="estado1" value="vive">
			<label>finado</label>
			<input type="radio" name="estado1" value="finado">
			<label>Direcciòn</label>
			<input type="text" name="Direccion_padre">
			<label>Ocupaciòn</label>
			<input type="text" name="ocupacion_padre"><br>
			<label>Nombre</label>
			<input type="text" name="Madre" placeholder="Madre">
			<label>Vive</label>
			<input type="radio" name="estado2" value="vive">
			<label>finado</label>
			<input type="radio" name="estado2" value="finado">
			<label>Direcciòn</label>
			<input type="text" name="Direccion_madre">
			<label>Ocupaciòn</label>
			<input type="text" name="ocupacion_madre"><br>
			<label>Nombres de los hijos</label>
			<input type="text" name="hijos">
			<label>Edades</label>
			<input type="text" name="edades"><br>
			<!--E S C O L A R I D A D -->
			<DIV>
			<h3>Escolaridad</h3>
			<!--P R I M A R I A -->
			
			<input type="text" name="primaria" placeholder="Primaria">
			<input type="text" name="direccion_prim" placeholder="Direcciòn">
			<label>Fecha</label>
			<label>De</label>
			<input type="date" name="fecha_inicio_prim">
			<label>a</label>
			<input type="date" name="fecha_final_prim">
			<input type="number" name="anos_prim" placeholder="Años" min="1"  style="width:50px" >
			<input type="text" name="titulo_prim" placeholder="Titulo"><br>

			<!-- S E C U N D A R I A -->
			<input type="text" name="secundaria" placeholder="Secundaria">
			<input type="text" name="direccion_sec" placeholder="Direcciòn">
			<label>Fecha</label>
			<label>De</label>
			<input type="date" name="fecha_inicio_sec">
			<label>a</label>
			<input type="date" name="fecha_final_sec">
			<input type="number" name="anos_sec" placeholder="Años" min="1"  style="width:50px" >
			<input type="text" name="titulo_sec" placeholder="Titulo"><br>
			<!--P R E P A R A T O R I A -->
			<input type="text" name="preparatoria" placeholder="Preparatoria">
			<input type="text" name="direccion_prep" placeholder="Direcciòn">
			<label>Fecha</label>
			<label>De</label>
			<input type="date" name="fecha_inicio_prep">
			<label>a</label>
			<input type="date" name="fecha_final_prep">
			<input type="number" name="anos_prep" placeholder="Años" min="1"  style="width:50px" >
			<input type="text" name="titulo_prep" placeholder="Titulo"><br>
			<!-- P R O F E S I O N A L -->
			<input type="text" name="profesional" placeholder="Profesional">
			<input type="text" name="direccion_prof" placeholder="Direcciòn">
			<label>Fecha</label>
			<label>De</label>
			<input type="date" name="fecha_inicio_prof">
			<label>a</label>
			<input type="date" name="fecha_final_prof">
			<input type="number" name="anos_prof" placeholder="Años" min="1"  style="width:50px" >
			<input type="text" name="titulo_prof" placeholder="Titulo"><br>
			<!-- Estudios que efectua en la actualidad -->
			<label>Estudios que efectua en la actualidad</label><br>
			<label>Escuela</label>
			<input type="tex" name="escuela">
			<label>Horario</label>
			<label>de</label>
			<input type="text" name="hora_inicio">
			<label>a</label>
			<input type="text" name="hora_final">
			<label>Curso o carrera</label>
			<input type="text" name="carrera">
			<label>Grado</label>
			<input type="text" name="grado" style="width:50px">

</DIV>
<!--CONOCIMIENTOS GENERALES-->
<h3>CONOCIMIENTOS GENERALES</h3>
<input type="text" name="idioma" placeholder="idioma">
<input type="text" name="funciones" placeholder="funciones de oficina"><br>
<label>Maquinas de oficiona o taller que sepa manejar</label>
<input type="text" name="maquina">
<label>Sotware que domina</label>
<input type="text" name="software" >
<label>Otras funciones que domine</label>
<input type="text" name="otras_funciones">




  <div class="button">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
		</form>
	</div>
</body>
</html>