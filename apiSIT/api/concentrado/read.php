<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/database.php';
include_once '../../class/concentrado.php';

$database = new Database();
$db = $database->getConnection();

$item = new Concentrado($db);

$stmt = $item->getIPs();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    $employeeArr = array();

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

        array_push($employeeArr, $e);
    }
    echo json_encode($employeeArr);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Sin registros.")
    );
}
