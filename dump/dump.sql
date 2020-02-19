/*
SQLyog Ultimate v8.5 
MySQL - 5.5.19 : Database - galeria
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`galeria` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `tab_imagens_ajax` */

DROP TABLE IF EXISTS `tab_imagens_ajax`;

CREATE TABLE `tab_imagens_ajax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `src_imagem` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `tab_imagens_ajax` */

insert  into `tab_imagens_ajax`(`id`,`titulo`,`src_imagem`) values (30,'Exemplo 01','7478f97fc18e1d6d936aac405dfc964f.jpg');
insert  into `tab_imagens_ajax`(`id`,`titulo`,`src_imagem`) values (32,'Exemplo 00','f62b3b6ddc52321d5308bfa02623a0cd.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
