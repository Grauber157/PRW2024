<?php
    list($horaI, $minI, $horaF, $minF) = explode(" ", readline());
    $horaI = doubleval($horaI);
    $minI = doubleval($minI);
    $horaF = doubleval($horaF);
    $minF = doubleval($minF);
    //horaI < horaF
    if ($horaI < $horaF and $minI < $minF)
    {
        $tempoH = $horaF - $horaI;
        $tempoM = $minF - $minI;
    }
    else if ($horaI < $horaF and $minI > $minF)
    {
        $tempoH = ($horaF - $horaI)-1;
        $tempoM = ($minF - $minI)+60;
    }
    else if ($horaI < $horaF and $minI == $minF)
    {
        $tempoH = ($horaF - $horaI);
        $tempoM = 0;
    }
    //horaI > horaF
    else if ($horaI > $horaF and $minI > $minF)
    {
        $tempoH = abs(($horaI-24))+$horaF-1;
        $tempoM = ($minF - $minI)+60;
    }
    //TESTE-------------
    else if ($horaI > $horaF and $minI < $minF)
    {
        $tempoH = abs(($horaI-24))+$horaF;
        $tempoM = $minF - $minI;
    }
    else if ($horaI > $horaF and $minI == $minF)
    {
        $tempoH = abs($horaI - 24)+ $horaF;
        $tempoM = 0;
    }
    //horaI == horaF
    else if ($horaI == $horaF and $minI == $minF)
    {
        $tempoH = 24;
        $tempoM = 0;
    }
    else if ($horaI == $horaF and $minI < $minF)
    {
        $tempoH = 0;
        $tempoM = $minF - $minI;
    }
    else if ($horaI == $horaF and $minI > $minF)
    {
        $tempoH = 23;
        $tempoM = ($minF - $minI)+60;
    }
    echo "O JOGO DUROU {$tempoH} HORA(S) E {$tempoM} MINUTO(S)\n";
?>