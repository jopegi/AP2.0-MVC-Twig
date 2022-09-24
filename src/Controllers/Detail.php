<?php

/**
 * Controlador Vista Detalle - Modelo Detalle
 */

namespace src\Controllers;

use src\Core\Controllers;

class Detail extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }

    public function detail($id)
    {
        $detalle = $this->model->getDetallesTarea($id);
        echo $this->twig->render('detail.html.twig', ['detalle' => $detalle]);
    }
}
