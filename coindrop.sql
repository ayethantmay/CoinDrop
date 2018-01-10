/*
SQLyog Community v9.63 
MySQL - 5.6.14 : Database - coindrop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`coindrop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `coindrop`;

/*Table structure for table `level1` */

DROP TABLE IF EXISTS `level1`;

CREATE TABLE `level1` (
  `qid` int(11) DEFAULT NULL,
  `ques` varchar(200) DEFAULT NULL,
  `categorie` varchar(30) DEFAULT NULL,
  `tans` varchar(50) DEFAULT NULL,
  `fans1` varchar(50) DEFAULT NULL,
  `fans2` varchar(50) DEFAULT NULL,
  `fans3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `level1` */

insert  into `level1`(`qid`,`ques`,`categorie`,`tans`,`fans1`,`fans2`,`fans3`) values (1,'Who is Bogyoke Aung San Mother?','Famous People','Daw Su','Daw Nu','Daw Moe','Daw May'),(2,'Which day is Bogyoke Aung San Birthday?','Famous People','February 13','February 11','February 12','February 14'),(3,'What is Aung La N Sang Nationality?','Famous People','Kachin','Shan','Mon','Chin'),(4,'What currency to use in Korea?','Money','Won','USD','Yen','Rupee'),(6,'What color is Sapphire?','Jewellery','Blue','Red','Green','Yellow'),(7,'What color is Ruby?','Jewellery','Red','Blue','Green','Yellow'),(8,'How many countries are there in ASEAN?','General Knowledge','10','11','9','15'),(9,'Which country held the first modern Olympic Games?','General Knowledge','Greece','America','Italy','London');

/*Table structure for table `level234` */

DROP TABLE IF EXISTS `level234`;

CREATE TABLE `level234` (
  `qid` int(11) DEFAULT NULL,
  `ques` varchar(200) DEFAULT NULL,
  `categorie` varchar(50) DEFAULT NULL,
  `tans` varchar(30) DEFAULT NULL,
  `fans1` varchar(30) DEFAULT NULL,
  `fans2` varchar(30) DEFAULT NULL,
  `fans3` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `level234` */

insert  into `level234`(`qid`,`ques`,`categorie`,`tans`,`fans1`,`fans2`,`fans3`) values (1,'Halawa is what the town of food?','Food','Pathein','Mandalay','Bagan','Taung kyi'),(2,'Who wrote Burma Challenge Book?','Book','BogyokeAungSan','U Thant','Tha Khin Mya','U Hla'),(3,'When was Titanic film produced?','Movie','1997','1996','1998','1999'),(4,'Who is Titanic film Director?','Movie','Cameron','Pierre ','MichaelBay','Spielberg'),(5,'Who wrote Harry Potter Story?','Book','J.K Rowling','Nicholas','Marla Frazee','Philip D'),(6,'In which year the Eiffel Tower was built? ','Building','1889','1885','1900','1988'),(7,'How long was the civil war?','War','4 years','6 Years','2 years','3 years'),(8,'World War I commenced in?','War','1914','1934','1944','1924'),(9,'Which country created pizza?','Food','Italy','Paris','Malaysia','India'),(10,'What is the name of King who governed only 7days in Myanmar?','History','PhaungKarSarMgMg','SawLuMin','NayaThu','BaganMinn'),(11,'What is the tallest waterfall in the world?','General Knowledge','Angel','Victoria','Niagara','Legend'),(12,'How many legs dragonfly have?','General Knowledge','six','four','Two','eight'),(13,'What is the town of Inle Lake','City','NyaungShwe','Inle','Taunggyi','ShweNyaung'),(14,'Which country has the biggest bell in the World?','General Knowledge','Russia','Spain','Myanmar','India'),(15,'What is the deepest Ocean in the world?','Ocean','Pacific','Atlantic','Arctic','Southern'),(16,'How many layers in the Earth?','Earth','4','5','3','6'),(17,'How many colours in google logo?','Color','4','5','6','3'),(18,'Which colours include in google logo?','Color','Orange','Red','Green','Blue'),(19,'Boxer is what kind of animal?','Animal','Dog','Horse','Buck','Bird'),(20,'How many teeth are in adult cats?','Animal','30','40','35','45');

/*Table structure for table `level567` */

DROP TABLE IF EXISTS `level567`;

CREATE TABLE `level567` (
  `qid` int(11) DEFAULT NULL,
  `ques` varchar(200) DEFAULT NULL,
  `categorie` varchar(30) DEFAULT NULL,
  `tans` varchar(30) DEFAULT NULL,
  `fans1` varchar(30) DEFAULT NULL,
  `fans2` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `level567` */

insert  into `level567`(`qid`,`ques`,`categorie`,`tans`,`fans1`,`fans2`) values (1,'Who drew Mona Lisa Picture?','Famous People','Leonardo Da Vinci','Michael Angelo','Pecaso'),(2,'What is U Thant?s Native Town?','Famous People','Pan Ta Naw','Myaung Mya','Yangon'),(3,'Who is Mahaw Tha Dar\'s Queen?','Story','Amara','Yathaw Da Yar','Madi Dawi'),(4,'Who invented the printer?','Technology','Gutenberg','Newton','Edison'),(5,'Who created Copy and Paste','Technology','Larry Tesler','Bill Gate','Bill Cosby'),(6,'When was ASEAN established?','General Knowledge','8 August 1967','8 August 1976','8 August 1955'),(7,'How many grams in one pound?','Maths','453','425','433'),(8,'How many kilometer in one mile?','Maths','1.6','1.8','1.7'),(9,'Where did Alfred Nobel who invented dynamite live?','Invention','Sweden','Spain','Germany'),(10,'When was celebrate the first Oscar ceremony?','Ceremony','May 16 1929','April 31 1929','May 16 1950'),(11,'What is the movie title that Mr.Bean act as an actor?','Movie','RownAtkison','Ian Mcshane','Jame Franco'),(12,'How many rivers flow from south to north in Burma?','River','6','8','4'),(13,'How many towns in Shan State?','State','55','60','20'),(14,'How far is Earth from the Sun?','Space','93 million','70 million','85 million'),(15,'Where is Narita International Airpot','City','Japan','North Korea','China'),(16,'How many species of monkey are there?','Species','260','240','270');

/*Table structure for table `level8` */

DROP TABLE IF EXISTS `level8`;

CREATE TABLE `level8` (
  `qid` int(11) DEFAULT NULL,
  `ques` varchar(200) DEFAULT NULL,
  `categorie` varchar(30) DEFAULT NULL,
  `tans` varchar(30) DEFAULT NULL,
  `fans` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `level8` */

insert  into `level8`(`qid`,`ques`,`categorie`,`tans`,`fans`) values (1,'Who invented the first computer?','Technology','Charles Babbage','Alan Turing'),(2,'How long does it take for moonlight to reach the earth?','Space','1.3 sec','1.4 sec'),(3,'Which day is world AIDS day?','General Knowledge','December 1','October 24'),(4,'The first child of Prince William is Girl or Boy?','Famous People','Boy','Girl'),(0,'','',NULL,NULL);

/*Table structure for table `login_signup` */

DROP TABLE IF EXISTS `login_signup`;

CREATE TABLE `login_signup` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `totalcoin` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login_signup` */

insert  into `login_signup`(`user_id`,`user_name`,`email`,`password`,`totalcoin`) values (1,'Aye Thant May','ayethantmayy@gmail.com','1234',90),(2,'May Mon','mymaymon@gmail.com','abcd',0),(3,'Khin Khin Phyo','kkp@gmail.com','ohmygod',0),(4,'Myat Thu Hein','myat@gmail.com','abcd1234',0),(5,'Aung Moe Hein','amh@gmail.com','bbb',70);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
