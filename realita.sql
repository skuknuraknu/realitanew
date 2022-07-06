-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2022 at 08:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realitaV1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_IKK`
--

CREATE TABLE `data_IKK` (
  `id` int(11) NOT NULL,
  `kd_ss` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `sasaran` varchar(48) CHARACTER SET utf8 DEFAULT NULL,
  `kd_ikk` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `indikator_kinerja_kegiatan` varchar(268) CHARACTER SET utf8 DEFAULT NULL,
  `kd_pr` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `program` text CHARACTER SET utf8 DEFAULT NULL,
  `kd_keg` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `rincian_kegiatan` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_IKK`
--

INSERT INTO `data_IKK` (`id`, `kd_ss`, `sasaran`, `kd_ikk`, `indikator_kinerja_kegiatan`, `kd_pr`, `program`, `kd_keg`, `rincian_kegiatan`) VALUES
(1, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.1.', 'Peningkatan Daya saing lulusan dalam dunia kerja', 'K 1.1.1.1.', 'Peningkatan penyerapan lulusan di dunia kerja melalui rekruitmen langsung.'),
(2, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.1.', 'Peningkatan Daya saing lulusan dalam dunia kerja', 'K 1.1.1.2.', 'Kerjasama dengan dunia usaha dan industri'),
(3, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.1.', 'Peningkatan Daya saing lulusan dalam dunia kerja', 'K 1.1.1.3.', 'Studi penelusuran (Tracer Study) lulusan dan alumni'),
(4, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.1.', 'Peningkatan Daya saing lulusan dalam dunia kerja', 'K 1.1.1.4.', 'Magang mahasiswa di Industri dan lapangan kerja lainnya'),
(5, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.1.', 'Peningkatan Daya saing lulusan dalam dunia kerja', 'K 1.1.1.5.', 'Course on farm and field'),
(6, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.1.', 'Peningkatan Daya saing lulusan dalam dunia kerja', 'K 1.1.1.6.', 'Job Fair'),
(7, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.1.', 'Peningkatan Daya saing lulusan dalam dunia kerja', 'K 1.1.1.7.', 'Peningkatan Kerjasama magang mahasiswa pada perusahaan/industri dan instansi.'),
(8, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.1.', 'Peningkatan Daya saing lulusan dalam dunia kerja', 'K 1.1.1.8.', 'Program Magang mahasiswa di perusahaan/ industri dan instansi'),
(9, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.1.', 'Peningkatan Daya saing lulusan dalam dunia kerja', 'K 1.1.1.9.', 'Pelatihan pembuatan CV'),
(10, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.1.', 'Peningkatan Daya saing lulusan dalam dunia kerja', 'K 1.1.1.10.', 'Workshop Aplikasi Teknologi Informasi beorientasi skill khusus Program Studi'),
(11, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.2.', 'Peningkatan minat dan peluang lulusan untuk studi lanjut', 'K 1.1.2.1.', 'Optimalisasi tempat latihan usaha di dalam kampus'),
(12, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.2.', 'Peningkatan minat dan peluang lulusan untuk studi lanjut', 'K 1.1.2.2.', 'Penyusunan Kurikulum Berbasis Kewirausahaan'),
(13, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.2.', 'Peningkatan minat dan peluang lulusan untuk studi lanjut', 'K 1.1.2.3.', 'Penguatan Dosen pengampu kewirausahaan pada masing-masing prodi'),
(14, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.2.', 'Peningkatan minat dan peluang lulusan untuk studi lanjut', 'K 1.1.2.4.', 'Pengenalan Dasar Science Technopreneurship (Kurikulum dan pengembangan kapasitas)'),
(15, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.2.', 'Peningkatan minat dan peluang lulusan untuk studi lanjut', 'K 1.1.2.5.', 'Pengenalan Strategi Ide Bisnis dan Prinsip Dasar Bisnis (Kurikulum dan pengembangan kapasitas)'),
(16, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.2.', 'Peningkatan minat dan peluang lulusan untuk studi lanjut', 'K 1.1.2.6.', 'Pengenalan Dasar Kelayakan Usaha (Kurikulum dan pengembangan kapasitas)'),
(17, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.2.', 'Peningkatan minat dan peluang lulusan untuk studi lanjut', 'K 1.1.2.7.', 'Pengenalan Analisis Model Bisnis (Kurikulum dan pengembangan kapasitas)'),
(18, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.2.', 'Peningkatan minat dan peluang lulusan untuk studi lanjut', 'K 1.1.2.8.', 'Pengenalan Analsis Biisnis Plan'),
(19, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.2.', 'Peningkatan minat dan peluang lulusan untuk studi lanjut', 'K 1.1.2.9.', 'Pengenalan dan penguatan perkuliahan tentang manajemen pemasaran dan operasional bisnis'),
(20, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.2.', 'Peningkatan minat dan peluang lulusan untuk studi lanjut', 'K 1.1.2.10.', 'Penguatan materi pembelajaran manajemen sumber daya manusia'),
(21, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.3.', 'Peningkatan Enterpreneurship calon lulusan dan lulusan', 'K 1.1.3.1.', 'Short course beorientasi skill khusus'),
(22, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.3.', 'Peningkatan Enterpreneurship calon lulusan dan lulusan', 'K 1.1.3.2.', 'Rintisan dan monitoring perusahaan/industri dan instansi baru sesuai keahlian yang dimiliki oleh mahasiswa'),
(23, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.3.', 'Peningkatan Enterpreneurship calon lulusan dan lulusan', 'K 1.1.3.3.', 'Workshop dosen pembimbing lapangan dan mahasiswa peserta kerja praktek lapangan.'),
(24, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.3.', 'Peningkatan Enterpreneurship calon lulusan dan lulusan', 'K 1.1.3.4.', 'Pengiriman dosen pembimbing lapangan dan mahasiswa ke perusahaan/industri dan instansi.'),
(25, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.3.', 'Peningkatan Enterpreneurship calon lulusan dan lulusan', 'K 1.1.3.5.', 'Workshop Peningkatan Soft Skill Mahasiswa'),
(26, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.3.', 'Peningkatan Enterpreneurship calon lulusan dan lulusan', 'K 1.1.3.6.', 'Workshop kewirausahaan untuk lulusan'),
(27, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.3.', 'Peningkatan Enterpreneurship calon lulusan dan lulusan', 'K 1.1.3.7.', 'Pelatihan kewirausahaan mahasiswa dan networking.'),
(28, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.3.', 'Peningkatan Enterpreneurship calon lulusan dan lulusan', 'K 1.1.3.8.', 'Proyek yang diinisiasi secara mandiri oleh mahasiwa (untuk mengikuti lomba tingkat internasional yang relevan dengan keilmuannya, proyek teknologi, maupun rekayasa sosial) yang pengerjaannya dapat dilakukan secara mandiri ataupun bersama-sama dengan mahasiswa lain'),
(29, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.3.', 'Peningkatan Enterpreneurship calon lulusan dan lulusan', 'K 1.1.3.9.', 'Penguatan Kapasitas Kelembagaan UPT Kewirausahaan'),
(30, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.4.', 'Optimalisasi Jumlah Lulusan', 'K 1.1.4.1.', 'Pemetaan dan Pendataan Jumlah Lulusan'),
(31, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.4.', 'Optimalisasi Jumlah Lulusan', 'K 1.1.4.2.', 'Penyusunan Biografi dan Profil Lulusan '),
(32, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.4.', 'Optimalisasi Jumlah Lulusan', 'K 1.1.4.3.', 'Pengolahan data Jumlah Lulusan '),
(33, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.4.', 'Optimalisasi Jumlah Lulusan', 'K 1.1.4.4.', 'Optimalisani Pelaporan Jumlah Lulusan pada Feeder PDDIKTI'),
(34, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.1', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta. ', 'P 1.1.4.', 'Optimalisasi Jumlah Lulusan', 'K 1.1.4.5.', 'Management Control Jumlah Lulusan berbanding daya serap'),
(35, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.1.', 'Program implementasi merdeka belajar di luar kampus', 'K 1.2.1.1.', 'Proyek sosial/pengabdian kepada masyarakat untuk pemberdayaan masyarakat dipedesaan atau daerah terpencil dalam membangun ekonomi rakyat, infrastruktur, dan lain-lain.'),
(36, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.1.', 'Program implementasi merdeka belajar di luar kampus', 'K 1.2.1.2.', 'Kegiatan mengajar di sekolah dasar dan menengah selama beberapa bulan. Sekolah dapat berlokasi di kota, desa, ataupun daerah terpencil'),
(37, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.1.', 'Program implementasi merdeka belajar di luar kampus', 'K 1.2.1.3.', 'Mengambil kelas atau semester di perguruan tinggi, baik luar negeri maupun dalam negeri berdasarkan pe{anjian kerja sama yang sudah diadakan antar perguruan tinggi atau pemerintah'),
(38, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.1.', 'Program implementasi merdeka belajar di luar kampus', 'K 1.2.1.4.', 'Kegiatan riset akademik, baik sains maupun sosial humaniora yang dilakukan dibawah pengawasan dosen/peneliti'),
(39, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.1.', 'Program implementasi merdeka belajar di luar kampus', 'K 1.2.1.5.', 'Proyek yang diinisiasi secara mandiri oleh mahasiwa (untuk mengikuti lomba tingkat internasional yang relevan dengan keilmuannya, proyek teknologi, maupun rekayasa sosial) yang pengerjaannya dapat dilakukan secara mandiri ataupun bersama-sama dengan mahasiswa lain'),
(40, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.1.', 'Program implementasi merdeka belajar di luar kampus', 'K 1.2.1.6.', 'Kegiatan sosial/pengabdian kepada masyarakat yang merupakan program perguruan tinggi atau untuk sebuah yayasan atau organisasi kemanusiaan, baik di dalam maupun luar negeri (seperti penanganan bencana alam, pemberdayaan masyarakat, penyelamatan lingkungan, palang merah, peace corps, dan seterusnya), yang disetujui perguruan tinggi.'),
(41, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.1.', 'Program implementasi merdeka belajar di luar kampus', 'K 1.2.1.7.', 'Peningkatan jumlah Pembina kegiatan kemahasiswaan yang bersertifikat'),
(42, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.1.', 'Program implementasi merdeka belajar di luar kampus', 'K 1.2.1.8.', 'Pengiriman mahasiswa ke pelatihan/seminar, asosiasi profesi dan perlombaan tingkat nasional di bidang penalaran, minat dan bakat.'),
(43, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.2.', 'Penguatan prestasi mahasiswa', 'K 1.2.2.1.', 'Pelaksanaan event mahasiswa tingkat nasional dan internasional'),
(44, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.2.', 'Penguatan prestasi mahasiswa', 'K 1.2.2.2.', 'Pembinaan Karakter Mahasiswa'),
(45, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.2.', 'Penguatan prestasi mahasiswa', 'K 1.2.2.3.', 'Pelatihan Penulisan karya ilmiah untuk mahasiswa'),
(46, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.2.', 'Penguatan prestasi mahasiswa', 'K 1.2.2.4.', 'Peningkatan jumlah publikasi mahasiswa dalam jurnal ilmiah'),
(47, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.2.', 'Penguatan prestasi mahasiswa', 'K 1.2.2.5.', 'Bimtek dan Ujian Sertifikasi Pelatih seni/olahraga'),
(48, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.2.', 'Penguatan prestasi mahasiswa', 'K 1.2.2.6.', 'Pengiriman mahasiswa ke pelatihan/seminar, asosiasi profesi dan perlombaan tingkat Internasional.'),
(49, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.2.', 'Penguatan prestasi mahasiswa', 'K 1.2.2.7.', 'Bimbingan Proposal PKM untuk mahasiswa'),
(50, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.2.', 'Penguatan prestasi mahasiswa', 'K 1.2.2.8.', 'Pelatihan bahasa Inggris untuk mahasiswa'),
(51, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.3.', 'Optimalisasi Jumlah Mahasiswa Aktif', 'P 1.2.3.1', 'Penyelenggaraan Motivasi Pembelajaran Mahasiswa Aktif'),
(52, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.3.', 'Optimalisasi Jumlah Mahasiswa Aktif', 'P 1.2.3.2', 'Penyeleggaraan Bimbingan Konseling Mahasiswa Aktif'),
(53, 'S1', 'Meningkatnya kualitas lulusan pendidikan tinggi ', 'IKU 1.2', 'Persentase lulusan 51 dan D4/D3/D2 yang \n30 menghabiskan paling sedikit 20 (dua puluh} sks di luar kampus; atau meraih prestasi paling rendah tingkat\nnasional.', 'P 1.2.3.', 'Optimalisasi Jumlah Mahasiswa Aktif', 'P 1.2.3.3', 'Penyelenggaraan Relaksasi Biaya Studi Mahasiswa Kurang Mampu'),
(54, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.1.', 'Gelar Bersama'),
(55, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.2.', 'Gelar Ganda'),
(56, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.3.', 'Program Membangun Desa'),
(57, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.4.', 'Pelatihan Dosen dan Instruktur'),
(58, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.5.', 'Penelitian Bersama'),
(59, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.6.', 'Artikel /Jurnal Ilmiah'),
(60, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.7.', 'Pengembangan Pusat Penelitian dan Pengembangan Keilmuan'),
(61, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.8.', 'Penelitian/Riset Kampus Merdeka '),
(62, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.9.', 'Penerbitan Berkala Ilmiah'),
(63, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.10.', 'Pengabdian Kepada Masyarakat'),
(64, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.11.', 'Pengembangan kurikulum / Program Bersama '),
(65, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.12.', 'Paten'),
(66, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.13.', 'Prototipe'),
(67, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.14.', 'Pertukaran Dosen'),
(68, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.15.', 'Proyek Kemanusiaan Kampus Merdeka'),
(69, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.1.', 'Pemberdayaan potensi dosen untuk dapat dimanfaatkan sebagai penguatan kerjasama dengan PT Lain / Mitra ', 'K 2.1.1.16.', 'Visiting Professor'),
(70, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.2.', 'Penguatan Kapasitas Dosen USK yang bersertifikasi kompetensi untuk dimanfaatkan oleh lembaga mitra', 'P 2.1.2.1.', 'Pengembangan Sistem Produk'),
(71, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.2.', 'Penguatan Kapasitas Dosen USK yang bersertifikasi kompetensi untuk dimanfaatkan oleh lembaga mitra', 'P 2.1.2.1.', 'Pemberian izin kepada dosen untuk berkarya, menjadi narasumber, praktisi di luar kampus'),
(72, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.2.', 'Penguatan Kapasitas Dosen USK yang bersertifikasi kompetensi untuk dimanfaatkan oleh lembaga mitra', 'P 2.1.2.1.', 'Diklat bagi dosen untuk sertifikasi kompeteisi'),
(73, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.2.', 'Penguatan Kapasitas Dosen USK yang bersertifikasi kompetensi untuk dimanfaatkan oleh lembaga mitra', 'P 2.1.2.1.', 'Regulasi tentang penggunaan sumber daya manusia oleh instansi.lembaga'),
(74, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.2.', 'Penguatan Kapasitas Dosen USK yang bersertifikasi kompetensi untuk dimanfaatkan oleh lembaga mitra', 'P 2.1.2.1.', 'Keikutsertaan dalam organisasi atau asosiasi profesi'),
(75, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.1', 'Persentase dosen yang berkegiatan trldarma dikampus lain, di 05100 berdasarkan bidang ilmu (0S100 by subject), bekerja sebagai praktisi di dunia industri,\natau membina mahasiswa yang berhasil meraih prestasi\npaling rendah tingkat nasional dalam 5 (lima) Tahun Terakhir', 'P 2.1.3.', 'Peningkatan kualitas pembina prestasi mahasiswa', 'P 2.1.3.1.', 'Pelatihan untuk Pembina kegiatan kemahasiswaan. '),
(76, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.1.', 'Peningkatan kualitas akademik dosen', 'K 2.1.1.1.', 'Penyediaan beasiswa bagi dosen untuk melanjutkan S3'),
(77, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.1.', 'Peningkatan kualitas akademik dosen', 'K 2.1.1.2.', 'Rekruitmen Dosen dengan kualifikasi Pendidikan S3'),
(78, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.1.', 'Peningkatan kualitas akademik dosen', 'K 2.1.1.3.', 'Intensif Bahasa Inggris Bagi Dosen Calon Peserta Studi Lanjut S3'),
(79, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.1.', 'Peningkatan kualitas akademik dosen', 'K 2.1.1.4.', 'Test TOEFL Bagi Dosen Calon Peserta Studi Lanjut S3'),
(80, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.2.', 'Peningkatan kompetensi dan profesionalisme dosen', 'K 2.1.2.1.', 'Peningkatan kompetensi dan profesionalisme dosen'),
(81, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.2.', 'Peningkatan kompetensi dan profesionalisme dosen', 'K 2.1.2.2.', 'Diklat bagi dosen untuk sertifikasi kompeteisi'),
(82, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.2.', 'Peningkatan kompetensi dan profesionalisme dosen', 'K 2.1.2.3.', 'Keikutsertaan dalam organisasi atau asosiasi profesi'),
(83, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.2.', 'Peningkatan kompetensi dan profesionalisme dosen', 'K 2.1.2.4.', 'Workshop Pengisian kinerja dosen secara online'),
(84, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.2.', 'Peningkatan kompetensi dan profesionalisme dosen', 'K 2.1.2.5.', 'Workshop sertifikasi dosen'),
(85, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.2.', 'Peningkatan kompetensi dan profesionalisme dosen', 'K 2.1.2.6.', 'Pelatihan sistem kepangkatan dosen'),
(86, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.2.', 'Peningkatan kompetensi dan profesionalisme dosen', 'K 2.1.2.7.', 'Penyiapan Sistem Informasi Pengembangan Kualifikasi dan Prestasi Dosen'),
(87, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.2.', 'Peningkatan kompetensi dan profesionalisme dosen', 'K 2.1.2.8.', 'Penyiapan Prosedur Opersional Baku (POB) Manajemen SDM Tenaga Dosen'),
(88, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.2.', 'Peningkatan kompetensi dan profesionalisme dosen', 'K 2.1.2.9.', 'Pelaksanaan reward berbasis kinerja (RemunerasI Tenaga Pendidik Non LK dan GB)'),
(89, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.3.', 'Peningkatan Profesionalisme Dosen tetap Non PNS dan Ber_NIDK', 'K 2.1.3.1.', 'Peningkatan Minat Praktisi Menjadi Dosen'),
(90, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.3.', 'Peningkatan Profesionalisme Dosen tetap Non PNS dan Ber_NIDK', 'K 2.1.3.2.', 'Asistensi Birokrasi bagi Dosen kalangan Praktisi '),
(91, 'S2', 'Meningkatnya\nkualitas dosen\npendidikan tinggi ', 'IKU 2.2', 'Persentase dosen tetap berkualifikasi akademik S3; memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja; atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja. ', 'P 2.1.3.', 'Peningkatan Profesionalisme Dosen tetap Non PNS dan Ber_NIDK', 'K 2.1.3.3.', 'Monitoring dan Evaluasi Kinerja bagi Dosen dari Kalangan Praktisi');

-- --------------------------------------------------------

--
-- Table structure for table `ikkk`
--

CREATE TABLE `ikkk` (
  `id` int(11) DEFAULT NULL,
  `kd_ss` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `sasaran` text CHARACTER SET utf8 DEFAULT NULL,
  `kd_ikk` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `indikator_kinerja_kegiatan` text CHARACTER SET utf8 DEFAULT NULL,
  `kd_pr` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Program` text CHARACTER SET utf8 DEFAULT NULL,
  `kd_keg` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `rincian_kegiatan` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rangka`
--

CREATE TABLE `rangka` (
  `id` int(11) DEFAULT NULL,
  `kd_keg` int(11) DEFAULT NULL,
  `nama_keg` varchar(51) CHARACTER SET utf8 DEFAULT NULL,
  `kd_kro` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `nama_kro` varchar(46) CHARACTER SET utf8 DEFAULT NULL,
  `kd_ro` int(11) DEFAULT NULL,
  `nama_ro` varchar(47) CHARACTER SET utf8 DEFAULT NULL,
  `kd_kp` int(11) DEFAULT NULL,
  `nama_kp` varchar(73) CHARACTER SET utf8 DEFAULT NULL,
  `kd_sk` varchar(1) CHARACTER SET utf8 DEFAULT NULL,
  `nama_sk` varchar(67) CHARACTER SET utf8 DEFAULT NULL,
  `kd_ak` int(11) DEFAULT NULL,
  `nama_ak` varchar(61) CHARACTER SET utf8 DEFAULT NULL,
  `kd_mak` varchar(24) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rangka`
--

INSERT INTO `rangka` (`id`, `kd_keg`, `nama_keg`, `kd_kro`, `nama_kro`, `kd_ro`, `nama_ro`, `kd_kp`, `nama_kp`, `kd_sk`, `nama_sk`, `kd_ak`, `nama_ak`, `kd_mak`, `updated_at`, `created_at`) VALUES
(4343, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'CAA', 'Sarana Bidang Pendidikan [Base Line]', 1, 'Sarana Pendukung Pembelajaran (PNBP/BLU)', 51, 'Pengadaan Sarana Pendukung Pembelajaran', 'A', 'Pengadaan Peralatan Pendukung Pembelajaran', 537112, 'Belanja Modal Peralatan dan Mesin - BLU', '4471.CAA.01.51.A.537112.', NULL, NULL),
(3265, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'CAA', 'Sarana Bidang Pendidikan [Base Line]', 1, 'Sarana Pendukung Pembelajaran (PNBP/BLU)', 51, 'Pengadaan Sarana Pendukung Pembelajaran', 'A', 'Pengadaan Peralatan Pendukung Pembelajaran', 537115, 'Belanja Modal Lainnya - BLU', '4471.CAA.01.51.A.537115.', NULL, NULL),
(9118, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'CAA', 'Sarana Bidang Pendidikan [Base Line]', 1, 'Sarana Pendukung Pembelajaran (PNBP/BLU)', 51, 'Pengadaan Sarana Pendukung Pembelajaran', 'B', 'Pengadaan Meubelair Pendukung Pembelajaran', 537112, 'Belanja Modal Peralatan dan Mesin - BLU', '4471.CAA.01.51.B.537112.', NULL, NULL),
(6535, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'CAA', 'Sarana Bidang Pendidikan [Base Line]', 2, 'Sarana Pendukung Perkantoran (PNBP/BLU)', 51, 'Pengadaan Sarana Pendukung Perkantoran', 'A', 'Pengadaan Peralatan Pendukung Perkantoran', 537112, 'Belanja Modal Peralatan dan Mesin - BLU', '4471.CAA.02.51.A.537112.', NULL, NULL),
(8867, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'CAA', 'Sarana Bidang Pendidikan [Base Line]', 2, 'Sarana Pendukung Perkantoran (PNBP/BLU)', 51, 'Pengadaan Sarana Pendukung Perkantoran', 'B', 'Pengadaan Meubelair Pendukung Perkantoran', 537112, 'Belanja Modal Peralatan dan Mesin - BLU', '4471.CAA.02.51.B.537112.', NULL, NULL),
(5754, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'CBJ', 'Prasarana Bidang Pendidikan Tinggi [Base Line]', 1, 'Prasarana Pendukung Pembelajaran (PNBP/BLU)', 51, 'Pengadaan Prasarana Pendukung Pembelajaran', 'A', 'Pembangunan/Pemeliharaan Gedung dan Bangunan Pendukung Pembelajaran', 537113, 'Belanja Modal Gedung dan Bangunan - BLU', '4471.CBJ.01.51.A.537113.', NULL, NULL),
(4301, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'CBJ', 'Prasarana Bidang Pendidikan Tinggi [Base Line]', 2, 'Prasarana Pendukung Perkantoran (PNBP/BLU)', 51, 'Pengadaan Prasarana Pendukung Perkantoran', 'A', 'Pembangunan/Pemeliharaan Gedung dan Bangunan Pendukung Perkantoran', 537113, 'Belanja Modal Gedung dan Bangunan - BLU', '4471.CBJ.02.51.A.537113.', NULL, NULL),
(6856, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'A', 'Penerimaan Mahasiswa Baru', 525112, 'Belanja Barang', '4471.DBA.01.60.A.525112.', NULL, NULL),
(5503, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'A', 'Penerimaan Mahasiswa Baru', 525115, 'Belanja Perjalanan', '4471.DBA.01.60.A.525115.', NULL, NULL),
(7289, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'A', 'Penerimaan Mahasiswa Baru', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.01.60.A.525119.', NULL, NULL),
(1260, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'A', 'Penerimaan Mahasiswa Baru', 525121, 'Belanja Barang Persediaan Barang Konsumsi - BLU', '4471.DBA.01.60.A.525121.', NULL, NULL),
(6482, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'B', 'Proses Belajar Mengajar', 525112, 'Belanja Barang', '4471.DBA.01.60.B.525112.', NULL, NULL),
(3057, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'B', 'Proses Belajar Mengajar', 525113, 'Belanja Jasa', '4471.DBA.01.60.B.525113.', NULL, NULL),
(3683, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'B', 'Proses Belajar Mengajar', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.01.60.B.525119.', NULL, NULL),
(5000, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'B', 'Proses Belajar Mengajar', 525121, 'Belanja Barang Persediaan Barang Konsumsi - BLU', '4471.DBA.01.60.B.525121.', NULL, NULL),
(4378, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'C', 'Wisuda dan Yudisium', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.01.60.C.525119.', NULL, NULL),
(9413, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'C', 'Wisuda dan Yudisium', 525113, 'Belanja Jasa', '4471.DBA.01.60.C.525113.', NULL, NULL),
(7065, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'D', 'Administrasi Pendidikan', 525112, 'Belanja Barang', '4471.DBA.01.60.D.525112.', NULL, NULL),
(4188, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'D', 'Administrasi Pendidikan', 525113, 'Belanja Jasa', '4471.DBA.01.60.D.525113.', NULL, NULL),
(7056, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'D', 'Administrasi Pendidikan', 525115, 'Belanja Perjalanan', '4471.DBA.01.60.D.525115.', NULL, NULL),
(3888, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'D', 'Administrasi Pendidikan', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.01.60.D.525119.', NULL, NULL),
(5876, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'D', 'Administrasi Pendidikan', 525121, 'Belanja Barang Persediaan Barang Konsumsi - BLU', '4471.DBA.01.60.D.525121.', NULL, NULL),
(6820, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'D', 'Administrasi Pendidikan', 525123, 'Belanja Barang Persediaan Pemeliharaan - BLU', '4471.DBA.01.60.D.525123.', NULL, NULL),
(9434, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'D', 'Administrasi Pendidikan', 525153, NULL, '4471.DBA.01.60.D.525153.', NULL, NULL),
(6199, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'D', 'Administrasi Pendidikan', 525154, 'Belanja Jasa BLU - Penanganan Pandemi COVID-19', '4471.DBA.01.60.D.525154.', NULL, NULL),
(5076, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'F', 'Kegiatan Kemahasiswaan', 525112, 'Belanja Barang', '4471.DBA.01.60.F.525112.', NULL, NULL),
(4454, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'F', 'Kegiatan Kemahasiswaan', 525113, 'Belanja Jasa', '4471.DBA.01.60.F.525113.', NULL, NULL),
(5731, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'F', 'Kegiatan Kemahasiswaan', 525115, 'Belanja Perjalanan', '4471.DBA.01.60.F.525115.', NULL, NULL),
(5905, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 1, 'Layanan Pendidikan (PNBP/BLU)', 60, 'Penyelenggaraan Layanan Pendidikan Perguruan Tinggi', 'F', 'Kegiatan Kemahasiswaan', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.01.60.F.525119.', NULL, NULL),
(4965, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'A', 'Penyelenggaraan Operasional Perkantoran', 525112, 'Belanja Barang', '4471.DBA.03.51.A.525112.', NULL, NULL),
(3228, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'A', 'Penyelenggaraan Operasional Perkantoran', 525113, 'Belanja Jasa', '4471.DBA.03.51.A.525113.', NULL, NULL),
(5702, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'A', 'Penyelenggaraan Operasional Perkantoran', 525115, 'Belanja Perjalanan', '4471.DBA.03.51.A.525115.', NULL, NULL),
(9746, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'A', 'Penyelenggaraan Operasional Perkantoran', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.03.51.A.525119.', NULL, NULL),
(6756, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'A', 'Penyelenggaraan Operasional Perkantoran', 525121, 'Belanja Barang Persediaan Barang Konsumsi - BLU', '4471.DBA.03.51.A.525121.', NULL, NULL),
(9558, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'A', 'Penyelenggaraan Operasional Perkantoran', 525124, 'Belanja Barang Persediaan Pita Cukai, Materai dan Leges - BLU', '4471.DBA.03.51.A.525124.', NULL, NULL),
(4769, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'B', 'Pembayaran Langganan Daya dan Jasa', 525113, 'Belanja Jasa', '4471.DBA.03.51.B.525113.', NULL, NULL),
(4681, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'C', 'Pemeliharaan Peralatan', 525114, 'Belanja Pemeliharaan', '4471.DBA.03.51.C.525114.', NULL, NULL),
(7955, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'C', 'Pemeliharaan Peralatan', 525123, 'Belanja Barang Persediaan Pemeliharaan - BLU', '4471.DBA.03.51.C.525123.', NULL, NULL),
(6884, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'D', 'Pemeliharaan Gedung', 525114, 'Belanja Pemeliharaan', '4471.DBA.03.51.D.525114.', NULL, NULL),
(7765, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'D', 'Pemeliharaan Gedung', 525123, 'Belanja Barang Persediaan Pemeliharaan - BLU', '4471.DBA.03.51.D.525123.', NULL, NULL),
(9182, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'E', 'Pembayaran Honor Tenaga Pendidik dan Kependidikan Non PNS/Kontrak', 525111, 'Belanja Gaji dan Tunjangan', '4471.DBA.03.51.E.525111.', NULL, NULL),
(1450, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'F', 'Pembayaran Honorarium Tugas Tambahan dan Kelebihan Jam Mengajar', 525111, 'Belanja Gaji dan Tunjangan', '4471.DBA.03.51.F.525111.', NULL, NULL),
(3305, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'F', 'Pembayaran Honorarium Tugas Tambahan dan Kelebihan Jam Mengajar', 525113, 'Belanja Jasa', '4471.DBA.03.51.F.525113.', NULL, NULL),
(1537, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 51, 'Penyelenggaraan Dukungan Operasional Pembelajaran', 'G', 'Pembayaran Remunerasi Tenaga Pendidik dan Kependidikan', 525111, 'Belanja Gaji dan Tunjangan', '4471.DBA.03.51.G.525111.', NULL, NULL),
(8108, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 53, 'Pelaksanaan Layanan Pengembangan Sistem Tata Kelola, Kelembagaan, dan SDM', 'A', 'Pengembangan Kurikulum, Akreditasi, dan Mutu Akademik', 525112, 'Belanja Barang', '4471.DBA.03.53.A.525112.', NULL, NULL),
(2574, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 53, 'Pelaksanaan Layanan Pengembangan Sistem Tata Kelola, Kelembagaan, dan SDM', 'A', 'Pengembangan Kurikulum, Akreditasi, dan Mutu Akademik', 525113, 'Belanja Jasa', '4471.DBA.03.53.A.525113.', NULL, NULL),
(5664, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 53, 'Pelaksanaan Layanan Pengembangan Sistem Tata Kelola, Kelembagaan, dan SDM', 'A', 'Pengembangan Kurikulum, Akreditasi, dan Mutu Akademik', 525115, 'Belanja Perjalanan', '4471.DBA.03.53.A.525115.', NULL, NULL),
(1226, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 53, 'Pelaksanaan Layanan Pengembangan Sistem Tata Kelola, Kelembagaan, dan SDM', 'A', 'Pengembangan Kurikulum, Akreditasi, dan Mutu Akademik', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.03.53.A.525119.', NULL, NULL),
(7114, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 53, 'Pelaksanaan Layanan Pengembangan Sistem Tata Kelola, Kelembagaan, dan SDM', 'B', 'Seminar/Pelatihan/Workshop Pengembangan Mutu SDM Tenaga Pendidik', 525112, 'Belanja Barang', '4471.DBA.03.53.B.525112.', NULL, NULL),
(4908, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 53, 'Pelaksanaan Layanan Pengembangan Sistem Tata Kelola, Kelembagaan, dan SDM', 'B', 'Seminar/Pelatihan/Workshop Pengembangan Mutu SDM Tenaga Pendidik', 525115, 'Belanja Perjalanan', '4471.DBA.03.53.B.525115.', NULL, NULL),
(9408, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 3, 'Dukungan Operasional Pembelajaran (PNBP/BLU)', 53, 'Pelaksanaan Layanan Pengembangan Sistem Tata Kelola, Kelembagaan, dan SDM', 'B', 'Seminar/Pelatihan/Workshop Pengembangan Mutu SDM Tenaga Pendidik', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.03.53.B.525119.', NULL, NULL),
(5078, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 4, 'Penelitian dan Pengabdian Masyarakat (PNBP/BLU)', 51, 'Penelitian', 'A', 'Seleksi dan Penilaian Proposal Penelitian', 525112, 'Belanja Barang', '4471.DBA.04.51.A.525112.', NULL, NULL),
(9998, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 4, 'Penelitian dan Pengabdian Masyarakat (PNBP/BLU)', 51, 'Penelitian', 'A', 'Seleksi dan Penilaian Proposal Penelitian', 525113, 'Belanja Jasa', '4471.DBA.04.51.A.525113.', NULL, NULL),
(1957, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 4, 'Penelitian dan Pengabdian Masyarakat (PNBP/BLU)', 51, 'Penelitian', 'A', 'Seleksi dan Penilaian Proposal Penelitian', 525115, 'Belanja Perjalanan', '4471.DBA.04.51.A.525115.', NULL, NULL),
(3421, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 4, 'Penelitian dan Pengabdian Masyarakat (PNBP/BLU)', 51, 'Penelitian', 'A', 'Seleksi dan Penilaian Proposal Penelitian', 525121, 'Belanja Barang Persediaan Barang Konsumsi - BLU', '4471.DBA.04.51.A.525121.', NULL, NULL),
(9555, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 4, 'Penelitian dan Pengabdian Masyarakat (PNBP/BLU)', 51, 'Penelitian', 'B', 'Pelaksanaan Penelitian', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.04.51.B.525119.', NULL, NULL),
(4980, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 4, 'Penelitian dan Pengabdian Masyarakat (PNBP/BLU)', 51, 'Penelitian', 'C', 'Seminar dan Publikasi Penelitian', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.04.51.C.525119.', NULL, NULL),
(5966, 4471, 'Peningkatan Kualitas dan Kapasitas Perguruan Tinggi', 'DBA', 'Pendidikan Tinggi[Base Line]', 4, 'Penelitian dan Pengabdian Masyarakat (PNBP/BLU)', 52, 'Pengabdian kepada Masyarakat', 'A', 'Pelaksanaan Pengabdian kepada Masyarakat', 525119, 'Belanja Penyediaan Barang dan Jasa BLU Lainnya', '4471.DBA.04.52.A.525119.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Tb_IKK`
--

CREATE TABLE `Tb_IKK` (
  `id` int(11) NOT NULL,
  `kd_ss` varchar(200) NOT NULL,
  `sasaran` text NOT NULL,
  `kd_ikk` varchar(200) NOT NULL,
  `indikator_kinerja_kegiatan` text NOT NULL,
  `kd_program` varchar(200) NOT NULL,
  `program` text NOT NULL,
  `kd_keg` varchar(200) NOT NULL,
  `rincian_kegiatan` text NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Tb_KKM`
--

CREATE TABLE `Tb_KKM` (
  `id` int(11) NOT NULL,
  `kd_ikk` varchar(200) NOT NULL,
  `indikator_kinerja_kegiatan` text DEFAULT NULL,
  `kk_mendikbud` varchar(200) DEFAULT NULL,
  `kk_menkeu` varchar(200) DEFAULT NULL,
  `satuan` varchar(200) DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tb_KKM`
--

INSERT INTO `Tb_KKM` (`id`, `kd_ikk`, `indikator_kinerja_kegiatan`, `kk_mendikbud`, `kk_menkeu`, `satuan`, `bobot`, `updated_at`, `created_at`) VALUES
(28, 'SILAHKAN PILIH', 'Persentase lulusan 51 dan D4/D3/02 yang berhasil mendapat pekerjaan; melanjutkan studi; atau menjadi wiraswasta.', '90', '80', '%', 100, '2022-07-06', '2022-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `Tb_PERKIN`
--

CREATE TABLE `Tb_PERKIN` (
  `id` int(11) NOT NULL,
  `PP_TPT` varchar(150) DEFAULT NULL,
  `PP_TGL` date DEFAULT NULL,
  `PP_REKTOR` varchar(150) DEFAULT NULL,
  `PP_JBT` varchar(150) DEFAULT NULL,
  `PP_NIP` varchar(200) DEFAULT NULL,
  `PK_NAMA` varchar(200) DEFAULT NULL,
  `PK_JBT` varchar(200) DEFAULT NULL,
  `PK_NIP` varchar(200) DEFAULT NULL,
  `kd_ikk` varchar(200) DEFAULT NULL,
  `indikator_kinerja_kegiatan` text DEFAULT NULL,
  `kk_mendikbud` varchar(200) DEFAULT NULL,
  `kk_menkeu` varchar(200) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL,
  `tw_1` varchar(100) DEFAULT NULL,
  `tw_2` varchar(100) DEFAULT NULL,
  `tw_3` varchar(100) DEFAULT NULL,
  `tw_4` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Belum Disetujui',
  `jumlah_bobot` varchar(50) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Tb_RANGKA`
--

CREATE TABLE `Tb_RANGKA` (
  `id` int(11) NOT NULL,
  `kd_keg` varchar(200) NOT NULL,
  `nama_keg` text NOT NULL,
  `kd_kro` varchar(200) NOT NULL,
  `nama_kro` text NOT NULL,
  `kd_ro` varchar(200) NOT NULL,
  `nama_ro` text NOT NULL,
  `kd_kp` varchar(200) NOT NULL,
  `nama_kp` text NOT NULL,
  `kd_sk` varchar(200) NOT NULL,
  `nama_sk` text NOT NULL,
  `kd_ak` varchar(200) NOT NULL,
  `nama_ak` text NOT NULL,
  `kd_mak` varchar(250) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Tb_REKAT`
--

CREATE TABLE `Tb_REKAT` (
  `id` int(11) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `kd_ikk` varchar(200) NOT NULL,
  `indikator_kinerja_kegiatan` text NOT NULL,
  `kd_program` varchar(200) NOT NULL,
  `program` text NOT NULL,
  `kd_keg` varchar(200) NOT NULL,
  `rincian_kegiatan` text NOT NULL,
  `TOR` varchar(200) NOT NULL,
  `kd_rk` varchar(200) NOT NULL,
  `rincian_komponen` text NOT NULL,
  `akun` varchar(200) NOT NULL,
  `tahun` date NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Tb_VERPERKIN`
--

CREATE TABLE `Tb_VERPERKIN` (
  `id` int(11) NOT NULL,
  `kd_ikk` varchar(200) NOT NULL,
  `indikator_kinerja_kegiatan` text NOT NULL,
  `kk_mendikbud` varchar(200) NOT NULL,
  `kk_menkeu` varchar(200) NOT NULL,
  `tw_1` varchar(100) NOT NULL,
  `tw_2` varchar(100) NOT NULL,
  `tw_3` varchar(100) NOT NULL,
  `tw_4` varchar(100) NOT NULL,
  `bobot` varchar(100) NOT NULL,
  `jumlah_bobot` varchar(100) NOT NULL,
  `verifikasi_perencanaan` varchar(50) NOT NULL,
  `verifikasi_spi` varchar(50) NOT NULL,
  `tanggapan` text NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_IKK`
--
ALTER TABLE `data_IKK`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tb_IKK`
--
ALTER TABLE `Tb_IKK`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tb_KKM`
--
ALTER TABLE `Tb_KKM`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tb_PERKIN`
--
ALTER TABLE `Tb_PERKIN`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tb_RANGKA`
--
ALTER TABLE `Tb_RANGKA`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tb_REKAT`
--
ALTER TABLE `Tb_REKAT`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tb_VERPERKIN`
--
ALTER TABLE `Tb_VERPERKIN`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_IKK`
--
ALTER TABLE `data_IKK`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `Tb_IKK`
--
ALTER TABLE `Tb_IKK`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `Tb_KKM`
--
ALTER TABLE `Tb_KKM`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `Tb_PERKIN`
--
ALTER TABLE `Tb_PERKIN`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `Tb_RANGKA`
--
ALTER TABLE `Tb_RANGKA`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Tb_REKAT`
--
ALTER TABLE `Tb_REKAT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Tb_VERPERKIN`
--
ALTER TABLE `Tb_VERPERKIN`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
