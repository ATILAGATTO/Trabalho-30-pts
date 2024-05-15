-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema website
--

CREATE DATABASE IF NOT EXISTS website;
USE website;

--
-- Definition of table `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE `adm` (
  `idadm` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `telefone` varchar(16) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cadastro` datetime DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idadm`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adm`
--

/*!40000 ALTER TABLE `adm` DISABLE KEYS */;
INSERT INTO `adm` (`idadm`,`nome`,`telefone`,`senha`,`cadastro`,`alteracao`,`ativo`) VALUES 
 (1,'adm','33999122843','$2y$12$vqFcBT0ieH6byCjtF7giGuj7eEjsz3eQ8aYZzGpvxnFV9Qb7sL6au','2024-05-14 13:50:31','2024-05-14 13:53:08','A');
/*!40000 ALTER TABLE `adm` ENABLE KEYS */;


--
-- Definition of table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `idbanner` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(145) NOT NULL DEFAULT '',
  `cadastro` datetime DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idbanner`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` (`idbanner`,`foto`,`cadastro`,`alteracao`,`ativo`) VALUES 
 (1,'banner.jpg','2024-05-14 14:40:17','2024-05-14 15:03:36','A');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;


--
-- Definition of table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idcliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`idcliente`,`nome`,`telefone`) VALUES 
 (1,'sdfsdf','343434'),
 (2,'sdfsdf','454545'),
 (3,'sdfsdfff','56676'),
 (4,'dggggfh','676767'),
 (5,'dfgdfgfdg','67567567'),
 (6,'dfgdfg','567657'),
 (7,'dfgdgdfg','56757567567657'),
 (8,'dfgdfgdgdfg','67576576576575');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


--
-- Definition of table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `idProdutos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `preco` varchar(45) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idProdutos`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produtos`
--

/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`idProdutos`,`nome`,`foto`,`preco`,`descricao`,`ativo`,`alteracao`) VALUES 
 (1,'Arroz','arroz.webp','28','5kg Arroz Namorado','A','2024-05-14 14:40:17'),
 (2,'Feijão','feijão.jpg','9','1kg Feijão Carioca','A','2024-05-14 14:40:17'),
 (3,'Macarrao','macarrao.jpg','5','Macarrão Renata com ovos','A','2024-05-14 14:40:17'),
 (4,'Picanha','picanha.jpg','48','Picanha do lula','A','2024-05-14 14:40:17'),
 (5,'Iogorte','iogurte.jpg','5','Iogurte Nestle 6 uni','A','2024-05-14 14:40:17'),
 (6,'Refri Coca-cola','cocacola.jpg','7','Refrigerante Coca-Cola 2L','A','2024-05-14 14:40:17'),
 (7,'Vinho','vinho.jpg','18','Vinho Pergola uva bordo 750ml','A','2024-05-14 14:40:17'),
 (8,'Caixa de Bombom','cxbombom.jpg','9','Caixa de bombom garoto','A','2024-05-14 14:58:53');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
