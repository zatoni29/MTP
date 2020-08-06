-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jun 2020 pada 17.02
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('pria','wanita','','') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` int(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `bidang_studi` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `jenis_kelamin`, `agama`, `jabatan`, `email`, `no_hp`, `alamat`, `tanggal_lahir`, `bidang_studi`, `pendidikan`, `image`) VALUES
(3, 'Nonik', 'wanita', 'Kristien', 'Guru Kelas', 'nonik@gmail.com', 2147483647, 'Jl.Kenanga Blok A1 No.7', '1995-05-08', 'Matematika dan Kimia', 'S2', 'uad.png'),
(5, 'Aisyah', 'wanita', 'Islam', 'Wakil Kepala sekolah', 'aisyah123@gmail.com', 91209101, 'Jl.Karakal 1 No.B15', '1991-01-23', 'B inggris', 'S1', ''),
(7, 'akaka', 'wanita', 'Kristen', 'asasa', 'asasasa', 2112212, 'assaaas', '0000-00-00', 'Matematika', 'S2', 'meme2.png'),
(16, 'Aidin', 'pria', 'Islam', 'Guru kelas', 'aidin@gmail.com', 112233, 'kamksmka', '2020-06-26', 'Matematika', 'S1', 'back.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id_user`, `nama`, `username`, `password`) VALUES
(0, 'admin', 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `panduan`
--

CREATE TABLE `panduan` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panduan`
--

INSERT INTO `panduan` (`id`, `judul`, `data`) VALUES
(9, 'APPL', 'appl 7 dan 8.docx'),
(10, 'Steganografi', 'steganografi.docx'),
(11, '002', '002-004.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(50) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama`, `alamat`, `no_telpon`, `kecamatan`, `kabupaten`, `provinsi`) VALUES
(1, 'SMAN Jogja', 'Jl. Sleman', '0274 - 551166', 'Sleman', 'Sleman', 'Sleman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `panduan`
--
ALTER TABLE `panduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panduan`
--
ALTER TABLE `panduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
