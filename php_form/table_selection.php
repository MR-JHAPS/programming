<?php
include "connection.php";

Class User_table {

    public function table_select(){
        $db_table = "select * from wild";
        $connection = new Connection();
        $con= $connection -> db_connection();
        $prepare = $con->prepare($db_table);
        $prepare->setFetchMode(PDO::FETCH_ASSOC);
        $prepare->execute();
        return $prepare->fetchAll();
    }

    
    
}