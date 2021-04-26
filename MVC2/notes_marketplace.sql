-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 09:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes_marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `country_code`, `created_date`, `created_by`, `modified_date`, `modified_by`, `is_active`) VALUES
(1, 'India', '+91', '2021-04-17 12:26:50', NULL, '2021-04-17 12:26:50', NULL, b'00000001'),
(2, 'Japan', '+81', '2021-04-17 12:28:04', NULL, '2021-04-17 12:28:04', NULL, b'00000001'),
(3, 'Afghanistan', '+93', '2021-04-17 12:29:17', NULL, '2021-04-17 12:29:17', NULL, b'00000001'),
(4, 'Bangladesh', '+880', '2021-04-17 12:29:17', NULL, '2021-04-17 12:29:17', NULL, b'00000001'),
(5, 'United States', '+1', '2021-04-17 12:29:17', NULL, '2021-04-17 12:29:17', NULL, b'00000001'),
(6, 'China', '+86', '2021-04-17 12:30:52', NULL, '2021-04-17 12:30:52', NULL, b'00000001');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `downloader` int(11) NOT NULL,
  `is_seller_has_allowed_download` bit(8) NOT NULL,
  `attachment_path` varchar(255) DEFAULT NULL,
  `is_attachment_downloaded` bit(8) NOT NULL,
  `attachment_downloaded_date` datetime DEFAULT NULL,
  `is_paid` bit(8) NOT NULL,
  `purchased_price` decimal(10,0) DEFAULT NULL,
  `note_title` varchar(100) NOT NULL,
  `note_category` varchar(100) NOT NULL,
  `created_date` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notes_type`
--

CREATE TABLE `notes_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes_type`
--

INSERT INTO `notes_type` (`id`, `name`, `description`, `created_date`, `created_by`, `modified_date`, `modified_by`, `is_active`) VALUES
(1, 'Story book', 'Notes about story of person or any events', '2021-04-17 12:42:48', NULL, '2021-04-17 12:42:48', NULL, b'00000001'),
(2, 'Handwritten notes', 'Notes which are hand written', '2021-04-17 12:42:48', NULL, '2021-04-17 12:42:48', NULL, b'00000001'),
(3, 'University notes', 'Notes from different Universities', '2021-04-17 12:42:48', NULL, '2021-04-17 12:42:48', NULL, b'00000001'),
(4, 'Reference notebook', 'Notes about specific knowledge', '2021-04-17 12:42:48', NULL, '2021-04-17 12:42:48', NULL, b'00000001');

-- --------------------------------------------------------

--
-- Table structure for table `note_categories`
--

CREATE TABLE `note_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note_categories`
--

INSERT INTO `note_categories` (`id`, `name`, `description`, `created_date`, `created_by`, `modified_date`, `modified_by`, `is_active`) VALUES
(1, 'IT', 'This is Engineering Subject ', '2021-04-17 12:49:15', NULL, '2021-04-17 12:49:15', NULL, b'00000001'),
(2, 'CA', 'This is a subject of commerce', '2021-04-17 12:49:15', NULL, '2021-04-17 12:49:15', NULL, b'00000001'),
(3, 'MBA', 'this is a subject of Commerce', '2021-04-17 12:49:15', NULL, '2021-04-17 12:49:15', NULL, b'00000001'),
(4, 'Maths', 'this is a category about any topics of Mathematics', '2021-04-17 12:49:15', NULL, '2021-04-17 12:49:15', NULL, b'00000001'),
(5, 'History', 'History about anything', '2021-04-17 12:49:15', NULL, '2021-04-17 12:49:15', NULL, b'00000001'),
(6, 'Chemistry', 'This is a Category of chemistry', '2021-04-17 12:49:15', NULL, '2021-04-17 12:49:15', NULL, b'00000001');

-- --------------------------------------------------------

--
-- Table structure for table `reference_data`
--

CREATE TABLE `reference_data` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL,
  `data_value` varchar(100) NOT NULL,
  `ref_category` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reference_data`
--

INSERT INTO `reference_data` (`id`, `value`, `data_value`, `ref_category`, `created_date`, `created_by`, `modified_date`, `modified_by`, `is_active`) VALUES
(1, 'Male', 'M', 'Gender', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000001'),
(2, 'Female', 'Fe', 'Gender', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000001'),
(3, 'Unknown', 'U', 'Gender', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000000'),
(4, 'Paid', 'P', 'Selling Mode', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000001'),
(5, 'Free', 'F', 'Selling Mode', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000001'),
(6, 'Draft', 'Draft', 'Notes Status', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000001'),
(7, 'Submitted For Reviews', 'Submitted For Reviews', 'Notes Status', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000001'),
(8, 'In Reviews', 'In Reviews', 'Notes Status', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000001'),
(9, 'Published', 'Approved', 'Notes Status', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000001'),
(10, 'Rejected', 'Rejected', 'Notes Status', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000001'),
(11, 'Removed', 'Removed', 'Notes Status', '2021-04-17 12:32:45', NULL, '2021-04-17 12:32:45', NULL, b'00000001');

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes`
--

CREATE TABLE `seller_notes` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `actioned_by` int(11) DEFAULT NULL,
  `admin_remarks` varchar(255) DEFAULT NULL,
  `published_date` datetime DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `display_picture` varchar(500) DEFAULT NULL,
  `note_type` int(11) DEFAULT NULL,
  `number_of_pages` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `university_name` varchar(200) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `course_code` varchar(100) DEFAULT NULL,
  `professor` varchar(100) DEFAULT NULL,
  `is_paid` int(11) NOT NULL,
  `selling_price` decimal(10,0) DEFAULT NULL,
  `notes_preview` varchar(500) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_notes`
--

INSERT INTO `seller_notes` (`id`, `seller_id`, `status`, `actioned_by`, `admin_remarks`, `published_date`, `title`, `category`, `display_picture`, `note_type`, `number_of_pages`, `description`, `university_name`, `country`, `course`, `course_code`, `professor`, `is_paid`, `selling_price`, `notes_preview`, `created_date`, `created_by`, `modified_date`, `modified_by`, `is_active`) VALUES
(1, 1, 6, 1, NULL, NULL, 'it', 1, '../Members/Default/Note_Display_pic.png', 1, 22, 'Enter your description', 'marwadi', 1, 'tr', 'fed', 'edxdew', 0, '0', NULL, '2021-04-21 15:56:45', 1, '2021-04-21 15:56:45', 1, b'00001'),
(2, 1, 6, 1, NULL, NULL, 'it', 1, '../Members/Default/Note_Display_pic.png', 1, 222, 'Enter your description', 'marwadi', 1, 'tr', 'fed', 'edxdew', 0, '0', NULL, '2021-04-21 16:08:06', 1, '2021-04-21 16:08:06', 1, b'00001'),
(3, 1, 6, 1, NULL, NULL, 'it', 1, '../Members/Default/Note_Display_pic.png', 1, 222, 'Enter your description', 'marwadi', 1, 'tr', 'fed', 'edxdew', 0, '0', NULL, '2021-04-21 16:08:42', 1, '2021-04-21 16:08:42', 1, b'00001'),
(4, 1, 6, 1, NULL, NULL, 'it', 1, '../Members/Default/Note_Display_pic.png', 1, 222, 'Enter your description', 'marwadi', 1, 'tr', 'fed', 'edxdew', 0, '0', NULL, '2021-04-21 16:10:59', 1, '2021-04-21 16:10:59', 1, b'00001');

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes_attachment`
--

CREATE TABLE `seller_notes_attachment` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `is_active` bit(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes_reported_issue`
--

CREATE TABLE `seller_notes_reported_issue` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `reported_by_id` int(11) NOT NULL,
  `against_download_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `selller_notes_reviews`
--

CREATE TABLE `selller_notes_reviews` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `reviewed_by_id` int(11) NOT NULL,
  `against_download_id` int(11) NOT NULL,
  `ratings` decimal(10,0) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_date` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_configurations`
--

CREATE TABLE `system_configurations` (
  `id` int(11) NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_email_verified` bit(5) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email_id`, `password`, `is_email_verified`, `created_date`, `created_by`, `modified_date`, `modified_by`, `is_active`) VALUES
(1, 1, 'Bhargav', 'Bhalala', 'bhargavbhalala189@gmail.com', '$2y$10$DmIbMfjW7/9ediwpzR.FW.0oT0em5YR6IkkJd86p3uQQl4.fmf2I6', b'00001', '2021-04-17 16:33:39', NULL, NULL, NULL, b'00001');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dob` datetime DEFAULT NULL,
  `gender` int(6) DEFAULT NULL,
  `secondary_email_address` varchar(100) NOT NULL,
  `phone_number-country_code` varchar(5) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `profile_picture` varchar(500) DEFAULT NULL,
  `address_line1` varchar(100) NOT NULL,
  `address_line2` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `university` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `description`, `created_date`, `created_by`, `modified_date`, `modified_by`, `is_active`) VALUES
(1, 'member', 'member can be buyer and seller or both', '2021-04-17 12:19:33', 3, '2021-04-17 12:19:33', NULL, b'00001'),
(2, 'admin', 'Admin can have access to all members registered ', '2021-04-17 12:21:56', 3, '2021-04-17 12:21:56', NULL, b'00001'),
(3, 'super admin', 'Super Admin can configure system configurations values', '2021-04-17 12:22:06', 3, '2021-04-17 12:22:06', NULL, b'00001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `seller` (`seller`),
  ADD KEY `downloader` (`downloader`);

--
-- Indexes for table `notes_type`
--
ALTER TABLE `notes_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note_categories`
--
ALTER TABLE `note_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference_data`
--
ALTER TABLE `reference_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_notes`
--
ALTER TABLE `seller_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `status` (`status`),
  ADD KEY `actioned_by` (`actioned_by`);

--
-- Indexes for table `seller_notes_attachment`
--
ALTER TABLE `seller_notes_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`);

--
-- Indexes for table `seller_notes_reported_issue`
--
ALTER TABLE `seller_notes_reported_issue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `reported_by_id` (`reported_by_id`),
  ADD KEY `against_download_id` (`against_download_id`);

--
-- Indexes for table `selller_notes_reviews`
--
ALTER TABLE `selller_notes_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `reviewed_by_id` (`reviewed_by_id`),
  ADD KEY `against_download_id` (`against_download_id`);

--
-- Indexes for table `system_configurations`
--
ALTER TABLE `system_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `gender` (`gender`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notes_type`
--
ALTER TABLE `notes_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `note_categories`
--
ALTER TABLE `note_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reference_data`
--
ALTER TABLE `reference_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seller_notes`
--
ALTER TABLE `seller_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seller_notes_attachment`
--
ALTER TABLE `seller_notes_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_notes_reported_issue`
--
ALTER TABLE `seller_notes_reported_issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `selller_notes_reviews`
--
ALTER TABLE `selller_notes_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_configurations`
--
ALTER TABLE `system_configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `downloads_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`),
  ADD CONSTRAINT `downloads_ibfk_2` FOREIGN KEY (`seller`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `downloads_ibfk_3` FOREIGN KEY (`downloader`) REFERENCES `users` (`id`);

--
-- Constraints for table `seller_notes`
--
ALTER TABLE `seller_notes`
  ADD CONSTRAINT `seller_notes_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `seller_notes_ibfk_2` FOREIGN KEY (`status`) REFERENCES `reference_data` (`id`),
  ADD CONSTRAINT `seller_notes_ibfk_3` FOREIGN KEY (`actioned_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `seller_notes_attachment`
--
ALTER TABLE `seller_notes_attachment`
  ADD CONSTRAINT `seller_notes_attachment_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`);

--
-- Constraints for table `seller_notes_reported_issue`
--
ALTER TABLE `seller_notes_reported_issue`
  ADD CONSTRAINT `seller_notes_reported_issue_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`),
  ADD CONSTRAINT `seller_notes_reported_issue_ibfk_2` FOREIGN KEY (`reported_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `seller_notes_reported_issue_ibfk_3` FOREIGN KEY (`against_download_id`) REFERENCES `downloads` (`id`);

--
-- Constraints for table `selller_notes_reviews`
--
ALTER TABLE `selller_notes_reviews`
  ADD CONSTRAINT `selller_notes_reviews_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`),
  ADD CONSTRAINT `selller_notes_reviews_ibfk_2` FOREIGN KEY (`reviewed_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `selller_notes_reviews_ibfk_3` FOREIGN KEY (`against_download_id`) REFERENCES `downloads` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_roles` (`id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_profile_ibfk_2` FOREIGN KEY (`gender`) REFERENCES `reference_data` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
