<?php
   
    
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
    
            <div class= "whole_set">
            <!-- <fieldset class = "whole_set">
                <legend align = "center"> USER DETAILS </legend><br> -->

                <form action="user_data.php" method ="post">

            

                    <label for= "first_name" >First Name* </label><br>
                    <input type = "text" id= "first_name" name ="first_name" placeholder="first name"> <br><br>

                    <label for= "last_name" >Last Name* </label><br>
                    <input type = "text" id= "last_name" name ="last_name" placeholder="last name"> <br><br>

                    <label for= "email"> E-mail* </label><br>
                    <input type = "email" id= "email" name ="email" placeholder="email"> <br><br>

                    <label for= "telephone" >Telephone* </label><br>
                    <input type= "text" id= "telephone" name ="telephone" placeholder="telephone"> <br><br>

                    
                    <label for= "passwords"> Password* </label><br>
                    <input type = "password" id= "passwords" name ="passwords" placeholder="password"> <br><br>

                    <label for= "repeat_passwords"> Repeat Password* </label><br>
                    <input type = "password" id= "repeat_passwords" name ="repeat_passwords" placeholder="repeat password" > <br><br>


                    
                        Gender<br>

                        <input type="radio" value="male" name ="gender">
                        <label for="male"> Male </label><br>

                        <input type="radio" value="female" name ="gender">
                        <label for="female"> Female </label><br>

                        <input type="radio" value="other" name ="gender">
                        <label for="other"> Other </label><br>
                    
                    <br>

                    <input type="submit" value="submit" name="submit"> 

            
                </form>
                
            <!-- </fieldset> -->
            </div>

        

    
    
</body>
</html>

<?php
    

    //PHP only registers the post[name] it doesn't register the id of what I have tried ,,,, Further to inquire.  
    
    


        if(isset($_POST["submit"])){
            if(!empty($_POST["first_name"]) && ($_POST["last_name"]) && $_POST["email"] && $_POST["telephone"] && ($_POST["passwords"]) && ($_POST["repeat_passwords"]) ){
                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $email = $_POST["email"];
                $telephone = $_POST["telephone"];
                $passwords = $_POST["passwords"];
                $repeat_passwords = $_POST["repeat_passwords"];

                if($passwords!==$repeat_passwords){               //to check if the password and the repeat password match but actual filter is in the insert_connection.php before executing the db.
                    echo "<p align= 'center'>"."Your Passwords Doesn't Match"."</p>";
                }
                   
            }

            

            else{
               
                echo "<p align= 'center'>"."Fields marked with * cannot be empty."."</p>"."<br>";
            }
            

            
                
            if(isset($_POST["gender"]) ){
                $gender = $_POST["gender"];
            }
            else{
                $gender ="";
            }
     
        }
           
        else{
            die;
        }
    
        include_once "insert_connection.php"; 

    /*  try{
        $sql_db_source = new PDO ($config["source"], $config["username"], $config["password"]);
        $sql_db_source->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES ('john' , 'snow' , 'a@gmail.com' ,'743256')";

        $insert = "INSERT INTO users (first_name, last_name, email, telephone, gender) VALUES (?,?,?,?,?)"; // what is "?"   ??
        $prepare_insert = $sql_db_source->prepare($insert);
        

        //********** This is to prevent registering the empty db with no value.****************
        //**********Only executes if the fields have values.***********************************

        if(!empty($_POST["first_name"] && $_POST["last_name"] && $_POST["email"] &&  $_POST["telephone"] )){


        $prepare_insert->execute([ $first_name, $last_name , $email, $telephone, $gender]); 

        echo "<p align= 'center'>"." You are successfully signed up for MEET AND GREET"."</p>";
        }


        else{
            echo "<p class='failed_to_register' align= 'center'>"." Unable to register"."</p>";
        }
        
    }
    catch (PDOException $e){
        echo "neraz". $e->getMessage();
    } */

            

?>

