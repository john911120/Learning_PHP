<?php
    echo 'DOCUMENT_ROOT IS'.$_SERVER['DOCUMENT_ROOT'].'<br>';
    echo 'HTTP ACCEPT LANGUAGE IS'.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>';
    echo 'HTTP HOST IS'.$_SERVER['HTTP_HOST'].'<br>';
    echo 'HTTP USER AGENT IS'.$_SERVER['HTTP_USER_AGENT'].'<br>';
    echo 'SERVER PORT IS'.$_SERVER['SERVER_PORT'].'<br>';
    echo 'SCRIPT NAME IS'.$_SERVER['SCRIPT_NAME'].'<br>';
    echo 'REQUEST URI IS'.$_SERVER['REQUEST_URI'].'<br>';
    echo 'PHP SELF IS'.$_SERVER['PHP_SELF'].'<br>';
    $queryString = $_SERVER['QUERY_STRING'] ?? '';
    echo 'QUERY STRING IS : '.$queryString.'<br>';

    // Full URL 

    // protected Protocol
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";


    $fullUrl = $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    echo 'Full URL is : ' . $fullUrl;
?>