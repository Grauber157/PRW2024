<?php
    $A = doubleval(readline());
    $B = doubleval(readline());
    $med = ((number_format($A,1)*3.5)+(number_format($B,1)*7.5))/11;
    echo "MEDIA = ".number_format($med,5)."\n";
?>