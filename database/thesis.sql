-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2019 pada 15.39
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(485, 'admin', '2019-06-03 16:23:01', 'Add device Detail id 3&nbspName&nbspBuku Kwitansi'),
(486, 'admin', '2019-06-03 16:25:20', 'Assign Device id 38&nbspName&nbspBuku Kwitansi to location id 2&nbspName&nbspGudang'),
(487, 'admin', '2019-06-03 16:25:46', 'Add device Detail id 3&nbspName&nbspBuku Kwitansi'),
(488, 'admin', '2019-06-03 16:25:57', 'Assign Device id 39&nbspName&nbspBuku Kwitansi to location id 2&nbspName&nbspGudang'),
(489, 'admin', '2019-06-03 16:26:10', 'Update Status Buku Kwitansi to Terpakai '),
(490, 'admin', '2019-06-03 16:31:24', 'Update Status Buku Kwitansi to rusak '),
(491, 'admin', '2019-06-03 16:38:26', 'Add device Detail id 4&nbspName&nbspBuku Tulis'),
(492, 'admin', '2019-06-08 22:10:28', 'Edit Client User Agus'),
(493, 'admin', '2019-06-08 22:16:22', 'Add device Detail id 1&nbspName&nbspDianix blue ace'),
(494, 'admin', '2019-06-08 22:25:48', 'Add device Detail id 1&nbspName&nbspDianix blue ace'),
(495, 'admin', '2019-06-08 22:52:01', 'Add device Detail id 1&nbspName&nbspDianix blue ace'),
(496, 'admin', '2019-06-10 13:57:56', 'Add device Detail id 2&nbspName&nbspDianix red ace'),
(497, 'admin', '2019-06-10 14:10:30', 'Add device Detail id 1&nbspName&nbspDianix blue ace'),
(498, 'admin', '2019-06-10 14:13:33', 'Add device Detail id 1&nbspName&nbspDianix'),
(499, 'admin', '2019-06-10 15:56:29', 'Add device Detail id 1&nbspName&nbspDianix'),
(500, 'admin', '2019-06-10 16:25:13', 'Add device Detail id 2&nbspName&nbspDyeing'),
(501, 'admin', '2019-06-10 16:25:46', 'Add device Detail id 3&nbspName&nbspScouring'),
(502, 'admin', '2019-06-11 22:54:21', 'Assign Device id 9&nbspName&nbspScouring to location id 2&nbspName&nbspGudang'),
(503, 'admin', '2019-06-11 22:54:37', 'transfer Device  Scouring to location id 2&nbspName&nbspGudang'),
(504, 'admin', '2019-06-11 22:57:49', 'Update Status Scouring to rusak '),
(505, 'admin', '2019-06-11 22:58:48', 'Assign Device id 8&nbspName&nbspDyeing to location id 2&nbspName&nbspGudang'),
(506, 'admin', '2019-06-11 22:59:01', 'Update Status Dyeing to Terpakai '),
(507, 'admin', '2019-06-11 22:59:35', 'Assign Device id 7&nbspName&nbspDianix to location id 2&nbspName&nbspGudang'),
(508, 'admin', '2019-06-11 22:59:49', 'Update Status Dianix to rusak '),
(509, 'admin', '2019-06-11 22:59:58', 'Update Status Dyeing to rusak '),
(510, 'admin', '2019-06-11 23:09:51', 'Dump Device Dianix Inventory Code:dd'),
(511, 'admin', '2019-06-11 23:09:55', 'Repair Device Dyeing Inventory Code:sdsa'),
(512, 'admin', '2019-06-12 22:12:16', 'Assign Device id 6&nbspName&nbspDianix to location id 2&nbspName&nbspGudang'),
(513, 'admin', '2019-06-12 22:12:44', 'Update Status Dianix to Terpakai '),
(514, 'admin', '2019-06-12 22:13:22', 'Assign Device id 5&nbspName&nbspDianix to location id 2&nbspName&nbspGudang'),
(515, 'admin', '2019-06-12 22:13:34', 'Update Status Dianix to rusak '),
(516, 'admin', '2019-06-12 22:14:50', 'Repair Device Dianix Inventory Code:2'),
(517, 'admin', '2019-06-12 22:53:12', 'Repair Device Scouring Inventory Code:sd;'),
(518, 'admin', '2019-06-15 19:44:18', 'Assign Device id 4&nbspName&nbspDyeing to location id 2&nbspName&nbspGudang'),
(519, 'admin', '2019-06-15 19:44:44', 'Update Status Dyeing to Terpakai '),
(520, 'admin', '2019-06-15 19:54:15', 'transfer Device  Dianix to location id 2&nbspName&nbspGudang'),
(521, 'admin', '2019-06-15 19:55:14', 'Update Status Dianix to Terpakai '),
(522, 'admin', '2019-06-15 19:55:34', 'Update Status Dianix to Retur '),
(523, 'admin', '2019-06-15 19:58:58', 'Update Status Scouring to Diperbaiki '),
(524, 'admin', '2019-06-15 20:29:15', 'Add device Detail id 2&nbspName&nbspDyeing'),
(525, 'admin', '2019-06-15 21:29:53', 'Assign Device id 10&nbspName&nbspDyeing to location id 2&nbspName&nbspGudang'),
(526, 'admin', '2019-06-15 21:30:07', 'Update Status Dyeing to Retur '),
(527, 'admin', '2019-06-15 21:31:02', 'Update Status Dyeing to Terpakai '),
(528, 'admin', '2019-06-15 21:36:14', 'Add device Detail id 3&nbspName&nbspScouring'),
(529, 'admin', '2019-06-15 21:46:22', 'Add device Detail id 4&nbspName&nbspFinishing'),
(530, 'admin', '2019-06-15 22:12:31', 'Edit device info Dianix'),
(531, 'admin', '2019-06-15 22:12:38', 'Edit device info Dyeing'),
(532, 'admin', '2019-06-15 22:12:49', 'Edit device info Dyeing'),
(533, 'admin', '2019-06-15 22:12:54', 'Edit device info Dianix'),
(534, 'admin', '2019-06-15 22:36:21', 'Add device Detail id 4&nbspName&nbspFinishing'),
(535, 'admin', '2019-06-15 22:44:28', 'Update Status Dyeing to Retur '),
(536, 'admin', '2019-06-15 22:51:19', 'Edit device info Dianix'),
(537, 'admin', '2019-06-15 23:15:05', 'Update Status Scouring to Terpakai '),
(538, 'admin', '2019-06-15 23:27:40', 'Update Status Dianix to rusak'),
(539, 'admin', '2019-06-15 23:28:23', 'Update Status Dyeing to rusak '),
(540, 'admin', '2019-06-15 23:29:18', 'Update Status Dyeing to rusak '),
(541, 'admin', '2019-06-15 23:29:48', 'Update Status Dyeing to rusak '),
(542, 'admin', '2019-06-15 23:31:13', 'Update Status Dianix to rusak '),
(543, 'admin', '2019-06-15 23:31:57', 'Edit device info Dianix'),
(544, 'admin', '2019-06-15 23:34:16', 'Add device Detail id 1&nbspName&nbspDianix'),
(545, 'admin', '2019-06-15 23:36:37', 'Add device Detail id 1&nbspName&nbspDianix'),
(546, 'admin', '2019-06-15 23:39:48', 'Add device Detail id 2&nbspName&nbspDyeing'),
(547, 'admin', '2019-06-15 23:40:26', 'Add device Detail id 2&nbspName&nbspDyeing'),
(548, 'admin', '2019-06-15 23:59:08', 'Add device Detail id 1&nbspName&nbspDianix'),
(549, 'admin', '2019-06-16 00:02:41', 'Add device Detail id 1&nbspName&nbspDianix'),
(550, 'admin', '2019-06-16 00:02:53', 'Edit device info Dianix'),
(551, 'admin', '2019-06-16 00:03:43', 'Add device Detail id 1&nbspName&nbspDianix'),
(552, 'admin', '2019-06-16 00:04:13', 'Assign Device id 20&nbspName&nbspDianix to location id 1&nbspName&nbspGudang'),
(553, 'admin', '2019-06-16 00:04:25', 'Update Status Dianix to rusak '),
(554, 'admin', '2019-06-16 00:05:26', 'Repair Device Dianix Inventory Code:DX03'),
(555, 'admin', '2019-06-16 00:10:14', 'Assign Device id 19&nbspName&nbspDianix to location id 1&nbspName&nbspGudang'),
(556, 'admin', '2019-06-16 00:10:34', 'Update Status Dianix to rusak '),
(557, 'admin', '2019-06-16 00:14:04', 'Repair Device Dianix Inventory Code:DX03'),
(558, 'admin', '2019-06-16 00:16:19', 'Add device Detail id 2&nbspName&nbspDyeing'),
(559, 'admin', '2019-06-16 00:17:11', 'Add device Detail id 2&nbspName&nbspDyeing'),
(560, 'admin', '2019-06-16 00:17:24', 'Edit device info Dianix'),
(561, 'admin', '2019-06-16 00:17:49', 'Update Status Dianix to Baru '),
(562, 'admin', '2019-06-16 00:18:15', 'Update Status Dianix to rusak '),
(563, 'admin', '2019-06-16 00:19:45', 'Edit device info Dianix'),
(564, 'admin', '2019-06-16 00:21:24', 'Update Status Dianix to rusak '),
(565, 'admin', '2019-06-16 00:24:25', 'Add device Detail id 3&nbspName&nbspScouring'),
(566, 'admin', '2019-06-16 00:25:15', 'Add device Detail id 3&nbspName&nbspScouring'),
(567, 'admin', '2019-06-16 00:25:55', 'Add device Detail id 4&nbspName&nbspFinishing'),
(568, 'admin', '2019-06-16 00:26:42', 'Add device Detail id 4&nbspName&nbspFinishing'),
(569, 'admin', '2019-06-16 00:27:11', 'Assign Device id 18&nbspName&nbspDianix to location id 1&nbspName&nbspGudang'),
(570, 'admin', '2019-06-16 00:27:26', 'Update Status Dianix to rusak '),
(571, 'admin', '2019-06-17 20:21:49', 'Assign Device id 25&nbspName&nbspFinishing to location id 1&nbspName&nbspGudang'),
(572, 'admin', '2019-06-17 20:21:49', 'Assign Device id 24&nbspName&nbspScouring to location id 1&nbspName&nbspGudang'),
(573, 'admin', '2019-06-17 20:21:49', 'Assign Device id 22&nbspName&nbspDyeing to location id 1&nbspName&nbspGudang'),
(574, 'admin', '2019-06-17 20:22:03', 'Update Status Finishing to rusak '),
(575, 'admin', '2019-06-17 20:22:58', 'Update Status Dianix to rusak '),
(576, 'admin', '2019-06-17 20:23:11', 'Update Status Scouring to rusak '),
(577, 'admin', '2019-06-17 20:23:21', 'Update Status Dyeing to rusak '),
(578, 'admin', '2019-06-17 20:44:48', 'transfer Device   to location id 1&nbspName&nbspGudang'),
(579, 'admin', '2019-06-17 20:45:02', 'Update Status  to rusak '),
(580, 'admin', '2019-06-17 21:46:05', 'Edit device info Dianix'),
(581, 'admin', '2019-06-18 17:55:40', 'Add device Detail id 1&nbspName&nbspDianix'),
(582, 'admin', '2019-06-25 16:24:54', 'Add device Detail id 1&nbspName&nbspDianix'),
(583, 'admin', '2019-06-25 16:26:52', 'Assign Device id 28&nbspName&nbspDianix to location id 1&nbspName&nbspGudang'),
(584, 'admin', '2019-06-25 16:27:16', 'Update Status Dianix to rusak '),
(585, 'admin', '2019-06-25 16:29:13', 'Repair Device Dianix Inventory Code:DX04'),
(586, 'admin', '2019-06-25 16:38:35', 'Add device Detail id 2&nbspName&nbspDyeing'),
(587, 'admin', '2019-06-25 18:16:36', 'Add device Detail id 1&nbspName&nbspDianix'),
(588, 'admin', '2019-06-25 18:16:56', 'Assign Device id 30&nbspName&nbspDianix to location id 1&nbspName&nbspGudang'),
(589, 'admin', '2019-06-25 18:17:07', 'Update Status Dianix to rusak '),
(590, 'admin', '2019-06-25 19:18:21', 'Add device Detail id 2&nbspName&nbspDyeing'),
(591, 'admin', '2019-06-25 19:22:21', 'Add device Detail id 1&nbspName&nbspDianix'),
(592, 'admin', '2019-06-25 19:26:48', 'Add device Detail id 1&nbspName&nbspDianix'),
(593, 'admin', '2019-06-25 19:28:17', 'Assign Device id 33&nbspName&nbspDianix to location id 1&nbspName&nbspGudang'),
(594, 'admin', '2019-06-25 19:28:30', 'Update Status Dianix to rusak '),
(595, 'admin', '2019-06-25 19:34:44', 'Add device Detail id 3&nbspName&nbspScouring'),
(596, 'admin', '2019-06-25 20:44:10', 'Assign Device id 34&nbspName&nbspScouring to location id 1&nbspName&nbspGudang'),
(597, 'admin', '2019-06-25 20:44:11', 'Assign Device id 32&nbspName&nbspDianix to location id 1&nbspName&nbspGudang'),
(598, 'admin', '2019-06-25 20:44:33', 'Update Status Dianix to rusak '),
(599, 'admin', '2019-06-25 20:44:44', 'Update Status Scouring to rusak '),
(600, 'admin', '2019-06-25 20:45:24', 'Assign Device id 21&nbspName&nbspDyeing to location id 1&nbspName&nbspGudang'),
(601, 'admin', '2019-06-25 20:45:36', 'Update Status Dyeing to rusak '),
(602, 'admin', '2019-06-25 20:53:10', 'Add device Detail id 2018-10-10'),
(603, 'admin', '2019-06-25 20:59:48', 'Edit device info '),
(604, 'admin', '2019-06-25 21:03:44', 'Add device Detail id 4&nbspName&nbspFinishing'),
(605, 'admin', '2019-06-25 21:23:02', 'Add device Detail id 1&nbspName&nbspDianix'),
(606, 'admin', '2019-06-26 18:17:12', 'Assign Device id 37&nbspName&nbspDianix to location id 1&nbspName&nbspGudang'),
(607, 'admin', '2019-06-26 18:17:39', 'Update Status Dianix to rusak '),
(608, 'admin', '2019-06-26 18:33:03', 'Add device Detail id 2019-06-06'),
(609, 'admin', '2019-06-26 18:35:33', 'Add device Detail id 000000000'),
(610, 'admin', '2019-06-26 18:38:53', 'Add device Detail id 20 JANUARI 2019'),
(611, 'admin', '2019-06-26 18:48:56', 'Add device Detail id 3&nbspName&nbspScouring'),
(612, 'admin', '2019-06-26 18:53:15', 'Add device Detail id 2&nbspName&nbspDyeing'),
(613, 'admin', '2019-06-26 19:07:17', 'Add device Detail id 2&nbspName&nbspDyeing'),
(614, 'admin', '2019-06-26 19:10:19', 'Add device Detail id 4&nbspName&nbspFinishing'),
(615, 'admin', '2019-06-26 19:33:36', 'Add device Detail id 2&nbspName&nbspDyeing'),
(616, 'admin', '2019-06-26 19:40:10', 'Add device Detail id 2&nbspName&nbspDyeing'),
(617, 'admin', '2019-06-26 19:44:10', 'Add device Detail id 1&nbspName&nbspDianix'),
(618, 'admin', '2019-06-26 19:58:37', 'Add device Detail id 4&nbspName&nbspFinishing'),
(619, 'admin', '2019-06-27 19:54:23', 'Assign Device id 49&nbspName&nbspFinishing to location id 1&nbspName&nbspGudang'),
(620, 'admin', '2019-06-27 19:54:37', 'Update Status Finishing to rusak '),
(621, 'admin', '2019-06-27 20:06:01', 'Repair Device Finishing Inventory Code:FN01'),
(622, 'admin', '2019-06-27 20:08:14', 'Assign Device id 48&nbspName&nbspDianix to location id 1&nbspName&nbspGudang'),
(623, 'admin', '2019-06-27 20:08:25', 'Update Status Dianix to terpakai '),
(624, 'admin', '2019-06-27 21:46:13', 'Add device Detail id 2&nbspName&nbspDyeing'),
(625, 'admin', '2019-06-27 21:47:48', 'Add device Detail id 3&nbspName&nbspScouring'),
(626, 'admin', '2019-06-27 21:48:49', 'Add device Detail id 4&nbspName&nbspFinishing'),
(627, 'admin', '2019-06-27 21:50:28', 'Assign Device id 52&nbspName&nbspFinishing to location id 1&nbspName&nbspGudang'),
(628, 'admin', '2019-06-27 21:50:41', 'Update Status Finishing to terpakai '),
(629, 'admin', '2019-06-27 21:52:03', 'Add device Detail id 1&nbspName&nbspDianix'),
(630, 'admin', '2019-07-01 20:14:07', 'Assign Device id 50&nbspName&nbspDyeing to location id 1&nbspName&nbspGudang'),
(631, 'admin', '2019-07-01 20:14:20', 'Update Status Dyeing to terpakai '),
(632, 'admin', '2019-07-02 19:57:55', 'Assign Device id 53&nbspName&nbspDianix to location id 1&nbspName&nbspGudang'),
(633, 'admin', '2019-07-02 19:58:13', 'Update Status Dianix to terpakai ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(1, 'Agus', 'Hermansyah', 'admin', '12345', 'uploads/IMG_20180828_070612.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `client_id` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `thumbnails` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`client_id`, `username`, `password`, `firstname`, `lastname`, `thumbnails`) VALUES
(10, 'Agus', '12345', 'Agus', 'Hermansyah', 'uploads/141113161942-large.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`content_id`, `title`, `content`) VALUES
(1, 'Mission', '<pre>\r\n<span style=\"font-size:16px\"><strong>Mission</strong></span></pre>\r\n\r\n<p style=\"text-align:left\"><span style=\"font-family:arial,helvetica,sans-serif; font-size:medium\"><span style=\"font-size:large\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span>&nbsp; &nbsp;<span style=\"font-size:18px\"> &nbsp; &nbsp; &nbsp;\r\nMISI :\r\nMenghasilkan produksi dengan kualitas yang baik, efisien dengan cost yang kompetitif dan waktu yang tepat.&nbsp;</span></p>\r\n\r\n<p style=\"text-align:left\">&nbsp;</p>\r\n'),
(2, 'Vision', '<pre><span style=\"font-size: large;\"><strong>Vision</strong></span></pre>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size: large;\">&nbsp; VISI :\r\nMenjadikan Perusahaan Tekstil yang menghasilkan produk berkualitas ekspor dengan harga yang kompetitif secara konsisten dan profesional.\r\n</span><br /><br /></p>'),
(3, 'Footer', '<p style=\"text-align:center\"></p>\r\n\r\n<p style=\"text-align:center\"></p>\r\n'),
(4, 'Title', '<p><span style=\"font-family:trebuchet ms,geneva\">Sistem Informasi Persediaan Barang</span></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `device_name`
--

CREATE TABLE `device_name` (
  `dev_id` int(11) NOT NULL,
  `dev_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `device_name`
--

INSERT INTO `device_name` (`dev_id`, `dev_name`) VALUES
(1, 'Dianix'),
(2, 'Dyeing'),
(3, 'Scouring'),
(4, 'Finishing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `location_details`
--

CREATE TABLE `location_details` (
  `ld_id` int(11) NOT NULL,
  `stdev_id` int(11) NOT NULL,
  `date_deployment` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `location_details`
--

INSERT INTO `location_details` (`ld_id`, `stdev_id`, `date_deployment`, `id`) VALUES
(1, 1, '2019-06-27', 49),
(2, 1, '2019-06-27', 48),
(3, 1, '2019-06-27', 52),
(4, 1, '2019-07-01', 50),
(5, 1, '2019-07-02', 53);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification_read`
--

CREATE TABLE `notification_read` (
  `notification_read_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stdevice`
--

CREATE TABLE `stdevice` (
  `id` int(11) NOT NULL,
  `dev_tanggal` date NOT NULL,
  `dev_id` int(11) NOT NULL,
  `dev_faktur` varchar(200) NOT NULL,
  `dev_desc` varchar(128) NOT NULL,
  `dev_serial` varchar(128) NOT NULL,
  `dev_brand` varchar(128) NOT NULL,
  `dev_model` varchar(128) NOT NULL,
  `dev_qty` int(200) NOT NULL,
  `dev_status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stdevice`
--

INSERT INTO `stdevice` (`id`, `dev_tanggal`, `dev_id`, `dev_faktur`, `dev_desc`, `dev_serial`, `dev_brand`, `dev_model`, `dev_qty`, `dev_status`) VALUES
(48, '2018-01-01', 1, '0', '', 'DX1', 'S', 'sssss', 0, 'terpakai'),
(50, '2019-06-01', 2, 'F0001', '<p>KARUNG</p>\r\n', 'DY0001', 'RAGAM JAYA', 'OXALID ACID', 50, 'terpakai'),
(51, '2019-06-02', 3, 'S0001', '<p>DRUM</p>\r\n', 'SC0001', 'RGB', 'LIPOTOL', 100, 'Baru'),
(52, '2019-06-03', 4, 'F0002', '<p>KEMPU</p>\r\n', 'FN0002', 'SCP', 'ELENON', 1000, 'terpakai'),
(53, '2019-06-12', 1, 'DN0001', '', 'DX0002', 'LONGSENG', 'BLUE PLUS', 100, 'terpakai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stlocation`
--

CREATE TABLE `stlocation` (
  `stdev_id` int(11) NOT NULL,
  `stdev_location_name` varchar(128) NOT NULL,
  `thumbnails` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stlocation`
--

INSERT INTO `stlocation` (`stdev_id`, `stdev_location_name`, `thumbnails`) VALUES
(1, 'Gudang', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `admin_id` int(128) NOT NULL,
  `client_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `admin_id`, `client_id`) VALUES
(263, 'admin', '2019-06-03 16:15:53', '2019-07-02', 1, 0),
(264, 'admin', '2019-06-03 16:30:51', '2019-07-02', 1, 0),
(265, 'admin', '2019-06-03 16:32:31', '2019-07-02', 1, 0),
(266, 'admin', '2019-06-03 17:19:08', '2019-07-02', 1, 0),
(267, 'admin', '2019-06-03 17:26:21', '2019-07-02', 1, 0),
(268, 'admin', '2019-06-03 17:27:39', '2019-07-02', 1, 0),
(269, 'admin', '2019-06-03 17:27:39', '2019-07-02', 1, 0),
(270, 'admin', '2019-06-03 17:27:45', '2019-07-02', 1, 0),
(271, 'admin', '2019-06-03 17:28:24', '2019-07-02', 1, 0),
(272, 'admin', '2019-06-08 22:09:15', '2019-07-02', 1, 0),
(273, 'admin', '2019-06-08 22:23:20', '2019-07-02', 1, 0),
(274, 'admin', '2019-06-08 22:35:18', '2019-07-02', 1, 0),
(275, 'admin', '2019-06-08 23:03:57', '2019-07-02', 1, 0),
(276, 'admin', '2019-06-10 13:57:19', '2019-07-02', 1, 0),
(277, 'admin', '2019-06-10 16:24:13', '2019-07-02', 1, 0),
(278, 'admin', '2019-06-11 22:54:01', '2019-07-02', 1, 0),
(279, 'admin', '2019-06-11 23:28:53', '2019-07-02', 1, 0),
(280, 'admin', '2019-06-12 21:57:34', '2019-07-02', 1, 0),
(281, 'admin', '2019-06-15 19:29:43', '2019-07-02', 1, 0),
(282, 'admin', '2019-06-15 19:35:31', '2019-07-02', 1, 0),
(283, 'admin', '2019-06-15 19:49:20', '2019-07-02', 1, 0),
(284, 'admin', '2019-06-15 22:34:32', '2019-07-02', 1, 0),
(285, 'admin', '2019-06-17 20:20:47', '2019-07-02', 1, 0),
(286, 'admin', '2019-06-17 21:34:37', '2019-07-02', 1, 0),
(287, 'admin', '2019-06-18 17:43:55', '2019-07-02', 1, 0),
(288, 'admin', '2019-06-25 16:23:00', '2019-07-02', 1, 0),
(289, 'admin', '2019-06-25 17:49:28', '2019-07-02', 1, 0),
(290, 'admin', '2019-06-25 17:49:29', '2019-07-02', 1, 0),
(291, 'admin', '2019-06-25 18:05:04', '2019-07-02', 1, 0),
(292, 'admin', '2019-06-25 18:24:22', '2019-07-02', 1, 0),
(293, 'admin', '2019-06-25 20:36:59', '2019-07-02', 1, 0),
(294, 'admin', '2019-06-26 18:15:17', '2019-07-02', 1, 0),
(295, 'admin', '2019-06-27 19:21:02', '2019-07-02', 1, 0),
(296, 'admin', '2019-06-30 20:20:53', '2019-07-02', 1, 0),
(297, 'admin', '2019-06-30 21:01:45', '2019-07-02', 1, 0),
(298, 'admin', '2019-06-30 21:45:40', '2019-07-02', 1, 0),
(299, 'admin', '2019-06-30 21:58:51', '2019-07-02', 1, 0),
(300, 'admin', '2019-06-30 22:05:54', '2019-07-02', 1, 0),
(301, 'admin', '2019-07-01 19:23:07', '2019-07-02', 1, 0),
(302, 'admin', '2019-07-02 19:23:35', '2019-07-02', 1, 0),
(303, 'admin', '2019-07-02 19:57:00', '2019-07-02', 1, 0),
(304, 'admin', '2019-07-02 20:34:30', '2019-07-02', 1, 0),
(305, 'admin', '2019-07-02 21:02:41', '2019-07-02', 1, 0),
(306, 'admin', '2019-07-02 21:12:37', '2019-07-02', 1, 0),
(307, 'admin', '2019-07-02 21:25:25', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indeks untuk tabel `device_name`
--
ALTER TABLE `device_name`
  ADD PRIMARY KEY (`dev_id`);

--
-- Indeks untuk tabel `location_details`
--
ALTER TABLE `location_details`
  ADD PRIMARY KEY (`ld_id`);

--
-- Indeks untuk tabel `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indeks untuk tabel `notification_read`
--
ALTER TABLE `notification_read`
  ADD PRIMARY KEY (`notification_read_id`);

--
-- Indeks untuk tabel `stdevice`
--
ALTER TABLE `stdevice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stlocation`
--
ALTER TABLE `stlocation`
  ADD PRIMARY KEY (`stdev_id`);

--
-- Indeks untuk tabel `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=634;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `device_name`
--
ALTER TABLE `device_name`
  MODIFY `dev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `location_details`
--
ALTER TABLE `location_details`
  MODIFY `ld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `notification_read`
--
ALTER TABLE `notification_read`
  MODIFY `notification_read_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stdevice`
--
ALTER TABLE `stdevice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `stlocation`
--
ALTER TABLE `stlocation`
  MODIFY `stdev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
