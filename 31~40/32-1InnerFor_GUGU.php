<?php
    for($i = 2; $i <= 19; $i++){
        echo "{$i}단<br>";

        for($j = 1; $j <= 19; $j++){
            $gugu = $i * $j;
            echo "{$i} * {$j} = {$gugu} <br>";
        }
        echo "<br><br>";
    }
?>