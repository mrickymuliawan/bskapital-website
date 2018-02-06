-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 05:54 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bskapital`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `career_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`career_id`, `title`, `slug`, `content`, `created_at`, `user_id`) VALUES
(1, 'Junior Auditor', 'junior-auditor', '<h3>Junior Auditor</h3>\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, e</p>\r\n<p>nim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', '2018-01-14 20:22:43', 1),
(2, 'Senior Auditor', 'senior-auditor', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2018-01-17 21:57:56', 1),
(3, 'Human Resource', 'human-resource', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2018-01-17 21:58:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `slug`, `content`, `created_at`, `image_name`, `user_id`) VALUES
(1, 'Contoh news', 'contoh-news', '<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', '2018-02-06 11:14:19', 'default-news.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_name` varchar(50) NOT NULL,
  `position` enum('parent','child') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `title`, `slug`, `content`, `created_at`, `image_name`, `position`) VALUES
(1, 'services', 'services', '', '2018-01-14 21:15:59', '', 'parent'),
(2, 'about', 'about', '', '2018-01-14 21:16:21', '', 'parent'),
(3, 'contact', 'contact', '', '2018-01-14 21:16:38', '', 'parent'),
(4, 'people', 'people', '', '2018-01-14 21:30:42', '', 'parent');

-- --------------------------------------------------------

--
-- Table structure for table `regulation`
--

CREATE TABLE `regulation` (
  `regulation_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regulation`
--

INSERT INTO `regulation` (`regulation_id`, `title`, `slug`, `content`, `created_at`, `user_id`) VALUES
(1, 'Keputusan Menteri Keuangan - 02/KM.10/2018', 'keputusan-menteri-keuangan-02km102018', '<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: center;">KEPUTUSAN MENTERI KEUANGAN REPUBLIK INDONESIA<br style="box-sizing: border-box;" />NOMOR : 02/KM.10/2018<br style="box-sizing: border-box;" /><br style="box-sizing: border-box;" />TENTANGx&nbsp;<br style="box-sizing: border-box;" /><br style="box-sizing: border-box;" />NILAI KURS SEBAGAI DASAR PELUNASAN BEA MASUK, PAJAK PERTAMBAHAN<br style="box-sizing: border-box;" />NILAI BARANG DAN JASA DAN PAJAK PENJUALAN ATAS BARANG MEWAH,<br style="box-sizing: border-box;" />BEA KELUAR, DAN PAJAK PENGHASILAN YANG BERLAKU UNTUK<br style="box-sizing: border-box;" />TANGGAL 10 JANUARI 2018 SAMPAI DENGAN 16 JANUARI 2018<br style="box-sizing: border-box;" /><br style="box-sizing: border-box;" />MENTERI KEUANGAN REPUBLIK INDONESIA,</div>\r\n<p><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><span style="color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">Menimbang :</span><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /></p>\r\n<ol style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify; list-style-type: lower-alpha;">\r\n<li style="box-sizing: border-box; color: #464646; font-size: 14px; line-height: 20px; margin: 0px 0px 10px;">bahwa untuk keperluan pelunasan Bea Masuk, Pajak Pertambahan Nilai Barang dan Jasa dan Pajak Penjualan atas Barang Mewah, Bea Keluar, dan Pajak Penghasilan atas Pemasukan Barang, Utang Pajak yang berhubungan dengan Pajak Pertambahan Nilai Barang dan Jasa dan Pajak Penjualan atas Barang Mewah, Bea Keluar, dan Penghasilan yang diterima atau diperoleh berupa uang asing, harus terlebih dahulu dinilai ke dalam uang rupiah;</li>\r\n<li style="box-sizing: border-box; color: #464646; font-size: 14px; line-height: 20px; margin: 0px 0px 10px;">bahwa berdasarkan pertimbangan sebagaimana dimaksud dalam huruf a, perlu menetapkan Keputusan Menteri Keuangan tentang Nilai Kurs sebagai Dasar Pelunasan Bea Masuk, Pajak Pertambahan Nilai Barang dan Jasa dan Pajak Penjualan atas Barang Mewah, Bea Keluar, dan Pajak Penghasilan yang berlaku untuk&nbsp;tanggal 10 Januari 2018 sampai&nbsp;dengan 16 Januari 2018.</li>\r\n</ol>\r\n<p><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><span style="color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">Mengingat :&nbsp;</span><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /></p>\r\n<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">\r\n<ol style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">\r\n<li style="box-sizing: border-box; color: #464646; font-size: 14px; line-height: 20px; margin: 0px 0px 10px;">Undang-Undang Nomor 7 Tahun 1983 tentang Pajak Penghasilan (Lembaran Negara Republik Indonesia Tahun 1983 Nomor 50, Tambahan Lembaran Negara Republik Indonesia Nomor 3263) sebagaimana telah diubah terakhir dengan Undang-Undang Nomor 36 Tahun 2008 (Lembaran Negara Republik Indonesia Tahun 2008 Nomor 133);</li>\r\n<li style="box-sizing: border-box; color: #464646; font-size: 14px; line-height: 20px; margin: 0px 0px 10px;">Undang-Undang Nomor 8 Tahun 1983 tentang Pajak Pertambahan Nilai Barang dan Jasa dan Pajak Penjualan atas Barang Mewah (Lembaran Negara Republik Indonesia Tahun 1983 Nomor 51, Tambahan Lembaran Negara Republik Indonesia Nomor 3264) sebagaimana telah diubah terakhir dengan Undang-Undang Nomor 42 Tahun 2009 (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 150);</li>\r\n<li style="box-sizing: border-box; color: #464646; font-size: 14px; line-height: 20px; margin: 0px 0px 10px;">Undang-Undang Nomor 10 Tahun 1995 tentang Kepabeanan (Lembaran Negara Republik Indonesia Tahun 1995 Nomor 75, Tambahan Lembaran Negara Republik Indonesia Nomor 3612) sebagaimana telah diubah terakhir dengan Undang-Undang Nomor 17 Tahun 2006 (Lembaran Negara Republik Indonesia Tahun 2006 Nomor 93, Tambahan Lembaran Negara Republik Indonesia Nomor 4661);</li>\r\n<li style="box-sizing: border-box; color: #464646; font-size: 14px; line-height: 20px; margin: 0px 0px 10px;">Undang-Undang Nomor 11 Tahun 1995 tentang Cukai (Lembaran Negara Republik Indonesia Tahun 1995 Nomor 76, Tambahan Lembaran Negara Republik Indonesia Nomor 3613) sebagaimana telah diubah terakhir dengan Undang-Undang Nomor 39 Tahun 2007 (Lembaran Negara Republik Indonesia Tahun 2007 Nomor 105, Tambahan Lembaran Negara Republik Indonesia Nomor 4755);</li>\r\n<li style="box-sizing: border-box; color: #464646; font-size: 14px; line-height: 20px; margin: 0px 0px 10px;">Peraturan Menteri Keuangan Nomor 206/PMK.01/2014 tentang Organisasi dan Tata Kerja Kementerian Keuangan;</li>\r\n<li style="box-sizing: border-box; color: #464646; font-size: 14px; line-height: 20px; margin: 0px 0px 10px;">Keputusan Menteri Keuangan Nomor 347/KMK.01/2008 tentang Pelimpahan Wewenang Kepada Pejabat Eselon I Di Lingkungan Kementerian Keuangan Untuk dan Atas Nama Menteri Keuangan Menandatangani Surat dan atau Keputusan Menteri Keuangan;</li>\r\n</ol>\r\n<br style="box-sizing: border-box;" />Memperhatikan: &nbsp;&nbsp;&nbsp;&nbsp;<br style="box-sizing: border-box;" /><br style="box-sizing: border-box;" />Keputusan Menteri Keuangan Nomor 304/KMK.01/2015;<br style="box-sizing: border-box;" /><br style="box-sizing: border-box;" /><br style="box-sizing: border-box;" /></div>\r\n<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: center;">MEMUTUSKAN :<br style="box-sizing: border-box;" /><br style="box-sizing: border-box;" /></div>\r\n<p><span style="color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">Menetapkan :</span><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /></p>\r\n<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">KEPUTUSAN MENTERI KEUANGAN TENTANG NILAI KURS SEBAGAI DASAR PELUNASAN BEA MASUK, PAJAK PERTAMBAHAN NILAI BARANG DAN JASA DAN PAJAK PENJUALAN ATAS BARANG MEWAH, BEA KELUAR, DAN PAJAK PENGHASILAN YANG BERLAKU UNTUK&nbsp;TANGGAL&nbsp;10 JANUARI 2018 SAMPAI DENGAN 16 JANUARI 2018.</div>\r\n<p>&nbsp;</p>\r\n<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: center;">&nbsp;</div>\r\n<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: center;">\r\n<div style="box-sizing: border-box; text-align: justify;">Pertama :</div>\r\n</div>\r\n<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">Menetapkan Nilai Kurs sebagai Dasar Pelunasan Bea Masuk, Pajak Pertambahan Nilai Barang dan Jasa dan Pajak Penjualan atas Barang Mewah, Bea Keluar, dan Pajak Penghasilan yang berlaku untuk tanggal&nbsp;10 Januari 2018 sampai&nbsp;dengan 16 Januari 2018 sebagai berikut :<br style="box-sizing: border-box;" /><br style="box-sizing: border-box;" />\r\n<table class="verdana85pt" style="box-sizing: border-box; border-spacing: 0px; border-collapse: collapse; background-color: transparent; width: 1093px;" border="0" cellspacing="0" cellpadding="0">\r\n<tbody style="box-sizing: border-box;">\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 33px;">1.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">13.445,00</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Dolar Amerika Serikat (USD)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;">2.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">10.556,43</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Dolar Australia (AUD)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">3.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">10.784,67</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Dolar Kanada (CAD)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">4.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; text-align: right; width: 64px;">2.174,64</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Kroner Denmark (DKK)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">5.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; text-align: right; width: 64px;">1.719,76</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Dolar Hongkong (HKD)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">6.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">3.356,82</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Ringgit Malaysia (MYR)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">7.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">9.600,25</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Dolar Selandia Baru (NZD)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">8.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; text-align: right; width: 64px;">1.664,31</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Kroner Norwegia (NOK)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">9.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; text-align: right; width: 64px;">18.232,76</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Poundsterling Inggris (GBP)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">10.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; text-align: right; width: 64px;">10.123,64</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Dolar Singapura (SGD)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">11.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">1.648,44</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Kroner Swedia (SEK)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">12.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">13.795,56</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Franc Swiss (CHF)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">13.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">11.924,68</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Yen Jepang (JPY)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">100-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">14.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">9,92</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Kyat Myanmar (MMK)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">15.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">211,89</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Rupee India (INR)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">16.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">44.597,18</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Dinar Kuwait (KWD)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">17.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">121,54</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Rupee Pakistan (PKR)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">18.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">269,75</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Peso Philipina (PHP)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">19.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">3.584,82</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Riyal Saudi Arabia (SAR)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">20.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">87,54</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Rupee Sri Lanka (LKR)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">21.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">416,65</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Baht Thailand (THB)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">22.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">10.127,00</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Dolar Brunei Darussalam (BND)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">23.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">16.191,33</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Euro&nbsp;(EUR)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">24.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">2.072,20</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Yuan Renminbi Tiongkok (CNY)</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n<tr style="box-sizing: border-box;">\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="33">25.</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 21px;">Rp</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 64px;" align="right">12,64</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 20px;">&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif; width: 267px;">Untuk Won Korea (KRW)&nbsp;&nbsp;&nbsp;</td>\r\n<td style="box-sizing: border-box; padding: 0px; color: #464646; line-height: 20px; margin: 0px 0px 20px; font-family: Raleway, sans-serif;" width="46">1-</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">Kedua:<br style="box-sizing: border-box;" /><br style="box-sizing: border-box;" />Dalam hal kurs valuta asing lainnya tidak tercantum dalam diktum PERTAMA, maka nilai kurs yang digunakan sebagai dasar pelunasan adalah kurs spot harian valuta asing yang bersangkutan di pasar internasional terhadap dolar Amerika Serikat yang berlaku pada penutupan hari kerja sebelumnya dan dikalikan kurs rupiah terhadap dolar Amerika Serikat sebagaimana ditetapkan dalam Keputusan Menteri Keuangan ini.<br style="box-sizing: border-box;" /><br style="box-sizing: border-box;" />\r\n<div style="box-sizing: border-box; text-align: center;">&nbsp;</div>\r\n<div style="box-sizing: border-box;">Ketiga:</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">Keputusan Menteri Keuangan ini&nbsp;berlaku untuk tanggal&nbsp;10 Januari 2018 sampai&nbsp;dengan 16 Januari 2018.</div>\r\n<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">&nbsp;</div>\r\n<div style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">&nbsp;</div>\r\n<p><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><span style="color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">Ditetapkan di Jakarta</span><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><span style="color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">Pada tanggal&nbsp;09 Januari 2018</span><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><span style="color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">a.n. MENTERI KEUANGAN</span><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><span style="color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">KEPALA BADAN KEBIJAKAN FISKAL</span><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><span style="color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">ttd</span><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><span style="color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">SUAHASIL NAZARA</span><br style="box-sizing: border-box; color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;" /><span style="color: #424242; font-family: Raleway, sans-serif; font-size: 13px; text-align: justify;">NIP 197011231999031006</span></p>', '2018-01-17 21:26:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `title`, `sub_title`, `content`, `image_name`, `created_at`, `user_id`) VALUES
(1, 'Lorem ipsum dorom dummy tex', 'Sub title', 'Lorem ipsum dorom dummy text Lorem ipsum dorom dummy text', 'QghKc.jpg', '2018-02-05 18:56:14', 1),
(2, 'Consulting ', 'Sub title', 'Lorem ipsum dorom dummy text Lorem ipsum dorom dummy text Lorem ipsum dorom dummy text', 'tmp759072642547318786.jpg', '2018-02-05 18:59:46', 1),
(3, 'Lorem ipsum dorom dummy text', 'This is dummy text', 'Lorem ipsum dorom dummy text Lorem ipsum dorom dummy text Lorem ipsum dorom dummy text Lorem ipsum d', '0SmocJJ.jpg', '2018-02-05 19:02:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_page`
--

CREATE TABLE `sub_page` (
  `sub_page_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_page`
--

INSERT INTO `sub_page` (`sub_page_id`, `title`, `slug`, `sub_title`, `content`, `image_name`, `created_at`, `page_id`) VALUES
(1, 'homepage', 'homepage', '', '<h2>Welcome to BSKAPITAL</h2>\r\n<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', 'default-subpage.jpg', '2018-02-05 21:32:09', 2),
(2, 'Tax Advisory Services', 'tax-advisory-services', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', 'Auditing-Services.jpg', '2018-02-05 21:33:24', 1),
(3, 'Tax Compliance Services', 'tax-compliance-services', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', 'banner149311669825.jpg', '2018-02-05 21:33:48', 1),
(4, 'Internal Audit Services', 'internal-audit-services', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', 'racunovodstvo1.jpg', '2018-02-05 21:34:58', 1),
(5, 'Contact Us', 'contact-us', '', '<h2><span class="headerText">Jakarta</span></h2>\r\n<p>Head Office</p>\r\n<p>12 Floor Tower ABC<br />Jl. ABC no 30<br />Jakarta Pusat 10230<br />Indonesia</p>\r\n<p>Tel: &nbsp;(62-21) 7266261<br />E-mail:&nbsp;<a href="mailto:jkt-office@pkfhadiwinata.com">admin@bskapital.co.id</a></p>', 'default-subpage.jpg', '2018-02-05 22:19:57', 3),
(6, 'Ricky Muliawan', 'ricky-muliawan', 'System Developer', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'pasfoto.jpg', '2018-02-05 22:21:37', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('administrator','author') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'Administrator', 'Web', 'admin@mgi-gar.com', '8022201e37684c6b1dd052e2fff1c0b9', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `regulation`
--
ALTER TABLE `regulation`
  ADD PRIMARY KEY (`regulation_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `sub_page`
--
ALTER TABLE `sub_page`
  ADD PRIMARY KEY (`sub_page_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `regulation`
--
ALTER TABLE `regulation`
  MODIFY `regulation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sub_page`
--
ALTER TABLE `sub_page`
  MODIFY `sub_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
