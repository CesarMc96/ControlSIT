<?php
class Empleado {

    private $conn;

    private $db_table = "empleado";

    public $idEmpleado;
    public $Id_empleado;
    public $Nombre_persona;
    public $Usuario_Conagua;
    public $Numero_Extension;
    public $Numero_did;
    public $Correo_Conagua;
    public $CURP;
    public $NombrePuesto;
    public $NombreGerencia;
    public $NombreArea;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getUsuarios() {
        $sqlQuery = "SELECT e.idEmpleado, uc.Id_empleado, p.Nombre_persona, uc.Usuario_Conagua, uc.Numero_Extension, uc.Numero_did, uc.Correo_Conagua, p.CURP, 
        pu.NombrePuesto, g.NombreGerencia, a.NombreArea from " . $this->db_table . " e
        inner join persona p on p.idPersona = e.idPersona
        inner join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua
        inner join puesto pu on pu.idPuesto= e.idPuesto
        inner join area a on a.idArea = e.idArea
        inner join gerencia g on g.idGerencia= e.idGerencia 
        order by e.idEmpleado";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function getSingleUsuarioID() {
        $sqlQuery = "SELECT e.idEmpleado, uc.Id_empleado, p.Nombre_persona, uc.Usuario_Conagua, uc.Numero_Extension, uc.Numero_did, uc.Correo_Conagua, p.CURP, 
        pu.NombrePuesto, g.NombreGerencia, a.NombreArea from " . $this->db_table . " e
        inner join persona p on p.idPersona = e.idPersona
        inner join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua
        inner join puesto pu on pu.idPuesto= e.idPuesto
        inner join area a on a.idArea = e.idArea
        inner join gerencia g on g.idGerencia= e.idGerencia
        WHERE e.idEmpleado = ? LIMIT 0,1";

        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->idEmpleado);
        $stmt->execute();
        return $stmt;
    }

}
