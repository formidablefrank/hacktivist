-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2015 at 11:32 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Water Conservation'),
(2, 'Soil Conservation');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL,
  `event_name` text NOT NULL,
  `event_details` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `event_tokens` int(11) NOT NULL,
  `event_start` datetime NOT NULL,
  `event_end` datetime NOT NULL,
  `event_address` text NOT NULL,
  `event_long` int(11) NOT NULL,
  `event_lat` int(11) NOT NULL,
  `event_limit` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `event_milestone` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_details`, `category_id`, `ngo_id`, `event_tokens`, `event_start`, `event_end`, `event_address`, `event_long`, `event_lat`, `event_limit`, `status_id`, `event_milestone`) VALUES
(1, 'Be part of the change. Be a DYOSA.', 'Tree planting activity', 1, 1, 1, '2015-09-16 09:30:00', '2015-09-17 10:31:00', 'Engineering Library II, UP Diliman', 121, 14, 30, 2, 'We have planted trees.'),
(2, 'Yolanda: The Road to Resilience', 'Yolanda recovery is supported by 137 national societies, of which 17 are in-country partners of the Philippine Red Cross. Key sectors include shelter, livelihoods, water and sanitation, health, education and disaster risk reduction. \r\nNow well into its second year, the Typhoon Yolanda operation is one of the largest and most complex ever mounted by the Red Cross and Red Crescent in South East Asia. It is spread across five island groups, mostly in rural areas, where some beneficiaries live in remote and hard-to-access mountainous areas and islands.', 2, 2, 5000, '2015-09-23 13:00:00', '2015-09-18 14:00:00', 'Melchor Hall, UP Diliman', 121, 14, 10000, 1, 'As of August 2105, more than 61,600 homes have been built of a targeted 83,127, putting it well on the way to completion by early 2016. Red Cross homes are designed with extra bracing and secure foundations to withstand strong wind. By encouraging beneficiaries to participate in constructing their home where possible, they doing adopt build back better principles.');

-- --------------------------------------------------------

--
-- Table structure for table `event_user`
--

CREATE TABLE IF NOT EXISTS `event_user` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_user`
--

INSERT INTO `event_user` (`event_id`, `user_id`, `type_id`, `user_token`) VALUES
(1, 1, 1, 0),
(2, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ngos`
--

CREATE TABLE IF NOT EXISTS `ngos` (
  `ngo_id` int(11) NOT NULL,
  `ngo_name` text NOT NULL,
  `ngo_details` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngos`
--

INSERT INTO `ngos` (`ngo_id`, `ngo_name`, `ngo_details`) VALUES
(1, 'Dyosa Foundation', 'We give scholarships.'),
(2, 'Philippine Red Cross', 'At present, the Philippine Red Cross provides six major services: Blood Services, Disaster Management Services, Safety Services, Health Services, Social Services, Red Cross Youth and Volunteer Services. All of them embody the fundamental principles of the International Red Cross and Red Crescent Movement – humanity, impartiality, neutrality, independence, voluntary service, unity and universality. These values guide and inspire all Red Cross staff and volunteers, to whom being a Red Crosser is more than just a philosophy but a way of life.');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `status_id` int(11) NOT NULL,
  `status_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`status_id`, `status_name`) VALUES
(1, 'Ongoing'),
(2, 'Upcoming'),
(3, 'Cancelled'),
(4, 'Finished');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `type_id` int(11) NOT NULL,
  `type_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_name`) VALUES
(1, 'Participant'),
(2, 'Waitlisted');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_address` text NOT NULL,
  `user_email` text NOT NULL,
  `user_fbid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_phone`, `user_address`, `user_email`, `user_fbid`) VALUES
(1, 'Marian Daca', 1234567, 'UP Diliman', 'marian@mail.com', 1),
(2, 'Dyosa Andaca', 7654321, 'University of the Philippines, Diliman', 'dyosa@mail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `ngos`
--
ALTER TABLE `ngos`
  ADD PRIMARY KEY (`ngo_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ngos`
--
ALTER TABLE `ngos`
  MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
