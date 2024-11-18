<?php
// Configuração do banco de dados
$servername = "localhost";  // Ou o endereço do seu servidor
$username = "root";         // Seu usuário do MySQL
$password = "";             // Sua senha do MySQL
$dbname = "formulario_db";  // O nome do seu banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Habilitar exibição de erros para depuração
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização dos dados
    $nome = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensagem = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Validação do email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email inválido. Por favor, insira um email válido.");
    }

    // Preparar a declaração SQL para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO formulario (nome, email, mensagem) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $mensagem); // "sss" indica 3 strings

    // Executar a declaração
    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $stmt->error;
    }

    // Fechar a declaração
    $stmt->close();
}

// Fechar a conexão
$conn->close();
?>
