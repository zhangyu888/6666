set charset utf8;
CREATE TABLE `ms_admin` (
  `admin_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  `last_login_time` int(11) DEFAULT '0',
  `ip` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `position` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `menu` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_admin`(`admin_id`,`admin_name`,`password`,`create_time`,`update_time`,`last_login_time`,`ip`,`tel`,`position`,`menu`) values('1','admin','26415283ead5cff7a4396b1cd41b3330','0','0','1475892688','127.0.0.1','18516555589','超级管理员','0');
CREATE TABLE `ms_anli` (
  `anli_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `anli_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  `cate_id` smallint(5) NOT NULL DEFAULT '0',
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `qrcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`anli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_anli`(`anli_id`,`anli_name`,`create_time`,`update_time`,`cate_id`,`logo`,`image`,`content`,`qrcode`) values('10','为','1473325870','0','9','/upload/image/\\20160908\\43c964a52e9fb5303c6d09b1f5e0fce6.jpg','/upload/image/\\20160908\\ef33d15980914b4466faeecde098ed58.jpg','请问请问去 89','/upload/image/\\20160908\\cdc58d542049943473bca6086c35f5a4.jpg');
insert into `ms_anli`(`anli_id`,`anli_name`,`create_time`,`update_time`,`cate_id`,`logo`,`image`,`content`,`qrcode`) values('11','无i','1473825269','0','10','','','好啊','');
insert into `ms_anli`(`anli_id`,`anli_name`,`create_time`,`update_time`,`cate_id`,`logo`,`image`,`content`,`qrcode`) values('12','请问','1474441936','0','10','','','请问请问','');
CREATE TABLE `ms_anli_cate` (
  `cate_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_pid` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_anli_cate`(`cate_id`,`cate_name`,`cate_pid`) values('9','服装','0');
insert into `ms_anli_cate`(`cate_id`,`cate_name`,`cate_pid`) values('10','食品','0');
CREATE TABLE `ms_article` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `article_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `article_content` text COLLATE utf8_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `click` int(10) NOT NULL DEFAULT '0',
  `cat_id` int(11) NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('18','889','666','1','1473063671','77','10','本站');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('42','请问','请问请问','1','1474439693','87','10','本站');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('43','请问','请问请问','1','1474441927','68','10','原创');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('44','很好的','真的很好的啊','1','1475228296','6','9','本站');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('45','武器','五千万千万千万企鹅去问驱蚊器为驱蚊器为','1','1475232880','3','9','本站');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('5','加入猫神','','1','1473063500','31','8','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('4','联系我们','','1','1473063501','32','8','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('3','发展历程','','1','1473063591','31','8','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('1','公司介绍','','1','1473066666','31','8','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('2','团队介绍','','1','1473063592','31','8','');
CREATE TABLE `ms_article_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_pid` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
insert into `ms_article_cat`(`cat_id`,`cat_name`,`cat_pid`) values('7','资讯中心','0');
insert into `ms_article_cat`(`cat_id`,`cat_name`,`cat_pid`) values('8','关于猫神','0');
insert into `ms_article_cat`(`cat_id`,`cat_name`,`cat_pid`) values('9','行业动态','7');
insert into `ms_article_cat`(`cat_id`,`cat_name`,`cat_pid`) values('10','企业动态','7');
CREATE TABLE `ms_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `reply_time` int(10) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL DEFAULT '0',
  `admin` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(1) DEFAULT '0',
  `order_id` int(10) DEFAULT '0',
  `nickname` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `headimgurl` varchar(180) COLLATE utf8_unicode_ci DEFAULT '',
  `user_name` varchar(11) COLLATE utf8_unicode_ci DEFAULT '',
  `goods_id` smallint(5) DEFAULT '1',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `ms_config` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qq` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wx` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notice` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `copyright` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tpl_id` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_config`(`id`,`name`,`address`,`tel`,`qq`,`email`,`wx`,`fax`,`site`,`notice`,`title`,`keywords`,`description`,`copyright`,`tpl_id`) values('1','纯夫人竹纤维','衢州市金兴数码广场302-303','13587032136','2147483647','86529@qq.com','7875阿萨','0570-89626','www.xiangyuan.com','很好','猫神','微信公众号,微商,互联网+,分销系统','帮助传统零售企业进行互联网+转型。实现O2O营销、供应链管理、链接消费者等经营需求。','Copyright ©2016-2020  www.maogod.com.All Rights Reserved.衢州猫神网络科技有限公司 版权所有<br> 浙ICP备11085598号      浙公网安备 44010602090805号','0');
CREATE TABLE `ms_database` (
  `db_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_database`(`db_id`,`db_name`,`create_time`) values('1','E:\\xampp\\htdocs\\msfx','1468483773');
insert into `ms_database`(`db_id`,`db_name`,`create_time`) values('2','ms2016099239.sql','1473403144');
CREATE TABLE `ms_flink` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_flink`(`id`,`title`,`url`,`image`) values('2','百度','https://www.baidu.com','/upload/image/\\20160914\\e0ae3c68a7fae8db3c0565d130b773a4.jpg');
CREATE TABLE `ms_images` (
  `img_id` int(5) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `it_id` int(5) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `ms_img_text` (
  `it_id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `create_time` int(11) DEFAULT NULL,
  `click` int(5) DEFAULT '0',
  `cate_id` int(5) DEFAULT '0',
  `imgurls` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`it_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_img_text`(`it_id`,`title`,`content`,`create_time`,`click`,`cate_id`,`imgurls`) values('7','搞笑','真搞笑','1474442914','0','2','/upload/image/20160921/14744429130.jpg,/upload/image/20160921/14744429131.jpg,/upload/image/20160921/14744429132.jpg,');
CREATE TABLE `ms_img_text_cate` (
  `cate_id` int(5) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cate_pid` int(5) DEFAULT '0',
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_img_text_cate`(`cate_id`,`cate_name`,`cate_pid`) values('2','搞笑','0');
CREATE TABLE `ms_menu` (
  `menu_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `menu_c` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `menu_a` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `menu_pid` tinyint(3) NOT NULL DEFAULT '0',
  `is_show` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('1','系统设置','','','0','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('2','起始页面','index','info','1','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('3','基本设置','config','set','1','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('5','备份列表','database','showlist','1','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('6','产品管理','','','0','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('7','产品列表','products','showlist','6','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('8','添加产品','products','add','6','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('16','会员管理','','','0','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('17','会员列表','user','showlist','16','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('63','友情链接','flink','flink_list','1','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('21','文章管理','','','0','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('22','文章列表','article','showlist','21','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('23','添加文章','article','add','21','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('24','评论管理','','','0','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('25','评论列表','comment','showlist','24','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('26','添加评论','comment','add','24','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('27','案例管理','','','0','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('28','案例列表','anli','showlist','27','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('29','管理员列表','manager','showlist','1','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('30','添加管理员','manager','add','1','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('64','模板管理','template','','1','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('72','图文管理','','','0','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('73','图文列表','imgtext','showlist','72','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('74','添加图文','imgtext','add','72','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('75','图文分类','imgtext','catelist','72','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('70','添加分类','imgtext','add_cate','72','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('41','会员备注','user','ajax_add_note','16','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('42','查看会员信息','user','edit','16','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('62','生成HTML','html','html','1','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('46','产品分类','products','catelist','6','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('47','添加分类','products','add_cate','6','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('49','导航设置','config','nav_list','1','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('56','文章分类','article','catlist','21','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('57','添加分类','article','add_cat','21','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('58','添加案例','anli','add','27','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('59','案例分类','anli','catelist','27','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('60','添加分类','anli','add_cate','27','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('61','轮播图片','slide','index','1','1');
CREATE TABLE `ms_nav` (
  `nav_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nav_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT '1',
  `sort` tinyint(3) NOT NULL DEFAULT '0',
  `type` tinyint(5) DEFAULT '0',
  `nav_pid` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`,`nav_pid`) values('1','关于猫神','/index/article/about_us','1','10','0','0');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`,`nav_pid`) values('4','首页','/index/index','1','0','0','0');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`,`nav_pid`) values('5','案例中心','/index/anli','1','5','0','0');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`,`nav_pid`) values('6','资讯中心','/index/article/lists','1','6','0','0');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`,`nav_pid`) values('7','渠道代理','/index/daili','0','7','0','0');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`,`nav_pid`) values('8','产品中心','/index/products','1','4','0','0');
CREATE TABLE `ms_pro_cat` (
  `cate_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_pid` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_pro_cat`(`cate_id`,`cate_name`,`cate_pid`) values('8','食品','0');
insert into `ms_pro_cat`(`cate_id`,`cate_name`,`cate_pid`) values('9','时 ','8');
CREATE TABLE `ms_products` (
  `pro_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `promote_price` decimal(10,2) DEFAULT '0.00',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sales` int(10) NOT NULL DEFAULT '0',
  `cate_id` smallint(5) NOT NULL DEFAULT '0',
  `number` smallint(5) NOT NULL DEFAULT '0',
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `click` int(11) NOT NULL DEFAULT '0',
  `base_sales` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `sort` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_products`(`pro_id`,`name`,`price`,`promote_price`,`create_time`,`update_time`,`status`,`sales`,`cate_id`,`number`,`image`,`content`,`click`,`base_sales`,`sort`) values('10','儿童','0.00','0.00','1473325172','0','1','0','9','0','/upload/image/\\20160908\\51120301c66c4d1aa04f4c1b92f717d4.jpg','啊我的期望请问请问去为','0','0','0');
insert into `ms_products`(`pro_id`,`name`,`price`,`promote_price`,`create_time`,`update_time`,`status`,`sales`,`cate_id`,`number`,`image`,`content`,`click`,`base_sales`,`sort`) values('11','请问','0.00','0.00','1473759245','0','1','0','8','0','/upload/image/\\20160914\\63ad6694b60af2d8226a538493ee7001.jpg','很好的产品','0','0','0');
insert into `ms_products`(`pro_id`,`name`,`price`,`promote_price`,`create_time`,`update_time`,`status`,`sales`,`cate_id`,`number`,`image`,`content`,`click`,`base_sales`,`sort`) values('17','请问我啊','0.00','0.00','1474438464','0','1','0','9','0','','请问请问','0','0','0');
CREATE TABLE `ms_slide` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_slide`(`id`,`image`,`create_time`,`title`,`url`) values('12','/upload/image/\\20160909\\7f9605dbf485b1f1eaf3792779bd8961.jpg','1473825539','厉害','/');
insert into `ms_slide`(`id`,`image`,`create_time`,`title`,`url`) values('13','/upload/image/\\20160909\\15a3ccf4dfe3d6ab1425591cd8424d34.jpg','1473820948','很好','baidu.com');
insert into `ms_slide`(`id`,`image`,`create_time`,`title`,`url`) values('15','/upload/image/\\20160920\\324a29b49f6dd60276a7bc3d3d10b50b.png','1474357061','66','/');
CREATE TABLE `ms_tpl` (
  `tpl_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tpl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `ms_user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex` tinyint(1) DEFAULT '0',
  `birthday` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  `parent_id` int(11) DEFAULT '0',
  `parent2_id` int(11) DEFAULT '0',
  `parent3_id` int(11) DEFAULT '0',
  `user_level` tinyint(2) DEFAULT '0',
  `tel` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login_time` int(11) DEFAULT '0',
  `all_fencheng` decimal(10,2) DEFAULT '0.00',
  `sure_fencheng` decimal(10,2) DEFAULT '0.00',
  `nosure_fencheng` decimal(10,2) DEFAULT '0.00',
  `tuan_money` decimal(10,2) DEFAULT '0.00',
  `wechat_user_id` int(11) DEFAULT '0',
  `ip` varchar(15) COLLATE utf8_unicode_ci DEFAULT '',
  `tuan_id` int(10) DEFAULT '0',
  `note` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `before_up_tuan_money` decimal(10,2) DEFAULT '0.00',
  `is_show_fx` tinyint(1) DEFAULT '0',
  `address` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nickname` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `realname` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `portrait` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`) USING BTREE,
  KEY `parent_id` (`parent_id`) USING BTREE,
  KEY `parent2_id` (`parent2_id`) USING BTREE,
  KEY `parent3_id` (`parent3_id`) USING BTREE,
  KEY `tuan_id` (`tuan_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=797 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
