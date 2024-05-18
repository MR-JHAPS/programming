<?php
    include_once "config.php";
    session_start();

?>

<?php
    function table($db_source){
    $sql_table = "SELECT * FROM users";
    $prepare_table = $db_source->prepare($sql_table);
    $prepare_table->setFetchMode(PDO::FETCH_ASSOC);
    $prepare_table->execute();
    $all_datas = $prepare_table->fetchAll();
    return $all_datas;
    //return var_dump($all_datas);
    }

    $datas = table($meet_and_greet);
?>


<?php
    
    
    if(isset($_POST["update_btn"])){
            $id = $_POST["id"];
            $first_name =$_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $telephone = $_POST["telephone"];
            



        
        $update_query = "UPDATE users SET first_name=:first_name, last_name=:last_name, email=:email, telephone=:telephone WHERE user_id=:id";
        $prepare_update = $meet_and_greet->prepare($update_query);
        $prepare_update->setFetchMode(PDO::FETCH_ASSOC);
        $update_values = [
            ":id"=> $id,
            ":first_name" => $first_name,
            ":last_name" => $last_name,
            ":email"=> $email,
            ":telephone"=> $telephone
        ];
        $done = $prepare_update->execute($update_values);
        ?>
            <div class ="alert alert-success">

                <?php   echo "inserted successfully";?>
            </div>
        <?php
    }
        
    
       
        
        
    
?>

<?php
    if(isset($_POST["insert"])){
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
    
    
        try{

            $insert_query = "INSERT INTO users (first_name, last_name, email, telephone) VALUES (:first_name, :last_name, :email, :telephone)";
            $prepare_insert = $meet_and_greet->prepare($insert_query);
            $insert_values = [
                ":first_name"=>$first_name,
                ":last_name"=> $last_name,
                ":email" => $email,
                ":telephone"=> $telephone
            ] ;
            $inserted = $prepare_insert->execute($insert_values);
            if ($inserted){
               $_SESSION["message"]="Inserted successfully";
                header("location:index.php");
                
            }
            else{
                echo "Not inserted";
            }
        }
        
        
        catch(PDOException $e){
            echo "Dear User, THIS WENT WRONG ->".$e;
        }
    }


?>


<?php

    // This is for the deletion of the tabel row/data;

    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $delete_query = "DELETE FROM users where user_id=:user_id";
        $prepare_delete = $meet_and_greet->prepare($delete_query) ;
        $delete_value = [":id"=> $id];
        $deleted = $prepare_delete->execute($delete_value);

        if($deleted){
            echo "DELETED sucessfully";
        }


    }

    if(isset())
