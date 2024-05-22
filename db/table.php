<?php   
    include_once "Code.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            
                <th>USER ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>TELEPHONE</th>
                <th>EDIT</th>
        </tr>
            <!-- user_table is imported from Code.php -->
            <?php foreach($user_table as $table){ ?>
        <tr>
            <td><?php echo $table["user_id"]?></td>
            <td><?php echo $table["first_name"]?></td>
            <td><?php echo $table["last_name"]?></td>
            <td><?php echo $table["email"]?></td>
            <td><?php echo $table["telephone"] ?></td>
           
           
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>