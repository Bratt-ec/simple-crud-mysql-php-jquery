# MySQL-Front 5.0  (Build 1.0)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: php_crud
# ------------------------------------------------------
# Server version 5.5.27

#
# Table structure for table crud
#

CREATE TABLE `crud` (
  `Id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `direccion` varchar(35) DEFAULT NULL,
  `referencias` varchar(45) DEFAULT NULL,
  `cuidad` varchar(15) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
INSERT INTO `crud` VALUES (1,'Alejandro','Castillo','Av Quito','Cerca de la iglesia','Machala',20);
INSERT INTO `crud` VALUES (2,'Liss','Pardo','Av. las Americas','En la esquina','Pasaje',23);
INSERT INTO `crud` VALUES (3,'Antonella','Arias','Av Jose Olmedo','Cerca de una tienda','Machala',19);
INSERT INTO `crud` VALUES (4,'Alejandro','Martinez','Av. Idependencia','Cerca del hospital','Arenillas',23);
/*!40000 ALTER TABLE `crud` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
