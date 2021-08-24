-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Ago-2021 às 14:14
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `insecta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`email`, `pass`, `id`) VALUES
('admin.insecta@gmail.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `contacto` varchar(9) NOT NULL,
  `morada` text NOT NULL,
  `newsletter` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `email`, `pass`, `contacto`, `morada`, `newsletter`) VALUES
('ana', 'ana@ckk.com', 'asd', '987654321', 'aknjasn', ''),
('ana', 'anas@hotmail.com', 'def', '987654321', 'rua do giz', 'new'),
('jose rui', 'jrui@gmail.com', 'asd', '987654321', 'rua do padre', ''),
('maria ana', 'mariaa@gmail.com', 'asd', '987654321', 'rua da flor', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

CREATE TABLE `especialidades` (
  `ementa` text NOT NULL,
  `preço` varchar(6) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `especialidades`
--

INSERT INTO `especialidades` (`ementa`, `preço`, `id`) VALUES
('Risotto do Mar com Gafanhotos Crocantes', '40.90€', 1),
('Vieiras com Alcachofra e Lagartas Crocantes', '40.90€', 2),
('Tiramissu de Bichos-da-seda', '18.50€', 3),
('Nachos Com Bichos-da-seda e Molho de Iogurte e Salsa', '27.90€', 4),
('Tortellini com Molho de Tomate Cremoso e Grilos Brancos', '40.90€', 5),
('Salada de Verduras Selvagens com Grilos e Gafanhotos Fritos', '27.90€', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_almoco`
--

CREATE TABLE `menu_almoco` (
  `ementa` text NOT NULL,
  `preço` varchar(6) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `menu_almoco`
--

INSERT INTO `menu_almoco` (`ementa`, `preço`, `id`) VALUES
('Creme de Castanhas c/ lagarta e bamboo', '22.50€', 1),
('Massa fresca de grilo c/ pesto e chouriço', '27.90€', 2),
('Ravioli de caranguejo e escaravelho gigante', '38.90€', 3),
('Petit Gatêau de chocolate c/ grilos caramelizados', '12.90€', 4),
('Especialidade do dia', '40.90€', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_jantar`
--

CREATE TABLE `menu_jantar` (
  `ementa` text NOT NULL,
  `preço` varchar(6) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `menu_jantar`
--

INSERT INTO `menu_jantar` (`ementa`, `preço`, `id`) VALUES
('Salada de manga, carabineiro e larvas crocantes', '22.50€', 1),
('Creme de cenoura c/ crocantes de formigas', '20.90€', 2),
('Naco de vitela c/ puré de abóbora e vespas', '38.90€', 3),
('Brownie de noz c/ mel e abelha crocante', '12.90€', 4),
('Especialidade do dia', '40.90€', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `contacto` varchar(9) NOT NULL,
  `horario` varchar(10) NOT NULL,
  `data` date NOT NULL,
  `pessoas` int(2) NOT NULL,
  `reserva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`email`, `pass`, `contacto`, `horario`, `data`, `pessoas`, `reserva`) VALUES
('jrui@gmail.com', 'asd', '123456789', 'almoco', '2021-08-21', 3, 4),
('anas@hotmail.com', '', '987654321', 'almoco', '0000-00-00', 3, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `menu_almoco`
--
ALTER TABLE `menu_almoco`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `menu_jantar`
--
ALTER TABLE `menu_jantar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`reserva`,`email`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `menu_almoco`
--
ALTER TABLE `menu_almoco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `menu_jantar`
--
ALTER TABLE `menu_jantar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`email`) REFERENCES `clientes` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
