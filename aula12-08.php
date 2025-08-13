<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12/08/2025</title>
</head>
<body>

    <p>Está funcionando</p>

    <?php

        //Aula prof. Rafael Lourenço

        $listaFrutas = ["Morango", "uva", "manga"];
        //echo "$listaFrutas"; <-- não funciona

        $tamanhoLista = count($listaFrutas);

        for($contadorFrutas=0; $contadorFrutas < $tamanhoLista; $contadorFrutas++)
        {
            echo "Com for: $listaFrutas[$contadorFrutas]<br>";
        }

        echo "<hr>";

        foreach($listaFrutas as $fruta)
        {
            echo "Com forech: $fruta <br> ";
        }

        echo "<hr>";

        function exibeMensagem()
        {
            echo "Exiba uma mensagem";
        }

        exibeMensagem();
    ?>
</body>
</html>
