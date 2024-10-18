<?php
    $reg_pattern = '/^[가-힣]{3,}$/';

    $string = '서울특별시';

    if(preg_match($reg_pattern, $string, $matches)) {
        echo "{$str} 정규식 표현에 적합합니다.";
        echo "<pre>";
        var_dump($matches);
        echo "<pre>";
    } else {
        echo "표현에 적합하지 않습니다. 특수문자, 한글 또는 숫자가 있는지를 확인하세요.";
    }
?>