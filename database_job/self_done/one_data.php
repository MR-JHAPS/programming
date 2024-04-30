<?php
/* This is a connection page to the database and server */

    $server = "mysql:host = localhost;dbname=table_for_php";
    $username = "root";
    $password = "550463";
   // $database = "dbname = sakila_es";
/* -------------------------------------------------------------------------- */
    
    $connection = new PDO($server, $username, $password );

 //$sql=  "SELECT * FROM user_data";       //selection of data from the table.
/* echo var_dump($sql);
exit; */



/* 
    $prepare = $connection->prepare($sql);   //preparing the $sql table.
    $prepare->setFetchMode(PDO::FETCH_ASSOC);   //
    $prepare->execute();

    $all_users = $prepare->fetchAll(); 
 */




    //echo var_dump($all_users);

/* foreach($sql as $row){
    //foreach($row as $key=>$value){
    echo var_dump($data);
    }
//} */
