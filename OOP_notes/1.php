<?php
 //This is a class.
    class Config{

        private $host;      //This things are private so to access them when new object is created...we need to create a private get function.
        private $dbname;
        private $username;
        private $password;

        public function __construct($host, $dbname,$username, $password) {
            $this->host = $host;
            $this->dbname = $dbname;
            $this->username = $username;
            $this->password = $password;
        }

        public function get_host (){
            return $this->host;
        }

        public function get_dbname (){
            return $this->dbname;
        }

        public function get_username (){
            return $this->username;
        }
        public function get_password (){
            return $this->password;
        }


    }
    


  //This is the new object created from /instance of the class Config from Config.php.
        $meet = new Config("a","b","c","d");

    
     // if only the attributes of class are public we can access all data in this manner.
 
           foreach($meet as $meets){  
            echo $meets."<br>";
        }

    

    //if the attributes are private we can access from the functions/methods inside the class.

        echo $meet->get_host()."<br>";
        echo $meet->get_dbname()."<br>";
        echo $meet->get_username()."<br>";
        echo $meet->get_password()."<br>";