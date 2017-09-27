<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
</head>

<body>
    <h2 class="Titulo" >Solicitud de Empleo</h2>
    <div class="container">


        <form action="Insertar_Datos.php" method="post">

            <div>
                <!--<label>Fecha</label>
	<input type="date" name="Fecha">-->
                <label>Puesto que solicita</label>
                <select name='puesto'>
                <?php
	$mysqli=new mysqli("localhost","root","","volkswagen_rh");
                        if (mysqli_connect_errno()) {
                        die("Error al conectar: ".mysqli_connect_error());
                        }
                        
                         $result=$mysqli->query("SELECT * FROM `puesto`");

                             if($result)
                                 {

                                   

                         while($row=$result->fetch_array(MYSQLI_ASSOC))
                         {
                            echo " 
                        <option value=".$row["Puestos"].">".$row["Puestos"]."</option> 
                       
                        ";
                         }
                     }
	?>
     </select>
                   
                    <label>Sueldo Mensual Deseado</label>
                    <input type="text" name="sueldo">
            </div>
            <div>
                <h3>Datos Personales</h3>
                <label>Apellido Paterno</label>
                <input type="text" name="ap_pat">
                <label>Apellido Materno</label>
                <input type="text" name="ap_mat">
                <label>Nombre(s)</label>
                <input type="text" name="nom">
            </div>
            <div>
                <h3>Direccion</h3>
                <label>calle</label>
                <input type="text" name="calle">
                <label>colonia</label>
                <input type="colonia" name="colonia">
                <label>codigo postal</label>
                <input type="codigo" name="cod_post">

            </div>
            <div>
                <label>
                    vive con:
                </label>
                <br>
                <label>padres</label>
                <input type="radio" name="vive" value="Padres">
                <label>familia</label>
                <input type="radio" name="vive" value="Familia">
                <label>parientes</label>
                <input type="radio" name="vive" value="Parientes">
                <label>solo</label>
                <input type="radio" name="vive" value="solo">
            </div>
            <div>
                <label>Personas que dependen de usted:</label>
                <br>
                <label>hijos</label>
                <input type="radio" name="pers_dep" value="hijos">
                <label>conyuge</label>
                <input type="radio" name="pers_dep" value="conyuge">
                <label>padres</label>
                <input type="radio" name="pers_dep" value="padres">
               

            </div>
            <br>
            <div>
                <label>Telefono</label>
                <input type="tel" name="telefono" >
                <label>Fecha de nacimiento</label>
                <input type="date" name="fecha_nac">
                <label>Estatura</label>
                <input type="text" name="estatura">
                <label>Edad</label>
                <input type="number" name="Edad" min="18" max="48">
                <br>
                <label>Sexo:</label>
                <br>
                <label>Hombre</label>
                <input type="radio" name="sexo" value="Hombre">
                <label>Mujer</label>
                <input type="radio" name="sexo" value="Mujer">
                <br>
                <br>
                <label>Nacionalidad</label>
                <input type="text" name="Nacionalidad">
                <label>Peso</label>
                <input type="text" name="Peso">
                <br>
                <h3>Etado Civil: </h3>
                <label>Soltero</label>
                <input type="radio" name="Estado_civil" value="soltero">
                <label>Casado</label>
                <input type="radio" name="Estado_civil" value="casado">
               <!-- <label>Otro</label>
                <input type="text" name="Estado_civil">-->

            </div>

            <div class="button">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</body>

</html>