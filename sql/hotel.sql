-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 juin 2021 à 14:29
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `bar`
--

CREATE TABLE `bar` (
  `id_bar` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bar`
--

INSERT INTO `bar` (`id_bar`, `name`) VALUES
(1, 'Bar ouest'),
(2, 'bar sud');

-- --------------------------------------------------------

--
-- Structure de la table `bar_boisson`
--

CREATE TABLE `bar_boisson` (
  `id_boisson` int(11) NOT NULL,
  `id_bar` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `boisson`
--

CREATE TABLE `boisson` (
  `id_boisson` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix_un` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_chambre` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `option_chambre` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `occupe` tinyint(1) NOT NULL,
  `categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` varchar(30) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client_boisson`
--

CREATE TABLE `client_boisson` (
  `id_client` varchar(30) NOT NULL,
  `id_boisson` int(11) NOT NULL,
  `id_bar` int(11) NOT NULL,
  `id_com` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client_chambre`
--

CREATE TABLE `client_chambre` (
  `id_client` varchar(30) NOT NULL,
  `id_chambre` varchar(30) NOT NULL,
  `date_d` date NOT NULL,
  `date_f` date NOT NULL,
  `num_reservation` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client_menu`
--

CREATE TABLE `client_menu` (
  `id_client` varchar(30) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_com` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client_piscine`
--

CREATE TABLE `client_piscine` (
  `num_reservation` int(11) NOT NULL,
  `id_piscine` varchar(30) NOT NULL,
  `id_client` varchar(30) NOT NULL,
  `date_d` date NOT NULL,
  `date_f` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client_salle`
--

CREATE TABLE `client_salle` (
  `num_reservation` int(11) NOT NULL,
  `id_salle` varchar(30) NOT NULL,
  `id_client` varchar(30) NOT NULL,
  `date_d` date NOT NULL,
  `date_f` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id_facture` varchar(30) NOT NULL,
  `id_client` varchar(30) NOT NULL,
  `num_reference` int(11) NOT NULL,
  `date` date NOT NULL,
  `total_ttc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix_un` float NOT NULL,
  `id_restaurant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `piscine`
--

CREATE TABLE `piscine` (
  `id_piscine` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ouverture` datetime NOT NULL,
  `fermeture` datetime NOT NULL,
  `nettoyage` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `id_restaurant` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `options` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`id_bar`);

--
-- Index pour la table `bar_boisson`
--
ALTER TABLE `bar_boisson`
  ADD PRIMARY KEY (`id_boisson`,`id_bar`);

--
-- Index pour la table `boisson`
--
ALTER TABLE `boisson`
  ADD PRIMARY KEY (`id_boisson`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_chambre`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `client_boisson`
--
ALTER TABLE `client_boisson`
  ADD PRIMARY KEY (`id_client`,`id_boisson`,`id_bar`,`id_com`);

--
-- Index pour la table `client_chambre`
--
ALTER TABLE `client_chambre`
  ADD PRIMARY KEY (`id_client`,`id_chambre`,`num_reservation`);

--
-- Index pour la table `client_menu`
--
ALTER TABLE `client_menu`
  ADD PRIMARY KEY (`id_client`,`id_menu`,`id_com`);

--
-- Index pour la table `client_piscine`
--
ALTER TABLE `client_piscine`
  ADD PRIMARY KEY (`num_reservation`,`id_piscine`,`id_client`);

--
-- Index pour la table `client_salle`
--
ALTER TABLE `client_salle`
  ADD PRIMARY KEY (`num_reservation`,`id_salle`,`id_client`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_facture`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD KEY `id_restaurant` (`id_restaurant`);

--
-- Index pour la table `piscine`
--
ALTER TABLE `piscine`
  ADD PRIMARY KEY (`id_piscine`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bar`
--
ALTER TABLE `bar`
  MODIFY `id_bar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
