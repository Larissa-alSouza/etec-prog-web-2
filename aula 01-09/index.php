<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

session_start();

require 'menu.php';

if (!isset($_SESSION['login'])) {
    ?>

<form action="logar.php" method="post">
        <input type="email" name="email" id="email">
        <input type="password" name="senha" id="senha">
        <button type="submit">Enviar</button>
    </form>




<?php
}
else{
    echo $_SESSION["login"];
}
?>


</body>
</html>


