<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../config/database.php';
include_once '../../class/telefono.php';

$database = new Database();
$db = $database->getConnection();

$item = new Telefono($db);

$item->idconcentradoTelefonos = isset($_GET['idconcentradoTelefonos']) ? $_GET['idconcentradoTelefonos'] : die();

$stmt = $item->obtenerInfoTelefonosIP();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "idconcentradoTelefonos" => $idconcentradoTelefonos,
            "ipTelefono" => $ipTelefono,
            "Marca" => $Marca,
            "Modelo" => $Modelo,
            "Extension" => $Extension,
            "Numero_Serie" => $Numero_Serie,
            "Nombre_persona" => $Nombre_persona,
            "Comentarios" => $Comentarios
        );

    }
    echo json_encode($e);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Sin registros.")
    );
}
