<?php

include_once "Connection.php";
?>

<?php

    class Code extends Connection{
        protected $table_name;

        //This is the constructor and the paramete of both parent and child class is submitted here.
        public function __construct($source,$username,$password,$table_name){
           parent::__construct($source,$username,$password);
           $this->table_name = $table_name;

        }

        public function get_table_name(){
            return $this->table_name;
        }

        public function user_table(){
            
        }
    }

    $db_connection = new Code($config["source"],$config["username"],$config["password"],"users");
    echo $db_connection->get_source();