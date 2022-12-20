/*
SQLyog Community Edition- MySQL GUI v5.25
Host - 5.5.24-log : Database - codoacodophp
*********************************************************************
Server version : 5.5.24-log
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `codoacodophp`;

USE `codoacodophp`;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `charlaxorador` */

DROP TABLE IF EXISTS `charlaxorador`;

CREATE TABLE `charlaxorador` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_orador` int(10) DEFAULT NULL COMMENT 'FK oradores',
  `id_tema` int(10) DEFAULT NULL COMMENT 'FK temas',
  `desccripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `charlaxorador` */

/*Table structure for table `oradores` */

DROP TABLE IF EXISTS `oradores`;

CREATE TABLE `oradores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `tema` int(10) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `oradores` */

insert  into `oradores`(`id`,`nombre`,`apellido`,`tema`,`descripcion`) values (1,'Tiziana','Bradaschia',1,'Mejorar la conducta economica familiar'),(2,'Tiziana Marinella','Bradaschia',1,'nada'),(3,'Pedro ','Bradaschia',3,'nada');

/*Table structure for table `temas` */

DROP TABLE IF EXISTS `temas`;

CREATE TABLE `temas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `desc_tema` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `temas` */

insert  into `temas`(`id`,`desc_tema`) values (1,'Economia'),(2,'Ecologia'),(3,'Autoayuda'),(4,'Deportes'),(5,'Ciencias'),(6,'Comedia');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;