<?php
require_once '../Controlador/UserController.php';

$uri = parse_url(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
switch ($uri['path']) {
    case '/':
        $user_controller = new UserController();
        $user_controller->index();
        break;
    case '/update':
         $id = isset($_GET['id']) ? $_GET['id'] : null;
         $user_controller = new UserController();
         $user_controller->actualizar($id);         
        break;
    case "/actualizar_usuario":
    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;

}


?> 


