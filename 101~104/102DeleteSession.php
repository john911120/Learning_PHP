<?php
    session_start();

    if(isset($_SESSION['ID'])) {
        echo 'ID Session is Available';
        unset($_SESSION['ID']);
    } else {
        echo "Session Is Not Existed";
    }

    echo "<br>";
    echo "Session ID Value is : {$_SESSION['id']}";
?>