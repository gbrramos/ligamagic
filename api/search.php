<?php
// Import da conexão com o Banco de Dados
include_once('connection.php');

// Seta a requisição vinda do front na variável produto
$produto = $_GET['nome'];

// Busca no banco de dados o preço do produto com o nome da requisição
// Converte o valor numérico para ser exibido
$result = $conn->query("SELECT preco FROM produto WHERE nome = '$produto'");
$response = $result->fetch_array()[0] ?? '';

// Exibe/Retorna um JSON com a resposta ja convertida
echo json_encode($response);
