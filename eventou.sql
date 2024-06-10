-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/06/2024 às 02:09
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
-- Banco de dados: `eventou`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `CPF` varchar(11) NOT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `confirmEmail` varchar(255) DEFAULT NULL,
  `Senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`CPF`, `Nome`, `dataNascimento`, `Email`, `confirmEmail`, `Senha`) VALUES
('12345678910', 'jorjin', '2004-06-25', 'jorje@gmail.com', 'jorge@gmail.com', 'roblox123'),
('34565467812', 'brunin', '2002-02-02', 'claudio@gmail.com', 'claudio@gmail.com', 'prikito'),
('12345678956', 'aqui', '3232-02-23', 'oloco@gmail.com', 'oloco@gmail.com', 'senha'),
('12367898732', 'Cancio', '2005-08-07', 'cancio@hotmail.com', 'cancio@hotmail.com', 'joaozin123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `evento`
--

CREATE TABLE `evento` (
  `ID` int(6) NOT NULL,
  `nomeEvento` varchar(255) DEFAULT NULL,
  `Categoria` varchar(255) DEFAULT NULL,
  `dataEvento` date DEFAULT NULL,
  `Horario` time DEFAULT NULL,
  `Localizacao` varchar(255) DEFAULT NULL,
  `Senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `evento`
--

INSERT INTO `evento` (`ID`, `nomeEvento`, `Categoria`, `dataEvento`, `Horario`, `Localizacao`, `Senha`) VALUES
(6, 'Fejupi', 'Junina', '2024-06-26', '20:00:00', 'aqui do lado', 'dificil'),
(7, 'Festa do Branco', 'Festa', '2024-06-23', '22:00:00', 'Andrea Evento', 'senha');

-- --------------------------------------------------------

--
-- Estrutura para tabela `localizacao`
--

CREATE TABLE `localizacao` (
  `ID` int(6) NOT NULL,
  `nomeLocal` varchar(255) DEFAULT NULL,
  `Capacidade` varchar(255) DEFAULT NULL,
  `salaAuditorio` varchar(255) DEFAULT NULL,
  `metroQuadrado` varchar(255) DEFAULT NULL,
  `Cep` int(8) DEFAULT NULL,
  `Endereco` varchar(255) DEFAULT NULL,
  `Numero` varchar(255) DEFAULT NULL,
  `Complemento` varchar(255) DEFAULT NULL,
  `Bairro` varchar(255) DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `Cidade` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `localizacao`
--

INSERT INTO `localizacao` (`ID`, `nomeLocal`, `Capacidade`, `salaAuditorio`, `metroQuadrado`, `Cep`, `Endereco`, `Numero`, `Complemento`, `Bairro`, `Estado`, `Cidade`) VALUES
(1, 'ali do lado', '100', 'lixao', 'poucos', 19024121, 'rua palmirinha', '666', 'Casa do marquinhos', 'Vila lider', 'Sólido', 'pp'),
(2, 'teste', '200', 'salao', '500', 19024150, 'Avenida', '523', 'Casa', 'Cohab', 'São Paulo', 'prudente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `organizador`
--

CREATE TABLE `organizador` (
  `Nome` varchar(255) DEFAULT NULL,
  `CPF` varchar(11) NOT NULL,
  `dataNascimento` date DEFAULT NULL,
  `Telefone` varchar(13) DEFAULT NULL,
  `CEP` int(8) DEFAULT NULL,
  `Endereco` varchar(255) DEFAULT NULL,
  `Numero` varchar(255) DEFAULT NULL,
  `Complemento` varchar(255) DEFAULT NULL,
  `Bairro` varchar(255) DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `Cidade` varchar(255) DEFAULT NULL,
  `Senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `organizador`
--

INSERT INTO `organizador` (`Nome`, `CPF`, `dataNascimento`, `Telefone`, `CEP`, `Endereco`, `Numero`, `Complemento`, `Bairro`, `Estado`, `Cidade`, `Senha`) VALUES
('renatao', '12312312312', '0001-01-01', '32 998281522', 19024021, 'florzinha', '424', 'Casa', 'perigoso', 'Bem até entao', 'pequena', 'roblox123'),
('Pedrin', '12345678956', '2000-09-28', '18 996058756', 19024150, 'Rua das palmeiras', '543', 'Casa', 'Jardim das Rosas', 'São Paulo', 'Presidente Prudente', 'qualquer');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `localizacao`
--
ALTER TABLE `localizacao`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `organizador`
--
ALTER TABLE `organizador`
  ADD PRIMARY KEY (`CPF`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `localizacao`
--
ALTER TABLE `localizacao`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
