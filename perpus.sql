-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2021 pada 13.53
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `NIS_NIP` varchar(20) NOT NULL,
  `Nama_anggota` varchar(50) NOT NULL,
  `Tahun_masuk` date NOT NULL,
  `Kelas` char(1) DEFAULT NULL,
  `Username_anggota` varchar(30) NOT NULL,
  `Password_anggota` varchar(50) NOT NULL,
  `Status_anggota` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `anggota`
--
DELIMITER $$
CREATE TRIGGER `NIS_NIP` BEFORE INSERT ON `anggota` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(20) DEFAULT 0;
	SET zy = (SELECT COUNT(NIS_NIP) FROM anggota) + 1;
	
	SET new. NIS_NIP = CONCAT('USR', LPAD((SELECT zy),3,'0'));
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal`
--

CREATE TABLE `asal` (
  `ID_asal` varchar(5) NOT NULL,
  `Asal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `asal`
--
DELIMITER $$
CREATE TRIGGER `ID_asal` BEFORE INSERT ON `asal` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(5) DEFAULT 0;
	SET zy = (SELECT COUNT(ID_asal) FROM asal) + 1;
	
	SET new. ID_asal = CONCAT('ASL', LPAD((SELECT zy),2,'0'));
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahasa`
--

CREATE TABLE `bahasa` (
  `ID_bahasa` varchar(5) NOT NULL,
  `Nama_bahasa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahasa`
--

INSERT INTO `bahasa` (`ID_bahasa`, `Nama_bahasa`) VALUES
('BHS01', 'Indonesia');

--
-- Trigger `bahasa`
--
DELIMITER $$
CREATE TRIGGER `ID_bahasa` BEFORE INSERT ON `bahasa` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(5) DEFAULT 0;
	SET zy = (SELECT COUNT(ID_bahasa) FROM bahasa) + 1;
	
	SET new. ID_bahasa = CONCAT('BHS', LPAD((SELECT zy),2,'0'));
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ID_jenis` varchar(5) NOT NULL,
  `ID_penerbit` varchar(5) NOT NULL,
  `ID_bahasa` varchar(5) NOT NULL,
  `No_ISBN` varchar(50) NOT NULL,
  `Judul_buku` varchar(100) NOT NULL,
  `Tahun_terbit` char(4) NOT NULL,
  `Penulis` varchar(100) NOT NULL,
  `Cetakan_ke` varchar(3) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Jumlah_eksemplar` int(11) NOT NULL,
  `Kategori_buku` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ID_jenis`, `ID_penerbit`, `ID_bahasa`, `No_ISBN`, `Judul_buku`, `Tahun_terbit`, `Penulis`, `Cetakan_ke`, `Harga`, `Jumlah_eksemplar`, `Kategori_buku`) VALUES
('JNS01', 'TRB01', 'BHS01', 'BOOK001', 'Suatu Hari di tahun 2018', '2016', 'Ridho', '2', 34000, 6, 1);

--
-- Trigger `buku`
--
DELIMITER $$
CREATE TRIGGER `No_ISBN` BEFORE INSERT ON `buku` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(50) DEFAULT 0;
	SET zy = (SELECT COUNT(No_ISBN) FROM buku) + 1;
	
	SET new. No_ISBN = CONCAT('BOOK', LPAD((SELECT zy),3,'0'));
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zip_code` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `ID_peminjaman` varchar(18) NOT NULL,
  `Kode_buku` varchar(10) NOT NULL,
  `Status_peminjaman` tinyint(1) NOT NULL,
  `Denda_perbuku` int(11) DEFAULT NULL,
  `Tgl_haruskembali` date NOT NULL,
  `Tgl_kembali` date DEFAULT NULL,
  `Perpanjangan` int(11) DEFAULT NULL,
  `Status_verifikasi` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`ID_peminjaman`, `Kode_buku`, `Status_peminjaman`, `Denda_perbuku`, `Tgl_haruskembali`, `Tgl_kembali`, `Perpanjangan`, `Status_verifikasi`) VALUES
('pnj00000004', 'kode01', 1, 10000, '2020-12-01', '2020-12-08', 0, 0),
('pnj00000001', 'KDB03', 1, 10000, '2020-12-27', '2021-01-06', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penerimaan`
--

CREATE TABLE `detail_penerimaan` (
  `ID_penerimaan` varchar(18) NOT NULL,
  `No_ISBN` varchar(50) NOT NULL,
  `Jumlah_eksemplar_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `eksemplar_buku`
--

CREATE TABLE `eksemplar_buku` (
  `No_ISBN` varchar(50) NOT NULL,
  `Kode_buku` varchar(10) NOT NULL,
  `Status_eksemplar` tinyint(1) NOT NULL,
  `Kondisi_eksemplar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `eksemplar_buku`
--
DELIMITER $$
CREATE TRIGGER `kode` BEFORE INSERT ON `eksemplar_buku` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(5) DEFAULT 0;
	SET zy = (SELECT COUNT(Kode_buku) FROM eksemplar_buku) + 1;
	
	SET new. Kode_buku = CONCAT('BK', LPAD((SELECT zy),3,'0'));
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `ID_jenis` varchar(5) NOT NULL,
  `Nama_jenisbuku` varchar(25) NOT NULL,
  `Kode_jenisbuku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_buku`
--

INSERT INTO `jenis_buku` (`ID_jenis`, `Nama_jenisbuku`, `Kode_jenisbuku`) VALUES
('JNS01', 'Fiksi', 'FKS'),
('JNS02', 'Sains', 'SNS');

--
-- Trigger `jenis_buku`
--
DELIMITER $$
CREATE TRIGGER `ID_jenis` BEFORE INSERT ON `jenis_buku` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(5) DEFAULT 0;
	SET zy = (SELECT COUNT(ID_jenis) FROM jenis_buku) + 1;
	
	SET new. ID_jenis = CONCAT('JNS', LPAD((SELECT zy),2,'0'));
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(50) NOT NULL,
  `Nama_pegawai` varchar(100) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status_pegawai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `pegawai`
--
DELIMITER $$
CREATE TRIGGER `NIP` BEFORE INSERT ON `pegawai` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(50) DEFAULT 0;
	SET zy = (SELECT COUNT(NIP) FROM pegawai) + 1;
	
	SET new. NIP = CONCAT('PGW', LPAD((SELECT zy),3,'0'));
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `NIP` varchar(50) NOT NULL,
  `NIS_NIP` varchar(20) NOT NULL,
  `ID_peminjaman` varchar(18) NOT NULL,
  `Jumlah_buku` int(11) NOT NULL,
  `Tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `ID_peminjaman` BEFORE INSERT ON `peminjaman` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(18) DEFAULT 0;
	SET zy = (SELECT COUNT(ID_peminjaman) FROM peminjaman) + 1;
	
	SET new. ID_peminjaman = CONCAT('PJM', LPAD((SELECT zy),3,'0'));
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `ID_penerbit` varchar(5) NOT NULL,
  `Nama_penerbit` varchar(25) NOT NULL,
  `Alamat_penerbit` varchar(100) DEFAULT NULL,
  `No_telp_penerbit` varchar(15) DEFAULT NULL,
  `Email_penerbit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`ID_penerbit`, `Nama_penerbit`, `Alamat_penerbit`, `No_telp_penerbit`, `Email_penerbit`) VALUES
('TRB01', 'Buku Mojok', 'Jakarta Utara', '031083024534', 'Mojok@gmail.com'),
('TRB02', 'Berdikari', 'Jakarta Selatan', '0815438876234', 'berdikari@book.com');

--
-- Trigger `penerbit`
--
DELIMITER $$
CREATE TRIGGER `ID_penerbit` BEFORE INSERT ON `penerbit` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(5) DEFAULT 0;
	SET zy = (SELECT COUNT(ID_penerbit) FROM penerbit) + 1;
	
	SET new. ID_penerbit = CONCAT('TRB', LPAD((SELECT zy),2,'0'));
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimaan`
--

CREATE TABLE `penerimaan` (
  `NIP` varchar(50) NOT NULL,
  `ID_asal` varchar(5) NOT NULL,
  `ID_penerimaan` varchar(18) NOT NULL,
  `Tanggal_penerimaan` date NOT NULL,
  `Jumlah_buku_diterima` int(11) DEFAULT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `penerimaan`
--
DELIMITER $$
CREATE TRIGGER `ID_penerimaan` BEFORE INSERT ON `penerimaan` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(5) DEFAULT 0;
	SET zy = (SELECT COUNT(ID_penerimaan) FROM penerimaan) + 1;
	
	SET new. ID_penerimaan = CONCAT('TRM', LPAD((SELECT zy),2,'0'));
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggantian_buku`
--

CREATE TABLE `penggantian_buku` (
  `ID_peminjaman` varchar(18) NOT NULL,
  `Kode_buku` varchar(10) NOT NULL,
  `ID_penggantian` varchar(15) NOT NULL,
  `Jenis_penggantian` tinyint(1) NOT NULL,
  `Jumlah_uang_buku` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tahun_masuk` year(4) DEFAULT NULL,
  `kelas` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `tahun_masuk`, `kelas`) VALUES
(5, 'user', 'user@gmail.com', NULL, '$2y$10$LZPag3rrPA.15IwFRENcFugp43nzYG7dbtTyqnNHyLA0XxIZ98.dO', 'user', NULL, '2020-12-14 10:49:27', '2020-12-14 10:49:27', NULL, NULL),
(6, 'aerweka', 'aerweka@gmail.com', NULL, '$2y$10$t9JvgnTEw4MibncAiQrzreo3JHo5bVXENxYvtBYLafmPbRG.V2lcW', 'admin', NULL, '2020-12-27 06:46:42', '2020-12-27 06:46:42', NULL, NULL),
(7, 'Firdaus Rizaldy', 'rh@gmail.com', NULL, '$2y$10$0YjbFtL0/eQsMZPGl0i1reWR2.ba7UJqLbTRaSU6DMEhyP0lwAcEy', 'admin', NULL, '2020-12-31 17:37:30', '2020-12-31 17:37:30', NULL, NULL),
(8, 'aldy', 'aldy@gmail.com', NULL, '$2y$10$DqEvYCyI.VK7BtPG0XWNI.ivI7q8MUUsiFKJZJctaY43ySE7d9Asa', 'user', NULL, '2020-12-31 20:17:27', '2020-12-31 20:17:27', NULL, NULL);

--
-- Trigger `users`
--
DELIMITER $$
CREATE TRIGGER `id as nis nip` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
	DECLARE zy VARCHAR(10) DEFAULT 0;
	SET zy = (SELECT COUNT(id) FROM users) + 1;
	
	SET new. id = CONCAT('USR', LPAD((SELECT zy),3,'0'));
	
    END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`NIS_NIP`);

--
-- Indeks untuk tabel `asal`
--
ALTER TABLE `asal`
  ADD PRIMARY KEY (`ID_asal`);

--
-- Indeks untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`ID_bahasa`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`No_ISBN`),
  ADD KEY `fk_jenis_buku` (`ID_jenis`),
  ADD KEY `fk_penerbit_buku` (`ID_penerbit`),
  ADD KEY `fk_bahasa_buku` (`ID_bahasa`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD KEY `fk_det_pinjam` (`ID_peminjaman`),
  ADD KEY `fk_det_kode` (`Kode_buku`);

--
-- Indeks untuk tabel `detail_penerimaan`
--
ALTER TABLE `detail_penerimaan`
  ADD KEY `ID_penerimaan` (`ID_penerimaan`),
  ADD KEY `No_ISBN` (`No_ISBN`);

--
-- Indeks untuk tabel `eksemplar_buku`
--
ALTER TABLE `eksemplar_buku`
  ADD PRIMARY KEY (`Kode_buku`),
  ADD KEY `fk_eks_buku` (`No_ISBN`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`ID_jenis`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`ID_peminjaman`),
  ADD KEY `fk_peg_pinjam` (`NIP`),
  ADD KEY `fk_agg_pinjam` (`NIS_NIP`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`ID_penerbit`);

--
-- Indeks untuk tabel `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`ID_penerimaan`),
  ADD KEY `fk_peg` (`NIP`),
  ADD KEY `fk_asal` (`ID_asal`);

--
-- Indeks untuk tabel `penggantian_buku`
--
ALTER TABLE `penggantian_buku`
  ADD PRIMARY KEY (`ID_penggantian`),
  ADD KEY `fk_ganti_pinjam` (`ID_peminjaman`),
  ADD KEY `fk_ganti_eks` (`Kode_buku`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80003;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_bahasa_buku` FOREIGN KEY (`ID_bahasa`) REFERENCES `bahasa` (`ID_bahasa`),
  ADD CONSTRAINT `fk_jenis_buku` FOREIGN KEY (`ID_jenis`) REFERENCES `jenis_buku` (`ID_jenis`),
  ADD CONSTRAINT `fk_penerbit_buku` FOREIGN KEY (`ID_penerbit`) REFERENCES `penerbit` (`ID_penerbit`);

--
-- Ketidakleluasaan untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `fk_det_kode` FOREIGN KEY (`Kode_buku`) REFERENCES `eksemplar_buku` (`Kode_buku`),
  ADD CONSTRAINT `fk_det_pinjam` FOREIGN KEY (`ID_peminjaman`) REFERENCES `peminjaman` (`ID_peminjaman`);

--
-- Ketidakleluasaan untuk tabel `detail_penerimaan`
--
ALTER TABLE `detail_penerimaan`
  ADD CONSTRAINT `detail_penerimaan_ibfk_1` FOREIGN KEY (`ID_penerimaan`) REFERENCES `penerimaan` (`ID_penerimaan`),
  ADD CONSTRAINT `detail_penerimaan_ibfk_2` FOREIGN KEY (`No_ISBN`) REFERENCES `buku` (`No_ISBN`);

--
-- Ketidakleluasaan untuk tabel `eksemplar_buku`
--
ALTER TABLE `eksemplar_buku`
  ADD CONSTRAINT `fk_eks_buku` FOREIGN KEY (`No_ISBN`) REFERENCES `buku` (`No_ISBN`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_agg_pinjam` FOREIGN KEY (`NIS_NIP`) REFERENCES `anggota` (`NIS_NIP`),
  ADD CONSTRAINT `fk_peg_pinjam` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`);

--
-- Ketidakleluasaan untuk tabel `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD CONSTRAINT `fk_asal` FOREIGN KEY (`ID_asal`) REFERENCES `asal` (`ID_asal`),
  ADD CONSTRAINT `fk_peg` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`);

--
-- Ketidakleluasaan untuk tabel `penggantian_buku`
--
ALTER TABLE `penggantian_buku`
  ADD CONSTRAINT `fk_ganti_eks` FOREIGN KEY (`Kode_buku`) REFERENCES `detail_peminjaman` (`Kode_buku`),
  ADD CONSTRAINT `fk_ganti_pinjam` FOREIGN KEY (`ID_peminjaman`) REFERENCES `detail_peminjaman` (`ID_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
