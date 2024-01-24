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

    public function getIPsEdit() {
        $sqlQuery = "SELECT idConcentrado, equipoExt, idUsuario, Rack, IP, Nodo_red, VLAN, Puerto_Switch, Switch, d.Host_Name, d.Numero_Serie, Nombre_persona, Comentario from concentrado con
        left join equipo e on e.idEquipo = con.equipoExt
        left join dispositivo d on d.idDispositivo= e.idDispositivo
        left join empleado emp on emp.idEmpleado = con.idUsuario
        left join persona p on p.idPersona = emp.idPersona 
        where Comentario LIKE :Comentario or Nombre_persona LIKE :Comentario";
        
        $stmt = $this->conn->prepare($sqlQuery);
        $this->Comentario = htmlspecialchars(strip_tags($this->Comentario));
        $stmt->bindParam(":Comentario", $this->Comentario);

            $this->Comentario = '%' . $this->Comentario;

        $stmt->execute();
        return $stmt;
    } 
    

    public function crearIP() {
        $sqlQuery = "INSERT INTO concentrado SET IP=:IP, Nodo_red=:Nodo_red, equipoExt=:equipoExt, idUsuario=:idUsuario, idResguardante=:idResguardante, VLAN=:VLAN, Puerto_Switch=:Puerto_Switch, Switch=:Switch, Rack=:Rack, Comentario=:Comentario";

        $stmt = $this->conn->prepare($sqlQuery);
        $this->IP = htmlspecialchars(strip_tags($this->IP));
        $this->Nodo_red = htmlspecialchars(strip_tags($this->Nodo_red));
        $this->equipoExt = htmlspecialchars(strip_tags($this->equipoExt));
        $this->idUsuario = htmlspecialchars(strip_tags($this->idUsuario));
        $this->idResguardante = htmlspecialchars(strip_tags($this->idResguardante));
        $this->VLAN = htmlspecialchars(strip_tags($this->VLAN));
        $this->Puerto_Switch = htmlspecialchars(strip_tags($this->Puerto_Switch));
        $this->Switch = htmlspecialchars(strip_tags($this->Switch));
        $this->Rack = htmlspecialchars(strip_tags($this->Rack));
        $this->Comentario = htmlspecialchars(strip_tags($this->Comentario));

        $stmt->bindParam(":IP", $this->IP);
        $stmt->bindParam(":Nodo_red", $this->Nodo_red);
        $stmt->bindParam(":equipoExt", $this->equipoExt);
        $stmt->bindParam(":idUsuario", $this->idUsuario);
        $stmt->bindParam(":idResguardante", $this->idResguardante);
        $stmt->bindParam(":VLAN", $this->VLAN);
        $stmt->bindParam(":Puerto_Switch", $this->Puerto_Switch);
        $stmt->bindParam(":Switch", $this->Switch);
        $stmt->bindParam(":Rack", $this->Rack);
        $stmt->bindParam(":Comentario", $this->Comentario);

        if($this->Comentario == ''){
            $this->Comentario = null;
        }

        if($this->idUsuario == ''){
            $this->idUsuario = null;
        }

        if($this->idResguardante == ''){
            $this->idResguardante = null;
        }

        if($this->equipoExt == ''){
            $this->equipoExt = null;
        }

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function actualizarIP() {
        $sqlQuery = "UPDATE " . $this->db_table . " SET IP=:IP, Nodo_red=:Nodo_red, equipoExt=:equipoExt, idUsuario=:idUsuario, VLAN=:VLAN, Puerto_Switch=:Puerto_Switch, Switch=:Switch, Rack=:Rack, Comentario=:Comentario WHERE idConcentrado=:idConcentrado";

        $stmt = $this->conn->prepare($sqlQuery);
        $this->IP = htmlspecialchars(strip_tags($this->IP));
        $this->Nodo_red = htmlspecialchars(strip_tags($this->Nodo_red));
        $this->equipoExt = htmlspecialchars(strip_tags($this->equipoExt));
        $this->idUsuario = htmlspecialchars(strip_tags($this->idUsuario));
        $this->VLAN = htmlspecialchars(strip_tags($this->VLAN));
        $this->Puerto_Switch = htmlspecialchars(strip_tags($this->Puerto_Switch));
        $this->Switch = htmlspecialchars(strip_tags($this->Switch));
        $this->Rack = htmlspecialchars(strip_tags($this->Rack));
        $this->Comentario = htmlspecialchars(strip_tags($this->Comentario));
        $this->idConcentrado = htmlspecialchars(strip_tags($this->idConcentrado));

        $stmt->bindParam(":IP", $this->IP);
        $stmt->bindParam(":Nodo_red", $this->Nodo_red);
        $stmt->bindParam(":equipoExt", $this->equipoExt);
        $stmt->bindParam(":idUsuario", $this->idUsuario);
        $stmt->bindParam(":VLAN", $this->VLAN);
        $stmt->bindParam(":Puerto_Switch", $this->Puerto_Switch);
        $stmt->bindParam(":Switch", $this->Switch);
        $stmt->bindParam(":Rack", $this->Rack);
        $stmt->bindParam(":Comentario", $this->Comentario);
        $stmt->bindParam(":idConcentrado", $this->idConcentrado);

        if($this->Comentario == ''){
            $this->Comentario = null;
        }

        if($this->idUsuario == ''){
            $this->idUsuario = null;
        }

        if($this->equipoExt == ''){
            $this->equipoExt = null;
        }

        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
