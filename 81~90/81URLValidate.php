<?php
    function chkURL($url) {
        $urlchk = filter_var($url, FILTER_VALIDATE_URL);

        $retInfo = false;
        if($urlchk){
            $retInfo = true;
        }
        return $retInfo;
    }

        $url = "https://www.example.com";

        if(chkURL($url)){
            echo "{$url} is valid";
        } else {
            echo "{$url} is not valid";
        }
        echo"<br>";
        $url = "www.example.com";

        if(chkURL($url)){
            echo "{$url} is valid";
        } else {
            echo "{$url} is not valid";
        }
?>