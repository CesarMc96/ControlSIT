<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../config/database.php';
include_once '../../class/equipoCompleto.php';

$database = new Database();
$db = $database->getConnection();

$item = new EquipoCompleto($db);

$item->idEquipo = isset($_GET['idEquipo']) ? $_GET['idEquipo'] : die();

$stmt = $item->obtenerEquipoID();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    $equipoArr = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "idEquipoCompleto" => $idEquipoCompleto,
            "Numero_Serie" => $Numero_Serie,
            "Monitor" => $Monitor
        );
        array_push($equipoArr, $e);
    }
    echo json_encode($equipoArr);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Sin registros.")
    );
}
