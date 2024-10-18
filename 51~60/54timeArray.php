<?php
    $now = getdate();

    echo "現在の年 : ".$now['year']."<br>";
    echo "現在の月 : ".$now['mon']."<br>";
    echo "現在の日 : ".$now['mday']."<br>";
    echo "現在の時間 : ".$now['hours']."<br>";
    echo "現在の分 : ".$now['minutes']."<br>";
    echo "現在の秒 : ".$now['seconds']."<br>";
    echo "現在の曜日数字 : ".$now['wday']."<br>";
    echo "現在の曜日文字 : ".$now['weekday']."<br>";
    echo "現在の月文字 : ".$now['month']."<br>";
    echo "現在の時間のタイムスタンプ : ".$now[0]."<br>";
    echo "今年の日差 : ".$now['yday']."<br>";

?>