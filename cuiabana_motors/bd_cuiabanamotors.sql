-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 11:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_cuiabanamotors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(3) UNSIGNED NOT NULL,
  `adm_nome` varchar(200) DEFAULT NULL,
  `adm_foto` varchar(200) NOT NULL,
  `adm_email` varchar(200) DEFAULT NULL,
  `adm_senha` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_nome`, `adm_foto`, `adm_email`, `adm_senha`) VALUES
(11, 'bruno', 'Bruno Zagato.jpeg', 'bruno@gmail.com', 'b304f234940a679b3ab3c699f80db849');

-- --------------------------------------------------------

--
-- Table structure for table `carros`
--

CREATE TABLE `carros` (
  `car_id` int(3) UNSIGNED NOT NULL,
  `car_vin` varchar(17) DEFAULT NULL,
  `car_nome` varchar(100) DEFAULT NULL,
  `car_foto` varchar(200) DEFAULT NULL,
  `car_modelo` varchar(100) DEFAULT NULL,
  `car_ano` int(4) UNSIGNED DEFAULT NULL,
  `car_valor` varchar(15) DEFAULT NULL,
  `car_data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carros`
--

INSERT INTO `carros` (`car_id`, `car_vin`, `car_nome`, `car_foto`, `car_modelo`, `car_ano`, `car_valor`, `car_data`) VALUES
(1, '83388294950', 'Toyota Corolla', 'toyota_corolla_hibrido_3-1-1200x800.webp', 'Corolla GR-S Branco', 2022, 'R$ 144.950,90', '2023-02-14 11:23:29'),
(2, '71271272030', 'Volkswagen Voyage', 'Voyage.jfif', 'Voyage 1.6 MSI COMFORTLINE Prata', 2015, 'R$ 45.899,90', '2023-02-14 09:12:52'),
(3, '83618630050', 'Volkswagen Gol', 'Gol G4.jpg', 'Gol G4 TREND/POWER 8V 4P Prata', 2014, 'R$ 34.899,90', '2023-02-14 09:17:42'),
(4, '42724289726', 'Fiat Uno Mille', 'Uno Mille.jpg', 'Uno Mille 1.0 F.FLEX ECONOMY Preto', 2013, 'R$ 28.899,90', '2023-02-14 09:49:00'),
(6, '30776481080', 'Hyundai HB20s', 'hb20s.jpg', 'HB20s VISION 1.0 FLEX 12V Branco', 2022, 'R$ 83.749,90', '2023-02-14 11:14:37'),
(7, '11104834981', 'Renalt Sandero', 'renault-sandero-1.0-zen-2020.jpg', 'SANDERO ZEN FLEX 1.0 12V 5P Branco', 2021, 'R$ 67.880,90', '2023-02-14 11:23:12'),
(8, '25457169201', 'Jeep Renegade', 'Jeep-Renegade-2022-Serie-S_14.jpg', 'RENEGADE 1.3T T270 FLEX LONGITUDE AT6 Preto', 2022, 'R$ 123.990,90', '2023-02-14 11:58:09'),
(9, '34199421433', 'Audi R8', 'Audi R8.jpg', 'R8 5.2 FSI V10 Vermelho', 2021, 'R$ 1.310.990,90', '2023-02-14 12:20:37'),
(12, '1233412423', 'BMW M3', 'BMW M3.webp', 'BMW M3 COMPETITION Verde', 2022, 'R$ 1.244.531,90', '2023-02-14 18:21:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
  MODIFY `car_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
