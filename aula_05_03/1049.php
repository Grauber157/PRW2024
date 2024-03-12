<?php
    $char1 = readline();
    $char2 = readline();
    $char3 = readline();
    //ESCOLHA 1-A
    if ($char1 == 'vertebrado') 
    {
        //ESCOLHA 2-A//
        if ($char2 == 'ave') 
        {
            //ESCOLHA 3-A
            if ($char3 == 'carnivoro') 
            {
                echo "aguia\n";
            }
            //ESCOLHA 3-B
            else if ($char3 == 'onivoro') 
            {
                echo "pomba\n";
            }
        } 
        //ESCOLHA 2-B//
        else if ($char2 == 'mamifero') 
        {
            //ESCOLHA 3-A
            if ($char3 == 'onivoro') 
            {
                echo "homem\n";
            }
            //ESCOLHA 3-B
            else if ($char3 == 'herbivoro') 
            {
                echo "vaca\n";
            }
        } 
    }
    //ESCOLHA 1-B
    else if ($char1 == 'invertebrado') 
    {
        //ESCOLHA 2-A//
        if ($char2 == 'inseto') 
        {
            //ESCOLHA 3-A
            if ($char3 == 'hematofago') 
            {
                echo "pulga\n";
            }
            //ESCOLHA 3-B
            else if ($char3 == 'herbivoro') 
            {
                echo "lagarta\n";
            }
        } 
        //ESCOLHA 2-B//
        else if ($char2 == 'anelideo') 
        {
            //ESCOLHA 3-A
            if ($char3 == 'hematofago') 
            {
                echo "sanguessuga\n";
            }
            //ESCOLHA 3-B
            else if ($char3 == 'onivoro') 
            {
                echo "minhoca\n";
            }
        }
    }
?>