-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 18 déc. 2018 à 16:19
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(5) NOT NULL,
  `libelle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'fruit'),
(2, 'legume'),
(3, 'sport');

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

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `pseudo`, `content`, `dateCreation`, `idProduct`, `idUser`) VALUES
(2, 'oui', 'waw', '2018-12-18 15:14:10', 2, 5),
(3, 'blblblbl', 'SMOOTHIE', '2018-12-18 15:14:48', 4, 2),
(4, 'cc', 'cv', '2018-12-18 15:15:47', 1, 5),
(5, 'Michel', 'cool', '2018-12-18 16:09:15', 6, 10),
(6, 'Sandrine ', 'je suis zen', '2018-12-18 16:10:07', 1, 10),
(7, 'bonsoir', 'bonsoir', '2018-12-18 16:11:09', 1, 9),
(8, 'JPdu77', 'très frais.', '2018-12-18 16:11:52', 3, 9),
(9, 'RouxArriere', 'feur lol', '2018-12-18 16:12:44', 6, 8),
(10, 'MichelMichel', 'coolcool', '2018-12-18 16:13:12', 4, 8),
(11, 'Mfczeiofj', 'f,ckzlevn,oefc,lz', '2018-12-18 16:15:28', 5, 6),
(12, 'A', 'tartiflette', '2018-12-18 16:16:13', 5, 7),
(13, 'blblblb', 'blblblblblb', '2018-12-18 16:17:09', 2, 7),
(14, 'Gandalf?', 'hey', '2018-12-18 16:18:03', 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `favorite`
--

CREATE TABLE `favorite` (
  `idUser` int(11) NOT NULL,
  `idReceipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `favorite`
--

INSERT INTO `favorite` (`idUser`, `idReceipe`) VALUES
(2, 3),
(4, 5),
(10, 6),
(9, 5),
(10, 1),
(10, 2),
(9, 2),
(8, 1),
(8, 5),
(8, 2),
(7, 4),
(7, 1),
(7, 6),
(6, 2),
(6, 6),
(6, 5),
(5, 6),
(5, 4),
(5, 1),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `nameProduct` varchar(50) NOT NULL,
  `picture` text NOT NULL,
  `description` text NOT NULL,
  `ingredients` text NOT NULL,
  `dateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idCategorie` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `nameProduct`, `picture`, `description`, `ingredients`, `dateCreation`, `idCategorie`) VALUES
(1, 'zen', 'nos-jus-zen.jpg', 'smoothie zen', 'pomme, épinard, kale, carotte, citron, estragon, gingembre', '2018-12-17 11:04:00', 3),
(2, 'beautiful', 'nos-jus-beautiful.jpg', 'smoothie beautiful', 'raisin, carotte, betterave, céleri, citron', '2018-12-18 11:04:00', 2),
(3, 'young', 'nos-jus-young.jpg', 'lalalala', 'carotte, pomme, fenouil, navet, jus d\'aloe vera, raisin', '2018-12-16 11:04:00', 3),
(4, 'good', 'nos-jus-good.jpg', 'fgyuk', 'concombre, kiwi, pomme, brocoli, menthe, citron', '2018-12-15 11:04:00', 2),
(5, 'pulse', 'nos-jus-pulse.jpg', 'descritpion', 'betterave, carotte, pomme, citron, gingembre', '2018-12-14 11:04:00', 1),
(6, 'detox', 'nos-jus-detox.jpg', 'koiujy', 'pomme, concombre, fenouil, épinard, citron, céleri', '2018-12-13 11:04:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `receipe`
--

CREATE TABLE `receipe` (
  `id` int(5) NOT NULL,
  `details` text NOT NULL,
  `idProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `receipe`
--

INSERT INTO `receipe` (`id`, `details`, `idProduct`) VALUES
(1, 'et un peu de sucre en poudre', 1),
(2, 'mixer le tout servez', 4),
(3, 'eplucher mixez manber', 2),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut ipsum magna. Aenean vel laoreet dui, ac tristique felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In metus tellus, auctor sed tempor id, malesuada nec tortor.', 3),
(5, ' Aliquam in est eros. Sed id commodo erat. In vel eros sapien. Cras sed iaculis nisl, id ornare orci. Nullam est arcu, elementum quis pharetra vitae, molestie et nisl.', 6),
(6, ' Aliquam in est eros. Sed id commodo erat. In vel eros sapien. Cras sed iaculis nisl, id ornare orci. Nullam est arcu, elementum quis pharetra vitae, molestie et nisl.', 5);

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
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `mail`, `pseudo`, `password`, `firstName`, `name`, `address`, `zipCode`, `city`, `Creation_time_stamp`) VALUES
(2, 'gcharmassonjm@gmail.com', 'Perceval', '123456', 'Guillaume', 'Guillaume Charmasson', 'Lieu dit Lioriac, 48 rue des vignobles', '43590', 'Beauzac', '2018-12-17 15:27:12'),
(4, 'gcharmassonjm@gmail.com', 'dfsqdf', '123456', 'Guillaume', 'Guillaume Charmasson', 'Lieu dit Lioriac, 48 rue des vignobles', '43590', 'Beauzac', '2018-12-17 15:40:58'),
(5, 'gcharmassonjm@gmail.com', 'shundaime', 'azerty', 'Guillaume', 'Guillaume Charmasson', 'Lieu dit Lioriac, 48 rue des vignobles', '43590', 'Beauzac', '2018-12-18 08:07:05'),
(6, 'coca55@gmail.com', 'oeoe', 'password02', 'coca', 'cola', '12 hufbrez vfd', '45100', 'toulouse', '2018-12-18 14:42:09'),
(7, 'micheltv@outlook.fr', 'Michel', '1945', 'tkv', 'Michel', '55 hvu vureizu', '58442', 'lille', '2018-12-18 14:45:02'),
(8, 'LALALALALA@gmail.fr', 'lala', 'mdplal', 'LALA', 'laLA', '01 iozvhbjie fdud', '47842', 'Grenoble', '2018-12-18 14:47:36'),
(9, 'smoothie@smoothie.fr', 'smoothie', '5866', 'smoo', 'thie', '59 vjioedbij hdio', '24657', 'Strasbourg', '2018-12-18 14:50:39'),
(10, 'coquillagerose@gmail.com', 'heu', 'azerty', 'Brigitte', 'Bardot', '33 vzi hize czi', '1423', 'Montpellier', '2018-12-18 14:53:37');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategorie` (`idCategorie`);

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `receipe`
--
ALTER TABLE `receipe`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
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
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_categorie` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `receipe`
--
ALTER TABLE `receipe`
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
