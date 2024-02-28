-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/02/2024 às 21:16
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle_backup`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `storage`
--

CREATE TABLE `storage` (
  `id_base` int(11) NOT NULL,
  `hostname` varchar(150) NOT NULL,
  `nome_base` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `caminho_backup` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `storage`
--

INSERT INTO `storage` (`id_base`, `hostname`, `nome_base`, `usuario`, `senha`, `caminho_backup`, `created`) VALUES
(1, 'localhost', 'db_vendas', 'root', '', 'backups_clientes/clienteA/', '2024-02-28 12:29:01'),
(3, 'localhost', 'cliente_klebao', 'root', '', 'backups_clientes/clienteKlebao/', '2024-02-28 18:48:18');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id_base`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `storage`
--
ALTER TABLE `storage`
  MODIFY `id_base` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
