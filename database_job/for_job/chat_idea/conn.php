<?php

include_once "config.php";


$conn = new pdo($config["source"], $config["username"], $config["password"]);

//This part is to display table data.

$sql_table = "SELECT * FROM user";

$prepare_table = $conn->prepare($sql_table);
$prepare_table->setFetchMode(PDO::FETCH_ASSOC);
$prepare_table->execute();

$table_data = $prepare_table->fetchall();



//This part is to update table data.

$sql_update = "UPDATE MyGuests SET first_name=?, last_name=?, email=? WHERE id=?";
$prepare_update = $conn->prepare($sql_update);
$prepare_update->setFetchMode(PDO::FETCH_ASSOC);
$prepare_update->execute([$id,$first_name, $last_name, $email]);





?>