/*
Navicat MySQL Data Transfer

Source Server         : con1
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : webdemo1

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2015-06-15 00:47:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `achievement`
-- ----------------------------
DROP TABLE IF EXISTS `achievement`;
CREATE TABLE `achievement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `level` enum('国家级','省部级','地市级','校级','院级') DEFAULT NULL,
  `info` text,
  `grantee` varchar(20) DEFAULT NULL,
  `winner_type` enum('教师','学生','企业','高校','科研院所') DEFAULT NULL,
  `winner_id` int(11) DEFAULT NULL,
  `type` enum('专利','论文','竞赛') DEFAULT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of achievement
-- ----------------------------

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `comment_time` datetime NOT NULL,
  `comment_parent` int(11) NOT NULL,
  `isroot` tinyint(4) NOT NULL,
  `isleaf` tinyint(4) NOT NULL,
  `critic` int(11) NOT NULL,
  `content` text NOT NULL,
  `critic_type` enum('teacher','student') NOT NULL DEFAULT 'student',
  `course_id` int(11) NOT NULL,
  `critic_parent_type` enum('teacher','student') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'student',
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '2015-05-05 23:16:01', '0', '1', '1', '3', '好牛逼！', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('2', '1', '2015-05-15 17:44:00', '0', '1', '0', '2', '沙发', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('3', '1', '2015-05-15 17:45:14', '2', '0', '0', '3', 'haha', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('4', '1', '2015-05-15 17:46:29', '3', '0', '0', '4', 'u silly  b', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('5', '1', '2015-05-15 17:47:33', '2', '0', '1', '1', 'u can u up', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('6', '2', '2015-05-15 17:48:41', '0', '1', '0', '1', '谭浩强', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('7', '1', '2015-05-20 23:17:27', '0', '1', '0', '3', 'xiba', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('8', '1', '2015-05-19 18:00:01', '7', '0', '1', '2', '方法', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('9', '1', '2015-05-19 18:10:10', '2', '0', '1', '2', '是吗?', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('10', '1', '2015-05-19 18:10:39', '2', '0', '0', '2', '好吧，这样也行', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('11', '2', '2015-05-19 18:12:28', '6', '0', '0', '2', '老谭的书，很垃圾', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('14', '1', '2015-05-19 18:43:26', '0', '1', '0', '2', '顶一个', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('15', '8', '2015-05-19 18:44:05', '0', '1', '0', '2', '我也不清楚，同问', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('16', '8', '2015-05-19 18:48:32', '0', '1', '0', '1', '形参就是形式参数，用一个变量代表大家。实参就是实际参数，用一个 确切的数值代替形式参数，可以是表达式。实际参数与形式参数的参数个数、类型和顺序都应一样，如果不一样的话，系统会强制转换，这样会造成数据的丢失。实 参向形参的传递是值的传递。', 'teacher', '1', 'student');
INSERT INTO `comment` VALUES ('19', '8', '2015-05-19 20:25:00', '16', '0', '0', '1', '还要补充一下', 'teacher', '1', 'teacher');
INSERT INTO `comment` VALUES ('20', '1', '2015-05-19 20:56:08', '14', '0', '0', '3', '是吗', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('21', '8', '2015-05-19 21:08:51', '15', '0', '1', '3', '同上', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('22', '1', '2015-05-19 22:47:31', '4', '0', '1', '1', 'too young', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('23', '1', '2015-05-19 22:47:46', '0', '1', '1', '1', 'LOL', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('24', '8', '2015-05-19 22:49:24', '19', '0', '0', '1', '这一章很重要希望大家好好复习', 'teacher', '1', 'teacher');
INSERT INTO `comment` VALUES ('25', '8', '2015-05-19 22:50:29', '16', '0', '0', '4', '么么哒~我要给你生猴子', 'student', '1', 'teacher');
INSERT INTO `comment` VALUES ('26', '3', '2015-05-19 22:51:18', '0', '1', '0', '4', '指针指向地址', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('27', '2', '2015-05-19 22:51:56', '6', '0', '1', '4', '之前就一直在看老谭的书', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('28', '2', '2015-05-19 22:52:18', '6', '0', '0', '4', '没看懂', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('29', '1', '2015-05-19 23:10:26', '4', '0', '0', '3', 'u silly q', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('30', '10', '2015-05-19 23:12:20', '0', '1', '0', '2', '猴子生猴子', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('31', '1', '2015-05-19 23:48:51', '10', '0', '1', '3', '逗比', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('32', '10', '2015-05-20 00:11:01', '30', '0', '1', '3', '网上有很多', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('33', '10', '2015-05-20 00:14:27', '0', '1', '1', '3', '递归算法是把问题转化为规模缩小了的同类问题的子问题。然后递归调用函数（或过程）来表示问题的解。', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('34', '1', '2015-05-20 00:16:31', '0', '1', '1', '5', '新人', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('35', '1', '2015-05-20 00:18:03', '29', '0', '1', '5', '淡定淡定', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('38', '2', '2015-05-20 00:23:44', '0', '1', '1', '5', '好冷清', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('39', '2', '2015-05-20 00:25:52', '11', '0', '0', '5', '没看过', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('40', '2', '2015-05-20 00:27:34', '6', '0', '0', '5', '谭浩强是谁', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('41', '2', '2015-05-20 00:28:40', '0', '1', '0', '5', '求推荐', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('42', '8', '2015-05-20 00:29:59', '0', '1', '1', '5', '飘过~', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('43', '8', '2015-05-20 00:30:40', '25', '0', '1', '5', '。。。', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('46', '2', '2015-05-20 00:38:34', '41', '0', '1', '5', '有不少英文书', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('47', '3', '2015-05-20 00:39:22', '0', '1', '0', '5', '感觉好复杂', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('48', '3', '2015-05-20 00:39:48', '26', '0', '1', '5', '地址？内存？', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('50', '1', '2015-05-28 21:57:26', '0', '1', '0', '1', '还是看英文书吧', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('53', '2', '2015-05-28 22:06:45', '11', '0', '1', '1', '那还是别看了', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('54', '2', '2015-05-28 22:08:20', '28', '0', '1', '1', '没看懂就对了', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('55', '2', '2015-05-28 22:10:09', '40', '0', '1', '1', '。。。。。。', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('56', '3', '2015-05-28 22:11:02', '47', '0', '1', '1', '搞清楚概念就好了', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('57', '8', '2015-05-28 22:11:16', '24', '0', '1', '1', '好的！', 'student', '1', 'teacher');
INSERT INTO `comment` VALUES ('58', '10', '2015-05-28 22:11:38', '0', '1', '1', '1', '去找老谭问问', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('59', '1', '2015-05-28 23:28:24', '20', '0', '1', '1', '是的', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('60', '1', '2015-05-30 21:25:30', '50', '0', '1', '1', '对啊', 'student', '1', 'student');
INSERT INTO `comment` VALUES ('61', '1', '2015-06-12 11:04:47', '20', '0', '1', '1', '淡定淡定', 'student', '1', 'student');

-- ----------------------------
-- Table structure for `course`
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `outline` longtext NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`),
  CONSTRAINT `course_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', '1', 'C语言', '第一章  C 语言概述 \r\n教学目的与要求： \r\n1．了解 C 语言的背景 \r\n2．掌握 C 语言程序的结构\r\n3．领会 C 语言程序设计的风格\r\n教学内容： \r\n1．C 语言的历史背景\r\n2．C 语言的特点\r\n3．C 语言源程序的结构 \r\n重点：\r\nC 程序结构。\r\n第二章   程序的灵魂 —— 算法\r\n教学目的与要求： \r\n1．掌握算法的基本概念与特征 \r\n2．掌握结构化程序设计的基本概念\r\n教学内容 \r\n1．算法的概念\r\n2．算法举例 \r\n3．算法的特征\r\n4．算法的表示\r\n5．结构化程序设计方法\r\n重点： \r\n算法的概念、 N-S 图、常用算法思想。\r\n第三章    数据类型、运算符与表达式\r\n教学目的与要求 \r\n1．了解基本类型及其常量的表示法\r\n2．掌握变量的定义及初始化方法\r\n3．掌握运算符与表达式的概念 \r\n4．领会 C 语言的自动类型转换和强制类型转、左值和赋值的概念\r\n教学内容 \r\n1．常量与变量\r\n2．整型数据 \r\n3．实型数据\r\n4．字符型数据\r\n5．变量赋初值\r\n6．各类数据之间的混合运算 \r\n7．算述运算符与算术表达式 \r\n8．赋值运算符与赋值表达式\r\n9．逗号运算符与逗号表达式\r\n重点： \r\n常用数据类型、常用运算符、数学公式转化为 C 语言表达式的基本能力。\r\n第四章   顺序结构程序设计 \r\n教学目的与要求\r\n1．了解 C 语句的概念及种类\r\n2．掌握 C 语言常用的输入 / 出方式\r\n教学内容\r\n1．C 语句概述\r\n2．赋值语句\r\n3．字符数据的输入与输出\r\n4．格式输入与输出 \r\n5．顺序结构程序设计举例\r\n重点：\r\nC 语句的种类、赋值语句、数据的输入输出及输入输出中常用的控制格式。', 'C语言是一门通用计算机编程语言，应用广泛。C语言的设计目标是提供一种能以简易的方式编译、处理低级存储器、产生少量的机器码以及不需要任何运行环境支持便能运行的编程语言。\r\nC语言也很适合搭配汇编语言来使用（往往可以通过内联汇编语言或与汇编语言目标文件一起连接。对于任何一种操作系统环境，C函数的ABI（Application Binary Interface）与汇编语言的子过程（routine/procedure）的ABI一定是完全兼容的。\r\n尽管C语言提供了许多低级处理的功能，但仍然保持着良好跨平台的特性，以一个标准规格写出的C语言程序可在许多电脑平台上进行编译，甚至包含一些嵌入式处理器（单片机或称MCU）以及超级电脑等作业平台。');
INSERT INTO `course` VALUES ('2', '1', '操作系统', '操作系统（英语：operating system，缩写：OS）是管理计算机硬件与软件资源的计算机程序，同时也是计算机系统的内核与基石。操作系统需要处理如管理与配置内存、决定系统资源供需的优先次序、控制输入与输出设备、操作网络与管理文件系统等基本事务。操作系统也提供一个让用户与系统交互的操作界面。 操作系统的型态非常多样，不同机器安装的操作系统可从简单到复杂，可从非智能手机的嵌入式系统到超级电脑的大型操作系统。许多操作系统制造者对它涵盖范畴的定义也不尽一致，例如有些操作系统集成了图形用户界面，而有些仅使用命令行界面，而将图形用户界面视为一种非必要的应用程序。', '操作系统理论在计算机科学中，为历史悠久而又活跃的分支；而操作系统的设计与实现则是软件工业的基础与内核。');

-- ----------------------------
-- Table structure for `course_chapter`
-- ----------------------------
DROP TABLE IF EXISTS `course_chapter`;
CREATE TABLE `course_chapter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chap_num` int(11) NOT NULL,
  `chap_name` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chap_num` (`chap_num`),
  KEY `course_chapter` (`course_id`),
  CONSTRAINT `course_chapter` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course_chapter
-- ----------------------------
INSERT INTO `course_chapter` VALUES ('1', '100', '编程基础', '1');
INSERT INTO `course_chapter` VALUES ('2', '101', 'C语言概述', '1');
INSERT INTO `course_chapter` VALUES ('3', '102', '数据类型和运算符', '1');
INSERT INTO `course_chapter` VALUES ('4', '103', '顺序程序设计', '1');
INSERT INTO `course_chapter` VALUES ('5', '104', '分支结构', '1');

-- ----------------------------
-- Table structure for `course_section`
-- ----------------------------
DROP TABLE IF EXISTS `course_section`;
CREATE TABLE `course_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sec_num` int(11) NOT NULL,
  `sec_name` varchar(100) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sec_num` (`sec_num`),
  KEY `course_section` (`chapter_id`),
  CONSTRAINT `course_section` FOREIGN KEY (`chapter_id`) REFERENCES `course_chapter` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course_section
-- ----------------------------
INSERT INTO `course_section` VALUES ('1', '101', '计算机硬件基础', '1');
INSERT INTO `course_section` VALUES ('2', '102', '进制和编码', '1');
INSERT INTO `course_section` VALUES ('3', '103', '什么是编程语言', '1');
INSERT INTO `course_section` VALUES ('4', '201', '第一个C语言程序', '2');
INSERT INTO `course_section` VALUES ('5', '202', 'C语言开发工具', '2');
INSERT INTO `course_section` VALUES ('6', '203', 'C语言基本概念', '2');
INSERT INTO `course_section` VALUES ('7', '204', 'C语言结构特点', '2');

-- ----------------------------
-- Table structure for `focus`
-- ----------------------------
DROP TABLE IF EXISTS `focus`;
CREATE TABLE `focus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('成果','实习','科研') NOT NULL,
  `attentioner` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of focus
-- ----------------------------

-- ----------------------------
-- Table structure for `image`
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES ('1', './s/s');

-- ----------------------------
-- Table structure for `news_center`
-- ----------------------------
DROP TABLE IF EXISTS `news_center`;
CREATE TABLE `news_center` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `content` text,
  `date_added` datetime DEFAULT NULL,
  `from_type` enum('student','teacher','enterprise') NOT NULL,
  `to_type` enum('student','teacher','enterprise') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_center
-- ----------------------------

-- ----------------------------
-- Table structure for `reference`
-- ----------------------------
DROP TABLE IF EXISTS `reference`;
CREATE TABLE `reference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_url` varchar(300) NOT NULL,
  `ref_name` varchar(50) NOT NULL,
  `ref_info` text,
  `type` enum('ppt','pdf','pptx','docx','doc') NOT NULL,
  `r_date_added` datetime NOT NULL,
  `swf_url` varchar(300) NOT NULL,
  `section` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_section1` (`section`),
  CONSTRAINT `course_section1` FOREIGN KEY (`section`) REFERENCES `course_section` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reference
-- ----------------------------
INSERT INTO `reference` VALUES ('1', '/webDemo1/upfile/1/document/b1ce0e6b7aec1619ba3e4701d32e49bdba320ab7cd8e1cb4bb77aaf1.ppt', '讲义1', null, 'ppt', '2015-06-08 17:04:00', '/webDemo1/upfile/1/document/swf/b1ce0e6b7aec1619ba3e4701d32e49bdba320ab7cd8e1cb4bb77aaf1.swf', '1');
INSERT INTO `reference` VALUES ('2', '/webDemo1/upfile/1/document/49a16c07c0e72f9616a0fa8044f49b209418a614f75a764e37718ecb.pdf', '讲义2', null, 'pdf', '2015-06-03 17:04:40', '/webDemo1/upfile/1/document/swf/49a16c07c0e72f9616a0fa8044f49b209418a614f75a764e37718ecb.swf', '2');
INSERT INTO `reference` VALUES ('3', '/webDemo1/upfile/1/document/41fba21234e8d9ab5ea051312fccbe8a0046913d4e75c90063813c39.docx', '讲义3', null, 'docx', '2015-05-12 17:05:22', '/webDemo1/upfile/1/document/swf/41fba21234e8d9ab5ea051312fccbe8a0046913d4e75c90063813c39.swf', '3');
INSERT INTO `reference` VALUES ('4', '/webDemo1/upfile/1/document/b1ce0e6b7aec1619ba3e4701d32e49bdba320ab7cd8e1cb4bb77aaf1.ppt', '讲义4', null, 'ppt', '2015-05-04 17:06:04', '/webDemo1/upfile/1/document/swf/b1ce0e6b7aec1619ba3e4701d32e49bdba320ab7cd8e1cb4bb77aaf1.swf', '4');
INSERT INTO `reference` VALUES ('5', '/webDemo1/upfile/1/document/49a16c07c0e72f9616a0fa8044f49b209418a614f75a764e37718ecb.pdf', '讲义5', null, 'pdf', '2015-06-03 17:06:44', '/webDemo1/upfile/1/document/swf/49a16c07c0e72f9616a0fa8044f49b209418a614f75a764e37718ecb.swf', '5');
INSERT INTO `reference` VALUES ('6', '/webDemo1/upfile/1/document/41fba21234e8d9ab5ea051312fccbe8a0046913d4e75c90063813c39.docx', '讲义6', null, 'docx', '2015-06-15 17:07:31', '/webDemo1/upfile/1/document/swf/41fba21234e8d9ab5ea051312fccbe8a0046913d4e75c90063813c39.swf', '6');
INSERT INTO `reference` VALUES ('7', '/webDemo1/upfile/1/document/49a16c07c0e72f9616a0fa8044f49b209418a614f75a764e37718ecb.pdf', '讲义7', null, 'pdf', '2015-05-25 17:08:07', '/webDemo1/upfile/1/document/swf/49a16c07c0e72f9616a0fa8044f49b209418a614f75a764e37718ecb.swf', '7');

-- ----------------------------
-- Table structure for `school`
-- ----------------------------
DROP TABLE IF EXISTS `school`;
CREATE TABLE `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `fax` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of school
-- ----------------------------
INSERT INTO `school` VALUES ('1', '北京邮电大学', '北京市海淀区西土城路10号', '01011112222', '222-2-223-3');

-- ----------------------------
-- Table structure for `scientific_research`
-- ----------------------------
DROP TABLE IF EXISTS `scientific_research`;
CREATE TABLE `scientific_research` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `info` text NOT NULL,
  `publisher` int(11) NOT NULL,
  `publisher_type` enum('teacher','enterprise') NOT NULL,
  `content` text NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scientific_research
-- ----------------------------

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sno` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `school_id` (`school_id`),
  KEY `image_id` (`image_id`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`),
  CONSTRAINT `student_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', '2014110824', '1', '1', '葫芦娃', '123456');
INSERT INTO `student` VALUES ('2', '2014110822', '1', '1', '蛇精', '123456');
INSERT INTO `student` VALUES ('3', '2014110820', '1', '1', '二傻子', '123456');
INSERT INTO `student` VALUES ('4', '2014110819', '1', '1', '凤姐', '123456');
INSERT INTO `student` VALUES ('5', '2014111412', '1', '1', '大衣哥', '123456');

-- ----------------------------
-- Table structure for `student_info`
-- ----------------------------
DROP TABLE IF EXISTS `student_info`;
CREATE TABLE `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `gender` char(5) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `nationality` varchar(10) DEFAULT NULL,
  `native_place` varchar(20) DEFAULT NULL,
  `pid_no` varchar(15) DEFAULT NULL,
  `entrance_time` datetime DEFAULT NULL,
  `graduation_time` datetime DEFAULT NULL,
  `politics_status` varchar(10) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student_info
-- ----------------------------

-- ----------------------------
-- Table structure for `stu_course_info`
-- ----------------------------
DROP TABLE IF EXISTS `stu_course_info`;
CREATE TABLE `stu_course_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `type` enum('计划内','公开课') DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `stu_course_info_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  CONSTRAINT `stu_course_info_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stu_course_info
-- ----------------------------
INSERT INTO `stu_course_info` VALUES ('1', '1', '1', '计划内', '2015-06-02 11:08:33');
INSERT INTO `stu_course_info` VALUES ('2', '1', '2', '计划内', '2015-06-09 11:09:02');
INSERT INTO `stu_course_info` VALUES ('3', '1', '3', '计划内', '2015-06-01 11:09:23');
INSERT INTO `stu_course_info` VALUES ('4', '1', '4', '计划内', '2015-05-12 11:09:47');
INSERT INTO `stu_course_info` VALUES ('5', '1', '5', '计划内', '2015-04-14 11:10:12');
INSERT INTO `stu_course_info` VALUES ('6', '2', '1', '计划内', '2015-06-04 11:21:09');

-- ----------------------------
-- Table structure for `subject`
-- ----------------------------
DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `publisher` int(11) NOT NULL,
  `comment_count` int(11) NOT NULL DEFAULT '0',
  `course_id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `publisher` (`publisher`),
  CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`publisher`) REFERENCES `student` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subject
-- ----------------------------
INSERT INTO `subject` VALUES ('1', 'C语言好用吗？', '2015-05-15 11:37:08', '2015-06-12 11:04:47', '1', '21', '1', '打算学c语言，不知道C语言好用吗？');
INSERT INTO `subject` VALUES ('2', '字符串调用', '2015-05-15 17:50:13', '2015-05-28 22:10:09', '1', '12', '1', '指针的概念中有一条：指针变量的值为地址。\r\n所以不管是字符串还是字符，只要传的实参是个地址就可以。');
INSERT INTO `subject` VALUES ('3', '关于指针的调用', '2015-05-12 21:36:38', '2015-05-28 22:11:02', '2', '4', '1', '指针的定义:\r\n例如整型指针: int *p;p是一个指向int类型数据的指针变量。里面存放的地址(也就是指针)是一个int类型变量的地址。');
INSERT INTO `subject` VALUES ('8', '函数参数问题', '2015-05-19 16:27:00', '2015-05-28 22:11:16', '3', '9', '1', 'C语言中，函数的实参和形参有什么区别？');
INSERT INTO `subject` VALUES ('10', '递归算法', '2015-05-19 23:11:31', '2015-05-28 22:11:38', '3', '4', '1', '什么是递归，应该怎样理解递归？ ');

-- ----------------------------
-- Table structure for `teacher`
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tno` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `school_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `school_id` (`school_id`),
  KEY `image_id` (`image_id`),
  CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`),
  CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('1', '2011222333', '乔建永', '123456', '1', '1');

-- ----------------------------
-- Table structure for `teacher_info`
-- ----------------------------
DROP TABLE IF EXISTS `teacher_info`;
CREATE TABLE `teacher_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `gender` char(5) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `nationality` varchar(10) DEFAULT NULL,
  `native_place` varchar(20) DEFAULT NULL,
  `pid_no` varchar(15) DEFAULT NULL,
  `politics_status` varchar(10) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  `info` text,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`),
  CONSTRAINT `teacher_info_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher_info
-- ----------------------------

-- ----------------------------
-- Table structure for `video`
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_url` varchar(300) NOT NULL,
  `video_name` varchar(50) NOT NULL,
  `video_info` text,
  `v_date_added` datetime NOT NULL,
  `section` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `section` (`section`),
  CONSTRAINT `video_section` FOREIGN KEY (`section`) REFERENCES `course_section` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('1', '/webDemo1/upfile/1/video/032be593cfbd5952eecc8f763c03f62049a8e680846c3be908538409.mp4', '视频教程1', null, '2015-05-11 15:55:04', '1');
INSERT INTO `video` VALUES ('2', '/webDemo1/upfile/1/video/032be593cfbd5952eecc8f763c03f62049a8e680846c3be908538409.mp4', '视频教程2', null, '2015-06-17 15:55:28', '2');
INSERT INTO `video` VALUES ('3', '/webDemo1/upfile/1/video/032be593cfbd5952eecc8f763c03f62049a8e680846c3be908538409.mp4', '视频教程3', null, '2015-04-14 15:55:45', '3');
INSERT INTO `video` VALUES ('4', '/webDemo1/upfile/1/video/032be593cfbd5952eecc8f763c03f62049a8e680846c3be908538409.mp4', '视频教程4', null, '2015-06-22 15:56:29', '4');
INSERT INTO `video` VALUES ('5', '/webDemo1/upfile/1/video/032be593cfbd5952eecc8f763c03f62049a8e680846c3be908538409.mp4', '视频教程5', null, '2015-03-18 15:56:45', '5');
INSERT INTO `video` VALUES ('6', '/webDemo1/upfile/1/video/032be593cfbd5952eecc8f763c03f62049a8e680846c3be908538409.mp4', '视频教程6', null, '2015-06-09 15:57:13', '6');
INSERT INTO `video` VALUES ('7', '/webDemo1/upfile/1/video/032be593cfbd5952eecc8f763c03f62049a8e680846c3be908538409.mp4', '视频教程', null, '2015-06-07 15:58:09', '7');

-- ----------------------------
-- Procedure structure for `comment_isroot`
-- ----------------------------
DROP PROCEDURE IF EXISTS `comment_isroot`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `comment_isroot`(in leaf int)
begin
declare flag int default 0;
set flag=(select isroot from comment where 1=1 and id=leaf);
end
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `comment_leaf`
-- ----------------------------
DROP PROCEDURE IF EXISTS `comment_leaf`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `comment_leaf`(in subject int, in course int)
begin
select * from comment where 1=1 and subject_id=subject and course_id=course and isleaf=1;
end
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `comment_noparent`
-- ----------------------------
DROP PROCEDURE IF EXISTS `comment_noparent`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `comment_noparent`(in leaf int)
begin
declare critictype varchar(10) default null;
declare parenttype varchar(10) default null;
declare flag int default 0;
set critictype=(select critic_type from comment where 1=1 and id=leaf);
set parenttype=(select parent_type from comment where 1=1 and id=leaf);
select comment.*, ct.name critic_name from comment c join critictype ct on(
c.critic=ct.id), parenttype pt where 1=1 and c.id=leaf;
end
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `comment_parent`
-- ----------------------------
DROP PROCEDURE IF EXISTS `comment_parent`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `comment_parent`(in leaf int)
begin
declare critictype varchar(10) default null;
declare parenttype varchar(10) default null;
declare flag int default 0;
set critictype=(select critic_type from comment where 1=1 and id=leaf);
set parenttype=(select parent_type from comment where 1=1 and id=leaf);
select c.*, ct.name critic_name, pt.name parent_name from comment c join critictype ct on(
c.critic=ct.id), parenttype pt where 1=1 and c.id=leaf and pt.id=c.comment_parent;
end
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `getsubjectbyid`
-- ----------------------------
DROP PROCEDURE IF EXISTS `getsubjectbyid`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `getsubjectbyid`(in subject_id int)
begin
select name subject_name, content subject_content from subject where 1=1 and id=subject_id;
end
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `get_stu_classes`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_stu_classes`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_stu_classes`(in stu int)
begin
select course.id, course.teacher_id, course.name, course.outline, course.info, stu_course_info.type 
from course join stu_course_info on 
(course.id=stu_course_info.course_id) where 1=1 and 
stu_course_info.student_id=stu;
end
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `get_subjects`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_subjects`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_subjects`(in id int)
begin
select subject.*, student.name as publisher_name from subject join student on (subject.publisher=student.id) where 1=1 and 
subject.course_id=id;
end
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `login_chk`
-- ----------------------------
DROP PROCEDURE IF EXISTS `login_chk`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `login_chk`(in type varchar(20), in username varchar(10), in pwd varchar(20))
begin 
if type='student' then
select * from student where 1=1 and name=username and password=pwd;
elseif type='teacher' then
select * from teacher where 1=1 and name=username and password=pwd;
end if;
end
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `test`
-- ----------------------------
DROP PROCEDURE IF EXISTS `test`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `test`(in n varchar(10), in pwd varchar(20), in type varchar(10))
begin 
select * from type where 1=1 and name=n and password=pwd;
end
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `test1`
-- ----------------------------
DROP PROCEDURE IF EXISTS `test1`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `test1`()
begin 
select * from student;
end
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `test2`
-- ----------------------------
DROP PROCEDURE IF EXISTS `test2`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `test2`()
BEGIN
select * from student where id=1;
select * from teacher where id=1;
END
;;
DELIMITER ;
