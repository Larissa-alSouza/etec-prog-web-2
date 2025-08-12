<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 05/08/2025</title>
</head>
<body>
<?php
   
   //1 -  Crie um arquivo .php conforme especificado em aula, nele defina 3 variáveis, $a, $b, $c e atribua o numero (valor) que desejar a cada uma delas manualmente

   $a = 11;
   $b = 15;
   $c = 38;

   $aux;
   $primo;
   $fatorial = 1;
  
   //1a) Mostre qual destas variáveis possui o maior valor
  
   if($a > $b)
   {
       if($a > $c)
       {
           echo "a é maior<br><br>";
       }
   }
   else if($b > $c)
   {
       echo"b é maior<br><br>";
   }
   else
   {
       echo "c é maior<br><br>";
   }
 
   
    //1b) Ordene os valores do menor para o maior 
   
    if($a > $b)
    {
        $aux = $a;
        $a = $b;
        $b = $aux;
    }
    else if($a > $c)
    {
        $aux = $a;
        $a = $c;
        $c = $aux;
    }
    else if($b > $c)
    {
        $aux = $b;
        $b = $c;
        $c = $aux;
    }
   
    echo "Ordem crescente: $a, $b, $c<br><br>";

    //1c) Diga se o valor atribuído para a variável $a é primo

    if ($a == 1) {
        $primo = false;
    } else {
        $primo = true;
        for ($i = 2; $i <= sqrt($a); $i++) {
            if ($a % $i == 0) {
                $primo = false;
                break;
            }
        }
    }
    
    if($primo == false)
    {
        echo "O valor $a, da variável a, não é primo<br><br>";
    }
    else
    {
        echo "O valor $a, da variável a, é primo<br><br>";
    }
   
    //1d) Mostre o fatorial da variável $c
   
    for($i = $c; $i > 1; $i--)
    {
        $fatorial *= $i;
    }
   
    echo "O fatorial de $c é $fatorial";

?>
</body>
</html>
