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

$stmt = $item->getSingleIP();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "idConcentrado" => $idConcentrado,
            "IP" => $IP,
            "Nodo_red" => $Nodo_red,
            "equipoExt" => $equipoExt,
            "idUsuario" => $idUsuario,
            "idResguardante" => $idResguardante,
            "VLAN" => $VLAN,
            "Puerto_Switch" => $Puerto_Switch,
            "Switch" => $Switch,
            "Rack" => $Rack,
            "Comentario" => $Comentario
        );
    }
    echo json_encode($e);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Sin registros.")
    );
}
