-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2021 pada 07.17
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `klien`
--

CREATE TABLE `klien` (
  `IdKlien` char(3) NOT NULL,
  `NamaKlien` varchar(15) NOT NULL,
  `Alamat` varchar(15) NOT NULL,
  `Telepon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klien`
--

INSERT INTO `klien` (`IdKlien`, `NamaKlien`, `Alamat`, `Telepon`) VALUES
('123', 'PT Jaya Raya', 'Dago 99', '1234567'),
('124', 'PT Kaya Raya', 'Ganesha 96', '7654321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `material`
--

CREATE TABLE `material` (
  `IdMaterial` char(3) NOT NULL,
  `Keterangan` varchar(20) NOT NULL,
  `Stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `material`
--

INSERT INTO `material` (`IdMaterial`, `Keterangan`, `Stok`) VALUES
('991', 'Semen', 50),
('992', 'Cat Tembok Sanlex', 20),
('993', 'Pasir', 20),
('994', 'Kusen Pintu', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerja`
--

CREATE TABLE `pekerja` (
  `NIP` char(3) NOT NULL,
  `Nama` varchar(15) NOT NULL,
  `Keahlian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerja`
--

INSERT INTO `pekerja` (`NIP`, `Nama`, `Keahlian`) VALUES
('555', 'Dadang Gunadi', 'Tukang Kayu'),
('556', 'Wahyudin', 'Mandor'),
('557', 'Komaruzaman', 'Tukang Tembok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaan`
--

CREATE TABLE `penggunaan` (
  `IdProyek` char(3) NOT NULL,
  `IdMaterial` char(3) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penggunaan`
--

INSERT INTO `penggunaan` (`IdProyek`, `IdMaterial`, `Quantity`) VALUES
('001', '991', 3),
('001', '992', 1),
('002', '992', 2),
('002', '993', 2),
('002', '994', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penugasan`
--

CREATE TABLE `penugasan` (
  `IdProyek` char(3) NOT NULL,
  `NIP` char(3) NOT NULL,
  `TglAwalTugas` date NOT NULL,
  `TglAkhirTugas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penugasan`
--

INSERT INTO `penugasan` (`IdProyek`, `NIP`, `TglAwalTugas`, `TglAkhirTugas`) VALUES
('001', '555', '2021-02-01', '2021-02-20'),
('001', '556', '2021-02-01', '2021-02-20'),
('002', '555', '2021-02-01', '2021-02-20'),
('002', '556', '2021-02-01', '2021-02-20'),
('002', '557', '2021-02-01', '2021-02-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `IdProyek` char(3) NOT NULL,
  `IdKlien` char(3) NOT NULL,
  `TglKontrak` date NOT NULL,
  `DeskripsiProyek` varchar(50) NOT NULL,
  `BiayaProyek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`IdProyek`, `IdKlien`, `TglKontrak`, `DeskripsiProyek`, `BiayaProyek`) VALUES
('001', '123', '2021-01-01', 'Renovasi Rumah', 25000000),
('002', '124', '2021-02-05', 'Pembangunan Ruko', 300000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`IdKlien`);

--
-- Indeks untuk tabel `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`IdMaterial`);

--
-- Indeks untuk tabel `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `penggunaan`
--
ALTER TABLE `penggunaan`
  ADD PRIMARY KEY (`IdProyek`,`IdMaterial`);

--
-- Indeks untuk tabel `penugasan`
--
ALTER TABLE `penugasan`
  ADD PRIMARY KEY (`IdProyek`,`NIP`);

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`IdProyek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
