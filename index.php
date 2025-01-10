<?php
require_once 'config/Database.php';
require_once 'models/Menu.php';
require_once 'controllers/MenuController.php';

$database = new Database();
$db = $database->getConnection();
$controller = new MenuController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($action) {
    case 'detail':
        $controller->detail($id);
        break;
    default:
        $controller->index();
        break;
}