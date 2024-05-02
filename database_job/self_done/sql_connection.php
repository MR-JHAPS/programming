<?php
include "database_config.php";
//require_once "database_config.php";

$sql_database_source = new PDO($source, $username, $password); //this part is to create a PDO with the source db.

$sql_table = "select * from cliente";  // this part is to select the database itself.


$prepare = $sql_database_source->prepare($sql_table);

$prepare ->setFetchMode(PDO::FETCH_ASSOC);

$prepare ->execute();

$all_data = $prepare->fetchAll();
//var_dump($all_data);



