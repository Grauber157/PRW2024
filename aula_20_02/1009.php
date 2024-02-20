<?php
    $nome = readline();
    $salario = doubleval(readline());
    $vendas = doubleval(readline());
    $total = ($vendas/100)*15+$salario;
    echo "TOTAL = R$ ".number_format($total,2,'.','')."\n";
?>