<?php
/**
 * Esta clase se encarga de cargar los Controladores
 *
 */

$controller = ($controller) ? ucwords($controller) : '';
$controllerFile = $config['rootPath'] . "/src/Controllers/" . $controller . ".php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerInstanceName = 'src\\Controllers\\' . $controller;
    $controller = new $controllerInstanceName();
    if (method_exists($controller, $method)) {
        $method_args = explode(",", $params);
        $controller->{$method}(...$method_args);
    } else {
        require_once $config['rootPath'] . "/templates/404.html";
    }
} else {
    require_once $config['rootPath'] . "/templates/404.html";
}
