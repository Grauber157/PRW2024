<?php
    list($salario) = explode(" ", readline());
    $salario = doubleval($salario);
    switch ($salario) 
    {
        //15%
        case $salario > 0 and $salario <= 400:
            $aumento = ($salario/100)*15;
            $porcentual = 15;
            $salario = $salario + $aumento;
            break;
        //12%
        case $salario > 400 and $salario <= 800:
            $aumento = ($salario/100)*12;
            $porcentual = 12;
            $salario = $salario + $aumento;
            break;
        //10% 
        case $salario > 800 and $salario <= 1200:
            $aumento = ($salario/100)*10;
            $porcentual = 10;
            $salario = $salario + $aumento;
            break;
        //7%
        case $salario > 1200 and $salario <= 2000:
            $aumento = ($salario/100)*7;
            $porcentual = 7;
            $salario = $salario + $aumento;
            break;
        //4% 
        case $salario > 1200:
            $aumento = ($salario/100)*4;
            $porcentual = 4;
            $salario = $salario + $aumento;
            break;
    }
    echo "Novo salario: ".number_format($salario, 2, ".", "")."\n";
    echo "Reajuste ganho: ".number_format($aumento, 2, ".", "")."\n";
    echo "Em percentual: ".$porcentual." %\n";
?>