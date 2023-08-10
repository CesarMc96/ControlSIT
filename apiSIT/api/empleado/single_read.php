<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../../config/database.php';
    include_once '../../class/empleado.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Empleado($db);

    $item->idEmpleado = isset($_GET['idEmpleado']) ? $_GET['idEmpleado'] : die();

    $stmt = $item->getSingleUsuarioID();
    $itemCount = $stmt->rowCount();

    if($itemCount == 1){
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
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
                "NombreArea" => $NombreArea,
                "idUsuarioConagua" => $idUsuarioConagua,
                "idPersona" => $idPersona
            );
        }
        echo json_encode($e);
    } else if ($itemCount > 1) {
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
                "NombreArea" => $NombreArea,
                "idUsuarioConagua" => $idUsuarioConagua,
                "idPersona" => $idPersona
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
