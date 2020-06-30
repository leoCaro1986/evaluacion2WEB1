<?php
include('baseDatos.php');

if(isset($_POST["btnEliminar"])){
    $nombre=$_POST["eliminar"];

    //crear objeto

    $operacionBaseDatos =new BaseDatos();

    //Crear consulta
    $consulta="DELETE FROM usuarios WHERE nombre_Usuario='$nombre'";
    $resultado=$operacionBaseDatos->alterarBaseDatos($consulta);
    if($resultado){
        echo("<br>");
        echo("Transaccion exitosa");
    }
}
else{
    echo("No se presiono");
}




?>