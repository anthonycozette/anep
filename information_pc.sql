-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 29 oct. 2021 à 11:55
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
  `nom_ordinateur` varchar(255) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `prenom_utlisateur` varchar(255) NOT NULL,
  `ref_qualite` varchar(255) NOT NULL,
  `production` varchar(255) NOT NULL,
  `emplacement` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `adresse_ip` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `lan_reseau` varchar(255) NOT NULL,
  `type_materiel` varchar(255) NOT NULL,
  `en_service` varchar(255) NOT NULL,
  `numero_serie` varchar(255) NOT NULL,
  `systeme_exploitation` varchar(255) NOT NULL,
  `mac_adresse` varchar(255) DEFAULT NULL,
  `date_achat` date NOT NULL,
  `login_admin_local` varchar(255) NOT NULL,
  `pwd_admin_local` varchar(255) NOT NULL,
  `login_admin_boissy` varchar(255) NOT NULL,
  `pwd_admin_boissy` varchar(255) NOT NULL,
  `user_login` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `vpn` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `information_pc`
--

INSERT INTO `information_pc` (`ID`, `nom_ordinateur`, `nom_utilisateur`, `prenom_utlisateur`, `ref_qualite`, `production`, `emplacement`, `services`, `adresse_ip`, `reference`, `lan_reseau`, `type_materiel`, `en_service`, `numero_serie`, `systeme_exploitation`, `mac_adresse`, `date_achat`, `login_admin_local`, `pwd_admin_local`, `login_admin_boissy`, `pwd_admin_boissy`, `user_login`, `user_pwd`, `vpn`) VALUES
(1, 'ANEP-BEI-12', 'cozette', 'anthony', 'a', 'oui', 'BEI', 'informatique', '192.168.1.134\r\n', 'HP PRO Desk 400 G7 Small Form', 'ANEP', 'ordinateur', 'oui', 'CZC1288MYF', 'Windows 10', '', '2021-10-01', 'admin', 'golden', 'admincampos', 'romain', 'acozette', 'Cocobico13/08', 'non'),
(2, 'ANEP-BEI-12', 'cozette', 'anthony', 'a', 'oui', 'BEI', 'informatique', '192.168.1.134\r\n', 'HP PRO Desk 400 G7 Small Form', 'ANEP', 'ordinateur', 'oui', 'CZC1288MYF', 'Windows 10', '', '2021-10-01', 'admin', 'golden', 'admincampos', 'romain', 'acozette', 'Cocobico13/08', 'non'),
(3, 'ss', 'anthony', 'cozette', 'ss', 'ss', 'ss', 'ss', 'ss', 'sss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', '2021-10-27', 'ss', 'ss', 'ss', 'ss', 'ssss', 'ffff', 'ss'),
(4, 'ss', 'anthony', 'cozette', 'ss', 'ss', 'ss', 'ss', 'ss', 'sss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', '2021-10-27', 'ss', 'ss', 'ss', 'ss', 'ssss', 'ffff', 'ss'),
(5, 'ss', 'anthony', 'cozette', 'ss', 'ss', 'ss', 'ss', 'ss', 'sss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', '2021-10-27', 'ss', 'ss', 'ss', 'ss', 'ssss', 'ffff', 'ss'),
(6, 'ss', 'anthony', 'cozette', 'ss', 'ss', 'ss', 'ss', 'ss', 'sss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', '2021-10-27', 'ss', 'ss', 'ss', 'ss', 'ssss', 'ffff', 'ss'),
(7, 'ss', 'anthony', 'cozette', 'ss', 'ss', 'ss', 'ss', 'ss', 'sss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', '2021-10-27', 'ss', 'ss', 'ss', 'ss', 'ssss', 'ffff', 'ss'),
(8, 'ss', 'anthony', 'cozette', 'ss', 'ss', 'ss', 'ss', 'ss', 'sss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', '2021-10-27', 'ss', 'ss', 'ss', 'ss', 'ssss', 'ffff', 'ss'),
(9, 'ss', 'anthony', 'cozette', 'ss', 'ss', 'ss', 'ss', 'ss', 'sss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', '2021-10-27', 'ss', 'ss', 'ss', 'ss', 'ssss', 'ffff', 'ss'),
(10, 'ss', 'anthony', 'cozette', 'ss', 'ss', 'ss', 'ss', 'ss', 'sss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', '2021-10-27', 'ss', 'ss', 'ss', 'ss', 'ssss', 'ffff', 'ss'),
(11, 'ANEP-BEE-01', 'Thavarasa', 'Anujan', 'l16', 'oui', 'BEE', 'BEE', '192.168.1.122', 'HP EliteDesk 800 GI TWR', 'ANEP', 'Ordinateur', 'oui', 'CZC4142LSC', 'Windows 10 Pro', 'aucun', '2014-03-01', 'ANEP-BEE-01hcguirao', 'hcg429', 'BOISSYadmincampos', 'romain', 'Boissyhcguirao Boissyathavarasa', 'hcg429/at429', 'non');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
