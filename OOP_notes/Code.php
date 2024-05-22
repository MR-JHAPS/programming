<?php

include_once "Connection.php";
?>

<?php

    // works fine.
    class Code extends Connection{
        //protected $table_name;

        //This is the constructor and the paramete of both parent and child class is submitted here.
        public function __construct($source,$username,$password){
           parent::__construct($source,$username,$password);
           //$this->table_name = $table_name;

        }

        public function get_table_name(){
            return $this->table_name;
        }

        public function user_table($pdo,$table_name){
            parent::connect();
            $pdo ;
            /* $query = "SELECT * FROM " . $this->table_name; */
            $query = "SELECT * FROM " . $table_name;
            $prepare_table =  $pdo->prepare($query);
            $prepare_table->setFetchMode(PDO::FETCH_ASSOC);
            $prepare_table->execute();
            $all_datas = $prepare_table->fetchAll();
            return $all_datas;

            
        }
    }

    $sql_code = new Code($config["source"],$config["username"],$config["password"]);
    
    $pdo = $sql_code->connect(); // This is the PDO function from parent class in Connection.php.
   $user_table = $sql_code->user_table($pdo,"users");
    var_dump($user_table);

