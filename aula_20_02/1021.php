<?php
    $notas = [100, 50, 20, 10, 5, 2];
    $moedas = [1, 0.5, 0.25, 0.1, 0.05, 0.01];
    $N = readline();
    //ARRAYS NOTAS
    foreach ($notas as $nota)
    {
        $quantidadeNota[] = $N/$nota;
        $N = fmod($N, $nota);
    }
    //PRINT NOTAS
    echo "NOTAS:\n";
    foreach ($quantidadeNota as $index => $quantNota)
    {
        echo intval($quantNota)." nota(s) de R$ ".number_format($notas[$index],2)."\n";
    }
    //ARRAYS MOEDAS
    foreach ($moedas as $moeda)
    {
        if ($moeda == 0.01) 
        {
            $x = $N/$moeda;
            $quantidadeMoeda[] = round($x, 0, PHP_ROUND_HALF_UP);
        }
        else 
        {
            $quantidadeMoeda[] = $N/$moeda;
        }
        $N = fmod($N, $moeda);
    }
    //PRINT MOEDAS
    echo "MOEDAS:\n";
    foreach ($quantidadeMoeda as $index => $quantMoeda)
    {
        echo intval($quantMoeda)." moeda(s) de R$ " . number_format($moedas[$index],2)."\n";
    }
?>