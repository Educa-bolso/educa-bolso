-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 02/02/2021 às 19:59
-- Versão do servidor: 10.4.14-MariaDB
-- Versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `educabolso`
--
CREATE DATABASE IF NOT EXISTS `educabolso` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `educabolso`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nome` text DEFAULT NULL,
  `sobrenome` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `raca` varchar(30) DEFAULT NULL,
  `genero` varchar(30) DEFAULT NULL,
  `nascimento` text DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `escolaridade` varchar(30) DEFAULT NULL,
  `situacao_profissional` varchar(40) DEFAULT NULL,
  `salario` text DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `perfil`
--

INSERT INTO `perfil` (`id`, `nome`, `sobrenome`, `email`, `raca`, `genero`, `nascimento`, `endereco`, `escolaridade`, `situacao_profissional`, `salario`, `id_usuario`) VALUES
(1, 'Caio', 'Barbosa', 'caaaio2010@hotmail.com', 'preta', 'masct', '1996-12-05', 'Avenida da Granja', 'EMI', 'assalariado', '1sm', 42);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pontuacao`
--

CREATE TABLE `pontuacao` (
  `id` int(11) NOT NULL,
  `pontos` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pontuacao`
--

INSERT INTO `pontuacao` (`id`, `pontos`, `usuario_id`) VALUES
(1, 2, 42),
(2, 1, 42),
(3, 2, 42),
(4, 2, 42),
(5, 0, 42),
(8, 3, 44),
(9, 4, 45);

-- --------------------------------------------------------

--
-- Estrutura para tabela `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `pergunta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `quiz`
--

INSERT INTO `quiz` (`id`, `pergunta`) VALUES
(1, 'Orçamento é:'),
(2, 'Qual país possui a maior taxa de juros?'),
(3, 'Quantos % da população realizam investimentos no Brasil?'),
(4, 'Conta fixa é:'),
(5, 'O que é reserva financeira?');

-- --------------------------------------------------------

--
-- Estrutura para tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `resposta` text DEFAULT NULL,
  `correta` tinyint(1) DEFAULT NULL,
  `pergunta_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `respostas`
--

INSERT INTO `respostas` (`id`, `resposta`, `correta`, `pergunta_id`) VALUES
(1, 'Planejar, depois gastar', 1, 1),
(2, 'Gastar, depois planejar', 0, 1),
(3, 'Gastar tudo que ganho', 0, 1),
(4, 'Planejar e não gastar', 0, 1),
(5, 'Planejar depois e gastar', 0, 1),
(6, 'Brasil', 1, 2),
(7, 'Coreia do Sul', 0, 2),
(8, 'Japão', 0, 2),
(9, 'China', 0, 2),
(10, 'Estados Unidos', 0, 2),
(11, '8%', 0, 3),
(12, '16%', 0, 3),
(13, '10%', 0, 3),
(14, '1%', 1, 3),
(15, 'nenhum %', 0, 3),
(16, 'Contas domésticas', 0, 4),
(17, 'Conta de internet', 0, 4),
(18, 'Contas mensais', 0, 4),
(19, 'Boleto bancário', 0, 4),
(20, 'Contas importantes', 0, 4),
(21, 'Um pote de dinheiro', 0, 5),
(22, 'Acúmulo de receita por um ano', 1, 5),
(23, 'Previdência privada', 0, 5),
(24, 'Poupança', 0, 5),
(25, 'Dinheiro planejado', 0, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(37, 'Recode', 'recode@gmail.com', '378918900fae95248a5a45e1892396e1'),
(38, 'Camila', 'camila@gmail.com', '378918900fae95248a5a45e1892396e1'),
(39, 'EducaBolso', 'educabolso@gmail.com', '378918900fae95248a5a45e1892396e1'),
(41, 'Caio Rodrigues Barbosa', 'educabolso123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(42, 'Caio Rodrigues Barbosa', 'teste@teste.com', 'e10adc3949ba59abbe56e057f20f883e'),
(44, 'Caio Rodrigues Barbosa', 'teste2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(45, 'alea', 'teste5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USUARIO_PERFIL` (`id_usuario`);

--
-- Índices de tabela `pontuacao`
--
ALTER TABLE `pontuacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER_PONTUACAO` (`usuario_id`);

--
-- Índices de tabela `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_pergunta_resposta` (`pergunta_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pontuacao`
--
ALTER TABLE `pontuacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `FK_USUARIO_PERFIL` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `pontuacao`
--
ALTER TABLE `pontuacao`
  ADD CONSTRAINT `FK_USER_PONTUACAO` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `FK_pergunta_resposta` FOREIGN KEY (`pergunta_id`) REFERENCES `quiz` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
