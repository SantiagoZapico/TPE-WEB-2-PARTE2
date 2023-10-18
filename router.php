<?php
require_once 'app/controllers/tablaPrendas.controller.php';
require_once 'app/controllers/tablaDetalles.controller.php';
require_once 'app/controllers/auth.controller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la acción 
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'login':
        $controller = new AuthController();
        $controller->mostrarLogin();
        break;
    case 'verify':
        $controller = new AuthController();
        $controller->loginUser();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;
    case 'home':
        $controller = new TablaPrendasController();
        $controller2 = new TablaDetallesController();
        $controller->mostrarTabla();
        $controller2->mostrarTabla2();
        break;
    case 'agregar':
        $controller = new TablaPrendasController();
        $controller->agregarPrenda();
        break;
    case 'eliminar':  // eliminar/:ID
        $controller = new TablaPrendasController();
        $id = $params[1];
        $controller->borrarPrenda($id);
        break;
    case 'editar':
        $controller = new TablaPrendasController();
        $id = $params[1];
        $controller->editarPrenda($id);
        break;
    case 'agregarDetalles':
        $controller = new TablaDetallesController();
        $controller->agregar();
        break;
    case 'eliminarDetalles':
        $controller = new TablaDetallesController();
        $id = $params[1];
        $controller->borrar($id);
        break;
    case 'editarDetalles':
        $controller = new TablaDetallesController();
        $id = $params[1];
        $controller->editarDetallesPrenda($id);
        break;
    case 'verDetalles':
        $controller = new TablaDetallesController();
        $id = $params[1];
        $controller->mostrarDetalles($id);
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo('404 Page not found');
        break;
}


?>