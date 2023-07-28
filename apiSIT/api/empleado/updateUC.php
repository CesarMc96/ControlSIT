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
    
    $item->Correo_Conagua = $data->Correo_Conagua;
    $item->Usuario_Conagua = $data->Usuario_Conagua;
    $item->idUsuarioConagua = $data->idUsuarioConagua;
    $item->Id_empleado = $data->Id_empleado;

    if($item->actualizarUsuarioConagua()){
        echo "Usuario actualizado con exito.";
    } else{
        echo "Error al intentar actualziar al Usuario.";
    }
?>