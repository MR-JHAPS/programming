<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style = "background: silver;">

    <!-- This is the header of a page -->
    <h1 style="text-align:center;
    border:2px solid silver;        
    background : gray;
    text-shadow:silver 2px 2px;
    color:white;">
     Welcome to OLI Internationals </h1>

    <!-- This is the login form of the page -->
    <form action="index.php" method="post">
        <label>username *</label><br>
        <input type="text" name ="username" ><br>
        <label>password *</label><br>
        <input type ="password" name ="password" ><br><br>
        <input type ="submit" value="go"><br><br>
    </form>

    <!--******************** This is the php code for the login form ************************-->
    <?php
   $username = $_POST["username"];
   $password = $_POST["password"];

   //echo "enter username and pwd"."<br>";
   if(empty($username)||empty($password)){
     echo"Marked with * is mandatory to fill."; 
    //echo "username or password is missing";
   }
   else{

   echo $username."<br>";
   echo $password;
   
   }

    ?>
    
</body>
</html>