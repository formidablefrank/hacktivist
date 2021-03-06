-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2015 at 12:18 AM
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
  `category_name` text NOT NULL,
  `category_color` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_color`) VALUES
(1, 'Water Conservation', '3498DB'),
(2, 'Soil Conservation', '7F8C8D'),
(3, 'Air Conservation', 'A1D55B');

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
  `event_long` double NOT NULL,
  `event_lat` double NOT NULL,
  `event_limit` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `event_milestone` text NOT NULL,
  `event_pic` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_details`, `category_id`, `ngo_id`, `event_tokens`, `event_start`, `event_end`, `event_address`, `event_long`, `event_lat`, `event_limit`, `status_id`, `event_milestone`, `event_pic`) VALUES
(1, 'Be part of the change. Be a DYOSA.', 'Tree planting activity', 1, 1, 1, '2015-09-16 09:30:00', '2015-09-17 10:31:00', 'Claveria, Cagayan', 121.1022671, 18.5905519, 30, 2, 'We have planted trees.', 'https://www.climatecents.org/wp-content/uploads/2015/04/Tree-Planting-handful.jpg'),
(2, 'Yolanda: The Road to Resilience', 'Yolanda recovery is supported by 137 national societies, of which 17 are in-country partners of the Philippine Red Cross. Key sectors include shelter, livelihoods, water and sanitation, health, education and disaster risk reduction. Now well into its second year, the Typhoon Yolanda operation is one of the largest and most complex ever mounted by the Red Cross and Red Crescent in South East Asia. It is spread across five island groups, mostly in rural areas, where some beneficiaries live in remote and hard-to-access mountainous areas and islands.', 2, 2, 5000, '2015-09-15 13:00:00', '2015-09-18 14:00:00', 'Tacloban City Hall, Leyte', 125.0041848, 11.2439775, 10000, 1, 'As of August 2105, more than 61,600 homes have been built of a targeted 83,127, putting it well on the way to completion by early 2016. Red Cross homes are designed with extra bracing and secure foundations to withstand strong wind. By encouraging beneficiaries to participate in constructing their home where possible, they doing adopt build back better principles.', 'http://i.dailymail.co.uk/i/pix/2013/11/12/article-2501471-195CE8C000000578-51_964x634.jpg'),
(3, 'Pasig River Cleaning', 'Kapit bisig para sa Pasig!', 3, 1, 50, '2015-09-23 00:00:00', '2015-09-24 00:00:00', 'SM Marikina Riverside', 121.0855995, 14.62504, 50, 2, '100 kilos of waste recycled', 'http://londonmumsmagazine.com/wp-content/uploads/2011/09/Ray.Wise_.jpg'),
(4, 'YOLO', 'Public School Classroom cleaning', 1, 1, 10000, '2015-09-01 12:00:00', '2015-09-02 10:28:00', 'El Nido, Palawan', 119.3813373, 11.1656296, 25, 3, 'TBA', 'http://www.mb.com.ph/wp-content/uploads/2014/05/20_iskwela.jpg'),
(6, 'Ecotourism Development Project', 'The province of Bohol is slowly recovering from the impact of last year’s earthquake that damaged its most visited heritage sites. Since October 2013, the tourism suffered as tourist arrivals have declined in the region. As one of Bohol’s economic drivers, the local government in partnership with a non-profit organisation PROCESS Foundation, is reviving the tourism industry by developing eco-tourism sites to launch new success stories. The Abatan River Community is a story of five riverside communities working together to develop an eco-tourism industry that will hopefully bring back tourists and economic activity to their region.', 2, 4, 5000, '2015-09-01 12:30:00', '2015-09-02 11:45:00', 'Abatan River Community, Antequerra, Bohol', 123.9370251, 9.7774673, 60, 4, '', 'https://travelfoodguru.files.wordpress.com/2011/08/itra14.jpg'),
(7, 'Environmental Conservation Project', 'Community and Partner Organisation Profile Pilar is a remote island between the mainlands of Cebu and Leyte. In the 2010 census, there were only 11, 564 people and just roughly 2,000 households living on this island. Most of the residents are fishermen and a few works as farmers. Typhoon Haiyan devastated the island in 2013, but luckily there were no fatalities amongst its population. Right now, the community is working together to repair the damage and get back to being self sufficient. For Pilar, it is essential to ensure their natural resources are preserved for the local population’s livelihood and survival. RARE International and the local government will be our partners in community projects that will focus on environmental conservation', 3, 4, 2000, '2015-09-20 09:00:00', '2015-09-23 13:00:00', 'Pilar, Camotes Islands, Cebu', 123.9151408, 10.3125907, 35, 2, '', 'http://www.fastweb.com/uploads/article_photo/photo/175661/crop380w_community_hands.jpg'),
(8, 'Environment Projects', 'The Philippines is one of the world''s biodiversity hot-spots. Volunteers have the chance to help out placements to promote environmental conservation.  You can assist in operating a nursery for the propagation of mangrove seedlings, or you can help reforest mangrove sites by planting.  Volunteers can also help implement the marine sanctuary project with regular patrols, beach clean-ups and education on the needs and benefits of the project.\r\n', 3, 5, 0, '2015-10-08 11:00:00', '2015-11-12 00:00:00', 'Sagay City, Negros Occidental', 123.4495561, 10.8796086, 40, 0, '', 'http://www.greenrooftechnology.com/Pictures%20from%20JBi/Biodiversity.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngos`
--

INSERT INTO `ngos` (`ngo_id`, `ngo_name`, `ngo_details`) VALUES
(1, 'Dyosa Foundation', 'We give scholarships.'),
(2, 'Philippine Red Cross', 'At present, the Philippine Red Cross provides six major services: Blood Services, Disaster Management Services, Safety Services, Health Services, Social Services, Red Cross Youth and Volunteer Services. All of them embody the fundamental principles of the International Red Cross and Red Crescent Movement – humanity, impartiality, neutrality, independence, voluntary service, unity and universality. These values guide and inspire all Red Cross staff and volunteers, to whom being a Red Crosser is more than just a philosophy but a way of life.'),
(4, 'Pushpin Movement', 'Pushpin Movement is a social enterprise that connects the world''s volunteers to local projects and communities in the Philippines. We want to help volunteers make a difference by assisting them to be involved in volunteer projects and community initiatives in various areas in the Philippines. At the same time, we want to help non-profits, social enterprises, and other organisations in the Philippines who are in need of volunteers to achieve their goals.'),
(5, 'CCUSA', 'CCUSA is an international work adventure specialist.  Since 1985, we have been dedicated to providing the highest level of service in summer camp jobs, work and travel experiences, and volunteer adventures. We provide over 15 programs that recruit from more than 60 countries and have placed over 250,000 young adults in hundreds of summer camps and seasonal employers in the USA and around the world. If you want to participate in the ultimate international adventure of a lifetime, hire international staff for your business or partner with us to place young adults from your country, you can be assured that CCUSA will have the knowledge and expertise you need.If you''re ready to take off on an overseas experience, simply browse the Participant program offerings.  Otherwise, if you''re looking to work with CCUSA, choose your business type to find out more information on how we can help you. We''re looking forward to hearing from you.');

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
  `user_phone` text NOT NULL,
  `user_address` text NOT NULL,
  `user_email` text NOT NULL,
  `user_fbid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_phone`, `user_address`, `user_email`, `user_fbid`) VALUES
(1, 'Marian Daca', '639057297409', 'UP Diliman', 'marian@mail.com', 1),
(2, 'Dyosa Andaca', '7654321', 'University of the Philippines, Diliman', 'dyosa@mail.com', 2);

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
-- Indexes for table `event_user`
--
ALTER TABLE `event_user`
  ADD PRIMARY KEY (`event_id`,`user_id`);

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ngos`
--
ALTER TABLE `ngos`
  MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
