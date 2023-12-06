<?php
require_once './models/TaskModels.php';
require_once './controllers/TaskController.php';

$model = new TaskModel();
$controller = new taskController($model);

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'getAllTask';
            echo $controller->getAllTask();
            break;
        case 'getTaskById':
            if (isset($_GET['id'])) {
                echo $controller->getTaskById($_GET['id']);
            } else {
                echo json_encode(['message' => 'se require un id']);
            }
            break;
        default:
            echo json_encode(['message' => 'Acción no válida']);
    }
}
