<?php
class Miembro {
    private $conn;
    private $table = "miembros";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        $sql = "SELECT m.*, p.nombre AS plan_nombre, s.nombre_situacion, mp.nombre AS metodo_pago
                FROM miembros m
                LEFT JOIN planes p ON m.plan_id = p.id
                LEFT JOIN situacion s ON m.situacion_id = s.id
                LEFT JOIN metodos_de_pago mp ON m.metodo_de_pagos_id = mp.id";
        return $this->conn->query($sql);
    }

    public function create($admin_id, $nombre, $apellido, $dni, $codigo, $metodo_id, $vencimiento, $situacion_id, $plan_id) {
        $stmt = $this->conn->prepare(
            "INSERT INTO {$this->table} (admin_id, nombre, apellido, dni, codigo, metodo_de_pagos_id, fecha_de_vencimiento, situacion_id, plan_id)
             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->bind_param(
            "issssissi",
            $admin_id, $nombre, $apellido, $dni, $codigo, $metodo_id, $vencimiento, $situacion_id, $plan_id
        );
        return $stmt->execute();
    }

    public function readByCodigo($codigo) {
        $stmt = $this->conn->prepare(
            "SELECT m.*, p.nombre AS plan_nombre, s.nombre_situacion, mp.nombre AS metodo_pago
             FROM {$this->table} m
             LEFT JOIN planes p ON m.plan_id = p.id
             LEFT JOIN situacion s ON m.situacion_id = s.id
             LEFT JOIN metodos_de_pago mp ON m.metodo_de_pagos_id = mp.id
             WHERE m.codigo = ? OR m.dni = ?
             LIMIT 1"
        );
        $stmt->bind_param("ss", $codigo, $codigo);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
