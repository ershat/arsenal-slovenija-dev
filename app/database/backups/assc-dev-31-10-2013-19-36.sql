-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table arsenal.slovenija.gallery
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `folder` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table arsenal.slovenija.gallery: ~70 rows (approximately)
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
REPLACE INTO `gallery` (`id`, `folder`, `filename`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
	(7, '/images/gallery/2013/10/31', 'gun__1301406773_rocastle01.jpg', 1437, 'Backend\\Models\\Post', '2013-10-31 18:02:03', '2013-10-31 18:02:03'),
	(8, '/images/gallery/2013/10/31', 'gun__1301406785_rocastle02.jpg', 1437, 'Backend\\Models\\Post', '2013-10-31 18:02:03', '2013-10-31 18:02:03'),
	(9, '/images/gallery/2013/10/31', 'gun__1301406796_rocastle03.jpg', 1437, 'Backend\\Models\\Post', '2013-10-31 18:02:04', '2013-10-31 18:02:04'),
	(10, '/images/gallery/2013/10/31', 'gun__1301406807_rocastle04.jpg', 1437, 'Backend\\Models\\Post', '2013-10-31 18:02:05', '2013-10-31 18:02:05'),
	(11, '/images/gallery/2013/10/31', 'gun__1301406821_rocastle05.jpg', 1437, 'Backend\\Models\\Post', '2013-10-31 18:02:05', '2013-10-31 18:02:05'),
	(12, '/images/gallery/2013/10/31', 'gun__1301406842_rocastle07.jpg', 1437, 'Backend\\Models\\Post', '2013-10-31 18:02:06', '2013-10-31 18:02:06'),
	(13, '/images/gallery/2013/10/31', 'gun__1301406945_rocastle10.jpg', 1437, 'Backend\\Models\\Post', '2013-10-31 18:02:06', '2013-10-31 18:02:06'),
	(14, '/images/gallery/2013/10/31', 'gun__1301406982_rocastle12.jpg', 1437, 'Backend\\Models\\Post', '2013-10-31 18:02:07', '2013-10-31 18:02:07'),
	(15, '/images/gallery/2013/10/31', 'gun__1301407011_rocastle15.jpg', 1437, 'Backend\\Models\\Post', '2013-10-31 18:02:08', '2013-10-31 18:02:08'),
	(16, '/images/gallery/2013/10/31', 'arsenal_tottnhm.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:47', '2013-10-31 18:24:47'),
	(17, '/images/gallery/2013/10/31', 'arsenal_tottnhm1.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:47', '2013-10-31 18:24:47'),
	(18, '/images/gallery/2013/10/31', 'arsenal_tottnhm2.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:48', '2013-10-31 18:24:48'),
	(19, '/images/gallery/2013/10/31', 'arsenal_tottnhm3.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:48', '2013-10-31 18:24:48'),
	(20, '/images/gallery/2013/10/31', 'arsenal_tottnhm4.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:49', '2013-10-31 18:24:49'),
	(21, '/images/gallery/2013/10/31', 'arsenal_tottnhm5.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:49', '2013-10-31 18:24:49'),
	(22, '/images/gallery/2013/10/31', 'arsenal_tottnhm6.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:49', '2013-10-31 18:24:49'),
	(23, '/images/gallery/2013/10/31', 'arsenal_tottnhm7.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:50', '2013-10-31 18:24:50'),
	(24, '/images/gallery/2013/10/31', 'arsenal_tottnhm8.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:50', '2013-10-31 18:24:50'),
	(25, '/images/gallery/2013/10/31', 'arsenal_tottnhm9.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:51', '2013-10-31 18:24:51'),
	(26, '/images/gallery/2013/10/31', 'arsenal_tottnhm10.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:51', '2013-10-31 18:24:51'),
	(27, '/images/gallery/2013/10/31', 'arsenal_tottnhm11.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:52', '2013-10-31 18:24:52'),
	(28, '/images/gallery/2013/10/31', 'arsenal_tottnhm13.jpg', 1468, 'Backend\\Models\\Post', '2013-10-31 18:24:52', '2013-10-31 18:24:52'),
	(29, '/images/gallery/2013/10/31', '29453_1437735354164_1556419716_31136323_346987_n.jpg', 1469, 'Backend\\Models\\Post', '2013-10-31 18:26:26', '2013-10-31 18:26:26'),
	(30, '/images/gallery/2013/10/31', '29453_1437735634171_1556419716_31136326_2704131_n.jpg', 1469, 'Backend\\Models\\Post', '2013-10-31 18:26:26', '2013-10-31 18:26:26'),
	(31, '/images/gallery/2013/10/31', '29453_1437735754174_1556419716_31136327_626511_n.jpg', 1469, 'Backend\\Models\\Post', '2013-10-31 18:26:27', '2013-10-31 18:26:27'),
	(32, '/images/gallery/2013/10/31', '29453_1437735954179_1556419716_31136328_6622598_n.jpg', 1469, 'Backend\\Models\\Post', '2013-10-31 18:26:28', '2013-10-31 18:26:28'),
	(33, '/images/gallery/2013/10/31', '29453_1437765074907_1556419716_31136359_951270_n.jpg', 1469, 'Backend\\Models\\Post', '2013-10-31 18:26:28', '2013-10-31 18:26:28'),
	(34, '/images/gallery/2013/10/31', '29453_1437780715298_1556419716_31136378_893831_n.jpg', 1469, 'Backend\\Models\\Post', '2013-10-31 18:26:29', '2013-10-31 18:26:29'),
	(35, '/images/gallery/2013/10/31', '29453_1437796755699_1556419716_31136409_7046420_n.jpg', 1469, 'Backend\\Models\\Post', '2013-10-31 18:26:29', '2013-10-31 18:26:29'),
	(36, '/images/gallery/2013/10/31', '29453_1437877077707_1556419716_31136620_7629015_n.jpg', 1469, 'Backend\\Models\\Post', '2013-10-31 18:26:39', '2013-10-31 18:26:39'),
	(37, '/images/gallery/2013/10/31', '01.jpg', 1473, 'Backend\\Models\\Post', '2013-10-31 18:28:25', '2013-10-31 18:28:25'),
	(38, '/images/gallery/2013/10/31', '03.jpg', 1473, 'Backend\\Models\\Post', '2013-10-31 18:28:26', '2013-10-31 18:28:26'),
	(39, '/images/gallery/2013/10/31', '04.jpg', 1473, 'Backend\\Models\\Post', '2013-10-31 18:28:26', '2013-10-31 18:28:26'),
	(40, '/images/gallery/2013/10/31', '05.jpg', 1473, 'Backend\\Models\\Post', '2013-10-31 18:28:27', '2013-10-31 18:28:27'),
	(41, '/images/gallery/2013/10/31', '08.jpg', 1473, 'Backend\\Models\\Post', '2013-10-31 18:28:28', '2013-10-31 18:28:28'),
	(42, '/images/gallery/2013/10/31', '09.jpg', 1473, 'Backend\\Models\\Post', '2013-10-31 18:28:28', '2013-10-31 18:28:28'),
	(43, '/images/gallery/2013/10/31', '12.jpg', 1473, 'Backend\\Models\\Post', '2013-10-31 18:28:29', '2013-10-31 18:28:29'),
	(44, '/images/gallery/2013/10/31', '13.jpg', 1473, 'Backend\\Models\\Post', '2013-10-31 18:28:29', '2013-10-31 18:28:29'),
	(45, '/images/gallery/2013/10/31', '17.jpg', 1473, 'Backend\\Models\\Post', '2013-10-31 18:28:30', '2013-10-31 18:28:30'),
	(46, '/images/gallery/2013/10/31', '17966_478436075485_530180485_11183232_4169618_n.jpg', 1477, 'Backend\\Models\\Post', '2013-10-31 18:30:11', '2013-10-31 18:30:11'),
	(47, '/images/gallery/2013/10/31', '17966_478436105485_530180485_11183234_1233616_n.jpg', 1477, 'Backend\\Models\\Post', '2013-10-31 18:30:12', '2013-10-31 18:30:12'),
	(48, '/images/gallery/2013/10/31', '17966_478436235485_530180485_11183248_3561827_n.jpg', 1477, 'Backend\\Models\\Post', '2013-10-31 18:30:12', '2013-10-31 18:30:12'),
	(49, '/images/gallery/2013/10/31', '17966_478436345485_530180485_11183259_6325218_n.jpg', 1477, 'Backend\\Models\\Post', '2013-10-31 18:30:13', '2013-10-31 18:30:13'),
	(50, '/images/gallery/2013/10/31', '17966_478436355485_530180485_11183260_1471433_n.jpg', 1477, 'Backend\\Models\\Post', '2013-10-31 18:30:13', '2013-10-31 18:30:13'),
	(51, '/images/gallery/2013/10/31', '17966_478436440485_530180485_11183268_5187354_n.jpg', 1477, 'Backend\\Models\\Post', '2013-10-31 18:30:14', '2013-10-31 18:30:14'),
	(52, '/images/gallery/2013/10/31', 'P1060804.jpg', 1476, 'Backend\\Models\\Post', '2013-10-31 18:31:22', '2013-10-31 18:31:22'),
	(53, '/images/gallery/2013/10/31', 'P1060854.jpg', 1476, 'Backend\\Models\\Post', '2013-10-31 18:31:23', '2013-10-31 18:31:23'),
	(54, '/images/gallery/2013/10/31', 'P1060866.jpg', 1476, 'Backend\\Models\\Post', '2013-10-31 18:31:23', '2013-10-31 18:31:23'),
	(55, '/images/gallery/2013/10/31', 'P1060891.jpg', 1476, 'Backend\\Models\\Post', '2013-10-31 18:31:24', '2013-10-31 18:31:24'),
	(56, '/images/gallery/2013/10/31', '6414_1177756519281_1089161317_550656_4183447_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:46', '2013-10-31 18:32:46'),
	(57, '/images/gallery/2013/10/31', '6414_1177756679285_1089161317_550660_3708176_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:46', '2013-10-31 18:32:46'),
	(58, '/images/gallery/2013/10/31', '6414_1177756719286_1089161317_550661_6674596_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:47', '2013-10-31 18:32:47'),
	(59, '/images/gallery/2013/10/31', '6414_1177756919291_1089161317_550666_8305088_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:48', '2013-10-31 18:32:48'),
	(60, '/images/gallery/2013/10/31', '6414_1177757159297_1089161317_550672_4945459_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:48', '2013-10-31 18:32:48'),
	(61, '/images/gallery/2013/10/31', '6414_1177757439304_1089161317_550678_944704_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:49', '2013-10-31 18:32:49'),
	(62, '/images/gallery/2013/10/31', '6414_1177757519306_1089161317_550680_6661605_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:49', '2013-10-31 18:32:49'),
	(63, '/images/gallery/2013/10/31', '6414_1177757679310_1089161317_550684_774972_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:50', '2013-10-31 18:32:50'),
	(64, '/images/gallery/2013/10/31', '6414_1177758959342_1089161317_550715_3509005_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:50', '2013-10-31 18:32:50'),
	(65, '/images/gallery/2013/10/31', '6414_1177759119346_1089161317_550719_4926533_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:51', '2013-10-31 18:32:51'),
	(66, '/images/gallery/2013/10/31', '6414_1177759199348_1089161317_550721_7808352_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:51', '2013-10-31 18:32:51'),
	(67, '/images/gallery/2013/10/31', '6414_1177759439354_1089161317_550727_5890459_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:52', '2013-10-31 18:32:52'),
	(68, '/images/gallery/2013/10/31', '14737_101657999861831_100000528934898_45182_1669093_n.jpg', 1478, 'Backend\\Models\\Post', '2013-10-31 18:32:52', '2013-10-31 18:32:52'),
	(69, '/images/gallery/2013/10/31', 'arsenal_chelsea.jpg', 1479, 'Backend\\Models\\Post', '2013-10-31 18:35:33', '2013-10-31 18:35:33'),
	(70, '/images/gallery/2013/10/31', 'arsenal_chelsea1.jpg', 1479, 'Backend\\Models\\Post', '2013-10-31 18:35:33', '2013-10-31 18:35:33'),
	(71, '/images/gallery/2013/10/31', 'arsenal_chelsea2.jpg', 1479, 'Backend\\Models\\Post', '2013-10-31 18:35:34', '2013-10-31 18:35:34'),
	(72, '/images/gallery/2013/10/31', 'arsenal_chelsea3.jpg', 1479, 'Backend\\Models\\Post', '2013-10-31 18:35:35', '2013-10-31 18:35:35'),
	(73, '/images/gallery/2013/10/31', 'arsenal_chelsea4.jpg', 1479, 'Backend\\Models\\Post', '2013-10-31 18:35:35', '2013-10-31 18:35:35'),
	(74, '/images/gallery/2013/10/31', 'arsenal_chelsea6.jpg', 1479, 'Backend\\Models\\Post', '2013-10-31 18:35:35', '2013-10-31 18:35:35'),
	(75, '/images/gallery/2013/10/31', 'arsenal_chelsea8.jpg', 1479, 'Backend\\Models\\Post', '2013-10-31 18:35:36', '2013-10-31 18:35:36'),
	(76, '/images/gallery/2013/10/31', 'arsenal_chelsea9.jpg', 1479, 'Backend\\Models\\Post', '2013-10-31 18:35:36', '2013-10-31 18:35:36');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
