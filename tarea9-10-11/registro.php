<?php
if($_POST){ /* es postback ? */

    $usuario = $_POST["nombreUs"];
    $mail = $_POST["emailUs"];
    $clave = $_POST["passUs"];

    //Si usuario es distinto de vacio Y clave es distinto de vacio, entonces:
    if($usuario != "" && $mail != "" && $clave != ""){
   
        include_once("funciones.php");
        regUsuario($_POST["nombreUs"], $_POST["emailUs"], $_POST["passUs"]);
        echo "<a href=\"registro.php\">Registrar otro</a>";
        
    } 
    else {
        $mensaje = "No Debe dejar campos vacios";
    }
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Primera web</title>
    <script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include_once("header2.php"); ?>
    <header>

    </header>
    <main >
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>REGISTRATE</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12"> 

        <?php if (isset($mensaje) && $mensaje != ""): ?>
                    <div class="alert alert-danger" role="alert"><?php echo $mensaje; ?></div>
                <?php endif; ?>

        <form action="" method="POST">
                    <div class="my-3">
                        <label for="">Usuario: <input type="text" id="nombreUs" name="nombreUs" class="form-control"></label>
                    </div>
                    <div class="my-3">
                        <label for="">Email: <input type="text" id="emailUs" name="emailUs" class="form-control"></label>
                    </div>
                    <div class="my-3">
                        <label for="">Clave: <input type="password" id="passUs" name="passUs" class="form-control"></label>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary" type="submit">ENVIAR</button>
                    </div>
            </form>
            </div>
        </div>

    </div>
    </main>
    <footer></footer>
</body>