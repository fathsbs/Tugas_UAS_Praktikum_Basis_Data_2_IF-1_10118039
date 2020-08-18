-- MySQL dump 10.13  Distrib 5.6.26, for Win64 (x86_64)
--
-- Host: localhost    Database: akademiksman58
-- ------------------------------------------------------
-- Server version	5.6.26-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `guru`
--

DROP TABLE IF EXISTS `guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guru` (
  `NIP` int(8) NOT NULL,
  `Nama_Guru` varchar(30) DEFAULT NULL,
  `Tanggal_Lahir_Guru` date DEFAULT NULL,
  `JK_Guru` char(1) DEFAULT NULL,
  `Agama_Guru` varchar(20) DEFAULT NULL,
  `Alamat_Guru` varchar(30) DEFAULT NULL,
  `Pendidikan` varchar(5) DEFAULT NULL,
  `Bidang_Studi` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guru`
--

LOCK TABLES `guru` WRITE;
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas` (
  `ID_Kelas` varchar(10) NOT NULL,
  `ID_Walas` int(8) NOT NULL,
  `Jurusan` varchar(8) DEFAULT NULL,
  `Semester` int(1) DEFAULT NULL,
  `Tahun_Ajaran` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`ID_Kelas`),
  KEY `ID_Walas` (`ID_Walas`),
  CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`ID_Walas`) REFERENCES `wali_kelas` (`ID_Walas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mata_pelajaran`
--

DROP TABLE IF EXISTS `mata_pelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mata_pelajaran` (
  `Kode_Mapel` varchar(6) NOT NULL,
  `NIP` int(8) NOT NULL,
  `Nama_Mapel` varchar(12) DEFAULT NULL,
  `SKS` int(1) DEFAULT NULL,
  PRIMARY KEY (`Kode_Mapel`),
  KEY `NIP` (`NIP`),
  CONSTRAINT `mata_pelajaran_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mata_pelajaran`
--

LOCK TABLES `mata_pelajaran` WRITE;
/*!40000 ALTER TABLE `mata_pelajaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `mata_pelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `NIS` int(8) NOT NULL,
  `ID_Kelas` varchar(10) NOT NULL,
  `Nama_Siswa` varchar(30) DEFAULT NULL,
  `Tanggal_Lahir_Siswa` date DEFAULT NULL,
  `JK_Siswa` char(1) DEFAULT NULL,
  `Agama_Siswa` varchar(20) DEFAULT NULL,
  `Alamat_Siswa` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`NIS`),
  KEY `ID_Kelas` (`ID_Kelas`),
  CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`ID_Kelas`) REFERENCES `kelas` (`ID_Kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wali_kelas`
--

DROP TABLE IF EXISTS `wali_kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wali_kelas` (
  `ID_Walas` int(8) NOT NULL,
  `NIP` int(8) NOT NULL,
  PRIMARY KEY (`ID_Walas`),
  KEY `NIP` (`NIP`),
  CONSTRAINT `wali_kelas_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wali_kelas`
--

LOCK TABLES `wali_kelas` WRITE;
/*!40000 ALTER TABLE `wali_kelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `wali_kelas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-19  6:19:06
