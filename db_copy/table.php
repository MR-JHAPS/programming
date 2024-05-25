<?php   
    include_once "code_2.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <table class="table table-striped">
        <tr>
            
                <th>USER ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>TELEPHONE</th>
                <th>EDIT</th>
                <th>DELETE</th>
        </tr>
            <!-- user_table is imported from Code.php -->
            <?php foreach($user_table as $table){ ?>
        <tr>
            <td><?php echo $table["user_id"]?></td>
            <td><?php echo $table["first_name"]?></td>
            <td><?php echo $table["last_name"]?></td>
            <td><?php echo $table["email"]?></td>
            <td><?php echo $table["telephone"] ?></td>
            <td><a href='update.php?id=<?php echo $table["user_id"] ?>'>update</a></td>
            <td><a href='delete.php?id=<?php echo $table["user_id"] ?>'>delete</a></td>
            
           
           
        </tr>
        <?php } ?>
        <tr><td align="center"><a href="insert.php">Insert</a></td></tr>
    </table>
    
</body>
</html>