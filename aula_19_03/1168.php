<?php
    //$n é a quantidade de vezes que o programa vai pedir os numeros 
    $n = intval(readline());
    for ($i = $n; $i <> 0; $i--) 
    {
        $numero[] = readline();
    }
    foreach ($numero as $numero_parte)
    {
        unset($quant_led);
        $calculo = 0;
        //Pega o tamanho da string
        $tamanho = strlen($numero_parte);
        //For para pegar cada caractere do numero
        //o For se repete a cada caractere do numero
        for ($i = 0; $i <> $tamanho; $i++)
        {
            $comparar = substr($numero_parte, $i, 1);
            //Atribuir a quantidade de leds de acordo com o numero
            // na variavel $comparar
            switch ($comparar) 
            {
                case '1':
                    $quant_led[] = 2;;
                    break;
                case '2':
                    $quant_led[] = 5;
                    break;
                case '3':
                    $quant_led[] = 5;
                    break;
                case '4':
                    $quant_led[] = 4;
                    break;
                case '5':
                    $quant_led[] = 5;
                    break;
                case '6':
                    $quant_led[] = 6;
                    break;
                case '7':
                    $quant_led[] = 3;
                    break;
                case '8':
                    $quant_led[] = 7;
                    break;
                case '9':
                    $quant_led[] = 6;
                    break;
                case '0':
                    $quant_led[] = 6;
                    break;
            }
        }
        //Soma os valores de cada caractere do numero
        foreach ($quant_led as $led)
        {
            $calculo = $calculo + $led;
            //var_dump($calculo);
        }
        $total[] = $calculo;
    }
    foreach ($total as $resposta)
    {
        echo $resposta . " leds\n";
    }
?>