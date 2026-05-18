<?php

require_once __DIR__ . "/../controllers/PenerimaManfaatController.php";

$controller = new PenerimaManfaatController();

$route = $_GET["route"] ?? "/";

switch ($route) {
    case '/':
        $controller->index();
        break;
    case '/create':
        $controller->create();
        break;
    case '/edit':
        $controller->edit();
        break;
    case '/delete':
        $controller->destroy();
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}