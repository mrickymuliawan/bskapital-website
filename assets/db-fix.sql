-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table bskapital.career
CREATE TABLE IF NOT EXISTS `career` (
  `career_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`career_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table bskapital.career: ~1 rows (approximately)
DELETE FROM `career`;
/*!40000 ALTER TABLE `career` DISABLE KEYS */;
INSERT INTO `career` (`career_id`, `title`, `slug`, `content`, `created_at`, `user_id`) VALUES
	(1, 'Junior Auditor', 'Junior-Auditor', '<h3>Junior Auditor</h3>\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, e</p>\r\n<p>nim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', '2018-01-14 20:22:43', 1);
/*!40000 ALTER TABLE `career` ENABLE KEYS */;


-- Dumping structure for table bskapital.news
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table bskapital.news: ~2 rows (approximately)
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`news_id`, `title`, `slug`, `content`, `created_at`, `image_name`, `user_id`) VALUES
	(6, 'gaada', 'gaada', '<p>gaada</p>', '2018-01-14 17:47:27', 'default-news.jpg', 1),
	(7, 'coba ahh', 'coba-ahh', '<p>haha hehe</p>', '2018-01-14 18:03:13', 'IMG_20170513_184131.jpg', 1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


-- Dumping structure for table bskapital.page
CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `position` enum('parent','child') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table bskapital.page: ~3 rows (approximately)
DELETE FROM `page`;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` (`page_id`, `title`, `slug`, `content`, `image_name`, `position`, `created_at`) VALUES
	(1, 'services', 'services', '', '', 'parent', '2018-01-14 21:15:59'),
	(2, 'about us', 'about-us', '', '', 'parent', '2018-01-14 21:16:21'),
	(3, 'contact us', 'contact-us', '', '', 'parent', '2018-01-14 21:16:38'),
	(4, 'our people', 'our-people', '', '', 'parent', '2018-01-14 21:30:42');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;


-- Dumping structure for table bskapital.people
CREATE TABLE IF NOT EXISTS `people` (
  `people_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  PRIMARY KEY (`people_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bskapital.people: ~0 rows (approximately)
DELETE FROM `people`;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;
/*!40000 ALTER TABLE `people` ENABLE KEYS */;


-- Dumping structure for table bskapital.regulation
CREATE TABLE IF NOT EXISTS `regulation` (
  `regulation_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`regulation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table bskapital.regulation: ~1 rows (approximately)
DELETE FROM `regulation`;
/*!40000 ALTER TABLE `regulation` DISABLE KEYS */;
INSERT INTO `regulation` (`regulation_id`, `title`, `slug`, `content`, `created_at`, `user_id`) VALUES
	(3, 'regulasi pertamas', 'regulasi-pertamas', '<p>contoh regulasi</p>\r\n<p>&nbsp;</p>', '2018-01-14 12:36:50', 18);
/*!40000 ALTER TABLE `regulation` ENABLE KEYS */;


-- Dumping structure for table bskapital.sub_page
CREATE TABLE IF NOT EXISTS `sub_page` (
  `sub_page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sub_page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table bskapital.sub_page: ~0 rows (approximately)
DELETE FROM `sub_page`;
/*!40000 ALTER TABLE `sub_page` DISABLE KEYS */;
INSERT INTO `sub_page` (`sub_page_id`, `page_id`, `title`, `slug`, `content`, `image_name`, `created_at`) VALUES
	(1, 1, 'tax advisory servies', 'tax-advisory-servies', '', '', '2018-01-14 00:00:00'),
	(2, 1, 'tax compliance service', 'tax-compliance-service', '', '', '2018-01-14 21:18:55'),
	(3, 1, 'audit and assurance', 'audit-and-assurance', '', '', '2018-01-14 21:18:59'),
	(4, 2, 'history', 'history', '', '', '2018-01-14 21:22:04'),
	(5, 2, 'vision and mission', 'vision-and-mission', '', '', '2018-01-14 21:26:08');
/*!40000 ALTER TABLE `sub_page` ENABLE KEYS */;


-- Dumping structure for table bskapital.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('administrator','author') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table bskapital.user: ~1 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role`, `created_at`) VALUES
	(1, 'Ricky', 'Muliawan', 'ricky@gmail.com', '5858d82361c8b546632762116eb449ca', 'administrator', '2018-01-14 12:43:44');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
