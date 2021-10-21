# Host: 127.0.0.1  (Version 5.5.5-10.1.19-MariaDB)
# Date: 2017-04-18 16:41:46
# Generator: MySQL-Front 6.0  (Build 1.121)


#
# Structure for table "login"
#

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "login"
#

INSERT INTO `login` VALUES (1,'otacio','202cb962ac59075b964b07152d234b70','OTÁCIO BARBOSA',1);
