<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP com Mysql</title>
</head>
<body>

    <?php
    $host = "localhost";
    $username = "aluno";
    $password = "*****";
    $database = "teste";
    
    
    $conn = mysqli_connect($host, $username, $password, $database);
    
    $sql = "SELECT cod, aluno, email FROM alunos";
    
    $resultados = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($resultados) == 0) {
        echo "Sem resultados para exibir!";
    }
    
    echo "<table border='1'>";
    while($linha = mysqli_fetch_assoc($resultados)) {
        echo "<tr><td>" . $linha["cod"] . "</td><td>" . $linha["aluno"] . "</td><td>"  . $linha["email"] . "</td> . </tr>";
    }
    echo "</table>";
    ?>

</body>
</html>
