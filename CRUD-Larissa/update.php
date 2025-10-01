<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cod = $_POST['cod'];
    $curso = $_POST['curso'];
    $vagas = $_POST['vagas'];
    $periodo = $_POST['periodo'];

    // Atualizando os dados
    $sql = "UPDATE cursos SET curso = '$curso', vagas = '$vagas', periodo = '$periodo' WHERE cod = $cod";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        $erro = "Erro ao atualizar curso: " . $sql . " - " . mysqli_error($conn);
        header("Location: index.php?erro=" . urlencode($erro));
        exit;
    }
}
else{
    header('Location: index.php');
}
mysqli_close($conn);
?>
