<?php
    $tamanho = 1.72;
    $sexo = "M";
    if($sexo == "M"){
       $val = (72.7 * $tamanho) - 58;
       echo "$val";
    }else if($sexo == "S"){
        $val = (62.1 * $tamanho) - 44;
        echo "$val";
    }
?>

