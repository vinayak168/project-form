-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 05:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `servies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `title`, `name`, `email`, `phone`, `date`, `time`, `servies`) VALUES
(1, 'sachin', 'sachin', 'sachin123@gmail.com', 4477110033, '2022-09-11', '23:00:00', 'procedures'),
(2, 'vinay', 'vinayak arjun', 'vinayakarjun1234@gmail.com', 1234567894, '2022-09-16', '00:31:00', 'examinations'),
(3, 'viki', 'viki', '26988@gmail.com', 5558899666, '2022-09-10', '23:27:00', 'procedures'),
(4, 'viki', 'viki', '26988@gmail.com', 5558899666, '2022-09-08', '11:39:00', 'procedures'),
(5, 'viki', 'vinakdk', 'chalo@gmail.com', 1256325555, '2022-09-01', '00:43:00', 'tests'),
(6, 'vinayak', 'kfmkmfk', 'vina@gmail.com', 8885552221, '2022-08-31', '20:57:00', 'procedures'),
(7, 'sachin', 'aejkfk', 'sa@gmail.om', 7888888888, '2022-09-07', '08:00:00', 'treatments');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
