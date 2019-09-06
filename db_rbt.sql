-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2019 pada 10.32
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

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
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email_admin` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `nama_admin`, `email_admin`, `password`, `aktif`) VALUES
(1, 'Ferri L Halim', 'ferrilasmihalim@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(2, 'dick', 'andika@alpha-omega.co.id', '3ae6f43cf9a894824066a7d5b7b752b41d789889', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_album`
--

CREATE TABLE `t_album` (
  `id_album` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `nama_album` varchar(25) NOT NULL,
  `picture_album` varchar(100) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_album`
--

INSERT INTO `t_album` (`id_album`, `artist_id`, `nama_album`, `picture_album`, `aktif`) VALUES
(1, 1, 'Single Hits', 'Aggrie.jpeg', 1),
(2, 2, 'Single Hits', 'Nenk_Zahra.jpeg', 1),
(3, 3, 'Single Hits', 'Fadly_Samad.jpeg', 1),
(4, 4, 'Single Hits', 'Kuswara.jpeg', 1),
(5, 5, 'JPCC Worship', 'JPCC_Worship.jpeg', 1),
(6, 6, 'Pujilah Tuhan Hai jiwaku', 'Herlin_Pirena.jpeg', 1),
(7, 7, 'Single Hits', 'Fardhan_Zee.jpeg', 1),
(8, 8, 'Single Hits', 'Mohamad_Hasbullah_Ishak.jpeg', 1),
(9, 9, 'Single Hits', 'Auto_Metallic.jpg', 1),
(10, 10, 'Best Worship Vol. 5', 'cover_cd_maranatha_bestworship_v5.jpg', 1),
(11, 11, 'Best Worship Vol. 5', 'cover_cd_maranatha_bestworship_v5.jpg', 1),
(12, 11, 'Engkaulah Perisaiku', 'Regina_Pangkerego.jpg', 1),
(13, 12, 'Best Worship Vol. 5', 'cover_cd_maranatha_bestworship_v5.jpg', 1),
(14, 13, 'Best Worship Vol. 5', 'cover_cd_maranatha_bestworship_v5.jpg', 1),
(15, 14, 'Best Worship Vol. 5', 'cover_cd_maranatha_bestworship_v5.jpg', 1),
(16, 15, 'Seleksi Keroncong Rohani ', 'Vita_Wulansari.jpg', 1),
(17, 16, 'Single Hits', 'Yuli_JG.png', 1),
(18, 17, 'Single Hits', 'Rasyid.png', 1),
(19, 18, 'Single Hits', 'Duo_Ngek_Ngok.png', 1),
(20, 19, 'Single Hits', 'Athan_Siahaan.jpeg', 1),
(21, 20, 'Single Hits', 'Khaerul_Rizal_Satu_Di_Hati.jpg', 1),
(22, 21, 'Single Hits', 'Tatu_Nagfha.jpeg', 1),
(23, 22, '10 Best Praise & Worship', '10BestPraise_Worship.jpg', 1),
(24, 23, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(25, 24, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(26, 25, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(27, 26, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(28, 27, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(29, 28, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(30, 29, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(31, 30, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(32, 31, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(33, 32, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(34, 33, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(35, 34, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(36, 35, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(37, 36, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(38, 37, 'Power Of Worship - Master', 'Power_Of_Worship_Masterpiece.jpg', 1),
(39, 38, 'POPEDA T&T', 'Alex_Gamalama.jpeg', 1),
(40, 39, 'Mazmur Bagi Tuhan', 'Johan_Lumoindong.jpg', 1),
(41, 40, 'Single Hits', 'Pdt_Drs_P_Kariso_Rumambi_Msi.jpg', 1),
(42, 41, 'Slamatkan Kota Ini (Save ', 'Joy_Tobing.jpeg', 1),
(43, 42, 'The Best Of Evergreen Wor', 'TheBest_Of_Evergreen_Praise.jpg', 1),
(44, 43, 'Single Hits', 'Elly_Sugigi_Ft_Irfan_Sbaztian.jpg', 1),
(45, 44, 'Single Hits', 'Fey_Octa.jpg', 1),
(46, 45, 'Single Hits', 'Ian_Ulukyanan.jpg', 1),
(47, 45, 'Pop Maluku', 'Ian_Ulukyanan.jpg', 1),
(48, 46, 'Pop Indonesia', 'Black_Sweet.jpg', 1),
(49, 46, 'Pop Maluku', 'Black_Sweet.jpg', 1),
(50, 47, 'Single Hits', 'Nindiani.jpeg', 1),
(51, 48, 'D\'Sweet', 'D_Sweet.jpg', 1),
(52, 49, 'Pop Indonesia', 'default.jpeg', 1),
(53, 50, 'Pop Indonesia', 'default.jpeg', 1),
(54, 50, 'Pop Maluku', 'default.jpeg', 1),
(55, 51, 'Single Hits', 'Petricia_Nova.jpeg', 1),
(56, 52, 'Single Hits', 'Timur_Priyono.jpg', 1),
(57, 53, 'Single Hits', 'Ikhwan_Ubaidillah.jpg', 1),
(58, 54, 'Single Hits', 'Thatu_Nagfa.png', 1),
(59, 55, 'Single Hits', 'Ratu_Sukma.png', 1),
(60, 58, 'akibat pergaulan blues', 'liam-gallagher.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_artist`
--

CREATE TABLE `t_artist` (
  `id_artists` int(11) NOT NULL,
  `partner_id` int(11) DEFAULT NULL,
  `nama_artist` varchar(25) NOT NULL,
  `bio` text NOT NULL,
  `picture_artist` varchar(100) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_artist`
--

INSERT INTO `t_artist` (`id_artists`, `partner_id`, `nama_artist`, `bio`, `picture_artist`, `aktif`) VALUES
(1, 0, 'Aggrie M. Kell', '-', 'Aggrie_M.png', 1),
(2, 0, 'Nenk Zahra', '-', 'Nenk_Zahra.jpeg', 1),
(3, 0, 'Fadly Samad', '-', 'Fadly_Samad.jpeg', 1),
(4, 0, 'Kuswara', '-', 'Kuswara.jpeg', 1),
(5, 0, 'JPCC Worship', '-', 'JPCC_Worship.jpeg', 1),
(6, 0, 'Herlin Pirena', '-', 'Herlin_Pirena.jpeg', 1),
(7, 0, 'Fardhan Zee', '-', 'Fardhan_Zee.jpeg', 1),
(8, 0, 'Mohamad Hasbullah Ishak', '-', 'Mohamad_Hasbullah_Ishak.jpeg', 1),
(9, 0, 'All Artist', '-', 'default.jpeg', 1),
(10, 0, 'Jeffry Rambing', '-', 'default.jpeg', 1),
(11, 0, 'Regina Pangkerego', '-', 'Regina_Pangkerego.jpg', 1),
(12, 0, 'Marsya Manopo & Shinta Ro', '-', 'default.jpeg', 1),
(13, 0, 'Letjie Sampingan', '-', 'default.jpeg', 1),
(14, 0, 'Welyar Kauntu', '-', 'default.jpeg', 1),
(15, 0, 'Vita Wulansari', '-', 'Vita_Wulansari.jpg', 1),
(16, 0, 'Yuli JG', '-', 'Yuli_JG.png', 1),
(17, 0, 'Rasyid Tanbu', '-', 'Rasyid.png', 1),
(18, 0, 'Duo Ngek Ngok', '-', 'Duo_Ngek_Ngok.png', 1),
(19, 0, 'Athan Siahaan', '-', 'Athan_Siahaan.jpeg', 1),
(20, 0, 'Khaerul Rizal', '-', 'Khaerul_Rizal_Satu_Di_Hati.jpg', 1),
(21, 0, 'Tatu Nagfha', '-', 'Tatu_Nagfha.jpeg', 1),
(22, 0, 'Victor Hutabarat', '-', 'default.jpeg', 1),
(23, 0, 'Jonathan Prawira', '-', 'default.jpeg', 1),
(24, 0, 'Fransisca Alverina', '-', 'default.jpeg', 1),
(25, 0, 'Jonathan Prawira & Gloria', '-', 'default.jpeg', 1),
(26, 0, 'Ralef Adolf Joseph Rant', '-', 'default.jpeg', 1),
(27, 0, 'Yenny Novita', '-', 'default.jpeg', 1),
(28, 0, 'Jonathan Prawira', '-', 'default.jpeg', 1),
(29, 0, 'Dessy Simarmata', '-', 'default.jpeg', 1),
(30, 0, 'Jonathan Prawira & Ruth S', '-', 'default.jpeg', 1),
(31, 0, 'Andrew Jadediah Gunawan', '-', 'default.jpeg', 1),
(32, 0, 'Chiechie Salmon', '-', 'default.jpeg', 1),
(33, 0, 'Angela HGSC', '-', 'default.jpeg', 1),
(34, 0, 'Michael Gunawan', '-', 'default.jpeg', 1),
(35, 0, 'Chella Lumoindong', '-', 'default.jpeg', 1),
(36, 0, 'Friska Abbas', '-', 'default.jpeg', 1),
(37, 0, 'Randy Lapian', '-', 'default.jpeg', 1),
(38, 0, 'Alex Gamalama', '-', 'Alex_Gamalama.jpeg', 1),
(39, 0, 'Johan Lumoindong', '-', 'Johan_Lumoindong.jpg', 1),
(40, 0, 'Pdt. Drs. P. Kariso Rumam', '-', 'Pdt_Drs_P_Kariso_Rumambi_Msi.jpg', 1),
(41, 0, 'Joy Tobing', '-', 'Joy_Tobing.jpeg', 1),
(42, 0, 'Mission Singers', '-', 'TheBest_Of_Evergreen_Praise.jpg', 1),
(43, 0, 'Elly Sugigi Featuring Irf', '-', 'Elly_Sugigi_Ft_Irfan_Sbaztian.jpg', 1),
(44, 0, 'Fey Octa', '-', 'Fey_Octa.jpg', 1),
(45, 0, 'Ian Ulukyanan', '-', 'Ian_Ulukyanan.jpg', 1),
(46, 0, 'Black Sweet', '-', 'Black_Sweet.jpg', 1),
(47, 0, 'Nindiani', '-', 'Nindiani.jpeg', 1),
(48, 0, 'D\'Sweet', '-', 'D_Sweet.png', 1),
(49, 0, 'Cindy Ulukyanan', '-', 'default.jpeg', 1),
(50, 0, 'D\'Brothers', '-', 'D_Brothers.jpg', 1),
(51, 0, 'Petricia Nova', '-', 'Petricia_Nova.jpeg', 1),
(52, 0, 'Timur Priyono', '-', 'Timur_Priyono.jpg', 1),
(53, 0, 'Ikhwan Ubaidillah', '-', 'Ikhwan_Ubaidillah.jpg', 1),
(54, 0, 'Thatu Nagfa', '-', 'Thatu_Nagfa.png', 1),
(55, 0, 'Ratu Sukma', '-', 'Ratu_Sukma.png', 1),
(56, NULL, 'JJ', 'sasasa', '', 0),
(57, NULL, 'JJ', '-', '', 0),
(58, NULL, 'JJ', 'jejeBoi', 'don-hunstein-obit1.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_genre`
--

CREATE TABLE `t_genre` (
  `id` int(11) NOT NULL,
  `genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_genre`
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
(421, 'zydeco'),
(422, 'dangdut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_lagu`
--

CREATE TABLE `t_lagu` (
  `id_lagu` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `harga_xl` int(11) NOT NULL,
  `harga_tsel1` int(11) NOT NULL,
  `harga_tsel2` int(11) NOT NULL,
  `harga_tsel3` int(11) NOT NULL,
  `harga_tsel4` int(11) NOT NULL,
  `harga_indosat` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `kode_xl` varchar(10) NOT NULL,
  `kode_tsel1` varchar(10) NOT NULL,
  `kode_tsel2` varchar(10) NOT NULL,
  `kode_tsel3` varchar(10) NOT NULL,
  `kode_tsel4` varchar(10) NOT NULL,
  `kode_indosat` varchar(10) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_lagu`
--

INSERT INTO `t_lagu` (`id_lagu`, `album_id`, `genre_id`, `judul`, `harga_xl`, `harga_tsel1`, `harga_tsel2`, `harga_tsel3`, `harga_tsel4`, `harga_indosat`, `file`, `kode_xl`, `kode_tsel1`, `kode_tsel2`, `kode_tsel3`, `kode_tsel4`, `kode_indosat`, `aktif`) VALUES
(1, 1, 422, 'MEMETI', 5000, 660, 3850, 6600, 9900, 2900, 'song_MEMETI (Song)_Aggrie M. Kell.wav', '0', '', '', '', '', '53092982', 1),
(2, 2, 422, 'Berita Dari Sebrang', 0, 660, 3850, 6600, 9900, 2900, 'song_Berita Dari Sebrang_Nenk Zahra.wav', '', 'BDSJM', 'BDSJL', 'BDSJK', 'BDSJJ', '53092985', 1),
(3, 3, 299, 'Polisi Promoter', 0, 660, 3850, 6600, 9900, 2900, 'song_Polisi Promoter (Song)_Fadly Samad.wav', '', 'PPRGL', 'PPRGK', 'PPRGJ', 'PPRGI', '53092987', 1),
(4, 4, 422, 'Bhakti Polisi', 0, 660, 3850, 6600, 9900, 2900, 'song_Bhakti Polisi (Song)_Kuswara.wav', '', 'BIPBM', 'BIPBL', 'BIPBK', 'BIPBJ', '53092989', 1),
(5, 5, 346, 'Sampai Akhir Hidupku', 0, 660, 3850, 6600, 9900, 2900, 'song_Sampai Akhir Hidupku_JPCC Worship.wav', '', 'AMPKB', 'AMPKA', 'AMPJZ', 'AMPJY', '53093005', 1),
(6, 5, 346, 'RohMu Yang Hidup', 0, 660, 3850, 6600, 9900, 2900, 'song_RohMu Yang Hidup_JPCC Worship.wav', '', 'RYHAS', 'RYHAR', 'RYHAQ', 'RYHAP', '53092992', 1),
(7, 6, 346, 'Hidup Ini Adalah Kesempatan', 0, 660, 3850, 6600, 9900, 2900, 'song_Hidup Ini Adalah Kesempatan_Herlin Pirena.wav', '', 'HDPGG', 'HDPGF', 'HDPGE', 'HDPGD', '53092994', 1),
(8, 6, 346, 'Yesus NamaMu Indah', 0, 660, 3850, 6600, 9900, 2900, 'song_Yesus NamaMu Indah_Herlin Pirena.wav', '', 'YNHAD', 'YNHAC', 'YNHAB', 'YNHAA', '53092996', 1),
(9, 6, 346, 'Pujilah Tuhan Hai jiwaku', 0, 660, 3850, 6600, 9900, 2900, 'song_Pujilah Tuhan Hai jiwaku_Herlin Pirena.wav', '', 'PJKDP', 'PJKDO', 'PJKDN', 'PJKDM', '53092997', 1),
(10, 6, 346, 'Tuhan Ku Percaya', 0, 660, 3850, 6600, 9900, 2900, 'song_Tuhan Ku Percaya_Herlin Pirena.wav', '', 'TKPGQ', 'TKPGP', 'TKPGO', 'TKPGN', '53092998', 1),
(11, 6, 346, 'Pandanglah Pada Yesus', 0, 660, 3850, 6600, 9900, 2900, 'song_Pandanglah Pada Yesus_Herlin Pirena.wav', '', 'PPYAX', 'PPYAW', 'PPYAV', 'PPYAU', '53092999', 1),
(12, 6, 346, 'Kaulah Pelindungku', 0, 660, 3850, 6600, 9900, 2900, 'song_Kaulah Pelindungku_Herlin Pirena.wav', '', 'KPUHU', 'KPUHT', 'KPUHS', 'KPUHR', '53093000', 1),
(13, 6, 346, 'RencanaMu Indah', 0, 660, 3850, 6600, 9900, 2900, 'song_RencanaMu Indah_Herlin Pirena.wav', '', 'RMIFH', 'RMIFG', 'RMIFF', 'RMIFE', '53093001', 1),
(14, 6, 346, 'Satu Satunya', 0, 660, 3850, 6600, 9900, 2900, 'song_Satu Satunya_Herlin Pirena.wav', '', 'SSANH', 'SSANG', 'SSANF', 'SSANE', '53093002', 1),
(15, 6, 346, 'Dia Jamah/He Touch Me', 0, 660, 3850, 6600, 9900, 2900, 'song_Dia Jamah He Touch Me_Herlin Pirena.wav', '', 'DJMFW', 'DJMFV', 'DJMFU', 'DJMFT', '53093006', 1),
(16, 6, 346, 'Setia Sampai Akhir', 5000, 660, 3850, 6600, 9900, 2900, 'song_Setia Sampai Akhir_Herlin Pirena.wav', '-', '', '', '', '', '53093003', 1),
(17, 7, 422, 'Keyakinan Hati', 0, 660, 3850, 6600, 9900, 2900, 'song_Keyakinan Hati_Fardhan Zee.wav', '', '', '', '', '', '', 1),
(18, 8, 400, 'Timongoliyo Tagaga Da\'a', 0, 660, 3850, 6600, 9900, 2900, 'song_Timongoliyo Tagaga Da\'a_Mohamad Hasbullah Ishak.wav', '', '', '', '', '', '', 1),
(19, 1, 422, 'Dangdut Is The Music', 0, 660, 3850, 6600, 9900, 2900, 'song_Dangdut Is The Music (Song)_Aggrie M. Kell.wav', '', '', '', '', '', '', 1),
(20, 9, 299, 'Pie Susu Arjuna', 0, 660, 3850, 6600, 9900, 2900, 'song_Pie Susu Arjuna_All Artist.wav', '', '', '', '', '', '', 1),
(21, 9, 299, 'Auto Metallic', 0, 660, 3850, 6600, 9900, 2900, 'song_Auto Metallic_ All Artist.wav', '', '', '', '', '', '', 1),
(22, 9, 299, 'C3 Carwash', 0, 660, 3850, 6600, 9900, 2900, 'song_Discount C3 Carwash_All Artist.wav', '', '', '', '', '', '', 1),
(23, 10, 346, 'Kutetap Cinta Kutetap Setia', 0, 660, 3850, 6600, 9900, 2900, 'song_Kutetap Cinta Kutetap Setia_Jeffry Rambing.wav', '', '', '', '', '', '', 1),
(24, 11, 346, 'Berharga DimataMu', 0, 660, 3850, 6600, 9900, 2900, 'song_Berharga DimataMu_Regina Pangkerego.wav', '', '', '', '', '', '', 1),
(25, 12, 346, 'Dekat Bapa', 0, 660, 3850, 6600, 9900, 2900, 'song_Dekat Bapa_Marsya Manopo & Shinta Rosari.wav', '', '', '', '', '', '', 1),
(26, 13, 346, 'JalanMu Tak Terselami', 0, 660, 3850, 6600, 9900, 2900, 'song_JalanMu Tak Terselami_Letjie Sampingan.wav', '', '', '', '', '', '', 1),
(27, 14, 346, 'MujizatMu Tetap Ada', 0, 660, 3850, 6600, 9900, 2900, 'song_MujizatMu Tetap Ada_Welyar Kauntu.wav', '', '', '', '', '', '', 1),
(28, 16, 346, 'Pelangi Sehabis Hujan (Keronco', 0, 660, 3850, 6600, 9900, 2900, 'song_ Pelangi Sehabis Hujan (Keroncong)_Vita Wulansari.wav', '', '', '', '', '', '', 1),
(29, 16, 346, 'Sentuh Hatiku (Keroncong)', 0, 660, 3850, 6600, 9900, 2900, 'song_Sentuh Hatiku (Keroncong)_Vita Wulansari.wav', '', '', '', '', '', '', 1),
(30, 16, 346, 'Dia Mengerti (Keroncong)', 0, 660, 3850, 6600, 9900, 2900, 'song_Dia Mengerti (Keroncong)_Vita Wulansari.wav', '', '', '', '', '', '', 1),
(31, 16, 346, 'Walau Seribu Rebah (Keroncong)', 0, 660, 3850, 6600, 9900, 2900, 'song_Walau Seribu Rebah (Keroncong)_Vita Wulansari.wav', '', '', '', '', '', '', 1),
(32, 16, 346, 'Kasih Pasti Lemah Lembut (Kero', 0, 660, 3850, 6600, 9900, 2900, 'song_Kasih Pasti Lemah Lembut (Keroncong)_Vita Wulansari.wav', '', '', '', '', '', '', 1),
(33, 16, 346, 'Semua Baik (Keroncong)', 0, 660, 3850, 6600, 9900, 2900, 'song_Semua Baik (Keroncong)_Vita Wulansari.wav', '', '', '', '', '', '', 1),
(34, 16, 346, 'JanjiMu Seperti Fajar (Keronco', 0, 660, 3850, 6600, 9900, 2900, 'song_JanjiMu Seperti Fajar (Keroncong)_Vita Wulansari.wav', '', '', '', '', '', '', 1),
(35, 16, 346, 'Ajaib Tuhan (Keroncong)', 0, 660, 3850, 6600, 9900, 2900, 'song_Ajaib Tuhan (Keroncong)_Vita Wulansari.wav', '', '', '', '', '', '', 1),
(36, 16, 346, 'Bapa Yang Kekal (Keroncong)', 0, 660, 3850, 6600, 9900, 2900, 'song_Bapa Yang Kekal (Keroncong)_Vita Wulansari.wav', '', '', '', '', '', '', 1),
(37, 16, 346, 'Mujizat Itu Nyata (Keroncong)', 0, 660, 3850, 6600, 9900, 2900, 'song_Mujizat Itu Nyata (Keroncong)_Vita Wulansari.wav', '', '', '', '', '', '', 1),
(38, 17, 422, 'ISMA (Istri Manja) (Song)', 0, 660, 3850, 6600, 9900, 2900, 'song_ISMA (Istri Manja) (Song)_Yuli JG.wav', '', '', '', '', '', '', 1),
(39, 18, 422, 'Kepalsuan Cinta (Song)', 0, 660, 3850, 6600, 9900, 2900, 'song_Kepalsuan Cinta (Song)_Rasyid Tanbu.wav', '', '', '', '', '', '', 1),
(40, 19, 299, 'Song Masa Kini (Song)', 0, 660, 3850, 6600, 9900, 2900, 'song_Song Masa Kini (Song)_Duo Ngek Ngok.wav', '', '', '', '', '', '', 1),
(41, 1, 422, 'Kangen Kampung (Song)', 0, 660, 3850, 6600, 9900, 2900, 'song_Kangen Kampung (Song)_Aggrie M. Kell.wav', '', '', '', '', '', '', 1),
(42, 20, 299, 'Setia Dalam Doa (Song)', 0, 660, 3850, 6600, 9900, 2900, 'song_Mujizat Setiap Hari_Michael Gunawan.wav', '', '', '', '', '', '', 1),
(43, 21, 299, 'Satu Di Hati (Song)', 0, 660, 3850, 6600, 9900, 2900, 'song_Satu Di Hati (Song)_Khaerul Rizal.wav', '', '', '', '', '', '', 1),
(44, 6, 346, 'Gembala Baik Bersuling Nan Mer', 0, 660, 3850, 6600, 9900, 2900, 'song_Gembala Baik Bersuling Nan Merdu_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(45, 6, 346, 'Tuhan Kau Gembala Kami', 0, 660, 3850, 6600, 9900, 2900, 'song_Tuhan Kau Gembala Kami_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(46, 6, 346, 'Lebih Dekat PadaMu', 0, 660, 3850, 6600, 9900, 2900, 'song_Lebih Dekat PadaMu_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(47, 6, 346, 'Permata Bagi Tuhan', 0, 660, 3850, 6600, 9900, 2900, 'song_Permata Bagi Tuhan_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(48, 6, 346, 'KasihNya Tak Berkesudahan', 0, 660, 3850, 6600, 9900, 2900, 'song_KasihNya Tak Berkesudahan_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(49, 6, 346, 'Dalam Rumah Bapaku', 0, 660, 3850, 6600, 9900, 2900, 'song_Dalam Rumah Bapaku_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(50, 6, 346, 'Ku Mau Berjalan Dengan Jurusel', 0, 660, 3850, 6600, 9900, 2900, 'song_Ku Mau Berjalan Dengan Juruselamatku_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(51, 6, 346, 'Betapa Tidak Kita Bersyukur', 0, 660, 3850, 6600, 9900, 2900, 'song_Betapa Tidak Kita Bersyukur_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(52, 6, 346, 'Yehova Segalanya', 0, 660, 3850, 6600, 9900, 2900, 'song_Yehova Segalanya_ Herlin Pirena.wav', '', '', '', '', '', '', 1),
(53, 6, 346, 'Sebuah Istana', 0, 660, 3850, 6600, 9900, 2900, 'song_Sebuah Istana_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(54, 6, 346, 'Apinya Berkobar Dalam Hatiku', 0, 660, 3850, 6600, 9900, 2900, 'song_Apinya Berkobar Dalam Hatiku_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(55, 6, 346, 'Dijalan Hidupku', 0, 660, 3850, 6600, 9900, 2900, 'song_Dijalan Hidupku_Herlin Pirena.wav', '', '', '', '', '', '', 1),
(56, 22, 299, 'Cinta Yang Lara (Song)', 0, 660, 3850, 6600, 9900, 2900, 'song_Cinta Yang Lara (Song)_Tatu Nagfha.wav', '', '', '', '', '', '', 1),
(57, 23, 346, 'Satu Hal Yang Kurindu', 0, 660, 3850, 6600, 9900, 2900, 'song_Satu Hal Yang Kurindu_Victor Hutabarat.wav', '', '', '', '', '', '', 1),
(58, 23, 346, 'Yesus Kami Puja', 0, 660, 3850, 6600, 9900, 2900, 'song_Yesus Kami Puja_Victor Hutabarat.wav', '', '', '', '', '', '', 1),
(59, 23, 346, 'Kau Yang T\'lah Mengawali', 0, 660, 3850, 6600, 9900, 2900, 'song_Kau Yang T\'lah Mengawali_Victor Hutabarat.wav', '', '', '', '', '', '', 1),
(60, 23, 346, 'Kami Datang MemujiMu', 0, 660, 3850, 6600, 9900, 2900, 'song_Kami Datang MemujiMu_Victor Hutabarat.wav', '', '', '', '', '', '', 1),
(61, 23, 346, 'Kasih Dan Karunia', 0, 660, 3850, 6600, 9900, 2900, 'song_Kasih Dan Karunia_Victor Hutabarat.wav', '', '', '', '', '', '', 1),
(62, 23, 346, 'Allah Baik', 0, 660, 3850, 6600, 9900, 2900, 'song_Allah Baik_Victor Hutabarat.wav', '', '', '', '', '', '', 1),
(63, 23, 346, 'Persembahanku', 0, 660, 3850, 6600, 9900, 2900, 'song_Persembahanku_Victor Hutabarat.wav', '', '', '', '', '', '', 1),
(64, 23, 346, 'Pujilah Tuhan Hai Jiwaku', 0, 660, 3850, 6600, 9900, 2900, 'song_Pujilah Tuhan Hai Jiwaku_Victor Hutabarat.wav', '', '', '', '', '', '', 1),
(65, 23, 346, 'Tak Sedetikpun', 0, 660, 3850, 6600, 9900, 2900, 'song_Tak Sedetikpun_Victor Hutabarat.wav', '', '', '', '', '', '', 1),
(66, 23, 346, 'Hatiku', 0, 660, 3850, 6600, 9900, 2900, 'song_Hatiku_Victor Hutabarat.wav', '', '', '', '', '', '', 1),
(67, 24, 346, 'Berhasil Dan Beruntung', 0, 660, 3850, 6600, 9900, 2900, 'song_Berhasil Dan Beruntung_Jonathan Prawira.wav', '', '', '', '', '', '', 1),
(68, 25, 346, 'Seperti Narwastu', 0, 660, 3850, 6600, 9900, 2900, 'song_Seperti Narwastu_Fransisca Alverina.wav', '', '', '', '', '', '', 1),
(69, 26, 346, 'Yesus Kaulah Surgaku', 0, 660, 3850, 6600, 9900, 2900, 'song_Yesus Kaulah Surgaku_Jonathan Prawira & Gloria Valerie Lim.wav', '', '', '', '', '', '', 1),
(70, 27, 346, 'Impianku Menjadi Nyata', 0, 660, 3850, 6600, 9900, 2900, 'song_Impianku Menjadi Nyata_Ralef Adolf Joseph Rant.wav', '', '', '', '', '', '', 1),
(71, 12, 346, 'Perkara Luar Biasa Dibalik Doa', 0, 660, 3850, 6600, 9900, 2900, 'song_Perkara Luar Biasa Dibalik Doa_Regina Pangkerego.wav', '', '', '', '', '', '', 1),
(72, 28, 346, 'Yesus Lebih Dari Cukup', 0, 660, 3850, 6600, 9900, 2900, 'song_Yesus Lebih Dari Cukup_Yenny Novita.wav', '', '', '', '', '', '', 1),
(73, 24, 346, 'Mengingat KasihMu', 0, 660, 3850, 6600, 9900, 2900, 'song_Mengingat KasihMu_Jonathan Prawira.wav', '', '', '', '', '', '', 1),
(74, 30, 346, 'Kau Permata Hatiku', 0, 660, 3850, 6600, 9900, 2900, 'song_Kau Permata Hatiku_Dessy Simarmata.wav', '', '', '', '', '', '', 1),
(75, 31, 346, 'Sampai Putih Rambutku', 0, 660, 3850, 6600, 9900, 2900, 'song_Sampai Putih Rambutku_Jonathan Prawira & Ruth Sihotang.wav', '', '', '', '', '', '', 1),
(76, 32, 346, 'Tuhan Pasti Turun Tangan', 0, 660, 3850, 6600, 9900, 2900, 'song_Tuhan Pasti Turun Tangan_Andrew Jadediah Gunawan.wav', '', '', '', '', '', '', 1),
(77, 33, 346, 'Semua Kau Tambahkan', 0, 660, 3850, 6600, 9900, 2900, 'song_Semua Kau Tambahkan_Chiechie Salmon.wav', '', '', '', '', '', '', 1),
(78, 34, 346, 'Tuhan Yang Tak Pernah Gagal', 0, 660, 3850, 6600, 9900, 2900, 'song_Tuhan Yang Tak Pernah Gagal_Angela HGSC.wav', '', '', '', '', '', '', 1),
(79, 35, 346, 'Mujizat Setiap Hari', 0, 660, 3850, 6600, 9900, 2900, 'song_Mujizat Setiap Hari_Michael Gunawan.wav', '', '', '', '', '', '', 1),
(80, 36, 346, 'Hari Ini Harinya Tuhan ', 0, 660, 3850, 6600, 9900, 2900, 'song_Hari Ini Harinya Tuhan_Chella Lumoindong.wav', '', '', '', '', '', '', 1),
(81, 37, 346, 'Tuhan Selalu Baik ', 0, 660, 3850, 6600, 9900, 2900, 'song_Tuhan Selalu Baik_Friska Abbas.wav', '', '', '', '', '', '', 1),
(82, 38, 346, 'Seperti Burung Di Udara', 0, 660, 3850, 6600, 9900, 2900, 'song_Seperti Burung Di Udara_Randy Lapian.wav', '', '', '', '', '', '', 1),
(83, 41, 346, 'Kesejahteraan Umat adalah Keku', 0, 660, 3850, 6600, 9900, 2900, 'song_Kesejahteraan Umat adalah Kekuatan Bangsa (Song)_Pdt. Drs. P. Kariso Rumambi M.si..wav', '', '', '', '', '', '', 1),
(84, 42, 346, 'Slamatkan Kota Ini (Save This ', 0, 660, 3850, 6600, 9900, 2900, 'song_Slamatkan Kota Ini (Save This City Lord) Versi Song (Ind)_Joy Tobing.wav', '', '', '', '', '', '', 1),
(85, 42, 346, 'Slamatkan Kota Ini (Save This ', 0, 660, 3850, 6600, 9900, 2900, 'song_Slamatkan Kota Ini (Save This City Lord) Versi Song (Eng)_Joy Tobing.wav', '', '', '', '', '', '', 1),
(86, 43, 346, 'Yang Terutama', 0, 660, 3850, 6600, 9900, 2900, 'song_Yang Terutama_Mission Singers.wav', '', '', '', '', '', '', 1),
(87, 43, 346, 'Biar Seluruh Bumi Memuji', 0, 660, 3850, 6600, 9900, 2900, 'song_Biar Seluruh Bumi Memuji_Mission Singers.wav', '', '', '', '', '', '', 1),
(88, 43, 346, 'Kasih Yesus', 0, 660, 3850, 6600, 9900, 2900, 'song_Kasih Yesus_Mission Singers.wav', '', '', '', '', '', '', 1),
(89, 43, 346, 'Kudatang Ke HadiratMu', 0, 660, 3850, 6600, 9900, 2900, 'song_Kudatang Ke HadiratMu_Mission Singers.wav', '', '', '', '', '', '', 1),
(90, 43, 346, 'Tuhan Mulialah NamaMu', 0, 660, 3850, 6600, 9900, 2900, 'song_Tuhan Mulialah NamaMu_Mission Singers.wav', '', '', '', '', '', '', 1),
(91, 43, 346, 'KekudusanMu Bapa', 0, 660, 3850, 6600, 9900, 2900, 'song_KekudusanMu Bapa_Mission Singers.wav', '', '', '', '', '', '', 1),
(92, 43, 346, 'Saat Pagi', 0, 660, 3850, 6600, 9900, 2900, 'song_Saat Pagi_Mission Singers.wav', '', '', '', '', '', '', 1),
(93, 43, 346, 'Ujilah Aku Tuhan', 0, 660, 3850, 6600, 9900, 2900, 'song_Ujilah Aku Tuhan_Mission Singers', '', '', '', '', '', '', 1),
(94, 43, 346, 'Tak Terukur Kasih Yesus', 0, 660, 3850, 6600, 9900, 2900, 'song_Tak Terukur Kasih Yesus_Mission Singers.wav', '', '', '', '', '', '', 1),
(95, 43, 346, 'Bersyukurlah', 0, 660, 3850, 6600, 9900, 2900, 'song_Bersyukurlah_ Mission Singers.wav', '', '', '', '', '', '', 1),
(96, 43, 346, 'Kukagum Hormat Akan Engkau', 0, 660, 3850, 6600, 9900, 2900, 'song_Kukagum Hormat Akan Engkau_Mission Singers.wav', '', '', '', '', '', '', 1),
(97, 43, 346, 'Syukur Kunaikkan PadaMu', 0, 660, 3850, 6600, 9900, 2900, 'song_Syukur Kunaikkan PadaMu _Mission Singers.wav', '', '', '', '', '', '', 1),
(98, 43, 346, 'Darah Yesus', 0, 660, 3850, 6600, 9900, 2900, 'song_Darah Yesus_Mission Singers.wav', '', '', '', '', '', '', 1),
(99, 43, 346, 'Kasih Yang Mempersatukan', 0, 660, 3850, 6600, 9900, 2900, 'song_Kasih Yang Mempersatukan_Mission Singers.wav', '', '', '', '', '', '', 1),
(100, 43, 346, 'Satu Hal Telah Kuminta', 0, 660, 3850, 6600, 9900, 2900, 'song_Satu Hal Telah Kuminta_Mission Singers.wav', '', '', '', '', '', '', 1),
(101, 43, 346, 'Glori Gloria', 0, 660, 3850, 6600, 9900, 2900, 'song_Glori Gloria_Mission Singers.wav', '', '', '', '', '', '', 1),
(102, 43, 346, 'Tiada Kuragu Lagi', 0, 660, 3850, 6600, 9900, 2900, 'song_Tiada Kuragu Lagi_Mission Singers.wav', '', '', '', '', '', '', 1),
(103, 43, 346, 'Langit Dan Bumi', 0, 660, 3850, 6600, 9900, 2900, 'song_Langit Dan Bumi_Mission Singers.wav', '', '', '', '', '', '', 1),
(104, 43, 346, 'Jangan Kamu Kuatir', 0, 660, 3850, 6600, 9900, 2900, 'song_Jangan Kamu Kuatir_Mission Singers.wav', '', '', '', '', '', '', 1),
(105, 43, 346, 'Sorak Hosana', 0, 660, 3850, 6600, 9900, 2900, 'song_Sorak Hosana_Mission Singers.wav', '', '', '', '', '', '', 1),
(106, 43, 346, 'Sungguh Kubangga Bapa', 0, 660, 3850, 6600, 9900, 2900, 'song_Sungguh Kubangga Bapa_Mission Singers.wav', '', '', '', '', '', '', 1),
(107, 43, 346, 'Bersama Malaikat', 0, 660, 3850, 6600, 9900, 2900, 'song_Bersama Malaikat_Mission Singers.wav', '', '', '', '', '', '', 1),
(108, 44, 346, 'Posting', 0, 660, 3850, 6600, 9900, 2900, 'song_Posting_Elly Sugigi Featuring Irfan Sbaztian.wav', '', '', '', '', '', '', 1),
(109, 7, 346, 'You Are My Everything', 0, 660, 3850, 6600, 9900, 2900, 'song_You Are My Everything_Fardhan Zee.wav', '', '', '', '', '', '', 1),
(110, 45, 346, 'Pergilah', 0, 660, 3850, 6600, 9900, 2900, 'song_Pergilah_Fey Octa.wav', '', '', '', '', '', '', 1),
(111, 45, 346, 'Setetes Embun', 0, 660, 3850, 6600, 9900, 2900, 'song_Setetes Embun Fey Octa_Fey Octa.wav', '', '', '', '', '', '', 1),
(112, 47, 346, 'Black Sweet Untuk Papua Barat', 0, 660, 3850, 6600, 9900, 2900, 'song_Black Sweet Untuk Papua Barat_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(113, 48, 346, 'Cinta Yang Hilang', 0, 660, 3850, 6600, 9900, 2900, 'song_Cinta Yang Hilang_Black Sweet.wav', '', '', '', '', '', '', 1),
(114, 48, 346, 'Datanglah Kasih', 0, 660, 3850, 6600, 9900, 2900, 'song_Datanglah Kasih_Black Sweet.wav', '', '', '', '', '', '', 1),
(115, 48, 346, 'Badai Diawal Bahagia', 0, 660, 3850, 6600, 9900, 2900, 'song_Badai Diawal Bahagia_Black Sweet.wav', '', '', '', '', '', '', 1),
(116, 48, 346, 'Tak Mungkin', 0, 660, 3850, 6600, 9900, 2900, 'song_Tak Mungkin _Black Sweet.wav', '', '', '', '', '', '', 1),
(117, 48, 346, 'Kesangsian Sebuah Hati', 0, 660, 3850, 6600, 9900, 2900, 'song_Kesangsian Sebuah Hati_Black Sweet.wav', '', '', '', '', '', '', 1),
(118, 48, 346, 'Nona Konde Dua', 0, 660, 3850, 6600, 9900, 2900, 'song_Nona Konde Dua_Black Sweet.wav', '', '', '', '', '', '', 1),
(119, 48, 346, 'Baju Bola-Bola', 0, 660, 3850, 6600, 9900, 2900, 'song_Baju Bola-Bola_Black Sweet.wav', '', '', '', '', '', '', 1),
(120, 48, 346, 'Tanah Papua', 0, 660, 3850, 6600, 9900, 2900, 'song_Tanah Papua_Black Sweet.wav', '', '', '', '', '', '', 1),
(121, 48, 346, 'Jangan Biarkan Dia Layu', 0, 660, 3850, 6600, 9900, 2900, 'song_Jangan Biarkan Dia Layu_Black Sweet.wav', '', '', '', '', '', '', 1),
(122, 48, 346, 'Molas Tarano', 0, 660, 3850, 6600, 9900, 2900, 'song_Molas Tarano_Black Sweet.wav', '', '', '', '', '', '', 1),
(123, 48, 346, 'Hukum Larvul', 0, 660, 3850, 6600, 9900, 2900, 'song_Hukum Larvul_Black Sweet.wav', '', '', '', '', '', '', 1),
(124, 48, 346, 'Memory 3 Februari', 0, 660, 3850, 6600, 9900, 2900, 'song_Memory 3 Februari_Black Sweet.wav', '', '', '', '', '', '', 1),
(125, 48, 346, 'Cintamu Cintaku', 0, 660, 3850, 6600, 9900, 2900, 'song_Cintamu Cintaku_Black Sweet.wav', '', '', '', '', '', '', 1),
(126, 48, 346, 'Mengapa Harus Terjadi', 0, 660, 3850, 6600, 9900, 2900, 'song_Mengapa Harus Terjadi_Black Sweet.wav', '', '', '', '', '', '', 1),
(127, 47, 346, 'Bilang Jua', 0, 660, 3850, 6600, 9900, 2900, 'song_Bilang Jua_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(128, 47, 346, 'Manokwari Jayapura', 0, 660, 3850, 6600, 9900, 2900, 'song_Manokwari Jayapura_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(129, 47, 346, 'Kalu Cinta', 0, 660, 3850, 6600, 9900, 2900, 'song_Kalu Cinta_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(130, 47, 346, 'Nuhu Mayun', 0, 660, 3850, 6600, 9900, 2900, 'song_Nuhu Mayun_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(131, 50, 299, 'Main Hape', 0, 660, 3850, 6600, 9900, 2900, 'song_Main Hape_Nindiani.wav', '', '', '', '', '', '', 1),
(132, 42, 346, 'Slamatkan Kota Ini (Save This ', 0, 660, 3850, 6600, 9900, 2900, 'song_Slamatkan Kota Ini (Save This City Lord) Versi 1 (Ind)_Joy Tobing.wav', '', '', '', '', '', '', 1),
(133, 42, 346, 'Slamatkan Kota Ini (Save This ', 0, 660, 3850, 6600, 9900, 2900, 'song_Slamatkan Kota Ini (Save This City Lord) Versi 2 (Ind)_Joy Tobing.wav', '', '', '', '', '', '', 1),
(134, 42, 346, 'Slamatkan Kota Ini (Save This ', 0, 660, 3850, 6600, 9900, 2900, 'song_Slamatkan Kota Ini (Save This City Lord) Versi 1 (Eng)_Joy Tobing.wav', '', '', '', '', '', '', 1),
(135, 42, 346, 'Slamatkan Kota Ini (Save This ', 0, 660, 3850, 6600, 9900, 2900, 'song_Slamatkan Kota Ini (Save This City Lord) Versi 2 (Eng)_Joy Tobing.wav', '', '', '', '', '', '', 1),
(136, 1, 422, 'SSKM (Sedikit-Sedikit Kamu Mar', 0, 660, 3850, 6600, 9900, 2900, 'song_SSKM (Sedikit-Sedikit Kamu Marah)_Aggrie M. Kell.wav', '', '', '', '', '', '', 1),
(137, 47, 400, 'Nuhu Evav', 0, 660, 3850, 6600, 9900, 2900, 'song_Nuhu Evav_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(138, 47, 400, 'Kota Langgur', 0, 660, 3850, 6600, 9900, 2900, 'song_Kota Langgur_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(139, 47, 400, 'Tevermnelat', 0, 660, 3850, 6600, 9900, 2900, 'song_Tevermnelat_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(140, 47, 400, 'Ain Yanan Ubun', 0, 660, 3850, 6600, 9900, 2900, 'song_Ain Yanan Ubun_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(141, 51, 299, 'Pramuria-Pramuria', 0, 660, 3850, 6600, 9900, 2900, 'song_Pramuria-Pramuria_D\'Sweet.wav', '', '', '', '', '', '', 1),
(142, 51, 299, 'Curiga', 0, 660, 3850, 6600, 9900, 2900, 'song_Curiga_D\'Sweet.wav', '', '', '', '', '', '', 1),
(143, 51, 299, 'Aduhai Kekasihku', 0, 660, 3850, 6600, 9900, 2900, 'song_Aduhai Kekasihku_D\'Sweet.wav', '', '', '', '', '', '', 1),
(144, 51, 299, 'Tanah Tercinta', 0, 660, 3850, 6600, 9900, 2900, 'song_Tanah Tercinta_D\'Sweet.wav', '', '', '', '', '', '', 1),
(145, 51, 299, 'Pantai Base G', 0, 660, 3850, 6600, 9900, 2900, 'song_Pantai Base G_D\'Sweet.wav', '', '', '', '', '', '', 1),
(146, 51, 299, 'Dibalik Bening Matamu', 0, 660, 3850, 6600, 9900, 2900, 'song_Dibalik Bening Matamu_D\'Sweet.wav', '', '', '', '', '', '', 1),
(147, 51, 299, 'Cinta Dan Pengorbanan', 0, 660, 3850, 6600, 9900, 2900, 'song_Cinta Dan Pengorbanan_D\'Sweet.wav', '', '', '', '', '', '', 1),
(148, 51, 299, 'I Got A Feelin', 0, 660, 3850, 6600, 9900, 2900, 'song_I Got A Feelin_D\'Sweet.wav', '', '', '', '', '', '', 1),
(149, 51, 299, 'Bidadari', 0, 660, 3850, 6600, 9900, 2900, 'song_Bidadari_D\'Sweet.wav', '', '', '', '', '', '', 1),
(150, 51, 299, 'Kehadiranmu', 0, 660, 3850, 6600, 9900, 2900, 'song_Kehadiranmu_D\'Sweet.wav', '', '', '', '', '', '', 1),
(151, 51, 299, 'Tinggal Kenangan', 0, 660, 3850, 6600, 9900, 2900, 'song_Tinggal Kenangan_D\'Sweet.wav', '', '', '', '', '', '', 1),
(152, 51, 299, 'Cintamu Cintaku', 0, 660, 3850, 6600, 9900, 2900, 'song_Cintamu Cintaku_ D\'Sweet.wav', '', '', '', '', '', '', 1),
(153, 51, 299, 'Lembaran Hidupku', 0, 660, 3850, 6600, 9900, 2900, 'song_Lembaran Hidupku_D\'Sweet.wav', '', '', '', '', '', '', 1),
(154, 51, 299, 'Ku Tak Bisa Jauh', 0, 660, 3850, 6600, 9900, 2900, 'song_Ku Tak Bisa Jauh_D\'Sweet.wav', '', '', '', '', '', '', 1),
(155, 51, 299, 'Begitukah Kau Padaku', 0, 660, 3850, 6600, 9900, 2900, 'song_Begitukah Kau Padaku_D\'Sweet.wav', '', '', '', '', '', '', 1),
(156, 51, 299, 'Melodi Rindu', 0, 660, 3850, 6600, 9900, 2900, 'song_Melodi Rindu_D\'Sweet.wav', '', '', '', '', '', '', 1),
(157, 51, 299, 'Kepingan Hati', 0, 660, 3850, 6600, 9900, 2900, 'song_Kepingan Hati_D\'Sweet.wav', '', '', '', '', '', '', 1),
(158, 52, 299, 'Manokwari Jayapura Dan Kenanga', 0, 660, 3850, 6600, 9900, 2900, 'song_Manokwari Jayapura Dan Kenangan Kompus Uncen_Cindy Ulukyanan.wav', '', '', '', '', '', '', 1),
(159, 51, 299, 'Antara Benci Dan Cinta', 0, 660, 3850, 6600, 9900, 2900, 'song_Antara Benci Dan Cinta_D\'Sweet.wav', '', '', '', '', '', '', 1),
(160, 51, 299, 'Dunia Dan Kemunafikan', 0, 660, 3850, 6600, 9900, 2900, 'song_Dunia Dan Kemunafikan_D\'Sweet.wav', '', '', '', '', '', '', 1),
(161, 51, 299, 'Selamat Menempuh Hidup Baru', 0, 660, 3850, 6600, 9900, 2900, 'song_Selamat Menempuh Hidup Baru_D\'Sweet.wav', '', '', '', '', '', '', 1),
(162, 51, 299, 'Desaku', 0, 660, 3850, 6600, 9900, 2900, 'song_Desaku_D\'Sweet.wav', '', '', '', '', '', '', 1),
(163, 51, 299, 'Masihkah Ada Cinta Dihatimu', 0, 660, 3850, 6600, 9900, 2900, 'song_Masihkah Ada Cinta Dihatimu_D\'Sweet.wav', '', '', '', '', '', '', 1),
(164, 51, 299, 'Maria', 0, 660, 3850, 6600, 9900, 2900, 'song_Maria_D\'Sweet.wav', '', '', '', '', '', '', 1),
(165, 51, 299, 'Teminabuan', 0, 660, 3850, 6600, 9900, 2900, 'song_Teminabuan_D\'Sweet.wav', '', '', '', '', '', '', 1),
(166, 53, 299, 'Semoga Kau Bahagia', 0, 660, 3850, 6600, 9900, 2900, 'song_Semoga Kau Bahagia_D\'Brothers.wav', '', '', '', '', '', '', 1),
(167, 53, 299, 'Terjalin Lagi', 0, 660, 3850, 6600, 9900, 2900, 'song_Terjalin Lagi_D\'Brothers.wav', '', '', '', '', '', '', 1),
(168, 53, 299, 'Cakrawala', 0, 660, 3850, 6600, 9900, 2900, 'song_Cakrawala_D\'Brothers.wav', '', '', '', '', '', '', 1),
(169, 53, 299, 'Hanya Dirimu', 0, 660, 3850, 6600, 9900, 2900, 'song_Hanya Dirimu_D\'Brothers.wav', '', '', '', '', '', '', 1),
(170, 53, 299, 'Belaian Kasih', 0, 660, 3850, 6600, 9900, 2900, 'song_Belaian Kasih_D\'Brothers.wav', '', '', '', '', '', '', 1),
(171, 53, 299, 'Tinggal Kenangan', 0, 660, 3850, 6600, 9900, 2900, 'song_Tinggal Kenangan_D\'Brothers.wav', '', '', '', '', '', '', 1),
(172, 53, 299, 'Kenangan Kota FakFak', 0, 660, 3850, 6600, 9900, 2900, 'song_Kenangan Kota FakFak_D\'Brothers.wav', '', '', '', '', '', '', 1),
(173, 53, 299, 'Bosan', 0, 660, 3850, 6600, 9900, 2900, 'song_Bosan_D\'Brothers.wav', '', '', '', '', '', '', 1),
(174, 53, 299, 'Kau Hadir', 0, 660, 3850, 6600, 9900, 2900, 'song_Kau Hadir_D\'Brothers.wav', '', '', '', '', '', '', 1),
(175, 53, 299, 'Hey Nona', 0, 660, 3850, 6600, 9900, 2900, 'song_Hey Nona_D\'Brothers.wav', '', '', '', '', '', '', 1),
(176, 53, 299, 'Ungkapan Hati', 0, 660, 3850, 6600, 9900, 2900, 'song_Ungkapan Hati_D\'Brothers.wav', '', '', '', '', '', '', 1),
(177, 53, 299, 'Lepaskanlah', 0, 660, 3850, 6600, 9900, 2900, 'song_Lepaskanlah_D\'Brothers.wav', '', '', '', '', '', '', 1),
(178, 53, 299, 'Renang', 0, 660, 3850, 6600, 9900, 2900, 'song_Renang_D\'Brothers.wav', '', '', '', '', '', '', 1),
(179, 53, 299, 'Duad Mbatang Impru', 0, 660, 3850, 6600, 9900, 2900, 'song_Duad Mbatang Impru_D\'Brothers.wav', '', '', '', '', '', '', 1),
(180, 53, 299, 'Mamule', 0, 660, 3850, 6600, 9900, 2900, 'song_Mamule_D\'Brothers.wav', '', '', '', '', '', '', 1),
(181, 47, 400, 'Dudu Mandudule', 0, 660, 3850, 6600, 9900, 2900, 'song_Dudu Mandudule_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(182, 47, 400, 'Katakanlah Kasih  ', 0, 660, 3850, 6600, 9900, 2900, 'song_Katakanlah Kasih_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(183, 49, 400, 'Adat Evav  ', 0, 660, 3850, 6600, 9900, 2900, 'song_Adat Evav_Black Sweet.wav', '', '', '', '', '', '', 1),
(184, 47, 400, 'Kota Tual', 0, 660, 3850, 6600, 9900, 2900, 'song_Kota Tual_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(185, 50, 400, 'Sosoi Evav ', 0, 660, 3850, 6600, 9900, 2900, 'song_Sosoi Evav_D\'Brothers.wav', '', '', '', '', '', '', 1),
(186, 50, 400, 'Sosoi Adat ', 0, 660, 3850, 6600, 9900, 2900, 'song_Sosoi Adat_D\'Brothers.wav', '', '', '', '', '', '', 1),
(187, 49, 400, 'Nen Mam Imru  ', 0, 660, 3850, 6600, 9900, 2900, 'song_Nen Mam Imru_Black Sweet.wav', '', '', '', '', '', '', 1),
(188, 47, 400, 'Pastor Yan Warpopor ', 0, 660, 3850, 6600, 9900, 2900, 'song_Pastor Yan Warpopor_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(189, 47, 400, 'Ain Ni Ain', 0, 660, 3850, 6600, 9900, 2900, 'song_Ain Ni Ain_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(190, 47, 400, 'Leran Faa', 0, 660, 3850, 6600, 9900, 2900, 'song_Leran Faa_Ian Ulukyanan.wav', '', '', '', '', '', '', 1),
(191, 55, 299, 'Dijamin', 0, 660, 3850, 6600, 9900, 2900, 'song_Dijamin_Petricia Nova.wav', '', '', '', '', '', '', 1),
(192, 55, 422, 'Fallin In Love', 0, 660, 3850, 6600, 9900, 2900, 'song_Fallin In Love_Petricia Nova.wav', '', '', '', '', '', '', 1),
(193, 55, 422, 'Wong Ndeso', 0, 660, 3850, 6600, 9900, 2900, 'song_Wong Ndeso_Petricia Nova.wav', '', '', '', '', '', '', 1),
(194, 56, 400, 'Pas Pantas', 0, 660, 3850, 6600, 9900, 2900, 'song_Pas Pantas_Timur Priyono.wav', '', '', '', '', '', '', 1),
(195, 56, 400, 'Yang Penting Pas', 0, 660, 3850, 6600, 9900, 2900, 'song_Yang Penting Pas_Timur Priyono.wav', '', '', '', '', '', '', 1),
(196, 57, 400, 'Lindu Aji', 0, 660, 3850, 6600, 9900, 2900, 'song_Lindu Aji_Ikhwan Ubaidillah.wav', '', '', '', '', '', '', 1),
(197, 9, 400, 'Discount C3 Carwash', 0, 660, 3850, 6600, 9900, 2900, 'song_Discount C3 Carwash_All Artist.wav', '', '', '', '', '', '', 1),
(199, 60, 151, 'Kau yang cari', 500, 500, 5000, 7000, 9000, 5000, '', 'REG_XL', 'MMIJM', 'MMIJL', 'MMIJK', 'MMIJJ', 'LG5_ISAT', 1),
(200, 60, 10, 'Kau yang cari2', 500, 500, 500, 500, 500, 500, '', 'REG_XL', 'MMIJM', 'MMIJL', 'MMIJK', 'MMIJJ', 'LG5_ISAT', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_partner`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pesan`
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
-- Dumping data untuk tabel `t_pesan`
--

INSERT INTO `t_pesan` (`id_pesan`, `nama_pengirim`, `email_pengirim`, `kontak_pengirim`, `isi_pesan`, `waktu_kirim`, `baca`, `hapus`) VALUES
(3, 'newsletter', 'ferrilasmihalim@gmail.com', 'newsletter', 'newsletter', '2019-08-30 13:03:01', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_promo`
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
-- Dumping data untuk tabel `t_promo`
--

INSERT INTO `t_promo` (`id_promo`, `nama_promo`, `mekanisme`, `periode`, `file_promo`, `aktif`) VALUES
(1, 'Promo 1', 'Lorem Ipsum', '06 Agustus 2019 - Selamanya', 'ahahaha1.jpg', 1),
(2, 'Promo 2', 'Lorem Ipsum', 'Kemarin Sore - Besok Siang', 'Promo_test.jpg', 1),
(3, 'Promo 3', 'Lorem Ipsum', 'Zaman Jahiliyah - Zaman Pelangi', 'Promo_test.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `t_album`
--
ALTER TABLE `t_album`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indeks untuk tabel `t_artist`
--
ALTER TABLE `t_artist`
  ADD PRIMARY KEY (`id_artists`),
  ADD KEY `partner_id` (`partner_id`);

--
-- Indeks untuk tabel `t_genre`
--
ALTER TABLE `t_genre`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_lagu`
--
ALTER TABLE `t_lagu`
  ADD PRIMARY KEY (`id_lagu`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indeks untuk tabel `t_partner`
--
ALTER TABLE `t_partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indeks untuk tabel `t_pesan`
--
ALTER TABLE `t_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `t_promo`
--
ALTER TABLE `t_promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_album`
--
ALTER TABLE `t_album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `t_artist`
--
ALTER TABLE `t_artist`
  MODIFY `id_artists` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `t_genre`
--
ALTER TABLE `t_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=423;

--
-- AUTO_INCREMENT untuk tabel `t_lagu`
--
ALTER TABLE `t_lagu`
  MODIFY `id_lagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT untuk tabel `t_partner`
--
ALTER TABLE `t_partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_pesan`
--
ALTER TABLE `t_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_promo`
--
ALTER TABLE `t_promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_album`
--
ALTER TABLE `t_album`
  ADD CONSTRAINT `t_album_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `t_artist` (`id_artists`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_lagu`
--
ALTER TABLE `t_lagu`
  ADD CONSTRAINT `t_lagu_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `t_album` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_lagu_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `t_genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
