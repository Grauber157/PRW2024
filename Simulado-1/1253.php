<?php
    $n = readline();
    //ord() transforma string em tabela ascii
    //chr() transforma ascii em string
    for ($i = 0; $i < $n; $i++) 
    {
        unset($letrasCrip);
        $palavra = readline();
        $mod = readline();
        $tam = strlen($palavra);
        for ($x = 0; $x < $tam; $x++) 
        {
            //consegue cada letra
            $letra = substr($palavra, $x, 1);
            //consegue o valor ASCII da letra
            $numAsc = ord($letra);
            //Soma o valor de modificação ao valor da letra
            $numAsc = $numAsc-$mod;
            if ($numAsc < 65)
            {
                $numAsc = $numAsc+26;
            }
            //Retorna em string norvamente
            $letraMod = chr($numAsc);
            //Adiciona a array
            $letrasCrip[$x] = $letraMod;
        }
        $criptografia[$i] = implode($letrasCrip);
    }
    foreach ($criptografia as $cripto)
    {
        echo "{$cripto}\n";
    }
?>