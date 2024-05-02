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
    <link rel="stylesheet" href="table_style.css">
</head>

<body>

    <fieldset class = "update_whole">

        <form class ="update_form" action = "update.html" method ="post" >

            <label for ="first_name">first_name</label> <br>
            <input type ="text" id="first_name" name="first_name" value= $first_name> <br><br>
    
            <label for ="last_name">last_name</label> <br>
            <input type ="text" id="last_name" name="last_name" value= $last_name> <br><br>
    
            <label for ="email">email</label> <br>
            <input type ="text" id="email" name="email" value= $email> <br><br>
    
            <label for ="telephone">telephone</label> <br>
            <input type ="text" id="telephone" name="telephone" value= $telephone> <br><br>
    
            <label for ="gender">gender</label> <br>
            <input type ="text" id="gender" name="gender" value= $gender> <br><br>

            <input type ="submit" value="update">
        
        </form>

    </fieldset>

    <?php
        if(isset($_POST["first_name"])){
            $first_name = $_POST["first_name"];
        }
        else{
            $first_name ="";
        }



            if(isset($_POST["last_name"])){
                $last_name = $_POST["last_name"];
            }
            else{
                $last_name ="";
            }

            
                if(isset($_POST["email"])){
                    $email = $_POST["email"];
                }
                else{
                    $email ="";
                }


                    if(isset($_POST["telephone"])){
                        $telephone = $_POST["telephone"];
                    }
                    else{
                        $telephone ="";
                    }


                        if(isset($_POST["gender"])){
                            $gender = $_POST["gender"];
                        }
                        else{
                            $gender ="";
                        }
    
    

        $conn = new PDO ($config["source"], $config["username"], $config["password"]);

        $sql_query_update = "UPDATE users set last_name = $last_name Where id=$id "; 

        $prepare = $conn->prepare($sql_query_update);

        $prepare->execute();


    ?>
    
    
</body>
</html>