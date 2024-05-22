<?php

    class Animal{
        protected $type;
        protected $name;
        protected $legs;
        protected $habitat;
   
   
        public function __construct($type,$name,$legs,$habitat) {
            $this->type =$type ;
            $this->name = $name;
            $this->legs = $legs;
            $this->habitat = $habitat;
        }


        public function get_type(){
            return $this->type;
        }

        public function get_name(){
           return $this->name;    
        }

        public function get_legs(){
           return $this->legs;    
        }

        public function get_habitat(){
           return $this->habitat;    
        }
        
    }


    $dog = new Animal("mammal","dog","4","land");

    
