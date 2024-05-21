<?php

    //include_once "Config.php";
?>

<?php
    /* $meet = new Config("localhost","meet_and_greet","nerazoli","550463");
    echo $meet->get_host(); */
    //exit();  why does the exit does not work????????
    
/* 
    class Return_config extends Config{
 
        //inside this connection I will fetch data from the object of previous class called "Config()".
    
       

        public function Return_config(){
            parent::__construct("localhost","meet_and_greet","nerazoli","550463");
      }

        public function connect(){
            $connect = new PDO("mysql:host=".parent::get_host().";dbname=".parent::get_dbname()."username=".parent::get_username()."password=".parent::get_password());
            return $connect;
        }
            

    }

    $meet = new Return_config(connect());
 */
   /*  $meet = new Config("localhost","meet_and_greet","nerazoli","550463");
    $db_name = $meet->get_dbname();
    $db_host = $meet->get_host();
    $db_username = $meet->get_username();
    $db_password = $meet->get_password();
 */

try{
    function connection($db_host, $db_name, $db_username, $db_password,$pdo){

        $conn = new PDO("mysql:host={$db_host};dbname={$db_name}","username={$db_username}","password={$db_password}");
        return $conn;
    }

    
    
    $conn1 = connection("localhost","meet_and_greet","nerazoli","550463","new PDO");
    var_dump($conn1);
    echo connection()->

}
catch(Exception $e){
    echo "NERAZ -> {$e}";
}
//$data = new PDO( "mysql:host=localhost;dbname=meet_and_greet","username=asf","password=afaf");

/* $a="neraz";
$name = "my name is {$a} oli";
echo $name; */