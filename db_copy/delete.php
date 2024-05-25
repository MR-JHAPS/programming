<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    if($_GET["id"]){
        $user_id = $_GET["id"];
    }
    ?>

    <form action="code_2.php" method="post">
        
       <h2> Are You Sure You Want To Delete</h2><br>
       <input type="hidden" name="user_id" value="<?php echo $user_id;?>"><br>
       <button name="yes" type="submit">Yes</button>
       <button name="no" type="submit">No</button>
    </form>
    
</body>
</html>