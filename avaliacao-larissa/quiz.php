<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_POST['submit'])){
        echo "Formulário não enviado!";
    }
    else
    {
        echo "Formulário enviado!";
    }

    $respostas_certas = [
        'q1' => 'b', 'q2' => 'a', 'q3' => 'b', 'q4' => 'b', 'q5' => 'b',
        'q6' => 'c', 'q7' => 'a', 'q8' => 'b', 'q9' => 'b', 'q10' => 'b'
      ];

      $acertos = 0;

        if($respostas_certas['q1'] == 'b')
        {
            $acertos = $acertos + 1;
        }
        
        if($respostas_certas['q2'] == 'a')
        {
            $acertos = $acertos + 1;
        }
        
        if($respostas_certas['q3'] == 'b')
        {
            $acertos = $acertos + 1;
        }
        
        if($respostas_certas['q4'] == 'b')
        {
            $acertos = $acertos + 1;
        }
        
        if($respostas_certas['q5'] == 'b')
        {
            $acertos = $acertos + 1;
        }
        
        if($respostas_certas['q6'] == 'c')
        {
            $acertos = $acertos + 1;
        }
        
        if($respostas_certas['q7'] == 'a')
        {
            $acertos = $acertos + 1;
        }
        
        if($respostas_certas['q8'] == 'b')
        {
            $acertos = $acertos + 1;
        }
        
        if($respostas_certas['q9'] == 'b')
        {
            $acertos = $acertos + 1;
        }
        
        if($respostas_certas['q10'] == 'b')
        {
            $acertos = $acertos + 1;
        }

      echo "<br> acertos: " . $acertos;
    ?>
</body>
</html>