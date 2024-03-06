<?php
    list($a, $b, $c) = explode(" ", readline());
    //A
    if ($a < $b && $a < $c) 
    {
        echo $a."\n";
        //A-B
        if ($b < $c)
        {
            echo $b."\n";
            echo $c."\n";
        }
        //A-C
        else
        {
            echo $c."\n";
            echo $b."\n";
        }
    }
    //B
    else if ($b < $a && $b < $c) 
    {
        echo $b."\n";
        //B-A
        if ($a < $c)
        {
            echo $a."\n";
            echo $c."\n";
        }
        //B-C
        else
        {
            echo $c."\n";
            echo $a."\n";
        }
    }
    //C
    else if ($c < $a && $c < $b) 
    {
        echo $c."\n";
        //C-A
        if ($a < $b)
        {
            echo $a."\n";
            echo $b."\n";
        }
        //C-B
        else
        {
            echo $b."\n";
            echo $a."\n";
        }
    }
    echo "\n";
    //Sequencia
    echo $a."\n";
    echo $b."\n";
    echo $c."\n";
?>