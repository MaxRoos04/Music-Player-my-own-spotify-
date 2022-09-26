/*
 Navicat Premium Data Transfer

 Source Server         : Ghettofy
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3307
 Source Schema         : user

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 25/09/2022 19:57:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for songs
-- ----------------------------
DROP TABLE IF EXISTS `songs`;
CREATE TABLE `songs`  (
  `id` int(11) NOT NULL,
  `Songname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Artist` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of songs
-- ----------------------------
INSERT INTO `songs` VALUES (0, 'Party', 'Dj khaled', 'https://i.ytimg.com/vi/BqChxW5VWOI/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAAe9LnvuFe3GAQdiTVY1Q6kEWekQ', '/Audio/0.mp3');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uUsername` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uPassword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, '1234', '1234', '1234@gmail.com');
INSERT INTO `user` VALUES (2, '3456', '1234', '3456@gmail.com');
INSERT INTO `user` VALUES (3, '', '', '');
INSERT INTO `user` VALUES (4, 'main', '1234', '1234@gmail.com');
INSERT INTO `user` VALUES (5, 'pussyoo', '2345', 'main@gmail.com');
INSERT INTO `user` VALUES (6, 'brotha', '0000', 'max.roos999@gmail.com');
INSERT INTO `user` VALUES (7, 'max', 'max', 'max@prr.fr');

SET FOREIGN_KEY_CHECKS = 1;
