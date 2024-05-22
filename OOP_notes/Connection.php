<?php
   include_once "Config.php";
?>


<?php


// FULLY FUNCIONING DB CONNECTION.

    class Connection{
        //attributes can only be accessed by the child class and the parent class.
        protected $source;
        protected $username;
        protected $password;
        protected $table_name;

        public function __construct($source,$username,$password,$table_name){
            $this->source = $source;
            $this->username = $username;
            $this->password = $password;
            $this->table_name = $table_name;

        }

            
        public function view_table(){    
            try{
                $db = new PDO($this->source,$this->username,$this->password);
                $sql_query = "SELECT * FROM ".$this->table_name; 
                $prepare_db = $db->prepare($sql_query);
                $prepare_db->setFetchMode(PDO::FETCH_ASSOC);
                $prepare_db->execute();
                $all_datas = $prepare_db->fetchAll();
                return $all_datas;
            
            }catch(Exception $e){
                echo "NERAZ --> {$e}";
        }
    }
            

    

}
/*  $conn = new Connection("mysql:host=localhost;dbname=meet_and_greet","nerazoli","550463","users");
 var_dump( $conn->view_table()); */


 $conn = new Connection($config["source"],$config["username"],$config["password"],"users");
 var_dump( $conn->view_table());
