-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 28 Octobre 2019 à 08:31
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gesticketsa`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id_app` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `cin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datenaiss` varchar(50) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `ref` int(11) NOT NULL,
  `ses` int(11) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `adresse` text NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `apprenant`
--

INSERT INTO `apprenant` (`id_app`, `nom`, `prenom`, `cin`, `email`, `datenaiss`, `lieu`, `ref`, `ses`, `tel`, `statut`, `adresse`, `pwd`) VALUES
(4, 'THIOR', 'Ousmane', '14563005652', 'thior15@gmail.com', '1994-10-05', 'Guinaw Rails', 15, 5, '77 122 01 89 ', NULL, 'Guinaw Rails mbedd Nack ', '1234'),
(5, 'Sarr', 'Abdourahmane ', '459621525', 'papysarr@gmail.com', '1999-08-06', 'Dakar', 15, 5, '77 464 41 70 ', NULL, 'HLM Grand Yoff', '1234'),
(6, 'NDIAYE', 'Abdoulaye', '565285542', 'proabdou@gmail.com', '10/06/1996', 'Dakar', 15, 5, '77 789 45 12', NULL, 'HLM', '1234'),
(7, 'WCFsdf', 'FDdsf', '68456443', 'qsdqsf@gmail.com', '12-13-2019', 'qsdqsfDakar', 17, 4, '77 389 33 48', 'aban', 'Parcelles  U 11', '123'),
(8, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '2002-02-02', 'Dakar', 16, 5, '77 389 33 45', 'abandonné', 'azeaze', 'Saliaba@rm.2019'),
(9, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '2019-10-01', 'Dakar', 16, 5, '77 389 33 45', 'co', 'cvbn,;', 'Saliaba@rm.2019'),
(10, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '01/07/1995', 'Dakar', 15, 5, '77 389 33 45', NULL, 'Parcelles assainies U 11', ''),
(11, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '01/07/1995', 'Dakar', 15, 5, '77 389 33 45', NULL, 'Parcelles assainies U 11', ''),
(12, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '01/07/1995', 'Dakar', 15, 5, '77 389 33 45', NULL, 'Parcelles assainies U 11', ''),
(13, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '01/07/1995', 'Dakar', 15, 5, '77 389 33 45', NULL, 'Parcelles assainies U 11', ''),
(14, 'THIOR', 'Ousmane', '14563005652', 'thior15@gmail.com', '1994-10-05', 'Guinaw Rails', 15, 5, '77 122 01 89 ', NULL, 'Guinaw Rails mbedd Nack ', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `dessert`
--

CREATE TABLE `dessert` (
  `id_dess` int(11) NOT NULL,
  `nom_dess` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dessert`
--

INSERT INTO `dessert` (`id_dess`, `nom_dess`) VALUES
(1, 'Fruit'),
(2, 'Jus');

-- --------------------------------------------------------

--
-- Structure de la table `existe`
--

CREATE TABLE `existe` (
  `id_ref` int(11) NOT NULL,
  `id_se` int(11) NOT NULL,
  `Effectif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `existe`
--

INSERT INTO `existe` (`id_ref`, `id_se`, `Effectif`) VALUES
(15, 4, 45),
(15, 5, 10),
(16, 5, 25),
(17, 4, 45),
(17, 5, 50),
(15, 5, 25),
(17, 4, 45);

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nom_menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `nom_menu`) VALUES
(13, 'Chawarma'),
(7, 'Couscous poulet'),
(8, 'Couscous viande'),
(12, 'hamburger'),
(11, 'mafé'),
(14, 'Mixe'),
(17, 'Thieb diaga'),
(5, 'Thieb diene'),
(6, 'thiep yap'),
(10, 'vermicelle poulet'),
(1, 'vermicelle viande'),
(15, 'yassa poulet'),
(16, 'yassa viande');

-- --------------------------------------------------------

--
-- Structure de la table `planifier`
--

CREATE TABLE `planifier` (
  `id_p` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `menu1` int(11) NOT NULL,
  `menu2` int(11) NOT NULL,
  `menu3` int(11) NOT NULL,
  `menu4` int(11) NOT NULL,
  `menu5` int(11) NOT NULL,
  `id_dess` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `planifier`
--

INSERT INTO `planifier` (`id_p`, `date`, `menu1`, `menu2`, `menu3`, `menu4`, `menu5`, `id_dess`) VALUES
(1, '2019-10-28', 5, 1, 5, 1, 6, 1),
(5, '2019-10-29', 10, 8, 5, 12, 13, 2),
(7, '2019-10-30', 15, 14, 11, 13, 12, 1);

-- --------------------------------------------------------

--
-- Structure de la table `referentiel`
--

CREATE TABLE `referentiel` (
  `id` int(11) NOT NULL,
  `nomreferentiel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `referentiel`
--

INSERT INTO `referentiel` (`id`, `nomreferentiel`) VALUES
(16, 'Data artisan'),
(17, 'Dev web'),
(15, 'Référent digital');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `nom_ses` varchar(50) NOT NULL,
  `annee` varchar(50) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `effectif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `session`
--

INSERT INTO `session` (`id`, `nom_ses`, `annee`, `datedebut`, `datefin`, `effectif`) VALUES
(4, 'Promo Alioune Ndiaye', '2018', '2017-11-04', '2018-05-04', 45),
(5, 'Promo Yankhoba Ben Abdallah Mané', '2019', '2018-03-02', '2019-11-15', 100);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `profil` varchar(50) NOT NULL,
  `login` varchar(100) NOT NULL,
  `motpasse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `profil`, `login`, `motpasse`) VALUES
(1, 'Ndiaye', 'Astou', 'Admin', 'astoundiaye@gmail.sn', 'astoundiayesa'),
(2, 'thior', 'ousmane', 'simpleUser', 'ousmanethior@gmail.sa', 'malamine10'),
(3, 'thior', 'ouze', 'simpleUser', 'thior15@hotmail.com', '1234'),
(4, 'thior', 'ouze', 'simpleUser', 'pub@prestashop.com', '12345');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id_app`),
  ADD KEY `apprenant_referentiel_FK` (`ref`),
  ADD KEY `apprenant_session0_FK` (`ses`);

--
-- Index pour la table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id_dess`),
  ADD UNIQUE KEY `nom_dess` (`nom_dess`);

--
-- Index pour la table `existe`
--
ALTER TABLE `existe`
  ADD KEY `existe_referentiel_FK` (`id_ref`),
  ADD KEY `existe_session0_FK` (`id_se`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD UNIQUE KEY `nom_menu` (`nom_menu`);

--
-- Index pour la table `planifier`
--
ALTER TABLE `planifier`
  ADD PRIMARY KEY (`id_p`),
  ADD UNIQUE KEY `date` (`date`),
  ADD KEY `planifier_menu_FK` (`menu1`),
  ADD KEY `planifier_menu2_FK` (`menu2`),
  ADD KEY `planifier_menu3_FK` (`menu3`),
  ADD KEY `planifier_menu4_FK` (`menu4`),
  ADD KEY `planifier_menu5_FK` (`menu5`),
  ADD KEY `planifier_dessert_FK` (`id_dess`);

--
-- Index pour la table `referentiel`
--
ALTER TABLE `referentiel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomreferentiel` (`nomreferentiel`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `annee` (`annee`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id_dess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `planifier`
--
ALTER TABLE `planifier`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `referentiel`
--
ALTER TABLE `referentiel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD CONSTRAINT `apprenant_referentiel_FK` FOREIGN KEY (`ref`) REFERENCES `referentiel` (`id`),
  ADD CONSTRAINT `apprenant_session0_FK` FOREIGN KEY (`ses`) REFERENCES `session` (`id`);

--
-- Contraintes pour la table `existe`
--
ALTER TABLE `existe`
  ADD CONSTRAINT `existe_referentiel_FK` FOREIGN KEY (`id_ref`) REFERENCES `referentiel` (`id`),
  ADD CONSTRAINT `existe_session0_FK` FOREIGN KEY (`id_se`) REFERENCES `session` (`id`);

--
-- Contraintes pour la table `planifier`
--
ALTER TABLE `planifier`
  ADD CONSTRAINT `planifier_dessert_FK` FOREIGN KEY (`id_dess`) REFERENCES `dessert` (`id_dess`),
  ADD CONSTRAINT `planifier_menu2_FK` FOREIGN KEY (`menu2`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `planifier_menu3_FK` FOREIGN KEY (`menu3`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `planifier_menu4_FK` FOREIGN KEY (`menu4`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `planifier_menu5_FK` FOREIGN KEY (`menu5`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `planifier_menu_FK` FOREIGN KEY (`menu1`) REFERENCES `menu` (`id_menu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
