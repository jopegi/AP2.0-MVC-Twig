<?php

/**
 * Controlador Vista Home - Modelo Home
 */


namespace src\Controllers;

use src\Core\Controllers;

class Home extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $date = date('d-m-y h:i:s');
        echo $this->twig->render('home.html.twig', ['date' => $date]);
    }
}
