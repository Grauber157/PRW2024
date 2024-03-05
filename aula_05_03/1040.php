<?php
    list($n1, $n2, $n3, $n4) = explode(" ", readline());
    $media = ($n1*2 + $n2*3 + $n3*4 + $n4*1)/(2+3+4+1);
    $media = round($media, 1, PHP_ROUND_HALF_DOWN);
    echo "Media: ".number_format($media, 1)."\n";
    if($media >= 7.0)
    {
        echo "Aluno aprovado.\n";
    }
    else if($media < 5.0)
    {
        echo "Aluno reprovado.\n";
    }
    else
    {
        echo "Aluno em exame.\n";
        $notaExame = readline();
        echo "Nota do exame: ".$notaExame."\n";
        $mediaFinal = ($media+$notaExame)/2;
        if($mediaFinal >= 5.0)
        {
            echo "Aluno aprovado.\n";
            echo "Media final: ". number_format($mediaFinal, 1)."\n";
        }
        else
        {
            echo "Aluno reprovado.\n";
        }
    }
?>