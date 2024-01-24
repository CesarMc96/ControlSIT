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

$item->Comentario = isset($_GET['Comentario']) ? $_GET['Comentario'] : die();

$stmt = $item->getIPsEdit();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    $employeeArr = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "idConcentrado" => $idConcentrado,
            "equipoExt" => $equipoExt,
            "idUsuario" => $idUsuario,
            "Rack" => $Rack,
            "IP" => $IP,
            "Nodo_red" => $Nodo_red,
            "VLAN" => $VLAN,
            "Puerto_Switch" => $Puerto_Switch,
            "Switch" => $Switch,
            "Host_Name" => $Host_Name,
            "Numero_Serie" => $Numero_Serie,
            "Nombre_persona" => $Nombre_persona,
            "Comentario" => $Comentario
        );
        array_push($employeeArr, $e);
    }
    echo json_encode($employeeArr);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Sin registros." )
    );
}
