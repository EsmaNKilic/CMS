# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.16-MariaDB)
# Database: cms
# Generation Time: 2018-02-13 13:51:07 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table brands
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brands`;

CREATE TABLE `brands` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT '',
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT '',
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;

INSERT INTO `brands` (`id`, `title`, `img_url`, `rank`, `isActive`, `createdAt`)
VALUES
	(4,'Dikeyeksen','portfolio-5.jpg',0,1,'2017-12-29 08:04:45'),
	(5,'Philips','philips.png',0,1,'2018-02-12 15:09:45'),
	(6,'Dikeyeksen','portfolio-5.jpg',0,1,'2017-12-29 08:04:45'),
	(7,'Dikeyeksen','portfolio-5.jpg',0,1,'2017-12-29 08:04:45'),
	(8,'Philips','philips.png',0,1,'2018-02-12 15:09:45'),
	(9,'Philips','philips.png',0,1,'2018-02-12 15:09:45');

/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table courses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;

INSERT INTO `courses` (`id`, `url`, `title`, `description`, `img_url`, `event_date`, `rank`, `isActive`, `createdAt`)
VALUES
	(2,'codeigniter-4-egitimi','Codeigniter 4 E??itimi','<p>Bu e??itimde codeigniter ile ilgili bir??ok kavram?? elden ge??irece??iz..</p>','videosinif-proje.png','2018-02-24 12:00:00',0,1,'2017-12-29 00:41:16'),
	(3,'amazon-web-servisi-egitimi','Amazon Web Servisi E??itimi','<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500\'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960\'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k yaz??l??mlar?? ile pop??ler olmu??tur.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Yayg??n inanc??n tersine, Lorem Ipsum rastgele s??zc??klerden olu??maz. K??kleri M.??. 45 tarihinden bu yana klasik Latin edebiyat??na kadar uzanan 2000 y??ll??k bir ge??mi??i vard??r. Virginia\'daki Hampden-Sydney College\'dan Latince profes??r?? Richard McClintock, bir Lorem Ipsum pasaj??nda ge??en ve anla????lmas?? en g???? s??zc??klerden biri olan \'consectetur\' s??zc??????n??n klasik edebiyattaki ??rneklerini inc</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum pasajlar??n??n bir??ok ??e??itlemesi vard??r. Ancak bunlar??n b??y??k bir ??o??unlu??u mizah kat??larak veya rastgele s??zc??kler eklenerek de??i??tirilmi??lerdir. E??er bir Lorem Ipsum pasaj?? kullanacaksan??z, metin aralar??na utand??r??c?? s??zc??kler gizlenmedi??inden emin olman??z gerekir. ??nternet\'teki t??m Lorem Ipsum ??rete??leri ??nceden belirlenmi?? metin bloklar??n?? yineler. Bu da, bu ??reteci ??nternet ??zerindeki ger??ek Lorem Ipsum ??reteci yapar. Bu ??rete??, 200\'den fazla Latince s??zc??k ve onlara ait c??mle yap??lar??n?? i??eren bir s??zl??k kullan??r. Bu nedenle, ??retilen Lorem Ipsum metinleri yinelemelerden,</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span><br></p>','portfolio-6.jpg','2018-02-08 00:00:00',0,1,'2018-02-05 21:19:34'),
	(4,'react-native-egitimi','React Native E??itimi','<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Yinelenen bir sayfa i??eri??inin okuyucunun dikkatini da????tt?????? bilinen bir ger??ektir. Lorem Ipsum kullanman??n amac??, s??rekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya k??yasla daha dengeli bir harf da????l??m?? sa??layarak okunurlu??u art??rmas??d??r. ??u anda bir??ok masa??st?? yay??nc??l??k paketi ve web sayfa d??zenleyicisi, varsay??lan m??g??r metinler olarak Lorem Ipsum kullanmaktad??r. Ayr??ca arama motorlar??nda \'lorem ipsum\' anahtar s??zc??kleri ile arama yap??ld??????nda hen??z tasar??m a??amas??nda olan ??ok say??da site listelenir. Y??llar i??inde, bazen kazara, bazen bilin??li olarak (??rne??in mizah kat??larak), ??e??itli s??r??mleri geli??tirilmi??tir.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Yinelenen bir sayfa i??eri??inin okuyucunun dikkatini da????tt?????? bilinen bir ger??ektir. Lorem Ipsum kullanman??n amac??, s??rekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya k??yasla daha dengeli bir harf da????l??m?? sa??layarak okunurlu??u art??rmas??d??r. ??u anda bir??ok masa??st?? yay??nc??l??k paketi ve web sayfa d??zenleyicisi, varsay??lan m??g??r metinler olarak Lorem Ipsum kullanmaktad??r. Ayr??ca arama motorlar??nda \'lorem ipsum\' anahtar s??zc??kleri ile arama yap??ld??????nda hen??z tasar??m a??amas??nda olan ??ok say??da site listelenir. Y??llar i??inde, bazen kazara, bazen bilin??li olarak (??rne??in mizah kat??larak), ??e??itli s??r??mleri geli??tirilmi??tir.</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span><br></p>','portfolio-3.jpg','2018-02-16 00:00:00',0,1,'2018-02-05 21:20:08');

/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table email_settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `email_settings`;

CREATE TABLE `email_settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `protocol` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `host` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `port` varchar(10) COLLATE utf8_turkish_ci DEFAULT '',
  `user` varchar(100) COLLATE utf8_turkish_ci DEFAULT '',
  `password` varchar(100) COLLATE utf8_turkish_ci DEFAULT '',
  `from` varchar(100) COLLATE utf8_turkish_ci DEFAULT '',
  `to` varchar(100) COLLATE utf8_turkish_ci DEFAULT '',
  `user_name` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `email_settings` WRITE;
/*!40000 ALTER TABLE `email_settings` DISABLE KEYS */;

INSERT INTO `email_settings` (`id`, `protocol`, `host`, `port`, `user`, `password`, `from`, `to`, `user_name`, `isActive`, `createdAt`)
VALUES
	(2,'smtp','ssl://smtp.gmail.com','465','mailkedisi@gmail.com','123456','mailkedisi@gmail.com','mailkedisi@gmail.com','CMS',1,'2018-01-14 14:57:54');

/*!40000 ALTER TABLE `email_settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `gallery_id`, `url`, `rank`, `isActive`, `createdAt`)
VALUES
	(1,11,'uploads/galleries_v/files/kataloglarimiz/web-tasarim-fiyat-teklifi.pdf',1,0,'2018-01-06 21:38:13'),
	(4,11,'uploads/galleries_v/files/kataloglarimiz/nodejs-icerik.docx',0,1,'2018-01-06 22:05:25');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table galleries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `galleries`;

CREATE TABLE `galleries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gallery_type` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `folder_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;

INSERT INTO `galleries` (`id`, `url`, `title`, `gallery_type`, `folder_name`, `isActive`, `createdAt`, `rank`)
VALUES
	(1,'/yilbasi-partisi','Y??lba???? Partisi','image','yilbasi-partisi',1,NULL,2),
	(3,'https://www.youtube.com/embed/2eZRRRiPQo8222','Y??lba???? ??zel Konsepti','image','yilbasi-ozel-konsepti',1,'2018-01-03 22:27:53',0),
	(9,'videosinif-egitimleri','VideoSinif E??itimleri','image','videosinif-egitimleri',1,'2018-01-03 23:53:09',1),
	(10,'youtube-kanali','Youtube Kanal??','video','',1,'2018-01-04 00:06:52',0),
	(11,'kataloglarimiz','Kataloglar??m??z','file','kataloglarimiz',1,'2018-01-04 00:07:06',0),
	(12,'bayram-resimleri','Bayram Resimleri','image','bayram-resimleri',1,'2018-01-06 23:32:37',0);

/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `gallery_id`, `url`, `rank`, `isActive`, `createdAt`)
VALUES
	(27,12,'uploads/galleries_v/images/bayram-resimleri/ekran-resmi-2018-01-03-23-52-59.png',1,1,'2018-01-06 23:32:59'),
	(28,12,'uploads/galleries_v/images/bayram-resimleri/ekran-resmi-2018-01-03-23-52-34.png',2,1,'2018-01-06 23:32:59'),
	(30,12,'uploads/galleries_v/images/bayram-resimleri/ekran-resmi-2018-01-04-00-09-58.png',0,1,'2018-01-06 23:32:59');

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table members
# ------------------------------------------------------------

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(50) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `ip_address` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;

INSERT INTO `members` (`id`, `email`, `isActive`, `createdAt`, `ip_address`)
VALUES
	(1,'gokhan@gkandemir.com',1,'2018-02-13 15:45:05','::1');

/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci,
  `news_type` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `url`, `title`, `description`, `news_type`, `img_url`, `video_url`, `rank`, `isActive`, `createdAt`)
VALUES
	(2,'iphonex-satislari-beklenilenin-altindaaaaaa','iphoneX Sat????lar?? Beklenilenin alt??ndaaaaaa','<p>iphoneX Sat????lar?? <b>Beklenilenin alt??ndaaaaaaaa</b><br></p>','image','ipphone8.jpeg','#',1,1,'2017-12-25 22:59:32'),
	(3,'kablosuzkedi-den-yeni-bir-egitim-serisi-geldi-like/dislike','kablosuzkedi den yeni bir egitim serisi geldi like/dislike','<p>kablosuzkedi den yeni bir egitim serisi geldi like/dislike<br></p>','image','kablosuzkedi-2-768x858.png','#',0,1,'2017-12-25 23:02:02');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table popups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `popups`;

CREATE TABLE `popups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci,
  `page` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;



# Dump of table portfolio_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_categories`;

CREATE TABLE `portfolio_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `portfolio_categories` WRITE;
/*!40000 ALTER TABLE `portfolio_categories` DISABLE KEYS */;

INSERT INTO `portfolio_categories` (`id`, `title`, `isActive`, `createdAt`)
VALUES
	(1,'Web Tasar??m',0,NULL),
	(2,'Yaz??l??m',1,'2018-01-15 16:08:38');

/*!40000 ALTER TABLE `portfolio_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table portfolio_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_images`;

CREATE TABLE `portfolio_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `portfolio_id` int(11) DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(11) DEFAULT NULL,
  `isCover` tinyint(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `portfolio_images` WRITE;
/*!40000 ALTER TABLE `portfolio_images` DISABLE KEYS */;

INSERT INTO `portfolio_images` (`id`, `portfolio_id`, `img_url`, `rank`, `isActive`, `isCover`, `createdAt`)
VALUES
	(5,2,'portfolio-2.jpg',0,1,1,'2018-02-04 13:55:09'),
	(6,2,'portfolio-1.jpg',0,1,0,'2018-02-04 13:55:09'),
	(7,2,'portfolio-3.jpg',0,1,0,'2018-02-04 13:55:09'),
	(8,3,'portfolio-5.jpg',0,1,0,'2018-02-04 14:27:09'),
	(9,3,'portfolio-4.jpg',0,1,0,'2018-02-04 14:27:09'),
	(10,3,'portfolio-6.jpg',0,1,0,'2018-02-04 14:27:09');

/*!40000 ALTER TABLE `portfolio_images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table portfolios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolios`;

CREATE TABLE `portfolios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci,
  `finishedAt` datetime DEFAULT NULL,
  `client` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `place` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `portfolio_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `portfolios` WRITE;
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;

INSERT INTO `portfolios` (`id`, `url`, `title`, `description`, `finishedAt`, `client`, `category_id`, `place`, `portfolio_url`, `rank`, `isActive`, `createdAt`)
VALUES
	(2,'abc-bilgisayarin-yazilim-isi-1','ABC Bilgisayar??n Yaz??l??m ????i 1','1500\'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960\'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k yaz??l??mlar?? ile pop??ler olmu??tur.','2018-01-17 04:03:02','ABC Bilgisayar 2',1,'??stanbul 1','http://gokhankandemir.com 1',0,1,'2018-01-15 19:10:52'),
	(3,'videosinif-projesi','VideoSinif Projesi','<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Yinelenen bir sayfa i??eri??inin okuyucunun dikkatini da????tt?????? bilinen bir ger??ektir. Lorem Ipsum kullanman??n amac??, s??rekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya k??yasla daha dengeli bir harf da????l??m?? sa??layarak okunurlu??u art??rmas??d??r. ??u anda bir??ok masa??st?? yay??nc??l??k paketi ve web sayfa d??zenleyicisi, varsay??lan m??g??r metinler olarak Lorem Ipsum kullanmaktad??r.&nbsp;</span><br></p>','2018-01-31 00:00:00','VideoS??n??f LTD',2,'Sanal Ortam','https://www.videosinif.com',0,1,'2018-02-04 14:26:59');

/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_images`;

CREATE TABLE `product_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(11) DEFAULT NULL,
  `isCover` tinyint(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;

INSERT INTO `product_images` (`id`, `product_id`, `img_url`, `rank`, `isActive`, `isCover`, `createdAt`)
VALUES
	(56,12,'portfolio-1.jpg',0,1,1,'2018-01-29 13:10:33'),
	(57,12,'portfolio-2.jpg',0,1,0,'2018-01-29 13:10:33'),
	(58,11,'portfolio-4.jpg',0,1,0,'2018-01-29 13:11:13'),
	(59,11,'portfolio-3.jpg',0,1,0,'2018-01-29 13:11:13'),
	(60,6,'portfolio-5.jpg',0,1,0,'2018-01-29 13:11:25'),
	(61,6,'portfolio-6.jpg',0,1,0,'2018-01-29 13:11:25'),
	(62,2,'portfolio-7.jpg',0,1,0,'2018-01-29 13:11:54'),
	(63,2,'portfolio-8.jpg',0,1,0,'2018-01-29 13:11:54'),
	(64,13,'portfolio-11.jpg',0,1,1,'2018-01-29 13:16:15');

/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `url`, `title`, `description`, `rank`, `isActive`, `createdAt`)
VALUES
	(2,'tester','Tester','                            Bu bir deneme ??r??n?? aciklamasidir 2                        ',4,1,NULL),
	(6,'monitor-askisi','Monit??r Ask??s??','                                                        <p>test amacli <b>??retildi.. test amacli ??retildi.. te</b>st amacli ??r<span style=\"background-color: rgb(255, 255, 0);\">etildi.. test amacli ??retildi..</span> test amacli ??retildi.. test amacli ??retildi.. test amacli ??retildi.. test amacli ??retildi.. test amacli ??retildi.. test amacli ??retildi..&nbsp;<br></p>                                                ',2,1,'2017-12-14 00:43:46'),
	(11,'sac-kremi','Sa?? Kremi','                            <p>Bu sa?? kredi o kadar g??zel bir kremdir ki..</p>                        ',1,1,'2017-12-20 01:24:32'),
	(12,'mantar-tablo','Mantar Tablo','Bu tablo o kadar g??zel bir tablodur ki!!!',0,1,'2018-01-11 13:39:23'),
	(13,'beyaz-tahta','Beyaz Tahta','                            <div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500\'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960\'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k yaz??l??mlar?? ile pop??ler olmu??tur.</p></div><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><h2 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px;\">Neden Kullan??r??z?</h2><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify;\">Yinelenen bir sayfa i??eri??inin okuyucunun dikkatini da????tt?????? bilinen bir ger??ektir. Lorem Ipsum kullanman??n amac??, s??rekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya k??yasla daha dengeli bir harf da????l??m?? sa??layarak okunurlu??u art??rmas??d??r. ??u anda bir??ok masa??st?? yay??nc??l??k paketi ve web sayfa d??zenleyicisi, varsay??lan m??g??r metinler olarak Lorem Ipsum kullanmaktad??r. Ayr??ca arama motorlar??nda \'lorem ipsum\' anahtar s??zc??kleri ile arama yap??ld??????nda hen??z tasar??m a??amas??nda olan ??ok say??da site listelenir. Y??llar i??inde, bazen kazara, bazen bilin??li olarak (??rne??in mizah kat??larak), ??e??itli s??r??mleri geli??tirilmi??tir.</p></div><p><br style=\"margin: 0px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: center;\"></p><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><h2 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px;\">Nereden Gelir?</h2><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify;\">Yayg??n inanc??n tersine, Lorem Ipsum rastgele s??zc??klerden olu??maz. K??kleri M.??. 45 tarihinden bu yana klasik Latin edebiyat??na kadar uzanan 2000 y??ll??k bir ge??mi??i vard??r. Virginia\'daki Hampden-Sydney College\'dan Latince profes??r?? Richard McClintock, bir Lorem Ipsum pasaj??nda ge??en ve anla????lmas?? en g???? s??zc??klerden biri olan \'consectetur\' s??zc??????n??n klasik edebiyattaki ??rneklerini inceledi??inde kesin bir kayna??a ula??m????t??r. Lorm Ipsum, ??i??ero taraf??ndan M.??. 45 tarihinde kaleme al??nan \"de Finibus Bonorum et Malorum\" (??yi ve K??t??n??n U?? S??n??rlar??) eserinin 1.10.32 ve 1.10.33 say??l?? b??l??mlerinden gelmektedir. Bu kitap, ahlak kuram?? ??zerine bir tezdir ve R??nesans d??neminde ??ok pop??ler olmu??tur. Lorem Ipsum pasaj??n??n ilk sat??r?? olan \"Lorem ipsum dolor sit amet\" 1.10.32 say??l?? b??l??mdeki bir sat??rdan gelmektedir.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify;\">1500\'lerden beri kullan??lmakta olan standard Lorem Ipsum metinleri ilgilenenler i??in yeniden ??retilmi??tir. ??i??ero taraf??ndan yaz??lan 1.10.32 ve 1.10.33 b??l??mleri de 1914 H. Rackham ??evirisinden al??nan ??ngilizce s??r??mleri e??li??inde ??zg??n bi??iminden yeniden ??retilmi??tir.</p></div><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><h2 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px;\">Nereden Bulabilirim?</h2><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify;\">Lorem Ipsum pasajlar??n??n bir??ok ??e??itlemesi vard??r. Ancak bunlar??n b??y??k bir ??o??unlu??u mizah kat??larak veya rastgele s??zc??kler eklenerek de??i??tirilmi??lerdir. E??er bir Lorem Ipsum pasaj?? kullanacaksan??z, metin aralar??na utand??r??c?? s??zc??kler gizlenmedi??inden emin olman??z gerekir. ??nternet\'teki t??m Lorem Ipsum ??rete??leri ??nceden belirlenmi?? metin bloklar??n?? yineler. Bu da, bu ??reteci ??nternet ??zerindeki ger??ek Lorem Ipsum ??reteci yapar. Bu ??rete??, 200\'den fazla Latince s??zc??k ve onlara ait c??mle yap??lar??n?? i??eren bir s??zl??k kullan??r. Bu nedenle, ??retilen Lorem Ipsum metinleri yinelemelerden, mizahtan ve karakteristik olmayan s??zc??klerden uzakt??r</p></div>                        ',0,1,'2018-01-29 13:15:50');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table references
# ------------------------------------------------------------

DROP TABLE IF EXISTS `references`;

CREATE TABLE `references` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `references` WRITE;
/*!40000 ALTER TABLE `references` DISABLE KEYS */;

INSERT INTO `references` (`id`, `url`, `title`, `description`, `img_url`, `rank`, `isActive`, `createdAt`)
VALUES
	(3,'abc-bilisim','ABC Bili??im','<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500\'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? za</span><br></p>','portfolio-6.jpg',0,1,'2018-02-05 22:09:20'),
	(4,'def-mobilya','DEF Mobilya','<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500\'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? za</span><br></p>','portfolio-8.jpg',0,1,'2018-02-05 22:09:35'),
	(5,'ghi-teknoloji','GHI Teknoloji','<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500\'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? za</span><br></p>','portfolio-5.jpg',0,1,'2018-02-05 22:09:52'),
	(6,'jkl-magazacilik','JKL Ma??azac??l??k','<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500\'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? za</span><br></p>','portfolio-2.jpg',0,1,'2018-02-05 22:10:15');

/*!40000 ALTER TABLE `references` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `url`, `title`, `description`, `img_url`, `rank`, `isActive`, `createdAt`)
VALUES
	(2,'makyaj','Makyaj','<p>majyaz hizmetimiz 10 ki??ilik personellerimiz taraf??ndan verilmektedir.</p>','portfolio-3.jpg',0,1,'2018-01-15 15:40:38'),
	(3,'mobilya','Mobilya','<p>dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500\'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960\'larda Lore<br></p>','portfolio-6.jpg',0,1,'2018-02-12 15:54:49'),
	(4,'beyaz-esya','Beyaz E??ya','<p>beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960\'larda Lore<br></p>','portfolio-7.jpg',0,1,'2018-02-12 15:55:08');

/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slogan` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `address` text COLLATE utf8_turkish_ci,
  `about_us` longtext COLLATE utf8_turkish_ci,
  `mission` longtext COLLATE utf8_turkish_ci,
  `vision` longtext COLLATE utf8_turkish_ci,
  `logo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone_1` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone_2` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax_1` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax_2` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `lat` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `long` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `company_name`, `slogan`, `address`, `about_us`, `mission`, `vision`, `logo`, `phone_1`, `phone_2`, `fax_1`, `fax_2`, `email`, `facebook`, `twitter`, `instagram`, `linkedin`, `lat`, `long`, `createdAt`, `updatedAt`)
VALUES
	(4,'VideoS??n??f','G??zellik sende ba??lar...','                                                                                                                                                                                                        Kad??k??y / ??stanbul                                                                        ','                                                                                                                                                                                                                                                <strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\">, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500\'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960\'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k yaz??l??mlar?? ile pop??ler olmu??tur.</span>                                                                                                                                                                                                                                                                                                                                                                                ','                                                                                                                                                                                                                                                <span style=\"font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\">Yinelenen bir sayfa i??eri??inin okuyucunun dikkatini da????tt?????? bilinen bir ger??ektir. Lorem Ipsum kullanman??n amac??, s??rekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya k??yasla daha dengeli bir harf da????l??m?? sa??layarak okunurlu??u art??rmas??d??r. ??u anda bir??ok masa??st?? yay??nc??l??k paketi ve web sayfa d??zenleyicisi, varsay??lan m??g??r metinler olarak Lorem Ipsum kullanmaktad??r. Ayr??ca arama motorlar??nda \'lorem ipsum\' anahtar s??zc??kleri ile arama yap??ld??????nda hen??z tasar??m a??amas??nda olan ??ok say??da site listelenir. Y??llar i??inde, bazen kazara, bazen bilin??li olarak (??rne??in mizah kat??larak), ??e??itli s??r??mleri geli??tirilmi??tir.</span>                                                                                                                                                                                                                                                                                                                                                                                ','                                                                                                                                                                                                                                                <p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif;\">Yayg??n inanc??n tersine, Lorem Ipsum rastgele s??zc??klerden olu??maz. K??kleri M.??. 45 tarihinden bu yana klasik Latin edebiyat??na kadar uzanan 2000 y??ll??k bir ge??mi??i vard??r. Virginia\'daki Hampden-Sydney College\'dan Latince profes??r?? Richard McClintock, bir Lorem Ipsum pasaj??nda ge??en ve anla????lmas?? en g???? s??zc??klerden biri olan \'consectetur\' s??zc??????n??n klasik edebiyattaki ??rneklerini inceledi??inde kesin bir kayna??a ula??m????t??r. Lorm Ipsum, ??i??ero taraf??ndan M.??. 45 tarihinde kaleme al??nan \"de Finibus Bonorum et Malorum\" (??yi ve K??t??n??n U?? S??n??rlar??) eserinin 1.10.32 ve 1.10.33 say??l?? b??l??mlerinden gelmektedir. Bu kitap, ahlak kuram?? ??zerine bir tezdir ve R??nesans d??neminde ??ok pop??ler olmu??tur. Lorem Ipsum pasaj??n??n ilk sat??r?? olan \"Lorem ipsum dolor sit amet\" 1.10.32 say??l?? b??l??mdeki bir sat??rdan gelmektedir.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif;\">1500\'lerden beri kullan??lmakta olan standard Lorem Ipsum metinleri ilgilenenler i??in yeniden ??retilmi??tir. ??i??ero taraf??ndan yaz??lan 1.10.32 ve 1.10.33 b??l??mleri de 1914 H. Rackham ??evirisinden al??nan ??ngilizce s??r??mleri e??li??inde ??zg??n bi??iminden yeniden ??retilmi??tir.</p>                                                                                                                                                                                                                                                                                                                                                                                ','videosinif2.png','5077158109','','','','gokhan@gkandemir.com','https://facebook.com/kablosuzkedi','https://twitter.com/kablosuzkedi','https://instagram.com/kablosuzkedi','https://linkedin.com/in/gokhan-kandemir','40.9744257','29.034776','2018-01-14 22:15:17','2018-02-12 20:07:28');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table slides
# ------------------------------------------------------------

DROP TABLE IF EXISTS `slides`;

CREATE TABLE `slides` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `allowButton` tinyint(4) DEFAULT NULL,
  `button_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `button_caption` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `animation_type` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `animation_time` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `full_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `user_name`, `full_name`, `email`, `password`, `isActive`, `createdAt`)
VALUES
	(1,'gkandemir','G??khan Kandemir','gokhan@gkandemir.com','e10adc3949ba59abbe56e057f20f883e',1,NULL),
	(2,'kablosuzkedi','Defne Kandemir','kablosuzkedi@kablosuzkedi.com','e10adc3949ba59abbe56e057f20f883e',1,'2018-01-08 22:40:53');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;

INSERT INTO `videos` (`id`, `gallery_id`, `url`, `rank`, `isActive`, `createdAt`)
VALUES
	(1,10,'https://www.youtube.com/embed/2eZRRRiPQo8',1,1,NULL),
	(3,10,'https://www.youtube.com/embed/2eZRRRiPQo8',0,1,'2018-01-06 22:55:52');

/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
