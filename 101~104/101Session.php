<?php
    session_start();

    $_SESSION['ID'] = 'ushio';

    if(isset($_SESSION['ID'])) {
        echo "Session ID Value is : ".$_SESSION['ID'];
    } else {
        echo "Session ID Failed";
    }
?>