<?php
class Admin {
    private $conn;
    private $table = "admin";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        $sql = "SELECT id, usuario, estado FROM {$this->table}";
        return $this->conn->query($sql);
    }

    public function create($usuario, $contrasena) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (usuario, contrasena) VALUES (?, ?)");
        $hash = password_hash($contrasena, PASSWORD_DEFAULT);
        $stmt->bind_param("ss", $usuario, $hash);
        return $stmt->execute();
    }
}
?>
