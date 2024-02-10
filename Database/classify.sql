-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 11:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classify`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(3) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_authentication` int(2) DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `full_name`, `user_name`, `email`, `mobileno`, `password`, `is_authentication`, `date_added`) VALUES
(22, 'Suruchi', 'Suruchi', 'suruchi.sarvate@gmail.com', '1234567890', 'suruchi1234', 1, '1998-01-23 12:45:56'),
(24, 'Mohan', 'mohan', 'mohan@gmail.com', '1234567890', '1234', 1, '2023-11-24 15:17:00'),
(25, 'Shivani1234', 'shivani', 'cde@gmail.com', '1234567890', '1234', 1, '2023-11-27 11:23:00'),
(26, 'suruchi 456', 'admin', 'suruchi.sarvate@gmail.com', '1234567890', '1234', 1, '2023-11-28 10:40:00'),
(27, 'pratiksha 1', 'pratiksha', 'cde@gmail.com', '1234567890', '1234', 1, '2023-11-28 10:58:00'),
(28, 'pratiksha', 'admin', 'abc@gmail.com', '1234567890', '1234', 1, '2023-11-28 11:28:00'),
(30, 'Sandeep', 'Sandeep123', 'sandeep@gmail.com', '1234567890', '1234', 0, '2023-12-18 14:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `adv_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `alternate_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`adv_id`, `client_id`, `category_id`, `sub_category_id`, `contact_person`, `contact_no`, `alternate_no`, `email`, `description`, `start_date`, `is_active`) VALUES
(89, 32, 3, 21, 'Sonali mudre', '1234455666', '1234556677', 'abcxyz@gmail.com', 'hswhwhwhqh jswjhwjh', '2023-11-25', 1),
(90, 31, 11, 19, 'Sakshi', '1234455666', '1234556677', 'abc@gmail.com', '', '2023-11-25', 1),
(91, 31, 11, 19, 'Sakshi', '1234455666', '1234556677', 'abc@gmail.com', '', '2023-11-25', 1),
(98, 32, 13, 18, 'anand', '1234455666', '1234556677', 'abcdef@gmail.com', '', '2023-11-25', 1),
(102, 29, 4, 22, 'suruchi', '1234455666', '1234556677', 'abc@gmail.com', 'bbbbbbn nbbnbnb', '2023-11-24', 1),
(103, 33, 9, 20, 'sonali', '1234455666', '1234556677', 'abc@gmail.com', 'nnbnn', '2023-11-25', 1),
(104, 27, 3, 18, 'anand', '1234455666', '1234556677', 'anand@gmail.com', 'ajsjdjsd', '2023-11-24', 1),
(105, 27, 3, 18, 'Ashish Padhye', '1234455666', '1234556677', 'anand@gmail.com', 'qwerty', '2023-11-24', 1),
(106, 32, 3, 18, 'Shubhangi', '1234455666', '1234556677', 'cde@gmail.com', ',sd,msdksds', '2023-11-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `advertise1`
--

CREATE TABLE `advertise1` (
  `adv_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `start_date` date NOT NULL,
  `ad_category_id` int(2) NOT NULL,
  `expiry_date` date NOT NULL,
  `featured` int(2) NOT NULL,
  `status` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `views` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advertise1`
--

INSERT INTO `advertise1` (`adv_id`, `client_id`, `category_id`, `sub_category_id`, `description`, `title`, `start_date`, `ad_category_id`, `expiry_date`, `featured`, `status`, `views`) VALUES
(31, 40, 3, 24, 'Find commercial spaces that will help your business grow.', 'DLF Limited', '2024-01-01', 3, '2024-01-08', 1, 'Accepted', 11),
(34, 36, 3, 21, '2 BHK flats with all kinds of facilities are available for sale.', 'IndiaBulls Infra', '2024-01-01', 4, '2024-01-11', 1, 'Accepted', 11),
(35, 43, 4, 22, 'Logistics helps you realize your business goals with a broad range of transport and logistics services.\n', ' Freight Forward', '2023-12-19', 6, '2024-01-08', 1, 'Accepted', 11),
(38, 41, 4, 22, 'Logistics helps you realize your business goals with a broad range of transport and logistics services.\r\n', 'Mahindra Logistics', '2024-01-01', 4, '2024-01-11', 1, 'Accepted', 11),
(39, 27, 4, 22, 'Logistics helps you realize your business goals with a broad range of transport and logistics services. Mobile: 1234567890\n', 'Agility Logistics', '2024-01-01', 4, '2024-01-11', 1, 'Accepted', 11),
(46, 43, 3, 24, 'Find commercial spaces that will help your business grow. Mobile: 6281269731', 'DLF Limited', '2024-01-01', 6, '2024-01-21', 0, 'Accepted', 1),
(55, 43, 7, 47, 'Backed Goods Mobile: 1234567890', 'Make the day delightful', '2024-01-02', 3, '2024-01-09', 1, 'Accepted', 11),
(56, 44, 14, 50, 'Have a bright future with getting yourself educated.', 'Get Educated', '2024-01-02', 4, '2024-01-12', 1, 'Accepted', 11),
(57, 27, 15, 52, 'राजारामपुरी येथे फिसिओथेरपिस्ट आणि रेसेपशनिस्ट पाहिजेत.  राजारामपुरी ६ वी गल्ली .\r\n', 'हॉस्पिटल स्टाफ ', '2024-01-02', 3, '2024-01-09', 1, 'Accepted', 11),
(58, 45, 16, 55, 'ट्रेड मिल टेक्निशियन , डेटा एन्ट्री , वॉर्ड बॉय ,आया ,नर्सिंग स्टाफ , मेडिकल ऑफिसर स्वस्तिक मल्टीस्पेशालिटी हॉस्पिटल , हॉटेल सयाजीसमोर . दु १२ ते ५', 'हॉस्पिटल स्टाफ ', '2024-01-02', 4, '2024-01-12', 0, 'Accepted', 3),
(61, 46, 16, 54, 'ताराबाई पार्क मध्ये नामांकित रेस्टॉरंट साठी अनुभवी वेटर व कॅप्टन पाहिजेत . आकर्षक पगार ', 'हॉटेल स्टाफ ', '2024-01-02', 3, '2024-01-09', 0, 'Accepted', 1),
(62, 27, 3, 24, 'get shop at affordable price', 'shop for sale', '2024-01-02', 4, '2024-01-12', 0, 'Accepted', 1),
(67, 41, 16, 55, 'देवकर पाणंद येथे हॉस्पिटल साठी ब्रदर हवे आहेत .  त्वरीत संपर्क करा . ', 'हॉस्पिटल स्टाफ ', '2024-01-02', 4, '2024-01-12', 0, 'Accepted', 3),
(69, 38, 16, 54, 'इचलकरंगी येथे पियूअर व्हेज हॉटेल मध्ये इंडियन मेन शेफ , कॅप्टन , ऑल राऊंडर कूक पाहिजेत . ', 'हॉटेल स्टाफ  ', '2024-01-02', 4, '2024-01-12', 0, 'Accepted', 1),
(70, 41, 16, 54, 'सॅन्डविच, पिझ्झा,बर्गर, ज्यूस बनवण्या साठी मुले /मुली हवी आहेत. शिकाऊ /अनुभवी. ', 'कर्मचारी ', '2024-01-02', 3, '2024-01-09', 0, 'Accepted', 1),
(71, 32, 16, 54, 'हॉटेल मध्ये वेटर, किचन हेल्पर पाहिजे. पार्टटाईम, फुल टाईम. हॉटेल रॉयल. रंकाळा जवळ ', 'हॉटेल स्टाफ ', '2024-01-02', 4, '2024-01-12', 0, 'Accepted', 1),
(72, 43, 16, 54, 'हाऊस किपिंग कामगार व वेटर पाहिजे. हॉटेल राम  कृष्ण इन, निवृत्ति चौक, शिवाजी पेठ ', 'हॉटेल स्टाफ ', '2024-01-02', 4, '2024-01-12', 0, 'Accepted', 1),
(73, 41, 16, 55, 'श्री प्रतिराम राज क्लिनिक सानें गुरुजी व शाहू पुरी दस वी पास रेसेपशनिस्ट पाहिजे. पगार ५०००/-', 'हॉस्पिटल स्टाफ ', '2024-01-04', 3, '2024-01-11', 0, 'Accepted', 3),
(74, 38, 16, 55, 'पाहिजे गोकुळ शिरगाव येथे दवाखाण्या साठी ए ऐन एम सिस्टर. आकर्षक पगार. ', 'हॉस्पिटल स्टाफ ', '2024-01-04', 3, '2024-01-11', 0, 'Accepted', 3),
(75, 45, 16, 54, 'कोल्हापूर येथील हॉटेल मध्ये कामाकरिता मांडणीवाले, कॅप्टन २,वेटर ३,चपाती करणेकरीता ५ महिला पाहिजे. ', 'हॉटेल स्टाफ ', '2023-12-19', 4, '2023-12-29', 0, 'Accepted', 1),
(76, 42, 16, 54, 'साफ सफाई साठी मुले, वेटर, चपाती साठी बायका पाहिजेत. पार्टटाइम, फुल टाइम ', 'हॉटेल स्टाफ ', '2024-01-04', 4, '2024-01-14', 0, 'Accepted', 1),
(77, 38, 16, 54, 'रेस्टोरंट साठी लेडीज, जेन्टस वैटर्स, कॅप्टन फुल टाइम /पार्ट टाइम व रोटी वाला पाहिजे, राजाराम पुरी ', 'हॉटेल स्टाफ ', '2024-01-04', 4, '2024-01-14', 0, 'Accepted', 1),
(78, 43, 16, 54, 'वेटर - हेल्पर - कटींग चपाती साठी लेडीज, सफाई वाला पाहिजे. फुल टाइम /सायं . ७ ते ११. राहाणेची सोय. ', 'हॉटेल स्टाफ ', '2023-12-19', 4, '2023-12-29', 0, 'Accepted', 1),
(79, 32, 16, 54, 'हॉटेल कामासाठी मुले पाहिजे. वेळ दु . ३ ते रात्री ११', 'हॉटेल स्टाफ ', '2023-12-19', 3, '2023-12-26', 0, 'Accepted', 1),
(80, 43, 16, 54, 'हॉटेल साठी  अनुभवी वेटर, कॅप्टन पाहिजेत. हॉटेल मंथन, पुणे बेंगलोर हाई वे टोप ', 'हॉटेल स्टाफ ', '2023-12-19', 4, '2023-12-29', 0, 'Accepted', 1),
(81, 42, 16, 56, 'सिक्युरिटी गार्ड, कोल्हापूर, रंकाळा, सानेगुरुजी, देवकर पाणंद येथे हवेत . ', 'सिक्युरिटी स्टाफ ', '2023-12-19', 3, '2023-12-26', 0, 'Accepted', 0),
(82, 27, 16, 56, 'सिक्युरिटी गार्ड अर्जन्ट नेमणे आहेत. कोल्हापूर शहरा करीता. आकर्षक पगार व इतर सुविधा. ', 'सिक्युरिटी गार्ड ', '2023-12-19', 4, '2023-12-29', 0, 'Accepted', 0),
(83, 27, 16, 56, 'सुरक्षा रक्षक - कोल्हापूर शहर, शिरोली, टोप संभापूर, गोकुळ शिरगाव, कागल, हुपरी. आकर्षक पगार ', 'सिक्युरिटी स्टाफ ', '2023-12-19', 3, '2023-12-26', 0, 'Pending', 0),
(84, 38, 16, 56, 'त्वरित सिक्युरिटी गार्ड पाहिजे. कोल्हापूर, गो . शिरगाव, कागल, शिरोली एम आय डी सी  ', 'सिक्युरिटी स्टाफ ', '2023-12-19', 3, '2023-12-26', 0, 'Pending', 0),
(90, 43, 13, 46, 'software available', 'software', '2023-12-19', 3, '2023-12-26', 0, 'Pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `color` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `color`) VALUES
(3, 'Real Estate', '#FF0000'),
(4, 'Infrastructure', '#00FFFF'),
(7, 'FMCG', '#FFFF00'),
(9, 'Hospitality', '#00FF00'),
(11, 'Retail', '#808080'),
(13, 'IT', '#FFA500'),
(14, 'Education', '#A52A2A'),
(15, 'Healthcare Industry', '#008000'),
(16, 'Janitorial Services', '#808000');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `mobileno`, `email`, `password`, `add_date`) VALUES
(27, 'Sakshi', '1234567890', 'cde@gmail.com', '1234', '2023-12-19'),
(32, 'Milind', '1234567890', 'milind@gmail.com', '1234', '2023-12-19'),
(36, 'Aparna', '1234567890', 'abc123@gmail.com', '1234', '2023-12-19'),
(37, 'Tripti123', '1234567890', 'tripti@gmail.com', '12345', '2023-12-19'),
(38, 'Tushar', '1234567890', 'cde@gmail.com', '1234', '2023-12-19'),
(39, 'sakshi1', '1234567890', 'abc@gmail.com', '12345', '2023-12-19'),
(40, 'Nitish', '1234567890', 'nitish@gmail.com', '1234', '2023-12-19'),
(41, 'Rashmi', '1234567890', 'rashmi@gmail.com', '1234', '2023-12-19'),
(42, 'Rakshit', '1234567890', 'rakshit@gmail.com', '1234', '2023-12-19'),
(43, 'Sulekha', '1234567890', 'abc@gmail.com', '1234', '2023-12-19'),
(44, 'Purnima', '1234567890', 'purnima123@gmail.com', '1234', '2023-12-19'),
(45, 'Neha', '1234567890', 'neha@gmail.com', '1234', '2023-12-19'),
(46, 'Keerti', '1234567890', 'keerti@gmail.com', '1234', '2023-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `client1`
--

CREATE TABLE `client1` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mobileno` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `code` mediumint(50) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` int(2) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client1`
--

INSERT INTO `client1` (`client_id`, `client_name`, `mobileno`, `email`, `code`, `password`, `is_active`, `add_date`) VALUES
(1, 'Aparana', '6281269731', 'abc@gmail.com', 250718, '1234', 1, '2023-11-27'),
(4, 'tripti', '1234567890', 'tripti@gmail.com', 388165, '1234', 1, '2023-11-27'),
(5, 'Apeksha', '1234567890', 'apeksha@gmail.com', 906711, '12345', 1, '2023-11-27'),
(6, 'Suruchi', '1234567890', 'suruchi.sarvate@gmail.com', 831107, '1234', 1, '2023-11-27'),
(7, 'ankit', '1234567890', 'cde@gmail.com', 659400, 'ankit', 1, '2023-11-27'),
(8, 'Arvind', '1234567890', 'abc@gmail.com', 780806, '1234', 1, '2023-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `ad_category_id` int(2) NOT NULL,
  `advertise_category` varchar(50) NOT NULL,
  `adv_limit` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`ad_category_id`, `advertise_category`, `adv_limit`) VALUES
(3, 'Free', 7),
(4, 'Silver', 10),
(5, 'Gold', 15),
(6, 'Premium', 20);

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `log_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `try_time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`log_id`, `ip_address`, `created_date`, `user_name`, `status`, `try_time`) VALUES
(1, '192.168.1.125', '2023-04-25 12:48:02', 'admin', 1, 1682407052),
(2, '192.168.1.125', '2023-04-25 13:07:16', 'admin', 1, 1682408206),
(3, '192.168.1.125', '2023-04-25 13:07:39', 'admin', 1, 1682408229),
(4, '192.168.1.125', '2023-04-25 13:09:56', 'admin', 1, 1682408366),
(5, '192.168.1.125', '2023-04-25 13:12:30', 'admin', 1, 1682408520),
(6, '192.168.1.125', '2023-04-25 13:16:25', 'admin', 1, 1682408755),
(7, '192.168.1.125', '2023-04-25 13:27:14', 'admin', 1, 1682409404),
(8, '192.168.1.125', '2023-04-25 13:36:04', 'admin', 1, 1682409934),
(9, '192.168.1.125', '2023-04-25 13:39:08', 'admin', 1, 1682410118),
(10, '192.168.1.125', '2023-04-25 13:39:58', 'admin', 1, 1682410168),
(11, '192.168.1.125', '2023-04-25 14:20:34', 'admin', 1, 1682412604),
(12, '192.168.1.125', '2023-04-26 12:45:21', 'admin', 0, 1682493291),
(13, '192.168.1.125', '2023-04-26 12:45:29', 'admin', 0, 1682493299),
(14, '192.168.1.125', '2023-04-26 12:46:29', 'giish327', 0, 1682493359),
(15, '192.168.1.125', '2023-04-26 12:47:10', 'admin', 0, 1682493400),
(16, '192.168.1.125', '2023-04-26 12:48:05', 'admin', 0, 1682493455),
(17, '192.168.1.125', '2023-04-26 12:50:57', 'admin', 1, 1682493627),
(18, '192.168.1.125', '2023-04-26 14:46:05', 'admin', 1, 1682500535),
(19, '192.168.1.125', '2023-04-27 13:43:01', 'admin', 1, 1682583151),
(20, '192.168.1.125', '2023-04-27 15:06:01', 'admin', 1, 1682588131),
(21, '192.168.1.125', '2023-05-12 12:56:01', 'admin', 1, 1683876331),
(22, '192.168.1.23', '2023-05-18 13:31:22', 'admin', 1, 1684396852),
(23, '192.168.1.23', '2023-05-18 14:23:46', 'admin', 1, 1684399996),
(24, '192.168.1.121', '2023-11-09 11:45:57', 'admin', 1, 1699510527);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `sort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `label`, `link`, `parent`, `sort`) VALUES
(1, 'PHP', '#', 0, 1),
(2, 'Tutorials', '#', 1, 2),
(3, 'Scripts', '#', 1, NULL),
(4, 'Arrays', '#', 2, NULL),
(5, 'Operators', '#', 2, NULL),
(6, 'Arithmetic operators', '#', 5, NULL),
(7, 'Assignment operators', '$', 5, NULL),
(8, 'Java', '#', 0, 3),
(9, 'Tutorials', '', 8, NULL),
(10, 'Programs', '', 8, NULL),
(11, 'JavaScript', '#', 0, 4),
(12, 'Contact', '#', 0, 10),
(13, 'CSS', '', 0, 9),
(14, 'Tutorials', '', 13, NULL),
(15, 'Servlet', '', 9, NULL),
(16, 'JSP', '', 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `subcategory_id` int(11) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`subcategory_id`, `sub_category`, `category_id`) VALUES
(19, 'Garments', 11),
(20, 'Hotels', 9),
(21, 'Residential', 3),
(22, 'Logistics', 4),
(23, 'Cosmetics', 7),
(24, 'Commercial', 3),
(25, 'Railway', 4),
(26, 'Food & Beverages', 9),
(44, 'Chocolates', 7),
(46, 'Software', 13),
(47, 'Backed Goods', 7),
(48, 'Home Care', 7),
(49, 'Alcoholic Beverages', 7),
(50, 'Primary ', 14),
(51, 'Secondary', 14),
(52, 'Hospital', 15),
(54, 'Hotel staff', 16),
(55, 'Hospital Staff', 16),
(56, 'Security Staff', 16),
(57, 'Telecommunication', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_level` int(10) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_added` date NOT NULL,
  `is_authentication` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `user_password`, `user_level`, `user_name`, `mobile_no`, `email`, `date_added`, `is_authentication`) VALUES
(1, 'Girish B', '12345', 9, 'admin', '1234567890', 'abc@gmail.com', '2023-01-20', 0),
(4, 'pratiksha', '1234', 9, ' pratiksha', '1234567890', 'abc@gmail.com', '2023-11-16', 1),
(11, 'suruchi ', '$2y$10$oW1ShvR33SOH3nOQtqcOde6szlEkBvFg1lqyD8Wzbz9', 9, 'suruchi26', '1234567890', 'suruchi.sarvate@gmail.com', '2023-11-20', 1),
(14, 'suruchi ', '', 9, ' suruchi26', '', 'suruchi.sarvate@gmail.com', '0000-00-00', 1),
(17, 'suruchi ', '1234', 9, ' suruchi', '1234567890', 'suruchi.sarvate@gmail.com', '2023-11-20', 1),
(18, 'suruchi ', '$2y$10$QcKxw42ozaPqRdKbDshWROkIt..7DcwzTM3x.8vdrlA', 9, 'suruchi\"', '1234567890', 'cde@gmail.com', '2023-11-22', 1),
(19, 'suruchi ', '$2y$10$X0cPy.1ChK301m3VSi.a7eQVUWFFdqipc0PqkvDOwEj', 9, 'pratiksha\"', '1234567890', 'suruchi.sarvate26@gmail.com', '2023-11-22', 1),
(20, 'suruchi ', '$2y$10$kDESH/phblbCx5z3cDtvLOIWfR9gEIKx0Zdz1qGHoTB', 9, '\"', '1234567890', 'cde@gmail.com', '2023-11-22', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `advertise1`
--
ALTER TABLE `advertise1`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client1`
--
ALTER TABLE `client1`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`ad_category_id`),
  ADD UNIQUE KEY `advertise_category` (`advertise_category`) USING BTREE;

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `advertise1`
--
ALTER TABLE `advertise1`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `client1`
--
ALTER TABLE `client1`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `ad_category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
