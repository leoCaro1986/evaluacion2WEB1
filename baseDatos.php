<?php


class BaseDatos{

    //Atributos
    private $servidor="localhost";
    private $usuario="root";
    private $clave="";
    private $nombreBaseDatos="bd_tienda";
    private $conexion;

    //constructor
    public function __construct(){}


    //metodos

    public function conectarConBaseDatos(){

        //configurar la coneccion
        $this->conexion= mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->clave,
            $this->nombreBaseDatos

        );    

        //verificar conexion
        if(!($this->conexion)){
            die('Error de conexion');
        }else{
            echo("Conexion exitosa");
        }
    }

    public function alterarBaseDatos($consultaSQL){
        $this->conectarConBaseDatos();

        $resultado=$this->conexion->query($consultaSQL);

        return($resultado);

        $this->conexion->close();
    }

    //consultar en base de datos
    public function consultarEnBaseDatos($consultaSQL){
        $this->conectarConBaseDatos();
    $resultado=$this->conexion->query($consultaSQL);

    $arregloFilas=array();
    foreach($resultado as $registros){
        $arregloFilas[]=$registros;
    }
    return($arregloFilas);
    $this->conexion->close();

}
}




?>
