-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2018 pada 04.06
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nim`) VALUES
(15, 'makan', 'konate', '2345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama_depan` text NOT NULL,
  `nama_belakang` text NOT NULL,
  `kelas` text NOT NULL,
  `hobi` text NOT NULL,
  `genre_film` text NOT NULL,
  `tempat_wisata` text NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_depan`, `nama_belakang`, `kelas`, `hobi`, `genre_film`, `tempat_wisata`, `tanggal_lahir`, `email`) VALUES
('2345678', 'makan', 'konate', '40-69', 'renang', 'horror', 'lombok', '2018-07-05', 'persib@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
