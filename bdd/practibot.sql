-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 06 Mars 2023 à 21:30
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
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `tel` int(10) DEFAULT NULL,
  `departement` int(3) NOT NULL,
  `medecin_traitant` int(4) NOT NULL,
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
(1, 'Lebrun', 'Francis', 45, 'lebrunf@gmail.com', NULL, 1, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `log` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `praticien`
--

INSERT INTO `praticien` (`id_praticien`, `nom`, `prenom`, `email`, `specialite`, `departement`, `log`, `mdp`) VALUES
(6, 'nom', 'prenom', 'email@gmail.com', 1, 15, 'login', 'mdp');

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
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `praticien`
--
ALTER TABLE `praticien`
  MODIFY `id_praticien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
