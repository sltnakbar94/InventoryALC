/*
 Navicat Premium Data Transfer

 Source Server         : DB Protani
 Source Server Type    : MariaDB
 Source Server Version : 50568
 Source Host           : localhost:3306
 Source Schema         : inventory

 Target Server Type    : MariaDB
 Target Server Version : 50568
 File Encoding         : 65001

 Date: 08/03/2021 16:44:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `active` tinyint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES (1, 'PHP', 'Phillips', NULL, 1, '2021-03-08 09:23:52', '2021-03-08 09:23:52');
INSERT INTO `brands` VALUES (2, 'MKR', 'Mikrotik', NULL, 1, '2021-03-08 09:24:02', '2021-03-08 09:24:02');
INSERT INTO `brands` VALUES (3, 'CSC', 'Cisco', NULL, 1, '2021-03-08 09:24:09', '2021-03-08 09:24:09');
INSERT INTO `brands` VALUES (4, 'SNY', 'Sony', NULL, 1, '2021-03-08 09:24:16', '2021-03-08 09:24:16');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `active` tinyint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'LSTR', 'Perangkat Listrik', NULL, 1, '2021-03-08 09:24:33', '2021-03-08 09:25:04');
INSERT INTO `categories` VALUES (2, 'JRG', 'Perangkat Jaringan', NULL, 1, '2021-03-08 09:24:44', '2021-03-08 09:24:44');
INSERT INTO `categories` VALUES (3, 'ELK', 'Perangkat Elektronik', NULL, 1, '2021-03-08 09:24:56', '2021-03-08 09:24:56');

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `category` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES (1, 'Item A', NULL, 'Lampu', 'Philips', 'Unit', '2021-03-08 09:19:44', '2021-03-08 09:19:44', 0);
INSERT INTO `items` VALUES (2, 'Item B', NULL, 'Air Conditioner', 'Philips', 'Unit', '2021-03-08 09:19:44', '2021-03-08 09:19:44', 0);
INSERT INTO `items` VALUES (3, 'Item C', NULL, 'Kulkas', 'Philips', 'Unit', '2021-03-08 09:19:44', '2021-03-08 09:19:44', 0);

-- ----------------------------
-- Table structure for stackholders
-- ----------------------------
DROP TABLE IF EXISTS `stackholders`;
CREATE TABLE `stackholders`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `pic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of stackholders
-- ----------------------------
INSERT INTO `stackholders` VALUES (1, 'PT. Phillips Supplier Lampu', 'gedung Phillips', '[{\"name\":\"Rama\",\"email\":\"rama@philips.com\",\"telp\":\"0812123123\"}]', 1, '2021-03-08 09:21:34', '2021-03-08 09:21:34');
INSERT INTO `stackholders` VALUES (2, 'PT. Telkom Indonesia Customer Setia', 'Gedung Telkom Jakarta', '[{\"name\":\"Dhanu\",\"email\":\"Dhanu@telkom.com\",\"telp\":\"08112317746\"}]', 1, '2021-03-08 09:22:17', '2021-03-08 09:22:17');

-- ----------------------------
-- Table structure for units
-- ----------------------------
DROP TABLE IF EXISTS `units`;
CREATE TABLE `units`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `active` tinyint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of units
-- ----------------------------
INSERT INTO `units` VALUES (1, 'PCS', 'PCS', 'PCS', 1, '2021-03-08 09:23:07', '2021-03-08 09:23:07');
INSERT INTO `units` VALUES (2, 'LTR', 'Liter', 'Liter', 1, '2021-03-08 09:23:15', '2021-03-08 09:23:15');
INSERT INTO `units` VALUES (3, 'BOX', 'BOX', 'BOX', 1, '2021-03-08 09:23:27', '2021-03-08 09:23:27');

-- ----------------------------
-- Table structure for warehouses
-- ----------------------------
DROP TABLE IF EXISTS `warehouses`;
CREATE TABLE `warehouses`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `active` tinyint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of warehouses
-- ----------------------------
INSERT INTO `warehouses` VALUES (1, 'GPhilips', 'Gudang Philips', 'Gudang Philips A3', 'Tempat Menyimpan Barang Philips', 1, '2021-03-08 09:22:52', '2021-03-08 09:22:52');

SET FOREIGN_KEY_CHECKS = 1;
