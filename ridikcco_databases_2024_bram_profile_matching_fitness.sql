-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2024 at 11:39 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ridikcco_databases_2024_bram_profile_matching_fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nomor_telepon` varchar(15) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `nama`, `jenis_kelamin`, `alamat`, `email`, `nomor_telepon`, `username`, `password`) VALUES
('adm001', 'admin', 'laki-laki', 'jambi', 'admin@mail.com', '08738743847', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `data_member`
--

CREATE TABLE `data_member` (
  `id_member` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tinggi_badan` varchar(100) DEFAULT NULL,
  `berat_badan` varchar(100) DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nomor_telepon` varchar(15) DEFAULT NULL,
  `tingak_kebugaran` varchar(100) DEFAULT NULL,
  `preferensi_pelatihan` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_member`
--

INSERT INTO `data_member` (`id_member`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `tinggi_badan`, `berat_badan`, `alamat`, `email`, `nomor_telepon`, `tingak_kebugaran`, `preferensi_pelatihan`, `username`, `password`) VALUES
('MEM001', 'ridho', 'laki-laki', '2002-02-13', '178', '60', 'jakarta	', 'ridho@mail.com', '0aab80f23b6b866', '', '', 'ridho', '926a161c6419512d711089538c80ac70'),
('MEM002', 'puat', 'laki-laki', '1995-05-31', '168', '80', 'Jambi', 'admin@gmail.com', '92ebdb7149564f1', '', '', 'puat', 'e4f845b8172b48f504e369166f46c5ff');

-- --------------------------------------------------------

--
-- Table structure for table `data_pelatihan`
--

CREATE TABLE `data_pelatihan` (
  `id_pelatihan` varchar(50) DEFAULT NULL,
  `repatisi` varchar(50) NOT NULL,
  `rp` varchar(50) DEFAULT NULL,
  `rc` varchar(50) DEFAULT NULL,
  `bmi` varchar(100) DEFAULT NULL,
  `tujuan` varchar(50) DEFAULT NULL,
  `usia` varchar(50) DEFAULT NULL,
  `pelatihan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_pelatihan`
--

INSERT INTO `data_pelatihan` (`id_pelatihan`, `repatisi`, `rp`, `rc`, `bmi`, `tujuan`, `usia`, `pelatihan`) VALUES
('1', '1-4', '0', '0', '0', '1', '0', '<h3>Latihan Kardio</h3>\r\n\r\n<ol>\r\n	<li><strong>Lari</strong>: Lari di treadmill atau di luar ruangan selama 30-60 menit.</li>\r\n	<li><strong>Bersepeda</strong>: Bersepeda di luar ruangan atau menggunakan sepeda statis selama 30-60 menit.</li>\r\n	<li><strong>Lompat Tali</strong>: Lompat tali selama 15-20 menit.</li>\r\n	<li><strong>HIIT (High-Intensity Interval Training)</strong>: Kombinasi lari cepat dan jalan selama 20-30 menit.</li>\r\n	<li><strong>Zumba</strong>: Ikuti kelas zumba atau latihan zumba online selama 45-60 menit.</li>\r\n</ol>\r\n'),
('2', '1-4', '1', '1', '1', '2', '1', '<h3>Latihan Kekuatan</h3>\r\n\r\n<ol>\r\n	<li><strong>Squat</strong>: Lakukan 3 set dengan 15 repetisi.</li>\r\n	<li><strong>Push-up</strong>: Lakukan 3 set dengan 10-15 repetisi.</li>\r\n	<li><strong>Deadlift</strong>: Gunakan beban sesuai kemampuan, 3 set dengan 12 repetisi.</li>\r\n	<li><strong>Bench Press</strong>: Lakukan 3 set dengan 12 repetisi.</li>\r\n	<li><strong>Lunges</strong>: Lakukan 3 set dengan 15 repetisi per kaki.</li>\r\n</ol>\r\n'),
('3', '1-4', '2', '2', '2', '3', '0', '<h3>Latihan untuk Bagian Inti (Core)</h3>\r\n\r\n<ol>\r\n	<li><strong>Plank</strong>: Tahan posisi plank selama 1-2 menit, ulangi 3 kali.</li>\r\n	<li><strong>Russian Twist</strong>: Lakukan 3 set dengan 20 repetisi.</li>\r\n	<li><strong>Leg Raises</strong>: Lakukan 3 set dengan 15 repetisi.</li>\r\n	<li><strong>Bicycle Crunches</strong>: Lakukan 3 set dengan 20 repetisi.</li>\r\n	<li><strong>Mountain Climbers</strong>: Lakukan selama 1 menit, ulangi 3 kali.</li>\r\n</ol>\r\n'),
('4', '1-4', '3', '3', '3', '1', '1', '<h3>Latihan untuk Fleksibilitas dan Mobilitas</h3>\r\n\r\n<ol>\r\n	<li><strong>Yoga</strong>: Ikuti kelas yoga atau lakukan latihan yoga selama 30-60 menit.</li>\r\n	<li><strong>Stretching</strong>: Lakukan sesi stretching seluruh tubuh selama 15-20 menit.</li>\r\n	<li><strong>Pilates</strong>: Ikuti kelas pilates atau latihan pilates online selama 30-45 menit.</li>\r\n</ol>\r\n'),
('5', '1-4', '4', '0', '0', '2', '0', '<h3>Latihan di Rumah</h3>\r\n\r\n<ol>\r\n	<li><strong>Burpees</strong>: Lakukan 3 set dengan 15 repetisi.</li>\r\n	<li><strong>Jumping Jacks</strong>: Lakukan selama 1 menit, ulangi 3 kali.</li>\r\n	<li><strong>Step-Ups</strong>: Gunakan tangga atau bangku, 3 set dengan 20 repetisi per kaki.</li>\r\n	<li><strong>Tricep Dips</strong>: Gunakan kursi atau bangku, 3 set dengan 15 repetisi.</li>\r\n	<li><strong>High Knees</strong>: Lakukan selama 1 menit, ulangi 3 kali.</li>\r\n</ol>\r\n'),
('6', '8-12', '0', '0', '0', '1', '1', '<ol>\r\n	<li>\r\n	<p><strong>Barbell Bench Press</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Dada, Trisep, Deltoid Depan</li>\r\n		<li><strong>Catatan:</strong> Fokus pada pengendalian gerakan dan jangan kunci siku di atas untuk menjaga ketegangan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Dumbbell Flyes</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Dada</li>\r\n		<li><strong>Catatan:</strong> Jaga sedikit tekukan pada siku untuk melindungi sendi, dan bawa dumbbell turun secara perlahan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Incline Bench Press</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Dada Atas, Trisep, Deltoid Depan</li>\r\n		<li><strong>Catatan:</strong> Atur bangku pada sudut 30-45 derajat.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Push-Up</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Dada, Trisep, Bahu</li>\r\n		<li><strong>Catatan:</strong> Pertahankan tubuh lurus dari kepala hingga kaki.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Barbell Squat</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Paha Depan, Gluteus, Paha Belakang</li>\r\n		<li><strong>Catatan:</strong> Pastikan lutut tidak melewati jari kaki saat turun.</li>\r\n	</ul>\r\n	</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n'),
('7', '8-12', '1', '1', '1', '2', '0', '<ol>\r\n	<li>\r\n	<p><strong>Leg Press</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Paha Depan, Gluteus, Paha Belakang</li>\r\n		<li><strong>Catatan:</strong> Jangan kunci lutut di atas untuk menghindari cedera.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Deadlift</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Paha Belakang, Gluteus, Punggung Bawah</li>\r\n		<li><strong>Catatan:</strong> Pertahankan punggung lurus selama seluruh gerakan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Lunges</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Paha Depan, Gluteus, Paha Belakang</li>\r\n		<li><strong>Catatan:</strong> Langkahkan kaki ke depan dengan tekukan lutut 90 derajat.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Leg Curl</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Paha Belakang</li>\r\n		<li><strong>Catatan:</strong> Jaga gerakan lambat dan terkontrol.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Leg Extension</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Paha Depan</li>\r\n		<li><strong>Catatan:</strong> Fokus pada kontraksi penuh di bagian atas gerakan.</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n'),
('8', '8-12', '2', '2', '2', '3', '1', '<ol>\r\n	<li>\r\n	<p><strong>Pull-Up</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Punggung Atas, Bisep</li>\r\n		<li><strong>Catatan:</strong> Hindari mengayun tubuh untuk menjaga fokus pada otot target.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Lat Pulldown</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Punggung Atas, Bisep</li>\r\n		<li><strong>Catatan:</strong> Tarik ke arah dada, bukan leher.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Bent Over Row</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Punggung Tengah, Bisep</li>\r\n		<li><strong>Catatan:</strong> Pertahankan punggung lurus dan fokus pada kontraksi otot punggung.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Seated Cable Row</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Punggung Tengah, Bisep</li>\r\n		<li><strong>Catatan:</strong> Tarik pegangan ke arah perut sambil menjaga punggung lurus.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Face Pull</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Deltoid Belakang, Punggung Atas</li>\r\n		<li><strong>Catatan:</strong> Tarik tali ke arah wajah sambil menjaga siku tinggi.</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n'),
('9', '8-12', '3', '3', '3', '1', '0', '<ol>\r\n	<li>\r\n	<p><strong>Barbell Bicep Curl</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Bisep</li>\r\n		<li><strong>Catatan:</strong> Jangan gunakan momentum untuk mengangkat barbell.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Dumbbell Hammer Curl</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Bisep, Lengan Bawah</li>\r\n		<li><strong>Catatan:</strong> Jaga pergelangan tangan netral selama gerakan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Tricep Dips</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Trisep</li>\r\n		<li><strong>Catatan:</strong> Jaga siku dekat dengan tubuh dan hindari membungkukkan tubuh ke depan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Tricep Pushdown</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Trisep</li>\r\n		<li><strong>Catatan:</strong> Pertahankan siku tetap di samping tubuh.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Overhead Tricep Extension</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Trisep</li>\r\n		<li><strong>Catatan:</strong> Jaga siku dekat dengan kepala dan jangan gunakan beban terlalu berat.</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n'),
('10', '8-12', '4', '0', '0', '2', '1', '<ol>\r\n	<li>\r\n	<p><strong>Standing Calf Raise</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Betis</li>\r\n		<li><strong>Catatan:</strong> Fokus pada rentang gerak penuh dan kontraksi puncak.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Seated Calf Raise</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Betis</li>\r\n		<li><strong>Catatan:</strong> Jaga gerakan lambat dan terkontrol.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Shoulder Press</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Deltoid, Trisep</li>\r\n		<li><strong>Catatan:</strong> Jangan kunci siku di atas.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Lateral Raise</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Deltoid Samping</li>\r\n		<li><strong>Catatan:</strong> Jaga sedikit tekukan pada siku dan angkat dumbbell hingga sejajar dengan bahu.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Rear Delt Fly</strong></p>\r\n\r\n	<ul>\r\n		<li><strong>Otot Target:</strong> Deltoid Belakang</li>\r\n		<li><strong>Catatan:</strong> Jaga gerakan lambat dan hindari menggunakan momentum.</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n'),
('11', '12-25', '0', '0', '0', '1', '0', '<ol>\r\n	<li><strong>Squat</strong>: Gunakan beban pada bahu atau dumbbell. Fokus pada kedalaman dan postur tubuh yang baik.</li>\r\n	<li><strong>Deadlift</strong>: Variasikan dengan stiff-legged atau sumo deadlift. Pastikan punggung tetap lurus.</li>\r\n	<li><strong>Bench Press</strong>: Lakukan dengan barbell atau dumbbell. Penting untuk menjaga kontrol pada seluruh gerakan.</li>\r\n	<li><strong>Pull-up</strong>: Bisa ditambah beban dengan menggunakan sabuk beban.</li>\r\n	<li><strong>Bent Over Row</strong>: Menggunakan barbell atau dumbbell. Punggung harus rata dan core aktif.</li>\r\n</ol>\r\n'),
('12', '12-25', '1', '1', '1', '2', '1', '<ol>\r\n	<li><strong>Overhead Press</strong>: Bisa dengan barbell atau dumbbell. Stabilkan bahu dan core.</li>\r\n	<li><strong>Lunge</strong>: Variasikan dengan langkah maju atau mundur. Tambahkan beban untuk tantangan lebih.</li>\r\n	<li><strong>Leg Press</strong>: Fokus pada jangkauan gerak penuh dan kontrol.</li>\r\n	<li><strong>Barbell Hip Thrust</strong>: Latihan hebat untuk kekuatan glute.</li>\r\n	<li><strong>Clean and Jerk</strong>: Latihan kompleks yang membutuhkan teknik yang baik.</li>\r\n</ol>\r\n'),
('13', '12-25', '2', '2', '2', '3', '0', '<ol>\r\n	<li><strong>Snatch</strong>: Latihan kekuatan dan kecepatan yang bagus. Pelajari teknik yang benar.</li>\r\n	<li><strong>Turkish Get-Up</strong>: Bagus untuk kekuatan seluruh tubuh dan stabilitas.</li>\r\n	<li><strong>Kettlebell Swing</strong>: Fokus pada kekuatan pinggul dan daya ledak.</li>\r\n	<li><strong>Farmer&#39;s Walk</strong>: Mengangkat beban dan berjalan. Bagus untuk grip dan kekuatan keseluruhan.</li>\r\n	<li><strong>Plyometric Push-Up</strong>: Latihan ledakan untuk kekuatan dada dan lengan.</li>\r\n</ol>\r\n'),
('14', '12-25', '3', '3', '3', '1', '1', '<ol>\r\n	<li><strong>Box Jump</strong>: Latihan plyometric untuk kekuatan kaki dan daya ledak.</li>\r\n	<li><strong>Sled Push/Pull</strong>: Bagus untuk kekuatan kaki dan kondisi kardiovaskular.</li>\r\n	<li><strong>Battle Ropes</strong>: Latihan kekuatan dan ketahanan tubuh bagian atas.</li>\r\n	<li><strong>Medicine Ball Slam</strong>: Fokus pada kekuatan dan ledakan tubuh bagian atas.</li>\r\n	<li><strong>Tire Flip</strong>: Latihan kekuatan seluruh tubuh dengan elemen ledakan.</li>\r\n</ol>\r\n'),
('15', '12-25', '4', '0', '0', '2', '0', '<ol>\r\n	<li><strong>Zercher Squat</strong>: Variasi squat dengan bar di lipatan siku, baik untuk core dan kekuatan kaki.</li>\r\n	<li><strong>Single-Leg Deadlift</strong>: Fokus pada stabilitas dan kekuatan unilateral.</li>\r\n	<li><strong>Glute Bridge</strong>: Latihan dasar namun efektif untuk kekuatan glute.</li>\r\n	<li><strong>Hammer Curl</strong>: Fokus pada kekuatan biceps dengan variasi grip.</li>\r\n	<li><strong>Tricep Dip</strong>: Latihan yang baik untuk kekuatan triceps, bisa ditambah beban.</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `data_profil`
--

CREATE TABLE `data_profil` (
  `id_profil` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nomor_telepon` varchar(15) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_profil`
--

INSERT INTO `data_profil` (`id_profil`, `nama`, `alamat`, `email`, `nomor_telepon`, `gambar`) VALUES
('PRO20240521115339926', 'Profile Matching Fitness', 'Jambi', 'fitness@mail.com', '0857328738947', '1716285219-91013-kelly-sikkema-IZOAOjvwhaM-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_rekomendasi`
--

CREATE TABLE `data_rekomendasi` (
  `id_rekomendasi` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_member` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `umur` varchar(50) NOT NULL,
  `tinggi_badan` varchar(50) NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `bmi` varchar(50) NOT NULL,
  `bmr` varchar(50) NOT NULL,
  `kategori_tubuh` varchar(50) NOT NULL,
  `tujuan_latihan` varchar(50) NOT NULL,
  `id_pelatihan` varchar(50) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_rekomendasi`
--

INSERT INTO `data_rekomendasi` (`id_rekomendasi`, `tanggal`, `id_member`, `tanggal_lahir`, `umur`, `tinggi_badan`, `berat_badan`, `bmi`, `bmr`, `kategori_tubuh`, `tujuan_latihan`, `id_pelatihan`, `nilai`) VALUES
('REK20240529091914913', '2024-05-29', 'MEM001', '2002-02-13', '22', '178', '60', '18.94', '1,621.51', 'Normal weight', 'Tambah massa otot (Hyperthropy)', '7', '3.65'),
('REK20240529094601327', '2024-05-29', 'MEM001', '2002-02-13', '22', '178', '30', '9.47', '1,219.60', 'Underweight', 'Turun BB (Strength)', '1', '2.75'),
('REK20240531104239336', '2024-05-31', 'MEM002', '1995-05-31', '29', '168', '80', '28.34', '1,801.72', 'Overweight', 'Turun BB (Strength)', '2', '3.9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
