-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 20/10/2015 às 09:03
-- Versão do servidor: 5.5.38-35.2
-- Versão do PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `rizom491_tutorblog`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` bigint(20) unsigned NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nome` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `ponto` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `telefone` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `avalia` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tar1` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tar2` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tar3` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tar4` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tar5` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tar6` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tar7` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tar8` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tar9` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
