<?php
namespace Modelo;
use \PDO;
use \PDOException;
use \Modelo\Conexion;

require_once('../Modelo/Conexion.php');


class User{


    public function getAll(string $sql): array
    {

        try{
            $connexion = new Conexion();
            $con =  $connexion->conexionBBDD();
            $st = $con->prepare($sql);
            $st->setFetchMode(PDO::FETCH_ASSOC);
            $st->execute();
            return $st->fetchAll();

        }catch(PDOException $exception_pdo){

            echo $exception_pdo;

        }
    }
    public function getById($sql)
    {
        
        try{
            $connexion = new Conexion();
            $con =  $connexion->conexionBBDD();
            $st = $con->prepare($sql);
            $st->setFetchMode(PDO::FETCH_ASSOC);
            $st->execute();
            return $st->fetch();

        }catch(PDOException $exception_pdo){

            echo $exception_pdo;

        }
    }

}







?>