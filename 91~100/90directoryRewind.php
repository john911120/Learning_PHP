<?php
    $folderName = '../81~90';
    $openDirectory = opendir($folderName);
    if($openDirectory) {
        echo readdir($openDirectory).'<br>';
        echo readdir($openDirectory).'<br>';
        echo readdir($openDirectory).'<br>';

        rewinddir($openDirectory);
        echo "<br>リセットしました。<br>";

        echo readdir($openDirectory).'<br>';
        echo readdir($openDirectory).'<br>';
        echo readdir($openDirectory).'<br>';
    }
?>