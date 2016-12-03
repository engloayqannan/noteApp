-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 09:01 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vola`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `name_ar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `name_ar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `healthstatuss`
--

CREATE TABLE `healthstatuss` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `knowabouts`
--

CREATE TABLE `knowabouts` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newstudentacademics`
--

CREATE TABLE `newstudentacademics` (
  `stdid` int(11) NOT NULL,
  `high_school_id` int(11) NOT NULL,
  `high_school_branch` int(11) NOT NULL,
  `high_school_gpa` double(4,2) NOT NULL,
  `high_school_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `high_school_year` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newstudentbridgings`
--

CREATE TABLE `newstudentbridgings` (
  `stdid` int(11) NOT NULL,
  `university_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `graduate_year` int(11) NOT NULL,
  `college` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gpa` double(4,2) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newstudentpersonals`
--

CREATE TABLE `newstudentpersonals` (
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `second_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `third_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `first_name_en` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `second_name_en` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `third_name_en` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_name_en` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `stdid` int(11) NOT NULL,
  `ssn` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `guardian` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_mobile` int(11) NOT NULL,
  `home_phone` int(11) NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `bob` int(11) NOT NULL,
  `dob` date NOT NULL,
  `city` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `street` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `healt_state` int(11) NOT NULL,
  `social_state` int(11) NOT NULL,
  `religion` int(11) NOT NULL,
  `nationality` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `specialNeed` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `specialNeedDetails` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `knowabout` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `cid` int(11) NOT NULL,
  `name_ar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socialstatuss`
--

CREATE TABLE `socialstatuss` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stdstatuss`
--

CREATE TABLE `stdstatuss` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthstatuss`
--
ALTER TABLE `healthstatuss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowabouts`
--
ALTER TABLE `knowabouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newstudentacademics`
--
ALTER TABLE `newstudentacademics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newstudentbridgings`
--
ALTER TABLE `newstudentbridgings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newstudentpersonals`
--
ALTER TABLE `newstudentpersonals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialstatuss`
--
ALTER TABLE `socialstatuss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdstatuss`
--
ALTER TABLE `stdstatuss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `healthstatuss`
--
ALTER TABLE `healthstatuss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `knowabouts`
--
ALTER TABLE `knowabouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newstudentacademics`
--
ALTER TABLE `newstudentacademics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newstudentbridgings`
--
ALTER TABLE `newstudentbridgings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newstudentpersonals`
--
ALTER TABLE `newstudentpersonals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `socialstatuss`
--
ALTER TABLE `socialstatuss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stdstatuss`
--
ALTER TABLE `stdstatuss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
