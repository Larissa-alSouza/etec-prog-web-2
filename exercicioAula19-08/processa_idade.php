<?php

    $idade = $_POST["idade"];
    $faixa = $_POST["campoIdade"];

    if($idade <= 2 && $faixa === "bebe")
    {
        echo "Idade informada bate com a opção de faixa etária escolhida - Bebê";
    }
    elseif($idade > 2 && $idade <= 12 && $faixa === "crianca")
    {
        echo "Idade informada bate com a opção de faixa etária escolhida - Criança";
    }
    elseif($idade > 12 && $idade <= 18 && $faixa === "adolescente")
    {
        echo "Idade informada bate com a opção de faixa etária escolhida - Adolescente";
    }
    elseif($idade > 18 && $faixa === "adulto")
    {
        echo "Idade informada bate com a opção de faixa etária escolhida - Adulto";
    }
    else
    {
        echo "Idade informada não bate com a opção de faixa etária escolhida";
    }

?>