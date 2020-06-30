<?php

include('baseDatos.php');

if(isset($_POST["btnConsultar"])){
    $nombre=$_POST["consultar"];

    $operacionBaseDatos = new BaseDatos();

    $consulta="SELECT nombre_Usuario,apellido_Usuario,email_Usuario,password_Usuario FROM usuarios WHERE nombre_Usuario='$nombre'";

    $resultado=$operacionBaseDatos->consultarEnBaseDatos($consulta);
    print_r($resultado);
}else{
    echo("No se presiono");
}




?>