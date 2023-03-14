-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 07 Mars 2023 à 10:26
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `practibot`
--
CREATE DATABASE IF NOT EXISTS `practibot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `practibot`;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id_patient` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `age` int(3) NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `tel` int(10) DEFAULT NULL,
  `departement` int(3) NOT NULL,
  `medecin_traitant` int(4) DEFAULT NULL,
  `s1` tinyint(1) DEFAULT NULL,
  `s2` tinyint(1) DEFAULT NULL,
  `s3` tinyint(1) DEFAULT NULL,
  `s4` tinyint(1) DEFAULT NULL,
  `s5` tinyint(1) DEFAULT NULL,
  `s6` tinyint(1) DEFAULT NULL,
  `s7` tinyint(1) DEFAULT NULL,
  `s8` tinyint(1) DEFAULT NULL,
  `s9` tinyint(1) DEFAULT NULL,
  `s10` tinyint(1) DEFAULT NULL,
  `s11` tinyint(1) DEFAULT NULL,
  `s12` tinyint(1) DEFAULT NULL,
  `s13` tinyint(1) DEFAULT NULL,
  `s14` tinyint(1) DEFAULT NULL,
  `s15` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`id_patient`, `nom`, `prenom`, `age`, `mail`, `tel`, `departement`, `medecin_traitant`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`) VALUES
(1, 'Lebrun', 'Francis', 45, 'lebrunf@gmail.com', NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'lebrowski', 'stanislas', 80, 'stanislasleb@hotmail.com', 836656565, 24, 3, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'rodriguez', 'sabrina', 28, 'sabsab82@yahoo.fr', 125184692, 82, 8, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(4, 'bezos', 'jeff', 53, 'jbezos@amazon.us', 102030405, 97, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'martin', 'martin', 12, 'tintin@yahoo.fr', 666666666, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'blaro', 'damien', 31, 'blablaro@hotmail.fr', 678952843, 38, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(7, 'snifnier', 'jean', 42, 'snifnie78@gmail.com', NULL, 78, 2, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'bourgeon', 'michel', 67, 'bmichel@gmail.com', NULL, 54, 3, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, 1, NULL),
(9, 'lebreton', 'josé', 69, 'lebretonj@outlook.fr', 842975381, 59, 13, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'truchassou', 'véronique', 76, 'verotrucha@gmail.com', 579426841, 57, 0, 1, NULL, NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'grand', 'adrien', 29, 'adrien.g@gmail.com', 548963874, 26, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'bisca', 'régis', 82, 'biscarotte@orange.fr', 574196384, 64, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'bost', 'françoise', 86, 'bostfr@yahoo.fr', 845236951, 86, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'martinez', 'julie', 28, 'julie.martinez71@example.com', 612345678, 71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'nguyen', 'thomas', 41, 'thomas.nguyen23@example.com', 623456789, 23, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'dubois', 'sophie', 22, 'sophie.dubois49@example.com', 745985236, 49, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(19, 'lefèbvre', 'pierre', 37, 'pierre.lefevre67@example.com', 854763269, 67, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `praticien`
--

CREATE TABLE `praticien` (
  `id_praticien` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `specialite` int(1) NOT NULL,
  `departement` int(3) NOT NULL,
  `id` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `praticien`
--

INSERT INTO `praticien` (`id_praticien`, `nom`, `prenom`, `email`, `specialite`, `departement`, `id`, `mdp`) VALUES
(1, 'nom', 'prenom', 'email@gmail.com', 1, 15, 'login', 'mdp');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_patient`);

--
-- Index pour la table `praticien`
--
ALTER TABLE `praticien`
  ADD PRIMARY KEY (`id_praticien`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `praticien`
--
ALTER TABLE `praticien`
  MODIFY `id_praticien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
