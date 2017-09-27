<?php
    
    require("Conexion.php");
    // D O C U M E N T A C I O N ////
	$curp_emp=$_POST['curp'];
	$rcf_emp=$_POST['rfc'];
	$seguro_emp=$_POST['seguro_social'];
	$licencia_emp=$_POST['num_licencia'];
	$estado_emp=$_POST['est_salud'];
	$enfermedad_emp=$_POST['enfermedad'];
	$deporte_emp=$_POST['deporte'];
	$pasatiempo_emp=$_POST['pasatiempo'];
	$meta=$_POST['meta'];
	
	$padre_nom=$_POST['padre'];
	$estado_padre=$_POST['estado1'];
	$direcion1=$_POST['Direccion_padre'];
	$ocupacion1=$_POST['ocupacion_padre'];
	$madre_nom=$_POST['Madre'];
	$estado_madre=$_POST['estado2'];
	$direccion2=$_POST['Direccion_madre'];
	$ocupacion2=$_POST['ocupacion_madre'];

	$primaria_nom=$_POST['primaria'];
	$direccion_primaria=$_POST['direccion_prim'];
	$fecha_inicio_primaria=$_POST['fecha_inicio_prim'];
	$fecha_fin_primaria=$_POST['fecha_final_prim'];
	$years_prim=$_POST['anos_prim'];
	$titulo_primaria=$_POST['titulo_prim'];
	
	$secundaria_nom=$_POST['secundaria'];
	$direccion_secundaria=$_POST['direccion_sec'];
	$fecha_inicio_secundaria=$_POST['fecha_inicio_sec'];
	$fecha_fin_secundaria=$_POST['fecha_final_sec'];
	$years_secundaria=$_POST['anos_sec'];
	$titulo_secundaria=$_POST['titulo_sec'];

	$preparatoria_nom=$_POST['preparatoria'];
	$direccion_preparatoria=$_POST['direccion_prep'];
	$fecha_inicio_preparatoria=$_POST['fecha_inicio_prep'];
	$fecha_fin_preparatoria=$_POST['fecha_final_prep'];
	$years_prep=$_POST['anos_prep'];
	$titulo_preparatoria=$_POST['titulo_prep'];

	$profesional_nom=$_POST['profesional'];
	$direccion_profesional=$_POST['direccion_prof'];
	$fecha_inicio_profesional=$_POST['fecha_inicio_prof'];
	$fecha_fin_profesional=$_POST['fecha_final_prof'];
	$years_prof=$_POST['anos_prof'];
	$titulo_profesional=$_POST['titulo_prof'];

	$escueña_actual=$_POST['escuela'];
	$hora1=$_POST['hora_inicio'];
	$hora2=$_POST['hora_final'];

	$carrera_prof=$_POST['carrera'];
	$grado_escuela=$_POST['grado'];
	$lenguaje=$_POST['idioma'];
	$oficina=$_POST['funciones'];
	$maquinas_domina=$_POST['maquina'];
	$software_domina=$_POST['software'];
	$funciones=$_POST['otras_funciones'];


		$consulta=mysqli_query($conn,"INSERT INTO `documentacion` (`CURP`, `RFC`, `NUMERO_SEGURO`, `LICENCIA`, `SALUD`, `ENF_CRONIC`, `DEPORTE`, `PASATIEMPO`, `META`, `NOMBRE_PADRE`, `ESTADO_PADRE`, `DIRECCION_PADRE`, `OCUPACION_PADRE`, `NOMBRE_MADRE`, `ESTADO_MADRE`, `DIRECCION_MADRE`, `OCUPACION_MADRE`, `PRIMARIA`, `DIRECCION_PRIMARIA`, `FECHA_INICIO_PRIM`, `FECHA_FIN_PRIM`, `ANOS_PRIMARIA`, `TITULO_PRIMARIA`, `SECUNDARIA`, `DIRECCION_SECUNDARIA`, `FECHA_INICIO_SEC`, `FECHA_FIN_SEC`, `ANOS_SECUNDARIA`, `TITULO_SECUNDARIA`, `PREPARATORIA`, `DIRECCION_PREPARATORIA`, `FECHA_INICIO_PREP`, `FECHA_FIN_PREP`, `ANOS_PREPARATORIA`, `TITULO_PREPARATORIA`, `PROFESIONAL`, `DIRECCION_PROFECIONAL`, `FECHA_INICIO_PROF`, `FECHA_FINAL_PROF`, `ANOS_PROFECIONAL`, `TITULO`, `ESCUELA`, `HORARIO_INIC`, `HORARIO_FIN`, `CURSO_CARRERA`, `GRADO`, `MAQUINA`, `SOFTWARE`, `FUNCIONES`,`IDIOMA`,`OTRAS_FUNC`) VALUES ('$curp_emp', '$rcf_emp', '$seguro_emp', '$licencia_emp', '$estado_emp', '$enfermedad_emp', '$deporte_emp', '$pasatiempo_emp', '$meta', '$padre_nom', '$estado_padre', '$direcion1', '$ocupacion1', '$madre_nom', '$estado_madre', '$direccion2,', '$ocupacion2', '$primaria_nom', '$direccion_primaria', '$fecha_inicio_primaria', '$fecha_fin_primaria', '$years_prim', '$titulo_primaria', '$secundaria_nom', '$direccion_secundaria', '$fecha_inicio_secundaria', '$fecha_fin_secundaria', '$years_secundaria', '$titulo_secundaria', '$preparatoria_nom', '$direccion_preparatoria', '$fecha_inicio_preparatoria', '$fecha_fin_preparatoria', '$years_prep', '$titulo_preparatoria', '$profesional_nom', '$direccion_profesional', '$fecha_inicio_profesional', '$fecha_fin_profesional', '$years_prof', '$titulo_profesional', '$escueña_actual', '$hora1', '$hora2', '$carrera_prof', '$grado_escuela', '$maquinas_domina', '$software_domina', '$oficina','$lenguaje','$funciones');");
	
	var_dump($consulta);
	if(($consulta))
	{
	
            header("Location:Conceptos_Generales.html");
			
		}
		
		else{


		}


?>