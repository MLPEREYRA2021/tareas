
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php include_once("header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>GENERAR TARJETA</h1>
            </div>
        </div>
        <?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if($_POST){ /* es postback ? */

    $us = $_POST["txtUsuario"];
    $ap = $_POST["txtAp"];
    $prof = $_POST["txtProf"];
    $desc = $_POST["txtDes"];

    //Si usuario es distinto de vacio Y clave es distinto de vacio, entonces:
    if($us != "" && $ap != "" && $prof !="" && $desc !=""){
        include_once ('funciones.php');
        regTarj($us,$ap,$prof,$desc);
        header("Location:generar.php");
    } 
    else {
        $mensaje = "No Debe dejar campos vacios";
    }
}
?>
<div class="row">
            <div class="col-12"> 
                <?php if (isset($mensaje) && $mensaje != ""): ?>
                    <div class="alert alert-danger" role="alert"><?php echo $mensaje; ?></div>
                <?php endif; ?>
                <form action="" method="POST">
                    <div class="my-3">
                        <label for="">Nombre: <input type="text" id="txtUsuario" name="txtUsuario" class="form-control"></label>
                    </div>
                    <div class="my-3">
                        <label for="">Apellido: <input type="text" id="txtAp" name="txtAp" class="form-control"></label>
                    </div>
                    <div class="my-3">
                        <label for="">Profesion: <input type="text" id="txtProf" name="txtProf" class="form-control"></label>
                    </div>
                    <div class="row">
                    <label for="">Descripcion:<textarea class="form-control" name="txtDes" rows="3"></textarea></label>
                    </div>
                    <div class="row">
                        <button class="btn btn-primary" type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
</body>
</html>




   
