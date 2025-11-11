-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: getfylig_nismapp
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_page`
--

DROP TABLE IF EXISTS `about_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `column_one` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `column_two` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `mission_title` varchar(150) COLLATE utf8mb3_unicode_ci NOT NULL,
  `mission_content` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `core_value_title` varchar(150) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `core_value_content` text COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_page`
--

LOCK TABLES `about_page` WRITE;
/*!40000 ALTER TABLE `about_page` DISABLE KEYS */;
INSERT INTO `about_page` VALUES (1,'We strengthen relationships between London-based Nigerian professionals and counterparts in Nigeria.','Founded in 2008, NISM (Nigerians In The Square Mile) began as an association of Nigerian professionals based in the city of London.\r\n\r\nOver the years, we have grown to 2000 members, including high-ranking professionals who own or work in leading organizations within London and across the world. We are very proud of the successful and talented Nigerians who make up our association.\r\n\r\nSince its inception, NISM has played a pivotal role in fostering collaboration and knowledge exchange among Nigerian professionals globally. Our association serves as a platform for networking, mentorship, and professional development, facilitating opportunities for members to engage in meaningful dialogue and initiatives that contribute to both personal growth and societal impact. Through regular events, seminars, and partnerships with key stakeholders, NISM continues to promote excellence and leadership among Nigerian professionals in various sectors.','Mission Objectives','To serve as a think tank, and contribute to the development of a vibrant and professional financial services industry in Nigeria.','Our Core Values','We celebrate the rich diversity and achievements of Nigerians while contributing positively to the cultural landscape of London. Our organization stands as a testament to the values of integrity, collaboration, and innovation that define the Nigerian professional community both locally and internationally.');
/*!40000 ALTER TABLE `about_page` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-16 16:03:20
