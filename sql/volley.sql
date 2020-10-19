-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 19 oct. 2020 à 18:41
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `volley`
--

-- Expliquation fichier sql de notre site de vente : 
-- on vérifie si il y a pas déjà une base données volley si c'est le cas elle sera alors détruite
-- on créer ensuite la base données volley
-- puis on se postionne sur la base donnée volley afin que les tables 
-- qui seront crées soient propre à la base de données volley
-- et pour finir on crée toutes nos tables en insérant toutes les données nescessaires
-- au fonctionnement du site 

DROP DATABASE IF EXISTS `volley`;
CREATE DATABASE IF NOT EXISTS `volley`;
USE `volley`;

-- --------------------------------------------------------

--
-- Structure de la table `volley_admin`
--

DROP TABLE IF EXISTS `volley_admin`;
CREATE TABLE IF NOT EXISTS `volley_admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `volley_admin`
--

INSERT INTO `volley_admin` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$12$Omx9WMNQwXaoD6P/mCnlt.eh98Vabsq8cBa3UumtViavJfIFvl9Cq');

-- --------------------------------------------------------

--
-- Structure de la table `volley_equipes`
--

DROP TABLE IF EXISTS `volley_equipes`;
CREATE TABLE IF NOT EXISTS `volley_equipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `volley_equipes`
--

INSERT INTO `volley_equipes` (`id`, `nom`) VALUES
(1, 'Carrières Sur Seine'),
(2, 'Chatou'),
(3, 'Deux-Rives'),
(4, 'Les Essarts'),
(5, 'Feucherolles'),
(6, 'Fontenay'),
(7, 'Maisons-Laffitte'),
(8, 'Le Perray 1'),
(9, 'Le Perray 2'),
(10, 'Pontchartain'),
(11, 'Rambouillet'),
(12, 'Trappes'),
(13, 'Le Perray'),
(14, 'Carrières 1'),
(15, 'Carrières 2'),
(16, 'Marly'),
(17, 'Beynes');

-- --------------------------------------------------------

--
-- Structure de la table `volley_matchs`
--

DROP TABLE IF EXISTS `volley_matchs`;
CREATE TABLE IF NOT EXISTS `volley_matchs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipe1` int(11) NOT NULL,
  `id_equipe2` int(11) NOT NULL,
  `resultat` varchar(255) NOT NULL,
  `sets` varchar(255) NOT NULL,
  `scores` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  `penalites` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `volley_matchs`
--

INSERT INTO `volley_matchs` (`id`, `id_equipe1`, `id_equipe2`, `resultat`, `sets`, `scores`, `points`, `penalites`, `annee`) VALUES
(1, 1, 2, 'Victoire', '2/0', '25/23  25/19', '51/42', 'Match interrompu par coupure d\'électricité', 2019),
(2, 1, 4, 'Victoire', '3/0', '25/19  25/13  26/24', '76/56', 'RAS', 2019),
(3, 1, 5, 'Défaite', '1/3', '17/25  22/25  25/22  16 /25', '80/97', 'RAS', 2019),
(4, 1, 9, 'Victoire', '3/0', '25/16  25/15  25/22', '75/53', 'RAS', 2019),
(5, 2, 1, 'Défaite', '0/2', '23/25  19/26', '42/51', 'Match interrompu par coupure d\'électricité', 2019),
(6, 2, 5, 'Défaite', '0/3', '14/25  22/25  14/25', '50/75', 'Licence référent Feucherolles non visée - Indulgence', 2019),
(7, 2, 3, 'Défaite', '0/3', '21/25  23/25  9/25', '53/75', 'Retard envoi feuille de match/licences non visées - Indulgence', 2019),
(8, 2, 9, 'Défaite', '0/3', '12/25  16/25  15/25', '43/75', 'Retard envoi feuille de match - Indulgence', 2019),
(9, 3, 10, 'Défaite', '0/3', '16/25  10/25  15/25', '41/75', 'Licences 2 Rives non visées - Indulgence', 2019),
(10, 3, 2, 'Victoire', '3/0', '25/21  25/23  25/9', '75/53', 'Retard envoi feuille de match/licences non visées - Indulgence', 2019),
(11, 3, 6, 'Défaite', '0/3', '21/25  15/25  17/25', '53/75', 'RAS', 2019),
(12, 4, 6, 'Défaite', '1/3', '27/25  16/25  15/25  18/25', '76/100', 'Manque nom équipe Fontenay - Indulgence', 2019),
(13, 4, 1, 'Défaite', '0/3', '19/25  13/25  24/26', '56/76', 'RAS', 2019),
(14, 4, 9, 'Défaite', '0/3', '16/25  20/25  12/25', '48/75', 'RAS', 2019),
(15, 4, 11, 'Victoire', '3/2', '25/5  25/14  26/28  12/25  15/2', '103/74', 'RAS', 2019),
(16, 5, 7, 'Défaite', '1/3', '25/22  24/26  22/25  20/25', '91/98', 'Feucherolles 1 licence sans photo - Indulgence', 2019),
(17, 5, 2, 'Victoire', '3/0', '25/14  25/22  25/14', '75/50', 'Licence référent Feucherolles non visée - Indulgence', 2019),
(18, 5, 11, 'Victoire', '3/0', '25/8  25/8  25/22', '75/38', 'Retard envoi feuille de match - Indulgence ', 2019),
(19, 5, 1, 'Victoire', '3/1', '25/17  25/22  22/25  25/16', '97/80', 'RAS', 2019),
(20, 6, 4, 'Victoire', '3/1', '25/27  25/16  25/15  25/18  ', '100/76', 'Manque nom équipe Fontenay - Indulgence', 2019),
(21, 6, 11, 'Victoire', '3/0', '25/14  25/11  25/11', '75/36', 'RAS', 2019),
(22, 6, 10, 'Défaite', '0/3', '10/25  11/25  11/25', '32/75', 'RAS', 2019),
(23, 6, 3, 'Victoire', '3/0', '25/21  25/15  25/17', '75/53', 'RAS', 2019),
(24, 7, 5, 'Victoire', '3/1', '22/25  26/24  25/22  25/20', '98/91', 'Feucherolles 1 licence sans photo - Indulgence', 2019),
(25, 7, 9, 'Victoire', '3/0', '25/16  25/12  25/20', '75/48', 'RAS', 2019),
(26, 7, 8, 'Victoire', '3/2', '25/22  25/14  24/26  20/25  16/14', '110/101', 'RAS', 2019),
(27, 7, 10, 'Défaite', '0/3', '11/25  17/25  23/25', '51/75', 'RAS', 2019),
(28, 8, 9, 'Victoire', '3/0', '26/24  25/11  25/22', '76/57', 'RAS', 2019),
(29, 8, 10, 'Défaite', '1/3', '19/25  15/25  25/22  13/25', '72/97', 'RAS', 2019),
(30, 8, 7, 'Défaite', '2/3', '22/25  14/25  26/24  25/20  14/16', '101/110', 'RAS', 2019),
(31, 8, 4, 'Victoire', '3/0', '25/21  25/11  25/20', '75/52', 'RAS', 2019),
(32, 9, 8, 'Défaite', '0/3', '24/26  11/25  22/25', '57/76', 'RAS', 2019),
(33, 9, 7, 'Défaite', '0/3', '16/25  12/25  20/25', '48/75', 'RAS', 2019),
(34, 9, 4, 'Victoire', '3/0', '25/16  25/20  25/12', '75/48', 'RAS', 2019),
(35, 9, 2, 'Victoire', '3/0', '25/12  25/16  25/15', '75/43', 'Retard envoi feuille de match - Indulgence', 2019),
(36, 10, 3, 'Victoire', '3/0', '25/16  25/10  25/15', '75/41', 'Licences 2 Rives non visées - Indulgence', 2019),
(37, 10, 8, 'Victoire', '3/1', '25/19  25/15  22/25  25/13', '97/72', 'RAS', 2019),
(38, 10, 6, 'Victoire', '3/0', '25/10  25/11  25/11', '75/32', 'RAS', 2019),
(39, 10, 7, 'Victoire', '3/0', '25/11  25/17  25/23', '75/51', 'RAS', 2019),
(40, 11, 6, 'Défaite', '0/3', '14/25  11/25  11/25', '36/75', 'RAS', 2019),
(41, 11, 5, 'Défaite', '0/3', '8/25  8/25  22/25', '38/75', 'Retard envoi feuille de match - Indulgence', 2019),
(42, 11, 4, 'Défaite', '2/3', '5/25  14/25  28/26  25/12  2/15', '74/103', 'RAS', 2019),
(43, 3, 11, 'Victoire', '3/0', '25/10  25/18  25/13', '75/41', 'RAS', 2019),
(44, 11, 3, 'Défaite', '0/3', '10/25  18/25  13/25', '41/75', 'RAS', 2019),
(45, 10, 5, 'Victoire', '3/1', '25/19  22/25  25/13  25/22', '97/79', 'RAS', 2019),
(46, 5, 10, 'Défaite', '1/3', '19/25  25/22  13/25  22/25', '79/97', 'RAS', 2019),
(47, 7, 6, 'Victoire', '3/1', '21/25  25/18  25/23  25/23', '96/89', 'RAS', 2019),
(48, 6, 7, 'Défaite', '1/3', '25/21  18/25  23/25  23/25', '89/96', 'RAS', 2019),
(49, 1, 3, 'Victoire', '3/1', '21/25  25/16  26/24  25/20', '97/85', 'Manque date, terrains et points totaux', 2019),
(50, 9, 1, 'Défaite', '0/3', '16/25  15/25  22/25', '53/75', 'RAS', 2019),
(51, 8, 11, 'Victoire', '3/0', '25/7  25/7  25/8', '75/22', 'RAS', 2019),
(52, 4, 8, 'Défaite', '0/3', '21/25  11/25  20/25', '52/75', 'RAS', 2019),
(53, 3, 1, 'Défaite', '1/3', '25/21  16/25  24/26  20/25', '85/97', 'Manque date, terrains, et points totaux', 2019),
(54, 2, 6, 'Défaite', '0/3', '16/25  18/25  13/25', '47/75', 'RAS', 2019),
(55, 11, 8, 'Défaite', '0/3', '7/25  7/25  8/25', '22/75', 'RAS', 2019),
(56, 12, 11, 'Défaite', '0/3', '13/25 13/25 11/25', '37/75', 'RAS', 2018),
(57, 11, 12, 'Victoire', '3/0', '25/13 25/13 25/11', '75/37', 'RAS', 2018),
(58, 6, 10, 'Victoire', '3/0', '25/16 25/13 25/23', '75/52', 'RAS', 2018),
(59, 10, 6, 'Défaite', '0/3', '16/25 13/25 23/25', '52/75', 'RAS', 2018),
(60, 7, 1, 'Victoire', '3/0', '25/20 25/23 25/14', '75/57', 'RAS', 2018),
(61, 1, 7, 'Défaite', '0/3', '20/25 23/25 14/25', '57/75', 'RAS', 2018),
(62, 5, 13, 'Victoire', '3/0', '25/19 25/19 25/16', '75/54', 'RAS', 2018),
(63, 13, 5, 'Défaite', '0/3', '19/25 19/25 16/25', '54/75', 'RAS', 2018),
(64, 3, 4, 'Défaite', '1/3', '18/25 21/25 25/14 19/25', '83/89', 'RAS', 2018),
(65, 4, 3, 'Victoire', '3/1', '25/18 25/21 14/25 25/19', '89/83', 'RAS', 2018),
(66, 10, 11, 'Défaite', '1/3', '10/25 25/15 17/25 19/25', '71/90', 'RAS', 2018),
(67, 11, 10, 'Victoire', '3/1', '25/10 15/25 25/17 25/19', '90/71', 'RAS', 2018),
(68, 13, 6, 'Défaite', '0/3', '21/25 17/25 12/25', '50/75', 'RAS', 2018),
(69, 6, 13, 'Victoire', '3/0', '25/21 25/17 25/12', '75/50', 'RAS', 2018),
(70, 4, 7, 'Défaite', '2/3', '23/25 19/25 26/24 25/20 4/15', '97/109', 'RAS', 2018),
(71, 7, 4, 'Victoire', '3/2', '25/23 25/19 24/26 20/25 15/4', '109/97', 'RAS', 2018),
(72, 3, 5, 'Défaite', '1/3', '25/22 14/25 20/25 6/25', '65/97', 'Anomalie licence - Indulgence', 2018),
(73, 5, 3, 'Victoire', '3/1', '22/25 25/14 25/20 25/6', '97/65', 'Anomalie licence - Indulgence', 2018),
(74, 1, 12, 'Défaite', '0/3', '16/25 19/25 25/27', '60/77', 'RAS', 2018),
(75, 12, 1, 'Victoire', '3/0', '25/16 25/19 27/25', '77/60', 'RAS', 2018),
(76, 11, 1, 'Victoire', '3/1', '25/13 25/16 26/28 25/17', '101/74', 'RAS', 2018),
(77, 1, 11, 'Défaite', '1/3', '13/25 16/25 28/26 17/25', '74/101', 'RAS', 2018),
(78, 6, 3, 'Victoire', '3/2', '23/25 25/12 20/25 25/21 15/7', '116/85', 'RAS', 2018),
(79, 3, 6, 'Défaite', '2/3', '25/23 12/25 25/20 21/25 7/15', '85/116', 'RAS', 2018),
(80, 5, 7, 'Victoire', '3/0', '25/17 25/18 25/14', '75/49', 'RAS', 2018),
(81, 7, 5, 'Défaite', '0/3', '17/25 18/25 14/25', '49/75', 'RAS', 2018),
(82, 4, 12, 'Défaite', '0/3', '21/25 21/25 13/25', '55/75', 'RAS', 2018),
(83, 12, 4, 'Victoire', '3/0', '25/21 25/21 25/13', '75/55', 'RAS', 2018),
(84, 10, 13, 'Victoire', '3/0', '25/22 25/21 25/23', '75/66', 'RAS', 2018),
(85, 13, 10, 'Défaite', '0/3', '22/25 21/25 23/25', '66/75', 'RAS', 2018),
(86, 13, 11, 'Défaite', '0/3', '19/25 24/26 15/25', '58/76', 'Rambouillet: licences sans photo', 2018),
(87, 11, 13, 'Victoire', '3/0', '25/19 26/24 25/15', '76/58', 'Rambouillet: licences sans photo', 2018),
(88, 7, 6, 'Victoire', '3/2', '25/22 16/25 23/25 25/17 15/8', '104/97', 'RAS', 2018),
(89, 6, 7, 'Défaite', '2/3', '22/25 25/16 25/23 17/25 8/15', '97/104', 'RAS', 2018),
(90, 12, 5, 'Défaite', '0/3', '13/25 21/25 13/25', '47/75', 'RAS', 2018),
(91, 5, 12, 'Victoire', '3/0', '25/13 25/21 25/13', '75/47', 'RAS', 2018),
(92, 3, 10, 'Défaite', '1/3', '25/17 18/25 13/25 17/25', '73/92', 'RAS', 2018),
(93, 10, 3, 'Victoire', '3/1', '17/25 25/18 25/13 25/17', '92/73', 'RAS', 2018),
(94, 1, 4, 'Victoire', '3/0', '25/14 25/16 25/10', '75/40', 'RAS', 2018),
(95, 4, 1, 'Défaite', '0/3', '14/25 16/25 10/25', '40/75', 'RAS', 2018),
(96, 11, 4, 'Victoire', '3/1', '25/17 25/10 20/25 25/17', '95/69', 'RAS', 2018),
(97, 4, 11, 'Défaite', '1/3', '17/25 10/25 25/20 17/25', '69/95', 'RAS', 2018),
(98, 6, 12, 'Défaite', '1/3', '25/21 22/25 15/25 19/25', '81/96', 'RAS', 2018),
(99, 12, 6, 'Victoire', '3/1', '21/25 25/22 25/15 25/19', '96/81', 'RAS', 2018),
(100, 10, 7, 'Victoire', '3/0', '25/19 25/18 25/23', '75/60', 'RAS', 2018),
(101, 7, 10, 'Défaite', '0/3', '19/25 18/25 23/25', '60/75', 'RAS', 2018),
(102, 5, 1, 'Victoire', '3/0', '25/7 25/16 25/23', '75/46', 'Carrières: licences non présentées', 2018),
(103, 1, 5, 'Défaite', '0/3', '7/25 16/25 23/25', '46/75', 'Carrières: licences non présentées', 2018),
(104, 13, 3, 'Victoire', '3/0', '25/0 25/0 25/0', '75/0', 'Forfait Deux Rives', 2018),
(105, 3, 13, 'Défaite', '0/3', '0/25 0/25 0/25', '0/75', 'Forfait Deux Rives', 2018),
(106, 3, 11, 'Défaite', '0/3', '14/25 17/25 19/25', '50/75', 'RAS', 2018),
(107, 11, 3, 'Victoire', '3/0', '25/14 25/17 25/19', '75/50', 'RAS', 2018),
(108, 1, 6, 'Défaite', '1/3', '25/23 19/25 20/25 20/25', '84/98', 'Envoi de la feuille de match hors délai', 2018),
(109, 6, 1, 'Victoire', '3/1', '23/25 25/19 25/20 25/20', '98/84', 'Envoi de la feuille de match hors délai', 2018),
(110, 7, 13, 'Victoire', '3/0', '25/16 25/17 25/19', '75/52', 'RAS', 2018),
(111, 13, 7, 'Défaite', '0/3', '16/25 17/25 19/25', '52/75', 'RAS', 2018),
(112, 5, 4, 'Victoire', '3/0', '25/13 25/16 25/9', '75/38', 'RAS', 2018),
(113, 4, 5, 'Défaite', '0/3', '13/25 16/25 9/25', '38/75', 'RAS', 2018),
(114, 12, 10, 'Victoire', '2/2', '21/25 25/17 21/25 25/20', '92/87', 'Victoire de Trappes (points)', 2018),
(115, 10, 12, 'Défaite', '2/2', '25/21 17/25 25/21 20/25', '87/92', 'Victoire de Trappes (points)', 2018),
(116, 11, 5, 'Victoire', '3/0', '25/21 25/7 25/18', '75/46', 'RAS', 2018),
(117, 5, 11, 'Défaite', '0/3', '21/25 7/25 18/25', '46/75', 'RAS', 2018),
(118, 4, 6, 'Victoire', '3/0', '25/23 25/12 25/15', '75/50', 'RAS', 2018),
(119, 6, 4, 'Défaite', '0/3', '23/25 12/25 15/25', '50/75', 'RAS', 2018),
(120, 3, 7, 'Défaite', '0/3', '14/25 14/25 19/25', '47/75', 'RAS', 2018),
(121, 7, 3, 'Victoire', '3/0', '25/14 25/14 25/19', '75/47', 'RAS', 2018),
(122, 10, 1, 'Défaite', '2/3', '25/27 25/20 21/25 25/21 12/15', '108/108', 'Carrières: licences non présentées', 2018),
(123, 1, 10, 'Victoire', '3/2', '27/25 20/25 25/21 21/25 15/12', '108/108', 'Carrières: licences non présentées', 2018),
(124, 13, 12, 'Défaite', '0/3', '15/25 13/25 23/25', '51/75', 'Trappes: 1 licence sans photo - CNI présentée', 2018),
(125, 12, 13, 'Victoire', '3/0', '25/15 25/13 25/23', '75/51', 'Trappes: 1 licence sans photo - CNI présentée', 2018),
(126, 7, 11, 'Défaite', '0/3', '19/25 13/25 20/25', '52/75', 'Maisons Laffite: une licence sans photo', 2018),
(127, 11, 7, 'Victoire', '3/0', '25/19 25/13 25/20', '75/52', 'Maisons Laffite: une licence sans photo', 2018),
(128, 6, 5, 'Défaite', '1/3', '19/25 25/21 22/25 15/25', '81/96', 'RAS', 2018),
(129, 5, 6, 'Victoire', '3/1', '25/19 21/25 25/22 25/15', '96/81', 'RAS', 2018),
(130, 12, 3, 'Victoire', '3/0', '25/14 25/10 25/18', '75/42', 'RAS', 2018),
(131, 3, 12, 'Défaite', '0/3', '14/25 10/25 18/25', '42/75', 'RAS', 2018),
(132, 4, 10, 'Défaite', '0/3', '13/25 13/25 22/25', '48/75', 'RAS', 2018),
(133, 10, 4, 'Victoire', '3/0', '25/13 25/13 25/22', '75/48', 'RAS', 2018),
(134, 1, 13, 'Défaite', '2/3', '19/25 25/17 25/21 23/25 13/15', '105/103', 'RAS', 2018),
(135, 13, 1, 'Victoire', '3/2', '25/19 17/25 21/25 25/23 15/13', '103/105', 'RAS', 2018);

-- --------------------------------------------------------

--
-- Structure de la table `volley_resultats`
--

DROP TABLE IF EXISTS `volley_resultats`;
CREATE TABLE IF NOT EXISTS `volley_resultats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `victoires` int(11) NOT NULL,
  `defaites` int(11) NOT NULL,
  `nb_sets_gagnes` int(11) NOT NULL,
  `nb_points_total` int(11) NOT NULL,
  `nb_matchs` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `id_equipe` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `volley_resultats`
--

INSERT INTO `volley_resultats` (`id`, `victoires`, `defaites`, `nb_sets_gagnes`, `nb_points_total`, `nb_matchs`, `annee`, `id_equipe`) VALUES
(1, 4, 1, 12, 379, 5, 2019, 1),
(2, 0, 5, 0, 235, 5, 2019, 2),
(3, 2, 3, 7, 329, 5, 2019, 3),
(4, 1, 4, 4, 335, 5, 2019, 4),
(5, 3, 2, 11, 417, 5, 2019, 5),
(6, 3, 2, 10, 371, 5, 2019, 6),
(7, 4, 1, 12, 430, 5, 2019, 7),
(8, 3, 2, 12, 399, 5, 2019, 8),
(9, 2, 3, 6, 408, 5, 2019, 9),
(10, 5, 0, 15, 419, 5, 2019, 10),
(11, 0, 5, 2, 211, 5, 2019, 11),
(12, 8, 0, 24, 662, 8, 2018, 11),
(13, 4, 4, 16, 673, 8, 2018, 6),
(14, 4, 4, 17, 635, 8, 2018, 10),
(15, 5, 3, 15, 599, 8, 2018, 7),
(16, 2, 6, 10, 609, 8, 2018, 1),
(17, 7, 1, 21, 614, 8, 2018, 5),
(18, 0, 8, 5, 445, 8, 2018, 3),
(19, 2, 6, 9, 511, 8, 2018, 4),
(20, 6, 2, 17, 574, 8, 2018, 12),
(21, 2, 6, 6, 509, 8, 2018, 13),
(22, 0, 0, 0, 0, 0, 2020, 14),
(23, 0, 0, 0, 0, 0, 2020, 15),
(24, 0, 0, 0, 0, 0, 2020, 5),
(25, 0, 0, 0, 0, 0, 2020, 3),
(26, 0, 0, 0, 0, 0, 2020, 16),
(27, 0, 0, 0, 0, 0, 2020, 4),
(28, 0, 0, 0, 0, 0, 2020, 6),
(29, 0, 0, 0, 0, 0, 2020, 8),
(30, 0, 0, 0, 0, 0, 2020, 9),
(31, 0, 0, 0, 0, 0, 2020, 11),
(32, 0, 0, 0, 0, 0, 2020, 17);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
