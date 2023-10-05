<?php
     $username = "seu_usuario"; // Substitua pelo nome de usuário do seu banco de dados
     $password = "sua_senha"; // Substitua pela senha do seu banco de dados
     $hostname = "localhost"; // Substitua pelo endereço do servidor MySQL (geralmente localhost se estiver no seu próprio sistema)
     $dbname = "seu_banco_de_dados"; // Substitua pelo nome do seu banco de dados
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
