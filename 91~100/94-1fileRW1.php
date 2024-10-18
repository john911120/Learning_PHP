<?php
    $content = " after Content things";

    $fileName = "writingFile.txt";

    $fp = fopen('./'.$fileName, 'a');

    $fw = fwrite($fp, $content);

    if($fw == false) {
        echo "Failed to writing file.";
    } else {
        echo "Success the write file.";
    }

    fclose($fp);
?>