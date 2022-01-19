<?php
    $n = 5;
    if($n == 0){
        echo "ERROR";
        return 0;
    }

    echo '5 by 5 matrix<br><br>'; X($n);
    echo '<br>6 by 6 matrix<br><br>'; X(6);
    echo '<br>7 by 7 matrix<br><br>'; X(7);
    echo '<br>8 by 8 matrix<br><br>'; X(8);

    function X($n) {
        for($i=0; $i<$n; $i++) {
            for($j=0; $j<$n; $j++) {
                echo($j == $i || $j == $n-$i-1) ?  'X' : '_';
            }
            echo '<br>';
        }
    };
?>