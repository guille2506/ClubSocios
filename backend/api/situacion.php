<?php
header("Content-Type: application/json; charset=UTF-8");
require_once "../config/conexion.php";
require_once "../models/Situacion.php";

$situacion = new Situacion($conn);

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $result = $situacion->readAll();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
        break;

    case 'POST':
        $input = json_decode(file_get_contents("php://input"), true);
        if (!empty($input['nombre_situacion'])) {
            $ok = $situacion->create($input['nombre_situacion']);
            echo json_encode(["success" => $ok]);
        } else {
            echo json_encode(["error" => "Falta nombre de situación"]);
        }
        break;
}
?>
