<?php
class Telefono {

    private $conn;

    private $db_table = "concentradotelefonos";

    public $idconcentradoTelefonos; 
    public $ipTelefono;
    public $Marca; 
    public $Modelo; 
    public $Extension;
    public $Numero_Serie;
    public $Nombre_persona;

    public $IP;
    public $idEquipo;
    public $idExtension;
    public $idEmpleado;
    public $Comentarios;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerInfoTelefonos() {
        $sqlQuery = "SELECT idconcentradoTelefonos, ipTelefono, Marca, Modelo, Numero Extension, Numero_Serie, p.Nombre_persona 
        FROM " . $this->db_table . " ct
        left join equipo e on e.idEquipo = ct.idEquipo
        left join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
        left join extension ext on ext.idExtension= ct.idExtension
        left join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
        left join dispositivo d on d.idDispositivo= e.idDispositivo
        left join empleado em on em.idEmpleado= ct.idEmpleado
        left join persona p on p.idPersona = em.idPersona";

        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function obtenerInfoTelefonosIP() {
        $sqlQuery = "SELECT idconcentradoTelefonos, ipTelefono, Marca, Modelo, Numero Extension, Numero_Serie, p.Nombre_persona, ct.Comentarios 
        FROM " . $this->db_table . " ct
        left join equipo e on e.idEquipo = ct.idEquipo
        left join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
        left join extension ext on ext.idExtension= ct.idExtension
        left join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
        left join dispositivo d on d.idDispositivo= e.idDispositivo
        left join empleado em on em.idEmpleado= ct.idEmpleado
        left join persona p on p.idPersona = em.idPersona
        where idconcentradoTelefonos =  ? LIMIT 0,1";

        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->idconcentradoTelefonos);
        $stmt->execute();
        return $stmt;
    }

    public function actualizarTelefono() {
        //$sqlQuery = "UPDATE " . $this->db_table . " SET idEquipo=:idEquipo, idExtension=:idExtension, idEmpleado=:idEmpleado WHERE idconcentradoTelefonos=:idconcentradoTelefonos";
        $sqlQuery = "UPDATE " . $this->db_table . " SET idEmpleado=:idEmpleado, Comentarios=:Comentarios WHERE idconcentradoTelefonos=:idconcentradoTelefonos";

        $stmt = $this->conn->prepare($sqlQuery);

        $this->idconcentradoTelefonos = htmlspecialchars(strip_tags($this->idconcentradoTelefonos));
        //$this->idEquipo = htmlspecialchars(strip_tags($this->idEquipo));
        //$this->idExtension = htmlspecialchars(strip_tags($this->idExtension));
        $this->idEmpleado = htmlspecialchars(strip_tags($this->idEmpleado));
        $this->Comentarios = htmlspecialchars(strip_tags($this->Comentarios));
        $stmt->bindParam(":idconcentradoTelefonos", $this->idconcentradoTelefonos);
        $stmt->bindParam(":Comentarios", $this->Comentarios);
        //$stmt->bindParam(":idEquipo", $this->idEquipo);
        //$stmt->bindParam(":idExtension", $this->idExtension);
        $stmt->bindParam(":idEmpleado", $this->idEmpleado);
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
