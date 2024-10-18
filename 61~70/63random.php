<?php
    $randomNumber = rand(1,3);
    $じゃんけん = '';

    switch($randomNumber) {
        case 1:
            $じゃんけん = 'グー';
            break;
        case 2:
            $じゃんけん = 'パー';
            break;
        case 3:
            $じゃんけん = 'チョキ';
            break;
        default:
            $じゃんけん = '不明';
            break;
        }

        echo "ランダムに出た手： {$じゃんけん}";
?>