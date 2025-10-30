<?php
header("Content-Type: application/json; charset=UTF-8");
require_once "../config/conexion.php";
require_once "../models/Miembro.php";

$miembro = new Miembro($conn);

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (!empty($_GET['codigo'])) {
            $codigo = $_GET['codigo'];
            $result = $miembro->readByCodigo($codigo);
            if ($result) {
                echo json_encode([
                    "status" => "ok",
                    "mensaje" => "Miembro encontrado",
                    "datos" => $result
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "mensaje" => "Miembro no encontrado"
                ]);
            }
        } else {
            $result = $miembro->readAll();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            echo json_encode($data);
        }
        break;

    case 'POST':
        $input = json_decode(file_get_contents("php://input"), true);
        if (!empty($input['admin_id']) && !empty($input['nombre']) && !empty($input['apellido'])) {
            $ok = $miembro->create(
                $input['admin_id'],
                $input['nombre'],
                $input['apellido'],
                $input['dni'] ?? '',
                $input['codigo'] ?? '',
                $input['metodo_de_pagos_id'] ?? null,
                $input['fecha_de_vencimiento'] ?? null,
                $input['situacion_id'] ?? 1,
                $input['plan_id'] ?? 1
            );
            echo json_encode(["success" => $ok]);
        } else {
            echo json_encode(["error" => "Datos incompletos"]);
        }
        break;
}
?>
