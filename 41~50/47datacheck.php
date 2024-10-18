<?php
    $var0 = '';
    echo "value is empty...";
    var_dump(empty($var0));
    echo "<br>";

    $var1 = null;
    echo "value is null...";
    var_dump(empty($var1));
    echo "<br>";

    $var2 = array();
    echo "value is empty array...";
    var_dump(empty($var2));
    echo "<br>";

    $var3 = 0;
    echo "value is number type 0";
    var_dump(empty($var3));
    echo "<br>";

    $var4 = '0';
    echo "value is string type '0'...";
    var_dump(empty($var4));
    echo "<br>";

    $var5 = 'string';
    echo "value is string type 'string'...";
    var_dump(empty($var5));
    echo "<br>";
?>