<?php
    $file_open = fopen('90directoryRewind.php','r+');
    if($file_open) {
        echo "90directoryRewind.phpをオープンしました。";
    } else {
        echo "90directoryRewind.phpをオープンできませんでした。";
    }

?>