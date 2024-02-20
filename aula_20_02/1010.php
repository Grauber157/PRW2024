<?php
    $array = readline();
    $x = explode(" ", $array);
    $n1 = $x[1];
    $n2 = $x[2];
    $array2 = readline();
    $x2 = explode(" ", $array2);
    $n3 = $x2[1];
    $n4 = $x2[2];
    $total = ($n1*$n2)+($n3*$n4);
    echo "VALOR A PAGAR: R$ ".number_format($total,2,".","")."\n";
?>