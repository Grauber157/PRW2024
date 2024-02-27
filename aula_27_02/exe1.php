<?php
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    
    if($email == "admin" && $senha == "admin")
    {
        echo "Login Validado!";
    }

    else
    {
        echo "Login Inválido!";
    }
?>