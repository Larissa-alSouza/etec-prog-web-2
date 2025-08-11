<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
   //1 -  Crie um arquivo .php conforme especificado em aula, nele defina 3 variáveis, $a, $b, $c e atribua o numero (valor) que desejar a cada uma delas manualmente

   $a = 10;
   $b = 15;
   $c = 38;

   $aux;
   $fatorial = 1;
  
   //1a) Mostre qual destas variáveis possui o maior valor
  
   if($a > $b)
   {
       if($a > $c)
       {
           echo "a e maior\n";
       }
   }
   else if($b > $c)
   {
       echo"b e maior\n";
   }
   else
   {
       echo "c e maior\n";
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
   
    echo "$a, $b, $c\n";

    //1c) Diga se o valor atribuído para a variável $a é primo
    
   
    //1d) Mostre o fatorial da variável $c
   
    for($i = $c; $i > 1; $i--)
    {
        $fatorial *= $i;
    }
   
    echo "$fatorial";

?>
</body>
</html>
