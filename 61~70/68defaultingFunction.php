<?php
    function plusing($num1 = 700, $num2 = 41){
        $sum = $num1 + $num2;
        return $sum;

    }
    echo "plusing(700, 41) = ", plusing(700, 41);
    echo "<br>";
    echo "plusing(701) = ", plusing(701);
    echo "<br>";
    echo "plusing() = ", plusing();
?>