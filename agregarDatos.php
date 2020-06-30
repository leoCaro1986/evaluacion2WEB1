<?php

include('baseDatos.php');

if(isset($_POST["btnAgregar"])){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $email=$_POST["email"];
    $passwor=$_POST["password"];

    $operacioBaseDatos = new BaseDatos();

    $consulta="INSERT INTO usuarios(nombre_Usuario, apellido_Usuario, email_Usuario, password_Usuario) VALUES ('$nombre','$apellido','$email','$passwor')";

    

    //$operacioBaseDatos->conectarConBaseDatos();

    $resultado=$operacioBaseDatos->alterarBaseDatos($consulta);


    if($resultado){
        echo("Transaccion exitosa, datos agregados");
    }else{
        die("Error en la transaccion");
    }

}else{
    echo("no se enviaron los datos");
}





?>