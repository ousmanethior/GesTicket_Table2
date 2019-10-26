-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
<<<<<<< HEAD
-- Généré le :  Ven 25 Octobre 2019 à 11:27
=======
-- Généré le :  Ven 25 Octobre 2019 à 12:23
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920
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
<<<<<<< HEAD
-- Structure de la table `existe`
--

CREATE TABLE `existe` (
  `id_ref` int(11) NOT NULL,
  `id_se` int(11) NOT NULL,
  `Effectif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `listapp`
--

CREATE TABLE `listapp` (
  `matricule` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `referentiel` varchar(50) NOT NULL,
  `cinpassport` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `listapp`
--

INSERT INTO `listapp` (`matricule`, `prenom`, `nom`, `email`, `referentiel`, `cinpassport`, `telephone`) VALUES
(1, 'xcvxfcb', 'cvcvb', 'sdfsdf@gmail.com', 'sdfdwsf', 'df89635', '87566555');
=======
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
(8, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '2002-02-02', 'Dakar', 17, 5, '77 389 33 45', 'ab', 'ghjkl', 'Saliaba@rm.2019'),
(9, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '01/07/1995', 'Dakar', 15, 5, '77 389 33 45', NULL, 'Parcelles assainies U 11', ''),
(10, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '01/07/1995', 'Dakar', 15, 5, '77 389 33 45', NULL, 'Parcelles assainies U 11', ''),
(11, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '01/07/1995', 'Dakar', 15, 5, '77 389 33 45', NULL, 'Parcelles assainies U 11', ''),
(12, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '01/07/1995', 'Dakar', 15, 5, '77 389 33 45', NULL, 'Parcelles assainies U 11', ''),
(13, 'BAH', 'Ramatoulaye', '845196521', 'ramaba389@gmail.com', '01/07/1995', 'Dakar', 15, 5, '77 389 33 45', NULL, 'Parcelles assainies U 11', ''),
(14, 'THIOR', 'Ousmane', '14563005652', 'thior15@gmail.com', '1994-10-05', 'Guinaw Rails', 15, 5, '77 122 01 89 ', NULL, 'Guinaw Rails mbedd Nack ', '1234');
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `nommenu` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

=======
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
(15, 5, 25);

>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920
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
<<<<<<< HEAD
=======
(16, 'Data artisan'),
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920
(17, 'Dev web'),
(15, 'Référent digital');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
<<<<<<< HEAD
  `nom` varchar(50) NOT NULL,
=======
  `nom_ses` varchar(50) NOT NULL,
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920
  `annee` varchar(50) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `effectif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `session`
--

<<<<<<< HEAD
INSERT INTO `session` (`id`, `nom`, `annee`, `datedebut`, `datefin`, `effectif`) VALUES
=======
INSERT INTO `session` (`id`, `nom_ses`, `annee`, `datedebut`, `datefin`, `effectif`) VALUES
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920
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
<<<<<<< HEAD
(4, 'thior', 'ouze', 'simpleUser', 'pub@prestashop.com', '12345'),
(5, 'fsbc', 'dsfvwc', 'simpleUser', 'etgndg ', '1');
=======
(4, 'thior', 'ouze', 'simpleUser', 'pub@prestashop.com', '12345');
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920

--
-- Index pour les tables exportées
--

--
<<<<<<< HEAD
-- Index pour la table `existe`
--
ALTER TABLE `existe`
  ADD PRIMARY KEY (`id_ref`,`id_se`),
  ADD KEY `existe_session0_FK` (`id_se`);

--
-- Index pour la table `listapp`
--
ALTER TABLE `listapp`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`nommenu`);
=======
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id_app`),
  ADD KEY `apprenant_referentiel_FK` (`ref`),
  ADD KEY `apprenant_session0_FK` (`ses`);

--
-- Index pour la table `existe`
--
ALTER TABLE `existe`
  ADD KEY `existe_referentiel_FK` (`id_ref`),
  ADD KEY `existe_session0_FK` (`id_se`);
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920

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
<<<<<<< HEAD
  ADD PRIMARY KEY (`id`);
=======
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `annee` (`annee`);
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT pour la table `listapp`
--
ALTER TABLE `listapp`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920
--
-- AUTO_INCREMENT pour la table `referentiel`
--
ALTER TABLE `referentiel`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920
--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
<<<<<<< HEAD
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--
=======
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD CONSTRAINT `apprenant_referentiel_FK` FOREIGN KEY (`ref`) REFERENCES `referentiel` (`id`),
  ADD CONSTRAINT `apprenant_session0_FK` FOREIGN KEY (`ses`) REFERENCES `session` (`id`);
>>>>>>> 5a39a62ca192482f9a2b61cd5a6aafc02ce3e920

--
-- Contraintes pour la table `existe`
--
ALTER TABLE `existe`
  ADD CONSTRAINT `existe_referentiel_FK` FOREIGN KEY (`id_ref`) REFERENCES `referentiel` (`id`),
  ADD CONSTRAINT `existe_session0_FK` FOREIGN KEY (`id_se`) REFERENCES `session` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
