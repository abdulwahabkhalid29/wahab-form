-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for table
DROP DATABASE IF EXISTS `table`;
CREATE DATABASE IF NOT EXISTS `table` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `table`;

-- Dumping structure for table table.auths
DROP TABLE IF EXISTS `auths`;
CREATE TABLE IF NOT EXISTS `auths` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table table.auths: ~0 rows (approximately)
DELETE FROM `auths`;
/*!40000 ALTER TABLE `auths` DISABLE KEYS */;
/*!40000 ALTER TABLE `auths` ENABLE KEYS */;

-- Dumping structure for table table.blogs
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table table.blogs: ~2 rows (approximately)
DELETE FROM `blogs`;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `category_id`, `title`, `image`, `author_id`, `short_description`, `status`, `created_at`, `updated_at`, `long_description`) VALUES
	(1, '1', 'Best Websites To Watch Live Football', 'blog-1665187514.jpg', '2', 'Football is one of the best-known clubs in the world and more than 100 million people tune in to watch football games every weekend. Above, we have listed some of the best websites you can use to watch your favourite games.', 1, '2022-10-08 00:05:14', '2022-10-08 00:05:45', '<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">Other leagues in Europe such as the Bundesliga, Serie A, Ligue 1, Primeira Liga, and Eredivisie are shown on the website.</p>\r\n<ul style="box-sizing: border-box; margin: 10px 0px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: #444444; font-family: \'Titillium Web\', sans-serif;">\r\n<li style="margin: 0px 0px 0px 50px; padding: 5px 0px; border: 0px; vertical-align: baseline;"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">Live TV</strong></li>\r\n</ul>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">Live TV claims that they have more than 20 million people that visit its website to watch and stream football matches live.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">They are not like any major platform that has many users but poor service. They have a very responsive website that also shows bettors and ordinary fans football news and highlights.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">VPN is not needed to make use of their platform and their video quality is very good without much buffering.</p>\r\n<ul style="box-sizing: border-box; margin: 10px 0px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: #444444; font-family: \'Titillium Web\', sans-serif;">\r\n<li style="margin: 0px 0px 0px 50px; padding: 5px 0px; border: 0px; vertical-align: baseline;"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">Live Soccer TV</strong></li>\r\n</ul>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">Live Soccer TV is another website that is used by most people to stream their favourite football games online. This user-friendly website is not limited to games that are played on the club football level, they also show games that are played during international breaks.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">When you are watching matches on this website, you don&rsquo;t have to worry about the video resol8as they provide videos that are of high quality. Apart from the website they provide to users, people can also make use of their app to watch games.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">However, it can be hard for you to watch football matches especially if you are at home or in a place not convenient enough to watch a game.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">Below, we will show you some of the best websites you can use to watch top-flight football in Europe.</p>\r\n<ul style="box-sizing: border-box; margin: 10px 0px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: #444444; font-family: \'Titillium Web\', sans-serif;">\r\n<li style="margin: 0px 0px 0px 50px; padding: 5px 0px; border: 0px; vertical-align: baseline;"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">Big Free Bets</strong></li>\r\n</ul>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">Big Free Bets is one of the top websites that you can make use of to&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; transition: color 0.25s ease 0s; color: #296c98;" href="https://www.bigfreebet.com/football-live-streams">watch live football</a>&nbsp;in your preferred leagues in Europe and many other parts of the world.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">Those who are La Liga fans will get the chance to watch their favourite teams such as Barcelona and Real Madrid play club football.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">The Premier League is not left out as the website offers the streaming of all the matches that are played by all the clubs in the Premier League. These two leagues are not the only leagues whose games are shown on this website.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">Football is arguably the most popular sport in the whole world, and many fans watch football matches on a daily basis.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-size: 1.15rem; vertical-align: baseline; color: #444444; line-height: 1.5; font-family: \'Titillium Web\', sans-serif;">For those who do not fill the football stadiums, always try to follow up on games that are being played by their favourite clubs and players.</p>'),
	(2, '2', 'Valanga nel nord del Pakistan: muore un alpinista austriaco. Due i feriti', 'blog-1665189494.jpg', '3', 'ALPINISMO E SPEDIZIONI · HIKING E TREKKING · VERTICAL · WALKING · RESTO DEL MONDO\r\n\r\nValanga nel nord del Pakistan: muore un alpinista austriaco. Due i feriti', 1, '2022-10-08 00:38:14', '2022-10-08 00:38:29', '<h2 style="box-sizing: border-box; border: 0px; margin: 15px 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 22px; line-height: 1.2em; font-family: Raleway; letter-spacing: -0.02em;">I tre stavano stavano scalando una vetta senza nome nella valle di Shimshal</h2>\r\n<p style="box-sizing: border-box; border: 0px; margin: 0px 0px 15px; padding: 0px; font-size: 14.3px; line-height: 1.75; color: #666666; font-family: \'Droid Sans\';">Un alpinista austriaco &egrave; morto e altri due sono rimasti gravemente feriti, dopo essere stati travolti da una valanga mentre tentavano di scalare una vetta inviolata della valle di Shimshal, nell&rsquo;Hunza, nel nord del Pakistan.</p>\r\n<p style="box-sizing: border-box; border: 0px; margin: 0px 0px 15px; padding: 0px; font-size: 14.3px; line-height: 1.75; color: #666666; font-family: \'Droid Sans\';">Secondo quanto reso noto da Asghar Ali Porik, gli austriaci&nbsp;<strong style="box-sizing: border-box; border: 0px; margin: 0px; padding: 0px;">Elias</strong>&nbsp;<strong style="box-sizing: border-box; border: 0px; margin: 0px; padding: 0px;">Feineler&nbsp;</strong>(28 anni) e&nbsp;<strong style="box-sizing: border-box; border: 0px; margin: 0px; padding: 0px;">Ramona</strong>&nbsp;<strong style="box-sizing: border-box; border: 0px; margin: 0px; padding: 0px;">Kerber (25 anni)&nbsp;</strong>&nbsp;insieme alla guida pakistana<strong style="box-sizing: border-box; border: 0px; margin: 0px; padding: 0px;">&nbsp;Shah Dualat,</strong>&nbsp;avevano iniziato a scalare una vetta senza nome della valle di Shimshal alle 6 del mattino di gioved&igrave; scorso. Durante la salita, alle 9.30 (ora locale), sono stati travolti da una valanga vicino al campo base, a circa 5.000 metri di altitudine. Elias Feineler &egrave; morto mentre Kerber e la guida Dualat sono rimasti gravemente feriti.</p>\r\n<p style="box-sizing: border-box; border: 0px; margin: 0px 0px 15px; padding: 0px; font-size: 14.3px; line-height: 1.75; color: #666666; font-family: \'Droid Sans\';">Con gli alpinisti austriaci c&rsquo;erano anche quattro portatori locali, che sono rientrati al villaggio di Shimshal trasportando i loro beni.</p>\r\n<p style="box-sizing: border-box; border: 0px; margin: 0px 0px 15px; padding: 0px; font-size: 14.3px; line-height: 1.75; color: #666666; font-family: \'Droid Sans\';">Ventidue volontari pakistani hanno soccorso i feriti e li hanno condotti al campo base. Un elicottero dell&rsquo;Esercito dovrebbe prelevarli nella giornata di oggi, tempo permettendo.</p>\r\n<p style="box-sizing: border-box; border: 0px; margin: 0px 0px 15px; padding: 0px; font-size: 14.3px; line-height: 1.75; color: #666666; font-family: \'Droid Sans\';">Il 28 settembre i due alpinisti austriaci erano partiti per il trekking Gojaraf-Shimshal. Dovevano rientrare il 4 ottobre. Tuttavia, il programma &egrave; stato modificato a causa del maltempo e i due, con la loro guida locale, hanno iniziato a scalare la vetta gioved&igrave;.</p>');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table table.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table table.categories: ~2 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Football', 1, '2022-10-07 23:59:36', '2022-10-07 23:59:36'),
	(2, 'Mountain', 0, '2022-10-07 23:59:44', '2022-10-07 23:59:44'),
	(3, 'Universe', 1, '2022-10-07 23:59:55', '2022-10-07 23:59:55');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table table.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table table.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table table.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table table.migrations: ~10 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_09_16_225954_create_auths_table', 1),
	(6, '2022_09_16_230312_add_role_to_users_table', 1),
	(7, '2022_09_22_220329_create_roles_table', 1),
	(8, '2022_09_23_234453_create_categories_table', 1),
	(9, '2022_09_30_020037_create_blogs_table', 1),
	(10, '2022_10_07_234740_add_long_description_to_blogs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table table.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table table.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table table.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table table.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table table.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table table.roles: ~2 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', '2022-10-08 13:57:56', '2022-10-08 13:57:56'),
	(2, 'Reader', '2022-10-08 13:58:06', '2022-10-08 13:58:07'),
	(3, 'Author', '2022-10-08 13:58:16', '2022-10-08 13:58:17');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table table.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` tinyint(4) NOT NULL,
  `authorimg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table table.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `authorimg`, `about`, `facebook`, `twitter`, `google`, `linkin`) VALUES
	(1, 'fahad', 'mfahadkhalid5002@gmail.com', NULL, '$2y$10$xiQz0hov0wGzRP3GCtqE8.DZEFFAp5k8zlbJ3gF5vel4Y2f/oPWzS', NULL, '2022-10-07 23:57:35', '2022-10-07 23:57:35', 1, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'Qasim', 'abdulwahab29@gmail.com', NULL, '$2y$10$wyeM934kTM0oLGQ3YqzoSuM070ux6bJ3.D.pgtodCFmW0BMZFI6my', NULL, '2022-10-07 23:58:47', '2022-10-08 06:36:36', 3, NULL, NULL, 'facebook.com', NULL, NULL, NULL),
	(3, 'Junaid', 'junaid@gmail.com', NULL, '$2y$10$ZRRX7omK5Z7sooOuwl8UnuH2zi2RAkxZclLSw4IICsNWdMfGfJdGe', NULL, '2022-10-08 00:36:35', '2022-10-08 00:36:35', 3, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
