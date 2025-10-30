<?php
class Plan {
    private $conn;
    private $table = "planes";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        $sql = "SELECT * FROM {$this->table}";
        return $this->conn->query($sql);
    }

    public function create($admin_id, $nombre, $precio) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (admin_id, nombre, precio) VALUES (?, ?, ?)");
        $stmt->bind_param("isi", $admin_id, $nombre, $precio);
        return $stmt->execute();
    }
}
?>
