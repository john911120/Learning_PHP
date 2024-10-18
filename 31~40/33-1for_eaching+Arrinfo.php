<?php
    $memberArr[0] = ['name' => '질량처형인','id'=>'yuuka100kg'];
    $memberArr[1] = ['name' => '애애앵','id'=>'koyukiaaang'];
    $memberArr[2] = ['name' => '횡령범','id'=>'rioriaaang'];
    $memberArr[3] = ['name' => '서기','id'=>'noaaaang'];

    foreach($memberArr as $ma) {
        echo "이름 : ".$ma['name'];
        echo "<br>";
        echo "ID : ".$ma['id'];
        echo "<br><br>";
    }
?>