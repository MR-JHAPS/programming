<?php
include "sql_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <!-- <tr>
            <th>name</th>
            <th>surname</th>
        </tr> -->

<?php
    $head=$all_data[0];
        echo "<tr>";
        foreach ($head as $header_key=>$header_value ){
            echo "<th>".$header_key."</th>";
        }
        echo "</tr>";
    


    foreach($all_data as $each_data=>$each_data_value){
        /* var_dump($each_data_value);
        exit; */
        echo"<tr>";
        foreach ($each_data_value as $key=>$value){
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }
       
  

    



?>
    </table>

</body>
</html>
