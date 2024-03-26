<?php
    $c = intval(readline());
    
    
    for ($i = 0; $i <> $c; $i++) 
    {
        list($a, $b) = explode(" ", readline());
        
        if ($a <> $b) 
        {
            switch ($a)
            {
                case 'pedra':
                    if($b == 'lagarto')
                    {
                        echo "sheldon";
                    }
                    else if($b == 'tesoura')
                    {
                        echo "sheldon";
                    }
                    break;
                
                case 'papel':
                    // code...
                    break;
                    
                case 'tesoura':
                    // code...
                    break;
                    
                case 'lagarto':
                    // code...
                    break;
                    
                case 'spock':
                    // code...
                    break;
                    
                default:
                    echo "erro\n";
                    break;
            }
        }
        
        else 
        {
            echo "empate\n";    
        }
    }
?>