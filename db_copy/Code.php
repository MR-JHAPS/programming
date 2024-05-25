<?php
//UPDATE PORTION IN THIS PAGE DOES NOT WORK....POR QUE??????
include_once "Connection.php";
?>

<?php

    class Code {
        private $pdo;
        private $table_name;

        //This is the constructor and the paramete of both parent and child class is submitted here.
        public function __construct( $pdo, $table_name){
             $this->pdo = $pdo;
           $this->table_name = $table_name;

        }

        public function get_table_name(){
            return $this->table_name;
        }

        public function user_table(){
        
            $this->pdo ; // this is the placeholding variable for the actual PDO();
           
            
           
            $query = "SELECT * FROM " . $this->table_name;
            $prepare_table =  $this->pdo->prepare($query);
            $prepare_table->setFetchMode(PDO::FETCH_ASSOC);
            $prepare_table->execute();
            $all_datas = $prepare_table->fetchAll();
            return $all_datas;
        }

        public function table_insert($first_name, $last_name, $email, $telephone){
            $this->pdo;// this is the db taking it from the class attribute.
            $query = "INSERT INTO ".$this->table_name ."(first_name, last_name, email,telephone) VALUES (:first_name, :last_name, :email,:telephone )";
            
            $values = [":first_name"=> $first_name,
                            ":last_name"=> $last_name,
                            ":email" => $email,
                            ":telephone"=> $telephone];

            $prepare = $this->pdo->prepare($query);
            return $prepare->execute($values);
            
        }

        public function update_table($user_id, $first_name, $last_name, $email, $telephone){
            $this->pdo;
            $query = "UPDATE".$this->table_name."SET first_name=:first_name ,last_name=:last_name, email=:email, telephone=:telephone WHERE user_id=:user_id";
            $values = [ ":user_id"=> $user_id,
                        ":first_name" => $first_name,
                        ":last_name"=> $last_name,
                        ":email"=> $email,
                        ":telephone"=> $telephone];
            
            
            $prepare = $this->pdo->prepare($query);
            $prepare->setFetchMode(PDO::FETCH_ASSOC);
            return $prepare->execute($values);
        }

        public function delete_table($user_id){
            $this->pdo;
            $query = "DELETE FROM". $this->table_name." WHERE user_id=:user_id";
            $values = [":user_id"=>$user_id];
            $prepare = $this->pdo->prepare($query);
            $prepare->execute($values);
        }
    }




    //Instancia de Code class.
       $code_method = new Code($db_connection,"users");



            
   