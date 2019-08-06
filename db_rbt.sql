-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 06:44 AM
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
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email_admin` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `nama_admin`, `email_admin`, `password`, `aktif`) VALUES
(1, 'Ferri', 'ferrilasmihalim@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_album`
--

CREATE TABLE `t_album` (
  `id_album` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `nama_album` varchar(25) NOT NULL,
  `picture_album` varchar(30) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_album`
--

INSERT INTO `t_album` (`id_album`, `artist_id`, `nama_album`, `picture_album`, `aktif`) VALUES
(1, 7, 'Album 1', 'v6.jpeg', 1),
(2, 8, 'Album Krisna Set', 'v9.jpg', 1),
(3, 5, 'Dangdut Pantura', 'v21.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_artist`
--

CREATE TABLE `t_artist` (
  `id_artists` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `nama_artist` varchar(25) NOT NULL,
  `bio` text NOT NULL,
  `picture_artist` varchar(30) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_artist`
--

INSERT INTO `t_artist` (`id_artists`, `partner_id`, `nama_artist`, `bio`, `picture_artist`, `aktif`) VALUES
(5, 1, 'Via Vallen', 'Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet. Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet', 'a7.jpg', 1),
(6, 1, 'Mahatma Ghandi', 'Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet. Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet', 'a8.jpg', 1),
(7, 1, 'Dr. Ken Jeong', 'Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet. Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet', 'a9.jpg', 1),
(8, 1, 'Krisna Setiadi', 'Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet. Dolor Sit Amet, Dolor Amet sit amet sit dolor, dolor sit amet', 'a11.jpg', 1),
(9, 1, 'Jajang Kesbor', 'Lorem Ipsum', 'a11.jpg', 1),
(10, 1, 'Nandang Maulana', 'Lorem Ipsum Dolor', 'a11.jpg', 1),
(11, 1, 'Jason Numero', 'Dolor Sit Amet, ', 'a11.jpg', 1),
(12, 1, 'Jason duo', 'Dolor Sit Amet, ', 'a11.jpg', 1),
(13, 1, 'Jason Trio', 'Dolor Sit Amet, ', 'a11.jpg', 1),
(14, 1, 'Jason Palio', 'Dolor Sit Amet, ', 'a11.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_genre`
--

CREATE TABLE `t_genre` (
  `id` int(11) NOT NULL,
  `genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_genre`
--

INSERT INTO `t_genre` (`id`, `genre`) VALUES
(1, 'Pop'),
(2, 'Rock'),
(3, 'Dangdut'),
(4, 'Indie');

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

--
-- Dumping data for table `t_lagu`
--

INSERT INTO `t_lagu` (`id_lagu`, `album_id`, `genre_id`, `judul`, `harga`, `file`, `ketik`, `aktif`) VALUES
(1, 3, 3, 'Aselole 2019', 2000, 'Georgia.mp3', 'REG_K', 1),
(3, 1, 1, 'Senja Dimalam Hari', 40000, 'Georigia.mp3', 'REG_S', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_partner`
--

CREATE TABLE `t_partner` (
  `id_partner` int(11) NOT NULL,
  `nomor_induk` varchar(16) DEFAULT NULL,
  `nama_partner` varchar(25) NOT NULL,
  `email_partner` varchar(50) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_partner`
--

INSERT INTO `t_partner` (`id_partner`, `nomor_induk`, `nama_partner`, `email_partner`, `no_telpon`, `jk`, `alamat`, `aktif`) VALUES
(1, '3203232506980005', 'Director Ferri', 'ferrilasmi@gmail.com', '081220979733', 'pria', 'Dolor Sit Amet, Dolor Amet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_pesan`
--

CREATE TABLE `t_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `email_pengirim` varchar(35) NOT NULL,
  `kontak_pengirim` varchar(15) NOT NULL,
  `isi_pesan` text NOT NULL,
  `waktu_kirim` datetime NOT NULL,
  `baca` tinyint(1) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_promo`
--

CREATE TABLE `t_promo` (
  `id_promo` int(11) NOT NULL,
  `nama_promo` varchar(25) NOT NULL,
  `mekanisme` text NOT NULL,
  `periode` varchar(50) NOT NULL,
  `file_promo` varchar(255) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_promo`
--

INSERT INTO `t_promo` (`id_promo`, `nama_promo`, `mekanisme`, `periode`, `file_promo`, `aktif`) VALUES
(1, 'Promo 1', 'Lorem Ipsum', '06 Agustus 2019 - Selamanya', 'Promo_test.jpg', 0),
(2, 'Promo 2', 'Lorem Ipsum', 'Kemarin Sore - Besok Siang', 'Promo_test.jpg', 0),
(3, 'Promo 3', 'Lorem Ipsum', 'Zaman Jahiliyah - Zaman Pelangi', 'Promo_test.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

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
  ADD KEY `partner_id` (`partner_id`);

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
-- Indexes for table `t_partner`
--
ALTER TABLE `t_partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indexes for table `t_pesan`
--
ALTER TABLE `t_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `t_promo`
--
ALTER TABLE `t_promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_album`
--
ALTER TABLE `t_album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_artist`
--
ALTER TABLE `t_artist`
  MODIFY `id_artists` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_genre`
--
ALTER TABLE `t_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_lagu`
--
ALTER TABLE `t_lagu`
  MODIFY `id_lagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_partner`
--
ALTER TABLE `t_partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_pesan`
--
ALTER TABLE `t_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_promo`
--
ALTER TABLE `t_promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `t_artist_ibfk_1` FOREIGN KEY (`partner_id`) REFERENCES `t_partner` (`id_partner`) ON DELETE CASCADE ON UPDATE CASCADE;

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
