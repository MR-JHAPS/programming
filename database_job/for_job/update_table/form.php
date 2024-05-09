<?php
include_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method ="post">

        <label for ="first_name">First_name</label>
        <input type = "text" name = "first_name" id="first_name" placeholder="firstname"><br><br>

        <label for ="last_name">Last_name</label>
        <input type = "text" name = "last_name" id="last_name" placeholder="lastname"><br><br>

        <label for ="email">Email</label>
        <input type = "text" name = "email" id="email" placeholder="email"><br><br>

        <input type="submit" value = "submit" name = "submit">
    </form>

    <?php
        if(isset($_POST["submit"])){
            if(!empty($_POST["first_name"] && $_POST["last_name"] && $_POST["email"] )){
            $first_name= $_POST["first_name"];
            
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            }
            else{
                echo "The input fields cannot be empty ";
            }
        
        }
        else{
            die;
        }
        

        $conn = new PDO ($config["source"],$config["username"], $config["password"]);

        $query = "INSERT INTO user (first_name, last_name, email) VALUES(?,?,?)";
        $prepare= $conn ->prepare($query);
        
        $prepare->execute([$first_name, $last_name,$email]);
        echo "Registered Succesfully . ";
        

    
    ?>
    
</body>
</html>