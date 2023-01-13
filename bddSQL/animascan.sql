-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 13 jan. 2023 à 10:02
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `animascan`
--

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  `nomAnime` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `style` varchar(250) NOT NULL,
  `auteur` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `manga`
--

INSERT INTO `manga` (`id`, `image`, `nomAnime`, `date`, `style`, `auteur`) VALUES
(1, 'OnePiece.jpeg', 'One Piece', '1997-12-24', 'Shonen', 'Oda'),
(2, 'Maid Sama!.jpg', 'Maid Sama', '2005-01-13', 'Shojo', 'Nadou'),
(3, 'deathnote.jpg', 'Death Note', '2002-03-13', 'Shonen', 'Tsugumi Ōba'),
(4, 'berserk.jpeg', 'Berserk', '1987-11-24', 'Seinen', 'Kentarō Miura'),
(5, 'Naruto.jpg', 'Naruto', '1999-06-11', 'Shonen', 'Masashi Kishimoto');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
