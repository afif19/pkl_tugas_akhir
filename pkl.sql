-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2019 pada 16.40
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(244) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:dosen, 3:mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama`, `username`, `password`, `alamat`, `level`) VALUES
(1, 'Afif', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Bali', 1),
(2, 'Gede Artha', 'deartha', 'ce28eed1511f631af6b2a7bb0a85d636', 'Dalung', 2),
(3, 'Kiki', 'kiki', '5787be38ee03a9ae5360f54d9026465f', 'Jember', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
