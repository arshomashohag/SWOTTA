-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 09:16 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swotta`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'WORLDNEWS'),
(2, 'BLOGS'),
(3, 'BUSINESS'),
(4, 'TECHNOLOGY'),
(5, 'POLITICAL'),
(6, 'STUDY'),
(7, 'ENTERTAINMENT'),
(8, 'SPORTS'),
(9, 'LIFE&STYLE');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(30) NOT NULL,
  `scid` int(20) NOT NULL,
  `cid` int(11) NOT NULL,
  `head` text NOT NULL,
  `body` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `scid`, `cid`, `head`, `body`, `date`) VALUES
(1, 1, 1, 'Ebook sales drop as readers favour non-fiction books', 'But total book sales including physical books rose 6% to £3.5bn, according to the data, led by non-fiction gains.\r\nReaders flocked to fitness and self-help books, sending non-fiction sales up 9%, while fiction revenue fell 7%.\r\nExports rose 6% to £2.6bn, benefiting from a decline in the value of sterling, but also rising in line with domestic growth.\r\nThe gain reversed three previous years of export decline.\r\nIn 2015, adult colouring books and the 150th anniversary of Alice in Wonderland helped the swell in physical book sales, while ebook sales fell 1.6%.\r\nThis time, books on the Danish concept of hygge, which is usually translated into English as "cosiness", assisted factual sales, as well as fitness books by personal trainer Joe Wicks.\r\nWhile ebook sales took a hit, digital distribution helped other media.\r\nJournals made a 10% gain last year to £1.2bn, led by a jump in electronic subscriptions, making the market for books and journals worth £4.8bn.\r\n"Last year, one of the most eye-catching figures from our statistics was that physical book sales were increasing while digital book sales dropped," said chief executive Stephen Lotinga.\r\n"While many will debate as to whether this trend will continue, we should not ignore the fact that digital sales beyond the domestic ebook market are growing."', '2017-04-27 07:13:15'),
(2, 1, 1, 'TV drama and the weak pound set the scene for holidaymakers', 'She has watched it with her family in Sweden for as long as she can remember.\r\nThe appeal of Britain''s small screen dramas abroad is being dubbed "The Crown effect" after the biopic series about the British Queen.\r\nAdded to the impact of a weaker pound it is helping set the scene for a bumper year for UK tourism.\r\nLinnea spent Easter visiting the Peak District, the Lake District and the Cotswolds.\r\n"You have the lovely green hills. You''ve got the seaside, the cute houses, the pub culture, you''ve got everything," she says.\r\nShe''s a fan of the property show, Escape To The Country, too, which is also shown on daytime television in Sweden.', '2017-04-27 07:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `cid`, `name`) VALUES
(1, 1, 'United Kingdom'),
(2, 1, 'Middle East'),
(3, 1, 'US'),
(4, 2, 'EDITOR'),
(5, 2, 'CRYPTIC'),
(6, 2, 'PRICE'),
(7, 2, 'GENIUS'),
(8, 2, 'SPEEDY'),
(9, 3, 'CENSUS'),
(10, 3, 'MARKET'),
(11, 3, 'BUDGET'),
(12, 3, 'CLASSIFIEDS'),
(13, 4, 'SCIENCE'),
(14, 4, 'HEALTH'),
(15, 4, 'AGRICULTURE'),
(16, 5, 'DHAKA'),
(17, 5, 'CHITTAGONG'),
(18, 5, 'KHULNA'),
(19, 6, 'CAREER'),
(20, 6, 'COLLEGE'),
(21, 6, 'SCHOOL'),
(22, 7, 'ART'),
(23, 7, 'MOVIES'),
(24, 7, 'DANCE'),
(25, 7, 'MUSIC'),
(26, 8, 'FOOTBALL'),
(27, 8, 'CRICKET'),
(28, 8, 'TENNIS'),
(29, 8, 'LIVE SCORES'),
(30, 9, 'FASHION'),
(31, 9, 'FOOD'),
(33, 1, 'Bang'),
(34, 1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'najmul@gmail.com', '$2y$10$iusesomecrazystrings2ufKKB081n3f/8Ms9kQ/CjwCYmBs2ftqW'),
(2, 'student0@gmail.com', '$2y$10$iusesomecrazystrings2uz/HkvnvHFd41nowL3oLCmiMEM4CLQyW'),
(3, 'james@gmail.com', '$2y$10$iusesomecrazystrings2uz/HkvnvHFd41nowL3oLCmiMEM4CLQyW'),
(4, 'najmul2022@gmail.com', '$2y$10$iusesomecrazystrings2uz/HkvnvHFd41nowL3oLCmiMEM4CLQyW'),
(5, 'shohagsiraj.ru@gmail.com', '$2y$10$iusesomecrazystrings2usB4gT40Ccti7a1rP9hmZmNmi6.wurEG'),
(6, 'akash@gmail.com', '$2y$10$iusesomecrazystrings2uz/HkvnvHFd41nowL3oLCmiMEM4CLQyW'),
(7, 'amrinder146@gmail.com', '$2y$10$iusesomecrazystrings2u/DQ9cWAjtZiFZLB8W2mhTsqRc6ZQeaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
