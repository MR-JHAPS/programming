<?php

include_once "C:/xampp/htdocs/programming/database_job/for_job/meet_and_greet/table/table_user_data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="sign_in.css">
</head>
<body>

    <div class= "whole_set">
        <h1 class="header">SIGN IN </h1>

    
        <form action="sign_in.php" method= "post">

            <label for= "email"> E-mail* </label><br><br>
            <input type = "email" class= "inp" name ="email" placeholder="email"> <br><br>

            <label for= "passwords"> Password* </label><br><br>
            <input type = "password" class= "inp" name ="passwords" placeholder="password"> <br><br><br>

            <input type="submit" value="sign in" name="submit" class="button" > 

        </form>
    </div>
    <?php
    
    if(isset($_POST["submit"])){
        if(!empty($_POST["email"])){
            $email = $_POST["email"];
        }
        else{
            echo "<p align= 'center'>"."please enter an email "."</p>"."<br>";
        }

        if(!empty($_POST["password"])){
            $password = $_POST["password"];
        }
        else{
            echo "<p align= 'center'>"."please enter the password"."</p>";
        }

        
      

   //echo $data["email"];
   foreach($datas as $data){        //comparing the values from the database.
    //echo $data["email"]."<br>";
        if($data["email"]=$email){      //To make sure the user email is the valid email by comparing to the db email list so that the user can make a sign
            echo"It exists";
        }
    
        else{
            echo"It doesn't exists";
        }
    }

}
    ?>
    
</body>
</html>
