<?php
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 9;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 7) {
       echo "Nota: $nota1 <br> Nota: $nota2 <br> Nota: $nota3 <br><br>";
        echo "Média: $media - Aprovado!";
    }else{
        echo "Nota: $nota1 <br> Nota: $nota2 <br> Nota: $nota3 <br><br>";
        echo "Média: $media - Não Aprovado!";
    }

?>