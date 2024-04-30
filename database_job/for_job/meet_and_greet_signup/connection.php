
<?php
    include "config.php" ;
   

    

   /*  try{

    $sql_db_source = new PDO ($config["source"], $config["username"], $config["password"]);
    
    $sql_table = "SELECT * from users";                 // selecting datas from a table 

    $prepare = $sql_db_source->prepare($sql_table);     // inside DB -> we prepare(sql table) we want to make the data selection of  

    $prepare->setFetchMode(PDO::FETCH_ASSOC);           // we set the fetchmode of the prepared sql 
    $prepare->execute();                               // we execute the prepared sql 
    $all_datas = $prepare->fetchAll();                 // we are fetching all the data from the selected sql table 
    
   // var_dump($all_datas);
    }

    catch(PDOException $e) {
        echo "Neraz there is an error : ". $e->getMessage();
    } */


    
    
   
   
   
    //*************************This is the insertion part for the MYSQL database:*****************************************





    try{
        $sql_db_source = new PDO ($config["source"], $config["username"], $config["password"]);

        $insert = "INSERT INTO users (first_name, last_name, email, telephone) VALUES ($first_name, $last_name , $email, $telephone)";
        $prepare_insert = $sql_db_source->prepare($insert);
        
        
        $prepare_insert->execute(); 
        echo"done";
        
    }
    catch (PDOException $e){
        echo "neraz". $e->getMessage();
    }


                /* INSIGHTS */
/*  first select source and from that source select table 

1. $prepare = db_source -> prepare($db_table)
2. $prepare->fetchmode(PDO::fetchassoc)
3. $prepare->execute()
4. $all_data = $prepare->fetchall()
5. var_dump the data to see if the db is functioning properly

*/













?>