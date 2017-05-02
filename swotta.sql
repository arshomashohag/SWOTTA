-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 05:07 PM
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
-- Table structure for table `addimage`
--

CREATE TABLE `addimage` (
  `id` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addimage`
--

INSERT INTO `addimage` (`id`, `link`, `description`, `type`) VALUES
(1, 'images/add/23add1.png', 'We are the world&#039;s stunt double.', 0),
(2, 'images/add/24add2.png', 'Save upto 50%', 0),
(3, 'images/add/25add3.png', 'We have a lot of customer growth FireHost can scale right along with us', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(2, 'Amrinder Sing', 'amrinder146@gmail.com', 'd0b1cb3d79295081b85fe3d00ce555645a74b38a'),
(5, 'Shohag', 'shohagsiraj.ru@gmail.com', 'aedfc79e79a8c43c5dfc6c6f8c161f90d0c89c04'),
(6, 'Admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `body` mediumtext NOT NULL,
  `link` varchar(500) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `head`, `body`, `link`, `createdat`) VALUES
(5, 'Bangladeshi London', 'The Bangladeshi community is thriving in the capital with third generation Bangladeshis on their way to establishing themselves in the mainstream of London commerce and politics.', 'images/article/9Bangladesi_london.png', '2017-04-28 17:46:49'),
(6, 'Bangladesh War', 'On 13 June 1971, an article in the UK&#039;s Sunday Times exposed the brutality of Pakistan&#039;s suppression of the Bangladeshi uprising. It forced the reporter&#039;s family into hiding and changed history.', 'images/article/10Bangladesh_war.png', '2017-04-28 17:50:00'),
(7, 'Bangladesh country profile', 'Bangladesh is one of the world&#039;s most densely populated countries, with its people crammed into a delta of rivers that empties into the Bay of Bengal.', 'images/article/11bangladesh_map.png', '2017-04-28 17:50:36');

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
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` text NOT NULL,
  `readcount` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `scid`, `cid`, `head`, `body`, `createdat`, `image`, `readcount`) VALUES
(2, 1, 1, 'TV drama and the weak pound set the scene for holidaymakers', 'She has watched it with her family in Sweden for as long as she can remember.\r\nThe appeal of Britain''s small screen dramas abroad is being dubbed "The Crown effect" after the biopic series about the British Queen.\r\nAdded to the impact of a weaker pound it is helping set the scene for a bumper year for UK tourism.\r\nLinnea spent Easter visiting the Peak District, the Lake District and the Cotswolds.\r\n"You have the lovely green hills. You''ve got the seaside, the cute houses, the pub culture, you''ve got everything," she says.\r\nShe''s a fan of the property show, Escape To The Country, too, which is also shown on daytime television in Sweden.', '2017-04-27 07:14:46', '', 0),
(3, 1, 1, '3D Art', ' This is a 3D art of melting ICE', '2017-04-28 09:51:36', 'images/13d pic.jpg', 0),
(4, 4, 2, 'Dada', ' NCPC 2014', '2017-04-28 10:14:04', 'images/2WP_20140912_002.jpg', 0),
(5, 1, 1, 'Dada2', ' NCPC 2014', '2017-04-28 10:17:52', 'images/3WP_20140912_002.jpg', 0),
(6, 1, 1, 'Terror arrest near Houses of Parliament', ' A man carrying knives near the Houses of Parliament has been wrestled to the ground by armed police and arrested on suspicion of terrorism offences.<br />\r\nThe man, aged 27, was detained as part of an intelligence-led operation on Parliament Street.<br />\r\nA witness described seeing two knives on the ground, one of which he described as a large bread knife.<br />\r\nThe Metropolitan Police said there were no injuries. The suspect is in custody in a south London police station.<br />\r\nA French tourist who saw the arrest said the suspect looked &quot;very calm&quot;. Another witness said the man was not shouting, or acting aggressively.<br />\r\nA police statement said: &quot;The man was arrested on suspicion of possession of an offensive weapon and on suspicion of the commission, preparation and instigation of acts of terrorism. Knives have been recovered from him.<br />\r\n&quot;Detectives from the counter-terrorism command are continuing their investigation, and as a result of this arrest there is no immediate known threat.&quot;', '2017-04-28 10:42:14', 'images/5WP_20140912_002.jpg', 0),
(7, 33, 1, 'Lal Kach festival in Bangladesh', ' During the Hindu Lal Kach festival in Dhaka, men and boys cover themselves in body paint and take part in processions through their local neighbourhoods wielding swords to ward off evil and welcome the Bengali new year 1424.', '2017-04-28 13:45:30', 'images/6Lal_kach_festival.png', 0),
(8, 33, 1, 'Bangladesh reproached over inquiry into torture and murder of activist', 'A scathing report has accused the Bangladeshi authorities of &ldquo;washing their hands&rdquo; of any responsibility to find the people who tortured and murdered a prominent union activist..', '2017-04-28 13:46:37', 'images/7single_featured.png', 0),
(10, 33, 1, 'Global Development', 'Bangladesh is already one of the most climate vulnerable nations in the world, and global warming will bring more floods, stronger cyclones. At the dry fish yards, close to the airport at the coastal town of Cox&rsquo;s Bazar, women are busy sorting fish to dry in the sun. They say the process, which begins in October, can continue through to February or March if the weather is good.', '2017-04-28 13:53:27', 'images/8Global_devolopment.png', 0),
(18, 13, 4, 'Facebook&#039;s purge disables hundreds of authentic Bangladeshi users profile', 'Facebook has waged an uphill war against fake news for the last couple of months now. And couple days back, it announced it&rsquo;s newest crusade: Fake accounts. In an announcement made by Facebook this Friday, the social media giant informed that it has launched a massive operation against a substantial number of accounts that it believes to be fake.', '2017-04-29 14:41:50', '', 0),
(19, 13, 4, 'Samsung announces pre-order of Galaxy S8 and S8+ in Bangladesh', ' Samsung unboxed the Galaxy S8 and S8+ in the Bangladesh Market. Preorders began on April 12 with exclusive bundle offer from Grameenphone. Customers can pre-book by visiting www.preorders8.com or www.grameenphone.com or from any Samsung store or Grameenphone center. In Bangladesh, the Galaxy S8 will be available in Midnight Black and Maple Gold.', '2017-04-29 14:44:58', '', 0),
(20, 13, 4, 'Dhaka 2nd among top cities with active Facebook users', ' Dhaka has been ranked second among the top cities across the world having active Facebook users, according to a recent study. Social media research organisations -- We Are Social and Hootsuite jointly conducted the study and revealed the information where Bangkok is the top city.', '2017-04-29 14:45:46', '', 0),
(21, 13, 4, 'The iPhone of cars? Apple enters self-driving car race', ' Ending years of speculation, Apple&rsquo;s late entry into a crowded field was made official Friday with the disclosure that the California Department of Motor Vehicles had awarded a permit for the company to start testing its self-driving car technology on public roads in the state. The permit covers three vehicles &mdash; all 2015 Lexus RX 450h hybrid SUVs &mdash; and six individual drivers. California law requires people to be in a self-driving car who can take control if something goes wrong.', '2017-04-29 14:46:20', '', 0),
(22, 2, 1, 'This is a test', ' This is a test', '2017-05-02 11:31:06', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `desk`
--

CREATE TABLE `desk` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `body` mediumtext NOT NULL,
  `link` varchar(500) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desk`
--

INSERT INTO `desk` (`id`, `head`, `body`, `link`, `createdat`) VALUES
(2, 'President: Abdul Hamid', 'Abdul Hamid, formerly the Speaker of parliament, was elected unopposed to the ceremonial post in 2013.', '', '2017-04-28 19:23:47'),
(3, 'Prime minister: Sheikh Hasina', 'Sheikh Hasina started a third term as prime minister in January 2014 after her Awami League won elections boycotted by the opposition amid an ongoing political crisis. Politics has long been dominated by bitter rivalry between two women: Sheikh Hasina and Khaleda Zia of the Bangladesh Nationalist Party.', '', '2017-04-28 19:24:16'),
(4, 'Dhaka celebrates Bengali new year', 'Bangladesh&#039;s capital enjoyed its colourful end-of-year festival amid high security.', '', '2017-04-28 19:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `editorial`
--

CREATE TABLE `editorial` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `body` mediumtext NOT NULL,
  `link` varchar(500) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editorial`
--

INSERT INTO `editorial` (`id`, `head`, `body`, `link`, `createdat`) VALUES
(1, 'Dhaka celebrates Bengali new year', 'Dhaka celebrates benglai new year 1424 this friday. <br />\r\nThere was a festive environment everywhere. In every family every member eat water-rice to celebrate this day . They also have some bangali food such as alu-vorta, Ilish-fry etc.<br />\r\nIts an ancient festival of bangladesh.', 'images/editorial/12Bengali new year.png', '2017-04-28 18:20:32'),
(2, 'Bangladesh executes Islamist for 2004 British envoy attack', 'Bangladesh executes Islamist for 2004 British envoy attack at 12/12/12.', 'images/editorial/13envoy_attack.png', '2017-04-28 18:21:53'),
(3, 'Is Bangladesh winning the war against militants?', 'Is Bangladesh winning the war against militants?', 'images/editorial/14militans.png', '2017-04-28 18:23:27'),
(4, 'Greece farm shooting: Migrants win damages from state', 'Greece farm shooting: Migrants win damages from state', 'images/editorial/15_95397241_migrantworkers.png', '2017-04-28 18:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(500) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `description`, `link`, `type`, `createdat`) VALUES
(1, 'Mustafijur Rahman, a Bangladeshi medium fast bowler .', 'images/gallery/16cricket.png', 0, '2017-04-29 17:04:26'),
(2, 'Rampal Heat Electricity Project', 'images/gallery/17Rampal.png', 0, '2017-04-29 17:04:26'),
(3, 'Bus accident !! Bus fall in river from a bridge . ', 'images/gallery/18bangladesh_newspaper.png', 0, '2017-04-29 17:04:26'),
(4, 'Every person of every age want proper justice for the war criminals . ', 'images/gallery/19image_2.png', 0, '2017-04-29 17:04:26'),
(5, 'Hefajot E Islam road show.', 'images/gallery/20image1.png', 0, '2017-04-29 17:04:26'),
(6, 'Bull Fight at village area.', 'images/gallery/21bangladesh2.png', 0, '2017-04-29 17:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `photon`
--

CREATE TABLE `photon` (
  `id` int(10) NOT NULL,
  `count` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photon`
--

INSERT INTO `photon` (`id`, `count`) VALUES
(1, 39);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `type` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `description`, `link`, `type`) VALUES
(1, 'Surfer ', 'images/slider/341.jpg', 0),
(2, 'Buying', 'images/slider/35contentsImage2.jpg', 0),
(3, 'Little cute girl', 'images/slider/363.jpg', 0),
(5, 'Pohela Boishakh 1424', 'images/slider/38IMG_4258.jpg', 0);

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
(33, 1, 'Bangladesh'),
(34, 1, 'India'),
(35, 1, 'West Indies');

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
(6, 'akash@gmail.com', '$2y$10$iusesomecrazystrings2uz/HkvnvHFd41nowL3oLCmiMEM4CLQyW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addimage`
--
ALTER TABLE `addimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `desk`
--
ALTER TABLE `desk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `addimage`
--
ALTER TABLE `addimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `desk`
--
ALTER TABLE `desk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
