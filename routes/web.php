<?php

require_once __DIR__ . "/../controllers/PenerimaManfaatController.php";
require_once __DIR__ . "/../controllers/SekolahController.php";

$penerimaController = new PenerimaManfaatController();
$sekolahController = new SekolahController();

$route = $_GET["route"] ?? "/";

switch ($route) {
    case '/':
        $penerimaController->index();
        break;
    case '/create':
        $penerimaController->create();
        break;
    case '/store':
        $penerimaController->store();
        break;
    case '/edit':
        $penerimaController->edit();
        break;
    case '/update':
        $penerimaController->update();
        break;
    case '/delete':
        $penerimaController->destroy();
        break;
    case '/store-school':
        $sekolahController->store();
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}