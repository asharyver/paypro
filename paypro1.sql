-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2018 at 11:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paypro1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(3) NOT NULL,
  `posisi` varchar(11) NOT NULL,
  `active` int(2) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `ket` text NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `posisi`, `active`, `nama`, `ket`, `gambar`) VALUES
(2, 'Bawah', 1, 'Aman Pake Paypro, <br>#Jadilebih nyaman !', 'Tak perlu khawatir seperti kehilangan dompet atau pencurian uang tunai,<br>Transaksi menggunakan Paypro menggunakan password<br>\r\nyang hanya bisa di akses oleh pemilik account.', 'pro-210220181214.png'),
(3, 'Atas', 0, 'Bayar dengan Kode QR', 'Pake Paypro, kamu memiliki alternatif pembayaran untuk segala kebutuhan. Semudah pindai QR code, tidak perlu uang tunai, atau kartu, satu aplikasi, berbagai promo.', 'pro-230220180232.png'),
(4, 'Tengah', 0, 'Bayar apa aja <br>#PakePaypro Gampang', 'kamu akan mendapatkan penawaran terbaik untuk pembelian pulsa\r\nPaket Data, PLN, Transfer Uang dan bayar pakai QR\r\ndi toko favorit atau minimarket', 'about-210220181227.png');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(5) NOT NULL,
  `nm_depan` varchar(25) NOT NULL,
  `nm_belakang` varchar(25) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `summary` text NOT NULL,
  `education` varchar(5) NOT NULL,
  `experience` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `doc` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_calon`, `nm_depan`, `nm_belakang`, `no_telp`, `email`, `summary`, `education`, `experience`, `tanggal`, `doc`) VALUES
(1, 'Ahmad', 'saefuloh', '08787777771', 'ahmad@gmail.com', 'isi ini berisi teks yang ada', 'Yes', 'Yes', '2018-02-02', 'doc-020220180659.doc'),
(2, 'amir', 'muhidin', '08787777771', 'amin@gmail.com', 'okkeeeeee', 'Yes', 'Yes', '2018-02-02', 'doc-020220180753.doc'),
(3, 'amin', 'maruf', '08787777111', 'amin@gmail.com', 'siiiip', 'Yes', 'Yes', '2018-02-02', 'doc-020220180757.doc'),
(4, 'Aden', 'Jimmy', '082111945719', 'aa@gmail.com', 'siiiipppp', 'Yes', 'Yes', '2018-02-02', 'doc-020220180805.doc');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(3) NOT NULL,
  `fa` varchar(19) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `fa`, `nama`, `deskrip`) VALUES
(1, 'fa fa-folder-open-o', 'Businees', 'Foresee business opportunities and strategize business plan to create a valuable '),
(2, 'fa fa-money', 'Finance', 'Plan, control, and monitor the financial purpose');

-- --------------------------------------------------------

--
-- Table structure for table `how`
--

CREATE TABLE `how` (
  `id_how` int(5) NOT NULL,
  `bagian` varchar(25) NOT NULL,
  `active` int(2) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `ket` text NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `how`
--

INSERT INTO `how` (`id_how`, `bagian`, `active`, `nama`, `ket`, `gambar`) VALUES
(1, 'daftar', 0, 'Cara daftar 1', 'Begini cara daftar yang benar', 'slide-230220180955.png'),
(2, 'Daftar', 1, 'Cara daftar 2', 'Begini cara yy kkkkkk', 'slide-230220180957.png');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id_job` int(5) NOT NULL,
  `id_cat` int(3) NOT NULL,
  `nm_job` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL,
  `responsibility` longtext NOT NULL,
  `requirement` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id_job`, `id_cat`, `nm_job`, `deskripsi`, `responsibility`, `requirement`) VALUES
(1, 1, 'Production Manager', 'As an SEO Specialist, you will explore the depth of website and its matrix. It\'s more than increasing inbound organic traffic and search result rank. You will build and develop strategies to create opportunities for Small Medium Enterprises to sell and market their products online and help them grow significantly through ', '<p>1. Satu ketuhanan</p>\r\n<p>2. Kemanusiaan yang adil</p>\r\n<p>3. Persatuan Indonesia</p>', '<p>1. Satu ketuhanan</p>\r\n<p>2. Kemanusiaan yang adil</p>\r\n<p>3. Persatuan Indonesia raya</p>'),
(2, 2, 'Transaction Officer', 'Are you a detailed person and able to build good communication with our users? Do you also possess good problem solving skills? If yes, we are waiting for you to join our team! As a Transaction Specialist, you will have an important role to process all transactions in Paypro', '<ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 40px 0px 65px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: \'Open Sans\', sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #333333;\">\r\n<li style=\"box-sizing: border-box; margin: 8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: disc !important; color: rgba(0, 0, 0, 0.54);\">Infiltrate fund verification from any banks that cooperate with Paypro.</li>\r\n<li style=\"box-sizing: border-box; margin: 8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: disc !important; color: rgba(0, 0, 0, 0.54);\">Follow up constraint payment.</li>\r\n<li style=\"box-sizing: border-box; margin: 8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: disc !important; color: rgba(0, 0, 0, 0.54);\">Process user\'s fund withdrawal</li>\r\n</ul>', '<ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 40px 0px 65px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: \'Open Sans\', sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #333333;\">\r\n<li style=\"box-sizing: border-box; margin: 8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: disc !important; color: rgba(0, 0, 0, 0.54);\">Candidate must possess at least a Diploma/Bachelor degree in any disciplines (Finance/Accounting/Banking/Tax/Management, or equivalent).</li>\r\n<li style=\"box-sizing: border-box; margin: 8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: disc !important; color: rgba(0, 0, 0, 0.54);\">Attention to details.</li>\r\n<li style=\"box-sizing: border-box; margin: 8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: disc !important; color: rgba(0, 0, 0, 0.54);\">Administration skills</li>\r\n<li style=\"box-sizing: border-box; margin: 8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: disc !important; color: rgba(0, 0, 0, 0.54);\">Maximum age 25 years old.</li>\r\n<li style=\"box-sizing: border-box; margin: 8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: disc !important; color: rgba(0, 0, 0, 0.54);\">Sociable, communicative, responsible, proactive, friendly, and having a good manner.</li>\r\n<li style=\"box-sizing: border-box; margin: 8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: disc !important; color: rgba(0, 0, 0, 0.54);\">Ready to be assigned on shifting work schedule (Day/Night).</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `id_merchant` int(5) NOT NULL,
  `kategori` varchar(35) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `lokasi` varchar(19) NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id_merchant`, `kategori`, `nama`, `lokasi`, `gambar`) VALUES
(1, 'Kecantikan', 'Belynda Spa ', 'jakarta', 'merch-010220181042.png'),
(2, 'Makanan & Minuman', 'All Fred', 'Jabodetabek', 'merch-010220181143.png'),
(3, 'Makanan & Minuman', 'Amor', 'Jabodetabek', 'merch-010220181145.png'),
(4, 'Makanan & Minuman', 'Aloha', 'Jakarta', 'merch-0102201811451.png'),
(5, 'Hiburan', 'Inul Vista', 'Jabodetabek', 'merch-010220181238.png');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(5) NOT NULL,
  `nama` varchar(22) NOT NULL,
  `ket` varchar(45) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `periode` varchar(40) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `nama`, `ket`, `gambar`, `periode`, `detail`) VALUES
(1, 'Pepperlunch', 'Cashback 20%', 'pro-010220181050.png', 'sekarang - 21 Februari 2018', ''),
(2, 'Inul Vista', 'Diskon 15% + cashback 25%', 'pro-010220181043.png', 'sekarang - 25 Februari 2018', ''),
(3, 'Mc Donald', 'Diskon 20%', 'pro-010220181213.png', 'sekarang - 21 Februari 2018', '<p style=\"box-sizing: inherit; margin: 0px 0px 0.22999rem; padding: 0.34001rem 0px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: 25px; font-family: gillsans; vertical-align: baseline;\"><span style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 800; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">TERMS AND CONDITIONS</span></p>\r\n<ol style=\"box-sizing: inherit; margin: 0px 0px 1.45999rem; padding: 0.54001rem 0px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1rem; line-height: 1.6rem; font-family: \'Open Sans\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline; list-style: none; counter-reset: ol 0; color: #666666;\">\r\n<li style=\"box-sizing: inherit; margin: 0px 0px 1rem 28px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: none; counter-increment: ol 1;\">\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.22999rem; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 25px; font-family: gillsans; vertical-align: baseline; color: #000000;\">1. Campaign applied to all PayPro App&rsquo;s users (New and Existing);</p>\r\n</li>\r\n<li style=\"box-sizing: inherit; margin: 0px 0px 1rem 28px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: none; counter-increment: ol 1;\">\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.22999rem; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 25px; font-family: gillsans; vertical-align: baseline; color: #000000;\">2. Promo valid from 13th November 2017 until 12th January 2018;</p>\r\n</li>\r\n<li style=\"box-sizing: inherit; margin: 0px 0px 1rem 28px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: none; counter-increment: ol 1;\">\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.22999rem; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 25px; font-family: gillsans; vertical-align: baseline; color: #000000;\">3. Free admin fee will be cashback directly to cashbalance PayPro;</p>\r\n</li>\r\n<li style=\"box-sizing: inherit; margin: 0px 0px 1rem 28px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: none; counter-increment: ol 1;\">\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.22999rem; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 25px; font-family: gillsans; vertical-align: baseline; color: #000000;\">4. Promo valid only in PayPro App, without minimum transaction;</p>\r\n</li>\r\n<li style=\"box-sizing: inherit; margin: 0px 0px 1rem 28px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: none; counter-increment: ol 1;\">\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.22999rem; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 25px; font-family: gillsans; vertical-align: baseline; color: #000000;\">5. Promo only applicable for prepaid pulsa purchase transactions for all denoms and providers ;</p>\r\n</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `level` varchar(17) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `no_telp`, `level`) VALUES
(1, 'marketing@paypro.id', 'admin', 'Staff Marketing', '087877777712', 'staff'),
(2, 'admin@paypro.id', '21232f297a57a5a743894a0e4a801fc3', 'Jimmy Febriadi', '087877777111', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `how`
--
ALTER TABLE `how`
  ADD PRIMARY KEY (`id_how`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id_merchant`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `how`
--
ALTER TABLE `how`
  MODIFY `id_how` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `id_merchant` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
