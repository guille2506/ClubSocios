<?php
class MetodoDePago {
    private $conn;
    private $table = "metodos_de_pago";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        $sql = "SELECT * FROM {$this->table}";
        return $this->conn->query($sql);
    }

    public function create($admin_id, $nombre) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (admin_id, nombre) VALUES (?, ?)");
        $stmt->bind_param("is", $admin_id, $nombre);
        return $stmt->execute();
    }
}
?>
