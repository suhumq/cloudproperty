# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.29)
# Database: property
# Generation Time: 2013-03-31 06:42:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table banks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `banks`;

CREATE TABLE `banks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `bank_name` varchar(200) DEFAULT NULL,
  `bank_address` varchar(200) DEFAULT NULL,
  `bank_town` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table booking_materials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `booking_materials`;

CREATE TABLE `booking_materials` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` int(5) DEFAULT NULL,
  `description_material` varchar(255) DEFAULT NULL,
  `price_standard` decimal(12,0) DEFAULT NULL,
  `price_new` decimal(12,0) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table bookings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bookings`;

CREATE TABLE `bookings` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(5) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `unit_id` int(5) DEFAULT NULL,
  `no_booking` varchar(255) DEFAULT NULL,
  `date_booking` date DEFAULT NULL,
  `trans_type` int(2) DEFAULT NULL,
  `kpr_plan` decimal(12,2) DEFAULT NULL,
  `kpr_time` int(5) DEFAULT NULL,
  `down_payment` decimal(12,2) DEFAULT NULL,
  `trans_status` int(2) DEFAULT NULL,
  `description_booking` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table cashflows
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cashflows`;

CREATE TABLE `cashflows` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ref` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `account_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cashflows` WRITE;
/*!40000 ALTER TABLE `cashflows` DISABLE KEYS */;

INSERT INTO `cashflows` (`id`, `ref`, `name`, `account_type`)
VALUES
	(1,105,'Deposito',0),
	(2,106,'Modal Awal',0),
	(3,107,'Retensi Bank',0),
	(4,108,'Pengembalian Modal Awal',0),
	(5,201,'Pembebasan Tanah',1),
	(6,202,'Penyelesaian PBB & Pajak Waris',1),
	(7,203,'Discount',1),
	(8,204,'IRK',1),
	(9,205,'IPPT',1),
	(10,206,'IMB',1),
	(11,207,'Biaya Tak Terduga',1),
	(12,208,'Cut & Fill',1),
	(13,209,'Kirmir Selokan',1),
	(14,210,'Basecourse Jalan / Penetrasi',1),
	(15,211,'Hotmix Jalan Kompleks',1),
	(16,213,'Batas Kavling',1),
	(17,214,'Saluran Jalan',1),
	(18,215,'Brandgank',1),
	(19,216,'Canstein',1),
	(20,217,'Instalasi Air',1),
	(21,218,'PDAM Rumah',1),
	(22,219,'Instalasi Jaringan Listrik',1),
	(23,220,'PLN Rumah',1),
	(24,221,'Penerangan Lingkungan',1),
	(25,222,'Penghijauan / Taman Muka Kompleks',1),
	(26,223,'Benteng Lokasi',1),
	(27,224,'Pek Gapura+Gerbang',1),
	(28,225,'Pek Penghijauan',1),
	(29,226,'Pekerjaan Fasilitas Sosial',1),
	(30,227,'Pekerjaan Taman Canstein',1),
	(31,228,'Perkerjaan Taman Fasum',1),
	(32,229,'Bayar Bangunan',1),
	(33,232,'Biaya Personalia',1),
	(34,233,'Bunga Bank',1),
	(35,234,'Overhead Cost',1),
	(36,235,'Biaya Promosi',1),
	(37,236,'Biaya Agen Marketing (1/2)',1),
	(38,237,'Mobilisasi/Angkutan',1),
	(39,238,'Biaya Konsultasi',1),
	(40,239,'PPH Real',1),
	(41,240,'Zakat',1),
	(42,212,'Hotmix Akses Masuk',1),
	(44,101,'Penjualan',0),
	(45,100,'Kas',0);

/*!40000 ALTER TABLE `cashflows` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contractor_tasks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contractor_tasks`;

CREATE TABLE `contractor_tasks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `contractor_id` int(5) NOT NULL,
  `description_task` varchar(255) DEFAULT NULL,
  `volume` int(10) DEFAULT NULL,
  `price` decimal(12,0) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table contractors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contractors`;

CREATE TABLE `contractors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(5) NOT NULL,
  `project_owner` varchar(255) DEFAULT NULL,
  `address_owner` varchar(255) DEFAULT NULL,
  `spk_number_1` varchar(100) DEFAULT NULL,
  `spk_number_2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `place_birth` varchar(255) DEFAULT NULL,
  `birthday` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT '022-',
  `job` varchar(255) DEFAULT NULL,
  `description` text,
  `status` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table draft_opr_projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `draft_opr_projects`;

CREATE TABLE `draft_opr_projects` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `operationalproject_id` int(5) DEFAULT NULL,
  `cashflow_id` int(11) DEFAULT NULL,
  `no_transaction` varchar(100) DEFAULT NULL,
  `trans_date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` decimal(12,2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table draft_opr_units
# ------------------------------------------------------------

DROP TABLE IF EXISTS `draft_opr_units`;

CREATE TABLE `draft_opr_units` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `operationalunit_id` int(5) DEFAULT NULL,
  `no_transaction` varchar(100) DEFAULT NULL,
  `trans_date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` decimal(12,2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table draft_transactions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `draft_transactions`;

CREATE TABLE `draft_transactions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` int(5) DEFAULT NULL,
  `description_transdraft` varchar(255) DEFAULT NULL,
  `price` decimal(12,0) DEFAULT NULL,
  `date_payment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table jurnals
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jurnals`;

CREATE TABLE `jurnals` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `no_transaction` varchar(200) NOT NULL,
  `booking_id` int(5) DEFAULT NULL,
  `project_id` int(5) DEFAULT NULL,
  `unit_id` int(5) DEFAULT NULL,
  `cashflow_id` int(11) DEFAULT NULL,
  `operationalunit_id` int(5) DEFAULT NULL,
  `operationalproject_id` int(5) DEFAULT NULL,
  `trans_date` date NOT NULL,
  `description` text NOT NULL,
  `account_debet` varchar(255) DEFAULT NULL,
  `account_credit` varchar(255) DEFAULT '',
  `amount` decimal(12,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table letter_numbers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `letter_numbers`;

CREATE TABLE `letter_numbers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` int(5) DEFAULT NULL,
  `ppjb` varchar(100) DEFAULT NULL,
  `spr` varchar(100) DEFAULT NULL,
  `spkpr` varchar(100) DEFAULT NULL,
  `spajb` varchar(100) DEFAULT NULL,
  `bastr` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table minor_additions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `minor_additions`;

CREATE TABLE `minor_additions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) DEFAULT NULL,
  `minor_name` varchar(100) DEFAULT NULL,
  `minor_description` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table operational_projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `operational_projects`;

CREATE TABLE `operational_projects` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `project_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table operational_units
# ------------------------------------------------------------

DROP TABLE IF EXISTS `operational_units`;

CREATE TABLE `operational_units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `start_project` varchar(255) DEFAULT NULL,
  `end_project` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `owner` varchar(200) DEFAULT NULL,
  `address_owner` varchar(255) DEFAULT NULL,
  `job_owner` varchar(200) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table requirement_bookings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `requirement_bookings`;

CREATE TABLE `requirement_bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(5) DEFAULT NULL,
  `requirement_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table requirements
# ------------------------------------------------------------

DROP TABLE IF EXISTS `requirements`;

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `requirements` WRITE;
/*!40000 ALTER TABLE `requirements` DISABLE KEYS */;

INSERT INTO `requirements` (`id`, `name`)
VALUES
	(1,'FC KTP'),
	(2,'FC Kartu Keluarga'),
	(3,'FC Surat Nikah'),
	(4,'FC Rek Tabungan'),
	(5,'Slip Gaji Asli'),
	(6,'FC NPWP'),
	(7,'Pas Foto');

/*!40000 ALTER TABLE `requirements` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sales
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table unit_specifications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `unit_specifications`;

CREATE TABLE `unit_specifications` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` int(5) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description_specification` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table units
# ------------------------------------------------------------

DROP TABLE IF EXISTS `units`;

CREATE TABLE `units` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(5) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `block_unit` varchar(255) DEFAULT NULL,
  `price_brochure` decimal(12,2) DEFAULT NULL,
  `lb` int(11) DEFAULT NULL,
  `lt` int(11) DEFAULT NULL,
  `price_sell` decimal(12,2) DEFAULT NULL,
  `charge` decimal(12,2) DEFAULT NULL,
  `downpayment` decimal(12,2) DEFAULT NULL,
  `fee` decimal(12,2) DEFAULT NULL,
  `plafond` decimal(12,2) DEFAULT NULL,
  `description` text,
  `certificate` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `type_unit` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `role`)
VALUES
	(11,'marketing','79893e3a182db1c4ca546433ebb61bcc29173984','Marketing','2'),
	(8,'admin','79893e3a182db1c4ca546433ebb61bcc29173984','Administrator','1'),
	(12,'konsumen','79893e3a182db1c4ca546433ebb61bcc29173984','Konsumen Anda','3');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
