-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 05 mai 2019 à 14:04
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boiteauxlettres`
--

-- --------------------------------------------------------

--
-- Structure de la table `lettres`
--

CREATE TABLE `lettres` (
  `id` int(255) NOT NULL,
  `NBlettres` tinyint(4) NOT NULL,
  `Hlettres` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Plettres` float NOT NULL,
  `Porte` int(11) NOT NULL,
  `Trappe` int(11) NOT NULL,
  `Ubat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lettres`
--

INSERT INTO `lettres` (`id`, `NBlettres`, `Hlettres`, `Plettres`, `Porte`, `Trappe`, `Ubat`) VALUES
(11, 1, '2019-05-05 13:48:47', 200, 1, 0, 75),
(12, 1, '2019-05-05 13:49:10', 200, 0, 1, 50),
(13, 1, '2019-05-05 13:50:35', 500, 1, 0, 40),
(14, 1, '2019-05-05 13:51:12', 200, 0, 1, 25);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `lettres`
--
ALTER TABLE `lettres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `lettres`
--
ALTER TABLE `lettres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
