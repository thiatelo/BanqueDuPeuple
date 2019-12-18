-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 11:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `financemaison`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cni` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `cni`, `nom`, `prenom`, `adresse`, `tel`) VALUES
(1, '456723', 'ndiaye', 'moustapha', 'parcel', ''),
(2, '456287', 'ndoye', 'abdou', 'dakar', '772255547'),
(3, '45875', 'dieng', 'abdou', 'poste', '771412587'),
(4, '9999', 'ndiaye', 'thierno', 'rufisque', '77444444'),
(5, '271500', 'Diagne', 'Aicha', 'Dakar', '776515042'),
(6, '152378', 'diop', 'dabakh', 'Rufisque', '771215248'),
(7, '888855', 'niang', 'mbaye', 'parcel', '772255185'),
(8, '888855', 'niang', 'mbaye', 'parcel', '772255185'),
(9, '1111', 'diop', 'babacar', 'Rufisque', '774521128');

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(25) NOT NULL,
  `dateCreation` varchar(10) NOT NULL,
  `solde` int(11) NOT NULL DEFAULT '0',
  `idClient` int(11) NOT NULL,
  `idGestCompte` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero` (`numero`),
  KEY `idClient` (`idClient`),
  KEY `idGestCompte` (`idGestCompte`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`id`, `numero`, `dateCreation`, `solde`, `idClient`, `idGestCompte`) VALUES
(1, 'FSN_06042019_C1', '06-04-2019', 839, 1, 1),
(2, 'FSN_06042019_C2', '06-04-2019', 500, 2, 1),
(3, 'FSN_10042019_C3', '10-04-2019', 10000, 3, 1),
(4, 'FSN_10042019_C4', '10-04-2019', 3000, 4, 1),
(5, 'FSN_11042019_C5', '11-04-2019', 1000, 5, 1),
(6, 'FSN_11042019_C6', '11-04-2019', 1, 6, 1),
(7, 'FSN_11042019_C7', '11-04-2019', 0, 7, 1),
(9, 'FSN_11042019_C8', '11-04-2019', 1, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE IF NOT EXISTS `operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(20) NOT NULL,
  `dateOperation` varchar(10) NOT NULL,
  `montant` int(11) NOT NULL,
  `idCompte` int(11) NOT NULL,
  `idTypeOpe` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero` (`numero`),
  KEY `idCompte` (`idCompte`),
  KEY `idTypeOpe` (`idTypeOpe`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`id`, `numero`, `dateOperation`, `montant`, `idCompte`, `idTypeOpe`, `idUser`) VALUES
(1, 'FSN_06042019_OP1', '06-04-2019', 50000, 1, 1, 1),
(2, 'FSN_06042019_OP2', '06-04-2019', 10000, 2, 1, 1),
(3, 'FSN_06042019_OP3', '06-04-2019', 10000, 2, 1, 1),
(4, 'FSN_10042019_OP4', '10-04-2019', 222, 1, 1, 1),
(5, 'FSN_10042019_OP5', '10-04-2019', 222, 1, 1, 1),
(6, 'FSN_10042019_OP6', '10-04-2019', 10000, 1, 1, 1),
(7, 'FSN_10042019_OP7', '10-04-2019', 10000, 1, 1, 1),
(8, 'FSN_10042019_OP8', '10-04-2019', 150000, 1, 1, 1),
(9, 'FSN_10042019_OP9', '10-04-2019', 150000, 1, 1, 1),
(10, 'FSN_11042019_OP10', '11-04-2019', 100, 1, 1, 1),
(11, 'FSN_11042019_OP11', '11-04-2019', 10, 1, 2, 1),
(12, 'FSN_11042019_OP12', '11-04-2019', 150, 1, 1, 1),
(13, 'FSN_11042019_OP13', '11-04-2019', 10000, 5, 1, 1),
(14, 'FSN_11042019_OP14', '11-04-2019', 10000, 5, 1, 1),
(15, 'FSN_11042019_OP15', '11-04-2019', 1, 6, 1, 1),
(16, 'FSN_11042019_OP16', '11-04-2019', 0, 7, 1, 1),
(18, 'FSN_11042019_OP17', '11-04-2019', 1, 9, 1, 1),
(20, 'FSN_12042019_OP20', '12-04-2019', 155, 1, 1, 1),
(21, 'FSN_02062019_OP21', '02-06-2019', 15000, 1, 1, 1),
(22, 'FSN_02062019_OP22', '02-06-2019', 300000, 1, 1, 1),
(23, 'FSN_02062019_OP23', '02-06-2019', 300000, 1, 2, 1),
(24, 'FSN_02062019_OP24', '02-06-2019', 300000, 1, 2, 1),
(25, 'FSN_02062019_OP25', '02-06-2019', 80000, 1, 2, 1),
(26, 'FSN_02062019_OP26', '02-06-2019', 10000, 1, 1, 1),
(27, 'FSN_02062019_OP27', '02-06-2019', 10000, 1, 2, 1),
(28, 'FSN_02062019_OP28', '02-06-2019', 10000, 1, 1, 1),
(29, 'FSN_02062019_OP29', '02-06-2019', 16000, 1, 1, 1),
(30, 'FSN_02062019_OP30', '02-06-2019', 16000, 1, 2, 1),
(34, 'FSN_02062019_OP31', '02-06-2019', 15000, 1, 2, 1),
(35, 'FSN_02062019_OP35', '02-06-2019', 15000, 2, 2, 1),
(36, 'FSN_02062019_OP36', '02-06-2019', 15000, 5, 2, 1),
(37, 'FSN_02062019_OP37', '02-06-2019', 2500, 2, 2, 1),
(38, 'FSN_02062019_OP38', '02-06-2019', 2500, 2, 2, 1),
(39, 'FSN_02062019_OP39', '02-06-2019', 2500, 5, 2, 1),
(40, 'FSN_02062019_OP40', '02-06-2019', 500, 2, 3, 1),
(41, 'FSN_02062019_OP41', '02-06-2019', 500, 2, 3, 1),
(42, 'FSN_02062019_OP42', '02-06-2019', 500, 2, 3, 1),
(43, 'FSN_02062019_OP43', '02-06-2019', 500, 2, 3, 1),
(44, 'FSN_02062019_OP44', '02-06-2019', 500, 2, 3, 1),
(45, 'FSN_02062019_OP45', '02-06-2019', 500, 2, 3, 1),
(46, 'FSN_02062019_OP46', '02-06-2019', 500, 2, 3, 1),
(47, 'FSN_02062019_OP47', '02-06-2019', 500, 2, 3, 1),
(48, 'FSN_02062019_OP48', '02-06-2019', 500, 5, 3, 1),
(49, 'FSN_02062019_OP49', '02-06-2019', 500, 5, 3, 1),
(50, 'FSN_02062019_OP50', '02-06-2019', 500, 5, 3, 1),
(51, 'FSN_02062019_OP51', '02-06-2019', 10000, 4, 1, 1),
(52, 'FSN_02062019_OP52', '02-06-2019', 10000, 3, 1, 1),
(53, 'FSN_02062019_OP53', '02-06-2019', 5000, 3, 3, 1),
(54, 'FSN_02062019_OP54', '02-06-2019', 5000, 3, 1, 1),
(55, 'FSN_02062019_OP55', '02-06-2019', 5000, 3, 3, 1),
(56, 'FSN_02062019_OP56', '02-06-2019', 5000, 3, 3, 1),
(57, 'FSN_02062019_OP57', '02-06-2019', 2500, 3, 3, 1),
(58, 'FSN_02062019_OP58', '02-06-2019', 5000, 3, 3, 1),
(59, 'FSN_02062019_OP59', '02-06-2019', 2000, 3, 3, 1),
(60, 'FSN_02062019_OP60', '02-06-2019', 2000, 4, 3, 1),
(61, 'FSN_02062019_OP61', '02-06-2019', 1000, 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `typeoperation`
--

CREATE TABLE IF NOT EXISTS `typeoperation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `typeoperation`
--

INSERT INTO `typeoperation` (`id`, `nom`) VALUES
(1, 'depot'),
(2, 'retrait'),
(3, 'transfert');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profil` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `login`, `password`, `profil`) VALUES
(1, 'ndiaye', 'thierno', 'thier', 'passer2019', 'admin'),
(2, 'thiam', 'habib', 'habib', 'passer', 'caissier'),
(4, 'ndiaye', 'Thierno', 'thier98', 'passer', 'admin'),
(7, 'scott', 'Travis', 'Travis', 'passer', 'admin'),
(8, '', '', '', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `compte_ibfk_2` FOREIGN KEY (`idGestCompte`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `operation`
--
ALTER TABLE `operation`
  ADD CONSTRAINT `operation_ibfk_1` FOREIGN KEY (`idCompte`) REFERENCES `compte` (`id`),
  ADD CONSTRAINT `operation_ibfk_3` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
