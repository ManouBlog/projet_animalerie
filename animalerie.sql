-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 11:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animalerie`
--

-- --------------------------------------------------------

--
-- Table structure for table `animalerie_clients`
--

CREATE TABLE `animalerie_clients` (
  `id` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `cartes` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalerie_clients`
--

INSERT INTO `animalerie_clients` (`id`, `nom`, `adresse`, `numero`, `ville`, `cartes`) VALUES
(2, 'Adjobi', 'bp58BONOUA', '2147483647', 'ABIDJAN', '0'),
(3, 'Adjobi', 'bp58BONOUA', '22505457597363', 'ABIDJAN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `animalerie_listes`
--

CREATE TABLE `animalerie_listes` (
  `id` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `race` varchar(60) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `poids` varchar(20) NOT NULL,
  `age` varchar(40) NOT NULL,
  `cout` varchar(20) NOT NULL,
  `taille` varchar(30) NOT NULL,
  `fourrue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalerie_listes`
--

INSERT INTO `animalerie_listes` (`id`, `nom`, `race`, `categorie`, `poids`, `age`, `cout`, `taille`, `fourrue`) VALUES
(3, '', 'gratin', 'anne', '100kg', '2ans', '2500fr', '120cm', 'noir');

-- --------------------------------------------------------

--
-- Table structure for table `animalerie_oiseaux`
--

CREATE TABLE `animalerie_oiseaux` (
  `id` int(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `cout` varchar(40) NOT NULL,
  `categorie` varchar(30) NOT NULL,
  `bruit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalerie_oiseaux`
--

INSERT INTO `animalerie_oiseaux` (`id`, `nom`, `cout`, `categorie`, `bruit`) VALUES
(1, 'piperron', '3000', 'plume leger', 'couincouin');

-- --------------------------------------------------------

--
-- Table structure for table `animalerie_produits`
--

CREATE TABLE `animalerie_produits` (
  `id` int(20) NOT NULL,
  `produits` varchar(30) NOT NULL,
  `quantites_min` varchar(50) NOT NULL,
  `quantites_stock` varchar(30) NOT NULL,
  `categories` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalerie_produits`
--

INSERT INTO `animalerie_produits` (`id`, `produits`, `quantites_min`, `quantites_stock`, `categories`) VALUES
(9, 'bonbon', '230', '320', 'pin'),
(10, 'tre', '300', '400', 'oiseaux');

-- --------------------------------------------------------

--
-- Table structure for table `animalerie_user`
--

CREATE TABLE `animalerie_user` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `cpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalerie_user`
--

INSERT INTO `animalerie_user` (`id`, `username`, `pass`, `cpass`) VALUES
(1, 'kadjo', '123', '123'),
(2, 'piscou', 'azerty123', 'azerty123');

-- --------------------------------------------------------

--
-- Table structure for table `animalerie_ventes`
--

CREATE TABLE `animalerie_ventes` (
  `id` int(20) NOT NULL,
  `animaux` varchar(20) NOT NULL,
  `prix_unitaire` int(20) NOT NULL,
  `nombre` int(30) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalerie_ventes`
--

INSERT INTO `animalerie_ventes` (`id`, `animaux`, `prix_unitaire`, `nombre`, `total`) VALUES
(1, 'chiens', 2000, 3, 6000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animalerie_clients`
--
ALTER TABLE `animalerie_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animalerie_listes`
--
ALTER TABLE `animalerie_listes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animalerie_oiseaux`
--
ALTER TABLE `animalerie_oiseaux`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animalerie_produits`
--
ALTER TABLE `animalerie_produits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animalerie_user`
--
ALTER TABLE `animalerie_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animalerie_ventes`
--
ALTER TABLE `animalerie_ventes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animalerie_clients`
--
ALTER TABLE `animalerie_clients`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `animalerie_listes`
--
ALTER TABLE `animalerie_listes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `animalerie_oiseaux`
--
ALTER TABLE `animalerie_oiseaux`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `animalerie_produits`
--
ALTER TABLE `animalerie_produits`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `animalerie_user`
--
ALTER TABLE `animalerie_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `animalerie_ventes`
--
ALTER TABLE `animalerie_ventes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
