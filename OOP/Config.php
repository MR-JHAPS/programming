<?php


  /*   class Config{
        public $source;
        public $username;
        public $password;

        public function __construct($source,$username,$password){
            $this->source = $source;
            $this->username = $username;
            $this->password = $password;

        }

        //This is object or instance of the class.
    $meet_config = new Config("mysql:host=localhost;dbname=meet_and_greet","nerazoli","550463");
    } */











    class Config{
       
        public $host;
        

        public $password;
        public $username;

        public function __construct($host, $username, $password){ //This is a constructor.
           
            $this->host =$host;
            //$this->db_name = $db_name;
            $this->username= $username ;
            $this->password = $password ;

        }

        public function set_db($host,$db_name,$username, $password){
         return "mysql:host={$host};dbname={$db_name},username={$username},password={$password}";
            

        }

       /*  $code = "mysql:host=localhost;dbname=meet_and_greet";
        $code1 = "mysql:host={$host};dbname={$db_name}"; */

       
    }

    $db_config = new Config("mysql:host=localhost;db_name=meet_and_greet","nerazoli","550463");

   

