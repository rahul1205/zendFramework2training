-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: zf
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Current Database: `zf`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `zf` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `zf`;

--
-- Table structure for table `resource`
--

DROP TABLE IF EXISTS `resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) DEFAULT NULL,
  `router` varchar(255) DEFAULT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resource`
--

LOCK TABLES `resource` WRITE;
/*!40000 ALTER TABLE `resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_permisiion`
--

DROP TABLE IF EXISTS `role_permisiion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_permisiion` (
  `role` int(11) NOT NULL,
  `resource` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_permisiion`
--

LOCK TABLES `role_permisiion` WRITE;
/*!40000 ALTER TABLE `role_permisiion` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_permisiion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `id` char(32) NOT NULL DEFAULT '',
  `name` char(32) NOT NULL DEFAULT '',
  `modified` int(11) DEFAULT NULL,
  `lifetime` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES ('0sthahd9qeg9qvdke4493frl02','PHPSESSID',1477484565,2440,'__ZF|a:2:{s:20:\"_REQUEST_ACCESS_TIME\";d:1477484565.217237;s:14:\"FlashMessenger\";a:1:{s:11:\"EXPIRE_HOPS\";a:2:{s:4:\"hops\";i:0;s:2:\"ts\";d:1477484565.217237;}}}FlashMessenger|C:23:\"Zend\\Stdlib\\ArrayObject\":205:{a:4:{s:7:\"storage\";a:0:{}s:4:\"flag\";i:2;s:13:\"iteratorClass\";s:13:\"ArrayIterator\";s:19:\"protectedProperties\";a:4:{i:0;s:7:\"storage\";i:1;s:4:\"flag\";i:2;s:13:\"iteratorClass\";i:3;s:19:\"protectedProperties\";}}}zfs_login|C:23:\"Zend\\Stdlib\\ArrayObject\":205:{a:4:{s:7:\"storage\";a:0:{}s:4:\"flag\";i:2;s:13:\"iteratorClass\";s:13:\"ArrayIterator\";s:19:\"protectedProperties\";a:4:{i:0;s:7:\"storage\";i:1;s:4:\"flag\";i:2;s:13:\"iteratorClass\";i:3;s:19:\"protectedProperties\";}}}'),('4ja5rul6vrcmvjfevhatnnuhrkvrvkh6','PHPSESSID',1477051568,1440000,'__ZF|a:2:{s:20:\"_REQUEST_ACCESS_TIME\";d:1477051568.5266089;s:14:\"FlashMessenger\";a:1:{s:11:\"EXPIRE_HOPS\";a:2:{s:4:\"hops\";i:1;s:2:\"ts\";d:1477048589.7167001;}}}FlashMessenger|C:23:\"Zend\\Stdlib\\ArrayObject\":296:{a:4:{s:7:\"storage\";a:1:{s:7:\"default\";C:20:\"Zend\\Stdlib\\SplQueue\":44:{a:1:{i:0;s:26:\"Authentication successful.\";}}}s:4:\"flag\";i:2;s:13:\"iteratorClass\";s:13:\"ArrayIterator\";s:19:\"protectedProperties\";a:4:{i:0;s:7:\"storage\";i:1;s:4:\"flag\";i:2;s:13:\"iteratorClass\";i:3;s:19:\"protectedProperties\";}}}zfs_login|C:23:\"Zend\\Stdlib\\ArrayObject\":231:{a:4:{s:7:\"storage\";a:1:{s:7:\"storage\";s:5:\"admin\";}s:4:\"flag\";i:2;s:13:\"iteratorClass\";s:13:\"ArrayIterator\";s:19:\"protectedProperties\";a:4:{i:0;s:7:\"storage\";i:1;s:4:\"flag\";i:2;s:13:\"iteratorClass\";i:3;s:19:\"protectedProperties\";}}}'),('fgo7405vnf8gbsoh9v1dvbjs95','PHPSESSID',1477398995,2440,'__ZF|a:2:{s:20:\"_REQUEST_ACCESS_TIME\";d:1477398995.7270939;s:14:\"FlashMessenger\";a:1:{s:11:\"EXPIRE_HOPS\";a:2:{s:4:\"hops\";i:1;s:2:\"ts\";d:1477398992.568023;}}}FlashMessenger|C:23:\"Zend\\Stdlib\\ArrayObject\":296:{a:4:{s:7:\"storage\";a:1:{s:7:\"default\";C:20:\"Zend\\Stdlib\\SplQueue\":44:{a:1:{i:0;s:26:\"Authentication successful.\";}}}s:4:\"flag\";i:2;s:13:\"iteratorClass\";s:13:\"ArrayIterator\";s:19:\"protectedProperties\";a:4:{i:0;s:7:\"storage\";i:1;s:4:\"flag\";i:2;s:13:\"iteratorClass\";i:3;s:19:\"protectedProperties\";}}}zfs_login|C:23:\"Zend\\Stdlib\\ArrayObject\":231:{a:4:{s:7:\"storage\";a:1:{s:7:\"storage\";s:5:\"admin\";}s:4:\"flag\";i:2;s:13:\"iteratorClass\";s:13:\"ArrayIterator\";s:19:\"protectedProperties\";a:4:{i:0;s:7:\"storage\";i:1;s:4:\"flag\";i:2;s:13:\"iteratorClass\";i:3;s:19:\"protectedProperties\";}}}'),('h0et870lvfp8874te3vbi2mda3','PHPSESSID',1477390968,2440,'__ZF|a:1:{s:20:\"_REQUEST_ACCESS_TIME\";d:1477390968.772342;}'),('i6264jj779ppo0a7pufv5qchl5','PHPSESSID',1477472648,2440,'__ZF|a:1:{s:20:\"_REQUEST_ACCESS_TIME\";d:1477472648.223033;}FlashMessenger|C:23:\"Zend\\Stdlib\\ArrayObject\":205:{a:4:{s:7:\"storage\";a:0:{}s:4:\"flag\";i:2;s:13:\"iteratorClass\";s:13:\"ArrayIterator\";s:19:\"protectedProperties\";a:4:{i:0;s:7:\"storage\";i:1;s:4:\"flag\";i:2;s:13:\"iteratorClass\";i:3;s:19:\"protectedProperties\";}}}'),('kderm70lp28bvpg9n18573guh4','PHPSESSID',1477466836,2440,'__ZF|a:1:{s:20:\"_REQUEST_ACCESS_TIME\";d:1477466836.1999221;}FlashMessenger|C:23:\"Zend\\Stdlib\\ArrayObject\":205:{a:4:{s:7:\"storage\";a:0:{}s:4:\"flag\";i:2;s:13:\"iteratorClass\";s:13:\"ArrayIterator\";s:19:\"protectedProperties\";a:4:{i:0;s:7:\"storage\";i:1;s:4:\"flag\";i:2;s:13:\"iteratorClass\";i:3;s:19:\"protectedProperties\";}}}'),('saijmp9tcrjlq5m8bk818agtn1','PHPSESSID',1477390968,2440,'__ZF|a:1:{s:20:\"_REQUEST_ACCESS_TIME\";d:1477390968.835326;}FlashMessenger|C:23:\"Zend\\Stdlib\\ArrayObject\":205:{a:4:{s:7:\"storage\";a:0:{}s:4:\"flag\";i:2;s:13:\"iteratorClass\";s:13:\"ArrayIterator\";s:19:\"protectedProperties\";a:4:{i:0;s:7:\"storage\";i:1;s:4:\"flag\";i:2;s:13:\"iteratorClass\";i:3;s:19:\"protectedProperties\";}}}'),('snl31lmrjj0c4bm6rg6cn9arr6','PHPSESSID',1477472648,2440,'__ZF|a:1:{s:20:\"_REQUEST_ACCESS_TIME\";d:1477472648.160856;}');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `display_name` varchar(50) DEFAULT NULL,
  `password` varchar(128) NOT NULL,
  `createdon` datetime DEFAULT NULL,
  `createdby` datetime DEFAULT NULL,
  `updatedon` datetime DEFAULT NULL,
  `updatedby` datetime DEFAULT NULL,
  `password_updated_on` datetime DEFAULT NULL,
  `password_updated_by` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin@test.com',NULL,'25d55ad283aa400af464c76d713c07ad',NULL,NULL,NULL,NULL,NULL,NULL),(2,'aaa','admin@gmail.com',NULL,'password1',NULL,NULL,NULL,NULL,NULL,NULL),(5,'aaaaaa','aa@gmail.com',NULL,'827ccb0eea8a706c4c34a16891f84e7b',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-26 17:55:08
