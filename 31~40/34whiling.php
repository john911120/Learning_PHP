<?php
    $sum = 0;

    $num = 1;

    while($num <= 100) {
        $sum += $num;
        $num++;
    }
    echo "1부터 100까지의 누적 합계 : {$sum}";
?>
