<?php
    $N = intval(readline());
    $horas = intval($N/3600);
    $N = intval($N%3600);
    $minutos = intval($N/60);
    $N = intval($N%60);
    $segundos = $N;
    echo number_format($horas, 0).":".number_format($minutos, 0).":".number_format($segundos, 0)."\n";
?>