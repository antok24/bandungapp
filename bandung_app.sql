-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for bandung_app
CREATE DATABASE IF NOT EXISTS `bandung_app` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bandung_app`;

-- Dumping structure for table bandung_app.biodatas
CREATE TABLE IF NOT EXISTS `biodatas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_mahasiswa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.biodatas: ~12 rows (approximately)
/*!40000 ALTER TABLE `biodatas` DISABLE KEYS */;
REPLACE INTO `biodatas` (`id`, `nama_mahasiswa`, `alamat_mahasiswa`, `created_at`, `updated_at`) VALUES
	(1, 'Dewi', 'Kapas. Bojonegoro', '2019-01-19 09:43:23', '2019-01-19 10:12:48'),
	(2, 'Antok', 'Kalitidu, Bojonegoro', '2019-01-19 09:46:00', '2019-01-19 10:12:35'),
	(5, 'Nabila', 'Kalitidu, Bojonegoro, Jawa Timur', '2019-01-19 09:46:35', '2019-01-19 12:13:40'),
	(7, 'Dina Thaib', 'Bandung', '2019-01-19 10:22:23', '2019-01-19 10:22:23'),
	(8, 'Mufid', 'Malang Raya', '2019-01-19 12:13:58', '2019-01-19 12:13:58'),
	(9, 'Fajar', 'Yogyakarta', '2019-01-19 12:14:13', '2019-01-19 12:14:13'),
	(10, 'Mahardika', 'Bojonegoro', '2019-01-19 12:14:27', '2019-01-19 12:14:27'),
	(12, 'Anjas', 'Malang', '2019-01-19 12:15:08', '2019-01-19 12:15:08'),
	(15, 'Dewi', 'Bandung', '2019-02-19 07:21:51', '2019-02-19 07:21:51'),
	(16, 'Dewi', 'Jakarta', '2019-02-20 02:21:25', '2019-02-20 02:21:25'),
	(17, 'Ajeng', 'Surabaya', '2019-02-20 02:23:08', '2019-02-20 02:23:08'),
	(18, 'Fian', 'Bandung', '2019-02-20 02:23:17', '2019-02-20 02:23:17');
/*!40000 ALTER TABLE `biodatas` ENABLE KEYS */;

-- Dumping structure for table bandung_app.mgroup
CREATE TABLE IF NOT EXISTS `mgroup` (
  `id_group` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namagroup` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.mgroup: ~6 rows (approximately)
/*!40000 ALTER TABLE `mgroup` DISABLE KEYS */;
REPLACE INTO `mgroup` (`id_group`, `namagroup`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', NULL, NULL),
	(2, 'Admin UPBJJ', NULL, NULL),
	(3, 'Manajer', NULL, NULL),
	(4, 'Direktur', NULL, NULL),
	(5, 'Admin Surat UPBJJ', NULL, NULL),
	(6, 'Admin Surket UPBJJ', NULL, NULL),
	(7, 'Admin IJAZAH', NULL, NULL);
/*!40000 ALTER TABLE `mgroup` ENABLE KEYS */;

-- Dumping structure for table bandung_app.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.migrations: ~22 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_01_18_152909_create_biodatas_table', 2),
	(4, '2019_02_20_020847_add_username_to_users', 3),
	(5, '2019_03_15_130824_create_pkbjj_table', 4),
	(6, '2019_03_15_131629_create_programstudi_table', 5),
	(7, '2019_03_15_131759_create_nosertifikat_table', 6),
	(8, '2019_03_15_131851_create_m_sertifikat_table', 6),
	(9, '2019_03_15_132246_create_group_table', 7),
	(10, '2019_03_15_132411_add_id_group_to_table_users', 8),
	(11, '2019_03_16_123049_create_m_sertifikat_pkbjj_table', 9),
	(12, '2019_03_17_131908_create_m_sertifikat_osmb', 10),
	(13, '2019_03_17_132038_create_m_sertifikat_tutor', 10),
	(15, '2019_03_20_045945_create_surat_keluar_table', 12),
	(16, '2019_03_20_050024_create_t_disposisi_table', 12),
	(20, '2019_03_20_132651_create_surat_masuk_table', 13),
	(21, '2019_03_22_124127_create_t_surket_mhs_aktif_table', 14),
	(22, '2019_03_22_135913_add_alamat_mahasiswa_to_t_surket_mhs_aktif', 15),
	(23, '2019_03_24_033133_add_column', 16),
	(24, '2019_03_27_030318_add_nip_ttd_column', 17),
	(25, '2019_03_27_030548_create_m_pejabat_table', 17),
	(26, '2019_03_27_031845_add_sub_bagian_column', 18),
	(27, '2019_03_28_043709_create_sk_ban_pt_table', 19),
	(28, '2019_03_28_101151_create_t_surket_ijazah_table', 20),
	(29, '2019_04_02_093218_create_t_foto_ijazah_table', 21),
	(30, '2019_04_02_093246_create_t_ijazah_table', 21);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table bandung_app.m_pejabat
CREATE TABLE IF NOT EXISTS `m_pejabat` (
  `nip` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_bagian` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.m_pejabat: ~4 rows (approximately)
/*!40000 ALTER TABLE `m_pejabat` DISABLE KEYS */;
REPLACE INTO `m_pejabat` (`nip`, `nama_pegawai`, `jabatan`, `sub_bagian`, `created_at`, `updated_at`) VALUES
	('196310211988031003', 'Drs. Enang Rusyana, M.Pd.', 'Kepala', '', NULL, NULL),
	('197611202005012001', 'Merry Monica, S.Tp', 'Plh. Kepala', 'Kasubag Tata Usaha', NULL, NULL),
	('197710022005012001', 'Imas Maesaroh, S.E., M.Si.', 'Plh. Kepala', 'Pj. Registrasi dan Ujian', NULL, NULL),
	('198502212008121002', 'Angga Sucitra H, S.E., M.Si', 'Plh. Kepala', 'Pj. Bahan Ajar dan Tutorial', NULL, NULL);
/*!40000 ALTER TABLE `m_pejabat` ENABLE KEYS */;

-- Dumping structure for table bandung_app.m_sertifikat
CREATE TABLE IF NOT EXISTS `m_sertifikat` (
  `kode_sertifikat` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kegiatan` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_sertifikat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.m_sertifikat: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_sertifikat` DISABLE KEYS */;
REPLACE INTO `m_sertifikat` (`kode_sertifikat`, `nama_kegiatan`, `tahun`, `created_at`, `updated_at`) VALUES
	('2401', 'Pelatihan Keterampilan Belajar Jarak Jauh', '', NULL, NULL),
	('2402', 'Orientasi Studi Mahasiswa Baru', '', NULL, NULL),
	('2403', 'Pelatihan Tutor', '', NULL, NULL);
/*!40000 ALTER TABLE `m_sertifikat` ENABLE KEYS */;

-- Dumping structure for table bandung_app.m_sertifikat_osmb
CREATE TABLE IF NOT EXISTS `m_sertifikat_osmb` (
  `nim` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_studi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kegiatan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebagai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pelaksanaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.m_sertifikat_osmb: ~10 rows (approximately)
/*!40000 ALTER TABLE `m_sertifikat_osmb` DISABLE KEYS */;
REPLACE INTO `m_sertifikat_osmb` (`nim`, `nama`, `program_studi`, `kode_kegiatan`, `no_sertifikat`, `sebagai`, `tgl_pelaksanaan`, `tgl_sertifikat`, `created_at`, `updated_at`) VALUES
	('012345678', 'Dwi Anto', 'Dwi Anto', '2402', '2024/UN.31.UPBJJ.15/PP/2019', 'Peserta', '9 Maret 2019', '9 Maret 2019', '2019-03-17 21:13:56', '2019-03-17 21:13:56'),
	('035213002', 'Ayip', 'Akuntansi', '2402', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 14:45:16', '2019-03-17 14:45:16'),
	('035213003', 'Rizal', 'Ilmu Hukum', '2402', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 14:45:16', '2019-03-17 14:45:16'),
	('035213004', 'Calam', 'Manajemen', '2402', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 14:45:16', '2019-03-17 14:45:16'),
	('035213005', 'Deni', 'Akuntansi', '2402', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 14:45:16', '2019-03-17 14:45:16'),
	('035213006', 'Mamen', 'Perpustakaan', '2402', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 14:45:16', '2019-03-17 14:45:16'),
	('035213007', 'Mizwar', 'Ilmu Administrasi Bisnis', '2402', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 14:45:16', '2019-03-17 14:45:16'),
	('035213008', 'Jerry', 'Ilmu Administrasi Bisnis', '2402', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 14:45:16', '2019-03-17 14:45:16'),
	('035213009', 'Dono', 'Manajemen', '2402', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 14:45:16', '2019-03-17 14:45:16'),
	('035213010', 'Hakim', 'Manajemen', '2402', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 14:45:16', '2019-03-17 14:45:16');
/*!40000 ALTER TABLE `m_sertifikat_osmb` ENABLE KEYS */;

-- Dumping structure for table bandung_app.m_sertifikat_pkbjj
CREATE TABLE IF NOT EXISTS `m_sertifikat_pkbjj` (
  `nim` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kegiatan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebagai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pelaksanaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.m_sertifikat_pkbjj: ~10 rows (approximately)
/*!40000 ALTER TABLE `m_sertifikat_pkbjj` DISABLE KEYS */;
REPLACE INTO `m_sertifikat_pkbjj` (`nim`, `nama`, `kode_kegiatan`, `no_sertifikat`, `sebagai`, `tgl_pelaksanaan`, `tgl_sertifikat`, `created_at`, `updated_at`) VALUES
	('035213001', 'Diana', '2401', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 13:11:51', '2019-03-17 13:11:51'),
	('035213002', 'Ayip', '2401', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 13:11:51', '2019-03-17 13:11:51'),
	('035213003', 'Rizal', '2401', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 13:11:51', '2019-03-17 13:11:51'),
	('035213004', 'Calam', '2401', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 13:11:51', '2019-03-17 13:11:51'),
	('035213005', 'Deni', '2401', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 13:11:51', '2019-03-17 13:11:51'),
	('035213006', 'Mamen', '2401', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 13:11:51', '2019-03-17 13:11:51'),
	('035213007', 'Mizwar', '2401', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 13:11:51', '2019-03-17 13:11:51'),
	('035213008', 'Jerry', '2401', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 13:11:51', '2019-03-17 13:11:51'),
	('035213009', 'Dono', '2401', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 13:11:51', '2019-03-17 13:11:51'),
	('035213010', 'Hakim', '2401', '001/UN31.UPBJJ.15/PP/2019', 'Peserta', '12 Desember 2019', '12 Desember 2019', '2019-03-17 13:11:51', '2019-03-17 13:11:51');
/*!40000 ALTER TABLE `m_sertifikat_pkbjj` ENABLE KEYS */;

-- Dumping structure for table bandung_app.m_sertifikat_tutor
CREATE TABLE IF NOT EXISTS `m_sertifikat_tutor` (
  `id_tutor` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kegiatan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebagai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pelaksanaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tutor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.m_sertifikat_tutor: ~7 rows (approximately)
/*!40000 ALTER TABLE `m_sertifikat_tutor` DISABLE KEYS */;
REPLACE INTO `m_sertifikat_tutor` (`id_tutor`, `nama`, `kode_kegiatan`, `no_sertifikat`, `sebagai`, `tgl_pelaksanaan`, `tgl_sertifikat`, `created_at`, `updated_at`) VALUES
	('240004', 'Rizal', '2403', '1730/UN.31.UPBJJ.15/PP/2019', 'Peserta', '16 Maret 2019', '16 Maret 2019', '2019-03-17 15:30:23', '2019-03-17 15:30:23'),
	('240005', 'Calam', '2403', '1730/UN.31.UPBJJ.15/PP/2019', 'Peserta', '16 Maret 2019', '16 Maret 2019', '2019-03-17 15:30:23', '2019-03-17 15:30:23'),
	('240007', 'Mamen', '2403', '1730/UN.31.UPBJJ.15/PP/2019', 'Peserta', '16 Maret 2019', '16 Maret 2019', '2019-03-17 15:30:23', '2019-03-17 15:30:23'),
	('240008', 'Mizwar', '2403', '1730/UN.31.UPBJJ.15/PP/2019', 'Peserta', '16 Maret 2019', '16 Maret 2019', '2019-03-17 15:30:23', '2019-03-17 15:30:23'),
	('240009', 'Jerry', '2403', '1730/UN.31.UPBJJ.15/PP/2019', 'Peserta', '16 Maret 2019', '16 Maret 2019', '2019-03-17 15:30:23', '2019-03-17 15:30:23'),
	('240010', 'Dono', '2403', '1730/UN.31.UPBJJ.15/PP/2019', 'Peserta', '16 Maret 2019', '16 Maret 2019', '2019-03-17 15:30:23', '2019-03-17 15:30:23'),
	('240011', 'Hakim', '2403', '1730/UN.31.UPBJJ.15/PP/2019', 'Peserta', '16 Maret 2019', '16 Maret 2019', '2019-03-17 15:30:23', '2019-03-17 15:30:23');
/*!40000 ALTER TABLE `m_sertifikat_tutor` ENABLE KEYS */;

-- Dumping structure for table bandung_app.nosertifikat
CREATE TABLE IF NOT EXISTS `nosertifikat` (
  `no_sertifikat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_sertifikat` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `tgl_sertifikat` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`no_sertifikat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.nosertifikat: ~2 rows (approximately)
/*!40000 ALTER TABLE `nosertifikat` DISABLE KEYS */;
REPLACE INTO `nosertifikat` (`no_sertifikat`, `kode_sertifikat`, `tgl_pelaksanaan`, `tgl_sertifikat`, `created_at`, `updated_at`) VALUES
	('0001/UN31.UPBJJ.15/PP/2019', '1', '2019-03-12', '2019-03-12', '2019-03-15 22:40:55', '2019-03-15 22:40:55'),
	('2001/UN31.UPBJJ.15/PP/2019', '1', '2019-03-13', '2019-03-13', '2019-03-15 22:46:54', '2019-03-15 22:46:54');
/*!40000 ALTER TABLE `nosertifikat` ENABLE KEYS */;

-- Dumping structure for table bandung_app.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table bandung_app.pkbjj
CREATE TABLE IF NOT EXISTS `pkbjj` (
  `nim` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mhs` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ps` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_sertifikat` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.pkbjj: ~0 rows (approximately)
/*!40000 ALTER TABLE `pkbjj` DISABLE KEYS */;
/*!40000 ALTER TABLE `pkbjj` ENABLE KEYS */;

-- Dumping structure for table bandung_app.programstudi
CREATE TABLE IF NOT EXISTS `programstudi` (
  `kode_ps` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_programstudi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_ps`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.programstudi: ~2 rows (approximately)
/*!40000 ALTER TABLE `programstudi` DISABLE KEYS */;
REPLACE INTO `programstudi` (`kode_ps`, `nama_programstudi`, `created_at`, `updated_at`) VALUES
	('53', 'Manajemen', '2019-03-15 21:56:02', '2019-03-15 21:56:02'),
	('54', 'Akuntansi', '2019-03-15 14:50:48', '2019-03-15 14:50:48');
/*!40000 ALTER TABLE `programstudi` ENABLE KEYS */;

-- Dumping structure for table bandung_app.sk_ban_pt
CREATE TABLE IF NOT EXISTS `sk_ban_pt` (
  `id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_program_studi` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_sk_ban_pt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai_sk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_akhir_sk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peringkat` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`nomor_sk_ban_pt`),
  KEY `kode_program_studi` (`kode_program_studi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.sk_ban_pt: ~25 rows (approximately)
/*!40000 ALTER TABLE `sk_ban_pt` DISABLE KEYS */;
REPLACE INTO `sk_ban_pt` (`id`, `kode_program_studi`, `nomor_sk_ban_pt`, `tgl_mulai_sk`, `tgl_akhir_sk`, `peringkat`, `created_at`, `updated_at`) VALUES
	('0001/AKRED/III/2019', '592', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:59:03', '2019-03-29 09:59:03'),
	('0002/AKRED/III/2019', '92', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:59:44', '2019-03-29 09:59:44'),
	('0003/AKRED/III/2019', '501', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 10:00:07', '2019-03-29 10:00:07'),
	('0004/AKRED/III/2019', '580', '259/SK/BAN-PT/Akred/M/I/2018', '9 Januari 2018', '9 Januari 2023', 'C', '2019-03-29 10:02:14', '2019-03-29 10:02:14'),
	('0005/AKRED/III/2019', '91', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:54:15', '2019-03-29 09:54:15'),
	('0006/AKRED/III/2019', '581', '259/SK/BAN-PT/Akred/M/I/2018', '9 Januari 2018', '9 Januari 2023', 'C', '2019-03-29 10:03:12', '2019-03-29 10:03:12'),
	('0007/AKRED/III/2019', '599', '375/SK/BAN-PT/Akred/M/I/2018', '30 Januari 2018', '30 Januari 2023', 'B', '2019-03-29 10:04:40', '2019-03-29 10:04:40'),
	('0008/AKRED/III/2019', '59', '2193/SK/BAN-PT/Akred/S/X/2016', '6 Oktober 2016', '6 Oktober 2021', 'B', '2019-03-29 10:05:57', '2019-03-29 10:05:57'),
	('0009/AKRED/III/2019', '76', '0872/SK/BAN-PT/Akred/S/VI/2016', '10 Juni 2016', '10 Juni 2021', 'B', '2019-03-29 10:07:44', '2019-03-29 10:07:44'),
	('0010/AKRED/III/2019', '95', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:55:43', '2019-03-29 09:55:43'),
	('0013/AKRED/III/2019', '089', '0872/SK/BAN-PT/Akred/S/VI/2016', '10 Juni 2016', '10 Juni 2021', 'B', '2019-03-29 16:19:56', '2019-03-29 16:19:56'),
	('0150/AKRED/III/2019', '593', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:56:57', '2019-03-29 09:56:57'),
	('1', '310', '0180/SK/BAN-PT/Akred/S/IV/2016', '9 April 2016', '9 April 2021', 'B', '2019-03-28 20:31:21', '2019-03-28 20:49:50'),
	('10', '596', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:33:28', '2019-03-29 09:33:28'),
	('11', '597', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:49:46', '2019-03-29 09:49:46'),
	('12', '598', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:51:06', '2019-03-29 09:51:06'),
	('13', '599', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:51:26', '2019-03-29 09:51:26'),
	('2', '079', '0872/SK/BAN-PT/Akred/S/VI/2016', '10 Juni 2016', '10 Juni 2021', 'B', '2019-03-28 20:53:28', '2019-03-28 20:53:28'),
	('3', '119', '0872/SK/BAN-PT/Akred/S/VI/2016', '10 Juni 2016', '10 Juni 2021', 'B', '2019-03-28 20:59:53', '2019-03-28 20:59:53'),
	('4', '117', '0872/SK/BAN-PT/Akred/S/VI/2016', '10 Juni 2016', '10 Juni 2021', 'B', '2019-03-29 09:03:54', '2019-03-29 09:03:54'),
	('5', '90', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:29:59', '2019-03-29 09:29:59'),
	('6', '590', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:30:51', '2019-03-29 09:30:51'),
	('7', '591', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:32:34', '2019-03-29 09:32:34'),
	('8', '594', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:33:01', '2019-03-29 09:33:01'),
	('9', '595', '459/SK/BAN-PT/Akred/M/XI/2014', '21 November 2014', '21 November 2019', 'B', '2019-03-29 09:33:15', '2019-03-29 09:33:15');
/*!40000 ALTER TABLE `sk_ban_pt` ENABLE KEYS */;

-- Dumping structure for table bandung_app.surat_keluar
CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `no_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_kepada` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_sk` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_create` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.surat_keluar: ~1 rows (approximately)
/*!40000 ALTER TABLE `surat_keluar` DISABLE KEYS */;
REPLACE INTO `surat_keluar` (`no_surat`, `tujuan_kepada`, `tujuan_alamat`, `perihal`, `lampiran`, `tgl_surat`, `file_sk`, `user_create`, `created_at`, `updated_at`) VALUES
	('0001/UN31.UPBJJ.15/PP.00.01/2019', 'Universitas Terbuka', 'Pondok Cabe', 'Permohonan', '1 Lampiran', '23-04-2019', 'public/surat-keluar/eZIs0qxTxQK7MSyzs8UFxOSHf4dukf55KbkaYd7E.pdf', 'Dwi Anto,S.Tr.T', '2019-04-02 14:37:11', '2019-04-02 14:37:11');
/*!40000 ALTER TABLE `surat_keluar` ENABLE KEYS */;

-- Dumping structure for table bandung_app.surat_masuk
CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `no_agenda` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Primary key no agenda',
  `no_surat` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'no surat harus ada isi nya',
  `asal_surat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifat_surat` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_agenda` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'status 0 belum disposisi, status 1 terdisposisi, 2 terselesaikan',
  `user_create` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_sm` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`no_agenda`,`no_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.surat_masuk: ~8 rows (approximately)
/*!40000 ALTER TABLE `surat_masuk` DISABLE KEYS */;
REPLACE INTO `surat_masuk` (`no_agenda`, `no_surat`, `asal_surat`, `sifat_surat`, `perihal`, `tgl_agenda`, `tgl_surat`, `status`, `user_create`, `file_sm`, `created_at`, `updated_at`) VALUES
	('0001/AGD/IV/2019', '1369/2018', 'SMK Majalengka', 'Penting', 'Permohonan', '02-04-2019', '30-04-2019', '0', 'Dwi Anto,S.Tr.T', 'public/surat-masuk/2I81M6Q6fstnHVFA2n7YsBtiE78FzCObMK1kT47L.pdf', '2019-04-02 14:51:25', '2019-04-02 14:51:25'),
	('0002/AGD/IV/2019', '329/UN31/2019', 'Badan Kepegawaian Daerah', 'Segera', 'Permohonan', '04-04-2019', '04-04-2019', '0', 'Dwi Anto,S.Tr.T', 'Surat_Masuk_1554346450_Contoh sertifikat PKBM.Pdf', '2019-04-04 09:54:10', '2019-04-04 09:54:10'),
	('0003/AGD/IV/2019', '329/UN32/2019', 'UT Jakarta', 'Segera', 'Permohonan', '04-04-2019', '04-04-2019', '0', 'Dwi Anto,S.Tr.T', '1554346814_label cd psgpm.pdf', '2019-04-04 10:00:14', '2019-04-04 10:00:14'),
	('0004/AGD/IV/2019', '328/UN31/2019', 'UT Jakarta', 'Segera', 'Permohonan', '04-04-2019', '23-04-2019', '0', 'Dwi Anto,S.Tr.T', '1554346964_surat_masuk_Contoh sertifikat PKBM.Pdf', '2019-04-04 10:02:44', '2019-04-04 10:02:44'),
	('0005/AGD/IV/2019', '327/UN31/2019', 'Badan Kepegawaian Daerah', 'Segera', 'Permohonan', '04-04-2019', '30-04-2019', '0', 'Dwi Anto,S.Tr.T', '1554347030_Contoh sertifikat PKBM.Pdf', '2019-04-04 10:03:50', '2019-04-04 10:03:50'),
	('0006/AGD/IV/2019', '323', 'Badan Kepegawaian Daerah', 'Segera', 'Permohonan', '04-04-2019', '23-04-2019', '0', 'Dwi Anto,S.Tr.T', '1554347084_EXPERD-SURATPERNYATAANBULOG backup.pdf', '2019-04-04 10:04:44', '2019-04-04 10:04:44'),
	('0007/AGD/IV/2019', '326', 'Badan Kepegawaian Daerah', 'Rahasia', 'Permohonan', '04-04-2019', '04-04-2019', '0', 'Dwi Anto,S.Tr.T', '1554347183_file_surat_masuk_LKAM.pdf', '2019-04-04 10:06:23', '2019-04-04 10:06:23'),
	('0008/AGD/IV/2019', '328', 'Badan Kepegawaian Daerah', 'Rahasia', 'Permohonan', '04-04-2019', '03-04-2019', '0', 'Dwi Anto,S.Tr.T', '1554347758_file_surat_masuk_LKAM.pdf', '2019-04-04 10:15:58', '2019-04-04 10:15:58');
/*!40000 ALTER TABLE `surat_masuk` ENABLE KEYS */;

-- Dumping structure for table bandung_app.t_disposisi
CREATE TABLE IF NOT EXISTS `t_disposisi` (
  `no_agenda` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ditujukan` char(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_disposisi` date NOT NULL,
  `user_create` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`no_agenda`),
  CONSTRAINT `FK_t_disposisi_surat_masuk` FOREIGN KEY (`no_agenda`) REFERENCES `surat_masuk` (`no_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.t_disposisi: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_disposisi` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_disposisi` ENABLE KEYS */;

-- Dumping structure for table bandung_app.t_foto_ijazah
CREATE TABLE IF NOT EXISTS `t_foto_ijazah` (
  `nim` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mahasiswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_kabko` char(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_mahasiswa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_kabko_pokjar` char(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_pokjar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_program_studi` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_program_studi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_fakultas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ijazah_d` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ijazah_a` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_sk_rektor` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_sk` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_foto` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_terima` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_kirim_ke_pusat` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_create` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `Index 2` (`kode_kabko`,`kode_kabko_pokjar`,`kode_program_studi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.t_foto_ijazah: ~88 rows (approximately)
/*!40000 ALTER TABLE `t_foto_ijazah` DISABLE KEYS */;
REPLACE INTO `t_foto_ijazah` (`nim`, `nik`, `nama_mahasiswa`, `tempat_lahir`, `tgl_lahir`, `nomor_hp`, `kode_kabko`, `alamat_mahasiswa`, `kode_kabko_pokjar`, `alamat_pokjar`, `kode_program_studi`, `nama_program_studi`, `nama_fakultas`, `no_ijazah_d`, `no_ijazah_a`, `nomor_sk_rektor`, `tanggal_sk`, `status_foto`, `tgl_terima`, `tgl_kirim_ke_pusat`, `user_create`, `created_at`, `updated_at`) VALUES
	('017570587', '3273221109930003', 'MOHAMAD REZA PERMANA', 'TANGERANG', '11/09/1993', '082116496301', '32736', 'PERUMAHAN KIARA SARI ASRI 4 NO 17 KIARACONDONG', NULL, NULL, '72', 'Ilmu Komunikasi-S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CA036781/32019102288', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:37:01', '2019-04-09 11:37:01'),
	('017570634', '3273162302910002', 'DENI MULYANTO', 'BANDUNG', '23/02/1991', '085720067263', '32736', 'JL. SUKAPURA RT06 RW01 KIARACONDONG BANDUNG', NULL, NULL, '54', 'Manajemen-S1', 'Fakultas Ekonomi', 'CA037669/42019103176', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:41:32', '2019-04-09 11:41:32'),
	('017570784', '3204264802950001', 'FAHMI MAELANI RAHMA PAUZIAH', 'BANDUNG', '08/02/1995', '089696922254', '32067', 'KP MARGA ASIH RT02/13 KEC NAGREG', NULL, NULL, '78', 'Biologi-S1', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'CA034941/22019100448', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 10:03:46', '2019-04-09 10:03:46'),
	('018116157', '3204360503830004', 'ERWIN GUNAWAN', 'BANDUNG', '05/03/1983', '08562069944', '32067', 'UPTD SMA-SMK WIL.2, JL. WIRANATAKUSUMAH 17 BE.', NULL, NULL, '43', 'Perpustakaan-D2', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CB006891/32019100017', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '08-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-08 11:11:06', '2019-04-08 11:11:06'),
	('018204459', '3273160903940001', 'ARI HAMADA NUGRAHA', 'BANDUNG', '09/03/1994', '087821723152', '32736', 'JL. KEBON JAYANTI RT.08 RW.12 KIARACONDONG', NULL, NULL, '54', 'Manajemen-S1', 'Fakultas Ekonomi', 'CA037672/42019103179', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '05-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-05 14:30:02', '2019-04-05 14:30:02'),
	('018647997', '3273167012910002', 'SUCI FURRY ANGGRAENI', 'BANDUNG', '30/12/1991', '08997901817', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG', NULL, NULL, '43', 'Perpustakaan-D2', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CB006893/32019100019', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 12:01:36', '2019-04-09 12:01:36'),
	('018685997', '3211035301860007', 'SITI RAENIPAH', 'SUMEDANG', '13/01/1986', '081322797421', '32133', 'SDN SAYANG KEC JATINANGOR KAB SUMEDANG', NULL, NULL, '43', 'Perpustakaan-D2', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CB006895/32019100021', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '12-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-12 13:20:04', '2019-04-12 13:20:04'),
	('019302872', '3276104208780006', 'ERNI SUMIRAT', 'BANDUNG', '02/08/1978', '082114163556', '32736', 'BUMI ADIPURA TAHAP 5 JALAN PALEM RAYA NO 1 GEDEBAGE - BANDUNG', NULL, NULL, '87', 'Sastra Inggris Bidang Minat Penerjemahan', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CA036957/32019102464', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:57:52', '2019-04-09 11:57:52'),
	('021406071', '3273126107920006', 'ANESTI DWI SARASWATI', 'BANDUNG', '21/07/1992', '08211712921', '32736', 'JALAN SALENDRO TIMUR II NO IIA BANDUNG', NULL, NULL, '72', 'Ilmu Komunikasi-S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CA036783/32019102290', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:25:32', '2019-04-09 11:25:32'),
	('021423512', '3214051103830006', 'MAMAT RAHMAT', 'PURWAKARTA', '11/02/1983', '087779747588', '32164', 'KP. CILALAWI RT03 RW01 KEC. SUKATANI DS CIANTING UTARA', NULL, NULL, '54', 'Manajemen-S1', 'Fakultas Ekonomi', 'CA037681/42019103188', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '08-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-08 08:52:07', '2019-04-08 08:52:07'),
	('021437653', '3278015609750008', 'SRI NOOR LATHIFAH', 'TASIKMALAYA', '16/09/1975', '081323116417', '32716', 'JL CILEMBANG GUNUNGKONENG GG KELUARGA I NO 6', NULL, NULL, '73', 'Pendidikan Pancasila dan Kewarganegaraan -S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CA034768/12019100275', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 10:07:10', '2019-04-09 10:07:10'),
	('021443403', '3205014305790003', 'DINI HIDAYANTI', 'GARUT', '03/05/1979', '085723439611', '32075', 'JL PASUNDAN NO 49 GARUT', NULL, NULL, '310', 'Ilmu Perpustakaan S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CA035125/32019100632', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:37:28', '2019-04-09 11:37:28'),
	('021450233', '3209166702860006', 'SUHETI', 'PALIMANAN', '27/02/1986', '085320792314', '32117', 'DESA KEDONGDONG KIDUL RT.002/RW.001 KEC. DUKUPUNTANG', NULL, NULL, '310', 'Ilmu Perpustakaan S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CA035128/32019100635', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '12-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-12 10:09:35', '2019-04-12 10:09:35'),
	('021450265', '3209164403930002', 'ARDILA RAHMAWATI', 'CIREBON', '04/03/1993', '087729486008', '32117', 'DESA KEDONGDONGKIDUL RT.001/RW.01 DUKUPUNTANG', NULL, NULL, '310', 'Ilmu Perpustakaan S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CA035129/32019100636', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '12-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-12 10:08:15', '2019-04-12 10:08:15'),
	('021450541', '3205382905870001', 'ARDI ARDIA NUGRAHA', 'BL LIMBANGAN', '29/05/1987', '081320329518', '32075', 'JL. PASUNDAN NO. 49 GARUT', NULL, NULL, '310', 'Ilmu Perpustakaan S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CA035131/32019100638', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '12-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-12 10:14:04', '2019-04-12 10:14:04'),
	('021450606', '320514060690004', 'RIZKY MAHPUDIN', 'GARUT', '06/06/1990', '089616721288', '32075', 'JL. PASUNDAN NO. 49 GARUT', NULL, NULL, '310', 'Ilmu Perpustakaan S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CA035132/32019100639', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '12-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-12 10:13:11', '2019-04-12 10:13:11'),
	('021452427', '3273142006920001', 'AGUNG SURYADI', 'BANDUNG', '20/06/1992', '085721130164', '32736', 'JL. MADTASAN NO. 27 KEL. SUKAMAJU CIBEUNYING KIDUL', NULL, NULL, '83', 'Akuntansi - S1', 'Fakultas Ekonomi', 'CA038488/42019103995', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '08-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-08 09:37:49', '2019-04-08 09:37:49'),
	('021452584', '3205054910890005', 'NIKKI PRIMAWATIE', 'BANDUNG', '09/10/1989', '085659303111', '32075', 'PERUM GRIYA SURYA INDAH NO. 18 GARUT', NULL, NULL, '76', 'Pendidikan Ekonomi - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CA034810/12019100317', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '08-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-08 13:45:44', '2019-04-08 13:45:44'),
	('024109688', '3209272205890004', 'SUHENDI', 'CIREBON', '22/05/1989', '085724700600', '32117', 'BLOK TANGKIL RT.04 RW.01 DESA TANGKIL KEC SUSUKAN', NULL, NULL, '310', 'Ilmu Perpustakaan S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'CA035136/32019100643', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:40:57', '2019-04-09 11:40:57'),
	('812181271', '3204306402840001', 'ELA NURLAELA', 'BANDUNG', '24/02/1984', '082115749678', '32067', 'SDN CINANGGELA', '32067', 'CAB DISDIK KEC PACET', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232491/12019103750', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:07:02', '2019-04-10 08:07:02'),
	('815118473', NULL, 'YUYU JUARSIH', 'BANDUNG', '13/03/1970', '085624423369', '32736', 'JL CIBADUYUT GG MAMAJA RT 03/05 NO 5 BANDUNG', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', NULL, NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '04-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-04 11:16:54', '2019-04-04 11:16:54'),
	('816309525', '3213015804780003', 'IMAS MULYATI', 'SUBANG', '18/04/1978', '081809371672', '32156', 'KMP BORONDONG RT 07 RW 03 SAGALAHERANG', '32736', 'DINAS PENDIDIKAN KAB SUBANG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232496/12019103755', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '12-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-12 10:11:12', '2019-04-12 10:11:12'),
	('818334871', '3204082310730002', 'UJANG SUPRIYATNA', 'BANDUNG', '23/10/1973', '0227500525', '32736', 'KP RANCA CATANG RT05 RW02 DESA TEGAL LUAR KAB BDG', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232499/12019103758', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '08-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-08 10:34:45', '2019-04-08 10:34:45'),
	('819134938', '3273231505890006', 'ANDI HERMAWAN', 'BANDUNG', '15/05/1989', '085720122795', '32736', 'JL CIWASTRA', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232501/12019103760', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-10 10:47:00', '2019-04-10 10:47:00'),
	('820137825', '3204316612890001', 'NARTI NURLAELA', 'BANDUNG', '26/05/1989', '081288468108', '32067', 'SDN SANTOSA', '32067', 'SDN PANGALENGAN 04 / 08', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232507/12019103766', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '08-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-08 15:32:11', '2019-04-08 15:32:11'),
	('822184235', '3204315205850004', 'SITI FATIMAH', 'BANDUNG', '31/01/1988', '085314889491', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232530/12019103789', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:09:59', '2019-04-10 08:09:59'),
	('822184568', '3273075107940003', 'ATI SUMIATI', 'BANDUNG', '11/07/1994', '085793776385', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG JL A YANI NO 239', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG JL A YANI NO 239', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232531/12019103790', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 13:33:29', '2019-04-09 13:33:29'),
	('822192114', '3204332906940001', 'ILHAM FATHURRAHMAN', 'BANDUNG', '29/06/1994', '082115749678', '32067', 'UPTK TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '32067', 'UPTK TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232535/12019103794', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:13:49', '2019-04-10 08:13:49'),
	('822192289', '3273025508860009', 'RIYAH JUARIAH', 'BANDUNG', '15/08/1986', '087823286399', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG JL A.YANI NO239', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG JL A.YANI NO239', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232536/12019103795', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 13:42:18', '2019-04-09 13:42:18'),
	('822197414', '3204104205600004', 'AAH DAAH', 'CIAMIS', '02/05/1960', '081320320832', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG JL. A YANI NO. 239', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG JL. A YANI NO. 239', '110', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE229099/12019100358', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '05-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-05 12:53:30', '2019-04-05 12:53:30'),
	('822199163', '320429300794008', 'IRHAM TAUFIK SUMARNA', 'BANDUNG', '30/07/1994', '085722580995', '32067', 'UPTK TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '32067', 'UPTK TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232538/12019103797', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:15:27', '2019-04-10 08:15:27'),
	('822200085', '3204284812700006', 'EVI HANIPAH', 'BANDUNG', '08/12/1979', '089681355568', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232540/12019103799', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 15:57:14', '2019-04-09 15:57:14'),
	('822200386', '3273076001800001', 'NENG KONI YANI YULIANA', 'BANDUNG', '20/01/1980', '085732057423', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG JL A YANI NO 239', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG JL A YANI NO 239', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232541/12019103800', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 13:35:21', '2019-04-09 13:35:21'),
	('822226776', '3204305307940004', 'INTAN SENITA DEWI', 'BANDUNG', '13/07/1994', '085721428187', '32067', 'UPTK TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '32067', 'UPTK TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232546/12019103805', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:11:14', '2019-04-10 08:11:14'),
	('822242731', '3278066007910007', 'IKA FAUZIYAH', 'TASIKMALAYA', '20/07/1992', '083827337817', '32716', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '32083', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '120', 'Pendidikan Guru PAUD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE243338/12019114597', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:48:22', '2019-04-09 11:48:22'),
	('824461175', '3302035803950001', 'KARTINA DEA RIZXI', 'BANYUMAS', '18/03/1995', '082328754848', '32736', 'JL OTO ISKANDAR DINATA NO.22A BANDUNG', '32736', 'KOTA BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232563/12019103822', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '08-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-08 10:08:23', '2019-04-08 10:08:23'),
	('824547789', '3204326511870001', 'FINE NOVIANI SUTARWAN', 'BANDUNG', '25/11/1987', '085295023964', '32067', 'UPTD TK/SD DISDIKBUD KEC. PACET KAB. BANDUNG', '32067', 'UPTD TK/SD DISDIKBUD KEC. PACET KAB. BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232567/12019103826', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 15:56:39', '2019-04-09 15:56:39'),
	('824548092', '3204336006930015', 'PUSPA DEWI TRIANA SARI', 'BANDUNG', '20/06/1993', '085871217967', '32067', 'UPTK TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '32067', 'UPTK TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232568/12019103827', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:14:10', '2019-04-10 08:14:10'),
	('824548419', '3204293101930001', 'YANA MULYANA', 'BANDUNG', '31/01/1993', '085351369543', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232569/12019103828', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:10:30', '2019-04-10 08:10:30'),
	('824551417', '320436302940003', 'ANEU NURHIDAYATI', 'BANDUNG', '23/02/1994', '08579572818', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232572/12019103831', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:10:53', '2019-04-10 08:10:53'),
	('824555682', '3204362209930002', 'YADI SURYADI', 'BANDUNG', '22/09/1993', '085624248191', '32067', 'UPTD TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '32067', 'UPTD TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232577/12019103836', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:15:04', '2019-04-10 08:15:04'),
	('824561923', '3204362001920002', 'SETIAWAN', 'BANDUNG', '20/01/1992', '085956470406', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232580/12019103839', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:14:40', '2019-04-10 08:14:40'),
	('824563579', '3204337110880002', 'SANTI SULASTRI', 'BANDUNG', '31/10/1988', '082115749678', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232582/12019103841', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:08:19', '2019-04-10 08:08:19'),
	('824566234', '3204345808910002', 'ANGGI PINSANIA', 'BANDUNG', '18/08/1991', '089970174', '32067', 'UPTD TK/SD DISDIKBUB KEC. PACET KAB. BANDUNG', '32067', 'UPTD TK/SD DISDIKBUB KEC. PACET KAB. BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232583/12019103842', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:07:29', '2019-04-10 08:07:29'),
	('824566875', '3205096805870004', 'NOVA FITRIANI', 'GARUT', '28/05/1987', '085223877477', '32075', 'JL PASUNDAN NO 49 GARUT', '32075', 'JL PASUNDAN NO 49 GARUT', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232584/12019103843', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-10 10:09:39', '2019-04-10 10:09:39'),
	('824569175', '3205177103840001', 'WINI MARYANI', 'BAYONGBONG', '31/03/1984', '082129776514', '32075', 'JL PASUNDAN NO 49 GARUT', '32075', 'JL PASUNDAN NO 49 GARUT', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232586/12019103845', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '05-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-05 13:30:47', '2019-04-05 13:30:47'),
	('824572166', '3204366302930003', 'SANTI FITRIANTI', 'BANDUNG', '23/02/1993', '082115749678', '32067', 'UPTD TK/SD DISDIKBUB KEC. PACET KAB. BANDUNG', '32067', 'UPTD TK/SD DISDIKBUB KEC. PACET KAB. BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232589/12019103848', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 15:56:07', '2019-04-09 15:56:07'),
	('824573143', '3204315612820003', 'IMAS YETI HERYANTI', 'BANDUNG', '16/12/1982', '082116295035', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232591/12019103850', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 15:55:21', '2019-04-09 15:55:21'),
	('824574152', '3204335105870014', 'RINI DAHLIANI', 'BANDUNG', '11/05/1987', '085294676754', '32067', 'UPTK TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '32067', 'UPTK TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232593/12019103852', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:06:09', '2019-04-10 08:06:09'),
	('824576131', '3204327001800013', 'ISMA RISMANSAH', 'BANDUNG', '30/01/1980', '085222475595', '32067', 'POKJAR KATAPANG KABUPATEN BANDUNG', '32067', 'POKJAR KATAPANG KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232595/12019103854', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:01:55', '2019-04-10 08:01:55'),
	('824578429', '3204294204870004', 'LISE APRIANTI', 'BANDUNG', '02/04/1987', '085294501447', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '32067', 'UPTD TK/SD KEC. PACET DISDIKBUD KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232598/12019103857', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:05:41', '2019-04-10 08:05:41'),
	('824578751', '3204330305920005', 'NURUL FIRDAUS', 'BANDUNG', '03/05/1992', '085624176010', '32067', 'UPTD TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '32067', 'UPTD TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232599/12019103858', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:16:20', '2019-04-10 08:16:20'),
	('824580091', '3204346104910001', 'NENENG SRIMULYANI', 'JAKARTA', '21/04/1991', '085724763691', '32067', 'UPTD TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '32067', 'UPTD TK/SD DISDIKBUD KEC. PACET KABUPATEN BANDUNG', '116', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE232600/12019103859', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:15:52', '2019-04-10 08:15:52'),
	('825046356', '3278065404780008', 'ATIH SOLIHATI', 'TASIKMALAYA', '14/04/1978', '082316692499', '32716', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '32083', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '120', 'Pendidikan Guru PAUD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE243358/12019114617', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:47:51', '2019-04-09 11:47:51'),
	('825046388', '3278094604900002', 'EMA RAHMAWATI', 'TASIKMALAYA', '06/04/1990', '085353066103', '32716', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '32083', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '120', 'Pendidikan Guru PAUD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE243359/12019114618', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:48:58', '2019-04-09 11:48:58'),
	('825046395', '3278085809840006', 'HILLAL JUMMIATUN', 'TASIKMALAYA', '18/09/1984', '085321843131', '32716', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '32083', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '120', 'Pendidikan Guru PAUD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE243360/12019114619', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:57:02', '2019-04-09 11:57:02'),
	('825049992', '3278096310820001', 'RINI NURLAELASARI', 'JAKARTA', '23/10/1982', '085223046473', '32716', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '32716', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '120', 'Pendidikan Guru PAUD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE243361/12019114620', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:49:30', '2019-04-09 11:49:30'),
	('825050664', '3278044508840007', 'ENOK EMA', 'TASIKMALAYA', '05/08/1984', '081321914892', '32716', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '32083', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '120', 'Pendidikan Guru PAUD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE243362/12019114621', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:56:21', '2019-04-09 11:56:21'),
	('825050997', '3278066202950010', 'FITRIA PEBRIANI', 'TASIKMALAYA', '22/02/1995', '085797888771', '32716', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '32083', 'AWIPARI KP/KEL.AWIPARI KEC.CIBEUREUM', '120', 'Pendidikan Guru PAUD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE243363/12019114622', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:50:00', '2019-04-09 11:50:00'),
	('825274173', '3278016004850005', 'SITI SAADAH', 'TASIKMALAYA', '20/04/1985', '08531770172', '32716', 'AWIPARI KP/KEL. AWIPARI KEC. CIBEUREUM', '32083', 'AWIPARI KP/KEL. AWIPARI KEC. CIBEUREUM', '120', 'Pendidikan Guru PAUD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE243379/12019114638', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:46:08', '2019-04-09 11:46:08'),
	('825538055', '3206142311800004', 'SAEPUROHMAN', 'TASIKMALAYA', '23/11/1980', '085259150094', '32075', 'JL.PASUNDAN NO. 49 GARUT', '32075', 'JL.PASUNDAN NO. 49 GARUT', '110', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE229102/12019100361', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '12-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-12 10:06:39', '2019-04-12 10:06:39'),
	('826142626', '3205024202640003', 'IIS', 'GARUT', '02/02/1961', '087827007737', '32075', 'CALINGCING RT01 RW06 CIMURAH', '32075', 'JL. PASUNDAN N0. 49 GARUT', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236132/12019107391', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 13:39:07', '2019-04-09 13:39:07'),
	('826201088', '3205104402670001', 'POPON JULAEHA', 'BANDUNG', '04/02/1967', '085352835955', '32075', 'KP CIGUNUNGGAGUNG', '32075', 'JL. PASUNDAN N0. 49 GARUT', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236136/12019107395', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 13:38:08', '2019-04-09 13:38:08'),
	('826295542', '3205014807840003', 'ERNI RAHMIATI', 'GARUT', '08/07/1984', '081221008445', '32075', 'JL MARGAWATI KP TARINGGUL RT01/08', '32075', 'JL PASUNDAN NO 49 GARUT', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236146/12019107405', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-10 11:16:20', '2019-04-10 11:16:20'),
	('836457264', '3204274306920001', 'NENENG WULAN SRI WAHYUNI', 'BANDUNG', '03/06/1992', '081322776312', '32067', 'POKJAR CICALENGKA KAB. BANDUNG', '32067', 'POKJAR CICALENGKA KAB. BANDUNG', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236159/12019107418', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:25:03', '2019-04-09 11:25:03'),
	('836457501', '3205140106670003', 'AGUS IIN', 'GARUT', '01/06/1967', '085221518884', '32075', 'JL PASUNDAN NO 49 GARUT', '32075', 'JL PASUNDAN NO 49 GARUT', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236160/12019107419', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '11-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-11 09:21:42', '2019-04-11 09:21:42'),
	('836467795', '3277026404830010', 'FATIMAH YUSUF', 'CIMAHI', '24/04/1983', '085321112972', '32714', 'MARGALUYU NO.234 RT02/02', '32068', 'POKJAR KOTA CIMAHI  JLN. PASAR ATAS NO. 1 CIMAHI', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239654/12019110913', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:45:42', '2019-04-09 11:45:42'),
	('836468805', '3273265608670005', 'AI ANASIH', 'BANDUNG', '16/08/1967', '08986869099', '32067', 'POKJAR KATAPANG KAB BANDUNG', '32067', 'POKJAR KATAPANG KAB BANDUNG', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236170/12019107429', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:40:24', '2019-04-09 11:40:24'),
	('836469244', '3217014205780023', 'TINA LUSYANA', 'CIMAHI', '02/05/1978', '082317891478', '32068', 'POKJAR KABUPATEN BANDUNG BARAT', '32068', 'POKJAR KABUPATEN BANDUNG BARAT', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236171/12019107430', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 13:15:35', '2019-04-09 13:15:35'),
	('836471795', '3204340801850003', 'FAJAR SURAHMAN', 'BANDUNG', '08/01/1985', '089638697610', '32067', 'POKJAR PACET KAB BANDUNG', '32067', 'POKJAR PACET KAB BANDUNG', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239655/12019110914', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 15:52:02', '2019-04-09 15:52:02'),
	('836476028', '3204276505920004', 'HESTI DENASTUTI', 'BANDUNG', '25/05/1992', '081809075256', '32067', 'POKJAR CICALENGKA KAB BANDUNG', '32067', 'POKJAR CICALENGKA KAB BANDUNG', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236179/12019107438', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:23:37', '2019-04-09 11:23:37'),
	('836476952', '3277036212840014', 'SANTIKA DEWI', 'CIMAHI', '22/12/1984', '08122016268', '32714', 'JL. KAMARUNG GG. EMPI NO. 8 RT02/04 KEL. CITEUREUP', '32068', 'POKJAR KOTA CIMAHI JL. PASAR ATAS NO, 1', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239658/12019110917', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:45:10', '2019-04-09 11:45:10'),
	('836487425', '3204164904890002', 'MIRA RAHMAWATI', 'BANDUNG', '09/04/1989', '082319034989', '32067', 'KP PATROLSARI RT03 RW01 DS PATROLSARI KEC ARJASARI', '32067', 'DINAS PEDIDIKAN UPT TK/SD KEC PACET KAB BANDUNG\\', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239669/12019110928', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:17:16', '2019-04-10 08:17:16'),
	('836487844', '32043213505830006', 'AMUNG KARTIWA', 'BANDUNG', '13/05/1983', '0895705339825', '32067', 'KP. CIGADO RT02 RW10 BALEENDAH', '32067', 'POKJAR KATAPANG KAB. BANDUNG', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239670/12019110929', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:17:45', '2019-04-10 08:17:45'),
	('836488513', '3273225702680001', 'TITIN KUSTINI', 'MAJALENGKA', '17/02/1968', '083206662063', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG', '32736', 'DINAS PENDIDIKAN KOTA BANDUNG', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236190/12019107449', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 11:39:54', '2019-04-09 11:39:54'),
	('836489744', '3211224206840001', 'NIA KURNIAWATI', 'SUMEDANG', '02/06/1984', '081394463828', '32133', 'LINGKUNGAN LEMBUR SITU RT 03 RW 13 KEL SITU', '32736', 'JL PANYILEUKAN RAYA NO 1A', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239678/12019110937', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '11-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-11 09:25:42', '2019-04-11 09:25:42'),
	('836489769', '3205146702930004', 'SUMIYATI', 'GARUT', '27/02/1993', '08562195860', '32067', 'KP PASIR RT06 RW03 DS SANDING KEC MALANGBONG GARUT', '32067', 'KATAPANG', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239679/12019110938', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '12-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-12 13:49:23', '2019-04-12 13:49:23'),
	('836489776', '3211145512790004', 'AI SITI HAFSYIAH', 'SUMEDANG', '15/12/1979', '082120744799', '32133', 'DSN SINDANGKASIH 01/08 DS SINDANGPAKUON', '32736', 'JALAN PANYILEUKAN RAYA NO 1A', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239680/12019110939', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-10 11:13:55', '2019-04-10 11:13:55'),
	('836492086', '3211084307810006', 'WIWIT WITANINGSIH', 'SUMEDANG', '03/07/1981', '085324605151', '32133', 'DUSUN PASEH RT 21 RW 09 DESA PASEH KALER', '32736', 'JALAN PANYILEUKAN RAYA NO 1A', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239696/12019110955', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '11-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-11 09:19:09', '2019-04-11 09:19:09'),
	('836493776', '321118660580009', 'RUSMIATI HASANAH', 'SUMEDANG', '26/05/1980', '081321127934', '32133', 'JL ANGKREK RT 01 RW 15 KEL SITU', '32736', 'JL PANYILEUKAN RAYA NO 1A', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239706/12019110965', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '11-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-11 09:24:33', '2019-04-11 09:24:33'),
	('836496298', '3273286503790001', 'AAN NURHAYATI', 'CIAMIS', '25/03/1979', '081321833414', '32736', 'JL MEKAR INDAH NO 11 PANGHEGA PERMAI', '32736', 'JALAN GAMBIR NO 25 BANDUNG', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239734/12019110993', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '11-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-11 09:17:56', '2019-04-11 09:17:56'),
	('836496875', '3211032107790004', 'HENGKI KUSNADI', 'SUMEDANG', '21/07/1979', '081321678365', '32133', 'CIPAOK RT 03 RW 02 DESA TARUNAJAYA KEC DARMARAJA', '32736', 'JALAN PANYILEUKAN RAYA NO 1A', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239741/12019111000', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '11-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-11 09:28:12', '2019-04-11 09:28:12'),
	('836503021', '3204352503810005', 'DADAN  NURDIANSYAH', 'BANDUNG', '25/03/1981', '081223693981', '32067', 'POKJAR PACET KAB BANDUNG', '32067', 'POKJAR PACET KAB BANDUNG', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236194/12019107453', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '09-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-09 15:54:27', '2019-04-09 15:54:27'),
	('836503773', '3211186302830007', 'RIEN HERYANTI', 'SUMEDANG', '23/02/1983', '085222114404', '32133', 'DUSUN BOJONGLOA RT 03/06 DS GIRIMUKTI', '32736', 'JALAN PANYILEUKAN RAYA NO 1A', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239797/12019111056', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '11-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-11 09:16:21', '2019-04-11 09:16:21'),
	('836504317', '3211186304910003', 'RIKA NUR APRILIANTI', 'SUMEDANG', '23/04/1991', '082319937879', '32133', 'DUSUN SINDANG MULYA RT 03 RW 04 SUMEDANG UTARA', '32736', 'JALAN PANYILEUKAN RAYA NO 1A', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239803/12019111062', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '11-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-11 09:22:49', '2019-04-11 09:22:49'),
	('836505032', '3211226112690003', 'DEDEH KURNIASIH HAMIDAH', 'SUMEDANG', '21/12/1969', '085352529067', '32133', 'DUSUN NALUK RT 002 RW 004 DESA NALUK CIMALAKA', '32736', 'JALAN PANYILEUKAN RAYA NO 1A', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239812/12019111071', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '11-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-11 11:48:36', '2019-04-11 11:48:36'),
	('836509093', '3211115609110004', 'NENI NURHAYATI', 'SUMEDANG', '16/09/1977', '081214648993', '32133', 'DSN GUDANG RT 01 RW 02 DESA GUDANG TANJUNGSARI', '32736', 'JL PANYILEUKAN RAYA NO 1A BANDUNG', '119', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE239844/12019111103', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '12-4-2019', NULL, 'Dewi Priamsari, S.E., M.Si', '2019-04-12 13:19:21', '2019-04-12 13:19:21'),
	('836516651', '3204296604920001', 'FAUZIAH SHAUMY ALFARIDLY', 'BANDUNG', '26/04/1992', '082115749678', '32067', 'POKJAR PACET KAB BANDUNG', '32067', 'POKJAR PACET KAB BANDUNG', '118', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CE236196/12019107455', NULL, '2674/UN31/HK.00.09/2019', '2019-04-01', '1', '10-4-2019', '10-4-2019', 'Dewi Priamsari, S.E., M.Si', '2019-04-10 08:09:00', '2019-04-10 08:09:00');
/*!40000 ALTER TABLE `t_foto_ijazah` ENABLE KEYS */;

-- Dumping structure for table bandung_app.t_ijazah
CREATE TABLE IF NOT EXISTS `t_ijazah` (
  `nim` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kabko` char(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_kabko_pokjar` char(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_program_studi` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ijazah_d` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ijazah_a` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_sk_rektor` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ijazah` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_transkrip_nilai` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pendamping_ijazah` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_ijazah_akta` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_terima` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penyerahan_ke_mhs` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proses_penyerahan` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_urut_penyimpanan` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyimpanan` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_create` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `Index 2` (`kode_kabko`,`kode_kabko_pokjar`,`kode_program_studi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.t_ijazah: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_ijazah` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_ijazah` ENABLE KEYS */;

-- Dumping structure for table bandung_app.t_surket_ijazah
CREATE TABLE IF NOT EXISTS `t_surket_ijazah` (
  `nim` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mahasiswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instansi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_instansi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_program_studi` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_program_studi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_fakultas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pendidikan_akhir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ijazah_d` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ijazah_a` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sks_yudisium` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_sk_rektor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_sk` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_registrasi_awal` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_registrasi_akhir` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `Index 2` (`kode_program_studi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.t_surket_ijazah: ~6 rows (approximately)
/*!40000 ALTER TABLE `t_surket_ijazah` DISABLE KEYS */;
REPLACE INTO `t_surket_ijazah` (`nim`, `nama_mahasiswa`, `no_surat`, `nama_instansi`, `kota_instansi`, `kode_program_studi`, `nama_program_studi`, `singkatan`, `nama_fakultas`, `nama_pendidikan_akhir`, `no_ijazah_d`, `no_ijazah_a`, `sks_yudisium`, `nomor_sk_rektor`, `tanggal_sk`, `masa_registrasi_awal`, `masa_registrasi_akhir`, `created_at`, `updated_at`) VALUES
	('815083031', 'EUIS YOYOH ROKAYAH', '0584/UN31.UPBJJ.15/PP.06.01.01/2019', 'Badan Kepegawaian Pendidikan dan Pelatihan', 'Kabupaten Bandung', '089', 'PGSD - S1', 'FKIP', 'Fakultas Keguruan dan Ilmu Pendidikan', 'D-2 PGSD', 'CE011699/12010211699', 'CC011699/12010211699', '147', '731/H31/KEP/2010', '2010-03-17', '20072', '20092', '2019-04-02 11:23:22', '2019-04-02 11:23:22'),
	('815086116', 'IDA MARDIYAH', '0627/UN31.UPBJJ.15/PP.06.01.01/2019', 'Badan Kepegawaian  Pendidikan dan Palatihan', 'Kabupaten Bandung', '089', 'PGSD - S1', 'FKIP', 'Fakultas Keguruan dan Ilmu Pendidikan', 'D-2 PGSD', 'CE044900/12010408849', 'CC044900/12010408849', '145', '5430/H31/KEP/2010', '2010-09-28', '20072', '20101', '2019-04-08 10:17:01', '2019-04-08 10:17:01'),
	('818259039', 'LILIS SOLIHAH', '0568/UN31.UPBJJ.15/PP.06.01.01/2019', 'Badan Kepegawaian Pendidikan dan Pelatihan', 'Kabupaten Bandung', '089', 'PGSD - S1', 'FKIP', 'Fakultas Keguruan dan Ilmu Pendidikan', 'D-2 PGSD', 'CE010524/12012206344', 'CC010524/12012206344', '145', '2181/UN31/KEP/2012', '2012-04-02', '20082', '20112', '2019-03-29 16:32:07', '2019-03-29 16:32:07'),
	('819625341', 'IYUS ROSWATI', '0574/UN31.UPBJJ.15/PP.06.01.01/2019', 'Badan Kepegawaian Pendidikan  dan Pelatihan', 'Kabupaten Bandung', '089', 'PGSD - S1', 'FKIP', 'Fakultas Keguruan dan Ilmu Pendidikan', 'D-2 PGSD', 'CE129102/12011412711', 'CC129102/12011412711', '145', '7552/UN31/KEP/2011', '2011-09-27', '20091', '20111', '2019-04-01 10:33:33', '2019-04-01 10:33:33'),
	('822203518', 'DADANG PRIATNA', '0641/UN31.UPBJJ.15/PP.06.01.01/2019', 'Badan Kepegawaian Pendidikan dan Latihan', 'Kabupaten Bandung', '110', 'PGSD - S1', 'FKIP', 'Fakultas Keguruan dan Ilmu Pendidikan', 'D-2 PGSD', 'CE172153/12017401012', NULL, '145', '7219/UN31/KEP/2017', '2017-09-29', '20141', '20171', '2019-04-11 09:30:38', '2019-04-11 09:30:38');
/*!40000 ALTER TABLE `t_surket_ijazah` ENABLE KEYS */;

-- Dumping structure for table bandung_app.t_surket_mhs_aktif
CREATE TABLE IF NOT EXISTS `t_surket_mhs_aktif` (
  `no_surat` char(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_surat` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mahasiswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_mahasiswa` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_program_studi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_fakultas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_mahasiswa` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mr_awal` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mr_akhir` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_ttd` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_create` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`no_surat`,`nim`),
  KEY `Index 2` (`nip_ttd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.t_surket_mhs_aktif: ~33 rows (approximately)
/*!40000 ALTER TABLE `t_surket_mhs_aktif` DISABLE KEYS */;
REPLACE INTO `t_surket_mhs_aktif` (`no_surat`, `kode_surat`, `nim`, `nama_mahasiswa`, `tempat_lahir_mahasiswa`, `tgl_lahir`, `nama_program_studi`, `nama_fakultas`, `alamat_mahasiswa`, `mr_awal`, `mr_akhir`, `nip_ttd`, `user_create`, `created_at`, `updated_at`) VALUES
	('0442/UN31.UPBJJ.15/PP.11.00/2019', '12345', '021446233', 'NISSA FUSTI MANIKAM', 'BANDUNG', '23/09/1996', 'Ilmu Administrasi Bisnis-S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'JL. PESANTREN GG MUTISAH NO. 92 RT.05/RW.07 CIBABAT', '20162', '20191', '196310211988031003', 'Dwi Anto,S.Tr.T', '2019-04-01 08:02:06', '2019-04-01 08:02:06'),
	('0443/UN31.UPBJJ.15/PP.11.00/2019', '12345', '826291892', 'DIANA DERMA AGUSTIN', 'TASIKMALAYA', '18/08/1996', 'Pendidikan Guru PAUD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'STIKES JL RAYA SINGAPARNA  CIKUNIR TASIKMALAYA', '20152', '20191', '196310211988031003', 'KRISNA BARATA', '2019-04-01 09:57:22', '2019-04-02 08:50:21'),
	('0444/UN31.UPBJJ.15/PP.11.00/2019', '12345', '031127868', 'GITA TRI NURHAYATIN', 'BANDUNG', '14/04/1997', 'Manajemen-S1', 'Fakultas Ekonomi', 'JL TERUSAN PESANTREN III BLOK D.48 ARCAMANIK BANDUNG', '20182', '20191', '196310211988031003', 'KRISNA BARATA', '2019-04-01 14:08:41', '2019-04-02 08:50:13'),
	('0445/UN31.UPBJJ.15/PP.11.00/2019', '12345', '017567439', 'DIAN FATUROHMAN', 'JUNGJANG', '01/12/1985', 'Perpustakaan-D2', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'GEGESIK WETAN KEC. GEGESIK KAB. CIREBON', '20132', '20185', '196310211988031003', 'KRISNA BARATA', '2019-04-01 15:39:46', '2019-04-02 08:50:08'),
	('0446/UN31.UPBJJ.15/PP.11.00/2019', '12345', '817331382', 'MUKIT', 'INDRAMAYU', '02/05/1966', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'DS. TEGALSEMBADRA KEC. BALONGAN', '20081', '20182', '196310211988031003', 'Dwi Anto,S.Tr.T', '2019-04-02 10:50:14', '2019-04-02 11:07:10'),
	('0447/UN31.UPBJJ.15/PP.11.00/2019', '12345', '825523886', 'KARTINA SETIAWATI', 'BANDUNG', '28/06/1983', 'Pendidikan Guru PAUD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'DINAS PENDIDIKAN KOTA BANDUNG', '20142', '20195', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-04 08:34:50', '2019-04-04 08:34:50'),
	('0448/UN31.UPBJJ.15/PP.11.00/2019', '12345', '823208219', 'DARIS FADILAH', 'GARUT', '26/12/1992', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'JL.PASUNDAN N0, 49 GARUT', '20122', '20172', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-04 09:27:39', '2019-04-04 09:27:39'),
	('0449/UN31.UPBJJ.15/PP.11.00/2019', '12345', '835629747', 'YETI KUSMIATI', 'BAYONGBONG', '13/01/1987', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'POKJAR DISDIK KABUPATEN GARUT', '20181', '20191', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-04 09:30:15', '2019-04-04 09:30:15'),
	('0450/UN31.UPBJJ.15/PP.11.00/2019', '12345', '817331382', 'MUKIT', 'INDRAMAYU', '02/05/1966', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'DS. TEGALSEMBADRA KEC. BALONGAN', '20081', '20182', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-04 09:45:48', '2019-04-04 09:45:48'),
	('0451/UN31.UPBJJ.15/PP.11.00/2019', '12345', '021411643', 'DESCARANY SANTY', 'KARAWANG', '01/01/1997', 'Ilmu Perpustakaan S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'YASPIN NURUL FALLAH KARAWANG', '20142', '20195', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-04 11:26:19', '2019-04-04 11:26:19'),
	('0452/UN31.UPBJJ.15/PP.11.00/2019', '12345', '818125169', 'DASLIM', 'CILACAP', '05/04/1960', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'MEDALAKSANA RT02/07 GN LARANG BANTARUJEG MJK', '20092', '20132', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-04 11:39:18', '2019-04-04 11:39:18'),
	('0453/UN31.UPBJJ.15/PP.11.00/2019', '12345', '836503702', 'DE ASNI SEPTIANI', 'BANDUNG', '18/05/1998', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'DISDIK UPT TK/SD KEC. PACET KAB. BANDUNG', '20172', '20195', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-04 11:57:28', '2019-04-04 11:57:28'),
	('0454/UN31.UPBJJ.15/PP.11.00/2019', '12345', '836502771', 'YANI HANDAYANI', 'BANDUNG', '24/09/1980', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'POKJAR PACET KAB BANDUNG', '20161', '20191', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-04 13:09:49', '2019-04-04 13:09:49'),
	('0455/UN31.UPBJJ.15/PP.11.00/2019', '12345', '819464747', 'ENDANG DEDI', 'TASIKMALAYA', '11/05/1965', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'KP RANCA ENGGANG RT 01/08 KEC PAMEUNGPEUK', '20091', '20191', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-04 13:17:17', '2019-04-04 13:17:17'),
	('0456/UN31.UPBJJ.15/PP.11.00/2019', '12345', '825547022', 'HERMAN NIRWANA', 'BANDUNG', '27/05/1994', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'POKJAR PACET KAB. BANDUNG', '20151', '20191', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-04 13:18:43', '2019-04-04 13:18:43'),
	('0457/UN31.UPBJJ.15/PP.11.00/2019', '12345', '030647904', 'SALMA NURUL AZKIYA', 'BANDUNG', '30/08/1996', 'Sastra Inggris Bidang Minat Penerjemahan', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'JALAN HAJI YASIN V NO 25 KEL SUKABUNGAH SUKAJADI BANDUNG', '20181', '20191', '196310211988031003', 'KRISNA BARATA', '2019-04-05 11:17:51', '2019-04-05 11:17:51'),
	('0458/UN31.UPBJJ.15/PP.11.00/2019', '12345', '836481456', 'GHINA LUTHFIANI FARIDAH', 'BANDUNG', '11/11/1993', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'SUKASARI MEKAR RT001 RW019 KEC CIWIDEY', '20171', '20191', '196310211988031003', 'SYAHRUL FAJAR', '2019-04-08 10:15:54', '2019-04-08 10:15:54'),
	('0459/UN31.UPBJJ.15/PP.11.00/2019', '12345', '817235449', 'YAYAT ROHAYATI', 'PURWAKARTA', '26/06/1963', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'PERUM SADANG SERANG JL VIRGO NO. 28 RT5/13 SADANG SERANG', '20081', '20174', '196310211988031003', 'SYAHRUL FAJAR', '2019-04-08 10:40:57', '2019-04-08 10:40:57'),
	('0460/UN31.UPBJJ.15/PP.11.00/2019', '12345', '030990292', 'FIRMAN SURYA LESMANA', 'JAKARTA', '17/03/1998', 'Sosiologi Sl', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'ASR BRIMOB CIPINANG RT.01 RW.05 CIPINANG PULOGADUNG', '20182', '20191', '196310211988031003', 'SYAHRUL FAJAR', '2019-04-08 11:29:35', '2019-04-08 11:29:35'),
	('0461/UN31.UPBJJ.15/PP.11.00/2019', '12345', '030525856', 'DIANA WAHYUNI', 'PALEMBANG', '01/10/1972', 'Sastra Inggris Bidang Minat Penerjemahan', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'JLN. AH. NASUTION N0. 485 RT002 RW005 KOTA BANDUNG', '20172', '20191', '196310211988031003', 'SYAHRUL FAJAR', '2019-04-08 14:41:49', '2019-04-08 14:41:49'),
	('0462/UN31.UPBJJ.15/PP.11.00/2019', '12345', '825532126', 'SETIARTI PUTRI', 'BANDUNG', '17/01/1994', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'POKJAR KATAPANG KAB. BANDUNG', '20151', '20191', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-09 10:53:19', '2019-04-09 10:53:19'),
	('0463/UN31.UPBJJ.15/PP.11.00/2019', '12345', '030368958', 'MELATI ARUMSARI HERLAMBANG', 'BANDUNG', '30/06/1998', 'Agribisnis Bidang Minat Penyuluhan dan Komunikasi Pertanian Bidang Keahlian Peternakan-S1', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'JALAN YUPITER UTAMA BLOK C2 NO. 16 BANDUNG', '20172', '20191', '196310211988031003', 'KRISNA BARATA', '2019-04-10 08:59:40', '2019-04-10 08:59:40'),
	('0464/UN31.UPBJJ.15/PP.11.00/2019', '12345', '857421211', 'RISMAYATI', 'BANDUNG', '14/01/1979', 'PGPAUD S1 (AKPMM)', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CIPAGALO GIRANG GANG BUNGUR RT02 RW06 BANDUNG', '20191', '20191', '196310211988031003', 'KRISNA BARATA', '2019-04-10 09:04:39', '2019-04-10 09:04:39'),
	('0465/UN31.UPBJJ.15/PP.11.00/2019', '12345', '024081345', 'JODY MANGGALANINGWANG', 'CIREBON', '22/05/1987', 'Ilmu Komunikasi-S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'JL. TUPAREV 68 NO. 46', '20162', '20191', '196310211988031003', 'KRISNA BARATA', '2019-04-10 09:46:08', '2019-04-10 09:46:08'),
	('0466/UN31.UPBJJ.15/PP.11.00/2019', '12345', '835643114', 'OTING SRIPENDIYANI', 'BANDUNG', '03/02/1964', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'CIGANITRI KALER NO 9 RT 1 RW 4 DS CIPAGALO BOJONGSOANG', '20182', '20191', '196310211988031003', 'KRISNA BARATA', '2019-04-10 11:25:52', '2019-04-10 11:25:52'),
	('0467/UN31.UPBJJ.15/PP.11.00/2019', '12345', '021442537', 'INTAN AYU KARLINA', 'KARAWANG', '30/08/1995', 'Ilmu Perpustakaan S1', 'Fakultas Hukum, Ilmu Sosial dan Ilmu Politik', 'POKJAR YASPIN NURUL FALAH TELAGASARI KARAWANG', '20161', '20191', '196310211988031003', 'KRISNA BARATA', '2019-04-10 13:32:40', '2019-04-10 13:32:40'),
	('0468/UN31.UPBJJ.15/PP.11.00/2019', '12345', '836493561', 'IIN DANIATI', 'BANDUNG', '05/06/1981', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'POKJAR KATAPANG KAB. BANDUNG', '20152', '20191', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-11 10:17:55', '2019-04-11 10:17:55'),
	('0469/UN31.UPBJJ.15/PP.11.00/2019', '12345', '836493411', 'IIN INRIANI', 'BANDUNG', '18/08/1994', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'POKJAR KATAPANG KAB. BANDUNG', '20152', '20191', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-11 10:25:37', '2019-04-11 10:25:37'),
	('0470/UN31.UPBJJ.15/PP.11.00/2019', '12345', '836465548', 'NOVITA SRI LESTARI', 'BANDUNG', '20/11/1996', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'POKJAR KATAPANG KAB. BANDUNG', '20152', '20191', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-11 10:28:35', '2019-04-11 10:28:35'),
	('0471/UN31.UPBJJ.15/PP.11.00/2019', '12345', '836473212', 'REZA MULYANDANI', 'BATAM', '08/03/1996', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'POKJAR KATAPANG KAB. BANDUNG', '20152', '20191', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-11 10:31:08', '2019-04-11 10:31:08'),
	('0472/UN31.UPBJJ.15/PP.11.00/2019', '12345', '836473323', 'DWI FICRIA NOVIANTI', 'BANDUNG', '28/11/1994', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'POKJAR KATAPANG KAB. BANDUNG', '20152', '20191', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-11 10:31:48', '2019-04-11 10:31:48'),
	('0473/UN31.UPBJJ.15/PP.11.00/2019', '12345', '836514482', 'ENUR ANGGRAENI', 'BANDUNG', '05/10/1993', 'PGSD S1 (Masukan Sarjana) Kurikulum Baru', 'Fakultas Keguruan dan Ilmu Pendidikan', 'KP. BABAKAN GOMBONG RT03 RW13 DS SUKAJADI', '20172', '20184', '196310211988031003', 'Eep Dimyati, S.IP.', '2019-04-11 10:47:10', '2019-04-11 10:47:10'),
	('0474/UN31.UPBJJ.15/PP.11.00/2019', '12345', '825306864', 'N NIA HADIANINGSIH', 'BANDUNG', '10/07/1995', 'PGSD - S1', 'Fakultas Keguruan dan Ilmu Pendidikan', 'POKJAR CIHAMPELAS BANDUNG BARAT', '20141', '20191', '196310211988031003', 'KRISNA BARATA', '2019-04-12 14:31:05', '2019-04-12 14:31:05');
/*!40000 ALTER TABLE `t_surket_mhs_aktif` ENABLE KEYS */;

-- Dumping structure for table bandung_app.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_group` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bandung_app.users: ~8 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `id_group`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(4, 'Dwi Anto,S.Tr.T', '1', 'antok@ecampus.ut.ac.id', NULL, '$2y$10$P/cIzCN.DqCyrwkvSmvJGuFZEEruLoLRVPdNmkdlhwfuilg8IVRm6', 'z9qjAh8VaGecxQ0hDEL39UFXRP5Bsp7LqgDVHB6ScC7w2HgrMmYeAFejKfk8', '2019-03-17 09:27:25', '2019-03-27 17:04:36'),
	(5, 'Eep Dimyati, S.IP.', '6', 'eep-dimyati@ecampus.ut.ac.id', NULL, '$2y$10$gK72xK1q9mCl8fBh4hh9Su2IbP1fRTID1EcyLHsdzaXDVkLXuAQOq', 'M8Gq9VyM1025EF3gdJG8vwL71bN7b4Er0MQisAKeiGPkLWyZz48vp8wWKJ2s', '2019-03-24 10:41:08', '2019-03-24 10:41:08'),
	(6, 'KRISNA BARATA', '2', 'krisnabarata@ecampus.ut.ac.id', NULL, '$2y$10$4T71PyT7GPdDkEVQ8MYX3upG0jVk/WuRsHHcNeo5.EJlQhJ3ZNKyG', 'Nip4rwguDocMtPNnSnJ1phfDA7wKbq2oc1tdcd6dShIGygJ2akfTi95UnXV1', '2019-03-27 17:41:25', '2019-03-27 17:41:25'),
	(7, 'Sri Dewi Irianti', '5', 'sri-dewi@ecampus.ut.ac.id', NULL, '$2y$10$G78TH1raQxuLzqXLf30eReSdNu5rKdtP4H3uA7DvH0ClZ2G0lK/um', 'Mz4nUr7ysokrFe9QpeGxNBvsf6mpBrH1XZMNC4r4pzv5IlUN6vcUOkW278i7', '2019-03-29 08:30:52', '2019-03-29 08:30:52'),
	(8, 'Lakshmi Dwitiya Hapsari, S.P.,M.M.', '5', 'lakshmi@ecampus.ut.ac.id', NULL, '$2y$10$a66eMMP05ML/zMVNmGmSI.U63RudTcs7.0s1ystQIQQWrieOw2HLW', '7E2sQ2dqGdShwoU0IeEyoZwSkCBseY6oBtc9yGeVntNQ4Qx0mk1Rl6faHJNI', '2019-03-29 08:32:00', '2019-03-29 08:32:00'),
	(9, 'SYAHRUL FAJAR', '6', 'syahrulfajar@ecampus.ut.ac.id', NULL, '$2y$10$EaARnQwavRUwDzkhfTUMA.K7.nIa7DVnz30WRbnBc0.HRgSD0S0Dy', 'hBNZU7hfGLiO4tQxS2qgmgXO8TNSdSODietcGwNFFXSrOUOSCDQhee8Qh8kv', '2019-04-01 08:09:57', '2019-04-01 08:09:57'),
	(10, 'Merry Monica, S.Tp', '2', 'merry-monica@ecampus.ut.ac.id', NULL, '$2y$10$AKtPiAPzK.NZ11E8oIxn9u07PbNLISP7CYAhxYoVJxQraJKUxbY/O', 'QqBN598EffLVayUZQ7ZbSFKsZyBVrNbI2XgyW9i5xfNZhVqPo3PEG5RO5mhy', '2019-04-01 08:36:47', '2019-04-01 08:36:47'),
	(11, 'Dewi Priamsari, S.E., M.Si', '7', 'dewi-priamsari@ecampus.ut.ac.id', NULL, '$2y$10$zXZqYA1/mzFouRnzt24iD.ODZwPnQ/zt0Fq4TYGKs/2/rCnXi9bxq', 'IUdGEKfcozc9VVDYuyPZtprSY3vuDYzKMDxm6yPyQfUJrZlhsQUbZVNJSsnR', '2019-04-04 11:03:55', '2019-04-04 11:03:55');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
