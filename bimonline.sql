/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.34-MariaDB : Database - bimonline
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bimonline` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `bimonline`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `ma_ad` int(11) NOT NULL AUTO_INCREMENT,
  `ho` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_dn` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`ma_ad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admin` */

insert  into `admin`(`ma_ad`,`ho`,`ten`,`ten_dn`,`mat_khau`,`gioi_tinh`) values (1,'Vũ ','Bằng','admin1','admin',''),(2,'Phạm','Minh','admin2','admin',''),(3,'Nguyễn ','Hùng','admin3','admin','');

/*Table structure for table `bim` */

DROP TABLE IF EXISTS `bim`;

CREATE TABLE `bim` (
  `ma_bim` int(11) NOT NULL AUTO_INCREMENT,
  `ma_loai` int(11) NOT NULL,
  `ten_bim` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` int(10) NOT NULL,
  `mo_ta` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`ma_bim`),
  KEY `ma_loai` (`ma_loai`),
  CONSTRAINT `bim_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_bim` (`ma_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

/*Data for the table `bim` */

insert  into `bim`(`ma_bim`,`ma_loai`,`ten_bim`,`hinh_anh`,`gia`,`mo_ta`,`trang_thai`) values (76,1,'Bá»‰m - TÃ£ dÃ¡n sÆ¡ sinh Huggies size NB','huggies1.jpg',360000,'<div> 	- Lá»›p tháº¥m nhanh siÃªu tá»‘c </div> <div> 	- Há»‡ thun Magic Fit </div> <div> 	- MÃ ng Ä‘Ã¡y thoÃ¡t áº©m Ä‘a chiá»u </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- Tinh cháº¥t trÃ  xanh </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, giÃºp da hÃ´ háº¥p tá»± nhiÃªn, ngÄƒn ngá»«a hÄƒm tÃ£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>',''),(77,1,'Bá»‰m - TÃ£ quáº§n Huggies Dry size L - 48 miáº¿ng','huggies4.jpg',320000,'<div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng  </div> <div> 	- Bá» máº·t sÃ³ng 3D thoÃ¡ng khÃ­ </div> <div> 	- Tinh cháº¥t trÃ  xanh thÆ¡m mÃ¡t, chá»‘ng hÄƒm </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- LÃµi tháº¥m hÃºt vá»›i rÃ£nh kim cÆ°Æ¡ng giÃºp tháº¥m nhanh, dÃ n Ä‘á»u vÃ  khÃ³a cháº·t cháº¥t lá»ng bÃªn trong cho bá» máº·t tÃ£ khÃ´ rÃ¡o. </div> <div> 	- Máº·t Ä‘Ã¡y dáº¡ng váº£i giÃºp Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, cho tÃ£ luÃ´n thoÃ¡ng khÃ­ </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>  <div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng </div>',''),(78,4,'Miáº¿ng lÃ³t Bobby Newborn 1 - 108 miáº¿ng ','bobby1.jpg',220000,'<div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng  </div> <div> 	- Bá» máº·t sÃ³ng 3D thoÃ¡ng khÃ­ </div> <div> 	- Tinh cháº¥t trÃ  xanh thÆ¡m mÃ¡t, chá»‘ng hÄƒm </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- LÃµi tháº¥m hÃºt vá»›i rÃ£nh kim cÆ°Æ¡ng giÃºp tháº¥m nhanh, dÃ n Ä‘á»u vÃ  khÃ³a cháº·t cháº¥t lá»ng bÃªn trong cho bá» máº·t tÃ£ khÃ´ rÃ¡o. </div> <div> 	- Máº·t Ä‘Ã¡y dáº¡ng váº£i giÃºp Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, cho tÃ£ luÃ´n thoÃ¡ng khÃ­ </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>  <div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng </div>',''),(79,2,'Bá»‰m - TÃ£ quáº§n Goon Renew Slim size XXL','goon2.jpg',120000,'<div> 	- Lá»›p tháº¥m nhanh siÃªu tá»‘c </div> <div> 	- Há»‡ thun Magic Fit </div> <div> 	- MÃ ng Ä‘Ã¡y thoÃ¡t áº©m Ä‘a chiá»u </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- Tinh cháº¥t trÃ  xanh </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, giÃºp da hÃ´ háº¥p tá»± nhiÃªn, ngÄƒn ngá»«a hÄƒm tÃ£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>',''),(80,5,'Bá»‰m - TÃ£ dÃ¡n Pampers Nháº­t Newborn - 68 miáº¿ng','pampers1.jpg',140000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(81,3,'Combo sÆ¡ sinh tÃ£ dÃ¡n vÃ  khÄƒn Æ°á»›t Merries',',erries11.jpg',810000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(82,4,'Miáº¿ng lÃ³t Bobby Newborn 1 - 64 miáº¿ng','bobby3.jpg',81000,'<div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng  </div> <div> 	- Bá» máº·t sÃ³ng 3D thoÃ¡ng khÃ­ </div> <div> 	- Tinh cháº¥t trÃ  xanh thÆ¡m mÃ¡t, chá»‘ng hÄƒm </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- LÃµi tháº¥m hÃºt vá»›i rÃ£nh kim cÆ°Æ¡ng giÃºp tháº¥m nhanh, dÃ n Ä‘á»u vÃ  khÃ³a cháº·t cháº¥t lá»ng bÃªn trong cho bá» máº·t tÃ£ khÃ´ rÃ¡o. </div> <div> 	- Máº·t Ä‘Ã¡y dáº¡ng váº£i giÃºp Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, cho tÃ£ luÃ´n thoÃ¡ng khÃ­ </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>  <div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng </div>',''),(83,4,'Bá»‰m - TÃ£ dÃ¡n Bobby Extra Soft - Dry cao cáº¥p','bobby3.jpg',320000,'<div> 	- Lá»›p tháº¥m nhanh siÃªu tá»‘c </div> <div> 	- Há»‡ thun Magic Fit </div> <div> 	- MÃ ng Ä‘Ã¡y thoÃ¡t áº©m Ä‘a chiá»u </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- Tinh cháº¥t trÃ  xanh </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, giÃºp da hÃ´ háº¥p tá»± nhiÃªn, ngÄƒn ngá»«a hÄƒm tÃ£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>',''),(84,4,'Bá»‰m - TÃ£ dÃ¡n Bobby Extra Soft - Dry cao cáº¥p 108 miáº¿ng','bobby6.jpg',210000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(85,4,'Bá»‰m - TÃ£ quáº§n Bobby size XXL - 44 miáº¿ng (TrÃªn...','bobby7.jpg',110000,'<div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng  </div> <div> 	- Bá» máº·t sÃ³ng 3D thoÃ¡ng khÃ­ </div> <div> 	- Tinh cháº¥t trÃ  xanh thÆ¡m mÃ¡t, chá»‘ng hÄƒm </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- LÃµi tháº¥m hÃºt vá»›i rÃ£nh kim cÆ°Æ¡ng giÃºp tháº¥m nhanh, dÃ n Ä‘á»u vÃ  khÃ³a cháº·t cháº¥t lá»ng bÃªn trong cho bá» máº·t tÃ£ khÃ´ rÃ¡o. </div> <div> 	- Máº·t Ä‘Ã¡y dáº¡ng váº£i giÃºp Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, cho tÃ£ luÃ´n thoÃ¡ng khÃ­ </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>  <div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng </div>',''),(86,4,'Bá»‰m - TÃ£ dÃ¡n Bobby size L - 68 miáº¿ng (Cho bÃ© 2 tuá»•i)','bobby15.jpg',92000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(87,4,'Miáº¿ng lÃ³t Bobby Newborn 2 - 60 miáº¿ng (Cho bÃ© 4 tuá»•i)','bobby16.jpg',966000,'<div> - CÃ´ng nghá»‡ má»›i</div><div>- KhÃ´ thoÃ¡ng</div><div> - Báº£o vá»‡ bÃ© 24h</div?<div>- Chá»‘ng trÃ n hiá»‡u quáº£</div?<div>CÃ´ng nghá»‡ Extra Soft</div>',''),(88,1,'Bá»‰m - TÃ£ quáº§n Huggies Dry size L - 48 miáº¿ng...','huggies4.jpg',410000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(89,1,'Bá»‰m - TÃ£ dÃ¡n Huggies Gold cao cáº¥p size XL','huggies6.jpg',173000,'<div> 	- Lá»›p tháº¥m nhanh siÃªu tá»‘c </div> <div> 	- Há»‡ thun Magic Fit </div> <div> 	- MÃ ng Ä‘Ã¡y thoÃ¡t áº©m Ä‘a chiá»u </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- Tinh cháº¥t trÃ  xanh </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, giÃºp da hÃ´ háº¥p tá»± nhiÃªn, ngÄƒn ngá»«a hÄƒm tÃ£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>',''),(90,1,'Bá»‰m - TÃ£ dÃ¡n Huggies Gold cao cáº¥p size L','huggies9.jpg',120000,'<div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng  </div> <div> 	- Bá» máº·t sÃ³ng 3D thoÃ¡ng khÃ­ </div> <div> 	- Tinh cháº¥t trÃ  xanh thÆ¡m mÃ¡t, chá»‘ng hÄƒm </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- LÃµi tháº¥m hÃºt vá»›i rÃ£nh kim cÆ°Æ¡ng giÃºp tháº¥m nhanh, dÃ n Ä‘á»u vÃ  khÃ³a cháº·t cháº¥t lá»ng bÃªn trong cho bá» máº·t tÃ£ khÃ´ rÃ¡o. </div> <div> 	- Máº·t Ä‘Ã¡y dáº¡ng váº£i giÃºp Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, cho tÃ£ luÃ´n thoÃ¡ng khÃ­ </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>  <div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng </div>',''),(91,1,'Bá»‰m - TÃ£ dÃ¡n sÆ¡ sinh Huggies size NB - 58+2...','huggies11.jpg',314000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(92,1,'Miáº¿ng lÃ³t sÆ¡ sinh Huggies NB1 - 100 miáº¿ng','huggies13.JPG',390000,'<div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng  </div> <div> 	- Bá» máº·t sÃ³ng 3D thoÃ¡ng khÃ­ </div> <div> 	- Tinh cháº¥t trÃ  xanh thÆ¡m mÃ¡t, chá»‘ng hÄƒm </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- LÃµi tháº¥m hÃºt vá»›i rÃ£nh kim cÆ°Æ¡ng giÃºp tháº¥m nhanh, dÃ n Ä‘á»u vÃ  khÃ³a cháº·t cháº¥t lá»ng bÃªn trong cho bá» máº·t tÃ£ khÃ´ rÃ¡o. </div> <div> 	- Máº·t Ä‘Ã¡y dáº¡ng váº£i giÃºp Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, cho tÃ£ luÃ´n thoÃ¡ng khÃ­ </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>  <div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng </div>',''),(93,1,'Bá»‰m - TÃ£ dÃ¡n Huggies size XL - 62 miáº¿ng','huggies16.jpg',540000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(94,2,'Bá»‰m - TÃ£ quáº§n Goon Renew Slim size L - 48 miáº¿ng','goon1.jpg',120000,'<div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng  </div> <div> 	- Bá» máº·t sÃ³ng 3D thoÃ¡ng khÃ­ </div> <div> 	- Tinh cháº¥t trÃ  xanh thÆ¡m mÃ¡t, chá»‘ng hÄƒm </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- LÃµi tháº¥m hÃºt vá»›i rÃ£nh kim cÆ°Æ¡ng giÃºp tháº¥m nhanh, dÃ n Ä‘á»u vÃ  khÃ³a cháº·t cháº¥t lá»ng bÃªn trong cho bá» máº·t tÃ£ khÃ´ rÃ¡o. </div> <div> 	- Máº·t Ä‘Ã¡y dáº¡ng váº£i giÃºp Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, cho tÃ£ luÃ´n thoÃ¡ng khÃ­ </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>  <div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng </div>',''),(95,2,'Bá»‰m - TÃ£ dÃ¡n Goon Renew Slim size XL - 30 miáº¿ng','goon5.jpg',91000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(96,2,'Bá»‰m - TÃ£ dÃ¡n Goon Renew Slim size M - 66 miáº¿ng','goon7.jpg',510000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(97,2,'Bá»‰m - TÃ£ quáº§n Goon Friend size XXL - 34 miáº¿ng...','goon6.jpg',82000,'<div> 	- Lá»›p tháº¥m nhanh siÃªu tá»‘c </div> <div> 	- Há»‡ thun Magic Fit </div> <div> 	- MÃ ng Ä‘Ã¡y thoÃ¡t áº©m Ä‘a chiá»u </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- Tinh cháº¥t trÃ  xanh </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, giÃºp da hÃ´ háº¥p tá»± nhiÃªn, ngÄƒn ngá»«a hÄƒm tÃ£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>',''),(98,2,'Bá»‰m - TÃ£ quáº§n Goon Friend size L - 48 miáº¿ng','goon15.jpg',93000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(99,3,'Bá»‰m - TÃ£ quáº§n Merries size XXL - 26 miáº¿ng...','meries4.jpg',230000,'<div> 	- Lá»›p tháº¥m nhanh siÃªu tá»‘c </div> <div> 	- Há»‡ thun Magic Fit </div> <div> 	- MÃ ng Ä‘Ã¡y thoÃ¡t áº©m Ä‘a chiá»u </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- Tinh cháº¥t trÃ  xanh </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, giÃºp da hÃ´ háº¥p tá»± nhiÃªn, ngÄƒn ngá»«a hÄƒm tÃ£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>',''),(100,3,'Bá»‰m - TÃ£ dÃ¡n Merries size XL - 44 miáº¿ng','merries1.jpg',430000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>',''),(101,3,'Bá»‰m - TÃ£ dÃ¡n Merries size NB - 90 miáº¿ng','merries3.jpg',90000,'<div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng  </div> <div> 	- Bá» máº·t sÃ³ng 3D thoÃ¡ng khÃ­ </div> <div> 	- Tinh cháº¥t trÃ  xanh thÆ¡m mÃ¡t, chá»‘ng hÄƒm </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- LÃµi tháº¥m hÃºt vá»›i rÃ£nh kim cÆ°Æ¡ng giÃºp tháº¥m nhanh, dÃ n Ä‘á»u vÃ  khÃ³a cháº·t cháº¥t lá»ng bÃªn trong cho bá» máº·t tÃ£ khÃ´ rÃ¡o. </div> <div> 	- Máº·t Ä‘Ã¡y dáº¡ng váº£i giÃºp Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, cho tÃ£ luÃ´n thoÃ¡ng khÃ­ </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>  <div> 	- Bá» máº·t kim cÆ°Æ¡ng tháº¥m hÃºt nhanh chÃ³ng </div>',''),(102,3,'Bá»‰m - TÃ£ dÃ¡n Merries size S - 82 miáº¿ng','merries5.jpg',140000,'<div> 	- Lá»›p tháº¥m nhanh siÃªu tá»‘c </div> <div> 	- Há»‡ thun Magic Fit </div> <div> 	- MÃ ng Ä‘Ã¡y thoÃ¡t áº©m Ä‘a chiá»u </div> <div> 	- Bá» máº·t 3D khÃ´ thoÃ¡ng </div> <div> 	- Tinh cháº¥t trÃ  xanh </div> <div> 	- TÃ­nh nÄƒng diá»‡t khuáº©n vÃ  khá»­ mÃ¹i nháº¹ nhÃ ng mang Ä‘áº¿n hÆ°Æ¡ng thÆ¡m mÃ¡t, ngá»«a hÄƒm tÃ£ hiá»‡u quáº£. </div> <div> 	- Nhanh chÃ³ng Ä‘áº©y hÆ¡i nÃ³ng áº©m ra ngoÃ i, giÃºp da hÃ´ háº¥p tá»± nhiÃªn, ngÄƒn ngá»«a hÄƒm tÃ£. </div> <div> 	- Nhanh chÃ³ng dÃ n Ä‘á»u vÃ  giá»¯ sÃ¢u cháº¥t lá»ng, tháº¥m hÃºt tháº­t nhiá»u mÃ  khÃ´ng lo dÃ y bÃ­, bÃ© luÃ´n khÃ´ thoÃ¡ng. </div>',''),(103,3,'Bá»‰m - TÃ£ dÃ¡n Merries size M - 64 miáº¿ng','merries7.jpg',520000,'<div> 	- Bá» máº·t Ä‘a rÃ£nh tháº¥m </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n </div> <div> 	- Thiáº¿t káº¿ Ä‘á»™c quyá»n C-shape </div> <div> 	- ÄÆ°á»ng cáº¯t chá»¯ V trong lÃµi bÃ´ng trÃ¡nh táº¡o náº¿p gáº¥p, giáº£m tá»‘i Ä‘a cá» xÃ¡t vá»›i da khi bÃ© cá»­ Ä‘á»™ng. </div> <div> 	- MÃ ng váº£i thun 3 vÃ²ng co giÃ£n. </div> <div> 	- Tháº¿ há»‡ lÃµi bÃ´ng má»›i vá»›i tá»‘c Ä‘á»™ tháº¥m hÃºt nhanh gáº¥p 2 láº§n, giÃºp bÃ© yÃªu luÃ´n khÃ´ thoÃ¡ng cáº£ ngÃ y dÃ i, khÃ´ng lo háº§m bÃ­ vÃ  hÄƒm Ä‘á». </div> <div> 	- Sá»£i Nano siÃªu nhá» vÃ  má»‹n. </div>','');

/*Table structure for table `binh_luan` */

DROP TABLE IF EXISTS `binh_luan`;

CREATE TABLE `binh_luan` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_bim` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `ma_kh` (`ma_kh`),
  KEY `ma_bim` (`ma_bim`),
  CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`),
  CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_bim`) REFERENCES `bim` (`ma_bim`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `binh_luan` */

insert  into `binh_luan`(`comment_id`,`comment_content`,`ma_bim`,`ma_kh`) values (1,'Sáº£n pháº©m tá»‘t',82,0),(2,'Sáº£n pháº©m tá»‘t',82,0),(3,'Giao hÃ ng nhanh',82,0),(4,'Tuyá»‡t vá»i !!!!!',77,6),(5,'Tuyá»‡t vá»i !!!!!',77,6),(6,'Sáº£n pháº©m tá»‘t giao hÃ ng nhanh',78,6),(7,'								',78,6),(8,'Giao hÃ ng giá»‘ng nhÆ° hÃ¬nh	',78,6),(9,'Giao hÃ ng nhanh giá»‘ng hÃ¬nh',76,0),(10,'Äáº¹p tuyá»‡t vá»i 5 sao			',76,0);

/*Table structure for table `ct_dondathang` */

DROP TABLE IF EXISTS `ct_dondathang`;

CREATE TABLE `ct_dondathang` (
  `ma_dh` int(11) NOT NULL,
  `ma_bim` int(11) NOT NULL,
  `gia_tien` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sl_dat` int(11) NOT NULL,
  KEY `ma_dh` (`ma_dh`),
  KEY `ma_bim` (`ma_bim`),
  CONSTRAINT `ct_dondathang_ibfk_1` FOREIGN KEY (`ma_dh`) REFERENCES `dondathang` (`ma_dh`),
  CONSTRAINT `ct_dondathang_ibfk_2` FOREIGN KEY (`ma_bim`) REFERENCES `bim` (`ma_bim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ct_dondathang` */

insert  into `ct_dondathang`(`ma_dh`,`ma_bim`,`gia_tien`,`sl_dat`) values (100000020,76,'120000',2),(100000020,77,'320000',3),(100000030,78,'220000',4),(100000033,78,'220000',4),(100000033,86,'92000',6),(100000034,78,'220000',4),(100000034,86,'92000',6),(100000035,78,'220000',4),(100000035,86,'92000',6),(100000036,77,'320000',3),(100000037,78,'220000',5);

/*Table structure for table `dondathang` */

DROP TABLE IF EXISTS `dondathang`;

CREATE TABLE `dondathang` (
  `ma_dh` int(10) NOT NULL AUTO_INCREMENT,
  `ma_kh` int(10) NOT NULL,
  `ngay_dat` date NOT NULL,
  `tong_tien` int(10) NOT NULL,
  `noi_giao` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` bit(1) NOT NULL,
  PRIMARY KEY (`ma_dh`),
  KEY `ma_kh` (`ma_kh`),
  CONSTRAINT `dondathang_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`)
) ENGINE=InnoDB AUTO_INCREMENT=100000038 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `dondathang` */

insert  into `dondathang`(`ma_dh`,`ma_kh`,`ngay_dat`,`tong_tien`,`noi_giao`,`trang_thai`) values (100000020,0,'2019-03-19',1200000,'Äáº¡i Äá»“ng Tháº¡ch Tháº¥t',''),(100000030,0,'2019-03-19',880000,'Bá»‡nh viá»‡n nhiá»‡t Ä‘á»›i 105',''),(100000033,3,'2019-03-20',1432000,'',''),(100000034,6,'2019-03-20',1432000,'224 Le Duc Tho Street, Bac Tu Liem District',''),(100000035,6,'2019-03-20',1432000,'224 Le Duc Tho Street, Bac Tu Liem District',''),(100000036,6,'2019-03-20',960000,'12 NhÃ¢n Má»¹, Má»¹ ÄÃ¬nh 2, HÃ  Ná»™i',''),(100000037,0,'2019-03-20',1100000,'12 NhÃ¢n Má»¹, Má»¹ ÄÃ¬nh 2, HÃ  Ná»™i','');

/*Table structure for table `gio_hang` */

DROP TABLE IF EXISTS `gio_hang`;

CREATE TABLE `gio_hang` (
  `gh_ma` int(11) NOT NULL,
  `gh_session` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_ma` int(11) NOT NULL,
  `sp_dongia` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`gh_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `gio_hang` */

/*Table structure for table `khachhang` */

DROP TABLE IF EXISTS `khachhang`;

CREATE TABLE `khachhang` (
  `ma_kh` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_va_ten` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` int(12) NOT NULL,
  `dia_chi` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` bit(1) NOT NULL DEFAULT b'1',
  `ngay_sinh` int(2) NOT NULL,
  `thang_sinh` int(2) NOT NULL,
  `nam_sinh` int(4) NOT NULL,
  PRIMARY KEY (`ma_kh`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `khachhang` */

insert  into `khachhang`(`ma_kh`,`ten_dang_nhap`,`ho_va_ten`,`mat_khau`,`email`,`so_dien_thoai`,`dia_chi`,`gioi_tinh`,`ngay_sinh`,`thang_sinh`,`nam_sinh`) values (0,'vubang153','VÅ© Báº±ng','123','vubang153@gmail.com',866931263,'12 NhÃ¢n Má»¹, Má»¹ ÄÃ¬nh 2, HÃ  Ná»™i','\0',1,1,1990),(3,'vubang152','VÅ© Báº±ng','123456','goproman@gmail.com',866931263,'12 NhÃ¢n Má»¹, Má»¹ ÄÃ¬nh 2, HÃ  Ná»™i','',8,3,1996),(4,'toidaybanoi','Tráº§n LÃ¢m','vubang153','tranlam1998@gmail.com',33981382,'12 NhÃ¢n Má»¹, Má»¹ ÄÃ¬nh 2, HÃ  Ná»™i','',1,1,1970),(5,'tranvanlam1998','Tráº§n VÄƒn LÃ¢m','123456','goproman@gmail.com',866931263,'12 NhÃ¢n Má»¹, Má»¹ ÄÃ¬nh 2, HÃ  Ná»™i','',7,10,2007),(6,'ngosihung2k','NgÃ´ SÄ© HÆ°ng','123456','hungngopro1@gmail.com',985114321,'12 NhÃ¢n Má»¹, Má»¹ ÄÃ¬nh 2, HÃ  Ná»™i','',31,10,1988),(7,'tranduyhung23@gmail.com','Tráº§n Duy HÆ°ng','123456','tranduyhung@gmail.com',33981382,'12 NhÃ¢n Má»¹, Má»¹ ÄÃ¬nh 2, HÃ  Ná»™i','\0',16,11,1982),(8,'helloitme2000','Tráº§n Duy HÆ°ng','123456','nguyenducthang2000@gmail.com',362985361,'12 NhÃ¢n Má»¹, Má»¹ ÄÃ¬nh 2, HÃ  Ná»™i','',1,1,1970);

/*Table structure for table `lien_he` */

DROP TABLE IF EXISTS `lien_he`;

CREATE TABLE `lien_he` (
  `ma_lh` int(11) NOT NULL,
  `ten_nguoi_lh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(12) NOT NULL,
  `gioi_tịnh` bit(1) NOT NULL DEFAULT b'1',
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_lh` date NOT NULL,
  PRIMARY KEY (`ma_lh`,`diachi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `lien_he` */

/*Table structure for table `loai_bim` */

DROP TABLE IF EXISTS `loai_bim`;

CREATE TABLE `loai_bim` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_loai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `loai_bim` */

insert  into `loai_bim`(`ma_loai`,`ten_loai`) values (1,'Huggies'),(2,'Goon'),(3,'Merries'),(4,'Bobby'),(5,'Pampers');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
