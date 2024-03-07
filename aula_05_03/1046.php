<?php
    list($a, $b) = explode(" ", readline());
    
    if ($b > $a)
    {
        $tempo = $b - $a;
        echo "O JOGO DUROU {$tempo} HORA(S)\n";
    }
    else
    {
        $tempo = abs($a-24)+$b;
        echo "O JOGO DUROU {$tempo} HORA(S)\n";
        //a - 24 + b
    }
?>