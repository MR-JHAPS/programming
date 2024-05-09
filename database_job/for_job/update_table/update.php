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
    <form action=update.php method = "post">
        <label for ="id">User_ID</label>  <!-- This Id is for the users to modity the data of -->
        <input type = "text" name = "id" id="id" placeholder="id"><br><br>

        <label for ="first_name">First_name</label>
        <input type = "text" name = "first_name" id="first_name" placeholder="firstname"><br><br>

        <label for ="last_name">Last_name</label>
        <input type = "text" name = "last_name" id="last_name" placeholder="lastname"><br><br>

        <label for ="email">Email</label>
        <input type = "text" name = "email" id="email" placeholder="email"><br><br>

        <input type="submit" value = "update" name = "update">
    </form>
    
</body>
</html>

<?php
try{
    
    if(isset($_POST["update"])){
        if(!empty($_POST["first_name"] && $_POST["last_name"] && $_POST["email"] && $_POST["id"] )){
        $first_name= $_POST["first_name"];
        
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $id = $_POST["id"];
        }
        else{
            echo "The input fields cannot be empty ";
        }
    
    }
    else{
        die;
    }

}
catch(ErrorException $e){
    echo $e;
}

        
   try{
    $conn = new pdo($config["source"], $config["username"], $config["password"]);

    $sql_query = "UPDATE user SET first_name=?, last_name=?, email=? WHERE id=?";  // using ? as placeholder of the user datas.
    
    $prepare = $conn->prepare($sql_query);
    
    $prepare->execute([$first_name,$last_name,$email,$id]);  //This is the part where the where the actual user variable is assigned.
    echo "Total of ". $prepare->rowCount(). " data is updated"; // This counts the number of rows of which the data has been updated.
   }
   catch(PDOException $p){
    echo $p;
   }
    ?>
        