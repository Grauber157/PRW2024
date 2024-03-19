<?php
    $n1 = 1;
    $n2 = 2;
    $x = 0;
    while ($n1 <> 0 and $n2 <> 0)
    {
        list($a[], $b[]) = explode(' ', readline());
        $n1 = $a[$x];
        $n1 = $b[$x];
        $x++;
    }
    for ($i = 0; $i <> $x-1; $i++) 
    {
        $total[] = $a[$i] + $b[$i];
    }
    foreach ($total as $each)
    {
        echo str_replace("0", "", $each)."\n";
    }
?>