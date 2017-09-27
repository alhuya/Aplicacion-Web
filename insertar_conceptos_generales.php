<?php
    
    require("Conexion.php");
   
    $nombre1=$_POST['nombre_ref1'];
   $direcion1_req=$_POST['dir_ref1'];
    $telefono1=$_POST['tel_ref1'];
	$ocupacion1=$_POST['ocup_ref1'];
	$nombre2=$_POST['nombre_ref2'];
    $direcion2_req=$_POST['dir_ref2'];
    $telefono2=$_POST['tel_ref2'];
	$ocupacion2=$_POST['ocup_ref2'];
	$nombre3=$_POST['nombre_ref3'];
    $direcion3_req=$_POST['dir_ref3'];
    $telefono3=$_POST['tel_ref3'];
	$ocupacion3=$_POST['ocup_ref3'];

	$Empleo=$_POST['empleo'];
	$otro=$_POST['otro'];
	$parient_trabajando=$_POST['parient_trab'];
	$nombre_pariente=$_POST['nombre_pariente'];
	$afianzado=$_POST['afianzado'];
	$anfianzado_si=$_POST['anfianzado_si'];
	$sindicato_yes=$_POST['sindicato_si'];
	$sindicato=$_POST['sindicato'];
	$seguro=$_POST['seguro_vida'];
 
	$viajar=$_POST['viajar'];
	$viajar_no=$_POST['viajar_no'];
	
	$residencia=$_POST['recidencia'];
	$recidencia_no=$_POST['recidencia_no'];

	$fecha_inicio=$_POST['fecha_inicio_trabajo'];
	$otro_ingreso=$_POST['otro_ingreso'];
	$otro_ingreso_si=$_POST['otro_ingreso_si'];
	$conyuge=$_POST['conyugue'];

	$donde=$_POST['donde'];
	$percepcion=$_POST['percepcion'];
	$casa_propia=$_POST['casa_prop'];
	$valor=$_POST['valor'];

	$renta=$_POST['renta'];
	$renta_si=$_POST['renta_si'];
	$propia=$_POST['propio'];
	$marca=$_POST['Marca'];
	$modelo=$_POST['Modelo'];
	$abono=$_POST['abono'];
	$gastos=$_POST['gastos'];
	

	$consulta=mysqli_query($conn,"INSERT INTO `referencias` (`NOMBRE1`, `DIRECCION1`, `TELEFONO1`, `OCUPACION1`, `NOMBRE2`, `DIRECCION2`, `TELEFONO2`, `OCUPACION2`, `NOMBRE3`, `DIRECCION3`, `TEEFONO3`, `OCUPACION3`, `CONOCER_EMP`, `OTRO_MEDIO`, `PARIENTE_EMP`, `NOMBRE_PARIENTE`, `AFIANZADO_SINDICATO`, `NOMBRE_SINDICATO`, `NOMBRE_CIA`, `SINDICATO`, `SEGURO_VIDA`, `VIAJAR`, `RAZONES`, `RECIDENCIA`, `RAZONES_RESIDENCIA`, `INICIO_TRABAJAR`, `OTRO_INGRESO`, `IMPORTE_MENSUAL`, `COYUGE_TRABAJA`, `DONDE_TRABAJA`, `PERSEPCION_MENSUAL`, `CASA_PROPIA`, `VALOR_ESTIMADO`, `RENTA`, `RENTA_MENSUAL`, `AUTO_PROPIO`, `MARCA`, `MODELO`, `ABONO_MENSUAL`, `GASTO_MENSUAL`) VALUES ('$nombre1', '$direcion1_req', '$telefono1', '$ocupacion1', '$nombre2', '$direcion2', '$telefono2', '$ocupacion2', '$nombre3', '$direcion3_req', '$telefono3', '$ocupacion3', '$Empleo', '$otro', '$parient_trabajando', '$nombre_pariente', '$afianzado', '$anfianzado_si', '$sindicato_yes', '$sindicato', '$seguro', '$viajar', '$viajar_no', '$residencia', '$recidencia_no', '$fecha_inicio', '$otro_ingreso', '$otro_ingreso_si', '$conyuge', '$donde', '$percepcion', '$casa_propia', '$valor', '$renta', '$renta_si', '$propia', '$marca', '$modelo', '$abono', '$gastos');" );
	
	/*

	$consulta=mysqli_query($conn,"INSERT INTO `referencias` (`NOMBRE1`, `DIRECCION1`, `TELEFONO1`, `OCUPACION1`, `NOMBRE2`, `DIRECCION2`, `TELEFONO2`, `OCUPACION2`, `NOMBRE3`, `DIRECCION3`, `TEEFONO3`, `OCUPACION3`, `CONOCER_EMP`, `OTRO_MEDIO`, `PARIENTE_EMP`, `NOMBRE_PARIENTE`, `AFIANZADO_SINDICATO`, `NOMBRE_SINDICATO`, `NOMBRE_CIA`, `SINDICATO`, `SEGURO_VIDA`, `VIAJAR`, `RAZONES_VIAJAR`, `RECIDENCIA`, `RAZONES_RESIDENCIA`, `INICIO_TRABAJAR`, `OTRO_INGRESO`, `IMPORTE_MENSUAL`, `COYUGE_TRABAJA`, `DONDE_TRABAJA`, `PERSEPCION_MENSUAL`, `CASA_PROPIA`, `VALOR_ESTIMADO`, `RENTA`, `RENTA_MENSUAL`, `AUTO_PROPIO`, `MARCA`, `MODELO`, `ABONO_MENSUAL`, `GASTO_MENSUAL`) VALUES ('$nombre1', '$direcion1_req', '$telefono1', '$ocupacion1', '$nombre2', '$direcion2_req', '$telefono2', '$ocupacion2', '$nombre3', '$direcion3_req', '$telefono3', '$ocupacion3', '$Empleo', '$otro', '$parient_trabajando', '$nombre_pariente', '$afianzado', '$anfianzado_si', '$sindicato_yes','$sindicato','$seguro', '$viajar', '$viajar_no', '$residencia', '$recidencia_no','$fecha_inicio', '$otro_ingreso', '$otro_ingreso_si', '$conyuge', '$donde', '$percepcion', '$casa_propia', '$valor', '$renta', '$renta_si', '$propia', '$marca', '$modelo', '$abono', '$gastos');" );*/

	
	var_dump($consulta);
	if(($consulta))
	{
	
            header("Location:Datos_Guardados.html");
			
		}
		
		else{


		}


?>