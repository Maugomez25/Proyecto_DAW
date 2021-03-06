<?php

define("FJSON", dirname(__FILE__,2) . "/Data/DB.json");
define("USERJSON", dirname(__FILE__,2) . "/Data/users.json");

function loadJSON($filePath){

    if($data = file_get_contents($filePath)){
        return json_decode($data, true);
    }
    return false;

}

function writeJSON($data, $filePath){
    return ( ($dataStr = json_encode($data)) && file_put_contents($filePath, $dataStr) );
}

function saveJSON($modelo, $marca, $pais, $motor, $decada, $hp, $torque, $kg, $tiempo, $cilin, $historia, $url){
    $urlInicio = "./Pictures/";

    if($data = loadJSON(FJSON)){
        $data[] = [
                "id" => 0,
                "modelo" => $modelo,
                "marca" => $marca,
                "pais" => $pais,
                "motor" => $motor,
                "decada" => $decada,
                "potencia" => $hp,
                "torque" => $torque,
                "peso" => $kg,
                "tiempo" => $tiempo,
                "cilindrada" => $cilin,
                "historia" => $historia,
                "url" => $urlInicio . $url
        ];
        return writeJSON($data, FJSON);
    }
    return false;

}

function readJSON(){

    if($data = file_get_contents(FJSON)){
        return json_decode($data, true);
    }
    return false;
}

function readUsers(){

    if($data = file_get_contents(USERJSON)){
        return json_decode($data, true);
    }
    return false;
}

function deleteIndex($index){
    $file = readJSON();

    if($file){
        unset($file[$index]);
        $file = array_values($file);
        return writeJSON($file,FJSON);        
    }else{
        return false;
    }

}

function modifyIndex($index, $modelo, $marca, $pais, $motor, $decada, $hp, $torque, $kg, $tiempo, $cilin, $historia, $url){
    $file = readJSON();
    $urlInicio = "./Pictures/";

    if($file){
        $file[$index]["modelo"] = $modelo;
        $file[$index]["marca"] = $marca;
        $file[$index]["pais"] = $pais;
        $file[$index]["motor"] = $motor;
        $file[$index]["decada"] = $decada;
        $file[$index]["potencia"] = $hp;
        $file[$index]["torque"] = $torque;
        $file[$index]["peso"] = $kg;
        $file[$index]["tiempo"] = $tiempo;
        $file[$index]["cilindrada"] = $cilin;
        $file[$index]["historia"] = $historia;
        $file[$index]["url"] = $urlInicio . $url;     
        return writeJSON($file,FJSON); 
    }
    else{
        return false;
    }
    
}

?>