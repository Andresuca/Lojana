/*
 Navicat Premium Data Transfer

 Source Server         : Lojana
 Source Server Type    : MySQL
 Source Server Version : 100133
 Source Host           : localhost:3306
 Source Schema         : lojana

 Target Server Type    : MySQL
 Target Server Version : 100133
 File Encoding         : 65001

 Date: 22/07/2018 21:12:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_codigos
-- ----------------------------
DROP TABLE IF EXISTS `t_codigos`;
CREATE TABLE `t_codigos`  (
  `t_codigos` int(255) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT NULL,
  `fecha_registro` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`t_codigos`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_productos
-- ----------------------------
DROP TABLE IF EXISTS `t_productos`;
CREATE TABLE `t_productos`  (
  `id_producto` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `vendidos` int(255) NULL DEFAULT NULL,
  `precio` float(255, 0) NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT NULL,
  `fecha_registro` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_producto`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_referenciados
-- ----------------------------
DROP TABLE IF EXISTS `t_referenciados`;
CREATE TABLE `t_referenciados`  (
  `id_referencia` int(255) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(255) NULL DEFAULT NULL,
  `id_referenciado` int(255) NULL DEFAULT NULL,
  `monto` float(255, 0) NULL DEFAULT NULL,
  `id_solicitud` int(255) NULL DEFAULT NULL,
  `fecha_registro` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_referencia`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_resenas
-- ----------------------------
DROP TABLE IF EXISTS `t_resenas`;
CREATE TABLE `t_resenas`  (
  `id_resena` int(255) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(255) NULL DEFAULT NULL,
  `texto` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `calificacion` int(255) NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT NULL,
  `fecha_registro` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_resena`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_solicitudes
-- ----------------------------
DROP TABLE IF EXISTS `t_solicitudes`;
CREATE TABLE `t_solicitudes`  (
  `id_solicitud` int(255) NOT NULL AUTO_INCREMENT,
  `id_producto` int(255) NULL DEFAULT NULL,
  `monto` float(255, 0) NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT NULL,
  `fecha_registro` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_solicitud`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_usuarios
-- ----------------------------
DROP TABLE IF EXISTS `t_usuarios`;
CREATE TABLE `t_usuarios`  (
  `id_usuario` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `calle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `numero_exterior` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `numero_interior` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `colonia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `municipio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `codigo_postal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `genero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `fecha_nacimiento` date NULL DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `telefono` varchar(0) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `id_codigo` int(255) NULL DEFAULT NULL,
  `direccion2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL,
  `id_referenciado` int(255) NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT NULL,
  `fecha_registro` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_usuarios
-- ----------------------------
INSERT INTO `t_usuarios` VALUES (1, 'Ruben', 'Calzada Navarra', '456', '111', 'Alcazar', 'Jesus Maria', 'Aguascalientes', '20908', 'Masculino', '1995-08-26', 'jruben.rrv95@gmail.com', '', '123', NULL, NULL, NULL, 1, NULL);
INSERT INTO `t_usuarios` VALUES (2, 'Andres', 'Calle Andres', '23', '44', 'Sur', 'Aguascalientes', 'Aguascalientes', '20000', 'Masculino', '1995-02-02', 'andres@mail.com', '', '1234', NULL, NULL, NULL, 1, NULL);

SET FOREIGN_KEY_CHECKS = 1;
