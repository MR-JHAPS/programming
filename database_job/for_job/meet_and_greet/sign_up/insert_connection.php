<?php
    include "config.php";
    include_once "user_data.php";
    // $first_name;

    if(empty($first_name = $_POST["first_name"])){
        echo "user enter your first name please";
    }
    //echo $first_name;
    $last_name = $_POST["last_name"];
    $email =$_POST["email"];
    $telephone =$_POST["telephone"];

    


     try{
        $sql_db_source = new PDO ($config["source"], $config["username"], $config["password"]);
        $sql_db_source->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES ('john' , 'snow' , 'a@gmail.com' ,'743256')";

        $insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES (?,?,?,?)"; // what is "?"   ??
        $prepare_insert = $sql_db_source->prepare($insert);
        
        
        $prepare_insert->execute([ $first_name, $last_name , $email, $telephone]); 
        echo" You are successfully signed up for MEET AND GREET";
        
    }
    catch (PDOException $e){
        echo "neraz". $e->getMessage();
    }


?>