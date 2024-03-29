<!-- TO create an ascending order of numbers without using a global functions -->

<?php
    $numbers=[1,22,34,53,2,332,24,12];

    $length = count($numbers);
    $count = 0;
    $second_number = null ;
    $asc=[];

    while ($count<$length){
        if($numbers[$count]< $numbers[$count + 1]){
            array_push($asc,$numbers[$count]);
        }
        else {continue;
        }
            /* $second_number=$number + 1;
            $number = $second_number; */

        }
    



?>