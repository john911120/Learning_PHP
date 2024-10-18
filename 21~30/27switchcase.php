<?php
    $age = 29;

    switch($age) {
        case($age >= 10 && $age <= 19):
            echo "10代です";
            break;
        case($age >= 20 && $age <= 29):
            echo "20代です";
            break;
        case($age >= 30 && $age <= 39):
            echo "30代です";
            break;
    }
?>