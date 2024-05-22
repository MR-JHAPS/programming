<?php

    include_once "Animal.php";






class Lion extends Animal{
    private $age;

    // This is the child constructor but we want to import all construct param from parent we need to write it also in the child param.
    public function __construct($type,$name,$legs,$habitat,$age){   
    
        //Here we are bringing the param from the parent class.
        //The attributes is protected in parent so it can be accessed through the child class.
    parent::__construct($type,$name,$legs,$habitat);
    $this->age =$age;
  }


}

$lion = new Lion("mammal","lion","4","savanah","4");

var_dump($lion);