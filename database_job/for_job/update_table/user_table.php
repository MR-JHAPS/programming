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
    <table >
    
        
            <?php

            //This one is the table header from the DATABASE.

            echo "<tr>";
            
             $one_data = $all_data[0];
                        foreach($one_data as $key=>$value){
                            echo "<th>".$key."</th>";
                        }
            echo "<th>update</th>"."</tr>";
            ?>                    
            
        
        
            <?php
            //This is the table value from the DATABASE.
            
             /* foreach($all_data as $data){
                echo"<tr>";
                
                foreach($data as $key=>$value){
                    echo"<td>".$value."</td>";
                }
              echo"<td><button class = 'update'>"."<a href='update.php'>"."update"."</a>"."</button>"."</td>"."</tr>";  
            } */
            ?>











                                              <!-- THIS IS JUST THE TRIAL CODE IDEA FROM THE CHATGPT -->
            <?php

             foreach($all_data as $data){
                echo"<tr>";
                
                
                    echo"<td>".$data['id']."</td>";
                    echo"<td>".$data['first_name']."</td>";
                    echo"<td>".$data['last_name']."</td>";
                    echo"<td>".$data['email']."</td>";
                
              echo"<td>"."<button class = 'update'>"."<a href='update.php?id=".$data['id']." '>"."update{$data['id']}"."</a>"."</button>"."</td>"."</tr>";  
            }
            ?>
            
            




    </table>
    
</body>
</html>