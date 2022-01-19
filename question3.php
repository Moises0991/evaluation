<?php
        $myArray = array(1,2,9,2,5,3,5,1,5);
        $matrix[][] = array();
        $path[] = 0;
        $n = 3; $x = 0; $less = 9;

        for($i=0;$i<$n;$i++){
            for($j=0;$j<$n;$j++){
                $matrix[$i][$j] = $myArray[$x];
                $x++;
                echo $matrix[$i][$j];
            }
            echo '<br>';
        }
        $control =0;
        for($i=0;$i<$n;$i++){
            for($j=0;$j<$n;$j++){
                if($matrix[$j][$i]<$less){
                    if($control == $j){
                        $less = $matrix[$j][$i];
                        $path[$i] = $less;
                    } else if($control+1 == $j) {
                        $less = $matrix[$j][$i];
                        $path[$i] = $less;
                    } else if($control-1 == $j){
                        $less = $matrix[$j][$i];
                        $path[$i] = $less;                      
                    }
                }
            }
            $less = 9;
        }
        
        echo '<br>Response: ';
        for($i=0;$i<count($path);$i++){
            echo $path[$i];
        }
?>
