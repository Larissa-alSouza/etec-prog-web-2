
<?php

    session_start();

    $email = $_POST["inputEmail4"];
    $senha = $_POST["inputPassword4"];

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