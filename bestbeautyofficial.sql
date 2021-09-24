# Host: localhost  (Version 5.5.5-10.4.19-MariaDB)
# Date: 2021-09-24 16:00:50
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tbl_page"
#

DROP TABLE IF EXISTS `tbl_page`;
CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `created_time` time NOT NULL DEFAULT '00:00:00',
  `created_date` date NOT NULL DEFAULT '2021-09-24',
  `image` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tbl_page"
#

INSERT INTO `tbl_page` VALUES (1,'test ubah\'dengan> segala macam karakter\'','test-ubah-dengan-segala-macam-karakter-','<p>test test</p>',18,'01:46:00','2021-09-24','test-anime-20210924101249_0.jpg'),(2,'spongebob dan patrick ','spongebob-dan-patrick-','<p>kartun pagi</p>',18,'10:14:00','2021-09-24','spongebob-dan-patrick-20210924101449_0.jpg'),(3,'bayu prast','bayu-prast','<p>test</p>',18,'11:12:00','2021-09-24','bayu-prast20210924111216_0.jpg');

#
# Structure for table "tbl_role"
#

DROP TABLE IF EXISTS `tbl_role`;
CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tbl_role"
#

INSERT INTO `tbl_role` VALUES (1,'Superadmin'),(3,'Owner'),(5,'Sub Owner'),(7,'Distributor'),(9,'Agen'),(11,'Reseller'),(13,'Member'),(15,'End User');

#
# Structure for table "tbl_seller"
#

DROP TABLE IF EXISTS `tbl_seller`;
CREATE TABLE `tbl_seller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL DEFAULT '',
  `address` varchar(400) NOT NULL DEFAULT '',
  `sub_district` varchar(128) NOT NULL DEFAULT '',
  `sub_district_name` varchar(255) NOT NULL DEFAULT '',
  `district` varchar(128) NOT NULL DEFAULT '',
  `district_name` varchar(255) NOT NULL DEFAULT '',
  `province` varchar(128) NOT NULL DEFAULT '',
  `province_name` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(128) NOT NULL DEFAULT 'Indonesia',
  `country_id` varchar(128) NOT NULL DEFAULT 'ID',
  `phone` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `facebook` varchar(300) NOT NULL DEFAULT '',
  `instagram` varchar(300) NOT NULL DEFAULT '',
  `bio` varchar(400) NOT NULL DEFAULT '',
  `id_number` varchar(128) NOT NULL DEFAULT '',
  `role_id` int(11) NOT NULL DEFAULT 0,
  `upline_id` int(11) NOT NULL DEFAULT 0,
  `owner_id` int(11) NOT NULL DEFAULT 0,
  `subowner_id` int(11) NOT NULL DEFAULT 0,
  `distributor_id` int(11) NOT NULL DEFAULT 0,
  `agent_id` int(11) NOT NULL DEFAULT 0,
  `member_id` int(11) NOT NULL DEFAULT 0,
  `reseller_id` int(11) NOT NULL DEFAULT 0,
  `image` varchar(128) NOT NULL DEFAULT 'default.png',
  `password` varchar(300) NOT NULL DEFAULT '',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `login_attempt` int(11) NOT NULL DEFAULT 5,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tbl_seller"
#

INSERT INTO `tbl_seller` VALUES (1,'Narko Mekanik','Dsn. Bancang Ds. Tahulu Kec. Merakurak - Tuban','Merakurak','','Tuban','','Jawa Timur','','Indonesia','ID','081231431212','tubanweb1@gmail.com','','','','123456',1,0,0,0,0,0,0,0,'default.png','$2y$05$2BabS4Kd6hjKZtEyu/VzPeXdS2TKckeSk6o3kXjkfZKo1RF1ilFpm',0,1,5),(2,'asd','asd','HI','','HI','','HI','','HI','ID','asd','narko@gmail.com','','','','2',0,1,0,0,0,0,0,0,'default.png','',1,0,5),(3,'Narko','d','AK','','AK','','AK','','HI','ID','081231431212','santomobancang@gmail.com','','','','000003',0,1,0,0,0,0,0,0,'default.png','',1,1,5),(4,'Narko','sdfdsf','HI','','AK','','AK','','AK','ID','asd','santomobancang@gmail.com','','','','000004',0,1,0,0,0,0,0,0,'default.png','',1,1,5),(5,'Narko','asddas','HI','','HI','','HI','','AK','ID','asd','santomobancang@gmail.com','','','','000005',0,1,0,0,0,0,0,0,'default.png','',1,1,5),(6,'Narko','sdf','HI','','AK','','AK','','AK','ID','asd','santomobancang@gmail.com','','','','000006',0,1,0,0,0,0,0,0,'default.png','',1,1,5),(7,'Supervisor 1','adf','HI','','AK','','AK','','HI','ID','081231431212','santomobancang@gmail.com','','','','000007',0,1,0,0,0,0,0,0,'default.png','',1,1,5),(8,'Narko','asdad','AK','','AK','','HI','','HI','ID','asd','santomobancang@gmail.com','','','','000008',0,1,0,0,0,0,0,0,'default.png','',1,1,5),(9,'Narko','asd','HI','','HI','','HI','','HI','ID','081231431212','santomobancang@gmail.com','','','','0009',0,1,0,0,0,0,0,0,'default.png','',1,1,5),(10,'Narko','d','HI','','HI','','AK','','HI','ID','081231431212','santomobancang@gmail.com','','','','000009',0,1,0,0,0,0,0,0,'default.png','',1,1,5),(11,'asd','asd','HI','','HI','','HI','','HI','ID','081231431212','santomobancang@gmail.com','','','','000010',0,1,0,0,0,0,0,0,'default.png','',1,1,5),(16,'Fryan','aaaaaaa','1282','Gerokgak','94','Kabupaten Buleleng','1','Bali','','ID','5557600','frypan@gmail.com','','','halo gaes','000012',0,0,0,0,0,0,0,0,'Fryan20210923085525_0.jpg','',0,1,5),(18,'Shania','jl jalan','435','Kelapa','28','Kabupaten Bangka Barat','2','Bangka Belitung','HI','ID','082131187788','shania@gmail.com','','','','000013',1,0,0,0,0,0,0,0,'Shania20210924044217_0.jpg','$2y$10$hVMqmSvUK8Z.PHzEpigEQOAGj3MMkp0cLuGOse2B./4zG8sCIm3s2',0,1,5),(19,'Fryan','aa','5542','Baros','402','Kabupaten Serang','3','Banten','HI','ID','80099','frypan1@gmail.com','','','','000014',0,18,0,0,0,0,0,0,'default.png','$2y$10$D5l4eiHxs2JapfmRl8y8IOAL8bdcoPjUCglYeIz8U0Z6sjKJ/QUAa',18,1,5);

#
# Structure for table "tbl_setting"
#

DROP TABLE IF EXISTS `tbl_setting`;
CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL DEFAULT '',
  `raja_ongkir_api_key` varchar(300) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tbl_setting"
#

INSERT INTO `tbl_setting` VALUES (1,'Best Beauty Official','1cb6ca038ddb281f174dbc4264474df0');
