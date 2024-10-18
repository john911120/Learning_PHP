<?php
    if(isset($_COOKIE['ID'])) {
        echo "Cookie ID Value is : ".$_COOKIE['ID'];
    } else {
        echo "Cookie ID is not setting.";
    }
?>