/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.1.38-MariaDB : Database - web
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`web` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `web`;

/*Table structure for table `inspektorats_sakip` */

DROP TABLE IF EXISTS `inspektorats_sakip`;

CREATE TABLE `inspektorats_sakip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipe_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `inspektorats_sakip` */

insert  into `inspektorats_sakip`(`id`,`tipe_sakip`,`nip_pihak_pertama`,`nama_pihak_pertama`,`jabatan_pihak_pertama`,`golongan_pihak_pertama`,`nip_pihak_kedua`,`nama_pihak_kedua`,`jabatan_pihak_kedua`,`golongan_pihak_kedua`,`tahun`,`tanggal_surat`,`status`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(1,'Perjanjian Kinerja Tahunan','196208251986111001','Drs. EKA SUPRASETYO AGUS PUTRANTO, MM','15','15','196208251986111001','Drs. EKA SUPRASETYO AGUS PUTRANTO, MM','15','15','2019','2019-12-30','2','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2019-12-30 09:46:13','2020-01-06 06:13:56'),
(2,'Perjanjian Kinerja Tahunan','003','MAULANA RIZKI, S.Kom','Fungsional Umum','Juru Muda (I/a)','196208251986111001','Drs. EKA SUPRASETYO AGUS PUTRANTO, MM','Inspektur Kabupaten Jombang','Pembina Utama Muda (IV/c)','2019','2019-12-30','2','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2019-12-30 09:56:52','2020-01-06 06:43:31'),
(3,'Perjanjian Kinerja Tahunan','003','MAULANA RIZKI, S.Kom','Fungsional Umum','Juru Muda (I/a)','003','MAULANA RIZKI, S.Kom','Fungsional Umum','Juru Muda (I/a)','2020','2019-12-30','1','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2019-12-30 09:57:43','2020-01-13 09:27:24'),
(5,'Perjanjian Kinerja Tahunan','197011262002121006','AGUNG HARIADI, ST., MM','12','14','003','MAULANA RIZKI, S.Kom','1','1','2019','2019-12-30','1','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2019-12-31 06:35:56','2020-01-10 01:29:54'),
(6,'Perjanjian Kinerja Tahunan','197806292006041017','EKO PRASETYO, SE','Auditor Madya','Pembina (IV/a)','197806292006041017','EKO PRASETYO, SE','Auditor Madya','Pembina (IV/a)','2020','2020-01-02','2','MAULANA RIZKI, S.Kom','EKO PRASETYO, SE','2019-12-31 08:15:42','2020-01-07 03:07:25'),
(8,'Perjanjian Kinerja Tahunan','197907072006042036','RIRIS ERNAWATI, SE','Auditor Madya','IV/a','196801281994032009','LILIES WIDIANINGSIH, SE., MSi','Inspektur Pembantu Bidang Keuangan','IV/b','2020','2020-01-02','2','RIRIS ERNAWATI, SE','RIRIS ERNAWATI, SE','2019-12-31 08:37:12','2019-12-31 08:37:12'),
(9,'Perjanjian Kinerja Tahunan','197907072006042036','RIRIS ERNAWATI, SE','Auditor Madya','IV/a','196801281994032009','LILIES WIDIANINGSIH, SE., MSi','Inspektur Pembantu Bidang Keuangan','IV/b','2020','2020-01-02','2','RIRIS ERNAWATI, SE','RIRIS ERNAWATI, SE','2019-12-31 09:24:37','2019-12-31 09:24:37'),
(10,'Perjanjian Kinerja Tahunan','197907072006042036','RIRIS ERNAWATI, SE','Auditor Madya','IV/a','196801281994032009','LILIES WIDIANINGSIH, SE., MSi','Inspektur Pembantu Bidang Keuangan','Pembina/IV/a','2020','2020-01-03','2','RIRIS ERNAWATI, SE','RIRIS ERNAWATI, SE','2019-12-31 09:26:23','2019-12-31 09:26:23'),
(12,'Perjanjian Kinerja Tahunan','197806292006041017','EKO PRASETYO, SE','Auditor Madya','Pembina (IV/a)','196801281994032009','LILIES WIDIANINGSIH, SE., MSi','Inspektur Pembantu Bidang Keuangan','Pembina Tk. I (IV/b)','2020','2020-01-07','2','EKO PRASETYO, SE','EKO PRASETYO, SE','2020-01-07 01:47:46','2020-01-07 01:47:46'),
(13,'Perjanjian Kinerja Tahunan','197806292006041017','EKO PRASETYO, SE','Auditor Madya','Pembina (IV/a)','197806292006041017','EKO PRASETYO, SE','Auditor Madya','Pembina (IV/a)','2020','2020-01-07','1','EKO PRASETYO, SE','EKO PRASETYO, SE','2020-01-07 01:48:40','2020-01-07 01:50:50'),
(14,'Perjanjian Kinerja Tahunan','197806292006041017','EKO PRASETYO, SE','Auditor Madya','Pembina (IV/a)','198402202005012002','TRIYA WIJAYANINGRUM, SAB','Kepala Sub Bagian Perencana','Penata (III/c)','2019','2019-04-17','1','EKO PRASETYO, SE','EKO PRASETYO, SE','2020-01-10 06:24:32','2020-01-10 07:07:52');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2017_07_12_145959_create_permission_tables',1),
(4,'2019_11_22_024453_create_surat_masuk_table',2),
(5,'2019_11_27_024634_create_surat_keluar_table',3),
(6,'2019_11_27_025057_create_disposisi_table',3),
(7,'2019_12_03_031134_create_surat_keluarku_table',4),
(8,'2019_12_04_053642_create_surat_tugas_table',5),
(9,'2019_12_04_054248_create_surat_cuti_table',6),
(10,'2019_12_04_054334_create_surat_kepegawaiaan_table',6),
(11,'2019_12_04_054409_create_undangan_table',6),
(12,'2019_12_04_054435_create_sk_table',6),
(13,'2019_12_04_060442_create_surat_out_table',7),
(14,'2019_12_04_060458_create_surat_in_table',7),
(15,'2019_12_10_091326_create_beritas_table',8),
(16,'2019_12_10_091521_create_gambars_table',8),
(17,'2019_12_10_091937_create_arsips_table',8),
(18,'2019_12_10_092004_create_kegiatans_table',8),
(19,'2019_12_10_092136_create_pegawais_table',8),
(20,'2019_12_10_092242_create_profils_table',8),
(21,'2019_12_10_092340_create_tag_beritas_table',8),
(22,'2019_12_16_012801_create_tb_profil_table',9),
(23,'2019_12_30_021012_create_perjanjians_table',10),
(24,'2019_12_30_021300_create_indikators_table',10),
(25,'2019_12_30_021450_create_perubahans_table',10),
(26,'2019_12_30_021528_create_laporans_table',10),
(27,'2019_12_30_030936_create_perjanjian_table',11),
(28,'2019_12_30_031018_create_indikator_table',11),
(29,'2019_12_30_031042_create_perubahan_table',11),
(30,'2019_12_30_031123_create_laporan_table',11),
(31,'2019_12_30_081006_create_sakip_table',12),
(32,'2019_12_30_082158_create_perjanjian_sakip_table',12),
(33,'2019_12_30_082217_create_perubahan_sakip_table',12),
(34,'2019_12_30_082235_create_indikator_sakip_table',12),
(35,'2019_12_30_082307_create_laporan_sakip_table',12),
(36,'2019_12_30_083223_create_inspektorat_sakip_table',13),
(37,'2019_12_30_083708_create_inspektorats_sakip_table',14),
(38,'2020_01_03_071822_create_jabatan_table',15),
(39,'2020_01_03_072155_create_golongan_table',15),
(40,'2020_01_06_040527_create_perjanjian_pengukuran_table',16),
(41,'2020_01_07_044147_create_perjanjian_pengukuran2_table',17),
(42,'2020_01_07_045412_create_program_sakip_table',17),
(43,'2020_01_10_072609_create_perjanjian_pengukuran_indikator_table',18),
(44,'2020_01_13_062631_create_indikator_tugas_fungsi_sakip_table',19),
(45,'2020_01_14_025128_create_inspektorat_sakip2_table',20),
(46,'2020_01_23_012344_create_status_pegawai_table',21),
(47,'2020_01_24_064328_create_modul_sakip_table',22),
(48,'2020_01_24_064347_create_prestasi_kerja_table',22),
(49,'2020_01_30_024252_create_pesan_sakip_table',23),
(50,'2020_02_11_055545_create_web_pengaduan_table',24),
(51,'2020_03_02_065328_create_surat_masuk1_table',25),
(52,'2020_03_02_072440_create_surat_masuk2_table',26),
(53,'2020_03_02_073110_create_surat_masuk3_table',27),
(54,'2020_03_03_024943_create_inventaris_barang_table',28),
(55,'2020_03_03_025351_create_inventaris_satuan_table',28),
(56,'2020_03_03_025435_create_inventaris_transaksi_table',28),
(57,'2020_03_03_043758_create_inventaris_transaksi1_table',29),
(58,'2020_03_03_063705_create_inventaris_barang1_table',30),
(59,'2020_03_03_063905_create_inventaris_jenis_barang_table',30),
(60,'2020_03_16_060732_create_inventaris_transaksi2_table',31),
(63,'2020_08_03_083338_create_web_video_table',33),
(64,'2020_07_15_070242_create_wbs_table',34),
(65,'2020_08_19_112810_create_web_berita_table',35),
(66,'2021_09_03_060239_create_absensi_table',36);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(1,'App\\User',2),
(1,'App\\User',8),
(1,'App\\User',12),
(1,'App\\User',20),
(1,'App\\User',42),
(1,'App\\User',59),
(1,'App\\User',62),
(1,'App\\User',63),
(1,'App\\User',64),
(2,'App\\User',6),
(2,'App\\User',14),
(5,'App\\User',7),
(5,'App\\User',12),
(5,'App\\User',13),
(5,'App\\User',15),
(5,'App\\User',16),
(5,'App\\User',17),
(5,'App\\User',18),
(5,'App\\User',19),
(5,'App\\User',21),
(5,'App\\User',22),
(5,'App\\User',24),
(5,'App\\User',25),
(5,'App\\User',26),
(5,'App\\User',27),
(5,'App\\User',28),
(5,'App\\User',29),
(5,'App\\User',30),
(5,'App\\User',31),
(5,'App\\User',32),
(5,'App\\User',33),
(5,'App\\User',34),
(5,'App\\User',35),
(5,'App\\User',36),
(5,'App\\User',37),
(5,'App\\User',38),
(5,'App\\User',39),
(5,'App\\User',40),
(5,'App\\User',41),
(5,'App\\User',43),
(5,'App\\User',44),
(5,'App\\User',45),
(5,'App\\User',46),
(5,'App\\User',47),
(5,'App\\User',48),
(5,'App\\User',49),
(5,'App\\User',50),
(5,'App\\User',51),
(5,'App\\User',52),
(5,'App\\User',53),
(5,'App\\User',54),
(5,'App\\User',55),
(5,'App\\User',56),
(5,'App\\User',57),
(5,'App\\User',58),
(5,'App\\User',60),
(6,'App\\User',23),
(7,'App\\User',61);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values 
('maulana03myr19@gmail.com','$2y$10$Ym0owIAP5h19lAAyLD7NkuKEd8oKPb/OWPsq6J59R/h88ef5kvdYu','2020-09-08 09:24:40');

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'users_manage','web','2019-11-21 08:52:29','2019-11-21 08:52:29'),
(8,'delete_manage','web','2019-12-05 01:21:34','2019-12-05 01:21:34'),
(9,'view_manage','web','2019-12-05 01:21:50','2019-12-05 01:21:50'),
(10,'add_manage','web','2019-12-05 01:22:03','2019-12-05 01:22:03'),
(11,'update_manage','web','2019-12-05 01:22:30','2019-12-05 01:22:30'),
(12,'tugas_manage','web','2019-12-05 02:53:45','2019-12-05 02:53:45'),
(13,'undangan_manage','web','2019-12-05 05:53:48','2019-12-05 05:53:48'),
(14,'suratkepegawaiaan_manage','web','2019-12-05 05:54:30','2019-12-06 01:48:11'),
(15,'arsip_manage','web','2019-12-16 02:30:23','2019-12-16 02:30:23'),
(16,'add_arsip_manage','web','2019-12-16 02:30:44','2019-12-16 02:30:44'),
(17,'edit_arsip_manage','web','2019-12-16 02:31:14','2019-12-16 02:31:14'),
(18,'delete_arsip_manage','web','2019-12-16 02:31:30','2019-12-16 02:31:30'),
(19,'gambar_manage','web','2019-12-16 02:32:05','2019-12-16 02:32:05'),
(20,'add_gambar_manage','web','2019-12-16 02:32:27','2019-12-16 02:32:27'),
(21,'edit_gambar_manage','web','2019-12-16 02:32:41','2019-12-16 02:32:41'),
(22,'delete_gambar_manage','web','2019-12-16 02:33:04','2019-12-16 02:33:04'),
(23,'tag_manage','web','2019-12-16 03:10:29','2019-12-16 03:10:29'),
(24,'add_tag_manage','web','2019-12-16 03:10:46','2019-12-16 03:10:46'),
(25,'edit_tag_manage','web','2019-12-16 03:11:04','2019-12-16 03:11:04'),
(26,'delete_tag_manage','web','2019-12-16 03:11:21','2019-12-16 03:11:21'),
(27,'profil_manage','web','2019-12-19 02:50:33','2019-12-19 02:50:33'),
(28,'add_profil_manage','web','2019-12-19 02:51:02','2019-12-19 02:51:02'),
(29,'edit_profil_manage','web','2019-12-19 02:51:18','2019-12-19 02:51:18'),
(30,'delete_profil_manage','web','2019-12-19 02:51:42','2019-12-19 02:51:42'),
(31,'kegiatan_manage','web','2019-12-26 01:04:43','2019-12-26 01:04:43'),
(32,'add_kegiatan_manage','web','2019-12-26 01:04:56','2019-12-26 01:04:56'),
(33,'edit_kegiatan_manage','web','2019-12-26 01:05:14','2019-12-26 01:05:14'),
(34,'delete_kegiatan_manage','web','2019-12-26 01:05:37','2019-12-26 01:05:37'),
(35,'berita_manage','web','2019-12-26 01:26:24','2019-12-26 01:26:24'),
(36,'add_berita_manage','web','2019-12-26 01:26:39','2019-12-26 01:26:39'),
(37,'edit_berita_manage','web','2019-12-26 01:26:59','2019-12-26 01:26:59'),
(38,'delete_berita_manage','web','2019-12-26 01:27:14','2019-12-26 01:27:14'),
(39,'pegawai_manage','web','2019-12-26 03:58:10','2019-12-26 03:58:10'),
(40,'add_pegawai_manage','web','2019-12-26 03:59:32','2019-12-26 03:59:32'),
(41,'edit_pegawai_manage','web','2019-12-26 04:00:03','2019-12-26 04:00:03'),
(42,'delete_pegawai_manage','web','2019-12-26 04:00:16','2019-12-26 04:00:16'),
(44,'sakip_manage','web','2019-12-30 03:24:46','2019-12-30 03:24:46'),
(45,'perjanjian_sakip_manage','web','2019-12-30 03:25:52','2019-12-30 03:25:52'),
(46,'add_perjanjian_sakip_manage','web','2019-12-30 03:26:08','2019-12-30 03:26:08'),
(47,'edit_perjanjian_sakip_manage','web','2019-12-30 03:26:27','2019-12-30 03:26:27'),
(48,'delete_perjanjian_sakip_manage','web','2019-12-30 03:26:57','2019-12-30 03:26:57'),
(49,'indikator_sakip_manage','web','2019-12-30 03:27:37','2019-12-30 03:27:37'),
(50,'add_indikator_sakip_manage','web','2019-12-30 03:27:56','2019-12-30 03:27:56'),
(51,'progress_indikator_sakip_manage','web','2019-12-30 03:28:18','2020-01-13 03:57:19'),
(52,'delete_indikator_sakip_manage','web','2019-12-30 03:28:42','2019-12-30 03:28:42'),
(53,'perubahan_sakip_manage','web','2019-12-30 03:29:18','2019-12-30 03:29:18'),
(54,'add_perubahan_sakip_manage','web','2019-12-30 03:29:44','2019-12-30 03:29:44'),
(55,'edit_perubahan_sakip_manage','web','2019-12-30 03:30:05','2019-12-30 03:30:05'),
(56,'delete_perubahan_sakip_manage','web','2019-12-30 03:30:27','2019-12-30 03:30:27'),
(57,'laporan_sakip_manage','web','2019-12-30 03:31:04','2019-12-30 03:31:04'),
(58,'add_laporan_sakip_manage','web','2019-12-30 03:31:20','2019-12-30 03:31:20'),
(59,'edit_laporan_sakip_manage','web','2019-12-30 03:31:44','2019-12-30 03:31:44'),
(60,'delete_laporan_sakip_manage','web','2019-12-30 03:32:11','2019-12-30 03:32:11'),
(61,'golongan_manage','web','2020-01-03 07:48:34','2020-01-03 07:48:34'),
(62,'jabatan_manage','web','2020-01-03 07:48:44','2020-01-03 07:48:44'),
(65,'atasan_sakip_manage','web','2020-01-06 06:00:11','2020-01-06 06:00:11'),
(66,'verifikasi_atasan_sakip_manage','web','2020-01-06 06:00:43','2020-01-06 06:00:43'),
(67,'progress_pengukuran_manage','web','2020-01-06 07:02:59','2020-01-06 07:02:59'),
(68,'pengukuran_manage','web','2020-01-06 07:03:13','2020-01-06 07:03:13'),
(69,'dashboard_sakip_manage','web','2020-01-09 00:46:56','2020-01-09 00:46:56'),
(70,'status_pegawai_manage','web','2020-01-23 01:44:39','2020-01-23 01:44:39'),
(71,'pengaduan_manage','web','2020-02-11 08:13:59','2020-02-11 08:13:59'),
(72,'pengaduan_delete_manage','web','2020-02-11 08:14:19','2020-02-11 08:14:19'),
(73,'surat_manage','web','2020-02-13 04:02:30','2020-02-13 04:02:30'),
(74,'surat_masuk_manage','web','2020-02-13 06:59:19','2020-02-13 06:59:19'),
(75,'sk_manage','web','2020-02-13 06:59:31','2020-02-13 06:59:31'),
(77,'disposisi_manage','web','2020-02-13 07:04:34','2020-02-13 07:04:34'),
(78,'surat_keluar_manage','web','2020-02-13 07:04:53','2020-02-13 07:38:40'),
(79,'cuti_manage','web','2020-02-13 07:19:24','2020-02-13 07:38:32'),
(80,'inventaris_manage','web','2020-03-03 06:17:07','2020-03-03 06:17:07'),
(81,'wbs_manage','web','2020-07-20 07:01:07','2020-07-20 07:01:07'),
(82,'video_manage','web','2020-08-03 09:49:53','2020-08-03 09:49:53'),
(83,'absensi_manage','web','2021-09-03 08:06:12','2021-09-03 08:06:12'),
(84,'absensi_delete_manage','web','2021-09-03 08:06:30','2021-09-03 08:06:30'),
(85,'absensi_edit_manage','web','2021-09-03 08:06:41','2021-09-03 08:06:41');

/*Table structure for table `profils` */

DROP TABLE IF EXISTS `profils`;

CREATE TABLE `profils` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arsip_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `profils` */

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values 
(1,1),
(1,3),
(8,1),
(8,3),
(8,4),
(8,5),
(8,6),
(8,7),
(8,8),
(9,1),
(9,2),
(9,3),
(9,4),
(9,5),
(9,6),
(9,7),
(9,8),
(10,1),
(10,2),
(10,3),
(10,4),
(10,5),
(10,6),
(10,7),
(10,8),
(11,1),
(11,3),
(11,4),
(11,6),
(11,7),
(11,8),
(12,1),
(12,3),
(12,4),
(12,6),
(12,7),
(13,1),
(13,3),
(13,4),
(13,6),
(13,7),
(14,1),
(14,3),
(14,4),
(14,6),
(14,7),
(15,1),
(15,6),
(15,7),
(16,1),
(16,6),
(16,7),
(17,1),
(17,6),
(17,7),
(18,1),
(18,6),
(18,7),
(19,1),
(19,6),
(19,7),
(20,1),
(20,6),
(20,7),
(21,1),
(21,6),
(21,7),
(22,1),
(22,6),
(22,7),
(23,1),
(23,6),
(23,7),
(24,1),
(24,6),
(24,7),
(25,1),
(25,6),
(25,7),
(26,1),
(26,6),
(26,7),
(27,1),
(27,6),
(27,7),
(28,1),
(28,6),
(28,7),
(29,1),
(29,6),
(29,7),
(30,1),
(30,6),
(30,7),
(31,1),
(31,6),
(31,7),
(32,1),
(32,6),
(32,7),
(33,1),
(33,6),
(33,7),
(34,1),
(34,6),
(34,7),
(35,1),
(35,6),
(35,7),
(36,1),
(36,6),
(36,7),
(37,1),
(37,6),
(37,7),
(38,1),
(38,6),
(38,7),
(39,1),
(39,2),
(40,1),
(40,2),
(40,6),
(40,7),
(41,1),
(41,2),
(41,6),
(41,7),
(42,1),
(42,2),
(42,6),
(42,7),
(44,1),
(44,2),
(44,5),
(44,6),
(45,1),
(45,5),
(45,6),
(45,7),
(46,1),
(46,5),
(46,6),
(46,7),
(47,1),
(47,5),
(47,6),
(47,7),
(48,1),
(48,5),
(48,6),
(48,7),
(49,1),
(49,2),
(49,5),
(49,6),
(49,7),
(50,1),
(50,2),
(50,5),
(50,6),
(50,7),
(51,1),
(51,2),
(51,5),
(51,6),
(51,7),
(52,1),
(52,2),
(52,5),
(52,6),
(52,7),
(53,1),
(53,5),
(53,6),
(53,7),
(54,1),
(54,5),
(54,6),
(54,7),
(55,1),
(55,5),
(55,6),
(55,7),
(56,1),
(56,5),
(56,6),
(56,7),
(57,1),
(57,6),
(57,7),
(58,1),
(58,2),
(58,6),
(58,7),
(59,1),
(59,2),
(59,6),
(59,7),
(60,1),
(60,2),
(60,6),
(60,7),
(61,1),
(61,2),
(61,6),
(61,7),
(62,1),
(62,2),
(62,6),
(62,7),
(65,1),
(65,2),
(65,5),
(65,6),
(65,7),
(66,1),
(66,2),
(66,5),
(66,6),
(66,7),
(67,1),
(67,2),
(67,5),
(67,6),
(67,7),
(68,1),
(68,2),
(68,5),
(68,6),
(68,7),
(69,1),
(69,2),
(69,5),
(69,6),
(69,7),
(70,1),
(70,2),
(70,6),
(70,7),
(71,1),
(71,6),
(71,7),
(72,1),
(72,6),
(72,7),
(73,1),
(73,6),
(73,7),
(74,1),
(74,6),
(74,7),
(75,1),
(75,6),
(75,7),
(77,1),
(77,6),
(77,7),
(78,1),
(78,6),
(78,7),
(79,1),
(79,6),
(79,7),
(80,1),
(81,1),
(81,8),
(82,1),
(83,1),
(84,1),
(85,1);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'administrator','web','2019-11-21 08:52:29','2019-11-21 08:52:29'),
(2,'Tata Usaha','web','2019-11-22 02:24:34','2019-11-22 02:24:34'),
(3,'Inspektur','web','2019-11-22 02:25:00','2019-11-22 02:25:00'),
(4,'demo','web','2019-12-04 02:06:51','2019-12-04 02:06:51'),
(5,'pegawai','web','2019-12-06 02:56:15','2019-12-06 02:56:15'),
(6,'e-surat','web','2020-03-02 07:56:52','2020-03-02 07:56:52'),
(7,'magang','web','2020-03-02 08:08:20','2020-03-02 08:08:20'),
(8,'wbs','web','2020-08-03 02:22:22','2020-08-03 02:22:22');

/*Table structure for table `sakip` */

DROP TABLE IF EXISTS `sakip`;

CREATE TABLE `sakip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nip_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator_kinerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formulasi_perhitungan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_data` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanggung_jawab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan_per_tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sakip` */

/*Table structure for table `tb_absensi` */

DROP TABLE IF EXISTS `tb_absensi`;

CREATE TABLE `tb_absensi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_atasan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `lampiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_absensi` */

insert  into `tb_absensi`(`id`,`nip`,`nama`,`nip_atasan`,`tanggal`,`jam`,`keterangan`,`lampiran`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(1,'196208251986111001','Drs. EKA SUPRASETYO AGUS PUTRANTO, MM','Inspektur','2021-09-03','06.30 - 07.00','','2021-09-03-196208251986111001-08-08-59ampak giri.jpeg','Drs. EKA SUPRASETYO AGUS PUTRANTO, MM','','2021-09-03 08:08:59','2021-09-03 08:08:59'),
(2,'196208251986111001','Drs. EKA SUPRASETYO AGUS PUTRANTO, MM','Inspektur','2021-09-03','06.30 - 07.00','','2021-09-03-196208251986111001-08-24-50amwallpapersc.png','Drs. EKA SUPRASETYO AGUS PUTRANTO, MM','','2021-09-03 08:24:50','2021-09-03 08:24:50');

/*Table structure for table `tb_arsip` */

DROP TABLE IF EXISTS `tb_arsip`;

CREATE TABLE `tb_arsip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_arsip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_arsip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_arsip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_arsip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_arsip` */

insert  into `tb_arsip`(`id`,`judul_arsip`,`nama_arsip`,`kategori_arsip`,`tag_arsip`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(10,'Perjanjian Kinerja Inspektur Kabupaten Jombang Tahun 2020','1.pdf','[\"profil\",\"kegiatan\"]','[\"profil\",\"kegiatan\",\"inspektorat\",\"pemkab\",\"pengumuman\"]','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-23 03:50:34','2020-08-14 02:18:56'),
(22,'Rencana Kerja Tahun 2019 Inspektorat Kabupaten Jombang','2.pdf','[\"profil\",\"kegiatan\"]','[\"profil\",\"kegiatan\",\"inspektorat\"]','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-23 06:33:03','2020-08-14 02:35:03'),
(23,'SK RKT 2020','3.pdf','[\"profil\",\"kegiatan\"]','[\"profil\",\"kegiatan\",\"inspektorat\",\"pemkab\",\"pengumuman\"]','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-23 08:41:03','2020-08-14 02:19:30'),
(26,'PKPK Perubahan Kedua Tahun 2020','2021-04-23-pkpk-perubahan-kedua-tahun-2020.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 01:58:06','2021-04-23 01:58:06'),
(28,'PKPT 2020 Inspektorat Kabupaten Jombang','2021-04-23-pkpt-2020-inspektorat-kabupaten-jombang.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:00:06','2021-04-23 02:00:06'),
(29,'PKPT Perubahan I Tahun 2020 (Perubahan karena Rasionalisasi)','2021-04-23-pkpt-perubahan-i-tahun-2020-perubahan-karena-rasionalisasi.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:00:39','2021-04-23 02:00:39'),
(30,'PKPT 2021','2021-04-23-pkpt-2021.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:01:44','2021-04-23 02:01:44'),
(31,'SOP Pemantauan TL dan SOP Penyelesaian TL','2021-04-23-sop-pemantauan-tl-dan-sop-penyelesaian-tl.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:07:18','2021-04-23 02:07:18'),
(32,'LAP MONEV IMPLEMENTASI KODE ETIK (REKAP TPP)','2021-04-23-lap-monev-implementasi-kode-etik-rekap-tpp.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:10:00','2021-04-23 02:10:00'),
(33,'LAPORAN MONEV IMPLEMENTASI KODE ETIK (REKAP TPP)','2021-04-23-laporan-monev-implementasi-kode-etik-rekap-tpp.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:10:23','2021-04-23 02:10:23'),
(34,'SK-ATURAN PERILAKU INSPEKTORAT JOMBANG','2021-04-23-sk-aturan-perilaku-inspektorat-jombang.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:11:15','2021-04-23 02:11:15'),
(35,'22 THN 2016 TUPOKSI INSPEKTORAT','2021-04-23-22-thn-2016-tupoksi-inspektorat.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:12:03','2021-04-23 02:12:03'),
(36,'PERBUP 44 Tahun 2019 ttg Perubahan Perbup 22 Tahun 2016 ttg SOTK Inspektorat Kab. Jombang','2021-04-23-perbup-44-tahun-2019-ttg-perubahan-perbup-22-tahun-2016-ttg-sotk-inspektorat-kab-jombang.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:12:35','2021-04-23 02:12:35'),
(37,'PERBUP 63 TH 2020','2021-04-23-perbup-63-th-2020.pdf','[\"profil\",\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:13:13','2021-04-23 02:13:13'),
(38,'Audit Charter 2017','2021-04-23-audit-charter.pdf','[\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-23 02:17:29','2021-04-23 02:18:00'),
(39,'Survey Kepuasan Layanan 2020','2021-07-01-survey-kepuasan-layanan-2020.pdf','[\"berita\"]','[\"inspektorat\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-07-01 12:47:16','2021-07-01 12:47:16'),
(40,'Renstra Perubahan 2018 - 2023','2021-09-16-renstra-perubahan-2018-2023.jpg','[\"berita\"]','[\"inspektorat\",\"pengumuman\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-09-16 07:22:21','2021-09-16 07:22:21'),
(42,'Kebijakan Pengawasan','2022-04-06-kebijakan-pengawasan.pdf','[\"kegiatan\",\"berita\"]','[\"pemkab\",\"pengumuman\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2021-12-09 00:56:46','2021-12-09 00:56:46'),
(43,'Piagam Audit Charter 2021','2022-04-06-piagam-audit-charter-2021.pdf','[\"berita\"]','[\"inspektorat\",\"pengumuman\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2021-12-09 00:58:05','2022-04-06 01:17:33'),
(44,'Laporan Evaluasi Penyelenggaraan Publik','2022-06-02-laporan-evaluasi-penyelenggaraan-publik-tahun-2021.pdf','[\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-06-02 07:22:18','2022-06-02 07:25:05'),
(45,'Standard Pelayanan Publik Pada Inspektorat Kabupaten Jombang','2022-06-02-standard-pelayanan-publik-pada-inspektorat-kabupaten-jombang.pdf','[\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-06-02 07:23:59','2022-06-02 07:23:59');

/*Table structure for table `tb_berita` */

DROP TABLE IF EXISTS `tb_berita`;

CREATE TABLE `tb_berita` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arsip_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_berita` */

/*Table structure for table `tb_disposisi` */

DROP TABLE IF EXISTS `tb_disposisi`;

CREATE TABLE `tb_disposisi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `disposisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_disposisi` */

insert  into `tb_disposisi`(`id`,`disposisi`,`deskripsi`,`created_by`,`created_at`,`updated_at`) values 
(2,'Kepala Inspektorat','Inspektur Jombang','Maulana Rizki','2019-11-28 02:15:44','2019-11-28 02:15:44'),
(6,'Sekretaris Inspektorat','Sekretaris Inspetorat Kab. Jombang','Maulana Rizki','2019-12-03 19:22:05','2019-12-03 19:22:05'),
(7,'Irban Keuangan','Inspektur Pembantu Keuangan Inspektorat Kab. Jombang','Maulana Rizki','2019-12-03 19:47:46','2019-12-03 19:47:46'),
(8,'Irban Pemerintahan','Inspektur Pembantu Pemerintahan Inspektorat Kab. Jombang','Maulana Rizki','2019-12-03 19:48:29','2019-12-03 19:48:29'),
(9,'Irban Ekonomi Kesra','Inspektur Pembantu Ekonomi Kesra Inspektorat Kab. Jombang','Maulana Rizki','2019-12-03 19:49:05','2019-12-03 19:49:05'),
(10,'Irban Pembangunan','Inspektur Pembantu Pembangunan Inspektorat Kab. Jombang','Maulana Rizki','2019-12-03 19:50:16','2019-12-03 19:50:16'),
(11,'Ka Sub Bag Umum','Kepala Sub Bagian Umum','Maulana Rizki','2019-12-03 19:51:39','2019-12-03 19:52:32'),
(12,'Ka Sub Bag Perencana','Kepala Sub Bagian Perencana','Maulana Rizki','2019-12-03 19:52:12','2019-12-03 19:52:12'),
(13,'Ka Sub Bag Evaluasi','Kepala Sub Bagian Evaluasi','Maulana Rizki','2019-12-03 19:53:02','2019-12-03 19:53:02');

/*Table structure for table `tb_gambar` */

DROP TABLE IF EXISTS `tb_gambar`;

CREATE TABLE `tb_gambar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_gambar` */

insert  into `tb_gambar`(`id`,`judul_gambar`,`nama_gambar`,`kategori_gambar`,`tag_gambar`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(4,'Kunjungan Kab. Mempawah','2019-12-23-kunjungan-kab-mempawah.jpg','[\"kegiatan\"]','[\"profil\",\"kegiatan\",\"inspektorat\",\"pemkab\",\"pengumuman\"]','Maulana Rizki','Maulana Rizki','2019-12-23 06:56:55','2019-12-23 07:37:59'),
(5,'Sosialisasi Gratifikasi Kab. Jombang','2020-08-12-.02-55-28am','[\"profil\",\"kegiatan\"]','[\"profil\",\"kegiatan\",\"inspektorat\",\"pemkab\",\"pengumuman\"]','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-23 07:38:33','2020-08-12 02:55:28'),
(6,'Purna Tugas Abah Sulis','2019-12-23-purna-tugas-abah-sulis.jpg','[\"profil\",\"kegiatan\",\"berita\"]','[\"profil\",\"kegiatan\",\"inspektorat\",\"pemkab\",\"pengumuman\"]','Maulana Rizki','Maulana Rizki','2019-12-23 07:38:54','2019-12-23 07:38:54'),
(7,'Telaah Sejawat','2019-12-23-telaah-sejawat.jpg','[\"profil\",\"kegiatan\",\"berita\"]','[\"profil\",\"kegiatan\",\"inspektorat\",\"pemkab\",\"pengumuman\"]','Maulana Rizki','Maulana Rizki','2019-12-23 07:39:12','2019-12-23 07:39:12'),
(9,'Drs. EKA SUPRASETYO AGUS PUTRANTO, MM','2019-12-26-drs-eka-suprasetyo-agus-putranto-mm.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 05:53:26','2019-12-26 05:53:26'),
(10,'LILIES WIDIANINGSIH, SE., MSi','2019-12-26-lilies-widianingsih-se-msi.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 05:54:14','2019-12-26 05:54:14'),
(11,'Drs. GANGSAR AGUNG PRASETIJO','2019-12-26-drs-gangsar-agung-prasetijo.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 05:55:06','2019-12-26 05:55:06'),
(12,'AGUNG HARIADI, ST., MM','2019-12-26-agung-hariadi-st-mm.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 05:55:54','2019-12-26 05:55:54'),
(13,'ANIS ZUL HULAIFAH, MM','2019-12-26-anis-zul-hulaifah-mm.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 05:56:59','2019-12-26 05:56:59'),
(14,'NI KETUT MURBAWATI, SE., M.Si.','2019-12-26-ni-ketut-murbawati-se-msi.jfif','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 05:57:37','2019-12-26 05:57:37'),
(15,'IKE ROCHMANIAR, SE','2019-12-26-ike-rochmaniar-se.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 05:58:17','2019-12-26 05:58:17'),
(16,'TRIYA WIJAYANINGRUM, SAB','2019-12-26-triya-wijayaningrum-sab.jfif','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 05:58:40','2019-12-26 05:58:40'),
(17,'DWI DAHAT SUDARSONO, SE','2019-12-26-dwi-dahat-sudarsono-se.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 05:59:12','2019-12-26 05:59:12'),
(18,'TUTUK MAHMULAH, SE','2019-12-26-tutuk-mahmulah-se.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:00:01','2019-12-26 06:00:01'),
(19,'ANIK YULIATI, SE','2019-12-26-anik-yuliati-se.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:00:26','2019-12-26 06:00:26'),
(20,'Dra. WAHYU RATNA SULISTIYANI','2019-12-26-dra-wahyu-ratna-sulistiyani.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:00:53','2019-12-26 06:00:53'),
(21,'ABD. WAHID, SE','2019-12-26-abd-wahid-se.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:01:20','2019-12-26 06:01:20'),
(22,'ELY SRIWULAN, S.Sos','2019-12-26-ely-sriwulan-ssos.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:01:51','2019-12-26 06:01:51'),
(23,'EKO PRASETYO, SE','2019-12-26-eko-prasetyo-se.jpeg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:02:21','2019-12-26 06:02:21'),
(24,'RIRIS ERNAWATI, SE','2019-12-26-riris-ernawati-se.jpeg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:02:49','2019-12-26 06:02:49'),
(25,'JOKO KUNTO WIBISONO, SE','2019-12-26-joko-kunto-wibisono-se.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:03:33','2019-12-26 06:03:33'),
(26,'MAYA ERMANINGSIH, S.Farm.Apt','2019-12-26-maya-ermaningsih-sfarmapt.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:04:02','2019-12-26 06:04:02'),
(27,'NINA ROSALINA, SE','2019-12-26-nina-rosalina-se.jpeg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:04:32','2019-12-26 06:04:32'),
(28,'TAUFIK AKBAR SOLIKIN, ST','2019-12-26-taufik-akbar-solikin-st.jfif','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:05:19','2019-12-26 06:05:19'),
(29,'ENDANG NOVI TRIANA, SE','2019-12-26-endang-novi-triana-se.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:05:48','2019-12-26 06:05:48'),
(30,'DEDDY PERMADI, SH','2019-12-26-deddy-permadi-sh.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:06:25','2019-12-26 06:06:25'),
(31,'YUNI PRAVITASARI, SPt','2019-12-26-yuni-pravitasari-spt.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:06:53','2019-12-26 06:06:53'),
(32,'NEON AGUSTIN PARNARIRIN, SE','2019-12-26-neon-agustin-parnaririn-se.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:07:24','2019-12-26 06:08:28'),
(33,'SETIA RINI ARIESTA R., S.E.','2019-12-26-setia-rini-ariesta-r-se.jpeg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:07:47','2019-12-26 06:07:47'),
(34,'ISA WHISNU YUDISTIRA, SE','2019-12-26-isa-whisnu-yudistira-se.jpeg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:08:11','2019-12-26 06:08:11'),
(35,'EKO ADI CANDRA, SE','2019-12-26-eko-adi-candra-se.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:09:02','2019-12-26 06:09:02'),
(36,'DINA FITRIANA, SE','2019-12-26-dina-fitriana-se.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:09:26','2019-12-26 06:09:26'),
(37,'LELITA DWI MEIRANY, SE','2019-12-26-lelita-dwi-meirany-se.jfif','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:09:55','2019-12-26 06:09:55'),
(38,'DIAN FITRIANI, S.IP.','2019-12-26-dian-fitriani-sip.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:10:21','2019-12-26 06:10:21'),
(39,'RINA DWI SEPTANINGSIH, SH','2019-12-26-rina-dwi-septaningsih-sh.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:10:48','2019-12-26 06:10:48'),
(40,'DWI ANITA MARETIKA SARI, S.E.','2019-12-26-dwi-anita-maretika-sari-se.jfif','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:11:46','2019-12-26 06:11:46'),
(41,'FITRIYANINGRUM NUR HIDAYAH, S.A.','2019-12-26-fitriyaningrum-nur-hidayah-sa.jpeg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:12:43','2019-12-26 06:12:43'),
(42,'YOGA PRATAMA, S.E','2019-12-26-yoga-pratama-se.jfif','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-26 06:13:20','2019-12-26 06:13:20'),
(43,'Maulana Rizki','2019-12-30-maulana-rizki.jpg','[\"pegawai\"]','[\"foto\"]','Maulana Rizki','Maulana Rizki','2019-12-30 04:16:59','2019-12-30 04:16:59'),
(44,'user','2020-01-29-user.png','[\"pegawai\"]','[\"foto\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 03:54:12','2020-01-29 03:54:12'),
(45,'user1','2020-01-29-user1.png','[\"pegawai\"]','[\"foto\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 03:59:15','2020-01-29 03:59:15'),
(46,'user2','2020-01-29-user2.png','[\"pegawai\"]','[\"foto\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 03:59:46','2020-01-29 03:59:46'),
(47,'female','2020-03-02-female.png','[\"pegawai\"]','[\"foto\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-03-02 08:04:56','2020-03-02 08:04:56'),
(48,'https://www.kpk.go.id/','2020-07-06-httpswwwkpkgoid.png','[\"iklan\"]','[\"iklan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-07-06 03:13:57','2020-07-06 03:13:57'),
(49,'https://www.lapor.go.id/','2020-07-06-httpswwwlaporgoid.jpg','[\"iklan\"]','[\"iklan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-07-06 03:16:33','2020-07-06 03:16:33'),
(50,'https://www.jombangkab.go.id/','2020-07-06-httpswwwjombangkabgoid.png','[\"iklan\"]','[\"iklan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-07-06 03:17:22','2020-07-06 03:17:22'),
(55,'Pengawasan Lapangan','2020-07-29-pengawasan-lapangan.jpg','[\"kegiatan\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-07-29 08:26:47','2020-07-29 08:26:47'),
(57,'Pengawasan Lapangan','2020-08-12-02-56-40am.jpg','[\"kegiatan\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-07-29 08:32:27','2020-08-12 02:56:40'),
(58,'Kunjungan Cyber Pungli Semarang','2020-07-29-kunjungan-cyber-pungli-semarang-08-39-19am.jpg','[\"kegiatan\",\"berita\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-07-29 08:39:19','2020-07-29 08:39:19'),
(59,'Kunjungan Cyber Pungli Semarang','2020-07-29-kunjungan-cyber-pungli-semarang-08-41-05am.jpg','[\"kegiatan\",\"berita\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-07-29 08:41:05','2020-07-29 08:41:05'),
(60,'4 Potensi Korupsi Pada Penanganan Covid-19','2020-08-18-4-potensi-korupsi-pada-penanganan-covid-19-08-34-58am.jpg','[\"kegiatan\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-18 08:34:58','2020-08-18 08:34:58'),
(61,'Jaga Dana Bansos Dengan Jaga.id','2020-08-18-jaga-dana-bansos-dengan-jagaid-08-42-30am.jpg','[\"kegiatan\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-18 08:42:30','2020-08-18 08:42:30'),
(62,'Dirgahayu Republik Indonesia ke-75','2020-08-18-dirgahayu-republik-indonesia-ke-75-09-37-55am.jpg','[\"kegiatan\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-18 09:37:55','2020-08-18 09:37:55'),
(63,'Selamat Tahun Baru Hijriah ke-1442','2020-08-25-selamat-tahun-baru-hijriah-ke-1442-07-47-34am.jpg','[\"berita\"]','[\"pengumuman\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-25 07:47:34','2020-08-25 07:47:34'),
(64,'Penyerahan Penghargaan Pencapaiaan Kapabilitas APIP Level 3 Kabupaten Jombang','2020-08-25-penyerahan-penghargaan-pencapaiaan-kapabilitas-apip-level-3-kabupaten-jombang-08-29-20am.jpg','[\"berita\",\"header\"]','[\"pengumuman\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-25 08:29:20','2020-08-25 08:29:20'),
(66,'Penyerahan Penghargaan Pencapaiaan Kapabilitas APIP Level 3 Kabupaten Jombang 1','2020-08-25-penyerahan-penghargaan-pencapaiaan-kapabilitas-apip-level-3-kabupaten-jombang-1-09-47-51am.jpg','[\"profil\"]','[\"profil\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-25 09:47:51','2020-08-25 09:47:51'),
(67,'Penyerahan Penghargaan Pencapaiaan Kapabilitas APIP Level 3 Kabupaten Jombang 2','2020-08-25-penyerahan-penghargaan-pencapaiaan-kapabilitas-apip-level-3-kabupaten-jombang-2-09-48-37am.jpg','[\"berita\"]','[\"pengumuman\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-25 09:48:37','2020-08-25 09:48:37'),
(68,'Studi Banding Secara Daring dengan Inspektorat Kabupaten Salatiga','2020-09-02-studi-banding-secara-daring-dengan-inspektorat-kabupaten-salatiga-02-55-55am.jpg','[\"berita\"]','[\"pengumuman\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-09-02 02:55:55','2020-09-02 02:55:55'),
(69,'Benmarking Reviu RKA Inspektorat Kota Salatiga dengan Inspektorat Kabupaten Jombang','2020-09-09-benmarking-reviu-rka-inspektorat-kota-salatiga-dengan-inspektorat-kabupaten-jombang-02-18-05am.jpg','[\"header\"]','[\"header\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-09-09 02:18:05','2020-09-09 02:18:05'),
(76,'Bimtek SISWASKEUDES 2020 oleh BPKP Jatim','2020-11-10-bimtek-siswaskeudes-2020-oleh-bpkp-jatim-04-13-39am-2.jpg','[\"profil\"]','[\"profil\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-11-10 04:13:39','2020-11-10 04:13:39'),
(77,'Bimtek SISWASKEUDES 2020 oleh BPKP Jatim','2020-11-10-bimtek-siswaskeudes-2020-oleh-bpkp-jatim-04-14-33am-3.jpg','[\"berita\"]','[\"kegiatan\",\"pengumuman\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-11-10 04:14:33','2020-11-10 04:14:33'),
(78,'Diskusi mengenai SPIP dengan BPKP dan APIP Jatim secara Daring','2020-11-10-diskusi-mengenai-spip-dengan-bpkp-dan-apip-jatim-secara-daring-04-29-06am-1.jpg','[\"berita\"]','[\"kegiatan\",\"pengumuman\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-11-10 04:29:06','2020-11-10 04:29:06'),
(79,'Diskusi mengenai SPIP dengan BPKP dan APIP Jatim secara Daring','2020-11-10-diskusi-mengenai-spip-dengan-bpkp-dan-apip-jatim-secara-daring-04-29-37am-2.jpg','[\"berita\"]','[\"kegiatan\",\"pengumuman\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-11-10 04:29:37','2020-11-10 04:29:37'),
(82,'Maklumat Pelayanan','2021-01-07-maklumat-pelayanan-05-15-58am-1.jpg','[\"profil\"]','[\"profil\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-01-07 05:15:58','2021-01-07 05:15:58'),
(83,'Vaksinasi  Covid Tahap 1 Inspektorat Kab. Jombang','2021-03-08-vaksinasi-covid-tahap-1-inspektorat-kab-jombang-12-57-06am-1.jpeg','[\"kegiatan\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-03-08 00:57:06','2021-03-08 00:57:06'),
(84,'Vaksinasi  Covid Tahap 1 Inspektorat Kab. Jombang','2021-03-08-vaksinasi-covid-tahap-1-inspektorat-kab-jombang-12-58-11am-2.jpeg','[\"kegiatan\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-03-08 00:58:11','2021-03-08 00:58:11'),
(85,'Rapat Koordinasi Pencegahan Korupsi, Monitoring dan Evaluasi (MCP) KPK','2021-03-08-rapat-koordinasi-pencegahan-korupsi-monitoring-dan-evaluasi-mcp-kpk-01-00-49am-2.jpeg','[\"kegiatan\"]','[\"kegiatan\"]','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-03-08 01:00:49','2021-03-08 01:00:49'),
(87,'struktur organisasi','2022-11-04-struktur-organisasi-12-31-40pm-struktur organisasi.png','[\"profil\",\"berita\"]','[\"profil\",\"foto\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-04 12:31:40','2022-11-04 12:31:40'),
(88,'penyelenggaraan kegiatan BIMTEK pada Hotel Ayola Tahun 2022','2022-11-07-penyelenggaraan-kegiatan-bimtek-pada-hotel-ayola-tahun-2022-01-12-18am-DSC08002.jpg','[\"kegiatan\"]','[\"kegiatan\",\"inspektorat\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 01:12:18','2022-11-07 01:12:18'),
(89,'Foto Bersama Setelah Kegiatan BimTek pada Hotel Ayola','2022-11-07-foto-bersama-setelah-kegiatan-bimtek-pada-hotel-ayola-01-19-01am-DSC08281.jpg','[\"profil\"]','[\"profil\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 01:19:01','2022-11-07 01:19:01'),
(90,'Rapat Koordinasi Evaluasi SAKIP di Ruang Rapat Inspektorat Kabupaten Jombang','2022-11-07-rapat-koordinasi-evaluasi-sakip-di-ruang-rapat-inspektorat-kabupaten-jombang-01-23-20am-IMG-20220915-WA0002.jpg','[\"kegiatan\"]','[\"kegiatan\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 01:23:20','2022-11-07 01:23:20'),
(91,'penghargaan peserta Bimtek Ter-Aktif','2022-11-07-penghargaan-peserta-bimtek-ter-aktif-02-20-03am-penghargaan peserta Bimtek Ter-Aktif.jpg','[\"kegiatan\",\"berita\"]','[\"kegiatan\",\"inspektorat\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 02:20:03','2022-11-07 02:20:03'),
(92,'pelatihan Fraud Control Plan','2022-11-07-pelatihan-fraud-control-plan-02-20-49am-pelatihan Fraud Control Plan.png','[\"kegiatan\",\"berita\"]','[\"kegiatan\",\"inspektorat\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 02:20:49','2022-11-07 02:20:49'),
(93,'Inspektorat Kerja Bakti','2022-11-07-inspektorat-kerja-bakti-02-21-30am-Inspektorat Kerja Bakti.png','[\"kegiatan\"]','[\"kegiatan\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 02:21:30','2022-11-07 02:21:30'),
(94,'pawai budaya atau karnaval mobil hias','2022-11-07-pawai-budaya-atau-karnaval-mobil-hias-02-22-00am-pawai budaya atau karnaval mobil hias.png','[\"kegiatan\",\"berita\"]','[\"kegiatan\",\"pemkab\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 02:22:00','2022-11-07 02:22:00'),
(95,'Pelatihan Probity Audit','2022-11-07-pelatihan-probity-audit-02-22-29am-Pelatihan Probity Audit.jpg','[\"kegiatan\",\"berita\"]','[\"kegiatan\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 02:22:29','2022-11-07 02:22:29'),
(96,'penghargaan sebagai Most Active dan  Best Learner','2022-11-07-penghargaan-sebagai-most-active-dan-best-learner-02-22-59am-penghargaan sebagai Most Active dan  Best Learner.png','[\"kegiatan\",\"berita\"]','[\"kegiatan\",\"inspektorat\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 02:22:59','2022-11-07 02:22:59'),
(97,'Partisipasi pegawai Inspektorat Kabupaten Jombang pada salah satu rangkaian perayaan Hari Jadi Pemerintah Kabupaten Jombang ke 112','2022-11-07-mengikuti-pagelaran-tari-remo-02-24-14am-mengikuti pagelaran Tari Remo.png','[\"kegiatan\"]','[\"pemkab\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 02:24:14','2022-12-18 03:57:08'),
(98,'SDM Aparat Pengawasan Intern Pemerintah (APIP)','2022-11-07-sdm-aparat-pengawasan-intern-pemerintah-apip-02-26-01am-SDM Aparat Pengawasan Intern Pemerintah (APIP).png','[\"kegiatan\"]','[\"kegiatan\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-07 02:26:01','2022-11-07 02:26:01'),
(99,'Inspektorat Kabupaten Jombang menjadi bagian dari 41.112 peserta yang mengikuti pagelaran Tari Remo Boletan Masal','2022-12-18-inspektorat-kabupaten-jombang-menjadi-bagian-dari-41112-peserta-yang-mengikuti-pagelaran-tari-remo-boletan-masal-04-01-02am-Tari Remo Boletan Masal.jpg','[\"kegiatan\"]','[\"inspektorat\"]','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-12-18 04:01:02','2022-12-18 04:01:02');

/*Table structure for table `tb_golongan` */

DROP TABLE IF EXISTS `tb_golongan`;

CREATE TABLE `tb_golongan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_golongan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_golongan` */

insert  into `tb_golongan`(`id`,`nama_golongan`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(1,'Juru Muda (I/a)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:16:30','2020-01-06 02:33:58'),
(2,'Juru Muda Tk. I (I/b)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:17:57','2020-01-06 01:17:57'),
(3,'Juru (I/c)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:18:22','2020-01-06 01:18:22'),
(4,'Juru Tk. I (I/d)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:18:57','2020-01-06 01:18:57'),
(5,'Pengatur Muda (II/a)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:19:24','2020-01-06 01:19:24'),
(6,'Pengatur Muda Tk. I (II/b)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:19:51','2020-01-06 01:19:51'),
(7,'Pengatur (II/c)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:20:45','2020-01-06 01:20:45'),
(8,'Pengatur Tk. I (II/d)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:21:08','2020-01-06 01:21:08'),
(9,'Penata Muda (III/a)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:21:29','2020-01-06 01:21:29'),
(10,'Penata Muda Tk. I (III/b)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:21:48','2020-01-06 01:21:48'),
(11,'Penata (III/c)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:22:09','2020-01-06 01:22:09'),
(12,'Penata Tk. I (III/d)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:22:43','2020-01-06 01:22:43'),
(13,'Pembina (IV/a)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:23:05','2020-01-06 01:23:05'),
(14,'Pembina Tk. I (IV/b)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:23:28','2020-01-06 01:23:28'),
(15,'Pembina Utama Muda (IV/c)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:23:49','2020-01-06 01:23:49'),
(16,'Pembina Utama Madya (IV/d)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:24:10','2020-01-06 01:24:10'),
(17,'Pembina Utama (IV/e)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 01:24:40','2020-01-06 01:24:40');

/*Table structure for table `tb_indikator_sakip` */

DROP TABLE IF EXISTS `tb_indikator_sakip`;

CREATE TABLE `tb_indikator_sakip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator_kinerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formulasi_perhitungan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_data` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanggung_jawab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan_per_tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_indikator_sakip` */

/*Table structure for table `tb_indikator_tugas_fungsi_sakip` */

DROP TABLE IF EXISTS `tb_indikator_tugas_fungsi_sakip`;

CREATE TABLE `tb_indikator_tugas_fungsi_sakip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_indikator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan_per_tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_indikator_tugas_fungsi_sakip` */

insert  into `tb_indikator_tugas_fungsi_sakip`(`id`,`id_sakip`,`indikator`,`tipe_indikator`,`urutan_per_tahun`,`created_by`,`created_at`,`updated_at`) values 
(1,'3','melakukan kegiatan pengawasan, yang dalam melaksanakan tugasnya bertanggung jawab kepada inspektur pembantu sesuai dengan bidangnya','1','1','MAULANA RIZKI, S.Kom','2020-01-13 08:51:58','2020-01-13 08:51:58'),
(2,'3','Mereviu dan menyusun program kerja pengawasan','2','2','MAULANA RIZKI, S.Kom','2020-01-13 08:53:11','2020-01-13 08:53:11'),
(3,'3','mereviu dan menyusun kertas kerja pengawasan','2','3','MAULANA RIZKI, S.Kom','2020-01-13 08:53:55','2020-01-13 08:53:55'),
(4,'3','Melakaukan instalasi sistem','2','4','MAULANA RIZKI, S.Kom','2020-01-13 09:21:30','2020-01-13 09:21:30'),
(5,'1','melakukan kegiatan pengawasan, yang dalam melaksanakan tugasnya bertanggung jawab kepada inspektur pembantu sesuai dengan bidangnya','1','1','MAULANA RIZKI, S.Kom','2020-01-15 04:52:21','2020-01-15 04:52:21'),
(6,'1','Mereviu dan menyusun program kerja pengawasan','2','2','MAULANA RIZKI, S.Kom','2020-01-15 04:52:30','2020-01-15 04:52:30'),
(7,'1','mereviu dan menyusun kertas kerja pengawasan','2','3','MAULANA RIZKI, S.Kom','2020-01-15 04:52:40','2020-01-15 04:52:40'),
(8,'1','Melakaukan instalasi sistem','2','4','MAULANA RIZKI, S.Kom','2020-01-15 04:52:50','2020-01-15 04:52:50'),
(9,'5','melakukan kegiatan pengawasan, yang dalam melaksanakan tugasnya bertanggung jawab kepada inspektur pembantu sesuai dengan bidangnya','1','1','MAULANA RIZKI, S.Kom','2020-01-23 08:39:42','2020-01-23 08:39:42'),
(10,'5','Mereviu dan menyusun program kerja pengawasan','2','2','MAULANA RIZKI, S.Kom','2020-01-23 08:40:02','2020-01-23 08:40:02'),
(11,'5','mereviu dan menyusun kertas kerja pengawasan','2','3','MAULANA RIZKI, S.Kom','2020-01-23 08:40:17','2020-01-23 08:40:17'),
(12,'5','Melakaukan instalasi sistem','2','4','MAULANA RIZKI, S.Kom','2020-01-23 08:40:28','2020-01-23 08:40:28'),
(13,'4','Mereviu dan menyusun program kerja pengawasan','2','2','MAULANA RIZKI, S.Kom','2020-01-23 08:43:50','2020-01-23 08:43:50'),
(14,'4','melakukan kegiatan pengawasan, yang dalam melaksanakan tugasnya bertanggung jawab kepada inspektur pembantu sesuai dengan bidangnya','1','1','MAULANA RIZKI, S.Kom','2020-01-23 08:44:03','2020-01-23 08:44:03'),
(15,'4','mereviu dan menyusun kertas kerja pengawasan','2','3','MAULANA RIZKI, S.Kom','2020-01-23 08:44:15','2020-01-23 08:44:15'),
(16,'4','Melakaukan instalasi sistem','1','4','MAULANA RIZKI, S.Kom','2020-01-23 08:44:26','2020-01-23 08:44:26'),
(17,'13','melakukan kegiatan pengawasan, yang dalam melaksanakan tugasnya bertanggung jawab kepada inspektur pembantu sesuai dengan bidangnya','1','1','TAUFIK AKBAR SOLIKIN, ST','2020-01-29 07:12:44','2020-01-29 07:12:44'),
(18,'13','Mereviu dan menyusun program kerja pengawasan','2','2','TAUFIK AKBAR SOLIKIN, ST','2020-01-29 07:12:53','2020-01-29 07:12:53'),
(19,'13','mereviu dan menyusun kertas kerja pengawasan','2','3','TAUFIK AKBAR SOLIKIN, ST','2020-01-29 07:13:02','2020-01-29 07:13:02'),
(20,'14','melakukan kegiatan pengawasan, yang dalam melaksanakan tugasnya bertanggung jawab kepada inspektur pembantu sesuai dengan bidangnya','1','1','RIRIS ERNAWATI, SE','2020-01-29 07:52:41','2020-01-29 07:52:41'),
(21,'14','Mereviu dan menyusun program kerja pengawasan','2','2','RIRIS ERNAWATI, SE','2020-01-29 07:52:49','2020-01-29 07:52:49'),
(22,'14','mereviu dan menyusun kertas kerja pengawasan','2','3','RIRIS ERNAWATI, SE','2020-01-29 07:53:10','2020-01-29 07:53:10'),
(23,'14','Melakaukan instalasi sistem','2','4','RIRIS ERNAWATI, SE','2020-01-29 07:53:19','2020-01-29 07:53:19'),
(24,'10','melakukan kegiatan pengawasan, yang dalam melaksanakan tugasnya bertanggung jawab kepada inspektur pembantu sesuai dengan bidangnya','1','1','MAULANA RIZKI, S.Kom','2020-01-30 01:58:12','2020-01-30 01:58:12'),
(25,'10','Mereviu dan menyusun program kerja pengawasan','2','2','MAULANA RIZKI, S.Kom','2020-01-30 01:58:21','2020-01-30 01:58:21'),
(26,'10','mereviu dan menyusun kertas kerja pengawasan','2','3','MAULANA RIZKI, S.Kom','2020-01-30 01:58:30','2020-01-30 01:58:30'),
(27,'10','Melakaukan instalasi sistem','2','4','MAULANA RIZKI, S.Kom','2020-01-30 01:58:40','2020-01-30 01:58:40');

/*Table structure for table `tb_inventaris_barang` */

DROP TABLE IF EXISTS `tb_inventaris_barang`;

CREATE TABLE `tb_inventaris_barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_inventaris_barang` */

insert  into `tb_inventaris_barang`(`id`,`nama_barang`,`id_satuan`,`harga_barang`,`id_jenis_barang`,`created_at`,`updated_at`) values 
(1,'Kertas HVS 70 gram','2','46000','5','2020-03-03 08:23:20','2020-03-16 17:14:50'),
(3,'Kertas A4 70 gram','1','42000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(4,'Kertas A4 80 gram','1','47500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(5,'Kertas HVS 80 gram','1','40000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(6,'Kertas CD','1','37500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(7,'Kertas CD Plano','1','1000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(8,'Spidol Withboard','1','8000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(9,'Bollpoin snowman','1','25000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(10,'Bollpoin T120','1','55000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(11,'Bollpoin V5','1','35000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(12,'Bollpoin T340','1','39000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(13,'Bollpoin PGN AG-7','1','17500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(14,'Pita Printer EPSON','1','5000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(15,'Pensil','1','3208','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(16,'Karet Penghapus','1','2000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(17,'Isi Staples No 10','1','5500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(18,'Trigonal Klip','1','2083','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(19,'Odner','1','22500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(20,'Map Snelhekter Kertas ','1','33000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(21,'Map Snelhekter Kertas Merah','1','27000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(22,'Map Snelhekter Plastik','1','2500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(23,'Stop Map Kertas','1','30000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(24,'Tape Ex','1','10000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(25,'Tape Ex','1','34000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(26,'Tape Ex Rol','1','6500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(27,'Staples no 10','1','20000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(28,'Remover Staples','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(29,'Buku Tulis ','1','25000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(30,'Amplop Kecil','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(31,'Penggaris 30 CM','1','2500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(32,'Penggaris 30 CM besi','1','10000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(33,'Plakban Hitam','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(34,'Plakban Bening','1','12000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(35,'Plakban Coklat','1','10500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(36,'Solasi kecil','1','1000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(37,'Kertas Fax','1','35000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(38,'Lem Kertas Povinal','1','6000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(39,'Binder Klip Trigonal besar','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(40,'Isi Tonner 12a','1','112200','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(41,'Isi Tonner','1','102000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(42,'Isi Tonner','1','295000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(43,'Isi Tonner 85a,79a','1','76500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(44,'Tinta Printer 177fw','1','250000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(45,'Tinta Printer Warna','1','350000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(46,'Tinta Printer  ','1','91800','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(47,'Tinta Printer ','1','36750','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(48,'Tinta Printer Canon','1','35700','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(49,'Tinta Printer Warna','1','41300','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(50,'Tinta Printer Epson','1','212400','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(51,'Tinta Printer Epson','1','100000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(52,'Tinta Printer Epson 774','1','198900','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(53,'Spidol Permanen','1','7000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(54,'Amplop Besar','1','20000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(55,'Buku Kwitansi','1','4000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(56,'Binder Klip no.107','1','4583','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(57,'Binder Klip No. 111','1','2708','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(58,'Binder Klip No.155','1','14000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(59,'Binder Klip No. 260','1','19000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(60,'Baterai','1','9000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(61,'Odner Folio','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(62,'Tinta Stampel','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(63,'Post It','1','6500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(64,'Post It Panah','1','10000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(65,'Post It ','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(66,'Stabillo','1','9000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(67,'Blocknote','1','1750','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(68,'Baterai Alkalin AA','1','28900','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(69,'Baterai Alkalin','1','19125','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(70,'Map Kancing','1','23000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(71,'Map L','1','12000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(72,'Cutter Besar','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(73,'Cutter kecil','1','7500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(74,'Gunting Kecil','1','6000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(75,'Gunting Sedang','1','10000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(76,'Isi Cutter','1','7500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(77,'Isi Cutter Kecil','1','3000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(78,'Snel Plastik','1','26750','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(79,'Baterai Alkalin','1','33200','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(80,'Buku K/M','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(81,'Amplop Besar','1','20000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(82,'Baterai Alkalin AAA','1','39600','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(83,'Kalkulator','1','145000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(84,'HVS Warna','1','60000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(85,'Buku Folio 100 Kiky','1','10000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(86,'Kertas BC Putih','1','19000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(87,'Kertas BC Putih','1','13000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(88,'Label Harga','1','3000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(89,'Tinta Printer','1','34000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(90,'Buku Quarto Isi 100','1','12000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(91,'Stipo Pantel','1','37500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(92,'CD RW','1','7000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(93,'Parfurator','1','85000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(94,'Ballpoint Pilot Balltines ','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(95,'Ballpoint Pilot BPT-P','1','2500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(96,'Pembatas Kertas (Flex Tab)','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(97,'Double Tape Putih','1','3500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(98,'Amplop Tali','1','14000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(99,'Box File V-Tec','1','15000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(100,'Tali Rafia','1','15500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(101,'Kertas Photo','1','20000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(102,'Baterai ABC A3','1','33500','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(103,'Rafile Tonner 17A','1','600000','5','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(104,'Pengharum ruangan','1','14950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(105,'Tempat sabun','1','25190','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(106,'Parfum mobil AC','1','18500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(107,'Pengharum kamar mandi','1','12950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(108,'Sabun mandi','1','2295','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(109,'Sabun mandi','1','2100','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(110,'Sabun mandi','1','4400','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(111,'Sabun mandi cair','1','24545','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(112,'Sabun mandi cair','1','6895','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(113,'Obat nyamuk spary','1','26450','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(114,'Serbet','1','21950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(115,'Canebo','1','15500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(116,'Sabun cuci piring','1','27450','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(117,'Keset besar','1','43750','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(118,'Keset karpet','1','45950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(119,'Tempat sampah','1','20000','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(120,'Sabun deterjen','1','34250','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(121,'Spon Busa','1','2500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(122,'Sabun Cuci tangan','1','111450','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(123,'Tissu Multi MP 02','1','33950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(124,'Tissu Multi MP 03','1','5950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(125,'Tissu Multi MP 08','1','24750','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(126,'Sasir','1','26000','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(127,'Tissu Roll','1','12950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(128,'Handuk Serbet Gantung','1','25950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(129,'Sulak Bulu','1','81500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(130,'Silikon Oil','1','20000','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(131,'Silikon cream','1','17000','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(132,'Lap Mobil','1','18500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(133,'Canebo','1','19950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(134,'Shampo Mobil','1','11490','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(135,'Sabun Cuci Tangan','1','7250','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(136,'Pengharum mobil','1','28500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(137,'Pengharum mobil','1','29500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(138,'Pengharum mobil','1','12500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(139,'Pengharum mobil','1','11000','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(140,'Tissu','1','22450','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(141,'Tissu','1','18450','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(142,'Obat nyamuk spary','1','33950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(143,'Obat nyamuk spary','1','35895','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(144,'Obat nyamuk spary','1','18945','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(145,'Tissu PB 10','1','29950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(146,'Tissu','1','20750','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(147,'Tissu','1','27450','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(148,'Kasa cuci piring','1','8500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(149,'Busa cuci mobil','1','4745','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(150,'Keset besar','1','65950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(151,'Korek Gas ','1','17500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(152,'Sabun Cuci Tangan','1','49500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(153,'Keset','1','140950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(154,'Handuk Serbet Gantung','1','124500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(155,'Handuk Serbet Gantung','1','92500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(156,'Sabun pewangi cucian','1','16150','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(157,'Sabun cuci tangan','1','12250','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(158,'Sabun cuci tangan','1','12350','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(159,'Sabun cuci tangan','1','12395','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(160,'Sapu mobil','1','3950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(161,'Keset','1','24500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(162,'Keset','1','37500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(163,'Sapu','1','34500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(164,'Kapur barus','1','17950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(165,'Kapur barus','1','14500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(166,'Kapur barus','1','20950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(167,'Pengharum Ruangan','1','9950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(168,'Pengharum Ruangan','1','12950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(169,'Kanebo','1','28500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(170,'Sabun cuci piring','1','63950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(171,'Kit','1','23950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(172,'Kit','1','7950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(173,'Lab Warna','1','8500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(174,'Kantong Sampah','1','35000','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(175,'Kantong Sampah','1','27500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(176,'Serbet','1','20750','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(177,'Tissu ','1','8500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(178,'Sabun Cuci Piring','1','30700','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(179,'Pengharum','1','7950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(180,'Pengharum','1','8250','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(181,'Pengharum','1','27500','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(182,'Tempat Sampah','1','89950','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(183,'Tempat Sampah','1','75000','4','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(184,'Materai 3000','1','3000','3','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(185,'Materai 6000','1','6000','3','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(186,'Kabel NYM','1','3000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(187,'Kabel Vitio 2x50 Bening','1','1800','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(188,'Lampu E-14 5 w','1','17000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(189,'Essisensial 23 W','1','36000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(190,'Lampu LED 100 W','1','70000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(191,'Lampu LED 3W','1','17000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(192,'Lampu LED 4W','1','22000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(193,'Lampu bolam Spiral','1','64000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(194,'Stop kontak ','1','13000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(195,'Klem Kabel 8','1','14500','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(196,'Klem Kabel 10','1','5000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(197,'Lampu TL 20 W','1','15000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(198,'Steker','1','12500','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(199,'Travo ','1','35000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(200,'Jek T','1','9000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(201,'Stater','1','12500','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(202,'Kabel','1','6000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(203,'Lampu LED Strip 100 m','1','725000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(204,'Essisensial 18 W','1','29000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(205,'Isolasi','1','5500','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(206,'Bravet LED','1','100000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(207,'Lampu LED 6 W','1','38000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(208,'LED E14 Kuning','1','21000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(209,'EMME HANNOCHS 10 W','1','74000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(210,'EME SURYA LED 10 W','1','69000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(211,'Kabel NYM BLIIZ','1','9000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(212,'MCB ','1','42000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(213,'Lampu LED Strip','1','10000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(214,'Lampu LED 8 W','1','29000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(215,'Kap lampu','1','55000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(216,'Adaptor','1','29000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(217,'Lampu ','1','26000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(218,'Lampu TL 18 w','1','11000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(219,'Steker','1','7000','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(220,'Stop kontak ','1','26500','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(221,'Lampu TL 32 w','1','27500','2','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(222,'Hardisk eksternal','1','901000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(223,'Mouse','1','150000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(224,'Keyboard','1','150000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(225,'Wireless','1','125000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(226,'Kabel USB','1','25000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(227,'Catrige Hitam','1','200000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(228,'Catrige Warna','1','210000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(229,'Catrige 811','1','270300','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(230,'Catrige ','1','247800','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(231,'Catrige PG 810','1','224400','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(232,'Catrige PG 740','1','214200','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(233,'Catrige PG 740','1','306000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(234,'Catrige PG 741','1','316000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(235,'Tonner Laser','1','1326000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(236,'Tonner Laser 17 A','1','682500','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(237,'Kabel VGA','1','120000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(238,'HUB','1','45000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(239,'Adaptor Laptop','1','140000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(240,'Kabel Power Printer','1','17500','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(241,'Flasdisk','1','90000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(242,'Catrige','1','142500','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(243,'RC-45 LAM','1','5000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(244,'POE','1','15000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(245,'Catrige Warna','1','325000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(246,'Kabel VGA','1','200000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(247,'Kabel HDMI','1','175000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(248,'Werles Router','1','350000','1','2020-03-05 04:36:46','2020-03-05 04:36:46'),
(249,'Tang Tool Lam','1','100000','1','2020-03-05 04:36:46','2020-03-05 04:36:46');

/*Table structure for table `tb_inventaris_jenis_barang` */

DROP TABLE IF EXISTS `tb_inventaris_jenis_barang`;

CREATE TABLE `tb_inventaris_jenis_barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_jenis_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_inventaris_jenis_barang` */

insert  into `tb_inventaris_jenis_barang`(`id`,`nama_jenis_barang`,`created_at`,`updated_at`) values 
(1,'Perlengkapan Komputer','2020-03-03 07:40:14','2020-03-03 07:40:14'),
(2,'Peralatan Listrik','2020-03-03 07:40:33','2020-03-03 07:40:33'),
(3,'Benda POS (Materai)','2020-03-03 07:40:49','2020-03-03 07:40:49'),
(4,'Peralatan dan Bahan Kebersihan','2020-03-03 07:41:10','2020-03-03 07:41:10'),
(5,'Alat Tulis Kantor','2020-03-03 07:41:28','2020-03-03 07:41:28');

/*Table structure for table `tb_inventaris_satuan` */

DROP TABLE IF EXISTS `tb_inventaris_satuan`;

CREATE TABLE `tb_inventaris_satuan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_inventaris_satuan` */

insert  into `tb_inventaris_satuan`(`id`,`nama_satuan`,`created_at`,`updated_at`) values 
(1,'-',NULL,NULL),
(2,'rim','2020-03-03 07:30:01','2020-03-03 07:30:01'),
(3,'lbr','2020-03-03 07:30:15','2020-03-03 07:30:15'),
(4,'bh','2020-03-03 07:30:39','2020-03-03 07:30:39'),
(5,'lsn','2020-03-03 07:30:46','2020-03-03 07:30:46'),
(6,'dosen','2020-03-03 07:30:56','2020-03-03 07:30:56'),
(7,'pcs','2020-03-03 07:31:09','2020-03-03 07:31:09'),
(8,'doos','2020-03-03 07:31:20','2020-03-03 07:31:20'),
(9,'pak','2020-03-03 07:31:29','2020-03-03 07:31:29'),
(10,'roll','2020-03-03 07:33:21','2020-03-03 07:33:21'),
(11,'btl','2020-03-03 07:33:33','2020-03-03 07:33:33'),
(12,'kl','2020-03-03 07:33:45','2020-03-03 07:33:45'),
(13,'ltr','2020-03-03 07:33:57','2020-03-03 07:33:57'),
(14,'keping','2020-03-03 07:38:25','2020-03-03 07:38:25'),
(15,'kg','2020-03-03 07:38:38','2020-03-03 07:38:38'),
(16,'bj','2020-03-03 07:38:58','2020-03-03 07:38:58'),
(17,'biji','2020-03-03 07:39:13','2020-03-03 07:39:13'),
(18,'m','2020-03-03 07:39:44','2020-03-03 07:39:44');

/*Table structure for table `tb_inventaris_transaksi` */

DROP TABLE IF EXISTS `tb_inventaris_transaksi`;

CREATE TABLE `tb_inventaris_transaksi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal_diterima` date NOT NULL,
  `id_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pembuatan` date NOT NULL,
  `saldo_awal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irban_pemb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irban_ek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irban_keu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irban_pem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sisa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_inventaris_transaksi` */

insert  into `tb_inventaris_transaksi`(`id`,`tanggal_diterima`,`id_barang`,`id_satuan`,`merk`,`tahun_pembuatan`,`saldo_awal`,`barang_masuk`,`harga_satuan`,`irban_pemb`,`irban_ek`,`irban_keu`,`irban_pem`,`sekret`,`sisa`,`no_surat`,`keterangan`,`created_by`,`created_at`,`updated_at`) values 
(1,'2020-03-16','1','2','-','2020-03-05','0','200','46000','0','0','0','0','0','200','15','9200000','MAULANA RIZKI, S.Kom','2020-03-16 17:15:29','2020-03-16 17:15:29'),
(2,'2020-03-16','1','2','-','2020-03-05','200','0','46000','10','0','5','0','5','180','12','0','MAULANA RIZKI, S.Kom','2020-03-16 17:16:27','2020-03-16 17:16:27'),
(3,'2020-03-17','1','2','-','2020-03-05','180','0','46000','10','10','10','0','0','150','12','0','MAULANA RIZKI, S.Kom','2020-03-16 18:42:07','2020-03-16 18:42:07'),
(4,'2020-03-16','6','1','-','2020-03-05','0','25','37500','0','0','0','0','0','25','1','0','MAULANA RIZKI, S.Kom','2020-03-16 18:46:13','2020-03-16 18:46:13');

/*Table structure for table `tb_jabatan` */

DROP TABLE IF EXISTS `tb_jabatan`;

CREATE TABLE `tb_jabatan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(573) DEFAULT NULL,
  `created_by` varchar(573) DEFAULT NULL,
  `updated_by` varchar(573) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jabatan` */

insert  into `tb_jabatan`(`id`,`nama_jabatan`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(1,'Fungsional Umum','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:42:22','2020-01-06 02:49:39'),
(2,'Auditor Penyelia','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-06 02:42:41','2021-04-13 12:16:11'),
(3,'Auditor Kepegawaian','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-06 02:42:56','2021-04-13 12:16:20'),
(4,'Auditor Pertama','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:43:11','2020-01-06 02:43:11'),
(5,'Auditor Muda','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:43:22','2020-01-06 02:43:22'),
(6,'Auditor Madya','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:43:34','2020-01-06 02:43:34'),
(7,'P2UPD Ahli Muda','MAULANA RIZKI, S.Kom','TRIYA WIJAYANINGRUM, SAB','2020-01-06 02:43:56','2022-02-22 03:17:25'),
(8,'Perencana Ahli Muda','MAULANA RIZKI, S.Kom','TRIYA WIJAYANINGRUM, SAB','2020-01-06 02:44:15','2022-02-11 06:55:33'),
(9,'Kepala Sub Bagian Umum, Keuangan dan Aset','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:44:35','2021-04-08 08:55:54'),
(10,'Inspektur Pembantu Bidang Investigasi','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-06 02:45:08','2021-04-13 12:22:27'),
(11,'Inspektur Pembantu Bidang Keuangan dan Aset','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-06 02:45:28','2021-04-13 12:22:51'),
(12,'Inspektur Pembantu Bidang Pembangunan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:45:53','2020-01-06 02:45:53'),
(13,'Inspektur Pembantu Bidang Pemerintahan, Ekonomi dan Kesejahteraan Sosial','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-06 02:46:15','2021-04-13 12:24:02'),
(14,'Sekretaris','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:46:31','2020-01-06 02:46:31'),
(15,'Inspektur Kabupaten Jombang','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:46:47','2020-01-06 02:46:47'),
(16,'Pengadministrasi Umum','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:34:15','2020-01-29 04:34:15'),
(17,'Analis Pelaporan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:34:43','2020-01-29 04:34:43'),
(18,'Pengelola Dokumen Perizinan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:35:19','2020-01-29 04:35:19'),
(19,'Pelaksana','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:35:29','2020-01-29 04:35:29'),
(20,'Pengelola Barang Milik Negara','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:35:52','2020-01-29 04:35:52'),
(21,'Pengadministrasi Persuratan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:37:46','2020-01-29 04:37:46'),
(22,'Pensiun','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-02-17 04:38:12','2021-02-17 04:38:12'),
(23,'Ahli Pertama - Auditor','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-02-17 04:39:45','2021-02-17 04:39:45'),
(24,'Calon Pelaksana/Terampil - Auditor','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-02-17 04:39:55','2021-04-09 01:22:41'),
(25,'Pengelola Kepegawaian','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2021-04-08 08:57:04','2021-04-13 12:24:47'),
(26,'Pengelola Keuangan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-08 08:57:15','2021-04-08 08:57:15'),
(27,'Pengadministrasi Perencanaan dan Program','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-13 03:20:20','2021-04-13 04:29:23'),
(28,'Pengadministrasi Kepegawaian','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2021-04-13 04:28:20','2021-04-13 12:25:16'),
(29,'Pengadministrasi Keuangan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-13 04:29:05','2021-04-13 04:29:05'),
(30,'Pengelola Evaluasi Tindak Lanjut Laporan Hasil Pemeriksaan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-13 04:30:50','2021-04-13 04:30:50'),
(31,'Bendahara','ABRAHAM BASWARA PUTRA, A.Md.','ABRAHAM BASWARA PUTRA, A.Md.','2021-04-16 01:37:03','2021-04-16 01:37:03'),
(32,'Auditor Pelaksana','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:33:50','2022-11-30 06:32:36');

/*Table structure for table `tb_kegiatan` */

DROP TABLE IF EXISTS `tb_kegiatan`;

CREATE TABLE `tb_kegiatan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_kegiatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arsip_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_kegiatan` */

insert  into `tb_kegiatan`(`id`,`judul_kegiatan`,`isi_kegiatan`,`slug_kegiatan`,`foto_kegiatan`,`arsip_kegiatan`,`tag_kegiatan`,`status_kegiatan`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(1,'LHKSN','PGgyPlRlbnRhbmcgTEhLQVNOPC9oMj4NCjxwPiZuYnNwOzwvcD4NCjxvbCBzdHlsZT0iZm9udC13ZWlnaHQ6IDQwMDsiPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPlBlbnlhbXBhaWFuIExIS0FTTiB0ZWxhaCBkaWxha3VrYW4gcGFkYSB0YWh1biAyMDE2IGRlbmdhbiBqdW1sYWggQVNOIHlhbmcgdGVsYWggbWVueWFtcGFpa2FuOzwvc3Bhbj48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5zZWp1bWxhaCAyODQgQVNOIGRhcmkgMyBTS1BEIChJbnNwZWt0b3JhdCwgU2V0ZGEgZGFuIEJLRC9CS1BTRE0pOzwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPkp1bWxhaCBBU04gS2FidXBhdGVuIEthcmFuZ2FueWFyIHBlciBKYW51YXJpIDIwMTcgeWFuZyB3YWppYiBtZW55YW1wYWlrYW4gTEhLQVNOIGFkYWxhaCZuYnNwOzwvc3Bhbj48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij45LjYzOCBzZWhpbmdnYSBtYXNpaCA5LjM1NCB5YW5nIGJlbHVtIG1lbGFwb3JrYW47PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+VGFyZ2V0IHBlbmNhcGFpYW4gTEhLQVNOIHRhaHVuIDIwMTcgYWRhbGFoIDEwMCUgd2FqaWIgTEhLQVNOIG1lbnlhbXBhaWthbiBsYXBvcmFuIGhhcnRhIGtla2F5YWFubnlhOzwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPkRhbGFtIHBlbGFrc2FuYWFubnlhIGRpYmVudHVrIHRpbSwgeWFuZyBtYXNpbmctbWFzaW5nIHRpbSBha2FuIG1lbWJlcmlrYW4gYmludGVrIFBlbmdpc2lhbiBkYW4gUGVueWFtcGFpYW4gTEhLQVNOLiBCaW50ZWsgYWthbiBkaW11bGFpIHRhbmdnYWwgMyBNYXJldCBzYW1wYWkgZGVuZ2FuIDI4IEFwcmlsIDIwMTcgZGFuIGRpbGFrdWthbiB0aWFwIGhhcmkgSnVtYXQgZGkgQkxDIEtvbWluZm8gU2V0ZGE7PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+QmludGVrIGFrYW4gZGliZXJpa2FuIGtlcGFkYSB0aW0ga2VwYWRhIGtlbG9tcG9rLWtlbG9tcG9rIE9QRCB5YW5nIHRlbGFoIGRpYmVudHVrOzwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPlRpYXAgT1BEIGRpd2FraWxpIG9sZWggMSAoc2F0dSkga29vcmRpbmF0b3IgTEhLQVNOIE9QRCB5YW5nIHRlbGFoIGRpdHVuanVrOzwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPlByb3NlcyBwZW55YW1wYWlhbiBMSEtBU04gbWVuZ2d1bmFrYW4gYXBsaWthc2kgb25saW5lIFNpSEFSS0EuICg8L3NwYW4+PGEgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyIgaHJlZj0iaHR0cHM6Ly9zaWhhcmthLm1lbnBhbi5nby5pZC8iPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPmh0dHBzOi8vc2loYXJrYS5tZW5wYW4uZ28uaWQ8L3NwYW4+PC9hPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPik7PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+U2V0aWFwIEFTTiBha2FuIG1lbmRhcGF0IHVzZXJuYW1lIGRhbiBwYXNzd29yZCB1bnR1ayBtZWxha3VrYW4gbG9naW4gZGFuIGlucHV0IGhhcnRhIGtla2F5YWFuIGRpIGFwbGlrYXNpIFNpSEFSS0E7PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+TWF0ZXJpIEJpbnRlayBkYW4gRm9ybSBMSEtBU04gYmVyaXNpIDo8L3NwYW4+PC9saT4NCjwvb2w+DQo8b2wgc3RhcnQ9IjQiPg0KPGxpIHN0eWxlPSJmb250LXdlaWdodDogNDAwOyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+Rk9STVVMSVJfTEhLQVNOX1JFVjQueGxzeDwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXdlaWdodDogNDAwOyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+VGVrbmlzIFBlbmdpc2lhbiAtIExIS0FTTiAyMDE1LnBkZjwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXdlaWdodDogNDAwOyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+QkFIQU4gUEFQQVJBTiBMSEtBU04ucHB0eDwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXdlaWdodDogNDAwOyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+U3VyYXQgRWRhcmFuIE1lbnBhbi5wZGY8L3NwYW4+PC9saT4NCjxsaSBzdHlsZT0iZm9udC13ZWlnaHQ6IDQwMDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPlBlcmJ1cCBMSEtBU04ucGRmPC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtd2VpZ2h0OiA0MDA7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5GT1JNQVQgREFGVEFSIFBFR0FXQUkgTEhLQVNOLnhsc3g8L3NwYW4+PC9saT4NCjwvb2w+DQo8cCBzdHlsZT0iZm9udC13ZWlnaHQ6IDQwMDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPiZuYnNwOzwvc3Bhbj48L3A+','lhksn','[\"2019-12-23-kunjungan-kab-mempawah.jpg\",\"2019-12-23-telaah-sejawat.jpg\"]','[\"2019-12-23-maulana-rizki.jpg\"]','[\"kegiatan\"]','aktif','Maulana Rizki','Maulana Rizki','2019-12-26 01:13:27','2019-12-26 01:13:27'),
(2,'LHKPN','PGgyPlRlbnRhbmcgTEhLUE48L2gyPg0KPHAgc3R5bGU9ImZvbnQtd2VpZ2h0OiA0MDA7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij4mbmJzcDs8L3NwYW4+PC9wPg0KPHAgc3R5bGU9ImZvbnQtd2VpZ2h0OiA0MDA7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5CZXJkYXNhcmthbiBQZXJhdHVyYW4mbmJzcDs8c3Ryb25nPktQSyZuYnNwOzwvc3Ryb25nPk5vbW9yIDA3IFRhaHVuIDIwMTYgdGVudGFuZyBUYXRhIENhcmEgUGVuZGFmdGFyYW4sIFBlbmd1bXVtYW4gZGFuIFBlbWVyaWtzYWFuIEhhcnRhIEtla2F5YWFuIFBlbnllbGVuZ2dhcmEgTmVnYXJhLzxzdHJvbmc+TEhLUE48L3N0cm9uZz4mbmJzcDtzZWJhZ2FpIGJlcmlrdXQ6PC9zcGFuPjwvcD4NCjxvbCBzdHlsZT0iZm9udC13ZWlnaHQ6IDQwMDsiPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPlBlcmF0dXJhbiBLUEsgTm9tb3IgMDcvIEtQSyAvIDAyIC8gMjAwNSB0ZW50YW5nIFRhdGEgQ2FyYSBQZW5kYWZ0YXJhbiwgUGVuZ3VtdW1hbiBkYW4gUGVtZXJpa3NhYW4gSGFydGEgS2VrYXlhYW4gUGVueWVsZW5nZ2FyYSBOZWdhcmEmbmJzcDsmbmJzcDtzdWRhaCB0aWRhayBiZXJsYWt1IGxhZ2k7PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+VW50dWsgc2FhdCBpbmkgYmVybGFrdSBQZXJhdHVyYW4gS1BLIE5vbW9yIDA3L0tQSy8wMi8yMDE2IHRlbnRhbmcgVGF0YSBDYXJhIFBlbmRhZnRhcmFuLCBQZW5ndW11bWFuIGRhbiBQZW1lcmlrc2FhbiBIYXJ0YSBLZWtheWFhbiBQZW55ZWxlbmdnYXJhIE5lZ2FyYSwgZGVuZ2FuIEp1a25pcyBwZWxha3NhbmFhbiBTdXJhdCBFZGFyYW4gUGltcGluYW4gS1BLIE5vbW9yIDA4LzAxLzEwLzIwMTYgdGVudGFuZyBQZXR1bmp1ayBUZWtuaXMgUGVueWFtcGFpYW4gZGFuIFBlbmdlbG9sYWFuIExhcG9yYW4gSGFydGEgS2VrYXlhYW4gUGVueWVsZW5nZ2FyYSBBcGFyYXR1ciBOZWdhcmEgU2V0ZWxhaCBCZXJsYWt1bnlhIFBlcmF0dXJhbiBLb21pc2kgUGVtYmVyYW50YXNhbiBLb3J1cHNpIE5vbW9yIDA3LyBLUEsvMDIvMjAwNSB0ZW50YW5nIFRhdGEgQ2FyYSBQZW5kYWZ0YXJhbiwgUGVuZ3VtdW1hbiBkYW4gUGVtZXJpa3NhYW4gSGFydGEgS2VrYXlhYW4gUGVueWVsZW5nZ2FyYSBOZWdhcmE7PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+UGVyYXR1cmFuIHlhbmcgYmFydSBOb21vciAwNyBUYWh1biAyMDE2IHRlcmRhcGF0IFBlcnViYWhhbiBUYXRhIENhcmEgUGVuZGFmdGFyYW4gZGFuIFBlbmd1bXVtYW4gTEhLUE4gOjwvc3Bhbj48L2xpPg0KPHVsIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPlBlcnViYWhhbiB3YWt0dSBwZW55YW1wYWlhbiwgamVuaXMgZm9ybXVsaXIgeWFuZyBkaWd1bmFrYW4gZGFuIG1lZGlhIHBlbmd1bXVtYW4mbmJzcDsmbmJzcDtMSEtQTi47PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+S1BLIHRpZGFrIGFrYW4gbWVtcHJvc2VzIHBlbmVyaW1hYW4gTEhLUE4geWFuZyBtZW5nZ3VuYWthbiBGb3JtdWxpciBMSEtQTiBsYW1hIChNb2RlbCBLUEsgQS8gTW9kZWwgS1BLIEIpOzwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPlBlbGFrc2FuYWFuIHBlbnlhbXBhaWFuIExIS1BOIGRhbGFtIG1hc2EgcGVyYWxpaGFuIGRpYXR1ciBkYWxhbSBzdXJhdCBlZGFyYW4gTm9tb3IgU0UtMDgvMDEvMTAgLyAyMDE2IHRlbnRhbmcgcGV0dW5qdWsgdGVrbmlzIHBlbnlhbXBhaWFuIGRhbiBwZW5nZWxvbGFhbiBMSEtQTiBzZXRlbGFoIGRpYmVybGFrdWthbnlhIHBlcmF0dXJhbiBLUEsgTm9tb3IgNyB0YWh1biAyMDE2PC9zcGFuPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjs8L3NwYW4+PC9saT4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5QZXJhdHVyYW4gbGFtYSB3YWppYiBsYXBvciBMSEtQTiAyIHRhaHVuIHNla2FsaSwgUGVyYXR1cmFuIHlhbmcgYmFydSB3YWppYiBsYXBvciBMSEtQTiBkaWxha3VrYW4gc2VjYXJhIHBlcmlvZGlrIHNldGlhcCAxIHRhaHVuIHNla2FsaSBhdGFzIGhhcmdhIGtla2F5YWFuIHlhbmcgZGlwZXJvbGVoIHNlamFrIHRhbmdnYWwgMSBKYW51YXJpIHNhbXBhaSBkZW5nYW4gdGFuZ2dhbCAzMSBEZXNlbWJlcjs8L3NwYW4+PC9saT4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5QZW55YW1wYWlhbiBMSEtQTiBkaXNhbXBhaWthbiBkYWxhbSBqYW5na2Egd2FrdHUgcGFsaW5nIGxhbWJhdCB0YW5nZ2FsIDMxIE1hcmV0IHRhaHVuIGJlcmlrdXRueWE7PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+QmFnaSB3YWppYiBMSEtQTiB5YW5nIHN1ZGFoIHBlcm5haCBtZW55YW1wYWlrYW4gTEhLUE4gYmFpayBtb2RlbCBLUEsgQSBkYW4gbW9kZWwgS1BLIEIgZGFuIG1lbmdhbGFtaSBwZXJ1YmFoYW4gamFiYXRhbiBhdGF1IHRlcmtlbmEga2V3YWppYmFuIHVwZGF0ZSAyIHRhaHVuYW4gbWFrYSBoYXJ0YSBrZWtheWFhbiB5YW5nIGRpbGFwb3JrYW4gYWRhbGFoIHBvc2lzaSAvIDMxIERlc2VtYmVyIDIwMTcgZGFuIGRpc2VyYWhrYW4ga2VwYWRhIEtQSyBwYWxpbmcgbGFtYmF0IDMxIE1hcmV0IDIwMTg7PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+QmFnaSB3YWppYiBMSEtQTiB5YW5nIGJhcnUgZGlhbmdrYXQvUHJvbW9zaSBkYW4mbmJzcDsmbmJzcDt3YWppYiBMSEtQTiB5YW5nIHBlbnNpdW4gbWFrYSBwZWxhcG9yYW4gaGFydGEga2VrYXlhYW4gZGlsYWt1a2FuIGRlbmdhbiBtZW5nZ3VuYWthbiBmb3JtdWxpciBMSEtQTiBmb3JtYXQgYmFydSB1bnR1ayBrZW11ZGlhbiBkaXNhbXBhaWthbiBrZXBhZGEgS1BLIHBhbGluZyBsYW1iYXQgMyBidWxhbiBzZWphayBwZW5nYW5na2F0YW4vIHBlbnNpdW47PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+V2FqaWIgbGFwb3IgTEhLUE4gVGFodW4gMjAxNyZuYnNwOyZuYnNwO2Jlcmp1bWxhaCAyNDQgb3JhbmcgZGVuZ2FuIHBlcmluY2lhbiBzZWJhZ2FpIGJlcmlrdXQgOjwvc3Bhbj48L2xpPg0KPHVsIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPkVrc2VrdXRpZjwvc3Bhbj48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij4mbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDs6IDE3NyBvcmFuZzwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPkZ1bmdzaW9uYWwgTWFkeWEmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDs6Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7OSBvcmFuZzwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPkJVTUQmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDs6Jm5ic3A7Jm5ic3A7Jm5ic3A7MTMgb3Jhbmc8L3NwYW4+PC9saT4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5MZWdpc2xhdGlmJm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7OiZuYnNwOyZuYnNwOyZuYnNwOzQ1IG9yYW5nPC9zcGFuPjwvbGk+DQo8L3VsPg0KPC91bD4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5TZXN1YWkgUGVyYXR1cmFuIEJ1cGF0aSBOb21vciZuYnNwOyZuYnNwOzIyIFRhaHVuIDIwMTYgdGVudGFuZyBQZWxhcG9yYW4gSGFydGEgS2VrYXlhYW4gUGVueWVsZW5nZ2FyYSBOZWdhcmEgbWVueWF0YWthbiBiYWh3YSB3YWppYiBsYXBvciBMSEtQTiBhZGFsYWggZXNlbG9uIElJLCBJSUlhLCBJSUliLiBVbnR1ayB3YWppYiBsYXBvciBMSEtQTiB0YWh1biAyMDE3LCBzZWJhbnlhayAxNSBMdXJhaCZuYnNwOyZuYnNwO3RpZGFrIG1hc3VrIGRhbGFtIHdhamliIGxhcG9yJm5ic3A7Jm5ic3A7TEhLUE4gdGV0YXBpIG1hc3VrIHdhamliIGxhcG9yIExIS0FTTjs8L3NwYW4+PC9saT4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5EZW5nYW4gYmVybGFrdW55YSBQZXJhdHVyYW4gUGVtZXJpbnRhaCBOb21vciAxOCBUYWh1biAyMDE2IHRlbnRhbmcgUGVyYW5na2F0IERhZXJhaCBkYW4gUGVyYXR1cmFuIERhZXJhaCBLYWJ1cGF0ZW4gS2FyYW5nYW55YXIgTm9tb3IgMTYgVGFodW4gMjAxNiB0ZW50YW5nIFBlbWJlbnR1a2FuIGRhbiBTdXN1bmFuIFBlcmFuZ2thdCBEYWVyYWggS2FidXBhdGVuIEthcmFuZ2FueWFyLCBtYWthIHRlcmRhcGF0IGJlYmVyYXBhIEFwYXJhdHVyIFNpcGlsIE5lZ2FyYSAoQVNOKSB5YW5nIG1lbmRhcGF0a2FuIHByb21vc2kgbWVuamFiYXQgc2ViYWdhaSBFc2Vsb24gSUlJIHNlaGluZ2dhIGJlcnN0YXR1cyBzZWJhZ2FpIFBlbnllbGVuZ2dhcmEgTmVnYXJhIChQTikgeWFuZyB3YWppYiBtZW55YW1wYWlrYW4gTEhLUE4uOzwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPktlcGFkYSBQTiB5YW5nIHRlbGFoIG1lbGFwb3JrYW4gTEhLUE4gc2ViZWx1bW55YSBkYW4gYWthbiBtZWxha3VrYW4gdXBkZXRlIHBlcmlvZGlrLCBha2FuIGRpbGFrdWthbiBCaW50ZWsgVGF0YWNhcmEgUGVsYXBvcmFuIGRhbiBQZXR1bmp1ayBUZWtuaXMgUGVuZ2lzaWFuIExIS1BOIHNlc3VhaSBkZW5nYW4gUGVyYXR1cmFuIEtQSyBOb21vciAwNy9LUEsvMDIvMjAxNiBwYWRhIGFraGlyIHRhaHVuIDIwMTc7PC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+TWF0ZXJpIEJpbnRlayBkYW4gRm9ybSBMSEtBU04gYmVyaXNpIDo8L3NwYW4+PC9saT4NCjx1bCBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5GT1JNVUxJUiBMSEtQTiBLUEsgVmVyc2kgMS4wLnhseG08L3NwYW4+PC9saT4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5SRUFETUUhIS50eHQ8L3NwYW4+PC9saT4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5UQVRBIENBUkEgTUVMQVBPUktBTiBMSEtQTiBGT1JNQVQgRVhDRUwuVmVyc2kgMS4wLnBkZjwvc3Bhbj48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsiPlBFVFVOSlVLIFRFS05JUyBQRU5HSVNJQU4gRk9STVVMSVIgMTggSmFuIDIwMTcucGRmPC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+UEVSQVRVUkFOIEtQSyBOT01PUiAwNyBUQUhVTiAyMDE2LVRBVEEgQ0FSQSBQRU5EQUZUQVJBTiBQRU5HVU1VTUFOIERBTiBQRU1FUklLU0FBTiBMSEtQTi5wZGY8L3NwYW4+PC9saT4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7Ij5TRSBQaW1waW5hbiBLUEsgTm8gMDggVGFodW4gMTYgLSBUcmFuc2lzaSBQS1BLIDA3IFRhaHVuIDIwMTYucGRmPC9zcGFuPjwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyI+UGVyYnVwIExIS1BOIEZpbmFsIDIwMTYuZG9jPC9zcGFuPjwvbGk+DQo8L3VsPg0KPC9vbD4=','lhkpn','[\"2019-12-23-purna-tugas-abah-sulis.jpg\",\"2019-12-23-telaah-sejawat.jpg\"]','[\"2019-12-23-peresmian-gedung-inspektorat.jpg\"]','[\"kegiatan\"]','aktif','Maulana Rizki','Maulana Rizki','2019-12-26 01:16:21','2019-12-26 01:16:21');

/*Table structure for table `tb_laporan_sakip` */

DROP TABLE IF EXISTS `tb_laporan_sakip`;

CREATE TABLE `tb_laporan_sakip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sasaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator_kinerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realisasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capaian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan_per_tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_laporan_sakip` */

/*Table structure for table `tb_modul_sakip` */

DROP TABLE IF EXISTS `tb_modul_sakip`;

CREATE TABLE `tb_modul_sakip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sasaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator_kinerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realisasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capaian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formulasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_data` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanggung_jawab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skp_target_ak` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skp_target_mutu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skp_target_waktu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skp_realisasi_ak` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skp_realisasi_ouput` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skp_realisasi_mutu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skp_realisasi_waktu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan_per_tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_modul_sakip` */

insert  into `tb_modul_sakip`(`id`,`id_sakip`,`sasaran`,`indikator_kinerja`,`satuan`,`target`,`realisasi`,`capaian`,`formulasi`,`sumber_data`,`penanggung_jawab`,`jenis_kegiatan`,`skp_target_ak`,`skp_target_mutu`,`skp_target_waktu`,`skp_realisasi_ak`,`skp_realisasi_ouput`,`skp_realisasi_mutu`,`skp_realisasi_waktu`,`urutan_per_tahun`,`created_by`,`created_at`,`updated_at`) values 
(5,'10','Mengendalikan Teknis Kegiatan Pengawasan/Audit Reguler','JUMLAH LHA','LHA','42','0','0','','','','1','1.1','100','12','2.1','16','80','12','1','MAULANA RIZKI, S.Kom','2020-01-27 06:51:56','2020-01-27 08:54:51'),
(6,'10','Mengendalikan Teknis Kegiatan Monitoring dan Evaluasi','JUMLAH LHA','LHA','36','0','0','JUMLAH LAPORAN YANG DITERBITKAN','PKPT DAN SIM HP','AUDITOR','1','1.24','100','12','1.7','17','80','12','2','MAULANA RIZKI, S.Kom','2020-01-27 06:52:12','2020-02-05 04:33:07'),
(7,'10','Mengendalikan Teknis Pelaksanaan Reviu','JUMLAH LHE','LHE','24','6','25','','','','2','1.36','100','12','2.4','14','80','12','3','MAULANA RIZKI, S.Kom','2020-01-27 06:52:38','2020-02-05 06:18:53'),
(8,'10','Mengendalikan Teknis Kegiatan Audit Untuk Tujuan Tertentu/Khusus','JUMLAH LHE','LHE','35','4','11.428571428571429','','','','2','1.5','100','12','5.4','12','80','12','4','MAULANA RIZKI, S.Kom','2020-01-27 06:52:55','2020-02-05 06:18:45'),
(13,'13','Mengendalikan Teknis Kegiatan Pengawasan/Audit Reguler','JUMLAH LHA','LHA','42','16','38.095238095238095','','','','1','2.9','100','12','','','','','1','TAUFIK AKBAR SOLIKIN, ST','2020-01-29 07:08:39','2020-01-29 07:30:18'),
(14,'13','Mengendalikan Teknis Kegiatan Monitoring dan Evaluasi','JUMLAH LHA','LHA','36','10','27.77777777777778','','','','1','3.6','100','12','','','','','2','TAUFIK AKBAR SOLIKIN, ST','2020-01-29 07:08:56','2020-01-29 07:30:04'),
(15,'13','Mengendalikan Teknis Kegiatan Audit Untuk Tujuan Tertentu/Khusus','JUMLAH LHE','LHE','42','16','38.095238095238095','','','','2','2.4','100','12','','','','','3','TAUFIK AKBAR SOLIKIN, ST','2020-01-29 07:09:14','2020-01-29 07:29:48'),
(16,'13','Mengendalikan Teknis Kegiatan Audit Untuk Tujuan Tertentu/Khusus','JUMLAH LHE','LHE','36','12','33.33333333333333','JUMLAH LAPORAN YANG DITERBITKAN','JUMLAH LHA','AUDITOR','2','2.5','100','12','','','','','4','TAUFIK AKBAR SOLIKIN, ST','2020-01-29 07:09:33','2020-01-29 07:29:30'),
(17,'14','Mengendalikan Pelaksanaan Audit Reguler/Kinerja','JUMLAH LHA','LHA','1','0','0','JUMLAH LAPORAN YANG DITERBITKAN','PKPT DAN SIM HP','AUDITOR','1','','','','','','','','1','RIRIS ERNAWATI, SE','2020-01-29 07:43:38','2020-01-29 07:50:55'),
(18,'14','Mengendalikan Pelaksanaan Audit Dengan Tujuan Tertentu/Khusus','JUMLAH LHA','LHA','26','0','0','JUMLAH LAPORAN YANG DITERBITKAN','PKPT DAN SIM HP','AUDITOR','1','','','','','','','','2','RIRIS ERNAWATI, SE','2020-01-29 07:44:45','2020-01-29 07:50:46'),
(19,'14','Mengendalikan Pelaksanaan Monitoring dan Evaluasi','JUMLAH LHE','LHE','23','0','0','JUMLAH LAPORAN YANG DITERBITKAN','PKPT DAN SIM HP','AUDITOR','1','','','','','','','','3','RIRIS ERNAWATI, SE','2020-01-29 07:45:25','2020-01-29 07:50:35'),
(20,'14','Mengendalikan Pelaksanaan Reviu','JUMLAH LHR','LHR','29','0','0','JUMLAH LAPORAN YANG DITERBITKAN','PKPT DAN SIM HP','AUDITOR','1','','','','','','','','4','RIRIS ERNAWATI, SE','2020-01-29 07:46:02','2020-01-29 07:50:27'),
(21,'14','Memimpin Pelaksanaan Reviu','JUMLAH LHR','LHR','3','0','0','JUMLAH LAPORAN YANG DITERBITKAN','PKPT DAN SIM HP','AUDITOR','1','','','','','','','','5','RIRIS ERNAWATI, SE','2020-01-29 07:46:37','2020-01-29 07:50:20'),
(22,'14','Menjadi Panitia Rakorwasda','JUMLAH KEG','KEG','1','0','0','JUMLAH LAPORAN YANG DITERBITKAN','PKPT DAN SIM HP','AUDITOR','2','','','','','','','','6','RIRIS ERNAWATI, SE','2020-01-29 07:47:15','2020-01-29 07:50:13'),
(23,'14','Menjadi Peserta PPM, Diklat, Workshop dan Bintek','JUMLAH KEG','KEG','6','0','0','JUMLAH KEGIATAN','PKPT DAN SIM HP','AUDITOR','2','','','','','','','','7','RIRIS ERNAWATI, SE','2020-01-29 07:48:14','2020-01-29 07:51:29');

/*Table structure for table `tb_pegawai` */

DROP TABLE IF EXISTS `tb_pegawai`;

CREATE TABLE `tb_pegawai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(573) DEFAULT NULL,
  `nama_pegawai` varchar(573) DEFAULT NULL,
  `divisi_pegawai` varchar(573) DEFAULT NULL,
  `peran_pegawai` varchar(573) DEFAULT NULL,
  `golongan_pegawai` varchar(573) DEFAULT NULL,
  `pesan_pegawai` text,
  `foto_pegawai` varchar(573) DEFAULT NULL,
  `arsip_pegawai` varchar(573) DEFAULT NULL,
  `status` varchar(573) DEFAULT NULL,
  `created_by` varchar(573) DEFAULT NULL,
  `updated_by` varchar(573) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pegawai` */

insert  into `tb_pegawai`(`id`,`nip`,`nama_pegawai`,`divisi_pegawai`,`peran_pegawai`,`golongan_pegawai`,`pesan_pegawai`,`foto_pegawai`,`arsip_pegawai`,`status`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(1,'196701051992121001','ABDUL MADJID NINDYAGUNG, SH., M.Si.','1','15','14','<p>-<p>','[\"2020-01-29-user.png\"]','null','aktif','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-12-27 15:02:46','2022-11-30 06:03:59'),
(2,'196801281994032009','LILIES WIDIANINGSIH, SE., MSi','2','11','14','<p>-</p>','[\"2019-12-26-lilies-widianingsih-se-msi.jpg\"]','null','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-26 06:27:40','2021-02-17 04:44:46'),
(4,'197011262002121006','AGUNG HARIADI, ST., MM','2','12','13','<p>-</p>','[\"2019-12-26-agung-hariadi-st-mm.jpg\"]','null','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-26 06:32:44','2021-02-17 04:45:07'),
(5,'198208302000122001','ANIS ZUL HULAIFAH, S.STP., MM.','2','13','13','<p>-</p>','[\"2019-12-26-anis-zul-hulaifah-mm.jpg\"]','null','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-26 06:34:05','2022-01-17 03:29:38'),
(6,'197007231997032003','NI KETUT MURBAWATI, SE., M.Si.','4','9','12','<p>-</p>','[\"2019-12-26-ni-ketut-murbawati-se-msi.jfif\"]','null','aktif','Maulana Rizki','ABRAHAM BASWARA PUTRA, A.Md.','2019-12-26 06:34:51','2021-04-12 00:59:11'),
(7,'198002022010012026','IKE ROCHMANIAR, SE., ME.','4','7','11','<p>-</p>','[\"2019-12-26-ike-rochmaniar-se.jpg\"]','null','aktif','Maulana Rizki','yayak','2019-12-26 06:35:56','2022-04-26 02:14:50'),
(8,'198402202005012002','TRIYA WIJAYANINGRUM, SAB','4','8','11','<p>-</p>','[\"2019-12-26-triya-wijayaningrum-sab.jfif\"]','null','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-26 06:37:02','2021-02-17 04:46:47'),
(10,'197006291995022001','TUTUK MAHMULAH, SE','7','6','14','<p>-</p>','[\"2019-12-26-tutuk-mahmulah-se.jpg\"]','null','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-26 06:39:31','2020-01-06 03:07:26'),
(11,'197712292001122002','ANIK YULIATI, SE','7','6','15','<p>-</p>','[\"2019-12-26-anik-yuliati-se.jpg\"]','null','aktif','Maulana Rizki','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:22:38','2022-11-30 06:22:38'),
(12,'196208141989032009','Dra. WAHYU RATNA SULISTIYANI','7','22','14','<p>-</p>','[\"2019-12-26-dra-wahyu-ratna-sulistiyani.jpg\"]','null','tidak aktif','Maulana Rizki','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:15:08','2022-11-30 06:15:08'),
(13,'196610091985031003','ABD. WAHID, SE','7','6','13','<p>-</p>','[\"2019-12-26-abd-wahid-se.jpg\"]','null','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-26 06:47:14','2020-01-06 03:06:31'),
(14,'196310011985032010','ELY SRIWULAN, S.Sos','7','6','13','<p>-</p>','[\"2019-12-26-ely-sriwulan-ssos.jpg\"]','null','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-26 06:48:24','2020-01-06 03:05:54'),
(15,'197806292006041017','EKO PRASETYO, SE','2','10','13','<p>-</p>','[\"2019-12-26-eko-prasetyo-se.jpeg\"]','null','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-26 06:49:09','2021-02-17 04:42:43'),
(16,'197907072006042036','RIRIS ERNAWATI, SE','7','6','13','<p>-</p>','[\"2019-12-26-riris-ernawati-se.jpeg\"]','null','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-26 06:49:51','2020-01-06 03:05:10'),
(18,'003','MAULANA RIZKI, S.Kom','7','1','1','<p>-</p>','[\"2020-01-29-user.png\"]','null','tidak aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:17:30','2022-11-30 06:17:30'),
(20,'197411222005011005','AHMAD HASAN BUCHORI, ST','7','5','12','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:08:56','2020-01-29 04:08:56'),
(21,'197007201993021002','MUKHAMAD GUFRON, SH., MAP','7','5','12','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:09:53','2020-01-29 04:09:53'),
(23,'197709042010012005','NINA ROSALINA, SE','7','5','12','<p>-</p>','[\"2019-12-26-nina-rosalina-se.jpeg\"]','null','aktif','MAULANA RIZKI, S.Kom','yayak','2020-01-29 04:12:31','2022-04-25 01:20:46'),
(24,'197901272011011002','TAUFIK AKBAR SOLIKIN, ST','7','5','12','<p>-</p>','[\"2019-12-26-taufik-akbar-solikin-st.jfif\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:24:19','2022-11-30 06:24:19'),
(25,'198312112011011003','DEDDY PERMADI, SH','7','5','11','<p>-</p>','[\"2019-12-26-deddy-permadi-sh.jpg\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:14:10','2020-01-29 04:14:10'),
(26,'198801302011011003','RANGGA KUSUMA, SAB','7','5','11','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:14:51','2021-04-13 03:59:46'),
(28,'197902092003121005','MOH. GIRI SANTOSO, S.Pt.., MM','7','5','11','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','yayak','2020-01-29 04:16:39','2022-04-27 06:34:48'),
(29,'198001172010011008','ALBERTUS TWIS YOTAN MULYA, S.Sos','7','5','11','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:26:32','2022-11-30 06:26:32'),
(30,'197804142011012004','YUNI PRAVITASARI, SPt','7','4','10','<p>-</p>','[\"2019-12-26-yuni-pravitasari-spt.jpg\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:28:05','2020-01-29 04:28:05'),
(31,'197806232011012003','KIKY WIDYA MELANIE, SE','7','5','11','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:28:42','2021-04-16 05:54:43'),
(32,'197702142011012003','DWI RETNO MITAYANI, SE','7','5','11','<p>-</p>','[\"2021-04-13-.jpg\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:29:39','2021-04-16 01:38:00'),
(33,'197308272003122001','NEON AGUSTIN P, SE., MSi., MM','7','5','11','<p>-</p>','[\"2019-12-26-neon-agustin-parnaririn-se.jpg\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:30:16','2022-02-04 01:39:54'),
(34,'198705042010012027','SETIA RINI ARIESTA R., S.E.','7','30','10','<p>-</p>','[\"2019-12-26-setia-rini-ariesta-r-se.jpeg\"]','null','aktif','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-29 04:39:45','2021-04-13 22:10:48'),
(35,'199107042015051001','ISA WHISNU YUDISTIRA, SE','7','5','11','<p>-</p>','[\"2019-12-26-isa-whisnu-yudistira-se.jpeg\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:26:48','2022-11-30 06:26:48'),
(36,'198511172015051001','EKO ADI CANDRA, SE','7','5','11','<p>-</p>','[\"2019-12-26-eko-adi-candra-se.jpg\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:26:09','2022-11-30 06:26:09'),
(38,'198205282015052002','LELITA DWI MEIRANY, SE','7','4','10','<p>-</p>','[\"2019-12-26-lelita-dwi-meirany-se.jfif\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:42:58','2020-01-29 04:42:58'),
(39,'198407012005012004','DIAN FITRIANI, S.IP.','7','30','10','<p>-</p>','[\"2019-12-26-dian-fitriani-sip.jpg\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:43:46','2021-04-14 04:37:44'),
(40,'198905292015052002','IRMA CHANDRAWENING, SH','7','3','9','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:45:08','2021-04-16 05:40:05'),
(41,'198009132015052001','RINA DWI SEPTANINGSIH, SH','7','3','9','<p>-</p>','[\"2019-12-26-rina-dwi-septaningsih-sh.jpg\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:46:00','2020-01-29 04:46:00'),
(42,'197004211998031008','ABIDIN, SIP','7','20','9','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:46:52','2020-01-29 04:46:52'),
(43,'198403122006042012','DWI ANITA MARETIKA SARI, S.E.','7','4','10','<p>-</p>','[\"2019-12-26-dwi-anita-maretika-sari-se.jfif\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:41:17','2022-11-30 06:41:17'),
(44,'199408092019032018','FITRIYANINGRUM NUR HIDAYAH, S.A.','7','4','9','<p>-</p>','[\"2019-12-26-fitriyaningrum-nur-hidayah-sa.jpeg\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:42:26','2022-11-30 06:42:26'),
(45,'199107172019032012','GITA PRATIWI, S.E.','7','4','9','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:42:45','2022-11-30 06:42:45'),
(46,'199703042019031001','YOGA PRATAMA, S.E','7','4','9','<p>-</p>','[\"2019-12-26-yoga-pratama-se.jfif\"]','null','aktif','MAULANA RIZKI, S.Kom','yayak','2020-01-29 04:50:22','2022-04-22 03:14:36'),
(47,'196606211997031001','Drs Ec. MUHAMMAD BAIDOWI, MM','2','14','14','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:54:00','2021-04-15 03:42:07'),
(48,'197509122006041024','JOKO KUNTO WIBISONO, SE','7','5','12','<p>-</p>','[\"2019-12-26-joko-kunto-wibisono-se.jpg\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2022-09-22 15:06:17','2022-09-22 08:06:17'),
(49,'196707161997031002','KUSWANTO, SE','7','5','12','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:56:26','2020-01-29 04:56:26'),
(52,'199301212020122007','BEBA SHONIA NUR A`ZHAMI, S.T','7','4','9','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:29:34','2022-11-30 06:29:34'),
(53,'199504112020122009','DEVITA ROSALIA, S.T.','7','4','9','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:31:08','2022-11-30 06:31:08'),
(54,'198912292020122002','LINA TRI JAYANTI, SE','7','4','9','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:30:27','2022-11-30 06:30:27'),
(55,'199307212020122007','NUR AINI, S.E.','7','4','9','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:28:29','2022-11-30 06:28:29'),
(56,'199506242020122006','RISKA INDAH SUCI HARINI, S.E.','7','4','9','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:29:06','2022-11-30 06:29:06'),
(57,'199201102020122002','YANUARITA ROHMATUL LAILI, S.E.','7','4','9','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:30:01','2022-11-30 06:30:01'),
(58,'199603132020122008','DWI PUJI SULISTIYA, A.Md.','7','32','7','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:36:44','2022-11-30 06:36:44'),
(59,'199604102020122009','EVRILLYA RACHMATIKA, A.Md.','7','32','7','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:37:02','2022-11-30 06:37:02'),
(60,'199306292020121005','AKHIB ARDIANSYAH, A.Md.','7','32','7','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:35:01','2022-11-30 06:35:01'),
(61,'199406202020121004','MOHAMAD FAIZ, A.Md.','7','32','7','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:35:26','2022-11-30 06:35:26'),
(62,'199804152020122003','NADIYAH SHOFWAH KUSUMANINGATI, A.Md.','7','32','7','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:37:54','2022-11-30 06:37:54'),
(63,'199312092020121003','ABRAHAM BASWARA PUTRA, A.Md.','7','4','7','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:31:47','2022-11-30 06:31:47'),
(64,'199311252020121003','REZHA NOVADRIANTO, A.Md.','7','32','7','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:34:15','2022-11-30 06:34:15'),
(65,'199802142020122004','AINININ FITRIANY, A.Md.Akun','7','32','7','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:37:26','2022-11-30 06:37:26'),
(66,'199504092020122006','ASTRID MUTIASARI, A.Md.','7','32','7','<p>-</p>','[\"2020-03-02-female.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:36:09','2022-11-30 06:36:09'),
(67,'198503102020121004','MOHTAR TRI EFENDI, A.Md.','7','32','7','<p>-</p>','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-11-30 13:38:17','2022-11-30 06:38:17'),
(68,'007','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','7','1','1','-','[\"2020-01-29-user.png\"]','null','aktif','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2022-04-06 06:06:19','2022-05-17 01:58:50'),
(69,'200003252022012002','RISMALA FARABILLA, A.Md.Ak.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:21:47','2022-04-22 04:08:19'),
(70,'200107042022012001','ZAYYA ALMAS SALSABILA, A.Md.Ak.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:22:40','2022-04-22 04:02:11'),
(71,'200003292022012001','ZUAMA BIROHMATIKA, A.Md.Ak.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:24:11','2022-04-22 04:08:01'),
(72,'200003282022012001','SABRINA AINUN NASRI, A.Md.Ak.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:26:20','2022-04-22 04:07:09'),
(73,'199812092022012001','FAIZAH KUSUMA WARDHANI, A.Md.Ak.','7','26','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:27:49','2022-04-22 04:06:49'),
(74,'200004172022012003','FADHILAH PUTRI ADINDA, A.Md.Ak.','7','26','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:28:53','2022-04-22 04:06:20'),
(75,'200009192022011002','RIZAL FIRDAUS WIJAYA, A.Md.Ak.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:29:58','2022-04-22 04:05:44'),
(76,'199601262022031002','ARI RAHMANSYAH DWI PRASETYO, A.Md.Farm','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:30:53','2022-04-22 04:05:18'),
(77,'199509212022032009','JENNY SEPTYA DAMAI NAVIDA, A.Md.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:31:54','2022-04-22 04:05:03'),
(78,'199603172022031004','NAVY YUDHISTIRA PRATAMA, A.Md.M.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:32:46','2022-04-22 04:04:45'),
(79,'199905032022031002','LANDA TEGAR ISTIGHFARA, A.Md.Ak.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:33:31','2022-04-22 04:04:23'),
(80,'199510202022031003','A\'IZZAN AFANI HIDAYAATULLAH, A.Md.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:34:12','2022-04-22 04:04:06'),
(81,'199906282022032001','VICA IRLYA YANNY AGUSTINA, A.Md.Ak.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:35:23','2022-04-22 04:03:51'),
(82,'199807112022031004','BUYUNG AJI PAMUNGKAS, A.Md.M.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:36:04','2022-04-22 04:03:29'),
(83,'199612232022031003','ILHAM ZAKARIA, A.Md.T.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:36:42','2022-04-22 04:03:14'),
(84,'199606202022032005','ELSA KHOIRUN NISA, A.Md.','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:37:32','2022-04-22 04:02:57'),
(85,'198807022022032002','IDDA TIS\'ATIN MUSYAFA\'AH, A.Md.Farm','7','24','7','-','[\"2020-01-29-user.png\"]','null','aktif','yayak','yayak','2022-04-22 03:38:14','2022-04-22 04:02:38'),
(87,'196208251986111001','Drs. EKA SUPRASETYO AGUS PUTRANTO, MM','2','22','15','<p>-</p>','[\"2019-12-26-drs-eka-suprasetyo-agus-putranto-mm.jpg\"]','null','tidak aktif','Maulana Rizki','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-12-27 15:02:52','2022-11-30 06:15:52');

/*Table structure for table `tb_perjanjian_pengukuran_perubahan` */

DROP TABLE IF EXISTS `tb_perjanjian_pengukuran_perubahan`;

CREATE TABLE `tb_perjanjian_pengukuran_perubahan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sasaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator_kinerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realisasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capaian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formulasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_data` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanggung_jawab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan_per_tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_perjanjian_pengukuran_perubahan` */

insert  into `tb_perjanjian_pengukuran_perubahan`(`id`,`id_sakip`,`sasaran`,`indikator_kinerja`,`satuan`,`target`,`realisasi`,`capaian`,`formulasi`,`sumber_data`,`penanggung_jawab`,`jenis_kegiatan`,`urutan_per_tahun`,`created_by`,`created_at`,`updated_at`) values 
(6,'4','Mengendalikan Teknis Kegiatan Pengawasan/Audit Reguler','JUMLAH LHA','LHA','32','9','28.125','-','-','-','1','1','MAULANA RIZKI, S.Kom','2020-01-23 05:47:34','2020-01-23 05:50:29'),
(7,'4','Mengendalikan Teknis Kegiatan Monitoring dan Evaluasi','JUMLAH LHA','LHA','21','10','47.61904761904761','-','-','-','1','2','MAULANA RIZKI, S.Kom','2020-01-23 05:47:49','2020-01-23 05:50:23'),
(8,'4','Mengendalikan Teknis Pelaksanaan Reviu','JUMLAH LHA','LHA','14','11','78.57142857142857','-','-','-','2','3','MAULANA RIZKI, S.Kom','2020-01-23 05:48:12','2020-01-23 05:50:17'),
(9,'4','Mengendalikan Teknis Kegiatan Audit Untuk Tujuan Tertentu/Khusus','JUMLAH LHE','LHE','26','12','46.15384615384615','JUMLAH LAPORAN YANG DITERBITKAN','JUMLAH LHA','AUDITOR','2','4','MAULANA RIZKI, S.Kom','2020-01-23 05:48:45','2020-01-23 08:45:46');

/*Table structure for table `tb_perubahan_sakip` */

DROP TABLE IF EXISTS `tb_perubahan_sakip`;

CREATE TABLE `tb_perubahan_sakip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sasaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator_kinerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan_per_tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_perubahan_sakip` */

/*Table structure for table `tb_pesan_sakip` */

DROP TABLE IF EXISTS `tb_pesan_sakip`;

CREATE TABLE `tb_pesan_sakip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima_pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemberi_pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peran_pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_pesan_sakip` */

insert  into `tb_pesan_sakip`(`id`,`id_sakip`,`isi_pesan`,`penerima_pesan`,`pemberi_pesan`,`peran_pesan`,`tipe_pesan`,`created_by`,`created_at`,`updated_at`) values 
(2,'10','Salah','003','003','Pesan ke Pihak Pertama','1','MAULANA RIZKI, S.Kom','2020-01-30 08:15:30','2020-01-30 08:15:30'),
(3,'10','Salah','003','003','Pesan ke Pihak Pertama','2','MAULANA RIZKI, S.Kom','2020-01-30 08:15:45','2020-01-30 08:15:45'),
(4,'12','Kurang dikit','003','003','Pesan ke Pihak Pertama','3','MAULANA RIZKI, S.Kom','2020-02-14 01:49:57','2020-02-14 01:49:57');

/*Table structure for table `tb_prestasi_kerja` */

DROP TABLE IF EXISTS `tb_prestasi_kerja`;

CREATE TABLE `tb_prestasi_kerja` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelayanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `integritas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komitmen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disiplin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerjasama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepemimpinan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_prestasi_kerja` */

insert  into `tb_prestasi_kerja`(`id`,`id_sakip`,`pelayanan`,`integritas`,`komitmen`,`disiplin`,`kerjasama`,`kepemimpinan`,`created_by`,`created_at`,`updated_at`) values 
(1,'10','78','78','78','78','78','-','MAULANA RIZKI, S.Kom','2020-01-27 06:42:46','2020-01-27 07:26:01'),
(2,'11','80','75','76','77','75','-','MAULANA RIZKI, S.Kom','2020-01-29 01:04:38','2020-01-29 01:18:32'),
(3,'12','-','-','-','-','-','-','MAULANA RIZKI, S.Kom','2020-01-29 07:04:52','2020-01-29 07:04:52'),
(4,'13','-','-','-','-','-','-','TAUFIK AKBAR SOLIKIN, ST','2020-01-29 07:07:36','2020-01-29 07:07:36'),
(5,'14','-','-','-','-','-','-','RIRIS ERNAWATI, SE','2020-01-29 07:42:41','2020-01-29 07:42:41'),
(6,'15','-','-','-','-','-','-','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-04-13 02:26:58','2022-04-13 02:26:58');

/*Table structure for table `tb_profil` */

DROP TABLE IF EXISTS `tb_profil`;

CREATE TABLE `tb_profil` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_profil` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arsip_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_profil` */

insert  into `tb_profil`(`id`,`judul_profil`,`isi_profil`,`slug_profil`,`foto_profil`,`arsip_profil`,`tag_profil`,`status_profil`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(2,'Dasar Hukum dan Etika Pengaduan','PHA+UGVuZ2FkdWFuIG1hc3lhcmFrYXQgYWRhbGFoIGxhcG9yYW4gZGFyaSBtYXN5YXJha2F0IG1lbmdlbmFpIGFkYW55YSBpbmRpa2FzaSB0ZXJqYWRpbnlhIHBlbnlpbXBhbmdhbiwga29ydXBzaSwga29sdXNpIGRhbiBuZXBvdGlzbWUgeWFuZyBkaWxha3VrYW4gYXBhcmF0IHBlbWVyaW50YWggZGFlcmFoIGRhbGFtIHBlbnllbGVuZ2dhcmFhbiBwZW1lcmludGFoYW4uICZuYnNwO1RhdGFjYXJhIHBlbmdhZHVhbiBtYXN5YXJha2F0IHBhZGEgUGVtZXJpbnRhaCBLYWJ1cGF0ZW4gVGVnYWwgZGlhdHVyIGRhbGFtJm5ic3A7PGEgaHJlZj0iaHR0cHM6Ly9qZGloLnRlZ2Fsa2FiLmdvLmlkL2luZGV4LnBocC9wcm9kdWstaHVrdW0vcGVyYXR1cmFuLWJ1cGF0aS9jYXRlZ29yeS8zMC1wZXJidXAtdGFodW4tMjAxNT9kb3dubG9hZD01NDE6cGVyYnVwLW5vLTEwLXRhaHVuLTIwMTUiPlBlcmF0dXJhbiBCdXBhdGkgTm8uIDEwIFRhaHVuIDIwMTUgdGVudGFuZyBQZWRvbWFuIFBlbmdlbG9sYWFuIFBlbmdhZHVhbiBNYXN5YXJha2F0IGRpIExpbmdrdW5nYW4gUGVtZXJpbnRhaCBLYWJ1cGF0ZW4gVGVnYWw8L2E+LjwvcD4NCjxwPlJ1YW5nIGxpbmdrdXAmbmJzcDtwZW5hbmdhbmFuIHBlbmdhZHVhbiBtYXN5YXJha2F0IG1lbGlwdXRpIHRpbmRha2FuIGF0YXUgZHVnYWFuIG1hbGFkbWluaXN0cmFzaSBvbGVoIHBlamFiYXQgcHVibGlrIGRpIGxpbmdrdW5nYW4gUGVtZXJpbnRhaCBLYWJ1cGF0ZW4gVGVnYWwgeWFuZyBkYXBhdCBkaWFkdWthbiwgeWFpdHUgYW50YXJhIGxhaW46PC9wPg0KPHVsPg0KPGxpPlBlbnVuZGFhbiBiZXJsYXJ1dDs8L2xpPg0KPGxpPlBlbnlhbGFoZ3VuYWFuIHdld2VuYW5nOzwvbGk+DQo8bGk+QmVydGluZGFrIHNld2VuYW5nLXdlbmFuZywgdGlkYWsgYWRpbCBkYW4gdGlkYWsgcGF0dXQ7PC9saT4NCjxsaT5QZW55aW1wYW5nYW4gcHJvc2VkdXI7PC9saT4NCjxsaT5QZXJidWF0YW4gbWVsYXdhbiBodWt1bTs8L2xpPg0KPGxpPktvcnVwc2ksIGtvbHVzaSBkYW4gbmVwb3Rpc21lOzwvbGk+DQo8bGk+SW50ZXJ2ZW5zaTs8L2xpPg0KPGxpPkxhbGFpIGF0YXMga2V3YWppYmFuOzwvbGk+DQo8bGk+VGlkYWsga29tcGV0ZW47PC9saT4NCjxsaT5QZW1hbHN1YW47PC9saT4NCjxsaT5MYWluLWxhaW4gdGluZGFrYW4gcGVqYWJhdCBwdWJsaWsgeWFuZyBtZXJ1Z2lrYW4gbWFzeWFyYWthdC48L2xpPg0KPC91bD4NCjxwPlN1bWJlciZuYnNwO1BlbmdhZHVhbiBNYXN5YXJha2F0IGRhcGF0IGJlcmFzYWwgZGFyaTo8L3A+DQo8dWw+DQo8bGk+TGVtYmFnYS1sZW1iYWdhIE5lZ2FyYTwvbGk+DQo8bGk+QmFkYW4vbGVtYmFnYS9JbnN0YW5zaSBQZW1lcmludGFoIGRhbiBQZW1lcmludGFoIERhZXJhaDwvbGk+DQo8bGk+QmFkYW4gaHVrdW07PC9saT4NCjxsaT5QYXJ0YWkgcG9saXRpazs8L2xpPg0KPGxpPk9yZ2FuaXNhc2kgbWFzeWFyYWthdDs8L2xpPg0KPGxpPk1lZGlhIG1hc3NhOyBkYW48L2xpPg0KPGxpPlBlcm9yYW5nYW48L2xpPg0KPC91bD4NCjxwPktyaXRlcmlhJm5ic3A7cGVuZ2FkdWFuIG1hc3lhcmFrYXQgeWFuZyBkaXRhbmdhbmkgYWRhbGFoOjwvcD4NCjx1bD4NCjxsaT5PYnlla3RpZiwgdGlkYWsgYmVyc2lmYXQgZml0bmFoOzwvbGk+DQo8bGk+QmVyc2lmYXQga29uc3RydWt0aWY8L2xpPg0KPGxpPk1lbmdpbmZvcm1hc2lrYW4gYWRhbnlhIGluZGlrYXNpIHRlcmphZGlueWEgcGVsYW5nZ2FyYW4sIHBlbnlpbXBhbmdhbiwgcGVueWVsZXdlbmdhbiwgcGVueWFsYWhndW5hYW4gd2V3ZW5hbmcsIGtlc2FsYWhhbiB5YW5nIGRpbGFrdWthbiBvbGVoIGFwYXJhdHVyOzwvbGk+DQo8bGk+U3VtYmFuZyBzYXJhbiB0ZXJoYWRhcCBwZW55ZWxlbmdnYXJhYW4gcGVtZXJpbnRhaGFuOzwvbGk+DQo8bGk+RGl0dWp1a2FuIGF0YXUgZGl0ZW1idXNrYW4ga2VwYWRhIEJ1cGF0aTs8L2xpPg0KPGxpPkJlbHVtIFBlcm5haCBkaXByb3NlcyB1bnR1ayBkaXNhbHVya2FuPC9saT4NCjwvdWw+DQo8cD5QZW55YW1wYWlhbiZuYnNwO3BlbmdhZHVhbiBtYXN5YXJha2F0IGRhcGF0IGRpc2FtcGFpa2FuIHNlY2FyYSZuYnNwO2xhbmdzdW5nJm5ic3A7ZGFuJm5ic3A7dGlkYWsgbGFuZ3N1bmcuJm5ic3A7UGVueWFtcGFpYW4gc2VjYXJhIGxhbmdzdW5nIGF0YXUgbGlzYW4gbWVsYWx1aSB0ZW11IG11a2EgYXRhdSB0YXRhcCBtdWthLCBiYWlrIGtlcGFkYSBCdXBhdGkgZGFuL2F0YXUgS2VwYWxhIFBlcmFuZ2thdCBEYWVyYWggbWF1cHVuIG1lbGFsdWkgcGVqYWJhdC9wZXR1Z2FzIHBlbmdlbG9sYSBwZW5nYWR1YW4uIFBlbnlhbXBhaWFuIHNlY2FyYSB0aWRhayBsYW5nc3VuZyBtZWxhbHVpIHN1cmF0LCBzYW1idW5nYW4gdGVsZXBvbiwgZW1haWwgYXRhdSBtZWRpYSBpbmZvcm1hc2kgbGFpbm55YSB5YW5nIGRpc2VkaWFrYW4gdW50dWsgbWVuZXJpbWEgcGVuZ2FkdWFuLCB5YWl0dTo8L3A+DQo8dWw+DQo8bGk+Li4uLi48L2xpPg0KPC91bD4NCjxwPlVudHVrIHBlbnlhbXBhaWFuIHBlbmdhZHVhbiBtYXN5YXJha2F0IGtlcGFkYSBJbnNwZWt0dXIgS2FidXBhdGVuIFRlZ2FsIGRhcGF0IGRpc2FtcGFpa2FuIHNlY2FyYSBsYW5nc3VuZy90aWRhayBsYW5nc3VuZyBrZSBhbGFtYXQmbmJzcDs8YSBocmVmPSJodHRwOi8vaW5zcGVrdG9yYXQudGVnYWxrYWIuZ28uaWQva29udGFrLWthbWkvIj5Lb250YWsgS2FtaTwvYT4sIGF0YXUgZGVuZ2FuIG1lbmdpc2kmbmJzcDs8YSBocmVmPSJodHRwOi8vaW5zcGVrdG9yYXQudGVnYWxrYWIuZ28uaWQva2lyaW0tYWR1YW4tZm9ybS8iPkZvcm11bGlyIFBlbmdhZHVhbjwvYT4uJm5ic3A7U2V0aWFwIHBlbmdhZHVhbiBtYXN5YXJha2F0IHlhbmcgbWFzdWsgc2VjYXJhIHJlc21pIGFrYW4gZGlrZWxvbGEgb2xlaCBQZW5nZWxvbGEgUGVuZ2FkdWFuIE1hc3lhcmFrYXQsIGJhaWsgeWFuZyBCZXJrYWRhciBQZW5nYXdhc2FuIGF0YXUgVGlkYWsgQmVya2FkYXIgUGVuZ2F3YXNhbiBkYW4gYWthbiBkaXRpbmRha2xhbmp1dGkuPC9wPg0KPHA+SmlrYSBzdWJzdGFuc2kgcGVuZ2FkdWFuIG1hc3lhcmFrYXQgdGlkYWsgamVsYXMgZGFuIGF0YXUgdGlkYWsgbG9naXMsIG1ha2EgcGVuZ2FkdWFuIG1hc3lhcmFrYXQgdGlkYWsgZGlzYWx1cmthbiBhdGF1IHRpZGFrIGRpdGluZGFrbGFuanV0aSBkYW4gaGFueWEgZGlkb2t1bWVudGFzaWthbi48L3A+','dasar-hukum-dan-etika-pengaduan','[\"2019-12-23-sosialisasi-gratifikasi-kab-jombang.jpg\"]','null','[\"kegiatan\",\"pengaduan\"]','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-23 03:06:50','2020-02-12 06:15:54'),
(3,'Tugas Pokok dan Fungsi','PGgyIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7Ij5UdWdhcyBQb2tvayBkYW4gRnVuZ3NpPC9zcGFuPjwvaDI+DQo8cCBzdHlsZT0iZm9udC13ZWlnaHQ6IDQwMDsgdGV4dC1hbGlnbjoganVzdGlmeTsiPiZuYnNwOzwvcD4NCjxwIHN0eWxlPSJmb250LXdlaWdodDogNDAwOyB0ZXh0LWFsaWduOiBqdXN0aWZ5OyI+SW5zcGVrdG9yYXQgbWVtcHVueWFpIHR1Z2FzIG1lbWJhbnR1IEJ1cGF0aSBkYWxhbSBtZWxha3VrYW4gcGVtYmluYWFuIGRhbiBwZW5nYXdhc2FuIHBlbGFrc2FuYWFuIHVydXNhbiBwZW1lcmludGFoYW4geWFuZyBtZW5qYWRpIGtld2VuYW5nYW4gRGFlcmFoIGRhbiB0dWdhcyBwZW1iYW50dWFuIG9sZWggUGVyYW5na2F0IERhZXJhaCwgc2VydGEgcGVtYmluYWFuIGRhbiBwZW5nYXdhc2FuIHBlbGFrc2FuYWFuIHVydXNhbiBwZW1lcmludGFoYW4gZGVzYS4gPC9wPg0KPHAgc3R5bGU9ImZvbnQtd2VpZ2h0OiA0MDA7IHRleHQtYWxpZ246IGp1c3RpZnk7Ij5EYWxhbSBtZW55ZWxlbmdnYXJha2FuIHR1Z2FzIHNlYmFnYWltYW5hIHRlcnNlYnV0IGRpIGF0YXMsIEluc3Bla3RvcmF0IG1lbXB1bnlhaSBmdW5nc2kgOjwvcD4NCjx1bCBzdHlsZT0iZm9udC13ZWlnaHQ6IDQwMDsgdGV4dC1hbGlnbjoganVzdGlmeTsiPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsgdGV4dC1hbGlnbjoganVzdGlmeTsiPmEuIFBlcnVtdXNhbiBrZWJpamFrYW4gdGVrbmlzIGJpZGFuZyBwZW5nYXdhc2FuIGRhbiBmYXNpbGl0YXNpIHBlbmdhd2FzYW48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsgdGV4dC1hbGlnbjoganVzdGlmeTsiPmIuIFBlbGFrc2FuYWFuIHBlbWJpbmFhbiBkYW4gcGVuZ2F3YXNhbiBhdGFzIHBlbnllbGVuZ2dhcmFhbiBQZW1lcmludGFoYW4gRGVzYSBzZXJ0YSBwZWxha3NhbmFhbiB1cnVzYW4gUGVtZXJpbnRhaGFuIERlc2EgPC9saT4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7IHRleHQtYWxpZ246IGp1c3RpZnk7Ij5jLiBQZWxha3NhbmFhbiBwZW5nYXdhc2FuIGludGVybmFsIHRlcmhhZGFwIGtpbmVyamEgZGFuIGtldWFuZ2FuIG1lbGFsdWkgYXVkaXQsIHJldml1LCBldmFsdWFzaSwgcGVtYW50YXVhbiBkYW4ga2VnaWF0YW4gcGVuZ2F3YXNhbiBJYWlubnlhPC9saT4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7IHRleHQtYWxpZ246IGp1c3RpZnk7Ij5kLiBQZWxha3NhbmFhbiBwZW5nYXdhc2FuIHVudHVrIHR1anVhbiB0ZXJ0ZW50dSBhdGFzIHBlbnVnYXNhbiBkYXJpIEJ1cGF0aSBkYW4vYXRhdSBHdWJlbXVyIHNlYmFnYWkgV2FraWwgUGVtZXJpbnRhaCBQdXNhdDwvbGk+DQo8bGkgc3R5bGU9ImZvbnQtc3R5bGU6IGluaGVyaXQ7IGZvbnQtd2VpZ2h0OiBpbmhlcml0OyB0ZXh0LWFsaWduOiBqdXN0aWZ5OyI+ZS4gUGVueXVzdW5hbiBMYXBvcmFuIEhhc2lsIFBlbmdhd2FzYW48L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsgdGV4dC1hbGlnbjoganVzdGlmeTsiPmYuIFBlbGFrc2FuYWFuIGtvb3JkaW5hc2kgcGVuY2VnYWJhbiB0aW5kYWsgcGlkYW5hIGtvcnVwc2k8L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsgdGV4dC1hbGlnbjoganVzdGlmeTsiPmcuIFBlbmdhd2FzYW4gcGVsYWtzYW5hYW4gcHJvZ3JhbSByZWZvcm1hc2kgYmlyb2tyYXNpPC9saT4NCjxsaSBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsgZm9udC13ZWlnaHQ6IGluaGVyaXQ7IHRleHQtYWxpZ246IGp1c3RpZnk7Ij5oLiBQZWxha3NhbmFhbiBhZG1pbmlzdHJhc2kgSW5zcGVrdG9yYXQ8L2xpPg0KPGxpIHN0eWxlPSJmb250LXN0eWxlOiBpbmhlcml0OyBmb250LXdlaWdodDogaW5oZXJpdDsgdGV4dC1hbGlnbjoganVzdGlmeTsiPmkuIFBlbGFrc2FuYWFuIGZ1bmdzaSBsYWluIHlhbmcgZGliZXJpa2FuIG9sZWggQnVwYXRpIHRlcmthaXQgZGVuZ2FuIHR1Z2FzIGRhbiBmdW5nc2lueWEuIDwvbGk+','tugas-pokok-dan-fungsi','[\"2021-01-07-maklumat-pelayanan-05-15-58am-1.jpg\"]','null','[\"profil\",\"kegiatan\"]','aktif','MAULANA RIZKI, S.Kom','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-02-25 07:43:32','2022-11-02 08:29:28'),
(4,'Visi dan Misi','PGgzPjxzdHJvbmc+VmlzaTwvc3Ryb25nPjwvaDM+DQo8YmxvY2txdW90ZT4NCjxwPjxlbT5CZXJzYW1hIE1ld3VqdWRrYW4gSm9tYmFuZyBZYW5nIEJlcmthcmFrdGVyICZuYnNwO0RhbiBCZXJkYXlhIFNhaW5nPC9lbT48L3A+DQo8L2Jsb2NrcXVvdGU+DQo8aDM+TWlzaTwvaDM+DQo8b2w+DQo8bGk+TWV3dWp1ZGthbiB0YXRhIGtlbG9sYSBwZW1lcmludGFoYW4geWFuZyBiZXJzaWggZGFuIHByb2Zlc2lvbmFsLjwvbGk+DQo8bGk+TWV3dWp1ZGthbiBtYXN5YXJha2F0IGpvbWJhbmcgeWFuZyBiZXJrdWFsaXRhcywgcmVsaWdpdXMsIGRhbiBiZXJidWRheWEuPC9saT4NCjxsaT5NZW5pZ2thdGthbiBkYXlhIHNhaW5nIHBlcmVrb25vbWlhbiBkYWVyYWggYmVyYmFzaXMga2VyYWt5YXRhbiBwb3RlbnNpIHVuZ2d1bGFuIGxva2FsIGRhbiBpbmR1c3RyaS48L2xpPg0KPC9vbD4=','visi-dan-misi','[\"2019-12-23-telaah-sejawat.jpg\"]','null','[\"profil\",\"kegiatan\",\"berita\"]','aktif','Maulana Rizki','MAULANA RIZKI, S.Kom','2019-12-23 08:33:19','2020-07-14 07:31:09'),
(5,'Struktur Organisasi','PGgyID48c3BhbiBzdHlsZT0iZm9udC1zdHlsZTogaW5oZXJpdDsiPlN0cnVrdHVyIE9yZ2FuaXNhc2k8L3NwYW4+PC9oMj4NCjxkaXYgY2xhc3M9InRleHQtbGVmdCI+DQo8dWw+DQo8bGk+U3VzdW5hbiBvcmdhbmlzYXNpIEluc3Bla3RvcmF0IEthYnVwYXRlbiBKb21iYW5nIHRlcmRpcmkgZGFyaTo8L2xpPg0KPC91bD4NCjx1bD4NCjxsaT5hLiBJbnNwZWt0dXI8L2xpPg0KPGxpID5iLiBTZWtyZXRhcmlhdCB5YW5nIG1lbWJhd2FoaTo8L2xpPg0KPHVsIHN0eWxlPSJtYXJnaW4tbGVmdDogMjBweDsiPg0KPGxpPjEuIFN1YiBCYWdpYW4gUGVyZW5jYW5hYW48L2xpPg0KPGxpPjIuIFN1YiBCYWdpYW4gQW5hbGlzYSBkYW4gRXZhbHVhc2kgSGFzaWwgUGVuZ2F3YXNhbjwvbGk+DQo8bGk+My4gU3ViIEJhZ2lhbiBVbXVtLCBLZXVhbmdhbiBkYW4gQXNldC48L2xpPg0KPC91bD4NCjxsaT5jLiBJbnNwZWt0dXIgUGVtYmFudHUgQmlkYW5nIEludmVzdGlnYXNpPC9saT4NCjxsaT5kLiBJbnNwZWt0dXIgUGVtYmFudHUgQmlkYW5nIEtldWFuZ2FuIGRhbiBBc2V0PC9saT4NCjxsaSA+ZS4gSW5zcGVrdHVyIFBlbWJhbnR1IEJpZGFuZyBQZW1iYW5ndW5hbjwvbGk+DQo8bGkgPmYuIEluc3Bla3R1ciBQZW1iYW50dSBCaWRhbmcgUGVtZXJpbnRhaGFuLCBFa29ub21pIGRhbiBLZXNlamFodGVyYWFuIFNvc2lhbDwvbGk+DQo8bGk+Zy4gSmFiYXRhbiBGdW5nc2lvbmFsIEJpZGFuZyBQZW5nYXdhc2FuPC9saT4NCjwvdWw+DQo8L2Rpdj4=','struktur-organisasi','[\"2022-11-04-struktur-organisasi-12-31-40pm-struktur organisasi.png\"]','null','[\"profil\",\"berita\"]','aktif','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-02-02 08:37:17','2022-11-04 13:00:45');

/*Table structure for table `tb_program_sakip` */

DROP TABLE IF EXISTS `tb_program_sakip`;

CREATE TABLE `tb_program_sakip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan_per_tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_program_sakip` */

insert  into `tb_program_sakip`(`id`,`id_sakip`,`program`,`anggaran`,`urutan_per_tahun`,`created_by`,`created_at`,`updated_at`) values 
(2,'3','Penyusunan rencana kerja SKPD','10147500','1','MAULANA RIZKI, S.Kom','2020-01-08 02:10:09','2020-01-08 02:10:09'),
(3,'1','Penyusunan rencana kerja SKPD','10147500','1','MAULANA RIZKI, S.Kom','2020-01-15 07:04:29','2020-01-15 07:04:29'),
(4,'4','Penyusunan rencana kerja SKPD','10147500','1','MAULANA RIZKI, S.Kom','2020-01-23 05:49:00','2020-01-23 05:49:00'),
(8,'10','Penyusunan rencana kerja SKPD','10147500','1','MAULANA RIZKI, S.Kom','2020-02-04 08:52:15','2020-02-04 08:52:15');

/*Table structure for table `tb_sakip` */

DROP TABLE IF EXISTS `tb_sakip`;

CREATE TABLE `tb_sakip` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipe_sakip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_pihak_pertama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_pihak_kedua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `status1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_sakip` */

insert  into `tb_sakip`(`id`,`tipe_sakip`,`nip_pihak_pertama`,`nama_pihak_pertama`,`jabatan_pihak_pertama`,`golongan_pihak_pertama`,`nip_pihak_kedua`,`nama_pihak_kedua`,`jabatan_pihak_kedua`,`golongan_pihak_kedua`,`tahun`,`tanggal_surat`,`status1`,`status2`,`status3`,`status4`,`created_by`,`created_at`,`updated_at`) values 
(10,'1','003','MAULANA RIZKI, S.Kom','Fungsional Umum','Juru Muda (I/a)','003','MAULANA RIZKI, S.Kom','Fungsional Umum','Juru Muda (I/a)','2020','2020-10-20','2','1','1','1','MAULANA RIZKI, S.Kom','2020-01-27 06:42:46','2020-03-05 05:51:07'),
(12,'1','003','MAULANA RIZKI, S.Kom','Fungsional Umum','Juru Muda (I/a)','003','MAULANA RIZKI, S.Kom','Fungsional Umum','Juru Muda (I/a)','2019','2020-10-13','2','1','3','2','MAULANA RIZKI, S.Kom','2020-01-29 07:04:52','2020-02-14 01:49:57'),
(13,'1','197901272011011002','TAUFIK AKBAR SOLIKIN, ST','Auditor Muda','Penata (III/c)','197011262002121006','AGUNG HARIADI, ST., MM','Inspektur Pembantu Bidang Pembangunan','Pembina Tk. I (IV/b)','2020','2020-12-31','1','1','1','1','TAUFIK AKBAR SOLIKIN, ST','2020-01-29 07:07:36','2020-01-29 07:32:52'),
(14,'1','197907072006042036','RIRIS ERNAWATI, SE','Auditor Madya','Pembina (IV/a)','196801281994032009','LILIES WIDIANINGSIH, SE., MSi','Inspektur Pembantu Bidang Keuangan','Pembina Tk. I (IV/b)','2020','2020-01-02','1','1','2','2','RIRIS ERNAWATI, SE','2020-01-29 07:42:41','2020-01-29 07:54:28'),
(15,'1','003','MAULANA RIZKI, S.Kom','Pengelola Kepegawaian','Juru Muda (I/a)','003','MAULANA RIZKI, S.Kom','Pengelola Kepegawaian','Juru Muda (I/a)','2022','2022-03-27','2','2','2','2','MOCHAMMAD AULYA RAHMAN, A.Md.Kom.','2022-04-13 02:26:58','2022-04-13 02:26:58');

/*Table structure for table `tb_sk` */

DROP TABLE IF EXISTS `tb_sk`;

CREATE TABLE `tb_sk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_sk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `bertanda_tangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hal_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_sk` */

insert  into `tb_sk`(`id`,`no_sk`,`no_agenda`,`tanggal_surat`,`bertanda_tangan`,`opd`,`hal_surat`,`lampiran`,`created_by`,`created_at`,`updated_at`) values 
(1,'188/1427/415.15/2019','12','2019-11-29','Maulana Rizki','Maulana Rizki','SK Susunan Panitia Penyelenggara Rapat Kordinasi Pengawasan Daerah Kab. Jombang TA.2019','[\"2019-11-29sk1.jpg\",\"2019-11-29sk2.jpg\",\"2019-11-29sk3.jpg\",\"2019-11-29sk4.jpg\",\"2019-11-29sk5.jpg\"]','Maulana Rizki','2019-12-05 00:02:58','2019-12-05 00:02:58');

/*Table structure for table `tb_status_pegawai` */

DROP TABLE IF EXISTS `tb_status_pegawai`;

CREATE TABLE `tb_status_pegawai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status_kepegawaiaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_status_pegawai` */

insert  into `tb_status_pegawai`(`id`,`status_kepegawaiaan`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(1,'Eselon (II/b)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-23 01:54:51','2020-01-23 01:55:23'),
(2,'Eselon (III/a)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-23 01:56:06','2020-01-23 01:56:06'),
(3,'Eselon (III/b)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-23 01:56:23','2020-01-23 01:56:23'),
(4,'Eselon (IV/a)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-23 01:56:42','2020-01-23 01:56:42'),
(5,'Eselon (IV/b)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-23 01:57:14','2020-01-23 01:57:23'),
(6,'Eselon (V/a)','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-23 01:57:50','2020-01-23 01:57:50'),
(7,'Bukan Eselon','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-23 01:58:06','2020-01-23 01:58:06'),
(8,'Jabatan Fungsional Tertentu','YOGA PRATAMA, S.E','YOGA PRATAMA, S.E','2020-07-08 08:27:12','2020-07-08 08:27:12');

/*Table structure for table `tb_surat_cuti` */

DROP TABLE IF EXISTS `tb_surat_cuti`;

CREATE TABLE `tb_surat_cuti` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_surat_cuti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `pemberi_cuti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima_cuti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hal_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_surat_cuti` */

insert  into `tb_surat_cuti`(`id`,`no_surat_cuti`,`no_agenda`,`tanggal_surat`,`pemberi_cuti`,`penerima_cuti`,`hal_surat`,`lampiran`,`created_by`,`created_at`,`updated_at`) values 
(2,'800/1308/415.15/2019','1771/436','2019-11-08','Maulana Rizki','Maulana Rizki','Usulan Cuti Sakit Bpk/Ibu Endang Novitriana','[\"2019-11-08cuti1.jpg\",\"2019-11-08cuti2.jpg\",\"2019-11-08cuti3.jpg\"]','Maulana Rizki','2019-12-05 01:55:30','2019-12-05 01:55:30');

/*Table structure for table `tb_surat_keluar` */

DROP TABLE IF EXISTS `tb_surat_keluar`;

CREATE TABLE `tb_surat_keluar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_surat_keluar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `hal_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tertuju` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_surat_keluar` */

insert  into `tb_surat_keluar`(`id`,`no_surat_keluar`,`no_agenda`,`tanggal_keluar`,`hal_surat`,`tertuju`,`alamat`,`lampiran`,`created_by`,`created_at`,`updated_at`) values 
(2,'700/386/415.15/2019','11','2019-11-25','Permintaan Vandel / Plakat','Kepala Bagian Umum dan Perlengkapan Setda Kabupaten Jombang','Jombang','[\"surat keluar.jpg\"]','Maulana Rizki','2019-12-04 22:41:41','2019-12-04 22:41:41');

/*Table structure for table `tb_surat_kepegawaiaan` */

DROP TABLE IF EXISTS `tb_surat_kepegawaiaan`;

CREATE TABLE `tb_surat_kepegawaiaan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_surat_kepegawaiaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `bertanda_tangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tertuju` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hal_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_surat_kepegawaiaan` */

insert  into `tb_surat_kepegawaiaan`(`id`,`no_surat_kepegawaiaan`,`no_agenda`,`tanggal_surat`,`bertanda_tangan`,`tertuju`,`hal_surat`,`lampiran`,`created_by`,`created_at`,`updated_at`) values 
(1,'800/1252/415.15/2019','142','2019-10-31','Drs, Eka Suprasetyo., AP., MM','Kepala Badan Kepegawaiaan Daerah Pendidikan dan Pelatihan Kabupaten Jombang','Penyesuaiaan Usulan Jabatan Pelaksana','[\"2019-10-31kepegawaiaan1.jpg\",\"2019-10-31kepegawaiaan2.jpg\"]','Maulana Rizki','2019-12-06 02:29:11','2019-12-06 02:29:11');

/*Table structure for table `tb_surat_masuk` */

DROP TABLE IF EXISTS `tb_surat_masuk`;

CREATE TABLE `tb_surat_masuk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_surat_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `pengirim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hal_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disposisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_disposisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_surat_masuk` */

insert  into `tb_surat_masuk`(`id`,`no_surat_masuk`,`no_agenda`,`tanggal_surat`,`tanggal_masuk`,`pengirim`,`hal_surat`,`lampiran`,`disposisi`,`isi_disposisi`,`created_by`,`created_at`,`updated_at`) values 
(1,'476/4068/415.38/2019','1771/436','2019-11-26','2019-11-28','Dinas Pengendalian Penduduk dan KB, PPPA','Penetapan Rencana Kerja (RK) DAK Fisik Sub Bidang KB TA.2020','[\"disposisi.jpg\",\"surat1.jpg\",\"surat2.jpg\"]','[\"Sekretaris Inspektorat\",\"Irban Pembangunan\"]','Sebagai bahan monev DAK','Maulana Rizki','2019-12-04 21:28:41','2019-12-04 21:28:41'),
(53,'sdfdsfds','2','2020-02-12','2020-02-05','sdfdsfds','dfsdfdsfsd','[\"peta.png\"]','[\"Sekretaris Inspektorat\",\"Irban Pembangunan\"]','dsfsfd','MAULANA RIZKI, S.Kom','2020-02-24 08:22:57','2020-02-24 08:22:57');

/*Table structure for table `tb_surat_masuk1` */

DROP TABLE IF EXISTS `tb_surat_masuk1`;

CREATE TABLE `tb_surat_masuk1` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_surat_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengirim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_surat` date NOT NULL,
  `hal_surat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disposisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_disposisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1064 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_surat_masuk1` */

insert  into `tb_surat_masuk1`(`id`,`no_surat_masuk`,`pengirim`,`tanggal_masuk`,`tanggal_surat`,`hal_surat`,`lampiran`,`no_agenda`,`pengolah`,`disposisi`,`isi_disposisi`,`created_by`,`created_at`,`updated_at`) values 
(709,'910/8681/415.10.2.2/2019','BAG.ADM.PEMBANGUNAN ','2019-12-31','2019-12-31','PENCERMATAN PEDOMAN PELAKSANAAN APBD TA 2020','','1','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(710,'560/18/415.21/2020','DINAS TENAGA KERJA','2020-01-02','2020-01-02','TEMB: LAPORAN REALISASI PENYERAPAN APBD TA 2019 PADA DINAS TENAGA KERJA KAB. JOMBANG','','2','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(711,'860/03/415.42/2020','BAPPEDA','2020-01-03','2020-01-02','TEMB: LAPORAN ABSENSI ELEKTRONIK BAPPEDA BULAN DESEMBER 2019','','3','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(712,'050/1389/415.19/2019','DINAS PERUMAHAN DAN PERMUKIMAN','2020-01-03','2019-12-20','TEMB: TANGGAPAN KONFIRMASI /KLARIFIKASI RADAR MINGGUAN GLOBAL POS','','4','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(713,'050/8599/415.42/2019','BAPPEDA','2020-01-03','2019-12-26','PERMINTAAN LAPORAN EVALUASI PELAKSANAAN PEMBANGUNAN TAHUN 2019','','5','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(714,'940/3325/415.44/2019','BPKAD','2020-01-03','2019-12-30','TEMB: LAPORAN POSISI KAS HARIAN','','6','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(715,'800/002/415.67/2020','KECAMATAN JOGOROTO','2020-01-06','2020-01-02','LAPORAN DAFTAR HADIR OKTOBER, NOVEMBER, DESEMBER 2019','','7','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(716,'865/4451/415.41/2019','BKDPP','2020-01-06','2019-12-31','PEMBERITAHUAN KEWAJIBAN PENGISIAN DAN PENYAMPAIAN LHKPN','','8','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(717,'050/070/415.42/2020','BAPPEDA','2020-01-06','2020-01-06','PENYUSUNAN RACANGAN AWAL RKPD TH 2021','','9','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(718,'824/01/415.70/2020','KECAMATAN NGORO','2020-01-06','2020-01-02','TEMB: MENGHADAPKAN PNS A/N AHMAD ANDI A, S. IP SEBAGAI ANALIS PEMBERDAYAAN MASYARAKAT DI KEC. NGUSIKAN','','10','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(719,'','KECAMATAN MOJOAGUNG','2020-01-06','2020-01-01','TEMB : SK A/N SODIKIN DI KEC. MOJOAGUNG','','11','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(720,'800/009/415.68.2020','KECAMATAN SUMOBITO','2020-01-06','2020-01-06','LAPORAN DAFTAR HADIR  DESEMBER 2019 KEC. SUMOBITO','','12','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(721,'800/0044/415.28/2020','DINAS KETAHANAN PANGAN DAN PERIKANAN','2020-01-07','2020-01-07','DAFTAR HADIR PNS DINAS KETAHANAN PANGAN DAN PERIKANAN BLN DESEMBER 2019','','13','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(722,'963/ 02/ 415.66/2020','KECAMATAN PETERONGAN','2020-01-07','2020-01-07','DAFTAR HADIR PNS KEC. PETERONGAN BLN DESEMBER 2019','','14','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(723,'860/189/415.43/2020','BADAN PENDAPATAN DAERAH','2020-01-07','2020-01-07','DAFTAR HADIR PNS BADAN PENDAPATAN DAERAH BLN DESEMBER 2019','','15','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(724,'005/095/415.10.2.2/2020','BAG.ADM.PEMBANGUNAN ','2020-01-07','2020-01-07','UND : PERCEPATAN PELAKSANAAN ANGGARAN TH 2020/ R SEKDA KAB /8 JAN 2020/ 13.00 WIB','','16','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(725,'005/071/415.10.2.2/2020','BAG.ADM.PEMBANGUNAN ','2020-01-07','2020-01-06','UND : RAPAT EVALUASI PENYERAPAN ANGGARAN TRIBULAN IV MELALUI APLIKASI SIPEM / R SOERO I / 9 JAN 2020/ 08.00 WIB','','17','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(726,'900/072/415.10.2.2/2020','BAG.ADM.PEMBANGUNAN ','2020-01-06','2020-01-06','PERMINTAAN DATA PA / PPK DAN PEJABAT PENGADAAN','','18','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(727,'072/005/415.35/2020','DPMPTSP','2020-01-07','2020-01-06','TEMB : IZIN PENELITIAN A/N IKA ROSSI AGUSTIN / UNIVERSITAS HASYIM ASY\'ARI TEBUIRENG JOMBANG','','19','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(728,'800/008/415.14.22/2020','SMP NEGERI 2 PETERONGAN','2020-01-08','2020-01-07','DAFTAR HADIR GURU DAN STAF TATA USAHA BULAN DESEMBER 2019','','20','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(729,'005/098/415.10.1.1/2019','BAG. ADM. PEMERINTAHAN','2020-01-08','2020-01-07','UND : RAPAT TEKNIS PENYUSUNAN LKPj BUPATI TAHUN 2019 / TUTUK MAHMULAH, SE/ 9 JAN 2020/ 08.30 WIB','','21','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(730,'426/23/415.25/2020','DINAS PEMUDA OLAHRAGA DAN PARIWISATA','2020-01-08','2020-01-08','PEMBERITAHUAN SENAM RUTIN SKJ MINGGUAN DI ALUN-ALUN JOMBANG TH ANGGARAN 2020','','22','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(731,'005/53/415.42/2020','BAPPEDA','2020-01-08','2020-01-08','UND : RAPAT KOORDINASI BERKADANG DAN RKPD TAHUN 2021/ 9 JAN 2020/ 09.00 WIB','','23','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(732,'863/009/415.60/2020','KEC. PLOSO','2020-01-08','2020-01-07','TEMB : SURAT PANGGILAN DINAS A/N IWAN SUNARTO / PETUGAS KEAMANAN KEC. PLOSO','','24','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(733,'005/125/415.10.1.1/2020','BAG. ADM. PEMERINTAHAN','2020-01-08','2020-01-08','UND: RAPAT KOORDINASI DAN SINERGI PENYELENGGARAAN PEMERINTAHAN DI PROV JATIM TH 2020 / 9 JANUARI 2020/ 08.00 WIB','','25','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(734,'800/010/415.40/2020','SATPOL PP','2020-01-08','2020-01-08','TEMB : LAPORAN PENUGASAN PNSD A/N SUJONO/ PETUGAS KEAMANAN SATPOL PP KAB JOMBANG','','26','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(735,'77/ARSADA/UMUM/XII/2019','ARSADA','2020-01-08','2019-12-30','UNDANGAN PELATIHAN IMPLEMENTASI PPK-BLUD','','27','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(736,'082b/DIS/120530160010/2019','SARJONO','2020-01-08','2019-12-31','KUESIONER PENELITIHAN','','28','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(737,'005/120/415.10.3.1/2020','BAG.UMUM DAN PERLENGKAPAN ','2020-01-08','2020-01-08','UND: APEL GELAR PASUKAN PENANGGULANGAN BENCANA ALAM DI WIL KAB JOMBANG','','29','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(738,'050/41/415.42/2019','BAPPEDA','2020-01-09','2020-01-07','KOORDINASI PELAKSANAAN E- POKIR DLM RKPD THN 2021/RABU/8 JAN 2020/08.30WIB/R.RPT BAPPEDA','','30','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(739,'870/49/415.21/2019','DINAS TENAGA KERJA','2020-01-09','2020-01-01','LAP.ABSENSI','','31','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(740,'940/0007/415.44/2019','BPKAD','2020-01-09','2020-01-02','TEMB : LAP.POSISI KAS HARIAN','','32','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(741,'005/151/415.33/2020','DPMD','2020-01-09','2020-01-09','PENCERMATAN DRAFT PERBUP THN 2020 TTG DESA/JUMAT/10 JAN 2019/09.00/SWAGATA','','33','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(742,'130/22/415.10.1.1/2020','BAG.ADM.PEMBANGUNAN ','2020-01-09','2020-01-08','PERMINTAAN DATA DLM RANGKA PENYUSUNAN LKPj TAHUN 2019','','34','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(743,'910/085/415.10.2.2/2020','BAG.ADM.PEMBANGUNAN ','2020-01-09','2020-01-06','PERMINTAAN TIM TEKNIS PENYUSUNAN PEDOMAN PELAKSANAAN APBD TA 2021','','35','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(744,'800/2032/415.35/2020','DPMPTSP','2020-01-09','2020-01-08','LAP.ABSENSI','','36','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(745,'01 TAHUN 2020','SK KEPALA DESA WATUDAKON','2020-01-09','2020-01-01','SK TTG PENUNJUKAN DAN PENGANGKATAN  TENAGA HONORER PELAYANAN DS WATUDAKON KEC.KESAMBEN','','37','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(746,'443.32/8674/415.17/2019','DINAS KESEHATAN','2020-01-09','2019-12-21','SE TTG GERAKAN PSN 3M  PLUS','','38','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(747,'800/11/5415.62/2020','KEC.KABUH','2020-01-09','2020-01-07','LAP.ABSENSI','','39','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(748,'855/1940/415.39/2019','DISPENDUKCAPIL','2020-01-09','2019-12-02','LAPORAN IJIN CUTI TAHUNAN AN.TATIK SRI BERDIKARIWATI DKK','','40','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(749,'094/121/415.10.2.3/2020','BAGIAN PENGADAAN BARANG DAN JASA','2020-01-09','2020-01-08','SE TTG JABATAN FUNGSIONAL PENGELOLA PENGADAAN BRANG DAN JASA','','41','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(750,'800/50/415.41/2020','DINAS PENGENDALIAN PENDUDUK ,KB, PPPA','2020-01-09','2020-01-07','LAP.ABSENSI','','42','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(751,'188/14/415.41/2020','BKDPP','2020-01-09','2020-01-07','PERBUP JOMBANG NO.73 THN 2019 TTGL 9 DES 2019 TTG MEKANISME PERPINDAHAN TUGAS PNS DI LINGKUNGAN PEMKAB','','43','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(752,'800/27/415.54/2020','KECAMATAN DIWEK','2020-01-10','2020-01-08','LAPORAN DAFTAR PNS HADIR KEC DIWEK BLN DESEMBER 2019','','44','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(753,'879/36/415.52/2020','PERSH DAERAH PANGLUNGAN','2020-01-10','2020-01-10','LAPORAN DAFTAR HADIR PNS BLN DESEMBER 2020','','45','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(754,'005/189/415.10.2.1/2020','BAG. ADM. KESRA','2020-01-10','2020-01-10','UND: RAPAT KOORDINASI BERAS UNTUK ASN','','46','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(755,'910/8664/415.19/2019','DINAS PERUMAHAN DAN PERMUKIMAN','2020-01-13','2019-12-30','TEMB :LARANGAN BERJUALAN DAN MENDIRIKAN BANGUNAN DI ATAS TROTOAR/ SALURAN DRAINASE ','','47','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(756,'910/17/415.19/2020','DINAS PERUMAHAN DAN PERMUKIMAN','2020-01-13','2020-01-09','PERMOHONAN PROBITY AUDIT PENYUSUNAN DED DRAINASE KAWASAN JL.KH WAHID HASYIM','','48','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(757,'900/0023/415.35/20120','DPMPTSP','2020-01-13','2020-01-08','LAP.REALISASI PENERIMAAN RETRIBUSI DAERAH BLN DESEMBER 2019','','49','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(758,'005/835/415.14/2019','DPRD KAB.JOMBANG','2020-01-13','2019-12-30','REKOMENDASI TTG PEMBANGUNAN GEDUNG PUSKESMAS MOJOWARNO','','50','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(759,'065/88/415.42/2020','BAPPEDA','2020-01-13','2020-01-13','PERMOHONAN DATA HASIL PENILAIAN EVALUASI MASING - MASING OPD PADA KOMPONEN PERENCANAAN','','51','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(760,'032/8657/415.44/2019','BPKAD','2020-01-13','2019-12-30','PENYUSUNAN RKBMD PEMINDAHTANGANAN 2021 ','','52','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(761,'824/12/415.56/2020','KEC.PERAK','2020-01-13','2020-01-10','TEMB :PENGHADAPAN PNS AN.CHOLILUL UZAIR','','53','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(762,'005/96/415.42/2020','BAPPEDA','2020-01-13','2020-01-13','DESK EVALUASI  HASIL PELAKSANAAN RKPD 2019/SELASA,RABU,DAN JUMAT/14,15,17/R.RPT BAPPEDA LT.1','','54','PPE','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(763,'421.2/12/415.16.12/2020','UPTD WILAYAH KERJA PENDIDIKAN KEC.NGUSIKAN','2020-01-14','2020-01-13','LAP.ABSENSI','','55','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(764,'005/064/415.44/2020','BPKAD','2020-01-14','2020-01-06','RAKOOR PRA PENYUSUNAN STANDART SATUAN HARGA PEMKAB JOMBANG THN 2021/RABU/22 JAN 2020/09.00WIB/R/RPT BPKAD','','56','KASUBAG PERENCANAAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(765,'800/83/415.26/2019','DINAS KOPERASI DAN USAHA MIKRO','2020-01-14','2020-01-19','LAP.ABSENSI','','57','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(766,'005/057/415.22/2020','DINAS PERHUBUNGAN','2020-01-14','2020-01-14','RAKOOR PENDAPATAN ASLI DAERAH PARKIR BERLANGANAN/RABU/15 JAN 2020/09.00WIB','','58','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(767,'065/94/415.42/2020','BAPPEDA','2020-01-14','2020-01-13','PERMOHONAN DATA TUGAS PEMBANTUAN','','59','KASUBAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(768,'050/224/415.10.2.2/2020','BAG.ADM.PEMBANGUNAN ','2020-01-14','2020-01-13','PERMINTAAN DATA TARGET KEUANGAN DAN FISIK / KEGIATAN','','60','KASUBAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(769,'426/57/415.25/2020','DINAS KEPEMUDAAN ,OLAHRAGA DAN PARIWISATA','2020-01-14','2020-01-14','TEMB : PEMOTONGAN POHON DAN LAMPU TAMAN STADION','','61','KASUBAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(770,'824.3/244/415.41/2019','BKDPP','2020-01-14','2019-11-11','PENEMPATAN PNS AN.TONY WARTONO, SE DI DINAS KOMUNIKASI DAN INFORMATIKA','','62','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(771,'900/50/415.15/2020','INSPEKTORAT JOMBANG','2020-01-14','2020-01-14','PERMINTAAN DOKUMEN  UNTUK REVIU LAPORAN KEUANGAN ','','63','KASUBAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(772,'140/21/415.71/2020','KEC.MOJOWARNO','2020-01-14','2020-01-14','TEMB : PERMOHONAN Plt.KADES KARANGLO','','64','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(773,'970/052/415.22/2020','DINAS PERHUBUNGAN','2020-01-14','2020-01-01','LAP.SPJ FUNGSIONAL BENDAHARA PENERIMA SKPD BAG.BULAN DESEMBER 2019','','65','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(774,'55/ARSADA/UMUM/XII/2019','ARSADA','2020-01-15','2019-12-30','UNDANGAN BIMTEK PPK-BLUD','','66','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(775,'005/476/415.47/2019','RSUD JOMBANG','2020-01-15','2020-01-15','RAKOOR TINDAKLANJUT BPK PENAGIHAN DAN PENYELESAIAN PIUTANG PASIEN UMUMRSUD JOMBANG/KAMIS/16 JAN 2020/08.30WIB/R.PERTEMUAN SOEDJITO','','67','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(776,'800/005/415.20/2020','PERUSDA SEGER','2020-01-15','2020-01-07','LAP.ABSENSI','','68','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(777,'050/92/415.42/2020','BAPPEDA','2020-01-15','2020-01-13','RAKOOR PELAKSANAAN MUSRENBANG KEC.2020 DLM RANGKA PENYUSUNAN RKPD KAB.JOMBANG THN 2021/KAMIS/16 JAN 2020/08.30WIB/R.RPT BAPPEDA','','69','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(778,'027/255/415.10.2.3/2020','BAG.PENGADAAN BARANG DAN JASA','2020-01-15','2020-01-14','PERMOHONAN KEGIATAN PEKERJAAN KONSTRUKSI PERENCANAAN T-1','','70','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(779,'027/221/415.10.2.3/2020','BAG.PENGADAAN BARANG DAN JASA','2020-01-15','2020-01-13','PERSYARATAN TENDER TA 2020','','71','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(780,'045/2225/415.36/2020','DINAS PERPUSTAKAAN DAN ARSIP ','2020-01-15','2020-01-13','PENYERAHAN ARSIP IN- AKTIF','','72','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(781,'005/260/415.10.3.1/2020','BAG.UMUM DAN PERLENGKAPAN ','2020-01-15','2020-01-14','PISAH SAMBUT KEPALA KEJAKSAAN NEGERI JOMBANG/KAMIS/16 JAN 2020/19.00WIB/R.BUNG TOMO','','73','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(782,'005/39/415.10.1.3/2020','BAGIAN HUKUM','2020-01-15','2020-01-14','RAKOOR RANCANGAN PERBUP JOMBANG TTG PEDOMAN PELAKSANAAN PENDAFTARAN TANAH SISTEMATIS LENGKAP MELALUI DANA MASYARAKAT DI KAB.JOMBANG/KAMIS/16 JAN 2020/08.00WIB/R.RPT SEKDA','','74','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(783,'660/169/415.34/2020','DINAS LINGKUNGAN HIDUP','2020-01-16','2020-01-16','TEMB : PEMOTONGAN POHON DAN LAMPU TAMAN STADION','','75','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(784,'050/26/415.19/2020','DINAS  PERUMAHAN DAN PERMUKIMAN','2020-01-16','2020-01-13','TEMB : PEMBERITAHUAN MELAKSANAKAN PENGADAAAN LANGSUNG SECARA NON TRAMSAKSIONAL','','76','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(785,'S-298/WPJ.24/KP.16/2020','KPP PRATAMA JOMBANG','2020-01-16','2020-01-14','BIMTEK PEMBUATAN BUKTI POTONG PPh Pasal 21/Selasa/21 Januari 2020/09.00WIB/AULA KPP PRATAMA JOMBANG','','77','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(786,'910/22/415.19/2020','DINAS PERUMAHAN DAN PERMUKIMAN','2020-01-16','2020-01-10','TEMB  : PERMOHONAN PENGHAPUSAN ASET RTH DAN JALUR SEPEDA / BECAK JL.KH.WAHID HASYIM','','78','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(787,'410/1.33/202093/415','DPMD','2020-01-16','2020-01-10','TEMB : PENYUSUNAN RPJMDESA','','79','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(788,'940/0053/415.44/2020','BPKAD','2020-01-16','2020-01-13','TEMB : LAP.POSISI KAS HARIAN','','80','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(789,'602/.18/2020129/415','DPUPR','2020-01-16','2020-01-15','PERMOHONAN REKOMENDASI SANKSI DAFTAR HITAM','','81','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(790,'602/115/415.18/2020','DPUPR','2020-01-16','2020-01-14','PERMOHONAN PROBITY AUDIT PENYUSUNAN DED DRAINASE KAWASAN JL.KH WAHID HASYIM','','82','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(791,'138/8691/415.10.1.1/2019','BAG.AD.PEMERINTAHAN','2020-01-16','2019-12-31','HASIL PENILAIAN SINERGITAS KINERJA KECAMATAN THN 2019','','83','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(792,'800/182/415.16/2020','DINAS PENDIDIKAN DAN KEBUDAYAAN','2020-01-16','2020-01-14','PERMOHONAN IJIN CERAI AN.STEFFY FRIYANTI','','84','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(793,'027/0017/415.28/2020','DINAS KETAHANAN PANGAN DAN PERIKANAN','2020-01-16','2020-01-03','BERITA ACARA STOCK OPNAME ','','85','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(794,'900/038/415.23/2020','DINAS KOMUNIKASI DAN INFORMATIKA','2020-01-16','2020-01-14','LAP.ABSENSI','','86','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(795,'032/1310.3/415.48/2019','RSUD PLOSO','2020-01-16','2019-12-31','TEMB : PENGHAPUSAN ASET','','87','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(796,'005/301/415.19/2020','DPUPR','2020-01-16','2020-01-15','SERAH TERIMA BANTUAN PEMERINTAH UTK MASYARAKAT ( BPM ) PROGRAM KOTAKU/RABU/22 JAN 2020/08.30WIB/DS MADE KEC.KUDU','','88','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(797,'900/8501/415.44/2019','BPKAD ','2020-01-17','2019-12-20','Laporan keuangan','','89','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(798,'900/ 007/415.10.2.2/2020','SEKRETARIAT DAERAH ','2020-01-17','2020-01-02','SURAT PENGANTAR BUKU PEDOMAN PELAKSANAAN APBD 2020','','90','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(799,'050/344/415.10.2.2/2020','SEKRETARIAT DAERAH ','2020-01-17','2020-01-16','PERMINTAAN DATA USULAN OPERATOR SIPEM ','','91','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(800,'800/009/415.16.155/2020','SMPN 3 JOMBANG ','2020-01-17','2020-01-15','SURAT PENGANTAR DAFTAR HADIR GURU DAN KARYAWAN ','','92','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(801,'880/103/415.41/2020','BADAN KEPEGAWAIAN DAERAH, PENDIDIKAN DAN PELATIHAN ','2020-01-17','2020-01-15','PEMBERITAHUAN USULAN PENSIUN JANDA /DUDA PNS YANG MENINGGAL DUNIA ','','93','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(802,'003/B.2/5.25/I/2020','KPRI SEJATERA ','2020-01-17','2020-01-14','UNDANGAN RAT TAHUN BUKU 2019 KPRI SEJAHTERA ','','94','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(803,'900/8501/415.44/2019','BPKAD','2020-01-17','2020-12-20','LAPORAN KEUANGAN ','','95','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(804,'880/103/415.41/2020','BADAN KEPEGAWAIAN DAERAH, PENDIDIKAN DAN PELATIHAN ','2020-01-17','2020-01-15','PEMBERITAHUAN USULAN PENSIUN JANDA /DUDA PNS YANG MENINGGAL DUNIA ','','96','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(805,'003/B.2/5.25/I/2020','KPRI SEJATERA ','2020-01-17','2020-01-14','UNDANGAN RAT TAHUN BUKU 2019 KPRI SEJAHTERA ','','97','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(806,'050/344/415.10.2.2/2020','SEKRETARIAT DAERAH ','2020-01-17','2020-01-16','8I ','','98','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(807,'900/007/415.10.2.2/2020','SEKRETARIAT DAERAH ','2020-01-17','2020-01-02','SURAT PENGANTAR BUKU PEDOMAN PELAKSANAAN APBD 2020','','99','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(808,'028/0080/415.44/2020',' BPKAD ','2020-01-20','2020-01-17','TELAAH STAF DAN PERMOHONAN PEMANFAATAN BMD','','100','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(809,'005/58/415.10.3.3/2020','SEKRETARIAT DAERAH ','2020-01-20','2020-01-17','UNDANGAN RAPAT KOORDINASI PEMBAHASAN SOTK SEKRETARIAT DAERAH','','101','KA SUB BAG EVALUASI','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(810,'005/400/415.10.1.1/2020','SEKRETARIAT DAERAH ','2020-01-20','2020-01-20','RAPAT KOORDINASI PEMBAHASAN PERPANJANGAN MOU ANTARA STIE PGRI DAN PEMKAB ','','102','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(811,'005/403/415.10.2.2/2020','SEKRETARIAT DAERAH ','2020-01-20','2020-01-20','PEMBAHASAN PELAKSANAAN KEGIATAN TAHUN ANGGARAN 2020','','103','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(812,'910/17/415.19/2020','DINAS PERUMAHAN DAN PERMUKIMAN','2020-01-20','2020-01-09','PERMOHONAN PROBITY AUDIT PENYUSUNAN DED DRAINASE KAWASAN JL.KH WAHID HASYIM','','104','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(813,'005/835/415.14/2019','DPRD KAB.JOMBANG','2020-01-20','2019-12-30','REKOMENDASI TTG PEMBANGUNAN GEDUNG PUSKESMAS MOJOWARNO','','105','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(814,'863/039/415.58/2019','KECAMATAN TEMBELANG','2020-01-20','2020-01-20','LAPORAN ABSENSI FINGERPRINT','','106','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(815,'005/165/415.42/2020','BPPD','2002-01-20','2020-01-20','INPUT PROGAM DI SIMDA INTEGRASI','','107','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(816,'005/292/415.42/2020','SEKRETARIAT DAERAH ','2020-01-20','2020-01-15','UNDANGAN FORUM KONSULTASI PUBLIK RANCANGAN AWAL RKPD TAHUN 2021','','108','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(817,'900/158/415.38/2020','DPPKB','2020-01-20','2020-01-17','USULAN PERGESERAN NOMER REKENING DIKEGIATAN BOKB (DAK NON FISIK TAHUN 2020)','','109','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(818,'140/36/415.62/2020','KECAMATAN KABUH','2020-01-21','2020-01-21','LAPORAN KEJADIAN KASUS NARKOTIKA GOLONGAN I','','110','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(819,'940/0082/415.44/2020','BPKAD','2020-01-21','2020-01-16','LAPORAN POSISI KAS HARIAN','','111','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(820,'814/111/415.41/2020','SEKRETARIAT DAERAH ','2020-01-21','2020-01-15','PELAPORAN SKP DAN PRESTASI KERJA PNS  (e-Lapkin) TAHUN 2019','','112','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(821,'900/277/415.47/2020','RSUD','2020-01-21','2020-01-10','LAPORAN PENERIMAAN RSUD KAB JOMBANG','','113','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(822,'910/299/415.19/2020','DINAS PERUMAHAN DAN PERMUKIMAN','2020-01-21','2020-01-15','MENINDAKLANJUTI HASIL MONITORING DI LOKASI TROTOAR/ DRAINASE YANG BARU SELESAI DI BANGUN','','114','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(823,'900/119/415.43/2020','BADAN PENDAPATAN DAERAH','2020-01-21','2020-01-21','PERMOHONAN USULAN TAMBAHAN ANGGARAN TAHUN 2021-2023','','115','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(824,'800/170/514.39/2020','DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL','2020-01-21','2020-01-21','LAPORAN ABSENSI BULAN DESEMBER 2019','','116','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(825,'134/80/415.46/2020','BPBD','2020-01-21','2020-01-21','RESTRUKTURISASI ORGANISASI BADAN PENANGGULANGAN BENCANA DAERAH KABUPATEN JOMBANG','','117','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(826,'814/300/415.41/2019','BKDPP','2020-01-21','2019-12-31','SK BUPATI JOMBANG TTG SURAT PERJANJIAN KERJA WAKTU TERTENTU TENAGA SUKARELAWAN DENGAN STATUS KONTRAK PEMERINTAH KABUPATEN JOMBANG TAHUN 2020','','118','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(827,'900/59/415.51/2020','BPR \"BANK JOMBANG\"','2020-01-21','2020-01-21','RAPAT UMUM PEMEGANG SAHAM DAN EVALUASI KINERJA TAHUN 2019 PT BPR BANK JOMBANG','','119','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(828,'800/4322/415.41/2019','BKDPP','2020-01-22','2019-12-23','PERMINTAAN DATA PEGAWAI NEGERI SIPIL DAERAH YANG BERKAITAN DENGAN PERPAJAKAN PERIODE JANUARI s.d DESEMBER 2018','','120','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(829,'865/85/415.41/2020','BKDPP','2020-01-22','2020-01-10','UNDANGAN RAPAT TEKNIS FINGER PRINT ONLINE','','121','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(830,'005/228/415.41/2020','BKDPP','2020-01-22','2020-01-22','UNDANGAN PENYERAHAN KEPUTUSAN PENSIUN PNS','','122','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(831,'826.4/223/415.41/2020','BKDPP','2020-01-22','2020-01-22','PERMOHONAN PENGAKTIFAN KEMBALI PNS','','123','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(832,'005/483/415.10.3.1/2020','BAGIAN UMUM DAN PERLENGKAPAN','2020-01-22','2020-01-22','UNDANGAN SANTRI DIGITAL FEST DAN RAPAT KERJA NASIONAL IPPNU BERSAMA DENGAN WAKIL PRESIDEN RI','','124','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(833,'005/394/415.10.3.3/2020','BAGIAN ORGANISASI','2020-01-22','2020-01-20','BINTEK TATA KELOLA INOVASI PELAYANAN PUBLIK ','','125','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(834,'800/78/415.18/2020','DINAS PU DAN PENATAAN RUANG','2020-01-23','2020-01-10','DAFTAR HADIR DAN ABSENSI PEGAWAI','','126','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(835,'S-326/PW13/6/2020','BPKP','2020-01-23','2020-01-17','ATENSI UPAYA PENINGKATAN KAPABILITAS APIP','','127','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(836,'072/005/415.35/2020','DINAS PENANAMAN MODAL DAN PTSP','2020-01-23','2020-01-06','SURAT IZIN PENELITIAN','','128','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(837,'050/85/415.33/2020','DINAS PMD','2020-01-23','2020-01-23','SURAT PENGANTAR FINGERPRINT','','129','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(838,'S-457/PW13/2/2020','BPKP','2020-01-23','2020-01-23','RAPAT KOORDINASI PENGAWASAN PENGADAAN CPNS TAHUN 2019','','130','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(839,'050/49/415.19/2020','DINAS PERUMAHAN DAN PERMUKIMAN','2020-01-23','2020-01-20','PENGAJUAN USULAN PENETAPAN SANKSI DAFTAR HITAM','','131','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(840,'005/460/415.16/2020','DINAS PENDIDIKAN DAN KEBUDAYAAN','2020-01-23','2020-01-21','UNDANGAN RAKOR DAN PENYUSUNAN PROGRAM TPMPD ','','132','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(841,'900/  /415.10.3.3/2019','BAGIAN ORGANISASI','2020-01-24','2020-01-23','LAPORAN KEUANGAN','','133','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(842,'011/Konfir/BN/I/2020','BIDIK','2020-01-27','2020-01-20','KONFIRMASI INDIKASI DUGAAN PENYIMPANGAN DALAM REALISASI KEGIATAN PENGADAAN Arm Roll Truck (DAK), PENGADAAN KONTAINER, PENGADAAN COMPACTER SAMPAH DAN PENGADAAN Truck Arm Roll (PAPBD) DINAS LINGKUNGAN HIDUP KABUPATEN JOMBANG TAHUN 2019','','134','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(843,'005/101/415.33/2020','DINAS PMD','2020-01-27','2020-01-27','UNDANGAN KOORDINASI PELAKSANAAN PEMBANGUNAN DESA TAHUN 2020','','135','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(844,'028/0080/415.44/2020','BPKAD','2020-01-27','2020-01-17','TELAAH STAF PERMOHONAN PEMANFAATAN BMD','','136','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(845,'800/074/415.40/2020','SATPOL PP','2020-01-27','2020-01-27','LAPORAN KETIDAKHADIRAN PNSD a.n CHOLILUL UZAIR','','137','IRBAN PEMEERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(846,'005/48/415.53/2020','KECAMATAN JOMBANG','2020-01-28','2020-01-27','UNDANGAN RAPAT KOORDINASI PERSIAPAN LELANG PEMBANGUNAN GEDUNG KANTOR CAMAT JOMBANG TA 2020','','138','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(847,'005/590/415.10.1.2/2020','BAGIAN ADMINISTRASI KESRA','2020-01-28','2020-01-28','UNDANGAN RAPAT KOORDINASI PENGELOLAAN ASET ISLAMIC CENTER Dr. H. MOELDOKO ','','139','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(848,'018/KKR/HUTPERS/2020','BIRO JOMBANG','2020-01-28','2020-01-28','UNDANGAN/DONATUR (SPONSORSHIP) HUT PERS','','140','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(849,'032/064/415.44/2020','BPKAD','2020-01-28','2020-01-06','PRA PENYUSUNAN STANDART SATUAN HARGA 2021','','141','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(850,'005/03/TPKPNS/2020','TPKPNS','2020-01-28','2020-01-28','UNDANGAN RAPAT TIM PENILAI KINERJA PNS','','142','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(851,'700/352/1J','MENDAGRI','2020-01-28','2020-01-28','PENGAWASAN PENGADAAN CPNS TAHUN 2019 OLEH APIP PEMDA KMA','','143','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(852,'1405/113/415.33/2020','DINAS PMD','2020-01-28','2020-01-28','PERMOHONAN NARASUMBER DALAM RANGKA PELAKSANAAN SOSIALISASI PERATURAN BUPATI JOMBANG DAN LAUNCHING PENCAIRAN APBDESA TAHUN 2020','','144','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(853,'005/579/415.33/2020','DINAS PMD','2020-01-28','2020-01-28','UNDANGAN DALAM RANGKA PELAKSANAAN SOSIALISASI PERATURAN BUPATI JOMBANG DAN LAUNCHING PENCAIRAN APBDESA TAHUN 2020','','145','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(854,'940/102/415.44/2020','BPKAD','2020-01-28','2020-01-22','LAPORAN POSISI KAS HARIAN','','146','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(855,'005/588/415.10.1.1/2020','BAGIAN ADMINISTRASI PEMERINTAH','2020-01-29','2020-01-28','UNDANGAN RAPAT KOORDINASI PEMBAHASAN NOTA KESEPAKATAN BERSAMA (MoU) ANTARA STKIP PGRI JOMBANG DENGAN PEMERINTAH KABUPATEN JOMBANG','','147','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(856,'005/52/415.53/2020','KECAMATAN JOMBANG','2020-01-29','2020-01-27','UNDANGAN RAPAT KOORDINASI PERSIAPAN LELANG PEMBANGUNAN GEDUNG KANTOR CAMAT JOMBANG TA 2020','','148','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(857,'005/307/415.10.1.2/2020','BAGIAN ADMINISTRASI KESRA','2020-01-29','2020-01-15','UNDANGAN ISTIGHOSAH DAN PENGAJIAN RUTIN JUMAT LEGI','','149','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(858,'005/308/415.10.1.2/2020','BAGIAN ADMINISTRASI KESRA','2020-01-29','2020-01-15','UNDANGAN ISTIGHOSAH DAN PENGAJIAN RUTIN JUMAT LEGI BESERTA SEMUA STAF YANG BERAGAMA ISLAM','','150','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(859,'005/46/415.62/2020','KECAMATAN KABUH','2020-01-29','2020-01-27','UNDANGAN SOSIALISASI PENCEGAHAN TENTANG BAHAYA NARKOBA','','151','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(860,'870/600/415.10.3.1/2020','BAGIAN UMUM DAN PERLENGKAPAN','2020-01-29','2020-01-28','LAPORAN KEPEGAWAIAN','','152','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(861,'015/LPPSP/A-2/I/2020','LPPSP','2020-01-29','2020-01-15','UNDANGAN PELATIHAN  TOT-PPRG','','153','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(862,'800/335/415.41/2020','BKDPP','2020-01-29','2020-01-29','ABSENSI KEHADIRAN SENAM PAGI','','154','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(863,'065/500/415.10.1.1/2020','BAGIAN ADMINISTRASI PEMERINTAH','2020-01-29','2020-01-23','PENAMBAHAN PERMINTAAN DATA DAN INFORMASI DALAM RANGKA PENYUSUNAN LPPD TAHUN 2019','','155','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(864,'127/1347/011.2/2020','SEKRETARIAT DAERAH SURABAYA','2020-01-29','2020-01-24','PENYERAHAN TERMINAL TIPE B','','156','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(865,'800/343/415.41/2020','BKDPP','2020-01-29','2020-01-29','PEMBERITAHUAN PELAKSANAAN KERJA BAKTI','','157','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(866,'700/271/060/2020','INSPEKTORAT SIDOARJO','2020-01-30','2020-01-29','INVENTARISASI PELAKSANAAN PP No. 72 Tahun 2019','','158','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(867,'','JEC YOGYAKARTA','2020-01-30','2020-01-01','UNDANGAN SEMINAR KEBIJAKAN PENGADAAN BARANG DAN JASA ','','159','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(868,'005/653/415.34/2020','DINAS LINGKUNGAN HIDUP','2020-01-30','2020-01-29','KERJA BAKTI JUMAT BERSIH','','160','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(869,'800/101/415.10.3.3/2020','BAGIAN ORGANISASI','2020-01-30','2020-01-30','PENYAMPAIAN HASIL ANALISA BEBAN KERJA','','161','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(870,'050/242/415.42/2020','BPPD','2020-01-30','2020-01-28','PERMINTAAN ANGGOTA TIM TEKNIS','','162','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(871,'005/166/415.44/2020','BPKAD','2020-01-30','2020-01-29','UNDANGAN PEMBAHASAN PELAKSANAAN DAN PELAPORAN KEGIATAN YANG DIBIAYAI DARI DANA INSENTIF DAERAH (DID) TAHUN ANGGARAN 2020','','163','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(872,'910/485/415.32/2020','DINAS PERDAGANGAN DAN PERINDUSTRIAN','2020-01-30','2020-01-30',' L ','','164','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(873,'005/030/415.10.2.1/2020','BAGIAN ADMINISTRASI PEREKONOMIAN','2020-01-30','2020-01-30','UNDANGAN RAPAT KOORDINASI BUMD','','165','IRBAN EKONOMI KESRA                                                                                                                                                                            ','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(874,'B/22/I/RES.1.24/2020/SATRESKRIM','RESORT JOMBANG','2020-01-30','2020-01-27','PERMOHONAN PEMERIKSAAN AUDIT','','166','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(875,'B/27/I/RES.1.24/2020/SATRESKRIM','RESORT JOMBANG','2020-01-30','2020-01-27','PERMOHONAN PEMERIKSAAN TINDAK PIDANA KORUPSI','','167','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(876,'005/703/415.32/2020','DINAS PERDAGANGAN DAN PERINDUSTRIAN','2020-01-30','2020-01-30','UNDANGAN PEMAPARAN HASIL DED PASAR TUNGGORONO, DED PASAR BARENG, DED PASAR MOJOWARNO DAN STUDI KELAYAKAN PASAR MOJOAGUNG SEBELAH BARAT','','168','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(877,'005/735/415.10.2.2/2020','BAGIAN ADMINISTRASI PEMBANGUNAN','2020-01-31','2020-01-31','UNDANGAN RAPAT KOORDINASI INTEGRASI PEMBANGUNAN TAHUN ANGGARAN 2021','','169','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(878,'065/0733/415.10.3.3/2020','BAGIAN ORGANISASI','2020-01-31','2020-01-31','UNDANGAN RAPAT KOORDINASI PERSIAPAN PENYUSUNAN LKJIP DAN TINDAK LANJUT HASIL EVALUASI SAKIP 2019','','170','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(879,'005/267/415.42/2020','BPPD','2020-01-31','2020-01-30','UNDANGAN PENYUSUNAN PERENCANAAN PENGANGGARAN RESPONSIF GENDER  ( PPRG ) TAHUN 2020','','171','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(880,'883/246/415.18/2020','DPUPR','2020-01-31','2020-01-28','LAPORAN KEMATIAN','','172','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(881,'005/737/415.10.3.1/2020','BAGIAN UMUM DAN PERLENGKAPAN','2020-01-31','2020-01-31',' UNDANGAN PERESMIAN PROGRAM PEMBANGUNAN TAHUN 2019','','173','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(882,'005/267/415.42/2020','BPPD','2020-01-31','2020-01-31','UNDANGAN PENYUSUNAN PERENCANAAN PENGANGGARAN RESPONSIF GENDER(PPRG)','','174','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(883,'005/275/415.42/2020','BPPD','2020-01-31','2020-01-31','UNDANGAN KOORDINASI PELAKSANAAN JOMBANG BERKADANG 2020','','175','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(884,'005/830/415.17/2020','DINAS KESEHATAN','2020-02-03','2020-01-30','UNDANGAN KOORDINASI JAMPERSAL TAHUN 2020','','176','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(885,'[P','ARSADA','2020-02-03','2020-01-27','UNDANGAN PELATIHAN IMPLEMENTASI PPK-BLUD','','177','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(886,'100/13/415/69.4/2020','DESA CARANGREJO','2020-02-03','2020-02-03','PENGAJUAN PERMOHONAN WAKTU KONSULTASI','','178','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(887,'0005/713/415.44/2020','BPKAD','2020-02-03','2020-01-30','UNDANGAN KOORDINASI TERKAIT PEMINDAHAN DINAS KESEHATAN KE BANGUNAN STIKES','','179','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(888,'800/377/415.41/2020','BKDPP','2020-02-04','2020-01-31','PENYUSUNAN KEBUTUHAN PEGAWAI','','180','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(889,'005/749/415.38/2020','DPPKB','2020-02-04','2020-01-31','UNDANGAN RAPAT KOORDINASI PENYUSUNAN RAPERDA PUG','','181','KA SUB BAG PERENCANA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(890,'005/748/415.38/2020','DPPKB','2020-02-04','2020-01-31','UNDANGAN PENERIMAAN STUDY SHARING DARI DPPPA KAB SITUBONDO','','182','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(891,'055/311/415.42/2020','BPPD','2020-02-04','2020-02-04','UNDANGAN RAPAT PEMBAHASAN RENCANA PENGUATAN KINERJA DAN PENGANGGARAN  KECAMATAN','','183','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(892,'005/299/415.42/2020','BPPD','2020-02-04','2020-02-03','PENYAMPAIAN DISPOSISI RENCANA PELAKSANAAN DAN KEBUTUHAN ANGGARAN PROGRAM PRIORITAS BIDANG INSFRASTRUKTUR TAHUN 2021','','184','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(893,'860/301/415.42/2020','BPPD','2020-02-04','2020-02-03','PELPORAN ABSENSI ELEKTRONIK BAPPEDA JOMBANG','','185','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(894,'005/04/415.14/2020','DPRD KAB.JOMBANG','2020-02-04','2020-02-03','UNDANGAN RAPAT PARIPURNA DPRD KABUPATEN JOMBANG','','186','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(895,'700/27/060/2020','INSPEKTORAT SIDOARJO','2020-02-04','2020-01-29','INVENTARISASI PELAKSANAAN PP No. 72 Tahun 2019','','187','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(896,'005/771/415.10.2.1/2020','BAGIAN ADMINISTRASI PEREKONOMIAN','2020-02-04','2020-02-03','UNDANGAN RAPAT KOORDINASI TINDAK LANJUT BERAS DAN APARATUR SIPIL NEGARA ASN ','','188','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(897,'005/043/415.10.2.1/2020','BAGIAN ADMINISTRASI PEREKONOMIAN','2020-02-04','2020-01-31','UNDANGAN MENERIMA KUNJUNGAN STUDI BANDING PEMERINTAH KABUPATEN KLATEN','','189','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(898,'032/526/415.20/2020','DINAS SOSIAL','2020-02-05','2020-01-30','PERMOHONAN PENGHAPUSAN','','190','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(899,'300/103/415.40/2020','SATPOL PP','2020-02-05','2020-02-04','SURAT PENGANTAR PERIHAL TAGIHAN TINDAK LANJUT HASIL EVALUASI SAKIP','','191','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(900,'032/731/415.44/2020','BPKAD','2020-02-05','2020-01-30','PERCEPATAN PENYUSUNAN STANDART SATUAN HARGA 2021','','192','KA SUB BAG PERENCANA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(901,'005/746/415.10.2.2/2020','BAGIAN ADMINISTRASI PEMBANGUNAN','2020-02-05','2020-01-31','PERMINTAAN DATA','','193','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(902,'005/815/415.10.2.1/2020','BAGIAN ADMINISTRASI PEREKONOMIAN','2020-02-05','2020-02-04','UNDANGAN RAPAT KOORDINASI TERKAIT PENDATAAN CALON PELANGGAN JARINGAN GAS DAN BUMI','','194','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(903,'005/810/415.10.2.1/2020','BAGIAN ADMINISTRASI PEREKONOMIAN','2020-02-05','2020-02-04','UNDANGAN  SOSIALISASI ENTRY SIRUP TA 2020','','195','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(904,'800/074/415.68/2020','KECAMATAN SUMOBITO','2020-02-05','2020-02-05','LAPORAN ABSENSI PEGAWAI KANTOR KECAMATAN SUMOBITO','','196','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(905,'0402/PP/ZK/JB/II/2020','PT PATRIA PERSADA','2020-02-05','2020-02-04','PENAWARAN HARGA MESIN ABSENSI ZKTECO DAN HARGA COVER PELINDUNG','','197','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(906,'863/108/415.66/2020','KECAMATAN PETERONGAN','2020-02-05','2020-02-05','LAPORAN DAFTAR HADIR BULAN JANUARI TH 2020','','198','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(907,'610/136/415.18/2020','DINAS PU DAN PENATAAN RUANG','2020-02-05','2020-01-15','PERMOHONAN REKOMENDASI SANKSI DAFTAR HITAM','','199','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(908,'800/296/415.39/2020','DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL','2020-02-05','2020-02-04','LAPORAN ABSENSI BULAN JANUARI 2020','','200','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(909,'141/40/415.62.08/2020','DESA SUMBERINGIN','2020-02-05','2020-02-05','TEGURAN TERTULIS 1','','201','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(910,'050/0316/415.28/2020',' DINAS KETAHANAN PANGAN DAN PERIKANAN','2020-02-05','2020-02-03','DOKUMEN TINDAK LANJUT HASIL EVALUASI SAKIP','','202','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(911,'868/393/415.41/2020','BKDPP','2020-02-06','2020-02-04','TEMBUSAN SURAT KEPUTUSAN BUPATI TENTANG PEMBERIAN IZIN PERCERAIAN PNS a.n MITRA PERMATASARI, S.Pd. SD','','203','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(912,'868/392/415.41/2020','BKDPP','2020-02-06','2020-02-04','TEMBUSAN SURAT KEPUTUSAN BUPATI TENTANG PEMBERIAN IZIN PERCERAIAN PNS a.n DIYANTO','','204','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(913,'S-232/WPJ.24/KP.16/2020','KANTOR PELAYANAN PAJAK PRATAMA JOMBANG','2020-02-06','2020-01-14','KEWAJIBAN PENYAMPAIAN SPT TAHUNAN PPh ORANG PRIBADI TAHUN PAJAK 2019','','205','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(914,'005/771/415.10.2.1/2020','BAGIAN ADMINISTRASI PEREKONOMIAN','2020-02-06','2020-02-03','UNDANGAN RAPAT KOORDINASI TINDAK LANJUT BERAS DAN APARATUR SIPIL NEGARA ASN ','','206','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(915,'028/556/415.10.3.1/2020',' BAGIAN UMUM DAN PERLENGKAPAN','2020-02-07','2020-01-24','PENGIRIMAN STEMPEL','','207','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(916,'700/271/060/2020','INSPEKTORAT SIDOARJO','2020-02-07','2020-01-29','INVENTARISASI PELAKSANAAN PP No. 72 Tahun 2019','','208','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(917,'474/7557/415.1.1/2020','BUPATI JOMBANG','2020-02-07','2020-01-31','SURAT EDARAN DUKUNGAN KEGIATAN SENSUS PENDUDUK 2020','','209','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(918,'940/210/415.44/2020','BPKAD','2020-02-07','2020-02-05','LAPORAN POSISI KAS HARIAN','','210','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(919,'800/60/415.56/2020','KECAMATAN PERAK','2020-02-07','2020-02-06','DAFTAR HADIR BULAN DESEMBER 2019 DAN JANUARI 2020','','211','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(920,'860/1836/415.43/2020','BAPPEDA','2020-02-07','2020-02-06','LAPORAN PELAKSANAAN FINGERPRINT BAPPEDA','','212','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(921,'800/155/415.54/2020','KECAMATAN DIWEK','2020-02-07','2020-02-06','LAPORAN DAFTAR HADIR KARYAWAN DAN KARYAWATI BULAN JANUARI 2020','','213','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(922,'005/881/415.10.3.1/2020','BAGIAN UMUM DAN PERLENGKAPAN','2020-02-07','2020-02-07','UNDANGAN RAKOR SINKRONISASI RENCANA PEMBANGUNAN GEDUNG KANTOR KECAMATAN JOMBANG','','214','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(923,'800/159/415.35/2020','DINAS PENANAMAN MODAL DAN PTSP','2020-02-10','2020-02-10','LAPORAN ABSENSI DAN KEPEGAWAIAN BULAN JANUARI 2020','','215','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(924,'100/909/415.10.2.3/2020','BAGIAN PENGADAAN BARANG DAN JASA','2020-02-10','2020-02-07','UNDANGAN SOSIALISASI JASA KONTRUKSI','','216','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(925,'940/224/415.44/2020','BPKAD','2020-02-10','2020-02-06','LAPORAN POSISI KAS HARIAN','','217','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(926,'435/103/35.17.14.2005/2020','DESA JATIGEDONG KEC PLOSO','2020-02-10','2020-02-10','PEMERIKSAAN LPJ BUMDES','','218','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(927,'S-008/PKPPD/I/2020','PKPPD ','2020-02-10','2020-01-28','UNDANGAN BIMTEK NASIONAL','','219','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(928,'822/382.39/415.41/2020','BKDPP','2020-02-10','2020-02-03','KENAIKAN GAJI BERKALA A.N JOKO KUNTO WIBISONO, SE','','220','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(929,'B/42/II/RES.3.3/2020/SATRESKRIM','RESORT JOMBANG','2020-02-10','2020-02-10','PERMOHONAN PEMERIKSAAN AUDIT','','221','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(930,'640/59a/415.53/2020','KECAMATAN JOMBANG','2020-02-11','2020-01-31','PERMOHONAN PROBITY AUDIT PERENCANAAN GEDUNG KANTOR','','222','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(931,'050/183/415.33/2020','DINAS PMD','2020-02-11','2020-02-11','FINGERPRINT BULAN JANUARI DPMD','','223','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(932,'879/02/415.52/2020','PD PERKEBUNAN PANGLUNGAN','2020-02-11','2020-02-06','LAPORAN DAFTAR HADIR','','224','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(933,'005/983/415.17/2020','DINAS KESSEHATAN','2020-02-11','2020-02-11','PERMOHONAN FGD','','225','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(934,'050/133/415.19/2020','DINAS PERUMAHAN DAN PERMUKIMAN','2020-02-11','2020-02-10','PENUNTASAN REHABILITASI DRAINASE/TROTOAR','','226','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(935,'050/138/415.19/2020','DINAS PERUMAHAN DAN PERMUKIMAN','2020-02-11','2020-02-11','USULAN REKOMENDASI DAFTAR HITAM PENYEDIA BARANG/JASA','','227','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(936,'005/983/415.17/2020','DINAS KESSEHATAN','2020-02-11','2020-02-11','PERMOHONAN FGD','','228','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(937,'970/192/415.22/2020','DINAS PERHUBUNGAN','2020-02-12','2020-02-11','SURAT PENGANTAR LAPORAN SPJ FUNGSIONAL BENDAHARA PENERIMA SKPD  PADA BULAN JANUARI 2020','','229','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(938,'005/976/415.10.1.1/2020','BAGIAN ADMINISTRASI PEMERINTAH','2020-02-12','2020-02-11','JADWAL DESK PENYUSUNAN RANCANGAN AWAL LKPJ BUPATI JOMBANG TAHUN 2019','','230','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(939,'900/169/415.35/2020','DINAS PENANAMAN MODAL DAN PTSP','2020-02-12','2020-02-11','LAPORAN REALISASI PENERIMAN RETRIBUSI DAERAH','','231','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(940,'800/0409/415.28/2020','DINAS KETAHANAN PANGAN DAN PERIKANAN','2020-02-12','2020-02-11','LAPORAN DAFTAR HADIR ','','232','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(941,'412.2/48/415.16.12/2020','KECAMATAN NGUSIKAN','2020-02-12','2020-02-11','LAPORAN ABSENSI','','233','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(942,'800/347/4115.18/2020','DINAS PU DAN PENATAAN RUANG','2020-02-10','2020-02-10','DAFTAR HADIR DAN ABSENSI PEGAWAI','','234','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(943,'800/608/415.16/2020','DINAS PENDIDIKAN DAN KEBUDAYAAN','2020-02-12','2020-02-10','PERMOHONAN IJIN CERAI AN. DINA ISROFILA.S.Pd.SD GURU SDN NGORO III','','235','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(944,'S-753/PW13/6/2020','BPKP PROVINSI','2020-02-13','2020-02-10','PENDATAAN CALON PESERTA DIKLAT PEMBENTUKAN AUDITOR AHLI DAN AHLI PENJENJANGAN AUDITOR AHLI MUDA (JFA)','','236','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(945,'940/251/415.44/2020','BPKAD','2020-02-13','2020-02-12','LAPORAN POSISI KAS HARIAN','','237','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(946,'800/378/415.16.5.19/2020','SMPN BANDARKEDUNGMUULYO','2020-02-13','2020-02-08','LAPORAN ABSENSI KEHADIRAN ASN BULAN JANUARI','','238','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(947,'008/583/415.16/2020','DINAS PENDIDIKAN DAN KEBUDAYAAN','2020-02-14','2020-02-06','PERMOHONAN PEMBERHENTIAN SEMENTARA SEBAGAI PNS','','239','IRBAN PEMERINTAH','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(948,'556/237/415.25/2020','DINAS KEPEMUDAAN ,OLAHRAGA DAN PARIWISATA','2020-02-14','2020-02-13','MENYERAHKAN GEDUNG','','240','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(949,'414.2/836/415.33/2020','DINAS PMD','2020-02-14','2020-02-05','PENAGIHAN SISA PIUTANG DANA PED TAHUN 2002','','241','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(950,'S-248/DL/3/2020','BPKP','2020-02-14','2020-02-05','PEMBERITAHUAN PENETAPAN PESERTA DIKLAT PENJENJANGAN AUDITOR MUDA DI LINGKUNGAN APIP SECARA E-LEARNING','','242','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(951,'0207/DE/IAI/II/2020','IKATAN AKUNTAN INDONESIA','2020-02-14','2020-02-07','UNDANGAN YUDISIUM SERTIFIKASI AHLI AKUNTANSI PEMERINTAHAN (APIP)','','243','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(952,'900/1015/415.47/2020','RSUD','2020-02-14','2020-02-10','LAPORAN PENERIMAAN RSUD KAB JOMBANG','','244','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(953,'650/158/415.19/2020','DINAS PERUMAHAN DAN PERMUKIMAN','2020-02-14','2020-02-14','REVIEW DAK PERUMAHAN TA 2020','','245','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(954,'132/ARSADA/UMUM/I/2020','ARSADA','2020-02-14','2020-01-17','UNDANGAN BIMBINGAN TEKNIS PPK-BLUD','','246','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(955,'PD.51/BIMTEK-PU/II/20','KEMENTRIAN PEKERJAAN UMUM PUSAT','2020-02-14','2020-02-03','PENYELENGGARAAN BIMBINGAN TEKNIS DAN KONSULTASI NASIONAL PENGELOLAAN KEUANGAN DAERAH','','247','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(956,'','QUALIFIED GOVERMENT INTERNAL AUDITOR (QGIA)','2020-02-17','2020-02-10','UNDANGAN PELUNCURAN PERDANA PROGRAM SERTIFIKASI QUALIFIED GOVERMENT INTERNAL AUDITOR (QGIA)','','248','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(957,'S-753/PW13/6/2020','BPKP PROVINSI','2020-02-17','2020-02-10','PENDATAAN CALON PESERTA DIKLAT PEMBENTUKAN AUDITOR AHLI DAN AHLI PENJENJANGAN AUDITOR AHLI MUDA (JFA)','','249','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(958,'862.3/407/415.41/2020','BKDPP','2020-02-17','2020-02-05','HUKUMAN DISIPLIN PNS A.N HERI PUJIONO, Amd. Kep','','250','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(959,'862.4/408/415.41/2020','BKDPP','2020-02-17','2020-02-05','HUKUMAN DISIPLIN PNS A.N Dr. FREEDY HERNAWAN','','251','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(960,'868/394/415.41/2020','BKDPP','2020-02-17','2020-02-04','TEMBUSAN SURAT KEPUTUSAN BUPATI','','252','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(961,'851/487/415/41/2020','BKDPP','2020-02-17','2020-02-14','SURAT IZIN CUTI TAHUNAN a.n DWI ANITA MARETIKA SARI, SE','','253','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(962,'005/1088/415.10.2.2/2020','BAGIAN ADMINISTRASI PEMBANGUNAN','2020-02-17','2020-02-14','UNDANGAN RAPAT FASILITASI DAN KOORDINASI PENYUSUNAN PEDOMAN PELAKSANAAN APBD TA 2021','','254','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(963,'005/1123/415.10.2.1/2020','BAGIAN ADMINISTRASI PEREKONOMIAN','2020-02-17','2020-02-17','UNDANGAN RAKOR BERAS UNTUK APARATUR SIPIL NEGARA (ASN)','','255','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(964,'B/48/II/RES.3.3./2020/SATRESKRIM','RESORT JOMBANG','2020-02-17','2020-02-13','PERMOHONAN PEMERIKSAAN AUDIT','','256','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(965,'800/289/415.26/2020','DINAS KOPERASI DAN USAHA MIKRO','2020-02-17','2020-02-11','PENGIRIMAN REKAPITULASI ABSENSI','','257','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(966,'473.13/138/415.23/2020','DINAS KOMUNIKASI DAN INFORMATIKA','2020-02-17','2020-02-14','PERMINTAAN DATA TENAGA OPERATOR','','258','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(967,'800/89/415.62/2020','KECAMATAN KABUH','2020-02-17','2020-02-17','LAPORAN PRINT OUT FINGER PRINT','','259','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(968,'870/366/415.21/2020','DINAS TENAGA KERJA','2020-02-17','2020-02-17','LAPORAN HASIL PEMBINAAN ASN. An. INDRA MARS PUTRANTO','','260','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(969,'005/398/415.42/2020','BPPD','2020-02-17','2020-02-13','UNDANGAN RAKOR PERSIAPAN PENYELENGGARAAN FORUM RENJA PD DALAM RKPD TAHUN 2021','','261','KA SUB BAG PERENCANA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(970,'900/262/415.44/2020','BPKAD','2020-02-17','2020-02-17','DPA SATUAN KERJA PERANGKAT DAERAH KABUPAATEN JOMBANG TAHUN ANGGARAN 2020 (BERKAS DI BU TRIYA)','','262','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(971,'002/RED/SRT-PP/SM/2020','MEDIA ONLINE SURYAMOJO','2020-02-17','2020-02-17','PERMOHONAN BANTUAN','','263','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(972,'005/1083/415.10.3.2/2020','BAGIAN HUMAS DAN PROTOKOL','2020-02-17','2020-02-14','UNDANGAN  BULAGA ( BUPATI MELAYANI WARGA ) TAHUN 2020','','264','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(973,'005/783/415.15/2020','DINAS PERDAGANGAN DAN PERINDUSTRIAN','2020-02-18','2020-02-17','UNDANGAN FORUM RENJA 2021 DINAS PERDAGANGAN DAN PERINDUSTRIAN KABUPATEN JOMBANG','','265','KA SUB BAG PERENCANA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(974,'940/258/415.44/2020','BPKAD ','2020-02-18','2020-02-13','LAPORAN POSISI KAS HARIAN','','266','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(975,'005/020/PAN.DEK/2/2020','ABPEDNAS','2020-02-18','2020-02-13','DEKLARASI DAN PENGUKUHAN DEWAN PENGURUS CABANG ABPEDNAS KAB JOMBANG','','267','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(976,'005/1166/415.10.2.1/2020','BAGIAN ADMINISTRASI PEREKONOMIAN','2020-02-19','2020-02-18','UNDANGAN STUDY INFORMASI BERAS UNTUK ASN DI KAB. JOMBANG','','268','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(977,'472/123/541.60.02/2020','DESA JATIGEDONG KEC PLOSO','2020-02-19','2020-02-18','BANTUAN PEMERIKSAAN LPJ BUMDES (PAD)','','269','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(978,'800/275/203.6/2020','GUB JATIM','2020-02-19','2020-02-13','DALAM RANGKA TERTIB ADMINISTRASI DAN UPAYA MENYAMAKAN PERSEPDI PENYUSUNAN LAPORAN PERTANGGUNGJAWABAN PELAKSANAAN APBD TAHUN ANGGARAN 2019','','270','IRBBAN KEUUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(979,'860/537/415.41/2020','BKDPP','2020-02-19','2020-02-19','PELAKSANAAN FINGERPRINT ONLINE DI LINGKUNGAN PEMERINTAH KABUPATEN JOMBANG','','271','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(980,'005/202/415.33/2020','DINAS PMD','2020-02-19','2020-02-19','UNDANGAN KOORDINASI PELAKSANAAN PEMBANGUNAN DESA TAHUN 2020','','272','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(981,'005/1202/415.10.1/2020','BAGIAN ADMINISTRASI PEMERINTAH','2020-02-20','2020-02-19','UNDANGAN RAKOR SENSUS PENDUDUK 2020','','273','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(982,'005/7/415.14/2020','SEKRETARIS DPRD','2020-02-20','2020-02-19','UNDANGAN RAPAT PARIPURNA DPRD KABUPATEN JOMBANG','','274','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(983,'005/462/415.42/2020','BPPD','2020-02-20','2020-02-19','UNDANGAN RAKOR DALAM RANGKA TINDAK LANJUT SURAT SEKDA PROVINSI JAWA TIMUR DAN PERSIAPAN TAHAPAN PELAKSANAAN PEMBANGUNAN/REVITALISASI PASAR RAKYAT PERAK DARI SSUMBER DANA BANTUAN KEUANGAN KHUSUS PROVINSI JAWA TIMUR','','275','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(984,'005/150/415.40/2020','SATPOL PP','2020-02-20','2020-02-20','UNDANGAN FORUM PERANGKAT DAERAH PENYUSUNAN RENCANA KERJA SATPOL PP TAHUN 2021','','276','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(985,'005/463/415.42/2020','BPPD','2020-02-20','2020-02-19','UNDANGAN RAPAT PRMBAHASAN TINDAK LANJUT RENCANA PENGUATAN KINERJA DAN PENGANGGARAN KECCAMATAN DI KABUPATEN JOMBANG','','277','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(986,'005/2604/031.1/2020','GUB JATIM','2020-02-20','2020-02-17','RAKOR SINKRONISASI KLB KALDA KAB GARING KOTA SE JATIM','','278','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(987,'005/581/415.41/2020','BKDPP','2020-02-20','2020-02-20','UNDANGAN FORUM PERANGKAT DAERAH PENYUSUNAN RENJA BKDPP 2021','','279','KA SUB BAG PERENCANA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(988,'005/1162/415.10.1.2/2020','BAGIAN ADMINISTRASI KESRA','2020-02-20','2020-02-18','UNDANGAN GEMA SHOLAWAT BERSAMA HABIB AHMAD BIN ISMAIL ALAYDRUS DI KABUPATEN JOMBANG TAHUN 2020 (INSPEKTUR BERSAMA IBU)','','280','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(989,'900/154/415.36/2020','DINAS PERPUSTAKAAN DAN ARSIP ','2020-02-20','2020-02-19','DOKUMEN LKPD (BERKAS DI BU LELYTA)','','281','IRBAN KEEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(990,'005/B/BAZNAS-JBG/II/20','BAZNAS','2020-02-20','2020-02-10','PENGIRIMAN BULETIN BERBAGI','','282','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(991,'551/239/415.22/2020','DINAS PERHUBUNGAN','2020-02-20','2020-02-20','UNDANGAN FORUM RENJA PERANGKAT DAERAH DALAM RANGKA PENYUSUNAN RENJA DINAS PERHUBUNGAN TAHUN 2021','','283','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(992,'060/1214/415.10.3.3/2020','BAGIAN ORGANISASI','2020-02-20','2020-02-19','UNDANGAN PENANDATANGANAN PERJANJIAN KINERJA TAHUN 2020 DAN EVALUASI KINERJA TAHUN 2019','','284','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(993,'','BPK PERWAKILAN PROVINSI JAWA TIMUR','2020-02-20','2020-02-17','SERAH TERIMA JABATAN KEPALA PERWAKILAN BPK PERWAKILAN PROVINSI JAWA TIMUR','','285','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(994,'005/1163/415.10.1.2/2020','BAGIAN ADMINISTRASI KESRA','2020-02-20','2020-02-18','UNDANGAN GEMA SHOLAWAT BERSAMA HABIB AHMAD BIN ISMAIL ALAYDRUS DI KABUPATEN JOMBANG TAHUN 2020 (SELURUH PEJABAT STRUKTURAL DAN STAF YANG BERAGAMA ISLAM)','','286','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(995,'005/581/415.41/2020','BKDPP','2020-02-20','2020-02-20','UNDANGAN FORUM PERANGKAT DAERAH PENYUSUNAN RENJA BKDPP 2021','','287','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(996,'005/1293/415.10.1.1/2020','BAGIAN ADMINISTRASI PEMERINTAH','2020-01-21','2020-02-21','UNDANGAN RAKOR PEMBAHASAN CAPAIAN INDIKATOR KINERJA KUNCI (IKK) DALAM RANGKA PENYUSUNAN LAPORAN PENYELENGGARAAN PEMERINTAH DAERAH TAHUN 2019','','288','KA SUB BAG PERENCANA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(997,'005/1294/415.10.1.1/2020','BAGIAN ADMINISTRASI PEMERINTAH','2020-02-21','2020-02-21','UNDANGAN RAKOR PEMBAHASAN PENGALIHAN PERSONIL, PENDANAAN, SARANA DAN PRASARANA SERTA DOKUMEN (P3D) TERMINAL KEPUHSARI','','289','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(998,'060/1214/415.10.3.3/2020','BAGIAN ORGANISASI','2020-02-21','2020-02-19','UNDANGAN PENANDATANGANAN PERJANJIAN KINERJA TAHUN 2020 DAN EVALUASI KINERJA TAHUN 2019','','290','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(999,'005/1299/415.19/2020','DINAS PERUMAHAN DAN PERMUKIMAN','2020-02-21','2020-02-21','UNDANGAN RAKOR TERKAIT RENCANA TENDER/LELANG PAKET KEGIATAN REHABILITASI DRAINASE/TROTOAR JALAN Jl. KH. WAHID HASYIM','','291','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1000,'005/1299/415.19/2020','DINAS PERUMAHAN DAN PERMUKIMAN','2020-02-21','2020-02-21','UNDANGAN RAKOR TERKAIT ASET PEMERINTAH KABUPATEN YANG DIDIRIKAN BANGUNAN OLEH PERORANGAN/SWASTA','','292','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1001,'005/1300/415.10.2.2/2020','BAGIAN ADMINISTRASI PEMBANGUNAN','2020-02-21','2020-02-21','UNDANGAN PEMBAHASAN KEGIATAN PEMBANGUNAN SARANA DAN PRASARANA KELURAHAN DAN PEMBERDAYAAN MASYARAKAT ','','293','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1002,'005/1304/415.44/2020','BPKAD','2020-02-21','2020-02-21','UNDANGAN DALAM RANGKA TINDAK LANJUT PEMBERIAN SURAT PENRINGATAN 1 DARI DINAS PERDAGANGAN DAN PERINDUSTRIAN','','294','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1003,'005/1304/415.44/2020','BPKAD','2020-02-21','2020-02-21','UNDANGAN DALAM RANGKA TINDAK LANJUT PEMBERIAN SURAT PERINGATAN 1 DARI DINAS PERDAGANGAN DAN PERINDUSTRIAN (PEMBANTU KEUANGAN)','','295','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1004,'005/237/415.46/2020','BPBD','2020-02-21','2020-02-21','UNDANGAN FORUM RENCANA KERJA PERANGKAT DAERAH DALAM RANGKA PENYUSUNAN RENCANA KERJA PERANGKAT BPBD TAHUN 2021','','296','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1005,'005/476/415.42/2020','BPPD','2020-02-21','2020-02-20','UNDANGAN PERSIAPAN PAPARAN HARI SENIN DIHADIRI OLEH IBU BUPATI BERSAMA STAKEHOLDER','','297','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1006,'005/479/415.42/2020','BPPD','2020-02-21','2020-02-20','UNDANGAN FORUM RENJA PERANGKAT DAERAH BPPD KAB JOMBANG TAHUN 2021','','298','KA SUB BAG PERENCANA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1007,'005/480/415.42/2020','BPPD','2020-02-21','2020-02-20','UNDANGAN RAPAT SINKRONISASI DAN KOORDINASI PELAKSANAAN FORUM PERANGKAT DAERAH','','299','KA SUB BAG PERENCANA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1008,'0276/A.1/L-GGS/III/2020','LEMBAGA GOOD GOVERNANCE SUPPORT (GGS)','2020-02-21','2020-02-01','UNDANGAN BIMTEK FRAUD AUDITING SEKTOR PUBLIK/PEMERINTAH','','300','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1009,'005/1291/415.10.2.1/2020','BAGIAN ADMINISTRASI PEREKONOMIAN','2020-02-21','2020-02-21','UNDANGAN RAKOR BERAS UNTUK APARATUR SIPIL NEGARA (ASN)','','301','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1010,'005/1308/415.45/2020','BAKESBANGPOL','2020-02-21','2020-02-21','UNDANGAN RAKOR CIPTA KONDISI KABUPATEN JOMBANG','','302','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1011,'005/1427/415.17/2020','DINAS KESEHATAN','2020-02-21','2020-02-20','UNDANGAN FORUM RENJA PERANGKAT DALAM RANGKA PENYUSUNAN RENCANA KERJA DINAS KESEHATAN KABUPATEN JOMBANG 2021','','303','EKO PRASETYO','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1012,'005/2492.2/033.3/2020','GUB JATIM','2020-02-24','2020-02-21','RALAT RAPAT KERJA PERCEPATAN PENYALURAN DAN PENGELOLAAN DANA DESA TAHUN ANGGARAN 2020','','304','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1013,'940/276/415.44/2020','BPKAD','2020-02-24','2020-02-18','LAPORAN REALISASI PENERIMAN PENDAPATAN DAERAH KABUPATEN JOMBANG TA 2020 BAGIAN BULAN JANUARI 2020','','305','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1014,'005/154/415.23/2020','DINAS KOMUNIKASI DAN INFORMATIKA','2020-02-24','2020-02-21','FORUM PERANGKAT DAERAH PENYUSUNAN RENJA PERANGKAT KERJA PADA DINAS KOMUNIKASI DAN INFORMATIKA THN 2021','','306','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1015,'005/491/415.38/2020','DINAS PENGENDALIAN PENDUDUK ,KB, PPPA','2020-02-24','2020-02-21','FORUM PERANGKAT DAERAH PEENYUSUNAN RENJA PERANGKAT KERJA PADA DINAS PENGENDALIAN PENDUDUK, KN DAN PPA THN 2021','','307','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1016,'005/760/415.16/2020','DINAS PENDIDIKAN DAN KEBUDAYAAN','2020-02-24','2020-02-18','TELAAH JUKNIS BOS TAHUN 2020','','308','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1017,'005/218/415.35/2020','DINAS PENANAMAN MODAL DAN PTSP','2020-02-24','2020-02-21','FORUM PERANGKAT DAERAH PENYUSUNAN RENJA PERANGKAT KERJA PADA DINAS PENANAMAN MODAL DAN PTSP THN 2021','','309','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1018,'005/778/415.20/2020','DINAS SOSIAL','2020-02-24','2020-02-20','FORUM PERANGKAT DAERAH PENYUSUNAN RENJA PERANGKA DAERAH PADA DINAS SOSIAL THN 2021','','310','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1019,'913/252/415.46/2020','BPBD','2020-02-24','2020-02-24','USULAN TAMBAHAN ANGGARAN PADA PERUBAHAN APBD TAHUN 2020','','311','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1020,'005/491.1/060/2020','GUB JATIM','2020-02-25','2020-02-20','RAKOR SINKRONISASI PKPT INSPEKTORAT KABUPATEN/KOTA SE-JAWA TIMUR 2020','','312','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1021,'S-232/WPJ.24/KP.16/2020','KANTOR PELAYANAN PAJAK PRATAMA JOMBANG','2020-02-25','2020-01-14','KEWAJIBAN PENYAMPAIAN SPT TAHUNAN PPh ORANG PRIBADI TAHUN PAJAK 2019','','313','KA SUB BAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1022,'005/0540/415.28/2020','DINAS KETAHANAN PANGAN DAN PERIKANAN','2020-02-25','2020-02-24','UNDANGAN FORUM ORGANISASI PERANGKAT DAERAH (OPD) PENYUSUNAN RENJA 2021','','314','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1023,'005/179/415.27/2020','DINAS PERTANIAN','2020-02-25','2020-02-24','UNDANGAN FORUM RENJA 2021','','315','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1024,'470/446/415.39/2020','DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL','2020-02-25','2020-02-24','FORUM PERANGKAT DAERAH PENYUSUNAN RENJA 2021','','316','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1025,'005/541/415.23/2020','DINAS KOMUNIKASI DAN INFORMATIKA','2020-02-25','2020-02-21','FORUM PERANGKAT DAERAH PENYUSUNAN RENJA 2021','','317','IRBAN PEMERINTAH','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1026,'050/482/415.18/2020','DINAS PU DAN PENATAAN RUANG','2020-02-25','2020-02-24','UNDANGAN FORUM ORGANISASI PERANGKAT DAERAH (OPD) PENYUSUNAN RENJA 2021','','318','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1027,'880/593/415.41/2020','BKDPP','2020-02-25','2020-02-20','PEMBERITAHUAN PNS YANG AKAN MEMASUKI BATAS USIA PENSIUN','','319','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1028,'005/1541/415.47/2020','RSUD JOMBANG','2020-02-25','2020-02-21','FORUM PERANGKAT DAERAH','','320','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1029,'005/983/415.17/2020','DINAS KESEHATAN','2020-02-25','2020-02-11','PERMOHONAN FGD','','321','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1030,'424/98/415.65/2020','KECAMATAN MOJOAGUNG','2020-02-25','2020-02-24','MOHON BANTUAN NARASUMBER','','322','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1031,'005/585/415.34/2020','DINAS LINGKUNGAN HIDUP','2020-02-25','2020-02-24','FORUM PERANGKAT DAERAH DALAM PENYUSUNAN RENJA','','323','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1032,'005/2465/415.43/2020','BPD','2020-02-25','2020-02-25','FORUM RENJA PERANGKAT DAERAH TAHUN 2021','','324','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1033,'005/837/415.16/2020','DINAS PENDIDIKAN DAN KEBUDAYAAN','2020-02-25','2020-02-24','FORUM RENJA PERANGKAT DAERAH TAHUN 2021','','325','IRBAN EKONOMI KESRA','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1034,'821.29/294/415.41/2019','BUPATI JOMBANG','2020-02-25','2019-12-26','PENYESUAIAN JABATAN PELAKSANA BAGI PEGAWAI NEGERI SIPIL DI LINGKUNGAN PEMERINTAH KABUPATEN JOMBANG','','326','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1035,'005/1136/415.10.1.2/2020','BAGIAN ADMINISTRASI KESRA','2020-02-25','2020-02-17','PENGAJIAN UMUM DALAM RANGKA MEMPERINGATI ISRO\' MI\'ROJ NAABI MUHAMMAD SAW TAHUN 1441/2020M','','327','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1036,'005/0842/415.29/2020','DINAS PETERNAKAN','2020-02-26','2020-02-24','FORUM RENJA PD 2021','','328','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1037,'900/813/415.20/2020','DINAS SOSIAL','2020-02-26','2020-02-24','PERUBAHAN RINCIAN DALAM PENJABARAN APBD TAHUN 2020','','329','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1038,'005/225/415.33/2020','DINAS PMD','2020-02-26','2020-02-25','FORUM RENJA PD 2021','','330','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1039,'800/524/415.41/2020','DINAS PENGENDALIAN PENDUDUK ,KB, PPPA','2020-02-26','2020-02-25','LAPORAN DAFTAR HADIR','','331','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1040,'S-571/WPJ.24/KP.16/2020','KANTOR PELAYANAN PAJAK PRATAMA JOMBANG','2020-02-26','2020-02-17','PENDAMPINGAN PENGISIAN SPT TAHUNAN PPh ORANG PRIBADI MELALUI E-FILING','','332','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1041,'065/296/415.44/2020','BPKAD','2020-02-26','2020-02-21','FORUM RENJA PERANGKAT DAERAH TAHUN 2021','','333','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1042,'976/925/415.32/2020','DINAS PERDAGANGAN DAN PERINDUSTRIAN','2020-02-26','2020-02-25','PERMINTAAN ANGGOTA TIM TEKNIS PEMANTAUAN BARANG KENA CUKAI ILEGAL','','334','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1043,'25/II/SEK./KIPP/02/2020','LSM- KIPP','2020-02-26','2020-02-25','PERMOHONAN PARTISIPASI','','335','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1044,'005/149/415.14/2020','SEKRETARIS DPRD','2020-02-26','2020-02-26','FORUM RENJA PERANGKAT DAERAH TAHUN 2021','','336','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1045,'050/118/415.68/2020','KECAMATAN SUMOBITO','2020-02-26','2020-02-20','USULAN ANGGARAN PAK 2020','','337','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1046,'S-362/DL/3/2020','BPKP PROVINSI','2020-02-26','2020-02-21','PEMBERITAHUN PENETAPAN PESERTA DIKLAT PENJENJANGAN AUDITOR MUDAA SECARA TATAP MUKA','','338','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1047,'094/639/060/2020','INSPEKTORAT SIDOARJO','2020-02-27','2020-02-25','SURAT PERINTAH TUGAS MELAKSANAKAN KOORDINASI TERKAIT HASIL LAPORAN EKPPD TAHUN 2019','','339','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1048,'800/756/415.16/2020','DIINAS PENDIDIKAN DAN KEBUDAYAAN','2020-02-27','2020-02-18','PERMOHONAN IJIN CERAI AN. SITI FATIMAH,S.Pd','','340','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1049,'800/864/415.16/2020','DINAS PENDIDIKAN DAN KEBUDAYAAN','2020-02-27','2020-02-25','PERMOHONAN IJIN CERAI AN. AMRIH IBNU WICAKSANA','','341','IRBAN PEMERINTAHAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1050,'940/315/415.44/2020','BPKAD','2020-02-27','2020-02-25','LAPORAN POSISI KAS HARIAN','','342','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1051,'005/1461/415.10.1.2/2020','BAGIAN ADMINISTRASI KESRA','2020-02-27','2020-02-26','RAKOR PELAKSANAAN BAZNAS KAB JOMBAANG','','343','IRBAN EKSOS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1052,'060/1474/415.1.3.3/2020','BAGIAN ORGANISASI','2020-02-27','2020-02-26','FORUM RENJA PD 2021','','344','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1053,'005/1463/415.34/2020','DINAS LINGKUNGAN HIDUP','2020-02-27','2020-02-26','KERJA BAKTI JUMAT BERSIH','','345','KASUBAG UMUM','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1054,'700/167/415.23/2020','DINAS KOMUNIKASI DAN INFORMATIKA','2020-02-27','2020-02-25','PEMBERIAN SANKSI TUNGGAKAN RETRIBUSI MENARA TELEKOMUNIKASI','','346','IRBAN KEUANGAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1055,'440/552/415.17/2020','DINAS KESEHATAN','2020-02-27','2020-02-25','PRESENTASI KEGIATAN REHAB GEDUNG PUSKESMAS','','347','IRBAN PEMBANGUNAN','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1056,'S-434/JF/02/2020','BPKP PUSAT','2020-02-27','2020-02-26','PENDAFTARAN UJIAN SERTIFIKASI AUDITOR (USA) PERIODE APRIL 2020','','348','SEKRETARIS','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1057,'UND-8/PK/2020','KEMENKEU RI','2020-02-28','2020-02-27','SOSIALISASI TEKNIS TKDD DAN PEMBIAYAAN DI KOTA SURABAYA','','349','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1058,'800/671/415.41/2020','BKDPP','2020-02-28','2020-02-26','ABSENSI KEHADIRAN SENAM PAGI','','350','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1059,'814/686/415.41/2020','BKDPP','2020-02-28','2020-02-27','PELAPORAN SKP DAN PRESTASI KERJA PNS  (e-Lapkin) TAHUN 2019','','351','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1060,'523/0586/415.28/2020','DINAS KETAHANAN PANGAN DAN PERIKANAN','2020-02-28','2020-02-27','EXPOSE PERENCANAAN PEMBANGUNAN FISIK TAHUN ANGGARAN 2020','','352','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1061,'800/984/415.41/2020','BKDPP','2020-02-28','2020-02-27','RAPAT KERJA SISTEM INFORMASI KEPEGAWAIAN (SIAP ASN)','','353','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1062,'005/194.3/415.48/2020','RSUD PLOSO','2020-02-28','2020-02-27','FORUM RENJA PD 2021','','354','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:49:37','2020-03-02 07:49:37'),
(1063,'sdfdsfds','KECAMATAN NGORO1','2020-03-10','2020-03-16','dfsdfdsfsd','','356','','','','MAULANA RIZKI, S.Kom','2020-03-02 07:54:18','2020-03-02 07:54:36');

/*Table structure for table `tb_surat_tugas` */

DROP TABLE IF EXISTS `tb_surat_tugas`;

CREATE TABLE `tb_surat_tugas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_surat_tugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `pemberi_tugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima_tugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hal_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_surat_tugas` */

insert  into `tb_surat_tugas`(`id`,`no_surat_tugas`,`no_agenda`,`tanggal_surat`,`pemberi_tugas`,`penerima_tugas`,`hal_surat`,`lampiran`,`jenis_surat`,`created_by`,`created_at`,`updated_at`) values 
(2,'094/1249/415.15/2019','123','2019-10-31','Maulana Rizki','Maulana Rizki','Menghadiri Penutupan Diklat Pemeriksaan Infrastruktur pada tanggal 1 s/d 2 Nop 2019, di Hotel Davam Malioboro','[\"2019-10-31st umum.jpg\"]','surat tugas umum','Maulana Rizki','2019-12-05 04:09:58','2019-12-06 01:16:52'),
(3,'094/1325/415.15/2019','142','2019-11-12','Maulana Rizki','Maulana Rizki','Mengikuti Ujian Sertifikasi US-AAP\"A\" Pada tanggal 19 s.d 21 Nop 2019 di Graha Akuntan - Jakarta','[\"2019-11-12st rinsus.jpg\",\"2019-11-12st rinsus1.jpg\"]','surat tugas rinsus','Maulana Rizki','2019-12-05 04:36:43','2019-12-05 04:36:43'),
(4,'094/01280/415.15/2019','421','2019-11-06','Maulana Rizki','Maulana Rizki','Melaksanakan Monitoring dan Evaluasi dana BOS dan BOSDA pada SMPN 6 Jombang, SDN Jombok 2 Ksbn, SDN Podoroto dll','[\"2019-11-06st regler.jpg\"]','surat tugas reguler','Maulana Rizki','2019-12-05 04:39:07','2019-12-05 04:39:07');

/*Table structure for table `tb_tag` */

DROP TABLE IF EXISTS `tb_tag`;

CREATE TABLE `tb_tag` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_tag` */

insert  into `tb_tag`(`id`,`nama_tag`,`kategori_tag`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(1,'profil','profil','Maulana Rizki','Maulana Rizki','2019-12-16 03:29:51','2019-12-16 03:38:07'),
(2,'kegiatan','kegiatan','Maulana Rizki','Maulana Rizki','2019-12-16 03:36:34','2019-12-16 03:36:34'),
(3,'inspektorat','berita','Maulana Rizki','Maulana Rizki','2019-12-16 03:37:40','2019-12-16 03:37:40'),
(4,'pemkab','berita','Maulana Rizki','Maulana Rizki','2019-12-16 03:37:52','2019-12-16 03:37:52'),
(5,'pengumuman','berita','Maulana Rizki','Maulana Rizki','2019-12-16 03:38:31','2019-12-16 03:38:31'),
(7,'foto','pegawai','Maulana Rizki','Maulana Rizki','2019-12-26 05:52:53','2019-12-26 05:52:53'),
(8,'pengaduan','pengaduan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-02-12 04:59:53','2020-02-12 04:59:53'),
(9,'iklan','iklan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-07-06 03:05:31','2020-07-06 03:05:31'),
(10,'header','header','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-19 06:50:14','2020-08-19 06:50:14'),
(11,'header','header','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-19 06:50:15','2020-08-19 06:50:15');

/*Table structure for table `tb_undangan` */

DROP TABLE IF EXISTS `tb_undangan`;

CREATE TABLE `tb_undangan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_surat_undangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `pemberi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tertuju` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hal_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_undangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_undangan` */

insert  into `tb_undangan`(`id`,`no_surat_undangan`,`no_agenda`,`tanggal_surat`,`pemberi`,`tertuju`,`hal_surat`,`lampiran`,`jenis_undangan`,`created_by`,`created_at`,`updated_at`) values 
(1,'005/1420/415.15/2019','155','2019-11-28','Inspektorat Kab. Jombang','Kepala Dinas PERKIM Kab. Jombang','Uji coba E-Audit undangan pada Kasubag, Sungram dan PPK untuk PERKIM','[\"2019-11-28undangan keluar.jpg\"]','undangan masuk','Maulana Rizki','2019-12-05 06:12:09','2019-12-05 06:19:52'),
(2,'005/2964/415.42/2019','124','2019-11-24','BAPPEDA Kab. Jombang','Inspektorat Kab. Jombang','Tindak Lanjut Pelaporan Rencana Aksi B06 dan B09','[\"2019-11-24undangan masuk.jpg\"]','undangan masuk','Maulana Rizki','2019-12-05 07:06:54','2019-12-05 07:06:54');

/*Table structure for table `tb_web_berita` */

DROP TABLE IF EXISTS `tb_web_berita`;

CREATE TABLE `tb_web_berita` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arsip_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_publikasi` date NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_web_berita` */

insert  into `tb_web_berita`(`id`,`judul_berita`,`isi_berita`,`slug_berita`,`foto_berita`,`arsip_berita`,`tag_berita`,`status_berita`,`tgl_publikasi`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(1,'Penyerahan Penghargaan Pencapaiaan Kapabilitas APIP Level 3 Kabupaten Jombang','PHAgc3R5bGU9InRleHQtYWxpZ246IGp1c3RpZnk7Ij4iQWxoYW1kdWxpbGxhaCBJbnNwZWt0b3JhdCBQZW1lcmludGFoIEthYnVwYXRlbiBKb21iYW5nIG1lbmRhcGF0IHBlbmdoYXJnYWFuIHBlbmNhcGFpYW4ga2FwYWJpbGl0YXMgQVBJUCBsZXZlbCAzIGRhcmkgQmFkYW4gUGVuZ2F3YXMgS2V1YW5nYW4gZGFuIFBlbWJhbmd1bmFuIChCUEtQKSwgYXRhcyBkaSByYWlobnlhIHBlbmdoYXJnYWFuIGluaSBzYXlhIHVjYXBrYW4gdGVyaW1ha2FzaWgga2VwYWRhIHNlbHVydWggSmFqYXJhbiBJbnNwZWt0b3JhdCB5ZyB0ZWxhaCBtZW5qYWxhbmthbiB0dWdhcyBkZW5nYW4gYmFpay4iIGRpa3V0aXAgZGFyaSA8YSBocmVmPSJodHRwczovL3d3dy5pbnN0YWdyYW0uY29tL3AvQ0VUYnN5QWpOTUMvIj5pbnN0YWdyYW08L2E+IEJ1cGF0aSBLYWIuIEpvbWJhbmcgaWJ1IE11bmRqaWRhaCBXYWhhYi48L3A+DQo8cCBzdHlsZT0idGV4dC1hbGlnbjoganVzdGlmeTsiPlBlbWVyaW50YWggS2FidXBhdGVuIEpvbWJhbmcgbWVuZXJpbWEgcGVuZ2hhcmdhYW4gUGVuY2FwYWlhbiBLYXBhYmlsaXRhcyBBUElQIExldmVsIDMgZGFyaSBCYWRhbiBQZW5nYXdhcyBLZXVhbmdhbiBkYW4gUGVtYmFuZ3VuYW4gKEJQS1ApIFJJLjwvcD4NCjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyI+UGVuZ2hhcmdhYW4gaW5pIGRpYmVyaWthbiBsYW5nc3VuZyBvbGVoIEtlcGFsYSBQZXJ3YWtpbGFuIEJQS1AgUHJvdmluc2kgSmF3YSBUaW11ciwgQWxleGFuZGVyIFJ1YmkgU2V0eW9hZGkga2VwYWRhIEJ1cGF0aSBKb21iYW5nIEhqLk11bmRqaWRhaCBXYWhhYiB5YW5nIGRpZGFtcGluZ2kgb2xlaCBXYWtpbCBCdXBhdGkgSm9tYmFuZyBTdW1yYW1iYWgsIFNla3JldGFyaXMgRGFlcmFoIEthYnVwYXRlbiBKb21iYW5nIEFraG1hZCBKYXp1bGksIGp1Z2EgS2VwYWxhIEluc3Bla3RvcmF0IEthYnVwYXRlbiBKb21iYW5nLCBFa2EgU3VwcmFzZXR5YSBkaSBSdWFuZyBSYXBhdCBTd2FnYXRhIFBlbmRvcG8gS2FidXBhdGVuIEpvbWJhbmcsIFNlbGFzYSAyNSBBZ3VzdHVzIDIwMjAuPC9wPg0KPHAgc3R5bGU9InRleHQtYWxpZ246IGp1c3RpZnk7Ij5JbmkgYXJ0aW55YSwgUGVtZXJpbnRhaCBLYWJ1cGF0ZW4gSm9tYmFuZyBkaW5pbGFpIG1hbXB1IG1lbnVuanVra2FuIHRpbmdrYXQga2VzZW1wdXJuYWFuIGRhbGFtIHBlbnllbGVuZ2dhcmFhbiBzaXN0ZW0gcGVuZ2VuZGFsaWFuIGludGVybiBwZW1lcmludGFoIG1lbGFsdWkgcHJvc2VzIHBlbmdlbmRhbGlhbiB5YW5nIHRlcmludGVncml0YXMgZGFsYW0gcGVsYWtzYW5hYW4gdGluZGFrYW4gbWFuYWplcmlhbCBkYW4ga2VnaWF0YW4gaW5zdGFuc2kuICZsZHF1bzsgSW5pIG1lbnVuanVra2FuIGthcGFiaWxpdGFzIEFQSVAgUGVtZXJpbnRhaCBLYWJ1cGF0ZW4gSm9tYmFuZyB0ZWxhaCBiZXJoYXNpbCBkYW4gbWVtZW51aGkgdGFyZ2V0IGthcmVuYSBiaXNhIG1lbmNhcGFpIGxldmVsIDMsIGFydGlueWEga2luZXJqYSBJbnNwZWt0b3JhdCBkYWxhbSBtZW5qYWxhbmthbiBwZXJhbm55YSBtYW1wdSBtZW1iZXJpa2FuIGtleWFraW5hbiB5YW5nIG1lbWFkYWkgYmFod2EgbWFtcHUgbWVuamFsYW5rYW4ga2luZXJqYSBzZXN1YWkgYXR1cmFuLCBlZmlzaWVuIGVmZWt0aWYsIGxhcG9yYW4gS2V1YW5nYW5ueWEgaGFuZGFsLiBJbmkgaGFydXMgdGVydXMgZGkgdGluZ2thdGthbiBhZ2FyIEluc3Bla3RvcmF0IG1hbXB1IG1lbmphZGkgYWR2aXNvciBiYWdpIGtlcGFsYSBkYWVyYWggZGFsYW0gbWVsYWtzYW5ha2FuIHBlbWJhbmd1bmFuIGRpIEthYnVwYXRlbiBKb21iYW5nJnJkcXVvOywgdHV0dXIgQWxleGFuZGVyIFJ1YnUgU2V0eW9hZGkuPC9wPg0KPHAgc3R5bGU9InRleHQtYWxpZ246IGp1c3RpZnk7Ij5CdXBhdGkgS2FidXBhdGVuIEpvbWJhbmcgbWVueWFtcGFpa2FuIHRlcmltYSBrYXNpaCBkYW4gYXByZXNpYXNpIGF0YXMgcGVuZ2hhcmdhYW4gdGVyc2VidXQuICZsZHF1bztLYW1pIHNhbmdhdCBiZXJzeXVrdXIgZGFuIGJlcnRlcmltYSBrYXNpaCBhdGFzIGNhcGFpYW4gaW5pLCBhdGFzIGtpbmVyamEgaW5zcGVrdG9yYXQgam9tYmFuZyBkYW4gc2VsdXJ1aCBPUEQgeWFuZyB0ZWxhaCBtZW5qYWxhbmthbiBraW5lcmphbnlhIHNlc3VhaSBwZXJhdHVyYW4gcGVydW5kYW5nYW4geWFuZyBiZXJsYWt1IGRhbGFtIG1lbWJlcmlrYW4gcGVsYXlhbmFuIGthcGFkYSBtYXN5YXJha2F0LiBEZW5nYW4gY2FwYWlhbiBpbmkganVzdHJ1IGtpdGEgaGFydXMgbGViaCBiZXJzZW1hbmFnYXQgbGFnaSBkYWxhbSBiZWtlcmphIGRlbmdhbiBoYXJhcGFuIHVudHVrIG1lbXBlcnRhaGFua2FuIGJhaGthbiBtZW5pbmdrYXRrYW4gbGV2ZWxueWEgeWFuZyBwYWRhIGFraGlybnlhIGFkYWxhaCB1bnR1ayBtZW5zZWphaHRlcmFrYW4gbWFzeWFyYWthdCZyZHF1bzssIHR1dHVyIEhqLk11bmRqaWRhaCBXYWhhYiwgQnVwYXRpIEpvbWJhbmcuPC9wPg0KPHAgc3R5bGU9InRleHQtYWxpZ246IGp1c3RpZnk7Ij5TZWxhaW4gbWVueWVyYWhrYW4gcGVuZ2hhcmdhYW4gQVBJUCwgS2VwYWxhIFBlcndha2lsYW4gQlBLUCBSSSBQcm92aW5zaSBKYXdhIFRpbXVyIGp1Z2EgbWVueWVyYWhrYW4gTGFwb3JhbiBIYXNpbCBQZW5qYW1pbmFuIEt1YWxpdGFzIChRdWFsaXR5IEFzc3VyYW5jZSkgYXRhcyBwZW5pbGFpYW4gbWFuZGlyaSBBUElQIExldmVsIDMga2VwYWRhIEtlcGFsYSBJbnNwZWt0b3JhdCBQZW1lcmludGFoIEthYnVwYXRlbiBKb21iYW5nLjwvcD4NCjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyI+TW9kZWwgS2FwYWJpbGl0YXMgUGVuZ2F3YXNhbiBJbnRlcm4gYXRhdSZuYnNwOzxlbT5JbnRlcm5hbCBBdWRpdCBDYXBhYmlsaXR5IE1vZGVsJm5ic3A7PC9lbT4oSUFDTSkgYWRhbGFoIHN1YXR1IGtlcmFuZ2thIGtlcmphIHlhbmcgbWVuZ2luZGVudGlmaWthc2kgYXNwZWstYXNwZWsgZnVuZGFtZW50YWwgeWFuZyBkaWJ1dHVoa2FuIHVudHVrIHBlbmdhd2FzYW4gaW50ZXJuIHlhbmcgZWZla3RpZiBkaSBzZWt0b3IgcHVibGlrLCB5YW5nIG1lbmdnYW1iYXJrYW4gamFsdXIgZXZvbHVzaSB1bnR1ayBvcmdhbmlzYXNpIHNla3RvciBwdWJsaWsgZGFsYW0gcmFuZ2thIG1lbmdlbWJhbmdrYW4gcGVuZ2F3YXNhbiBpbnRlcm4geWFuZyBlZmVrdGlmIHVudHVrIG1lbWVudWhpIHBlcnN5YXJhdGFuIHRhdGEga2Vsb2xhIG9yZ2FuaXNhc2kgZGFuIGhhcmFwYW4gcHJvZmVzaW9uYWwsIHlhbmcgbWVudW5qdWtrYW4gbGFuZ2thaC1sYW5na2FoIG1lbnVqdSBrb25kaXNpIHRpbmdrYXQga2FwYWJpbGl0YXMgcGVuZ2F3YXNhbiBpbnRlcm4geWFuZyBrdWF0IGRhbiBlZmVrdGlmLiBNb2RlbCBQZW5pbmdrYXRhbiBLYXBhYmlsaXRhcyBBUElQIG1lbmdhY3UgcGFkYSZuYnNwOzxlbT5JbnRlcm5hbCBBdWRpdDwvZW0+Jm5ic3A7PGVtPkNhcGFiaWxpdHkgTW9kZWwmbmJzcDs8L2VtPihJQS1DTSksIHlhaXR1IHN1YXR1IGtlcmFuZ2thIGtlcmphIHlhbmcgbWVuZ2luZGVudGlmaWthc2kgYXNwZWstYXNwZWsgZnVuZGFtZW50YWwgeWFuZyBkaWJ1dHVoa2FuIHVudHVrIHBlbmdhd2FzYW4gaW50ZXJuIHlhbmcgZWZla3RpZiBkaSBzZWt0b3IgcHVibGlrLiBBcmVhIFByb3NlcyBLdW5jaSAvJm5ic3A7PGVtPktleSBQcm9jZXNzIEFyZWEmbmJzcDs8L2VtPihLUEEpIG1lcnVwYWthbiBiYW5ndW5hbiB1dGFtYSB5YW5nJm5ic3A7bWVuZW50dWthbiBrYXBhYmlsaXRhcyBzdWF0dSBBUElQIHlhbmcgbWVuZ2lkZW50aWZpa2FzaSBhcGEgeWFuZyBzZWhhcnVzbnlhIGFkYSBkYW4gYmVya2VsYW5qdXRhbiBwYWRhIHRpbmdrYXQga2FwYWJpbGl0YXMgdGVydGVudHUgc2ViZWx1bSBwZW55ZWxlbmdnYXJhYW4gYWt0aXZpdGFzIHBlbmdhd2FzYW4gaW50ZXJuIGJpc2EgbWVuaW5na2F0IHBhZGEgbGV2ZWwgYmVyaWt1dG55YS48L3A+DQo8cCBzdHlsZT0idGV4dC1hbGlnbjoganVzdGlmeTsiPlNlbGFpbiBpdHUgZGlqZWxhc2thbiBqdWdhIG1lbmdlbmFpIExldmVsIElBLUNNIExldmVsIDEgc2FtcGFpIGRlbmdhbiBMZXZlbCA1LjwvcD4NCjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyBwYWRkaW5nLWxlZnQ6IDQwcHg7Ij5MZXZlbCAxOiAmbmJzcDs8ZW0+SW5pdGlhbDwvZW0+Jm5ic3A7Jm5ic3A7PGVtPig8L2VtPkFQSVAgYmVsdW0gZGFwYXQgbWVtYmVyaWthbiBqYW1pbmFuIGF0YXMgcHJvc2VzIHRhdGEga2Vsb2xhIHNlc3VhaSBwZXJhdHVyYW4gZGFuIGJlbHVtIGRhcGF0IG1lbmNlZ2FoIGtvcnVwc2kpLjwvcD4NCjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyBwYWRkaW5nLWxlZnQ6IDQwcHg7Ij5MZXZlbCAyIDombmJzcDs8ZW0+SW5mcmFzdHJ1Y3R1cmU8L2VtPiZuYnNwOyZuYnNwOzxlbT4oPC9lbT5BUElQIG1hbXB1IG1lbmphbWluIHByb3NlcyB0YXRhIGtlbG9sYSBzZXN1YWkgZGVuZ2FuIHBlcmF0dXJhbiBkYW4gbWFtcHUgbWVuZGV0ZWtzaSB0ZXJqYWRpbnlhIGtvcnVwc2kpLjwvcD4NCjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyBwYWRkaW5nLWxlZnQ6IDQwcHg7Ij5MZXZlbCAzIDombmJzcDs8ZW0+SW50ZWdyYXRlZCZuYnNwOzwvZW0+Jm5ic3A7PGVtPig8L2VtPkFQSVAgbWFtcHUgbWVuaWxhaSBlZmlzaWVuc2ksIGVmZWt0aXZpdGFzLCBla29ub21pcyBzdWF0dSBrZWdpYXRhbiBkYW4gbWFtcHUgbWVtYmVyaWthbiBrb25zdWx0YXNpIHBhZGEgdGF0YSBrZWxvbGEsIG1hbmFqZW1lbiByaXNpa28sIGRhbiBwZW5nZW5kYWxpYW4gaW50ZXJuKS48L3A+DQo8cCBzdHlsZT0idGV4dC1hbGlnbjoganVzdGlmeTsgcGFkZGluZy1sZWZ0OiA0MHB4OyI+TGV2ZWwgNCA6Jm5ic3A7PGVtPk1hbmFnZWQmbmJzcDs8L2VtPiZuYnNwOzxlbT4oPC9lbT5BUElQIG1hbXB1IG1lbWJlcmlrYW4mbmJzcDs8ZW0+YXNzdXJhbmNlJm5ic3A7PC9lbT5zZWNhcmEga2VzZWx1cnVoYW4gYXRhcyB0YXRhIGtlbG9sYSwgbWFuYWplbWVuIHJpc2lrbywmbmJzcDsgZGFuIHBlbmdlbmRhbGlhbiBpbnRlcm4pLjwvcD4NCjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyBwYWRkaW5nLWxlZnQ6IDQwcHg7Ij5MZXZlbCA1IDombmJzcDs8ZW0+T3B0aW1pemluZzwvZW0+Jm5ic3A7PGVtPig8L2VtPkFQSVAgbWVuamFkaSBhZ2VuIHBlcnViYWhhbikuPC9wPg==','penyerahan-penghargaan-pencapaiaan-kapabilitas-apip-level-3-kabupaten-jombang','[\"2020-08-25-penyerahan-penghargaan-pencapaiaan-kapabilitas-apip-level-3-kabupaten-jombang-2-09-48-37am.jpg\"]','null','[\"pengumuman\"]','aktif','2020-08-25','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-26 01:58:11','2020-08-26 02:17:44'),
(2,'Benmarking Reviu RKA Inspektorat Kota Salatiga dengan Inspektorat Kabupaten Jombang','PHAgc3R5bGU9InRleHQtYWxpZ246IGp1c3RpZnk7Ij5JbnNwZWt0b3JhdCBLYWJ1cGF0ZW4gU2FsYXRpZ2EgbWVueWVsZW5nZ2FyYWthbiBQZWxhdGloYW4gS2FudG9yIFNlbmRpcmkgKFBLUykgc2VjYXJhIG9ubGluZSBkZW5nYW4gbWF0ZXJpIFJldml1IFBlcmVuY2FuYWFuIGRhbiBQZW5nYW5nZ2FyYW4gZGVuZ2FuIG1lbmdoYWRpcmthbiBuYXJhIHN1bWJlciBkYXJpIFBlcndha2lsYW4gQlBLUCBKYXdhIFRlbmdhaCBkYW4gSW5zcGVrdG9yYXQgSm9tYmFuZy48L3A+DQo8cCBzdHlsZT0idGV4dC1hbGlnbjoganVzdGlmeTsiPlR1anVhbiBQS1Mgb25saW5lIGluaSBhZGFsYWggdW50dWsgbWVuaW5na2F0a2FuIGtlbWFtcHVhbiBBcGFyYXQgUGVuZ2F3YXMgZGFsYW0gaGFsIFJldml1IFBlcmVuY2FuYWFuIGRhbiBQZW5nYW5nZ2FyYW4uIERlbmdhbiBtZW5pbmdrYXRueWEga2VtYW1wdWFuIEFwYXJhdCBQZW5nYXdhc2FuIGRpaGFyYXBrYW4ga3VhbGl0YXMgaGFzaWwgcGVuZ2F3YXNhbiBqdWdhIG1lbmluZ2thdC48L3A+DQo8cCBzdHlsZT0idGV4dC1hbGlnbjoganVzdGlmeTsiPkJlcmF3YWwgZGFyaSByYXNhIGluZ2luIGJlbGFqYXIgYmVyc2FtYSwgSW5zcGVrdG9yYXQgSm9tYmFuZyBtZW55YW1idXQgYmFpayByZW5jYW5hIHRlcnNlYnV0LjwvcD4NCjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyI+QWNhcmEgaW5pIGRpYnVrYSBtZWxhbHVpIGFwbGlrYXNpIFpvb20gb2xlaCBJbnNwZWt0dXIgS290YSBTYWxhdGlnYSBJYnUgSXIuIEt1cmlhIEhhcmRqYW50aSwgTVNpIGRhbiBqdWdhIEluc3Bla3R1ciBLYWJ1cGF0ZW4gSm9tYmFuZyBEcnMuIEVrYSBTdXByYXNldHlvIEFQLiBNTTwvcD4NCjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyI+QWRhcHVuIHRlbWEgeWFuZyBkaWJhaGFzIGFkYWxhaCBSZXZpdSBSS0EgdGFodW4gMjAyMS4gUmV2aXUgUktBIGluaSBiZXJ0dWp1YW4gYWdhciBtZW5pbmdrYXRrYW4ga3VhbGl0YXMgQVBCRCBkYW4vYXRhdSBQZXJ1YmFoYW4gQVBCRCBkZW5nYW4gbWVtYmVyaWthbiBrZXlha2luYW4gdGVyYmF0YXMgbWVuZ2VuYWkgYWt1cmFzaSwga2VhbmRhbGFuIGRhbiBrZWFic2FoYW5ueWEuIEFkYXB1biBMYW5na2FoIGRhbGFtIFJldml1IGF0YXMgUktBL1BlcnViYWhhbiBSS0EtU0tQRCBhZGFsYWggZGVuZ2FuIG1lbGFrdWthbiBwZW5ndWppYW4gYXRhczo8L3A+DQo8b2wgc3R5bGU9InRleHQtYWxpZ246IGp1c3RpZnk7Ij4NCjxsaT5LZXNlc3VhaWFuIGluZm9ybWFzaSBkYWxhbSBSS0EtU0tQRCBkYW4gUGVydWJhaGFuIFJLQS1TS1BEIGRlbmdhbiBpbmZvcm1hc2kgZGFsYW0gS1VBLCBQUEFTLCBQZXJ1YmFoYW4gS1VBIGRhbiBQZXJ1YmFoYW4gUFBBUzsgZGFuPC9saT4NCjxsaT5LZXNlc3VhaWFuIHBlcnVtdXNhbiBkb2t1bWVuIHBlcmVuY2FuYWFuIGFuZ2dhcmFuIGRhZXJhaCBkZW5nYW4gdGF0YSBjYXJhIGRhbiBrYWlkYWggcGVyZW5jYW5hYW4gYW5nZ2FyYW4uPC9saT4NCjwvb2w+DQo8cCBzdHlsZT0idGV4dC1hbGlnbjoganVzdGlmeTsiPkFkYXB1biBkYXNhciBtZWxha3VrYW4gUmV2aXUgUktBIHRhaHVuIDIwMjEgYWRhbGFoIHRldGFwIGJlcnBlZG9tYW4gZGVuZ2FuIFBlcm1lbmRhZ3JpIDEwIFRhaHVuIDIwMTggdGVudGFuZyBSZXZpdSBBdGFzIERva3VtZW4gUGVyZW5jYW5hYW4gUGVtYmFuZ3VuYW4gZGFuIEFuZ2dhcmFuIERhZXJhaCBUYWh1bmFuLCBuYW11biBqdWdhIG1lbXBlcmhhdGlrYW4ga2V0ZW50dWFuIGRhbGFtIFBlcm1lbmRhZ3JpIE5vbW9yIDkwIFRhaHVuIDIwMTkgVGVudGFuZyBLbGFzaWZpa2FzaSwgS29kZWZpa2FzaSBEYW4gTm9tZW5rbGF0dXIgUGVyZW5jYW5hYW4gUGVtYmFuZ3VuYW4gRGFuIEtldWFuZ2FuIERhZXJhaCwgUGVybWVuZGFncmkgTm9tb3IgNjQgVGFodW4gMjAyMCBQZWRvbWFuIFBlbnl1c3VuYW4gQW5nZ2FyYW4gUGVuZGFwYXRhbiBkYW4gQmVsYW5qYSBEYWVyYWggVGFodW4gMjAyMSwgUGVybWVuZGFncmkgNzAgVGFodW4gMjAxOSB0ZW50YW4gU2lzdGVtIEluZm9ybWFzaSBQZW1lcmludGFoYW4gRGFlcmFoIHNlcnRhIFBlcnByZXMgMzMgdGFodW4gMjAyMCB0ZW50YW5nIFN0YW5kYXIgSGFyZ2EgU2F0dWFuIFJlZ2lvbmFsPC9wPg0KPHAgc3R5bGU9InRleHQtYWxpZ246IGp1c3RpZnk7Ij5BZGFwdW4geWFuZyBkaWJhaGFzIGFkYWxhaCB0ZXJrYWl0IHByb3NlZHVyIHJldml1IGRlbmdhbiBpbmRpa2F0b3IgeWFuZyBkaWphZGlrYW4gcGFyYW1hdGVyIG1lbGlwdXRpJm5ic3A7IGRva3VtZW4gcmFuY2FuZ2FuIGFraGlyIFJLQTsga2VsZW5na2FwYW4gZG9rdW1lbiBwZW5kdWt1bmc7IEtldGFhdGFuIHRlcmhhZGFwIEFIUy9TQlUvSnVrbmlzIEFQQkQvUGVycHJlcyAzMyAyMDIwOyBQZW5nZ3VuYWFuIGtvZGUgcmVrZW5pbmcgYmVzZXJ0YSBub3JtYSBwZW55YWppYW5ueWE7IGtlcGF0dWhhbiB0ZXJoYWRhcCBrYWlkYWgta2FpZGFoIHBlcmVuY2FuYWFuIGRhbiBwZW5nYW5nZ2FyYW47IFBlbmdhbG9rYXNpYW4gYW5nZ2FyYW4gdW50dWsga2VnaWF0YW4geWFuZyBkaWRhbmFpIGRhcmkgcGVuZXJpbWFhbiB5YW5nIHRlbGFoIGRpdGV0YXBrYW4gcGVuZ2d1bmFhbm55YSBvbGVoIHBlbWJlcmkgZGFuYTsgUGVuZ2FuZ2dhcmFuIHVudHVrIGJlbGFuamEgaGliYWggZGFuIGJhbnNvczsgS2V0ZXBhdGFuIHBlbmdhbmdnYXJhbiB1bnR1ayBwZW5nYWRhYW4gYXNldC48L3A+DQo8cCBzdHlsZT0idGV4dC1hbGlnbjoganVzdGlmeTsiPkRhbiBzZWJhZ2FpIGNhdGF0YW4gYmFpayBkYXJpIEluc3Bla3R1ciBLb3RhIFNhbGF0aWdhIGRhbiBJbnNwZXR1ciBLYWJ1cGF0ZW4gSm9tYmFuZyBiZXJoYXJhcCBhZ2FyIHBlc2VydGEgcGVsYXRpaGFuIGthbnRvciBzZW5kaXJpIGRhcGF0IGRpamFkaWthbiBzZWJhZ2FpIHNhbGFoIHNhdHUgdXBheWEgbWVuaW5na2F0a2FuIGt1YWxpdGFzIGRpcmkgYXVkaXRvciBzZWhpbmdnYSBtZW1wZXJsYW5jYXIgSW5zcGVrdG9yYXQgZGFsYW0gbWVsYWtzYW5ha2FuIHR1cG9rc2lueWEgc2ViYWdhaSBBUElQLjwvcD4=','benmarking-reviu-rka-inspektorat-kota-salatiga-dengan-inspektorat-kabupaten-jombang','[\"2020-09-09-benmarking-reviu-rka-inspektorat-kota-salatiga-dengan-inspektorat-kabupaten-jombang-02-18-05am.jpg\"]','null','[\"inspektorat\",\"pemkab\",\"pengumuman\"]','aktif','2020-08-25','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-09-09 03:05:27','2020-09-09 03:05:27');

/*Table structure for table `tb_web_pengaduan` */

DROP TABLE IF EXISTS `tb_web_pengaduan`;

CREATE TABLE `tb_web_pengaduan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_domisili` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pelapor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_laporan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klasifikasi_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_terlapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harapan_pelapor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian_peristiwa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_laporan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_web_pengaduan` */

insert  into `tb_web_pengaduan`(`id`,`nama_pelapor`,`nik_pelapor`,`kota_domisili`,`jenis_kelamin`,`email_pelapor`,`kontak_pelapor`,`alamat_pelapor`,`pekerjaan_pelapor`,`kategori_laporan`,`klasifikasi_instansi`,`nama_instansi`,`nama_terlapor`,`hubungan_pelapor`,`harapan_pelapor`,`uraian_peristiwa`,`bukti_laporan`,`ktp_pelapor`,`created_at`,`updated_at`) values 
(1,'Maulana Rizki','35031653118636131','Kediri','pria','devdre@gmail.com','082334759265','Kediri','Programmer','informasi','staf ahli','Inspektorat','Rizki','Teman','Teman','Teman','bukti-maulana-rizki-2020-02-11.png','ktp-maulana-rizki-2020-02-11.png','2020-02-11 08:00:48','2020-02-11 08:00:48');

/*Table structure for table `tb_web_video` */

DROP TABLE IF EXISTS `tb_web_video`;

CREATE TABLE `tb_web_video` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_publikasi` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_web_video` */

insert  into `tb_web_video`(`id`,`judul_video`,`link_video`,`tgl_publikasi`,`status`,`created_by`,`updated_by`,`created_at`,`updated_at`) values 
(1,'Protokol Covid Inspektorat Kabupaten Jombang','https://www.youtube.com/embed/KufwAuY6St4','2020-08-03','1','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-03 09:51:47','2020-08-03 09:51:47'),
(2,'Iklan Layanan Masyarakat - Kembali Suci Tanpa Korupsi','https://www.youtube.com/embed/GOEzyyHkT4M','2020-08-12','1','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-08-12 02:53:29','2020-08-12 02:53:29'),
(3,'E-Audit Inspektorat Jombang','https://www.youtube.com/embed/UkrfBp0uAW4','2020-09-09','1','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-09-09 05:57:25','2020-09-09 05:57:25');

/*Table structure for table `tb_web_wbs` */

DROP TABLE IF EXISTS `tb_web_wbs`;

CREATE TABLE `tb_web_wbs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pelapor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak_pelapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_terlapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian_peristiwa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_laporan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_pelapor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan_feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran_feedback` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_web_wbs` */

insert  into `tb_web_wbs`(`id`,`token`,`nama_pelapor`,`nik_pelapor`,`alamat_pelapor`,`email_pelapor`,`kontak_pelapor`,`nama_instansi`,`nama_terlapor`,`uraian_peristiwa`,`bukti_laporan`,`ktp_pelapor`,`catatan_feedback`,`lampiran_feedback`,`status`,`publikasi`,`created_at`,`updated_at`) values 
(3,'3eXDXPyv','Maulana Rizki','350042942309409','Jombang','maulana03myr19@gmail.com','082334759265','Inspektorat Jombang','Yoga Pratama','Simulasi pengaduan menggunakan sistem WBS','bukti-maulana-rizki-2020-08-06.png','ktp-maulana-rizki-2020-08-06.png','Feedback simulasi pengaduan di WBS','2020-08-06-maulana-rizki-03-27-12am.png','3','2020-08-06','2020-08-06 03:24:28','2020-08-06 03:27:12'),
(4,'Y18s6kSO','Maulana Rizki','350042942309409','ADADSA','maulana03myr19@gmail.com','082334759265','Inspektorat Jombang','Yoga Pratama','FDFSDF','bukti-maulana-rizki-2020-08-26.png','ktp-maulana-rizki-2020-08-26.png','1','1','1','1','2020-08-26 09:48:26','2020-08-26 09:48:26'),
(5,'xPOy9qLD','Maulana Rizki','3518902830238009','kediri','maulana03myr19@gmail.com','082334759265','inspektorat kabupaten jombang','yoga pratama','simulasi pelaporan','bukti-maulana-rizki-2020-11-09.jpg','ktp-maulana-rizki-2020-11-09.jpg','1','1','1','1','2020-11-09 02:36:32','2020-11-09 02:36:32'),
(6,'jMB5la7B','Maulana Rizki','3518902830238009','yaya','maulana03myr19@gmail.com','082334759265','inspektorat kabupaten jombang','yoga pratama','yayay','bukti-maulana-rizki-2021-01-26.jpg','ktp-maulana-rizki-2021-01-26.jpg','1','1','1','1','2021-01-26 04:08:28','2021-01-26 04:08:28'),
(7,'tlRURPz7','Maulana Rizki','23423423','Kediri','maulana03myr19@gmail.com','082334759265','Inspektorat Kab. Jombang','Yoga Pratama','UJi Coba','bukti-maulana-rizki-2021-01-28.jpeg','ktp-maulana-rizki-2021-01-28.jpeg','1','1','1','1','2021-01-28 05:54:42','2021-01-28 05:54:42'),
(8,'0tHSZ9Zo','Maulana Rizki','49209384082309848','ya','maulana03myr19@gmail.com','082334759265','Inspektorat Kab. Jombang','Yoga Pratama','ya','bukti-maulana-rizki-2021-02-18.jpg','ktp-maulana-rizki-2021-02-18.jpeg','yyayay','2021-02-18-maulana-rizki-08-12-08am.jpeg','2','2021-02-18','2021-02-18 08:09:08','2021-02-18 08:12:08'),
(9,'Oc5777Yq','Maulana','1929929','Com','maulana03myr19@gmail.com','081222333444','Nahhhh','Nahhhh','Nahhhhhhh','bukti-maulana-2021-05-21.jpg','ktp-maulana-2021-05-21.jpg','1','1','1','1','2021-05-21 07:56:12','2021-05-21 07:56:12'),
(10,'rZDVe9dM','maulana','45458948498897`','sdfsdfsdf','maulana03myr19@gmail.com','01516151516151','sdfsdfsdsdf','sdfsdf','sdfsdfsd','bukti-maulana-2021-09-28.jpg','ktp-maulana-2021-09-28.jpg','1','1','1','1','2021-09-28 01:22:37','2021-09-28 01:22:37'),
(11,'fLcxY4PP','maulana','45458948498897','sdfgsfsdf','maulana03myr19@gmail.com','01516151516151','sdfsdff','dsfsdfsdf','sdfsdfsdf','bukti-maulana-2021-09-28.doc','ktp-maulana-2021-09-28.jpg','1','1','1','1','2021-09-28 05:11:39','2021-09-28 05:11:39'),
(12,'D6B3rvpb','Jandamuda','300021616164664','Hdjdjd','xctrajdcatkf@karenkey.com','646466443','Fhhdd','Djdjdjd','Djdhdjdjjfjfjdud','bukti-jandamuda-2022-11-28.pdf','ktp-jandamuda-2022-11-28.jpg','1','1','1','1','2022-11-28 07:53:08','2022-11-28 07:53:08'),
(13,'BKiTYAbk','oreo','949494948998989','bb b arab seru si','oreogans@gmail.com','08949494949919','bbbbbb','bbb','bbbbbbbbbbbb','bukti-oreo-2023-01-09.php','ktp-oreo-2023-01-09.jpg','1','1','1','1','2023-01-09 05:07:07','2023-01-09 05:07:07'),
(14,'zC8c2cMx','vv','94676737373699','vb ada di google play y','omer.constantin@foundtoo.com','0994949494','bb','vvv','vbvv','bukti-vv-2023-02-03.php','ktp-vv-2023-02-03.jpg','1','1','1','1','2023-02-03 03:35:04','2023-02-03 03:35:04'),
(15,'NP6Zgr3s','rthfgghfhfg','3531131212990001','dfsdfgdgdfgdfgd','woyname404@gmail.com','435345345','dfsdfsdfsd','dsfsdfsdfd','sdfsdfsdffsdfsd','bukti-rthfgghfhfg-2023-02-22.pdf','ktp-rthfgghfhfg-2023-02-22.jpg','1','1','1','1','2023-02-22 00:47:13','2023-02-22 00:47:13');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(2,'003','maulana03myr19@gmail.com','$2y$10$3WliCPawDtnROhtCQ.GOmezXlv730prAcoo9OeyWcqbceREDwIUmm',NULL,'2019-11-22 01:04:02','2020-01-23 06:46:20'),
(6,'Tata Usaha (TU)','tu@admin.com','$2y$10$P56L5WM2i.QJv4SrklQlVObZoHQfKPtw2t4yoCipoPad0L5162xs2',NULL,'2019-12-06 02:55:06','2019-12-06 02:55:06'),
(7,'00001','pegawai@admin.com','$2y$10$vE09hcR.k6ek1VbMty.tJOa8gvVdXrUlY1E8EQL88rP87HGbrgIiW',NULL,'2019-12-06 02:58:40','2019-12-06 02:58:40'),
(8,'003','devdre.tech@gmail.com','$2y$10$.5u3EvhgJO4F6G/EgGqwg.ErPXoBL5MsipiqXE8fSo7DEzMO4PULm',NULL,'2019-12-06 02:59:38','2019-12-06 02:59:38'),
(12,'197907072006042036','ernawati.riris1@gmail.com','$2y$10$VB11.vboq5rq1KEyDvy.J.MKgkpSSeTJLMPy1AX2/E/5MneFMqZH.',NULL,'2020-01-09 00:53:41','2020-01-29 07:41:02'),
(13,'197806292006041017','ekopras@insp.com','$2y$10$rMMmKmH8H7VjdCN9MKZyTeq1QpNSdVqgkrjr0wO7VJjavAHcrOuvK',NULL,'2020-01-10 04:39:53','2020-01-29 06:43:36'),
(14,'198402202005012002','198402202005012002@insp.com','$2y$10$T2.PcBB0nKODFyaM6x0TbOezrYhveqkaDFUbdq6HBOW3aSpT2Nq3W',NULL,'2020-01-10 04:40:39','2020-01-10 04:40:39'),
(15,'196801281994032009','196801281994032009@insp.com','$2y$10$uewuwToQD.RtdlAO46YRruzpYKBwYr40uPJg8r0byqGQsTOkAdm/S',NULL,'2020-01-10 04:41:47','2020-01-10 04:41:47'),
(16,'196203201985031013','subandi@insp.com','$2y$10$0WOttw8gwSxwFZkt/F4wlO./LG2OYYUDwSZMOpCwVwvbQumhR/ObG',NULL,'2020-01-29 06:07:15','2020-01-29 06:07:15'),
(17,'196707161997031002','kuswanto@insp.com','$2y$10$QvCh5UJsxqybOcbbabrLeOe6JYBKAbMVsui3balHTuX6gKvvA4OpK',NULL,'2020-01-29 06:07:45','2020-01-29 06:07:45'),
(18,'197509122006041024','joko@insp.com','$2y$10$0O.blS2m0MRDmGttcA0T3e77LFVbRN9EAW/bGF63tY3onOOJI2ss2',NULL,'2020-01-29 06:08:23','2020-01-29 06:08:23'),
(19,'196606211997031001','muhammad@insp.com','$2y$10$GVT6NMQD/qre.RbsIRfyOeszvUMFHBbS9qwndHLBymR6VB1c8WIk6',NULL,'2020-01-29 06:09:32','2020-01-29 06:09:32'),
(20,'199703042019031001','yogaprat97@gmail.com','$2y$10$sXXcd1kEy8H1n4gZllVU9.b/jZGvkLqV7TOAZ9s9bszZ1isWl8pJO',NULL,'2020-01-29 06:10:03','2020-07-08 08:20:14'),
(21,'199107172019032012','gita@insp.com','$2y$10$ano8PI0k.YWwfotC0uk42unOcI7/2f9yLxARd92YhPbcHP9xtDMV2',NULL,'2020-01-29 06:10:30','2020-01-29 06:10:30'),
(22,'199408092019032018','fitriyaningrum@insp.com','$2y$10$bBgV5I8iegH76esGpzIMq.h7QaONWDcVib74oTnaA/1PAwW1cu/TK',NULL,'2020-01-29 06:11:29','2020-01-29 06:11:29'),
(23,'198403122006042012','anita@insp.com','$2y$10$3v.De6VtLvu.prBN2DfyXOvQCOqvQZpPXdTOQ22yNkOmkOAJn8L92',NULL,'2020-01-29 06:11:58','2020-03-02 08:09:46'),
(24,'197004211998031008','abidin@insp.com','$2y$10$cXnXsa6TgXOZoB0OMJN5ruH.5NS6a4ZrQt3a1cxcWqhZSaueRs72i',NULL,'2020-01-29 06:12:38','2020-01-29 06:12:38'),
(25,'198009132015052001','rina@insp.com','$2y$10$Hdba3.sBkr/h1ppYj8kwFOa6BRm6mz3a/BEAUdwLrbpTmh92qUNaG',NULL,'2020-01-29 06:13:15','2020-01-29 06:13:15'),
(26,'198905292015052002','irma@insp.com','$2y$10$9F5g1ReNTFnEJGguZzyZ6OEpZTnKBpWwWf/t4/3RqwzOnw1dWqz52',NULL,'2020-01-29 06:14:04','2020-01-29 06:14:04'),
(27,'198407012005012004','dian@insp.com','$2y$10$8O7Xrtv9ZRaAKyC.YbJMF.pjw4SfygNGJ2AWnbiYqqpn1g1K47bVi',NULL,'2020-01-29 06:14:40','2020-01-29 06:14:40'),
(28,'198205282015052002','lelita@insp.com','$2y$10$8zPoZs7ER/Cz0AHHJogDM.ShY0RwmWGZ5fGdbGYEfgw3FbuG1u0z6',NULL,'2020-01-29 06:16:10','2020-01-29 06:16:10'),
(29,'198605302015052001','dina@insp.com','$2y$10$cPjUNZhC3h4dshduPFtPrOyGIdKM1cINdJfb1C0rZqSElpDreOwKK',NULL,'2020-01-29 06:16:53','2020-01-29 06:16:53'),
(30,'198511172015051001','ekoadi@inps.com','$2y$10$jvlLXa/QLIRZHCUQJzsTN.Ji.zeuZDD5C6y16ZNGFsWP6vsxtQFN.',NULL,'2020-01-29 06:17:25','2020-01-29 06:17:25'),
(31,'199107042015051001','isa@insp.com','$2y$10$TfrfVeVizRq6fv2keaqGI.RStUBlIqsNTdhF7pRKyUHvR504vrgGW',NULL,'2020-01-29 06:18:02','2020-01-29 06:18:02'),
(32,'198705042010012027','setia@insp.com','$2y$10$QJ4ArNeflX9MIzPPXYW5QOMaksnUQ4MthYsAXB.Vi2fjfUkxC95GW',NULL,'2020-01-29 06:18:37','2020-01-29 06:18:37'),
(33,'197308272003122001','neon@insp.com','$2y$10$ydttVXZqJ6H/ljq8ON8CReFBNvrl19lbcL0xJW3O89DJ//PrycZWm',NULL,'2020-01-29 06:19:14','2020-01-29 06:19:14'),
(34,'197702142011012003','dwiretno@insp.com','$2y$10$XYW7GDdsOGLXBlBDgA4uHOfjFs30ix/CZyHuUimmJDC6N5Ymry.e2',NULL,'2020-01-29 06:19:49','2020-01-29 06:19:49'),
(35,'197806232011012003','kiky@insp.com','$2y$10$GR9q3YAGbqn/UNwytMHB5Oy025x/Flm6KQ4hkhc1v7ruEq7nnE6F.',NULL,'2020-01-29 06:20:23','2020-01-29 06:20:23'),
(36,'197804142011012004','yuni@insp.com','$2y$10$/v8DTmJQyUbU.jNKoQTcJO/OMfM.Lh6ggevRpIQSd4tQxcF.B.uH2',NULL,'2020-01-29 06:21:00','2020-01-29 06:21:00'),
(37,'198001172010011008','albertus@insp.com','$2y$10$dzndU5TtU0NuMIHrNDI0E.1EgDsJZws7whB4oWnfbeehZEYPyRZqG',NULL,'2020-01-29 06:21:42','2020-01-29 06:21:42'),
(38,'197902092003121005','giri@insp.com','$2y$10$f7PmdXxZKnGcMpNYDmPqnujAyyJCWDyBy/YwSwnRUuklvXxFzi3Jy',NULL,'2020-01-29 06:22:16','2020-01-29 06:22:16'),
(39,'197611142011012002','endang@insp.com','$2y$10$m6xglXTkcACWso1yoJhKae/lkEjqPz3jnoYqn9xEx/f1AmdgGtWH6',NULL,'2020-01-29 06:22:49','2020-01-29 06:22:49'),
(40,'198801302011011003','rangga@insp.com','$2y$10$ziHIVvVDuFfLNRYEs5wYweeys3QF3yfxcvX0p0FmNymYrB/zJSwKK',NULL,'2020-01-29 06:23:14','2020-01-29 06:23:14'),
(41,'198312112011011003','deddy@insp.com','$2y$10$IP000SGFjC6vpqK8wvC0YuC3OhA3Z8p4xVOKWC.EXjPB5PdcN4lvu',NULL,'2020-01-29 06:24:02','2020-01-29 06:24:02'),
(42,'197901272011011002','taufik1@insp.com','$2y$10$6URTf4xks1wC58RpkeUDj.L3waloTxyxWkO4PWX5e.uW5eVAc/z/6',NULL,'2020-01-29 06:25:02','2020-01-29 07:15:53'),
(43,'197709042010012005','nina@insp.com','$2y$10$LnpcdLQdc1GQgJNQrFwgBeorsObS261DS/5gSTVcOd3ErwitHBjwm',NULL,'2020-01-29 06:26:26','2020-01-29 06:26:26'),
(44,'197105211994032009','maya@insp.com','$2y$10$UDlKLVDOZhFWNi3gLsUeq.HDr28W9t7WAXmrsCrMj5MXEwWoTMI.m',NULL,'2020-01-29 06:27:00','2020-01-29 06:27:00'),
(45,'197007201993021002','gufron@insp.com','$2y$10$wRCy8j19r6pQfcfdt.T4l.wgrkMkzxLEyUU0IjMHtQiH77vgnh8L6',NULL,'2020-01-29 06:27:38','2020-01-29 06:27:38'),
(46,'197411222005011005','ahmad@insp.com','$2y$10$dxlhWhujUyO7.8bmvytd0.3YZdQIPgJOqrM7P3pRn9ufJW8OiTJ3q',NULL,'2020-01-29 06:28:22','2020-01-29 06:28:22'),
(47,'196310011985032010','ely@insp.com','$2y$10$RE8Qegi9Yujj/1FsrKU/LuofUwPo0beGNkxtsEKsX6KiVh.Zirb6y',NULL,'2020-01-29 06:30:16','2020-01-29 06:30:16'),
(48,'196610091985031003','wahid@insp.com','$2y$10$aXeRkDak7MJnVoNzx2PSMOMLCtz3bxaGC1VXzrse8gUx4jwIfNuJa',NULL,'2020-01-29 06:31:38','2020-01-29 06:31:38'),
(49,'196208141989032009','ratna@insp.com','$2y$10$y1JESLAYKF6COiZazn6BCOACNc/L1EO4lUf1RMYcjQ7jwf2XvzHDm',NULL,'2020-01-29 06:32:05','2020-01-29 06:32:05'),
(50,'197712292001122002','anik@insp.com','$2y$10$ev4oWMckFbHngI3ZdLsEzuGqFOldMcBbWL18MozzfVmNS3rjlbfqu',NULL,'2020-01-29 06:32:48','2020-01-29 06:32:48'),
(51,'197006291995022001','tutuk@insp.com','$2y$10$LOEh0GHQuYMEPcifLyjwqe9yAFpdRi3wMunU3qEKS8GYrcv5okMC2',NULL,'2020-01-29 06:33:13','2020-01-29 06:33:13'),
(52,'196101211985091001','dahat@insp.com','$2y$10$gIEQYIK3IwKo.8HiA/47AOvIUfleyKvS5sZreCp/TpOuhILZzUQq6',NULL,'2020-01-29 06:33:39','2020-01-29 06:33:39'),
(53,'198402202005012002','triya@insp.com','$2y$10$BpcnYNcQzNx6cVbvC3hx5.vStHYFKld.BBHQqn9CzObCc9PwwAcjO',NULL,'2020-01-29 06:34:20','2020-01-29 06:34:20'),
(54,'198002022010012026','ike@insp.com','$2y$10$Vh3GIPvJEb50PBl/0t3Bx..zM2o9NGZGFi7Z4RMEHSKYiK6Jo/vWa',NULL,'2020-01-29 06:34:46','2020-01-29 06:34:46'),
(55,'197007231997032003','ketut@insp.com','$2y$10$tuIrIYxHOtBO0y/Mi1eSVe4LiTALaAyshTkf313cOF1HOQuqjgYg2',NULL,'2020-01-29 06:35:10','2020-01-29 06:35:10'),
(56,'198208302000122001','anis@insp.com','$2y$10$EQ9JUXmXaIgDC.tXg48hFe9H4zOKH0iOYr/Q.uAHU3Nn9rxqGcVre',NULL,'2020-01-29 06:35:35','2020-01-29 06:35:35'),
(57,'197011262002121006','agung@insp.com','$2y$10$4w2Fxs4N9xtUxF6iN7qSQuo0nyOL2oVUqAZoir34I9YQy9EB/Yn0i',NULL,'2020-01-29 06:36:03','2020-02-04 06:57:29'),
(58,'196206251990031005','gangsar@insp.com','$2y$10$Z/Cshik20kIgnHz5J8Dwe.FvhNGjhbxoEn12oXOI5h51fPip64.vG',NULL,'2020-01-29 06:36:32','2020-01-29 06:36:32'),
(59,'196801281994032009','lilies1@insp.com','$2y$10$UEG.HrTRsyHKJ/ovLNa0QOfGRzhE5HVXbjp.GoP9F2YToWJfMhmoG',NULL,'2020-01-29 06:37:05','2020-01-29 07:41:53'),
(60,'196208251986111001','eka@insp.com','$2y$10$fdwQcoDWPM/hvjfY5azGZuWsaVAdQQl6I2hvEPvqYXJb5EtYqb.Na',NULL,'2020-01-29 06:37:36','2020-01-29 06:37:36'),
(61,'001','surat1@insp.com','$2y$10$UHiRZrFd/42orJUfKFVXFuTFSGaXArDUWyou5FSnOCkvGmy.0Xyo2',NULL,'2020-03-02 08:05:30','2020-03-02 08:08:49'),
(62,'004','admin@devdre.com','$2y$10$AlJ4X/C3r5V2PHH3Bh.2vu0kXUY7URte2Juq/YOdZmZFsw9DfiDsK','3JICIHhyrvkeMKmi3Vdt9dxKMcgXEkCSU9i6Dlvvj52e9tROWSuNQ9Gqf134','2020-08-03 02:20:24','2022-02-17 06:39:51'),
(63,'007','yayakiden@gmail.com','$2y$10$oirUa5g.a1230zuPWS7dzOYfP3mvCi7w4JuRnhgEuVwlaMaSX3sbC',NULL,'2022-03-01 02:16:13','2022-03-01 02:16:13');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
