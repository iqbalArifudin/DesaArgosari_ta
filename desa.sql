-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2021 pada 18.44
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
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto_berita` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `keterangan`, `tanggal`, `foto_berita`) VALUES
(2, 'Masyarakat Desa Argosari Jabung Malang, Menerima Pencairan BLT 2021', 'Setelah menjalankan BST( bantuan sosial tunai) di tahun 2020 lalu kembali desa Argosari Kecamatan Jabung lanjutkan penyaluran BLT(bantuan langsung tunai) di tahun 2021 yang rencananya akan di salurkan kepada 87 kepala keluarga selama satu tahun kedepan. Setiap KK mendapatkan bantuan setiap bulannya sebesar Rp 300 ribu perbulannya .  Seperti yang di terangkan carik Argosari Supriyadi penerima bantuan untuk tahun ini sebanyak 87 KK. “Kita data dan kita survey yang mendapatkan bantuan hanya 87 KK d', '2021-03-25', 'mlg.jpeg'),
(5, 'Pelantikan Kades Terpilih Desa Argosari dan Sidorejo Kec. Jabung', 'Sebanyak 2 Kepala Desa hasil dari Pemilihan Kepala Desa (Pilkades Jabung) yang dilaksanakan di pada tanggal 11 Nopember 2018 di Desa Argosari dan Desa Sidorejo Kec. Jabung, diambil Sumpah dan dilantik menjadi Kepala Desa (Kades) oleh Camat Jabung sekaligus Serah Terima Jabatan (Sertijab) Ketua Penggerak PKK dari kedua Desa tersebut, dengan bertempat di Pendopo Kec. Jabung Kab. Malang, pada hari Rabu (2/01/19) pukul 10.00 WIB s/d. 11.00 WIB yang dihadiri 75 orang.  Rangkaian susunan acara Pelanti', '2021-03-24', 'Pelantikan-kades-jabung-1.jpg'),
(6, '193 Warga Desa Argosari Kecamatan Jabung Kembali Menerima BLT-DD Tahap Ke 06', '193 Warga Desa Argosari Kecamatan Jabung Kabupaten Malang kembali menerima bantuan sosial tunai yang kesekian kalinya di bulan Desember 2020  Pantauan media, terlihat keceriaan di wajah penerima bantuan BLT-DD senilai Rp. 300 ribu yang diberikan langsung oleh petugas dari kantor pos.  Tak lupa petugas kantor pos menghimbau kepada warga sebelum mengambil bantuan, untuk mengikuti peraturtan dengan mengedepankan protokol kesehatan 3 M.  “Mohon sebelum antri, disiapkan KTP, wajib pakai masker dan te', '2021-03-25', 'PSX_20201231_131317-390x205.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `keterangan`, `tanggal`, `foto`) VALUES
(1, 'Tempat Cuci Tangan dengan Sistem Injak Kreasi Mahasiswa UMM', '2021-03-25', 'whatsapp-image-2020-12-19-at-20-34-24-5fde030e8ede486dd72d2ed22.jpeg'),
(2, 'Potensi Kecamatan Jabung Oke', '2021-03-25', 'Peta+Bid_Pendidikan+Kecamatan+Jabung.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `jabatan` enum('Kepala Desa','Sekretaris Desa','Kasi Pemerintahan','Kasi Kesra','Kasi Pelayanan','Kaur TU & Umum','Kaur Keuangan','Kaur Perencanaan','Kasun Pateguhan','Kasun Gentong','Kasun Bendrong') NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_penduduk`, `jabatan`, `no_hp`, `foto`) VALUES
(3, 4, 'Kepala Desa', '08123456780', 'png-clipart-consultant-computer-icons-businessperson-batism-logo-monochrome1.png'),
(4, 8, 'Kasun Gentong', '08123456781', 'png-clipart-consultant-computer-icons-businessperson-batism-logo-monochrome2.png'),
(5, 9, 'Kasun Pateguhan', '08123456790', 'png-clipart-consultant-computer-icons-businessperson-batism-logo-monochrome3.png'),
(6, 10, 'Kasun Bendrong', '08123456791', 'png-clipart-consultant-computer-icons-businessperson-batism-logo-monochrome4.png'),
(7, 11, 'Kasi Pelayanan', '08123456788', '5299160-logo-orang-png-avatar-profil-png-free-png-images-clipart-orang-png-920_647_preview.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `NIK` varchar(50) NOT NULL,
  `no_KK` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Islam','Khonghucu','Katolik','Buddha','Protestan','Hindu') NOT NULL,
  `status_perkawinan` enum('Belum Kawin','Kawin','','') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `gol_darah` enum('AB','O','A','B') NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `RT` varchar(5) NOT NULL,
  `RW` varchar(5) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('Admin','Pegawai','Penduduk','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `NIK`, `no_KK`, `nama`, `tempat_lahir`, `tanggal_lahir`, `agama`, `status_perkawinan`, `pekerjaan`, `gol_darah`, `jenis_kelamin`, `alamat`, `RT`, `RW`, `desa`, `Kecamatan`, `foto`, `password`, `hak_akses`) VALUES
(2, '3507172010000001', '3507172010000012', 'Moch Iqbal Arifudin', 'Malang', '2000-10-20', 'Islam', 'Belum Kawin', 'Pelajar', 'AB', 'Laki - Laki', 'Pateguhan', '10', '02', 'Argosari', 'Jabung', 'IMG_20210123_1016231.png', '12345678', 'Penduduk'),
(3, '3507175903130001', '3507172010000012', 'Nazwa Dwi Chrisbina', 'Malang', '2013-03-19', 'Islam', 'Belum Kawin', 'Belum / Tidak Bekerja', 'AB', 'Perempuan', 'Pateguhan', '10', '02', 'Argosari', 'Jabung', '4.jpg', '12345678', 'Penduduk'),
(4, '3507170806730003', '3507172010000012', 'Arifin', 'Malang', '1973-06-08', 'Islam', 'Kawin', 'Swasta', 'O', 'Laki - Laki', 'Pateguhan', '10', '02', 'Argosari', 'Jabung', '41.jpg', '12345678', 'Pegawai'),
(5, '3507175803780001', '3507172010000012', 'Maslukhah', 'Malang', '1978-03-19', 'Islam', 'Kawin', 'Mengurus Rumah Tangga', 'O', 'Perempuan', 'Pateguhan', '10', '02', 'Argosari', 'Jabung', '42.jpg', '12345678', 'Penduduk'),
(6, '3507170603690001', '3507170305090078', 'JUMARI', 'Malang', '1969-06-03', 'Islam', 'Kawin', 'KARYAWAN SWASTA', 'A', 'Laki - Laki', 'Pateguhan', '13', '02', 'Argosari', 'Jabung', 'png-clipart-consultant-computer-icons-businessperson-batism-logo-monochrome.png', 'jumari', 'Penduduk'),
(7, '3507176910800003', '3507170305090078', 'MUSYAROFAH', 'Malang', '1980-10-29', 'Islam', 'Kawin', 'MENGURUS RUMAH TANGGA', 'O', 'Perempuan', 'Pateguhan', '13', '02', 'Argosari', 'Jabung', '5299160-logo-orang-png-avatar-profil-png-free-png-images-clipart-orang-png-920_647_preview.jpg', 'musarofah', 'Penduduk'),
(8, '3507170205770004', '3507172506100008', 'SUGENG', 'Malang', '2021-04-14', 'Islam', 'Kawin', 'KARYAWAN SWASTA', 'B', 'Laki - Laki', 'BENDRONG ', '34', '05', 'Argosari', 'Jabung', 'png-clipart-consultant-computer-icons-businessperson-batism-logo-monochrome1.png', 'SUGENG', 'Pegawai'),
(9, '3507170803820009', '3507170305090080', 'IMAM BUKHORI', 'Malang', '2021-04-14', 'Islam', 'Kawin', 'KARYAWAN SWASTA', 'AB', 'Laki - Laki', 'Pateguhan', '12', '02', 'Argosari', 'Jabung', 'png-clipart-consultant-computer-icons-businessperson-batism-logo-monochrome2.png', 'IMAM', 'Pegawai'),
(10, '3507170806650003', '3507170312110001', 'KHUDORI', 'Malang', '1976-11-26', 'Islam', 'Kawin', 'KARYAWAN SWASTA', 'AB', 'Laki - Laki', 'BENDRONG ', '15', '02', 'Argosari', 'Jabung', 'png-clipart-consultant-computer-icons-businessperson-batism-logo-monochrome3.png', '12345', 'Pegawai'),
(11, '3507074404910002', '3507170902180006', 'SITI MUFIDAH', 'Malang', '1980-10-20', 'Islam', 'Kawin', 'KARYAWAN SWASTA', 'O', 'Perempuan', 'Pateguhan', '09', '02', 'Argosari', 'Jabung', '5299160-logo-orang-png-avatar-profil-png-free-png-images-clipart-orang-png-920_647_preview1.jpg', '45678', 'Pegawai'),
(12, '3507170305090079', '3507172010000011', 'Winandri Kusuma', 'Malang', '2021-04-16', 'Islam', 'Belum Kawin', 'Pelajar', 'O', 'Laki - Laki', 'BENDRONG ', '15', '02', 'Argosari', 'Jabung', 'png-clipart-consultant-computer-icons-businessperson-batism-logo-monochrome4.png', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `jenis_pengaduan` enum('Sarana Pra Sarana','Administrasi','Lainnya','') NOT NULL,
  `tanggal` date NOT NULL,
  `alasan` text NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` varchar(250) NOT NULL,
  `status` enum('Disetujui','Ditolak','Diproses','Diajukan ke Kepala Desa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `id_penduduk`, `jenis_pengaduan`, `tanggal`, `alasan`, `keterangan`, `bukti`, `status`) VALUES
(0, 3, 'Lainnya', '2021-04-21', '-', 'jalan rusak pada dusun pateguhan rt 10', '24496273370-jalan.jpg', 'Diajukan ke Kepala Desa'),
(6, 5, 'Lainnya', '2021-04-21', 'akuakdias', 'Sarana jalan dan pembangunan', '24496273370-jalan2.jpg', 'Ditolak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`);

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
