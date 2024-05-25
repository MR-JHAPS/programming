<?php

include_once "Connection.php";
?>

<?php

    class Code extends Connection{
        public static $pdo;
        protected $table_name;

        //This is the constructor and the paramete of both parent and child class is submitted here.
        public function __construct($source, $username, $password, $pdo, $table_name){
           parent::__construct($source, $username, $password);
           $this->pdo = $pdo;
           $this->table_name = $table_name;

        }

        public function get_table_name(){
            return $this->table_name;
        }

        public function user_table(){
        
            self::$pdo ; // this is the placeholding variable for the actual PDO();
           
            /* $query = "SELECT * FROM " . $this->table_name; */
           
            $query = "SELECT * FROM " . $this->table_name;
            $prepare_table =  self::$pdo->prepare($query);
            $prepare_table->setFetchMode(PDO::FETCH_ASSOC);
            $prepare_table->execute();
            $all_datas = $prepare_table->fetchAll();
            return $all_datas;
        }

        public function table_insert(){

        }
    }


    Code::$pdo = new Code()->connect();
    var_dump();
    /* 
  
    $sql_code = new Code($config["source"],$config["username"],$config["password"], $pdo ,"users");
  
    //$pdo = $sql->connect();
    $user_table = $sql_code->user_table();
    var_dump($user_table);
   */







    /*   $sql_code = new Code($config["source"],$config["username"],$config["password"]);
    
    $pdo = $sql_code->connect(); // This is the PDO function "connect()" from parent class in Connection.php.
   $user_table = $sql_code->user_table($pdo,"users");
    //var_dump($user_table);

 */