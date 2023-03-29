-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 28 Mars 2023 à 13:49
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
  `medecin_traitant` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`id_patient`, `nom`, `prenom`, `age`, `mail`, `tel`, `departement`, `medecin_traitant`) VALUES
(1, 'Lebrun', 'Francis', 45, 'lebrunf@gmail.com', NULL, 1, 1),
(2, 'lebrowski', 'stanislas', 80, 'stanislasleb@hotmail.com', 836656565, 24, 3),
(3, 'rodriguez', 'sabrina', 28, 'sabsab82@yahoo.fr', 125184692, 82, 8),
(4, 'bezos', 'jeff', 53, 'jbezos@amazon.us', 102030405, 97, 5),
(5, 'martin', 'martin', 12, 'tintin@yahoo.fr', 666666666, 1, 1),
(6, 'blaro', 'damien', 31, 'blablaro@hotmail.fr', 678952843, 38, 1),
(7, 'snifnier', 'jean', 42, 'snifnie78@gmail.com', NULL, 78, 2),
(8, 'bourgeon', 'michel', 67, 'bmichel@gmail.com', NULL, 54, 3),
(9, 'lebreton', 'josé', 69, 'lebretonj@outlook.fr', 842975381, 59, 13),
(10, 'truchassou', 'véronique', 76, 'verotrucha@gmail.com', 579426841, 57, 0),
(13, 'grand', 'adrien', 29, 'adrien.g@gmail.com', 548963874, 26, NULL),
(14, 'bisca', 'régis', 82, 'biscarotte@orange.fr', 574196384, 64, NULL),
(15, 'bost', 'françoise', 86, 'bostfr@yahoo.fr', 845236951, 86, NULL),
(16, 'martinez', 'julie', 28, 'julie.martinez71@example.com', 612345678, 71, NULL),
(17, 'nguyen', 'thomas', 41, 'thomas.nguyen23@example.com', 623456789, 23, NULL),
(18, 'dubois', 'sophie', 22, 'sophie.dubois49@example.com', 745985236, 49, NULL),
(19, 'lefèbvre', 'pierre', 37, 'pierre.lefevre67@example.com', 854763269, 67, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `patient_specialite_symptome`
--

CREATE TABLE `patient_specialite_symptome` (
  `id_patient_specialite_symptome` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_specialite` int(11) NOT NULL,
  `id_symptome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `mdp` varchar(255) NOT NULL,
  `date_insc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `praticien`
--

INSERT INTO `praticien` (`id_praticien`, `nom`, `prenom`, `email`, `specialite`, `departement`, `id`, `mdp`, `date_insc`) VALUES
(1, 'nom', 'prenom', 'email@gmail.com', 1, 15, 'login', 'mdp', ''),
(2, 'Dumas', 'Lucie', 'Luciedumas@gmail.com', 1, 24, 'ldumas', 'mdp', ''),
(3, 'roger', 'roger', 'rogerroger@gmail.com', 2, 75, 'log', '$2y$10$Vdwu3h2XdAzIQseG49qM4e7Nq1fMleQZ6341pyDkf1qyqhUsG5/cW', ''),
(4, 'lucie', 'lucie', 'lucielucie@gmail.com', 1, 14, 'lucie', '$2y$10$E11qnpHm4HFJM06kteSOm.1UXr4i6gQQHXZIlu7.IFwMZj0.CmOua', '1679986353');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `id_specialite` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`id_specialite`, `nom`) VALUES
(1, 'médecine générale'),
(2, 'cardiologie'),
(3, 'gériatrie');

-- --------------------------------------------------------

--
-- Structure de la table `specialite_symptome`
--

CREATE TABLE `specialite_symptome` (
  `id_spe_symptome` int(11) NOT NULL,
  `id_spe` int(11) NOT NULL,
  `id_symptome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `specialite_symptome`
--

INSERT INTO `specialite_symptome` (`id_spe_symptome`, `id_spe`, `id_symptome`) VALUES
(1, 1, 1),
(14, 2, 1),
(29, 3, 1),
(2, 1, 2),
(30, 3, 2),
(31, 3, 3),
(32, 3, 4),
(33, 3, 5),
(34, 3, 6),
(35, 3, 7),
(36, 3, 8),
(26, 2, 9),
(37, 3, 9),
(27, 2, 10),
(38, 3, 10),
(39, 3, 11),
(40, 3, 12),
(41, 3, 13),
(42, 3, 14),
(43, 3, 15),
(15, 2, 16),
(13, 1, 17),
(16, 2, 17),
(17, 2, 18),
(18, 2, 19),
(19, 2, 20),
(20, 2, 21),
(21, 2, 22),
(22, 2, 23),
(12, 1, 24),
(23, 2, 24),
(24, 2, 25),
(11, 1, 26),
(44, 2, 26),
(28, 2, 27),
(9, 1, 28),
(10, 1, 29),
(7, 1, 30),
(8, 1, 31),
(3, 1, 32),
(4, 1, 33),
(5, 1, 34),
(6, 1, 35);

-- --------------------------------------------------------

--
-- Structure de la table `symptome`
--

CREATE TABLE `symptome` (
  `id_symptome` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `symptome`
--

INSERT INTO `symptome` (`id_symptome`, `nom`) VALUES
(1, 'fatigue'),
(2, 'perte de poids'),
(3, 'faiblesse musculaire'),
(4, 'douleur chronique'),
(5, 'difficulté à marcher'),
(6, 'confusion'),
(7, 'perte d\'appétit'),
(8, 'incontinence urinaire'),
(9, 'troubles du sommeil'),
(10, 'anxiété'),
(11, 'dépression'),
(12, 'problèmes de vision'),
(13, 'problèmes d\'audition'),
(14, 'chutes'),
(15, 'problèmes dentaires'),
(16, 'douleur ou pression dans la poitrine'),
(17, 'essoufflement'),
(18, 'palpitations'),
(19, 'étourdissements ou évanouissements'),
(20, 'douleur ou faiblesse dans les bras ou les jambes'),
(21, 'douleur au cou ou à la mâchoire'),
(22, 'gonflement des jambes, des chevilles ou des pieds'),
(23, 'essoufflement pendant l\'exercice'),
(24, 'douleur abdominale'),
(25, 'transpiration excessive'),
(26, 'nausées ou vomissements'),
(27, 'troubles de la mémoire ou de la concentration'),
(28, 'fièvre'),
(29, 'maux de tête'),
(30, 'toux'),
(31, 'douleur articulaire'),
(32, 'éruptions cutanées'),
(33, 'douleurs de dos'),
(34, 'trouble de l\'humeur'),
(35, 'douleur de la gorge');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_patient`);

--
-- Index pour la table `patient_specialite_symptome`
--
ALTER TABLE `patient_specialite_symptome`
  ADD PRIMARY KEY (`id_patient_specialite_symptome`),
  ADD UNIQUE KEY `id_symptome` (`id_symptome`,`id_patient`,`id_specialite`),
  ADD KEY `id_patient` (`id_patient`);

--
-- Index pour la table `praticien`
--
ALTER TABLE `praticien`
  ADD PRIMARY KEY (`id_praticien`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id_specialite`);

--
-- Index pour la table `specialite_symptome`
--
ALTER TABLE `specialite_symptome`
  ADD PRIMARY KEY (`id_spe_symptome`),
  ADD UNIQUE KEY `id_symptome` (`id_symptome`,`id_spe`),
  ADD KEY `id_spe` (`id_spe`);

--
-- Index pour la table `symptome`
--
ALTER TABLE `symptome`
  ADD PRIMARY KEY (`id_symptome`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `patient_specialite_symptome`
--
ALTER TABLE `patient_specialite_symptome`
  MODIFY `id_patient_specialite_symptome` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `praticien`
--
ALTER TABLE `praticien`
  MODIFY `id_praticien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `id_specialite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `specialite_symptome`
--
ALTER TABLE `specialite_symptome`
  MODIFY `id_spe_symptome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pour la table `symptome`
--
ALTER TABLE `symptome`
  MODIFY `id_symptome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
