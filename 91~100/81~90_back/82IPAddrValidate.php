<?php
    $ip = "192.168.0.1";
    $ip_Chk = filter_var($ip, FILTER_VALIDATE_IP);

    if($ip_Chk) {
        echo "{$ip} is valid";
    } else {
        echo "{$ip} is not valid";
    }
    echo "<br>";

    $ip1 = "192";
    $ip_Chk1 = filter_var($ip1, FILTER_VALIDATE_IP);

    if($ip_Chk1) {
        echo "{$ip1} is valid";
    } else {
        echo "{$ip1} is not valid";
    }
    
?>