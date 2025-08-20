<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    if (empty($nome)) 
    {
        echo "Campo nome não preenchido <br>";
    }
    else
    {
        echo "Nome: $nome <br>";
    }
    
    if (empty($email)) 
    {
        echo "Campo email não preenchido <br>";
    }
    else
    {
        echo "Email: $email <br>";
    }

    if(empty($idade))
    {
        echo "Campo idade não preenchido";
    }
    else
    {
        echo "Idade: $idade <br>";
    }

?>