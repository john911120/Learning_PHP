<?php
    $folderName = '91~100_back';
    $openDirectory = opendir($folderName);

    if($openDirectory) {
        echo "{$folderName}ディレクトリをオープンしました。";
    } else {
        echo "{$folderName}ディレクトリをオープンできませんでした。";
    }
    echo "<br>";

    $folderName = '91~100';
    $openDirectory1 = opendir($folderName);

    if($openDirectory1) {
        echo "{$folderName}ディレクトリをオープンしました。";
    } else {
        echo "{$folderName}ディレクトリをオープンできませんでした。";
    }
?>