-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL,
  `categories_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `brand` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `CategoriesID` (`categories_id`),
  CONSTRAINT `CategoriesID` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,1,'Panasonic Inverter 495 lít NR-CW530XMMV','42.990.000','Panasonic'),(2,1,'Panasonic Inverter 420 lít NR-BX471WGKV','20.990.000','Panasonic'),(3,1,'Samsung Inverter 276 lít RB27N4170BU','8.990.000','Samsung'),(4,1,'Samsung Inverter 488 lít RF48A4000B4/SV','16.990.000','Samsung'),(5,1,'LG Inverter 496 lít GR-X22MB','43.490.000','LG'),(6,1,'LG Inverter 494 lít GR-D22MB','35.490.000','LG'),(7,1,'LG Inverter 635 lít GR-X257MC','36.990.000','LG'),(8,5,'Smart Tivi LED LG 4K 55 inch 55UQ7550PSF','12.390.000','LG'),(9,5,'Smart Tivi OLED LG 4K 65 inch OLED65A2PSA','28.590.000','LG'),(10,5,'Google Tivi Sony 4K 85 inch KD-85X85K','50.900.000','Sony '),(11,5,'Google Tivi OLED Sony 4K 65 inch XR-65A80K','49.900.000','Sony '),(12,5,'Smart Tivi Samsung 4K 75 inch UA75AU7700KXXV','24.900.000','Samsung'),(13,5,'Smart Tivi Crystal Samsung UHD 4K 85 inch UA85BU8000KXXV','45.900.000','Samsung'),(14,4,'Over-The-Range Microwave 30\'\' Thermador','25.277.000','Thermador'),(15,4,'Monogram Speedcooking Oven ZSA1202PSS','46.000.000','Monogram'),(16,4,'Monogram Microwave Oven ZEM115SJSS','17.250.000','Monogram'),(17,4,'Lò vi sóng Samsung 23 lít MG23T5018CE/SV','3.690.000','Samsung'),(18,4,'Lò vi sóng Samsung 30 lít MG30T5018CK/SV','3.990.000','Samsung'),(19,4,'Lò vi sóng Panasonic 23 lít NN-CT36HBYUE','4.800.000','Panasonic'),(20,6,'Máy lạnh LG Inverter 2 HP V18ENF1','19.090.000','LG'),(21,6,'Máy lạnh Samsung Inverter 1 HP AR10TYGCDWKNSV','10.590.000','Samsung'),(22,6,'Máy lạnh LG Inverter 1.5 HP V13APIG','16.790.000','LG'),(23,6,'Máy lạnh Panasonic Inverter 2 HP CU/CS-XZ18ZKH-8','28.490.000','Panasonic'),(24,2,'Máy rửa chén Electrolux 1950W ESF5512LOX','20.490.000','Electrolux'),(25,2,'Máy rửa chén Bosch 2400W SMS63L08EA','15.990.000','Bosch '),(26,2,'Máy rửa bát Bosch SMS4HCI48E','24.900.000','Bosch '),(27,3,'Bếp từ đôi Electrolux EHI7260BB','8.990.000','Electrolux'),(28,3,'Bếp điện từ Bosch PPI82560MS','11.590.000','Bosch '),(29,3,'Bếp điện từ Bosch PID675DC1E','23.900.000','Bosch '),(30,3,'Bếp từ âm Electrolux LIT60336','13.900.000','Electrolux');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-29 14:56:04
