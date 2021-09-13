-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Agu 2021 pada 12.38
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
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `agama` enum('','Islam','Kristen','Hindu','Budha','Lainnya') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('','Laki-Laki','Perempuan','Lainnya') NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `warga_negara` enum('','WNI','WNA') NOT NULL,
  `pendidikan` enum('','SD','SMP','SMA/SMK','S1','S2','S3') NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `status` enum('','Lajang','Kawin','Janda','Duda') NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'warga'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `no_ktp`, `nama`, `agama`, `tempat_lahir`, `tgl_lahir`, `jk`, `golongan_darah`, `warga_negara`, `pendidikan`, `pekerjaan`, `status`, `alamat`, `photo`, `password`, `level`) VALUES
(6, '1234567', 'Rudi Firmansyah', 'Islam', 'Bandung', '2021-07-02', 'Laki-Laki', 'B', 'WNI', 'S1', 'Pengusaha', 'Lajang', 'jl. Suka Ngoding', 'images_(1)2.jpg', '4ab7d9d3a2a915753862aa89e6ff319c', 'warga'),
(7, '123456', 'Melinda', 'Islam', 'Bandung', '2021-07-22', 'Perempuan', 'A', 'WNI', 'S1', 'Pengusaha', 'Kawin', 'Jl. Tes aja', '', '4ab7d9d3a2a915753862aa89e6ff319c', 'warga'),
(8, '123', 'Warga1', 'Islam', '', '0000-00-00', 'Laki-Laki', '', 'WNI', 'SD', '', 'Lajang', '', '', '4ab7d9d3a2a915753862aa89e6ff319c', 'warga'),
(9, '1234', 'warga2', 'Islam', '', '0000-00-00', 'Perempuan', '', '', 'SMA/SMK', '', '', '', '', '4ab7d9d3a2a915753862aa89e6ff319c', 'warga'),
(10, '12345678910', 'sujono', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'ee11cbb19052e40b07aac0ca060c23ee', 'warga'),
(13, '1', 'Dilan', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '4ab7d9d3a2a915753862aa89e6ff319c', 'warga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `ket` varchar(500) NOT NULL,
  `nama_ibu` varchar(60) NOT NULL,
  `nama_ayah` varchar(60) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `id_penduduk`, `surat`, `nama`, `no_ktp`, `tempat_lahir`, `tgl_lahir`, `jk`, `pendidikan`, `agama`, `pekerjaan`, `status`, `alamat`, `ket`, `nama_ibu`, `nama_ayah`, `umur`, `hari`, `created_at`, `updated_at`) VALUES
(1, 0, 'SURAT KETERANGAN', 'Karyawan 1', '1234567', 'Bandung', '2021-08-12', 'Laki-Laki', 'S2', 'Islam', 'Pengusaha', 'Lajang', 'jl. Suka Ngoding. asik', 'tes aja ini mah ya.. data dumy', '', '', '', '', '2021-08-14', '0000-00-00'),
(2, 0, 'SURAT KETERANGAN', 'Asamurat', '123456', 'Bandung', '2021-09-02', '', 'SLTA', 'Islam', 'Pengusaha', 'Kawin', 'kdokdwodkwok', 'sdcsocjosdjkwo', '', '', '', '', '2021-08-12', '0000-00-00'),
(3, 0, 'SURAT KELAHIRAN', 'test surat kelahiran', '', 'Bandung', '2021-08-12', 'Laki-Laki', '', '', '', '', 'jl.  Suka ngoding, bandung', 'Telah lahir anak laki-laki yang baik dan pintar', 'sutisem', 'sujono', '', '', '2021-08-12', '0000-00-00'),
(4, 0, 'SURAT KETERANGAN', 'Sujono', '12345678910', 'Bandung', '2021-08-12', 'Laki-Laki', 'S1', 'Islam', 'Pengusaha', 'Lajang', 'jskkkjskajka', 'skakjsoajoasj', '', '', '', '', '2021-08-12', '0000-00-00'),
(5, 0, 'SURAT KETERANGAN', 'Rudi Firmansyah', '1234567', 'Bandung', '2021-08-14', 'Laki-Laki', 'SLTA', 'Islam', 'Pengusaha', 'Kawin', 'wwddwdwwd', 'fwsfwssws', '', '', '', '', '2021-08-14', '0000-00-00'),
(6, 6, 'SURAT KETERANGAN', 'Rudi Firmansyah', '1234567', 'Bandung', '2021-08-13', 'Laki-Laki', 'SLTA', 'Islam', 'Pengusaha', 'Kawin', 'dwdwdwdwdwd', 'Test update', '', '', '', '', '2021-08-14', '0000-00-00'),
(7, 0, 'SURAT KETERANGAN', 'Karyawan 1', '1234567', 'Bandung', '2021-08-14', '', 'SLTP', 'Islam', 'Pengusaha', 'Kawin', 'sxsxsxxs', 'scscwcwcw', '', '', '', '', '2021-08-14', '0000-00-00'),
(8, 6, 'SURAT KELAHIRAN', 'test update', '', 'Bandung', '2021-08-14', 'Perempuan', '', '', '', '', 'djidjiodjodj', 'viscj', 'sutisem', 'Rudi', '', '', '2021-08-14', '0000-00-00'),
(9, 6, 'SURAT KEMATIAN', 'Karyawan 1221', '', 'Jakarata', '2021-08-14', 'Laki-Laki', '', '', '', '', 'Jl. Tarogong', 'Sakit', '', '', '23', 'Senin', '2021-08-14', '0000-00-00'),
(10, 0, 'SURAT KEMATIAN', 'Karyawan 3', '', 'Jakarata', '2021-08-20', 'Laki-Laki', '', '', '', '', 'skaoskaoska', 'aaasasaqsa', '', '', '23', 'Senin', '2021-08-14', '0000-00-00'),
(12, 7, 'SURAT DOMISILI', 'Melinda', '123456', 'Bandung', '2021-08-04', 'Perempuan', 'SLTA', 'Islam', 'Pengusaha', '-- Pilih Status --', 'sklsksk', 'CMOLCSCSCPK', '', '', '', '', '2021-08-14', '0000-00-00'),
(13, 0, 'SURAT USAHA', 'Karyawan 6', '1234567891011', 'Bandung', '2021-08-13', 'Laki-Laki', 'SD', 'Islam', 'Pengusaha', '-- Pilih Status --', 'wskwoskosk', 'doxjwoswosk', '', '', '', '', '2021-08-14', '0000-00-00'),
(14, 0, 'SURAT KEMATIAN', 'testn 123', '', 'Jakarata', '2021-08-03', 'Laki-Laki', '', '', '', '', 'jdjdwjw', 'jdejdowjd', '', '', '4', 'Selasa', '2021-08-14', '0000-00-00'),
(16, 7, 'SURAT KETERANGAN', 'Melinda', '123456', 'Bandung', '2021-08-20', 'Perempuan', 'SLTA', 'Islam', 'Pengusaha', 'Lajang', 'skmskxk', 'skcnskcnsk', '', '', '', '', '2021-08-14', '0000-00-00'),
(19, 13, 'SURAT DOMISILI', 'Dilan', '1', 'Tasikmalaya', '2021-08-12', 'Laki-Laki', 'S1', 'Islam', 'Pengusaha', 'Lajang', 'josjosj', 'wncwscwojwpok', '', '', '', '', '2021-08-14', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'admin',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`, `photo`, `level`, `created_at`, `updated_at`) VALUES
(2, 'admin01', '21232f297a57a5a743894a0e4a801fc3', 'Dean', 'testimonials-1.jpg', 'admin', '2021-07-29', '2021-07-29'),
(3, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Udin Sedunia', '', 'admin', '2021-07-04', '2021-07-29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
