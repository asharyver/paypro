-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2018 at 11:41 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
(2, 'daftar', 1, 'Cara daftar 2', 'Begini cara yy kkkkkk', 'slide-230220180957.png');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `author` int(10) UNSIGNED NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `descriptions` text COLLATE utf8_unicode_ci NOT NULL,
  `time` int(15) UNSIGNED NOT NULL,
  `link` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('post','featured','','') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `thumbnail`, `author`, `category`, `descriptions`, `time`, `link`, `type`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Ea laudantium', 'code-wallpaper-38.jpg', 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vero necessitatibus aliquid ipsum ipsa deserunt, veritatis reiciendis dolor excepturi maiores delectus nobis, saepe fugiat iure quidem eos consequuntur corporis possimus tempora odit? Reprehenderit dolore ipsum sapiente exercitationem, blanditiis quisquam velit voluptatibus, ex, alias tempora nulla assumenda asperiores nobis animi inventore esse omnis officiis? Iste odit minus error quos asperiores optio, amet, voluptatibus odio quas ex corporis delectus ab ipsam officia accusamus numquam quisquam nisi atque quidem. Eos, nesciunt! Impedit atque in, maiores quaerat magnam officiis quidem nobis iusto fugit, unde accusamus quas, ipsa a exercitationem. Qui voluptatem, molestiae hic consequatur earum dignissimos voluptates illum praesentium tempora maiores soluta sit facere, corporis quam totam. Fugit nihil odio odit error, adipisci, fugiat asperiores aspernatur, quos quisquam perspiciatis voluptas quod id. Officiis non voluptatem, quis est aliquid! Facere quaerat est repudiandae quas aperiam ipsam reiciendis recusandae, molestias adipisci maxime, similique iusto tempora velit impedit deserunt commodi ipsum aliquam, ea eius at minima quam accusantium! Enim ullam quidem sequi cum error ut quas repellat cumque consectetur natus delectus est temporibus vel, tempora dicta ea voluptate. Officiis aliquam fugit recusandae enim labore fugiat debitis! Aliquid distinctio quae sint ipsa ipsum nulla ipsam ducimus labore quos fuga, possimus ratione, minima consequuntur deleniti rem odio, itaque eveniet id voluptates numquam obcaecati! Minus debitis ad dolorum corporis hic harum in assumenda deleniti neque beatae quaerat architecto laboriosam inventore, voluptate, quos libero ipsum et. Qui saepe rerum odio nostrum, consequatur doloremque culpa tempora eum. Delectus in tempore iure blanditiis rerum, laborum, dicta eum aliquid adipisci unde placeat eaque inventore earum nihil, excepturi! Quam dicta consequatur voluptates iure accusantium ratione porro culpa ullam, ea ab. Ullam dolorem, maiores soluta nesciunt quisquam vero, minima reprehenderit officiis ea praesentium fugiat illo numquam possimus, neque alias quam quod dicta id quaerat quos debitis inventore. Voluptatem earum ratione molestiae officia commodi debitis, ea est corrupti, cupiditate maxime voluptas, labore libero incidunt quaerat numquam iure nihil, facilis ut tenetur sunt? Minus dolore sapiente quaerat minima fugit aliquam architecto facilis quod vel, nostrum recusandae placeat iure, aut cumque doloremque ducimus fugiat tempore optio pariatur amet magni! Ullam explicabo, libero, id repudiandae maiores minus accusamus veniam, expedita beatae illo quae. Nostrum earum quos nesciunt, id cum dignissimos pariatur deserunt voluptatibus officiis. Officiis soluta atque voluptates quo, cum voluptas. Blanditiis a, fugit officia porro enim necessitatibus laboriosam, corrupti hic aut tempore inventore, recusandae unde saepe omnis velit accusantium? Et natus expedita sit accusantium iure sunt doloribus nostrum consequatur, aliquid perferendis maiores fugiat dignissimos velit, libero molestias enim unde reiciendis commodi omnis blanditiis accusamus mollitia delectus recusandae. Beatae est facere dolorem temporibus repellendus perferendis sunt qui delectus tempora mollitia consequuntur illo provident atque quo quae veniam libero reiciendis minus sequi commodi, amet, repudiandae quod esse. Eveniet ducimus fugiat illo et ad ab nemo culpa recusandae, impedit qui! Labore itaque vitae laboriosam eos rem assumenda, iste, nesciunt, aliquid aperiam fugiat quis distinctio tenetur accusantium in. Eos, dolor, nostrum. Quis maiores autem qui tempore reprehenderit molestiae deserunt itaque cumque commodi, enim voluptate iure sapiente architecto hic incidunt sunt nihil illum dignissimos eos omnis voluptatem. Reiciendis laboriosam accusamus commodi magni aut non cumque nisi saepe quis error modi suscipit voluptate eum beatae aspernatur, ullam quibusdam temporibus, dolorum optio, esse! Beatae eum dolores, aliquid provident atque blanditiis temporibus rem suscipit corrupti dolorem ex quasi reiciendis facilis autem necessitatibus officiis recusandae, mollitia quaerat quod reprehenderit. Earum cupiditate cumque debitis facere veritatis, laborum facilis culpa ducimus doloribus atque sunt necessitatibus voluptatum itaque aspernatur, quaerat sit fugiat deleniti consectetur, autem! Earum tempora modi a, et pariatur ratione quibusdam distinctio debitis vitae voluptatum aliquam alias totam quae architecto laboriosam minima dolorem. Optio necessitatibus ad placeat porro amet eum voluptates ducimus est rem excepturi debitis itaque a dolore unde perferendis in odio, odit, commodi molestias modi, delectus esse quas iste! Atque quibusdam alias nisi corporis laborum minima laudantium, laboriosam repellendus ea officiis aperiam nobis maxime, possimus dignissimos aut eum officia id aspernatur iure maiores aliquam quaerat? Tenetur, quibusdam, similique magni accusamus consectetur aliquam impedit minus aperiam esse deleniti suscipit quisquam libero eligendi recusandae, alias placeat perferendis officia temporibus reprehenderit sapiente repellendus asperiores ducimus! Odit deleniti quia eligendi veniam laudantium consectetur iste dolore labore! Maxime rem, consectetur perspiciatis amet cumque illo aperiam ex eaque earum, doloremque, iste doloribus veniam voluptate repellendus. Ratione veritatis vitae exercitationem vero eos inventore harum excepturi necessitatibus voluptatum nam modi, nihil tempore rem dolores autem magnam reprehenderit expedita, doloremque! Illum maxime animi natus nulla nam eos mollitia, id corporis, autem reprehenderit placeat illo odio asperiores modi fugit sapiente facere magni distinctio consectetur necessitatibus exercitationem error officia et repellat recusandae! Ipsam maxime fugit, tenetur veniam mollitia tempore excepturi corrupti nobis similique magnam impedit quis rem iusto obcaecati? Nesciunt ipsam architecto perferendis tempore iusto quasi commodi nam voluptate eum! Alias enim voluptate odio rem minus consequuntur quo ipsa, neque voluptatum distinctio in ratione, eligendi nostrum sequi, vero impedit maiores laudantium explicabo porro excepturi quia delectus. Modi ipsum minima numquam perspiciatis libero, obcaecati placeat consequuntur assumenda inventore, illum molestiae enim culpa qui? Perspiciatis a fugiat laboriosam nemo rem, animi sequi. Quaerat quas, fugit quis molestias iusto inventore ea enim, repudiandae possimus eaque rem id vitae culpa voluptatum reprehenderit pariatur nostrum in iste quos, distinctio quisquam ipsa mollitia cum nisi. Ad voluptate eligendi molestiae, distinctio velit iusto quasi quos perferendis possimus quod quam omnis, aspernatur, animi non rem voluptatem recusandae sapiente sed. Quaerat minima molestias aspernatur sunt magni dolore expedita facere cupiditate excepturi eligendi neque, quis repellat error autem, illum voluptatum nam ipsa officiis ad quos voluptates labore inventore voluptatem natus? Quidem vel dolores rerum rem debitis sint amet molestias recusandae sapiente accusantium cum soluta, quasi odit fugit itaque, cumque obcaecati! Provident ullam vitae, tempore recusandae laboriosam voluptatibus, fuga similique quos earum eius, ipsa in accusantium cum eos totam distinctio repudiandae asperiores tenetur! Dicta, repellat dolorum assumenda quas sit eligendi perspiciatis nisi quaerat magnam exercitationem iste ea voluptatem fuga neque voluptas dolore, voluptatum dolores sed pariatur saepe expedita. At mollitia amet cum. Dolore ratione tenetur ex. Explicabo cum praesentium, qui nemo sed nulla, placeat facilis deleniti quia consequuntur harum soluta atque quod natus, facere ipsum. Illum aliquid at quisquam consequuntur animi eaque ipsa?', 1520152715, 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-ea-laudantium', 'post');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `position` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(10) UNSIGNED NOT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`cat_id`, `position`, `name`, `link`, `time`, `parent`) VALUES
(1, 3, 'Tips & Tricks', 'tips-tricks', 1520154104, NULL),
(2, 2, 'Seputar PayPro', 'seputar-paypro', 1520154104, NULL),
(3, 1, 'Topik', 'topik', 1520154104, NULL),
(4, 0, 'Sub Topik', 'sub-topik', 1520154104, 3);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`cat_id`);

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
