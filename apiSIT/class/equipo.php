<?php
class Equipo {

    private $conn;

    private $db_table = "equipo";

    public $idEquipo;
    public $Nombre;
    public $Descripcion;
    public $Marca;
    public $Modelo;
    public $Host_Name;
    public $Numero_Serie;
    public $Id_CONAGUA;
    public $UPS_Serie;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerEquipoID() {
        $sqlQuery = "SELECT e.idEquipo, td.Nombre, td.Descripcion, de.Marca, de.Modelo, d.Host_Name, d.Numero_Serie, d.Id_CONAGUA, UPS_Serie FROM " . $this->db_table . " e
        inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
        inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
        inner join dispositivo d on d.idDispositivo= e.idDispositivo
        WHERE e.idEquipo = ? LIMIT 0,1";

        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->idEquipo);
        $stmt->execute();
        return $stmt;
    }

}
