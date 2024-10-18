<?php
    require "./70including.php";
    //include "notexist.php";
    require "notexist.php";
    echo "<br>";
    echo "페이지 오류가 존재하지 않습니다.";
?>