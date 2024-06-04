-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 06:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter4_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartegrise`
--

CREATE TABLE `cartegrise` (
  `IMNUMERO` int(11) UNSIGNED NOT NULL,
  `IMCHASSIS` varchar(19) NOT NULL,
  `IMIMMAT` varchar(10) DEFAULT NULL,
  `IMDATECIRCUL` date NOT NULL,
  `IMMODEL` varchar(25) NOT NULL,
  `IMCYL` int(11) NOT NULL,
  `IMENERGIE` tinyint(2) NOT NULL,
  `IMPUISSANCE` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `marque` int(11) NOT NULL,
  `datecreation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartegrise`
--

INSERT INTO `cartegrise` (`IMNUMERO`, `IMCHASSIS`, `IMIMMAT`, `IMDATECIRCUL`, `IMMODEL`, `IMCYL`, `IMENERGIE`, `IMPUISSANCE`, `genre`, `marque`, `datecreation`) VALUES
(1, '111DF1230C', 'CE2020', '2024-05-14', 'Rav4', 8, 120, 220, 4, 5, '2024-05-15 06:40:24'),
(2, '14525FEEDF6', NULL, '2024-05-07', 'CArina E', 2, 120, 240, 4, 2, '0000-00-00 00:00:00'),
(3, '145EDR5', 'FE5420', '2024-01-10', 'RAV4', 4, 100, 5000, 2, 2, '0000-00-00 00:00:00'),
(4, '1234FRE', NULL, '2024-05-21', 'volvo', 5, 127, 220, 4, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `demande`
--

CREATE TABLE `demande` (
  `ID` int(11) UNSIGNED NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `types` varchar(5) NOT NULL,
  `NIU` varchar(25) NOT NULL,
  `Reference` varchar(50) NOT NULL,
  `Montant_timbre` int(11) NOT NULL,
  `Montant_fisc` int(11) NOT NULL,
  `Statut` int(11) NOT NULL,
  `Operation` int(11) NOT NULL,
  `Cartegrise` int(11) NOT NULL,
  `Dte_naissance` date NOT NULL,
  `Lieu_naissance` varchar(15) NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`ID`, `nom`, `prenom`, `types`, `NIU`, `Reference`, `Montant_timbre`, `Montant_fisc`, `Statut`, `Operation`, `Cartegrise`, `Dte_naissance`, `Lieu_naissance`, `Phone`) VALUES
(1, 'bernard', 'leonce', 'homme', '123456789', '2020', 12000, 12000, 0, 0, 0, '2018-02-09', 'Yaounde 5E', 670243699),
(4, 'bernard', 'leonce', 'femme', '0987654321', '890', 7410, 1470, 0, 0, 0, '2022-07-06', 'Yaounde 5E', 699573148);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-05-21-134324', 'App\\Database\\Migrations\\Cartegrise', 'default', 'App', 1716299080, 1),
(2, '2024-05-21-135226', 'App\\Database\\Migrations\\Demande', 'default', 'App', 1716299562, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
(1, 'fotso tatchum', 'leoncefotso59@gmail.com', '$2y$10$elN7bFSQI5I08C53DFl0z.Au8BPk8sfBytDCGcv48jsDfm4p2XzwS', 'Male', '1234567890', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'fotso tatchum', 'bernardleonce59@gmail.com', '$2y$10$BtoYC4AcrhSyqn7Gvi5jduc2ORyq4qXIFzQ34gc2V/ckXSFyQqOt6', 'Male', '1234567890', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'tatchum bernard', 'mozartcours670205718@gmail.com', '$2y$10$B9Mry9iOp9MtOajPUk3zkun5W8V/ZhuZ/Z9jekPrDkgId38bn122a', 'Male', '1234567890', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'dadju', 'dadju@gmail.com', '$2y$10$LkLyHzXotwcT1Mq4E/lUh..2wMUpvNLTBj8ZRlfp2lbnYbSo2QCl2', 'Male', '(237)124-5687', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(5, 'mary', 'mary@gmail.com', '$2y$10$avp8q/J2Ge9SZn.rWePosOHlmAy/T0WQIYZDKUp17Ei1w2unL.6VS', 'Female', '(237)134-5687', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartegrise`
--
ALTER TABLE `cartegrise`
  ADD PRIMARY KEY (`IMNUMERO`),
  ADD UNIQUE KEY `IMCHASSIS` (`IMCHASSIS`);

--
-- Indexes for table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `NIU` (`NIU`),
  ADD UNIQUE KEY `Reference` (`Reference`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartegrise`
--
ALTER TABLE `cartegrise`
  MODIFY `IMNUMERO` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
