-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Out-2018 às 13:36
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agente`
--

CREATE TABLE `tb_agente` (
  `age_id` int(11) NOT NULL,
  `age_login` varchar(250) NOT NULL,
  `age_senha` int(250) NOT NULL,
  `age_nome` int(250) NOT NULL,
  `age_estado` varchar(250) NOT NULL,
  `age_cidade` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_agente`
--

INSERT INTO `tb_agente` (`age_id`, `age_login`, `age_senha`, `age_nome`, `age_estado`, `age_cidade`) VALUES
(1, 'dougAGT', 123, 0, '', ''),
(2, 'dougAGT', 123, 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_populacao`
--

CREATE TABLE `tb_populacao` (
  `pop_id` int(11) NOT NULL,
  `pop_nome` varchar(250) NOT NULL,
  `pop_senha` varchar(250) NOT NULL,
  `pop_login` varchar(250) NOT NULL,
  `pop_data_nascimento` varchar(30) NOT NULL,
  `pop_pai` varchar(250) NOT NULL,
  `pop_mae` varchar(250) NOT NULL,
  `pop_logradouro` varchar(150) NOT NULL,
  `pop_nome_logradouro` varchar(250) NOT NULL,
  `pop_num` varchar(10) NOT NULL,
  `pop_bairro` varchar(150) NOT NULL,
  `pop_estado` varchar(2) NOT NULL,
  `pop_cidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_populacao`
--

INSERT INTO `tb_populacao` (`pop_id`, `pop_nome`, `pop_senha`, `pop_login`, `pop_data_nascimento`, `pop_pai`, `pop_mae`, `pop_logradouro`, `pop_nome_logradouro`, `pop_num`, `pop_bairro`, `pop_estado`, `pop_cidade`) VALUES
(3, '', '123', 'dougPOP', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_psf`
--

CREATE TABLE `tb_psf` (
  `psf_id` int(11) NOT NULL,
  `psf_senha` varchar(250) NOT NULL,
  `psf_login` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_psf`
--

INSERT INTO `tb_psf` (`psf_id`, `psf_senha`, `psf_login`) VALUES
(1, '123', 'dougPSF'),
(2, '123', 'dougPSF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rotas`
--

CREATE TABLE `tb_rotas` (
  `rot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_secretaria`
--

CREATE TABLE `tb_secretaria` (
  `sec_id` int(11) NOT NULL,
  `sec_login` varchar(250) NOT NULL,
  `sec_senha` varchar(250) NOT NULL,
  `sec_cidade` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_secretaria`
--

INSERT INTO `tb_secretaria` (`sec_id`, `sec_login`, `sec_senha`, `sec_cidade`) VALUES
(1, 'dougSEC', '123', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vacina`
--

CREATE TABLE `tb_vacina` (
  `vac_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vacinacao`
--

CREATE TABLE `tb_vacinacao` (
  `inj_id` int(11) NOT NULL,
  `inj_venc` varchar(250) NOT NULL,
  `inj_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_visita`
--

CREATE TABLE `tb_visita` (
  `vis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agente`
--
ALTER TABLE `tb_agente`
  ADD PRIMARY KEY (`age_id`);

--
-- Indexes for table `tb_populacao`
--
ALTER TABLE `tb_populacao`
  ADD PRIMARY KEY (`pop_id`);

--
-- Indexes for table `tb_psf`
--
ALTER TABLE `tb_psf`
  ADD PRIMARY KEY (`psf_id`);

--
-- Indexes for table `tb_rotas`
--
ALTER TABLE `tb_rotas`
  ADD PRIMARY KEY (`rot_id`);

--
-- Indexes for table `tb_secretaria`
--
ALTER TABLE `tb_secretaria`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `tb_vacina`
--
ALTER TABLE `tb_vacina`
  ADD PRIMARY KEY (`vac_id`);

--
-- Indexes for table `tb_vacinacao`
--
ALTER TABLE `tb_vacinacao`
  ADD PRIMARY KEY (`inj_id`);

--
-- Indexes for table `tb_visita`
--
ALTER TABLE `tb_visita`
  ADD PRIMARY KEY (`vis_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agente`
--
ALTER TABLE `tb_agente`
  MODIFY `age_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_populacao`
--
ALTER TABLE `tb_populacao`
  MODIFY `pop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_psf`
--
ALTER TABLE `tb_psf`
  MODIFY `psf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_rotas`
--
ALTER TABLE `tb_rotas`
  MODIFY `rot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_secretaria`
--
ALTER TABLE `tb_secretaria`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_vacina`
--
ALTER TABLE `tb_vacina`
  MODIFY `vac_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_vacinacao`
--
ALTER TABLE `tb_vacinacao`
  MODIFY `inj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_visita`
--
ALTER TABLE `tb_visita`
  MODIFY `vis_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
