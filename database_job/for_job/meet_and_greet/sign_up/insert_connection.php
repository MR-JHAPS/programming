<?php
    include "config.php";
    include_once "user_data.php";


    try{
        $sql_db_source = new PDO ($config["source"], $config["username"], $config["password"]);
        $sql_db_source->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES ('john' , 'snow' , 'a@gmail.com' ,'743256')";

        $insert = "INSERT INTO users (first_name, last_name, email, telephone, gender, passwords) VALUES (?,?,?,?,?,?)"; // what is "?"   ??
        $prepare_insert = $sql_db_source->prepare($insert);
        

        //********** This is to prevent registering the empty db with no value.****************
        //**********Only executes if the fields have values.***********************************

        if(!empty($_POST["first_name"] && $_POST["last_name"] && $_POST["email"] &&  $_POST["passwords"] && $_POST["telephone"] && $passwords=b==$repeat_passwords )){


        $prepare_insert->execute([ $first_name, $last_name , $email, $telephone, $gender, $passwords]); 

        echo "<p align= 'center'>"." You are successfully signed up for MEET AND GREET"."</p>";
        }


        else{
            echo "<p class='failed_to_register' align= 'center'>"." Unable to register"."</p>";
        }
        
    }
    catch (PDOException $e){
        echo "neraz". $e->getMessage();
    } 
    


?>