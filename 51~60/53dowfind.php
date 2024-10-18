<?php
    $year = 2024;
    $month = 10;
    $day = 10;

    $targetDTS = mktime(0,0,0, $month, $day, $year);

    $dOW = date('w', $targetDTS);

    $sOOD = 60 *60 *24;

    switch($dOW) {
        case 1:
            $monday = $targetDTS;
            $friday = $targetDTS + ($sOOD * 4);
            break;
        case 2:
            $monday = $targetDTS - ($sOOD * 1);
            $friday = $targetDTS + ($sOOD * 3);
            break;
        case 3:
            $monday = $targetDTS - ($sOOD * 2);
            $friday = $targetDTS + ($sOOD * 2);
            break;
        case 4:
            $monday = $targetDTS - ($sOOD * 3);
            $friday = $targetDTS + ($sOOD * 1);
            break;
        case 5:
            $monday = $targetDTS - ($sOOD * 4);
            $friday = $targetDTS;
            break;
        }

    if(isset($monday) && isset($friday)) {
        echo "{$year}年 {$month}月 {$day}日がある周の月曜日と金曜日の日付は、";
        echo "<br>";
        echo "月曜日 :".date("Y-m-d", $monday);
        echo "<br>";
        echo "金曜日 :".date("Y-m-d", $friday);
    } else {
        echo "月曜日から金曜日までの日付を入力してください。";
    }
?>