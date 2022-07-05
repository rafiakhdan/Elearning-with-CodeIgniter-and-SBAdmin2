-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2022 pada 05.34
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `join_kelas`
--

CREATE TABLE `join_kelas` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `kodeKelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `join_kelas`
--

INSERT INTO `join_kelas` (`id`, `email`, `kodeKelas`) VALUES
(3, 'rossivaley@gmail.com', '123456'),
(4, 'rossivaley@gmail.com', '105928'),
(5, 'iwans@gmail.com', '105928'),
(6, 'iwans@gmail.com', '093576');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `peran` enum('guru','siswa') NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `peran`, `email`, `password`) VALUES
(1, 'Valentino Rossi', 'siswa', 'rossivaley@gmail.com', 'rossi46'),
(3, 'Mamad Alkatiri', 'guru', 'mamada@gmail.com', 'mamad12'),
(4, 'Nopek Novrian', 'guru', 'nopekajalah@yahoo.com', 'nopek123'),
(5, 'Iwan Setiawan', 'siswa', 'iwans@gmail.com', 'iwan1'),
(6, 'Bambang Pamungkas', 'guru', 'bpamungkas@gmail.com', 'bepe20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_kelas`
--

CREATE TABLE `user_kelas` (
  `id` int(11) NOT NULL,
  `namaKelas` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `linkMeet` varchar(128) NOT NULL,
  `kodeKelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_kelas`
--

INSERT INTO `user_kelas` (`id`, `namaKelas`, `email`, `linkMeet`, `kodeKelas`) VALUES
(1, 'Matematika', 'mamada@gmail.com', 'https://meet.google.com/orn-rdxd-ens', '123456'),
(2, 'Statistika', 'mamada@gmail.com', 'https://meet.google.com/orn-rdxd-ens', '105928'),
(3, 'Matematika 2', 'mamada@gmail.com', 'https://meet.google.com/orn-rdxd-ens', '245931'),
(4, 'Konsep Pemrograman', 'nopekajalah@yahoo.com', 'https://meet.google.com/orn-rdxd-ens', '059827'),
(5, '', 'bpamungkas@gmail.com', '', '631924'),
(6, 'Penjaskes', 'bpamungkas@gmail.com', 'https://meet.google.com/orn-rdxd-ens', '093576');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_kelas_tugas`
--

CREATE TABLE `user_kelas_tugas` (
  `id` int(11) NOT NULL,
  `namaTugas` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `kodeKelas` varchar(128) NOT NULL,
  `keteranganTugas` varchar(512) NOT NULL,
  `filePendukung` varchar(256) NOT NULL,
  `deadlineTugas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_kelas_tugas`
--

INSERT INTO `user_kelas_tugas` (`id`, `namaTugas`, `email`, `kodeKelas`, `keteranganTugas`, `filePendukung`, `deadlineTugas`) VALUES
(1, 'Hitung Luas Lingkaran', 'mamada@gmail.com', '123456', 'Hitunglah luas lingkaran jika diketahui diameter lingkaran adalah 56', '', '2021-12-05'),
(2, 'Hitung Luas Permukaan Bola', 'mamada@gmail.com', '123456', 'Hitunglah luas permukaan bola dengan jari-jari 28cm', '', '2022-01-09'),
(3, 'Hitung Luas Permukaan Kerucut', 'mamada@gmail.com', '123456', 'Hitunglah luas permukaan kerucut jika diketahui diameter alasnya 7cm dan tingginya 10cm', '', '2022-01-23'),
(4, 'Hitung Luas Permukaan Tabung', 'mamada@gmail.com', '123456', 'Hitunglah luas permukaan tabung jika diketahui diametetnya 14cm dan tingginya 15cm', '', '2021-12-12'),
(5, 'Mencari Rata-Rata', 'mamada@gmail.com', '105928', 'Cari soal rata-rata sebanyak 5 soal', '', '2021-12-11'),
(6, 'Video Peraga', 'bpamungkas@gmail.com', '093576', 'Buat video peraga strecthing/pemanasan minimal 5 gerakan', '', '2021-12-04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `join_kelas`
--
ALTER TABLE `join_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_kelas`
--
ALTER TABLE `user_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_kelas_tugas`
--
ALTER TABLE `user_kelas_tugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `join_kelas`
--
ALTER TABLE `join_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_kelas`
--
ALTER TABLE `user_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_kelas_tugas`
--
ALTER TABLE `user_kelas_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
