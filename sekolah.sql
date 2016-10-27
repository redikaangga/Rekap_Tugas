-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.5.27 - MySQL Community Server (GPL)
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table sekolah.kelamin: ~3 rows (approximately)
DELETE FROM `kelamin`;
/*!40000 ALTER TABLE `kelamin` DISABLE KEYS */;
INSERT INTO `kelamin` (`id_kelamin`, `nama_kelamin`) VALUES
	(1, 'Laki-laki'),
	(2, 'Perempuan'),
	(3, 'Unknown');
/*!40000 ALTER TABLE `kelamin` ENABLE KEYS */;

-- Dumping data for table sekolah.mapel: ~3 rows (approximately)
DELETE FROM `mapel`;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
	(1, 'MAT'),
	(2, 'IPS'),
	(3, 'PKN');
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;

-- Dumping data for table sekolah.nilai: ~4 rows (approximately)
DELETE FROM `nilai`;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `id_mapel`, `nilai`) VALUES
	(1, 1, 1, 95),
	(2, 2, 1, 90),
	(3, 3, 2, 80);
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;

-- Dumping data for table sekolah.siswa: ~7 rows (approximately)
DELETE FROM `siswa`;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` (`id_siswa`, `nama`, `alamat`, `kelamin`) VALUES
	(1, 'Redika', 'Malang', '1'),
	(2, 'Angga', 'Bareng', '2'),
	(3, 'Pratama', 'Tengah', '3'),
	(4, 'red', 'bareng', '1'),
	(5, 'red', 'Bareng', '3'),
	(9, 'tgvbhj', 'gb n', '1'),
	(10, 'dj', 'njo', '3');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
