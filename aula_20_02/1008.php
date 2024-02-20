<?php
    $numero = intval(readline());
    $horas = intval(readline());
    $valor = floatval(readline());
    $salario = $horas*$valor;
    echo "NUMBER = ".$numero."\n";
    echo "SALARY = U$ ".number_format($salario,2,'.','')."\n";
?>