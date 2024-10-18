<?php
    $reg_pattern = '/^[ぁ-んァ-ヶ一-龯]{3,}$/';

    $string = '浪速区';

    if(preg_match($reg_pattern, $string, $matches)) {
        echo "{$string} 正規式 表現に 相応しい。";
        echo "<pre>";
        var_dump($matches);
        echo "<pre>";
    } else {
        echo "表現に 相応しくありません。 特殊文字、漢字　もしくは、数字があるかを　ご確認お願い致します。";
    }
?>