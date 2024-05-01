<?php

    $config = [
        "source"=> "mysql:host=localhost;dbname=meet_and_greet" ,
        "username"=>"root" ,
        "password"=>"550463"
    ];

    try{
    $connection = new PDO($config["source"], $config["username"] , $config["password"]);

    $sql_query = "SELECT * FROM users" ;

    $prepare = $connection->prepare($sql_query);
    $prepare->setFetchMode(PDO::FETCH_ASSOC);
    $prepare->execute();
    
    $datas = $prepare->fetchAll();}

    catch(PDOException $e){
        echo "Dear user :-----  " .$e. " ----- OCCURED  ";
    }
    // all data have been shown correctly.


?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="table_style.css">

    </head>
    <body>
        <h1> MEET AND GREET USERLISTS</h1>
        <table class="tab">

        <?php

            //This is the part for the creation of the table:

            //echo "<table>"."<tr>";

            foreach($datas[0] as $key=>$value){   //This is the header of the table.
                echo "<th>";
                echo  $key;
                echo"</th>";
            } 
            echo "<th>"."Update"."</th>";
            echo "<th>"."Delete"."</th>";
            echo "</tr>";
    
    
           echo "<tr>";
            foreach ($datas as $data){
                
    
    
                foreach($data as $key=> $value ){
                    echo "<td>";
                    echo $value;
                    
                    echo"</td>";
                }
                echo "<td class='update'>"."<button>"."<a href='update.php'>"."update"."</a>"."</button>"."</td>";
                echo "<td class='delete'>"."<button>"."<a href='delete.html'>"."delete"."</a>"."</button>"."</td>";
                    
            
                echo"</tr>";
            }
            //echo "</table>";
        
        ?>    
        </table>
    </body>
    </html>
    
    


