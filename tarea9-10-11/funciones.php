<?php
function regUsuario($nom, $em, $pas){
    $contenido = file_get_contents("datos.txt");
    $contenido .= $nom;
    $contenido .= " ";
    $contenido .= $em;
    $contenido .= " ";
    $contenido .= md5($pas);
    $contenido .= "\n";

    $pas = md5($pas);
    $usuarioValido = false;
    $nombre = " ";
    $email = " ";
    $archivo1 = fopen("datos.txt", "r");
    if ($archivo1) {
        while (($fila = fgets($archivo1)) == true) {
            $datosUs = explode(" ",$fila);
            if($datosUs[0] === $nom || $datosUs[1] === $em ) {
                $usuarioValido = true;
                $nombre = $datosUs[0];
                $email = $datosUs[1];

            } 
        }
    }
    if ($usuarioValido === true) {

        echo "Usuario o mail ha sido registrado con anterioridad <br>";
        echo "NOMBRE DE USUARIO ".$nombre. "<br>"; 
        echo "MAIL DE USURIO ".$email."<br>"; 
        return $nombre;
        
    }
    else 
        { file_put_contents("datos.txt", $contenido);
            echo "<script>alert('EL USUARIO SE HA REGISTRADO CON EXITO');</script>";}
 
    fclose($archivo1);
    return $usuarioValido;

    
}

function regTarj($nom, $ap, $prof, $desc){
    $contenido = file_get_contents(" ");
    $contenido .= $nom;
    $contenido .= "/";
    $contenido .= $ap;
    $contenido .= "/";
    $contenido .= $prof;
    $contenido .= "/";
    $contenido .= $desc;
    file_put_contents("tarjeta.txt", $contenido);}

function validar($us,$cl){
    
    $pas = md5($cl)."\n";
    $nombre = $us;
    $Valido = 1;
    $pasbad = '';
    $archivo1 = fopen("datos.txt", "r");
    if ($archivo1) {
        while (($fila = fgets($archivo1)) == true && $Valido == 1) {
            $datosUs = explode(" ",$fila);
            if($nombre == $datosUs[0] ) {
                                if( $datosUs[2] == $pas){
                                    $Valido = 2; 
                                    
                                }
                                else { 
                                    $pasbad = 1;
                                }
                
            } 
                                               
         }
}

    if ($Valido == 2) {
        
        echo "BIENVENIDO AL SISTEMA".$nombre;
        header("Location:tarjeta.php");
    }
    else {
            if( $pasbad == 1){
                echo "<script>alert('Usuario Valido Contrasenia Invalida');</script>";
               
            }
            else {
                echo "<script>alert('El USUARIO NO SE ENCUENTRA EN LA BASE DE DATOS');</script>";}
    }

  
    fclose($archivo1); 
   

}

function regUsuarioJSON($nom, $em, $pas){
    $contenido = file_get_contents("datos.json");
    $us = array();
    $us["nombreUsuario"] = $nom;
    $us["emailUsuario"] = $em;
    $us["passUsuario"] = md5($pas);
    $jsonUsuario = json_encode($us);
    $contenido .= $jsonUsuario;
    $contenido .= ",";
    file_put_contents("datos.json", $contenido);
}
function checkLogin() {
    session_start();
    if (!isset($_SESSION["usuario"])) {
    header("Location:formulario.php");
    } 
}
function validarUs($n, $p){
    $p = md5($p);
    $usuarioValido = false;
    $archivo1 = fopen("datos.txt", "r");
    if ($archivo1) {
        while (($fila = fgets($archivo1)) == true) {
            $datosUs = explode(" ",$fila);
            if($datosUs[0] === $n && str_replace("\n","",$datosUs[2]) === $p) {
                $usuarioValido = true;

            }
            //echo $datosUs[0];
            //echo $datosUs[1];
            //echo $datosUs[2];   
        }
    }
    fclose($archivo1);
    return $usuarioValido;
}
function login($u,$e,$c) {


    $validoUs = "Cristian";
    $emailValido = "cmitas@depcsuite.com";
    $passValida = "019c9fbe91025390efb1c65ce5eee5d6";
    if ($u == $validoUs && $e == $emailValido && $c == $passValida) {
        session_start();
        $_SESSION["usuario"] = $validoUs;
    } 
    else 
    {
        header("Location: formulario.php");
        
    }
}
// Las variables que se crean en el interior de una función sólo tienen vigencia dentro de ella
// Esto significa que no son ni accesibles ni visibles desde el exterior
//echo calcularNeto();
//echo "<br>La variable bruto vale: ".$bruto;
