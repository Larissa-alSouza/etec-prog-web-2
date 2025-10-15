<?php
/* Larissa Alves de Souza */

// Conectar ao banco de dados
$servername = "localhost"; // Endereço do servidor
$username = "root"; // Nome de usuário do banco
$password = ""; // Senha do banco (caso não haja, deixa em branco)
$dbname = "teste"; // Nome do banco de dados

// Criando a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificando se a conexão foi bem-sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Definindo o tipo de resposta como JSON
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Verificar o método da requisição HTTP
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        // Verificar se foi passado um código de curso (ID)
        if (isset($_GET['cod'])) {
            // Buscar um curso específico pelo código
            $cod = $_GET['cod'];
            $sql = "SELECT * FROM cursos WHERE cod = $cod";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $curso = mysqli_fetch_assoc($result);
                echo json_encode($curso);
            } else {
                echo json_encode(["mensagem" => "Curso não encontrado"]);
            }
          //buscar curso por nome  
        } elseif(isset($_GET['nome'])){
            $nome = $_GET['nome'];
            $sql = "SELECT * FROM cursos WHERE curso LIKE '%$nome%'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $curso = mysqli_fetch_assoc($result);
                echo json_encode($curso);
            } else {
                echo json_encode(["mensagem" => "Curso não encontrado"]);
            }
        }
        else {
            // Buscar todos os cursos
            $sql = "SELECT * FROM cursos";
            $result = mysqli_query($conn, $sql);
            $cursos = [];

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $cursos[] = $row;
                }
                echo json_encode($cursos);
            } else {
                echo json_encode(["mensagem" => "Nenhum curso encontrado"]);
            }
        }
        break;

    case 'POST':
        // Criar um novo curso
        $dados = json_decode(file_get_contents('php://input'), true); // Ler os dados JSON enviados

        // Verificar se os dados foram passados corretamente
        if (isset($dados['curso']) && isset($dados['vagas']) && isset($dados['periodo'])) {

            if(empty($dados['curso']) || !preg_match("/^[a-zA-ZÀ-ÿ\s]+$/u", $dados['curso']))
            {
                echo json_encode(["mensagem" => "Curso não pode estar vazio e deve conter apenas letras e espaços."]);
            }
            elseif(!filter_var($dados['vagas'], FILTER_VALIDATE_INT) && $dados['vagas'] < 0)
            {
                echo json_encode(["mensagem" => "Vagas deve ser um número interiro e positivo."]);
            }
            elseif (!in_array($dados['periodo'], ['Manhã', 'Tarde', 'Noite'])) 
            {
                echo json_encode(["mensagem" => "Período inválido! Deve ser Manhã, Tarde ou Noite."]);
            }
            else 
            {
                // Todos os dados estão válidos, pode continuar
                echo json_encode(["mensagem" => "Dados válidos!"]);
            }
            } else 
            {
                echo json_encode(["mensagem" => "Dados incompletos."]);
            }

            $curso = $dados['curso'];
            $vagas = $dados['vagas'];
            $periodo = $dados['periodo'];

            // Inserir o novo curso no banco
            $sql = "INSERT INTO cursos (curso, vagas, periodo) VALUES ('$curso', $vagas, '$periodo')";
            if (mysqli_query($conn, $sql)) {
                echo json_encode(["mensagem" => "Curso criado com sucesso!"]);
            } else {
                echo json_encode(["mensagem" => "Erro ao criar o curso: " . mysqli_error($conn)]);
            }
       
        break;

    case 'PUT':
        // Atualizar um curso existente
        $dados = json_decode(file_get_contents('php://input'), true); // Ler os dados JSON enviados

        // Verificar se os dados foram passados corretamente
        if (isset($dados['cod']) && isset($dados['curso']) && isset($dados['vagas']) && isset($dados['periodo'])) {
            $cod = $dados['cod'];
            $curso = $dados['curso'];
            $vagas = $dados['vagas'];
            $periodo = $dados['periodo'];

            // Atualizar o curso no banco
            $sql = "UPDATE cursos SET curso = '$curso', vagas = $vagas, periodo = '$periodo' WHERE cod = $cod";
            if (mysqli_query($conn, $sql)) {
                echo json_encode(["mensagem" => "Curso atualizado com sucesso!"]);
            } else {
                echo json_encode(["mensagem" => "Erro ao atualizar o curso: " . mysqli_error($conn)]);
            }
        } else {
            echo json_encode(["mensagem" => "Dados incompletos."]);
        }
        break;

    case 'DELETE':
        // Excluir um curso
        if (isset($_GET['cod'])) {
            $cod = $_GET['cod'];

            // Excluir o curso do banco
            $sql = "DELETE FROM cursos WHERE cod = $cod";
            if (mysqli_query($conn, $sql)) {
                echo json_encode(["mensagem" => "Curso excluído com sucesso!"]);
            } else {
                echo json_encode(["mensagem" => "Erro ao excluir o curso: " . mysqli_error($conn)]);
            }
        } else {
            echo json_encode(["mensagem" => "Código do curso não fornecido."]);
        }
        break;

    default:
        echo json_encode(["mensagem" => "Método não permitido."]);
        break;
}

// Fechar a conexão com o banco
mysqli_close($conn);
?>
