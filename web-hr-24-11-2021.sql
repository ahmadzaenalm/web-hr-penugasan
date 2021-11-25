/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.24 : Database - web-hr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`web-hr` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `web-hr`;

/*Data for the table `cuti_karyawan` */

insert  into `cuti_karyawan`(`id`,`tgl_cuti`,`lama_cuti`,`keterangan_cuti`,`created_at`,`updated_at`,`status`,`user_id`) values 
(1,'2020-08-02',2,'Acara Keluarga','2021-11-24 23:30:38','2021-11-24 23:30:38',1,1),
(2,'2020-08-18',2,'Anak Sakit','2021-11-24 23:31:53','2021-11-25 03:39:56',0,1),
(3,'2020-08-19',1,'Nenek Sakit','2021-11-25 01:48:46','2021-11-25 01:48:46',0,6),
(4,'2020-08-23',1,'Sakit','2021-11-25 01:49:51','2021-11-25 01:49:51',0,7),
(5,'2020-08-29',5,'Menikah','2021-11-25 01:50:42','2021-11-25 01:50:42',0,4),
(6,'2020-08-30',2,'Acara Keluarga','2021-11-25 01:51:33','2021-11-25 01:51:33',0,3);

/*Data for the table `failed_jobs` */

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Data for the table `password_resets` */

/*Data for the table `personal_access_tokens` */

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`,`nomor_induk`,`alamat`,`tgl_lahir`,`role`,`tgl_bergabung`) values 
(0,'Ahmad Zaenal Mustofa','admin@admin.com',NULL,'$2y$10$BUJF4btkv0jtaWXNpagYI.C5q.HiDbM0BkQFpaHlVNQAmUBEn.C9O',NULL,'2021-11-24 23:52:08','2021-11-24 23:52:08','IP06000','Jl.Kalikepiting 125 B-3','2021-11-16','admin',NULL),
(1,'Agus','agus@gmail.com',NULL,'$2y$10$IGg9naXUT3XBoNMlBiEBE.0K2zechOGj/wBoIBAgdfXRWBYU1J8Du',NULL,'2021-11-24 22:39:38','2021-11-25 00:44:38','IP06001','Jln Gajah Mada no 12, Surabaya','1980-01-11','karyawan','2005-08-07'),
(2,'Amin','amin@gmail.com',NULL,'$2y$10$AYZsfLyG0ddvYDdmYZ0NL.1X7NbZWPy5L9zRaH.qqAjR/ca71Zjky',NULL,'2021-11-24 22:42:02','2021-11-24 22:42:02','IP06002','Jln Imam Bonjol no 11, Mojokerto','1977-09-03','karyawan','2005-08-07'),
(3,'Yusuf','yusuf@gmail.com',NULL,'$2y$10$up/HGN5FvhXRLZBmLmCQLeeNJdMF00ssFpiJtHav6QRr7nuD8kjnu',NULL,'2021-11-24 22:43:44','2021-11-24 22:43:44','IP06003','Jln A Yani Raya 15 No 14 Malang','1973-08-09','karyawan','2006-08-07'),
(4,'Alyssa','alyssa@gmail.com',NULL,'$2y$10$vZe97c60/ZzEva36TlHMB.YWPTm9XYWVIeKuNxD.kABVCC66iqGii',NULL,'2021-11-24 22:44:57','2021-11-24 22:44:57','IP06004','Jln Bungur Sari V no 166, Bandung','1983-03-18','karyawan','2006-09-06'),
(5,'Maulanan','maulana@gmail.com',NULL,'$2y$10$maQEDnBAaMmtyq8yahcV3uChJn5fPdgOsI5//psRQ6ot3dJOYARHe',NULL,'2021-11-24 22:46:22','2021-11-24 22:46:22','IP06005','Jln Candi Agung, No 78 Gg 5, Jakarta','1978-11-10','karyawan','2006-09-10'),
(6,'Agfika','agfika@gmail.com',NULL,'$2y$10$oNRF9d7Pn9amO2KklpPuS.c9ZX0Gj5m1emHdvKn3iLCNAzp36CQbK',NULL,'2021-11-24 22:47:47','2021-11-24 22:47:47','IP06006','Jlm Nangka, Jakarta Timur','1979-02-07','karyawan','2007-01-02'),
(7,'James','james@gmail.com',NULL,'$2y$10$cpoNb06aiyHqVcbhtKulXul6AQlaoPFOfdvtNgKM1c9YJwH1CO.zi',NULL,'2021-11-24 22:48:56','2021-11-24 22:48:56','IP06007','Jln Merpati, 8 Surabaya','1989-05-18','karyawan','2007-04-04'),
(8,'Octavanus','octavanus@gmail.com',NULL,'$2y$10$pc4vy1iIRnURLRfzpE6z2unIm5d4HnGNMR2yYmtnC/KhOtHlGyAG6',NULL,'2021-11-24 22:50:16','2021-11-24 22:50:16','IP06008','Jln A Yani 17, B 08 Sidoarjo','1985-04-14','karyawan','2007-05-19'),
(9,'Nugroho','nugroho@gmail.com',NULL,'$2y$10$BP6FTzFILxgMkPLC0mC8gu0lYycHeaeJDFdZ0GEZ38PnIBLUY/lSm',NULL,'2021-11-24 22:51:15','2021-11-24 22:51:15','IP06009','Jln Duren tiga 167, Jakarta Selatan','1984-01-01','karyawan','2008-01-16'),
(10,'Raisa','raisa@gmail.com',NULL,'$2y$10$q86pNL206gz0xU6Tq2Q8YOPfNpvJwL7NYptYz1pp7M2amy.VNn0qO',NULL,'2021-11-24 22:52:59','2021-11-24 22:52:59','IP06010','Jln Kelapa Sawit, Jakarta Selatan','1990-12-17','karyawan','2008-08-16'),
(13,'Ahmad Zaenal Mustofa','mustofaahmad290@gmail.com',NULL,'$2y$10$Nkw7yh2XnyVCdj7zww/dNuyLvAGemC473Ito/EAbCMASXz.viP6O.',NULL,'2021-11-25 01:06:39','2021-11-25 01:06:39','IP06011','Jl.Kalikepiting 125 B-3','2021-11-09','karyawan','2021-11-17');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
