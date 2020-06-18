-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2020 às 00:13
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `papne`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `CPF` int(80) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Numero` int(80) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`CPF`, `Nome`, `Email`, `Numero`, `senha`) VALUES
(2147483647, 'Júlio', 'julio@gmail.com', 2147483647, 'julio123'),
(2147483647, 'Júlio', 'julio@gmail.com', 2147483647, 'julio123'),
(2147483647, 'Lucas', 'lucas@gmail.com', 2147483647, 'lucas123'),
(1234567891, 'adao', 'adao@gmail.com', 2147483647, 'adao123'),
(11122233, 'Salvador de Melo', 'salvador@projecao.com', 2147483647, 'salva01'),
(11122233, 'Salvador de Melo', 'salvador@projecao.com', 2147483647, 'salva01'),
(11133345, 'marcu', 'marcu@gmail.com', 2147483647, '123'),
(11144478, 'Predegal', 'pedregal@gmail.com', 2147483647, '1234'),
(11122277, 'Admin', 'admin@gmail.com', 2147483647, 'admin123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `idDuvida` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`idDuvida`, `nome`, `email`, `comentario`) VALUES
(25, 'Lucas', 'lucas@gmail.com', 'Testando a BD.'),
(39, 'Lucas', 'lucas@gmail.com', 'Testando a BD 2.0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Email` varchar(80) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Email`, `senha`) VALUES
('julio@gmail.com', 'julio123'),
('lucas@gmail.com', 'lucas123'),
('adao@gmail.com', 'adao123'),
('salvador@projecao.com', 'salva01'),
('salvador@projecao.com', 'salva01'),
('marcu@gmail.com', '123'),
('pedregal@gmail.com', '1234'),
('admin@gmail.com', 'admin123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idDuvida`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idDuvida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
