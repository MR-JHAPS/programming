


<?php
    include_once "connection.php";




     $sql_insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES (:first_name, :last_name , :email , :telephone)";
    $values_insert = [
                ':first_name' => $first_name,
                ':last_name' => $last_name ,
                ':email' => $email , 
                ':telephone' => $telephone
    ];
    $prepare_insert = $conn->prepare($sql_insert);
    $prepare_insert->execute($values); 

    ?>


<?php

$sql = "SELECT * FROM users";

$prepare = $conn->prepare($sql);
$prepare ->setFetchMode(PDO::FETCH_ASSOC);
$prepare ->execute();
$all_users = $prepare->fetchall();
//var_dump($all_users);




?>