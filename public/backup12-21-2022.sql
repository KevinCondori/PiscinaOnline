-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: proyectopiscina
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_nit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_entryprice` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,'Sauna Piscina Israel','Sauna y Piscina con ambientes cómodos, cuenta con bebidas y alimentos para todo gusto.','1638577499logocompany.png','1665979','60505288','kevin.condori699@gmail.com','Av. La Paz cera a la plaza 16 de Julio','25','2021-12-03 19:15:42','2022-09-25 17:37:25');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consumptions`
--

DROP TABLE IF EXISTS `consumptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consumptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `consumption_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumption_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumption_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consumptions_customer_id_foreign` (`customer_id`),
  KEY `consumptions_product_id_foreign` (`product_id`),
  KEY `consumptions_user_id_foreign` (`user_id`),
  CONSTRAINT `consumptions_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `consumptions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `consumptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consumptions`
--

LOCK TABLES `consumptions` WRITE;
/*!40000 ALTER TABLE `consumptions` DISABLE KEYS */;
INSERT INTO `consumptions` VALUES (1,1,1,2,'13/11/2021','1','Pedido','2021-11-13 18:08:06','2021-11-13 18:08:06'),(2,2,1,7,'13/11/2021','1','Pedido','2021-11-13 18:08:59','2021-11-13 18:08:59'),(3,1,1,3,'13/11/2021','1','Pedido','2021-11-13 18:10:02','2021-11-13 18:10:02'),(4,1,1,3,'13/11/2021','1','Pedido','2021-11-27 02:07:57','2021-11-27 02:07:57'),(5,4,1,2,'13/11/2021','1','Pedido','2021-11-27 22:00:25','2021-11-27 22:00:25'),(6,4,1,3,'13/11/2021','1','Pedido','2021-11-27 22:00:37','2021-11-27 22:00:37'),(7,5,1,5,'13/11/2021','1','Pedido','2021-11-27 22:01:02','2021-11-27 22:01:02'),(8,5,1,7,'13/11/2021','1','Pedido','2021-11-27 22:01:11','2021-11-27 22:01:11'),(9,5,1,3,'13/11/2021','1','Pedido','2021-11-27 22:01:26','2021-11-27 22:01:26'),(10,7,1,7,'13/11/2021','1','Pedido','2021-11-30 22:48:51','2021-11-30 22:48:51'),(11,7,1,3,'13/11/2021','1','Pedido','2021-11-30 22:49:32','2021-11-30 22:49:32'),(12,6,1,3,'13/11/2021','1','Pedido','2021-12-06 03:41:42','2021-12-06 03:41:42'),(13,6,1,4,'13/11/2021','1','Pedido','2021-12-06 03:41:50','2021-12-06 03:41:50'),(14,2,1,2,'2021-12-08','1','Pedido','2021-12-08 16:11:24','2021-12-08 16:11:24'),(15,2,1,3,'2021-12-08','1','Pedido','2021-12-08 16:12:33','2021-12-08 16:12:33'),(16,2,1,6,'2021-12-08','1','Pedido','2021-12-08 16:16:15','2021-12-08 16:16:15'),(17,5,1,3,'2021-12-08','1','Pedido','2021-12-08 16:20:10','2021-12-08 16:20:10'),(18,1,1,3,'2021-12-08','1','Pedido','2021-12-08 21:31:14','2021-12-08 21:31:14'),(19,1,1,3,'2022-02-18','1','Pedido','2022-02-18 23:42:38','2022-02-18 23:42:38'),(20,1,1,7,'2022-02-28','1','Pedido','2022-03-01 00:48:04','2022-03-01 00:48:04'),(21,1,1,4,'2022-03-13','1','Pedido','2022-03-13 22:08:49','2022-03-13 22:08:49'),(22,5,1,2,'2022-03-21','1','Pedido','2022-03-21 22:25:48','2022-03-21 22:25:48'),(23,5,1,3,'2022-03-21','1','Pedido','2022-03-21 22:25:56','2022-03-21 22:25:56'),(24,3,1,8,'2022-03-31','1','Pedido','2022-03-31 14:51:58','2022-03-31 14:51:58'),(25,5,1,4,'2022-04-04','1','Pedido','2022-04-04 22:40:42','2022-04-04 22:40:42'),(26,1,1,8,'2022-04-05','1','Pedido','2022-04-05 19:40:01','2022-04-05 19:40:01'),(27,9,1,5,'2022-04-12','1','Pedido','2022-04-12 21:14:18','2022-04-12 21:14:18'),(28,9,1,3,'2022-04-12','1','Pedido','2022-04-12 21:14:27','2022-04-12 21:14:27'),(29,1,1,4,'2022-04-18','1','Pedido','2022-04-18 23:59:07','2022-04-18 23:59:07'),(30,1,1,6,'2022-04-18','1','Pedido','2022-04-18 23:59:16','2022-04-18 23:59:16'),(31,1,1,3,'2022-04-18','1','Pedido','2022-04-18 23:59:22','2022-04-18 23:59:22'),(32,3,1,4,'2022-04-18','1','Pedido','2022-04-19 02:08:56','2022-04-19 02:08:56'),(33,3,1,3,'2022-04-18','1','Pedido','2022-04-19 02:09:01','2022-04-19 02:09:01'),(34,4,1,7,'2022-04-18','1','Pedido','2022-04-19 02:14:03','2022-04-19 02:14:03'),(35,5,1,2,'2022-04-18','1','Pedido','2022-04-19 02:20:09','2022-04-19 02:20:09'),(36,5,1,3,'2022-04-18','1','Pedido','2022-04-19 02:20:16','2022-04-19 02:20:16'),(37,9,1,4,'2022-05-31','1','Pedido','2022-05-31 21:27:05','2022-05-31 21:27:05'),(38,9,1,3,'2022-05-31','1','Pedido','2022-05-31 21:27:33','2022-05-31 21:27:33'),(39,10,1,4,'2022-08-23','4','Pedido','2022-08-24 01:35:10','2022-08-24 01:35:10'),(40,10,1,3,'2022-08-23','4','Pedido','2022-08-24 01:36:56','2022-08-24 01:36:56'),(41,10,1,7,'2022-08-23','4','Pedido','2022-08-24 01:37:42','2022-08-24 01:37:42'),(42,1,1,2,'2022-09-24','1','Pedido','2022-09-24 19:18:33','2022-09-24 19:18:33'),(43,2,1,6,'2022-09-24','1','Pedido','2022-09-24 19:18:46','2022-09-24 19:18:46'),(44,1,1,3,'2022-09-24','1','Pedido','2022-09-24 19:18:57','2022-09-24 19:18:57'),(45,1,1,8,'2022-09-25','1','Pedido','2022-09-25 17:21:58','2022-09-25 17:21:58'),(46,8,1,8,'2022-09-26','1','Pedido Entregado','2022-09-26 04:07:44','2022-09-26 20:54:07'),(47,8,1,3,'2022-09-26','2','Pedido Entregado','2022-09-26 04:08:17','2022-09-26 20:54:03'),(48,3,1,5,'2022-09-26','1','Pedido Entregado','2022-09-26 04:50:04','2022-09-26 20:54:20'),(49,6,1,6,'2022-09-26','2','Pedido Entregado','2022-09-26 15:33:32','2022-09-26 20:54:08'),(50,6,1,3,'2022-09-26','1','Pedido Entregado','2022-09-26 15:33:47','2022-09-26 20:54:08'),(51,6,1,3,'2022-09-26','1','Pedido Entregado','2022-09-26 15:33:52','2022-09-26 20:54:08'),(52,11,1,8,'2022-09-26','1','Pedido Entregado','2022-09-26 18:47:28','2022-09-26 20:54:06'),(53,11,1,3,'2022-09-26','1','Pedido Entregado','2022-09-26 18:47:33','2022-09-26 20:54:02'),(54,4,1,3,'2022-09-26','2','Pedido','2022-09-26 20:48:47','2022-09-26 20:48:47'),(55,12,1,3,'2022-09-27','2','Pedido Entregado','2022-09-28 02:05:12','2022-09-28 02:06:52'),(56,12,1,6,'2022-09-27','1','Pedido Entregado','2022-09-28 02:05:43','2022-09-28 02:06:47'),(57,12,1,3,'2022-09-28','2','Pedido Entregado','2022-09-28 20:22:13','2022-09-28 20:23:23'),(58,12,1,6,'2022-09-28','1','Pedido Entregado','2022-09-28 20:22:28','2022-09-28 20:23:22');
/*!40000 ALTER TABLE `consumptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupon_useds`
--

DROP TABLE IF EXISTS `coupon_useds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupon_useds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `coupon_useds_invoice_id_foreign` (`invoice_id`),
  CONSTRAINT `coupon_useds_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupon_useds`
--

LOCK TABLES `coupon_useds` WRITE;
/*!40000 ALTER TABLE `coupon_useds` DISABLE KEYS */;
INSERT INTO `coupon_useds` VALUES (1,'promocionmarzo','2022-04-05','25','1','1',16,'2022-04-05 19:40:58','2022-04-05 19:40:58');
/*!40000 ALTER TABLE `coupon_useds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_lockers`
--

DROP TABLE IF EXISTS `customer_lockers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_lockers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `locker_id` bigint(20) unsigned NOT NULL,
  `customer_id` bigint(20) unsigned NOT NULL,
  `locker_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locker_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_lockers_locker_id_foreign` (`locker_id`),
  KEY `customer_lockers_customer_id_foreign` (`customer_id`),
  CONSTRAINT `customer_lockers_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `customer_lockers_locker_id_foreign` FOREIGN KEY (`locker_id`) REFERENCES `lockers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_lockers`
--

LOCK TABLES `customer_lockers` WRITE;
/*!40000 ALTER TABLE `customer_lockers` DISABLE KEYS */;
INSERT INTO `customer_lockers` VALUES (1,2,2,'2021-11-26','Ocupado',NULL,NULL),(2,3,1,'2021-11-26','Ocupado',NULL,NULL),(3,4,5,'2021-11-27','Ocupado','2021-11-26 03:47:59','2021-11-26 03:47:59'),(4,5,4,'2021-11-27','Ocupado','2021-11-26 03:55:30','2021-11-26 03:55:30'),(5,7,3,'2021-11-28','Ocupado','2021-11-26 03:57:24','2021-11-26 03:57:24'),(6,7,6,'2021-11-29','Ocupado','2021-11-26 03:59:44','2021-11-26 03:59:44'),(7,2,7,'2021-11-30','Ocupado','2021-11-30 22:47:19','2021-11-30 22:47:19'),(8,2,6,'2021-12-05','Ocupado','2021-12-06 03:41:17','2021-12-06 03:41:17'),(9,2,2,'2021-12-08','Ocupado','2021-12-08 16:11:09','2021-12-08 16:11:09'),(10,3,5,'2021-12-08','Ocupado','2021-12-08 16:19:49','2021-12-08 16:19:49'),(11,4,1,'2021-12-08','Ocupado','2021-12-08 21:29:49','2021-12-08 21:29:49'),(12,8,1,'2022-02-18','Ocupado','2022-02-18 23:41:07','2022-02-18 23:41:07'),(13,2,2,'2022-03-08','Ocupado','2022-03-08 16:05:28','2022-03-08 16:05:28'),(14,3,1,'2022-03-13','Ocupado','2022-03-13 21:46:54','2022-03-13 21:46:54'),(15,3,5,'2022-03-21','Ocupado','2022-03-21 22:25:28','2022-03-21 22:25:28'),(16,4,3,'2022-03-31','Ocupado','2022-03-31 14:51:36','2022-03-31 14:51:36'),(17,5,5,'2022-04-04','Ocupado','2022-04-04 22:40:24','2022-04-04 22:40:24'),(18,7,1,'2022-04-05','Ocupado','2022-04-05 19:39:32','2022-04-05 19:39:32'),(19,9,9,'2022-04-12','Ocupado','2022-04-12 21:13:40','2022-04-12 21:13:40'),(20,7,1,'2022-04-18','Ocupado','2022-04-18 23:58:42','2022-04-18 23:58:42'),(21,9,3,'2022-04-18','Ocupado','2022-04-19 02:08:43','2022-04-19 02:08:43'),(22,7,4,'2022-04-18','Ocupado','2022-04-19 02:13:51','2022-04-19 02:13:51'),(23,7,1,'2022-04-18','Ocupado','2022-04-19 02:16:28','2022-04-19 02:16:28'),(24,2,5,'2022-04-18','Ocupado','2022-04-19 02:19:46','2022-04-19 02:19:46'),(25,2,9,'2022-05-31','Ocupado','2022-05-31 21:26:45','2022-05-31 21:26:45'),(26,2,10,'2022-08-23','Ocupado','2022-08-24 01:33:07','2022-08-24 01:33:07'),(27,2,11,'2022-09-22','Ocupado','2022-09-22 18:14:31','2022-09-22 18:14:31'),(28,3,2,'2022-09-24','Ocupado','2022-09-24 19:14:41','2022-09-24 19:14:41'),(29,4,1,'2022-09-24','Ocupado','2022-09-24 19:15:03','2022-09-24 19:15:03'),(30,2,1,'2022-09-25','Ocupado','2022-09-25 17:18:24','2022-09-25 17:18:24'),(31,3,2,'2022-09-25','Ocupado','2022-09-25 17:18:37','2022-09-25 17:18:37'),(32,7,8,'2022-09-26','Ocupado','2022-09-26 04:07:23','2022-09-26 04:07:23'),(33,7,3,'2022-09-26','Ocupado','2022-09-26 04:48:27','2022-09-26 04:48:27'),(34,7,6,'2022-09-26','Ocupado','2022-09-26 15:32:35','2022-09-26 15:32:35'),(35,2,1,'2022-09-26','Ocupado','2022-09-26 18:22:57','2022-09-26 18:22:57'),(36,3,2,'2022-09-26','Ocupado','2022-09-26 18:32:33','2022-09-26 18:32:33'),(37,5,11,'2022-09-26','Ocupado','2022-09-26 18:46:48','2022-09-26 18:46:48'),(38,7,7,'2022-09-26','Ocupado','2022-09-26 18:56:11','2022-09-26 18:56:11'),(39,7,8,'2022-09-26','Ocupado','2022-09-26 18:57:42','2022-09-26 18:57:42'),(40,7,8,'2022-09-26','Ocupado','2022-09-26 18:59:49','2022-09-26 18:59:49'),(41,5,5,'2022-09-26','Ocupado','2022-09-26 19:01:13','2022-09-26 19:01:13'),(42,2,1,'2022-09-26','Ocupado','2022-09-26 19:03:32','2022-09-26 19:03:32'),(43,9,3,'2022-09-26','Ocupado','2022-09-26 19:27:16','2022-09-26 19:27:16'),(44,10,4,'2022-09-26','Ocupado','2022-09-26 20:44:21','2022-09-26 20:44:21'),(45,9,12,'2022-09-27','Ocupado','2022-09-27 22:50:07','2022-09-27 22:50:07'),(46,8,12,'2022-09-28','Ocupado','2022-09-28 20:20:14','2022-09-28 20:20:14');
/*!40000 ALTER TABLE `customer_lockers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Natalia','Fernandez','LP','8934789','natalia@gmail.com','70666175',NULL,NULL),(2,'Denis','Zambrana','LP','78328723','denis@gmail.com','73735766','2021-11-28 03:32:05',NULL),(3,'Sabrina','Carpenter','La Paz','14456532','kevinkira699@gmail.com','70666175','2021-11-26 03:32:05','2021-11-26 03:32:05'),(4,'Karen','Vallejo','La Paz','15343534','kevinthephenomenal@gmail.com','73735766','2021-11-26 03:39:21','2021-11-26 03:39:21'),(5,'Valero','Sofia','La Paz','14546535','75805816','70666175','2021-11-26 03:47:59','2021-11-26 03:47:59'),(6,'Andrea','Zambrana','La Paz','1529032','andrea@gmail.com','70666175','2021-11-26 03:59:44','2021-11-26 03:59:44'),(7,'Elsberg','Bernabe','La Paz','9876875','capocarls@gmail.com','70666175','2021-11-30 22:47:19','2021-11-30 22:47:19'),(8,'Teddy','Vargas Fernandez','La Paz','18457649','teddy@gmail.com','69744120','2021-12-05 00:42:26','2021-12-05 00:42:26'),(9,'Andres','Copa','La Paz','43543543','natalia@gmail.com','70666175','2022-04-12 21:13:40','2022-04-12 21:13:40'),(10,'Adima','Vasquez','La Paz','3451448017','denis@gmail.com','65533537','2022-08-24 01:33:07','2022-08-24 01:33:07'),(11,'Vanessa','Calderon','La Paz','17274892','vanessa@gmail.com','75805816','2022-09-22 18:14:31','2022-09-22 18:14:31'),(12,'Carlos','Cahuya Molle','La Paz','7055297','capocarls@gmail.com','70666175','2022-09-27 22:50:07','2022-09-27 22:50:07');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `eventname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eventdescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eventimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eventpost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_public` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_customer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_ci_customer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Evento de fin de curso','1','Evento de fin de curso de Ingenieria Comercial','postimages/9JOwSAko6F8hrOQF1RETbEivploENxAPJLvpvxnA.jpg','2021-12-05',NULL,NULL,'400','Eventos Generales','Si',NULL,'Fernandez','1579373','2021-12-05 23:25:05','2021-12-05 23:25:05');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_products`
--

DROP TABLE IF EXISTS `history_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `history_stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history_add_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_products`
--

LOCK TABLES `history_products` WRITE;
/*!40000 ALTER TABLE `history_products` DISABLE KEYS */;
INSERT INTO `history_products` VALUES (1,'20','40','6','1','5','Adición de hamburguesas','2022-04-18 00:44:58','2022-04-18 00:44:58'),(2,'1','10','3','1','20','Adición de Cocal cola de 500ml','2022-09-26 20:48:21','2022-09-26 20:48:21'),(3,'1','10','4','1','15','Adición de pollo broaster para este mes','2022-09-28 02:02:20','2022-09-28 02:02:20');
/*!40000 ALTER TABLE `history_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoicecontrols`
--

DROP TABLE IF EXISTS `invoicecontrols`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoicecontrols` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `control_auth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `control_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `control_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `control_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `control_activity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoicecontrols`
--

LOCK TABLES `invoicecontrols` WRITE;
/*!40000 ALTER TABLE `invoicecontrols` DISABLE KEYS */;
INSERT INTO `invoicecontrols` VALUES (1,'7904006306693','zZ7Z]xssKqkEf_6K9uH(EcV+%x+u[Cca9T%+_$kiLjT8(zr3T9b5Fx2xG-D+_EBS','1','2022-12-02','Snacks, confitería y salones de te','2022-04-02 21:59:06','2022-09-24 19:13:49');
/*!40000 ALTER TABLE `invoicecontrols` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `company_id` bigint(20) unsigned NOT NULL,
  `invoice_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_ci_customer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_price` double(10,2) NOT NULL,
  `invoice_entryprice` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_auth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_nit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_limit_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_control` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `invoices_company_id_foreign` (`company_id`),
  KEY `invoices_consumption_id_foreign` (`customer_id`),
  CONSTRAINT `invoices_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  CONSTRAINT `invoices_consumption_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
INSERT INTO `invoices` VALUES (8,2,1,'Zambrana','78328723',40.00,'25','2021-11-26','Venta exitosa',NULL,NULL,'8','2022-11-26',NULL,'2021-11-27 03:34:50','2021-11-27 03:34:50'),(9,1,1,'Fernandez','8934789',43.00,'25','2021-11-26','Venta exitosa',NULL,NULL,NULL,NULL,NULL,'2021-11-27 03:44:49','2021-11-27 03:44:49'),(10,5,1,'Valero','14546535',53.00,'25','2021-11-27','Venta exitosa',NULL,NULL,NULL,NULL,NULL,'2021-11-27 22:35:43','2021-11-27 22:35:43'),(11,4,1,'Vallejo','15343534',38.00,'25','2021-11-27','Venta exitosa',NULL,NULL,NULL,NULL,NULL,'2021-11-27 22:39:25','2021-11-27 22:39:25'),(12,7,1,'Sin Nombre','0',45.00,'25','2021-11-30','Venta exitosa',NULL,NULL,NULL,NULL,NULL,'2021-11-30 22:51:58','2021-11-30 22:51:58'),(13,6,1,'1529032','Zambrana',40.00,'25','2021-12-05','Venta exitosa',NULL,NULL,NULL,NULL,NULL,'2021-12-06 03:49:59','2021-12-06 03:49:59'),(14,1,1,'Condori','12541815',48.00,'25','2021-12-08','Venta exitosa',NULL,NULL,NULL,NULL,NULL,'2021-12-08 21:34:10','2021-12-08 21:34:10'),(15,1,1,'Sin Nombre','0',78.00,'25','2022-03-13','Venta exitosa',NULL,NULL,NULL,NULL,NULL,'2022-03-13 22:27:20','0000-00-00 00:00:00'),(16,1,1,'Sin Nombre','0',65.00,'25','2022-04-05','Venta exitosa',NULL,NULL,NULL,NULL,NULL,'2022-04-05 19:40:58','2022-04-05 19:40:58'),(17,9,1,'TestInvocie','43543543test',38.00,'25','2022-04-12','Venta exitosa',NULL,NULL,'17','2022-12-2',NULL,'2022-04-12 21:15:08','2022-04-12 21:15:08'),(18,1,1,'Natalia Fernandez','8934789',115.00,'25','2022-04-18','Venta exitosa','7904006306693','1665979','18','2022-12-02','E5-A2-6B-CA','2022-04-19 02:06:55','2022-04-19 02:06:55'),(19,3,1,'Sabrina Carpenter','14456532',52.00,'25','2022-04-18','Venta exitosa','7904006306693','1665979','19','2022-12-02','D3-F7-1D-6C','2022-04-19 02:09:20','2022-04-19 02:09:20'),(20,4,1,'Karen Vallejo','15343534',53.00,'25','2022-04-18','Venta exitosa','7904006306693','1665979','20','2022-12-02','EC-98-82-99','2022-04-19 02:14:37','2022-04-19 02:14:37'),(21,1,1,'Natalia Fernandez','8934789',115.00,'25','2022-04-18','Venta exitosa','7904006306693','1665979','21','2022-12-02','F8-45-E0-B9','2022-04-19 02:16:50','2022-04-19 02:16:50'),(22,5,1,'Valero Sofia','14546535',94.00,'25','2022-04-18','Venta exitosa','7904006306693','1665979','22','2022-12-02','5E-C0-8D-F5','2022-04-19 02:20:42','2022-04-19 02:20:42'),(23,9,1,'43543543','Test1 Test1',53.00,'25','2022-05-31','Venta exitosa','7904006306693','1665979','23','2022-12-02','CD-7E-0D-72','2022-05-31 21:42:12','2022-05-31 21:42:12'),(24,10,1,'Vasquez','3451448017',145.00,'25','2022-08-23','Venta exitosa','7904006306693','1665979','24','2022-12-02','C3-3B-A2-8D','2022-08-24 01:39:04','2022-08-24 01:39:04'),(25,1,1,'Natalia Fernandez','8934789',140.00,'25','2022-09-25','Venta exitosa','7904006306693','1665979','25','2022-12-02','B8-97-FC-0F','2022-09-26 03:59:39','2022-09-26 03:59:39'),(26,8,1,'Teddy Vargas Fernandez','18457649',47.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','26','2022-12-02','CE-18-36-AE','2022-09-26 04:09:12','2022-09-26 04:09:12'),(27,3,1,'Sabrina Carpenter','14456532',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','27','2022-12-02','CF-EB-68-2D','2022-09-26 04:50:21','2022-09-26 04:50:21'),(28,6,1,'Andrea Zambrana','1529032',70.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','28','2022-12-02','A0-0E-F1-C6','2022-09-26 17:32:42','2022-09-26 17:32:42'),(29,1,1,'Natalia Fernandez','8934789',140.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','29','2022-12-02','E2-AB-55-FA','2022-09-26 18:23:43','2022-09-26 18:23:43'),(30,2,1,'Denis Zambrana','78328723',73.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','30','2022-12-02','A2-6E-40-D3','2022-09-26 18:32:57','2022-09-26 18:32:57'),(31,11,1,'Vanessa Calderon','17274892',42.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','31','2022-12-02','47-AE-48-E3','2022-09-26 18:47:53','2022-09-26 18:47:53'),(32,7,1,'Elsberg Bernabe','9876875',45.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','32','2022-12-02','D4-3B-DD-63','2022-09-26 18:56:50','2022-09-26 18:56:50'),(33,8,1,'Teddy Vargas Fernandez','18457649',47.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','33','2022-12-02','4F-B0-0D-4F','2022-09-26 18:58:01','2022-09-26 18:58:01'),(34,8,1,'Teddy Vargas Fernandez','18457649',47.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','34','2022-12-02','E0-94-B3-30','2022-09-26 19:00:05','2022-09-26 19:00:05'),(35,11,1,'Vanessa Calderon','17274892',42.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','35','2022-12-02','9D-7B-27-2C','2022-09-26 19:01:29','2022-09-26 19:01:29'),(36,1,1,'Natalia Fernandez','8934789',140.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','36','2022-12-02','B0-0D-CC-02','2022-09-26 19:03:49','2022-09-26 19:03:49'),(37,3,1,'Sabrina Carpenter','14456532',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','37','2022-12-02','C2-E7-D2-AB','2022-09-26 19:27:33','2022-09-26 19:27:33'),(38,3,1,'Sin Nombre','0',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','38','2022-12-02','F3-C8-3F-47','2022-09-26 19:28:41','2022-09-26 19:28:41'),(39,3,1,'Sin Nombre','0',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','39','2022-12-02','4E-72-83-05','2022-09-26 19:28:44','2022-09-26 19:28:44'),(40,3,1,'Sin Nombre','0',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','40','2022-12-02','C2-D1-D0-98','2022-09-26 19:28:48','2022-09-26 19:28:48'),(41,3,1,'Sin Nombre','0',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','41','2022-12-02','8E-59-42-20','2022-09-26 19:29:24','2022-09-26 19:29:24'),(42,3,1,'Sin Nombre','0',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','42','2022-12-02','18-A3-99-93','2022-09-26 19:30:05','2022-09-26 19:30:05'),(43,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','43','2022-12-02','C8-C7-52-A6','2022-09-26 19:31:23','2022-09-26 19:31:23'),(44,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','44','2022-12-02','31-10-13-8F','2022-09-26 19:31:59','2022-09-26 19:31:59'),(45,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','45','2022-12-02','0B-10-C8-4B','2022-09-26 19:32:03','2022-09-26 19:32:03'),(46,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','46','2022-12-02','99-8C-EC-5F','2022-09-26 19:32:13','2022-09-26 19:32:13'),(47,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','47','2022-12-02','66-32-D9-D3','2022-09-26 19:32:56','2022-09-26 19:32:56'),(48,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','48','2022-12-02','AB-54-93-08','2022-09-26 19:36:08','2022-09-26 19:36:08'),(49,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','49','2022-12-02','CA-0F-35-CE','2022-09-26 19:37:17','2022-09-26 19:37:17'),(50,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','50','2022-12-02','B2-6E-2E-CA','2022-09-26 19:38:03','2022-09-26 19:38:03'),(51,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','51','2022-12-02','C2-C1-C1-BB','2022-09-26 19:38:25','2022-09-26 19:38:25'),(52,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','52','2022-12-02','FF-97-FE-95','2022-09-26 19:41:14','2022-09-26 19:41:14'),(53,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','53','2022-12-02','C4-BA-44-AA','2022-09-26 19:44:41','2022-09-26 19:44:41'),(54,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','54','2022-12-02','80-8D-D4-63','2022-09-26 19:47:09','2022-09-26 19:47:09'),(55,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','55','2022-12-02','78-09-AE-81','2022-09-26 20:04:49','2022-09-26 20:04:49'),(56,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','56','2022-12-02','C5-27-B2-29','2022-09-26 20:07:46','2022-09-26 20:07:46'),(57,3,1,'','',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','57','2022-12-02','D9-F2-8B-2B','2022-09-26 20:08:45','2022-09-26 20:08:45'),(58,3,1,'SabrinaCarpenter','14456532',60.00,'25','2022-09-26','Venta exitosa','7904006306693','1665979','58','2022-12-02','FC-3B-66-D6','2022-09-26 20:21:00','2022-09-26 20:21:00'),(59,12,1,'Carlos Cahuya Molle','7055297',45.00,'25','2022-09-27','Venta exitosa','7904006306693','1665979','59','2022-12-02','4C-E5-FA-86','2022-09-28 02:08:18','2022-09-28 02:08:18'),(60,12,1,'Carlos Cahuya Molle','7055297',45.00,'25','2022-09-28','Venta exitosa','7904006306693','1665979','60','2022-12-02','DE-29-75-1C','2022-09-28 20:24:31','2022-09-28 20:24:31');
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lockers`
--

DROP TABLE IF EXISTS `lockers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lockers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `locker_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locker_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locker_available` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locker_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lockers`
--

LOCK TABLES `lockers` WRITE;
/*!40000 ALTER TABLE `lockers` DISABLE KEYS */;
INSERT INTO `lockers` VALUES (2,'002','Casillero Metal en buenas condiciones','Disponible','Activo','2021-09-30 03:03:17','2022-09-26 19:03:49'),(3,'003','Casillero metal en buenas condiciones','Disponible','Activo','2021-09-30 03:03:27','2022-09-26 18:32:57'),(4,'004','Casillero de Metal en buenas condiciones','Disponible','Activo','2021-09-30 03:17:00','2022-09-24 19:15:03'),(5,'005','Casillero de Metal en buenas condiciones','Disponible','Activo','2021-09-30 03:18:25','2022-09-26 19:01:29'),(6,'006','Casillero de Metal en buenas condiciones','Disponible','Activo','2021-09-30 07:43:58','2021-09-30 07:43:58'),(7,'007','Casillero de Metal en buenas condiciones','Disponible','Activo','2021-09-30 07:44:10','2022-09-26 20:21:00'),(8,'008','Casillero de Metal en buenas condiciones','Disponible','Activo','2021-10-01 02:05:00','2022-09-28 20:24:31'),(9,'009','Casillero en buenas condiciones de metal','Disponible','Activo','2021-12-04 01:32:37','2022-12-12 22:52:43'),(10,'010','Casillero en buen estado','Ocupado','Activo','2021-12-04 01:33:00','2022-09-26 20:44:21');
/*!40000 ALTER TABLE `lockers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_09_14_195041_create_sessions_table',1),(7,'2021_09_18_211042_create_customers_table',1),(8,'2021_09_18_211246_create_product_types_table',1),(9,'2021_09_18_211316_create_products_table',1),(10,'2021_09_18_211741_create_lockers_table',1),(11,'2021_09_18_211903_create_customer_lockers_table',1),(12,'2021_09_18_212000_create_companies_table',1),(13,'2021_09_18_212210_create_consumptions_table',1),(14,'2021_09_18_212340_create_invoices_table',1),(15,'2021_11_30_153939_create_modules_table',2),(16,'2021_12_02_000709_create_moduleabouts_table',3),(17,'2021_12_02_234226_create_posts_table',4),(18,'2021_12_04_172434_create_reservations_table',5),(19,'2021_12_04_205811_create_events_table',6),(20,'2021_12_08_043033_create_roleusers_table',7),(21,'2022_02_28_233713_create_promotions_table',8),(22,'2022_03_25_115954_create_coupon_useds_table',9),(23,'2022_04_17_200807_create_history_products_table',10),(24,'2022_04_18_171346_create_invoicecontrols_table',11),(25,'2022_09_08_233047_create_notifications_table',12),(26,'2022_09_27_134746_create_systemlogs_table',13);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moduleabouts`
--

DROP TABLE IF EXISTS `moduleabouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moduleabouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `aboutname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `aboutdescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutexperience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutmenu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutplace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutcharacters` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageabout1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageabout2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modulestate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moduleabouts`
--

LOCK TABLES `moduleabouts` WRITE;
/*!40000 ALTER TABLE `moduleabouts` DISABLE KEYS */;
INSERT INTO `moduleabouts` VALUES (1,'Acerca de nosotros',1,'Una piscina donde puedes nadar, te puedes relajar en las saunas, disfrutar del exquisito menu.','5','20','1','Un lugar para relajarse y divertirse con todas las comodidades desde Sauna Seco y Vapor hasta Piscinas, ademas contamos con un menu variado.','1638501772about.jpg','1638501772about-1.jpg','Activado','2021-12-02 23:29:01','2021-12-03 03:22:52');
/*!40000 ALTER TABLE `moduleabouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `modulename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `moduledescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modulestate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (1,'Acerca de Nosotros',1,'Descripción de la empresa tipo presentación','Activado','2021-11-30 20:17:45','2022-04-09 03:03:54'),(2,'Especialidades Nuestro Menú',1,'Muestra el menú los productos que tenemos','Activado','2021-11-30 20:17:45','2021-11-30 20:17:45'),(3,'Servicios',1,'Se muestra un breve resumen de nuestros servicios al cliente','Activado','2021-11-30 21:27:12','2021-11-30 22:58:57'),(4,'Caracteristicas',1,'Muestra los clientes que ya pasaron por nuestras instalaciones y algunas caracteristicas','Activado','2021-11-30 21:40:08','2021-11-30 21:40:08');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `notification_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,'Mensaje de bienvenida','Bienvenidos a la nueva Sauna y Piscina Israel! Los esperamos😃',NULL,'2022-09-10 22:37:28','2022-09-10 22:37:28'),(2,'Mensaje de presentación de piscina','Bienvenidos a la piscina en este mes de septiembre',NULL,'2022-09-28 01:59:18','2022-09-28 01:59:18'),(3,'SALUDO','SALUDOS CON MENSAJE DEL BACKEND BUENOS DIAS :)',NULL,'2022-09-28 13:10:18','2022-09-28 13:10:18'),(4,'SALUDO DE RECUERDO','Buenos dias no olvides que puedes pasar por nuestras instalaciones :)',NULL,'2022-09-28 13:12:10','2022-09-28 13:12:10'),(5,'Saludos de dia','Saludos no olvides que puedes pasar a disfrutar de un pollo broaster te esperamos :)',NULL,'2022-09-28 13:17:34','2022-09-28 13:17:34'),(6,'DIA DE LA MUJER','No olvides usar el cupon en nuestras instalaciones',NULL,'2022-09-28 20:15:28','2022-09-28 20:15:28');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `namepost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionpost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagepost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Helados nuevos','Helados esta semana','postimages/fjjAPME6ujZV1EzjLKlrG7TEpBdd5s2ahGIHs03k.jpg','1','2021-12-03 16:26:15','2021-12-03 16:26:15'),(3,'Nuestros helados te esperan','Los mejores helados disponibles desde hoy','postimages/fjjAPME6ujZV1EzjLKlrG7TEpBdd5s2ahGIHs03k.jpg','1','2021-12-03 17:25:40','2021-12-03 17:25:40'),(4,'Evento de fin de curso Ingenieria Comercial','El evento se realizara en instalaciones de Sauna Piscina Israel, gracias por su confianza','postimages/9JOwSAko6F8hrOQF1RETbEivploENxAPJLvpvxnA.jpg','1','2021-12-05 23:25:05','2021-12-05 23:25:05');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_types`
--

DROP TABLE IF EXISTS `product_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeproduct_state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_types`
--

LOCK TABLES `product_types` WRITE;
/*!40000 ALTER TABLE `product_types` DISABLE KEYS */;
INSERT INTO `product_types` VALUES (1,'Comida','Alimentos','Activo',NULL,'2021-12-04 02:51:02'),(4,'Plato Especial','alimentos','Activo','2021-09-20 02:56:40','2021-12-04 02:51:03'),(5,'Bebidas','refrescos y jugos naturales','Activo','2021-09-20 02:56:46','2021-12-04 02:51:04');
/*!40000 ALTER TABLE `product_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_type_id` bigint(20) unsigned NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_cost` double(10,2) DEFAULT NULL,
  `product_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_product_type_id_foreign` (`product_type_id`),
  CONSTRAINT `products_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,1,'Salchipapa','Salchicha. papa, postre','7',8.00,5.00,'10','productimages/salchipapa.jpg','Activo',NULL,'2022-09-24 19:18:33'),(3,5,'Coca Cola','Refresco gas','15',5.00,4.00,'30','productimages/cocacola.jpg','Activo',NULL,'2022-09-28 20:22:13'),(4,1,'Pollo broaster','pollo con papas','16',10.00,8.00,'25','productimages/Pollo broaster.jpg','Activo',NULL,'2022-09-28 02:02:20'),(5,1,'Pollo spiedo','Pollo con papas y arroz aderesos','8',8.00,6.00,'10','productimages/Pollo spiedo.png','Activo',NULL,'2022-09-26 04:50:04'),(6,1,'Hamburguesa','Hamburguesa con carne y papas','19',10.00,7.00,'45','productimages/hamburguesa.jpg','Activo','2021-10-28 04:28:02','2022-09-28 20:22:28'),(7,4,'Pique Macho','Papas, salchicha, aderesos, cebolla, huevo','4',15.00,10.00,'10','productimages/pique macho.jpg','Activo','2021-10-28 04:48:40','2022-08-24 01:37:42'),(8,1,'Sajta','Pollo','15',12.00,7.00,'15','productimages/Sajta.jpg','Activo','2021-10-28 04:50:22','2022-09-26 18:47:28'),(12,5,'Fanta Naranja','Refresco de 500ml','15',5.00,4.00,'15','productimages/fanta.jpg','Activo','2022-09-27 19:45:29','2022-09-27 19:45:29'),(13,5,'Sprite','Refresco sabor limón 500ml','15',5.00,4.00,'15','productimages/ti6aQMTLCEJw9mBJaVlmueZ2itPm21ujmwuXTNUQ.jpg','Activo','2022-09-27 20:01:51','2022-09-27 20:01:51');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `promo_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_canal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotions`
--

LOCK TABLES `promotions` WRITE;
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;
INSERT INTO `promotions` VALUES (1,'PROMO MARZO','Promoción por el mes de marzo para nuestros clientes de la Piscina.','MARZO2022','2022-03-06','2022-03-08','25','1','Aprovecha este descuento en tu consumo en la piscina este mes de marzo.','3','promoimages/WbZB81b1N7XioujcWiHakjVll5yiDO1rlkLxQHFa.png','3','Desactivado','2022-03-07 22:04:36','2022-04-05 19:40:58'),(2,'PROMO BIENVENIDA','Promoción de bienvenida','CUPON1','2022-03-03','2022-03-05','25','1','PROMO DE PRUEBA CUPON1','3','promoimages/uCGUYm1c52cL1asZoQT7GpMQXgRr8upfdakToUyn.png','1','Activado','2022-03-07 22:13:31','2022-03-07 22:13:31'),(6,'Promo Septiembre','Promocion por el mes del amor de 10bs','SEPT21','2022-09-27','2022-09-28','10','0','Aprovecha en este mes del amor un descuento en tu consumo','promo de consumo','promoimages/G6zRl8dZ41N2KVDlDprLapgx38GjuCKhjK89Avlc.jpg','2','Activado','2022-09-28 00:05:11','2022-09-28 00:05:11'),(10,'PROMO OCTUBRE','Promocion por el dia de la mujer','OCT34','2022-09-28','2022-10-05','10','0','Aprovecha el descuento por el mes del dia de la mujer boliviana','promo de consumo','promoimages/hiYcFxOjkcmy2GvGmXdPOgNXjn1zLIshAW7JCcH4.jpg','1','Activado','2022-09-28 20:13:19','2022-09-28 20:13:19');
/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `reservation_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reservation_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) unsigned NOT NULL,
  `reservation_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reservation_state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservations_customer_id_foreign` (`customer_id`),
  CONSTRAINT `reservations_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (1,'Sin Confirmar','2021-12-04',8,'1','Activo','2021-12-05 00:42:26','2021-12-05 00:42:26');
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roleusers`
--

DROP TABLE IF EXISTS `roleusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roleusers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roleusers`
--

LOCK TABLES `roleusers` WRITE;
/*!40000 ALTER TABLE `roleusers` DISABLE KEYS */;
/*!40000 ALTER TABLE `roleusers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('KisrnMl9jf0ivahgKSp56EcnQ0Zd9we3CnjnQaNJ',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoib0x4aUZRZWhIWXAyR3J1cnA2SUNWT1RCUUdxbWMxazlncHczWktEZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dzLXN5c3RlbS1tb2RlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJC9Eb3ZBTDVOV2pKU3p2dUZReHp6Z2VzSEh0cUdQSFdSSkpmWGg4RTA2Yy80c1I3ZGVLOW5HIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQvRG92QUw1TldqSlN6dnVGUXh6emdlc0hIdHFHUEhXUkpKZlhoOEUwNmMvNHNSN2RlSzluRyI7fQ==',1671676592);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `systemlogs`
--

DROP TABLE IF EXISTS `systemlogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `systemlogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `log_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `systemlogs`
--

LOCK TABLES `systemlogs` WRITE;
/*!40000 ALTER TABLE `systemlogs` DISABLE KEYS */;
INSERT INTO `systemlogs` VALUES (1,'1','Ingresó a productos y registró Fanta Naranja','2022-09-27','2022-09-27 19:45:29','2022-09-27 19:45:29'),(2,'1','Ingresó a productos y registró Sprite','2022-09-27','2022-09-27 20:01:51','2022-09-27 20:01:51'),(3,'1','Ingresó a promociones y registró Promo Fin de Mes','2022-09-27','2022-09-27 23:48:53','2022-09-27 23:48:53'),(4,'1','Ingresó a promociones y registró Promo Septiembre','2022-09-27','2022-09-27 23:55:38','2022-09-27 23:55:38'),(5,'1','Ingresó a promociones y registró Promo Septiembre','2022-09-27','2022-09-27 23:59:25','2022-09-27 23:59:25'),(6,'1','Ingresó a promociones y registró Promo Septiembre','2022-09-27','2022-09-28 00:05:11','2022-09-28 00:05:11'),(7,'1','Ingresó a promociones y registró PROMO21','2022-09-27','2022-09-28 00:07:50','2022-09-28 00:07:50'),(8,'1','Ingresó a consumo y registró un pedido de Coca Cola','2022-09-27','2022-09-28 02:05:12','2022-09-28 02:05:12'),(9,'1','Ingresó a consumo y registró un pedido de Hamburguesa','2022-09-27','2022-09-28 02:05:43','2022-09-28 02:05:43'),(10,'1','Generó detalle de consumo de con CI: ','2022-09-27','2022-09-28 02:08:18','2022-09-28 02:08:18'),(11,'1','Ingresó a promociones y registró 32423432','2022-09-28','2022-09-28 13:05:34','2022-09-28 13:05:34'),(12,'1','Ingresó a promociones y registró PROMO XD','2022-09-28','2022-09-28 13:08:38','2022-09-28 13:08:38'),(13,'1','Ingresó y realizó una notificación: ','2022-09-28','2022-09-28 13:17:34','2022-09-28 13:17:34'),(14,'1','Ingresó a reportes y genero un reporte','2022-09-28','2022-09-28 19:09:34','2022-09-28 19:09:34'),(15,'1','Ingresó a reportes y genero un reporte','2022-09-28','2022-09-28 19:09:47','2022-09-28 19:09:47'),(16,'1','Ingresó a reportes y genero un reporte','2022-09-28','2022-09-28 19:09:55','2022-09-28 19:09:55'),(17,'1','Ingresó a promociones y registró PROMO OCTUBRE','2022-09-28','2022-09-28 20:13:19','2022-09-28 20:13:19'),(18,'1','Ingresó y realizó una notificación: ','2022-09-28','2022-09-28 20:15:28','2022-09-28 20:15:28'),(19,'1','Ingresó a consumo y registró un pedido de Coca Cola','2022-09-28','2022-09-28 20:22:13','2022-09-28 20:22:13'),(20,'1','Ingresó a consumo y registró un pedido de Hamburguesa','2022-09-28','2022-09-28 20:22:28','2022-09-28 20:22:28'),(21,'1','Generó detalle de consumo de con CI: ','2022-09-28','2022-09-28 20:24:31','2022-09-28 20:24:31'),(22,'1','Ingresó a reportes y genero un reporte','2022-09-28','2022-09-28 20:28:33','2022-09-28 20:28:33'),(23,'1','Ingresó a reportes y genero un reporte','2022-09-28','2022-09-28 20:28:56','2022-09-28 20:28:56'),(24,'1','Ingresó a reportes y genero un reporte','2022-09-28','2022-09-28 20:29:55','2022-09-28 20:29:55'),(25,'1','Ingresó a reportes y genero un reporte','2022-12-14','2022-12-15 01:38:02','2022-12-15 01:38:02'),(26,'1','Ingresó a reportes y genero un reporte','2022-12-14','2022-12-15 01:38:07','2022-12-15 01:38:07'),(27,'1','Ingresó a reportes y genero un reporte','2022-12-19','2022-12-19 17:30:08','2022-12-19 17:30:08'),(28,'1','Ingresó a reportes y genero un reporte','2022-12-19','2022-12-19 17:30:12','2022-12-19 17:30:12'),(29,'1','Ingresó a reportes y genero un reporte','2022-12-19','2022-12-19 17:31:48','2022-12-19 17:31:48'),(30,'1','Ingresó a reportes y genero un reporte','2022-12-21','2022-12-21 21:24:21','2022-12-21 21:24:21'),(31,'1','Ingresó a reportes y genero un reporte','2022-12-21','2022-12-21 21:24:32','2022-12-21 21:24:32'),(32,'1','Ingresó a reportes y genero un reporte','2022-12-21','2022-12-22 01:41:55','2022-12-22 01:41:55');
/*!40000 ALTER TABLE `systemlogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Kevin','Condori Conde','12541815','Activo','Kevin','Administrador','kevin@gmail.com',NULL,'$2y$10$/DovAL5NWjJSzvuFQxzzgesHHtqGPHWRJJfXh8E06c/4sR7deK9nG',NULL,NULL,NULL,NULL,NULL,'2021-09-19 18:36:53','2021-12-08 09:15:43'),(2,'Sabrina','Montes','12345678','Activo','60505288','Cajero','sabrina@gmail.com',NULL,'$2y$10$QEbxliFj/xsgn7rWRU7deOVgc9Gqrihl3dI5cob/cNyi4sMUvtKfO',NULL,NULL,NULL,NULL,NULL,'2021-12-08 09:03:10','2021-12-08 09:15:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-21 22:37:43
