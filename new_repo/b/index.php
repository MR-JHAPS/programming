<?php
    include_once "connection.php";
    
?>


<?php
    //This part is to show the database of user

    $sql = "SELECT * FROM users";

    $prepare = $conn->prepare($sql);
    $prepare ->setFetchMode(PDO::FETCH_ASSOC);
    $prepare ->execute();
    $all_users = $prepare->fetchall();
    //var_dump($all_users);
    
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <table class="table table-striped">
        <tr>
            <th>user_id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>email</th>             <!-- This part is for the header of the table -->
            <th>telephone</th>
            <th>update</th>
            <th>delete</th>

        </tr>

        

            <?php foreach($all_users as $user){ // getting all the user data from the database using associative method.
                ?>
                <tr>
                <td> <?php echo  $user['user_id']?> </td>
                <td> <?php echo  $user['first_name']?> </td>
                <td> <?php echo  $user['last_name']?> </td>
                <td> <?php echo  $user['email']?> </td>
                <td> <?php echo  $user['telephone']?> </td>
                <td > <button type="button" class="btn btn-success"><a style="text-decoration:none; color:white;" href = "update.php">update</a></button> </td>
                <td> <button type="button" class="btn btn-danger"><a  style="text-decoration:none;color:white;" href = "delete.php">delete</a></button> </td>
                </tr>
            <?php    
            }
            ?>
            <tr>
                <td colspan="7" align="right">
                <button type="button" class="btn btn-primary" style="margin-right:12%;">
                <a style="text-decoration:none; color:white; " href = "insert.php">Insert new data</a></button>   <!--redirect to insert.php to insert new data-->
                </td>
            </tr>    


        
</table>
</body>
</html>
















































<?php /* foreach($all_users as $user){
                echo "<td>". $user['id']."</td>";
                echo "<td>". $user['first_name']."</td>";
                echo "<td>". $user['last_name']."</td>";
                echo "<td>". $user['email']."</td>";
                echo "<td>". $user['telephone']."</td>";
            } */
            ?>
















<?php
  /*   $sql_insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES (:first_name, :last_name , :email , :telephone)";
    $values = [
                ':first_name' => $first_name,
                ':last_name' => $last_name ,
                ':email' => $email , 
                ':telephone' => $telephone
    ];
    $prepare_insert = $conn->prepare($sql_insert);
    $prepare_insert->execute($values); */

    ?>









<?php

    //This part is for the insertion of the userdata in the table.

    /* $sql_insert = "INSERT INTO users(first_name, last_name, email, telephone) VALUES(:first_name, :last_name , :email , :telephone)";
    $values = [
                ':first_name' => $first_name,
                ':last_name' => $last_name ,
                ':email' => $email , 
                ':telephone' => $telephone,
    ];
    $prepare_insert = $conn->prepare($sql_insert);
    $prepare_insert->execute($values);
 */

?>