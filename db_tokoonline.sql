-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2018 pada 15.56
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokoonline`
--
-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kd_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `pemilik` varchar(35) NOT NULL,
  `stock_barang` varchar(10) NOT NULL,
  `harga_satuan` varchar(12) NOT NULL,
  `keterangan` varchar(700) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `gambar` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kd_barang`, `nama_barang`, `pemilik`, `stock_barang`, `harga_satuan`, `keterangan`, `kategori`, `gambar`) VALUES
(1, 'BAR001', 'Jaket woll', 'MEM003', '1', '12.000', 'pasuruan', 'pria', 'product1.jpg'),
(2, 'BAR002', 'Jaket woll', 'ADM002', '3', '500.000', 'Jaket Terbaru', 'pria', 'product1.jpg'),
(3, 'BAR003', 'T SHIRT', 'ADM002', '3', '45.000', 'T-shirt Terbaru', 'anak', 'product2.jpg'),
(4, 'BAR004', 'Kouple', 'ADM001', '11', '250.000', 'Shirt terlaris', 'pria', 'product2.jpg'),
(5, 'BAR005', 'Jack', 'ADM001', '7', '450.000', 'Baju trend', 'pria', 'product1.jpg'),
(6, 'BAR006', 'Rock', 'ADM001', '4', '45.000', 'Baju terbaru', 'terbaru', 'product2.jpg'),
(7, 'BAR007', 'SHIRT', 'ADM001', '3', '95.000', 'Shirt terlaris', 'terbaru', 'product2.jpg'),
(8, 'BAR008', 'Jeans', 'ADM002', '29', '350.000', 'Merk ternama', 'terbaru', 'product2.jpg'),
(9, 'BAR009', 'Style', 'ADM002', '1', '135.000', 'Merk terlaris', 'terbaru', 'product1.jpg'),
(10, 'BAR010', 'Metalic', 'ADM002', '-1', '455.000', 'Merk terlaris', 'terbaru', 'product1.jpg'),
(11, 'BAR011', 'Dress', 'Obaju', '7', '775.000', 'Barang Terlaris dan termurah', 'wanita', 'product1.jpg'),
(12, 'BAR012', 'Metalic', 'Obaju', '-1', '120.000', 'Barang Terbaru', 'wanita', 'product2.jpg'),
(13, 'BAR013', 'Modern', 'Obaju', '75', '45.000', 'Model Terbaru dan paling laris', 'wanita', 'product2.jpg'),
(14, 'BAR014', 'ROMPI', 'Obaju', '6', '550.000', 'Barang Termurah', 'wanita', 'product1.jpg'),
(15, 'BAR015', 'Jass', 'Obaju', '4', '650.000', 'Terbaru dan murah', 'anak', 'product1.jpg'),
(16, 'BAR016', 'Katle', 'Obaju', '4', '450.000', 'Paling murah', 'anak', 'product2.jpg'),
(17, 'BAR017', 'Rock', 'Obaju', '43', '350.000', 'Barang Terbaru', 'anak', 'product1.jpg'),
(18, 'BAR018', 'Dresser', 'Obaju', '0', '450.000', 'Barang terbaru', 'anak', 'product2.jpg'),
(19, 'BAR019', 'kulkas', 'MEM002', '9', '45.000', 'coba edit select', 'terbaru', 'product2.jpg'),
(20, 'BAR020', 'Dresses', 'Obaju', '2', '760.000', 'Barang terlaris pada bulan ini', 'terbaru', 'product1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotak_pesan`
--

CREATE TABLE `kotak_pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `subjek` varchar(20) NOT NULL,
  `isi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kotak_pesan`
--

INSERT INTO `kotak_pesan` (`id`, `nama`, `email`, `tanggal`, `subjek`, `isi`) VALUES
(1, 'risky', 'risky_r51@yahoo.co.id', '12-05-2018', 'Bug', 'Barang terlalu mahal'),
(2, 'johan', 'risky_r51@yahoo.co.id', '12-05-2018', 'protes', 'Barang Jelek'),
(3, 'risky', 'risky_r51@yahoo.co.id', '12-05-2018', 'error', 'website error'),
(4, 'rangga', 'risky_r51@yahoo.co.id', '12-05-2018', 'Bug', 'erorr'),
(5, 'Rifai', 'rifai@fakemail.id', '16-05-2018', 'Bug', 'website error');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `id_pesanan` varchar(35) NOT NULL,
  `nama_pemesan` varchar(55) NOT NULL,
  `pemilik` varchar(35) NOT NULL,
  `kd_barang` varchar(35) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `total` varchar(20) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `no_tlpn` varchar(15) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `metode_pembayaran` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_pesanan`, `nama_pemesan`, `pemilik`, `kd_barang`, `nama_barang`, `quantity`, `total`, `alamat`, `no_tlpn`, `tanggal`, `metode_pembayaran`) VALUES
(1, 'PEM001', 'risky', 'ADM002', 'BAR002', 'Jaket woll', '1', '500', 'Jakarta', '082282730805', '13-05-2018', 'Bayar Di Tempat'),
(2, 'PEM002', 'rangga', 'ADM002', 'BAR003', 'T SHIRT', '1', '45', 'Pasuruan', '082282730805', '13-05-2018', 'Bayar Di Tempat'),
(3, 'PEM003', 'coba unset', 'Obaju', 'BAR012', 'Metalic', '1', '120', 'coba unset', 'coba unset', '16-05-2018', 'Bayar Di Tempat'),
(4, 'PEM004', 'coba session', 'Obaju', 'BAR018', 'Dresser', '1', '450', 'coba session', 'coba session', '17-05-2018', 'Bayar Di konter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_member` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_member`, `nama`, `email`, `username`, `password`, `level`, `gambar`) VALUES
(1, 'ADM001', 'risky', 'risky_r51@yahoo.co.id', 'admin', 'admin', 'admin', 'chet.png'),
(2, 'MEM002', 'johan', 'risky_r51@yahoo.co.id', 'user', 'user', 'user', 'chet.png'),
(4, 'MEM003', 'ramadhan', 'risky_r51@yahoo.co.id', 'pegawai', 'pegawai', 'user', 'avatar04.png'),
(5, 'ADM004', 'johan', 'risky_r51@yahoo.co.id', 'moba', 'moba', 'admin', 'avatar04.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kotak_pesan`
--
ALTER TABLE `kotak_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kotak_pesan`
--
ALTER TABLE `kotak_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
