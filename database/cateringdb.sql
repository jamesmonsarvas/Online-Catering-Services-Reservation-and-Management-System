-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 11:22 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
-- Table structure for table `about_cms`
--

CREATE TABLE `about_cms` (
  `ID` int(11) NOT NULL,
  `Header_Title` varchar(45) DEFAULT NULL,
  `About_Desc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminLname` varchar(45) DEFAULT NULL,
  `adminFname` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `customerLName` varchar(45) DEFAULT NULL,
  `customerFName` varchar(45) DEFAULT NULL,
  `customerNo` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_event`
--

CREATE TABLE `customer_event` (
  `id` int(11) NOT NULL,
  `customerID` int(11) DEFAULT NULL,
  `reservationID` int(11) DEFAULT NULL,
  `dateOfReservation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_category`
--

CREATE TABLE `event_category` (
  `eventCategoryID` int(11) NOT NULL,
  `eventName` varchar(45) DEFAULT NULL,
  `eventDesc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(11) NOT NULL,
  `customerID` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `header_cms`
--

CREATE TABLE `header_cms` (
  `Company_Title` varchar(45) NOT NULL,
  `Background_IMG` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `header_cms`
--

INSERT INTO `header_cms` (`Company_Title`, `Background_IMG`) VALUES
('Kirstian Event Needs', NULL);

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

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'sampleeemail.com', 1534794089);

-- --------------------------------------------------------

--
-- Table structure for table `package_cms`
--

CREATE TABLE `package_cms` (
  `ID` int(11) NOT NULL,
  `Package_Name` varchar(30) DEFAULT NULL,
  `Package_Desc` varchar(45) DEFAULT NULL,
  `Price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `package_items_cms`
--

CREATE TABLE `package_items_cms` (
  `ID` int(11) NOT NULL,
  `Package_ID` int(11) DEFAULT NULL,
  `Package_Item_Name` varchar(30) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Package_IMG` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationID` int(11) NOT NULL,
  `eventCategoryID` int(11) DEFAULT NULL,
  `venueName` varchar(45) DEFAULT NULL,
  `numberOfGuest` int(11) DEFAULT NULL,
  `dateOfTaste` date DEFAULT NULL,
  `timeOfTaste` time DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services_cms`
--

CREATE TABLE `services_cms` (
  `ID` int(11) NOT NULL,
  `services_slug` varchar(255) NOT NULL,
  `services_title` varchar(255) NOT NULL,
  `services_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services_cms`
--

INSERT INTO `services_cms` (`ID`, `services_slug`, `services_title`, `services_desc`) VALUES
(4, 'Wedding', 'Wedding', 'This is wedding service.'),
(5, 'Party', 'Party', 'This is party service.'),
(6, 'Childrens-Party', 'Children\'s Party', 'This is for children'),
(7, 'debut', 'Debut', 'This is debut');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL,
  `staffLname` varchar(45) DEFAULT NULL,
  `staffFname` varchar(45) DEFAULT NULL,
  `contactNumber` int(11) DEFAULT NULL,
  `availability` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1534794541, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'sample@gmail.com', '$2y$08$9SCZcdR2l6z0MYdsX5TXOO6tG2QP3tJCBBTjoBcwp2.OXF0lPdMlC', NULL, 'sample@gmail.com', NULL, NULL, NULL, NULL, 1534793880, 1534794103, 1, 'James', 'Monsarvas', 'Kirstian', '09352729624'),
(3, '::1', 'sampleemail@gmail.com', '$2y$08$wOeJeeYjdAXtRmkmmLci.uUsyrj6ULp.pulgYE/VAWHvtDy3foXb2', NULL, 'sampleemail@gmail.com', NULL, NULL, NULL, NULL, 1534794031, NULL, 1, 'James', 'Monsarvas', '', '09352729624'),
(4, '::1', 'sampleemaail@gmail.com', '$2y$08$.mxPyviFYNc9RhZHHJxzTObqqEyVZwAqCHKL/3OPCdbLjCty1o1J.', NULL, 'sampleemaail@gmail.com', NULL, NULL, NULL, NULL, 1534794074, NULL, 1, 'James', 'Monsarvas', '', '09352729624');

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
(2, 1, 2),
(3, 2, 2),
(4, 3, 2),
(5, 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_cms`
--
ALTER TABLE `about_cms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `customer_event`
--
ALTER TABLE `customer_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Customer_Event_customer1_idx` (`customerID`),
  ADD KEY `fk_Customer_Event_Reservation1_idx` (`reservationID`);

--
-- Indexes for table `event_category`
--
ALTER TABLE `event_category`
  ADD PRIMARY KEY (`eventCategoryID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`),
  ADD KEY `fk_Feedback_customer_idx` (`customerID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_cms`
--
ALTER TABLE `header_cms`
  ADD PRIMARY KEY (`Company_Title`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_cms`
--
ALTER TABLE `package_cms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `package_items_cms`
--
ALTER TABLE `package_items_cms`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Package_Items_CMS_Package_CMS1_idx` (`Package_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationID`),
  ADD KEY `fk_Reservation_Event1_idx` (`eventCategoryID`);

--
-- Indexes for table `services_cms`
--
ALTER TABLE `services_cms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

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
-- AUTO_INCREMENT for table `about_cms`
--
ALTER TABLE `about_cms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_category`
--
ALTER TABLE `event_category`
  MODIFY `eventCategoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package_cms`
--
ALTER TABLE `package_cms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_items_cms`
--
ALTER TABLE `package_items_cms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services_cms`
--
ALTER TABLE `services_cms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_event`
--
ALTER TABLE `customer_event`
  ADD CONSTRAINT `fk_Customer_Event_Reservation1` FOREIGN KEY (`reservationID`) REFERENCES `reservation` (`reservationID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Customer_Event_customer1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_Feedback_customer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `package_items_cms`
--
ALTER TABLE `package_items_cms`
  ADD CONSTRAINT `fk_Package_Items_CMS_Package_CMS1` FOREIGN KEY (`Package_ID`) REFERENCES `package_cms` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_Reservation_Event1` FOREIGN KEY (`eventCategoryID`) REFERENCES `event_category` (`eventCategoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
