<?php
    $gender = "woman";
    $likePlace = "USJ";

    if($gender == "man"){
        echo'女性用です';   
    } else switch ($likePlace){
        case 'USJ':
            echo 'USJが好きです';
            break;
        case '大阪旅':
            echo '大阪旅が好きです';
        break;
      case '京都旅':
            echo '京都旅が好きです';
        break;
      default:
        echo 'どこでも好きではありません。';
      }
?>