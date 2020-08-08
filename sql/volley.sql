-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 08 août 2020 à 19:40
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `volley`
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
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(11, 'Rambouillet');

-- --------------------------------------------------------

--
-- Structure de la table `volley_matchs`
--

DROP TABLE IF EXISTS `volley_matchs`;
CREATE TABLE IF NOT EXISTS `volley_matchs` (
  `id` int(11) NOT NULL,
  `id_equipe1` int(11) NOT NULL,
  `id_equipe2` int(11) NOT NULL,
  `resultat` varchar(255) NOT NULL,
  `sets` varchar(255) NOT NULL,
  `scores` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  `penalites` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `volley_matchs`
--

INSERT INTO `volley_matchs` (`id`, `id_equipe1`, `id_equipe2`, `resultat`, `sets`, `scores`, `points`, `penalites`) VALUES
(1, 1, 2, 'Victoire', '2 / 0', '25 / 23  25 / 19', '51 / 42', 'Match interrompu par coupure d\'électricité'),
(2, 1, 4, 'Victoire', '3 / 0', '25 / 19  25 / 13  26 / 24', '76 / 56', 'RAS'),
(3, 1, 5, 'Défaite', '1 / 3', '17 / 25  22 / 25  25 / 22  16 /25', '80 / 97', 'RAS'),
(4, 1, 9, 'Victoire', '3 / 0', '25 / 16  25 / 15  25 / 22', '75 / 53', 'RAS'),
(5, 2, 1, 'Défaite', '0 / 2', '23 / 25  19 / 26', '42 / 51', 'Match interrompu par coupure d\'électricité'),
(6, 2, 5, 'Défaite', '0 / 3', '14 / 25  22 / 25  14 / 25', '50 / 75', 'Licence référent Feucherolles non visée - Indulgence'),
(7, 2, 3, 'Défaite', '0 / 3', '21 / 25  23 / 25  9 / 25', '53 / 75', 'Retard envoi feuille de match / licences non visées - Indulgence'),
(8, 2, 9, 'Défaite', '0 / 3', '12 / 25  16 / 25  15 / 25', '43 / 75', 'Retard envoi feuille de match - Indulgence'),
(9, 3, 10, 'Défaite', '0 / 3', '16 / 25  10 / 25  15 / 25', '41 / 75', 'Licences 2 Rives non visées - Indulgence'),
(10, 3, 2, 'Victoire', '3 / 0', '25 / 21  25 / 23  25 / 9', '75 / 53', 'Retard envoi feuille de match / licences non visées - Indulgence'),
(11, 3, 6, 'Défaite', '0 / 3', '21 / 25  15 / 25  17 / 25', '53 / 75', 'RAS'),
(12, 4, 6, 'Défaite', '1 / 3', '27 / 25  16 / 25  15 / 25  18 / 25', '76 / 100', 'Manque nom équipe Fontenay - Indulgence'),
(13, 4, 1, 'Défaite', '0 / 3', '19 / 25  13 / 25  24 / 26', '56 / 76', 'RAS'),
(14, 4, 9, 'Défaite', '0 / 3', '16 / 25  20 / 25  12 / 25', '48 / 75', 'RAS'),
(15, 4, 11, 'Victoire', '3 / 2', '25 / 5  25 / 14  26 / 28  12 / 25  15 / 2', '103 / 74', 'RAS'),
(16, 5, 7, 'Défaite', '1 / 3', '25 / 22  24 / 26  22 / 25  20 / 25', '91 / 98', 'Feucherolles 1 licence sans photo - Indulgence'),
(17, 5, 2, 'Victoire', '3 / 0', '25 / 14  25 / 22  25 / 14', '75 / 50', 'Licence référent Feucherolles non visée - Indulgence'),
(18, 5, 11, 'Victoire', '3 / 0', '25 / 8  25 / 8  25 / 22', '75 / 38', 'Retard envoi feuille de match - Indulgence '),
(19, 5, 1, 'Victoire', '3 / 1', '25 / 17  25 / 22  22 / 25  25 / 16', '97 / 80', 'RAS'),
(20, 6, 4, 'Victoire', '3 / 1', '25 / 27  25 / 16  25 / 15  25 / 18  ', '100 / 76', 'Manque nom équipe Fontenay - Indulgence'),
(21, 6, 11, 'Victoire', '3 / 0', '25 / 14  25 / 11  25 / 11', '75 / 36', 'RAS'),
(22, 6, 10, 'Défaite', '0 / 3', '10 / 25  11 / 25  11 / 25', '32 / 75', 'RAS'),
(23, 6, 3, 'Victoire', '3 / 0', '25 / 21  25 / 15  25 / 17', '75 / 53', 'RAS'),
(24, 7, 5, 'Victoire', '3 / 1', '22 / 25  26 / 24  25 / 22  25 / 20', '98 / 91', 'Feucherolles 1 licence sans photo - Indulgence'),
(25, 7, 9, 'Victoire', '3 / 0', '25 / 16  25 / 12  25 / 20', '75 / 48', 'RAS'),
(26, 7, 8, 'Victoire', '3 / 2', '25 / 22  25 / 14  24 / 26  20 / 25  16 / 14', '110 / 101', 'RAS'),
(27, 7, 10, 'Défaite', '0 / 3', '11 / 25  17 / 25  23 / 25', '51 / 75', 'RAS'),
(28, 8, 9, 'Victoire', '3 / 0', '26 / 24  25 / 11  25 / 22', '76 / 57', 'RAS'),
(29, 8, 10, 'Défaite', '1 / 3', '19 / 25  15 / 25  25 / 22  13 / 25', '72 / 97', 'RAS'),
(30, 8, 7, 'Défaite', '2 / 3', '22 / 25  14 / 25  26 / 24  25 / 20  14 / 16', '101 / 110', 'RAS'),
(31, 8, 4, 'Victoire', '3 / 0', '25 / 21  25 / 11  25 / 20', '75 / 52', 'RAS'),
(32, 9, 8, 'Défaite', '0 / 3', '24 / 26  11 / 25  22 / 25', '57 / 76', 'RAS'),
(33, 9, 7, 'Défaite', '0 / 3', '16 / 25  12 / 25  20 / 25', '48 / 75', 'RAS'),
(34, 9, 4, 'Victoire', '3 / 0', '25 / 16  25 / 20  25 / 12', '75 / 48', 'RAS'),
(35, 9, 2, 'Victoire', '3 / 0', '25 / 12  25 / 16  25 / 15', '75 / 43', 'Retard envoi feuille de match - Indulgence'),
(36, 10, 3, 'Victoire', '3 / 0', '25 / 16  25 / 10  25 / 15', '75 / 41', 'Licences 2 Rives non visées - Indulgence'),
(37, 10, 8, 'Victoire', '3 / 1', '25 / 19  25 / 15  22 / 25  25 / 13', '97 / 72', 'RAS'),
(38, 10, 6, 'Victoire', '3 / 0', '25 / 10  25 / 11  25 / 11', '75 / 32', 'RAS'),
(39, 10, 7, 'Victoire', '3 / 0', '25 / 11  25 / 17  25 / 23', '75 / 51', 'RAS'),
(40, 11, 6, 'Défaite', '0 / 3', '14 / 25  11 / 25  11 / 25', '36 / 75', 'RAS'),
(41, 11, 5, 'Défaite', '0 / 3', '8 / 25  8 / 25  22 / 25', '38 / 75', 'Retard envoi feuille de match - Indulgence'),
(42, 11, 4, 'Défaite', '2 / 3', '5 / 25  14 / 25  28 / 26  25 / 12  2 / 15', '74 / 103', 'RAS'),
(43, 3, 11, 'Victoire', '3 / 0', '25 / 10  25 / 18  25 / 13', '75 / 41', 'RAS'),
(44, 11, 3, 'Défaite', '0 / 3', '10 / 25  18 / 25  13 / 25', '41 / 75', 'RAS'),
(45, 10, 5, 'Victoire', '3 / 1', '25 / 19  22 / 25  25 / 13  25 / 22', '97 / 79', 'RAS'),
(46, 5, 10, 'Défaite', '1 / 3', '19 / 25  25 / 22  13 / 25  22 / 25', '79 / 97', 'RAS'),
(47, 7, 6, 'Victoire', '3 / 1', '21 / 25  25 / 18  25 / 23  25 / 23', '96 / 89', 'RAS'),
(48, 6, 7, 'Défaite', '1 / 3', '25 / 21  18 / 25  23 / 25  23 / 25', '89 / 96', 'RAS'),
(49, 1, 3, 'Victoire', '3 / 1', '21 / 25  25 / 16  26 / 24  25 / 20', '97 / 85', 'Manque date, terrains et points totaux'),
(50, 9, 1, 'Défaite', '0 / 3', '16 / 25  15 / 25  22 / 25', '53 / 75', 'RAS'),
(51, 8, 11, 'Victoire', '3 / 0', '25 / 7  25 / 7  25 / 8', '75 / 22', 'RAS'),
(52, 4, 8, 'Défaite', '0 / 3', '21 / 25  11 / 25  20 / 25', '52 / 75', 'RAS'),
(53, 3, 1, 'Défaite', '1 / 3', '25 / 21  16 / 25  24 / 26  20 / 25', '85 / 97', 'Manque date, terrains, et points totaux'),
(54, 2, 6, 'Défaite', '0 / 3', '16 / 25  18 / 25  13 / 25', '47 / 75', 'RAS'),
(55, 11, 8, 'Défaite', '0 / 3', '7 / 25  7 / 25  8 / 25', '22 / 75', 'RAS');

-- --------------------------------------------------------

--
-- Structure de la table `volley_resultats`
--

DROP TABLE IF EXISTS `volley_resultats`;
CREATE TABLE IF NOT EXISTS `volley_resultats` (
  `id` int(11) NOT NULL,
  `victoires` int(11) NOT NULL,
  `defaites` int(11) NOT NULL,
  `nb_sets_gagnes` int(11) NOT NULL,
  `nb_points_total` int(11) NOT NULL,
  `nb_matchs` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `id_equipe` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(12, 1, 0, 3, 75, 1, 2020, 1),
(13, 0, 1, 0, 70, 1, 2020, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
