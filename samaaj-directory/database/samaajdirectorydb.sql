-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 04:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samaajdirectorydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `srno` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `record` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`srno`, `username`, `password`, `record`) VALUES
(1, 'familyform', 'family123', 'deactive'),
(2, 'rituyadav', 'rituyadav12', 'active'),
(3, 'hello', 'hello123', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `membertb`
--

CREATE TABLE `membertb` (
  `srno` int(11) NOT NULL,
  `memberid` bigint(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middelname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `relationid` varchar(20) NOT NULL,
  `relationship` varchar(50) DEFAULT NULL,
  `father_name` varchar(80) NOT NULL,
  `mothername` varchar(60) NOT NULL,
  `husband_name` varchar(60) DEFAULT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(90) DEFAULT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(90) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `where_place` varchar(100) DEFAULT NULL,
  `occupation` varchar(90) DEFAULT NULL,
  `achivements` varchar(90) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `wifename` varchar(60) DEFAULT NULL,
  `caste` varchar(30) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `gotra` varchar(50) NOT NULL,
  `nativeplace` varchar(60) NOT NULL,
  `address` varchar(40) NOT NULL,
  `nearby` varchar(50) DEFAULT NULL,
  `society_name` varchar(50) DEFAULT NULL,
  `colony` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `post_office` varchar(70) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `distt` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `pincode` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `image_name` varchar(140) DEFAULT NULL,
  `image_type` varchar(20) DEFAULT NULL,
  `image_size` varchar(120) DEFAULT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `create_date_and_time` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `familyhead_memberid` int(11) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membertb`
--

INSERT INTO `membertb` (`srno`, `memberid`, `firstname`, `middelname`, `lastname`, `relationid`, `relationship`, `father_name`, `mothername`, `husband_name`, `mobile`, `email`, `dob`, `qualification`, `designation`, `where_place`, `occupation`, `achivements`, `gender`, `marital_status`, `wifename`, `caste`, `religion`, `gotra`, `nativeplace`, `address`, `nearby`, `society_name`, `colony`, `village`, `post_office`, `city`, `distt`, `state`, `pincode`, `country`, `image_name`, `image_type`, `image_size`, `image_path`, `priority`, `create_date_and_time`, `user_id`, `familyhead_memberid`, `post`) VALUES
(1, 1101, 'kirti', '', 'yadav', 's/o', 'self', 'styaveer yadav', 'sunita devi', NULL, 9877654311, 'kirtiyadav1991@gmail.com', '1990-10-01', 'B.tech in Computer Science', 'Sr. Relationship Manager', 'Maruti suzuki Nexa', '', '', 'male', 'married', 'ritu yadav', 'BC_B', 'Hindu', 'Kalaliya', 'rewari', 'ho.-no-2949', 'nai wali chock', '', 'Kunj-Gali', '', 'General post office', 'Rewari', 'Rewari', 'Haryana', 123401, 'India', '20180926_134411.jpg', 'jpg', '1425082', 'images/20180926_134411.jpg', 0, '2022-01-19 12:12:00', 1101, 1101, NULL),
(2, 1102, 'ritu', '', 'yadav', 'w/o', 'wife', 'rakesh yadav', 'rajwati yadav', 'kirti yadav', 4567898765, 'ritusunariya@gmail.com', '1994-11-27', 'Bectuler in computer application(BCA) persuing (MCA)', 'Student', 'Government Girls college Sec-14 Gurugram', '', '', 'female', 'married', '', 'BC_B', 'Hindu', 'Sunariya', 'Gurugram', 'ho.-no-2949', 'nai wali chock', '', 'Kunj-Gali', '', 'General post office', 'Rewari', 'Rewari', 'Haryana', 123401, 'India', 'pic.jpg', 'jpg', '98656', 'images/pic.jpg', 0, '2022-01-02 12:14:00', 1102, 1101, NULL),
(3, 1103, 'maanav', '', 'yadav', 's/o', 'son', 'kirti yadav', 'ritu yadav', NULL, 9870383644, 'maanavgames1991@gmail.com', '2017-11-12', 'persuing Nursary', 'Student', 'delhi public international school', '', '', 'male', 'unmarried', '', 'BC_B', 'Hindu', 'Kalaliya', 'Rewari', 'ho.no-2949', 'nai wali chock', '', 'Kunj-Gali', '', 'General post office', 'rewari', 'Rewari', 'Haryana', 123401, 'India', '2019-05-19-20-49-38-623.jpg', 'jpg', '258144', 'images/2019-05-19-20-49-38-623.jpg', 0, '2022-01-02 12:15:00', 1103, 1101, NULL),
(4, 1104, 'rakesh', '', 'yadav', 's/o', 'self', 'jaswant singh', 'sarwan yadav', NULL, 3456889875, 'rakeshyadav@gmail.com', '1972-12-12', 'BA master in arts(MA)', 'farmer', '', '', '', 'male', 'married', 'rajwati yadav', 'BC_B', 'Hindu', 'gunwal', 'Gurugram', 'ho.no-468', 'government school', '', '', 'baghanki', 'General post office', 'Rewari', 'gurgaon', 'Haryana', 122413, 'India', 'BeautyPlus_20180615154401037_save.jpg', 'jpg', '420626', 'images/BeautyPlus_20180615154401037_save.jpg', 0, '2021-12-31 12:15:00', 1104, 1104, NULL),
(5, 1105, 'rajwati', '', 'yadav', 'w/o', 'wife', 'meer singh', 'laxmi devi', 'rakesh yadav', 3456789765, 'rajwatiyadav@gmail.com', '1974-11-02', 'BA master in arts(MA)', 'housewife', '', '', '', 'female', 'married', '', 'BC_B', 'Hindu', 'gunwal', 'Gurugram', 'ho.no-468', 'government school', '', '', '', 'General post office', '', 'gurgaon', 'Haryana', 122413, 'india', 'BeautyPlus_20180615154401037_save.jpg', 'jpg', '420626', 'images/BeautyPlus_20180615154401037_save.jpg', 0, '2022-01-02 12:13:00', 1105, 1104, NULL),
(10, 1106, 'reetesh', '', 'sharma', 's/o', 'self', 'parsant sharma', 'teena sharma', '', 9876543211, 'reeteshsharma@gmail.com', '1972-12-04', 'Bectuler In Arts(BA )master in arts(MA)', 'president', '', '', '', 'male', 'married', 'pushpa sharma', 'General', 'Hindu', 'Kalaliya', 'Gurugram', 'ho.-no-2949', 'hanumaan mandir', '', '', '', 'General post office', 'gurgaon', 'gurgaon', 'Haryana', 123401, 'India', 'IMG-20190115-WA0003.jpg', 'jpg', '137069', 'images/IMG-20190115-WA0003.jpg', 1, '2022-01-30 12:13:00', 1106, 1106, 'president'),
(11, 1107, 'kishan', '', 'yadav', 's/o', 'self', 'ramesh yadav', 'rekha yadav ', '', 9876898777, 'kishanyadav@yahoo.com', '1973-12-13', 'Bectuler in Commerce (B.COM) Master in Commerce (M.COM)', 'vice president', '', '', '', 'male', 'married', 'suman yadav', 'OBC', 'Hindu', 'gunwal', 'delhi', 'ho.-no-276', 'kalawati hospital', '', '', '', 'General post office', 'delhi', 'delhi', 'Haryana', 123401, 'India', 'IMG_20150916_090150.jpg', 'jpg', '1185166', 'images/IMG_20150916_090150.jpg', 2, '2021-12-31 12:13:00', 1107, 1107, 'vice president'),
(12, 1108, 'rohan', '', 'kumar', 's/o', 'self', 'ajay kumar', 'priya devi', '', 6457677688, 'rohankumar22@gmail.com', '1989-12-13', 'Graduation In (BA)  POST Graduation (MA)', 'vice president', '', '', '', 'male', 'unmarried', '', 'SC', 'Hindu', 'Sunariya', 'jaipur', 'ho.-no-979', '', '', '', '', 'General post office', 'Rewari', 'rewari', 'Haryana', 123401, 'India', 'IMG_20150916_090240.jpg', 'jpg', '1100455', 'images/IMG_20150916_090240.jpg', 4, '2021-12-31 12:17:00', 1108, 1108, 'vice president'),
(13, 1109, 'ishan', '', 'sharma', 's/o', 'self', 'kunal sharma', 'pooja sharma', '', 8765456787, 'ishansharma@gmail.com', '1993-05-23', 'B.tech in Computer Science', 'vice president', '', '', '', 'male', 'married', 'kusum sharma', 'BC_A', 'Hindu', 'Kalaliya', 'Gurugram', 'ho.-no-864', 'hanumaan mandir', '', '', '', 'General post office', 'Rewari', 'rewari', 'Haryana', 123401, 'India', 'BeautyPlus_20180615155356406_save.jpg', 'jpg', '445701', 'images/BeautyPlus_20180615155356406_save.jpg', 3, '2021-12-31 02:13:00', 1109, 1109, 'vice president');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logintb`
--
ALTER TABLE `logintb`
  ADD UNIQUE KEY `srno` (`srno`);

--
-- Indexes for table `membertb`
--
ALTER TABLE `membertb`
  ADD PRIMARY KEY (`memberid`),
  ADD UNIQUE KEY `srno` (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logintb`
--
ALTER TABLE `logintb`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membertb`
--
ALTER TABLE `membertb`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
