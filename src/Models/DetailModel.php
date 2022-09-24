<?php

namespace src\Models;

use src\Core\Connection;
use \PDO;
use \PDOException;

class DetailModel extends Connection
{

    private $detalles = [];

    function __construct()
    {
        parent::__construct();
    }

    function getDetallesTarea($id)
    {
        $sql = "SELECT * FROM tareas Where id = :id;";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $this->setDetalles($stmt->fetch(PDO::FETCH_ASSOC));
            
        }
        return $this->getDetalles();
    }

    // SETTERS & GETTERS
    function setDetalles($detalles)
    {
        $this->detalles = $detalles;
    }

    function getDetalles()
    {
        return $this->detalles;
    }
}
