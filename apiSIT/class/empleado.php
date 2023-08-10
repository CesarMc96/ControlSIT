<?php
class Empleado {

    private $conn;

    private $db_table = "empleado";

    public $idEmpleado;
    public $Id_empleado;
    public $Nombre_persona;
    public $Usuario_Conagua;
    public $Numero_Extension;
    public $Correo_Conagua;
    public $CURP;
    public $NombrePuesto;
    public $NombreGerencia;
    public $NombreArea;
    public $idUsuarioConagua;

    public $idPuesto;
    public $idArea;
    public $idGerencia;
    public $idPersona;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getUsuarios() {
        $sqlQuery = "SELECT e.idEmpleado, uc.Id_empleado, p.Nombre_persona, uc.Usuario_Conagua, ext.Numero Numero_Extension, uc.Correo_Conagua, p.CURP, 
        pu.NombrePuesto, g.NombreGerencia, a.NombreArea from " . $this->db_table . " e
        left join persona p on p.idPersona = e.idPersona
        left join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua
        left join puesto pu on pu.idPuesto= e.idPuesto
        left join area a on a.idArea = e.idArea
        left join gerencia g on g.idGerencia= e.idGerencia
        left join concentradotelefonos ct on  ct.idEmpleado = e.idEmpleado
        left join extension ext on ext.idExtension= ct.idExtension
        order by e.idEmpleado";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function getSingleUsuarioID() {
        $sqlQuery = "SELECT e.idEmpleado, uc.Id_empleado, p.Nombre_persona, e.idUsuarioConagua, uc.Usuario_Conagua, ext.Numero Numero_Extension, uc.Correo_Conagua, p.CURP, 
        pu.NombrePuesto, g.NombreGerencia, a.NombreArea, e.idPersona from " . $this->db_table . " e
        left join persona p on p.idPersona = e.idPersona
        left join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua
        left join puesto pu on pu.idPuesto= e.idPuesto
        left join area a on a.idArea = e.idArea
        left join gerencia g on g.idGerencia= e.idGerencia
        left join concentradotelefonos ct on  ct.idEmpleado = e.idEmpleado
        left join extension ext on ext.idExtension= ct.idExtension
        WHERE e.idEmpleado = ?";

        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->idEmpleado);
        $stmt->execute();
        return $stmt;
    }

    public function actualizarEmpleado() {
        $sqlQuery = "UPDATE usuarioconagua SET Correo_Conagua=:Correo_Conagua, Usuario_Conagua=:Usuario_Conagua, Id_empleado=:Id_empleado WHERE idUsuarioConagua = :idUsuarioConagua";

        $stmt = $this->conn->prepare($sqlQuery);

        $this->idUsuarioConagua = htmlspecialchars(strip_tags($this->idUsuarioConagua));
        $this->Correo_Conagua = htmlspecialchars(strip_tags($this->Correo_Conagua));
        $this->Usuario_Conagua = htmlspecialchars(strip_tags($this->Usuario_Conagua));
        $this->Id_empleado = htmlspecialchars(strip_tags($this->Id_empleado));

        if($this->Id_empleado == ''){
            $this->Id_empleado = null;
        }

        if($this->Correo_Conagua == ''){
            $this->Correo_Conagua = null;
        }

        if($this->Usuario_Conagua == ''){
            $this->Usuario_Conagua = null;
        }

        $stmt->bindParam(":Correo_Conagua", $this->Correo_Conagua);
        $stmt->bindParam(":Usuario_Conagua", $this->Usuario_Conagua);
        $stmt->bindParam(":idUsuarioConagua", $this->idUsuarioConagua);
        $stmt->bindParam(":Id_empleado", $this->Id_empleado);

        $sqlQuery2 = "UPDATE empleado SET idPuesto=:idPuesto, idArea=:idArea, idGerencia=:idGerencia WHERE idEmpleado = :idEmpleado";

        $stmt2 = $this->conn->prepare($sqlQuery2);

        $this->idPuesto = htmlspecialchars(strip_tags($this->idPuesto));
        $this->idArea = htmlspecialchars(strip_tags($this->idArea));
        $this->idGerencia = htmlspecialchars(strip_tags($this->idGerencia));
        $this->idEmpleado = htmlspecialchars(strip_tags($this->idEmpleado));
        $stmt2->bindParam(":idPuesto", $this->idPuesto);
        $stmt2->bindParam(":idArea", $this->idArea);
        $stmt2->bindParam(":idGerencia", $this->idGerencia);
        $stmt2->bindParam(":idEmpleado", $this->idEmpleado);

        $sqlQuery3 = "UPDATE persona SET Nombre_persona=:Nombre_persona, CURP=:CURP WHERE idPersona = :idPersona";

        $stmt3 = $this->conn->prepare($sqlQuery3);

        $this->Nombre_persona = htmlspecialchars(strip_tags($this->Nombre_persona));
        $this->CURP = htmlspecialchars(strip_tags($this->CURP));
        $this->idPersona = htmlspecialchars(strip_tags($this->idPersona));
        $stmt3->bindParam(":Nombre_persona", $this->Nombre_persona);
        $stmt3->bindParam(":CURP", $this->CURP);
        $stmt3->bindParam(":idPersona", $this->idPersona);

        if ($stmt->execute() && $stmt2->execute() && $stmt3->execute()) {
            return true;
        }
        return false;
    }

    public function crearUsuario() {
        $sqlQuery = "INSERT INTO persona SET Nombre_persona=:Nombre_persona, CURP=:CURP";

        $stmt = $this->conn->prepare($sqlQuery);
        $this->Nombre_persona = htmlspecialchars(strip_tags($this->Nombre_persona));
        $this->CURP = htmlspecialchars(strip_tags($this->CURP));
        $stmt->bindParam(":Nombre_persona", $this->Nombre_persona);
        $stmt->bindParam(":CURP", $this->CURP);
        //$stmt->execute();

        $sqlQuery2 = "INSERT INTO usuarioconagua SET Correo_Conagua=:Correo_Conagua, Usuario_Conagua=:Usuario_Conagua, Id_empleado=:Id_empleado";

        $stmt2 = $this->conn->prepare($sqlQuery2);
        $this->Correo_Conagua = htmlspecialchars(strip_tags($this->Correo_Conagua));
        $this->Usuario_Conagua = htmlspecialchars(strip_tags($this->Usuario_Conagua));
        $this->Id_empleado = htmlspecialchars(strip_tags($this->Id_empleado));
        
        if($this->Id_empleado == ''){
            $this->Id_empleado = null;
        }

        if($this->Correo_Conagua == ''){
            $this->Correo_Conagua = null;
        }

        if($this->Usuario_Conagua == ''){
            $this->Usuario_Conagua = null;
        }

        $stmt2->bindParam(":Correo_Conagua", $this->Correo_Conagua);
        $stmt2->bindParam(":Usuario_Conagua", $this->Usuario_Conagua);
        $stmt2->bindParam(":Id_empleado", $this->Id_empleado);
        //$stmt2->execute();

        $sqlQuery3 = "INSERT INTO empleado SET idPersona=(SELECT MAX(idPersona) AS id FROM persona), idUsuarioConagua=(SELECT MAX(idUsuarioConagua) AS id FROM usuarioconagua), idPuesto=:idPuesto, idArea=:idArea, idGerencia=:idGerencia";

        $stmt3 = $this->conn->prepare($sqlQuery3);
        $this->idPuesto = htmlspecialchars(strip_tags($this->idPuesto));
        $this->idArea = htmlspecialchars(strip_tags($this->idArea));
        $this->idGerencia = htmlspecialchars(strip_tags($this->idGerencia));
        $stmt3->bindParam(":idPuesto", $this->idPuesto);
        $stmt3->bindParam(":idArea", $this->idArea);
        $stmt3->bindParam(":idGerencia", $this->idGerencia);

        if ($stmt->execute() && $stmt2->execute() && $stmt3->execute()) {
            return true;
        }
        return false;
    }
}
