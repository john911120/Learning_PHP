<?php
    $fileName = "writingFile.txt";
    if(file_exists($fileName)) {
        $fopen = fopen($fileName, 'r');
        if($fopen) {
            $fread = fread($fopen, filesize($fileName));
            if($fread) {
                echo $fread;
                fclose($fopen);
            } else { echo "Failed to read file."; }
        } else { echo "Failed to open file."; }
    } else { echo "File not found."; }
?>