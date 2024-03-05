<?php
    list($codigo, $quant) = explode(" ", readline());
    switch ($codigo) {
        case 1:
            $total = 4*$quant;
            break;
        
        case 2:
            $total = 4.5*$quant;
            break;
        
        case 3:
            $total = 5*$quant;
            break;
        
        case 4:
            $total = 2*$quant;
            break;
        
        case 5:
            $total = 1.5*$quant;
            break;
    }
    echo "Total: R$ ".number_format($total, 2)."\n";
?>