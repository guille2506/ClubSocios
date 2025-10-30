<?php
header("Content-Type: application/json; charset=UTF-8");
require_once "../config/conexion.php";
require_once "../models/Plan.php";

$plan = new Plan($conn);

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $result = $plan->readAll();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
        break;

    case 'POST':
        $input = json_decode(file_get_contents("php://input"), true);
        if (!empty($input['admin_id']) && !empty($input['nombre']) && !empty($input['precio'])) {
            $ok = $plan->create($input['admin_id'], $input['nombre'], $input['precio']);
            echo json_encode(["success" => $ok]);
        } else {
            echo json_encode(["error" => "Faltan datos"]);
        }
        break;
}
?>
