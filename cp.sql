-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2025 at 11:01 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_paket`
--

CREATE TABLE `detail_paket` (
  `id` int NOT NULL,
  `paket_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` double NOT NULL,
  `detail_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail_paket`
--

INSERT INTO `detail_paket` (`id`, `paket_id`, `title`, `sub_title`, `price`, `detail_desc`) VALUES
(1, 3, 'Paket Hemat', '10 Mbps', 150000, '&lt;ul&gt;&lt;li&gt;&lt;span style=&quot;background-color:rgb(255,255,255);color:rgb(55,65,81);&quot;&gt;Ideal untuk 1-5 perangkat&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;background-color:rgb(255,255,255);color:rgb(55,65,81);&quot;&gt;Unlimited quota&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;background-color:rgb(255,255,255);color:rgb(55,65,81);&quot;&gt;Include Modem WiFi&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;'),
(2, 3, 'Paket Standar', '30 Mbps', 350000, '&lt;ul&gt;&lt;li&gt;&lt;span style=&quot;background-color:rgb(255,255,255);color:rgb(55,65,81);&quot;&gt;Ideal untuk 1-8 perangkat&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;background-color:rgb(255,255,255);color:rgb(55,65,81);&quot;&gt;Unlimited quota&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;background-color:rgb(255,255,255);color:rgb(55,65,81);&quot;&gt;Include Modem WiFi&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;'),
(3, 3, 'Paket Sultan', '50 Mbps', 550000, '&lt;ul&gt;&lt;li&gt;&lt;span style=&quot;background-color:rgb(255,255,255);color:rgb(55,65,81);&quot;&gt;Ideal untuk 1-10 perangkat&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;background-color:rgb(255,255,255);color:rgb(55,65,81);&quot;&gt;Unlimited quota&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;background-color:rgb(255,255,255);color:rgb(55,65,81);&quot;&gt;Include Modem WiFi&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;'),
(4, 4, 'Harian', '1 Hari', 5000, ''),
(5, 4, 'Mingguan', '7 Hari', 20000, ''),
(7, 4, 'Bulanan', '30 Hari', 50000, '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `title`, `img`) VALUES
(2, 'galeri 1', '287be241d551b4fb3d9355138e629e2c.jpg'),
(3, 'galeri 2', '2861ef2e8c791de5bbcdc9bfca2b13f8.jpg'),
(4, 'galeri 3', 'ce216e975a14716f923ef55916fe9bb3.jpg'),
(5, 'galeri 4', '2c4111dbc20cb68579bff2e06029f033.jpg'),
(6, 'galeri 5', '520a39aa3dad881fbf75699eb0359a9c.jpg'),
(7, 'galeri 6', '4cd90c63b6433d23bc25843939c13d15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `name`, `icon`, `copyright`) VALUES
(1, 'Rr.Net', 'c4de77f7d0dfc2b7d0917ee5a4a22f1b.jpg', 'Rr.Net');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int NOT NULL,
  `address` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `address`, `telp`, `email`) VALUES
(1, 'Jalan A. Yani , Dusun Sentul no 33, RT 02 RW 02, Desa Cikampek Selatan\r\nCikampek-Karawang.', '6285211249888', 'adityabudiansyah98@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `name`, `desc`) VALUES
(3, 'Wifi Rumahan', '&lt;p&gt;Internet cepat, stabil, hemat untuk keluarga, mulai Rp. 150.000/bulan!&lt;/p&gt;'),
(4, 'Wifi Voucher', '&lt;p&gt;Fleksibel, hemat, mulai Rp. 5.000 untuk internet harian super cepat!&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int NOT NULL,
  `logo` varchar(255) NOT NULL,
  `misi` text NOT NULL,
  `visi` text NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `logo`, `misi`, `visi`, `desc`) VALUES
(1, 'f0bd7ae653109e02a0fd734bdf66b406.png', '&lt;p&gt;Menyediakan Layanan Internet Service Provider LAYANAN, KEPERCAYAAN, KOMITMEN. Penyediaan layanan internet, Solusi jaringan terpadu, terpusat dan berteknologi yang aman di Wilayah Kota Karawang. Melalui berbagai layanan Internet yang berfokus pada hubungan erat antara masyarakat dan pelanggan dengan dunia luar sehingga tercipta hubungan yang harmonis dengan kami.&lt;/p&gt;', '&lt;p&gt;Menjadi pilihan pertama Internet Service Provider yang dipercaya untuk Customer (ISP yang Terpercaya). Menjadi Salah Satu Perusahaan Teknologi Informasi yang terpercaya dalam komitmen memberikan solusi dan service yang memuaskan dengan jaminan kualitas kepada para pelanggan.&amp;nbsp;&lt;/p&gt;', '&lt;p style=&quot;text-align:justify;&quot;&gt;Rr.Net merupakan perusahaan penyedia layanan Internet Service Provider (ISP). Rr.Net Group terlahir oleh Ridwan. Selaku Direktur utamanya, Rr.Net ini diresmikan pada tanggal 21 September 2021. Perusahaan ini bertempat di Jalan J. A. Yani, Dusun Sentul no 33, RT 02 RW 02, Desa Cikampek Selatan, Kabupaten Karawang.&lt;/p&gt;&lt;p style=&quot;text-align:justify;&quot;&gt;Seiring dengan perkembangan nya Rr.Net ini memperluas jaringan dengan membuka subnet di desa-desa lainnya. Wifi Rr.Net ada 2 macam yaitu Wifi Rumahan/Bulanan dan Wifi Voucher&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(1, 'admin', '$2y$10$gVxTeGgPxjyU2xHYgUBU2.YuoZGcppor1J54LqoUFZwb.ebdhkzka', 'Administrator', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_paket` (`paket_id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_paket`
--
ALTER TABLE `detail_paket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD CONSTRAINT `fk_paket` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
