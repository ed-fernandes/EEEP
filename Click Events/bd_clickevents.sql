-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Abr-2019 às 17:34
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_clickvents`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_evento`
--

CREATE TABLE `tb_evento` (
  `evt_id` int(11) NOT NULL,
  `evt_tipo` varchar(80) DEFAULT NULL,
  `fk_pes_id` int(11) DEFAULT NULL,
  `nom_eve` varchar(255) NOT NULL,
  `con_eve` tinyint(1) NOT NULL,
  `buf_eve` tinyint(1) NOT NULL,
  `loc_eve` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_evento`
--

INSERT INTO `tb_evento` (`evt_id`, `evt_tipo`, `fk_pes_id`, `nom_eve`, `con_eve`, `buf_eve`, `loc_eve`) VALUES
(1, 'Casamento', NULL, 'Social', 1, 1, 1),
(2, 'Conferências', NULL, 'Corporativo', 1, 1, 1),
(3, 'Formatura', NULL, 'Academico', 1, 1, 1),
(4, 'Feiras', NULL, 'Corporativo', 1, 1, 1),
(5, 'Formatura', NULL, 'Academico', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_gerente`
--

CREATE TABLE `tb_gerente` (
  `ger_id` int(11) NOT NULL,
  `ger_login` varchar(45) NOT NULL,
  `ger_nome` varchar(200) NOT NULL,
  `ger_senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `pes_id` int(11) NOT NULL,
  `pes_login` varchar(45) NOT NULL,
  `pes_senha` varchar(45) NOT NULL,
  `pes_nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`pes_id`, `pes_login`, `pes_senha`, `pes_nome`) VALUES
(1, 'aaaaaa', 'aaaaaaa', 'aaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_evento`
--
ALTER TABLE `tb_evento`
  ADD PRIMARY KEY (`evt_id`),
  ADD KEY `fk_pes_id` (`fk_pes_id`);

--
-- Indexes for table `tb_gerente`
--
ALTER TABLE `tb_gerente`
  ADD PRIMARY KEY (`ger_id`);

--
-- Indexes for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`pes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_evento`
--
ALTER TABLE `tb_evento`
  MODIFY `evt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_gerente`
--
ALTER TABLE `tb_gerente`
  MODIFY `ger_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `pes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_evento`
--
ALTER TABLE `tb_evento`
  ADD CONSTRAINT `tb_evento_ibfk_1` FOREIGN KEY (`fk_pes_id`) REFERENCES `tb_pessoa` (`pes_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
