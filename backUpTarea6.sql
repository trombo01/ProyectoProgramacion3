/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.32-MariaDB : Database - db_tarea6
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_tarea6` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_tarea6`;

/*Table structure for table `tb_articulos` */

DROP TABLE IF EXISTS `tb_articulos`;

CREATE TABLE `tb_articulos` (
  `id_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(35) NOT NULL,
  `COSTO` int(5) NOT NULL,
  `PRECIO` int(5) NOT NULL,
  `EXISTENCIA` int(5) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `rutaimagen` varchar(200) DEFAULT NULL,
  KEY `id_articulo` (`id_articulo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_articulos` */

insert  into `tb_articulos`(`id_articulo`,`NOMBRE`,`COSTO`,`PRECIO`,`EXISTENCIA`,`DESCRIPCION`,`Categoria`,`rutaimagen`) values 
(1,'Collar lunar',200,300,37,'Esta pieza representa las fases lunares y el paso de la Luna creciente a menguante en su juego de sombras y luz.\r\n\r\nUna pieza en la que hemos estado trabajando durante mucho tiempo, mimando cada detalle. Las lunas de este collar están fabricadas especialmente para nosotros siguiendo nuestro propio diseño y acabadas en una textura especial que las hace más delicadas. Tanto las lunas como el resto de componentes de este collar se fabrican en España. El collar mide 43cm de largo, es completamente libre de níquel y plomo y está disponible en tono dorado y plateado (chapado en oro o rodio).','Collar','collar.jpg'),
(2,'Estrella Polar Colgante',500,700,20,'Hay un punto brillante en el cielo que siempre apunta al Norte. Está ahí para guiar a los que han emprendido un camino y también para orientar a los que se sienten perdidos y aún no saben qué camino tomar. Es la Estrella Polar.\r\nNuestra estrella polar es una diminuta circonita brillante. La pieza mide mide 3mm aproximadamente y va montada sobre una cadena de 39cm de largo, fabricada en latón libre de níquel y plomo. El collar está acabado con un chapado en oro de 18kt y su proceso de producción se realiza íntegramente entre nuestro taller en la Garrotxa (Girona) y los pequeños talleres familiares de nuestros proveedores en Barcelona.','Collar','fauna-y-flora-collar-estrella-polar-13-600x416.jpg');

/*Table structure for table `tb_cliente` */

DROP TABLE IF EXISTS `tb_cliente`;

CREATE TABLE `tb_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` varchar(25) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido` varchar(100) DEFAULT NULL,
  `Tel` varchar(16) DEFAULT NULL,
  `Correo` varchar(200) DEFAULT NULL,
  `rutaimagen` varchar(100) DEFAULT NULL,
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_cliente` */

insert  into `tb_cliente`(`id_cliente`,`Cedula`,`Nombre`,`Apellido`,`Tel`,`Correo`,`rutaimagen`) values 
(1,NULL,'Roberto','Herrera',NULL,NULL,NULL),
(2,NULL,'Jean Carlos','Nuñez',NULL,NULL,NULL);

/*Table structure for table `tb_detalle_factura` */

DROP TABLE IF EXISTS `tb_detalle_factura`;

CREATE TABLE `tb_detalle_factura` (
  `id_factura` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `Cantidad` decimal(5,0) DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_detalle_factura` */

insert  into `tb_detalle_factura`(`id_factura`,`id_producto`,`Cantidad`,`total`) values 
(1,2,3,2100),
(1,1,2,600);

/*Table structure for table `tb_empleado` */

DROP TABLE IF EXISTS `tb_empleado`;

CREATE TABLE `tb_empleado` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido` varchar(100) DEFAULT NULL,
  `Tel` varchar(20) DEFAULT NULL,
  `Direccion` varchar(200) DEFAULT NULL,
  `CorreoElectronico` varchar(80) DEFAULT NULL,
  `clave` text,
  `fechaIngreso` date DEFAULT NULL,
  KEY `id_usuario` (`id_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `tb_empleado` */

insert  into `tb_empleado`(`id_empleado`,`Nombre`,`Apellido`,`Tel`,`Direccion`,`CorreoElectronico`,`clave`,`fechaIngreso`) values 
(1,'Roberto Alejandro','Herrera Fabian','8093322538','C/Pedro mir Invivienda Santo domingo Este','Example1@example.com','c3499c2729730a7f807efb8676a92dcb6f8a3f8f','0000-00-00'),
(2,NULL,NULL,NULL,NULL,NULL,'da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(3,'','','','','','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(4,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','c3499c2729730a7f807efb8676a92dcb6f8a3f8f','2019-07-04'),
(5,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2019-07-04'),
(6,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2019-07-04'),
(7,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2019-07-04'),
(8,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2019-07-04'),
(9,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2019-07-04'),
(10,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(11,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(12,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(13,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(14,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(15,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(16,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(17,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(18,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(19,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(20,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(21,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(22,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(23,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(24,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(25,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(26,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(27,'Jean Carlos','Nuñez Liriano','999-999-9999','Avenida San Vicente de Paul, Santo Domingo Este','Example2@example.com','da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-04'),
(28,NULL,NULL,NULL,NULL,NULL,'da39a3ee5e6b4b0d3255bfef95601890afd80709','2019-07-06');

/*Table structure for table `tb_factura` */

DROP TABLE IF EXISTS `tb_factura`;

CREATE TABLE `tb_factura` (
  `id_factura` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `itbs` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  KEY `id_factura` (`id_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_factura` */

insert  into `tb_factura`(`id_factura`,`fecha`,`subtotal`,`itbs`,`total`,`id_cliente`) values 
(1,'0000-00-00',3500.32,630.0576,4130.3776,1);

/*Table structure for table `tb_producto` */

DROP TABLE IF EXISTS `tb_producto`;

CREATE TABLE `tb_producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_producto` varchar(100) DEFAULT NULL,
  `Precio` double DEFAULT NULL,
  `Cantidad` decimal(5,0) DEFAULT NULL,
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_producto` */

insert  into `tb_producto`(`id_producto`,`Nombre_producto`,`Precio`,`Cantidad`) values 
(1,'Coca Cola',40,30),
(2,'Collar luna',200,32);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
