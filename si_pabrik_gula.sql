-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 06:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_pabrik_gula`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_gudang`
--

CREATE TABLE `data_gudang` (
  `id_gudang` varchar(10) NOT NULL,
  `nama_gudang` varchar(20) NOT NULL,
  `alamat_gudang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_gula`
--

CREATE TABLE `data_gula` (
  `id_gula` varchar(10) NOT NULL,
  `jenis_gula` varchar(20) NOT NULL,
  `stok_gula` varchar(10) NOT NULL,
  `id_gudang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_mutasi_stok`
--

CREATE TABLE `data_mutasi_stok` (
  `id_mutasi` varchar(10) NOT NULL,
  `id_gula` varchar(10) NOT NULL,
  `id_pengiriman` varchar(10) NOT NULL,
  `jumlah_mutasi` varchar(12) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `tgl_mutasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_outlet`
--

CREATE TABLE `data_outlet` (
  `id_outlet` varchar(10) NOT NULL,
  `nama_outlet` varchar(20) NOT NULL,
  `alamat_outlet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` varchar(10) NOT NULL,
  `nama_pegawai` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `jabatan` varchar(12) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pembelian`
--

CREATE TABLE `data_pembelian` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_outlet` varchar(10) NOT NULL,
  `id_pengiriman` varchar(10) NOT NULL,
  `id_gula` varchar(12) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `jumlah_barang` varchar(12) NOT NULL,
  `total_harga` varchar(13) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id_pengguna` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengiriman`
--

CREATE TABLE `data_pengiriman` (
  `id_pengiriman` varchar(11) NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `total_berat_gula` varchar(11) NOT NULL,
  `id_pegawai` varchar(11) NOT NULL,
  `id_outlet` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_supplier`
--

CREATE TABLE `data_supplier` (
  `id_supplier` varchar(10) NOT NULL,
  `nama_supplier` varchar(20) NOT NULL,
  `asal_supplier` varchar(20) NOT NULL,
  `id_gula` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_gudang`
--
ALTER TABLE `data_gudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indexes for table `data_gula`
--
ALTER TABLE `data_gula`
  ADD PRIMARY KEY (`id_gula`);

--
-- Indexes for table `data_mutasi_stok`
--
ALTER TABLE `data_mutasi_stok`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indexes for table `data_outlet`
--
ALTER TABLE `data_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `data_pembelian`
--
ALTER TABLE `data_pembelian`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `data_pengiriman`
--
ALTER TABLE `data_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `data_supplier`
--
ALTER TABLE `data_supplier`
  ADD PRIMARY KEY (`id_supplier`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
