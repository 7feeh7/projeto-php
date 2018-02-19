-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2017 às 01:53
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fastfood`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_conta`
--

CREATE TABLE IF NOT EXISTS `tab_conta` (
  `id_conta` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `codGarcom` int(100) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `mesa` varchar(100) NOT NULL,
  `dataAbertura` datetime NOT NULL,
  `valorTotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_conta`
--

INSERT INTO `tab_conta` (`id_conta`, `status`, `codGarcom`, `pro_id`, `mesa`, `dataAbertura`, `valorTotal`) VALUES
(26, 'Encerrada', 2, 16, '6', '2017-05-15 02:52:05', '120.00'),
(29, 'Ativa', 2, 19, '3', '2017-05-22 15:59:04', '50.00'),
(30, 'Encerrada', 2, 16, '4', '2017-05-22 15:59:35', '120.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_prod`
--

CREATE TABLE IF NOT EXISTS `tab_prod` (
  `pro_id` int(11) NOT NULL,
  `pro_nome` varchar(250) NOT NULL,
  `pro_foto` varchar(50) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `categoria` varchar(250) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_prod`
--

INSERT INTO `tab_prod` (`pro_id`, `pro_nome`, `pro_foto`, `valor`, `categoria`, `data`) VALUES
(16, 'Teste', 'upload/1491337962.jpg', '120.00', 'Sobremesa', '2017-04-04'),
(17, 'Big Mac', 'upload/1494798814.jpg', '27.00', 'Hamburgues', '2017-05-14'),
(18, 'Carne e Queijo', 'upload/1494798878.jpg', '33.00', 'Hamburgues', '2017-05-14'),
(19, 'Frango Ranch', 'upload/1494799011.jpg', '22.00', 'Saladas', '2017-05-14'),
(20, 'Coca Cola', 'upload/1494799080.jpg', '3.00', 'Bebidas', '2017-05-14'),
(21, 'Pepsi', 'upload/1494799135.jpg', '3.20', 'Bebidas', '2017-05-14'),
(22, 'Suco de Laranja', 'upload/1494799183.jpg', '2.50', 'Bebidas', '2017-05-14'),
(25, 'Salada de Frango', 'upload/1495160853.jpg', '19.00', 'Saladas', '2017-05-18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_usuario`
--

CREATE TABLE IF NOT EXISTS `tab_usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `dt_nasc` varchar(12) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cpf` varchar(25) NOT NULL,
  `rg` varchar(25) NOT NULL,
  `escolaridade` varchar(100) NOT NULL,
  `login` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `perfil` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_usuario`
--

INSERT INTO `tab_usuario` (`id`, `nome`, `dt_nasc`, `fone`, `endereco`, `cpf`, `rg`, `escolaridade`, `login`, `senha`, `perfil`) VALUES
(1, 'Felipe Soares', '1999-03-27', '(85) 9886-5100', 'Rua walter pompeu n25', '000.000.000-00', '000.000.000-0', 'Ensino Superior', 'FELIPE_PIRES', '123', 1),
(2, 'Douglas Araujo', '1999-03-27', '(85) 8888-8888', 'Rua Teste n123', '000.000.000-00', '000.000.000-0', 'Ensino Fundamental', 'DOUGLAS_ARAUJO', '123', 0),
(3, 'teste', '1999-03-22', '(85) 0000-0000', '0000', '000.000.000-00', '000.000.000-0', 'Curso TÃ©cnico', 'teste', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_conta`
--
ALTER TABLE `tab_conta`
  ADD PRIMARY KEY (`id_conta`);

--
-- Indexes for table `tab_prod`
--
ALTER TABLE `tab_prod`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tab_usuario`
--
ALTER TABLE `tab_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_conta`
--
ALTER TABLE `tab_conta`
  MODIFY `id_conta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tab_prod`
--
ALTER TABLE `tab_prod`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tab_usuario`
--
ALTER TABLE `tab_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
