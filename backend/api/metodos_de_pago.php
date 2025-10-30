<?php
header("Content-Type: application/json; charset=UTF-8");
require_once "../config/conexion.php";
require_once "../models/MetodoDePago.php";

$metodo = new MetodoDePago($conn);

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $result = $metodo->readAll();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
        break;

    case 'POST':
        $input = json_decode(file_get_contents("php://input"), true);
        if (!empty($input['admin_id']) && !empty($input['nombre'])) {
            $ok = $metodo->create($input['admin_id'], $input['nombre']);
            echo json_encode(["success" => $ok]);
        } else {
            echo json_encode(["error" => "Faltan datos"]);
        }
        break;
}
?>
