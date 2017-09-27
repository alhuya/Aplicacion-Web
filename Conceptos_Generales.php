<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap-3.3.5-dist\css\bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="Css\style.css">
</head>
<body>
	<form action="insertar_conceptos_generales.php" method="post">
		<div class="container">
			<h3>Referencias Personales</h3>
			<label>1</label>
			<input type="text" name="nombre_ref1" placeholder="Nombre">
			<input type="text" name="dir_ref1" placeholder="Direccion">
			<input type="text" name="tel_ref1" placeholder="Telefono">
			<input type="text" name="ocup_ref1" placeholder="Ocupacion"><br>
			<label>2</label>
			<input type="text" name="nombre_ref2" placeholder="Nombre">
			<input type="text" name="dir_ref2" placeholder="Direccion">
			<input type="text" name="tel_ref2" placeholder="Telefono">
			<input type="text" name="ocup_ref2" placeholder="Ocupacion"><br>
			<label>3</label>
			<input type="text" name="nombre_ref3" placeholder="Nombre">
			<input type="text" name="dir_ref3" placeholder="Direccion">
			<input type="text" name="tel_ref3" placeholder="Telefono">
			<input type="text" name="ocup_ref3" placeholder="Ocupacion"><br>
			<h3>Datos Genales</h3>
			<label>¿Còmo se entero de este empleo?</label>
			<label>Anuncio</label>
			<input type="radio" name="empleo" value="Anuncio">
			<label>Otro Medio</label>
			<input type="radio" name="empleo" value="Otro Medio">
			<input type="text" name="otro" placeholder="Anotelo"><br>
			<label>¿Algun pariente trabaja en esta empresa?</label>
			<label>no</label>
			<input type="radio" name="parient_trab" value="NO">
			<label>si</label>
			<input type="radio" name="parient_trab" value="SI" >
			<input type="text" name="nombre_pariente" placeholder="Nombrelo"><br>
			<label>¿Ha sido afianzado?</label>
			<label>no</label>
			<input type="radio" name="afianzado" value="NO">
			<label>si</label>
			<input type="radio" name="afianzado" value="SI">
			<input type="text" name="anfianzado_si" placeholder="Nombre de la cia"><br>
			<label>¿Ha sido afanzado a algun sindicato?</label>
			<label>no</label>
			<input type="radio" name="sindicato" value="NO">
			<label>si</label>
			<input type="radio" name="sindicato" value="SI">
			<input type="text" name="sindicato_si" placeholder="Cual?"><br>
			<label>Tiene seguro de vida?</label>
			<label>no</label>
			<input type="radio" name="seguro_vida" value="NO">
			<label>si</label>
			<input type="radio" name="seguro_vida" value="SI"><br>
			<label>Podria Viajar</label>
			<label>si</label>
			<input type="radio" name="viajar" value="SI">
			<label>no</label>
			<input type="radio" name="viajar" value="NO">
			<input type="text" name="viajar_no" placeholder="Razones"><br>
			<label>Esta dispuesto a cambiar su lugar de recidencia?</label>

			<label>si</label>
			<input type="radio" name="recidencia" value="SI">
			<label>no</label>
			<input type="radio" name="recidencia" value="NO">
			<input type="text" name="recidencia_no" placeholder="Razones"><br>
			<label>En que fecha se podria presentar a trabajar</label>
			<input type="date" name="fecha_inicio_trabajo"><br>
			<label>¿Tiene usted otro ingreso?</label>
			<label>no</label>
			<input type="radio" name="otro_ingreso" value="NO">
			<label>si</label>
			<input type="radio" name="otro_ingreso" value="SI">
			<input type="text" name="otro_ingreso_si" placeholder="Importe Mensual $"><br>
			<label>¿Su conyuge trabaja?</label>
			<label>no</label>
			<input type="radio" name="conyugue" value="NO">
			<label>si</label>
			<input type="radio" name="conyugue" value="SI">
			<input type="text" name="donde" placeholder="Donde">
			<input type="text" name="percepcion" placeholder="Percepcion Mensual"><BR>
			<label>¿Vive en casa propia?</label>
			<label>no</label>
			<input type="radio" name="casa_prop" value="NO">
			<label>si</label>
			<input type="radio" name="casa_prop" value="SI">
			<input type="text" name="valor" placeholder="Valor Estimado"><br>
			<label>¿Paga Renta?</label>
			<label>No</label>
			<input type="radio" name="renta" value="NO">
			<label>si</label>
			<input type="radio" name="renta" value="SI">
			<input type="text" name="renta_si" placeholder="Renta Mensual
			"><br>
			<label>¿Posee automovil propio?</label>
			<label>no</label>
			<input type="radio" name="propio" value="NO">
			<label>si</label>
			<input type="radio" name="propio" value="SI">
			<input type="text" name="Marca" placeholder="Marca">
			<input type="text" name="Modelo" placeholder="Modelo"><br>
			<label>Cuanto abona mensualmente?</label>
			<input type="text" name="abono"><br>
			<label>¿A cuanto ascienden sus gastos mensualmente?</label>
			<input type="text" name="gastos">

			 <div class="button">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>









		
	</form>
</body>
</html>