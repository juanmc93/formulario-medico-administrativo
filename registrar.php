<?php
    
    $campus=$_POST['campus'];
    $nombres_completos=$_POST['nombres_completos'];
    $cedula=$_POST['cedula'];
    $correo_institucional=$_POST['correo_institucional'];
    $celular=$_POST['celular'];
    $edad=$_POST['edad'];
    $domicilio=$_POST['domicilio'];
    $dispacidad_respuesta=$_POST['dispacidad_respuesta'];
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

  

    $fecha = date("d/m/y H:i a")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso de Valores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: #1C2833;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-4 justify-content-center">
            <div class="col-sm-12 col-lg-6 ">                
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white text-center">
                            <h3>Paciente Registrado</h3>
                        </div>
                        <div class="card-body">
                            <p><b>Fecha de Registro:</b> <?php echo $campus?> </p>
                            <p><b>Fecha de Registro:</b> <?php echo $nombres_completos?> </p>
                            <p><b>Nombres:</b> <?php echo $cedula; ?></p>  
                            <p><b>Apellidos:</b> <?php echo $correo_institucional; ?></p>  
                            <p><b>Edad:</b> <?php echo $celular; ?></p>  
                            <p><b>Sexo:</b> <?php echo $edad; ?></p>  
                            <p><b>Correo:</b> <?php echo $domicilio; ?></p> 
                            <p><b>Teléfono:</b> <?php echo $dispacidad_respuesta; ?></p>  
                            <p><b>Sistema de salud:</b> <?php echo $contact_urg; ?></p>
                            <p><b>Es Alérgico a:</b> <?php echo $puesto_trabajo; ?></p>
                            <p><b>Grupo Sanguíneo:</b> <?php echo $actividades_relevantes; ?></p>
                            <p><b>Observaciones:</b> <?php echo $area_trabajo; ?></p> 
                            <p><b>Observaciones:</b> <?php echo $grupo_sanguineo; ?></p> 
                            <p><b>Observaciones:</b> <?php echo $vigente_seguro_salud; ?></p> 
                            <p><b>Observaciones:</b> <?php echo $Lateralidad; ?></p> 
                            <p><b>Observaciones:</b> <?php echo $discapacidad_si_no; ?></p> 
                            <p><b>Observaciones:</b> <?php echo $detalle_enfermedad; ?></p>
                            p><b>Observaciones:</b> <?php echo $operado; ?></p> 
                            p><b>Observaciones:</b> <?php echo $antecedente_familiar; ?></p> 
                            p><b>Observaciones:</b> <?php echo $alergia; ?></p> 

                        </div>
                        <div class="card-footer text-center">
                            <h6>Estudinate: Ramos Justino</h6>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
