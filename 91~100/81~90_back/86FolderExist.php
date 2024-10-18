<?php
    $folderName = '91~100_back';
    $folderExt = is_dir($folderName);

    if($folderExt) {
        echo "{$folderName} is a directory.";
    } else {
        echo "{$folderName} is not a directory.";
    }
    echo "<br>";

    $folderName = '91~100';
    $folderExt = is_dir($folderName);
    
    if($folderExt) {
        echo "{$folderName} is a directory.";
    } else {
        echo "{$folderName} is not a directory.";
    }
?>