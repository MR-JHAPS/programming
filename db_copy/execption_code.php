<?php

include_once "Connection.php";
?>

<?php

//exception doesnot shows the message

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
           
            /* $query = "SELECT * FROM " . $this->table_name; */
           
            $query = "SELECT * FROM " . $this->table_name;
            $prepare_table =  $this->pdo->prepare($query);
            $prepare_table->setFetchMode(PDO::FETCH_ASSOC);
            $prepare_table->execute();
            $all_datas = $prepare_table->fetchAll();
            return $all_datas;
        }

        public function table_insert(){

        }
    }

    try{
        $db_pdo = $pdo; // this pdo is from the Connection.php class.
        $sql_code = new Code($db_pdo,"users");
        $user_table = $sql_code->user_table();
        var_dump($sql_code);    
    }
    catch(Exception $e){
        echo "NERAZ-> ".$e->getMessage();
        
    }
    ;