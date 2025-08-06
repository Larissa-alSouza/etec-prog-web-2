<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05/08</title>
</head>
<body>
    <?php
        $a = 20;
        $b = 30;
        $c = 5;

        // 1a - Mostra qual variável tem o maior valor
        $maior_valor = max($a, $b, $c);
        echo "Maior valor: $maior_valor<br>";
        
        // 1b - Ordenar os valores do menor para o maior
        $valores = array($a, $b, $c);
        sort($valores);
        echo "Valores ordenados: " . implode(", ", $valores) . "<br>";
        
        // 1c - Verificar se o valor de $a é primo

        function primo($num) {
            if ($num <= 1) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false;
            }
            return true;
        }
        
        if (primo($a)) {
            echo "O valor de \$a ($a) é primo.<br>";
        } else {
            echo "O valor de \$a ($a) não é primo.<br>";
        }

        if (primo($b)) {
            echo "O valor de \$b ($b) é primo.<br>";
        } else {
            echo "O valor de \$b ($b) não é primo.<br>";
        }

        if (primo($c)) {
            echo "O valor de \$c ($c) é primo.<br>";
        } else {
            echo "O valor de \$c ($c) não é primo.<br>";
        }
        
        // 1d - Calcular o fatorial de $c
        function fatorial($n) {
            if ($n == 0 || $n == 1) return 1;
            return $n * fatorial($n - 1);
        }
        
        $fatorial_c = fatorial($c);
        echo "O fatorial de \$c ($c) é: $fatorial_c<br>";
    ?>
</body>
</html>
