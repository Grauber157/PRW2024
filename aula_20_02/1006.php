<?php
    $A = doubleval(readline());
    $B = doubleval(readline());
    $C = doubleval(readline());
    $med = (number_format($A,1)*2+number_format($B,1)*3+number_format($C,1)*5)/10;
    echo "MEDIA = ".number_format($med,1)."\n";
?>