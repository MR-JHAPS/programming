<?php
include_once "config.php";


$conn = new pdo($config["source"], $config["username"], $config["password"]);

$sql_query = "SELECT * FROM users";

$prepare = $conn->prepare($sql_query);
$prepare->setFetchMode(PDO::FETCH_ASSOC);
$prepare->execute();
$all_data = $prepare->fetchall();


foreach($all_data as $data){
    
    foreach($data as $key=>$value){
        echo $key.$value;
        
    }
    }



?>