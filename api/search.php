<?php
// Import da conexão com o Banco de Dados
include_once('connection.php');

// Seta a requisição vinda do front na variável produto
$produto = addslashes($_GET['nome']);

// Conta quantos registros existem no banco de dados e converte para string
$c = $conn->query("SELECT Count(preco) FROM produto WHERE nome = '$produto'");
$count = $c->fetch_array()[0];

if($count > 0){
    // Busca no banco de dados o preço e a data da última alteração do produto de acordo com o nome da requisição
    $p = $conn->query("SELECT preco FROM produto WHERE nome = '$produto'");
    $u = $conn->query("SELECT update_at FROM produto WHERE nome = '$produto'");

    // Verifica se o produto não existe, se existir converte o valor numérico para ser exibido,
    // Caso exista e não tenha preço diz que não tem um preço definido.
    $preco = $p->fetch_array()[0] ?? 'Este produto não tem um preço definido';
    $update = $u->fetch_array()[0] ?? 'Data de alteração não definida';

    // Cria um array com o preço e a data da ultima alteração
    $values = array($preco, $update);
}
else{
    // Se o banco não encontrar nada
    $values = '';
}

// Exibe/Retorna um JSON com a resposta convertida
echo json_encode($values);
