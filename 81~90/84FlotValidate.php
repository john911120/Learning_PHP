<?php
    $flot = 741.22;
    $float_Chk = filter_var($flot, FILTER_VALIDATE_FLOAT);

    if($float_Chk) {
        echo "{$flot} is a float number";
    } else {
        echo "{$flot} is not a float number";
    }
?>