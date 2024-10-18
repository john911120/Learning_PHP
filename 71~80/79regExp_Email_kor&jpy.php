<?php
    $reg_pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    $string = 'fujita2345@example.net';

    if(preg_match($reg_pattern, $string, $matches)) {
        echo "{$string} メールアドレスが有効します。";
        echo "<pre>";
        var_dump($matches);
        echo "<pre>";
    } else {
        echo "メールアドレスが有効しません。ご確認お願い致します。";
    }
?>