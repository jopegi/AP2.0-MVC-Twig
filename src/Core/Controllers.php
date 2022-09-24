<?php

/**
 * Esta clase se encarga de cargar los Modelos
 *
 */

namespace src\Core;

use src\Models;

class Controllers
{

    protected $views;
    protected $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $this->twig = new \Twig\Environment($loader, ['debug' => true,]);
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());

        $this->loadModel();
    }

    public function loadModel()
    {
        $arrPathFragments = explode('\\', get_class($this));
        $model = array_pop($arrPathFragments) . "Model";
        $routClass = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . $model . ".php";
        // print_r($routClass);
        if (file_exists($routClass)) {
            require_once($routClass);
            $instance = '\\src\\Models\\' . $model;
            $this->model = new $instance();
        }
    }
}
