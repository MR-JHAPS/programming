<?php
   include_once "config.php";
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

        protected function get_source(){
            return $this->source;
        }
        
        protected function get_username(){
            return $this->username;
        }
        protected function get_password(){
            return $this->password;
        }
        


        public function connect(){
            $conn = new PDO($this->source,$this->username,$this->password);
            return $conn;
        }

        

            
    }

    $conn = new Connection($config["source"], $config["username"], $config["password"]);
    $db_connection = $conn->connect(); // creating a pdo using connect method in Connection class.
    
    
   
         

