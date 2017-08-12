<?php
    $A = 600;
    $B = 500;
    $C = 700;
    $D = 400;
    $soma = $A + $D;
    $divisao = $B / $C;
    
    if($soma > $divisao){
        echo 'maior';
    } else if($soma < $divisao){
        echo 'menor';
    } else {
        echo 'igual';
    }
?>

