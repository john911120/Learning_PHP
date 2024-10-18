<?php
    $str = "249MachineGun";
    echo "데이터형 변경전의 데이터 타입 : ".gettype($str)."<br>";

    $strchg = (int) $str;
    echo "데이터형 변경후의 데이터 타입 : ".gettype($strchg)." 값은 {$strchg}";
?>
