-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/04/2024 às 22:34
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
O SITE VAI SER UM CONSTRUTOR DE MORADIA SUSTENTAVEL SÓ ISSO
DEFINIR PARAMETROS PLACAS SOLARES, CISTERNA, HORTAS, IRRIGAÇÃO, RECICLAGEM, BIODIGESTOR, COMPOSTEIRA
CADA MODELO É ÚNICO E PODE SER SALVO PARA FUTURAS CONSULTAS
GODZILLAVSKONG
--

nome da classe no css
frente costas esquerda direita calhas hortas
  
cada modelo pode ser salvo em sql
nome-do-modelo / criador / relação-consumo-produção (eficiência) / tags(quais componentes foram usados) / imagem-do-modelo /  


-- Estrutura para tabela `materiais`
--

CREATE TABLE `materiais` (
  `Concreto` int(12) NOT NULL,
  `Painel_Solar` int(12) NOT NULL,
  `Verde` int(12) NOT NULL,
  `Calha` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
