<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_weixin_menu`;");
E_C("CREATE TABLE `hhs_weixin_menu` (
  `cat_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL DEFAULT '',
  `cat_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `weixin_key` varchar(255) NOT NULL DEFAULT '',
  `links` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `weixin_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `cat_type` (`cat_type`),
  KEY `sort_order` (`sort_order`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_weixin_menu` values('59','拼好货','1','','','http://wsc.hostadmin.com.cn/group.php','2','1','0');");
E_D("replace into `hhs_weixin_menu` values('60','商城须知','1','','','','3','0','0');");
E_D("replace into `hhs_weixin_menu` values('58','微商城','1','','','http://wsc.hostadmin.com.cn/index.php','1','1','0');");
E_D("replace into `hhs_weixin_menu` values('64','我要售后','1','','','http://mp.weixin.qq.com/s?__biz=MzA5NTQwNTk4MQ==&mid=211955173&idx=1&sn=1694c751bdd07a0e4aa87ecc9d4bad61#rd','1','1','60');");
E_D("replace into `hhs_weixin_menu` values('65','发货承诺','1','','','http://mp.weixin.qq.com/s?__biz=MzA5NTQwNTk4MQ==&mid=211955996&idx=1&sn=392cceb3041b28b675baa289c94d7290#rd','2','1','60');");
E_D("replace into `hhs_weixin_menu` values('66','关于我们','1','','','http://wsc.hostadmin.com.cn/article.php?id=36','3','1','60');");
E_D("replace into `hhs_weixin_menu` values('67','拼团介绍','1','','','http://mp.weixin.qq.com/s?__biz=MzA5NTQwNTk4MQ==&mid=211956186&idx=1&sn=8ee9f24cc3325ba0f3a22ef9b4e7b82e#rd','4','1','60');");

require("../../inc/footer.php");
?>