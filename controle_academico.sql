-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Set-2015 às 23:38
-- Versão do servidor: 5.5.34
-- versão do PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `controle_academico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `ra` int(11) NOT NULL AUTO_INCREMENT,
  `curso` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `telefone` smallint(6) NOT NULL,
  PRIMARY KEY (`ra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `disciplina` int(11) NOT NULL,
  `descricao` varchar(40) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `professor` int(11) NOT NULL,
  `descricao` varchar(40) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `telefone` smallint(6) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `aluno`.`aluno` (`ra`, `curso`, `nome`, `endereco`, `telefone`) 
VALUES ('1', '1', 'Wanderson da Silva Rodrigues', 'Rua Alfredo Marcacine 452', '3491397616');

INSERT INTO `curso`.`curso` (`codigo`, `disciplina`, `descricao`) 
VALUES ('1', '1', 'Sistemas de Informação');

INSERT INTO `disciplina`.`disciplina` (`codigo`, `professor`, `descricao`) 
VALUES ('1', '1', 'Aplicações para Internet');

INSERT INTO `professor`.`professor` (`codigo`, `nome`, `endereco`, `telefone`) 
VALUES ('1', 'Joabe Fuzaro', 'Avenida Nenê Sabino', '3433187666');