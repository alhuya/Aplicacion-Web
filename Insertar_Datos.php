<?php
    
    require("Conexion.php");
    $puesto_req=$_POST['puesto'];
    $sueldo_req=$_POST['sueldo'];
    $ap_pat=$_POST['ap_pat'];
	$ap_mat=$_POST['ap_mat'];
	$nombre=$_POST['nom'];
	$calle=$_POST['calle'];
	$colonia=$_POST['colonia'];
	$codigo_post=$_POST['cod_post'];
	$vive_con=$_POST['vive'];
	$Dependientes=$_POST['pers_dep'];
	$Telefono=$_POST['telefono'];
	$fecha=$_POST['fecha_nac'];
	$Estatura=$_POST['estatura'];
	$Edad=$_POST['Edad'];
	$Sexo2=$_POST['sexo'];
	$Nacionalidad=$_POST['Nacionalidad'];
	$peso=$_POST['Peso'];
	$Est_Civ=$_POST['Estado_civil'];
	



	$consulta=mysqli_query($conn,"INSERT INTO `datos_pesonales` (`Fecha`, `Puesto`, `Sueldo`, `Ap_pat`, `Ap_mat`, `Nombre`, `Calle`, `Col_Fracc`, `Cod_Post`, `Vive_con`, `Dependientes`, `Telefono`, `Fecha_nac`, `Estatura`, `Edad`, `Sexo`, `Nacionalidad`, `Peso`, `Estado_Civil`, `id`) VALUES (NOW(), '$puesto_req', '$sueldo_req', '$ap_pat', '$ap_mat', '$nombre', '$calle', '$colonia', '$codigo_post', '$vive_con', '$Dependientes', '$Telefono', '$fecha', '$Estatura', '$Edad', '$Sexo2', '$Nacionalidad', '$peso', '$Est_Civ', NULL);" );
	
	var_dump($consulta);
	if(($consulta))
	{
	
            header("Location:Documentacion.php");
			
		}
		
		else{


		}


?>