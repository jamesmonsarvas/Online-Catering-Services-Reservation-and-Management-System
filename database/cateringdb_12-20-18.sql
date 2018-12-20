-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 04:31 AM
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
(1, 5, 1, 'Blue', 'Input your comment here.', 0);

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
(17, 'Marilyn Monroe', 'marilynmonroe@gmail.com', 'None given', NULL, NULL, '2018-12-20 02:32:38', 0, 6);

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
(2, 1, 1, 1, 1, 1, 1, 'sample text'),
(3, 2, 5, 5, 5, 3, 3, 'sample suggestion'),
(4, 1, 1, 1, 1, 1, 1, ''),
(6, 1, 4, 5, 2, 2, 4, '');

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
(2, '1-4945-20319-7427', 19, 'Cabuyao', '100-200', '2018-12-28', '2PM', 'johndoe@gmail.com', 'John', 'Doe', '09081376523', 1, '2018-12-13 02:34:14'),
(3, '1-4704-94366-3299', 18, 'Calamba', '200-300', '2018-12-28', '11AM', 'emilialockeheart@yahoo.com', 'Emilia', 'Heartlocke', '09501225478', 1, '2018-12-13 02:38:23'),
(4, '1-9493-29239-6690', 17, 'Pansol', '300 and above', '2018-12-25', '11AM', 'lorenzodelacruz@yahoo.com', 'Lorenzo', 'Dela Cruz', '09086655099', 1, '2018-12-13 03:52:00'),
(5, '1-0424-80630-5608', 19, 'Cabuyao', '200-300', '2018-12-31', '1PM', 'mharikgutlay@gmail.com', 'Mharik Angelo', 'Gutlay', '09086655099', 0, '2018-12-17 06:16:18');

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
(17, 'inauguration-fiesta-seminar-and-other-events', 'Inauguration, Fiesta, Seminar, and Other Events', 'A celebration is a special enjoyable event that people organize because something pleasant has happened or because it is someone\'s birthday or anniversary. ', '<p>(Update details) To make every kids birthday happier and jollier. We provide Clowns and Mascots that will entertain every kids and kids at heart.;</p><p>This service includes :</p><ul><li>Clown/Mascot</li><li>Magic Tricks</li><li>Magic Tools</li></ul>', 'assets/images/image-5.jpg'),
(18, 'birthday-anniversary-graduation-and-baptismal', 'Birthday, Anniversary, Graduation, and Baptismal', 'A celebration is a special enjoyable event that people organize because something pleasant has happened or because it is someone\'s birthday or anniversary. ', '<p>(Update details BJ) To make your event alive and pleasing to everyone\'s eyes.</p><p>Kirstian is here to provide balloons and flowers for your event. Different balloons and flowers color depends on what color you want.</p>', 'assets/images/image-4.jpg'),
(19, 'debut', 'Debut', 'The debut is a traditional Filipino coming-of-age celebration which celebrates a young woman\'s 18th birthday, the age of maturity in the Philippines. In order to have the Philippines coming of age, is to be a virgin. Signifies as purity and maturity.', '<p>We are here to make every girls once in a lifetime event wonderful and will last to their heart. You can choose your own color motif and leave the rest to us.&nbsp;</p><p>This service includes :</p><ul><li>Cake &amp; Buffet (100 pax)&nbsp;</li><li>Chairs with cover &amp; motif ribbon&nbsp;</li><li>Round table with cloth &amp; motif topping&nbsp;</li><li>Toast of Red Wine&nbsp;</li><li>Carpet with balloon arrangement&nbsp;</li><li>18 Roses &amp; Candles with motif ribbon&nbsp;</li><li>Waiter in uniform&nbsp;</li><li>Host / Emcee&nbsp;</li><li>Photo booths</li></ul>', 'assets/images/image-3.jpg'),
(20, 'wedding', 'Wedding', '<p>A wedding is a ceremony where two people are united in marriage. Wedding traditions and customs vary greatly between cultures, ethnic groups, religions, countries, and social classes.</p>', '<p>Wedding is a special event to a couples life, and we are here to make it an everlasting memory to cherish. You can choose what color motif you want.</p><p>This service includes :&nbsp;</p><ul><li>3 Layer Cake</li><li>Buffet &amp; Dessert (100 pax)</li><li>Tiffany Chairs w/ cover &amp; motif ribbon</li><li>Round Table w/ cloth &amp; motif topping</li><li>Catering equipments</li><li>Server in Uniform</li><li>Toast of Red Wine</li><li>Carpet w/ fresh rose petals</li><li>Couple of Dove in a cage</li><li>Host/Emcee</li></ul><p>&nbsp;</p>', 'assets/images/image-2.jpg');

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1545267508, 1, 'Admin', 'istrator', 'ADMIN', '0');

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

CREATE ALGORITHM=MERGE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `feedback_full`  AS  select `f`.`feedback_id` AS `feedback_id`,`f`.`name` AS `name`,`f`.`email` AS `email`,`f`.`phone_number` AS `phone_number`,`f`.`date_added` AS `date_added`,`f`.`feature` AS `feature`,`fs`.`feedback_type` AS `feedback_type`,`fs`.`q1` AS `q1`,`fs`.`q2` AS `q2`,`fs`.`q3` AS `q3`,`fs`.`q4` AS `q4`,`fs`.`q5` AS `q5`,`fs`.`suggestion` AS `suggestion` from (`feedback` `f` join `feedback_scores` `fs` on((`f`.`fs_id` = `fs`.`fs_id`))) where 1 ;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `fk_reservation_services_cms1_idx` (`type_of_event`);

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
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback_scores`
--
ALTER TABLE `feedback_scores`
  MODIFY `fs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_of_menu`
--
ALTER TABLE `list_of_menu`
  MODIFY `list_of_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services_cms`
--
ALTER TABLE `services_cms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_package1` FOREIGN KEY (`package_id`) REFERENCES `package` (`package_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_reservation1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_services_cms1` FOREIGN KEY (`type_of_event`) REFERENCES `services_cms` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
