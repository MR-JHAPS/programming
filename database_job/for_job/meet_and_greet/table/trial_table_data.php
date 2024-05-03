<?php
    

    $config = [
        "source" => "mysql:host=localhost;dbname=meet_and_greet",
        "username"=> "root",
        "password"=> "550463",

    ]

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

    $conn = new PDO($config["source"], $config["username"], $config["password"]);
    $sql_query = "SELECT * From users WHERE first_name='biraj' ";
    $prepare = $conn->prepare($sql_query);
    $prepare->setFetchMode(PDO::FETCH_ASSOC);
    $prepare->execute();
    $datas = $prepare-> fetch();
    //var_dump($datas);

  var_dump( $datas);
    
?>