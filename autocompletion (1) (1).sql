-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 mai 2020 à 11:16
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `autocompletion`
--
CREATE DATABASE IF NOT EXISTS `autocompletion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `autocompletion`;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `nom`, `type`, `prix`) VALUES
(1, 'ca', 'horreur', 10),
(2, 'ca 2', 'horreur', 12),
(3, 'scary movie', 'humour', 13),
(4, 'scary movie 2', 'humour', 13),
(5, 'scary movie 3', 'humour', 13),
(6, 'stars wars', 'action', 12),
(7, 'stars wars 2', 'action ', 23),
(8, 'matrix', 'action', 12),
(9, 'matrix 2', 'action', 23),
(10, 'harry potter', 'fantastique', 23),
(16, 'stars wars 3', 'action', 12),
(17, 'stars wars 4', 'action ', 23),
(18, 'matrix', 'action', 12),
(19, 'matrix 2', 'action', 23),
(20, 'harry potter 3', 'fantastique', 23),
(21, 'harry potter 2 et la chambre des secrets', 'fantastique', 23),
(22, 'harry potter 4 la coupe de feu', 'fantastique', 24),
(23, 'seigneur des anneaux 2', 'action', 34),
(24, 'seigneur des anneaux', 'action', 23),
(25, 'Le gendarme et les gendarmettes', 'ancien', 12),
(26, 'Le château de ma mère', 'ancien', 24),
(27, 'mad max', 'ancien', 21),
(28, 'mad max 2', 'ancien', 12),
(29, 'pirate de caraibe 2', 'pirate', 12),
(30, 'pirate des caraibes', 'pirate', 12),
(31, 'robot cop', 'robot', 12),
(32, 'hunger games 1', 'survie', 12),
(33, 'zombie land', 'zombie', 12),
(34, 'le cercle', 'horreur', 12),
(35, 'la 5eme vagues', 'survie', 12),
(36, 'dead pool', 'action', 12),
(37, 'taxi ', 'action', 14),
(38, 'la grande vadrouille', 'humour', 12),
(39, 'iron man', 'action', 12),
(40, 'america', 'decouverte', 12),
(41, 'dernier train', 'zombie', 12),
(42, 'word war Z', 'zombie', 12),
(43, 'retour zombie land', 'zombie', 12),
(44, 'manuel de survie', 'zombie', 12),
(45, 'baby partie', 'humour', 12),
(46, 'echec', 'survie', 12),
(47, 'lucy', 'action', 12),
(48, 'hyper tension', 'action', 12),
(49, 'agence tout risque', 'action', 12),
(50, 'intouchable', 'humour', 12),
(51, 'oss 117', 'action', 12),
(52, 'oss 117 le retour', 'action', 12),
(53, 'axterix et obelix', 'humour', 12),
(54, 'fatal', 'humour', 12),
(55, 'destination final', 'horreur', 12),
(56, 'jumanji', 'action', 12),
(57, 'Nanny McPhee', 'fantastique', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
