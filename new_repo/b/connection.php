<?php

try{
    $config = [
        'source'=>'mysql:host=localhost;dbname=meet_and_greet',
        'username' => 'nerazoli',
        'password' => '550463'

    ];

   
    $conn = new PDO($config['source'], $config['username'], $config['password']);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }


   /*  if ($conn==true){
        echo "connected";
    }
    else{
        echo "not connected";
    } */
    //echo "hello neraz";
