<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../../config/database.php';
    include_once '../../class/empleado.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Empleado($db);

    $data = json_decode(file_get_contents("php://input"));

    $item->Nombre_persona = $data->Nombre_persona;
    $item->CURP = $data->CURP;
    $item->Correo_Conagua = $data->Correo_Conagua;
    $item->Usuario_Conagua = $data->Usuario_Conagua;
    $item->Id_empleado = $data->Id_empleado;
    $item->idArea = $data->idArea;
    $item->idPuesto = $data->idPuesto;
    $item->idGerencia = $data->idGerencia;
    
    if($item->crearUsuario()){
        echo 'Usuario creado exitosamente.';
    } else{
        echo 'Error al intentar crear al Usuario.';
    }
?>