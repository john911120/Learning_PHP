<?php
    session_start();

    $_SESSION['session1'] = 'able';
    $_SESSION['session2'] = 'disable';
    $_SESSION['session3'] = 'unable';

    echo"<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    if(session_destroy()){
        echo "Session destroyed successfully";
    } else {
        echo "Session destroy failed";
    }
?>