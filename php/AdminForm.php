<?php
require_once dirname(__FILE__) . "/Utils.php";

if( strtolower($_SERVER["REQUEST_METHOD"]) === "post" ){

    $modelo = isset($_POST["modelo"]) ? $_POST["modelo"] : null;
    $marca = isset($_POST["marca"]) ? $_POST["marca"] : null;
    $pais = isset($_POST["pais"]) ? $_POST["pais"] : null;
    $motor = isset($_POST["motor"]) ? $_POST["motor"] : null;
    $decada = isset($_POST["decada"]) ? $_POST["decada"] : null;
    $potencia = isset($_POST["potencia"]) ? $_POST["potencia"] : null;
    $torque = isset($_POST["torque"]) ? $_POST["torque"] : null;
    $cilindrada = isset($_POST["cilindrada"]) ? $_POST["cilindrada"] : null;
    $peso = isset($_POST["peso"]) ? $_POST["peso"] : null;
    $tiempo = isset($_POST["tiempo"]) ? $_POST["tiempo"] : null;
    $imagen = isset($_POST["imagen"]) ? $_POST["imagen"] : null;
    $historia = isset($_POST["historia"]) ? $_POST["historia"] : null;

    if( !empty($modelo) && !empty($marca) && !empty($pais) && !empty($motor) && !empty($decada)){

        $result = false;
        echo "Saving.....";
        $result = saveJSON($modelo, $marca, $pais, $motor, $decada, $potencia, $torque, $peso, $tiempo, $cilindrada, $historia, $imagen);
        
        if($result){
            header("Location: ../admin/agregar.php?result=1");
        }
        else{
            header("Location: ../admin/agregar.php?result=0");
        }
        

    }

}