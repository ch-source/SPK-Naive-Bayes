-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 07:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_klasifikasi`
--

CREATE TABLE `tbl_klasifikasi` (
  `id_klasifikasi` int(11) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `nik` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `umur` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pekerjaan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jml_tanggungan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pendidikan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pendapatan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status_rmh` varchar(50) CHARACTER SET latin1 NOT NULL,
  `bahan_bakar` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sumber_air` varchar(50) CHARACTER SET latin1 NOT NULL,
  `daya_listrik` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status_kl` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_klasifikasi`
--

INSERT INTO `tbl_klasifikasi` (`id_klasifikasi`, `no_kk`, `nik`, `nama`, `alamat`, `umur`, `pekerjaan`, `jml_tanggungan`, `pendidikan`, `pendapatan`, `status_rmh`, `bahan_bakar`, `sumber_air`, `daya_listrik`, `status_kl`) VALUES
(1, '517101550477842', '5.17101551078E+15', 'KETUT ADI JAYA', 'JALAN TUKAD MELANGIT NO 58', '>50 TAHUN', '6 ORANG', 'BURUH LEPAS', 'SMP', '<500.000', 'GUBUK', 'KAYU API', 'AIR ISI ULANG', '<500 W', 'Miskin'),
(2, '517101550477843', '5.17101550477E+15', 'HENDRIKUS ', 'JALAN TK BANYUSARI GG VIII NO 18', '>50 TAHUN', '>6 ORANG', 'TIDAK BEKERJA', 'SD', '<500.000', 'GUBUK', 'KAYU API', 'SUMUR', '<500 W', 'Miskin'),
(3, '517101550477844', '5.10705630384E+15', 'NI MADE SUARTANA', 'JALAN TK SITARUM GG W NO 2', '50 TAHUN ', '>6 ORANG', 'WIRAUSAHA', 'SD', '>500.000', 'PAPAN', 'KAYU API', 'AIR ISI ULANG', '>500 W', 'Miskin'),
(4, '517101550477845', '5.1050255048E+15', 'WAWAN ', 'JALAN TK BANYU POH NO 67', '>50 TAHUN', '6 ORANG ', 'PEGAWAI SWASTA', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin'),
(5, '517101550477846', '5.17103570685E+15', 'RIKARDUS ', 'TUKAD YEH AYA GG II NO 9 LINGKUNGAN KAJA', '>50 TAHUN', '<6 ORANG', 'PEGAWAI SWASTA', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin'),
(6, '517101550477847', '5.1710351057E+15', 'ANSELMUS MUSI', 'JL TUKAD CITARUM 99 X LINGKUNGAN KERTASARI', '>50 TAHUN', '>6 ORANG', 'TIDAK BEKERJA', 'SD', '>500.000', 'GUBUK', 'KAYU API', 'AIR ISI ULANG', '500 W', 'Miskin'),
(7, '517101550477848', '3.51008570773E+15', 'ADMAD ROLAH', 'JALAN WATURENGGONG GG XX NO 8', '50 TAHUN ', '>6 ORANG', 'TIDAK BEKERJA', 'SMP', '>500.000', 'GUBUK', 'KAYU API', 'SUMUR', '<500 W', 'Miskin'),
(8, '517101550477849', '5.17103530683E+15', 'MADE BASRIANI', 'JALAN WATURENGGONG GG XX NO 24', '50 TAHUN ', '<6 ORANG', 'PEGAWAI SWASTA', 'SMA', '>500.000', 'PAPAN', 'GAS', 'AIR ISI ULANG', '>500 W', 'Miskin'),
(9, '517101550477850', '3.51008550981E+15', 'KETUT SHAFER DUA', 'JALAN TK JOGADING NO 11A', '<50 TAHUN', '<6 ORANG', 'TIDAK BEKERJA', 'SD', '>500.000', 'GUBUK', 'KAYU API', 'AIR ISI ULANG', '<500 W', 'Miskin'),
(10, '517101550477851', '5.10503690678E+15', 'WAYAN BLI ', 'JL WATURENGGONG GG IX A NO 4', '<50 TAHUN', '<6 ORANG', 'BURUH TIDAK LEPAS', 'SMA', '<500.000', 'PAPAN', 'GAS', 'AIR ISI ULANG', '>500 W', 'Tidak Miskin'),
(11, '517101550477852', '5.1080744078E+15', 'BERNADUS JATA ARTA', 'JL TUKAD CILIWUNG GANG I NO 4', '>50 TAHUN', '6 ORANG', 'PEGAWAI SWASTA', 'SMA', '>500.000', 'GUBUK', 'KAYU API', 'LEDENG METERAN', '<500 W', 'Miskin'),
(12, '517101550477853', '5.10803450676E+15', 'ARY ARMADI', 'JALAN TK LANGUAN GG II NO 5', '<50 TAHUN', '<6 ORANG', 'PEGAWAI SWASTA', 'S1', '>2.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin'),
(13, '517101550477854', '5.17103470576E+15', 'WAYAN SUTRA ', 'JL WATURENNGONG GG IX NO 4 LINGKUNGAN KAJA', '<50 TAHUN', '6 ORANG', 'WIRAUSAHA', 'SMA', '<1.000.000', 'SETENGAH TEMBOK', 'GAS', 'SUMUR', '<500 W', 'Miskin'),
(14, '517101550477855', '5.17101701074E+15', 'TIBERTIUS PADI', 'JALAN WATURENGGONG GG XIV NO 13', '<50 TAHUN', '<6 ORANG', 'BURUH TIDAK LEPAS', 'SMP', '<500.000', 'GUBUK', 'GAS', 'AIR ISI ULANG', '<500 W', 'Miskin'),
(15, '517101550477856', '5.1070257077E+15', 'KETUT ADI DAMA', 'JALAN TUKAD BUAJI GANG WIDURI NO 3', '<50 TAHUN', '<6 ORANG', 'PEGAWAI SWASTA', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin'),
(16, '517101550477857', '5.10502490974E+15', 'KOMANG SUARTANA', 'JALAN WATURENGGONG GG XVIIB NO 11', '<50 TAHUN', '6 ORANG', 'PEGAWAI SWASTA', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '500 W', 'Tidak Miskin'),
(17, '517101550477858', '5.17101700381E+15', 'NI MADE SUARTA ', 'JL TK BANYU POH VII NO 16', '>50 TAHUN', '<6 ORANG', 'BURUH LEPAS', 'SMP', '>500.000', 'GUBUK', 'GAS', 'AIR ISI ULANG', '<500 W', 'Miskin'),
(18, '517101550477859', '5.17101500981E+15', 'MADE ARYA ', 'JL TK IRWADI NO 44 LINGKUNGAN CELUK', '50 TAHUN ', '>6 ORANG', 'WIRAUSAHA', 'SMP', '>500.000', 'GUBUK', 'GAS', 'LEDENG METERAN', '>500 W', 'Miskin'),
(19, '517101550477860', '5.17101700491E+15', 'MADE MUKU ARTA', 'JALAN TK JOGADING NO 11A', '>50 TAHUN', '6 ORANG ', 'PEGAWAI SWASTA', 'SMA', '>1.000.000', 'PAPAN', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin'),
(20, '517101550477861', '5.10803570484E+15', 'KETUT RISKI', 'JL TUKAD MELANGIT GG XX NO 3 LINGKUNGAN SASIH', '>50 TAHUN', '<6 ORANG', 'PEGAWAI SWASTA', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_score_akhir`
--

CREATE TABLE `tbl_score_akhir` (
  `id_sk` int(10) NOT NULL,
  `id_klasifikasi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_kk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nik` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tanggal` varchar(50) CHARACTER SET latin1 NOT NULL,
  `periode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tahun` varchar(50) CHARACTER SET latin1 NOT NULL,
  `umur` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jml_tanggungan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pekerjaan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pendidikan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pendapatan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status_rmh` varchar(50) CHARACTER SET latin1 NOT NULL,
  `bahan_bakar` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sumber_air` varchar(50) CHARACTER SET latin1 NOT NULL,
  `daya_listrik` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_score_akhir`
--

INSERT INTO `tbl_score_akhir` (`id_sk`, `id_klasifikasi`, `no_kk`, `nik`, `nama`, `tanggal`, `periode`, `tahun`, `umur`, `jml_tanggungan`, `pekerjaan`, `pendidikan`, `pendapatan`, `status_rmh`, `bahan_bakar`, `sumber_air`, `daya_listrik`, `status`) VALUES
(20, '1', '517101550477842', '5.17101551078E+15', 'KETUT ADI JAYA', '2022-03-23', '3', '2022', '>50 TAHUN', 'BURUH LEPAS', '6 ORANG', 'SMP', '<500.000', 'GUBUK', 'KAYU API', 'AIR ISI ULANG', '<500 W', 'Miskin'),
(21, '2', '517101550477843', '5.17101550477E+15', 'HENDRIKUS ', '2022-03-23', '3', '2022', '>50 TAHUN', 'TIDAK BEKERJA', '>6 ORANG', 'SD', '<500.000', 'GUBUK', 'KAYU API', 'SUMUR', '<500 W', 'Miskin'),
(22, '3', '517101550477844', '5.10705630384E+15', 'NI MADE SUARTANA', '2022-03-23', '3', '2022', '50 TAHUN ', 'WIRAUSAHA', '>6 ORANG', 'SD', '>500.000', 'PAPAN', 'KAYU API', 'AIR ISI ULANG', '>500 W', 'Miskin'),
(23, '4', '517101550477845', '5.1050255048E+15', 'WAWAN ', '2022-03-23', '3', '2022', '>50 TAHUN', 'PEGAWAI SWASTA', '6 ORANG ', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin'),
(24, '5', '517101550477846', '5.17103570685E+15', 'RIKARDUS ', '2022-03-23', '3', '2022', '>50 TAHUN', 'PEGAWAI SWASTA', '<6 ORANG', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin'),
(25, '6', '517101550477847', '5.1710351057E+15', 'ANSELMUS MUSI', '2022-03-23', '3', '2022', '>50 TAHUN', 'TIDAK BEKERJA', '>6 ORANG', 'SD', '>500.000', 'GUBUK', 'KAYU API', 'AIR ISI ULANG', '500 W', 'Miskin'),
(26, '7', '517101550477848', '3.51008570773E+15', 'ADMAD ROLAH', '2022-03-23', '3', '2022', '50 TAHUN ', 'TIDAK BEKERJA', '>6 ORANG', 'SMP', '>500.000', 'GUBUK', 'KAYU API', 'SUMUR', '<500 W', 'Miskin'),
(27, '8', '517101550477849', '5.17103530683E+15', 'MADE BASRIANI', '2022-03-23', '3', '2022', '50 TAHUN ', 'PEGAWAI SWASTA', '<6 ORANG', 'SMA', '>500.000', 'PAPAN', 'GAS', 'AIR ISI ULANG', '>500 W', 'Miskin'),
(28, '9', '517101550477850', '3.51008550981E+15', 'KETUT SHAFER DUA', '2022-03-23', '3', '2022', '<50 TAHUN', 'TIDAK BEKERJA', '<6 ORANG', 'SD', '>500.000', 'GUBUK', 'KAYU API', 'AIR ISI ULANG', '<500 W', 'Miskin'),
(29, '10', '517101550477851', '5.10503690678E+15', 'WAYAN BLI ', '2022-03-23', '3', '2022', '<50 TAHUN', 'BURUH TIDAK LEPAS', '<6 ORANG', 'SMA', '<500.000', 'PAPAN', 'GAS', 'AIR ISI ULANG', '>500 W', 'Tidak Miskin'),
(30, '11', '517101550477852', '5.1080744078E+15', 'BERNADUS JATA ARTA', '2022-03-23', '3', '2022', '>50 TAHUN', 'PEGAWAI SWASTA', '6 ORANG', 'SMA', '>500.000', 'GUBUK', 'KAYU API', 'LEDENG METERAN', '<500 W', 'Miskin'),
(31, '12', '517101550477853', '5.10803450676E+15', 'ARY ARMADI', '2022-03-23', '3', '2022', '<50 TAHUN', 'PEGAWAI SWASTA', '<6 ORANG', 'S1', '>2.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin'),
(32, '13', '517101550477854', '5.17103470576E+15', 'WAYAN SUTRA ', '2022-03-23', '3', '2022', '<50 TAHUN', 'WIRAUSAHA', '6 ORANG', 'SMA', '<1.000.000', 'SETENGAH TEMBOK', 'GAS', 'SUMUR', '<500 W', 'Miskin'),
(33, '14', '517101550477855', '5.17101701074E+15', 'TIBERTIUS PADI', '2022-03-23', '3', '2022', '<50 TAHUN', 'BURUH TIDAK LEPAS', '<6 ORANG', 'SMP', '<500.000', 'GUBUK', 'GAS', 'AIR ISI ULANG', '<500 W', 'Miskin'),
(34, '15', '517101550477856', '5.1070257077E+15', 'KETUT ADI DAMA', '2022-03-23', '3', '2022', '<50 TAHUN', 'PEGAWAI SWASTA', '<6 ORANG', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin'),
(35, '16', '517101550477857', '5.10502490974E+15', 'KOMANG SUARTANA', '2022-03-23', '3', '2022', '<50 TAHUN', 'PEGAWAI SWASTA', '6 ORANG', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '500 W', 'Tidak Miskin'),
(36, '17', '517101550477858', '5.17101700381E+15', 'NI MADE SUARTA ', '2022-03-23', '3', '2022', '>50 TAHUN', 'BURUH LEPAS', '<6 ORANG', 'SMP', '>500.000', 'GUBUK', 'GAS', 'AIR ISI ULANG', '<500 W', 'Miskin'),
(37, '18', '517101550477859', '5.17101500981E+15', 'MADE ARYA ', '2022-03-23', '3', '2022', '50 TAHUN ', 'WIRAUSAHA', '>6 ORANG', 'SMP', '>500.000', 'GUBUK', 'GAS', 'LEDENG METERAN', '>500 W', 'Miskin'),
(38, '19', '517101550477860', '5.17101700491E+15', 'MADE MUKU ARTA', '2022-03-23', '3', '2022', '>50 TAHUN', 'PEGAWAI SWASTA', '6 ORANG ', 'SMA', '>1.000.000', 'PAPAN', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin'),
(39, '20', '517101550477861', '5.10803570484E+15', 'KETUT RISKI', '2022-03-23', '3', '2022', '>50 TAHUN', 'PEGAWAI SWASTA', '<6 ORANG', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'Tidak Miskin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE `tbl_training` (
  `id_training` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_kab` varchar(50) NOT NULL,
  `nama_kec` varchar(50) NOT NULL,
  `nama_kel` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `jml_tanggungan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pendapatan` varchar(50) NOT NULL,
  `status_rmh` varchar(50) NOT NULL,
  `bahan_bakar` varchar(50) NOT NULL,
  `sumber_air` varchar(50) NOT NULL,
  `daya_listrik` varchar(50) NOT NULL,
  `aktual_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_training`
--

INSERT INTO `tbl_training` (`id_training`, `nik`, `nama`, `alamat`, `nama_kab`, `nama_kec`, `nama_kel`, `umur`, `jml_tanggungan`, `pekerjaan`, `pendidikan`, `pendapatan`, `status_rmh`, `bahan_bakar`, `sumber_air`, `daya_listrik`, `aktual_kelas`) VALUES
(1, '5.17101551078E+15', 'ADMAT SUBARJDO', 'JALAN TUKAD MELANGIT NO 58', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '>50 TAHUN', '6 ORANG', 'BURUH LEPAS', 'SMP', '<500.000', 'GUBUK', 'KAYU API', 'AIR ISI ULANG', '<500 W', 'MISKIN'),
(2, '5.17101550477E+15', 'RAHMAT ADIYANI', 'JALAN TK BANYUSARI GG VIII NO 18', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '>50 TAHUN', '>6 ORANG', 'TIDAK BEKERJA', 'SD', '<500.000', 'GUBUK', 'KAYU API', 'SUMUR', '<500 W', 'MISKIN'),
(3, '5.10705630384E+15', 'KOMANG SUBAJI', 'JALAN TK SITARUM GG W NO 2', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '50 TAHUN ', '>6 ORANG', 'WIRAUSAHA', 'SD', '>500.000', 'PAPAN', 'KAYU API', 'AIR ISI ULANG', '>500 W', 'TIDAK MISKIN'),
(4, '5.1050255048E+15', 'DEWA WIDHI ARTHA', 'JALAN TK BANYU POH NO 67', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '>50 TAHUN', '6 ORANG ', 'PEGAWAI SWASTA', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'TIDAK MISKIN'),
(5, '5.17103570685E+15', 'KETUT AJMARIDA', 'TUKAD YEH AYA GG II NO 9 LINGKUNGAN KAJA', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '>50 TAHUN', '<6 ORANG', 'PEGAWAI SWASTA', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'TIDAK MISKIN'),
(6, '5.1710351057E+15', 'RISKI RAHMAT', 'JL TUKAD CITARUM 99 X LINGKUNGAN KERTASARI', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '>50 TAHUN', '>6 ORANG', 'TIDAK BEKERJA', 'SD', '>500.000', 'GUBUK', 'KAYU API', 'AIR ISI ULANG', '500 W', 'MISKIN'),
(7, '3.51008570773E+15', 'JOKO ADHI', 'JALAN WATURENGGONG GG XX NO 8', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '50 TAHUN ', '>6 ORANG', 'TIDAK BEKERJA', 'SMP', '>500.000', 'GUBUK', 'KAYU API', 'SUMUR', '<500 W', 'MISKIN'),
(8, '5.17103530683E+15', 'KARTHO ', 'JALAN WATURENGGONG GG XX NO 24', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '50 TAHUN ', '<6 ORANG', 'PEGAWAI SWASTA', 'SMA', '>500.000', 'PAPAN', 'GAS', 'AIR ISI ULANG', '>500 W', 'MISKIN'),
(9, '3.51008550981E+15', 'RISKI ADIDAMA', 'JALAN TK JOGADING NO 11A', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '<50 TAHUN', '<6 ORANG', 'TIDAK BEKERJA', 'SD', '>500.000', 'GUBUK', 'KAYU API', 'AIR ISI ULANG', '<500 W', 'MISKIN'),
(10, '5.10503690678E+15', 'I MADE YUDI', 'JL WATURENGGONG GG IX A NO 4', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '<50 TAHUN', '<6 ORANG', 'BURUH TIDAK LEPAS', 'SMA', '<500.000', 'PAPAN', 'GAS', 'AIR ISI ULANG', '>500 W', 'MISKIN'),
(11, '5.1080744078E+15', 'NYOMAN CARIANI', 'JL TUKAD CILIWUNG GANG I NO 4', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '>50 TAHUN', '6 ORANG', 'PEGAWAI SWASTA', 'SMA', '>500.000', 'GUBUK', 'KAYU API', 'LEDENG METERAN', '<500 W', 'MISKIN'),
(12, '5.10803450676E+15', 'NI NYOMAN SURNIATI', 'JALAN TK LANGUAN GG II NO 5', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '<50 TAHUN', '<6 ORANG', 'PEGAWAI SWASTA', 'S1', '>2.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'TIDAK MISKIN'),
(13, '5.17103470576E+15', 'NI MADE SUTIANI', 'JL WATURENNGONG GG IX NO 4 LINGKUNGAN KAJA', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '<50 TAHUN', '6 ORANG', 'WIRAUSAHA', 'SMA', '<1.000.000', 'SETENGAH TEMBOK', 'GAS', 'SUMUR', '<500 W', 'TIDAK MISKIN'),
(14, '5.17101701074E+15', 'DORKAS LOURU WOLLA', 'JALAN WATURENGGONG GG XIV NO 13', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '<50 TAHUN', '<6 ORANG', 'BURUH TIDAK LEPAS', 'SMP', '<500.000', 'GUBUK', 'GAS', 'AIR ISI ULANG', '<500 W', 'MISKIN'),
(15, '5.1070257077E+15', 'NI WAYAN SUDIANI', 'JALAN TUKAD BUAJI GANG WIDURI NO 3', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '<50 TAHUN', '<6 ORANG', 'PEGAWAI SWASTA', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'TIDAK MISKIN'),
(16, '5.10502490974E+15', 'DEWA MADE ARYA', 'JALAN WATURENGGONG GG XVIIB NO 11', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '<50 TAHUN', '6 ORANG', 'PEGAWAI SWASTA', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '500 W', 'TIDAK MISKIN'),
(17, '5.17101700381E+15', 'ALFRYADI ', 'JL TK BANYU POH VII NO 16', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '>50 TAHUN', '<6 ORANG', 'BURUH LEPAS', 'SMP', '>500.000', 'GUBUK', 'GAS', 'AIR ISI ULANG', '<500 W', 'MISKIN'),
(18, '5.17101500981E+15', 'BERNADUS ATA', 'JL TK IRWADI NO 44 LINGKUNGAN CELUK', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '50 TAHUN ', '>6 ORANG', 'WIRAUSAHA', 'SMP', '>500.000', 'GUBUK', 'GAS', 'LEDENG METERAN', '>500 W', 'TIDAK MISKIN'),
(19, '5.17101700491E+15', 'ARYA ATMAJA', 'JALAN TK JOGADING NO 11A', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '>50 TAHUN', '6 ORANG ', 'PEGAWAI SWASTA', 'SMA', '>1.000.000', 'PAPAN', 'GAS', 'LEDENG METERAN', '>500 W', 'TIDAK MISKIN'),
(20, '5.10803570484E+15', 'KOMANG KUNIARTA', 'JL TUKAD MELANGIT GG XX NO 3 LINGKUNGAN SASIH', 'KOTA DENPASAR', 'DENPASAR SELATAN', 'PANJER', '>50 TAHUN', '<6 ORANG', 'PEGAWAI SWASTA', 'S1', '>1.000.000', 'TEMBOK', 'GAS', 'LEDENG METERAN', '>500 W', 'TIDAK MISKIN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(50) NOT NULL,
  `id_penduduk` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `tgl_registrasi` varchar(50) NOT NULL,
  `status_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_penduduk`, `nama_user`, `username`, `password`, `level`, `tgl_registrasi`, `status_user`) VALUES
('USR001', '', 'Chris Sony', 'Lurah', '1234', 'Lurah', '2020-10-26', ''),
('USR002', '', 'Acen', 'admin', '1234', 'Admin', '2021-09-08', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vp`
--

CREATE TABLE `tbl_vp` (
  `id_variabel` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_variabel` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vp`
--

INSERT INTO `tbl_vp` (`id_variabel`, `nama_variabel`) VALUES
('VRP001', 'Umur'),
('VRP002', 'Jumlah Tanggungan'),
('VRP003', 'Pekerjaan'),
('VRP004', 'Pendidikan'),
('VRP005', 'Pendapatan'),
('VRP006', 'Status Rumah'),
('VRP007', 'Bahan Bakar'),
('VRP008', 'Sumber Air'),
('VRP009', 'Daya Listrik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indexes for table `tbl_score_akhir`
--
ALTER TABLE `tbl_score_akhir`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indexes for table `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`id_training`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_vp`
--
ALTER TABLE `tbl_vp`
  ADD PRIMARY KEY (`id_variabel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
  MODIFY `id_klasifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_score_akhir`
--
ALTER TABLE `tbl_score_akhir`
  MODIFY `id_sk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
