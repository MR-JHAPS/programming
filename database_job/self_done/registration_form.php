<?php
include "one_data.php";
/*  $server = "mysql:host = localhost;dbname=table_for_php";
 $username = "root";
 $password = "550463"; */
/* -------------------------------------------------------------------------- */
 
 /* $connection = new PDO($server, $username, $password );
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registration_form.php" method="post">

    <label> Username </label><br>
    <input type = "text" name = "username" ><br>

    <label> password </label><br>
    <input type = "password" name = "password" ><br><br>

    
    <input type = "submit" name = "submit" value = "sign up" ><br>

    </form>
    
</body>
</html>

<?php
    
    
    if(empty($_POST["username"])){
        echo "Please enter a username";
    }
    elseif(empty($_POST["password"])){
        echo "Please insert password";
    }
    else{
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql_insert = 'INSERT INTO user_data (name, surname)
        VALUES ("'.$username.'", "'.$password_hash.'")';
       /* var_dump($sql_insert);
       exit; */
        try{
        $insert_prepare= $connection->prepare($sql_insert);
        #$insert_prepare->setFetchMode(PDO::FETCH_ASSOC);
        $insert_prepare->execute();
        }
        catch (Exception $e){
            echo "{$e} not inserted";
        }
    }







?>