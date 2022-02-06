-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2022 pada 15.10
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030062`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_perpus`
--

CREATE TABLE `anggota_perpus` (
  `id` int(11) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `tingkatan` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `foto_anggota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota_perpus`
--

INSERT INTO `anggota_perpus` (`id`, `id_anggota`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `tingkatan`, `tanggal_lahir`, `foto_anggota`) VALUES
(1, '32133214', 'desy rinata', 'perempuan', 'jln pekanbaru serang banten', '087689764536', 'kuliah', '12 desember 2009', 'foto2.png'),
(2, '32145687', 'rendy cahyo purnomo', 'laki-laki', 'jln rw kucing tangerang banten', '087564213467', 'smk', '15 oktober 2001', 'foto1.png'),
(3, '32109897', 'brandy wirya', 'laki-laki', 'jln rawa bokor tangerang banten', '081232453678', 'kuliah', '21 januari 2001', 'foto1.png'),
(4, '32147609', 'alvian ', 'laki-laki', 'jln khajar dewantoro jakarta', '087134267098', 'kuliah', '1 maret 2001', 'foto1.png'),
(5, '32154312', 'santi', 'perempuan', 'jin pangeran bogor', '083457568907', 'sma', '30 juni 2006', 'foto2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `tema` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(25) NOT NULL,
  `jumlah_hal` varchar(20) NOT NULL,
  `tahun_penerbit` varchar(15) NOT NULL,
  `foto_buku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perpustakaan`
--

INSERT INTO `perpustakaan` (`id`, `kode_buku`, `tema`, `judul`, `pengarang`, `jumlah_hal`, `tahun_penerbit`, `foto_buku`) VALUES
(1, '6yte4o98', 'horor', 'kampung rambutan', 'komarudin', '105', '2006', 'buku1.png'),
(2, '87yt654e', 'petualangan', 'pencarian kristal ajaib', 'rere sumari', '100', '2011', 'buku1.png'),
(3, 'ui8765tr', 'horor', 'hantu kamar mandi', 'deny aditiya', '95', '2017', 'buku1.png'),
(4, '098ut5e3', 'misteri', 'misteri area 51', 'medy renada', '120', '2009', 'buku1.png'),
(5, '67yt5r4i', 'romantis', 'cinta di sekolah', 'sendi raditiya', '100', '2015', 'buku1.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota_perpus`
--
ALTER TABLE `anggota_perpus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota_perpus`
--
ALTER TABLE `anggota_perpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
