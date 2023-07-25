<?php
class EquipoCompleto {

    private $conn;

    private $db_table = "equipocompleto";

    public $idEquipo;
    public $idEquipoCompleto;
    public $Numero_Serie;
    public $Monitor;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerEquipoID() {
        $sqlQuery = "SELECT ep.idEquipoCompleto, d.Numero_Serie, m.Numero_Serie Monitor FROM " . $this->db_table . " eP
        inner join equipo e on e.idEquipo = eP.idEquipo
        inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
        inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
        inner join dispositivo d on d.idDispositivo= e.idDispositivo
        inner join monitor m on m.idMonitor= eP.idMonitor
        where eP.idEquipo = ?";

        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->idEquipo);
        $stmt->execute();
        return $stmt;
    }

}
