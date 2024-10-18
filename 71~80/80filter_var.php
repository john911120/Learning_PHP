<?php
    function chkEmail($email_Addr) {
        $email_Chk = filter_Var($email_Addr, FILTER_VALIDATE_EMAIL);

        $returnInfo = false;
        if($email_Chk) {
            $returnInfo = true;
        }
        return $returnInfo;
    }
    $email_Addr = "fujita2345@example.net";

    if(chkEmail($email_Addr)) {
        echo "{$email_Addr}有効なメールアドレスです。";
    } else {
        echo "{$email_Addr}無効なメールアドレスです。";
    }
?>