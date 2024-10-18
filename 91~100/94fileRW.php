<?php
    $content = "Hello php";

    $fileName = "writingFile.txt";

    $fp = fopen($fileName, 'w');

    $fw = fwrite($fp, $content);

    if($fw == false) {
        echo "Failed to create file.";
    } else {
        echo "File created successfully.";
    }

    fclose($fp);
?>