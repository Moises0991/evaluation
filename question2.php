<?php
    $myArray = array(1,2,2,4,5,6,7,8,8,8);
    sort($myArray);

    $lastLenght = 0;
    $lastNumber = 0;
    $longest = 0;
    $number = 0;
    $index = 0; 
    $flag = true;

    do {
        $value = $myArray[$index];

        if($flag){
            $number = $value;
            $lastNumber = $number;
            $lastLenght++;
            $flag = false;
        }

        if($number == $value) {
            $longest++;
            if($longest > $lastLenght) {
                $lastLenght = $longest;
                $lastNumber = $number;
            }
        } else {
            $number = $value;
            $longest = 1; 
        }
        $index++;
        echo('number: ' . $number. '. longest: ' . $longest . '. last: '.$lastLenght .','.$lastNumber.'<br>');

    } while ($index<count($myArray));
    echo('<br>FinalNumber: '.$lastNumber.'. FinalLenght: '. $lastLenght);

?>