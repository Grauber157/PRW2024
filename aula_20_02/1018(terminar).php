<?php
    $N = readline();
    $valorTotal = $N;
    $cem = 0;
    $cinquenta = 0;
    $vinte = 0;
    $dez = 0;
    $cinco = 0;
    $dois = 0;
    $um = 0;
    while($N >= 100)
    {
        $N = $N-100;
        $cem++;
    }
    while($N >= 50)
    {
        $N = $N-50;
        $cinquenta++;
    }
    while($N >= 20)
    {
        $N = $N-20;
        $vinte++;
    }
    while($N >= 10)
    {
        $N = $N-10;
        $dez++;
    }
    while($N >= 5)
    {
        $N = $N-5;
        $cinco++;
    }
    while($N >= 2)
    {
        $N = $N-2;
        $dois++;
    }
    while($N >= 1)
    {
        $N = $N-1;
        $um++;
    }
    echo $valorTotal."\n";
    echo $cem." nota(s) de R$ 100,00\n";
    echo $cinquenta." nota(s) de R$ 50,00\n";
    echo $vinte." nota(s) de R$ 20,00\n";
    echo $dez." nota(s) de R$ 10,00\n";
    echo $cinco." nota(s) de R$ 5,00\n";
    echo $dois." nota(s) de R$ 2,00\n";
    echo $um." nota(s) de R$ 1,00\n";
?>  