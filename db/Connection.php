<?php
   include_once "Config.php";
?>


<?php

    class Connection{
        
        protected $source;
        protected $username;
        protected $password;
        

        public function __construct($source,$username,$password){
            $this->source = $source;
            $this->username = $username;
            $this->password = $password;

        }

        public function get_source(){
            return $this->source;
        }
        
        public function get_username(){
            return $this->username;
        }
        public function get_password(){
            return $this->password;
        }
        


        public function connect(){
            $conn = new PDO($this->source,$this->username,$this->password);
            return $conn;
        }

        

            
    }

   /*  $db_config = new Connection($config["source"],$config["username"],$config["password"]);
    $db_conn = $db_config->connect(); */
    //var_dump($db_config->get_source(),$db_config->get_password());
         

