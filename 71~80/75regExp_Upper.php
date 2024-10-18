<?php
    $reg_pattern = '/^[A-Z]{3,}+$/';

    $string = 'JACKSONVILE';

    if(preg_match($reg_pattern, $string, $matches)) {
        echo "{$string} 정규식 표현에 적합합니다.";
        echo "<pre>";
        var_dump($matches);
        echo "<pre>";
    } else {
        echo "표현에 적합하지 않습니다. 값에 영어 대문자 외의 문자가 존재하는지 확인하세요.";
    }
?>