-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Maio-2019 às 03:06
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
-- Database: `projeto_registro_convite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `codigo` varchar(32) DEFAULT NULL,
  `convidados` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `codigo`, `convidados`) VALUES
(32, 'urubu@gmail.com', '202cb962ac59075b964b07152d234b70', 'ee11967cc0aa3a094f9bfeded7ab3a7e', 0),
(31, 'jubileu@gmail.com', '202cb962ac59075b964b07152d234b70', 'a57ed1e0c0d6006b7305d67f6ba763fc', 0),
(30, 'novo@gmail.com', '202cb962ac59075b964b07152d234b70', '3686164d0846d591113486981d6cef61', 5),
(33, 'zumbi@gmail.com', '202cb962ac59075b964b07152d234b70', 'bd465cd59f7377ae70a3d766ebd8ff4e', 0),
(34, 'iury@gmail.com', '202cb962ac59075b964b07152d234b70', '06a7a4614be4559b1a67e8e093ca1f23', 0),
(35, 'oloko@gmail.com', '202cb962ac59075b964b07152d234b70', '59799a0db8d5bbe1f1757315aed1e11c', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
