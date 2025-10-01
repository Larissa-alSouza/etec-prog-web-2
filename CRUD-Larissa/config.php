<?php
$servername = "localhost";
$username = "root";  // seu usuário do banco de dados
$password = "";      // sua senha do banco de dados
$dbname = "teste"; // nome do banco de dados

// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificando a conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>