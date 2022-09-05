-- phpMyAdmin SQL


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patrimonio`
--
CREATE DATABASE IF NOT EXISTS `patrimonio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `patrimonio`;

-- --------------------------------------------------------

--
-- Table structure for table `equipamentosPatrimonio`
--
DROP TABLE IF EXISTS `usuarioPatrimonio`;
CREATE TABLE IF NOT EXISTS `usuarioPatrimonio` (
  Id_user int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  UsuarioLogin varchar(20) UNIQUE KEY NOT NULL,
  UsuarioSenha varchar(20) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `equipamentosPatrimonio`;
CREATE TABLE IF NOT EXISTS `equipamentosPatrimonio` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `marca` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `outros` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `processador` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `memoria` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `disco` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partNumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serialNumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagNumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adicional` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sistemaOperacional` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `garantia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `projeto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `financiador` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `loja` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notaFiscal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `patrimonio` text COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auipamentosPatrimonio`
--

INSERT INTO `equipamentosPatrimonio` (`id`, `marca`, `modelo`, `categoria`, `outros`, `processador`, `complemento`, `memoria`, `disco`, `monitor`, `partNumber`, `serialNumber`, `tagNumber`, `adicional`,`sistemaOperacional`, `ano`, `garantia`, `projeto`,`financiador`, `loja`, `notaFiscal`, `data`, `quantidade`, `patrimonio`) VALUES
(1, 'marca1', 'modelo1', 'categoria1', 'outros1', 'processador1', 'complemento1', 'memoria1', 'disco1', 'monitor1', 'partNumber1', 'serialNumber1', 'tagNumber1', 'adicional','sistemaOperacional1', 'ano1', 'garantia1', 'projeto1','financiador1', 'loja1', 'notaFiscal1', 'data1', 'quantidade1', 'patrimonio1');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
