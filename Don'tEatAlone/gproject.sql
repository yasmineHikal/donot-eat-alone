-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2017 at 04:23 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(11) NOT NULL,
  `MessageId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `UserOneId` int(11) NOT NULL,
  `UserTwoId` int(11) NOT NULL,
  `Status` enum('0','1','2') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `InvitationId` int(11) NOT NULL,
  `InvitationSenderId` int(11) NOT NULL,
  `InvitationReceiverId` int(11) NOT NULL,
  `InvitationStartTime` time NOT NULL,
  `InvitationDate` date NOT NULL,
  `RestaurantId` int(11) NOT NULL,
  `InvitationResponse` enum('0','1','2') NOT NULL,
  `InvitationEndTime` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `MessageId` int(11) NOT NULL,
  `MessageSenderId` int(11) NOT NULL,
  `MessageReceiverId` int(11) NOT NULL,
  `MessageContent` varchar(500) DEFAULT NULL,
  `IsRead` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `IsRead` tinyint(1) NOT NULL,
  `Content` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `NotificationToId` int(11) DEFAULT NULL,
  `NotificationFormId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `provider_id`, `provider`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2147483647, 'facebook', 63, '2017-05-27 05:14:42', '2017-05-27 05:14:42'),
(2, 2147483647, 'facebook', 63, '2017-05-27 05:19:10', '2017-05-27 05:19:10'),
(3, 2147483647, 'facebook', 63, '2017-05-27 05:22:26', '2017-05-27 05:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `ReservationId` int(11) NOT NULL,
  `ReservationDate` date NOT NULL,
  `ReservationStartTime` time NOT NULL,
  `ReservationMakerId` int(11) NOT NULL,
  `ReservationRestaurantId` int(11) NOT NULL,
  `ReservationResponse` enum('0','1','2') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ReservationEndTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`ReservationId`, `ReservationDate`, `ReservationStartTime`, `ReservationMakerId`, `ReservationRestaurantId`, `ReservationResponse`, `created_at`, `updated_at`, `ReservationEndTime`) VALUES
(1, '2017-04-04', '05:28:13', 29, 23, '0', '2017-05-01 23:43:55', '2017-04-14 15:38:36', '00:00:00'),
(2, '2017-04-03', '05:28:13', 29, 23, '0', '2017-05-01 23:44:01', '2017-05-02 03:43:35', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `RestaurantName` varchar(100) DEFAULT NULL,
  `RestaurantAddress` varchar(200) DEFAULT NULL,
  `RestaurantPhone` varchar(45) DEFAULT NULL,
  `RestaurantLongitude` int(200) DEFAULT NULL,
  `RestaurantLatitude` int(200) DEFAULT NULL,
  `RestaurantPhoto` varchar(200) DEFAULT NULL,
  `RestaurantManager` int(11) NOT NULL,
  `AddBy` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `RestaurantName`, `RestaurantAddress`, `RestaurantPhone`, `RestaurantLongitude`, `RestaurantLatitude`, `RestaurantPhoto`, `RestaurantManager`, `AddBy`, `created_at`, `updated_at`) VALUES
(22, 'mac', 'hhshshhs', '0124589', 0, 0, '', 19, 18, '2017-04-11 23:04:03', '0000-00-00 00:00:00'),
(24, 'yyayyayay', NULL, '4578998', NULL, NULL, NULL, 62, 18, '2017-05-26 21:35:28', '2017-05-26 21:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserName` varchar(70) NOT NULL,
  `email` varchar(60) NOT NULL,
  `UserCity` varchar(45) NOT NULL,
  `UserPhone` varchar(45) DEFAULT NULL,
  `UserPhoto` varchar(150) DEFAULT 'noimage.jpg',
  `UserBirthDate` date NOT NULL,
  `password` varchar(250) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `UserLongitude` varchar(250) NOT NULL,
  `UserLatitude` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Gender` varchar(25) NOT NULL,
  `UserInterests` varchar(250) NOT NULL,
  `UserJob` varchar(100) NOT NULL,
  `UserAbout` text NOT NULL,
  `UserAge` varchar(10) NOT NULL,
  `role` enum('user','admin','RManager') NOT NULL DEFAULT 'user',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserName`, `email`, `UserCity`, `UserPhone`, `UserPhoto`, `UserBirthDate`, `password`, `remember_token`, `UserLongitude`, `UserLatitude`, `created_at`, `Gender`, `UserInterests`, `UserJob`, `UserAbout`, `UserAge`, `role`, `updated_at`) VALUES
(18, 'sara', 'sara@gmail.com', 'nasr city', NULL, '19520_IMG_1235 (2).JPG', '0000-00-00', '$2y$10$cDYOjUfp9n192V1YysfGMelj7ne019XBUOhIZBecRnEjZccOjNWb6', 'J4SICJZCE29Z2e2rY0fpgTKVD7pFiRrNQd8dKcqBnEPg8B9pBrpeBt60ZkAD', '', '', '2017-05-26 19:57:03', 'female', '', '', '', '25', 'admin', '2017-05-26 23:57:03'),
(19, 'nada', 'nada@gmail.com', '', NULL, '19520_IMG_1235 (2).JPG', '0000-00-00', '$2y$10$cDYOjUfp9n192V1YysfGMelj7ne019XBUOhIZBecRnEjZccOjNWb6', 'AUf8C3AM1sBZuwUOBUvBAsNgLeV5HZAhS9yDSEXkPLCIGnBrUQdgy8CaTaAO', '', '', '2017-05-01 23:56:57', '', '', '', '', '', 'RManager', '2017-05-02 03:56:57'),
(21, 'yasoo', 'yas@gmail.com', 'nasr city', NULL, '91243_IMG_1471 (2).JPG', '0000-00-00', '$2y$10$Jxd9rZ6G/sWNl0TjHdT1cOTxPib.LrFGPMVJcLHmko.TpVcP8n7KK', '', '', '', '2017-04-11 20:59:41', 'male', '', '', '', '', 'admin', '2017-04-03 08:08:13'),
(22, 'yasoo', 'ygjjjj@gmaihhhl.com', 'madii', NULL, '91243_IMG_1471 (2).JPG', '0000-00-00', '$2y$10$a8FGVtA1XWuJRHbqR4u/me0vi3byXurZgwj72wQK7F20SWsas1FtK', '', '', '', '2017-05-07 16:25:56', 'female', '', '', '', '', 'admin', '2017-05-07 20:25:56'),
(25, 'nada', 'y@gmail.com', 'nasr city', NULL, '91243_IMG_1471 (2).JPG', '0000-00-00', '$2y$10$HCGvZedxAdx4i6X3lnrwLONHaIxk0yHPpciHN6KqYioNIEODpjZ7.', '', '', '', '2017-04-07 11:06:30', 'male', '', '', '', '', 'admin', '2017-03-13 20:19:37'),
(27, 'nadoo', 'yng@gmail.com', 'nasr city', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$J89CftmCwAVyyfnQs04Q5uLmDCYATe4jltzavJZDhV.dd6CoP/72i', 'LhsZI3CdUq7dhwvewgvnx3MVxEf7LRlCidX5pBV99s78BLK5utjq0TihFdpP', '', '', '2017-05-01 23:51:00', 'male', '', '', '', '21', 'user', '2017-05-02 03:51:00'),
(28, 'sara', 'aasa@jj.com', 'nasr city', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$Ptvdt2RF9Ienu14j4cUPZenMsPy/kYMxPSvhrbx2Z9jJmHs8ie7c.', '', '', '', '2017-04-11 23:03:07', 'male', '', '', '', '25', 'admin', '2017-04-02 21:04:24'),
(29, 'yasasasass', 'yang@gmail.com', '', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$vwts8SI4maiz9tYMCsqaROTkrCmNQk8FHDtShkMJ46wswdFEjCrZ6', '', '', '', '2017-04-11 20:59:51', '', '', '', '', '', 'RManager', '2017-04-03 08:09:07'),
(31, 'ahmed', 'ertyuio@gmail.com', 'madii', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$jagoWSfMVWW.YnBROuZRde25F7SRqgcmWO8cMRaqzKhngOAoidnPi', '', '', '', '2017-04-11 21:22:49', 'male', '', '', '', '30', 'admin', '2017-04-03 08:05:00'),
(32, 'ahmed', 'yff@gmail.com', 'madii', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$zUh/Sv6aP5gKzjtdUYFXZ.764FwvCJ0UvVO3iA90uAuH1D7nQCWWW', '', '', '', '2017-04-11 21:22:53', 'male', '', '', '', '22', 'user', '2017-04-03 20:53:47'),
(33, 'ahmed', 'yajjg@gmail.com', 'nasr city', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$XHPWofDPmmyLkf6Mu/ztkeqAZzrDGGv/MwGAlDySxc5RgSju0k9xS', '', '', '', '2017-04-11 21:23:02', 'male', '', '', '', '28', 'user', '2017-04-03 21:01:29'),
(52, 'sandy', 'sandi@g.com', 'madii', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$CuLxiP4zRTpN4.TuHVwliuMMo9/lLfb5qbpsHtZdp8/ML3MM49MuW', '', '', '', '2017-04-13 09:02:49', 'female', '', '', '', '22', 'user', '2017-04-11 19:32:34'),
(53, 'sara', 'saear@ee.mdu', '', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$VKtqCF//Nj1vfOqTcHc0ye6jNFKsPRPxVqC/N1UU0jxbx.CZr.Dn.', 'QJQcQgGzRIYtvZy4FYqAyVNjuVHQrXUI5Mqm9pxQ3TpVMb0gomBSDh9rEpJZ', '', '', '2017-04-14 16:40:48', '', '', '', '', '', 'user', '2017-04-14 14:40:48'),
(54, 'yasso', 'yass@jjjj.com', '', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$kj88PvkovQZ/P6pwAEzTEecE1uIqvTdRy5/rn6ywgCcIE5Xpl1x4K', 'mk1JA9tfVWteghaQODwOdKKolHGOPblU0Qad8vBtKBqaTZQXHmv5kLhstH6O', '', '', '2017-04-14 18:06:39', '', '', '', '', '', 'user', '2017-04-14 16:06:39'),
(55, 'ysys', 'tst@dff.kk', '', NULL, 'noimage.jpg', '2017-04-12', '$2y$10$O018gad4p.9JXJY3GeloZu7DwiWfEHlLk2CG6t8kdfufqduWqEpCa', '', '', '', '2017-04-14 18:19:41', 'female', '', '', '', '', 'user', '2017-04-14 16:07:59'),
(56, 'yasssssoo', 'yyaa@ddd.vuu', '', NULL, 'noimage.jpg', '1995-02-20', '$2y$10$0XN6xuzyfhjEyRkYQkL8D.mijXaACsT3acEoq4fNA6eWH9aRS5vDm', 'IaZ378VcvwX63PDJi2H4OcJfRfGNduVULxR32j4LAS9t3M1I2VvxQJn4n2p9', '', '', '2017-04-14 20:21:59', 'female', '', '', '', '', 'user', '2017-04-14 18:21:59'),
(57, 'hhhh', 'yasmine.hjjjjikal.eng@gmail.com', '', NULL, 'noimage.jpg', '2017-04-27', '$2y$10$jBfiMqFVtGBpwtBedUtydeMlhb2Br6/ooMLip2VumF4Bh0xgN2Q8i', '', '', '', '2017-04-14 18:34:21', 'male', '', '', '', '', 'user', '2017-04-14 18:34:21'),
(58, 'jjjjjjjjjjjjj', 'yasmine.mmhikal.eng@gmail.com', 'Cairo', NULL, 'noimage.jpg', '2017-04-13', '$2y$10$jcG2cxMA6ySrDi5ZRKg/IOgKQa4lGQbpS7vXCxvs1bmcnXu3VZAYO', '', '31.2859', '30.0771', '2017-04-14 19:17:30', 'male', '', '', '', '', 'user', '2017-04-14 19:17:30'),
(59, 'sandy', 'saddd.cc@ff.vv', 'Cairo', NULL, 'noimage.jpg', '1995-02-02', '$2y$10$87DbtklqTKhE8b9Rh/NbAer9pTIbaUCdN5zLOyQMEocobnamuJVHi', '', '31.2859', '30.0771', '2017-04-14 19:20:03', 'female', '', '', '', '', 'user', '2017-04-14 19:20:03'),
(60, 'ttyyyb', 'eee@dff.vom', '', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$QSfroD8XlBqFOA59uCm8/.MJ4.tnrCqjUHoONynkShtjqfjiBYvkm', '', '', '', '2017-05-02 03:51:48', '', '', '', '', '', 'admin', '2017-05-02 03:51:48'),
(61, 'sara', 'sara@sara.com', '', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$RQgXUH4MPFpZavzLV6nMHew5JAz9jLHSBPL9p.LOyY0YAuqY2NUX.', '', '', '', '2017-05-26 20:11:11', '', '', '', '', '', 'admin', '2017-05-26 20:11:11'),
(62, 'yyayyayay', 'yaggg@fghjaks.com', '', NULL, 'noimage.jpg', '0000-00-00', '$2y$10$S3OVHBJdUJ7KSev.0d2b7e.1XJ6h1p34KdMX02Dqq/MYJkip/PUaW', '', '', '', '2017-05-26 21:35:28', '', '', '', '', '', 'RManager', '2017-05-26 21:35:28'),
(63, 'Yasmine Hikal', 'yasmine.hikal@gmail.com', '', NULL, '51999_Tulips.jpg', '0000-00-00', '', 'bjOamzLtIutjz99l42rpTXuDFUmkcEQf8wsrUbLsOLXq02TuOWqaZuQ01f5I', '', '', '2017-05-27 01:21:41', '', '', '', '', '', 'user', '2017-05-27 05:21:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ConversationMessageId` (`MessageId`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD KEY `FriendsUserOneId` (`UserOneId`),
  ADD KEY `FriendsUserTwoId` (`UserTwoId`);

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`InvitationId`),
  ADD KEY `InvationSenderId` (`InvitationSenderId`),
  ADD KEY `InvationReciverId` (`InvitationReceiverId`),
  ADD KEY `RestaurantId` (`RestaurantId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`MessageId`),
  ADD KEY `MessageSenderId` (`MessageSenderId`),
  ADD KEY `MessageReciverId` (`MessageReceiverId`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NotificationToId` (`NotificationToId`),
  ADD KEY `NotificationFromId` (`NotificationFormId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`ReservationId`),
  ADD KEY `ReservationMakerId` (`ReservationMakerId`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserAdded` (`AddBy`),
  ADD KEY `RestaurantManager` (`RestaurantManager`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `InvitationId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `MessageId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `ReservationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `ConversationMessageId` FOREIGN KEY (`MessageId`) REFERENCES `messages` (`MessageId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `FriendsUserOneId` FOREIGN KEY (`UserOneId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FriendsUserTwoId` FOREIGN KEY (`UserTwoId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invitations`
--
ALTER TABLE `invitations`
  ADD CONSTRAINT `InvationReciverId` FOREIGN KEY (`InvitationReceiverId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `InvationSenderId` FOREIGN KEY (`InvitationSenderId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RestaurantId` FOREIGN KEY (`RestaurantId`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `MessageReciverId` FOREIGN KEY (`MessageReceiverId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `MessageSenderId` FOREIGN KEY (`MessageSenderId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `NotificationFromId` FOREIGN KEY (`NotificationFormId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NotificationToId` FOREIGN KEY (`NotificationToId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `ReservationMakerId` FOREIGN KEY (`ReservationMakerId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`RestaurantManager`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
