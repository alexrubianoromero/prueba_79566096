/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50715
Source Host           : localhost:3306
Source Database       : prueba_almagrario

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2020-05-31 13:54:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('1', '1234', 'producto nuevo ', '100');
INSERT INTO `productos` VALUES ('2', '12345', 'producto nuevo 5', '1005');
INSERT INTO `productos` VALUES ('3', '123456', 'producto nuevo 56', '10056');
