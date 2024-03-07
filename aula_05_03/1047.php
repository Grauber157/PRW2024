<?php
    list($horaInicial, $minInicial, $horaFinal, $minFinal) = explode(" ", readline());
    
    if ($horaFinal > $horaInicial)
    {
        $tempoHor = $horaFinal - $horaInicial;
    }
    else
    {
        $tempoHor = abs($horaInicial-24)+$horaFinal;
        //a - 24 + b
    }
    
    if ($minFinal > $minInicial)
    {
        $tempoMin = $minFinal - $minInicial;
    }
    else if ($minInicial==$minFinal)
    {
        $tempoMin = 0;
    }
    else
    {
        $tempoMin = abs($minInicial-60)+$minFinal;
    }
    
    echo "O JOGO DUROU {$tempoHor} HORA(S) E {$tempoMin} MINUTO(S)\n";
?>