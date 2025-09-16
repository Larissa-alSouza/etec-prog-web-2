<?php
$respostas_certas = [
        'q1' => 'b', 'q2' => 'a', 'q3' => 'b', 'q4' => 'b', 'q5' => 'b',
        'q6' => 'c', 'q7' => 'a', 'q8' => 'b', 'q9' => 'b', 'q10' => 'b'
      ];

      $acertos = 0;

        function verifica($respostas_certas, $_POST)
        {
            
            $acertos = 0;
            
            if($_POST['q1'] == $respostas_certas['q1'])
            {
                $acertos = $acertos + 1;
            }
            
            if($_POST['q2'] == $respostas_certas['q2'])
            {
                $acertos = $acertos + 1;
            }
            
            if($_POST['q3'] == $respostas_certas['q3'])
            {
                $acertos = $acertos + 1;
            }
            
            if($_POST['q4'] == $respostas_certas['q4'])
            {
                $acertos = $acertos + 1;
            }
            
            if($_POST['q5'] == $respostas_certas['q5'])
            {
                $acertos = $acertos + 1;
            }
            
            if($_POST['q6'] == $respostas_certas['q6'])
            {
                $acertos = $acertos + 1;
            }
            
            if($_POST['q7'] == $respostas_certas['q7'])
            {
                $acertos = $acertos + 1;
            }
            
            if($_POST['q8'] == $respostas_certas['q8'])
            {
                $acertos = $acertos + 1;
            }
            
            if($_POST['q9'] == $respostas_certas['q9'])
            {
                $acertos = $acertos + 1;
            }
            
            if($_POST['q10'] == $respostas_certas['q10'])
            {
                $acertos = $acertos + 1;
            }
            
            return $acertos;
        }
        
        $acertos = verifica($respostas_certas, $_POST);
        
        setcookie("ultimo_resultado", $acertos, time() + 100000, "/");
        
        if (isset($_COOKIE["ultimo_resultado"])) 
        {
            $resultado_anterior = $_COOKIE["ultimo_resultado"];
        } 
        else 
        {
            echo "Ainda não tem resultado anterior?";
            $resultado_anterior = null;
        }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    
    <?php
    if($acertos == 10)
        {
            $grau = "Supremo";
        }
        elseif($acertos >= 8 && $acertos <= 9)
        {
            $grau = "Especialista";
        }
        elseif($acertos >= 6 && $acertos <= 7)
        {
            $grau = "Entendedor";
        }
        elseif($acertos >= 4 && $acertos <= 5)
        {
            $grau = "Até que gosta";
        }
        elseif($acertos >= 2 && $acertos <= 3)
        {
            $grau = "Estude mais";
        }
        else
        {
            $grau = "Não conhece";
        }
    
    ?>
    
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <p>Sua quantidade de acertos foi: <strong><?php echo $acertos; ?></strong></p>
        <p>Você é: <strong><?php echo $grau; ?></strong></p>
        <p>Seu resultado anterior foi: 
            <strong>
                <?php 
                if (isset($_COOKIE["ultimo_resultado"])) {
                    echo $_COOKIE["ultimo_resultado"];
                } else {
                    echo "Ainda não tem resultado anterior.";
                }
                ?>
            </strong>
        </p>
        <p>Enviado em: <strong><?php echo date('d/m/Y H:i:s'); ?></strong></p>
    </div>
</body>
</html>
