<?php

    include_once "Config.php";
/* 
    $db = new PDO($meet_config->source , $meet_config->username , $meet_config->password);
    var_dump($meet_config->source);
    var_dump($meet_config->username);
    var_dump($db);

    $db1= new PDO($config["sad"],$config["source"], $config["username"], $config["password"]);
    var_dump($db1);
 */
//var_dump($meet->set_db("localhost","meet_and_greet","nerazoli","550463"));

//$db = new PDO($meet->set_db("localhost","meet_and_greet","nerazoli","550463"));
//var_dump($db);

$db = new PDO($db_config->host, $db_config->username, $db_config->password);
var_dump($db);