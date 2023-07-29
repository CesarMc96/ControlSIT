<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../../config/database.php';
    include_once '../../class/concentrado.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Concentrado($db);

    $data = json_decode(file_get_contents("php://input"));
    
    $item->IP = $data->IP;
    $item->Nodo_red = $data->Nodo_red;
    $item->equipoExt = $data->equipoExt;
    $item->idUsuario = $data->idUsuario;
    $item->idResguardante = $data->idResguardante;
    $item->VLAN = $data->VLAN;
    $item->Puerto_Switch = $data->Puerto_Switch;
    $item->Switch = $data->Switch;
    $item->Rack = $data->Rack;
    $item->Comentario = $data->Comentario;

    if($item->crearIP()){
        echo 'IP creada exitosamente.';
    } else{
        echo 'Error al intentar crear la IP.';
    }
?>