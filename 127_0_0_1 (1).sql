-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 07.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--
CREATE DATABASE IF NOT EXISTS `db_test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_test`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `discountpercentage` double NOT NULL,
  `rating` double NOT NULL,
  `stock` int(30) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `title`, `deskripsi`, `price`, `discountpercentage`, `rating`, `stock`, `brand`, `category`, `images`) VALUES
(1, 'iPhone9', 'An apple mobile which is nothing like apple', 549, 12.96, 0, 94, '', 'smartphones', '2.jpg'),
(2, 'iPhone X', '\"SIM-Free, Model A19211 6.5-inch Super Retina HD d', 899, 17.94, 4.44, 34, 'Apple', 'smartphones', '2.jpg'),
(3, 'Samsung Universe 9', 'Samsung\'s new variant which goes beyond Galaxy to ', 1249, 15.46, 4.09, 36, 'samsung', 'smartphones', '3.jpg'),
(4, 'OPPOF19', 'OPPO F19 is officially announced on April 2021', 280, 17.91, 4.3, 123, 'oppo', 'smartphones', '4.jpg'),
(5, 'Huawei P30', 'Huawei’s re-badged P30 Pro New Edition was officia', 499, 10.58, 4.09, 32, 'Huawei', 'smartphones', '5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
