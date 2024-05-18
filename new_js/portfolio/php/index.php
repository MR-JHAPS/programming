<?php
    include_once "sql_code.php";
    

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
            <td>ID</td>
            <td>FIRST-NAME</td>
            <td>LAST-NAME</td>
            <td>EMAIL</td>
            <td>TELEPHONE</td>
            <td>EDIT</td>
            <td>DELETE</td>

        </tr>

        <?php foreach($datas as $data){ ?>
            <tr>
            <td><?php echo $data['user_id']?></td>
            <td><?php echo $data['first_name']?></td>
            <td><?php echo $data['last_name']?></td>
            <td><?php echo $data['email']?></td>
            <td><?php echo $data['telephone']?></td>
            <td><button type='button' class='btn btn-primary'><a style="color:white; text-decoration:none;" href='update.php?id=<?php echo $data['user_id'];?>'>edit</a></button></td>
            <td><button type='button' class='btn btn-danger'><a style="color:white; text-decoration:none;" href='delete.php?id=<?php echo $data['user_id'];?>'>delete</a></button></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="7" align="center"><button type="submit" class= "btn btn-success"><a style="color:white; text-decoration:none; padding-left:12vh; padding-right:12vh;" href="insert.php">Insert</a></button></td>
        </tr>
    </table>
    
</body>
</html>