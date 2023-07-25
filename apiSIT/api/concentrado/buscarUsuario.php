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

$item->IP = isset($_GET['IP']) ? $_GET['IP'] : die();

$stmt = $item->getUsuarioIP();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "Host_Name" => $Host_Name,
            "Numero_Serie" => $Numero_Serie,
            "Id_empleado" => $Id_empleado,
            "Usuario_Conagua" => $Usuario_Conagua,
            "Nombre_persona" => $Nombre_persona,
            "Equipo" => $Equipo
        );
    }
    echo json_encode($e);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Sin registros.")
    );
}
