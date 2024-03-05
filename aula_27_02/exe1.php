<?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $salario = $_GET['salario'];
    $taxaINSS = 0;
    $taxaIRPF = 0;
    //INSS: x-1412,00=7,5% / 1412,01- 

    
    if($idade <= 65)
    {
        //---INSS---
        if($salario <= 1412)
        {
            $taxaINSS = ($salario/100)*7.5;
        }
        else if($salario >= 1412.01 && $salario < 2666.69)
        {
            $taxaINSS = ($salario/100)*9;
        }
        else if($salario >= 2666.69 && $salario < 4000.04)
        {
            $taxaINSS = ($salario/100)*12;
        }
        else if($salario >= 4000.04 && $salario < 7786.03)
        {
            $taxaINSS = ($salario/100)*14;
        }

        //Salario descontado do INSS
        $salario = $salario - $taxaINSS;
    }

    if($idade <= 65)
    {
        //---IRPF---
        if($salario >= 2112.01 && $salario < 2826.66)
        {
            $taxaIRPF = ($salario/100)*7.5;
        }
        else if($salario >= 2826.66 && $salario < 3751.06)
        {
            $taxaIRPF = ($salario/100)*15;
        }
        else if($salario >= 3751.06 && $salario < 4664.69)
        {
            $taxaIRPF = ($salario/100)*22.5;
        }
        else if($salario >= 4664.69)
        {
            $taxaIRPF = ($salario/100)*27.5;
        }
    }
    else
    {
        if($salario >= 2112.01 && $salario < 2826.66)
        {
            $taxaIRPF = ($salario/100)*7.5;
        }
        else if($salario >= 2826.66 && $salario < 3751.06)
        {
            $taxaIRPF = ($salario/100)*15;
        }
        else if($salario >= 3751.06 && $salario < 4664.69)
        {
            $taxaIRPF = ($salario/100)*15;
        }
        else if($salario >= 4664.69)
        {
            $taxaIRPF = ($salario/100)*15;
        }
    }
    
    
    echo "Valor IRPF = ".$taxaIRPF." /// Valor INSS = ". $taxaINSS, PHP_EOL;
    //Salario descontado do IRFP + INSS
    $salario = $salario - $taxaIRPF;
    echo "Sálario Lido: R$".$salario+$taxaINSS+$taxaIRPF, PHP_EOL;
    echo "Sálario Restante: R$".$salario. " / Imposto Total: R$".$taxaINSS+$taxaIRPF;
?>