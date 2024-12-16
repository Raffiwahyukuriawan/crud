-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2024 at 02:50 AM
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
-- Database: `buku`
--
CREATE DATABASE IF NOT EXISTS buku;
-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int NOT NULL,
  `judul` varchar(25) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `pengarang`, `deskripsi`) VALUES
(1, 'Cantik Itu Luka ', 'Eka Kurniawan', 'Buku ini memadukan unsur keluarga, romansa, dan politik, yang telah menembus berbagai negara hingga diterjemahkan ke lebih dari 34 bahasa. Menceritakan tentang kehidupan Dewi Ayu, karya sastra ini juga berhasil memenangkan World Readers\' Award pada tahun 2016.'),
(2, 'Laut Bercerita', 'Leila S. Chudori', 'Buku yang menerima penghargaan S.E.A Write Award tahun 2020 ini mengisahkan persahabatan, cinta, dan keluarga yang berhasil menggugah emosional pembaca. Kisah pilu akan tragedi penghilangan aktivis muda ini telah berhasil dipublikasikan ke mancanegara dan diterjemahkan ke bahasa Inggris.'),
(3, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Bumi Manusia merupakan bagian dari Tetralogi Buru yang pertama dan mengambil latar serta cikal bakal bangsa Indonesia pada awal abad ke-20. Dalam periode ini, mengisahkan Minke, sang kreator yang berdarah priyayi, di mana ia ingin bebas dan merdeka seperti bangsa Eropa yang selalu menjadi kiblat dan simbol pengetahuan serta peradaban pada masanya.'),
(4, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Bumi Manusia merupakan bagian dari Tetralogi Buru yang pertama dan mengambil latar serta cikal bakal bangsa Indonesia pada awal abad ke-20. Dalam periode ini, mengisahkan Minke, sang kreator yang berdarah priyayi, di mana ia ingin bebas dan merdeka seperti bangsa Eropa yang selalu menjadi kiblat dan simbol pengetahuan serta peradaban pada masanya.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
