<?php
    $numero = doubleval(readline());
    switch ($numero) 
    {
        case $numero > 0 && $numero <= 25:
            echo "Intervalo [0,25]\n";
            break;
            
        case $numero > 25 && $numero <= 50:
            echo "Intervalo (25,50]\n";
            break;

        case $numero > 50 && $numero <= 75:
            echo "Intervalo (50,75]\n";
            break;
            
        case $numero > 75 && $numero <= 100:
            echo "Intervalo (75,100]\n";
            break;
            
        default:
            echo "Fora de intervalo\n";
            break;
    }
?>