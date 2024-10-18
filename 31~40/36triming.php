<?php
    $str = " 両サイドの空白文字を消す ";
    echo '|'.trim($str).'|';
    echo '<br>';

    $str = " 前だけの空白文字を消す ";
    echo '|'.ltrim($str).'|';
    echo '<br>';

    $str = " 後だけの空白文字を消す ";
    echo '|'.rtrim($str).'|';

?>