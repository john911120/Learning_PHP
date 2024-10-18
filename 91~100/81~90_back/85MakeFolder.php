<?php
    $folderName = '91~100';
    $mkdir = mkdir($folderName,'777');
    if($mkdir) {
        echo "フォルダ{$folderName}を作成しました。";
    } else {
        echo "フォルダ{$folderName}を作成できませんでした。";
    }
?>