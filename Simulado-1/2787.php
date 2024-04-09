<?php
    //LINHA
    $l = readline();
    //COLUNA
    $c = readline();
    //PAR
    if ($l%2 == 0)
    {
        #PAR-PAR
        if ($c%2 == 0) 
        {
            $casa = 1;
        }
        #PAR-IMPAR
        else
        {
            $casa = 0;
        }
    }
    //IMPAR
    else 
    {
        #IMPAR-PAR
        if ($c%2 == 0) 
        {
            $casa = 0;
        }
        #IMPAR-IMPAR
        else
        {
            $casa = 1;
        }
    }
    echo "{$casa}\n";
?>