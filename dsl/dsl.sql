-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 14 déc. 2020 à 07:15
-- Version du serveur :  5.7.31
-- Version de PHP : 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dsl`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `animal_id` int(10) NOT NULL,
  `animal_name` varchar(255) NOT NULL,
  `animal_age` int(10) NOT NULL,
  `animal_size` int(10) NOT NULL,
  `animal_type` varchar(255) NOT NULL,
  `animal_owner` varchar(255) NOT NULL,
  PRIMARY KEY (`animal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`animal_id`, `animal_name`, `animal_age`, `animal_size`, `animal_type`, `animal_owner`) VALUES
(2, 'popi', 10, 60, 'balaine', 'ba.pham@insa-cvl.fr'),
(69, 'jojo', 22, 0, 'Blaireau', 'stanfaure49@gmail.com'),
(456, 'Bob', 23, 54, 'escargot', 'ba.pham@insa-cvl.fr'),
(1657, 'leo', 56, 2, 'chien', 'ba.pham@insa-cvl.fr');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(7, 'Dat Pham', 'ba.pham@insa-cvl.fr', 'datpham', 'Vietnam', 'Hue', '0750501050', '4 RUE GALLOIS', 'member1.jpg', '::1'),
(9, 'Stanislas Faure', 'stanfaure49@gmail.com', '621200', 'France', 'Blois', '0782374740', '3 Rue Saint Martin', 'open-uri20150422-20810-10txx60_f3574e9e.jpg', '::1');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `tracage_id` int(10) NOT NULL AUTO_INCREMENT,
  `animal_id` int(11) NOT NULL,
  `animal_x` int(10) NOT NULL,
  `animal_y` int(10) NOT NULL,
  `animal_temp` varchar(255) NOT NULL,
  `animal_velocity` varchar(255) NOT NULL,
  `tracage_date` date DEFAULT NULL,
  PRIMARY KEY (`tracage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`tracage_id`, `animal_id`, `animal_x`, `animal_y`, `animal_temp`, `animal_velocity`, `tracage_date`) VALUES
(14, 2, 20, 15, '21.7', '20', '2020-12-11'),
(15, 456, 60, 75, '21.7', '20', '2020-12-11'),
(16, 2, 20, 15, '21.7', '25', '2020-12-11'),
(17, 2, 20, 15, '21.7', '15', '2020-12-11'),
(18, 456, 40, 90, '21.7', '15', '2020-12-11'),
(19, 1657, 80, 105, '21.7', '25', '2020-12-11'),
(20, 69, 80, 60, '21.7', '20', '2020-12-11'),
(21, 2, 100, 105, '0', '20', '2020-12-13'),
(22, 2, 100, 105, '0', '20', '2020-12-14'),
(23, 2, 100, 105, '0', '20', '2020-12-14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
