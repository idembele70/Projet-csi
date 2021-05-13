-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 13 mai 2021 à 19:47
-- Version du serveur :  5.7.28
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `playduh`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresseMail` varchar(255) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `adresseLivraison` varchar(255) DEFAULT NULL,
  `adresseFacturation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `adresseMail`, `password`, `adresseLivraison`, `adresseFacturation`) VALUES
(1, 'DEMBELE', 'Ibrahim', 'ibrahim@gmail.com', '9F86D081884C7D659A2FEAA0C55AD015A3BF4F1B2B0B822CD15D6C15B0F00A08', '98, rue des Jonquilles', '98, rue des Jonquilles'),
(2, 'GALIANA', 'Loic', 'loic@gmail.com', '9F86D081884C7D659A2FEAA0C55AD015A3BF4F1B2B0B822CD15D6C15B0F00A08', '54, rue des Fleurs', '54, rue des Fleurs'),
(3, 'BERNARD', 'Manon', 'manon@gmail.com', '9F86D081884C7D659A2FEAA0C55AD015A3BF4F1B2B0B822CD15D6C15B0F00A08', '12, rue des Tulipes', '12, rue des Tulipes'),
(4, 'BOSC', 'Nicolas', 'nicolas@gmail.com', '9F86D081884C7D659A2FEAA0C55AD015A3BF4F1B2B0B822CD15D6C15B0F00A08', '45, rue des Rosiers', '45, rue des Rosiers'),
(5, 'BOUYGUES', 'Jonathan', 'jonathan@gmail.com', '9F86D081884C7D659A2FEAA0C55AD015A3BF4F1B2B0B822CD15D6C15B0F00A08', '5, rue des Coquelicots', '5, rue des Coquelicots'),
(6, 'DIAGNE', 'Alan', 'alan@gmail.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '56, avenue des Pissenlits', '56, avenue des Pissenlits'),
(7, 'STOGREN', 'Filip', 'filip@gmail.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '78, rue des Gentianes', '78, rue des Gentianes'),
(8, 'M\'BENGUE', 'Melissa', 'melissa@gmail.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '32, rue des Lilas', '32, rue des Lilas'),
(9, 'BARTHE', 'Vincent', 'vincent@gmail.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '22, rue des Oeillets', '22, rue des Oeillets');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(45) DEFAULT NULL,
  `dateCreation` date DEFAULT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`),
  KEY `idClient` (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCommande`, `ref`, `dateCreation`, `idClient`) VALUES
(1, 'Facture1', '2021-02-19', 1),
(2, 'Facture2', '2021-02-18', 4),
(3, 'Facture3', '2021-02-17', 2),
(4, 'Facture4', '2021-02-02', 3),
(5, 'Facture5', '2021-02-03', 1),
(6, 'Facture 6', '2021-03-05', 1),
(7, 'Facture 7', '2021-03-05', 1),
(8, 'test', '2021-05-10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `idCommande` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `nbreProduit` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`,`idProduit`),
  KEY `idProduit` (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`idCommande`, `idProduit`, `nbreProduit`) VALUES
(1, 2, 1),
(1, 3, 1),
(2, 4, 1),
(3, 1, 2),
(4, 4, 3),
(5, 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `ref`, `nom`, `description`, `price`, `stock`) VALUES
(1, 'fimo1', 'Les Sushis', 'sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Test', '2.01', 10),
(2, 'fimo2', 'Les desserts', 'sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit.', '3.50', 10),
(3, 'fimo3', 'Le pack débutant', 'sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit.', '50.00', 10),
(4, 'fimo4', 'Le panda', 'sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit.', '35.26', 10),
(5, 'fimo5', 'Le flamant rose', 'sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit.', '38.26', 10),
(6, 'fimo6', 'La licorne', 'sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit.', '3.26', 10);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `contenir_ibfk_1` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`),
  ADD CONSTRAINT `contenir_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
