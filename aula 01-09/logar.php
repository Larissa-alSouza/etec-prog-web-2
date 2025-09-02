
<?php

    session_start();

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if($email == 'teste@teste.com' && $senha == 'teste123')
    {
     $_SESSION["login"] = 'sim';
      header("Location: restrito.php");
    }
    else
    {
       header("Location: index.php");
    }
?>