<?php
    include_once "connection.php";
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
    
        <form action = insert.php method ='post'>
            <div class="container mt-3">
                <label for = 'first_name'>First_name</label><br>
                <input type = 'text' id ='first_name' name ='first_name'><br><br>
            </div>

            <div class="container mt-3">
                <label for = 'last_name'>Last_name</label><br>
                <input type = 'text' id ='last_name' name ='last_name'><br><br>
            </div>

            <div class="container mt-3">
                <label for = 'email'>Email</label><br>
                <input type = 'email' id ='email' name ='email'><br><br>
            </div>    

            <div class="container mt-3">    
                <label for = 'telephone'>Telephone</label><br>
                <input type = 'text' id ='telephone' name ='telephone'><br><br>
            <div class="container mt-3">    

            <div class="container mt-3 container mb-3"> <!-- This is the margin top and margin bottom bootstrap 5 class -->
                <input type = 'submit' name ='submit' class="btn btn-primary">

            </div>
        



    </form><br>

    <button type="button" class="btn btn-primary"><a style="text-decoration:none; color:white;" href = "index.php">Back To Table</a></button>

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
            //echo $first_name;



            
            $sql_insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES (:first_name, :last_name , :email , :telephone)";
            $values = [
                        ':first_name' => $first_name,
                        ':last_name' => $last_name ,
                        ':email' => $email , 
                        ':telephone' => $telephone
            ];
            $prepare_insert = $conn->prepare($sql_insert);
            $prepare_insert->execute($values);

            ?>
                <div class ="alert alert-success">

            <?php   echo "inserted successfully";?>
            </div>

        

    
    
    
    
</body>
</html>