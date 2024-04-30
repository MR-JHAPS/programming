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

<!-- create 2 for loops:

    First one is for the total number of length starting from 1 instead of 0 /// length-1 starting from 0
    Second one is for the swapping of the 1st and 2nd place value
    If the 1st value is greater than second value than swap the values
    This is the buuble sort method  

    DONE!

    THE CONCEPT OF THE LOOP WHILE 0 and 1 initial position is still unclear.??????
    
-->