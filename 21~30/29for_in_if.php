<?php
    $sum = 0;
    $maxVal = 100;
    for($i = 1; $i <= $maxVal; $i++){
        if($i % 2 == 0){
            $sum += $i;
        }
    }

    echo "1から、{$maxVal}までの偶数の総計はこうです。: 計 {$sum}";
?>