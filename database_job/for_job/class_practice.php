<?php
    $numbers = [22,4,3,13,53,5,2];
    $len= count($numbers);
    $big_value;

    for($j=1; $j<$len; $j++){

        for($i=0; $i< $len - $j ; $i++){

            if( $numbers[$i] > $numbers[$i+1] ){
                $big_value = $numbers[$i];
                $numbers[$i] = $numbers[$i+1];
                 $numbers[$i+1] = $big_value;
            }
            

        }
    }
    foreach($numbers as $number){
        echo("'".$number . "' " .",");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>