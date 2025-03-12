-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/03/2025 às 20:15
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ai_survey`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `conhece_ai` enum('Sim','Não') DEFAULT NULL,
  `como_conheceu` text DEFAULT NULL,
  `usa_diariamente` enum('Sim','Não') DEFAULT NULL,
  `uso_mais_frequente` text DEFAULT NULL,
  `pretende_aprender` enum('Sim','Não') DEFAULT NULL,
  `campo_interesse` text DEFAULT NULL,
  `habilidades_necessarias` enum('Sim','Não') DEFAULT NULL,
  `conhecimento_anterior` enum('Sim','Não') DEFAULT NULL,
  `outros_comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `respostas`
--

INSERT INTO `respostas` (`id`, `nome`, `email`, `conhece_ai`, `como_conheceu`, `usa_diariamente`, `uso_mais_frequente`, `pretende_aprender`, `campo_interesse`, `habilidades_necessarias`, `conhecimento_anterior`, `outros_comentarios`) VALUES
(29, 'Janes Aparecida', 'aparecida.janes271@gmail.com', 'Sim', 'Por meio de noticias', 'Sim', 'Assistente Virtual (como Siri, Alexa), Recomendações (como Netflix, YouTube), Redes Sociais (como Facebook, Instagram)', 'Não', 'Redes Neurais', 'Sim', 'Sim', 'É o futuro da sociedade.'),
(30, 'Pedro Farias', 'fariasalmeidaaa@gmail.com', 'Sim', 'Noticias', 'Sim', 'Recomendações (como Netflix, YouTube)', 'Não', 'Outros', 'Sim', 'Não', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
