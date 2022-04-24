-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Fev-2019 às 17:28
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
-- Database: `bd_clickevents`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_administrador`
--

CREATE TABLE `tb_administrador` (
  `adm_id` int(11) NOT NULL,
  `adm_login` varchar(45) NOT NULL,
  `adm_senha` varchar(50) NOT NULL,
  `adm_nome` varchar(150) NOT NULL,
  `fk_ger_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_evento`
--

CREATE TABLE `tb_evento` (
  `evt_id` int(11) NOT NULL,
  `evt_tipo` varchar(80) DEFAULT NULL,
  `fk_adm_id` int(11) DEFAULT NULL,
  `fk_pes_id` int(11) DEFAULT NULL,
  `nom_eve` varchar(255) NOT NULL,
  `con_eve` tinyint(1) NOT NULL,
  `buf_eve` tinyint(1) NOT NULL,
  `loc_eve` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_administrador`
--
ALTER TABLE `tb_administrador`
  ADD PRIMARY KEY (`adm_id`),
  ADD KEY `fk_ger_id` (`fk_ger_id`);

--
-- Indexes for table `tb_evento`
--
ALTER TABLE `tb_evento`
  ADD PRIMARY KEY (`evt_id`),
  ADD KEY `adm_id` (`fk_adm_id`),
  ADD KEY `pes_id` (`fk_pes_id`);

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
-- AUTO_INCREMENT for table `tb_administrador`
--
ALTER TABLE `tb_administrador`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_evento`
--
ALTER TABLE `tb_evento`
  MODIFY `evt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_gerente`
--
ALTER TABLE `tb_gerente`
  MODIFY `ger_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `pes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_administrador`
--
ALTER TABLE `tb_administrador`
  ADD CONSTRAINT `fk_ger_id` FOREIGN KEY (`fk_ger_id`) REFERENCES `tb_gerente` (`ger_id`);

--
-- Limitadores para a tabela `tb_evento`
--
ALTER TABLE `tb_evento`
  ADD CONSTRAINT `adm_id` FOREIGN KEY (`fk_adm_id`) REFERENCES `tb_administrador` (`adm_id`),
  ADD CONSTRAINT `pes_id` FOREIGN KEY (`fk_pes_id`) REFERENCES `tb_pessoa` (`pes_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
