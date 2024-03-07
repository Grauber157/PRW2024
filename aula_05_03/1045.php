<?php
    list($a, $b, $c) = explode(" ", readline());
    $aa = doubleval($a);
    $bb = doubleval($b);
    $cc = doubleval($c);
    //colocar em ordem decrescente
    if ($b > $a && $b > $c)
    {
        $aa = doubleval($b);
        if ($a > $c)
        {
            $bb = doubleval($a);
            $cc = doubleval($c);
        }
        else
        {
            $bb = doubleval($c);
            $cc = doubleval($a);
        }
    }
    else if ($c > $a && $c > $b)
    {
        $aa = doubleval($c);
        if ($a > $b)
        {
            $bb = doubleval($a);
            $cc = doubleval($b);
        }
        else
        {
            $bb = doubleval($b);
            $cc = doubleval($a);
        }
    }
    //Negativa
    if ($aa >= $bb+$cc)
    {
        echo "NAO FORMA TRIANGULO\n";
    }
    //echos do script
    else 
    {
        if ($aa*$aa == $bb*$bb+$cc*$cc)
        {
            echo "TRIANGULO RETANGULO\n";
            if ($aa == $bb && $aa == $cc)
            {
                echo "TRIANGULO EQUILATERO\n";
            }
            else if ($aa == $bb || $aa == $cc || $bb == $cc)
            {
                echo "TRIANGULO ISOSCELES\n";
            }
        }
        else if ($aa*$aa > $bb*$bb+$cc*$cc) 
        {
            echo "TRIANGULO OBTUSANGULO\n";
            if ($aa == $bb && $aa == $cc)
            {
                echo "TRIANGULO EQUILATERO\n";
            }
            else if ($aa == $bb || $aa == $cc || $bb == $cc)
            {
                echo "TRIANGULO ISOSCELES\n";
            }
        }
        else if ($aa*$aa < $bb*$bb+$cc*$cc)
        {
            echo "TRIANGULO ACUTANGULO\n";
            if ($aa == $bb && $aa == $cc)
            {
                echo "TRIANGULO EQUILATERO\n";
            }
            else if ($aa == $bb || $aa == $cc || $bb == $cc)
            {
                echo "TRIANGULO ISOSCELES\n";
            }
        }
    }
?>