<!-- In this page all the Reading, Inserting, Updating and Deleting of data is done.
                    All The SQL code is in this page.
    
                    The update.php, insert.php, delete.php, index.php refer to this page 
    because I have set the form action to "sql_code.php" which is this page.
 -->



<?php
    include_once "config.php";
    session_start(); // to store the $_SESSION["message"] value it must be started but still not working.

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

    // This code is for the insertion of data.
    //if "insert" button is pressed in "insert.php" then this code will run.

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
               $_SESSION["message"]="Inserted successfully"; //doesn't work until now ...need to figure out why.
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

    //if you select "yes_delete" from "delete.php" then the data will be deleted.

    if(isset($_POST["yes_delete"])){
        $id= $_POST["id"];
        
            $delete_query = "DELETE FROM users where user_id=:user_id";
            $prepare_delete = $meet_and_greet->prepare($delete_query) ;
            $delete_value = [":user_id"=> $id];
            $deleted = $prepare_delete->execute($delete_value);
    
            if($deleted){
                echo "DELETED sucessfully";
            }
    
    
        

    }


        // if you select no delete then you will be returned to "index.php". 
    if(isset($_POST["no_delete"])){
        header("location:index.php");
    }
