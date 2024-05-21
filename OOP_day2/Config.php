<?php

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
    


    /* $source=" mysql:host=localhost;dbname=meet"; */