<?php
/* 
    class laptop{
        public $company;
        public $model;
        public $ram;

         public function __construct($comp,$mod,$ram) {
            $this->company = $comp;
            $this->model = $mod;
            $this->ram = $ram;
            
        }



        

    };

    $a = new laptop('hp','omen',16);
    var_dump($a);
    echo "<br>";

    $b = new laptop('apple','macbook',32);
    var_dump($b);

 */




 /*    Class person{
        public $name;
        public $age;
        public $nationality;

        public function __construct($name, $age, $nationality) {
            $this->name = $name;
            $this->age = $age;
            $this->nationality = $nationality;
        }

        public function get_name(){
            return $this->name;
        }

        public function get_age(){
            return $this->age;
        }


        public function get_nationality(){
            return $this->nationality;
        }
    }


    $person1 = new person('neraz',25,'nepali');
    echo $person1->get_name()."<br>";
    echo $person1->get_age()."<br>";
    echo $person1->get_nationality()."<br>"; */






    Class person{
        public $name;
        protected $age;
        protected $nationality;

        public function __construct($name, $age, $nationality) {
            $this->name = $name;
            $this->age = $age;
            $this->nationality = $nationality;
        }

        protected function roam(){

            $a= "The name of the person is {$this->name} with {$this->age} years of age from {$this->nationality}";
            return $a;
        }
    }
       /*  $person1 = new person('neraz',25,'nepal');
        echo $person1->roam(); */
        

        class neraz extends person{
            public $hobby;
            public $education;

            public function __construct($hob, $edu) {
                $this->hobby = $hob;
                $this->education = $edu;
            }

            
        }
        $a= new person('neraz',25,'nepali');
        echo $a->name;
        $neraz = new neraz('coding','formacion professional');
        echo $neraz->hobby;
        echo $neraz->education;
