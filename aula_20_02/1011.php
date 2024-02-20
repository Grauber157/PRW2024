<?php
    $raio = doubleval(readline());
    $pi = 3.14159;
    $volume = (4.0/3)*$pi*($raio*$raio*$raio);
    echo "VOLUME = ".number_format($volume,3,'.','')."\n";
?>