<?php
    $n = readline();
    $sTotal = 0;
    $s1Total = 0;
    $bTotal = 0;
    $b1Total = 0;
    $aTotal = 0;
    $a1Total = 0;
    $sPor = 0;
    $bPor = 0;
    $aPor = 0;
    for ($i = 0; $i < $n; $i++) 
    {
        $nome = readline();
        //$s = saque //$b = bloqueio //$a = ataque
        list($s[$i], $b[$i], $a[$i]) = explode(" ", readline());
        list($s1[$i], $b1[$i], $a1[$i]) = explode(" ", readline());
    }
    
    //SOMATORIA DE TODAS AS TENTATIVAS E ACERTOS
    for ($i = 0; $i < $n; $i++) 
    {
        $sTotal += $s[$i];
        $s1Total += $s1[$i];
        
        $bTotal += $b[$i];
        $b1Total += $b1[$i];
        
        $aTotal += $a[$i];
        $a1Total += $a1[$i];
    }
    //CALCULO DA PORCENTAGEM
    $sPor = ($s1Total/$sTotal)*100;
    $bPor = ($b1Total/$bTotal)*100;
    $aPor = ($a1Total/$aTotal)*100;
    
    echo "Pontos de Saque: ".number_format($sPor, 2, ".", "")." %.\n";
    echo "Pontos de Bloqueio: ".number_format($bPor, 2, ".", "")." %.\n";
    echo "Pontos de Ataque: ".number_format($aPor, 2, ".", "")." %.\n";
?>