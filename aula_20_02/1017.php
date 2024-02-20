<?php
    $tempo = intval(readline());
    $velocidade = intval(readline());
    $litros = ($tempo*$velocidade)/12;
    echo number_format($litros, 3)."\n";
?>  