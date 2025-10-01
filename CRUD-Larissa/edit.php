<?php
include('config.php');

if (isset($_GET['cod'])) {
    $cod = $_GET['cod'];
    
    // Consultando o curso a ser editado
    $sql = "SELECT * FROM cursos WHERE cod = $cod";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Curso</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="cod" value="<?php echo $row['cod']; ?>">
            <div class="mb-3">
                <label for="curso" class="form-label">Curso</label>
                <input type="text" class="form-control" id="curso" name="curso" value="<?php echo $row['curso']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="vagas" class="form-label">Vagas</label>
                <input type="number" class="form-control" id="vagas" name="vagas" value="<?php echo $row['vagas']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="periodo" class="form-label">Período</label>
                <select class="form-select form-select-lg mb-3" aria-label="Large select example" id="periodo" name="periodo">
                    <option selected>Selecione</option>
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>
