<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">

        Gender<br>
        <input type ="radio" value="male" name="gender"> male<br>
        <input type ="radio" value="female" name="gender">female <br>
        <input type ="radio" value="other" name="gender"> other<br>

        <input type ="submit" value="go" name="submit">

    </form>
    
</body>
</html>

<?php

    if(isset($_POST["submit"])){
        if(isset( $_POST["gender"])){
            $gender = $_POST["gender"];
            echo "Your gender is : ". $gender;
        }
        else{
            echo "Please select a gender";
        }

        
    }
    

   