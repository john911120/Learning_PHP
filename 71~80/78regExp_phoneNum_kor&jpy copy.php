<?php
//    $reg_pattern = '/^01[0|1|6|7|8|9]-\d{3,4}-\d{4}$/';
    $reg_pattern = '/^0[0-9]0-\d{3,4}-\d{4}$/';

    $string = '010-1234-1234';

    if(preg_match($reg_pattern, $string, $matches)) {
        echo "{$string} 携帯電話番号は有効します。";
        echo "<pre>";
        var_dump($matches);
        echo "<pre>";
    } else {
        echo "携帯電話番号は有効しません。ご確認お願い致します。";
    }
?>