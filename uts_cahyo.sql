-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2019 pada 07.54
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_cahyo`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `data_mahasiswa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `data_mahasiswa` (
`id_mhs` int(11)
,`nim` varchar(12)
,`nama_mhs` varchar(100)
,`kelamin` varchar(100)
,`no_hp` varchar(13)
,`alamat` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `no_hp_lama` varchar(100) NOT NULL,
  `no_hp_baru` varchar(100) NOT NULL,
  `tgl_ubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_mhs`, `nim`, `no_hp_lama`, `no_hp_baru`, `tgl_ubah`) VALUES
(1, '2147483647', '333', '7777', '2019-10-29 16:00:55'),
(5, '21474890', '2147483647', '222', '2019-10-29 16:02:59'),
(12, '191240000482', '082123789', '082123799', '2019-11-05 14:35:53'),
(13, '191240000482', '082123799', '082123111', '2019-11-05 14:36:11'),
(14, '191240000482', '082123111', '082123777', '2019-11-05 14:38:13'),
(15, '191240000482', '082123777', '082123222', '2019-11-05 14:38:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `kelamin` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `nama_mhs`, `kelamin`, `no_hp`, `alamat`) VALUES
(2, '2147483', 'Muhammad Shihab', 'laki', '790', 'Bulungan'),
(14, '191240000482', 'fery', 'laki-laki', '2', 'Sukosono'),
(15, '191240000482', 'fery', 'laki laki', '78', 'Sukosono'),
(16, '', '', '', '', ''),
(17, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, '', '', '', '', '');

--
-- Trigger `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `update_hp` AFTER UPDATE ON `mahasiswa` FOR EACH ROW BEGIN
IF (NEW.no_hp != OLD.no_hp) THEN
	INSERT INTO log (nim, no_hp_lama, no_hp_baru, tgl_ubah)
VALUES (OLD.nim,OLD.no_hp,NEW.no_hp,NOW());
	END IF;
   END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur untuk view `data_mahasiswa`
--
DROP TABLE IF EXISTS `data_mahasiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_mahasiswa`  AS  select `mahasiswa`.`id_mhs` AS `id_mhs`,`mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama_mhs` AS `nama_mhs`,`mahasiswa`.`kelamin` AS `kelamin`,`mahasiswa`.`no_hp` AS `no_hp`,`mahasiswa`.`alamat` AS `alamat` from `mahasiswa` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
