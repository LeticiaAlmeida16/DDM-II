<?php
$host = "localhost"; // O servidor do banco de dados
$usuario = "root";   // Seu usuário do banco
$senha = "";         // Sua senha do banco (deixe vazio se não houver)
$banco = "ai_survey"; // O banco de dados que você criou

// Criar a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>