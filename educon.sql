-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 10:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educon`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donemail` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studedu`
--

CREATE TABLE `studedu` (
  `email` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `ssc` varchar(50) NOT NULL,
  `sscpr` float NOT NULL,
  `hsc` varchar(50) NOT NULL,
  `hscpr` float NOT NULL,
  `grad` varchar(50) NOT NULL,
  `gradpr` float NOT NULL,
  `feerec` int(10) NOT NULL,
  `sscmark` int(10) NOT NULL,
  `hscmark` int(10) NOT NULL,
  `gradmark` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentper`
--

CREATE TABLE `studentper` (
  `email` varchar(55) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `amountneeded` int(20) NOT NULL,
  `quali` varchar(50) NOT NULL,
  `percent` float NOT NULL,
  `hisamount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studfin`
--

CREATE TABLE `studfin` (
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `foccu` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `moccu` varchar(50) NOT NULL,
  `nsib` int(50) NOT NULL,
  `anninc` int(10) NOT NULL,
  `incupload` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donemail`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studedu`
--
ALTER TABLE `studedu`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `studentper`
--
ALTER TABLE `studentper`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `studfin`
--
ALTER TABLE `studfin`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
