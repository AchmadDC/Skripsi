-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2024 pada 11.38
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_kinerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_penilaian`
--

CREATE TABLE `kriteria_penilaian` (
  `skorsing` varchar(5) NOT NULL,
  `tata_nilai` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_kriteria` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_penilaian`
--

INSERT INTO `kriteria_penilaian` (`skorsing`, `tata_nilai`, `keterangan`, `id_kriteria`) VALUES
('1', 'Kurang', 'Laporan tidak lengkap dan tidak tepat waktu', 'KP01'),
('2', 'Cukup', 'Laporan lengkap dan tidak tepat waktu', 'KP02'),
('3', 'Baik', 'Laporan lengkap dan tepat waktu', 'KP03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` varchar(12) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  `p1_tahunan` date NOT NULL,
  `p1_bulanan` date NOT NULL,
  `p2_lap_tahun` date NOT NULL,
  `p2_lap_bulan` date NOT NULL,
  `p2_kak` date NOT NULL,
  `p2_sop` date NOT NULL,
  `p2_spj` date NOT NULL,
  `p2_buku_visum` date NOT NULL,
  `p2_cakupan` date NOT NULL,
  `p3_servis` varchar(20) NOT NULL,
  `p3_inovatif` varchar(20) NOT NULL,
  `p3_profesional` varchar(20) NOT NULL,
  `skorsing` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nama_pegawai`, `nama_program`, `p1_tahunan`, `p1_bulanan`, `p2_lap_tahun`, `p2_lap_bulan`, `p2_kak`, `p2_sop`, `p2_spj`, `p2_buku_visum`, `p2_cakupan`, `p3_servis`, `p3_inovatif`, `p3_profesional`, `skorsing`) VALUES
('LP01', 'Rizky Trisutrisno, S.Kep Ners', 'Upaya Kesehatan Masyarakat (UKM) Esensial', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', 'Baik', 'Baik', 'Baik', '3'),
('LP02', 'Elly Herlina Rahman, SKM', 'Upaya Kesehatan Masyarakat (UKM) Esensial', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', 'Baik', 'Baik', 'Baik', '3'),
('LP03', 'Lina Lisdiana, AMKL', 'Upaya Kesehatan Masyarakat (UKM) Pengembangan', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', '2024-06-10', 'Baik', 'Baik', 'Baik', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `no_pegawai` varchar(18) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nama_program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`no_pegawai`, `nama_pegawai`, `alamat`, `jenis_kelamin`, `nama_program`) VALUES
('PG01', 'Rizky Trisutrisno, S.Kep Ners', 'sumedang', 'Laki-laki', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG02', 'Elly Herlina Rahman, SKM', 'Sumedang', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG03', 'Lina Lisdiana, AMKL', 'Sumedang', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG04', 'Wina Wiarty, SKM', 'Sumedang', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG05', 'Yuyun Yunengsih, S.Kep Ners', 'Sumedang', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG06', 'Deni Firmansyah, SKM', 'Sumedang', 'Laki-laki', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG07', 'Efril Lianti, SKM', 'Sumedang', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG08', 'Ida Nurhidayat, SKM', 'Sumedang', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG09', 'Marcsha Fitriyani, AMK', 'Sumedang', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG10', 'Santi Nurfujianti, AMK', 'Sumedang', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG11', 'Reffira Vrielly, S.Kep Ners', '', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG12', 'Rima Maelani, SKM', '', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG13', 'Rama Septyanto, SKM', '', 'Laki-laki', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG14', 'Moh. Eka Nurdin, SKM', '', 'Laki-laki', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PG15', 'Irma R, AMK.Kep', '', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Pengembangan'),
('PG16', 'Ratnawati M, AMK', '', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Pengembangan'),
('PG17', 'Erni Agustin, AMK', '', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Pengembangan'),
('PG18', 'Ana Verina, S.Kep ', '', 'Perempuan', 'Upaya Kesehatan Masyarakat (UKM) Pengembangan'),
('PG19', 'Annisa Faulina, A.md, Farm', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG20', 'Arina Fani P, STR.Kes', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG21', 'Ati Haryati, Amd.Kep', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG22', 'dr. Faradina', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG23', 'Filda Fitri A, Amd.AK', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG24', 'Fitry Sri A, Amd. RMIK', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG25', 'Hadini Reginamasli, S.Farm', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG26', 'Hedi Kosam I, STR.Kes', '', 'Laki-laki', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG27', 'Hj. Rumiyati, Amd.Keb', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG28', 'Merlina Pudjawati A, Amd.Farm', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG29', 'Ninda Yulia, Amd. KG', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG30', 'Apt. Nisa Arisanti, S.Farm', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG31', 'Siti Juariah, Amd.Kep', '', 'Perempuan', 'Upaya Kesehatan Perseorangan (UKP)'),
('PG32', 'Yusnita Lismaya, AMK', '', 'Perempuan', 'Program Prioritas Nasional (PPN)'),
('PG33', 'Tini Suwartini, Amd.Kep', '', 'Perempuan', 'Program Prioritas Nasional (PPN)'),
('PG34', 'Irna Safira inayah, Amd.Kep', '', 'Perempuan', 'Program Prioritas Nasional (PPN)'),
('PG35', 'Viena', '', 'Perempuan', 'Program Prioritas Nasional (PPN)'),
('PG36', 'Indah', '', 'Perempuan', 'Program Prioritas Nasional (PPN)'),
('PG37', 'Wati Meilanti Rahayu, SST', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG38', 'Siti Mardiani, Amd.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG39', 'Euis Siti Maryam, Amd.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG40', 'Heni Krisnawati, AM.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG41', 'Rini Nursaomi, AM.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG42', 'Selvia Septiani, Amd.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG43', 'Siti Amalia, Amd.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG44', 'Eli Nurhayati, Amd.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG45', 'Maya Trianingrum, S.Tr.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG46', 'Nina Yuningsih, S.T.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG47', 'Dewi Lestari Rahayu, Amd.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG48', 'Siti Fatimah, Amd,Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG49', 'Fuji Nurfajar, AM.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG50', 'Desi Sri Tanjung, Amd.Keb', '', 'Perempuan', 'KIA Puskesmas Pembantu - POSKESDES'),
('PG51', 'Evi Pujawati, Amd.Keb', '', 'Perempuan', 'Bidan PONED'),
('PG52', 'Yenni Handayani, S.Tr.Keb', '', 'Perempuan', 'Bidan PONED'),
('PG53', 'Evi Fatimah, Amd.Keb', '', 'Perempuan', 'Bidan PONED'),
('PG54', 'Novianti B, Amd.Keb', '', 'Perempuan', 'Bidan PONED'),
('PG55', 'Rina Hendar A, S.Tr.Keb', '', 'Perempuan', 'Bidan PONED'),
('PG56', 'Iis Kartini, Amd.Keb', '', 'Perempuan', 'Bidan PONED'),
('PG57', 'Distian Hadiyanti,Amd.Keb', '', 'Perempuan', 'Bidan PONED'),
('PG58', 'Ranti Permata S,Amd.Keb', '', 'Perempuan', 'Bidan PONED'),
('PG59', 'Cucu', '', 'Perempuan', 'Administasi'),
('PG60', 'Hj. Lilis Suryati', '', 'Perempuan', 'Administasi'),
('PG61', 'Desti Rahmadanti, S.M', '', 'Perempuan', 'Administasi'),
('PG62', 'Reza Dwi Astuti', '', 'Perempuan', 'Administasi'),
('PG63', 'M. Khoerudin', '', 'Laki-laki', 'Administasi'),
('PG64', 'Wardi', '', 'Laki-laki', 'Administasi'),
('PG65', 'Rahmat Pipiana', '', 'Laki-laki', 'Administasi'),
('PG66', 'Deni Irawan', '', 'Laki-laki', 'Administasi'),
('PG67', 'M. Helmi Fauzan', '', 'Laki-laki', 'Administasi'),
('PG68', 'Asep Muhammad Ramdan', '', 'Laki-laki', 'Administasi'),
('PG69', 'Wildan', '', 'Laki-laki', 'Administasi'),
('PG70', 'Ulfah Nurul Inayah, SE', '', 'Perempuan', 'Administasi'),
('PG71', 'Tia Hadi Kusumah', '', 'Perempuan', 'Administasi'),
('PG72', 'Enok Kasih', '', 'Perempuan', 'Administasi'),
('PG73', 'Dede Yuyun, Amd.Keb', '', 'Laki-laki', 'Audit Internal'),
('PG74', 'Sri Aniawati, Amd.Keb', '', 'Perempuan', 'Audit Internal'),
('PG75', 'Karina Oktaviani, AM.Keb', '', 'Perempuan', 'Audit Internal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `acuan` varchar(100) NOT NULL,
  `id_penilaian` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`acuan`, `id_penilaian`) VALUES
('Perencanaan Tahunan Kegiatan Program', 'P01'),
('Perencanaan Bulanan Kegiatan Program', 'P02'),
('Laporan Tahunan', 'P03'),
('Laporan Bulanan', 'P04'),
('Kerangka Acuan Kerja (KAK)', 'P05'),
('Standar Operasional Prosedur (SOP)', 'P06'),
('Surat Pertanggungjawaban (SPJ)', 'P07'),
('Buku Visum', 'P08'),
('Cakupan Program', 'P09'),
('services', 'P10'),
('Inovatif', 'P11'),
('Profesional', 'P12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id_program` varchar(12) NOT NULL,
  `nama_program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `nama_program`) VALUES
('PRGM01', 'Upaya Kesehatan Masyarakat (UKM) Esensial'),
('PRGM02', 'Upaya Kesehatan Masyarakat (UKM) Pengembangan'),
('PRGM03', 'Upaya Kesehatan Perseorangan (UKP)'),
('PRGM04', 'Program Prioritas Nasional (PPN)'),
('PRGM05', 'KIA Puskesmas Pembantu - POSKESDES'),
('PRGM06', 'Bidan PONED'),
('PRGM07', 'Bidan Desa'),
('PRGM08', 'Administasi'),
('PRGM09', 'Audit Internal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `role_user` enum('Admin','User') NOT NULL,
  `id_user` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama`, `password`, `role_user`, `id_user`) VALUES
('Admin', 'admin', 'Admin', 'ADM01'),
('User', 'user', 'User', 'ADM02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kriteria_penilaian`
--
ALTER TABLE `kriteria_penilaian`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`no_pegawai`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
