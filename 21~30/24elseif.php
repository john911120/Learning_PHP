<?php
    $gender = "man";
    $hobby = "アクションゲーム";

    if($gender == "man" && $hobby == "Gun's Action") {
        echo "男性はガンのアクション映画を見ることが好きです";
    } else if ($gender == 'man'&& $hobby == 'アクションゲーム') {
        echo "男性はアクションゲームをやることが好きです";
    } else {
        echo "男性は趣味がありません。";
    }
?>