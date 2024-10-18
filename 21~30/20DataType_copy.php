<?php
    $number = 741;
    echo "\${number} : ".gettype($number);
    echo "<br>";

    $strin = "chiba";
    echo "\${strin} : ".gettype($strin);
    echo "<br>";

    $numberStrin = "741";
    echo "\${numberStrin} : ".gettype($numberStrin);
    echo "<br>";

    $number = array();
    echo "$number : ".gettype($number);
    echo "<br>";

    $nai = null;
    echo "\${nai} : ".gettype($nai);
    echo "<br>";

    $bool = true;
    echo "\${bool} : ".gettype($bool);

?>
