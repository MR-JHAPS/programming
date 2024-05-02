<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="text.php" method="post">

        fname<br>
        <input type ="text"  name="fname" > <br>
        lname <br>
        <input type ="text"  name="lname"><br>
       

        <input type ="submit" value="go" name="submit">

    </form>
    
</body>
</html>

<?php

    if(isset($_POST["submit"])){
        /* if(isset( $_POST["fname"])!==""){
            $fname = $_POST["fname"];
            echo "Your fname is : ". $fname ."<br>";  // if you use isset in the text portion then it will never enter the else condition so use !empty so that it can determine if the data is null or not.
        }
        elseif(empty($_POST["fname"])){
            echo "Please insert a fname";
        }

        if(isset( $_POST["lname"])){
            $lname = $_POST["lname"];
            echo "Your lname is : ". $lname;
        }
        else{
            echo "Please insert a lname";
        } */




        if(!empty( $_POST["fname"])){
            $fname = $_POST["fname"];
            echo "Your fname is : ". $fname ."<br>";
        }
        else{
            echo "Please insert a fname"."<br>";
        }

        if(!empty( $_POST["lname"])){
            $lname = $_POST["lname"];
            echo "Your lname is : ". $lname;
        }
        else{
            echo "Please insert a lname";
        }
        
    }
    

   