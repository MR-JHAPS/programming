<?php

/* try{
    function conx($db_host, $db_name, $db_username, $db_password){

        $dsn = "mysql:host=" . $db_host . ";dbname=". $db_name;
        $conn = new PDO($dsn, $db_username,$db_password);
        return $conn;
    }

    
    
    $conn1 = conx("localhost","meet_and_greet","nerazoli","550463");
    foreach($conn1 as $conn){
        echo $conn;
    }
    

}
catch(Exception $e){
    echo "NERAZ -> {$e}";
} */



try{
    function conx($host, $dbname, $username, $password){

        $dsn = "mysql:host=" . $host . ";dbname=". $dbname;
        $conn = new PDO($dsn, $username, $password);
        return $conn;
    }

    
    
    $c = conx("localhost","meet_and_greet","nerazoli","550463");
    var_dump($c);
    

}
catch(Exception $e){
    echo "NERAZ -> {$e}";
}





