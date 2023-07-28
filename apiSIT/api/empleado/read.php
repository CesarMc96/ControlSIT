<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/database.php';
include_once '../../class/empleado.php';

$database = new Database();
$db = $database->getConnection();

$item = new Empleado($db);

$stmt = $item->getUsuarios();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    $employeeArr = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "idEmpleado" => $idEmpleado,
            "Id_empleado" => $Id_empleado,
            "Nombre_persona" => $Nombre_persona,
            "Usuario_Conagua" => $Usuario_Conagua,
            "Numero_Extension" => $Numero_Extension,
            "Correo_Conagua" => $Correo_Conagua,
            "CURP" => $CURP,
            "NombrePuesto" => $NombrePuesto,
            "NombreGerencia" => $NombreGerencia,
            "NombreArea" => $NombreArea
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
