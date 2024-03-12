<?php
    $salario = doubleval(readline());
    
    if ($salario >= 0 and $salario <= 2000)
    {
        echo "Isento\n";  
    }
    else if ($salario <= 3000)
    {
        $imposto = ($salario-2000)*0.08;
        echo "R$ ".number_format($imposto, 2, '.', '')."\n";  
    }
    else if ($salario <= 4500)
    {
        $imposto = ($salario-3000)*0.18 + 1000*0.08;
        echo "R$ ".number_format($imposto, 2, '.', '')."\n";  
    }
    else if ($salario > 4500)
    {
        $imposto = ($salario-4500)*0.28 + 1500*0.18 + 1000*0.08;
        echo "R$ ".number_format($imposto, 2, '.', '')."\n";  
    }
?>