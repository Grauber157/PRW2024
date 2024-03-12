<?php
    list($x, $y) = explode(" ", readline());
    //EXCEÇÕES//
    $x = doubleval($x);
    $y = doubleval($y);
    if ($x == 0 and $y == 0)
    {
        echo "Origem\n";
    }
    //Eixos
    else if ($x == 0)
    {
        echo "Eixo Y\n";
    }
    else if ($y == 0)
    {
        echo "Eixo X\n";
    }
    //X POSITIVO//
    else if ($x > 0 and $y > 0)
    {
        echo "Q1\n";
    }
    #y negativo
    else if ($x > 0 and $y < 0)
    {
        echo "Q4\n";
    }
    //X NEGATIVO//
    else if ($x < 0 and $y > 0)
    {
        echo "Q2\n";
    }
    #y negativo
    else if ($x < 0 and $y < 0)
    {
        echo "Q3\n";
    }
?>