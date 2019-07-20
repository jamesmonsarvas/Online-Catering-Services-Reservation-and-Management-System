-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 07:17 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cateringdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(3) NOT NULL,
  `province_id` int(3) NOT NULL,
  `city` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `province_id`, `city`) VALUES
(1, 61, 'Alaminos'),
(2, 60, 'Angeles'),
(3, 64, 'Antipolo'),
(4, 52, 'Bacolod'),
(5, 24, 'Bacoor'),
(6, 52, 'Bago'),
(7, 13, 'Baguio'),
(8, 53, 'Bais'),
(9, 10, 'Balanga'),
(10, 36, 'Batac'),
(11, 12, 'Batangas City'),
(12, 53, 'Bayawan'),
(13, 45, 'Baybay'),
(14, 3, 'Bayugan'),
(15, 42, 'Biñan'),
(16, 75, 'Bislig'),
(17, 25, 'Bogo'),
(18, 33, 'Borongan'),
(19, 2, 'Butuan'),
(20, 2, 'Cabadbaran'),
(21, 56, 'Cabanatuan'),
(22, 42, 'Cabuyao'),
(23, 52, 'Cadiz'),
(24, 49, 'Cagayan de Oro'),
(25, 42, 'Calamba'),
(26, 58, 'Calapan'),
(27, 66, 'Calbayog'),
(28, 37, 'Candon'),
(29, 53, 'Canlaon'),
(30, 25, 'Carcar'),
(31, 66, 'Catbalogan'),
(32, 39, 'Cauayan'),
(33, 24, 'Cavite City'),
(34, 25, 'Danao'),
(35, 79, 'Dapitan'),
(36, 24, 'Dasmariñas'),
(37, 29, 'Davao City'),
(38, 29, 'Digos'),
(39, 53, 'Dumaguete'),
(40, 50, 'El Salvador'),
(41, 52, 'Escalante'),
(42, 55, 'Gapan'),
(43, 70, 'General Santos'),
(44, 24, 'General Trias'),
(45, 50, 'Gingoog'),
(46, 53, 'Guihulngan'),
(47, 52, 'Himamaylan'),
(48, 39, 'Ilagan'),
(49, 43, 'Iligan'),
(50, 38, 'Iloilo City'),
(51, 24, 'Imus'),
(52, 20, 'Iriga'),
(53, 9, 'Isabela'),
(54, 52, 'Kabankalan'),
(55, 27, 'Kidapawan'),
(56, 70, 'Koronadal'),
(57, 52, 'La Carlota'),
(58, 9, 'Lamitan'),
(59, 36, 'Laoag'),
(60, 25, 'Lapu-lapu'),
(61, 5, 'Legazpi'),
(62, 5, 'Ligao'),
(63, 12, 'Lipa'),
(64, 62, 'Lucena'),
(65, 71, 'Maasin'),
(66, 60, 'Mabalacat'),
(67, 16, 'Malaybalay'),
(68, 17, 'Malolos'),
(69, 25, 'Mandaue'),
(70, 44, 'Marawi'),
(71, 48, 'Masbate City'),
(72, 31, 'Mati'),
(73, 17, 'Meycauayan'),
(74, 55, 'Muñoz'),
(75, 20, 'Naga'),
(76, 25, 'Naga'),
(77, 78, 'Olongapo'),
(78, 45, 'Ormoc'),
(79, 49, 'Oroquieta'),
(80, 49, 'Ozamiz'),
(81, 55, 'Palayan'),
(82, 28, 'Samal'),
(83, 52, 'San Carlos'),
(84, 41, 'San Fernando'),
(85, 60, 'San Fernando'),
(86, 55, 'San Jose'),
(87, 17, 'San Jose del Monte'),
(88, 42, 'San Pablo'),
(89, 42, 'San Pedro'),
(90, 42, 'Santa Rosa'),
(91, 39, 'Santiago'),
(92, 52, 'Silay'),
(93, 52, 'Sipalay'),
(94, 69, 'Sorsogon City'),
(95, 74, 'Surigao City'),
(96, 5, 'Tabaco'),
(97, 40, 'Tabuk'),
(98, 45, 'Tacloban'),
(99, 72, 'Tacurong'),
(100, 24, 'Tagaytay'),
(101, 15, 'Tagbilaran'),
(102, 28, 'Tagum'),
(103, 25, 'Talisay'),
(104, 52, 'Talisay'),
(105, 12, 'Tanauan'),
(106, 75, 'Tandag'),
(107, 49, 'Tangub'),
(108, 53, 'Tanjay'),
(109, 76, 'Tarlac City'),
(110, 62, 'Tayabas'),
(111, 25, 'Toledo'),
(112, 24, 'Trece Martires'),
(113, 18, 'Tuguegarao'),
(114, 61, 'Urdaneta'),
(115, 16, 'Valencia'),
(116, 52, 'Victorias'),
(117, 37, 'Vigan');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `color_theme` varchar(20) DEFAULT NULL,
  `comments` text,
  `event_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `reservation_id`, `package_id`, `color_theme`, `comments`, `event_status`) VALUES
(1, 5, 1, 'Blue', '<p>Input your comment here.</p>', 0),
(2, 4, 1, '', 'Input your comment here.', 0),
(3, 12, 1, '', 'Input your comment here.', 0),
(4, 9, 1, 'Yellow', 'Input your comment here.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(14) DEFAULT NULL,
  `reason` varchar(25) DEFAULT NULL,
  `message` text,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `feature` int(11) NOT NULL,
  `fs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `phone_number`, `reason`, `message`, `date_added`, `feature`, `fs_id`) VALUES
(1, 'Gutlay', 'mharikgutlay@gmail.com', '09086655099', 'Wedding', 'This is my message for you about your wedding service.', '2018-09-18 09:19:15', 1, 0),
(4, 'Valdez', 'bjvldz@gmail.com', '09217436007', 'Debut', 'asdasdasd', '2018-09-18 07:50:46', 0, 0),
(8, 'James Monsarvas', 'jamez.monsarvas@gmail.com', '09352729624', 'Wedding', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat, ante eu elementum tincidunt, purus odio rutrum mauris, non tincidunt libero quam sit amet dolor. Nunc commodo interdum gravida. Mauris pretium leo mi, nec ultrices dui sodales sit amet. Aenean dignissim faucibus tortor, scelerisque condimentum sapien.', '2018-09-18 19:03:39', 1, 0),
(9, 'Edmark Fortuito', 'edmark4@yahoo.com', '09127635184', 'Debut', 'Donec at nunc non arcu efficitur finibus eu at lorem. Cras convallis rutrum nisi, a porta justo. Cras sit amet leo sit amet nulla dignissim pulvinar id vitae mi. Vivamus sed erat ante. Maecenas eget ipsum eu sapien malesuada pellentesque vitae vel diam. Duis porttitor arcu in lectus tempor, malesuada fringilla massa sagittis. Donec consectetur enim eleifend tempus gravida. Aliquam ligula eros, sagittis id urna in, interdum aliquam ex. Nulla vel lectus urna. Pellentesque eget ultricies nunc, id efficitur dolor.', '2018-09-18 20:04:26', 1, 0),
(10, 'Eduardo Dados', 'dadoseduardo10@yahoo.com', '09183726108', 'Corporate', 'Aliquam iaculis vel purus ac vestibulum. Suspendisse in tincidunt purus. Duis quis sagittis nibh. Etiam molestie eros massa, ac condimentum enim cursus pellentesque', '2018-09-18 20:04:21', 1, 0),
(11, 'John Carlo Plaza Gruy', 'JCPlazaGruy@yahoo.com', '09361728764', 'Good wedding service', 'Vestibulum eget odio quis lorem dignissim laoreet. Nulla suscipit tortor non orci ullamcorper, in tincidunt mauris congue.', '2018-09-19 05:55:04', 1, 0),
(13, 'John Doe', 'johndoe@gmail.com', '09086655099', NULL, NULL, '2018-12-13 17:19:51', 0, 2),
(14, 'Emilia Lockeheart', 'emilialockeheart@yahoo.com', '09512243987', NULL, NULL, '2018-12-13 17:39:02', 0, 3),
(15, 'John Doe', 'mharikgutlay@gmail.com', '', NULL, NULL, '2018-12-17 07:03:37', 0, 4),
(17, 'Marilyn Monroe', 'marilynmonroe@gmail.com', 'None given', NULL, NULL, '2018-12-20 02:32:38', 0, 6),
(18, 'Test Name', 'Test Address', '0000000000', NULL, NULL, '2019-01-10 09:13:53', 0, 0),
(19, 'Lorenzo Dela Cruz', 'lorenzo@test.com', 'None given', NULL, NULL, '2019-01-13 15:42:41', 0, 7);

-- --------------------------------------------------------

--
-- Stand-in structure for view `feedback_full`
-- (See below for the actual view)
--
CREATE TABLE `feedback_full` (
`feedback_id` int(11)
,`name` varchar(30)
,`email` varchar(255)
,`phone_number` varchar(14)
,`date_added` timestamp
,`feature` int(11)
,`feedback_type` int(11)
,`q1` int(11)
,`q2` int(11)
,`q3` int(11)
,`q4` int(11)
,`q5` int(11)
,`suggestion` text
);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_scores`
--

CREATE TABLE `feedback_scores` (
  `fs_id` int(11) NOT NULL,
  `feedback_type` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `suggestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_scores`
--

INSERT INTO `feedback_scores` (`fs_id`, `feedback_type`, `q1`, `q2`, `q3`, `q4`, `q5`, `suggestion`) VALUES
(1, 1, 1, 1, 1, 1, 1, 'None given'),
(2, 1, 1, 1, 1, 1, 1, 'sample text'),
(3, 2, 5, 5, 5, 3, 3, 'sample suggestion'),
(4, 1, 1, 1, 1, 1, 1, ''),
(6, 1, 4, 5, 2, 2, 4, ''),
(7, 2, 4, 4, 3, 4, 5, 'None given');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `list_of_menu`
--

CREATE TABLE `list_of_menu` (
  `list_of_menu_id` int(11) NOT NULL,
  `package_content_id` int(11) DEFAULT NULL,
  `menu_details` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list_of_menu`
--

INSERT INTO `list_of_menu` (`list_of_menu_id`, `package_content_id`, `menu_details`) VALUES
(1, 1, 'Ground Pork'),
(2, 1, 'Pork Adobo with fries'),
(3, 5, 'Chopsuey'),
(4, 5, 'Adobong Kangkong');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_no` varchar(45) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_no`, `price`) VALUES
(1, 'Package I', 245),
(2, 'Package II', 295),
(3, 'Package III', 345),
(4, 'Package IV', 395);

-- --------------------------------------------------------

--
-- Table structure for table `package_content`
--

CREATE TABLE `package_content` (
  `package_content_id` int(11) NOT NULL,
  `type_of_menu` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package_content`
--

INSERT INTO `package_content` (`package_content_id`, `type_of_menu`) VALUES
(1, 'Pork'),
(2, 'Chicken'),
(3, 'Beef'),
(4, 'Seafoods'),
(5, 'Vegetables'),
(6, 'Noodles');

-- --------------------------------------------------------

--
-- Table structure for table `package_pc`
--

CREATE TABLE `package_pc` (
  `package_id` int(11) DEFAULT NULL,
  `package_content_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package_pc`
--

INSERT INTO `package_pc` (`package_id`, `package_content_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(1, 3),
(NULL, NULL),
(NULL, NULL),
(1, 5),
(0, 1),
(0, 6),
(4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `province` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province`) VALUES
(1, 'Abra'),
(2, 'Agusan del Norte'),
(3, 'Agusan del Sur'),
(4, 'Aklan'),
(5, 'Albay'),
(6, 'Antique'),
(7, 'Apayao'),
(8, 'Aurora'),
(9, 'Basilan'),
(10, 'Bataan'),
(11, 'Batanes'),
(12, 'Batangas'),
(13, 'Benguet'),
(14, 'Biliran'),
(15, 'Bohol'),
(16, 'Bukidnon'),
(17, 'Bulacan'),
(18, 'Cagayan'),
(19, 'Camarines Norte'),
(20, 'Camarines Sur'),
(21, 'Camiguin'),
(22, 'Capiz'),
(23, 'Catanduanes'),
(24, 'Cavite'),
(25, 'Cebu'),
(26, 'Compostela Valley'),
(27, 'Cotobato'),
(28, 'Davao del Norte'),
(29, 'Davao del Sur'),
(30, 'Davao Occidental'),
(31, 'Davao Oriental'),
(32, 'Dinagat Islands'),
(33, 'Eastern Samar'),
(34, 'Guimaras'),
(35, 'Ifugao'),
(36, 'Ilocos Norte'),
(37, 'Ilocos Sur'),
(38, 'Iloilo'),
(39, 'Isabela'),
(40, 'Kalinga'),
(41, 'La Union'),
(42, 'Laguna'),
(43, 'Lanao del Norte'),
(44, 'Lanao del Sur'),
(45, 'Leyte'),
(46, 'Maguindanao'),
(47, 'Marinduque'),
(48, 'Masbate'),
(49, 'Misamis Occidental'),
(50, 'Misamis Oriental'),
(51, 'Mountain Province'),
(52, 'Negros Occidental'),
(53, 'Negros Oriental'),
(54, 'Northern Samar'),
(55, 'Nueva Ecija'),
(56, 'Neuva Vizcaya'),
(57, 'Occidental Mindoro'),
(58, 'Oriental Mindoro'),
(59, 'Palawan'),
(60, 'Pampanga'),
(61, 'Pangasinan'),
(62, 'Quezon'),
(63, 'Quirino'),
(64, 'Rizal'),
(65, 'Romblon'),
(66, 'Samar'),
(67, 'Sarangani'),
(68, 'Siquijor'),
(69, 'Sorsogon'),
(70, 'South Cotobato'),
(71, 'Southern Leyte'),
(72, 'Sultan Kudarat'),
(73, 'Sulu'),
(74, 'Surigao del Norte'),
(75, 'Surigao del Sur'),
(76, 'Tarlac'),
(77, 'Tawi-tawi'),
(78, 'Zambales'),
(79, 'Zamboanga del Norte'),
(80, 'Zamboanga Sibugay'),
(81, 'Metro Manila');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `type_of_event` int(11) NOT NULL,
  `place_of_event` varchar(255) NOT NULL,
  `exp_people_count` varchar(100) NOT NULL,
  `date_of_event` date NOT NULL,
  `time_of_event` varchar(150) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `reference_no`, `type_of_event`, `place_of_event`, `exp_people_count`, `date_of_event`, `time_of_event`, `email_address`, `firstname`, `lastname`, `telephone`, `status`, `timestamp`) VALUES
(1, '1-0362-81521-4697', 20, 'Alabang', 'Up to 100', '2018-12-27', '11AM', 'mharikgutlay@gmail.com', 'Mharik Angelo', 'Gutlay', '09086655099', 1, '2018-12-17 06:14:44'),
(2, '1-4945-20319-7427', 19, 'Cabuyao', '100-200', '2018-12-28', '2PM', 'johndoe@gmail.com', 'John', 'Doe', '09081376523', 3, '2019-01-10 03:20:20'),
(3, '1-4704-94366-3299', 18, 'Calamba', '200-300', '2018-12-28', '11AM', 'emilialockeheart@yahoo.com', 'Emilia', 'Heartlocke', '09501225478', 2, '2019-01-10 03:12:59'),
(4, '1-9493-29239-6690', 17, 'Pansol', '300 and above', '2018-12-25', '11AM', 'lorenzodelacruz@yahoo.com', 'Lorenzo', 'Dela Cruz', '09086655099', 0, '2019-01-06 16:40:31'),
(5, '1-0424-80630-5608', 19, 'Cabuyao', '200-300', '2018-12-31', '1PM', 'mharikgutlay@gmail.com', 'Mharik Angelo', 'Gutlay', '09086655099', 0, '2018-12-17 06:16:18'),
(8, '1-8584-44217-8075', 19, 'Cabuyao', '100-200', '2019-01-16', '11AM', 'mharikgutlay@gmail.com', 'John', 'Doe', '09086655099', 1, '2018-12-31 08:05:59'),
(9, '1-6183-70743-4083', 20, 'Alabang', 'Up to 100', '2019-01-01', '1PM', 'catrionablack@gmail.com', 'Catriona', 'Gutlay', '09081376523', 0, '2019-01-17 17:31:18'),
(10, '1-3185-02587-7435', 18, 'Cabuyao', 'Up to 100', '2019-01-24', '1PM', 'ma.gutlay1012@gmail.com', 'Jack', 'White', '09501225478', 2, '2019-01-10 02:59:59'),
(11, '1-9369-15080-0174', 20, 'Calamba', '100-200', '2019-01-11', '1PM', 'jamez.monsarvas@gmail.com', 'James', 'Monsarvas', '09352729624', 1, '2019-01-08 16:37:28'),
(12, '1-9697-49864-6362', 20, 'Cabuyao', 'Up to 100', '2019-01-11', '11AM', 'RenzDelaCruz00@gmail.com', 'Lorenzo', 'Dela Cruz', '09953761636', 0, '2019-01-10 08:59:08'),
(13, '1-7243-22171-9704', 20, 'Alabang', 'Up to 100', '2019-01-12', '11AM', 'test@gmail.com', 'althea', 'ganda', '00000000', 1, '2019-01-10 09:24:51'),
(14, '1-2062-30473-3303', 20, 'Alabang', 'Up to 100', '2019-01-14', '11AM', 'test@gmail.com', 'Althea ', 'Ganda', '12346', 1, '2019-01-10 09:38:32'),
(15, '1-5792-89512-6424', 20, 'Alabang', 'Up to 100', '2019-01-14', '11AM', 'test2@gmail.com', 'Althea 2', 'Ganda', '13213', 1, '2019-01-10 09:39:20'),
(16, '1-0644-09008-8441', 19, 'Pansol', '100-200', '2019-02-13', '2PM', 'ma.gutlay1012@gmail.com', 'Greg', 'Miller', '09286547777', 1, '2019-01-13 14:26:44'),
(17, '1-0282-80063-8507', 19, 'Alabang', 'Up to 100', '2019-02-13', '3PM', 'mharik@yahoo.com', 'mharik', 'gutlay', '09111154625', 1, '2019-01-14 07:18:16'),
(18, '1-0101-34281-8517', 0, '', '', '2019-01-19', '', '', '', '', '', 1, '2019-01-18 02:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_details`
--

CREATE TABLE `reservation_details` (
  `rd_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `budget` double NOT NULL,
  `color_theme` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `demographic` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_details`
--

INSERT INTO `reservation_details` (`rd_id`, `r_id`, `package_id`, `budget`, `color_theme`, `function`, `demographic`) VALUES
(4, 9, 1, 2000, 'Yellow', 'Formal', 'Mixed'),
(5, 10, 4, 5000, 'Blue', 'Informal', 'Elderly'),
(6, 12, 2, 500, 'Red', 'Formal', 'Children');

-- --------------------------------------------------------

--
-- Table structure for table `services_cms`
--

CREATE TABLE `services_cms` (
  `ID` int(11) NOT NULL,
  `services_slug` varchar(255) NOT NULL,
  `services_title` varchar(255) NOT NULL,
  `service_summary` text NOT NULL,
  `services_desc` text NOT NULL,
  `img_src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services_cms`
--

INSERT INTO `services_cms` (`ID`, `services_slug`, `services_title`, `service_summary`, `services_desc`, `img_src`) VALUES
(17, 'inauguration-fiesta-seminar-and-other-events', 'Inauguration, Fiesta, Seminar, and Other Events', '<p>Every event is important, even if it corporate or a tradition event. It is important to prepare how the event will work, because none of us want our event to event to be an embarrassing one. And Kirstian Event Needs is here to help you handle and cater your event.</p>', '<h4><strong>WHY CHOOSE KIRSTIAN EVENT NEEDS TO HANDLE YOUR CORPORATE AND TRADITIONAL EVENT?</strong></h4><p>First of all, Kirstian Event Needs or formerly known as Leynes is well recognized in terms of handling corporate and traditional events. We all know that this kind of event is important, so that we won\'t be embarrassed to our guest.&nbsp;</p><p>Every event should be good looking and also, the food should be good tasting when it is served in the event. Food is one of the important in an event. Food is an essential part of being human. People depend on food and do their best to get the best meal. Actually, our mood, physical state, health and even thoughts are associated with what, and how often, we eat. It’s generally agreed that when a person feels hunger, he or she gets more irritable and unhappy. The opposite is also true, in that being full makes a person feel happy and relaxed.</p><p>For this reason, most of our events including inauguration, seminar and different kinds of festivals are based around eating. Just don’t go along thinking that people come to a wedding or a birthday party only to chow down. They don’t. However, eating is an integral part of the atmosphere at any social event.</p><p>And Kirstian Event Needs is well known because of the food we serve.&nbsp;</p><p>This service includes :</p><ul><li>Clown/Mascot</li><li>Magic Tricks</li><li>Magic Tools</li></ul>', 'assets/images/image-5.jpg'),
(18, 'birthday-anniversary-graduation-and-baptismal', 'Birthday, Anniversary, Graduation, and Baptismal', '<p>Kirstian Event Needs is here to manage celebration events. Through the years we have been catering different celebrations not just inside the City of Cabuyao, but also in different parts of the Philippines.&nbsp;</p>', '<h4><strong>WHY CHOOSE KIRSTIAN EVENT NEEDS TO CATER YOUR CELEBRATION EVENT?</strong></h4><p>This events are most often events that Kirstian Event Needs handled. We have been serving birthdays, graduation, baptismal and anniverary since we started the business where we are known as Leynes.</p><p>Kirstian Event Needs have served peoples from Cabuyao City and other city neighbors and Pamantasan ng Cabuyao is one of the schools that we have served graduation events since it started in 2003. One of the feedbacks of the Pamantasan ng Cabuyao about our catering service is the food we serving. They say it was delicious which makes the guest alive at the event.</p><p>This service includes :&nbsp;</p><ul><li>Buffet &amp; Dessert (100 pax)</li><li>Tiffany Chairs w/ cover &amp; motif ribbon</li><li>Round Table w/ cloth &amp; motif topping</li><li>Catering equipments</li><li>Server in Uniform</li><li>Host/Emcee</li></ul><p>&nbsp;</p>', 'assets/images/image-41.jpg'),
(19, 'debut', 'Debut', '<p>Kirstian Event Needs is here to manage and make your child\'s debut memorable. It is once in a life time event that will happen to your daughter and we are going to be grateful to serve and be part of your daughter\'s debut.</p><p>&nbsp;</p>', '<h4><strong>WHY CHOOSE KIRSTIAN EVENT NEEDS TO CATER YOUR DAUGHTER\'S DEBUT?</strong></h4><p>Debut is once in a life time event in a girls life, no one can turn back the time to be 18 again. And if a debut celebration is not handled well it may lead into heart broken child.&nbsp;</p><p>That\'s why Kirstian Event Needs is here to make your daughter\'s dream debut party special and unforgettable.&nbsp;</p><p>Kirstian Event Needs has handled a lot of debut parties inside and out of the city and it a pleasure to us to see every smiles to every debutant. We put hardwork, planning and passion on handling a debut event, because this kind of event is important and meaningful and must be done properly.</p><p>&nbsp;</p><p>Kirstian Event Needs are here to make every girls once in a lifetime event wonderful and will last to their heart. And we will be glad to be part of this once in a lifetime event.</p><p>&nbsp;You can choose your own color motif and leave the rest to us.&nbsp;</p><p>This service includes :</p><ul><li>Cake &amp; Buffet (100 pax)</li><li>Chairs with cover &amp; motif ribbon</li><li>Round table with cloth &amp; motif topping</li><li>Toast of Red Wine</li><li>Carpet with balloon arrangement</li><li>18 Roses &amp; Candles with motif ribbon</li><li>Waiter in uniform</li><li>Host / Emcee</li><li>Photo booths</li></ul>', 'assets/images/image-3.jpg'),
(20, 'wedding', 'Wedding', '<p>Kirstian is here to make the most important day of your lives. We are here to make your dream wedding come true. We will brought to life your imagination and capture every moment so you can cherish the memories filled with love and enjoy.</p>', '<h4><strong>WHY YOU SHOULD HIRE A WEDDING CATERING SERVICE?</strong></h4><p>The most important part of the wedding is the reception itself. This is the part of the event in which the union of a loving couple will finally be completed, with the company of their family and guests watching happily. A wedding reception is always a beautiful sight to behold, with elaborate and elegant decorations, colorful flowers, well-dressed family and guests, and a picturesque and peaceful venue.</p><p>One of the most anticipated parts of any wedding (after the ‘I do\'s, of course) is the food. You may be in doubt about hiring a caterer, thinking that you can rely on yourself, your friends, and your family to prepare the food. In the old days, the family would get the women and start cooking for the feast two to three days before the wedding. Just imagine, a kitchen full of charming old and young ladies of both families cooking up a storm for your special day. While this may have been quite a sight during those days, it simply isn\'t something that is feasible nowadays.</p><p>Today, this simply isn\'t a practical thing to do; people are busier now than ever. Most weddings have a large number of guests, which means that the time to prepare the food would have to be shorter. You would also be required to buy all the ingredients you need to create each dish, which will already cost you a lot of money (without even counting the price of the event venue and the decorations). The best way to save time and effort while making sure the food will be excellent is by hiring a good Philippine wedding catering service provider.</p><h4>&nbsp;</h4><h4><strong>WHY CHOOSE KIRSTIAN EVENT NEEDS TO HANDLE YOUR WEDDING?</strong></h4><p>Kirstian Event Needs will help you to make your dream wedding in to life. We have serve a lot of wedding event and we never failed to achieve their expectation. All you have to do is to speak out what is on your mind we will do all the work.</p><p>Kirstian Event Needs has handled a lot of wedding events in Laguna. We have also served in the different part of the Philippines. We have been known not just on how we handle the event, but also on how the food taste when it is served on the event</p><p>Wedding is a special event to a couples life, and we are here to make it an everlasting memory to cherish. You can choose what color motif you want.</p><p>This service includes :&nbsp;</p><ul><li>3 Layer Cake</li><li>Buffet &amp; Dessert (100 pax)</li><li>Tiffany Chairs w/ cover &amp; motif ribbon</li><li>Round Table w/ cloth &amp; motif topping</li><li>Catering equipments</li><li>Server in Uniform</li><li>Toast of Red Wine</li><li>Carpet w/ fresh rose petals</li><li>Couple of Dove in a cage</li><li>Host/Emcee</li></ul><p>&nbsp;</p>', 'assets/images/image-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1562998802, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Structure for view `feedback_full`
--
DROP TABLE IF EXISTS `feedback_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ug2iu8badevp`@`localhost` SQL SECURITY DEFINER VIEW `feedback_full`  AS  select `feedback`.`feedback_id` AS `feedback_id`,`feedback`.`name` AS `name`,`feedback`.`email` AS `email`,`feedback`.`phone_number` AS `phone_number`,`feedback`.`date_added` AS `date_added`,`feedback`.`feature` AS `feature`,`feedback_scores`.`feedback_type` AS `feedback_type`,`feedback_scores`.`q1` AS `q1`,`feedback_scores`.`q2` AS `q2`,`feedback_scores`.`q3` AS `q3`,`feedback_scores`.`q4` AS `q4`,`feedback_scores`.`q5` AS `q5`,`feedback_scores`.`suggestion` AS `suggestion` from (`feedback` join `feedback_scores` on((`feedback`.`fs_id` = `feedback_scores`.`fs_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `fk_event_package1_idx` (`package_id`),
  ADD KEY `fk_event_reservation1_idx` (`reservation_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `feedback_scores`
--
ALTER TABLE `feedback_scores`
  ADD PRIMARY KEY (`fs_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_of_menu`
--
ALTER TABLE `list_of_menu`
  ADD PRIMARY KEY (`list_of_menu_id`),
  ADD KEY `fk_list_of_menu_package_content1_idx` (`package_content_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_content`
--
ALTER TABLE `package_content`
  ADD PRIMARY KEY (`package_content_id`);

--
-- Indexes for table `package_pc`
--
ALTER TABLE `package_pc`
  ADD KEY `fk_Package_PC_package1_idx` (`package_id`),
  ADD KEY `fk_Package_PC_package_content1_idx` (`package_content_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `fk_reservation_services_cms1_idx` (`type_of_event`);

--
-- Indexes for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD PRIMARY KEY (`rd_id`);

--
-- Indexes for table `services_cms`
--
ALTER TABLE `services_cms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback_scores`
--
ALTER TABLE `feedback_scores`
  MODIFY `fs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reservation_details`
--
ALTER TABLE `reservation_details`
  MODIFY `rd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
