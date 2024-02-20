<?php
    $array = readline();
    $celula = explode(" ", $array);
    $A = $celula[0];
    $B = $celula[1];
    $C = $celula[2];
    $tri = ($A*$C)/2;
    $cir = ($C*$C)*3.14159;
    $tra = (($A+$B)*$C)/2;
    $qua = $B*$B;
    $ret = $A*$B;
    echo "TRIANGULO: ".number_format($tri,3,".","")."\n";
    echo "CIRCULO: ".number_format($cir,3,".","")."\n";
    echo "TRAPEZIO: ".number_format($tra,3,".","")."\n";
    echo "QUADRADO: ".number_format($qua,3,".","")."\n";
    echo "RETANGULO: ".number_format($ret,3,".","")."\n";
?>