-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2025 at 05:38 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbyaperi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_asli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama_lengkap`, `username`, `password`, `password_asli`) VALUES
(3, 'salwa', 'wawa', '489a85059f5f64a2b96c99b32a623933', 'majumapan'),
(6, 'salwa suci', 'yaperi', '827ccb0eea8a706c4c34a16891f84e7b', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akademik`
--

CREATE TABLE `tb_akademik` (
  `id_akademik` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tb_akademik`
--

INSERT INTO `tb_akademik` (`id_akademik`, `gambar`) VALUES
(10, 'k1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `nomor`, `judul`, `tanggal`, `gambar`, `deskripsi`, `waktu`, `views`) VALUES
(34, 1, 'Pelaksanaan Kuliah Kerja Mahasiswa (KKM) STAI YAPERI Cibinong pada akademik 2020/2021', '2021-03-07', 'ft1.png', 'YAPERI Cibinong - 18 Mahasiswa Sekolah Tinggi Agama Islam (STAI) YAPERI Cibinong, melaksanakan Kuliah Kerja Mahasiswa (KKM) pada tahun akademik 2020/2021. Kegiatan ini merupakan kurikulum intra yang dilakukan di luar kampus, untuk mengimplementasikan tridharma perguruan tinggi. Lokasi KKM dilaksanakan di Desa Leuwikaret, Kec. Klapanunggal, Kab. Bogor.\r\n\r\nHal itu disampaikan oleh Bapak Muhamad Zaky Azima S.Pd, MM selaku Wakil Ketua Bidang Keuangan STAI YAPERI Cibinong, dalam kegiatan pelepasan mahasiswa Kuliah Kerja Mandiri di Leuwikaret, Minggu 07/03/2021.\r\n\r\n“Tujuan inti dilaksanakannya KKM ini, agar para mahasiswa biasa menjadi seorang pemimpin, dengan masuk di dalam masalah yang ada di masyarakat, dengan harapan dapatmenemukan berbagai kendala dan kesenjangan dan bias mencari solusi serta membuat keputusan,”\r\n\r\nKegiatan Kuliah Kerja Mahasiswa ini pun dilaksanakan tentu dengan menerapkan prokes pada setiap kegiatan-kegiatan yang akan dilaksanakan oleh Mahasiswa/I di wilayah Desa Leuwikaret, Kec. Klapanunggal.\r\n\r\n“Tentu para mahasiswa wajib menjaga kesehatan dan nama baik STAI YAPERI Cibinong selama KKM berlangsung,” jelasnya.\r\n\r\nRencananya kegiatan KKM akan dilaksanakan selama satu bulan yakni mulai dari tanggal 7 Maret sampai dengan 5 April 2021 dengan mengacu kepada standar kesehatan di masa pandemi covid-19.', ' 22:34:16 WIB', 1),
(35, 2, 'Pertemuan Dosen Pembimbing Skripsi Dan Mahasiswa Bimbingan Skripsi STAI YAPERI Cibinong', '2020-10-28', 'ft2.png', 'Pada hari Senin, tanggal 26-10-2020 di ruang perkuliahan STAI YAPERI Cibinong diadakan pertemuan antara para dosen yang membimbing skripsi dengan para mahasiswa yang sedang menyusun skripsi yang diperkirakan mengalami kesulitan dalam proses penyusun skripsi.\r\n\r\nPertemuan ini bertujuan menemukan cara-cara yang dapat membantu proses pembimbingan skripsi semakin lancar, sehingga baik dosen pembimbing maupun mahasiswa penyusun skripsi dapat terbantu dalam menyelesaikan skripsinya dengan baik dan berkesesuaian dengan buku pedoman penyusunan skripsi yang dikeluarkan oleh pihak kampus. (Syam)', ' 12:36:08 WIB', 1),
(36, 3, 'Mahasiswa Tingkat Akhir STAI YAPERI Cibinong, Hadapi Ujian Komprehensif', '2020-11-28', 'ft3.png', 'staiyaperi.ac.id - Sabtu (28/11) dilaksanakan ujian komprehensif bagi mahasiswa tingkat akhir Prodi Pendidikan Agama Islam STAI YAPERI Cibinong. Ujian Komprehensif Gelombang I diikuti oleh lebih dari 23 mahasiswa tingkat akhir program studi Pendidikan Agama Islam (PAI).\r\n\r\nUjian komprehensif program studi tersebut terjadwal dari pukul 9 pagi hingga selesai. Ketua STAI YAPERI Cibinong, bapak Dr. H. Ujang Ruhiat, M.Ag mengungkapkan bahwa ujian komprehensif merupakan bagian dari kurikulum dan mata kuliah wajib bagi mahasiswa STAI YAPERI Cibinong.\r\n\r\nUjian ini sekaligus menjadi tolak ukur pemahaman mahasiswa terhadap rumpun disiplin ilmu program studi. selaku Ketua STAI YAPERI Cibinong, Bapak Dr. H. Ujang Ruhiat, M.Ag berharap, melalui ujian ini, seluruh mahasiswa memiliki kompetensi dan standar lulusan yg sama ketika nanti terjun ke masyarakat, baik ketika menjadi tenaga pendidik, praktisi pendidikan, ataupun pengelola lembaga pendidikan.\r\n\r\ndiharapkan dari kegiatan ini, mahasiswa mampu mengimplementasikan keilmuannya, baik secara lisan maupun praktik. sehingga menajdi mahasiswa yang mumpuni dalam berbagai kompetensi keagamaan.', '11:37:55 WIB', 2),
(43, 4, 'STAI Yaperi Cibinong Mengadakan Peringatan Maulid Nabi Muhammad SAW', '2022-11-25', 'maulid.jpg', 'STAI Yaperi Cibinong Mengadakan Peringatan Maulid Nabi Muhammad SAW, sekaligus Haul ke 5 yang di laksanakan di lapangan parkir STAI Yaperi Cibinong. Pada acara ini STAI Yaperi Cibinong mengadakan haul ke 5 pendiri yayasan Pendidikan Ar-ridho (YAPERI CIBINONG) yaitu H. Ahmad Nuryani HS Bin H.Nurhasym bersama majelis dzikir Ratibul Hadad. Selain itu juga STAI Yaperi Cibinong mengundang Al Habib Mahdi Bin Hamzah Assegaf, Al Habib Ainul yaqin Bin Abdurrahman Al Gadri, Al Habib Ahmad Roqi Bafaqih, Ust.Jaenal Arifin (Uje), Dr.H.Ujang Ruhiyat,M.Ag, Dr.M.Syarif Sahib,SHI,M.Hum.MH, H.Agus Salim SE, Cucu Salman Alfariz,M.Ag, M.Zaky Azima,S.Pd,MM, Dan Para Alim Ulama Setempat. Acara ini juga tentunya tidak lupa dengan menerapkan protokol kesehatan seperti memakai masker, mencuci tangan, menjaga jarak, membatasi mobilitas, dan dilarang menjabat tangan.\r\n\r\n', '19.30 WIB', 0),
(44, 5, 'Momen Kebahagiaan Mahasiswa STAI Yaperi Cibinong Pada Acara Wisuda Ke-XX', '2023-11-18', 'wisuda.jpg', 'STAI Yaperi Cibinong kembali menggelar sidang senat terbuka ke-XX tahun akademik 2023-3024. Sidang senat terbuka STAI Yaperi Cibinong dilaksanakan digedung tegar beriman Cibinong kabupaten Bogor Provinsi Jawabarat. Pada wisuda ke-XX kali ini, STAI Yaperi Cibinong telah meluluskan sebanyak 39 mahasiswa dari program Pendidikan Agama Islam(PAI) mendapatkan gelar sarjana pendidikan(S.Pd) wisuda digelar pada hari sabtu tanggal 18 November 2023\r\n\r\nAcara tersebut menjadi sangat istimewah dengan kehadiran H.Ricky Kurniawan,Lc sebagai anggota DPRD Provinsi Jawabarat dan H.Cucu Salman ,M.Ag sebagai kasubak wilayah 1 Jawabarat.\r\n\r\nDr.H.Ujang Ruhiyat M.Ag selaku rektor STAI Yaperi Cibinong yang turut menyematkan prosesi wisuda. Beliau didampingi oleh sejumlah pejabat perguruan tinggi termasuk wakil rektor bidang akademik dan kemahasiswaan M.Faizul Zaman, M.Pd.i serta wakil rektor bidang keuangan Moch.Zaky Azima, S.pd.MM juga turut hadir dalam acara ini Tb. Maulana Setiaki, S.pd.i M.si yang merupakan ketua prodi PAI STAI Yaperi Cibinong selain itu\r\n\r\nSelain itu acara wisuda ini juga di bantu oleh dosen dan staf STAI serta dema STAI Yaperi Cibinong dengan semangat penuh, semua merayakan kesuksesan para wisudawan dan wisudawati yang telah menyelesaikan perjalanan akademik mereka di STAI Yaperi Cibinong. Selamat kepada semua lulusan telah memperoleh gelar setratai(S1) program stadi Pendidikan Agama Islam (PAI), semoga masa depan mereka penuh dengan prestasi, dan keberhasilan.', '22:34:16 WIB', 1),
(45, 6, 'STAI Yaperi Cibinong dan Warga Rw 12 Bersama KH.Zein Zarnuji (Akang) Pimpinan Pondok Pesantren Raudhoh Al-Hikam', '2023-12-16', 'maulid.jpg', 'Dewan Eksekutif Mahasiswa (DEMA) STAI Yaperi Cibinong menggelar acara Pentas Seni dan dilanjutkan dengan acara peringatan Maulid Nabi Muhammad SAW dengan tema \"Meneladani Akhlak Karakter Generasi Muda Yang Religius\" Sabtu (18/11/2023). Acara Pentas Seni ini di mulai sejak jam 14.00 WIB yang di selenggarakan di lapangan STAI Yaperi Cibinong, dan juga di hadiri oleh mahasiswa STAI Yaperi Cibinong dan warga Rw 12. dilanjutkan dengan acara peringatan Maulid Nabi di mulai sejak jam 20.00 WIB yang juga di selenggarakan di lapangan STAI Yaperi Cibinong. Acara yang bertajuk Maulid Nabi itu dihadiri oleh para dosen, staf, mahasiswa/i, tokoh ulama setempat dan warga Rw 12 Pakansari Cibinong Bogor. Acara peringatan Maulid Nabi ini diawali dengan pembacaan ayat suci Al-Quran oleh mahasiswa STAI Yaperi cibinong, dilanjutkan dengan sambutan ketua panitia maulid, sambutan ketua Rw 12, sambutan ketua STAI Yaperi Cibinong Dr.H.Ujang Ruhiyat,M.Ag. kemudian dilanjutkan dengan materi ceramah keagamaan yang dipandu langsung oleh KH.Zein Zarnuji (Akang) Pimpinan pondok pesantren Raudhoh Al-Hikam', '19.30 WIB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dema`
--

CREATE TABLE `tb_dema` (
  `id_dema` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tb_dema`
--

INSERT INTO `tb_dema` (`id_dema`, `gambar`) VALUES
(12, 'dema1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `gambar1` varchar(200) NOT NULL,
  `gambar2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `gambar1`, `gambar2`) VALUES
(23, 'ptinggi.png', 'dsn.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `judul_semester` varchar(200) CHARACTER SET utf8mb4  NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `judul_semester`, `gambar`) VALUES
(24, 'semester 1 (HKI)', 'matkul1.png'),
(26, 'semester 1', 'matkul2.png'),
(27, 'semester 2', 'matkul3.png'),
(28, 'semester 5', 'matkul4.png'),
(29, 'semester 7', 'matkul5.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `judul_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ketua`
--

CREATE TABLE `tb_ketua` (
  `id_ketua` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `namaketua` varchar(200) CHARACTER SET utf8mb4  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tb_ketua`
--

INSERT INTO `tb_ketua` (`id_ketua`, `gambar`, `namaketua`) VALUES
(37, 'pemimpin.png', ' Dr.H. Ujang Ruhiyat, M.Ag.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_link`
--

CREATE TABLE `tb_link` (
  `id_bayar` int(11) NOT NULL,
  `daftar` varchar(250) CHARACTER SET utf8mb4  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tb_link`
--

INSERT INTO `tb_link` (`id_bayar`, `daftar`) VALUES
(11, '	https://bit.ly/Pmb_staiyaperi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pmb`
--

CREATE TABLE `tb_pmb` (
  `id_pmb` int(11) NOT NULL,
  `Tahun Akademik` varchar(200) CHARACTER SET utf8mb4  NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tb_pmb`
--

INSERT INTO `tb_pmb` (`id_pmb`, `Tahun Akademik`, `gambar`) VALUES
(17, '2024/2025', 'a3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_senat`
--

CREATE TABLE `tb_senat` (
  `id_senat` int(11) NOT NULL,
  `nama1` varchar(200) CHARACTER SET utf8mb4  NOT NULL,
  `nama2` varchar(200) CHARACTER SET utf8mb4  NOT NULL,
  `nama3` varchar(200) NOT NULL,
  `nama4` varchar(200) NOT NULL,
  `nama5` varchar(200) NOT NULL,
  `nama6` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tb_senat`
--

INSERT INTO `tb_senat` (`id_senat`, `nama1`, `nama2`, `nama3`, `nama4`, `nama5`, `nama6`) VALUES
(11, 'Dr. H. Ujang Ruhiat, M.Ag.', 'M. Zaky Azima, S.Pd, MM.', 'H. Ujang Acu, M.Pd.I', 'M. Faizul Zaman, M.Pd', 'Tb. Maulana, S.Pd.I, M.SI', 'H.R.Roby Samsi, S.Ag, M.Pd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_akademik`
--
ALTER TABLE `tb_akademik`
  ADD PRIMARY KEY (`id_akademik`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_dema`
--
ALTER TABLE `tb_dema`
  ADD PRIMARY KEY (`id_dema`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_ketua`
--
ALTER TABLE `tb_ketua`
  ADD PRIMARY KEY (`id_ketua`);

--
-- Indexes for table `tb_link`
--
ALTER TABLE `tb_link`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tb_pmb`
--
ALTER TABLE `tb_pmb`
  ADD PRIMARY KEY (`id_pmb`);

--
-- Indexes for table `tb_senat`
--
ALTER TABLE `tb_senat`
  ADD PRIMARY KEY (`id_senat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_akademik`
--
ALTER TABLE `tb_akademik`
  MODIFY `id_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tb_dema`
--
ALTER TABLE `tb_dema`
  MODIFY `id_dema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ketua`
--
ALTER TABLE `tb_ketua`
  MODIFY `id_ketua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_link`
--
ALTER TABLE `tb_link`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pmb`
--
ALTER TABLE `tb_pmb`
  MODIFY `id_pmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_senat`
--
ALTER TABLE `tb_senat`
  MODIFY `id_senat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
