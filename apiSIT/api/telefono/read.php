<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/database.php';
include_once '../../class/telefono.php';

$database = new Database();
$db = $database->getConnection();

$item = new Telefono($db);

$stmt = $item->obtenerInfoTelefonos();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    $employeeArr = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "idconcentradoTelefonos" => $idconcentradoTelefonos,
            "ipTelefono" => $ipTelefono,
            "Marca" => $Marca,
            "Modelo" => $Modelo,
            "Extension" => $Extension,
            "Numero_Serie" => $Numero_Serie,
            "Nombre_persona" => $Nombre_persona
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
