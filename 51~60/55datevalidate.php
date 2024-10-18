<?php
    $chkdate = checkdate(32,10,2024);

    if($chkdate) {
        echo "有効な日付です";
    } else {
        echo "無効な日付です";
    }
?>