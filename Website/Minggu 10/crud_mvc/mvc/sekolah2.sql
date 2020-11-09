-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 06:02 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `sekolah2`
--

CREATE TABLE `sekolah2` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah2`
--

INSERT INTO `sekolah2` (`id`, `nama`, `alamat`, `logo`) VALUES
('1', 'Bagus Chalil Akbar', 'Pedurungan', 'kisspng-web-development-web-design-logo-website-5abbea0acaa518.0043648215222645868301.jpg'),
('2', 'Bagus oop', 'Singosari', 'kisspng-download-button-icon-previous-button-png-transparent-image-5a75806da4ef46.6425002615176500296756.jpg'),
('3', 'qweqeqwe', 'p', 'pngtree-facebook-social-media-icon-design-template-vector-png-image_3654755.jpg'),
('4', 'Akbar', 'Semarang', '852-stick-man-295293_1280.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sekolah2`
--
ALTER TABLE `sekolah2`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
