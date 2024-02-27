<?php
    $campoEmail = $_GET['email'];
    $campoSenha = $_GET['senha'];
    
    $email = "admin";
    $senha = "admin";
    
    if($campoEmail == $email && $campoSenha == $senha)
    {
        echo "Login Validado!";
    }

    else
    {
        echo "Login Inválido!";
    }
?>