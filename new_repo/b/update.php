<?php
    include_once "connection.php";
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action = try.php method ='post'>
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
        
    </body>
    </html>





<?php
    include_once "all_conn.php";

    $update_query = "UPDATE users SET first_name = :first_name, last_name=:last_name, email=:email, telephone=:telephone WHERE user_id= :id ";

    $prepare_update = $conn->prepare($update_query);
    $update_value = [
        ':id' => $id,
        ':first_name'=>$first_name,
        ':last_name' => $last_name,
        ':email'=>$email,
        ':telephone'=> $telephone
    ];
    $execute_update = $prepare_update->execute($update_value);

    echo "Update Succesfully";

?>