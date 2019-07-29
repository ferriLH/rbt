-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 05:35 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_album`
--

CREATE TABLE `t_album` (
  `id_album` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `nama_album` varchar(25) NOT NULL,
  `picture_album` varchar(30) NOT NULL,
  `directory` varchar(25) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_artist`
--

CREATE TABLE `t_artist` (
  `id_artists` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_artist` varchar(25) NOT NULL,
  `bio` text NOT NULL,
  `picture_artist` varchar(30) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_artist`
--

INSERT INTO `t_artist` (`id_artists`, `user_id`, `nama_artist`, `bio`, `picture_artist`, `aktif`) VALUES
(1, 2, 'Joji', 'George Miller (born 18 September 1992), better known by his stage name Joji and formerly by his YouTube username Filthy Frank, is a Japanese singer, songwriter, rapper, record producer, and former Internet personality and comedian.', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_genre`
--

CREATE TABLE `t_genre` (
  `id` int(11) NOT NULL,
  `genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_lagu`
--

CREATE TABLE `t_lagu` (
  `id_lagu` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `harga` float NOT NULL,
  `file` varchar(25) NOT NULL,
  `ketik` varchar(10) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pengguna`
--

CREATE TABLE `t_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nomor_induk` varchar(16) DEFAULT NULL,
  `nama_pengguna` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` tinyint(1) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pengguna`
--

INSERT INTO `t_pengguna` (`id_pengguna`, `nomor_induk`, `nama_pengguna`, `email`, `no_telpon`, `jk`, `alamat`, `password`, `hak_akses`, `aktif`) VALUES
(1, '1112233', 'admin', 'ferrilasmihalim@gmail.com', '62', 'pria', 'Cipedes Tengah', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
(2, '445566', 'user', 'ferrilasmihalim@email.unikom.ac.id', '62', 'pria', 'Dipatiukur', '12dea96fec20593566ab75692c9949596833adc9', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_promo`
--

CREATE TABLE `t_promo` (
  `id_promo` int(11) NOT NULL,
  `nama_promo` varchar(25) NOT NULL,
  `mekanisme` text NOT NULL,
  `periode` varchar(50) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_album`
--
ALTER TABLE `t_album`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `t_artist`
--
ALTER TABLE `t_artist`
  ADD PRIMARY KEY (`id_artists`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `t_genre`
--
ALTER TABLE `t_genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_lagu`
--
ALTER TABLE `t_lagu`
  ADD PRIMARY KEY (`id_lagu`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `t_pengguna`
--
ALTER TABLE `t_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `t_promo`
--
ALTER TABLE `t_promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_album`
--
ALTER TABLE `t_album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_artist`
--
ALTER TABLE `t_artist`
  MODIFY `id_artists` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_genre`
--
ALTER TABLE `t_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_lagu`
--
ALTER TABLE `t_lagu`
  MODIFY `id_lagu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pengguna`
--
ALTER TABLE `t_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_promo`
--
ALTER TABLE `t_promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_album`
--
ALTER TABLE `t_album`
  ADD CONSTRAINT `t_album_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `t_artist` (`id_artists`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_artist`
--
ALTER TABLE `t_artist`
  ADD CONSTRAINT `t_artist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `t_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_lagu`
--
ALTER TABLE `t_lagu`
  ADD CONSTRAINT `t_lagu_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `t_album` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_lagu_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `t_genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
