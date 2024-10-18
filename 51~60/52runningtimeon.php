<?php
    $start = mktime(10, 10, 10, 10, 10, 2024);
    $end = mktime(59, 10, 10, 10, 10, 2024);

    $present = time();

    if($present >= $start && $present <= $end) {
        echo "参加できる";
    }else {
        echo "参加できません";
    }
?>