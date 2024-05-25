<?php

    include_once "Code.php";
    include_once "Connection.php";
    //include_once "config.php";
    
?>

<?php


    //This is to view all the data in table.php.
    $user_table = $code_method->user_table();

    //_________________________________-insert_________________________

    

    if(isset($_POST["insert"])){
        //if(!empty($_POST["first_name"] && $_POST["last_name"] && $_POST["email"])){
        
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $telephone = $_POST["telephone"];
            

          // $code->table_insert($_POST["first_name"],$_POST["last_name"],$_POST["email"],$_POST["telephone"]);


           $code_method->table_insert($first_name,$last_name,$email,$telephone);
            header("Location:table.php");
            
           
                   
    }
    

    //---------------------THiS IS UPDATE-----------------------------------------------------------

    elseif(isset($_POST["update"]) ){
        //if(!empty($_POST["first_name"] && $_POST["last_name"] && $_POST["email"])){
            $user_id = $_POST["user_id"];
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $telephone = $_POST["telephone"];
            //echo $email;

           //$code_method->update_table($_POST["user_id"],$_POST["first_name"],$_POST["last_name"],$_POST["email"],$_POST["telephone"]);


           //??????????????????This not working 
           $code_method->update_table($user_id, $first_name, $last_name, $email, $telephone);
            //header("Location:table.php");
            echo "done";
            
            
           
             
    }

//______________________________THIS IS DELETE__________________________________________________________________-


    elseif(isset($_POST["yes"])){
        $user_id = $_POST["user_id"];

        $done_delete = ($code_method->delete_table($user_id));
        
        if($done_delete){
            echo "deleted";
        }
     }
    
    
    elseif(isset($_POST["no"])){
        header("Location:table.php");
        
    }
       



