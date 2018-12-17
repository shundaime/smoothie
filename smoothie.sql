-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 17 Décembre 2018 à 14:28
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `smoothie`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(5) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `dateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idProduct` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `favorite`
--

CREATE TABLE `favorite` (
  `idUser` int(11) NOT NULL,
  `idReceipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `nameProduct` varchar(50) NOT NULL,
  `picture` text NOT NULL,
  `description` text NOT NULL,
  `ingredients` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `nameProduct`, `picture`, `description`, `ingredients`) VALUES
(1, 'zen', '<img src="assets/photos/nos-jus-zen.jpg>', 'pomme, épinard, kale, carotte, citron, estragon, gingembre', ''),
(2, 'beautiful', '<img src="assets/photos/nos-jus-beautiful.jpg>', 'raisin, carotte, betterave, céleri, citron', ''),
(3, 'young', '<img src="assets/photos/nos-jus-young.jpg">', 'carotte, pomme, fenouil, navet, jus d\'aloe vera, raisin', ''),
(4, 'good', '<img src="assets/photos/nos-jus-good.jpg">', 'concombre, kiwi, pomme, brocoli, menthe, citron', ''),
(5, 'pulse', '<img src="assets/photos/nos-jus-pulse.jpg">', 'betterave, carotte, pomme, citron, gingembre', ''),
(6, 'detox', '<img src="assets/photos/nos-jus-detox.jpg">', 'pomme, concombre, fenouil, épinard, citron, céleri', '');

-- --------------------------------------------------------

--
-- Structure de la table `receipe`
--

CREATE TABLE `receipe` (
  `id` int(5) NOT NULL,
  `details` text NOT NULL,
  `idProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipCode` varchar(5) NOT NULL,
  `city` varchar(30) NOT NULL,
  `Creation_time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProduct` (`idProduct`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `favorite`
--
ALTER TABLE `favorite`
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idReceipe` (`idReceipe`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `receipe`
--
ALTER TABLE `receipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProduct` (`idProduct`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `receipe`
--
ALTER TABLE `receipe`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_commentProduct` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_commentUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `FK_favReceipe` FOREIGN KEY (`idReceipe`) REFERENCES `receipe` (`id`),
  ADD CONSTRAINT `FK_favUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `receipe`
--
ALTER TABLE `receipe`
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
