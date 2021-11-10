-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 nov. 2021 à 16:54
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test1`
--

-- --------------------------------------------------------

--
-- Structure de la table `information_pc`
--

DROP TABLE IF EXISTS `information_pc`;
CREATE TABLE IF NOT EXISTS `information_pc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ordinateur` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nom_utilisateur` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `prenom_utilisateur` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `ref_qualite` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `emplacement` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `services` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `adresse_ip` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `reference` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `lan_reseau` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `type_materiel` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `en_service` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `numero_serie` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `systeme_exploitation` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `mac_adresse` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date_achat` date NOT NULL,
  `login_admin_local` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `pwd_admin_local` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `login_admin_boissy` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `pwd_admin_boissy` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `user_login` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `user_pwd` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `vpn` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `information_pc`
--

INSERT INTO `information_pc` (`ID`, `nom_ordinateur`, `nom_utilisateur`, `prenom_utilisateur`, `ref_qualite`, `emplacement`, `services`, `adresse_ip`, `reference`, `lan_reseau`, `type_materiel`, `en_service`, `numero_serie`, `systeme_exploitation`, `mac_adresse`, `date_achat`, `login_admin_local`, `pwd_admin_local`, `login_admin_boissy`, `pwd_admin_boissy`, `user_login`, `user_pwd`, `vpn`) VALUES
(30, 'ANEP-BEE-02', 'anthony', 'cozette', '54', 'BEE', 'Atelier', '192.168.0.010', 'gggr', 'ANEP', 'df', 'oui', 'aucun', 'Windows 10 Pro', '00:1B:78:15:09:B2', '2021-11-10', 'hjkgfhsdfg', 'nlknlk', 'ss', 'hhh', 'Boissy/hcguirao Boissy/athavarasa', 'gujm', 'oui'),
(20, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.016', 'aucun', 'Test IPVIEW', 'Adapt RS485/IP', 'oui', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(19, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.015', 'aucun', 'Test IPVIEW', 'Adapt RS485/IP', 'oui', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(32, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'Salle Tests', 'Informatique', '192.168.0.010', 'aucune', 'Test IPVIEW', 'Adapt RS485/IP', 'Oui', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun'),
(14, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'Salle Tests', 'Informatique', '192.168.0.010', 'aucune', 'Test IPVIEW', 'Adapt RS485/IP', 'Oui', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun'),
(21, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.017', 'aucun', 'Test IPVIEW', 'Adapt RS485/IP', 'oui', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(22, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.018', 'aucun', 'Test IPVIEW', 'Adapt RS485/IP', 'oui', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(23, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.019', 'aucun', 'Test IPVIEW', 'Adapt RS485/IP', 'oui', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(31, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.017', 'aucun', 'Test IPVIEW', 'Adapt RS485/IP', 'oui', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(41, 'anep-com-12', 'cozette', 'thibault', 'aucun', 'nantes', 'commercial', '192.168.1.266', 'aucun', 'anep', 'portable', 'oui', 'nnsmejfefljhk', 'windows 9', 'AUCUN', '2021-10-16', 'admin', 'ojfdsglkn', 'admincampos', 'kmldjfgjn', 't.cozette', 'ljkhsf', 'oui'),
(40, 'ANEP/COM/05', 'laurent', 'guerin', 'l16', 'commercial', 'commercial', '192.168.1.233', '1250744', 'ANEP', 'portable', 'non', 'kkdnglksjhg', 'windows 1', '00:1B:78:15:09:B2', '2021-10-14', 'admin', 'sdgsdefdsf', 'admincampos', 'kndfgijhdfg', 'l.guerin', 'sdgfdhdgfh', 'non'),
(28, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.011', 'aucun', 'Test IPVIEW', 'Adapt RS485/IP', 'non', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'oui'),
(36, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.011', 'aucun', 'Test IPVIEW', 'Adapt RS485/IP', 'non', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(33, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.011', 'aucun', 'Test IPVIEW', 'Adapt RS485/IP', 'non', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(34, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.011', 'aucun', 'rrrr', 'df', 'non', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(37, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.011', 'aucun', 'rrrr', 'df', 'non', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(38, 'ALTO / IPVIEW', 'Campos', 'Henrique', 'aucun', 'salle tests', 'informatique', '192.168.0.011', 'aucun', 'Test IPVIEW', 'Adapt RS485/IP', 'non', 'aucun', 'aucun', 'aucun', '2007-01-01', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'aucun', 'non'),
(39, 'dfggf', 'anthony', 'campos', 'rthtry', 'fdgffdg', 'g', 'ertertre', 'dfgfdg', 'etryert', 'dfgf', 'dfgfdgg', 'dfgdfg', 'fdgdfg', 'etert', '2021-11-03', 'ertert', 'zertzert', 'erttrtr', 'dfgdfgfg', 'aucun', 'gh', 'dfgdfqzt'),
(43, 'maxime', 'Atelier COP', 'Anujan', '', 'ss', 'voisin', 'rrrr', 'HP EliteDesk 800 GI TWR', 'rrrr', 'Ordinateur', 'oui', 'rzg', '', 'sgsdf', '2021-11-04', 'ANEP-BEE-01hcguirao', 'sfdgsdf', 'tujkiuktyj', 'sdfdsf', 'romain', 'dqsfsdf', 'ouvrir la selection'),
(44, 'ALTO / IPVIEW', 'anthony', 'cozette', '', 'BEE', 'ss', '192.168.1.122', 'HP EliteDesk 800 GI TWR', 'Test IPVIEW', 'Adapt RS485/IP', 'oui', 'aucun', '', '00:1B:78:15:09:B2', '2021-11-05', 'hjkgfhsdfg', 'qdfqsf', 'tujkiuktyj', 'sq<dfsd', 'aucun', 'qdsfqdsfqsdf', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'admin', 'golden'),
(5, 'user', 'user'),
(6, 'admincampos', 'eb459aedab226f507f25f3a191c40f3ff4ffb951f126a53fd881c966dfc003a5'),
(7, 'user', '04f8996da763b7a969b1028ee3007569eaf3a635486ddab211d512c85b9df8fb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
