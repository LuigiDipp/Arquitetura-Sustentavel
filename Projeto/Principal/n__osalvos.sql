-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/06/2024 às 00:47
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_puigi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `nãosalvos`
--

CREATE TABLE `nãosalvos` (
  `area` int(45) NOT NULL,
  `volume` int(45) NOT NULL,
  `npa` int(45) NOT NULL,
  `naps` int(45) NOT NULL,
  `npt` int(45) NOT NULL,
  `pf` int(45) NOT NULL,
  `nf` int(45) NOT NULL,
  `Autor` varchar(90) NOT NULL,
  `calhas` tinyint(1) NOT NULL,
  `biodigestores` tinyint(1) NOT NULL,
  `hortas` tinyint(1) NOT NULL,
  `composteiras` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `nãosalvos`
--

INSERT INTO `nãosalvos` (`area`, `volume`, `npa`, `naps`, `npt`, `pf`, `nf`, `Autor`, `calhas`, `biodigestores`, `hortas`, `composteiras`) VALUES
(484, 10648, 1, 0, 0, 0, 0, '6574646', 0, 0, 0, 0),
(484, 10648, 1, 0, 0, 0, 0, '6574646222', 0, 0, 0, 0),
(484, 10648, 1, 0, 0, 0, 0, 'hhhg', 0, 0, 0, 0),
(484, 10648, 1, 0, 0, 0, 0, 'iouiuoasdasdasdiou', 0, 0, 0, 0),
(484, 10648, 1, 0, 0, 0, 0, 'iouiuoyiou', 0, 0, 0, 0),
(484, 10648, 1, 0, 0, 0, 0, 'sadsda', 0, 0, 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `nãosalvos`
--
ALTER TABLE `nãosalvos`
  ADD PRIMARY KEY (`Autor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
