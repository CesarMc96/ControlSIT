<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../config/database.php';
include_once '../../class/equipo.php';

$database = new Database();
$db = $database->getConnection();

$item = new Equipo($db);

$item->idEquipo = isset($_GET['idEquipo']) ? $_GET['idEquipo'] : die();

$stmt = $item->obtenerEquipoID();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "idEquipo" => $idEquipo,
            "Nombre" => $Nombre,
            "Descripcion" => $Descripcion,
            "Marca" => $Marca,
            "Modelo" => $Modelo,
            "Host_Name" => $Host_Name,
            "Numero_Serie" => $Numero_Serie,
            "Id_CONAGUA" => $Id_CONAGUA,
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
