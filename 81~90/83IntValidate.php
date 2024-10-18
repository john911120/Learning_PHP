<?php
    function chkInt($int) {
        $intChk = filter_var($int, FILTER_VALIDATE_INT);
        if($intChk) {
            echo "{$int} is valid integer";
        } else {
            echo "{$int} is not valid integer";
        }
        echo "<br>";
    }
    
    chkInt(741);
    chkInt(70.44);
    chkInt('7a4a1');
?>