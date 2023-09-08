/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.1.31-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `tb_jabatan` (
	`id` bigint (20),
	`nama_jabatan` varchar (573),
	`created_by` varchar (573),
	`updated_by` varchar (573),
	`created_at` timestamp ,
	`updated_at` timestamp 
); 
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('1','Fungsional Umum','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:42:22','2020-01-06 02:49:39');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('2','Auditor Penyelia','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-06 02:42:41','2021-04-13 12:16:11');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('3','Auditor Kepegawaian','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-06 02:42:56','2021-04-13 12:16:20');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('4','Auditor Pertama','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:43:11','2020-01-06 02:43:11');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('5','Auditor Muda','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:43:22','2020-01-06 02:43:22');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('6','Auditor Madya','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:43:34','2020-01-06 02:43:34');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('7','P2UPD Ahli Muda','MAULANA RIZKI, S.Kom','TRIYA WIJAYANINGRUM, SAB','2020-01-06 02:43:56','2022-02-22 03:17:25');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('8','Perencana Ahli Muda','MAULANA RIZKI, S.Kom','TRIYA WIJAYANINGRUM, SAB','2020-01-06 02:44:15','2022-02-11 06:55:33');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('9','Kepala Sub Bagian Umum, Keuangan dan Aset','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:44:35','2021-04-08 08:55:54');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('10','Inspektur Pembantu Bidang Investigasi','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-06 02:45:08','2021-04-13 12:22:27');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('11','Inspektur Pembantu Bidang Keuangan dan Aset','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-06 02:45:28','2021-04-13 12:22:51');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('12','Inspektur Pembantu Bidang Pembangunan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:45:53','2020-01-06 02:45:53');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('13','Inspektur Pembantu Bidang Pemerintahan, Ekonomi dan Kesejahteraan Sosial','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2020-01-06 02:46:15','2021-04-13 12:24:02');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('14','Sekretaris','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:46:31','2020-01-06 02:46:31');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('15','Inspektur Kabupaten Jombang','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-06 02:46:47','2020-01-06 02:46:47');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('16','Pengadministrasi Umum','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:34:15','2020-01-29 04:34:15');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('17','Analis Pelaporan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:34:43','2020-01-29 04:34:43');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('18','Pengelola Dokumen Perizinan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:35:19','2020-01-29 04:35:19');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('19','Pelaksana','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:35:29','2020-01-29 04:35:29');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('20','Pengelola Barang Milik Negara','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:35:52','2020-01-29 04:35:52');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('21','Pengadministrasi Persuratan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2020-01-29 04:37:46','2020-01-29 04:37:46');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('22','Pensiun','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-02-17 04:38:12','2021-02-17 04:38:12');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('23','Ahli Pertama - Auditor','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-02-17 04:39:45','2021-02-17 04:39:45');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('24','Calon Pelaksana/Terampil - Auditor','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-02-17 04:39:55','2021-04-09 01:22:41');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('25','Pengelola Kepegawaian','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2021-04-08 08:57:04','2021-04-13 12:24:47');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('26','Pengelola Keuangan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-08 08:57:15','2021-04-08 08:57:15');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('27','Pengadministrasi Perencanaan dan Program','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-13 03:20:20','2021-04-13 04:29:23');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('28','Pengadministrasi Kepegawaian','MAULANA RIZKI, S.Kom','MOHAMAD FAIZ, A.Md.','2021-04-13 04:28:20','2021-04-13 12:25:16');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('29','Pengadministrasi Keuangan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-13 04:29:05','2021-04-13 04:29:05');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('30','Pengelola Evaluasi Tindak Lanjut Laporan Hasil Pemeriksaan','MAULANA RIZKI, S.Kom','MAULANA RIZKI, S.Kom','2021-04-13 04:30:50','2021-04-13 04:30:50');
insert into `tb_jabatan` (`id`, `nama_jabatan`, `created_by`, `updated_by`, `created_at`, `updated_at`) values('31','Bendahara','ABRAHAM BASWARA PUTRA, A.Md.','ABRAHAM BASWARA PUTRA, A.Md.','2021-04-16 01:37:03','2021-04-16 01:37:03');
