##LINK DO PROJETO
https://projetokarinesc.eads.app/

# Instalação do Site PHP e Configuração do Sistema de Bate-Papo

Este guia descreve os passos necessários para instalar o site PHP e configurar o sistema de bate-papo. Siga as instruções abaixo para configurar seu ambiente de desenvolvimento local e fazer as configurações necessárias.

## Passo 1: Preparação

Certifique-se de ter um ambiente de desenvolvimento local configurado, que inclua um servidor web (por exemplo, Apache), PHP e MySQL. Você pode usar soluções como XAMPP, WAMP ou MAMP para facilitar a configuração.

Baixe e instale o PHP, o servidor web e o MySQL, se ainda não estiverem instalados em seu sistema.

## Passo 2: Configuração do Banco de Dados

Abra a ferramenta de gerenciamento do banco de dados MySQL, que pode ser o phpMyAdmin ou a linha de comando, dependendo da sua preferência.

### Passo 2.1: Crie um novo banco de dados (opcional)

Se você ainda não tiver criado um banco de dados para o projeto, siga estas etapas para criá-lo:

1. Na interface do phpMyAdmin, clique em "Banco de dados" no menu principal.
2. Digite um nome para o novo banco de dados (por exemplo, "projetoKarineSC") e escolha a codificação (geralmente, "utf8mb4_unicode_ci").
3. Clique em "Criar" para criar o novo banco de dados.

### Passo 2.2: Importe o arquivo SQL

Agora, você pode importar o arquivo SQL para o banco de dados:

1. Na interface do phpMyAdmin, selecione o banco de dados que você deseja usar para importar os dados (se você acabou de criar um banco de dados, selecione o banco de dados recém-criado).
2. Clique na guia "Importar" na parte superior da página.
3. Na seção "Escolher arquivo", clique em "Procurar" e selecione o arquivo "projetoKarineSC.SQL" em seu sistema.
4. Certifique-se de que o formato do arquivo esteja definido como "SQL".
5. Clique em "Executar" ou "Importar" para iniciar o processo de importação.

O phpMyAdmin ou a ferramenta de linha de comando importará o arquivo SQL para o banco de dados selecionado. Isso criará todas as tabelas e dados definidos no arquivo SQL.

## Configurações do Sistema de Bate-Papo - (Conexão com o Banco)

### Passo 1: Abra o arquivo config.php

Abra o arquivo "config.php" que está localizado na pasta "\bate-papo\php".

### Passo 2: Substitua as informações de conexão

Substitua as informações de conexão no arquivo pelas suas configurações, assim como fizemos anteriormente:

```php
$username = "seu_usuario"; // Substitua pelo nome de usuário do seu banco de dados
$password = "sua_senha"; // Substitua pela senha do seu banco de dados
$hostname = "localhost"; // Substitua pelo endereço do servidor MySQL (geralmente localhost se estiver no seu próprio sistema)
$dbname = "seu_banco_de_dados"; // Substitua pelo nome do seu banco de dados

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
Passo 3: Salve as alterações
Salve as alterações no arquivo "config.php".

Configuração do Arquivo de Conexão
Abra o arquivo "conexao.php" na pasta raiz do seu projeto.

Substitua as informações de conexão no arquivo pelas suas configurações:

php
Copy code
$username = "seu_usuario"; // Substitua pelo nome de usuário do seu banco de dados
$password = "sua_senha"; // Substitua pela senha do seu banco de dados
$hostname = "localhost"; // Substitua pelo endereço do servidor MySQL (geralmente localhost se estiver no seu próprio sistema)
$dbname = "seu_banco_de_dados"; // Substitua pelo nome do seu banco de dados

$conexao = new mysqli($hostname, $username, $password, $dbname);

// Faça a conexão com o banco de dados (substitua com suas configurações)
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error());
}
Passo 1: Coloque seus arquivos no servidor web
Coloque todos os arquivos do seu site na pasta do servidor web (por exemplo, a pasta "htdocs" no XAMPP).

Passo 2: Acesse o site
Abra seu navegador da web e acesse o site digitando o endereço do servidor web no navegador (por exemplo, http://localhost/).
