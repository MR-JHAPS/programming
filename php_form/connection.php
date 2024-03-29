<?php
include "config.php";

Class Connection{

    private $db_source = $main_source ["db_source"];
    private $username = $main_source["username"];
    private $password = $main_source["password"];

    private $connection;

    public function db_connection(){
        
        try{

        $this->connection = new PDO($this->db_source, $this->username, $this->password);
        return $this->connection;
        }
        catch(PDOException $exception)
        {
        echo $exception; }
    }


}
    






?>

