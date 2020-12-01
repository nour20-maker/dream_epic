-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 09:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream_epic`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idp` int(11) NOT NULL,
  `typep` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_talent` int(11) NOT NULL,
  `prix_total` float NOT NULL,
  `date_creation` date NOT NULL,
  `etat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_E` int(11) NOT NULL,
  `CIN` int(11) NOT NULL,
  `nom_E` varchar(50) NOT NULL,
  `prenom_E` varchar(50) NOT NULL,
  `age_E` date NOT NULL,
  `numero_E` int(11) NOT NULL,
  `adresse_E` varchar(150) NOT NULL,
  `specialite_E` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `sport` varchar(50) NOT NULL,
  `CV_E` varchar(150) NOT NULL,
  `login_E` varchar(150) NOT NULL,
  `mdp_E` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `id_event` int(11) NOT NULL,
  `nom_event` varchar(50) NOT NULL,
  `adresse_event` varchar(150) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `information_event` varchar(250) NOT NULL,
  `nombre_participants` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_talent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `le_blog`
--

CREATE TABLE `le_blog` (
  `IdBlog` int(11) NOT NULL,
  `ContentBlog` longtext NOT NULL,
  `DatePublicationBlog` date NOT NULL,
  `LastModifiedBlog` date NOT NULL,
  `TitleBlog` varchar(250) NOT NULL,
  `MediaBlog` varchar(250) NOT NULL,
  `StateBlog` varchar(70) NOT NULL,
  `CommentEnableBlog` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `le_commentaire`
--

CREATE TABLE `le_commentaire` (
  `IdComment` int(11) NOT NULL,
  `ContentComment` longtext NOT NULL,
  `DatePublicationComment` date NOT NULL,
  `idBlogC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id_M` int(11) NOT NULL,
  `CIN` int(11) NOT NULL,
  `nom_M` varchar(50) NOT NULL,
  `prenom_M` varchar(15) NOT NULL,
  `age_M` date NOT NULL,
  `numero_M` int(11) NOT NULL,
  `adresse_M` varchar(150) NOT NULL,
  `specialite_M` varchar(50) NOT NULL,
  `sport` varchar(15) NOT NULL,
  `nomA` varchar(50) NOT NULL,
  `login_M` varchar(150) NOT NULL,
  `mdp_M` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `idp` int(11) NOT NULL,
  `nomp` varchar(100) NOT NULL,
  `marquep` varchar(100) NOT NULL,
  `taillep` varchar(10) NOT NULL,
  `couleurp` varchar(100) NOT NULL,
  `color1` varchar(100) NOT NULL,
  `color2` varchar(100) NOT NULL,
  `color3` varchar(100) NOT NULL,
  `prix` float NOT NULL,
  `quantitep` int(11) NOT NULL,
  `imagep` varchar(150) NOT NULL,
  `sexe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `specialitesport`
--

CREATE TABLE `specialitesport` (
  `idSpecialiteSport` int(11) NOT NULL,
  `nomSpecialiteSport` varchar(20) NOT NULL,
  `typeSpecialiteSport` varchar(20) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `typeEvaluation` float NOT NULL,
  `typePratique` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

CREATE TABLE `talent` (
  `idTalent` int(11) NOT NULL,
  `nomTalent` varchar(20) NOT NULL,
  `prenomTalent` varchar(20) NOT NULL,
  `dateDeNaissanceTalent` date NOT NULL,
  `ageTalent` int(11) NOT NULL,
  `taille` float NOT NULL,
  `poids` float NOT NULL,
  `adresseTalent` varchar(250) NOT NULL,
  `adresseEmailTalent` varchar(250) NOT NULL,
  `numTelephoneTalent` int(11) NOT NULL,
  `noteEvaluation` float NOT NULL,
  `photoTalent` varchar(100) NOT NULL,
  `videoTalent` varchar(100) NOT NULL,
  `sexe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `prix_ticket` float NOT NULL,
  `date_achat` date NOT NULL,
  `qr_code` varchar(150) NOT NULL,
  `idTalent` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `fk_id_talent` (`id_talent`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_E`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `fk_id_eventtalent` (`id_talent`);

--
-- Indexes for table `le_blog`
--
ALTER TABLE `le_blog`
  ADD PRIMARY KEY (`IdBlog`);

--
-- Indexes for table `le_commentaire`
--
ALTER TABLE `le_commentaire`
  ADD PRIMARY KEY (`IdComment`),
  ADD KEY `fk_id_BlogC` (`idBlogC`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_M`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_produit`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `specialitesport`
--
ALTER TABLE `specialitesport`
  ADD PRIMARY KEY (`idSpecialiteSport`);

--
-- Indexes for table `talent`
--
ALTER TABLE `talent`
  ADD PRIMARY KEY (`idTalent`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `fk_idtalent` (`idTalent`),
  ADD KEY `fk_idevent` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_E` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `le_blog`
--
ALTER TABLE `le_blog`
  MODIFY `IdBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `le_commentaire`
--
ALTER TABLE `le_commentaire`
  MODIFY `IdComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id_M` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialitesport`
--
ALTER TABLE `specialitesport`
  MODIFY `idSpecialiteSport` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `talent`
--
ALTER TABLE `talent`
  MODIFY `idTalent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_idp` FOREIGN KEY (`idp`) REFERENCES `produit` (`idp`);

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_id_talent` FOREIGN KEY (`id_talent`) REFERENCES `talent` (`idTalent`);

--
-- Constraints for table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `fk_id_eventtalent` FOREIGN KEY (`id_talent`) REFERENCES `talent` (`idTalent`),
  ADD CONSTRAINT `fk_idtalentevent` FOREIGN KEY (`id_event`) REFERENCES `talent` (`idTalent`);

--
-- Constraints for table `le_commentaire`
--
ALTER TABLE `le_commentaire`
  ADD CONSTRAINT `fk_id_BlogC` FOREIGN KEY (`idBlogC`) REFERENCES `le_blog` (`IdBlog`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_idevent` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id_event`),
  ADD CONSTRAINT `fk_idtalent` FOREIGN KEY (`idTalent`) REFERENCES `talent` (`idTalent`),
  ADD CONSTRAINT `fk_idticket` FOREIGN KEY (`id_ticket`) REFERENCES `talent` (`idTalent`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
