<?php
class Concentrado {

    private $conn;

    private $db_table = "concentrado";

    public $idConcentrado;
    public $IP;
    public $Nodo_red;
    public $equipoExt;
    public $idUsuario;
    public $idResguardante;
    public $VLAN;
    public $Puerto_Switch;
    public $Switch;
    public $Rack;
    public $Comentario;

    public $Host_Name;
    public $Numero_Serie;
    public $Id_empleado; 
    public $Usuario_Conagua; 
    public $Nombre_persona;
    public $Equipo;

    public $Marca;
    public $Modelo;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getIPs() {
        $sqlQuery = "SELECT * from " . $this->db_table;
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function getSingleIP() {
        $sqlQuery = "SELECT * from " . $this->db_table . " WHERE IP = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->IP);
        $stmt->execute();
        return $stmt;
    }

    public function getUsuarioIP() {
        $sqlQuery = "SELECT d.Host_Name, d.Numero_Serie, Id_empleado, Usuario_Conagua, Nombre_persona, td.Nombre Equipo, Comentario from concentrado con
        left join equipo e on e.idEquipo = con.equipoExt
        left join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
        left join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
        left join dispositivo d on d.idDispositivo= e.idDispositivo
        left join empleado emp on emp.idEmpleado = con.idUsuario
        left join persona p on p.idPersona = emp.idPersona
        left join usuarioconagua uc on uc.idUsuarioConagua= emp.idUsuarioConagua WHERE IP = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->IP);
        $stmt->execute();
        return $stmt;
    }

    public function getIPEquipo() {
        $sqlQuery = "SELECT IP, d.Host_Name, d.Numero_Serie, Id_empleado, td.Nombre Equipo, de.Marca, de.Modelo, UPS_Serie from concentrado con
        left join equipo e on e.idEquipo = con.equipoExt
        left join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
        left join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
        left join dispositivo d on d.idDispositivo= e.idDispositivo
        left join empleado emp on emp.idEmpleado = con.idUsuario
        left join persona p on p.idPersona = emp.idPersona
        left join usuarioconagua uc on uc.idUsuarioConagua= emp.idUsuarioConagua WHERE Id_empleado = ?";
        
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->Id_empleado);
        $stmt->execute();
        return $stmt;
    }
}
