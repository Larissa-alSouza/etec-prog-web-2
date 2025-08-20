<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulário Base - Bootstrap 5.3</title>
    <!-- CSS do Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<!-- 1. Metodo get-->
<div class="container mt-5">
    <h2 class="mb-4">Exercício 1. método GET</h2>
    <form action="processa_get.php" method="get">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@dominio.com">
        </div>

        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite sua idade" min="1">
        </div>

        <div class="mb-4">
            <label for="idade" class="form-label">Faixa Etária</label>
            <select class="form-select" id="idade" name="idade">
                <option value="" selected>Selecione sua faixa etária</option>
                <option value="bebe">Bebê</option>
                <option value="crianca">Criança</option>
                <option value="adolescente">Adolescente</option>
                <option value="adulto">Adulto</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<!-- 2. Metodo Post-->
<div class="container mt-5">
    <h2 class="mb-4">Exercício 2. método POST</h2>
    <form action="processa_post.php" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@dominio.com">
        </div>

        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite sua idade" min="1">
        </div>

        <div class="mb-4">
            <label for="idade" class="form-label">Faixa Etária</label>
            <select class="form-select" id="idade" name="idade">
                <option value="" selected>Selecione sua faixa etária</option>
                <option value="bebe">Bebê</option>
                <option value="crianca">Criança</option>
                <option value="adolescente">Adolescente</option>
                <option value="adulto">Adulto</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<!-- 3. Metodo Post - validação de campos-->
<div class="container mt-5">
    <h2 class="mb-4">Exercício 3. Validação de campos</h2>
    <form action="valida_post.php" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@dominio.com">
        </div>

        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite sua idade" min="1">
        </div>

        <div class="mb-4">
            <label for="idade" class="form-label">Faixa Etária</label>
            <select class="form-select" id="idade" name="idade">
                <option value="" selected>Selecione sua faixa etária</option>
                <option value="bebe">Bebê</option>
                <option value="crianca">Criança</option>
                <option value="adolescente">Adolescente</option>
                <option value="adulto">Adulto</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<!-- 4. Metodo Post - faixa etária-->
<div class="container mt-5">
    <h2 class="mb-4">Exercício 4. Verificação de faixa etária</h2>
    <form action="processa_idade.php" method="post">


        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite sua idade" min="1">
        </div>

        <div class="mb-4">
            <label for="idade" class="form-label">Faixa Etária</label>
            <select class="form-select" id="campoIdade" name="campoIdade">
                <option value="" selected>Selecione sua faixa etária</option>
                <option value="bebe">Bebê</option>
                <option value="crianca">Criança</option>
                <option value="adolescente">Adolescente</option>
                <option value="adulto">Adulto</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<!-- JS do Bootstrap 5.3 (opcional, para componentes que usam JS) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
