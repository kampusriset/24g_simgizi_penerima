-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sim_gizi
CREATE DATABASE IF NOT EXISTS `sim_gizi` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sim_gizi`;

-- Dumping structure for table sim_gizi.absensi
CREATE TABLE IF NOT EXISTS `absensi` (
  `id_absensi` int NOT NULL AUTO_INCREMENT,
  `id_penerima` int DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status_hadir` enum('Hadir','Tidak Hadir') DEFAULT NULL,
  PRIMARY KEY (`id_absensi`),
  KEY `fk_absensi_penerima` (`id_penerima`),
  CONSTRAINT `fk_absensi_penerima` FOREIGN KEY (`id_penerima`) REFERENCES `penerima_manfaat` (`id_penerima`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.dapur
CREATE TABLE IF NOT EXISTS `dapur` (
  `id_dapur` int NOT NULL AUTO_INCREMENT,
  `nama_dapur` varchar(100) DEFAULT NULL,
  `alamat` text,
  `penanggung_jawab` varchar(100) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `id_mitra` int DEFAULT NULL,
  PRIMARY KEY (`id_dapur`),
  KEY `fk_dapur_mitra` (`id_mitra`),
  CONSTRAINT `fk_dapur_mitra` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.distribusi
CREATE TABLE IF NOT EXISTS `distribusi` (
  `id_distribusi` int NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `id_sekolah` int DEFAULT NULL,
  `id_dapur` int DEFAULT NULL,
  `jumlah_porsi` int DEFAULT NULL,
  PRIMARY KEY (`id_distribusi`),
  KEY `fk_distribusi_sekolah` (`id_sekolah`),
  KEY `fk_distribusi_dapur` (`id_dapur`),
  CONSTRAINT `fk_distribusi_dapur` FOREIGN KEY (`id_dapur`) REFERENCES `dapur` (`id_dapur`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_distribusi_sekolah` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id_sekolah`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.distribusi_detail
CREATE TABLE IF NOT EXISTS `distribusi_detail` (
  `id_detail` int NOT NULL AUTO_INCREMENT,
  `id_distribusi` int DEFAULT NULL,
  `id_menu` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `fk_detail_distribusi` (`id_distribusi`),
  KEY `fk_detail_menu` (`id_menu`),
  CONSTRAINT `fk_detail_distribusi` FOREIGN KEY (`id_distribusi`) REFERENCES `distribusi` (`id_distribusi`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_detail_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu_makanan` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.kandungan_gizi
CREATE TABLE IF NOT EXISTS `kandungan_gizi` (
  `id_gizi` int NOT NULL AUTO_INCREMENT,
  `id_menu` int DEFAULT NULL,
  `kalori` decimal(10,2) DEFAULT NULL,
  `protein` decimal(10,2) DEFAULT NULL,
  `lemak` decimal(10,2) DEFAULT NULL,
  `karbohidrat` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_gizi`),
  KEY `fk_gizi_menu` (`id_menu`),
  CONSTRAINT `fk_gizi_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu_makanan` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.keluhan
CREATE TABLE IF NOT EXISTS `keluhan` (
  `id_keluhan` int NOT NULL AUTO_INCREMENT,
  `id_penerima` int DEFAULT NULL,
  `isi_keluhan` text,
  `tanggal` date DEFAULT NULL,
  `status_keluhan` enum('Masuk','Diproses','Selesai') DEFAULT NULL,
  PRIMARY KEY (`id_keluhan`),
  KEY `fk_keluhan_penerima` (`id_penerima`),
  CONSTRAINT `fk_keluhan_penerima` FOREIGN KEY (`id_penerima`) REFERENCES `penerima_manfaat` (`id_penerima`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.menu_makanan
CREATE TABLE IF NOT EXISTS `menu_makanan` (
  `id_menu` int NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(100) NOT NULL,
  `jenis` enum('Sarapan','Siang') NOT NULL,
  `tanggal_menu` date DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.mitra
CREATE TABLE IF NOT EXISTS `mitra` (
  `id_mitra` int NOT NULL AUTO_INCREMENT,
  `nama_mitra` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `alamat` text,
  `status_verifikasi` enum('Pending','Terverifikasi','Ditolak') DEFAULT NULL,
  PRIMARY KEY (`id_mitra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.penerima_manfaat
CREATE TABLE IF NOT EXISTS `penerima_manfaat` (
  `id_penerima` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `id_sekolah` int DEFAULT NULL,
  `alamat` text,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_penerima`),
  UNIQUE KEY `nik` (`nik`),
  KEY `fk_penerima_sekolah` (`id_sekolah`),
  CONSTRAINT `fk_penerima_sekolah` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id_sekolah`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.penilaian_makanan
CREATE TABLE IF NOT EXISTS `penilaian_makanan` (
  `id_penilaian` int NOT NULL AUTO_INCREMENT,
  `id_menu` int DEFAULT NULL,
  `nilai` int DEFAULT NULL,
  `komentar` text,
  PRIMARY KEY (`id_penilaian`),
  KEY `fk_penilaian_menu` (`id_menu`),
  CONSTRAINT `fk_penilaian_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu_makanan` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `penilaian_makanan_chk_1` CHECK ((`nilai` between 1 and 5))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.petugas
CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `wilayah` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(20) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.sekolah
CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sekolah` int NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(150) NOT NULL,
  `alamat` text,
  `jenjang` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table sim_gizi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','petugas','dapur','sekolah') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
