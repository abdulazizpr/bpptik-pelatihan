/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : latihan

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2017-07-11 02:22:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `kd_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_brg` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`kd_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('1', 'Gatau', '20000', '2015');
INSERT INTO `barang` VALUES ('2', 'Bebas', '25000', '2016');
INSERT INTO `barang` VALUES ('3', 'Lepas', '50000', '2017');
SET FOREIGN_KEY_CHECKS=1;
