-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2021 pada 13.27
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `specialis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dianogsa`
--

CREATE TABLE `dianogsa` (
  `id_dianogsa` int(12) NOT NULL,
  `id_pasien` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_tindakan` int(12) NOT NULL,
  `dianogsa` text NOT NULL,
  `biaya` int(30) NOT NULL,
  `terapi` text NOT NULL,
  `tanggal` date NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dianogsa`
--

INSERT INTO `dianogsa` (`id_dianogsa`, `id_pasien`, `id_user`, `id_tindakan`, `dianogsa`, `biaya`, `terapi`, `tanggal`, `status_pembayaran`) VALUES
(2, 1, 3, 2, '1', 500000, '1', '2021-11-14', 1),
(3, 3, 2, 2, '-', 250000, '-', '2021-11-16', 1),
(4, 3, 2, 2, '-', 250000, '-', '2021-11-20', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(12) NOT NULL,
  `nama_pasien` varchar(23) NOT NULL,
  `no_kartu` varchar(21) NOT NULL,
  `no_ktp` int(22) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `pekerjaan` varchar(23) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `status` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `no_kartu`, `no_ktp`, `tgl_lahir`, `alamat`, `no_telp`, `pekerjaan`, `tgl_pendaftaran`, `status`) VALUES
(1, 'ridho', '1.11.2021', 2147483647, '2021-11-13', '-', '-', '-', '2021-11-14', 2),
(2, 'Siswa 1', '1.11.2021', 3, '2020-11-05', '2', '-', '-', '2021-11-14', 2),
(3, 'lina', '1.11.2021', 875156165, '2021-11-03', '-', '-', '-', '2021-11-16', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(32) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `jabatan`, `jenis_kelamin`, `alamat`, `no_telp`, `password`) VALUES
(1, '1111', 'ridho', 'Perawat', 'Laki-Laki', '-', '0980979', 'b59c67bf196a4758191e42f76670ceba'),
(2, '2222', 'ridwan', 'Dokter', 'Laki-Laki', '-', '7090668', '934b535800b1cba8f96a5d72f72f1611'),
(3, '3333', 'rika', 'Admin', 'Wanita', '-1', '0711528645', '2be9bd7a3434f7038ca27d1918de58bd'),
(6, '1212', 'dika', 'Admin', 'Laki-Laki', '-1', '-', 'a01610228fe998f515a72dd730294d87');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` int(12) NOT NULL,
  `tindakan` varchar(31) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `tindakan`, `keterangan`) VALUES
(2, 'Endoskopi', ' --');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dianogsa`
--
ALTER TABLE `dianogsa`
  ADD PRIMARY KEY (`id_dianogsa`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_pegawai_2` (`id_pegawai`);

--
-- Indeks untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dianogsa`
--
ALTER TABLE `dianogsa`
  MODIFY `id_dianogsa` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
