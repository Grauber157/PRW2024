<?php
    $raio = doubleval(readline());
    $pi = 3.14159;
    $area = ($raio*$raio)*$pi;
    echo "A=".number_format($area,4,'.','')."\n";
?>