-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26-Jun-2019 às 12:57
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario`
--

DROP TABLE IF EXISTS `questionario`;
CREATE TABLE IF NOT EXISTS `questionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participante` varchar(100) NOT NULL,
  `pergunta` varchar(40) NOT NULL,
  `resposta_participante` varchar(40) NOT NULL,
  `resposta_correta` varchar(40) NOT NULL,
  `data_cadastro` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questionario`
--

INSERT INTO `questionario` (`id`, `participante`, `pergunta`, `resposta_participante`, `resposta_correta`, `data_cadastro`) VALUES
(1, 'Bruna', 'Questao 01', 'a', 'Questao 1 errada', '2019-06-25'),
(2, 'Bruna', 'Questao 02', 'c', 'Questao 2 errada', '2019-06-25'),
(3, 'Bruna', 'Questao 03', 'b', 'Questao 3 correta', '2019-06-25'),
(4, 'Bruna', 'Questao 04', 'c', 'Questao 4 errada', '2019-06-25'),
(5, 'Bruna', 'Questao 05', 'c', 'Questao 5 errada', '2019-06-25'),
(6, 'Bruna', 'Questao 06', 'b', 'Questao 6 errada', '2019-06-25'),
(7, 'Bruna', 'Questao 07', 'b', 'Questao 7 errada', '2019-06-25'),
(8, 'Bruna', 'Questao 08', 'a', 'Questao 8 errada', '2019-06-25'),
(9, 'sara', 'Questao 01', 'b', 'Questao 1 errada', '2019-06-25'),
(10, 'sara', 'Questao 02', 'c', 'Questao 2 errada', '2019-06-25'),
(11, 'sara', 'Questao 03', 'b', 'Questao 3 correta', '2019-06-25'),
(12, 'sara', 'Questao 04', 'd', 'Questao 4 correta', '2019-06-25'),
(13, 'sara', 'Questao 05', 'b', 'Questao 5 correta', '2019-06-25'),
(14, 'sara', 'Questao 06', 'c', 'Questao 6 errada', '2019-06-25'),
(15, 'sara', 'Questao 07', 'a', 'Questao 7 errada', '2019-06-25'),
(16, 'sara', 'Questao 08', 'c', 'Questao 8 errada', '2019-06-25'),
(17, 'cici', 'Questao 01', 'a', 'Questao 1 errada', '2019-06-26'),
(18, 'cici', 'Questao 02', 'a', 'Questao 2 errada', '2019-06-26'),
(19, 'cici', 'Questao 03', 'c', 'Questao 3 errada', '2019-06-26'),
(20, 'cici', 'Questao 04', 'a', 'Questao 4 errada', '2019-06-26'),
(21, 'cici', 'Questao 05', 'c', 'Questao 5 errada', '2019-06-26'),
(22, 'cici', 'Questao 06', 'a', 'Questao 6 correta', '2019-06-26'),
(23, 'cici', 'Questao 07', 'b', 'Questao 7 errada', '2019-06-26'),
(24, 'cici', 'Questao 08', 'b', 'Questao 8 correta', '2019-06-26'),
(25, 'cici', 'Questao 01', 'a', 'Questao 1 errada', '2019-06-26'),
(26, 'cici', 'Questao 02', 'a', 'Questao 2 errada', '2019-06-26'),
(27, 'cici', 'Questao 03', 'b', 'Questao 3 correta', '2019-06-26'),
(28, 'cici', 'Questao 04', 'b', 'Questao 4 errada', '2019-06-26'),
(29, 'cici', 'Questao 05', 'c', 'Questao 5 errada', '2019-06-26'),
(30, 'cici', 'Questao 06', 'c', 'Questao 6 errada', '2019-06-26'),
(31, 'cici', 'Questao 07', 'b', 'Questao 7 errada', '2019-06-26'),
(32, 'cici', 'Questao 08', 'b', 'Questao 8 correta', '2019-06-26'),
(33, 'cristian', 'Questao 01', 'c', 'Questao 1 correta', '2019-06-26'),
(34, 'cristian', 'Questao 02', 'a', 'Questao 2 errada', '2019-06-26'),
(35, 'cristian', 'Questao 03', 'a', 'Questao 3 errada', '2019-06-26'),
(36, 'cristian', 'Questao 04', 'b', 'Questao 4 errada', '2019-06-26'),
(37, 'cristian', 'Questao 05', 'b', 'Questao 5 correta', '2019-06-26'),
(38, 'cristian', 'Questao 06', 'a', 'Questao 6 correta', '2019-06-26'),
(39, 'cristian', 'Questao 07', 'a', 'Questao 7 errada', '2019-06-26'),
(40, 'cristian', 'Questao 08', 'c', 'Questao 8 errada', '2019-06-26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `sobrenome` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `confirmasenha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`, `confirmasenha`) VALUES
(10, 'cici', 'silva', 'cisi@gmail.com', '63d6c4438a77f60a95d61795f5e41a4b', '63d6c4438a77f60a95d61795f5e41a4b'),
(9, 'cici', 'pepa', 'cipe@gmail.com', 'c4e4f549feea2ca1420d6118790c0500', 'c4e4f549feea2ca1420d6118790c0500'),
(8, 'anna', 'armani', 'anna@gmail.com', 'e2bbf04de6627492ddaef7012eeac10f', 'e2bbf04de6627492ddaef7012eeac10f'),
(7, 'Bruna', 'Carolina', 'bruno@gmail.com', 'd2104a400c7f629a197f33bb33fe80c0', 'd2104a400c7f629a197f33bb33fe80c0'),
(5, 'cici', 'pipi', 'cipi@gmail.com', '72665d2d223d600773abcd711e07504c', 'd59ba96b9750df0b6085f5b2ab0d5271'),
(6, 'cristi', 'bbuuuuu', 'cribb@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'cici', 'pipi', 'cipi@gmail.com', '702e4946e6db9b7a74b921fe85e83f32', '702e4946e6db9b7a74b921fe85e83f32'),
(12, 'cipe', 'sapo', 'cito@gmail.com', '702e4946e6db9b7a74b921fe85e83f32', '702e4946e6db9b7a74b921fe85e83f32'),
(13, 'bruna', 'sofredora', 'bruna@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'bruna', 'Conte', 'brunaconte@gmail.com', '3059934dec8019077a14957c05d0c541', '3059934dec8019077a14957c05d0c541'),
(15, 'cici', 'coco', 'cico@gmail.com', 'd0b2a28037e45eb8e3f1ea99d291b97a', 'd0b2a28037e45eb8e3f1ea99d291b97a'),
(16, 'vava', 'nini', 'vani@gmail.com', '16d5d24f5b09a1991bd4e5f57bf11237', '16d5d24f5b09a1991bd4e5f57bf11237'),
(17, 'Sara', 'Piasseski', 'sara@gmail.com', '98ba5150709f5d78212cd07d234cfb98', '98ba5150709f5d78212cd07d234cfb98'),
(18, 'Cissa', 'lala', 'cila@gmail.com', '702e4946e6db9b7a74b921fe85e83f32', '702e4946e6db9b7a74b921fe85e83f32'),
(19, 'cristian', 'colatto', 'cristiancolatto@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
