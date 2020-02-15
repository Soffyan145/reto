-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2020 pada 09.57
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL,
  `id_position` int(11) NOT NULL,
  `nama_employee` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `foto_employee` varchar(250) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id_employee`, `id_position`, `nama_employee`, `phone`, `email`, `address`, `foto_employee`) VALUES
(1, 2, 'Bean cuk', 543565345, 'bean@gmail.com', 'phnom penh cambodia no 54', 'bean2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'breakfast'),
(2, 'launch'),
(3, 'dinner');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `id_table` int(11) NOT NULL,
  `nama_table` varchar(200) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`id_table`, `nama_table`, `kapasitas`, `deskripsi`, `status`) VALUES
(4, '02', 2, 'meja outdoor', 1),
(6, 'Glosoran', 15, 'GAwa klasa dwek', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(64) NOT NULL,
  `nama_menu` varchar(150) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `nama_type` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `harga_dasar` varchar(20) NOT NULL,
  `harga_jual` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `discount` int(11) NOT NULL DEFAULT 0,
  `foto_menu` varchar(100) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `nama_kategori`, `nama_type`, `status`, `harga_dasar`, `harga_jual`, `deskripsi`, `discount`, `foto_menu`) VALUES
(17, 'empal gentong', 'breakfast', 'Makanan', '1', '100', '391', 'sasadasjsdzmfc', 0, 'ayam_goreng4.jpg'),
(18, 'ketoprak', 'launch', 'Makanan', '0', '12000', '13000', 'enak', 0, 'ketoprak-MAHI-25.jpg'),
(20, 'ayam goreng', 'launch', 'Makanan', '1', '12000', '14000', 'enak', 0, 'empalgentong5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `position`
--

CREATE TABLE `position` (
  `id_position` int(11) NOT NULL,
  `nama_position` varchar(200) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `position`
--

INSERT INTO `position` (`id_position`, `nama_position`, `salary`) VALUES
(1, 'Waiter', 1000000),
(2, 'Chef', 1500000),
(3, 'Kasir', 1200000),
(4, 'manager1', 3000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `resto`
--

CREATE TABLE `resto` (
  `id_resto` int(11) NOT NULL,
  `nama_resto` varchar(250) NOT NULL,
  `owner` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `image_resto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resto`
--

INSERT INTO `resto` (`id_resto`, `nama_resto`, `owner`, `about`, `image_resto`) VALUES
(1, 'NPIC Restaurant', 'ibnu soffyan tsauri', 'Mulai aneka masakan dari daging ayam, sapi, ikan laut, cumi, rajungan dan masakan kepiting tersedia. Makanan favorit orang Jember yaitu  ikan wader goreng juga ada.\r\nSaya mampir  kesini ketika jam makan siang  cukup ramai  adanya antrian untuk mengambil lauk  pauk.\r\nDi warung ini semua makanan lauk pauk dengan aneka masakan ditata di baskom  besar. Dan disusun rapi di rak lemari kaca yang tembus pandang.', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `title_slider` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_slider` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `title_slider`, `deskripsi`, `foto_slider`) VALUES
(2, 'Slider 23', 'nasi kuning', 'npic.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_media`
--

CREATE TABLE `social_media` (
  `id_social_media` int(11) NOT NULL,
  `nama_social_media` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL,
  `link` text NOT NULL,
  `logo_social_media` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `social_media`
--

INSERT INTO `social_media` (`id_social_media`, `nama_social_media`, `account`, `link`, `logo_social_media`) VALUES
(1, 'Facebook baru', 'Resto Npic', 'https://www.facebook.com/', 'facebook.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `nama_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`id_type`, `nama_type`) VALUES
(1, 'Makanan'),
(2, 'Minuman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`),
  ADD KEY `id_position` (`id_position`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_table`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indeks untuk tabel `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`id_resto`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id_social_media`);

--
-- Indeks untuk tabel `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `meja`
--
ALTER TABLE `meja`
  MODIFY `id_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `resto`
--
ALTER TABLE `resto`
  MODIFY `id_resto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id_social_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
