<?php
class Bitacora {

    private $conn;

    private $db_table = "bitacora";

    public $idbitacora;
    public $idUsuario;
    public $IPConexion;
    public $Fecha;
    public $TipoOperacion;

    public function __construct($db) {
        $this->conn = $db;
    }


    public function crearBitacora() {
        $sqlQuery = "INSERT INTO " . $this->db_table . " SET idUsuario=:idUsuario, IPConexion=:IPConexion, TipoOperacion=:TipoOperacion";

        $stmt = $this->conn->prepare($sqlQuery);
        $this->idUsuario = htmlspecialchars(strip_tags($this->idUsuario));
        $this->IPConexion = htmlspecialchars(strip_tags($this->IPConexion));
        $this->TipoOperacion = htmlspecialchars(strip_tags($this->TipoOperacion));
        $stmt->bindParam(":idUsuario", $this->idUsuario);
        $stmt->bindParam(":IPConexion", $this->IPConexion);
        $stmt->bindParam(":TipoOperacion", $this->TipoOperacion);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
