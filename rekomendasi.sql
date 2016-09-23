/*
SQLyog Trial v12.2.4 (64 bit)
MySQL - 10.1.13-MariaDB : Database - rekomendasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rekomendasi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rekomendasi`;

/*Table structure for table `norma_ist` */

DROP TABLE IF EXISTS `norma_ist`;

CREATE TABLE `norma_ist` (
  `id_norma_ist` int(11) NOT NULL,
  `subtest` varchar(100) DEFAULT NULL,
  `jumlah_true_ist` int(11) DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_norma_ist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `norma_ist` */

/*Table structure for table `profil_ist` */

DROP TABLE IF EXISTS `profil_ist`;

CREATE TABLE `profil_ist` (
  `id_profil_ist` int(11) NOT NULL,
  `id_programstudy` int(11) DEFAULT NULL,
  `SE` int(11) DEFAULT NULL,
  `WA` int(11) DEFAULT NULL,
  `AN` int(11) DEFAULT NULL,
  `GE` int(11) DEFAULT NULL,
  `RA` int(11) DEFAULT NULL,
  `ZR` int(11) DEFAULT NULL,
  `FA` int(11) DEFAULT NULL,
  `WU` int(11) DEFAULT NULL,
  `ME` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_profil_ist`),
  KEY `id_programstudy` (`id_programstudy`),
  CONSTRAINT `profil_ist_ibfk_1` FOREIGN KEY (`id_programstudy`) REFERENCES `program_study` (`id_programstudy`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `profil_ist` */

/*Table structure for table `profil_un` */

DROP TABLE IF EXISTS `profil_un`;

CREATE TABLE `profil_un` (
  `id_profil_un` int(11) NOT NULL,
  `id_programstudy` int(11) DEFAULT NULL,
  `matematika` int(11) DEFAULT NULL,
  `bindo` int(11) DEFAULT NULL,
  `bing` int(11) DEFAULT NULL,
  `ipa` int(11) DEFAULT NULL,
  `ips` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_profil_un`),
  KEY `id_programstudy` (`id_programstudy`),
  CONSTRAINT `profil_un_ibfk_1` FOREIGN KEY (`id_programstudy`) REFERENCES `program_study` (`id_programstudy`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `profil_un` */

/*Table structure for table `program_study` */

DROP TABLE IF EXISTS `program_study`;

CREATE TABLE `program_study` (
  `id_programstudy` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_program` varchar(255) DEFAULT NULL,
  `nilai_total` float DEFAULT NULL,
  PRIMARY KEY (`id_programstudy`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `program_study_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `program_study` */

/*Table structure for table `soal_ist` */

DROP TABLE IF EXISTS `soal_ist`;

CREATE TABLE `soal_ist` (
  `id_soal_ist` int(11) NOT NULL,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `id_jawaban` int(11) DEFAULT NULL,
  `jawaban` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_soal_ist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `soal_ist` */

/*Table structure for table `ujian_ist` */

DROP TABLE IF EXISTS `ujian_ist`;

CREATE TABLE `ujian_ist` (
  `id_ist` int(11) NOT NULL,
  `id_soal_ist` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `bobot_se` float DEFAULT NULL,
  `bobot_wa` float DEFAULT NULL,
  `bobot_an` float DEFAULT NULL,
  `bobot_ge` float DEFAULT NULL,
  `bobot_me` float DEFAULT NULL,
  `bobot_ra` float DEFAULT NULL,
  `bobot_zr` float DEFAULT NULL,
  `bobot_fa` float DEFAULT NULL,
  `bobot_wu` float DEFAULT NULL,
  `ncf` float DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_ist`),
  KEY `id_user` (`id_user`),
  KEY `id_soal_ist` (`id_soal_ist`),
  CONSTRAINT `ujian_ist_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`),
  CONSTRAINT `ujian_ist_ibfk_2` FOREIGN KEY (`id_soal_ist`) REFERENCES `soal_ist` (`id_soal_ist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ujian_ist` */

/*Table structure for table `ujian_nasional` */

DROP TABLE IF EXISTS `ujian_nasional`;

CREATE TABLE `ujian_nasional` (
  `id_un` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `bobot_mate` float DEFAULT NULL,
  `bobot_bindo` float DEFAULT NULL,
  `bobot_bing` float DEFAULT NULL,
  `bobot_ipa` float DEFAULT NULL,
  `bobot_ips` float DEFAULT NULL,
  `nsf` float DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_un`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `ujian_nasional_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ujian_nasional` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` int(11) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `no_induk` int(11) DEFAULT NULL,
  `no_hp` int(11) DEFAULT NULL,
  `rekomendasi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
