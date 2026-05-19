/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-12.2.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: lillium
-- ------------------------------------------------------
-- Server version	12.2.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES
(1,'Physical'),
(2,'Memetic'),
(3,'Lumina');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_directory` text DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `product_images_ibfk_1` (`product_id`),
  CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES
(20,'products/115/images/1q9v6NC8fsttQHcFzJoH4oATNPfiKYoS4UWDyNSM.png',115),
(22,'products/115/images/LFoV6WzbBaxzfWYzNRywCsLaneBTPwE1Ks1anfpq.png',115),
(23,'products/116/images/Q5rKlfIdf3DlBEe9NNwLKxWI1Cx8YIVuEE13xmBz.png',116),
(28,'products/117/images/7wrrkdEBWaeTa2gMXvbgQnjjWXXCstBwJZ1YkQMl.png',117),
(29,'products/117/images/S29N4ej11v6hjTsNpqUHMeJvCeNe0ykPixA2gXxI.png',117),
(30,'products/118/images/MHAVlHMcKnXWoZqNSfknKghHwB0XaqJ3tTmBswRm.png',118),
(31,'products/118/images/kCmEFID6DbHN1wmnxBY32Ib0QMi04l7Mv6Mx0bC9.png',118),
(33,'products/119/images/K2VCXf5tj2zHyQW3QpqAU3t54Dgjn1EhsCoURHml.png',119),
(34,'products/119/images/zcg0bkBbPj1AicbgBycYEilPu16AqwKljLDa0awE.png',119),
(35,'products/120/images/zimWoa4fjPKTjII8BIVtH4Q1Lu4wfIS9yWNGw9eG.png',120),
(36,'products/120/images/qJwog2sEl4MYr7bo4zkzBmzcZbZWjWeC0KmHr3qH.png',120),
(37,'products/116/images/TskDQpJ1QjWZXVbbf534U83bGf5npkUITUi1Qu8c.png',116),
(38,'products/121/images/tE4jSQOrUwloRriaJxz9Owz5dB2dTwTLXVNvLAKh.png',121),
(39,'products/121/images/5g0eM2ebenlhTJ7s3CCbiQpu3Wq0SDS4a65CzYqe.png',121),
(40,'products/124/images/DcjDfbVSflLJlHwXpPj9So19OXu1mffh1iOxlRxu.png',124),
(41,'products/124/images/C3KuvDjOBB6xYUcE7QoNRYZR6uBpU1Ydr5wvT96g.png',124),
(42,'products/122/images/E9cnOiyNy22rbBhsiLGiclfrdpVVFxbnxKRJHTuy.png',122),
(43,'products/122/images/qlNDZST1tAkyWfAn31vPvBjtvAble49I67lCHAZV.png',122),
(44,'products/123/images/F1oeTROTZup44DbzuxTVCR9mOReZiHOXeCmzWxIz.png',123),
(45,'products/123/images/VkvXY1HwIStlFNoORRa0hK8nwNwX3TTn3nvuTYwq.png',123),
(46,'products/125/images/vbGp3wxRhWCmASP0NVumLra8cczbGnQ2elav2DmY.png',125),
(47,'products/125/images/Sc8KdHxpHak0nvriMjvqK53BM1SZnw3l5QYG5SCk.png',125),
(48,'products/125/images/joYGq3jfPwKut34DHpC31SwGW3KezKB4gmqWIW3k.png',125),
(51,'products/226/images/cUtWskFEuETRDM5W8hk31omQUrG2u2b1wHIubpv8.png',226),
(52,'products/226/images/MC7Ri3yvlu8VGe0Ojcc1Ips4kfZZCBKWS1vqjGNB.png',226),
(53,'products/228/images/M459kVH9mdE4BjQXj3g5UmsjuKBShhuMmuzuE8GL.png',228);
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `is_on_sale` tinyint(1) NOT NULL DEFAULT 0,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `price` decimal(12,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT 1,
  `amount_in_stock` int(10) unsigned DEFAULT 0,
  PRIMARY KEY (`product_id`),
  KEY `subcategory_id` (`subcategory_id`),
  CONSTRAINT `products_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`subcategory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=229 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES
(115,'Full Empty',0,0,7999.99,'A paradox in and of itself, the elusive Full Empty is a variant of the common Empty artifact found worldwide. Unlike the Empty, this artifact suspends a mysterious fluid that does not seem to be able to collide with matter. A Full Empty weighs on average 80-120kg, much more than the Empty. This artifact is truly a sight to be seen.',1,99960),
(116,'Battery',1,1,99.99,'An endless source of energy in the palm of your hands. A single stick of battery produces a variable amount of power, depending on the amount drawn by appliances, from 10 to 2000 Watts. Glows under visible light. When exposed to gamma radiation at cold temperatures, this artifact replicates through binary fission; have as many as you like.',3,99960),
(117,'Itcher',1,1,89.99,'A common, wasabi-shaped artifact found scattered around spatial anomalous zones. When squeezed, causes nearby living creatures to experience a wide range of symptoms; from nosebleeds to mental breakdowns. This item should be handled with caution.',6,99960),
(118,'Bracelet',1,1,299.99,'An uncommon artifact usually found in bundles nearby spatial anomalies. Wearers of this artifact seemingly become healthier over time; strengthens the immune system and increases stamina. For that reason, this artifact is quite valuable. Able to fit itself to any size.',5,99960),
(119,'Shard',1,1,289.99,'A flat, golden shard that is seemingly smooth, but open contact with a living being, produces strange symbols and runes only visible to those in contact. After reading the runes, the reader will be granted vivid, lucid dreams every time they sleep. The effect lasts for as long as the user remembers engravings, diminishing when parts are forgotten. The origins of this artifact are unknown, though they are found scattered on the ground within Zones.',7,99960),
(120,'Empty',1,0,999.99,'Two copper-like discs suspended and attached by a mysterious force. The function of this artifact is unknown, though the existence of the Full Empty implies that it is a form of container or jar for fluids',1,99960),
(121,'Black Spray',1,1,99.99,'A common artifact found worldwide, Black Spray is a marble-shaped artifact that, when shone with light, releases light of a lower frequency and energy after a short delay. It is theorized that this artifact contains an incredibly vast pocket dimension, light seconds wide. Often used in jewellery.',8,99960),
(122,'Oscillator',1,0,199.00,'This artifact is exclusive to Zones 6 and 7. Oscillator is an artifact that constantly emits light periodically. The frequency of this emission is variable per artifact. The light emitted varies in frequency, from infrared to UV, though green emissions are the most common. Though debated, it is likely that this artifact is some form of a high-energy time crystal.',9,99960),
(123,'Chameleon',1,0,1999.00,'WARNING: POTENTIALLY DANGEROUS ARTIFACT; BUYERS WILL REQUIRE FURTHER BACKGROUND CHECKS. This rare artifact has only been discovered to exist in Zones 1, 5 and 6. Chameleon is an artifact that periodically changes its elemental composition when placed under certain conditions. At room temperature, this artifact, according to mass spectrometry, consists of depleted uranium U-238. When heated, the artifact releases massive amounts of beta and gamma radiation, transmuting into elements of lower atomic numbers, such as lead, in the process. Cooling results the elements to become heavier, seemingly taking more mass from the atmosphere. These processes are extremely slow and may take weeks to fully complete. Physicists are stunned as to how this artifact functions.',4,99960),
(124,'Twins',1,0,999.99,'Twins seems to appear to be an ordinary bar of graphite, though when cut in half, both pieces seem to be synchronized in terms of physical state, specifically temperature. Further dissection of a piece will unlink their states; the undissected piece will be completely inert and unlinked to any other Twin artifact piece, and the dissected pieces will be synchronized. It is possible to reattached the pieces by placing them in water. They will seemingly rearrange themselves into place while in suspension.',10,99960),
(125,'Sponge',1,1,499.99,'A porous rock, the Sponge is an uncommon artifact discovered on every Zone besides Zone 7. When touched, this artifact is incredibly cold, being on average -30 degrees Celcius. This artifact stays constantly cold, even when exposed to very high temperatures. It was discovered that this artifact seems to be a heat sink, completely absorbing any heat applied to it. It is unknown where the heat is directed to or stored.',2,99960),
(226,'Cube',1,1,99.99,'This is a cube.',4,99960),
(228,'Blank Product',1,0,0.00,'This product is for testing purposes',1,99960);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES
('iT8J9TppZGtTGWVlR87UDu7rNT0ApGTK9eEymKsc',NULL,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64; rv:135.0) Gecko/20100101 Firefox/135.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoicVZRaGlzblBZbm5aQ3Uyb1pTR2xpOEczVGJjMjM2ZkR3YUYxTXBoViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1778169054),
('oEDxbjoSjSXpD3YIHsOVy9xO50Fl0BzZkFIdOSvZ',1,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64; rv:135.0) Gecko/20100101 Firefox/135.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR3BQV0lpcXE3dzA2RURSQm5CdnVNMWE5emROR2pScFV6MTlEcmh1OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdG9yZT9zZWFyY2hfcXVlcnk9Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1751349227);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `subcategories` (
  `subcategory_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcategory_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`subcategory_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `subcategories` WRITE;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` VALUES
(1,'Chemical',1),
(2,'Thermal',1),
(3,'Electro',1),
(4,'Nuclear',1),
(5,'Somatic',1),
(6,'Psychic',2),
(7,'Cognito',2),
(8,'Spatial',3),
(9,'Temporal',3),
(10,'Quantum',3);
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `user_comments`
--

DROP TABLE IF EXISTS `user_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_comments` (
  `user_id` bigint(20) unsigned NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_comment` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `user_comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `user_comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_comments`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `user_comments` WRITE;
/*!40000 ALTER TABLE `user_comments` DISABLE KEYS */;
INSERT INTO `user_comments` VALUES
(1,115,'i like',1),
(1,119,'i hate it',-1),
(1,226,'dgfbdfbg',0),
(1,228,'test',1),
(2,115,'i dont like',-1),
(2,228,'I dont like this product',-1);
/*!40000 ALTER TABLE `user_comments` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `privilege_level` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'admin','admin@example.com',NULL,'$2y$12$o6exVaetAtTBjBpJ938eaO5PZhUBMq3sOZO/olr0zRH5zZ.s/NLCG',NULL,'2025-06-24 04:39:45','2025-06-24 04:39:45',10),
(2,'User','user@example.com',NULL,'$2y$12$QJhPZ1VYUQ0LHPmB8nEZreHGd3C2P9aiNyI6v6zgtNIFCv..pMYR6',NULL,'2025-06-28 23:05:11','2025-06-28 23:05:11',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Dumping routines for database 'lillium'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-05-19 15:04:45
