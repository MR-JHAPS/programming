<?php 
include_once "conn.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user_table.css">
</head>
<body>
    <table border=2px>
    
        
            <?php
            echo "<tr>";
            
             $one_data = $all_data[0];
                        foreach($one_data as $key=>$value){
                            echo "<th>".$key."</th>";
                        }
            echo "<th>update</th>"."</tr>";
            ?>                    
            
        
        
            <?php
            
             foreach($all_data as $data){
                echo"<tr>";
                
                foreach($data as $key=>$value){
                    echo"<td>".$value."</td>";
                }
              echo"<td><button class = 'update'>"."<a href='update.php'>"."update"."</a>"."</button>"."</td>"."</tr>";  
            }
            ?>
            
            




    </table>
    
</body>
</html>