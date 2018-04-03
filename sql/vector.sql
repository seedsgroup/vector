-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2018 at 03:51 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vgplcom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `Ophone` int(11) DEFAULT NULL,
  `Mphone` int(11) DEFAULT NULL,
  `location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci,
  `fax` text COLLATE utf8_unicode_ci,
  `pobox` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `Ophone`, `Mphone`, `location`, `email`, `fax`, `pobox`, `added_date`, `updated_date`) VALUES
(1, 'Vector Group Pvt. Ltd.', 5180288, 0, 'Kupondole, Lalitpur', 'contact@vgpl.com.np', '', '', '2017-12-06 13:05:05', '2018-02-15 16:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `fullname` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_cat_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `fullname`, `email`, `phone`, `address`, `job_cat_id`, `description`, `added_date`, `updated_date`) VALUES
(1, 'Nirajan Khatri', 'khatrinirajan22@gmail.com', '9843249855', 'Bhaktapur', 5, 'I am honest, hardworking,determined learner and a self motivated boy with positive attitude towards my career and my life. Sir as i am a fresher, i have theoretical knowledge but i can do hardworking for my organisation and i will put all my effort for the good progress of organisation. Being punctual and sincere i can finish the work given to me on time. I\'ve recently completed my Bachelor degree in Electrical Engineering from Khwopa College of Engineering (TU).', '2018-03-30 07:12:52', NULL),
(2, 'Ritesh kumar jha', 'jharitesh534@gmail.com', '9844189519', 'kupandole', 4, 'I am result waiting student on electronics and communication engineering from advanced college of engineering and management.', '2018-03-31 02:09:48', NULL),
(3, 'Ritesh jha', 'jharitesh534@gmail.com', '9844189519', 'Kupandole, lalitpur', 4, 'I am result waiting student on electronics and communication engineering from advanced college of engineering and management.', '2018-03-31 02:26:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `summary` text COLLATE utf8_unicode_ci,
  `front` int(11) NOT NULL DEFAULT '0',
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `title`, `link`, `summary`, `front`, `added_date`, `updated_date`) VALUES
(1, 'aasdfa', 'asdf', '&lt;p&gt;asdfasdf&lt;/p&gt;', 1, '2017-12-29 11:02:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `phone` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hear` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `phone`, `hear`, `message`, `added_date`, `updated_date`) VALUES
(33, 'Anusuman Pokharel', 'nsmnpokharel@gmail.com', '9861534925', 'Friends', 'Checking', '2018-02-13 08:16:49', NULL),
(34, 'ansuuman', 'ansumanp@faks.com', '13412', 'asldfkj', 'aksdlfkjaskdf', '2018-03-02 09:30:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `summary` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `front` int(11) NOT NULL DEFAULT '0',
  `event_date` date DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `services_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `service_subCat_id` int(11) DEFAULT NULL,
  `carousel_id` int(11) DEFAULT NULL,
  `career_id` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `services_id`, `sub_cat_id`, `service_subCat_id`, `carousel_id`, `career_id`, `added_date`, `updated_date`) VALUES
(54, '930eaaa37605429674.png', NULL, NULL, NULL, NULL, NULL, '2018-02-03 23:12:29', NULL),
(55, 'daa92ba2d145268273.jpg', NULL, NULL, NULL, NULL, NULL, '2018-02-03 23:12:45', NULL),
(58, '0c874410e927061404.jpg', NULL, NULL, NULL, NULL, NULL, '2018-02-03 23:23:35', NULL),
(59, '4ea053d63439098209.png', 9, NULL, NULL, NULL, NULL, '2018-02-15 16:13:40', NULL),
(60, '930eaaa37296916441.png', 10, NULL, NULL, NULL, NULL, '2018-02-15 16:20:31', NULL),
(61, '6f02625ff403857788.png', 12, NULL, NULL, NULL, NULL, '2018-02-15 16:21:59', NULL),
(62, '95d0b3622984875294.png', 11, NULL, NULL, NULL, NULL, '2018-02-15 16:25:25', NULL),
(63, '52c5e6b92349940641.png', 7, NULL, NULL, NULL, NULL, '2018-02-15 16:27:40', NULL),
(64, 'bcfce2217405913933.png', 8, NULL, NULL, NULL, NULL, '2018-02-15 16:31:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_cat`
--

CREATE TABLE `job_cat` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_cat`
--

INSERT INTO `job_cat` (`id`, `title`, `added_date`, `updated_date`) VALUES
(4, 'Technology', '2017-12-08 15:28:32', NULL),
(5, 'Bidhut', '2017-12-11 13:34:49', NULL),
(6, 'Teaching', '2018-02-15 16:08:50', NULL),
(7, 'Plumbing', '2018-02-15 16:08:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ncat`
--

CREATE TABLE `ncat` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ncat`
--

INSERT INTO `ncat` (`id`, `title`, `added_date`, `updated_date`) VALUES
(1, 'Career', '2018-02-15 16:05:00', NULL),
(2, 'Events', '2018-02-15 16:05:07', NULL),
(3, 'News', '2018-02-15 16:05:14', NULL),
(4, 'Meeting', '2018-02-15 16:05:20', NULL),
(5, 'Seminar', '2018-02-15 16:05:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `summary` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `summary`, `added_date`, `updated_date`) VALUES
(7, 'Software', '<p>Vector Group is a Privately owned company. It is the leading company in Software industry.</p>', '2018-02-03 14:36:41', '2018-02-15 16:27:55'),
(8, 'Telecom', '<p>Vector Group is a Privately owned company. It is the leading company in Telecommunication industry.</p>', '2018-02-03 14:36:41', '2018-02-15 16:31:58'),
(9, 'Aviation', '<p>Vector Group is a Privately owned company. It is the leading company in aviation industry.</p>', '2018-02-03 14:36:41', '2018-02-15 16:16:49'),
(10, 'Civil', '<p>Vector Group is a Privately owned company. It is the leading company in Civil industry.</p>', '2018-02-03 14:36:42', '2018-02-15 16:20:49'),
(11, 'Energy', '<p>Vector Group is a Privately owned company. It is the leading company in Energy industry.</p>', '2018-02-03 14:36:42', '2018-02-15 16:25:39'),
(12, 'Education', '<p>Vector Group is a Privately owned company. It is the leading company in Education industry.</p>', '2018-02-03 14:36:42', '2018-02-15 16:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `login_page` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `login_page`, `added_date`) VALUES
(48, 1, '2018-02-15 06:48:29'),
(49, 1, '2018-02-15 15:57:27'),
(50, 1, '2018-02-15 15:58:16'),
(51, 1, '2018-02-15 15:59:50'),
(52, 1, '2018-02-18 04:23:08'),
(53, 1, '2018-03-27 10:55:06'),
(54, 1, '2018-03-29 04:47:24'),
(55, 1, '2018-03-29 04:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `title`, `added_date`, `updated_date`) VALUES
(1, 'facebook', '2017-12-06 10:56:31', NULL),
(2, 'youtube', '2017-12-06 10:56:31', NULL),
(3, 'twitter', '2017-12-06 10:56:31', NULL),
(4, 'linkedin', '2017-12-06 10:56:31', NULL),
(5, 'pinterest', '2017-12-06 10:56:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_link`
--

CREATE TABLE `social_link` (
  `id` int(11) NOT NULL,
  `social_id` int(11) DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `sub_cat` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`id`, `service_id`, `sub_cat`, `description`, `added_date`, `updated_date`) VALUES
(18, 7, 'App Development', '&lt;p&gt;We develop all kinds of app for you and your company.&lt;/p&gt;', '2018-02-15 16:01:27', '2018-02-15 16:01:50'),
(19, 7, 'Software Development', '&lt;p style=&quot;text-align: justify;&quot;&gt;We have been developing softwares for the different companies. You can try us out as well!!&lt;/p&gt;', '2018-02-15 16:02:04', '2018-02-15 16:04:41'),
(20, 9, 'Planes', '&lt;p style=&quot;text-align: justify;&quot;&gt;We buy planes from all over the country. We can get you one as well!&lt;/p&gt;', '2018-02-15 16:17:00', '2018-02-15 16:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `added_date`, `updated_date`) VALUES
(1, 'administrator', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', '2017-12-06 00:00:00', '2017-12-11 15:50:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_cat_id` (`job_cat_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_id` (`services_id`,`sub_cat_id`,`carousel_id`,`career_id`),
  ADD KEY `career_id` (`career_id`),
  ADD KEY `carousel_id` (`carousel_id`),
  ADD KEY `service_subCat` (`service_subCat_id`);

--
-- Indexes for table `job_cat`
--
ALTER TABLE `job_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ncat`
--
ALTER TABLE `ncat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_link`
--
ALTER TABLE `social_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_id` (`social_id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `job_cat`
--
ALTER TABLE `job_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ncat`
--
ALTER TABLE `ncat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_link`
--
ALTER TABLE `social_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `career`
--
ALTER TABLE `career`
  ADD CONSTRAINT `career_ibfk_1` FOREIGN KEY (`job_cat_id`) REFERENCES `job_cat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`type`) REFERENCES `ncat` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `files_ibfk_2` FOREIGN KEY (`career_id`) REFERENCES `career` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `files_ibfk_3` FOREIGN KEY (`carousel_id`) REFERENCES `carousel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `files_ibfk_4` FOREIGN KEY (`service_subCat_id`) REFERENCES `sub_cat` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `social_link`
--
ALTER TABLE `social_link`
  ADD CONSTRAINT `social_link_ibfk_1` FOREIGN KEY (`social_id`) REFERENCES `social` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
