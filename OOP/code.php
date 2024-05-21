<?php

    $config = [
        "source"=> "mysql:host=localhost;dbname=meet_and_greet",
        "username"=>"nerazoli",
        "password"=>"550463"
    ];


    class Code{
        //attributes here
            private $db;
            private $query;


        //constructor here

        public function __construct($db,$query){

            $this->db = $db;
            $this->query = $query;


        }

        //method here
        public function get_table(){
            $db= new PDO($config["source"]);
            $query = "SELECT * FROM users";
            $prepare = $db->prepare($query);
            $prepare->setFetchMode(PDO::FETCH_ASSOC);
            $prepare->execute();
            $datas = $prepare->fetchAll();
            return $datas;
        }    
    }

    $table = new Code("meet_and_greet","");
        

?>