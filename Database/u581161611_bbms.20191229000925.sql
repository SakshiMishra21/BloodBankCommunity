-- MySQL dump 10.16  Distrib 10.2.27-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u581161611_bbms
-- ------------------------------------------------------
-- Server version	10.2.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminlogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminlogin`
--

/*!40000 ALTER TABLE `adminlogin` DISABLE KEYS */;
INSERT INTO `adminlogin` VALUES ('admin','admin');
/*!40000 ALTER TABLE `adminlogin` ENABLE KEYS */;

--
-- Table structure for table `bloodbank`
--

DROP TABLE IF EXISTS `bloodbank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bloodbank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobnum` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bloodbank`
--

/*!40000 ALTER TABLE `bloodbank` DISABLE KEYS */;
INSERT INTO `bloodbank` VALUES (7,'Meera Nursing Home Blood Bank','Bihar','Begusarai','Pokharia Rd, Chitragupta Nagar, Begusarai','8974568547'),(6,'Deshratan Rajendra Prasad Memorial Rotary Blood Bank','Bihar','Begusarai','Kali Asthan, P.O. Pokhanlya','7854214569'),(8,'Rastra Kavi Dinkar Blood Bank','Bihar','Begusarai','Sadar Hospital, Begusarai','6589425145'),(10,'Sadar Hospital Aurangabad Blood Bank','Bihar','Aurangabad','Old G.T.Road','8546987456'),(11,'Bambhaniya Voluntery Blood Bank','Gujarat','Bhavnagar','Bambhaniya Voluntery Blood Bank Trade Center, Kalanain Circle, Bhavnagar','8952255461, 6585554872'),(12,'Bhavnagar Blood Bank','Gujarat','Bhavnagar','Bhavnagar Blood Bank, Municipal Commercial Complex, Sardar Nagar Circle, Sardarnagar, Bhavnagar','8978451245, 8974857414'),(13,'Navkar Charitable Trust Mahuva Blood Bank','Gujarat','Bhavnagar','Blood Bank Navkar Charitable Trust Mahuva, Opposite to Nagrik Bank, Vasi, Bhavnagar','7745142147, 6658987414'),(14,'Indian Red Cross Society Bank','Gujarat','Bharuch','Indian Red Cross Society Bank, Sevashram Hospital Compound, Bharuch','9984575414, 6985412365'),(15,'Kumarpal Gandhi Blood Bank','Gujarat','Bharuch','\"B\" Block, 1st Floor, Near Palika Shopping Circle, Near Gujarat Circle, Bharuch','8745412442, 6658974787'),(16,'Central Medical Hospital(CMS) Blood Bank','Haryana','Hisar','Near Dabra Chowk Over Bridge, Hisar','7894568574, 6985895412'),(17,'Dr. Anant Ram Janta Hospital Bank','Haryana','Hisar','Hospital Road, Hisar, Barwala','88869874514, 9874587956'),(18,'General Hospital Bank Hisar','Haryana','Hisar','Civil Hospital Bank, Near Bus Stand','6658977412, 6665897456'),(19,'Haryana Blood Bank','Haryana','Hisar','16, Model Town, Near Jjindal Hospital, Hisar','6647894545,9987589865'),(20,'General Hospital Bank Karnal','Haryana','Karnal','Old Court Road, Karnal','7887898528,6525698743'),(21,'Nirmal Institute of Medical Sciences and Technologies Blood Bank','Haryana','Karnal','69, Jarnally Colony, Opposite Kalpana Chawla Medical College, Karnal','9865256489, 6598352145'),(22,'Pandit Ram Prakash Hospital','Haryana','Karnal','Civil Hospital Road','8947562536, 6525354198'),(23,'Save Life Blood Bank','Haryana','Karnal','16, Jarnally Colony, 1st Floor, Opposite to General Hospital, Karnal','8978785825, 9845632145'),(24,'B.V.V.Sanghas HSK Hospital Blood Bank','Karnataka','Bagalkot','Navanagar, Bagalkot','8978789541, 6987584698'),(25,'Bagalkot Bood Bank ','Karnataka','Bagalkot','Hanagal Shree Kumareshwar Hospital and Research Centre, Bagalkot','7784587412, 9936214563'),(26,'District Hospital Blood Bank','Karnataka','Bagalkot','Navanagar, Bagalkot','8974563256, 8974587425'),(27,'M/s. Sai Aadhar Hospital Blood Bank','Karnataka','Bagalkot',' Sai Aadhar Hospital, Yadwad Road, Bagalkot','8974562541,6365987452'),(28,'Jeeva Raksha Blood Bank','Karnataka','Hassan','Vokkaligara Hotel Building, 1st Floor, B.M Road, Hassan','8545124125, 9969856589'),(29,'Manjunath Orthopaedic and Trauma Centre Hospital Blood Bank','Karnataka','Hassan','K.R.Puram, Hassan','6969854598, 6598565648'),(30,'Sri. Chamarajendra District Hospital Blood Bank','Karnataka','Hassan','Hospital Road, Hassan','8596968574, 6585978415'),(31,'AMA (Allahabad Medical Association) Blood Bank ','UttarPradesh','Allahabad','Stanley Road, Allahabad','8754254136,6598756985'),(32,'Military Hospital Blood Bank','UttarPradesh','Allahabad','Mahoba, Allahabad',''),(33,'Moti Lal Nehru District Hospital Blood Bank','UttarPradesh','Allahabad','12 Dr.Katjoo Road, Allahabad Near Railway Station',''),(34,'S.M. Medicare Private Limited Blood Bank','UttarPradesh','Allahabad','146, Karnal Ganj, Allahabad',''),(35,'S.R.N. Hospital, M.L.N. Medical College','UttarPradesh','Allahabad','Hanuman Mandir, Swarooprani Hospital, North Malaka, Allahabad',''),(36,'Clara Swain Mission Hospital Bank','UttarPradesh','Bareilly','Civil Lines, Bareilly',''),(37,'District Hospital Blood Bank ','UttarPradesh ','Bareilly','Civil Lines, Bareilly',''),(38,'Ganga Sheel Charitable Trust Bood Bank','UttarPradesh ','Bareilly','A-3, Rampur Garden, Bareilly',''),(39,'IMA Blood Bank','UttarPradesh','Bareilly','Run By Indian Medical Association, Civil Lines, Bareilly',''),(40,'Gaurav Diagnostic Centre and Blood Bank','UttarPradesh','Jhansi','Gate No.1 MLB Medical College, Jhansi',''),(41,'Life Line Blood Bank, Military Hospital','UttarPradesh','Jhansi','Military Hospital, Jhansi',''),(42,'Nirmal Hospital Blood Bank','UttarPradesh ','Jhansi','Opposital Medical College Gate No-3',''),(43,'Parakh Voluntary Blood Bank','UttarPradesh','Jhansi','Run by Vikash Jan Kalyan Samiti, Opposite Gate No-2, Jhansi',''),(44,'Sant Diagnostic Centre and Blood Bank','UttarPradesh','Jhansi','25/1A Sant Bhavan, Kanpur Road Jhansi',''),(45,'B.N.K. Hospital Blood Bank','UttarPradesh','Lucknow','B-1/196 Nirala Nagar, Lucknow',''),(46,'Balram Hospital Blood Bank','UttarPradesh','Lucknow','Balram Hospital, Chakbast Road, Lucknow',''),(47,'Charak Hospital and Research Centre Blood Bank','UttarPradesh','Lucknow','Dubagga Hardoi Road, Lucknow',''),(48,'Divine Heart Hospital and Research Centre Blood Bank','UttarPradesh','Lucknow','Viraj Khand, Institutional Area-5, Gomti Nagar, Lucknow',''),(49,'Dr. Shankuntala Misra Blood Bank','UttarPradesh','Lucknow','Plot No-463/1, Village Anaura, Lucknow',''),(50,'Air Force Hospital','UttarPradesh','Kanpur','Nathu Singh Road, Kanpur',''),(51,'CLM Hospital and Blood Bank','UttarPradesh','Kanpur','121/625 Industrial Estate, Shastri Nagar, Kanpur',''),(52,'GSVM Medical College Blood Bank','UttarPradesh','Kanpur','Swaroop Nagar, Kanpur',''),(53,'LPS Institute of Cardiology','UttarPradesh','Kanpur','Mall Road, Sarvodaya Nagar, Kanpur',''),(54,'Mariyampur Hospital and Blood Bank','UttarPradesh','Kanpur','Shastri Nagar','');
/*!40000 ALTER TABLE `bloodbank` ENABLE KEYS */;

--
-- Table structure for table `bloodgp`
--

DROP TABLE IF EXISTS `bloodgp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bloodgp` (
  `bg_id` int(11) NOT NULL AUTO_INCREMENT,
  `bg_name` varchar(100) NOT NULL,
  PRIMARY KEY (`bg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bloodgp`
--

/*!40000 ALTER TABLE `bloodgp` DISABLE KEYS */;
INSERT INTO `bloodgp` VALUES (9,'A+'),(3,'B-'),(4,'B+'),(5,'O-'),(7,'A-'),(11,'AB+'),(12,'AB-'),(13,'O+');
/*!40000 ALTER TABLE `bloodgp` ENABLE KEYS */;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (7,'Aurangabad',824101,'Aurangabad','Bihar'),(8,'Begusarai',851101,'Begusarai','Bihar'),(9,'Bhavnagar',364001,'Bhavnagar','Gujarat'),(10,'Bharuch',392001,'Bharuch','Gujarat'),(11,'Hisar',125001,'Hisar','Haryana'),(12,'Karnal',132001,'Karnal','Haryana'),(13,'Bagalkot',587102,'Bagalkot','Karnataka'),(14,'Hassan',573201,'Hassan','Karnataka'),(15,'Allahabad',211002,'Allahabad','UttarPradesh'),(16,'Bareilly',243001,'Bareilly','UttarPradesh'),(17,'Jhansi',284002,'Jhansi','UttarPradesh'),(18,'Lucknow',226020,'Lucknow','UttarPradesh'),(19,'Kanpur ',208004,'Kanpur Nagar','UttarPradesh');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobnum` varchar(50) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (44,5,'Sakshi','sakshis12@gmail.com','7896541258','Blood Donation','Urgent Need..'),(43,0,'Satyam Katiyar','rajputdivakar668@gmail.com','9140322523','contact','Conatct me soon'),(35,0,'Divakar Rajput','rajputdivakar668@gmail.com','7860455533','contact','whats the final price for the softy ice cream machine?'),(49,0,'Eric Jones','eric@talkwithcustomer.com','','Do You Want Up to 100X More Conversions?','TalkWithCustomer makes it easy, simple, and fast – in fact, you can start getting more calls today… and at absolutely no charge to you.'),(48,0,'George Martin','george1@georgemartinjr.com','','Guest Post on Website','to building a brand online? If you are interested in submitting a post and obtaining a link to bloodbankcommunity.online , let me know and we will get it published in a speedy manner to our blog.'),(47,0,'Eric','eric@talkwithcustomer.com','','It’s all about Perfect Timing','They ask to hear from you regarding what you have to offer and how it can make their life better. '),(46,0,'Eric','eric@talkwithcustomer.com','','It’s all about Perfect Timing','CLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive and see what a difference “Perfect Timing” can make to your business.'),(45,0,'Eric','eric@talkwithcustomer.com','','It’s all about Perfect Timing',''),(42,5,'Kuldeep Maurya','alokiartisan@gmail.com','9956739337','contact','Conatct me soon'),(41,5,'Bikash Kumar Panda','bikash25panda@gmail.com','7860455533','contact','whats the final price for the softy ice cream machine?');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

--
-- Table structure for table `donarreg`
--

DROP TABLE IF EXISTS `donarreg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donarreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(20) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobnum` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bloodgp` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donarreg`
--

/*!40000 ALTER TABLE `donarreg` DISABLE KEYS */;
INSERT INTO `donarreg` VALUES (10,'Ashwani Upadhyay','male','31','68','uttarpradesh','kanpur','8569745214','ashwaniu981@gmail.com','A-','ashwani12','1995-04-08','images/img11.jpg','Blood Need..'),(11,'Priyanka Dixit','female','32','58','uttarpradesh','kanpur','6589745898','dixitpriyanka56@gmail.com','A-','dixit12','1990-05-10','images/img12.jpg','Blood Need..'),(9,'Priya Verma','female','27','54','uttarpradesh','kanpur','9887452515','savitaverma43@gmail.com','A-','savita8','1987-08-21','images/img12.jpg','Need For Blood..'),(8,'Ravi Srivastava','male','26','68','uttarpradesh','kanpur','7895845875','ravis123@gmail.com','A-','ravi8','1988-09-20','images/img11.jpg','Blood Donation'),(12,'Lokesh Mishra','male','29','66','uttarpradesh','kanpur','8974532145','lokeshm3456@gmail.com','A+','lokesh89','1992-01-07','images/img11.jpg','Blood need..'),(13,'Priyank','male','36','69','uttarpradesh','kanpur','6598745214','priyank76@gmail.com','A+','priyank2','1989-09-28','images/img11.jpg','Blood Need'),(14,'Parth Mehra','male','32','66','uttarpradesh','kanpur','8974512456','parth6589@gmail.com','A+','parth56','1991-11-27','images/img11.jpg','Blood Need..'),(15,'Kriti Gupta','female','26','55','uttarpradesh','lucknow','8974512546','gupta78@gmail.com','A+','gupta56','1993-06-18','images/img12.jpg','Blood Need..'),(16,'Priyamvada','female','26','54','uttarpradesh','kanpur','9875230145','priyam892@gmail.com','B+','priyam56','1993-12-18','images/img12.jpg','Blood Need..'),(17,'Savita Shukla','female','35','65','uttarpradesh','kanpur','8745210014','savitas1877@gmail.com','B+','savita12','1982-08-28','images/img12.jpg','Blood Need..'),(18,'Harsh Sharma','male','32','65','uttarpradesh','kanpur','8745236501','harshsharma568@gmail.com','B+','harsh56','1986-11-27','images/img11.jpg','Blood Need..'),(19,'Mayank ','male','25','65','uttarpradesh','lucknow','9863524510','maynk89@gmail.com','B+','maynk65','1995-02-23','images/img11.jpg','Blood Need..'),(20,'Sakshi ','female','25','54','uttarpradesh','kanpur','8974512045','sakshi98@gmail.com','B-','sakshi56','1995-11-09','images/img12.jpg','Blood Need..'),(21,'Supriya Pathak','female','36','66','uttarpradesh','kanpur','8745263014','supriya1256@gmail.com','B-','supriya56','1981-11-23','images/img12.jpg','Blood Need..'),(22,'Nishant Rajput','male','31','66','uttarpradesh','kanpur','7568664425','nishantk2@gmail.com','B-','nishant56','1987-11-24','images/img11.jpg','Blood Need..'),(23,'Rajveer','male','45','69','uttarpradesh','kanpur','8974563203','raj98@gmail.com','B-','raj87','1977-11-29','images/img11.jpg','Blood Need..'),(24,'Ipsita Kapoor','female','25','60','uttarpradesh','kanpur','9875425415','kapoorp23@gmail.com','AB+','kapoor2','1995-12-30','images/img12.jpg','Blood Need..'),(25,'Jiya ','female','26','54','uttarpradesh','lucknow','7856985602','jiya888@gmail.com','AB+','jiya66','1994-07-29','images/img12.jpg','Blood Need..'),(26,'Amit Sharma','male','25','55','uttarpradesh','kanpur','9865896352','ami98@gmail.com','AB+','ami99','1995-11-26','images/img11.jpg','Blood Need..'),(27,'Gaurav Dixit','male','26','59','uttarpradesh','kanpur','6987542015','gaurav66@gmail.com','AB+','gaurav78','1993-11-29','images/img11.jpg','Blood Need..'),(28,'Manpreet','female','32','65','uttarpradesh','kanpur','7856254102','manpreet7@gmail.com','AB-','manpreet5','1986-06-29','images/img12.jpg','Blood Need..'),(29,'Kajal ','female','26','55','uttarpradesh','kanpur','8975635241','kajal08@gmail.com','AB-','kajal@123','1994-08-14','images/img12.jpg','Blood Need..'),(30,'Debina Banerjee','female','32','62','uttarpradesh','kanpur','6985624154','debina99@gmail.com','AB-','debina88@','1986-11-15','images/img12.jpg','Blood Need..'),(31,'Kavita','female','26','56','uttarpradesh','kanpur','7865203210','kavita55@gmail.com','AB-','kavita','1994-10-22','images/img12.jpg','Blood Need..'),(32,'Natasha Mishra','female','28','61','uttarpradesh','lucknow','8974562545','nats58@gmail.com','O+','nats88@','1991-09-30','images/img12.jpg','Blood Need..'),(33,'Reena Sharma','female','25','60','uttarpradesh','kanpur','8974562514','reena8@gmail.com','O+','reena8@','1995-11-18','images/img12.jpg','Blood Need..'),(34,'Kashis Pathak','male','29','62','uttarpradesh','kanpur','6897856451','kashis56@gmail.com','O+','kashis7','1990-10-18','images/img11.jpg','Blood Need..'),(35,'Mehul ','male','27','62','uttarpradesh','kanpur','7894569852','mehul12@gmail.com','O+','mehul5','1991-11-28','images/img11.jpg','Blood Need..'),(36,'Ankit Mehra','male','28','63','uttarpradesh','kanpur','8974563201','anki78@gmail.com','O-','anki9','1992-09-20','images/img11.jpg','Blood Need..'),(37,'Acchal Srivastava','female','36','62','uttarpradesh','kanpur','8974569852','acchal90@gmail.com','O-','acchal99@','1984-09-28','images/img12.jpg','Blood Need..'),(38,'Akshay Verma','male','31','65','uttarpradesh','kanpur','8745360510','akshay89@gmail.com','O-','akshay6','1987-11-14','images/img11.jpg','Blood Need..'),(39,'Avinash','male','27','61','uttarpradesh','kanpur','8745635210','avi789@gmail.com','O-','avi89','1993-08-11','images/img11.jpg','Blood Need..');
/*!40000 ALTER TABLE `donarreg` ENABLE KEYS */;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(900) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (55,'Trial flights begin for start-up that aims to deliver medical supplies in remote areas by next year.\r\nA startup by three young men is hoping to revolutionise the way blood reaches the needy across the country. They have started demonstration flights of self-made drones before their project gets airborne by the end of next year to send blood and emergency medical supplies to villages where people have no immediate access to the facilities.','img/img10.jpg'),(44,'World blood donor day: PGIMER urges people to donate platelets On the World Blood Donor Day, the blood transfusion department of the Post Graduate Institute of Medical Education and Research (PGIMER) urges you to become a platelet donor.Platelets are blood cells that form clots and stop bleeding. These tiny cells of blood are most crucial to save the lives of those fighting cancer, chronic diseases and traumatic injuries.','img/img5.jpg'),(51,'Jharkhand Government has intended to promote voluntary blood donation among its employees and decided to sanction four special casual leaves in a year to its employees for donating blood voluntarily on working days, an official release said here on Monday.\r\nThe announcement came on the National Voluntary Blood Donation day.\r\n\r\nJharkhand required 3,50,000 units of blood per annum whereas it collects only 1,90,000 units of blood, the release said.','img/img8.jpg'),(50,'The high casualties caused by the six serial blasts that rocked Colombo and Batticaloa on Easter Sunday have caused an overflow of patients requiring treatment across hospitals in the two blast-hit cities.\r\nIn wake of the shocking attacks across hotels and churches in Sri Lanka that have left at least 160 dead and over 300 injured, several Sri Lankans have taken to social media to request people to donate blood. \r\n','img/img7.jpg'),(54,'As it had announced back at its F8 developers conference last month, Facebook has launched its Blood Donations hub for India, Pakistan. and Bangladesh. The move coincided with World Blood Donor day. The Blood Donations hub shows people in the three countries opportunities to donate in their city, including nearby blood donation events, requests for blood donors and blood banks.\r\n\r\nThose who visit the Blood Donations hub on Facebook can also sign up to be a blood donor and get notified directly when there is a need for blood nearby.','img/img9.jpg');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testimonial` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'Good Website '),(2,'Nice Search Option');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `bloodgp` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `mobnum` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `priority` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

/*!40000 ALTER TABLE `request` DISABLE KEYS */;
INSERT INTO `request` VALUES (3,'Lokesh Mishra','Ravi Kumar ','A+','Bihar','Aurangabad','Dev Hospital, 4/79 Opposite Axis College, Aurangabad','Ravi Srivastava','7896589654','2019-06-27','Normal','ravis23@gmail.com','Need For Blood..'),(4,'Isha Singh','Jaidev Prakash','A-','UttarPradesh','Kanpur ','Mariyampur Hospital, Kanpur','Priya Saxena','6984652310','2019-07-21','Normal','priya789@gmail.com','Urgent Need..');
/*!40000 ALTER TABLE `request` ENABLE KEYS */;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` VALUES (1,'Bihar'),(3,'Gujarat'),(4,'Haryana'),(5,'Karnataka'),(6,'UttarPradesh');
/*!40000 ALTER TABLE `state` ENABLE KEYS */;

--
-- Dumping routines for database 'u581161611_bbms'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-29  0:17:51
