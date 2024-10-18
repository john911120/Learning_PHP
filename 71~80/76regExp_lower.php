<?php
    $reg_pattern = '/^[a-z]{3,}+$/';

    $string = 'jackson';

    if(preg_match($reg_pattern, $string, $matches)) {
        echo "{$string} 정규식 표현에 적합합니다.";
        echo "<pre>";
        var_dump($matches);
        echo "<pre>";
    } else {
        echo "표현에 적합하지 않습니다. 값에 영어 소문자 외의 문자가 존재하는지 확인하세요.";
    }
?>