<?php

try{
    function connection($db_host, $db_name, $db_username, $db_password,$pdo){

        $conn = new PDO("mysql:host={$db_host};dbname={$db_name}","username={$db_username}","password={$db_password}");
        return $conn;
    }

    
    
    $conn1 = connection("localhost","meet_and_greet","nerazoli","550463","new PDO");
    var_dump($conn1);
    echo connection()->

}
catch(Exception $e){
    echo "NERAZ -> {$e}";
}