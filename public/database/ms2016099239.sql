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
  `menu` varchar(200) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_admin`(`admin_id`,`admin_name`,`password`,`create_time`,`update_time`,`last_login_time`,`ip`,`tel`,`position`,`menu`) values('1','admin','26415283ead5cff7a4396b1cd41b3330','0','0','0','','','','1,2,3,4,5');
CREATE TABLE `ms_anli` (
  `anli_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `anli_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  `cate_id` smallint(5) NOT NULL DEFAULT '0',
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `qrcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`anli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_anli`(`anli_id`,`anli_name`,`create_time`,`update_time`,`cate_id`,`logo`,`image`,`content`,`qrcode`) values('10','为','1473325870','0','9','/upload/image/\\20160908\\43c964a52e9fb5303c6d09b1f5e0fce6.jpg','/upload/image/\\20160908\\ef33d15980914b4466faeecde098ed58.jpg','请问请问去 89','/upload/image/\\20160908\\cdc58d542049943473bca6086c35f5a4.jpg');
CREATE TABLE `ms_anli_cate` (
  `cate_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_pid` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_anli_cate`(`cate_id`,`cate_name`,`cate_pid`) values('9','食品','0');
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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('18','889','666','1','1473063671','6','10','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('19','887','钱王拳王','1','1473063685','6','9','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('21','士大夫','阿三','1','1473324747','1','10','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('5','加入猫神','','1','1473063500','0','8','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('4','联系我们','','1','1473063501','0','8','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('3','发展历程','','1','1473063591','0','8','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('1','公司介绍','','1','1473066666','0','8','');
insert into `ms_article`(`article_id`,`article_name`,`article_content`,`status`,`create_time`,`click`,`cat_id`,`author`) values('2','团队介绍','','1','1473063592','0','8','');
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
insert into `ms_comment`(`comment_id`,`content`,`create_time`,`reply`,`reply_time`,`user_id`,`admin`,`status`,`order_id`,`nickname`,`headimgurl`,`user_name`,`goods_id`) values('25','真心不错','1468018943','','0','96','','1','34','郁郁','http://wx.qlogo.cn/mmopen/b8zMbEQ2iacg1T9E5pLwyibht0yeokQ4eO3DZPG41zhSzWNBjaqPjx9Gw9DsYovhQFdcghvfvKQrhA0KlqIDiasFl59a7x6vgc5/0','159014','1');
insert into `ms_comment`(`comment_id`,`content`,`create_time`,`reply`,`reply_time`,`user_id`,`admin`,`status`,`order_id`,`nickname`,`headimgurl`,`user_name`,`goods_id`) values('23','纸用过之后非常好','1467548169','','0','603','','1','87','小小叶子','http://wx.qlogo.cn/mmopen/JVDECnNjedEiaibqqW1Y8F7y0IOk1SxxEk0ricPDSAoicrgCE86YzygaLD2Nz1T9RelA6uc4GfS7axqCMwzvaYmcaw/0','159521','1');
insert into `ms_comment`(`comment_id`,`content`,`create_time`,`reply`,`reply_time`,`user_id`,`admin`,`status`,`order_id`,`nickname`,`headimgurl`,`user_name`,`goods_id`) values('17','非常健康的一种生活用纸，家人朋友们都很喜欢','1466847045','','0','401','','1','48','Mary','http://wx.qlogo.cn/mmopen/dI7ToFrwFCviaAO3H7TgRcJIIVx6NUpktk4YziaxjZSbGpcyqtj1N4SdbRZMlHOQdQ2ju7RHWDrXctDOH22hcBnHKhdJkgpS8F/0','159319','1');
insert into `ms_comment`(`comment_id`,`content`,`create_time`,`reply`,`reply_time`,`user_id`,`admin`,`status`,`order_id`,`nickname`,`headimgurl`,`user_name`,`goods_id`) values('21','听说很好用，期待','1467207737','','0','4','','1','8','奇点','http://wx.qlogo.cn/mmopen/TQiciaacqKToia8HB1ZqN5aRcb28Q334lEE7OeDvPtgsiakO2rjXHQ5IPVIpo5YTVlZAwmEFbgECHrpQUZKMJxXetUB9GjTaccF6/0','000008','1');
insert into `ms_comment`(`comment_id`,`content`,`create_time`,`reply`,`reply_time`,`user_id`,`admin`,`status`,`order_id`,`nickname`,`headimgurl`,`user_name`,`goods_id`) values('24','好纸，量足，价优。','1467688643','','0','560','','1','85','山人俊','http://wx.qlogo.cn/mmopen/I7aB6txWommSpEhJ4FOFp6aRexuNguymCTMTGwicVFqFnj2eUqP8vKJjtnfPlV2RLcFGmyuqfDxAkh5qAsa71po5YbL7ribegg/0','159478','1');
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_config`(`id`,`name`,`address`,`tel`,`qq`,`email`,`wx`,`fax`,`site`,`notice`,`title`,`keywords`,`description`,`copyright`) values('1','纯夫人竹纤维','衢州市金兴数码广场302-303','13587032136','2147483647','86529@qq.com','7875阿萨','0570-89626','www.xiangyuan.com','很好','','','','Copyright ©2016-2020  www.maogod.com.All Rights Reserved.衢州猫神网络科技有限公司 版权所有 浙ICP备11085598号      浙公网安备 44010602090805号');
CREATE TABLE `ms_database` (
  `db_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_database`(`db_id`,`db_name`,`create_time`) values('1','E:\\xampp\\htdocs\\msfx','1468483773');
CREATE TABLE `ms_flink` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `ms_menu` (
  `menu_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `menu_c` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `menu_a` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `menu_pid` tinyint(3) NOT NULL DEFAULT '0',
  `is_show` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
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
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('35','管理员删除','manager','delete','1','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('37','删除文章','article','delete','21','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('41','会员备注','user','ajax_add_note','16','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('42','查看会员信息','user','edit','16','0');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('62','生成静态页面','','','1','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('46','产品分类','products','catelist','6','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('47','添加分类','products','add_cate','6','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('49','导航设置','config','nav_set','1','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('56','文章分类','article','catlist','21','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('57','添加分类','article','add_cat','21','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('58','添加案例','anli','add','27','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('59','案例分类','anli','catelist','27','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('60','添加分类','anli','add_cate','27','1');
insert into `ms_menu`(`menu_id`,`menu_name`,`menu_c`,`menu_a`,`menu_pid`,`is_show`) values('61','轮播图片','slide','set','1','1');
CREATE TABLE `ms_nav` (
  `nav_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nav_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT '1',
  `sort` tinyint(3) NOT NULL DEFAULT '0',
  `type` varchar(5) COLLATE utf8_unicode_ci DEFAULT '0',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`) values('1','关于猫神','/index/article/about_us','1','10','0');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`) values('2','','','0','10','1');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`) values('3','','','0','10','1');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`) values('4','首页','/','1','0','0');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`) values('5','案例中心','/index/anli','1','5','0');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`) values('6','资讯中心','/index/article/news_list','1','6','0');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`) values('7','渠道代理','/index/daili','0','7','0');
insert into `ms_nav`(`nav_id`,`nav_name`,`nav_url`,`is_show`,`sort`,`type`) values('8','产品中心','/index/products','1','4','0');
CREATE TABLE `ms_pro_cat` (
  `cate_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_pid` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_products`(`pro_id`,`name`,`price`,`promote_price`,`create_time`,`update_time`,`status`,`sales`,`cate_id`,`number`,`image`,`content`,`click`,`base_sales`,`sort`) values('10','儿童','0.00','0.00','1473325172','0','1','0','0','0','/upload/image/\\20160908\\51120301c66c4d1aa04f4c1b92f717d4.jpg','而俄而而额','0','0','0');
CREATE TABLE `ms_slide` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into `ms_slide`(`id`,`image`,`create_time`) values('5','/upload/image/\\20160907\\926bf84c6b6f7747ee2482b53b55dd5c.jpg;/upload/image/\\20160907\\25a14bdcad00b2175021b25bf26a7513.jpg;/upload/image/\\20160907\\1230ca1c6612accdcba0896bc8cdcd94.jpg','1473218118');
insert into `ms_slide`(`id`,`image`,`create_time`) values('6','/upload/image/\\20160908\\c157e28325ae94c1432e8c09ccd36916.jpg;/upload/image/\\20160908\\7d6bd8ef0ef8b53047d47a29715b998f.jpg;/upload/image/\\20160908\\eb09cc4cf528ac7e77339d6d864eb9d4.jpg','1473324715');
insert into `ms_slide`(`id`,`image`,`create_time`) values('7','/upload/image/\\20160908\\df1ba925fc697f1d9c6e6f4aee155893.jpg;/upload/image/\\20160908\\4f589e5b3ab725b6d32db1af1dedeaf7.jpg;/upload/image/\\20160908\\d557ddf28f0a11b37ad9879dd0f8a280.jpg','1473326600');
insert into `ms_slide`(`id`,`image`,`create_time`) values('8','/upload/image/\\20160908\\7d20ecddcd32948c4651fe7b91f943c6.jpg;/upload/image/\\20160908\\e7bcea90da7915a84774af1cce31dd32.jpg;/upload/image/\\20160908\\f5697067bb115d978963909764f88031.jpg','1473327614');
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
