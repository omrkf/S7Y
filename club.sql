-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 01:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_USERNAME` varchar(30) DEFAULT NULL,
  `ACCOUNT_FULLNAME` varchar(255) NOT NULL,
  `GENDER` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `PASSWORD` int(11) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `ACCOUNT_TWITTER` varchar(100) NOT NULL,
  `ACCOUNT_INSTGRAM` varchar(100) NOT NULL,
  `ACCOUNT_SNAPCHAT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ACCOUNT_ID`, `ACCOUNT_USERNAME`, `ACCOUNT_FULLNAME`, `GENDER`, `EMAIL`, `PASSWORD`, `Date_of_birth`, `ACCOUNT_TWITTER`, `ACCOUNT_INSTGRAM`, `ACCOUNT_SNAPCHAT`) VALUES
(1, 'o', 'seemo', 'male', 'osamah@gmail.com', 1, '1997-08-15', '', '', ''),
(2, 'Omar', '', 'male', 'omar@gmail.com', 1111, '1997-02-11', '', '', ''),
(3, 'lily', '', 'female', 'lily@gmail.com', 1111, '1995-08-20', '', '', ''),
(4, 'Maher', '', 'male', 'maher@gmail.com', 1111, '1987-05-14', '', '', ''),
(5, 'Anas', '', 'male', 'anas@gmail.com', 1111, '2000-01-12', '', '', ''),
(6, 'ali', '', 'male', 'ali@gmail.com', 1111, '2001-04-25', '', '', ''),
(7, 'Fadi', '', 'male', 'fadi@gmail.com', 1111, '1979-07-20', '', '', ''),
(8, 'Mona', '', 'female', 'mona@gmail.com', 1111, '1996-03-13', '', '', ''),
(9, 'Rana', '', 'female', 'rana@gmail.com', 1111, '1993-06-10', '', '', ''),
(10, 'Sami', '', 'male', 'sami@gmail.com', 1111, '1999-09-02', '', '', ''),
(11, 'Abid', 'kuma', 'male', 'abid@gmail.com', 1111, '1992-07-01', '', '', ''),
(12, 'Huda', '', 'female', 'huda@gmail.com', 1111, '2002-07-01', '', '', ''),
(13, 'Amer', '', 'male', 'amer@gmail.com', 1111, '1991-11-19', '', '', ''),
(14, 'Lara', '', 'female', 'lara@gmail.com', 1111, '2000-10-13', '', '', ''),
(15, 'Taha', '', 'male', 'taha@gmail.com', 1111, '1994-03-03', '', '', ''),
(16, 'rami', '', 'male', 'rami@gmail.com', 1111, '1993-10-08', '', '', ''),
(17, 'Ahmad', '', 'male', 'ahmad@gmail.com', 1111, '1973-09-02', '', '', ''),
(18, 'Fahad', '', 'male', 'fahad@gmail.com', 1111, '2005-08-17', '', '', ''),
(19, 'Lea', '', 'female', 'lea@gmail.com', 1111, '1990-02-06', '', '', ''),
(20, 'Meshal', '', 'male', 'meshal@gmail.com', 1111, '1996-04-16', '@mesho', '', ''),
(21, 'Wjeeh', '', 'male', 'wjeeh@gmail.com', 1111, '1999-02-14', '', '@wjeeh', ''),
(22, 'mai', '', 'female', 'mai@gmail.com', 1111, '1989-05-06', '', '', '@mai'),
(23, 'Talal', '', 'male', 'talal@gmail.com', 1111, '1984-03-19', '@talal', '', ''),
(24, 'Edy', '', 'male', 'edy@gmail.com', 1111, '1998-12-01', '', '', ''),
(25, 'smart fitness', 'اللياقة الذكية ', NULL, 'smart_fitness@gmail.com', 1111, NULL, '@smart_fitness', '@smart_fitness', '@smart_fitness'),
(26, 'fitness time', 'وقت اللياقة', NULL, 'fitness_time@gmail.com', 1111, NULL, '@fitness_time', '@fitness_time', '@fitness_time'),
(27, 'fitness palace', 'قلعة اللياقة', NULL, 'fitness_palace@gmail.com', 1111, NULL, '@fitness palace', '@fitness palace', '@fitness palace'),
(28, 'body master', 'بودي ماستر', NULL, 'body_master@gmail.com', 1111, NULL, '@body master', '@body master', '@body master'),
(29, 'star strack', 'ستار تراك ', NULL, 'star_strack@gmail.com', 1111, NULL, '@star strack', '@star strack', '@star strack'),
(30, 'saeed', 'saeed', 'male', 'saeed@gmail.com', 1111, '2020-01-30', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CATEGORY_NAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CATEGORY_ID`, `CATEGORY_NAME`) VALUES
(1, 'Stander'),
(2, 'Lady'),
(3, 'Pro');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `CLUB_ID` int(11) NOT NULL,
  `CLUB_NAME` varchar(30) NOT NULL,
  `RATE` int(11) DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL,
  `WORK_TIME` varchar(30) DEFAULT NULL,
  `PICTURE` varchar(255) DEFAULT NULL,
  `LOCATION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`CLUB_ID`, `CLUB_NAME`, `RATE`, `DESCRIPTION`, `WORK_TIME`, `PICTURE`, `LOCATION`) VALUES
(25, 'اللياقة الذكية ', 5, '    شعارنا:\"اللياقة الذكية إختياري لصحة أفضل\" ، و رؤيتنا هي اللياقة الذكية اختياري لصحة أفضل ومن خلالها تسعى اللياقة الذكية لتقديم أفضل الخدمات في مجال الرياضة واللياقة البدنية من خلال سلسلة فروع تغطي مدينة جدة (وقريبا باقي مناطق المملكة) فنحن نؤمن بأنه من خلال مراكز اللياقة الذكية يمكن تحقيق صحة أفضل في مراكزنا التي تم تجهيزها بأحدث أجهزة في عالم الرياضة اخترناها لكم من أفضل شركات الأجهزة في مجال الرياضة والصحة.\r\nورسالتنا تهدف بتشجيع الفرد والمجتمع بممارسة الرياضة بشكل عصري تحت إشراف كفاءة عالية من المدربين المحترفين المختصين  .', '13-3', './clubs/smart fitness/smart fitness.jpg', ' Shawquyah'),
(26, 'وقت اللياقة', 4, 'بالإضافة إلى معدات اللياقة البدنية، ووسائل الراحة، والمُدرِّبين الذين تم اختيارهم بعناية؛ صُمِّمت مراكز\r\n              وقت اللياقة وتم تشغيلها بهدف توفير بيئة مريحة\r\n             وآمنة للمشتركين لممارسة التمرينات الرياضية. ولذا، صُمِّمت\r\n              مراكز وقت اللياقة بطريقة مثالية تضم مساحات مفتوحةً، ومريحةً ...\r\n              ، ومُتَّسِعةً بما يكفي لكي يجد الجميع مكان\r\n                ملائم عند زيارتها.\r\n\r\n                تتميز مراكز وقت اللياقة بمواعيد مريحة وفعّالة بحيث تناسب جميع المشتركين إذ تفتح العديد من مراكزنا\r\n                الرياضية أبوابها في الساعة 6:00 صباحاً، وتغلق في الساعة 12:00 صباحاً، على مدار سبعة أيام في\r\n                الأسبوع.', '5-5', './clubs/fitness time/fitnesstime.jpg', ' Nawariyah'),
(27, 'قلعة اللياقة', 4, 'تتميز مراكز قصر اللياقة ببرامج متعددة ومتنوعة تتناسب مع جميع متطلبات الأفراد، سواء كانت برامج تحسين مستويات اللياقة البدنية من خلال ممارسة النشاط الرياضي المستمر للوصول لمستويات من الصحة العامة، والتي تهيء للفرد حياة سليمة وخالية من الأمراض التي تسمى في هذا الزمان بأمراض العصر، مثل السكر والضغط وأمراض الكوليسترول والسمنة .. إلخ.\r\n\r\nويساهم في تحقيق هذا الهدف وجود مسابح ذات مواصفات فنية وصحية عالية.\r\n\r\nشرف على الحصص مدربين متميزين ومتخصصين وذوي خبرة في التعامل مع المشتركين لمختلف الفئات العمرية. \r\nأوقات العمل:فرع مكة السبت - الخميس (10 صباحا - 12 منتصف الليل) / الجمعة (4 مساء - 12 منتصف الليل)\r\n    فرع جده السبت - الخميس (6 صباحا - 12 منتصف الليل) / الجمعة (4 مساء - 12 منتصف الليل)', '12-0', './clubs/fitness palace/palace fitness.jpg', ' Al-Rosifah'),
(28, 'بودي ماستر', 3, 'بودي ماسترز هى أول شبكة سعودية متخصصة فى إدارة وتشغيل الأندية الرياضية فى المملكة العربية السعودية منذ عام (1992م) . توفر أندية بودي ماسترز مجموعه واسعة من الخدمات الرياضية واللياقه البدنية والصحية ،تشتمل شبكة أندية بودي ماسترز على (41) ناديا رياضيا بإجمالى مساحة تفوق (150,000) متر مربع\r\nليوم بودي ماسترز هى واحدة من أكثر الأسماء انتشارا وشهرة فى مجال الأندية الرياضية واللياقة البدنية فى المملكة . (500.000) عضو اختاروا بودي ماسترز لتنمية لياقتهم البدنية وتطوير صحتهم وتنمية قوتهم الجسدية وتحسين مظهرهم\r\n\r\nبالإضافه الى الترفية والتسلية . تشمل خدمات بودي ماسترز على ( مسابح وألعاب مائية - بناء اجسام - لياقه بدنية وحصص جماعية - العاب رياضية - ملاعب كرة قدم- ايروبيك - تدليك طبي - حمام شامي - بالإضافه الى الخدمات الترفيهية مثل طاولات البلياردو - تنس الطاولة - صالة سكواش) . يتكون فريقنا من مجموعه من المدربين المحترفين على أعلى مستوى من الكفائه والحرفية فى تقديم الخدمات التدريبية كما يضم فريقنا مجموعه كبيرة من الأبطال الدوليين فى الرياضات المختلفة مما يجعلهم دائما مستعدين لمساعدتكم فى تحقيق أهدافكم اللياقية والوصول إلى نمط حياة أفضل.', '5-5', './clubs/body master/bady masters.jpg', ' Azizyah'),
(29, 'ستار تراك ', 4, 'سيتمسنى سرمه سر سرنىسبيي سكنبلاىسبك سكنب رس بك ةسبم يبلاني بم شمب لانشت يبلان ثهع ثالنلا هشث لاه شثهف لافشيبوىلا شزةيز بلانتش نلا نش', NULL, './clubs/star track/نادي ستار ترك الرياضي الصحي.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `club_category`
--

CREATE TABLE `club_category` (
  `CLUB_ID` int(11) NOT NULL,
  `CATEGORY_ID` int(11) NOT NULL,
  `PERIOD` int(11) NOT NULL,
  `PRICE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_category`
--

INSERT INTO `club_category` (`CLUB_ID`, `CATEGORY_ID`, `PERIOD`, `PRICE`) VALUES
(25, 1, 1, 150),
(25, 1, 3, 400),
(25, 1, 6, 750),
(25, 1, 12, 1300),
(25, 2, 1, 200),
(25, 2, 3, 550),
(25, 2, 6, 1000),
(25, 2, 12, 1800),
(25, 3, 1, 250),
(25, 3, 3, 700),
(25, 3, 6, 1300),
(25, 3, 12, 2400),
(26, 1, 1, 170),
(26, 1, 3, 460),
(26, 1, 6, 900),
(26, 1, 12, 1600),
(26, 2, 1, 220),
(26, 2, 3, 600),
(26, 2, 6, 1200),
(26, 2, 12, 2350),
(26, 3, 1, 300),
(26, 3, 3, 850),
(26, 3, 6, 1650),
(26, 3, 12, 3100),
(27, 1, 1, 150),
(27, 1, 3, 400),
(27, 1, 6, 750),
(27, 1, 12, 1300),
(27, 2, 1, 200),
(27, 2, 3, 550),
(27, 2, 6, 1000),
(27, 2, 12, 1800),
(27, 3, 1, 250),
(27, 3, 3, 700),
(27, 3, 6, 1300),
(27, 3, 12, 2400),
(28, 1, 1, 170),
(28, 1, 3, 460),
(28, 1, 6, 900),
(28, 1, 12, 1600),
(28, 2, 1, 220),
(28, 2, 3, 600),
(28, 2, 6, 1200),
(28, 2, 12, 2350),
(28, 3, 1, 300),
(28, 3, 3, 850),
(28, 3, 6, 1650),
(28, 3, 12, 3100),
(29, 1, 1, 150),
(29, 1, 3, 400),
(29, 1, 6, 750),
(29, 1, 12, 1300),
(29, 2, 1, 200),
(29, 2, 3, 550),
(29, 2, 6, 1000),
(29, 2, 12, 1800),
(29, 3, 1, 250),
(29, 3, 3, 700),
(29, 3, 6, 1300),
(29, 3, 12, 2400);

-- --------------------------------------------------------

--
-- Table structure for table `club_equipment`
--

CREATE TABLE `club_equipment` (
  `CLUB_ID` int(11) NOT NULL,
  `EQUIPMENT_ID` int(11) NOT NULL,
  `COUNT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_equipment`
--

INSERT INTO `club_equipment` (`CLUB_ID`, `EQUIPMENT_ID`, `COUNT`) VALUES
(25, 3, 5),
(25, 4, 3),
(25, 6, 2),
(25, 7, 5),
(26, 2, 2),
(26, 3, 2),
(26, 4, 5),
(26, 5, 3),
(26, 6, 4),
(27, 1, 3),
(27, 4, 7),
(27, 7, 4),
(28, 1, 5),
(28, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `COACH_ID` int(11) NOT NULL,
  `CLUB_ID` int(11) DEFAULT NULL,
  `RATE` int(11) DEFAULT NULL,
  `CERTIFCATION` varchar(1) DEFAULT NULL,
  `PIC_NAME` varchar(100) NOT NULL,
  `PICTURE` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`COACH_ID`, `CLUB_ID`, `RATE`, `CERTIFCATION`, `PIC_NAME`, `PICTURE`) VALUES
(20, 25, 5, 'n', '', 0x2e2f636c7562732f626f6479206d61737465722f696d67332e6a7067),
(21, 25, 4, 'n', '', ''),
(22, 28, 5, 'n', '', ''),
(23, 25, 3, 'n', '', ''),
(30, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `equeipments`
--

CREATE TABLE `equeipments` (
  `EQUEIPMENT_ID` int(11) NOT NULL,
  `EQUEIPMENT_NAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equeipments`
--

INSERT INTO `equeipments` (`EQUEIPMENT_ID`, `EQUEIPMENT_NAME`) VALUES
(1, 'dumbbell'),
(2, 'walker'),
(3, 'bicycle'),
(4, 'rowing machine'),
(5, 'treadmill'),
(6, 'jump rope'),
(7, 'barbell');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MEMBER_ID` int(11) NOT NULL,
  `ACCOUNT_ID` int(11) DEFAULT NULL,
  `CLUB_ID` int(11) DEFAULT NULL,
  `COACH_ID` int(11) DEFAULT NULL,
  `CATEGORY_ID` int(11) DEFAULT NULL,
  `PERIOD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MEMBER_ID`, `ACCOUNT_ID`, `CLUB_ID`, `COACH_ID`, `CATEGORY_ID`, `PERIOD`) VALUES
(1, 6, 25, 20, 3, 12),
(2, 7, 28, 21, 1, 1),
(3, 8, 29, 22, 2, 1),
(4, 9, 27, 22, 2, 12),
(5, 10, 25, 21, 3, 3),
(6, 11, 26, 20, 3, 1),
(7, 12, 29, 22, 2, 6),
(8, 13, 26, 20, 3, 6),
(9, 14, 27, 22, 2, 1),
(10, 15, 25, 20, 1, 12),
(11, 16, 28, 21, 3, 12),
(12, 17, 28, 21, 3, 1),
(13, 19, 29, 22, 2, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`CLUB_ID`) USING BTREE;

--
-- Indexes for table `club_category`
--
ALTER TABLE `club_category`
  ADD PRIMARY KEY (`CLUB_ID`,`CATEGORY_ID`,`PERIOD`),
  ADD KEY `CLUB_CATEGORY_CATEFK` (`CATEGORY_ID`);

--
-- Indexes for table `club_equipment`
--
ALTER TABLE `club_equipment`
  ADD PRIMARY KEY (`CLUB_ID`,`EQUIPMENT_ID`),
  ADD KEY `EQUIPMENT_FK` (`EQUIPMENT_ID`);

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`COACH_ID`),
  ADD KEY `COACHES_CLUBFK` (`CLUB_ID`);

--
-- Indexes for table `equeipments`
--
ALTER TABLE `equeipments`
  ADD PRIMARY KEY (`EQUEIPMENT_ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MEMBER_ID`),
  ADD UNIQUE KEY `MEMBERS_CO` (`ACCOUNT_ID`),
  ADD KEY `MEMBERS_FKCOACH` (`COACH_ID`),
  ADD KEY `MEMBERS_FKcategori` (`CATEGORY_ID`),
  ADD KEY `MEMBERS_FKclubid` (`CLUB_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `CLUB_ID_ACCOUNT_CON` FOREIGN KEY (`CLUB_ID`) REFERENCES `accounts` (`ACCOUNT_ID`);

--
-- Constraints for table `club_category`
--
ALTER TABLE `club_category`
  ADD CONSTRAINT `CLUB_CATEGORY_CATEFK` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `categories` (`CATEGORY_ID`),
  ADD CONSTRAINT `CLUB_CATEGORY_CLUBFK` FOREIGN KEY (`CLUB_ID`) REFERENCES `clubs` (`CLUB_ID`);

--
-- Constraints for table `club_equipment`
--
ALTER TABLE `club_equipment`
  ADD CONSTRAINT `CLUB_EQUIPMENT_CON` FOREIGN KEY (`CLUB_ID`) REFERENCES `clubs` (`CLUB_ID`),
  ADD CONSTRAINT `EQUIPMENT_FK` FOREIGN KEY (`EQUIPMENT_ID`) REFERENCES `equeipments` (`EQUEIPMENT_ID`);

--
-- Constraints for table `coaches`
--
ALTER TABLE `coaches`
  ADD CONSTRAINT `COACHES_CLUBFK` FOREIGN KEY (`CLUB_ID`) REFERENCES `clubs` (`CLUB_ID`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `MEMBERS_CON` FOREIGN KEY (`ACCOUNT_ID`) REFERENCES `accounts` (`ACCOUNT_ID`),
  ADD CONSTRAINT `MEMBERS_FKCOACH` FOREIGN KEY (`COACH_ID`) REFERENCES `coaches` (`COACH_ID`),
  ADD CONSTRAINT `MEMBERS_FKcategori` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `categories` (`CATEGORY_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `MEMBERS_FKclubid` FOREIGN KEY (`CLUB_ID`) REFERENCES `clubs` (`CLUB_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
