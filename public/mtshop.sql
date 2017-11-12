/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50715
Source Host           : localhost:3306
Source Database       : mtshop

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2017-11-12 17:17:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL COMMENT '图片路径',
  `from` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 来自本地，2 来自公网',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='图片总表';

-- ----------------------------
-- Records of image
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `price` decimal(8,2) NOT NULL COMMENT '价格',
  `original_price` decimal(8,2) DEFAULT NULL COMMENT '原价格',
  `stock` int(11) NOT NULL DEFAULT '0' COMMENT '库存量',
  `summary` varchar(50) DEFAULT NULL COMMENT '摘要',
  `tip` varchar(50) DEFAULT NULL COMMENT '提示',
  `p_num` int(11) NOT NULL COMMENT '商品编号',
  `p_remark` varchar(50) NOT NULL COMMENT '商品备注',
  `product_category_id` int(11) DEFAULT NULL COMMENT '外键，关联本商品所属大类；大类下是同商品的不同型号或颜色',
  `main_img_url` varchar(255) DEFAULT NULL COMMENT '主图ID号，这是一个反范式设计，有一定的冗余',
  `from` tinyint(4) NOT NULL DEFAULT '1' COMMENT '图片来自 1 本地 ，2公网',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000101', '黑色S', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('2', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000102', '黑色M', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('3', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000103', '黑色L', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('4', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000104', '黑色XL', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('5', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000105', '黑色XXL', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('6', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000201', '花灰色L', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('7', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000202', '花灰色L', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('8', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000203', '花灰色L', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('9', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000204', '花灰色XL', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('10', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000205', '花灰色XXL', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('11', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000301', '藏蓝色L', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('12', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000302', '藏蓝色L', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('13', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000303', '藏蓝色L', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('14', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000304', '藏蓝色XL', '1', 'asdfasdfa', '1', null, null, null);
INSERT INTO `product` VALUES ('15', 'Smartisan 卫衣 大爆炸', '249.00', null, '500', '风格简洁、舒适服帖', null, '10000305', '藏蓝色XXL', '1', 'asdfasdfa', '1', null, null, null);

-- ----------------------------
-- Table structure for product_category
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `summary` varchar(50) DEFAULT NULL COMMENT '摘要',
  `category_id` int(11) DEFAULT NULL COMMENT '外键，本商品大类在总店的分类id',
  `spec` varchar(500) DEFAULT NULL COMMENT '规格配置，json',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of product_category
-- ----------------------------
INSERT INTO `product_category` VALUES ('1', 'Smartisan 卫衣 大爆炸', '风格简洁、舒适服帖', null, '[\r\n    \"{\\\"id\\\":3,\\\"name\\\":\\\"颜色\\\",\\\"is_select\\\":true,\\\"count\\\":1,\\\"max\\\":6,\\\"min\\\":1}\",\r\n    \"{\\\"id\\\":5,\\\"name\\\":\\\"尺码\\\",\\\"is_select\\\":true,\\\"count\\\":1,\\\"max\\\":1,\\\"min\\\":1}\",\r\n    \"{\\\"id\\\":6,\\\"name\\\":\\\"数量\\\",\\\"is_select\\\":true,\\\"count\\\":1,\\\"max\\\":2,\\\"min\\\":1}\"\r\n]', null, null, null);

-- ----------------------------
-- Table structure for product_category_image
-- ----------------------------
DROP TABLE IF EXISTS `product_category_image`;
CREATE TABLE `product_category_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category_id` int(11) DEFAULT NULL,
  `img_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0' COMMENT '图片排序序号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of product_category_image
-- ----------------------------
INSERT INTO `product_category_image` VALUES ('1', '1', '1', '0');
INSERT INTO `product_category_image` VALUES ('2', '1', '2', '1');
INSERT INTO `product_category_image` VALUES ('3', '1', '3', '2');
INSERT INTO `product_category_image` VALUES ('4', '1', '4', '3');
INSERT INTO `product_category_image` VALUES ('5', '1', '5', '4');
INSERT INTO `product_category_image` VALUES ('6', '1', '6', '5');
INSERT INTO `product_category_image` VALUES ('7', '1', '7', '6');
INSERT INTO `product_category_image` VALUES ('8', '1', '8', '7');
INSERT INTO `product_category_image` VALUES ('9', '1', '9', '8');
INSERT INTO `product_category_image` VALUES ('10', '1', '10', '9');

-- ----------------------------
-- Table structure for product_thumb_image
-- ----------------------------
DROP TABLE IF EXISTS `product_thumb_image`;
CREATE TABLE `product_thumb_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `img_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0' COMMENT '图片排序序号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of product_thumb_image
-- ----------------------------
INSERT INTO `product_thumb_image` VALUES ('1', '1', '1', '0');
INSERT INTO `product_thumb_image` VALUES ('2', '1', '2', '1');
INSERT INTO `product_thumb_image` VALUES ('3', '1', '3', '2');
INSERT INTO `product_thumb_image` VALUES ('4', '1', '4', '3');
INSERT INTO `product_thumb_image` VALUES ('5', '1', '5', '4');
INSERT INTO `product_thumb_image` VALUES ('6', '2', '1', '0');
INSERT INTO `product_thumb_image` VALUES ('7', '2', '2', '1');
INSERT INTO `product_thumb_image` VALUES ('8', '2', '3', '2');
INSERT INTO `product_thumb_image` VALUES ('9', '2', '4', '3');
INSERT INTO `product_thumb_image` VALUES ('10', '2', '5', '4');
INSERT INTO `product_thumb_image` VALUES ('11', '3', '1', '0');
INSERT INTO `product_thumb_image` VALUES ('12', '3', '2', '1');
INSERT INTO `product_thumb_image` VALUES ('13', '3', '3', '2');
INSERT INTO `product_thumb_image` VALUES ('14', '3', '4', '3');
INSERT INTO `product_thumb_image` VALUES ('15', '3', '5', '4');
