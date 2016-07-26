/*
SQLyog Ultimate v9.63 
MySQL - 5.5.5-10.1.13-MariaDB : Database - qbo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`qbo` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;

USE `qbo`;

/*Table structure for table `tarjeta` */

DROP TABLE IF EXISTS `tarjeta`;

CREATE TABLE `tarjeta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_tarjeta` double(16,0) DEFAULT NULL,
  `fecha_expiracion` date DEFAULT NULL,
  `codigo_seguridad` int(3) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

/*Data for the table `tarjeta` */

insert  into `tarjeta`(`id`,`numero_tarjeta`,`fecha_expiracion`,`codigo_seguridad`,`total`) values (3,5204164395339874,'2016-07-03',238,'400.00'),(4,5204164395339873,'2016-07-13',239,'500.00'),(25,5204164395334422,'2017-03-31',777,'700.00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
