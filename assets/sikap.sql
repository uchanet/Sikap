-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2020 pada 07.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-pariwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_icon`
--

CREATE TABLE `tbl_icon` (
  `id_icon` int(11) NOT NULL,
  `nama_icon` varchar(255) DEFAULT NULL,
  `icon` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_icon`
--

INSERT INTO `tbl_icon` (`id_icon`, `nama_icon`, `icon`) VALUES
(1, 'Marker 1', 'marker1.png'),
(2, 'Marker 2', 'marker2.png'),
(3, 'Bangunan', '66932-openstreetmap-map-google-icons-maps-computer-marker.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_json`
--

CREATE TABLE `tbl_json` (
  `id_json` int(11) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `geojson` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_json`
--

INSERT INTO `tbl_json` (`id_json`, `nama_file`, `geojson`) VALUES
(1, 'wisata', 'wisata.geojson');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rumah`
--

CREATE TABLE `tbl_rumah` (
  `id_rumah` int(11) NOT NULL,
  `nama_tempat` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL,
  `kec` varchar(255) DEFAULT NULL,
  `kab` varchar(255) DEFAULT NULL,
  `prov` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `id_icon` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_rumah`
--

INSERT INTO `tbl_rumah` (`id_rumah`, `nama_tempat`, `alamat`, `desa`, `kec`, `kab`, `prov`, `latitude`, `longitude`, `deskripsi`, `gambar`, `id_icon`) VALUES
(11, 'Raja Ampat', 'dasdadas', 'Sorong', 'Paupua', 'papua', 'paua', '-5.148679222270522', '119.4350746988281', 'asdasd', 'background.JPG', 1),
(3, 'Pantai Selat Baru', '1', '1', '1', '1', '1', '1.5631528', '102.24845', 'sadasd', 'gambar.jpg', 1),
(4, 'Pantai Penampar Jangkang', '1', '1', '1', '1', '1', '1.5685245', '102.18719', 'asdas', 'gambar.jpg', 1),
(5, '5', '1', '1', '1', '1', '1', '1.4670137', '102.10948', 'asdasd', 'undraw_speech_to_text_9uir.png', 2),
(6, '6', '1', '1', '1', '1', '1', '1.4729544', '102.11504', 'asdasd', 'screencapture-file-C-Users-emkau-Downloads-Pariot-futureplus-homer-analytics-html-2020-10-14-22_58_28.png', 2),
(9, 'rumah', 'hjggu', 'akasad', 'adads', 'assdsa', 'sulsel', '-5.353521355337321', '119.52551828547982', 'test', 'DigiCast-removebg-preview.png', 2),
(10, 'asdsa', 'BTN Tabaria B7 No.15', 's', 'a', 's', 'a', '1.2303741774326145', '119.44468773593748', 'dgdgdf', 'WhatsApp_Image_2020-10-12_at_11_29_07.jpeg', 2),
(12, 'Maluku', 'Jl Pamularsih Buntu 10', 'Lelingluan', 'Maluku', 'sanksa', 'jkksjd', '-3.077096', '129.285570', 'desa', 'df6f649639e6b5fdbcdb7915d16faaf6.jpg', 3),
(13, 'IBEKA', 'd', 'sadsadsa', 'asdasd', 'sa', 'sadsadsa', '-0.914848', '100.469577', 'asdsadsadsa', 'AGS.JPG', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_telpon` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `no_telpon`, `foto`) VALUES
(3, 'uchanet', 'admin@admin.com', 'siskom', '085299842180', 'DSC00870_(2).jpg'),
(4, 'anggun', 'angun@gmail.com', 'anggun', '02180238012', 'anngun.PNG'),
(5, 'damay', 'damay@gmail.com', 'damay', '90390082', 'WhatsApp_Image_2020-09-12_at_11_58_23.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_icon`
--
ALTER TABLE `tbl_icon`
  ADD PRIMARY KEY (`id_icon`) USING BTREE;

--
-- Indeks untuk tabel `tbl_json`
--
ALTER TABLE `tbl_json`
  ADD PRIMARY KEY (`id_json`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rumah`
--
ALTER TABLE `tbl_rumah`
  ADD PRIMARY KEY (`id_rumah`) USING BTREE;

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_icon`
--
ALTER TABLE `tbl_icon`
  MODIFY `id_icon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_json`
--
ALTER TABLE `tbl_json`
  MODIFY `id_json` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_rumah`
--
ALTER TABLE `tbl_rumah`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
