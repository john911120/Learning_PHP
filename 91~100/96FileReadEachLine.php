<?php
    $fileName = "writingFile.txt";
    if(file_exists($fileName)) {
        $fopen = fopen($fileName, 'r');

        $readByte = 1024;
        if($fopen) {
            while(($fgets = fgets($fopen, $readByte))) {
                echo $fgets."<br>";
            }
        }
    }
?>