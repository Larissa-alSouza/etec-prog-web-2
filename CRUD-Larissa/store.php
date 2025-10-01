<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $curso = $_POST['curso'];
    $vagas = $_POST['vagas'];
    $periodo = $_POST['periodo'];

    // Preparando a query
    $sql = "INSERT INTO cursos (curso, vagas, periodo) VALUES ('$curso', '$vagas', '$periodo')";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        $erro = "Erro ao inserir curso: " . $sql . " - " . mysqli_error($conn);
        header("Location: index.php?erro=" . urlencode($erro));
        exit;
    }
}
else{
    header('Location: index.php');
}
mysqli_close($conn);
?>
