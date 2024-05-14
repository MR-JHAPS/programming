


<?php
    include_once "connection.php";
?>





    <?php
        
            if(isset($_POST['submit'])){
                if(!empty($_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_POST['telephone'])){
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $email = $_POST['email'];
                    $telephone = $_POST['telephone'];
                    
                }
                else{?>
                    <div class="alert alert-danger">
                    <?php    
                    echo "The input fields cannot be empty";
                    ?>
                    </div><?php
                }
            }
            ?>


<?php



     $sql_insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES (:first_name, :last_name , :email , :telephone)";
    $values_insert = [
                ':first_name' => $first_name,
                ':last_name' => $last_name ,
                ':email' => $email , 
                ':telephone' => $telephone
    ];
    $prepare_insert = $conn->prepare($sql_insert);
    $prepare_insert->execute($values); 

    ?>


<?php

$sql = "SELECT * FROM users";

$prepare = $conn->prepare($sql);
$prepare ->setFetchMode(PDO::FETCH_ASSOC);
$prepare ->execute();
$all_users = $prepare->fetchall();
//var_dump($all_users);




?>