<?php

    class Person{
        private string $name;  //These are the attributes.
        private int $age;
        private string $country;

        public function __construct($name,$age,$country){//This is a constructor.
            $this->name = $name;
            $this->age = $age;
            $this->country = $country;
        }
        

        public function get_name(){    //This are the methods of the class.
            echo $this->name;
        }

        public function set_name($name){
           return $this->name = $name;
        }

        public function get_age(){
            echo $this->age;
        }

        public function set_age($age){
            return $this->age = $age;
        }

        public function get_country(){
            echo $this->country;
        }

        public function set_country($country){
            $this->country = $country;
        }

    }

$neraz = new Person("neraz",25,"nepal");  // This is the new object or also called instancia of classs person.
$neraz->get_name();
echo $name=$neraz->set_name("john");
echo $neraz->set_age(50);
