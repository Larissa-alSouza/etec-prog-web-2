<?php
include('config.php');

if (isset($_GET['cod'])) {
    $cod = $_GET['cod'];

    // Excluindo o curso
    $sql = "DELETE FROM cursos WHERE cod = $cod";

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        $erro = "Erro ao deletar curso: " . $sql . " - " . mysqli_error($conn);
        header("Location: index.php?erro=" . urlencode($erro));
        exit;
    }
}
else{
    header('Location: index.php');
}
mysqli_close($conn);
?>