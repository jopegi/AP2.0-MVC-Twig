<?php

/**
 * Controlador Vista lista - Modelo Lista
 */

namespace src\Controllers;

use src\Core\Controllers;

class Lista extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }

    public function lista()
    {
        $tareas = $this->model->getAllTareas();
        echo $this->twig->render('list.html.twig', ['tareas' => $tareas]);
    }
}
