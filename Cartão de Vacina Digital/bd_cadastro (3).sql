-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22-Nov-2018 às 14:16
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

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

DROP TABLE IF EXISTS `tb_agente`;
CREATE TABLE IF NOT EXISTS `tb_agente` (
  `age_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_psf_id` int(11) DEFAULT NULL,
  `age_login` varchar(250) NOT NULL,
  `age_senha` varchar(250) NOT NULL,
  `age_nome` varchar(250) NOT NULL,
  `age_estado` varchar(250) NOT NULL,
  `age_cidade` varchar(250) NOT NULL,
  PRIMARY KEY (`age_id`),
  KEY `fk_psf_id` (`fk_psf_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_populacao`
--

DROP TABLE IF EXISTS `tb_populacao`;
CREATE TABLE IF NOT EXISTS `tb_populacao` (
  `pop_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `pop_cidade` varchar(100) NOT NULL,
  `psf_id` int(11) NOT NULL,
  PRIMARY KEY (`pop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=369 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_populacao`
--

INSERT INTO `tb_populacao` (`pop_id`, `pop_nome`, `pop_senha`, `pop_login`, `pop_data_nascimento`, `pop_pai`, `pop_mae`, `pop_logradouro`, `pop_nome_logradouro`, `pop_num`, `pop_bairro`, `pop_estado`, `pop_cidade`, `psf_id`) VALUES
(7, 'Luna Vitória Gomes dos Santos', 'luna', 'Luna Vitória Gomes dos Santos', '2018-02-02', 'NÃ£o identificado', 'Kelly Maiara Gomes Salles', 'Rua', 'Frei Humberto', '1000', 'Bela Vista', '5', 'Canindï¿½', 2),
(8, 'Benjamin Viera Franca', 'benjamin', 'Benjamin', '2018-07-15', 'Vinicius Viera Pinto', 'Gleiciane Monteiro Franco', 'Rua', 'Sao Paulo', '1291', 'Bela Vista', '5', 'Canindï¿½', 2),
(9, 'Emanoel Vasconcelo Almeida', 'emanoel', 'Emanoel Vasconcelo Almeida ', '2018-08-25', 'Francisco Ranielle A. Sousa', 'Antonia Thalia Silva Vasconcelo ', 'Travessa ', 'Sao Paulo ', '1200', 'Bela Vista', '5', 'Canindï¿½', 2),
(10, 'Maria Elynara Silva Castro', 'maria', 'Maria Elynara Silva Castro', '2018-03-13', 'Antonio Aparecido de R. de Castro', 'Maria Aparecido Rodrigues da Silva', 'Avenida', ' Sao Francisco ', '1147', 'Bela Vista', '5', 'Canindï¿½', 2),
(11, 'Gabriely Gomes Silva ', 'gabriely', 'Gabriely Gomes Silva', '2017-05-20', 'Francisco Daniel Silva', 'Maria Sandra Mota Gomes', 'Rua', 'SÃ£o Jose ', '1184', 'Bela Vista', '5', 'Canindï¿½', 2),
(12, 'Maria Lunara', 'maria', 'Maria Lunara', '2017-03-22', 'nao identificado', 'Maria Yonara  MendonÃ§a', 'Avenida', 'SÃ£o Jose ', '1223', 'Bela Vista', '5', 'Canindï¿½', 2),
(13, 'Otavio Eylan Lopes Muniz', 'otavio', 'Otavio Eylan Lopes Muniz', '2017-12-26', 'Gabriel Eylan L. Muniz', 'Francisca Karine CavalcanteLopes', 'Rua', 'Sao Paulo ', '1283', 'Bela Vista', '5', 'Canindï¿½', 2),
(14, 'Matheus Arthur Alves da Silva', 'matheus', 'Matheus Arthur Alves da Silva', '2017-11-10', 'Francisco Clerton Abreu da Silva', 'Cecilia Alves dos Santos', 'Rua', 'Adenizio Cordeiro', '282', 'Bela Vista', '5', 'Canindï¿½', 2),
(15, 'joao Levi Uchoa Goncalves ', 'joao', 'joao Levi Uchoa Goncalves ', '2015-11-07', 'Jardel Nase Goncalves ', 'Evelanny Maria Uchoa ', 'Avenida', 'Sao Jose', '10605', 'Bela Vista', '5', 'Canindï¿½', 2),
(16, 'Luiz  Gonzaga Pereira da Silva', 'luiz', 'Luiz Gonzaga Pereira da Silva', '2018-08-18', 'Josimar Lopes ', 'Joana Paula Pereira Gomes ', 'Avenida ', 'SÃ£o Jose ', '1053', 'Bela Vista', '11', 'Caarapï¿½', 2),
(17, 'Francisca Thayna Alves Santos ', 'francisca', 'Francisca Thayna Alves Santos ', '2017-06-02', 'sem identificacao', 'Francisca lidia Sousa Alves', 'Avenida', 'SÃ£o Jose ', '1113', 'Bela Vista', '5', 'Canindï¿½', 2),
(18, 'Jefferson Ezequiel Estevan', 'jefferson', 'Jefferson Ezequiel Estevan', '2018-05-10', 'Francisco Jeffson Sampaio Estevan', 'Patricia dos Santos paz', 'Rua', 'Santa Edwirges ', '360', 'Bela Vista', '5', '', 2),
(19, 'Jose Henrique Alves Silva ', 'jose', 'Jose Henrique Alves Silva ', '2018-08-07', 'sem identificacao', 'Ana Kelly Sousa Alves ', 'Avenida ', 'Sao Jose', '1113', 'Bela Vista', '5', 'Canindï¿½', 2),
(20, 'Maria Perola Oliveira da Silva', 'maria', 'Maria Perola Oliveira da Silva', '2018-07-27', 'Francisco Mauricio da Silva', 'Giovana Oliveira Ribeiro', 'Avenida ', 'SÃ£o Jose ', '1131', 'Bela Vista', '5', 'Canindï¿½', 2),
(21, 'Oscar Lucas Braga Dias', 'oscar', 'Oscar Lucas Braga Dias', '2018-07-23', 'Lucas Perreira Dias ', 'Francisca Raynara Livia Braga', 'Rua', 'Jose Perreira da Cruz ', '1829', 'Bela Vista', '-1', '-1', 2),
(22, 'Maria Thaynara Martins Uchoa', 'maria', 'Maria Thaynara Martins Uchoa', '2018-05-30', 'Jose Edmilson Monteiro Uchoa', 'Mayaria Silva Matos', 'Rua', 'Francisco Adenise Cordeiro', '350', 'Bela Vista', '5', 'Canindï¿½', 2),
(23, 'Ellem Maria ', 'ellm', 'Ellem Maria  ', '2017-05-07', 'Francisco Marcio Gomes de Almeida', 'Tatiane Perreira Ferreira', 'Rua', 'Santa Edwiges', '358', 'Bela Vista', '5', 'Canindï¿½', 2),
(24, 'Ruth Ellem Sousa Castro ', 'ruth', 'Ruth Ellem Sousa Castro ', '2017-08-08', 'Jonas Neri de Castro', 'Maria Rosilene Castro', 'Rua', 'Sao Paulo', '1259', 'Bela Vista', '5', 'Canindï¿½', 2),
(25, 'Maria Luzia da Silva ', 'maria', 'Maria Luzia da Silva ', '2016-11-26', 'nao identificado', 'Rosalandia P. da silva', 'Avenida', 'Sao Jose', 'nao identi', 'nao identificado', '5', 'Canindï¿½', 2),
(26, 'Yann Miguel Martins dos Santos ', 'yann', 'Yann Miguel Martins dos Santos ', '2017-03-21', 'Gabriel Salvador dos Santos', 'Noslaeny Silva Martins ', 'Avenida ', 'SÃ£o Jose ', '967', 'Bela Vista', '5', 'Canindï¿½', 2),
(27, 'Enzo Gabriel Lima Almeida', 'enzo', 'Enzo Gabriel Lima Almeida', '2007-02-20', 'Francisco Thiago Thiago Almeida', 'Maria Rosangela de Lima', 'Rua', 'Contorno Norte', '24', 'Bela Vista', '5', 'Canindï¿½', 2),
(28, 'Francisco Pietro V. Nascimento', 'francisco', 'Francisco Pietro V. Nascimento', '2017-06-01', 'Paulo Ricardo Fernandes ', 'Suyane S. Vasconcelo', 'Rua', 'Projeta ', '20110', 'Bela Vista', '5', 'Canindï¿½', 2),
(29, 'Samuel Amarante Cavalcante', 'samuel', 'Samuel Amarante Cavalcante', '2017-10-31', 'Carlos Robssom Marreira', 'Francisca Aline Amarante ', 'Rua', 'Projetada', '168', 'Bela Vista', '5', 'Canindï¿½', 2),
(30, 'Joao Eudes da Silva', 'joao', 'Joao Eudes da Silva', '2017-04-01', 'Antonio Eudes Abreu de Sousa', 'Gisele Marques da Silva', 'Rua', 'Francisco de Paula Barros ', '132', 'Bela Vista', '5', 'Canindï¿½', 2),
(31, 'Emanoel Barros Rocha', 'emanoel', 'Emanoel Barros Rocha', '2017-11-27', 'Marcos Aurelio Sampaio Viena', 'Francisca Raissa Barros Rocha', 'RUA', 'Francisco das Chagas Barros ', '551', 'Bela Vista', '5', 'Canindï¿½', 2),
(32, 'Airton Lorenzo Barros Alves', 'airton', 'Airton Lorenzo Barros Alves', '2018-04-26', 'Antonio Vinton Alves Barros ', 'Joana', 'Rua', 'Francisco das Chagas', '551', 'Bela Vista', '5', 'Canindï¿½', 2),
(33, 'Ana Laura Freitas Gomes ', 'ana', 'Ana Laura Freitas Gomes ', '2018-07-05', 'NÃ£o identificado', 'Manuela Almeida Gomes', 'NÃ£o identificado', 'Contorno Oeste', 'NÃ£o ident', 'NÃ£o identificado', '5', 'Canindï¿½', 2),
(34, 'Samuel Bezerra Lima Maciel', 'samuel', 'Samuel Bezerra Lima Maciel', '2016-07-07', 'Gleibson Bezerra Maciel', 'Maria de Fatima Lima Andre', 'NÃ£o identificado', 'Joao Batista Rodriguez', '554', 'NÃ£o identificado', '5', 'Canindï¿½', 2),
(35, 'Joao Miguel', 'joao', 'Joao Miguel', '2016-09-21', 'Crisvan', 'Janaerly Silva Braga', 'NÃ£o identificado', 'Projetada', 'NÃ£o ident', 'NÃ£o identificado', '5', 'Canindï¿½', 2),
(36, 'Sarah Ferreira Saraiva', 'sarah26', 'Sarah Ferreira Saraiva', '2018-01-26', 'Francisco Veneci Sousa Ferreira', 'Maria Neara Saraiva', 'Nao identificado', 'Contorno Oeste', '158', 'Nao identificado', '5', 'Canindï¿½', 2),
(37, 'Francisca Vitoria Simoes de Nascimento', 'francisca', 'Francisca Vitoria Simoes de Nascimento', '2018-04-23', 'Julio Soares do Nascimento', 'Ana Luiza B Simoes', 'Rua Luis Balbino', 'Nao identificado', '1355', 'Nao identificado', '5', 'Canindï¿½', 2),
(38, 'Ivina Mariane Alves Freitas', 'ivina', 'Ivina Mariane Alves Freitas', '2017-05-23', 'Matheus Freitas Andrade', 'Michele Natila Rocha', 'Nao identificado', 'Sao braz', '1465', 'Nao identificado', '5', 'Canindï¿½', 2),
(39, 'Maria Helaisa Sousa Reis', 'maria', 'Maria Helaisa Sousa Reis', '2017-11-25', 'Denis Ribeiro Dos Reis', 'Adevania de Sousa Silva', 'Nao identificado', 'Luis Balbino', '741', 'Nao identificado', '5', 'Canindï¿½', 2),
(40, 'Maria Yolanna Ribeiro', 'maria', 'Maria Yolanna Ribeiro', '2018-05-07', 'Antonio Eduardo Silva Pereira', 'Karena Ribeiro de Sousa', 'Nao identificado', 'Francisco das Chagas Barros', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(41, 'Kallebe Soares da Silva', 'kallebe', 'Kallebe Soares da Silva', '2018-05-23', 'Wanderso Franca da Silva', 'Ana Celia Soares deSousa', 'Nao identificado', 'Osvaldo Vinho', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(42, 'Lorezo Melo Araujo Rocha', 'lorezo', 'Lorezo Melo Araujo Rocha', '2018-03-15', 'Clenieson Manteio Rocha', 'Keitym Melo Sousa Araujo', 'Nao identificado', 'Luiz Balbino', '801', 'Nao identificado', '5', 'Canindï¿½', 2),
(43, 'Ana Livia Gomes Castro', 'ana', 'Ana Livia Gomes Castro', '2017-11-13', 'Paulo Ricardo Pereira Castro', 'Aline Magda Gomes Marinho', 'Nao identificado', 'Francisco Felix', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(44, 'Luis Goncalves Sousa', 'luis', 'Luis Goncalves Sousa', '2018-05-26', 'Lucivando Soares Sousa', 'Mikaele de Castro Goncalves', 'Nao identificado', 'Francisco Felix', '1932', 'Nao identificado', '5', 'Canindï¿½', 2),
(45, 'Nana Sophia Oliveira Xavier', 'nana', 'Nana Sophia Oliveira Xavier', '2018-09-07', 'Francisco Anderson Silva', '', 'Nao identificado', 'Paulino Barroso', '1451', 'Imaculada Conceicao', '5', 'Canindï¿½', 2),
(46, 'Nayla Araujo Pereira', 'naylla', 'Nayla Araujo Pereira', '2017-12-22', 'Jose Elmar Borges Pereira', 'Francisca Nayana da Silva Araujo', 'Nao identificado', 'Nao identificado', '364', 'Joao Militao', '5', 'Canindï¿½', 2),
(47, 'Larissa Maria Vieira Braga', 'larissa', 'Larissa Maria Vieira Braga', '2018-03-26', 'Francisco Elder C Braga', 'Maria Eliana de Sousa Viera', 'Nao identificado', 'Travessa Joao Militao', '1313', 'Nao identificado', '5', 'Canindï¿½', 2),
(48, 'Francisco Emanuel Rocha Mauricio', 'francisco', 'Francisco Emanuel Rocha Mauricio', '2017-07-06', 'Nao identificado', 'Nao identificado', 'Nao identificado', 'Paulino Barroso', 'Nao identi', 'Amaculada Conceicao', '5', 'Canindï¿½', 2),
(49, 'Manuelly Maria Oliveira', 'manuelly', 'Manuelly Maria Oliveira', '2016-12-09', 'Nao identificado', 'Maria Luzerene Oliveira', 'Nao identificado', 'Joao Militao', '250', 'Nao identificado', '5', 'Canindï¿½', 2),
(50, 'Joao Lucas Maciel Nobre', 'joao', 'Joao Lucas Maciel Nobre', '2017-10-10', 'Joao Ferreira Nobre', 'Maria das Gracas Maciel Nascimento', 'Nao identificado', 'Joao Militao', '226', 'Nao identificado', '5', 'Canindï¿½', 2),
(51, 'Vitor Raynan Dias Barbosa', 'vitor', 'Vitor Raynan Dias Barbosa', '2017-06-27', 'Nao identificado', 'Maria Angelica Dias Barbosa', 'Nao identificado', 'Celio Martins ', '561', 'Amaculada Conceicao', '5', 'Canindï¿½', 2),
(52, 'Bernardo Silva Germano', 'bernardo', 'Bernardo Silva Germano', '2018-04-05', 'Francisco Michel Macedo Germano', 'Ana Livia da Silva Santos', 'Rua Joao Militao', ' Joao Militao', '335', 'Nao identificado', '5', 'Canindï¿½', 2),
(53, 'Francisco Bernardo P Magalhaes', 'francisco', 'Francisco Bernardo P Magalhaes', '2018-04-26', 'Juan Pinto Magalhaes', 'Fernanda da Silva Paiva', 'Rua Paulino Barros', 'Paulino Barros', '1390', 'Nao identificado', '5', 'Canindï¿½', 2),
(54, 'Maria Valentina ', 'maria', 'Maria Valentina ', '2018-06-09', 'Jose Artenio Chaves', 'Maria Erlania Freitas Pinto', 'Rua Joao Militao', 'Joao Militao', '325', 'Nao identificado', '5', 'Canindï¿½', 2),
(55, 'Maria Valentina Serafin Lopes', 'maria', 'Maria Valentina Serafin Lopes', '2017-04-05', 'Ribomar Serafin Gomes', 'Maria Cleane Lopes Carpino', 'Av Luciano Magalhaes', 'Luciano Magalhaes', '288', 'Nao identificado', '5', 'Canindï¿½', 2),
(56, 'Sidney Apallo Oliveira Rodrigues', 'sidney', 'Sidney Apallo Oliveira Rodrigues', '2018-04-14', 'Francisco Valdner Rodrigues', 'Marcia Daiane Oliveira', 'Rua Ecilio Martins', 'Ecilio Martins', '720', 'Nao identificado', '5', 'Canindï¿½', 2),
(57, 'Pedro Lucas Almeida Dias', 'pedro', 'Pedro Lucas Almeida Dias', '2018-01-19', 'Francisco Lucas Almeida Lourencio', 'Ane Jesica Dias Cruz', 'Rua', 'Serafim', '440', 'Bela Vista', '5', 'Canindï¿½', 2),
(58, 'Francisca Emanuely Costa Lopes', 'francisca', 'Francisca Emanuely Costa Lopes', '2016-04-06', 'Evaldo Lopes', 'Antonia Dalveni Costa Lopes', 'Rua', 'Serafim', '354', 'Bela Vista', '5', 'Canindï¿½', 2),
(59, 'Anne Beatriz Silva Nast', 'anne', 'Anne Beatriz Silva Nast', '2017-07-07', 'Erik do Nascimento Carneiro', 'Maria Liliane Araujo Silva', 'Rua', 'Serafim', '452', 'Bela Vista', '5', 'Canindï¿½', 2),
(60, 'Isabelly Ouafre Teixeira', 'isabelly', 'Isabelly Ouafre Teixeira', '2017-03-28', 'Moises Silva Teixeira', 'MilÃ§a Ouafre Lima', 'Avenida', 'Sao Jose', '686', 'Bela Vista', '5', 'Canindï¿½', 2),
(61, 'Gusttavo Jose Bezerra Vieira', 'gusttavo', 'Gusttavo Joao Bezerra Vieira', '2018-03-06', 'Odair JosÃ© Belchior Viera', 'Ana Paula Bezerra Viera', 'Rua', 'General Sampaio', '2174', 'Bela Vista', '5', 'Caninde', 2),
(62, 'Yuri Miguel Santos Silva', 'yuri', 'Yuri Miguel Santos Silva', '2017-05-03', 'Nao identificado', 'Maria Liduina Santos Silva', 'Travessa', 'Adenisio Cordeiro', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(63, 'Isabelly Sousa Vieira', 'isabelly', 'Isabelly Sousa Vieira', '2018-03-28', 'Nao identificado', 'Raquel Mendes de Sousa Vieira', 'Rua', 'Francisco Coelho de Morais', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(64, 'Debora Lorrany Sousa', 'debora', 'Debora Lorrany Sousa', '2017-08-12', 'Nao identificado', 'Gisele dos R. Ferreira', 'Rua', 'Nao identificado', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(65, 'David Lorenzo Monteiro dos Santos', 'david', 'David Lorenzo Monteiro dos Santos', '2018-05-12', 'Iago de Sousa Santos', 'Luana Monteiro Silva', 'Rua', 'Nao identificado', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(66, 'Kayle Hellery Lima Chagas', 'kayle', 'Kayle Hellery Lima Chagas', '2018-04-16', 'Jose Carlos Marreiro Chagas', 'Wanessa Kacya Lima Chagas', 'Rua', 'General Sampaio', '1730', 'Bela Vista', '5', 'Canindï¿½', 2),
(67, 'Joao Artur da Silva Soares', 'joao', 'Joao Artur da Silva Soares', '2018-05-03', 'Andre Luis Bento Soares', 'Thalita Pereira da Silva', 'Rua', 'General Sampaio', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(68, 'Maria Livia Santos da Silva', 'maria', 'Maria Livia Santos da Silva', '2017-09-05', 'Nao identificado', 'Maria Audeci Santos', 'Rua', 'Francisco Coelho', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(69, 'Anderson Gael Alves Loiola', 'anderson', 'Anderson Gael Alves Loiola', '2018-04-28', 'Antonio Felipe Tavares Loiola', 'Inlanda da Silva Alves', 'Rua', 'General Sampaio', '2299', 'Bela Vista', '5', 'Canindï¿½', 2),
(70, 'Maria Cecilia M. Sousa', 'maria', 'Maria Cecilia M. Sousa', '2017-06-28', 'Edsom Almeida Sousa', 'Francisca Gabriely M. Coelho', 'Rua', 'Marcandes', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(71, 'Matheus Cauan Vieira Soares', 'matheus', 'Matheus Cauan Vieira Soares', '2018-07-16', 'Nao identificado', 'Francisca Audilene Vieira Sousa', 'Rua', 'General Sampaio', '1622', 'Bela Vista', '5', 'Canindï¿½', 2),
(72, 'Humberto Soares Sousa', 'humberto', 'Humberto Soares Sousa', '2018-08-19', 'Carlos Emanuel Alves Sousa', 'Maria Natalia Azevedo Soares', 'Rua', 'General Sampaio', '1804', 'Bela Vista', '5', 'Canindï¿½', 2),
(73, 'Maria Eunara Silva Gomes', 'maria', 'Maria Eunara Silva Gomes', '2017-10-17', 'Eumaud Uchoa Gomes', 'Maria Antonia Silva Gomes', 'Rua ', 'General Sampaio', '1873', 'Bela Vista', '5', 'Canindï¿½', 2),
(75, 'Ivina Mariane Alves Freitas', 'juina', 'Juina Mariaane Alves Freitas', '2017-05-23', 'Matheus  Freitas Andrade', 'Michele Nafila Rocha ', 'Rua ', 'Sao Braz ', '1465', 'Bela Vista', '5', 'Canindï¿½', 2),
(76, 'Maria Heloisa Sousa Reis', 'maria', 'Maria Heloisa Sousa Reis', '2017-11-25', 'Denis Ribeiro dos Reis', 'Adevania de Sousa Silva', 'Rua', 'Luiz Balbimo', '741', 'Bela Vista', '5', 'Canindï¿½', 2),
(77, 'Maria Paulo Macedo de Oliveira Granjeiro', 'maria', 'Maria Paulo Macedo de Oliveira Granjeiro', '2018-02-16', 'Paulo Granjeiro Araujo', 'Aline Macedo OLiveira Granjeiro', 'Avenida', 'Sao Francisco ', 'nao identi', 'Bela Vista', '5', 'Canindé', 2),
(78, 'Maria Yohanna Ribeiro', 'maria', 'Maria Yohanna Ribeiro', '2018-05-07', 'Antonio Evando Silva Pereira', 'Karena Ribeiro de Sousa ', 'Rua', 'Francisco das Chagas Barros', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(79, 'Lorenzo Melo Araujo Rocha', 'lorenzo', 'Lorenzo Melo Araujo Rocha', '2018-03-15', 'Clenilson Monteiro Rocha', 'Keitym Melo Sousa Aaraujo', 'Rua', 'Luiz Balbino', '801', 'Bela Vista', '5', 'Canindï¿½', 2),
(80, 'Ana Livia Gomes Castro', 'ana', 'Ana Livia Gomes Castro', '2017-11-13', 'Paulo Ricardo Pereira Castro', 'Aline  Magda Gomes Marinho', 'Rua', 'Francisco Felix', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(81, 'Pedro Gabriel Feitosa Sousa', 'pedro', 'Pedro Gabriel Feitosa Sousa', '2017-10-02', 'Antonio Edno Soares Soares ', 'Alice do Nascimento', 'Rua', 'Joaquim Salgado', '1901', 'Nao identificado', '5', 'Canindï¿½', 2),
(82, 'Luis Goncalves Sousa', 'luisa', 'Luis Goncalves Sousa', '2018-05-26', 'Lucivando Soares Sousa ', 'Mikaele de Castro Goncalves ', 'Rua', 'Francisco Felix ', '1932', 'Nao identificado', '5', 'Canindï¿½', 2),
(83, 'Emanoel Rodrigues Simoes', 'emanoel', 'Emanoel Rodrigues Simoes', '2018-07-03', 'Nao identificado', 'Verilene Rodrigues Rodrigues Lima', 'Rua', 'Luiza Martins Feitose ', '1787', 'Boa Vista', '5', 'Canindï¿½', 2),
(84, 'Kallebe Soares da Silva ', 'kallebe', 'Kallebe Soares da Silva ', '2017-05-23', 'Wanderson Franca da Silva', 'Francisca Ana Celia Soares de Sousa', 'Rua', 'Osvaldo Vinho', 'Nao identi', 'NÃ£o identificado', '5', 'Canindï¿½', 2),
(85, 'Rebeca Marques Justino', 'rebeca', 'Rebeca Marques Justino', '2018-05-23', 'Francisco Romario da Silva Justino', 'Jucilene', 'Rua', 'Simas Lopes da Rocha', '1781', 'Nao identificado', '5', 'Canindï¿½', 2),
(86, 'Maria Samile Luanda Araujo', 'maria', 'Maria Samile Miarnda Araujo', '2018-04-23', 'joao Paulo Miranda limeira', 'Maria Samia P de Araujo', 'Rua', 'Luis Balmiro ', '717', 'Nao identificado', '5', 'Canindï¿½', 2),
(87, 'Rutiane Lima Braga', 'rutiane', 'Rutiane Lima Braga', '2017-07-26', 'Francisco Roberto Gomes Sousa', 'Josefa Neuma Lima Silva', 'Rua', 'Ercilio Martins', '876', 'Bela Vista', '5', 'Canindï¿½', 2),
(88, 'Maria Luiza Pereira Ribeiro', 'maria', 'Maria Luiza Pereira Ribeiro ', '2017-01-07', 'nao identificado', 'Maria de Fatima S. Pereira', 'Rua', 'Francisco das Chagas Barros', 'nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(89, 'Maria Laura Barbosa Melo', 'maria', 'Maria Laura Barbosa Melo', '2016-12-22', 'Roberto Yuri Mendes Melo', 'Mikaele Barbosa Morais', 'Rua', 'Francisco das Chagas Barros', '714', 'Bela Vista', '5', 'Canindï¿½', 2),
(90, 'Flavianizio Gomes Batista', 'flavianizio', 'Flavianizio Gomes Batista', '2017-12-27', 'Flavianizio Chagas Barros', 'Maria Lucia Gomes Rodrigues', 'Rua', 'Francisco das Chagas Barros', '1032', 'Bela Vista', '5', 'Canindï¿½', 2),
(91, 'Ana Lara Santos Silva', 'ana', 'Ana Lara Santos Silva', '2016-12-02', 'nao identificado', 'Angelica Santos Chagas', 'Rua', 'Ercilio Martins', 'nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(92, 'Maria Luana Silva Alves', 'maria', 'Maria Luana Silva Alves', '2017-05-24', 'Antonio Alexandre Alves', 'Antonio Moreira Silva Santos', 'Rua', 'Francisco das Chagas Barros', '1318', 'Bela Vista', '5', 'Canindï¿½', 2),
(93, 'Maria Julia da Silva Barros', 'maria', 'Maria Julia da Silva Barros', '2018-05-10', 'Francisco Diassis dos Santos Barros', 'Claudiana Inacio da Silva', 'Rua', 'Francsico das Chagas Barros', 'nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(94, 'Davi Lucas Nascimento Paiva', 'davi', 'Davi Lucas Nascimento Paiva', '2018-07-07', 'Antonio Edberto Paiva', 'Maria Eliene Santos Nascimento', 'Rua', 'Honorio Pereira', '1146', 'Bela Vista', '5', 'Canindï¿½', 2),
(95, 'Maria Valentina Alves', 'maria', 'Maria Valentina Alves', '2017-08-09', 'Felipe da Silva', 'Ana Lucielma Alves', 'Rua', 'Honorio Pereira', '1346', 'Bela Vista', '5', 'Canindï¿½', 2),
(96, 'Maria Yohanna Ribeiro Pereira', 'maria', 'Maria Yohanna Ribeiro Pereira', '2018-05-07', 'Antonio Evandro Silva Pereira', 'Karina Ribeiro de Sousa', 'Rua', 'Francisco das Chagas Barros', '920', 'Bela Vista', '5', 'Canindï¿½', 2),
(97, 'Mary Lorrane de Sousa', 'mary', 'Mary Lorrane de Sousa', '2017-03-26', 'Kaio Gomes de Oliveira', 'Maria Leiliane de Sousa Freitas', 'Rua', 'Francisco das Chagas Barros', '886', 'Bela Vista', '5', 'Canindï¿½', 2),
(98, 'Jose Arthu Silva Vieira', 'jose', 'Jose Arthu Silva Vieira', '2017-07-13', 'Francisco Vieira da Silva', 'Camila Silva Nascimento', 'Rua', 'Honorio Pereira', '1131', 'Bela Vista', '5', 'Canindï¿½', 2),
(99, 'Pedro Miguel Pereira Silva', 'pedro', 'Pedro Miguel Pereira Silva', '2017-09-23', 'Jose Ivanildo Coelho da Silva ', 'Joana Darc B. Pereira', 'nao identificado ', 'nao identificado', 'nao identi', 'nao identificado', '5', 'Canindï¿½', 2),
(100, 'Laura Monteiro Valentim', 'laura', 'Laura Monteiro Valentim', '2018-08-18', 'Evanildo de Sousa Fonseca Junio', 'Juliana Monteiro Valentim', 'Rua', 'Francisco das Chagas Barros', 'nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(101, 'Maria Thayna Matias Uchoa ', 'matia', 'Maria Thayna Matias Uchoa ', '2018-05-30', 'Jose Edmilson Monteiro Uchoa', 'Mayana Silva Marte', 'Rua', 'Francisco Adenise Cordeiro ', '350', 'Bela Vista', '5', 'Canindï¿½', 2),
(102, 'Guilherme Lopes Saraiva', 'guilherme', 'Guilherme Lopes Saraiva', '2017-07-26', 'Andre Monteiro Saraiva ', 'Carlene Lopes da Silva', 'Rua', 'Ercilio Martins', '816', 'Bela Vista', '5', 'Canindï¿½', 2),
(103, 'Anna Lorranny Sousa', 'anna', 'Anna Lorranny Sousa', '2018-05-10', 'Antonio Arlindo Meneses Barros', 'Maria Ana Cleide de Sousa', 'Rua', 'Francisco das Chagas Barros', '1027', 'Bela Vista', '5', 'Canindï¿½', 2),
(104, 'Joao Levi Duarte de Castro', 'joao', 'Joao Levi Duarte de Castro ', '2018-04-10', 'nao identificado ', 'Sabrina Duarte de Castro', 'Rua', 'General Sampaio', '1898', 'Bela Vista', '5', 'Canindï¿½', 2),
(105, 'Maria Davilly Martins Freire', 'maria', 'Maria Davilly Martins Freire', '2017-05-25', 'Jose Darlan Martins Pinho', 'Francisca Gabriele da Cruz Freire', 'Rua', 'General Sampaio', '1640', 'Bela Vista', '5', 'Canindï¿½', 2),
(106, 'Francisco Derick Correia Monteiro', 'francisco', 'Francisco Derick Correia Monteiro', '2018-08-07', 'Francisco de Assis M Andrade', 'Maria das Gracas C Coelho', 'Rua', 'Raimundo Monteiro', '303', 'Bela Vista', '5', 'Canindï¿½', 2),
(107, 'Hendel Gabriel Soares Abreu', 'hendel', 'Hendel Gabriel Soares Abreu', '2018-07-06', 'Antonio Ronaldo Santos de Abreu', 'Nayara Soares Lima', 'Rua', 'Fortaleza ', '625', 'Bela Vista', '5', 'Canindï¿½', 2),
(108, 'Joana de Angeles Silva Lourenco', 'joana', 'Joana de Angeles Silva Lourenco', '2017-07-24', 'Nao identificado', 'Francisca Derlangela Silva Lourenco', 'Rua', 'Francisco Chagas Barros ', '662', 'Bela Vista', '5', 'Canindï¿½', 2),
(109, 'Ana Luisa Guerra Soulto', 'ana', 'Ana Luisa Guerra Soulto', '2017-10-03', 'Gelvana Mara Vieira', 'Luis Carlos Lustosa Sousa', 'Rua', 'Francisco de Paulo Barros', '114', 'Bela Vista', '5', 'Canindï¿½', 2),
(110, 'Ana Julia Moreno Rocha', 'ana', 'Ana Julia Moreno Rocha', '2017-08-19', 'Nao identificado', 'Dione Keila Moreno de Sousa', 'Rua', 'Projetada', '136', 'Bela Vista', '5', 'Canindï¿½', 2),
(111, 'Enzo Gabriel Lima Almeida', 'enzo', 'Enzo Gabriel Lima Almeida', '2017-02-20', 'Francisco Tiago Almeida Silva', 'Maria Rosangela de Lima Gomes', 'Rua', 'contorno norte', '24', 'Bela Vista', '5', 'Canindï¿½', 2),
(112, 'Maria Luiza Nascimento Pontes', 'maria', 'Maria Luiza Nascimento Pautes', '2016-10-01', 'Antonio Aristau Pontes Nascimento', 'Daynny Nascimento Almeida', 'Rua', 'Presidente dutra', '329', 'Bela Vista', '5', 'Canindï¿½', 2),
(113, 'Adryellen Almeida Bezerra ', 'adryellen', 'Adryellen Almeida Bezerra ', '2016-10-19', 'Edvando Neves Bezerra', 'Francisca Elivania Almeida Lira', 'Rua', 'Raimundo Monteiro', '267', 'Bela Vista', '5', 'Canindï¿½', 2),
(114, 'Benjamin Pereira de Sousa', 'benjamin', 'Benjamin Pereira de Sousa', '2016-11-05', 'Nao identificado', 'Maria Verbena Martins Pereira', 'Rua', 'Ercilio martins', '566', 'Bela Vista', '5', 'Canindï¿½', 2),
(115, 'Vicente Enzo Peixoto Oliveira', 'vicente', 'Vicente Enzo Peixoto Oliveira', '2017-05-29', 'Francisco Marcelo Alves Peixoto', 'Adrina Alves Peixoto', 'Rua', 'Raimundo Monteiro', '297', 'Bela Vista', '5', 'Canindï¿½', 2),
(116, 'Lara Sophia Almeida', 'lara', 'Lara Sophia Almeida', '2018-03-06', 'Nao identificado', 'Andrea Lara A Silva', 'Rua', 'Alverlan Queiroz', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(117, 'Maria Alice Almeida Santos', 'maria', 'Maria Alice Almeida Santos', '2017-11-27', 'Francisco Almeida Silva', 'Darlene Souto', 'Rua', 'Alverlan Queiroz', '331', 'Bela Vista', '5', 'Canindï¿½', 2),
(118, 'Maria Flor Uchoa Silva', 'maria', 'Maria Flor Uchoa Silva', '2017-12-03', 'Francisco Fabio de Silva', 'Francisca Paula de S Uchoa', 'Rua', 'Capitao Magalhaes ', '210', 'Bela Vista', '5', 'Canindï¿½', 2),
(119, 'Ana Leticia Forte Moreno', 'ana', 'Ana Leticia Forte Moreno', '2017-11-22', 'Nao identificado', 'Luciana A Forte Moreno', 'Rua', 'Paulino Barroso', '1193', 'Bela Vista', '5', 'Canindï¿½', 2),
(120, 'Mellissa Saraiva Moreira', 'mellissa', 'Mellissa Saraiva Moreira', '2017-09-11', 'Kayo Raphael Saraiva Moreira', 'Francisca Daiane S Sobrinho', 'Rua', 'Adenise Cordeio', '728', 'Bela Vista', '5', 'Canindï¿½', 2),
(121, 'Bianca Saraiva Moreira', 'bianca', 'Bianca Saraiva Moreira', '2017-09-11', 'Kayo Raphael Saraiva Moreira', 'Francisca Daiane S Sobrinho', 'Rua', 'Adenise Cordeiro', '728', 'Bela Vista', '5', 'Canindï¿½', 2),
(122, 'Bernardo Lourenco Magalhaes', 'bernardo', 'Bernardo Lourenco Magalhaes', '2017-07-16', 'Isack Viana Magalhaes', 'Lysa Mirella Gomes Lourenco', 'Rua', 'Alverlan Queiroz', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(123, 'Ketlyn Eloa Portela Soares ', 'ketlyn', 'Ketlyn Eloa Portela Soares ', '2018-06-27', 'Marcelo Soares', 'Milena Kercia Portela Soares', 'Rua', 'Adenise Cordeiro', '694', 'Bela Vista', '5', 'Canindï¿½', 2),
(124, 'Jorge Lucas Utema Vieira', 'jorge', 'Jorge Lucas Utema Vieira', '2017-05-08', 'Antonio Vieira Paiva Junior', 'Kenina Midori Utema de Assis', 'Rua', 'Socorro Vieira', 'Nao Identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(125, 'Lais Paiva Gomes', 'lais', 'Lais Paiva Gomes', '2018-03-17', 'Nao identificado', 'Fabricia Paiva Macicera', 'Rua', 'Adenise Cordeiro', '762', 'Bela Vista', '5', 'Canindï¿½', 2),
(126, 'Jhan Wesley Soares ', 'jhan', 'Jhan Wesley Soares ', '2017-10-31', 'Romario Gomes Cruz', 'Antonia Kelly Soares', 'Rua', 'Alverlan queiroz', '271', 'Bela Vista', '5', 'Canindï¿½', 2),
(127, 'Liz Eduarda Estevam Lira', 'liz', 'Liz Eduarda Estevam Lira', '2018-08-07', 'Fernando Santiago Lima', 'Gabriela Sousa Estevam do Nascimento', 'Rua', 'Capitao Magalhaes', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(278, 'Kiara Cabral Ferreira Cavalcante', 'kiara', 'Kiara Cabral Ferreira Cavalcante', '2016-10-26', 'Francisco Cavalcante Brandao', 'Maria Tainara Ferreira Remao', 'Rua', 'Ercilio Martins', '991', 'Bela Vista', '5', 'Canindï¿½', 2),
(279, 'Francisco Ruan Silva Paulino', 'francisco', 'Francisco Ruan Silva Paulino', '2017-05-11', 'Francisco Ivanilde da Silva Paulino', 'Nao identificado', 'Nao identificado', 'Nao identificado', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(280, 'Manuela Serafim de Moura', 'manuela', 'Manuela Serafim de Moura', '2016-10-29', 'Nao identificado', 'Maria Lucilene Serafim', 'Rua', 'Francisco Ferreira Sampaio', '1889', 'Bela Vista', '-1', '-1', 2),
(281, 'Lara Maiza Maraes Macedo', 'lara', 'Lara Maiza Maraes Macedo', '2016-12-20', 'Nao identificado', 'Maiara Moraes Macedo', 'Rua', 'Ercilio Martins', '264', 'Campinas', '5', 'Canindï¿½', 2),
(282, 'Wallace Cortelho Sousa ', 'wallace', 'Wallace Cortelho Sousa ', '2017-11-24', 'Jose Davi Silva Sousa', 'Dalila Bianca Castelo', 'Rua', 'Joao Batista Rodriguez', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(283, 'Francisca Emanuelly Barbosa', 'francisca', 'Francisca Emanuelly Barbosa', '2015-06-05', 'Emanuel Alves Romao', 'Carla Maiara Lustosa', 'Rua', 'Francisco das Chagas Barros', 'Nao identi', 'Campinas', '5', 'Canindï¿½', 2),
(284, 'Maria Vitoria Gomes Sousa', 'maria', 'Maria Vitoria Gomes Sousa', '2018-02-19', 'Jose Valdez Costa Sousa', 'Francisca Dauciene Gomes Sousa', 'Rua', 'Joao Batista Rodrigues', '1661', 'Campinas', '5', 'Canindï¿½', 2),
(285, 'Maria Mikele Viena Sousa', 'maria', 'Maria Mikele Viena Sousa', '2017-06-21', 'Paulo Sergio Manilena Saulo', 'Raimunda Charleane', 'Assentamento', 'Monte Orebe', 'Nao identi', 'Zona Rural', '5', 'Canindï¿½', 2),
(286, 'Maria Daniele Paulino Almeida', 'maria', 'Maria Daniele Paulino Almeida', '2017-05-23', 'Nao identificado', 'Maria Marta Paulino Uchoa', 'Rua', 'Joao Batista', 'Nao identi', 'Campinas', '5', 'Canindï¿½', 2),
(287, 'Rutielly Abreu Xavier', 'rutielly', 'Rutielly Abreu Xavier', '2017-06-22', 'Nao identificado', 'Edilane Pereira de Abreu', 'Rua', 'General Sampaio', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(288, 'Maria Vitoria Avila Pires', 'maria', 'Maria Vitoria Avila Pires', '2017-04-18', 'Antonio Djalma Pires Coelho', 'Maria Leticia Avila de Lima', 'Area descoberta', 'Romeirao', '133', 'Nao identificado', '5', 'Canindï¿½', 2),
(289, 'Mayra Julia Sousa Oliveira ', 'mayra', 'Mayra Julia Sousa Oliveira ', '2016-09-28', 'Jeferson Oliveira Silva', 'Maria Adriele Sousa Oliveira', 'Rua', 'Recife', '1242', 'Bela Vista', '5', 'Canindï¿½', 2),
(290, 'Maria Clara Alves', 'maria', 'Maria Clara Alves', '2015-10-16', 'Nao identificado', 'Chaliane Alves', 'Nao identificado', 'Nao identificado', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(291, 'Agatha Lavinia', 'agatha', 'Agatha Lavinia', '2016-08-19', 'Jose Davi Silva Sousa', 'Dalila Bianca Castelo', 'Rua', 'Joao Balista Rodrigues', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(292, 'Mariane F Silva', 'mariane', 'Mariane F Silva', '2016-08-24', 'Antonio Silva Pereira', 'Marta Ferreira Martins', 'Rua', 'Recife', '1474', 'Bela Vista', '5', 'Canindï¿½', 2),
(293, 'Emanuel Xavier do Nascimento', 'emanuel', 'Emanuel Xavier do Nascimento', '2016-08-30', 'Nao identificado', 'Joana Dare S Xavier', 'Nao identificado', 'Nao identificado', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(295, 'Francisco Kaique Sousa Santos ', 'francisco', 'Francisco Kaique Sousa Santos ', '2017-09-17', 'Francisco Mardonio Silva Souto', 'Simone de Sousa Cruz', 'Rua', 'Joao Batista Rodrigues', '1376', 'Bela Vista', '5', 'Canindï¿½', 2),
(296, 'Samara Lyanna Gomes Mendonca', 'samara', 'Samara Lyanna Gomes Mendonca', '2017-09-20', 'Leandro Almeida Mendonca', 'Sandya Gomes de Sousa', 'Rua', 'Osvaldo Fonseca', '836', 'Imaculada Conceicao', '5', 'Canindï¿½', 2),
(297, 'Pedro William Nunes Freitas', 'pedro', 'Pedro William Nunes Freitas', '2017-02-16', 'Aldeci Cristiano Nunes Pereira', 'Maria Mirella J Rodrigues', 'Rua', 'francisco das Chagas Barros', '889', 'Bela Vista', '5', 'Canindï¿½', 2),
(298, 'Ana Adila Gomes Rodrigues', 'ana', 'Ana Adila Gomes Rodrigues', '2017-12-11', 'francisco Charles Rodrigues Carlos', 'Maria Janaina Vaz Gomes ', 'Rua', 'Rua da Cofeco', '902', 'Bela Vista', '5', 'Canindï¿½', 2),
(299, 'Ana Kevenlly Alves Medeiros', 'ana', 'Ana Kevenlly Alves Medeiros', '2018-03-06', 'Antonio Tiago Mendes Medeiros', 'Maria das Gracas Alves Moreira', 'Rua', 'Jose Felix da Silva', '872', 'Bela Vista', '5', 'Canindï¿½', 2),
(300, 'Hana Sophia Oliveira Xavier', 'hana', 'Hana Sophia Oliveira Xavier', '2018-09-07', 'Francisco Anderson Silva', 'Talyta Hana Silva', 'Travessa', 'Paulino Barroso ', '1451', 'Imaculada conceiÃ§Ã£o ', '5', 'Canindï¿½', 2),
(301, 'Naylla Araujo Pereira ', 'naylla', 'Naylla Araujo Pereira ', '2017-12-22', 'Jose Elmar Borges Pereira ', 'Francisca Nayana da Silva Araujo', 'Rua', 'Joao Militao ', '364', 'Bela Vista', '5', 'Canindï¿½', 2),
(302, 'Larissa Maria Vieira Braga ', 'larissa', 'Larissa Maria Vieira Braga ', '2018-03-26', 'Francisco Elder E. Braga', 'Maria Eliana de Sousa Vieira ', 'Rua', 'Joao Militao ', '1313', 'Bela Vista', '5', 'Canindï¿½', 2),
(303, 'Francisco Emanoel Rocha Mauricio ', 'francisco', 'Francisco Emanoel Rocha Mauricio ', '2017-07-06', 'Nao identificado', 'Nao identificado', 'Rua', 'Paulino Barroso ', 'Nao identi', 'Imaculada conceiÃ§Ã£o ', '5', 'Canindï¿½', 2),
(304, 'Yuri Gabriel Costa Matos ', 'yuri', 'Yuri Gabriel Costa Matos ', '2017-02-05', 'Natanael Matos Sousa', 'Suelda Andrade Costa ', 'Rua', 'Paulino Barroso ', '1182', 'Nao identificado', '5', 'Canindï¿½', 2),
(308, 'Bernardo Silva Germano ', 'bernardo', 'Bernardo Silva Germano ', '2018-04-05', 'Francisco Livia ', 'Ana Livia da Silva Santos ', 'Rua', 'Joao Militao ', '335', 'Nao identificado', '5', 'Canindï¿½', 2),
(309, 'Francisco Bernardo P. Magalhaes  ', 'francisco', 'Francisco Bernardo P. Magalhaes  ', '2018-04-26', 'Juan Pinto Magalhaes ', 'Fernanda da Silva Paiva ', 'Rua', 'Paulino Barroso', '1390', 'Nao identificado', '5', 'Canindï¿½', 2),
(310, 'Maria Valentina ', 'maria', 'Maria Valentina ', '2018-06-09', 'Jose Arteiro Chaves ', 'Maria Erlania ', 'Rua', 'Joao Militao ', '325', 'Bela Vista', '5', 'Canindï¿½', 2),
(311, 'Maria Beatriz Moreira Gomes ', 'maria', 'Maria Beatriz Moreira Gomes ', '2018-09-11', 'Renne Bernardo Alves Morreira', 'Francisca Andressa Alves ', 'Rua', 'Paulino Barroso ', '1331', 'Nao indentificado', '5', 'Canindï¿½', 2),
(312, 'Paulo Henrique Sousa Cruz  ', 'paulo', 'Paulo Henrique Sousa Cruz  ', '2018-07-19', 'Joao Paulo da Cruz Amaro', 'Renata Maria Sousa Pinto', 'Rua', 'Jose Felix da Silva ', 'Nao identi', 'nao indentificado', '5', 'Canindï¿½', 2),
(313, 'Laisla Emanuele Barbosa da Silva  ', 'laisla', 'Laisla Emanuele Barbosa da Silva  ', '2018-01-28', 'Joao', 'Danieli', 'Rua', 'Jose', '1181', 'Nao', '5', 'Canindï¿½', 2),
(314, 'Marcio Vinicius Honorato Silva ', 'marcio', 'Marcio Vinicius Honorato Silva ', '2018-04-30', 'Paulo de Oliveira Silva ', 'Aracilda de Oliveira Silva', 'Nao identificado', 'Nao indentificado', 'Nao indent', 'Monte Orebe', '5', 'Canindï¿½', 2),
(315, 'Aline do Nascimento Lima ', 'aline', 'Aline do Nascimento Lima ', '2018-05-28', 'Antonio Jose Sousa Lima ', 'Angela cruz do Nascimento', 'Rua', 'Recife', '998', 'Nao identificado', '5', 'Canindï¿½', 2),
(317, 'Maria Clara Alves Moreira ', 'maria ', 'Maria Clara Alves Moreira ', '2018-08-08', 'Ronaldo Monteiro Saraiva ', 'Maria Ivaneza Alves Moreira', 'Rua', 'Jose Fellix da Silva', 'Nao indent', 'Nao indentificado', '5', 'Canindï¿½', 2),
(318, 'Paula Vitoria Silva Alves ', 'paula', 'Paula Vitoria Silva Alves ', '2018-05-15', 'Paulo Jhonatan Pinto Alves ', 'Francisca Adernice Pereira Silva  ', 'Rua', 'Joao Batista', 'Nao identi', 'nao indentificado', '5', 'Canindï¿½', 2),
(319, 'Monalisse Felix de Abreu ', 'monalisse', 'Monalisse Felix de Abreu ', '2017-09-15', 'Carlos Barroso de Abreu ', 'Antonia Claudia Alves Felix ', 'Rua', 'joao Batista Rodrigues ', '1196', 'Nao identificado', '5', 'Canindï¿½', 2),
(320, 'Francisco Kaique Sousa Santos ', 'francisco', 'Francisco Kaique Sousa Santos ', '2017-09-17', 'Francisco Mardonio Silva Santos ', 'Simone de Sousa cruz ', 'Rua', 'Joao Batista Rodrigues ', '1376', 'Nao indentificado', '5', 'Canindï¿½', 2),
(321, 'Maria Luiza Gomes Costa ', 'maria', 'Maria Luiza Gomes Costa ', '2018-09-08', 'Raimundo Silva Costa ', 'Antonia Kaline Martins Gomes Costa  ', 'Rua', 'Joao Batista Rodrigues  ', '1468', 'Nao identificado', '5', 'Canindï¿½', 2),
(322, 'Kyara Bernardo Uchoa ', 'kyara', 'Kyara Bernardo Uchoa ', '2017-09-01', 'Eltom Jose Bernardo Alves', 'Ana Claudia teodora', 'Rua', 'General Sampaio ', '2278', 'Nao identificado', '5', 'Canindï¿½', 2),
(323, 'Agatha Maria Almeida Sousa ', 'agatha', 'Agatha Maria Almeida Sousa ', '2018-02-13', 'Andre Victor Silva Sousa ', 'Clara de Almeida Lira', 'Rua', 'Honorio Pereira ', 'Nao indent', 'Nao indentificado', '5', 'Canindï¿½', 2),
(324, 'Samuel Darwin Martins Araujo', 'samuel', 'Samuel Darwin Martins Araujo', '2017-05-31', 'Francisco Araujo Costa ', 'Bruna Pereira Martins Feitosa ', 'Rua', 'Francisco herreira Sampaio', '2376', 'Nao indentificado', '5', 'Canindï¿½', 2),
(325, 'Antonia Michele Leopoldo Santos ', 'antonia', 'Antonia Michele Leopoldo Santos ', '2018-06-28', 'Raimundo salvino dos Santos ', 'Maria do Carmo Bruno Leopoldo ', 'Nao indentificado', 'Nao indentificado', 'Nao indent', 'Nao indentificado', '5', 'Canindï¿½', 2),
(326, 'Matheus Venicius Ribeiro Marciel', 'matheus', 'Matheus Venicius Ribeiro Marciel', '2017-04-30', 'Francisco Edson Pinto Marciel ', 'Francisca Marinara Ribeiro Nascimento', 'Rua', 'Recife', '1086', 'Nao indentificado', '5', 'Canindï¿½', 2),
(327, 'Pedro Willian Nunes Freitas ', 'pedro', 'Pedro Willian Nunes Freitas ', '2017-02-16', 'Aldeci Cristiano Nunes Pereira ', 'Maria Mirella F. Rodrigues ', 'Rua', 'Francisco das Chagas Barros ', '889', 'Nao indentificado', '5', 'Canindï¿½', 2),
(328, 'Maria Julia Sousa Oliveira ', 'maria', 'Maria Julia Sousa Oliveira ', '2016-09-28', 'Jeferson Oliveira ', 'Maria Adriele Sousa Oliveira ', 'Rua', 'Recife', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(329, 'Joao Miguel Araujo ', 'joao', 'Joao Miguel Araujo ', '2016-09-16', 'Francisco de Asis Felix Marciel ', 'Maria Aurinete Araujo Nascimento', 'Rua', 'Recife', '1132', 'Nao identificado', '5', 'Canindï¿½', 2),
(330, 'Naylla Araujo Pereira', 'naylla', 'Naylla Araujo Pereira', '2017-12-22', 'Jose Elmar Borges Pereira ', 'Francisca Nayana da Silva ', 'Rua', 'Joao Militao', '364', 'Nao identificado', '5', 'Canindï¿½', 2),
(331, 'Pedro Luan Almeida Justino', 'pedro', 'Pedro Luan Almeida Justino', '2017-05-22', 'Emanuel Rod. Justino', 'Francisca Claciane A. Almeida', 'Rua', 'Francisco das Chagas Barros ', '1505', 'Bela Vista', '', 'Canindï¿½', 2),
(332, 'Maria Celiane S. Abreu', 'maria', 'Maria Celiane S. Abreu', '2016-10-24', 'Antonio Carlos Alves de Abreu', 'Regiane Bezerra Santos', 'Rua', 'Jose Felix da Silva', 'nao identi', 'Bela Vista', '', 'Canindï¿½', 2),
(333, 'Maria Luiza Gomes Braga', 'maria', 'Maria Luiza Gomes Braga', '2017-04-11', 'Francisco de Assis Duarte Braga', 'Francisca Lucia Ferreira Gomes', 'Rua', 'Da Luz', '92', 'Bela Vista', '', 'Canindï¿½', 2),
(334, 'Maria Emanuele C. Cavalcante ', 'maria', 'Maria Emanuele C. Cavalcante ', '2016-10-27', 'nao identificado ', 'Monica Costa Monteiro', 'nao identificado', 'nao identificado', 'nao identi', 'nao identificado', '', 'Canindï¿½', 2),
(335, 'Francisca Lorrany Bento Freitas', 'francisca', 'Francisca Lorrany Bento Freitas', '2017-09-17', 'Francisco Ilario Freitas Vieira', 'Francisca Raiane B. Cruz', 'Rua', 'Francisco das Chagas Barros ', '1470', 'Bela Vista', '', 'Canindï¿½', 2),
(336, 'Carlos Enrique Macedo Cruz', 'carlos', 'Carlos Enrique Macedo Cruz', '2017-08-18', 'Francisco Anilton Sampaio Cruz', 'Antonia Carliane M. da Silva', 'Rua', 'Ast. Nto', 'nao identi', 'Bela Vista', '', 'Canindï¿½', 2),
(337, 'Victoria Nascimento Uchoa', 'victoris', 'Victoria Nascimento Uchoa', '2016-09-02', 'Francisco Antena Sousa Uchoa', 'Antonia Marciliana do Nascimento', 'Rua', 'General Sampaio', '2228', 'Bela Vista', '', 'Canindï¿½', 2),
(338, 'Samara Lyanna Gomes MendonÃ§a', 'samara', 'Samara Lyanna Gomes MendonÃ§a', '2017-09-20', 'Leandro Almeida MendonÃ§a', 'Sendya Gomes De Sousa', 'Rua', 'Osvaldo Fonseca Coelho', '835', 'Imaculada ConceiÃ§Ã£o', '', 'Canindï¿½', 2),
(339, 'Ana Kevelyn Freitas Silva', 'ana', 'Ana Kevelyn Freitas Silva', '2016-11-09', 'nao identificado', 'nao identificado', 'Travesssa', 'Recife', '1109', 'Bela Vista', '', 'Canindï¿½', 2),
(340, 'Maria Luana Albino Pereira', 'maria', 'Maria Luana Albino Pereira', '2017-09-24', 'nao identificado', 'Francisca Luana Pereira da Silva', 'Rua', 'JoÃ£o Batista Rodrigues', '1597', 'Bela Vista', '', 'Canindï¿½', 2),
(341, 'Maria Iasmim Macedo Rodrigues', 'maria', 'Maria Iasmim Macedo Rodrigues', '2016-12-06', 'Francisco Tiago Rodrigues Justino', 'Maria de FÃ¡tima M. da Silva', 'Rua', 'Virgem dos Pobres', '98', 'Bela Vista', '', 'Canindï¿½', 2),
(342, 'Ivina Mariane Alves de Freitas', 'ivina', 'Ivina Mariane Alves de Freitas', '2017-05-23', 'nao identificado', 'Michele Najila', 'Rua', 'Sao Braz', '1465', 'Boa Vista', '', 'Canindï¿½', 2),
(343, 'Nycullas Gabriel L. Oliveira', 'nycullas', 'Nycullas Gabriel L. Oliveira', '2016-03-19', 'Francisco Antonio Oliveira', 'Regina Claudia Lima', 'Rua', 'Recife', '1230', 'Bela Vista', '', 'Canindï¿½', 2),
(344, 'Nicolas Laurino Lima ', 'nicolas', 'Nicolas Laurino Lima ', '2016-11-25', 'Antonio Alves Lima', 'Ana Caroline Gadelha Laurino', 'Rua', 'Jose Felix da Silva', '949', 'Campinas', '', 'Canindï¿½', 2),
(345, 'Pyetro Samuel Lima O.', 'pyetro', 'Pyetro Samuel Lima O.', '2016-03-19', 'Francisco Antonio Oliveira', 'Regina Claudia Lima', 'Rua', 'Recife ', '1230', 'Bela Vista', '', 'Canindï¿½', 2),
(346, 'Joao Gabriel Pereira da Silva ', 'joao', 'Joao Gabriel Pereira da Silva ', '2016-11-11', 'nao identificado', 'Antonia Solange Pereira Sousa', 'Avenida', 'Luciano MagalhÃ£es', '137', 'Bela Vista', '', 'Canindï¿½', 2),
(347, 'Ewillen Lavigne Lopes Fonseca', 'ewillen', 'Ewillen Lavigne Lopes Fonseca', '2016-11-20', 'nao identificado', 'Raiane da Silva Lopes ', 'Rua', 'Joao Batista Rodrigues ', '1187', 'Campinas', '', 'Canindï¿½', 2),
(348, 'Francisco Pietro Duarte Rocha ', 'francisco', 'Francisco Pietro Duarte Rocha ', '2016-10-03', 'Ederson Ferreira Rocha ', 'Edivania Duarte Abreu', 'Rua', 'Jose Candaia ', '1548', 'Bela Vista', '', 'Canindï¿½', 2),
(349, 'Tomas Honorio Luiz ', 'tomas', 'Tomas Honorio Luiz ', '2018-08-10', 'Antonio Leandro Santos Luz', 'Francisca Joscilene Silva Honorio', 'Travessa', 'General Sampaio', '2360', 'Bela Vista', '', 'Canindï¿½', 2),
(350, 'Hannah Ribeiro Freitas', 'hannah', 'Hannah Ribeiro Freitas', '2011-06-20', 'Francisco Thiago Sousa Freitas', 'Wliane R. dos Santos', 'Rua', 'Honorio Pereira', '835', 'Bela Vista', '', 'Canindï¿½', 2),
(351, 'Paloma Pereira Gomes', 'paloma', 'Paloma Pereira Gomes', '2017-06-04', 'nao identificado', 'Ludiane Gomes de Sousa', 'Rua', 'General Sampaio', 'nao identi', 'Bela Vista', '', 'Canindï¿½', 2),
(352, 'Paulo Ryan Maciel da Silva', 'paulo', 'Paulo Ryan Maciel da Silva', '2018-02-21', 'Francisco Valber Pereira da Silva ', 'Rosana Maciel de Sousa', 'Rua', 'Honorio Pereira da Silva', '809', 'Campinas', '', 'Canindï¿½', 2),
(353, 'Ana Kevelyn Freitas Silva', 'ana', 'Ana Kevelyn Freitas Silva', '2016-11-09', 'Francisco Naelo Freitas Ferreira ', 'Maria Maiara Araujo Silva', 'Travessa', 'Recife', '1091', 'Bela Vista', '', 'Canindï¿½', 2),
(354, 'Ana Julia Ribeiro dos Santos', 'ana', 'Ana Julia Ribeiro dos Santos', '2017-09-28', 'Manuel Alam dos Santos', 'Juliete Julia Ribeiro dos Santos', 'Rua', 'Francisco das Chagas Barros ', 'nao identi', 'Bela Vista', '', 'Canindï¿½', 2),
(355, 'Francisco Ruan Silva Paulino ', 'francisco', 'Francisco Ruan Silva Paulino ', '2017-05-11', 'nao identificado', 'Francisca Iranilde da Silva Paulino', 'Rua', 'Recife', '1467', 'Bela Vista', '', 'Canindï¿½', 2),
(356, 'Matheus Vinicius Ribeiro Marciel', 'matheus', 'Matheus Vinicius Ribeiro Marciel', '2017-04-30', 'Francisco Edson Pinto Marciel', 'Francisca Marinara Ribeiro Nascimento', 'Rua', 'Recife', '1086', 'Campinas', '5', 'Canindï¿½', 2),
(357, 'Dafine Raele Gomes Macedo', 'dafine', 'Dafine Raele Gomes Macedo', '2018-12-13', 'JosÃ© Eriveltom Macedo de Moreira', 'Antonia Liziane Gomes de Sousa', 'Travessa', 'General Sampaio', '2369', 'Bela Vista', '5', 'Canindï¿½', 2),
(358, 'Ana Lara Guedes Cavalcante', 'ana', 'Ana Lara Guedes Cavalcante', '2017-11-03', 'Hutison Pereira Cavalcante', 'Larisa Guedes Martins', 'Avenida', 'Luciano Magalhaes', 'Nao identi', 'Nao identificado', '5', 'Canindï¿½', 2),
(359, 'Davi Lucas Umbelino Almeida', 'davi', 'Davi Lucas Umbelino Almeida', '2017-11-26', 'Nao identificado', 'Carla Leticia Umbelino', 'Rua', 'Francisco Ferreira Sampaio', '1693', 'Bela Vista', '5', 'Canindï¿½', 2),
(361, 'Francisco Ruan Silva Pinheiro', 'francisco', 'Francisco Ruan Silva Pinheiro', '2017-05-11', 'Nao identificado', 'Francisca Ivanilde da Silva Paulino', 'Rua', 'Recife', '1468', 'Bela Vista', '5', 'Canindï¿½', 2),
(362, 'Francisco Adriel Barros Gomes', 'francisco', 'Francisco Adriel Barros Gomes', '2017-05-08', 'Francisco Andre Gomes Ferreira', 'Raquel Silva Barros Gomes', 'Rua', 'CÃ©lio Martins', '1255', 'Bela Vista', '5', 'Canindï¿½', 2),
(363, 'Damares Gomes Barboza', 'damares', 'Damares Gomes Barboza', '2017-07-24', 'Jose Leonardo Santiago Barbosa', 'Antonia Liliane Gomes Sousa', 'Travessa', 'General Sampaio', '2373', 'Bela Vista', '5', 'Canindï¿½', 2),
(364, 'Pedro Henrique Alves Saldanha', 'pedro', 'Pedro Henrique Alves Saldanha', '2017-07-11', 'Antonio Luiz', 'Fabiola Alves', 'Travessa', 'Celio Martins', '81', 'Bela Vista', '5', 'Canindï¿½', 2),
(365, 'Francisca Cecilia Silva Uchoa', 'francisca', 'Francisca Cecilia Silva Uchoa', '2017-05-07', 'Antonio Ivam Alves da Silva', 'Maria Ednete Uchoa', 'Rua', 'General Sampaio', '2316', 'Bela Vista', '5', 'Canindï¿½', 2),
(366, 'Enzo Gabriel Santos Barbosa', 'enzo', 'Enzo Gabriel Santos Barbosa', '2017-01-10', 'Francisco Iranildo de Sousa', 'Vitoria Barbosa de Sousa', 'Rua', 'Romerao', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(367, 'Carlos Erique Macedo Cruz', 'carlos', 'Carlos Erique Macedo Cruz', '2017-08-18', 'Francisco Anilton Sampaio Cruz', 'Antonia Carliane Maria da Silva', 'Assentamento', 'Nossa Senhora de Fatima', 'Nao identi', 'Bela Vista', '5', 'Canindï¿½', 2),
(368, 'Ana Levis Vieira de Sousa', 'ana', 'Ana Levi Vieira de Sousa', '2017-01-09', 'Fred Moirdy Saraiva de Sousa', 'Daiane da Silva Vieira', 'Rua', 'Serafim', '484', 'Bela Vista', '5', 'Canindï¿½', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_psf`
--

DROP TABLE IF EXISTS `tb_psf`;
CREATE TABLE IF NOT EXISTS `tb_psf` (
  `psf_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_sec_id` int(11) DEFAULT NULL,
  `psf_senha` varchar(250) NOT NULL,
  `psf_login` varchar(250) NOT NULL,
  PRIMARY KEY (`psf_id`),
  KEY `fk_sec_id` (`fk_sec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_psf`
--

INSERT INTO `tb_psf` (`psf_id`, `fk_sec_id`, `psf_senha`, `psf_login`) VALUES
(1, NULL, '123', 'dougPSF'),
(2, NULL, 'conjunto', 'UBS conjunto habtacional');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rotas`
--

DROP TABLE IF EXISTS `tb_rotas`;
CREATE TABLE IF NOT EXISTS `tb_rotas` (
  `rot_id` int(11) NOT NULL,
  `rot_fk_age` int(11) NOT NULL,
  `rot_desI` varchar(250) DEFAULT NULL,
  `rot_desF` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`rot_id`),
  KEY `rot_fk_age` (`rot_fk_age`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_secretaria`
--

DROP TABLE IF EXISTS `tb_secretaria`;
CREATE TABLE IF NOT EXISTS `tb_secretaria` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `sec_login` varchar(250) NOT NULL,
  `sec_senha` varchar(250) NOT NULL,
  `sec_cidade` varchar(250) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_secretaria`
--

INSERT INTO `tb_secretaria` (`sec_id`, `sec_login`, `sec_senha`, `sec_cidade`) VALUES
(1, 'dougSEC', '123', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vacina`
--

DROP TABLE IF EXISTS `tb_vacina`;
CREATE TABLE IF NOT EXISTS `tb_vacina` (
  `vac_id` int(11) NOT NULL AUTO_INCREMENT,
  `vac_nome` varchar(250) NOT NULL,
  `vac_min` varchar(250) NOT NULL,
  `vac_max` varchar(250) NOT NULL,
  PRIMARY KEY (`vac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_vacina`
--

INSERT INTO `tb_vacina` (`vac_id`, `vac_nome`, `vac_min`, `vac_max`) VALUES
(1, 'BCG', '0', '0'),
(2, 'Hepatite B', '0', '0'),
(3, 'Anti-polio', '0', '0'),
(4, 'Tetravalente DTP+Hib', '0', '0'),
(5, 'Pneumocócica 10 Valente', '0', '0'),
(6, 'Febre Amarela', '0', '0'),
(7, 'Triplice Viral', '0', '0'),
(8, 'Rotavirus', '0', '0'),
(9, 'Penta', '0', '0'),
(10, 'VIP', '0', '0'),
(11, 'Hepatite A', '0', '0'),
(12, 'Meningocócica C', '0', '0'),
(13, 'DTP', '0', '0'),
(14, 'H1N1', '0', '0'),
(15, 'Vop', '0', '0'),
(16, 'Varicela', '0', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vacinacao`
--

DROP TABLE IF EXISTS `tb_vacinacao`;
CREATE TABLE IF NOT EXISTS `tb_vacinacao` (
  `inj_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_vac_id` int(11) DEFAULT NULL,
  `fk_pop_id` int(11) DEFAULT NULL,
  `inj_data` date NOT NULL,
  PRIMARY KEY (`inj_id`),
  KEY `fk_vac_id` (`fk_vac_id`),
  KEY `fk_pop_id` (`fk_pop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=257 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_vacinacao`
--

INSERT INTO `tb_vacinacao` (`inj_id`, `fk_vac_id`, `fk_pop_id`, `inj_data`) VALUES
(1, 1, 86, '2018-04-25'),
(2, 2, 86, '2018-04-25'),
(3, 3, 86, '2018-06-26'),
(4, 4, 86, '2018-06-26'),
(5, 5, 86, '2018-06-26'),
(6, 6, 86, '2018-08-16'),
(7, 8, 86, '2018-06-26'),
(8, 3, 86, '2018-09-14'),
(9, 4, 86, '2018-09-14'),
(10, 6, 86, '2018-08-16'),
(11, 5, 86, '2018-09-14'),
(12, 8, 86, '2018-09-14'),
(13, 1, 368, '2017-01-09'),
(14, 2, 368, '2017-01-09'),
(15, 3, 368, '2017-03-13'),
(16, 4, 368, '2017-03-13'),
(17, 5, 368, '2017-03-13'),
(18, 8, 368, '2017-03-13'),
(19, 3, 368, '2017-08-11'),
(20, 4, 368, '2017-05-11'),
(21, 5, 368, '2017-05-11'),
(22, 8, 368, '2017-05-11'),
(23, 3, 368, '2017-07-25'),
(24, 4, 368, '2017-04-25'),
(25, 12, 368, '2017-05-28'),
(26, 12, 368, '2017-07-14'),
(27, 1, 354, '2017-09-29'),
(28, 2, 354, '2017-09-29'),
(29, 3, 354, '2017-11-28'),
(30, 4, 354, '2017-11-28'),
(31, 5, 354, '2017-11-28'),
(32, 8, 354, '2017-11-28'),
(33, 3, 354, '2018-02-28'),
(34, 4, 354, '2018-05-02'),
(35, 5, 354, '2018-01-28'),
(36, 8, 354, '2018-02-28'),
(37, 4, 354, '2018-05-02'),
(38, 1, 366, '2017-01-11'),
(39, 2, 366, '2017-01-11'),
(40, 3, 366, '2017-03-10'),
(41, 4, 366, '2017-03-10'),
(42, 5, 366, '2017-03-10'),
(43, 12, 366, '2017-04-10'),
(44, 7, 366, '2018-01-15'),
(45, 8, 366, '2017-03-10'),
(46, 3, 366, '2017-05-10'),
(47, 4, 366, '2017-05-10'),
(48, 5, 366, '2017-05-10'),
(49, 12, 366, '2017-07-11'),
(50, 7, 366, '2017-10-06'),
(51, 8, 366, '2017-05-10'),
(52, 3, 366, '2017-07-11'),
(53, 4, 366, '2017-07-11'),
(54, 5, 366, '2018-01-15'),
(55, 12, 366, '2018-05-08'),
(56, 3, 366, '2018-05-08'),
(57, 13, 366, '2018-05-08'),
(58, 1, 364, '2017-07-15'),
(59, 2, 364, '2017-07-15'),
(60, 3, 364, '2017-09-13'),
(61, 9, 364, '2017-09-13'),
(62, 5, 364, '2017-09-13'),
(63, 12, 364, '2017-12-13'),
(64, 7, 364, '2018-08-01'),
(65, 8, 364, '2017-09-13'),
(66, 3, 364, '2017-11-13'),
(67, 9, 364, '2017-11-13'),
(68, 5, 364, '2017-11-13'),
(69, 12, 364, '2018-02-20'),
(70, 7, 364, '2018-09-10'),
(71, 8, 364, '2017-11-13'),
(72, 3, 364, '2018-02-20'),
(73, 9, 364, '2018-04-11'),
(74, 5, 364, '2018-08-01'),
(75, 12, 364, '2018-08-01'),
(76, 1, 321, '2018-09-10'),
(77, 2, 321, '2018-09-10'),
(78, 3, 329, '2016-11-16'),
(79, 4, 329, '2016-11-16'),
(80, 5, 329, '2016-11-16'),
(81, 12, 329, '2017-01-03'),
(82, 1, 329, '2016-09-16'),
(83, 2, 329, '2016-09-16'),
(84, 3, 329, '2017-01-16'),
(85, 4, 329, '2017-01-16'),
(86, 5, 329, '2017-01-16'),
(87, 8, 329, '2017-01-16'),
(88, 1, 363, '2017-07-24'),
(89, 2, 363, '2017-07-24'),
(90, 3, 363, '2017-10-09'),
(91, 4, 363, '2017-10-09'),
(92, 5, 363, '2017-10-09'),
(93, 12, 363, '2017-10-30'),
(94, 7, 363, '2018-07-24'),
(95, 8, 363, '2017-10-09'),
(96, 3, 363, '2017-12-07'),
(97, 4, 363, '2017-12-07'),
(98, 5, 363, '2017-12-07'),
(99, 12, 363, '2018-01-08'),
(100, 7, 363, '2018-08-07'),
(101, 8, 363, '2018-01-08'),
(102, 3, 363, '2018-02-19'),
(103, 4, 363, '2018-04-19'),
(104, 5, 363, '2018-07-24'),
(105, 12, 363, '2018-07-24'),
(106, 15, 363, '2018-08-07'),
(107, 1, 349, '2018-08-11'),
(108, 2, 349, '2018-08-11'),
(109, 9, 349, '2018-10-10'),
(110, 10, 349, '2018-10-20'),
(111, 5, 349, '2018-11-12'),
(112, 8, 349, '2018-10-10'),
(113, 12, 349, '2018-11-12'),
(114, 1, 357, '2017-12-13'),
(115, 2, 357, '2017-12-13'),
(116, 15, 357, '2018-02-19'),
(117, 8, 357, '2018-02-19'),
(118, 1, 358, '2017-11-04'),
(119, 2, 358, '2017-11-04'),
(120, 3, 358, '2018-01-10'),
(121, 4, 358, '2018-01-10'),
(122, 5, 358, '2018-01-10'),
(123, 12, 358, '2018-02-07'),
(124, 8, 358, '2018-01-10'),
(125, 3, 358, '2018-03-09'),
(126, 4, 358, '2018-03-09'),
(127, 5, 358, '2018-03-09'),
(128, 12, 358, '2018-04-13'),
(129, 8, 358, '2018-03-09'),
(130, 1, 314, '2018-04-30'),
(131, 2, 314, '2018-04-30'),
(132, 10, 314, '2018-07-03'),
(134, 4, 314, '2018-09-03'),
(135, 5, 314, '2018-07-03'),
(136, 12, 314, '2018-08-03'),
(137, 10, 314, '2018-09-03'),
(138, 4, 314, '2018-10-08'),
(139, 5, 314, '2018-09-03'),
(140, 12, 314, '2018-10-08'),
(141, 8, 314, '2018-07-03'),
(142, 8, 314, '2018-09-03'),
(143, 1, 315, '2018-05-29'),
(144, 2, 315, '2018-05-29'),
(145, 9, 315, '2018-09-12'),
(146, 10, 315, '2018-08-07'),
(147, 5, 315, '2018-08-07'),
(148, 8, 315, '2018-08-07'),
(149, 12, 315, '2018-09-12'),
(150, 9, 315, '2018-10-15'),
(151, 10, 315, '2018-10-15'),
(152, 5, 315, '2018-10-15'),
(153, 8, 315, '2018-10-15'),
(154, 1, 299, '2018-03-06'),
(156, 2, 299, '2018-03-06'),
(157, 10, 299, '2018-05-07'),
(158, 4, 299, '2018-07-24'),
(159, 5, 299, '2018-05-07'),
(160, 8, 299, '2018-05-07'),
(161, 10, 299, '2018-07-24'),
(162, 4, 299, '2018-08-27'),
(163, 5, 299, '2018-07-24'),
(164, 8, 299, '2018-07-24'),
(165, 10, 299, '2018-10-11'),
(166, 4, 299, '2018-10-11'),
(167, 12, 299, '2018-06-06'),
(168, 12, 299, '2018-08-27'),
(169, 1, 77, '2018-02-26'),
(170, 2, 77, '2018-09-12'),
(171, 3, 77, '2018-04-17'),
(172, 3, 77, '2018-06-17'),
(173, 4, 77, '2018-04-17'),
(174, 4, 77, '2018-06-17'),
(175, 5, 77, '2018-04-17'),
(176, 5, 77, '2018-06-17'),
(177, 12, 77, '2018-05-17'),
(178, 8, 77, '2018-04-17'),
(179, 8, 77, '2018-04-17'),
(180, 1, 311, '2019-09-12'),
(181, 2, 311, '2018-09-12'),
(182, 9, 311, '2018-01-14'),
(183, 10, 311, '2018-01-14'),
(184, 5, 311, '2018-01-14'),
(185, 8, 311, '2018-01-14'),
(186, 12, 311, '2018-01-14'),
(187, 1, 310, '2018-06-10'),
(188, 2, 310, '2018-06-10'),
(189, 9, 310, '2018-09-12'),
(190, 9, 310, '2018-09-12'),
(191, 9, 310, '2018-11-12'),
(192, 10, 310, '2018-08-14'),
(193, 10, 310, '2018-10-11'),
(194, 10, 310, '2018-12-11'),
(195, 5, 310, '2018-08-14'),
(196, 5, 310, '2018-10-11'),
(197, 8, 310, '2018-08-14'),
(198, 8, 310, '2018-10-11'),
(199, 12, 310, '2018-09-12'),
(200, 12, 310, '2018-11-12'),
(201, 1, 309, '2018-04-27'),
(202, 2, 309, '2018-04-27'),
(203, 3, 309, '2018-06-26'),
(204, 3, 309, '2018-08-28'),
(205, 3, 309, '2018-10-28'),
(206, 4, 309, '2018-06-26'),
(207, 4, 309, '2018-08-28'),
(208, 4, 309, '2018-10-28'),
(209, 5, 309, '2018-06-26'),
(210, 5, 309, '2018-08-28'),
(211, 12, 309, '2018-07-27'),
(212, 12, 309, '2018-09-27'),
(213, 7, 309, '2018-04-26'),
(214, 8, 309, '2018-06-26'),
(215, 8, 309, '2018-08-28'),
(216, 1, 300, '2018-09-10'),
(217, 2, 300, '2018-09-10'),
(218, 1, 308, '2018-04-06'),
(219, 2, 308, '2018-04-27'),
(220, 3, 308, '2018-06-26'),
(221, 3, 308, '2018-08-28'),
(222, 3, 308, '2018-10-28'),
(223, 4, 308, '2018-06-26'),
(224, 4, 308, '2018-08-28'),
(225, 4, 308, '2018-10-28'),
(226, 5, 308, '2018-06-26'),
(227, 5, 308, '2018-08-28'),
(228, 12, 308, '2018-07-27'),
(229, 12, 308, '2018-09-27'),
(230, 7, 308, '2018-04-26'),
(231, 8, 308, '2018-06-26'),
(232, 8, 308, '2018-08-31'),
(234, 1, 51, '2017-06-29'),
(235, 2, 51, '2017-06-29'),
(236, 10, 51, '2017-08-28'),
(237, 10, 51, '2017-10-30'),
(238, 10, 51, '2018-01-28'),
(239, 9, 51, '2017-08-28'),
(240, 9, 51, '2017-10-30'),
(241, 9, 51, '2018-08-28'),
(242, 12, 51, '2017-09-27'),
(243, 12, 51, '2017-11-27'),
(244, 12, 51, '2018-08-14'),
(245, 7, 51, '2018-08-14'),
(246, 7, 51, '2018-11-26'),
(247, 8, 51, '2018-08-28'),
(248, 8, 51, '2018-10-30'),
(249, 11, 51, '2018-10-26'),
(250, 1, 49, '2016-12-09'),
(251, 2, 49, '2016-12-09'),
(252, 15, 49, '2017-02-13'),
(253, 9, 49, '2017-02-13'),
(254, 5, 49, '2017-02-13'),
(255, 9, 49, '2017-02-13'),
(256, 1, 8, '2018-07-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_visita`
--

DROP TABLE IF EXISTS `tb_visita`;
CREATE TABLE IF NOT EXISTS `tb_visita` (
  `vis_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_age_id` int(11) DEFAULT NULL,
  `fk_pop_id` int(11) DEFAULT NULL,
  `vis_data` date DEFAULT NULL,
  PRIMARY KEY (`vis_id`),
  KEY `fk_age_id` (`fk_age_id`),
  KEY `fk_pop_id` (`fk_pop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_psf`
--
ALTER TABLE `tb_psf`
  ADD CONSTRAINT `tb_psf_ibfk_1` FOREIGN KEY (`fk_sec_id`) REFERENCES `tb_secretaria` (`sec_id`);

--
-- Limitadores para a tabela `tb_rotas`
--
ALTER TABLE `tb_rotas`
  ADD CONSTRAINT `tb_rotas_ibfk_1` FOREIGN KEY (`rot_fk_age`) REFERENCES `tb_agente` (`age_id`);

--
-- Limitadores para a tabela `tb_vacinacao`
--
ALTER TABLE `tb_vacinacao`
  ADD CONSTRAINT `tb_vacinacao_ibfk_1` FOREIGN KEY (`fk_vac_id`) REFERENCES `tb_vacina` (`vac_id`),
  ADD CONSTRAINT `tb_vacinacao_ibfk_2` FOREIGN KEY (`fk_pop_id`) REFERENCES `tb_populacao` (`pop_id`),
  ADD CONSTRAINT `tb_vacinacao_ibfk_3` FOREIGN KEY (`fk_pop_id`) REFERENCES `tb_populacao` (`pop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_visita`
--
ALTER TABLE `tb_visita`
  ADD CONSTRAINT `tb_visita_ibfk_1` FOREIGN KEY (`fk_age_id`) REFERENCES `tb_agente` (`age_id`),
  ADD CONSTRAINT `tb_visita_ibfk_2` FOREIGN KEY (`fk_pop_id`) REFERENCES `tb_populacao` (`pop_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
