<?php
    include_once "config.php";

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
    if(isset($_POST['update'])){
            $id = $_POST['id'];
            $first_name =$_POST['$first_name'];
            $last_name = $_POST['$last_name'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];



        $update_query = "UPDATE users SET first_name=:first_name, last_name=:last_name, email=:email, telephone=:telephone WHERE user_id=:id";
        $prepare_update = $meet_and_greet->prepare($update_query);
        $prepare_update->setFetchMode(PDO::FETCH_ASSOC);
        $update_values = [
            ':id'=> $id,
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':email'=> $email,
            ':telephone'=> $telephone
        ];
        $done = $prepare_update->execute([$id,$first_name,$last_name,$email,$telephone]);
        echo "neraz";
        
        if($done=true){
            echo "updated succesfully";
        }
        
        
    }
?>

