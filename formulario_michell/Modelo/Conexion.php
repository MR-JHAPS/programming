<?php
namespace Modelo;

use \PDO;
use \PDOException;

require_once('../Modelo/config.php');

class Conexion{

    private $fuente = CONFIG['fuente'];
    private $user = CONFIG['usuario'];
    private $pass = CONFIG['pass'];
    private $connection;


    public function conexionBBDD()
    {
        try{

            $this->connection = new PDO($this->fuente, $this->user, $this->pass);
            return $this->connection;

        }catch(PDOException $exception_pdo){

            echo $exception_pdo;
        }
    }

    


}




?>
