-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2020 pada 22.40
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.0.32

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
(1, 2, 'Bean cuk', 543565345, 'bean@gmail.com', 'phnom penh cambodia no 54', 'download.jpg'),
(2, 1, 'dadan sudana', 0, 'jidan@gmail.com', 'cirebon jawa barat indonesia', '410htqG1CwL1.jpg'),
(3, 1, 'B', 2147483647, 'jidan@gmail.com', 'cirebon jawa barat indonesia', 'iphone-11-pro-select-2019-family.jpg');

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
  `status` int(2) NOT NULL DEFAULT '0'
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
  `discount` int(11) NOT NULL DEFAULT '0',
  `foto_menu` varchar(100) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `nama_kategori`, `nama_type`, `status`, `harga_dasar`, `harga_jual`, `deskripsi`, `discount`, `foto_menu`) VALUES
(40, 'empal gentong', 'breakfast', 'Makanan', '1', '12000', '13000', 'mantap a', 0, 'slide_3.jpg'),
(42, 'empal gentong', 'breakfast', 'Makanan', '1', '12000', '13000', 'enak', 0, 'slide_11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_order` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Struktur dari tabel `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `id_employee` int(11) NOT NULL,
  `id_position` int(11) NOT NULL,
  `date_salary` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary` int(20) NOT NULL,
  `salary_bonus` int(20) NOT NULL,
  `salary_cuts` int(20) NOT NULL,
  `total_salary` int(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `salary`
--

INSERT INTO `salary` (`id`, `id_employee`, `id_position`, `date_salary`, `salary`, `salary_bonus`, `salary_cuts`, `total_salary`, `description`) VALUES
(1, 3, 0, '0000-00-00 00:00:00', 1000000, 200000, 100000, 1100000, ''),
(2, 2, 0, '2020-02-16 22:55:18', 1000000, 500000, 200000, 1300000, ''),
(3, 1, 0, '2020-02-16 22:57:19', 1500000, 500000, 20000, 1980000, 'oke');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `title_slider` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `title_slider`, `deskripsi`, `img`) VALUES
(11, 'slider 1 edit', 'oke 1 ', 'slide_32.jpg');

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
(1, 'Facebook baru', 'Resto Npic', 'https://www.facebook.com/', 'facebook.png'),
(2, 'Instagram', 'Resto NPIC kamboka', 'https://www.instagram.com/?hl=id', 'logo-instagram-png-13547.png');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `img` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `phone`, `img`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(10, 'ibnu soffyan tsauri', 'ibnusoffyan@gmail.com', '0819346441', 'download.jpg', '$2y$10$tMr/LObmcwJZUCMgkiN2S.lxuQptfCvdaMe2IfYtuXnrSuRcWKDpm', 1, 1, 1579169697),
(11, 'rivan', 'rivan@gamil.com', '091372338', 'rivan.jpg', '$2y$10$1pEaPYcHSTjiFSaLBwrXheMyxbwj2xfVuypgEwmZUtrAub04BCNGW', 2, 1, 1579203774),
(12, 'ovie', 'ovie@gmail.com', '', 'default.jpg', '$2y$10$.xV.la.rX.PAtC6Mn9pwiuSs4ahUFDgRad6XjLTcx.u8fpcCB2QN6', 3, 1, 1582483669),
(13, 'mr a', 'mra@gmail.com', '', 'default.jpg', '$2y$10$6803F3e2AhpBSFt2oUDwBO08B0TKPN4PiXhV.zOEMknTA4LyDEO.m', 3, 1, 1582843708);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Master'),
(2, 'employee'),
(3, 'Customer');

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
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `meja`
--
ALTER TABLE `meja`
  MODIFY `id_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `resto`
--
ALTER TABLE `resto`
  MODIFY `id_resto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id_social_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
