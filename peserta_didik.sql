-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Bulan Mei 2021 pada 18.33
-- Versi server: 10.3.28-MariaDB-cll-lve
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opsekola_kelulusan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_didik`
--

CREATE TABLE `peserta_didik` (
  `id_pd` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pd` varchar(125) NOT NULL,
  `nis` int(10) NOT NULL,
  `ttl` varchar(125) NOT NULL,
  `jk` varchar(16) NOT NULL,
  `nama_ortu` varchar(125) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `prodi` varchar(8) NOT NULL,
  `nilai_rata_rata` varchar(125) NOT NULL,
  `keterangan` varchar(8) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `download` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta_didik`
--

INSERT INTO `peserta_didik` (`id_pd`, `username`, `password`, `nama_pd`, `nis`, `ttl`, `jk`, `nama_ortu`, `kelas`, `prodi`, `nilai_rata_rata`, `keterangan`, `foto`, `download`) VALUES
(1, '0027692008', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Adi Febrian', 0200, 'Banyuasin, 25 Agustus 2002', 'Laki-laki', 'Sugiman', 'XII', 'MIPA', '00.00', 'LULUS', 'Adi-Febrian.jpg', 'Adi-Febrian.pdf'),
(2, '0036915459', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Ahmad Habib Koyum Kalwani', 0196, 'Banyuasin, 27 Desember 2003', 'Laki-laki', 'Sukaryanto', 'XII', 'MIPA', '00.00', 'LULUS', 'Ahmad-Habib-Koyum-Kalwani.jpg', 'Ahmad-Habib-Koyum-Kalwani.pdf' ),
(3, '0020390486', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Andi Hasnawati', 0178, 'Musi Banyuasin, 04 Agustus 2002', 'Perempuan', 'Andi Coni', 'XII', 'MIPA', '00.00', 'LULUS', 'Anadi-Hasnawati.jpg', 'Andi-Hasnawati.pdf'),
(4, '0034330960', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Anggi Febrianti', 0201, 'Banyuasin, 02 Februari 2003', 'Perempuan', 'Muhammad Dani', 'XII', 'MIPA', '00.00', 'LULUS', 'Anggi-Febrianti.jpg', 'Anggi-Febrianti.pdf'),
(5, '0034950430', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Anisa Susanti', 0174, 'Banyuasin, 14 Juni 2003', 'Perempuan', 'Johar', 'XII', 'MIPA', '00.00', 'LULUS', 'Anisa-Susanti.jpg', 'Anisa-Susanti.pdf'),
(6, '0040873455', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Aprilia Pratiwi', 0190, 'Talang Duku, 20 April 2004', 'Perempuan', 'Usman', 'XII', 'MIPA', '00.00', 'LULUS', 'Aprilia-Pratiwi.jpg', 'Aprilia-Pratiwi.pdf'),
(7, '0001000280', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Bayu Saputra', 0193, 'Banyuasin, 02 Agustus 2000', 'Laki-laki', 'Selamet Solihin', 'XII', 'MIPA', '00.00', 'LULUS', 'Bayu-Saputra.jpg', 'Bayu-Saputra.pdf'),
(8, '0034950447', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Devi Anggraini', 0171, 'Banyuasin, 29 Desember 2003', 'Perempuan', 'Ahmat Sodikin', 'XII', 'MIPA', '00.00', 'LULUS', 'Devi-Anggraini.jpg', 'Devi-Anggraini.pdf'),
(9, '0026316622', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Dewi', 0181, 'Banyuasin, 17 Agustus 2002', 'Perempuan', 'Jumadi', 'XII', 'MIPA', '00.00', 'LULUS', 'Dewi.jpg', 'Dewi.pdf'),
(10, '0040570795', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Dinda Rizki Apriani', 0170, 'Banyuasin, 10 April 2004', 'Perempuan', 'Rudinda', 'XII', 'MIPA', '00.00', 'LULUS', 'Dinda-Rizki-Apriani.jpg', 'Dinda-Rizki-Apriani.pdf'),
(11, '0036915449', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Edo Susanto', 0172, 'Banyuasin, 24 Juli 2003', 'Laki-laki', 'Supandi', 'XII', 'MIPA', '00.00', 'LULUS', 'Edo-Susanto.jpg', 'Edo-Susanto.Pdf'),
(12, '0034950446', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Egga Riana Safitri Bahar', 0167, 'Banyuasin, 24 Desember 2003', 'Perempuan', 'Baharudin', 'XII', 'MIPA', '00.00', 'LULUS', 'Egga-Riana-Safitri-Bahar.jpg', 'Egga-Riana-Safitri-Bahar.pdf'),
(13, '0035251705', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Evi Solina', 0176, 'Banyuasin, 12 November 2003', 'Perempuan', 'Priyanto', 'XII', 'MIPA', '00.00', 'LULUS', 'Evi-Solina.jpg', 'Evi-Solina.pdf'),
(14, '0036231052', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Irma Sukaisih', 0169, 'Banyuasin, 06 September 2003', 'Perempuan', 'Warman', 'XII', 'MIPA', '00.00', 'LULUS', 'Irma-Sukaisih.jpg', 'Irma-Sukaisih.jpg'),
(15, '0035251697', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Irma Umi Umaroh', 0183, 'Banyuasin, 24 Maret 2003', 'Perempuan', 'Bambang Irawan', 'XII', 'MIPA', '00.00', 'LULUS', 'Irma-Umi-Umaroh.jpg', 'Irma-Umi-Umaroh.pdf'),
(16, '0035251698','$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Jazilah', 0168, 'Banyuasin, 07 April 2003', 'Perempuan', 'Rebi', 'XII', 'MIPA', '00.00', 'LULUS', 'Jazilah.jpg', 'Jazilah.pdf'),
(17, '0032477062', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Jummalia', 0173, 'Banyuasin, 22 Mei 2003', 'Perempuan', 'Baharudin', 'XII', 'MIPA','00.00', 'LULUS', 'Jummalia.jpg', 'Jummalia.pdf'),
(18, '0034950443', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Ketut Desta Bayu Saputra', 0205, 'Banyuasin, 06 Desember 2003', 'Laki-laki', 'I Wayan Subagyo', 'XII', 'MIPA', '00.00', 'LULUS', 'Ketut-Desta-Bayu-Saputra.jpg', 'Ketut-Desta-Bayu-Saputra.pdf'),
(19, '0023094167', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Komang Sadie', 0175, 'Banyuasin, 23 April 2002', 'Laki-laki', 'Wayan Sunadi', 'XII', 'MIPA', '00.00', 'LULUS','Komang-Sadie.jpg', 'Komang-Sadie.pdf'),
(20, '0041315638', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Malisa', 0189, 'Banyuasin, 29 Mei 2004', 'Perempuan', 'Landung', 'XII', 'MIPA', '00.00', 'LULUS', 'Malisa.jpg','Malisa.pdf'),
(21, '0041011378', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Maulana', 0189, 'Banyuasin, 01 Juli 2004', 'Laki-laki', 'Pakseng','XII', 'MIPA', '00.00', 'LULUS', 'Maulana.jpg', 'Maulana.pdf'),
(22, '0034330959', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Muhammad Ari', 0194, 'Banyuasin, 22 Januari 2003', 'Laki-laki', 'Acok', 'XII', 'MIPA', '00.00', 'LULUS', 'Muhammad-Ari.jpg', 'Muhammad-Ari.pdf'),
(23, '0035438534', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Muhammad Imam Safei', 0195, 'Banyuasin, 20 Januari 2003', 'Laki-laki', 'Suroso', 'XII', 'MIPA', '00.00', 'LULUS', 'Muhammad-Imam-Safei.jpg', 'Muhammad-Imam-Safei.pdf'),
(24, '0027692009', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Muhammad Rizal', 0185, 'Banyuasin, 29 Oktober 2002', 'Laki-laki', 'Lapaduk', 'XII', 'MIPA', '00.00', 'LULUS', 'Muhammad-Rizal.jpg', 'Muhammad-Rizal.pdf'),
(25, '3041234599', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Muhammad Zakiul Fikri', 0203, 'Parit Berkat Usaha, 05 Februari 2004', 'Laki-laki', 'Busran', 'XII', 'MIPA', '00.00', 'LULUS', 'Muhammad-Zakiul-Fikri.jpg', 'Muhammad-Zakiul-Fikri.pdf'),
(26, '0049531084', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Novia Sari', 0179, 'Banyuasin, 10 Mei 2004', 'Perempuan', 'Suharno', 'XII', 'MIPA', '00.00', 'LULUS', 'Novia-Sari.jpg', 'Novia-Sari.pdf'),
(27, '0047890997', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Regina', 0204, 'Jakarta, 27 April 2004', 'Perempuan', 'Sabri Mading', 'XII', 'MIPA', '00.00', 'LULUS', 'Regina.jpg', 'Regina.pdf'),
(28, '0026655731','$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Revi Mariska', 0177, 'Banyuasin, 18 Desember 2002', 'Perempuan', 'Rudi Irawan', 'XII', 'MIPA', '00.00', 'LULUS', 'Revi-Mariska.jpg', 'Revi-Mariska.pdf'),
(29, '0035438533', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Rian Rahman Wijaya', 0197, 'Banyuasin, 20 Desember 2003','Laki-laki', 'Masri', 'XII', 'MIPA', '00.00', 'LULUS', 'Rian-Rahman-Wijaya.jpg', 'Rian-Rahman-Wijaya.pdf'),
(30, '0026316627', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Rini Wijayanti', 0188, 'Banyuasin, 25 September 2002', 'Perempuan', 'Guntoro', 'XII', 'MIPA', '00.00', 'LULUS', 'Rini-Wijayanti.jpg', 'Rini-Wijayanti.pdf'),
(31, '0042337467', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Siti Andriyana', 0180, 'Banyuasin, 19 Maret 2004', 'Perempuan', 'Cucun Suryana', 'XII', 'MIPA', '00.00', 'LULUS', 'Siti-Andriyana.jpg', 'Siti-Andriyana.pdf'),
(32, '0041315635', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Sulastri', 0191, 'Banyuasin, 14 Februari 2004', 'Perempuan', 'Sujiantoro', 'XII', 'MIPA', '00.00', 'LULUS', 'Sulastri.jpg', 'Sulastri.pdf'),
(33, '0033216121', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Suranti', 0184, 'Banyuasin, 14 Juni 2003', 'Perempuan', 'Attase', 'XII','MIPA', '00.00', 'LULUS','Suranti.jpg', 'Suranti.pdf'),
(34, '0036915454', '$2y$10$jJJRR6k615BaTigDs5gx0uQQACjeCV7aRBBXwnTpLGk/Vx7f1VrsS', 'Susanti', 0187, 'Banyuasin, 12 September 2003', 'Perempuan', 'Mulyadi', 'XII', 'MIPA', '00.00', 'LULUS', 'Susanti.jpg', 'Susanti.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta_didik`
--
ALTER TABLE `peserta_didik`
  ADD PRIMARY KEY (`id_pd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
