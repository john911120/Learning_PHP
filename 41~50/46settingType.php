<?php
    $val = "true";
    echo "variable val data type is ".gettype($val);

    echo "<br>";
    settype($val, 'bool');
    echo "variable val data type is ".gettype($val);
    echo "<br>";
    var_dump($val);
?>