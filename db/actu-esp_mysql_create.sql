-- phpMyAdmin SQL Dump

-- version 4.9.7

-- https://www.phpmyadmin.net/

--

-- Host: localhost:3306

-- Generation Time: Aug 03, 2022 at 03:24 PM

-- Server version: 10.5.16-MariaDB

-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `vlgw1644_actu_esp_db`

--

-- --------------------------------------------------------

--

-- Table structure for table `Article`

--

CREATE TABLE
    `Article` (
        `id` bigint(20) NOT NULL,
        `title` varchar(255) NOT NULL,
        `content` text NOT NULL,
        `date` date NOT NULL,
        `author` bigint(20) NOT NULL,
        `categoryId` bigint(20) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--

-- Table structure for table `category`

--

CREATE TABLE
    `category` (
        `id` bigint(20) NOT NULL,
        `description` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--

-- Table structure for table `Profile`

--

CREATE TABLE
    `Profile` (
        `id` bigint(20) NOT NULL,
        `description` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--

-- Table structure for table `User`

--

CREATE TABLE
    `User` (
        `id` bigint(255) NOT NULL,
        `firstname` varchar(255) NOT NULL,
        `lastname` varchar(255) NOT NULL,
        `login` varchar(255) NOT NULL,
        `passwordHash` varchar(255) NOT NULL,
        `token` varchar(255) NOT NULL,
        `profileId` bigint(20) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--

-- Indexes for dumped tables

--

--

-- Indexes for table `Article`

--

ALTER TABLE `Article`
ADD PRIMARY KEY (`id`),
ADD
    KEY `Article_fk0` (`author`),
ADD
    KEY `Article_fk1` (`categoryId`);

--

-- Indexes for table `category`

--

ALTER TABLE `category`
ADD PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `description` (`description`);

--

-- Indexes for table `Profile`

--

ALTER TABLE `Profile`
ADD PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `description` (`description`);

--

-- Indexes for table `User`

--

ALTER TABLE `User`
ADD PRIMARY KEY (`id`),
ADD
    KEY `User_fk0` (`profileId`);

--

-- AUTO_INCREMENT for dumped tables

--

--

-- AUTO_INCREMENT for table `Article`

--

ALTER TABLE
    `Article` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT for table `category`

--

ALTER TABLE
    `category` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT for table `Profile`

--

ALTER TABLE
    `Profile` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT for table `User`

--

ALTER TABLE `User` MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--

-- Constraints for dumped tables

--

--

-- Constraints for table `Article`

--

ALTER TABLE `Article`
ADD
    CONSTRAINT `Article_fk0` FOREIGN KEY (`author`) REFERENCES `User` (`id`),
ADD
    CONSTRAINT `Article_fk1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`);

--

-- Constraints for table `User`

--

ALTER TABLE `User`
ADD
    CONSTRAINT `User_fk0` FOREIGN KEY (`profileId`) REFERENCES `Profile` (`id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;