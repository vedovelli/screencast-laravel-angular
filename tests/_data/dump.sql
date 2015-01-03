# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.19-0ubuntu0.14.04.1)
# Database: spa_testing
# Generation Time: 2015-01-03 11:52:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_12_22_202028_create_users_table',1),
	('2014_12_26_104928_users_drop_deleted_at_column',1),
	('2015_01_02_155234_add_remember_token_to_users_table',2),
	('2015_01_02_211444_create_password_reminders_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_reminders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_reminders`;

CREATE TABLE `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `city`, `state`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(954,'Adam Bowman','abowmanqh','abowmanqh@bravesites.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Jackson','MS','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(955,'Ernest Franklin','efranklinqi','efranklinqi@usnews.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','New Orleans','LA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(956,'Earl Hall','ehallqj','ehallqj@umn.edu','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Milwaukee','WI','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(957,'Joan Washington','jwashingtonqk','jwashingtonqk@theglobeandmail.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Houston','TX','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(958,'Julia Elliott','jelliottql','jelliottql@shareasale.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Brockton','MA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(959,'Tammy Johnston','tjohnstonqm','tjohnstonqm@deviantart.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Albany','NY','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(960,'Linda Morales','lmoralesqn','lmoralesqn@wordpress.org','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Birmingham','AL','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(961,'Ashley Woods','awoodsqo','awoodsqo@moonfruit.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Santa Barbara','CA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(962,'Chris Ramirez','cramirezqp','cramirezqp@nymag.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','El Paso','TX','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(963,'Ralph Hunt','rhuntqq','rhuntqq@twitter.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Salt Lake City','UT','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(964,'Karen Austin','kaustinqr','kaustinqr@photobucket.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','New York City','NY','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(965,'William Morales','wmoralesqs','wmoralesqs@msn.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Fresno','CA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(966,'Jeffrey Moore','jmooreqt','jmooreqt@histats.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Dallas','TX','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(967,'Joe Kelley','jkelleyqu','jkelleyqu@over-blog.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Nashville','TN','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(968,'Cynthia Moreno','cmorenoqv','cmorenoqv@indiatimes.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','West Palm Beach','FL','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(969,'Thomas Walker','twalkerqw','twalkerqw@edublogs.org','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Cleveland','OH','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(970,'Judy Stanley','jstanleyqx','jstanleyqx@tinypic.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Charlotte','NC','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(971,'Edward Wallace','ewallaceqy','ewallaceqy@sina.com.cn','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Hamilton','OH','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(972,'Patrick Henry','phenryqz','phenryqz@goo.gl','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Kansas City','MO','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(973,'Lawrence Jordan','ljordanr0','ljordanr0@tripod.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Richmond','VA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(974,'Philip Mendoza','pmendozar1','pmendozar1@angelfire.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Montgomery','AL','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(975,'Sharon Tucker','stuckerr2','stuckerr2@dion.ne.jp','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','San Antonio','TX','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(976,'Fred Armstrong','farmstrongr3','farmstrongr3@opensource.org','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Lexington','KY','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(977,'Arthur Collins','acollinsr4','acollinsr4@soundcloud.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Monticello','MN','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(978,'Steve Arnold','sarnoldr5','sarnoldr5@google.co.uk','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','New Orleans','LA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(979,'Christine Barnes','cbarnesr6','cbarnesr6@senate.gov','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Boston','MA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(980,'Jacqueline Reid','jreidr7','jreidr7@imgur.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Elizabeth','NJ','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(981,'Joyce Greene','jgreener8','jgreener8@flavors.me','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Chicago','IL','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(982,'Anthony Morrison','amorrisonr9','amorrisonr9@army.mil','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Pensacola','FL','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(983,'Fred Burton','fburtonra','fburtonra@umich.edu','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Portland','OR','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(984,'Scott Fowler','sfowlerrb','sfowlerrb@altervista.org','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Denver','CO','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(985,'Eric Mason','emasonrc','emasonrc@topsy.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Seattle','WA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(986,'Larry Gonzalez','lgonzalezrd','lgonzalezrd@dailymail.co.uk','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Baton Rouge','LA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(987,'Rachel Crawford','rcrawfordre','rcrawfordre@icq.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','San Jose','CA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(988,'Jessica Knight','jknightrf','jknightrf@hc360.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Norwalk','CT','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(989,'Brenda Simpson','bsimpsonrg','bsimpsonrg@bloomberg.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Washington','DC','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(990,'David Phillips','dphillipsrh','dphillipsrh@creativecommons.org','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Pasadena','CA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(991,'Theresa Foster','tfosterri','tfosterri@google.co.uk','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Fort Worth','TX','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(992,'Thomas Spencer','tspencerrj','tspencerrj@qq.com','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Houston','TX','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(993,'Alan Green','agreenrk','agreenrk@opensource.org','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Baton Rouge','LA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(994,'Antonio Jacobs','ajacobsrl','ajacobsrl@g.co','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Kissimmee','FL','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(995,'Earl Clark','eclarkrm','eclarkrm@timesonline.co.uk','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Columbus','OH','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(996,'Roy Chavez','rchavezrn','rchavezrn@dyndns.org','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Wichita Falls','TX','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(997,'Virginia Black','vblackro','vblackro@simplemachines.org','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Wilkes Barre','PA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(998,'Howard Thomas','hthomasrp','hthomasrp@cpanel.net','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Lafayette','LA','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(999,'Jason Hill','jhillrq','jhillrq@geocities.jp','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Rochester','MN','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(1000,'Helen Spencer','hspencerrr','hspencerrr@gnu.org','$2y$10$tWCddo8I4c89pa8Ixzu2.O6x3NE7y76JdJTIey9IBM31vCq9ndHO6','Salt Lake City','UT','','2014-12-22 20:34:01','2014-12-22 20:34:01'),
	(1004,'Fabio Vedovelli','vedovelli','vedovelli@gmail.com','$2y$10$Jf5us3RpSLaXzZ1RN0FQceacbCMsCynh5IUGEYrS6aEtKO5JUBBdW','Santo André','SP','','2014-12-26 08:21:48','2014-12-26 08:21:48');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
