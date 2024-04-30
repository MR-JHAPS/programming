<?php
    include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href ="user_data.css">
</head>
<body>
    <h1 class="header"> SIGN UP </h1>
    <form action="user_data.php" method ="post">

        <div class = "whole_set">
            <fieldset>
                <legend align = "center"> USER DETAILS </legend><br>

            <div class = "inner">

                <label for= "first_name" >First Name </label><br>
                <input type = "text" id= "first_name"> <br><br>

                <label for= "last_name" >Last Name </label><br>
                <input type = "text" id= "last_name"> <br><br>

                <label for= "email"> E-mail </label><br>
                <input type = "email" id= "email"> <br><br>

                <label for= "telephone" >Telephone </label><br>
                <input type= "text" id= "telephone"> <br><br>

                
                    <legend>Gender</legend><br>

                    <input type="radio" id="male" name ="gender">
                    <label for="male"> Male </label><br>

                    <input type="radio" id="female" name ="gender">
                    <label for="female"> Female </label><br>

                    <input type="radio" id="other" name ="gender">
                    <label for="other"> Other </label><br>
                
                <br>

                <button id="submit"> Sign Up </button>

            </div>

            </fieldset>

        </div>

    </form>
    
</body>
</html>