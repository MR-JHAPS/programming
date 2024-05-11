<?php
    include_once "conn.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <?php
            echo "<tr>";
                 foreach($table_data[0] as $key=>$value){
                    echo "<th>".$key."</th>";

                 }
            echo "</tr>";



            echo "<tr>";
                 foreach($table_data as $data){
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['first_name']."</td>";
                    echo "<td>".$data['last_name']."</td>";
                    echo "<td>".$data['email']."</td>";
                    echo "<td>"."<a href = `update.php?id= {$data['id']}`>"."Update` {$data['id']}`"."</a>"."</td>";
                    echo "</tr>";

                    
                 }
        
        
        ?>
    </table>
    
</body>
</html>