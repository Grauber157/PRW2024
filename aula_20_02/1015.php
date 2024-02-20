<?php
    $array1 = readline();
    $cel1 = explode(" ", $array1);
    $array2 = readline();
    $cel2 = explode(" ", $array2);
    $x1 = $cel1[0]; 
    $y1 = $cel1[1];
    $x2 = $cel2[0];
    $y2 = $cel2[1];
    $distancia = sqrt( pow($x2-$x1, 2) + pow($y2-$y1, 2) );
    echo number_format($distancia,4)."\n";
?>