<?php
session_start();



function conexao(){
    $username = "seu_usuario"; // Substitua pelo nome de usuário do seu banco de dados
    $password = "sua_senha"; // Substitua pela senha do seu banco de dados
    $hostname = "localhost"; // Substitua pelo endereço do servidor MySQL (geralmente localhost se estiver no seu próprio sistema)
    $dbname = "seu_banco_de_dados"; // Substitua pelo nome do seu banco de dados
    
    $conexao = new mysqli($hostname, $username, $password , $dbname);

   // Faça a conexão com o banco de dados (substitua com suas configurações)

   if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}
return  $conexao;
}



?>

