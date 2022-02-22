<?php
$registros = array();
$registros[] = array(
    "nombre" => "Mauro",
    "apellido" => "Pereyra",
    "edad" => 26,
    "email" => "mauroleonelpereyra@hotmail.com",
    "dni" => 39154707,
);
$registros[] = array(
    "nombre" => "Marigold",
    "apellido" => "Scorer",
    "edad" => 25,
    "email" => "mscorer0@deliciousdays.com",
    "dni" => 39555555,
);
$registros[] = array(
    "nombre" => "Catina",
    "apellido" => "Heigl",
    "edad" => 24,
    "email" => "cheigl1@prlog.org",
    "dni" => 39444444,
);

$registros[] = array(
    "nombre" => "Heather",
    "apellido" => "Medford",
    "edad" => 23,
    "email" => "hmedford2@craigslist.org",
    "dni" => 39333333,
);

?>
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
    <?php include_once("header.php");?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <h1>Listado de personas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
             
                <table class="table table-hover border ">
                    <div class="row">
                        <tr></tr>
                        <th class="col-2 ">Nombre</th>
                        <th class="col-2 ">Apellido</th>
                        <th>Edad</th>
                        <th>Email</th>
                        <th>Dni</th>
                    
                    </div>
            
                    <?php for ($i = 0; $i < count($registros); $i++) { ?>
            
                        <?php echo "<tr>";?>
                        <div"><?php echo "<td>" . $registros[$i]["nombre"]; ?> </div>
                        <div"><?php echo "<td>" . $registros[$i]["apellido"]; ?> </div>
                        <div"><?php echo "<td>" . $registros[$i]["edad"]; ?> </div>
                        <div"><?php echo "<td>" . $registros[$i]["email"]; ?> </div>
                        <div"><?php echo "<td>" . $registros[$i]["dni"]; ?> </div>
           
                    <?php
                        }
                    ?>
           
                </table>
          
            </div>
        </div>
    </div>
</body>
</html>