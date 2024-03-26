<?php
        
        $end = true;
        
        while ($end)
        {
            $n = intval(readline());
            $end = false;
            $tamanho = 0;
            
            if ($n > 0) 
            {
                $end = true;
                for ($i = 0; $i <> $n; $i++) 
                {
                    $string[$i] = readline();
                    //Estrutura While() para repetir o comando de remover os
                    //espaços em brancos
                    $achou = true;
                    while($achou)
                    {
                        $achou = false;
                        //funcao substr_count() para ter a quantidade de 
                        //sub_strings com espaço duplo
                        if (substr_count($string[$i], "  ") > 0)
                        {
                            //funcao str_replace() para substituir os 
                            //espaços duplos por simples
                            $string[$i] = str_replace("  ", " ", $string[$i]);
                            $achou = true;
                        }
                    }
                    //funcao trim() para remover espaços em branco no inicio 
                    //e no fim da string
                    $string[$i] = trim($string[$i]); 
                } 
                //Estrutura de repetição Foreach() para conseguir o maior 
                //$tamanho entre as strings
                foreach ($string as $linha)
                {
                    if ($tamanho < strlen($linha))
                    {
                        $tamanho = strlen($linha);
                    }
                }
                for ($x = 0; $x <> $n; $x++) 
                {
                    echo str_pad($string[$x], $tamanho, " ", STR_PAD_LEFT)."\n";
                }
            }
        }
?>