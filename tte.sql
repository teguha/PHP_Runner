/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - tte
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tte` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tte`;

/*Table structure for table `detail_training` */

DROP TABLE IF EXISTS `detail_training`;

CREATE TABLE `detail_training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materi` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `training` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_training` (`training`),
  KEY `teyehs` (`materi`),
  CONSTRAINT `detail_training` FOREIGN KEY (`training`) REFERENCES `training` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_training` */

insert  into `detail_training`(`id`,`materi`,`tanggal`,`training`) values 
(7,'1','2022-05-12',3),
(8,'Membuat Variable','2022-05-12',3),
(9,'Membuat Function','2022-05-12',3);

/*Table structure for table `lembaga` */

DROP TABLE IF EXISTS `lembaga`;

CREATE TABLE `lembaga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lembaga` */

insert  into `lembaga`(`id`,`nama`,`email`,`username`,`password`) values 
(1,'udayana','udayana@gmail.com','udayana','udayana123'),
(2,'udayana','udayana2@gmail.com','udayana2','udayana123'),
(3,'admin','admin@gmail.com','admin','admin123'),
(4,'udayana','udayana3@gmail.com','udayana3','udayana123');

/*Table structure for table `penandatangan` */

DROP TABLE IF EXISTS `penandatangan`;

CREATE TABLE `penandatangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `penandatangan` */

/*Table structure for table `peserta` */

DROP TABLE IF EXISTS `peserta`;

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `training_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tesgs` (`training_id`),
  CONSTRAINT `tesgs` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `peserta` */

/*Table structure for table `project3_users` */

DROP TABLE IF EXISTS `project3_users`;

CREATE TABLE `project3_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `groupid` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `ext_security_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `project3_users` */

/*Table structure for table `project4ugmembers` */

DROP TABLE IF EXISTS `project4ugmembers`;

CREATE TABLE `project4ugmembers` (
  `UserName` varchar(255) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `Provider` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`UserName`(50),`GroupID`,`Provider`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `project4ugmembers` */

/*Table structure for table `project4ugrights` */

DROP TABLE IF EXISTS `project4ugrights`;

CREATE TABLE `project4ugrights` (
  `TableName` varchar(255) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `AccessMask` varchar(10) DEFAULT NULL,
  `Page` mediumtext DEFAULT NULL,
  PRIMARY KEY (`TableName`(50),`GroupID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `project4ugrights` */

/*Table structure for table `training` */

DROP TABLE IF EXISTS `training`;

CREATE TABLE `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `mulai` date DEFAULT NULL,
  `selesai` date DEFAULT NULL,
  `pengajar` varchar(255) DEFAULT NULL,
  `lembaga_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lembaga` (`lembaga_id`),
  CONSTRAINT `lembaga` FOREIGN KEY (`lembaga_id`) REFERENCES `lembaga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `training` */

insert  into `training`(`id`,`nama`,`mulai`,`selesai`,`pengajar`,`lembaga_id`) values 
(3,'Python','2022-05-12','2022-05-15','Teguh',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
