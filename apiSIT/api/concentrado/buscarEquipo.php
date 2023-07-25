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

$item->Id_empleado = isset($_GET['Id_empleado']) ? $_GET['Id_empleado'] : die();

$stmt = $item->getIPEquipo();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "IP" => $IP,
            "Host_Name" => $Host_Name,
            "Numero_Serie" => $Numero_Serie,
            "Id_empleado" => $Id_empleado,
            "Equipo" => $Equipo,
            "Marca" => $Marca,
            "Modelo" => $Modelo,
            "UPS_Serie" => $UPS_Serie
        );
    }
    echo json_encode($e);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Sin registros.")
    );
}
