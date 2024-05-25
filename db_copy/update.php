
<?php
    include_once "code_2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    //This query is to fetch a single data.
        if($_GET["id"]){
            $get_id = $_GET["id"];
        }
        $db_connection;
        $query = "SELECT * FROM users where user_id=$get_id";
        $prepare= $db_connection->prepare($query);
        $prepare->setFetchMode(PDO::FETCH_ASSOC);
        $prepare->execute();
        $get_user_data = $prepare->fetch(); 
        
    ?>


    <form action=code_2.php method ="post">
        
        <input type = "hidden" name="user_id" placeholder="user_id" value="<?php echo $get_user_data['user_id']?>"><br><br>

        First name<br>
        <input type = "text" name="first_name" placeholder="first_name" value="<?php echo $get_user_data['first_name']?>"><br><br>
        Last name<br>
        <input type = "text" name="last_name" placeholder="last_name" value="<?php echo $get_user_data['last_name']?>"><br><br>
        Email<br>
        <input type = "text" name="email" placeholder="email" value="<?php echo $get_user_data['email']?>"><br><br>

        Telephone<br>
        <input type = "text" name="telephone" placeholder="telephone" value="<?php echo $get_user_data['telephone']?>"><br><br>
        
        <input type="submit" name="update" value="update">
        
    </form>
    
</body>
</html>