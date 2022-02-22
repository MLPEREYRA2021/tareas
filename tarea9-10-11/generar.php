<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<?php
 $archivo1 = fopen("tarjeta.txt", "r");
    if ($archivo1) {
        while (($fila = fgets($archivo1)) == true) {
            $datosUs = explode("/",$fila);
            $nombre = $datosUs[0];
            $apellido = $datosUs[1];
            $profesion = $datosUs[2];
            $descripcion = $datosUs[3];   
            
         }

}
?>

<div class="container" style="margin-top: 5%;">
    <div class="col-12">

<div class="card-group" >

    <div class="card">
      <div class="card-header text-primary" style="text-align: center;">NOMBRE</div>
  <div class="card-body text-primary">
    <h5 class="card-title"><?php echo $nombre ?></h5>
    </div>
    </div>
  
  
    <div class="card">
      <div class="card-header text-primary" style="text-align: center;">APELLIDO</div>
  <div class="card-body text-primary">
    <h5 class="card-title"><?php echo $apellido ?></h5>
    </div>
    </div>

    <div class="card">
      <div class="card-header text-primary" style="text-align: center;">PROFESION</div>
  <div class="card-body text-primary">
    <h5 class="card-title"><?php echo $profesion?></h5>
    </div>
    </div>

    
</div>
<div class="card">
      <div class="card-header text-primary" style="text-align: center;">DESCRIPCION</div>
  <div class="card-body text-primary">
    <p class="card-text"><?php echo $descripcion?></p></div>
    </div>
    </div>
    </div>

</body>
</html>