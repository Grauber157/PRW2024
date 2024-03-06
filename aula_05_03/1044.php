<?php
    list($a, $b) = explode(" ", readline());
    $resul = fmod($a, $b);
    $resul2 = fmod($b, $a);
    if ($resul == 0 || $resul2 == 0)
    {
        echo "Sao Multiplos\n";
    }
    else 
    {
        echo "Nao sao Multiplos\n";
    }
?>