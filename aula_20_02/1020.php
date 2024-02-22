<?php
    $idade = intval(readline());
    $ano = intval($idade/365);
    $idade = $idade % 365;
    $mes = intval($idade/30);
    $idade = $idade % 30;
    $dia = $idade;
    echo $ano." ano(s)\n";
    echo $mes." mes(es)\n";
    echo $dia." dia(s)\n";
?>