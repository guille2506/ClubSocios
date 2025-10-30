<?php
class Situacion {
    private $conn;
    private $table = "situacion";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        $sql = "SELECT * FROM {$this->table}";
        return $this->conn->query($sql);
    }

    public function create($nombre_situacion) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (nombre_situacion) VALUES (?)");
        $stmt->bind_param("s", $nombre_situacion);
        return $stmt->execute();
    }
}
?>
