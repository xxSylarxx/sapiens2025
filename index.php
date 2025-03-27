<?php

/* session_save_path('/home/users/web/b782/ipg.sapientiacorporation/cgi-bin/tmp'); */

// permitir acceso CORS con apache
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST");
header("Allow: GET, POST");

require_once __DIR__ . '/core/config.php';
require_once __DIR__ . '/core/conexion.php';
require_once __DIR__ . '/core/funciones.php';
require_once __DIR__ . '/core/controller.php';

//echo Funciones::generarPass('PassSapiens*@2022'); exit;

$uri = isset($_GET['uri']) ? $_GET['uri'] : 'index';
$uri = rtrim($uri, '/');
$uri = explode('/', $uri);

spl_autoload_register(function ($class) {
    $fileModel = DIROOT . "/models/{$class}.php";
    if (file_exists($fileModel)) {
        require_once $fileModel;
    }
});

if ($uri[0] == 'admin') {
    $controller = isset($uri[1]) ? $uri[1] : 'login';
    $controller = ucwords($controller);
    $fileController = DIROOT . "/controllers/{$controller}Controller.php";
    if (file_exists($fileController)) {
        require_once $fileController;
        $controller = new $controller;
        $method = isset($uri[2]) ? $uri[2] : 'index';
        $params = null;
        if (method_exists($controller, $method) || method_exists($controller, '__call')) {
            if (isset($uri[3])) {
                for ($i = 3; $i < count($uri); $i++) :
                    $params[] = $uri[$i];
                endfor;
            }
            $controller->{$method}($params);
        } else {
            die('Error:: Method does not exist.');
        }
    } else {
        die('Error:: Controller does not exist.');
    }
} else {
    session_start();
    $lang=isset($_SESSION['lang']) ? $_SESSION['lang']:'EN';
    
    $fileView = DIROOT . "/views/{$lang}/web/{$uri[0]}.php";
    if (file_exists($fileView)) {
        $empresa = new EmpresaModel();
        $empresa = $empresa->getDatosEmpresa();
        $nameview = $uri[0];
        include_once $fileView;
    } else {
        include_once DIROOT . '/views/web/error.php';
    } 
   
}
