<?php
include('config.php');

// Consultando todos os cursos
$sql = "SELECT * FROM cursos";
$result = mysqli_query($conn, $sql);

$erro = isset($_GET['erro']) ? urldecode($_GET['erro']) : null;

if($erro)
{
    echo '<div class="alert alert-danger">' . htmlspecialchars($erro) . '</div>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Cursos</h2>
        <div class="d-flex align-items-center mb-3 gap-2">
            <a href="create.php" class="btn btn-primary">Adicionar Novo Curso</a>
            <input type="search" name="pesquisa" id="pesquisa" class="form-control" placeholder="Pesquisar..." style="width: 200px;">
        </div>

        <table class="table table-bordered" id="tabelaCursos">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Curso</th>
                    <th>Vagas</th>
                    <th>Período</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['cod']; ?></td>
                    <td><?php echo $row['curso']; ?></td>
                    <td><?php echo $row['vagas']; ?></td>
                    <td><?php echo $row['periodo']; ?></td>
                    <td>
                        <a href="edit.php?cod=<?php echo $row['cod']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete.php?cod=<?php echo $row['cod']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="busca.js"></script>

</body>
</html>

<?php
mysqli_close($conn);
?>
