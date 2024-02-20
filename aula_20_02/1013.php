<?php
    $array = readline();
    $cel = explode(" ", $array);
    $A = $cel[0];
    $B = $cel[1];
    $C = $cel[2];
    if ($A > $B and $A > $C) 
    {
        $maior = $A;
    }
    else if ($B > $C)
    {
        $maior = $B;
    }
    else
    {
        $maior = $C;
    }
    echo $maior." eh o maior\n";
?>