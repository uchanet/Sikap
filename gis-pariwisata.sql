/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : 127.0.0.1:3306
 Source Schema         : gis-pariwisata

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 09/07/2020 09:09:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_icon
-- ----------------------------
DROP TABLE IF EXISTS `tbl_icon`;
CREATE TABLE `tbl_icon`  (
  `id_icon` int(11) NOT NULL AUTO_INCREMENT,
  `nama_icon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_icon`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_icon
-- ----------------------------
INSERT INTO `tbl_icon` VALUES (1, 'Marker 1', 'marker1.png');
INSERT INTO `tbl_icon` VALUES (2, 'Marker 2', 'marker2.png');

-- ----------------------------
-- Table structure for tbl_json
-- ----------------------------
DROP TABLE IF EXISTS `tbl_json`;
CREATE TABLE `tbl_json`  (
  `id_json` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `geojson` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_json`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_json
-- ----------------------------
INSERT INTO `tbl_json` VALUES (1, 'wisata', 'wisata.geojson');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telpon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'Mardalius', 'mardalius18@gmail.com', '1234', '082284039993', 'foto.jpg');

-- ----------------------------
-- Table structure for tbl_wisata
-- ----------------------------
DROP TABLE IF EXISTS `tbl_wisata`;
CREATE TABLE `tbl_wisata`  (
  `id_wisata` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desa` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kec` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kab` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `prov` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `id_icon` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_wisata`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_wisata
-- ----------------------------
INSERT INTO `tbl_wisata` VALUES (1, 'Pantai Senekip Pambang', '1', '1', '1', '1', '1', '1.482666', '102.48407', 'das', 'gambar.jpg', 1);
INSERT INTO `tbl_wisata` VALUES (2, 'Pantai Prapat Tunggal', '1', '1', '1', '1', '1', '1.5709839', '102.01119', 'asdsad', 'gambar.jpg', 1);
INSERT INTO `tbl_wisata` VALUES (3, 'Pantai Selat Baru', '1', '1', '1', '1', '1', '1.5631528', '102.24845', 'sadasd', 'gambar.jpg', 1);
INSERT INTO `tbl_wisata` VALUES (4, 'Pantai Penampar Jangkang', '1', '1', '1', '1', '1', '1.5685245', '102.18719', 'asdas', 'gambar.jpg', 1);
INSERT INTO `tbl_wisata` VALUES (5, 'Air Mancur Bengkalis', '1', '1', '1', '1', '1', '1.4670137', '102.10948', 'asdasd', 'gambar.jpg', 2);
INSERT INTO `tbl_wisata` VALUES (6, 'Taman Batu Ampar', '1', '1', '1', '1', '1', '1.4729544', '102.11504', 'asdasd', 'gambar.jpg', 2);

SET FOREIGN_KEY_CHECKS = 1;
