/*
Navicat MySQL Data Transfer

Source Server         : wanxie
Source Server Version : 50547
Source Host           : 10.3.20.174:3306
Source Database       : wanxiedb

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2018-11-27 16:01:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `addressinfo`
-- ----------------------------
DROP TABLE IF EXISTS `addressinfo`;
CREATE TABLE `addressinfo` (
  `addressid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `buyername` varchar(20) NOT NULL,
  `buyerphone` bigint(20) NOT NULL,
  `buyeraddress` varchar(100) NOT NULL,
  PRIMARY KEY (`addressid`),
  KEY `userid` (`userid`),
  CONSTRAINT `addressinfo_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `userinfo` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of addressinfo
-- ----------------------------
INSERT INTO `addressinfo` VALUES ('2', '1', '哈哈哈', '15570112222', '福建省厦门市集美区B01D08606福建省厦门市集美区B01D08606');
INSERT INTO `addressinfo` VALUES ('3', '1', 'xxz', '17370014007', '江西赣州市章贡区');
INSERT INTO `addressinfo` VALUES ('4', '1', 'xzz', '15979053233', '江西省南昌市江西理工大学');
INSERT INTO `addressinfo` VALUES ('10', '16', '我啊', '15570112222', '厦门1554撒大大所大');
INSERT INTO `addressinfo` VALUES ('11', '16', '他啊', '1223548899', '自行车自行车在备注表不准表不准是支持下自行车自行车 ');
INSERT INTO `addressinfo` VALUES ('12', '16', '撒大声地', '456645', '厦门1554撒大大所大');
INSERT INTO `addressinfo` VALUES ('13', '15', '旺德福', '13512312312', '江西理工大学二食堂');
INSERT INTO `addressinfo` VALUES ('14', '17', '我啊', '1223548899', '厦门1554撒大大5555');

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('2', 'zj', '202cb962ac59075b964b07152d234b70');
INSERT INTO `admin` VALUES ('1', 'gqp', '85dc02f197b4684323435fe0bddd3e6b');
INSERT INTO `admin` VALUES ('3', 'zxx', '320f7fbc6ed50c80ef7a129c91a1a07c');

-- ----------------------------
-- Table structure for `brandinfo`
-- ----------------------------
DROP TABLE IF EXISTS `brandinfo`;
CREATE TABLE `brandinfo` (
  `brandid` int(11) NOT NULL AUTO_INCREMENT,
  `brandname` varchar(30) NOT NULL,
  `brandlogo` varchar(100) NOT NULL,
  `brandnote` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`brandid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brandinfo
-- ----------------------------
INSERT INTO `brandinfo` VALUES ('1', '安踏', 'public/images/uploadfiles/4626549443.jpg', '0');
INSERT INTO `brandinfo` VALUES ('2', '李宁', 'public/images/uploadfiles/4626549464.jpg', '0111');
INSERT INTO `brandinfo` VALUES ('4', 'NIKE', 'public/images/uploadfiles/4626549488.jpg', '123555试试56565');
INSERT INTO `brandinfo` VALUES ('10', 'Air Jordan', 'public/images/uploadfiles/4626549515.jpg', '123575');
INSERT INTO `brandinfo` VALUES ('11', '阿迪达斯', 'public/images/uploadfiles/4626549536.jpg', '是 ');

-- ----------------------------
-- Table structure for `cate`
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catename` varchar(30) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('13', '男鞋', '0');
INSERT INTO `cate` VALUES ('14', '女鞋', '0');
INSERT INTO `cate` VALUES ('15', '666', '0');

-- ----------------------------
-- Table structure for `orderinfo`
-- ----------------------------
DROP TABLE IF EXISTS `orderinfo`;
CREATE TABLE `orderinfo` (
  `orderid` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `productids` varchar(11) NOT NULL,
  `productnames` varchar(100) NOT NULL,
  `pnumber` varchar(20) NOT NULL,
  `productnum` int(10) NOT NULL,
  `ordermoney` decimal(20,2) NOT NULL,
  `buyername` varchar(20) NOT NULL,
  `buyerphone` int(12) NOT NULL,
  `buyeraddress` varchar(100) NOT NULL,
  `howtopay` varchar(20) NOT NULL,
  `orderstate` int(2) NOT NULL,
  `userorderstate` int(2) NOT NULL,
  `ordernote` varchar(100) NOT NULL,
  `orderdate` datetime NOT NULL,
  PRIMARY KEY (`orderid`),
  KEY `productid` (`productids`),
  KEY `productname` (`productnames`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orderinfo
-- ----------------------------
INSERT INTO `orderinfo` VALUES ('AFCSL1541835424', 'zxx', '16', '00123131', '1', '1', '550.00', '曾曦雄', '2147483647', '福建省厦门市集美区触控未来D08', '货到付款', '1', '1', '', '2018-11-10 15:37:04');
INSERT INTO `orderinfo` VALUES ('AFCSL1541836243', 'zxx', '15,16', '阿萨德撒多122,00123131', '1,1', '2', '1339.00', '曾曦雄', '2147483647', '福建省厦门市集美区触控未来D08', '货到付款', '0', '1', '', '2018-11-10 15:50:43');
INSERT INTO `orderinfo` VALUES ('AFCSL1542094561', '15570112225', '16', '00123131', '1', '1', '550.00', '我啊', '2147483647', '厦门1554撒大大所大', '货到付款', '0', '1', '', '2018-11-13 15:36:01');
INSERT INTO `orderinfo` VALUES ('AFCSL1542094695', '15570112225', '15', '阿萨德撒多122', '1', '1', '789.00', '我啊', '2147483647', '厦门1554撒大大所大', '货到付款', '0', '1', '', '2018-11-13 15:38:15');
INSERT INTO `orderinfo` VALUES ('AFCSL1542182321', '18812345678', '8', '9898686', '2', '1', '1198.00', '旺德福', '2147483647', '江西理工大学二食堂', '货到付款', '0', '1', '', '2018-11-14 15:58:41');
INSERT INTO `orderinfo` VALUES ('AFCSL1542246214', '15988888888', '16', '00123131', '2', '1', '1100.00', '我啊', '1223548899', '厦门1554撒大大5555', '货到付款', '0', '1', '', '2018-11-15 09:43:34');
INSERT INTO `orderinfo` VALUES ('AFCSL1542246231', '15988888888', '6', '汤普森4KT2', '1', '1', '899.00', '我啊', '1223548899', '厦门1554撒大大5555', '', '0', '0', '', '2018-11-15 09:43:51');

-- ----------------------------
-- Table structure for `productinfo`
-- ----------------------------
DROP TABLE IF EXISTS `productinfo`;
CREATE TABLE `productinfo` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(100) NOT NULL,
  `cateid` int(11) NOT NULL,
  `typeid` int(11) NOT NULL,
  `brandid` int(11) NOT NULL,
  `productprice` decimal(10,2) NOT NULL,
  `productdetail` varchar(100) DEFAULT NULL,
  `productimg` varchar(100) DEFAULT NULL,
  `productcount` int(10) NOT NULL,
  `isshow` int(1) NOT NULL,
  `isrecommend` int(1) NOT NULL,
  PRIMARY KEY (`productid`),
  KEY `cateid` (`cateid`),
  KEY `typeid` (`typeid`),
  KEY `brandid` (`brandid`),
  KEY `productname` (`productname`),
  CONSTRAINT `productinfo_ibfk_1` FOREIGN KEY (`cateid`) REFERENCES `cate` (`id`),
  CONSTRAINT `productinfo_ibfk_2` FOREIGN KEY (`typeid`) REFERENCES `typeinfo` (`typeid`),
  CONSTRAINT `productinfo_ibfk_3` FOREIGN KEY (`brandid`) REFERENCES `brandinfo` (`brandid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productinfo
-- ----------------------------
INSERT INTO `productinfo` VALUES ('2', '汤普森4KT4', '13', '4', '1', '699.00', '0000', '/Uploads/Public/Uploads/2018-11-06/5be15004c4550.png', '55', '1', '1');
INSERT INTO `productinfo` VALUES ('3', 'AJ32', '14', '6', '4', '1299.00', '0000', '/Uploads/Public/Uploads/2018-11-06/5be15014292a5.png', '89', '1', '1');
INSERT INTO `productinfo` VALUES ('6', '汤普森4KT2', '13', '4', '1', '899.00', '', '/Uploads/Public/Uploads/2018-11-06/5be15021bdb88.png', '45', '1', '1');
INSERT INTO `productinfo` VALUES ('7', '阿萨德撒多', '14', '6', '1', '233.00', '', '/Uploads/Public/Uploads/2018-11-06/5be1503499b8a.png', '544', '1', '1');
INSERT INTO `productinfo` VALUES ('8', '9898686', '13', '4', '2', '599.00', '', '/Uploads/Public/Uploads/2018-11-06/5be1503fdfa3c.png', '16', '1', '1');
INSERT INTO `productinfo` VALUES ('9', 'sadsadsad', '13', '3', '2', '2155.00', '', '/Uploads/Public/Uploads/2018-11-06/5be15050e90cd.png', '233', '1', '1');
INSERT INTO `productinfo` VALUES ('10', '+5648644', '13', '3', '2', '799.00', 'aas51d3sa15dsad21sa3d21sadsad564qw64qw13 5132131按时打算的撒大多撒多撒多所多撒多撒多所洒水大所大所多所多撒多撒多撒多撒爱仕达多撒多多撒多撒多撒多撒多大所', '/Uploads/Public/Uploads/2018-11-06/5be1506307bea.png', '789', '1', '1');
INSERT INTO `productinfo` VALUES ('11', 'aj33', '13', '4', '10', '1299.00', '啊啊撒登记卡的萨达是骄傲的垃圾收到卡时间段阿斯兰的空间撒离开的健康洒落的健身卡劳动竞赛肯德基卡洛斯的记录卡圣诞节快乐啥都健康萨拉丁假大空撒', '/Uploads/Public/Uploads/2018-11-06/5be15070ddb97.png', '56', '1', '1');
INSERT INTO `productinfo` VALUES ('12', '1213131', '13', '3', '2', '566.00', '', '/Uploads/Public/Uploads/2018-11-06/5be1507b37cce.png', '85', '1', '1');
INSERT INTO `productinfo` VALUES ('13', '7897987', '13', '3', '11', '788.00', '', '/Uploads/Public/Uploads/2018-11-06/5be1508787bc6.png', '8', '1', '1');
INSERT INTO `productinfo` VALUES ('14', '78656', '13', '3', '2', '233.00', '55', '/Uploads/Public/Uploads/2018-11-06/5be150930ad8b.png', '23', '1', '1');
INSERT INTO `productinfo` VALUES ('15', '阿萨德撒多122', '13', '4', '4', '789.00', '45445', '/Uploads/Public/Uploads/2018-11-06/5be1509ef0736.png', '78', '1', '1');
INSERT INTO `productinfo` VALUES ('16', '00123131', '13', '4', '1', '550.00', '', '/Uploads/Public/Uploads/2018-11-06/5be150abf2063.png', '23', '1', '1');
INSERT INTO `productinfo` VALUES ('17', '一双鞋子000', '14', '7', '1', '899.00', '1100', '/Uploads/Public/Uploads/2018-11-06/5be150b78fbf0.png', '235', '1', '1');
INSERT INTO `productinfo` VALUES ('18', '11111111', '13', '3', '2', '899.00', '0000000', '/Uploads/Public/Uploads/2018-11-15/5beccfcfc9453.jpg', '123', '1', '1');

-- ----------------------------
-- Table structure for `typeinfo`
-- ----------------------------
DROP TABLE IF EXISTS `typeinfo`;
CREATE TABLE `typeinfo` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(20) NOT NULL,
  `cateid` int(11) NOT NULL,
  PRIMARY KEY (`typeid`),
  KEY `cateid` (`cateid`),
  CONSTRAINT `typeinfo_ibfk_1` FOREIGN KEY (`cateid`) REFERENCES `cate` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of typeinfo
-- ----------------------------
INSERT INTO `typeinfo` VALUES ('3', '跑步鞋', '13');
INSERT INTO `typeinfo` VALUES ('4', '篮球鞋', '13');
INSERT INTO `typeinfo` VALUES ('5', '跑步鞋', '14');
INSERT INTO `typeinfo` VALUES ('6', '篮球鞋', '14');
INSERT INTO `typeinfo` VALUES ('7', '网球鞋', '14');

-- ----------------------------
-- Table structure for `userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `userpsw` varchar(35) NOT NULL,
  `buyerphone` int(12) DEFAULT NULL,
  `buyername` varchar(20) DEFAULT NULL,
  `buyeraddress` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('1', 'zxx', '202cb962ac59075b964b07152d234b70', '2147483647', '曾曦雄', '福建省厦门市集美区触控未来D08');
INSERT INTO `userinfo` VALUES ('5', '18870663363', 'd41d8cd98f00b204e9800998ecf8427e', null, null, null);
INSERT INTO `userinfo` VALUES ('8', '18870663363', 'd41d8cd98f00b204e9800998ecf8427e', null, null, null);
INSERT INTO `userinfo` VALUES ('9', '18870691163', '3b6f421e7550395e28e091c5565ac80a', null, null, null);
INSERT INTO `userinfo` VALUES ('10', '18870691113', 'fae0b27c451c728867a567e8c1bb4e53', null, null, null);
INSERT INTO `userinfo` VALUES ('11', '18870663363', '202cb962ac59075b964b07152d234b70', null, null, null);
INSERT INTO `userinfo` VALUES ('12', '13625653333', '25d55ad283aa400af464c76d713c07ad', null, null, null);
INSERT INTO `userinfo` VALUES ('13', '18870691131', '25d55ad283aa400af464c76d713c07ad', null, null, null);
INSERT INTO `userinfo` VALUES ('14', '15970366122', '85dc02f197b4684323435fe0bddd3e6b', null, null, null);
INSERT INTO `userinfo` VALUES ('15', '18812345678', 'e10adc3949ba59abbe56e057f20f883e', null, null, null);
INSERT INTO `userinfo` VALUES ('16', '15570112225', 'aff30c130a9000055dfb40dcddf82578', null, null, null);
INSERT INTO `userinfo` VALUES ('17', '15988888888', 'aff30c130a9000055dfb40dcddf82578', null, null, null);

-- ----------------------------
-- View structure for `productview`
-- ----------------------------
DROP VIEW IF EXISTS `productview`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `productview` AS select `productinfo`.`productid` AS `productid`,`productinfo`.`productname` AS `productname`,`productinfo`.`productprice` AS `productprice`,`productinfo`.`productdetail` AS `productdetail`,`productinfo`.`productimg` AS `productimg`,`productinfo`.`isshow` AS `isshow`,`productinfo`.`isrecommend` AS `isrecommend`,`cate`.`catename` AS `catename`,`typeinfo`.`typename` AS `typename`,`brandinfo`.`brandname` AS `brandname`,`brandinfo`.`brandlogo` AS `brandlogo`,`productinfo`.`productcount` AS `productcount` from (((`brandinfo` join `cate`) join `productinfo`) join `typeinfo`) where ((`brandinfo`.`brandid` = `productinfo`.`brandid`) and (`cate`.`id` = `productinfo`.`cateid`) and (`typeinfo`.`typeid` = `productinfo`.`typeid`)) ;
