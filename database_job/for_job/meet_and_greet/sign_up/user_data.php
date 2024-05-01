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
    

            <fieldset class = "whole_set">
                <legend align = "center"> USER DETAILS </legend><br>

                <form action="user_data.php" method ="post">

            

                    <label for= "first_name" >First Name </label><br>
                    <input type = "text" id= "first_name" name ="first_name"> <br><br>

                    <label for= "last_name" >Last Name </label><br>
                    <input type = "text" id= "last_name" name ="last_name"> <br><br>

                    <label for= "email"> E-mail </label><br>
                    <input type = "email" id= "email" name ="email"> <br><br>

                    <label for= "telephone" >Telephone </label><br>
                    <input type= "text" id= "telephone" name ="telephone"> <br><br>

                    
                        <legend>Gender</legend><br>

                        <input type="radio" id="male" name ="gender">
                        <label for="male"> Male </label><br>

                        <input type="radio" id="female" name ="gender">
                        <label for="female"> Female </label><br>

                        <input type="radio" id="other" name ="gender">
                        <label for="other"> Other </label><br>
                    
                    <br>

                    <input type="submit" value="submit"> 

            
                </form>
                
            </fieldset>

        

    
    
</body>
</html>

<?php
            //PHP only registers the post[name] it doesn't register the id of what I have tried ,,,, Further to inquire.  


                //Fetching the user_input from HTML form to PHP. And assigning them to a variables in PHP.


   /*  $first_name = $_POST["first_name"];
    //echo $first_name;
    $last_name = $_POST["last_name"];
    $email =$_POST["email"];
    $telephone =$_POST["telephone"]; */




   /*  try{
        $sql_db_source = new PDO ($config["source"], $config["username"], $config["password"]);
        $sql_db_source->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES ('john' , 'snow' , 'a@gmail.com' ,'743256')";

        $insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES (?,?,?,?)"; // what is "?"   ??
        $prepare_insert = $sql_db_source->prepare($insert);
        
        
        $prepare_insert->execute([$first_name , $last_name , $email, $telephone]); 
        echo"done";
        
    }
    catch (PDOException $e){
        echo "neraz". $e->getMessage();
    }
 */


    
 include_once "insert_connection.php";

?>

