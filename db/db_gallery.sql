-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 09:53 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_img`
--

CREATE TABLE `tbl_img` (
  `img_id` smallint(5) UNSIGNED NOT NULL,
  `img_large` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `img_thumb` varchar(100) NOT NULL DEFAULT 'defaultThumb.jpg',
  `img_desc` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_img`
--

INSERT INTO `tbl_img` (`img_id`, `img_large`, `img_thumb`, `img_desc`) VALUES
(1, 'inside.jpg', 'insideThumb.jpg', 'Kitchen'),
(2, 'lighthouse.jpg', 'lighthouseThumb.jpg', 'Lighthouse'),
(3, 'wave.jpg', 'waveThumb.jpg', 'Shore'),
(4, 'birds.jpg', 'birdsThumb.jpg', 'Birds'),
(5, 'chantry1.jpg', 'chantry1Thumb.jpg', 'Island'),
(6, 'chantry3.jpg', 'chantry3Thumb.jpg', 'Island2'),
(7, 'chantryBird.jpg', 'chantryBirdThumb.jpg', 'Bird'),
(8, 'inside2.jpg', 'inside2Thumb.jpg', 'Seating'),
(9, 'inside3.jpg', 'inside3Thumb.jpg', 'Bedroom'),
(10, 'island.jpg', 'islandThumb.jpg', 'Island3'),
(11, 'peerless2.bmp', 'peerless2Thumb.bmp', 'PeerlessII'),
(12, 'sunset.bmp', 'sunset.bmp', 'Sunset');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_img`
--
ALTER TABLE `tbl_img`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_img`
--
ALTER TABLE `tbl_img`
  MODIFY `img_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
