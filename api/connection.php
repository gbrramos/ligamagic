<?php

// Parâmetros para conexão do banco de dados
$host = 'localhost';
$login = 'root';
$psw = 'root';
$db = 'ligamagic';

// Conexão com o BD
$conn = mysqli_connect($host,$login,$psw,$db);

// Se a conexão falhar exibirá uma mensagem na tela
if(!$conn){
    echo('error mysql');
    exit;
}
