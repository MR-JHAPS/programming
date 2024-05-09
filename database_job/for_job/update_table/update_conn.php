<?php
    include_once "config.php";
?>

<?php
   
    $conn = new pdo($config["source"], $config["username"], $config["password"]);

    $sql_query = "UPDATE MyGuests SET first_name=?, last_name=?, email=? WHERE id=?";
    
    $prepare = $conn->prepare($sql_query);
    
    $prepare->execute([$first_name,$last_name,$email,$id]);
    $prepare->rowCount(). "data is updated";
    ?>
    //var_dump($all_data);
