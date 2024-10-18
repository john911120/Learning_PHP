<?php
    $folderName = '../81~90';

    if($folderName !== null && is_dir($folderName)) {
        echo "フォルダーは存在しています。";
        $openDirect = opendir($folderName);
        if($openDirect) {
            echo "{$folderName}ディレクトリをオープンしました。";
            while(($readdir = readdir($openDirect))) {
                echo "{$readdir}.<br>";
            }
            closedir($openDirect);
        } else {
            echo "フォルダーオープンできませんでした。";
        }
    } else {
        echo "フォルダー存在していません。";
    }
?>