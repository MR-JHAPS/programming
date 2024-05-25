<?php 
//include_once "Connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=code_2.php method ="post">
        
        First name<br>
        <input type = "text" name="first_name" placeholder="first_name"><br><br>
        Last name<br>
        <input type = "text" name="last_name" placeholder="last_name"><br><br>
        Email<br>
        <input type = "text" name="email" placeholder="email"><br><br>

        Telephone<br>
        <input type = "text" name="telephone" placeholder="telephone"><br><br>
        
        <input type="submit" name="insert" value="insert">
        
    </form>
    
</body>
</html>