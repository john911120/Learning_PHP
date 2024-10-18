<?php
    if(isset($_COOKIE['checking'])) {
        echo "Cookie checking Value is : ".$_COOKIE['checking'];
    } else {
        echo "Cookie checking Value is not exist";
    }
?>