<?php
    for($i = 1; $i <= 3; $i++){
        echo "Outside For : {$i}<br>";

        for($j = 1; $j <= 3; $j++){
            echo "Inside For : {$j}<br>";
        }
        echo "<br>";
    }
?>