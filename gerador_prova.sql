-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2022 às 18:22
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerador_prova`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id` int(11) NOT NULL,
  `alternativa` text NOT NULL,
  `pergunta_id` int(11) NOT NULL,
  `correta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id`, `alternativa`, `pergunta_id`, `correta`) VALUES
(91, 'Morumbi', 1, 0),
(92, 'Pacaembu', 1, 0),
(93, 'Maracanã', 1, 1),
(94, 'Mineirão', 1, 0),
(95, 'Mané Garrincha', 1, 0),
(96, 'Tâmisa', 2, 1),
(97, 'Sena', 2, 0),
(98, 'Reno', 2, 0),
(99, 'Aube', 2, 0),
(100, 'São Lourenço', 2, 0),
(106, 'Bill', 3, 0),
(107, 'Clyde', 3, 1),
(108, 'James', 3, 0),
(109, 'Butch', 3, 0),
(110, 'Fernando', 3, 0),
(111, 'Lira', 4, 0),
(112, 'Marco', 4, 1),
(113, 'Franco', 4, 0),
(114, 'Libra', 4, 0),
(115, 'Euro', 4, 0),
(116, 'Piu Piu', 5, 0),
(117, 'Woodstock', 5, 1),
(118, 'Canarinho', 5, 0),
(119, 'Rouxinol', 5, 0),
(120, 'Frajola', 5, 0),
(121, 'Nova Iorque', 6, 0),
(122, 'Alaska', 6, 0),
(123, 'Flórida', 6, 1),
(124, 'California', 6, 0),
(125, 'Nebaska', 6, 0),
(126, 'Japão', 7, 0),
(127, 'China', 7, 1),
(128, 'Brasil', 7, 0),
(129, 'Afeganistão', 7, 0),
(130, 'Índia', 7, 0),
(131, '300', 8, 0),
(132, '510', 8, 0),
(133, '190', 8, 0),
(134, '200', 8, 0),
(135, '206', 8, 1),
(136, 'California', 9, 0),
(137, 'Flórida', 9, 0),
(138, 'Washington DC', 9, 1),
(139, 'Alaska', 9, 0),
(140, 'Boston', 9, 0),
(141, '5', 10, 1),
(142, '1', 10, 0),
(143, '6', 10, 0),
(144, '10', 10, 0),
(145, '2', 10, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `pergunta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`) VALUES
(1, 'Em qual estado Pelé marcou seu milésimo gol?'),
(2, 'Que rio corta a cidade de Londres, na Inglaterra?'),
(3, 'No filme, quem era parceiro de crime de Bonnie?'),
(4, 'Qual a moeda oficial da Alemanha?'),
(5, 'Nas histórias do Snoopy, qual é o nome do passarinho?'),
(6, 'Em que estado norte-americano fica a cidade de Miami?'),
(7, 'Em que país fica a grande muralha com cerca de 6.400 quilômetros?'),
(8, 'Quantos ossos tem o corpo humano?'),
(9, 'Qual é a capital dos Estados Unidos? '),
(10, 'Quantas vezes o Brasil foi campeão da copa do mundo?');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
