-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 05:44 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `site_about`
--

CREATE TABLE IF NOT EXISTS `site_about` (
  `id` int(11) NOT NULL,
  `short_about` varchar(1300) NOT NULL,
  `innovation` varchar(2500) NOT NULL,
  `market` varchar(2500) NOT NULL,
  `full_about` varchar(3000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_about`
--

INSERT INTO `site_about` (`id`, `short_about`, `innovation`, `market`, `full_about`) VALUES
(1, '<p>We are able distributors of food products for the retail, industrial and food service markets<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n', '<p>At Lumidek Associates Ltd., we combine market knowledge, consumer insights and customer needs to create new product opportunities. Based on our technical capabilities, we work closely with our manufacturers to fine tune and tailor trend towards product that align with our customer&#39;s growth strategies. Not only do we distribute the products themselves, but we also provide the insights that allow our customers to tell the stories behind them. We source, negotiate and distribute to markets all over Nigeria.</p>\r\n\r\n<p>In a bid to create the largest and most diverse distribution base in our industry, we hope to expand the Nigeria and Africa markets. As a counter-seasoned distributor, we are able to provide supply solutions to the retail, industrial and food service markets year round. We operate an assortment of matchmaking and conduct extensive business partnerships in Europe.<br />\r\nMoreso, our partnerships across Europe give us access to products not readily available in other regions. Diversification of origin lowers risk and ensures reliable delivery regardless of regional yields.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n', '<p>With more than 4 years in domestic food distribution in Nigeria, Lumidek Associates leverages our expertise to provide our foodservice customers with safe, high quality products paired with reliable service and delivery. Our diversification of origin strategy guards against regional crop failures while ensuring counter seasonal availability.</p>\r\n\r\n<p>Long established in Southern Nigeria, we are well positioned to serve the foods needs of Nigeria. As demand increases and governments look for new supply sources, we stand ready to serve.</p>\r\n\r\n<p>With proven quality assurance and safety programs, and a long-established policy of operating in a socially responsible and sustainable manner, Lumidek Associates is the clear choice for modern food service companies. Contact us to learn more.</p>\r\n', '<p>Lumidek Associates Ltd., established in 2014, is a well known ethic food distributor in Nigeria. With previous experience in food technology and research, Lumidek Associates Ltd. is the market leader in serving high quality and health promoting food products across Nigeria. Lumidek Associates foods pride itself on being capable of accommodating and adapting to the ever changing needs of its customers. However, we are committed to expand our distribution pattern and tentacles to other African countries through partnership with local food vendors. As a local supplier, we provide range of products within our supply base across the 36 states in Nigeria, gives us the advantage of staggered growing seasons, geographical diversification and access to reliable supply.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `site_title` varchar(200) NOT NULL,
  `site_keyword` varchar(500) NOT NULL,
  `site_desc` varchar(1000) NOT NULL,
  `google_code` varchar(1000) NOT NULL,
  `site_email` varchar(300) NOT NULL,
  `site_phone` varchar(300) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linkedin` varchar(500) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `site_title`, `site_keyword`, `site_desc`, `google_code`, `site_email`, `site_phone`, `facebook`, `twitter`, `linkedin`, `address`, `city`, `country`) VALUES
(1, 'Lumidek Associates Ltd.', 'Lumidek Associates Ltd.', 'Site', 'Lumidek Associates Ltd., established in 2014, is a well known ethic food distributor in Nigeria. With previous experience in food technology and research, Lumidek Associates Ltd. is the market leader in serving high quality and health promoting food products across Nigeria.', '09tghjpo987hpnjkb', 'info@lumidekassociates.com', '(+234)803 207 1861', 'https://web.facebook.com/Lumidek-Associates-Ltd-248952372579600', 'Nill', '(+234)907 752 4091 ', '142, Iju waterworks road, Agege, Lagos state.', 'Eliozu road, off Airport road, Port Harcourt, Rivers state', 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `position`) VALUES
(4, 'Awolu Faith', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `site_about`
--
ALTER TABLE `site_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `site_about`
--
ALTER TABLE `site_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
