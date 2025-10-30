<?php
header("Content-Type: application/json; charset=UTF-8");
require_once "../conexion.php";
require_once "../models/Admin.php";

$admin = new Admin($conn);

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $result = $admin->readAll();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
        break;

    case 'POST':
        $input = json_decode(file_get_contents("php://input"), true);
        if (!empty($input['usuario']) && !empty($input['contrasena'])) {
            $ok = $admin->create($input['usuario'], $input['contrasena']);
            echo json_encode(["success" => $ok]);
        } else {
            echo json_encode(["error" => "Datos incompletos"]);
        }
        break;
}
?>
