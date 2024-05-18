<?php 
/* 
    //This is a class of db and host connection.
    class Config{
        public $source ;
        public $username;
        public $password ;


        //This is the constructor that is relating to the attributes of the class and can be used to connect new db
        //by just passing the parameters like the object meet_and_greet below.
        public function __construct($source,$username,$password) {
            $this->source = $source ;
            $this->username = $username ;
            $this->password = $password ;
        }

        public function get_conn(){
            return $this->source;
            return $this->username;
            return $this->password;
        }
    } */

    //This is the object created from the class with the constructor above:
    $meet_and_greet = new PDO('mysql:host=localhost;dbname=meet_and_greet','nerazoli','550463');

    

    