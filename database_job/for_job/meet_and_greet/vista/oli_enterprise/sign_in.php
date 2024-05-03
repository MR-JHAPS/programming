<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="sign_in.css">
</head>
<body>

    <div class= "whole_set">
        <h1 class="header">SIGN IN </h1>

    
        <form action="sign_in.php" method= "post">

            <label for= "email"> E-mail* </label><br><br>
            <input type = "email" class= "inp" name ="email" placeholder="email"> <br><br>

            <label for= "passwords"> Password* </label><br><br>
            <input type = "password" class= "inp" name ="passwords" placeholder="password"> <br><br><br>

            <input type="submit" value="sign in" name="submit" class="button" > 

        </form>
    </div>
    <?php
    
    
    
    ?>
    
</body>
</html>
