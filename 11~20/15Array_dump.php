<?php
    $dr = array();

    $dr['nation'] = array();

    $dr['nation']['japan'] = array();
    $dr['nation']['japan'][0] = 'tokyo';
    $dr['nation']['japan'][1] = 'osaka';
    $dr['nation']['japan'][2] = 'sapporo';
    $dr['nation']['japan'][3] = 'yokohama';

    $dr['nation']['korea'] = array();
    $dr['nation']['korea'][0] = 'seoul';
    $dr['nation']['korea'][1] = 'busan';
    $dr['nation']['korea'][2] = 'incheon';
    $dr['nation']['korea'][3] = 'mokpo';

    $dr['nation']['china'] = array();
    $dr['nation']['china'][0] = 'sanghai';
    $dr['nation']['china'][1] = 'beijing';

    echo "<pre>";
    var_dump($dr);
    echo "</pre>";
?>