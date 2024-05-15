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

    <?php 
    if($_GET['id']){
        $user_id = $_GET['id'];
    }
    

    $id_query = "SELECT * FROM users WHERE user_id = :id";
    $value=[':id' => $user_id ];
    $prepare_value =  $meet_and_greet->prepare($id_query);
    $prepare_value->setFetchMode(PDO::FETCH_ASSOC);
    $prepare_value->execute($value);
    
    $id_data = $prepare_value->fetch();

    ?>

    <form action = "sql_code.php" method="post" >
    <div class="mb-3 mt-3">    
        <input type="hidden" name="id"value="<?php echo $id_data['user_id'];?>"><br></div>

        <div class="mb-3 mt-3">
        first_name : <input type = "text" name="first_name" value="<?php echo $id_data['first_name'];?>"><br>
        </div>

        <div class="mb-3 mt-3">
        last_name : <input type ="text" name = "last_name" value="<?php echo $id_data['last_name'];?>"><br></div>

        <div class="mb-3 mt-3">
        email : <input type ="text" name = "email" value="<?php echo $id_data['email'];?>"><br></div>
        
        <div class="mb-3 mt-3">
        telephone : <input type ="text" name = "telephone" value="<?php echo $id_data['telephone'];?>"><br></div>

        <div class="mb-3 mt-3">
        <input type ="submit" value = "update" name="update"> <br></div>

    

    </form>
</body>
</html>
<?php include_once "sql_code.php"?>