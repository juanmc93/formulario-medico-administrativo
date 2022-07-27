<?php
//validamos datos del servidor
$host = "localhost";
$user = "root";
$pass = "toor";


//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
    $sedes=$_POST['sedes'];
    $nombres_completos=$_POST['nombres_completos'];
    $cedula=$_POST['cedula'];
    $correo_institucional=$_POST['correo_institucional'];
    $celular=$_POST['celular'];
    $edad=$_POST['edad'];
    $domicilio=$_POST['domicilio'];
    $respuesta_discapacidad=$_POST['respuesta_discapacidad'];
    $contact_urg=$_POST['contact_urg'];
    $puesto_trabajo=$_POST['puesto_trabajo'];
    $actividades_relevantes=$_POST['actividades_relevantes'];
    $area_trabajo=$_POST['area_trabajo'];
    $grupo_sanguineo=$_POST['grupo_sanguineo'];
    $vigente_seguro_salud=$_POST['vigente_seguro_salud'];
    $Lateralidad=$_POST['Lateralidad'];
    $discapacidad_si_no=$_POST['discapacidad_si_no'];
    $detalle_enfermedad=$_POST['detalle_enfermedad'];
    $operado=$_POST['operado'];
    $antecedente_familiar=$_POST['antecedente_familiar'];
    $alergia=$_POST['alergia'];

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h4>Hemos conectado al servidor</h45</b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "dbfichamedica";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO reg_user (sedes, nombres_completos, cedula, correo_institucional, celular, edad, domicilio, respuesta_discapacidad, contact_urg, puesto_trabajo,actividades_relevantes,area_trabajo,grupo_sanguineo,vigente_seguro_salud,Lateralidad,discapacidad_si_no,detalle_enfermedad,operado,antecedente_familiar,alergia)
                             VALUES ('$sedes','$nombres_completos','$cedula','$correo_institucional','$celular','$edad','$domicilio','$respuesta_discapacidad','$contact_urg','$puesto_trabajo','$actividades_relevantes','$area_trabajo','$grupo_sanguineo','$vigente_seguro_salud','$Lateralidad,discapacidad_si_no,'$detalle_enfermedad','$operado','$antecedente_familiar','$alergia')";
							 
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM reg_user ";//nombre de la tabla a consultar
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}

echo "<table>";
echo "<tr>";
echo "<th><h5>id</th></h5>";
echo "<th><h5>sedes</th></h5>";
echo "<th><h5>nombres_completos</th></h5>";
echo "<th><h5>cedula</th></h5>";
echo "<th><h5>correo_institucional</th></h5>";
echo "<th><h5>celular</th></h5>";
echo "<th><h5>edad</th></h5>";
echo "<th><h5>domicilio</th></h5>";
echo "<th><h5>respuesta_discapacidad</th></h5>";
echo "<th><h5>contact_urg</th></h5>";
echo "<th><h5>puesto_trabajo</th></h5>";
echo "<th><h5>actividades_relevantes</th></h5>";
echo "<th><h5>area_trabajo</th></h5>";
echo "<th><h5>grupo_sanguineo</th></h5>";
echo "<th><h5>vigente_seguro_salud</th></h5>";
echo "<th><h5>Lateralidad</th></h5>";
echo "<th><h5>discapacidad_si_no</th></h5>";
echo "<th><h5>detalle_enfermedad</th></h5>";
echo "<th><h5>operado</th></h5>";
echo "<th><h5>antecedente_familiar</th></h5>";
echo "<th><h5>alergia</th></h5>";
echo "</tr>";
while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";    
    echo "<td><h6>" . $colum['id']. "</td></h6>";
    echo "<td><h6>" . $colum['sedes']. "</td></h6>";
    echo "<td><h6>" . $colum['nombres_completos']. "</td></h6>";
    echo "<td><h6>" . $colum['cedula']. "</td></h6>";    
    echo "<td><h6>" . $colum['correo_institucional']. "</td></h6>";
    echo "<td><h6>" . $colum['celular']. "</td></h6>";
    echo "<td><h6>" . $colum['edad']. "</td></h6>";
    echo "<td><h6>" . $colum['domicilio']. "</td></h6>";
    echo "<td><h6>" . $colum['respuesta_discapacidad'] . "</td></h6>";
	  echo "<td><h6>" . $colum['contact_urg'] . "</td></h6>";
	  echo "<td><h6>" . $colum['puesto_trabajo'] . "</td></h6>";
    echo "<td><h6>" . $colum['actividades_relevantes'] . "</td></h6>";
    echo "<td><h6>" . $colum['area_trabajo'] . "</td></h6>";    
    echo "<td><h6>" . $colum['grupo_sanguineo'] . "</td></h6>";
    echo "<td><h6>" . $colum['vigente_seguro_salud'] . "</td></h6>";
    echo "<td><h6>" . $colum['Lateralidad'] . "</td></h6>";
    echo "<td><h6>" . $colum['discapacidad_si_no'] . "</td></h6>";
    echo "<td><h6>" . $colum['detalle_enfermedad'] . "</td></h6>";
    echo "<td><h6>" . $colum['operado'] . "</td></h6>";
    echo "<td><h6>" . $colum['antecedente_familiar'] . "</td></h6>";
    echo "<td><h6>" . $colum['alergia'] . "</td></h6>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.html"> Volver Atrás</a>';


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <title>consulta db</title>
    <style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

</body>
</html>




