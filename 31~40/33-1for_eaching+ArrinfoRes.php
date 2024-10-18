<?php
    $memberArr[0] = ['name' => '질량처형인','id'=>'yuuka100kg'];
    $memberArr[1] = ['name' => '애애앵','id'=>'koyukiaaang'];
    $memberArr[2] = ['name' => '횡령범','id'=>'rioriaaang'];
    $memberArr[3] = ['name' => '서기','id'=>'noaaaang'];

    foreach($memberArr as $idx => $val) {
        foreach($val as $idx1 => $val1) {
            if($idx1 == 'name') {
                echo "{$val1} id is : ";
            }
            if($idx1 == 'id') {
                echo "{$val1}";
            }
        }
        echo "<br><br>";
    }
?>