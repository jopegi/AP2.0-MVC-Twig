<?php

namespace src\Models;

use src\Core\Connection;
use \PDO;
use \PDOException;

class ListaModel extends Connection
{

    private $tareas = [];

    function __construct()
    {
        parent::__construct();
    }

    function getAllTareas()
    {
        $sql = "SELECT * FROM tareas;";
        $stmt = $this->conn->query($sql);
        $this->setTareas($stmt->fetchAll(PDO::FETCH_ASSOC));
        return $this->getTareas();
    }

    // GETTERS & SETTERS
    function setTareas($tareas){
        $this->tareas = $tareas;
    }

    function getTareas(){
        return $this->tareas;
    }
}
