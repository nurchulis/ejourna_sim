-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 02:53 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ejournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(24) CHARACTER SET utf8 NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin3', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id_journal` int(11) NOT NULL,
  `nama_journal` varchar(100) CHARACTER SET utf8 NOT NULL,
  `link_journal` varchar(200) CHARACTER SET utf8 NOT NULL,
  `foto_journal` varchar(150) CHARACTER SET utf8 NOT NULL,
  `kategori_journal` varchar(20) CHARACTER SET utf8 NOT NULL,
  `urut` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id_journal`, `nama_journal`, `link_journal`, `foto_journal`, `kategori_journal`, `urut`) VALUES
(26, 'Adabiyat', 'http://ejournal.uin-suka.ac.id/adab/adabiyat', '69f44f965ad7378f8d2d1d4230a3cfc8.png', '4', 12),
(32, 'CyberSecurity', 'http://ejournal.uin-suka.ac.id/saintek/cybersecurity', 'f6f065dcf5bccbd6b7ec70807e99c274.png', '4', 14),
(34, 'FIHRIS', 'http://ejournal.uin-suka.ac.id/adab/FIHRIS', 'ac03f519f638976bdf83ffd2d9abdf4d.png', '4', 2),
(35, 'Journal of Islamic Thought and Muslim Societies', 'http://ejournal.uin-suka.ac.id/pasca/jitms', '7c5de1c8f1125baefc873f71816d5ecf.png', '4', 13),
(36, 'Jurnal Pendidikan Matematika Sunan Kalijaga', 'http://ejournal.uin-suka.ac.id/saintek/jpm', '5f078c3ede592a4e6a476b5a516860bc.png', '4', 17),
(37, 'Kalijaga Journal of Communication', 'http://ejournal.uin-suka.ac.id/dakwah/KJC', '85617aed270520d82cca58b912fde1fe.png', '4', 16),
(38, 'Living Islam: Journal of Islamic Discourses', 'http://ejournal.uin-suka.ac.id/ushuluddin/li', 'd514c18c50c4c583101f58e8ab9bdaef.png', '4', 11),
(39, 'WELFARE : JURNAL ILMU KESEJAHTERAAN SOSIAL', 'http://ejournal.uin-suka.ac.id/dakwah/welfare', 'd1a293f0359d9b9cbcd789d4b286ac6f.png', '4', 15),
(43, 'Al-Mazaahib (Jurnal Perbandingan Hukum)', 'http://ejournal.uin-suka.ac.id/syariah/almazahib', 'a99803b4f5cc78a03c443cf86e5f8862.jpg', '10', 0),
(46, 'Az Zarqa\'', 'http://ejournal.uin-suka.ac.id/syariah/azzarqa', 'd6f59fa27a251c4fb3d1386cdab3959f.png', '10', 3),
(48, 'JISKA (Jurnal Informatika Sunan Kalijaga)', 'http://ejournal.uin-suka.ac.id/saintek/JISKA', 'f99b67fbcbd00e5776bd1a509643b6f8.png', '10', 4),
(49, 'Jurnal Bakti Saintek: Jurnal Pengabdian Masyarakat Bidang Sains dan Teknologi', 'http://ejournal.uin-suka.ac.id/saintek/jbs', '10bc9e1f702f8b1986a7f8de7c03557b.png', '10', 5),
(50, 'Jurnal Dakwah', 'http://ejournal.uin-suka.ac.id/dakwah/jurnaldakwah', '900faf578bc9c6528a37056133f9258e.jpg', '10', 6),
(51, 'HISBAH: Jurnal Bimbingan Konseling dan Dakwah Islam', 'http://ejournal.uin-suka.ac.id/dakwah/hisbah', '91d8b836a129515003fde3485a414631.jpg', '10', 7),
(52, 'Living Hadis', 'http://ejournal.uin-suka.ac.id/ushuluddin/Living', '4cc5f7ffe5f1a4606a5f80c68a66103d.png', '10', 8),
(53, 'Jurnal MD', 'http://ejournal.uin-suka.ac.id/dakwah/JMD', '10d211ca16ff3bbbecf939dd231cf8c8.png', '10', 2),
(54, 'Jurnal Pendidikan Madrasah', 'http://ejournal.uin-suka.ac.id/tarbiyah/JPM', '1afa763501a281f1abf7f9618198cd3c.jpg', '10', 9),
(55, 'Jurnal Pendidikan Agama Islam', 'http://ejournal.uin-suka.ac.id/tarbiyah/jpai', '0aad70f4af1ddb4aac026f6186bdc349.png', '10', 1),
(56, 'Jurnal Psikologi Integratif', 'http://ejournal.uin-suka.ac.id/isoshum/PI', 'd6e2f27bccbc0bde35c5d69bff9f4925.jpg', '10', 10),
(57, 'Jurnal Sosiologi Agama', 'http://ejournal.uin-suka.ac.id/ushuluddin/SosiologiAgama', '1d9082b63f1d6548077add3fdc2bc24b.png', '10', 11),
(58, 'MANAGERIA: Jurnal manajemen Pendidikan Islam', 'http://ejournal.uin-suka.ac.id/tarbiyah/manageria', '54c42bd806dc39399151a56e648201d2.png', '10', 12),
(59, 'REFLEKSI', 'http://ejournal.uin-suka.ac.id/ushuluddin/ref', '59b4f3da8e66b37a178eedee4bdf945e.jpg', '10', 14),
(60, 'THAQAFIYYAH', 'http://ejournal.uin-suka.ac.id/adab/thaqafiyyat', 'b5ffcd226ed18167631a542b58096618.jpg', '10', 13),
(61, 'INKLUSI', 'http://ejournal.uin-suka.ac.id/pusat/inklusi', '3076d712ce6409e6d49dc1b00480d61b.png', '2', 168),
(62, 'Al-Athfal Jurnal pendidikan Anak', 'http://ejournal.uin-suka.ac.id/tarbiyah/alathfal', 'f38558dcbf7547a75595e9d2ae127223.png', '2', 175),
(63, 'EDULAB: Majalah Ilmiah Laboratorium Pendidikan', 'http://ejournal.uin-suka.ac.id/tarbiyah/edulab', 'bb1ef1f6e780428c9c7e56eaddba089d.png', '4', 0),
(64, 'EKBISI', 'http://ejournal.uin-suka.ac.id/syariah/Ekbisi', '0e163b6b3b95907ba89d2a7fd0420511.jpg', '4', 1),
(65, 'Jurnal Al-Bidayah', 'http://ejournal.uin-suka.ac.id/tarbiyah/albidayah', '89d92221604531a4e3d24eabb9b110d1.jpg', '2', 189),
(66, 'Al-ahwal : Jurnal Hukum Keluarga Islam', 'http://ejournal.uin-suka.ac.id/syariah/Ahwal', 'c366ec2aeffba049336e6c3432190a3a.png', '2', 196),
(67, 'Hermenia', 'http://ejournal.uin-suka.ac.id/pasca/hermeneia', 'c1b93fac547e6d3fb8fd6775f71211ab.png', '4', 3),
(68, 'Al-Jami\'ah', 'http://aljamiah.or.id/index.php/AJIS', '85e28161de1aeee27edda742cc3920fe.png', '1', 210),
(69, 'Global Review of Islamic Economics and Business', 'http://ejournal.uin-suka.ac.id/febi/grieb', '10f9615c6d8a87874bf6d9f0f99db5ee.png', '2', 217),
(70, 'Jurnal Pendidikan Islam', 'http://ejournal.uin-suka.ac.id/tarbiyah/JPI', '7f09f779b29d6d02fba3034c90c0fe57.png', '1', 224),
(71, 'Golden Age: Jurnal Ilmiah Tumbuh Kembang Anak Usia Dini', 'http://ejournal.uin-suka.ac.id/tarbiyah/goldenage', '978a2a855792a5a3b79775beec5c50fc.png', '2', 231),
(72, 'Supremasi Hukum', 'http://ejournal.uin-suka.ac.id/syariah/Supremasi', '93b54c44d3142c32ef6e3d2a27bf16c9.png', '4', 4),
(73, 'Jurnal Biomedich', 'http://sciencebiology.org/index.php/BIOMEDICH', '13ed0609ec7d83e0fba6fe1e7b866a35.png', '2', 245),
(74, 'IJID International Journal on Informatics for Development', 'http://ejournal.uin-suka.ac.id/saintek/ijid', '35d6114a953a52ba882438faefb68923.jpg', '4', 5),
(75, 'Jurnal Fourier', 'http://fourier.or.id/index.php/FOURIER', 'b135363752aaecef9c35ed691dfc8c45.png', '2', 259),
(76, 'Inovasi Industri', 'http://ejournal.uin-suka.ac.id/saintek/InovasiIndustri', '4f5565af7066f0b5d7dfaac608d136a4.png', '4', 6),
(77, 'Kaunia: Integration and Interconnection Islam and Science', 'http://ejournal.uin-suka.ac.id/saintek/kaunia', 'f116037ee51f5f700de78b2f10cbb07c.png', '4', 7),
(78, 'Panangkaran: Jurnal Penelitian Agama dan Masyarakat', 'http://ejournal.uin-suka.ac.id/pusat/panangkaran', '26c94bb4a600488b2ac846e310d407dc.png', '4', 8),
(79, 'Jurnal Linguistika', 'http://ejournal.uin-suka.ac.id/adab/linguistika', 'b3fb68b1377101d9153d1177467e9fd8.png', '4', 9),
(80, 'Jurnal Studi Ilmu-ilmu Al-Qur\'an dan Hadis', 'http://ejournal.uin-suka.ac.id/ushuluddin/alquran', '517a5ab4cf7ed079c0f8b9fc50d8c606.png', '4', 10),
(81, 'Adabiyyāt: Jurnal Bahasa dan Sastra', 'http://ejournal.uin-suka.ac.id/adab/Adabiyyat', '1bbf28d9d1a44d2fa7662c0205f92c5b.png', '1', 301),
(82, 'Al Mahāra: Jurnal Pendidikan Bahasa Arab', 'http://ejournal.uin-suka.ac.id/tarbiyah/almahara', '6b6587a4b3da2f0fb7e58b2fda30056d.png', '10', 15),
(83, 'Al-Majallah fi al-Dirasat al-Islamiyyah wa al-Arabiyyah', 'http://ejournal.uin-suka.ac.id/pasca/mdia', '058e68fc8eff5e75f580925b00274799.png', '4', 18),
(84, 'Aplikasia: Jurnal Aplikasi Ilmu-ilmu Agama', 'http://ejournal.uin-suka.ac.id/pusat/aplikasia', '7e404649dabcc2ab565a1fd5facd07b5.jpg', '4', 19),
(85, 'Asy-Syir\'ah', 'http://asy-syirah.uin-suka.com/index.php/AS', 'a534610840d09f9459b841a6cb54c152.png', '1', 329),
(86, 'ESENSIA: Jurnal Ilmu-Ilmu Ushuluddin', 'http://ejournal.uin-suka.ac.id/ushuluddin/esensia', 'cf0de07542706d7459966ac847dcf5e9.jpg', '1', 336),
(87, 'EkBis: Jurnal Ekonomi dan Bisnis', 'http://ejournal.uin-suka.ac.id/febi/ekbis', '6ce5a16d0588f20a34e7dc28308931d7.png', '10', 16),
(88, 'Jurnal Kajian Islam Interdisipliner', 'http://ejournal.uin-suka.ac.id/pasca/jkii', '1975e8c013ab0789a5a67cd21f4f9f33.png', '4', 20),
(89, 'Integrated Lab Journal', 'http://ejournal.uin-suka.ac.id/pusat/integratedlab', '0f517addc851996c48cc674c6ad43d5c.png', '4', 21),
(90, 'Jurnal Pemberdayaan Masyarakat: Media Pemikiran dan Dakwah Pembangunan', 'http://ejournal.uin-suka.ac.id/dakwah/JPMI', '9af43e0c0a8fa7128afffad7df91d36e.jpg', '4', 22),
(91, 'Jurnal Sosiologi Reflektif', 'http://ejournal.uin-suka.ac.id/isoshum/sosiologireflektif', 'a31bbb29ba40a68780718ba2f5110802.jpg', '4', 23),
(92, 'Mukaddimah: Jurnal Studi Islam', 'http://ejournal.uin-suka.ac.id/pusat/mukaddimah', 'ce94e9d644185fcda0eea4e117afc99e.png', '4', 24),
(93, 'Musãwa Jurnal Studi Gender dan Islam', 'http://ejournal.uin-suka.ac.id/pusat/MUSAWA', 'd7a0e29c7359913b3b1152b6123a8128.png', '4', 25),
(94, 'Profetik: Jurnal Komunikasi', 'http://ejournal.uin-suka.ac.id/isoshum/profetik', '3a03d399919c15e7ba3069f3dc1e6455.jpg', '2', 392),
(95, 'RELIGI JURNAL STUDI AGAMA-AGAMA', 'http://ejournal.uin-suka.ac.id/ushuluddin/Religi', 'c09936bdf10bce16075947e80a5185b8.jpg', '4', 26),
(96, 'Sunan Kalijaga International Journal on Islamic Educational Research', 'http://ejournal.uin-suka.ac.id/tarbiyah/SKIJIER', '4b0d1f8b103bd397dde6e43bf919f7fc.png', '4', 27),
(97, 'Sunan Kalijaga: International Journal of Islamic Civilization', 'http://ejournal.uin-suka.ac.id/adab/skijic', 'f5c58645431b65f6c957f425f1c350e6.gif', '4', 28),
(98, 'THAQAFIYYAT: Jurnal Bahasa, Peradaban dan Informasi Islam', 'http://ejournal.uin-suka.ac.id/adab/thaqafiyyat', '02086936ed64d7da49976341f8fc07df.jpg', '4', 29),
(99, 'IN RIGHT: Jurnal Agama dan Hak Azazi Manusia', 'http://ejournal.uin-suka.ac.id/syariah/inright', '17d4aef92defa0f6c3d8267cdffa1ba0.png', '4', 30);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET utf8 NOT NULL,
  `deskripsi_kategori` varchar(60) CHARACTER SET utf8 NOT NULL,
  `foto_kategori` varchar(150) CHARACTER SET utf8 NOT NULL,
  `urut` int(5) NOT NULL,
  `color` varchar(12) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`, `foto_kategori`, `urut`, `color`, `icon`) VALUES
(1, 'Acredited Journals', 'sdnsk', 'c8b3c3121c783a3678fb2ebce0c78ab2.png', 0, '#d2153d', 'star.svg'),
(2, 'Indexed Journals', 'Daftar Journal yang bereputasi', '6fcc0e52a075f38bc1c926ab95b2d829.png', 12, '#30ca30', 'text-file.svg'),
(4, 'Other Journals', 'deskripsi', 'b959444d5b7bfc631f1d2d055dd62d96.png', 18, '#46bfaf', 'thumbs-down-silhouette.svg'),
(10, 'Active Journals', 'Journal Aktif', '4d9bd983e78d4a194a0225eb3f16d73f.png', 6, '#a86411', 'checked-symbol.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id_journal`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id_journal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
