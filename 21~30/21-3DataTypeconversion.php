<?php
    $dob = 5.56;
    echo "데이터형 변경전의 데이터 타입 : ".gettype($dob)."<br>";

    $dobchg = (int) $dob;
    echo "데이터형 변경후의 데이터 타입 : ".gettype($dobchg)." 값은 {$dobchg}";
?>
