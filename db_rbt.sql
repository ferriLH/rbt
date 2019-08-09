-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 10:13 AM
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
(1, 'Ferri L H', 'ferrilasmihalim@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_album`
--

CREATE TABLE `t_album` (
  `id_album` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `nama_album` varchar(25) NOT NULL,
  `picture_album` varchar(100) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_album`
--

INSERT INTO `t_album` (`id_album`, `artist_id`, `nama_album`, `picture_album`, `aktif`) VALUES
(8, 20, 'Yes!', 'jason_mraz-yes.jpg', 1),
(9, 21, 'As You Were', 'as_you_were.jpg', 1),
(10, 22, 'In A Perfect World', 'in-a-perfect-world.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_artist`
--

CREATE TABLE `t_artist` (
  `id_artists` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `nama_artist` varchar(25) NOT NULL,
  `bio` text NOT NULL,
  `picture_artist` varchar(100) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_artist`
--

INSERT INTO `t_artist` (`id_artists`, `partner_id`, `nama_artist`, `bio`, `picture_artist`, `aktif`) VALUES
(20, 1, 'Jason Mraz', 'Jason Mraz adalah penyanyi dan penulis lagu Amerika Serikat. Ia lahir dan dibesarkan di Mechanicsville, Virginia.', 'jason_mraz.jpg', 1),
(21, 1, 'Liam Gallagher', 'William \"John Paul\" Gallagher di Burnage, Manchester merupakan vokalis dari Grup Musik Inggris Oasis. Saat kecil Liam adalah anak yang mengalami kekerasan dalam rumah tangga oleh ayahnya, begitu pula dengan kakaknya Noel Gallagher dan Paul. Karena inilah sikapnya hingga sekarang kadang-kadang suka meresahkan.', 'liam.jpg', 1),
(22, 1, 'Kodaline', 'Kodaline adalah grup musik asal Irlandia. Grup musik ini dikenal sebagai 21 Demands, sebelum diganti menjadi Kodaline pada tahun 2012. Steve Garrigan dan Mark Prendergast dibesarkan di Swords, Dublin dan telah berteman sejak kecil.', 'kodaline.jpg', 1);

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
(2, 'acid house'),
(3, 'acid jazz'),
(4, 'acid techno'),
(5, 'acoustic blues'),
(6, 'acoustic rock'),
(7, 'afrobeat'),
(8, 'alternative country'),
(9, 'alternative dance'),
(10, 'alternative folk'),
(11, 'alternative hip hop'),
(12, 'alternative metal'),
(13, 'alternative pop'),
(14, 'alternative punk'),
(15, 'alternative rock'),
(16, 'ambient'),
(17, 'ambient house'),
(18, 'ambient techno'),
(19, 'americana'),
(20, 'anarcho-punk'),
(21, 'aor'),
(22, 'arena rock'),
(23, 'art rock'),
(24, 'atmospheric black metal'),
(25, 'audiobook'),
(26, 'avant-garde'),
(27, 'avant-garde jazz'),
(28, 'avant-garde metal'),
(29, 'avant-garde pop'),
(30, 'bachata'),
(31, 'ballad'),
(32, 'barbershop'),
(33, 'baroque'),
(34, 'bebop'),
(35, 'bhangra'),
(36, 'big band'),
(37, 'big beat'),
(38, 'black metal'),
(39, 'blackened death metal'),
(40, 'blackgaze'),
(41, 'blue-eyed soul'),
(42, 'bluegrass'),
(43, 'blues'),
(44, 'blues rock'),
(45, 'bolero'),
(46, 'bolero son'),
(47, 'boom bap'),
(48, 'bossa nova'),
(49, 'breakbeat'),
(50, 'breakcore'),
(51, 'breaks'),
(52, 'britpop'),
(53, 'broken beat'),
(54, 'brutal death metal'),
(55, 'bubblegum pop'),
(56, 'cajun'),
(57, 'calypso'),
(58, 'canterbury scene'),
(59, 'cantopop'),
(60, 'celtic'),
(61, 'celtic punk'),
(62, 'chamber pop'),
(63, 'champeta'),
(64, 'chanson'),
(65, 'chicago blues'),
(66, 'chillout'),
(67, 'chiptune'),
(68, 'christian rock'),
(69, 'christmas music'),
(70, 'city pop'),
(71, 'classic blues'),
(72, 'classic country'),
(73, 'classic jazz'),
(74, 'classic rock'),
(75, 'classical'),
(76, 'club'),
(77, 'comedy'),
(78, 'conscious hip hop'),
(79, 'contemporary christian'),
(80, 'contemporary classical'),
(81, 'contemporary folk'),
(82, 'contemporary gospel'),
(83, 'contemporary jazz'),
(84, 'contemporary r&b'),
(85, 'contra'),
(86, 'cool jazz'),
(87, 'country'),
(88, 'country blues'),
(89, 'country folk'),
(90, 'country pop'),
(91, 'country rock'),
(92, 'crossover prog'),
(93, 'crust punk'),
(94, 'cumbia'),
(95, 'd-beat'),
(96, 'dance'),
(97, 'dance-pop'),
(98, 'dance-punk'),
(99, 'dancehall'),
(100, 'dark ambient'),
(101, 'dark electro'),
(102, 'dark folk'),
(103, 'dark wave'),
(104, 'death metal'),
(105, 'death-doom metal'),
(106, 'deathcore'),
(107, 'deathgrind'),
(108, 'deathrock'),
(109, 'deep house'),
(110, 'delta blues'),
(111, 'desert rock'),
(112, 'digital hardcore'),
(113, 'disco'),
(114, 'doo-wop'),
(115, 'doom metal'),
(116, 'downtempo'),
(117, 'drill'),
(118, 'drone'),
(119, 'drum and bass'),
(120, 'dub'),
(121, 'dub techno'),
(122, 'dubstep'),
(123, 'dungeon synth'),
(124, 'east coast hip hop'),
(125, 'ebm'),
(126, 'electric blues'),
(127, 'electro'),
(128, 'electro house'),
(129, 'electro swing'),
(130, 'electro-funk'),
(131, 'electro-industrial'),
(132, 'electroclash'),
(133, 'electronic'),
(134, 'electronic rock'),
(135, 'electronica'),
(136, 'electronicore'),
(137, 'electropop'),
(138, 'electropunk'),
(139, 'emo'),
(140, 'emocore'),
(141, 'enka'),
(142, 'ethereal'),
(143, 'euro house'),
(144, 'eurodance'),
(145, 'europop'),
(146, 'experimental'),
(147, 'experimental rock'),
(148, 'fado'),
(149, 'filk'),
(150, 'flamenco'),
(151, 'folk'),
(152, 'folk metal'),
(153, 'folk pop'),
(154, 'folk punk'),
(155, 'folk rock'),
(156, 'freak folk'),
(157, 'free improvisation'),
(158, 'free jazz'),
(159, 'funk'),
(160, 'funk carioca'),
(161, 'funk metal'),
(162, 'funk rock'),
(163, 'funk soul'),
(164, 'funky house'),
(165, 'fusion'),
(166, 'future jazz'),
(167, 'futurepop'),
(168, 'g-funk'),
(169, 'gabber'),
(170, 'gangsta rap'),
(171, 'garage'),
(172, 'garage house'),
(173, 'garage punk'),
(174, 'garage rock'),
(175, 'glam'),
(176, 'glam metal'),
(177, 'glam rock'),
(178, 'glitch'),
(179, 'goa trance'),
(180, 'goregrind'),
(181, 'gospel'),
(182, 'gothic'),
(183, 'gothic metal'),
(184, 'gothic rock'),
(185, 'grebo'),
(186, 'grime'),
(187, 'grindcore'),
(188, 'groove metal'),
(189, 'grunge'),
(190, 'guaracha'),
(191, 'happy hardcore'),
(192, 'hard bop'),
(193, 'hard house'),
(194, 'hard rock'),
(195, 'hard trance'),
(196, 'hardcore punk'),
(197, 'hardcore techno'),
(198, 'hardstyle'),
(199, 'heavy metal'),
(200, 'hip hop'),
(201, 'honky tonk'),
(202, 'horror punk'),
(203, 'horrorcore'),
(204, 'house'),
(205, 'idm'),
(206, 'illbient'),
(207, 'indie'),
(208, 'indie folk'),
(209, 'indie pop'),
(210, 'indie rock'),
(211, 'indietronica'),
(212, 'indorock'),
(213, 'industrial'),
(214, 'industrial metal'),
(215, 'industrial rock'),
(216, 'instrumental'),
(217, 'instrumental jazz'),
(218, 'instrumental rock'),
(219, 'irish folk'),
(220, 'italo-disco'),
(221, 'j-pop'),
(222, 'j-rock'),
(223, 'jazz'),
(224, 'jazz blues'),
(225, 'jazz fusion'),
(226, 'jazz rap'),
(227, 'jazz rock'),
(228, 'jazz-funk'),
(229, 'jungle'),
(230, 'k-pop'),
(231, 'kay?kyoku'),
(232, 'kizomba'),
(233, 'klezmer'),
(234, 'krautrock'),
(235, 'latin'),
(236, 'latin jazz'),
(237, 'latin pop'),
(238, 'latin rock'),
(239, 'leftfield'),
(240, 'line dance'),
(241, 'lo-fi'),
(242, 'lounge'),
(243, 'lovers rock'),
(244, 'madchester'),
(245, 'mainstream rock'),
(246, 'mambo'),
(247, 'mandopop'),
(248, 'martial industrial'),
(249, 'math rock'),
(250, 'mathcore'),
(251, 'medieval'),
(252, 'melodic black metal'),
(253, 'melodic death metal'),
(254, 'melodic metalcore'),
(255, 'melodic rock'),
(256, 'melodic trance'),
(257, 'mento'),
(258, 'merengue'),
(259, 'metal'),
(260, 'metalcore'),
(261, 'microhouse'),
(262, 'milonga'),
(263, 'min\'y?'),
(264, 'mincecore'),
(265, 'minimal'),
(266, 'modern blues'),
(267, 'modern classical'),
(268, 'modern country'),
(269, 'motown'),
(270, 'mpb'),
(271, 'musical'),
(272, 'neo soul'),
(273, 'neo-progressive rock'),
(274, 'neo-rockabilly'),
(275, 'neofolk'),
(276, 'nerdcore'),
(277, 'new age'),
(278, 'new jack swing'),
(279, 'new romantic'),
(280, 'new wave'),
(281, 'no wave'),
(282, 'noise'),
(283, 'noise pop'),
(284, 'noisecore'),
(285, 'non-music'),
(286, 'norteño'),
(287, 'northern soul'),
(288, 'nu jazz'),
(289, 'nu metal'),
(290, 'occult rock'),
(291, 'oi'),
(292, 'old school death metal'),
(293, 'old-time'),
(294, 'opera'),
(295, 'orchestral'),
(296, 'outlaw country'),
(297, 'p-funk'),
(298, 'pachanga'),
(299, 'pop'),
(300, 'pop metal'),
(301, 'pop punk'),
(302, 'pop rap'),
(303, 'pop rock'),
(304, 'pop soul'),
(305, 'pornogrind'),
(306, 'post-bop'),
(307, 'post-classical'),
(308, 'post-grunge'),
(309, 'post-hardcore'),
(310, 'post-metal'),
(311, 'post-punk'),
(312, 'post-rock'),
(313, 'power electronics'),
(314, 'power metal'),
(315, 'power pop'),
(316, 'powerviolence'),
(317, 'production music'),
(318, 'progressive'),
(319, 'progressive folk'),
(320, 'progressive house'),
(321, 'progressive metal'),
(322, 'progressive rock'),
(323, 'progressive trance'),
(324, 'psy-trance'),
(325, 'psychedelic'),
(326, 'psychedelic folk'),
(327, 'psychedelic pop'),
(328, 'psychedelic rock'),
(329, 'psychobilly'),
(330, 'psytrance'),
(331, 'punk'),
(332, 'punk rock'),
(333, 'queercore'),
(334, 'r&b'),
(335, 'ragga'),
(336, 'ragga hip-hop'),
(337, 'ragga jungle'),
(338, 'ragtime'),
(339, 'raï'),
(340, 'ranchera'),
(341, 'rap rock'),
(342, 'rapcore'),
(343, 'rave'),
(344, 'reggae'),
(345, 'reggaeton'),
(346, 'religi'),
(347, 'rhythmic noise'),
(348, 'rock'),
(349, 'rock and roll'),
(350, 'rockabilly'),
(351, 'rocksteady'),
(352, 'roots reggae'),
(353, 'rumba'),
(354, 'salsa'),
(355, 'samba'),
(356, 'schlager'),
(357, 'screamo'),
(358, 'shibuya-kei'),
(359, 'shoegaze'),
(360, 'singer-songwriter'),
(361, 'ska'),
(362, 'ska punk'),
(363, 'skacore'),
(364, 'slow waltz'),
(365, 'sludge metal'),
(366, 'smooth jazz'),
(367, 'smooth soul'),
(368, 'soca'),
(369, 'soft rock'),
(370, 'son cubano'),
(371, 'son montuno'),
(372, 'soul'),
(373, 'soul jazz'),
(374, 'southern rock'),
(375, 'southern soul'),
(376, 'space rock'),
(377, 'speed garage'),
(378, 'speed metal'),
(379, 'spoken word'),
(380, 'stoner metal'),
(381, 'stoner rock'),
(382, 'street punk'),
(383, 'surf rock'),
(384, 'swing'),
(385, 'symphonic black metal'),
(386, 'symphonic metal'),
(387, 'symphonic prog'),
(388, 'symphonic rock'),
(389, 'symphony'),
(390, 'synth-pop'),
(391, 'synthwave'),
(392, 'tango'),
(393, 'tech house'),
(394, 'technical death metal'),
(395, 'techno'),
(396, 'teen pop'),
(397, 'thrash metal'),
(398, 'thrashcore'),
(399, 'timba'),
(400, 'traditional country'),
(401, 'trance'),
(402, 'trap'),
(403, 'trap edm'),
(404, 'tribal house'),
(405, 'trip hop'),
(406, 'turntablism'),
(407, 'uk drill'),
(408, 'uk garage'),
(409, 'underground hip hop'),
(410, 'vallenato'),
(411, 'vaporwave'),
(412, 'viking metal'),
(413, 'visual kei'),
(414, 'vocal house'),
(415, 'vocal jazz'),
(416, 'vocal trance'),
(417, 'west coast hip hop'),
(418, 'west coast swing'),
(419, 'yé-yé'),
(420, 'zamrock'),
(421, 'zydeco');

-- --------------------------------------------------------

--
-- Table structure for table `t_lagu`
--

CREATE TABLE `t_lagu` (
  `id_lagu` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `harga_xl` float NOT NULL,
  `harga_tsel` float NOT NULL,
  `harga_indosat` float NOT NULL,
  `file` varchar(100) NOT NULL,
  `kode_xl` varchar(10) NOT NULL,
  `kode_tsel` varchar(10) NOT NULL,
  `kode_indosat` varchar(10) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_lagu`
--

INSERT INTO `t_lagu` (`id_lagu`, `album_id`, `genre_id`, `judul`, `harga_xl`, `harga_tsel`, `harga_indosat`, `file`, `kode_xl`, `kode_tsel`, `kode_indosat`, `aktif`) VALUES
(10, 8, 299, '3 Things', 1200, 1100, 1000, '3_Things.mp3', 'JM1_XL', 'JM1_TSEL', 'JM1_ISAT', 1),
(26, 8, 299, 'Rise', 1000, 1100, 1200, 'Rise.mp3', 'JM2_XL', 'JM2_TSEL', 'JM2_ISAT', 1),
(27, 8, 299, 'Love Someone', 1000, 1100, 1200, 'Love_Someone.mp3', 'JM3_XL', 'JM3_TSEL', 'JM3_ISAT', 1),
(28, 8, 299, 'Hello, You Beautiful Thing', 1000, 1100, 1200, 'Hello,You_Beautiful_Thing.mp3', 'JM4_XL', 'JM4_TSEL', 'JM4_ISAT', 1),
(29, 8, 299, 'Long Drive', 1000, 1100, 1200, 'Long_Drive.mp3', 'JM5_XL', 'JM5_TSEL', 'JM5_ISAT', 1),
(30, 8, 299, 'Everywhere', 1000, 1100, 1200, 'Everywhere.mp3', 'JM6_XL', 'JM6_TSEL', 'JM6_ISAT', 1),
(31, 8, 299, 'Best Friend', 1000, 1100, 1200, 'Best_Friend.mp3', 'JM7_XL', 'JM7_TSEL', 'JM7_ISAT', 1),
(32, 8, 299, 'Quiet', 1000, 1100, 1200, 'Quiet.mp3', 'JM8_XL', 'JM8_TSEL', 'JM8_ISAT', 1),
(33, 8, 299, 'Out Of My Hands', 1000, 1100, 1200, 'Out_Of_My_Hands.mp3', 'JM9_XL', 'JM9_TSEL', 'JM9_ISAT', 1),
(34, 8, 299, 'It\'s So Hard To Say Goodbye To', 1000, 1100, 1200, 'It\'s_So_Hard_To_Say_Goodbye_To_Yesterday.mp3', 'JM10_XL', 'JM10_TSEL', 'JM10_ISAT', 1),
(35, 8, 299, 'You Can Rely On Me', 1000, 1100, 1200, 'You_Can_Rely_On_Me.mp3', 'JM11_XL', 'JM11_TSEL', 'JM11_ISAT', 1),
(36, 8, 299, 'Back To The Earth', 1000, 1100, 1200, 'Back_To_The_Earth.mp3', 'JM12_XL', 'JM12_TSEL', 'JM12_ISAT', 1),
(37, 8, 299, 'A World With You', 1000, 1100, 1200, 'A_World_With_You.mp3', 'JM13_XL', 'JM13_TSEL', 'JM13_ISAT', 1),
(38, 8, 299, 'Shine', 1000, 1100, 1200, 'Shine.mp3', 'JM14_XL', 'JM14_TSEL', 'JM14_ISAT', 1),
(49, 9, 348, 'Paper Crown', 1500, 1300, 1000, '04_Paper_Crown.mp3', 'LG4_XL', 'LG4_TSEL', 'LG4_ISAT', 1),
(50, 9, 348, 'Greedy Soul', 1500, 1400, 1300, '03_Greedy_Soul.mp3', 'LG3_XL', 'LG3_TSEL', 'LG3_ISAT', 1),
(51, 9, 348, 'When I\'m Need', 1100, 1200, 1300, '06__When_I_m_In_Need_-_(www_SongsLover_club).mp3', 'LG6_XL', 'LG6_TSEL', 'LG6_ISAT', 1),
(52, 9, 348, 'Wall Of Glass', 1200, 1300, 1400, '02_Bold.mp3', 'LG2_XL', 'LG2_TSEL', 'LG2_ISAT', 1),
(53, 10, 209, 'High Hopes', 1200, 1300, 1100, 'Kodaline_-_High_Hopes_(Official_Music_Video).mp3', 'KDL1_XL', 'KDL1_TSEL', 'KDL1_ISAT', 1),
(54, 10, 209, 'All I Want', 1500, 1200, 1000, 'Kodaline_-_All_I_Want.mp3', 'KDL2_XL', 'KDL2_TSEL', 'KDL2_ISAT', 1),
(55, 9, 348, 'I\'ve All I Need', 1500, 1200, 1000, '12__I_ve_All_I_Need_-_(www_SongsLover_club).mp3', 'LG12_XL', 'LG12_TSEL', 'LG12_ISAT', 1);

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
(1, '3203232506980005', 'Director Ferri', 'ferrilasmi@gmail.com', '081220979733', 'pria', 'Dolor Sit Amet, Dolor Amet', 1),
(3, '1312312389', 'sdadsax', 'eea@sf.cscc', '34223422', 'wanita', 'sadasdsadsdsadsa', 1);

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

--
-- Dumping data for table `t_pesan`
--

INSERT INTO `t_pesan` (`id_pesan`, `nama_pengirim`, `email_pengirim`, `kontak_pengirim`, `isi_pesan`, `waktu_kirim`, `baca`, `hapus`) VALUES
(1, 'Krisna Setiabudi', 'krisna.setiabudi@anak.setiyadi', '089754657812', 'Jl. Kuningan Barat No.8 Cyber Building (Gedung Elektrindo) 5th Floor, Jakarta Selatan 12710', '2019-08-08 09:21:50', 1, 0);

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
(1, 'Promo 1', 'Lorem Ipsum', '06 Agustus 2019 - Selamanya', 'ahahaha1.jpg', 1),
(2, 'Promo 2', 'Lorem Ipsum', 'Kemarin Sore - Besok Siang', 'Promo_test.jpg', 1),
(3, 'Promo 3', 'Lorem Ipsum', 'Zaman Jahiliyah - Zaman Pelangi', 'Promo_test.jpg', 1);

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
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_artist`
--
ALTER TABLE `t_artist`
  MODIFY `id_artists` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `t_genre`
--
ALTER TABLE `t_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=422;

--
-- AUTO_INCREMENT for table `t_lagu`
--
ALTER TABLE `t_lagu`
  MODIFY `id_lagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `t_partner`
--
ALTER TABLE `t_partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_pesan`
--
ALTER TABLE `t_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_promo`
--
ALTER TABLE `t_promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
