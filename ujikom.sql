-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2021 pada 13.30
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datadiri`
--

CREATE TABLE `datadiri` (
  `id` int(11) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `sertifikat` varchar(50) NOT NULL,
  `raport1` varchar(50) NOT NULL,
  `raport2` varchar(50) NOT NULL,
  `raport3` varchar(50) NOT NULL,
  `raport4` varchar(50) NOT NULL,
  `raport5` varchar(50) NOT NULL,
  `raport6` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `nilai4` int(11) NOT NULL,
  `nilai5` int(11) NOT NULL,
  `nilai6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nik` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `jenis_kelamin` varchar(14) NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `akses` varchar(12) NOT NULL,
  `status` varchar(60) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`nik`, `nama`, `jenis_kelamin`, `jurusan`, `email`, `password`, `alamat`, `akses`, `status`, `gambar`) VALUES
(4, '123453', 'L', 'TIDAK ADA', 'G@gmail.com', '12345', 'jln aaaaa', 'Admin', '', '78IMG_5225.JPG'),
(55, 'MUHAMMAD HAIDAR SHAHAB', 'Laki-Laki', 'D3 Teknik Sipil', 'gshaidar61@gmail.com', '123456', 'eeeeeeeeeeee', 'mahasiswa', 'diterima', '22data1 - Copy (4).jpeg'),
(2, 'MUHAMMAD HAIDAR SHAHAB', 'L', 'D3 Teknik Elektro Prodi Teknik Elektronika', 'gshaidar6@gmail.com', '1234', 'gfjthjn', 'mahasiswa', 'ditolak', '56gambarbiru.jpeg'),
(1, 'MUHAMMAD HAIKAL SHAHAB', 'L', 'D3 Teknik Mesin', 'haikal.pusri@gmail.com', 'haikal123', 'jln haikal', 'mahasiswa', 'proses', '39IMG_5219.JPG'),
(5466, '111', 'Laki-Laki', 'D3 Teknik Mesin', 'mfm17072003@gmail.com', '1234', '4tyugfvkv', 'mahasiswa', 'proses', '97data1 - Copy (6).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datadiri`
--
ALTER TABLE `datadiri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datadiri`
--
ALTER TABLE `datadiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
