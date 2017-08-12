<?php
    $Nota1 = 7;
    $Nota2 = 7;
    $Nota3 = 7;
    $Nota4 = 7;
    
    $media = ($Nota1 + $Nota2 + $Nota3 + $Nota4) / 4;
    
    if($media > 7){
        echo 'Aprovado';
    }else if($media < 5){
        echo 'Reprovado';
    } else {
        echo 'Exame'; 
    }
?>

