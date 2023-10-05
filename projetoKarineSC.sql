-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05-Out-2023 às 11:51
-- Versão do servidor: 5.7.23-23
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `keepec41_escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `conteudo` text,
  `ordem` varchar(255) DEFAULT NULL,
  `professor_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`id`, `nome`, `descricao`, `conteudo`, `ordem`, `professor_id`) VALUES
(28, 'Ambientação em Educação a Distância - TI6B', 'Metodologias de ensino e aprendizagem a distância.', '', '', ''),
(30, 'Inclusão e Letramento Digital -TI6B', 'Promover a inclusão digital e a acessibilidade ', '', '', ''),
(31, 'Português Técnico ', 'Introdução à linguagem técnica.', '', '', ''),
(35, 'Psicologia e Relações Humanas - TI6B', 'Identificar os principais conceitos da psicologia e das relações humanas.', '', '', ''),
(36, 'Linguagem Visual - TI6B', 'Compreender os princípios da comunicação visual.', '', '', ''),
(38, 'Inglês Técnico - TI6B', 'A matéria capacita o aluno a se comunicar de forma eficaz em inglês em situações profissionais.', '', '', ''),
(39, 'Redes de Computadores -TI6B ', 'Estudo de protocolos e configuração de redes.', '', '', ''),
(40, 'Legislação Aplicada -TI6B', 'Compreender as normas e leis que regulam a área de TI.', '', '', ''),
(41, 'Interconexão Física e Lógica de Computadores - TI6B', 'Entender os fundamentos da interconexão de computadores, bem como os principais protocolos e tecnologias utilizados.', '', '', ''),
(42, 'Prática Computacional - TI6', 'Capacita habilidades práticas em programação e computação.', '', '', ''),
(43, 'Pesquisa Científica - TI6', 'É uma ferramenta essencial para o desenvolvimento de novas tecnologias e soluções, para conduzir pesquisas e aplicar os resultados em seus projetos.', '', '', ''),
(44, 'Linguagem de Programação - TI6', 'Conceitos básicos de Programação ', '', '', ''),
(45, 'Empreendedorismo - TI6', 'Desenvolvimento de novas ideias e negócios ', '', '', ''),
(46, 'Empreendedorismo - TI6', 'Desenvolvimento de novas ideias e negócios ', '', '', ''),
(47, 'Método de pesquisa Científica - TI6', 'Pesquisas científicas de forma correta e eficiente.', '', '', ''),
(48, 'Desenvolvimento de Interfaces WEB - TI6 ', 'Criação de Interfaces de usuário para aplicações web, técnicas de desenvolvimento web, HTML, CSS entre outros.', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(15, 1, 2, 'Ola Boa Tarde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `nota` varchar(255) DEFAULT NULL,
  `materia` varchar(255) DEFAULT NULL,
  `aluno_id` varchar(255) DEFAULT NULL,
  `professor_id` varchar(255) DEFAULT NULL,
  `observacoes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`id`, `nota`, `materia`, `aluno_id`, `professor_id`, `observacoes`) VALUES
(7, '9', '3', '1', '2', 'Aluna Muito Boa'),
(9, '10', '28', '1', '2', ''),
(10, '10', '31', '1', '2', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 201558407, 'adriano', 'alves', 'adrianobr00@gmail.com', '48114dac2370494b7f197f1851921a7f', '1696438118associacao-dos-proprietarios.jpg', 'Offline now'),
(2, 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `perfil` varchar(255) DEFAULT 'aluno',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ultima_login` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `unique_id` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `perfil`, `email`, `password`, `ultima_login`, `user_id`, `unique_id`, `fname`, `lname`, `status`, `img`) VALUES
(1, 'Karine', 'aluno', 'aluno@gmail.com', '12345', NULL, NULL, NULL, NULL, NULL, 'active', ''),
(2, 'Dayves', 'professor', 'professor@gmail.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(4, 'Aluno 1', 'aluno', 'aluno1@example.com', 'senha1', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(5, 'Aluno 2', 'aluno', 'aluno2@example.com', 'senha2', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(6, 'Aluno 3', 'aluno', 'aluno3@example.com', 'senha3', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, 'Aluno 4', 'aluno', 'aluno4@example.com', 'senha4', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(8, 'Aluno 5', 'aluno', 'aluno5@example.com', 'senha5', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(9, 'Aluno 6', 'aluno', 'aluno6@example.com', 'senha6', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(10, 'Aluno 7', 'aluno', 'aluno7@example.com', 'senha7', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(11, 'Aluno 8', 'aluno', 'aluno8@example.com', 'senha8', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(12, 'Aluno 9', 'aluno', 'aluno9@example.com', 'senha9', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(13, 'Aluno 10', 'aluno', 'aluno10@example.com', 'senha10', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(14, 'Aluno 11', 'aluno', 'aluno11@example.com', 'senha11', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(15, 'Aluno 12', 'aluno', 'aluno12@example.com', 'senha12', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(16, 'Aluno 13', 'aluno', 'aluno13@example.com', 'senha13', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(17, 'Aluno 14', 'aluno', 'aluno14@example.com', 'senha14', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(18, 'Aluno 15', 'aluno', 'aluno15@example.com', 'senha15', NULL, NULL, NULL, NULL, NULL, NULL, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
