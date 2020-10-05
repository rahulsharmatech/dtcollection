-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 03, 2020 at 11:12 AM
-- Server version: 10.3.23-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svttesting_dtcollection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `user_name`, `password`, `email`, `contact`, `address`, `image`, `type`) VALUES
(1, 'Dt Collection', 'dtcollection', '827ccb0eea8a706c4c34a16891f84e7b', 'dtcollection001@gmail.com', '+91 9919255491', 'Fatma Complex Takia Azamgarh, Uttar Pradesh 276001', 'logo.png', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `address`, `phone`) VALUES
(4, 'dtcollection001@gmail.com', 'Azamgarh,Takia,Fatima Complex', '9919255491,7080618521');

-- --------------------------------------------------------

--
-- Table structure for table `home_gallery`
--

CREATE TABLE `home_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_gallery`
--

INSERT INTO `home_gallery` (`id`, `title`, `image`) VALUES
(1, 'Polo T-Shirt', 'polo-shirt-2.png'),
(2, 'Lowers', 't-shirt-1.png'),
(3, 'Polo T-Shirt', 'polo-shirt-1.png'),
(4, 'Polo T-Shirt', 'polo-shirt4.png'),
(5, 'Trousers', 'polo-shirt5.png'),
(6, 'Shirt', 'polo-shirt-6.png'),
(11, 'sfgsjfsh', '3.jpeg'),
(13, 'T-shirts', 'EICQ1656.JPG'),
(14, 'Latest Shirt', 'testimonial-img-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `offer` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` varchar(500) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `offer`, `title`, `content`, `image`) VALUES
(4, 'best product are here', 'Best Product is here ', 'Awesome Products are here ', 't_back.jpeg'),
(5, '75% off ', 'Great Deals', 'Awesome Products', 'banner6.jpg'),
(7, '40% off on the best trasousers', 'Best Collection Of trasousers', 'Soft Silky and regular fit trasousers are here..!', 'banner3.png');

-- --------------------------------------------------------

--
-- Table structure for table `latest_banner`
--

CREATE TABLE `latest_banner` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(100) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `pname` varchar(300) NOT NULL,
  `name` varchar(400) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `email` varchar(600) NOT NULL,
  `payment_mode` varchar(500) NOT NULL,
  `payment_id` varchar(400) NOT NULL,
  `pay_pic` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `qty`, `pname`, `name`, `phone`, `email`, `payment_mode`, `payment_id`, `pay_pic`, `address`) VALUES
(44, 18, '1', 'Buy PP men shirts men Line', 'Sandra', '887884730', 'bilalkhan73789786@gmail.com', 'googlepay', '231545645', 'deal.jpg', 'bhopal'),
(45, 15, '3', 'Handly Regular men Fit', 'cvbcvbn', '7897916657', 'rahul.techstone@gmail.com', 'phonepe', 'cvnvbnvbnvbnvbnvbnvbn', 'glass11.jpg', 'vbnvbnvbn');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `mrp` varchar(500) NOT NULL,
  `sale_price` varchar(600) NOT NULL,
  `category` varchar(300) NOT NULL,
  `features` varchar(400) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `title`, `description`, `mrp`, `sale_price`, `category`, `features`, `image`) VALUES
(2, 'Awesome T-shirts', 'this is an awesome t-shirts', '500', '300', 't-shirts', 'Best Product In the city. Latest Product in the city.', 'polo-shirt-.png'),
(5, 'Best Trousers In the few little Price', 'An awesome product ', '600', '400', 'trasousers', 'the best product at this price buy now  ', 'polo-shirt-5.png'),
(13, 'Latest Jeans ', 'Best Statual jeans in our city.', '500', '250', 'jeans', 'Best Product Ever.', 'jeans.jpg'),
(14, 'Level colour Block Men Hooded', 'Best t-shirt in this price range', '460', '250', 'tshirts', 'Best t-shirts', 'tshirt1.jpg'),
(15, 'Handly Regular men Fit', 'Best T-shirt in handly regular men fit t-shirt', '299', '200', 'tshirts', 'Handly Regular fit men Tshirts .With Best Clothes ', 'tshirt2.jpg'),
(16, 'Ajile Men Printed T-shirts', 'Best T-shirts In the Printed Category', '298', '195', 'tshirts', 'Best T-shirts In the Printed Category', 'tshirt3.jpg'),
(17, 'Buy PP Men shirt  with dots', 'Best Shirts In this Price For The mens.', '498', '430', 'shirts', 'Best Shirts in this price', 'shirt1.jpg'),
(18, 'Buy PP men shirts men Line', 'Best Shirts in this price.', '600', '300', 'shirts', 'Best Shirts In this Price', 'shirt2.jpg'),
(19, 'New regular fit shirts for men', 'Best shirts in this price are available here.', '650', '610', 'shirts', 'Best Shirts in this Price are available here. Regular fit shirts.', 'shirt3.jpg'),
(20, 'Superb Regular Fir shirts ', 'Best Regular fit shirts are here grab it now.', '670', '610', 'shirts', 'Best Regular fit shirts are here grab it now.', 'shirt4.jpg'),
(21, 'Excellent Shirts in the minimum price. ', 'Regular fit shirt with pure cotton.', '700', '630', 'shirts', 'Best Shirts In this price', 'shirt5.jpg'),
(22, 'Men blue Skinny Fit Mid Rise Mildly Jeans', 'Awesome Product Of our collection.', '675', '600', 'jeans', 'Awesome Product Of our collection.Best Product In this price great and awesome product.', 'jeans11.jpg'),
(23, 'Bare Denim Casual Slim Fit light Blue Jeans.', 'Best Product in this price range in our city grab it now.', '600', '430', 'jeans', 'Best Product in this price range in our city grab it now.', 'jeans22.jpg'),
(24, 'Men Blue Skinny Fit Mid Rise Highly Distressed Jeans', 'Best Product in this price range are here.', '1100', '999', 'jeans', 'Best Product in this price range are here.', 'jeans33.jpg'),
(25, 'Locomotive Men Blue Tapered Fit Mid-rise', 'Excellent product are here grab it now...', '924', '900', 'jeans', 'Best Quality Jeans in this price buy it now.', 'jeans44.jpg'),
(26, 'Men Blue Tapered fit jeans                                                       ', 'Best men blue tapered jeans for the men in this price buy it now.', '600', '530', 'jeans', 'Best jeans ever.', 'jeans55.jpg'),
(27, 'Dt collection Best Trasousers', 'Best Dt collection trasousers are here.', '900', '777', 'trasousers', 'Best Dt collection trasousers are here.', 'trasouser1.jpg'),
(28, 'Dt collection Dark Grey Trasouser', 'Best Dark Grey Trasousers', '999', '777', 'trasousers', 'Best Trasousers are here.', 'trasouser2.jpg'),
(29, 'Totally Fit trousers are here..', 'Totally Fit trousers are here buy now.', '1000', '899', 'trasousers', 'Totally Fit trousers are here buy now.This is a awesome product', 'trasouser3.jpg'),
(30, 'Great Deal for Trasousers', 'Awesome Trasousers are here buy now..', '1200', '899', 'trasousers', 'Awesome Trasousers are here buy now.Grab it now.', 'trasouser4.jpg'),
(31, 'Awesome Trousers.', 'Here is the Awesome trousers Collection.', '1300', '1130', 'trasousers', 'Here is the Awesome trousers Collection.', 'trasouser5.jpg'),
(32, 'Offer Offer Offer..!', 'Great deal of trousers are here grab it now..', '1300', '1230', 'trasousers', 'Great deal of trousers are here grab it now..', 'trasouser6.jpg'),
(33, 'Great Deals Of T-shirts', 'Great deals of t-shirts are here...', '600', '400', 'tshirts', 'Great deals of t-shirts are here.with pure cotton', 'tiss.jpg'),
(34, '  Cotton full Sleeve T-shirts                            ', 'Pure cotton t-shirts for men', '440', '390', 'tshirts', 'Great Deals Ever ', 'tiss2.jpg'),
(35, 'Awesome T-shirts Collections are here.', 'Awesome T-shirts Collections are here Buy now hurry up.', '330', '290', 'tshirts', 'Awesome T-shirts Collections are here Buy now hurry up.', 'tiss3.jpg'),
(36, 'Awesome T-shirts with pure cotton.', 'Great t-shirts are here grab it now..!', '600', '480', 'tshirts', 'Super Soft T-shirts Are Here...', 'tiss4.jpg'),
(37, 'Awesome t-shirts in reasonable price', 'Best t-shirts are here', '600', '330', 'tshirts', 'best t-shirts', 'banner8.jpg'),
(38, 'tshirt ', 'best t-shirt', '500', '300', 'tshirts', 'cbcvbcb', 'tiss2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `image`, `content`, `name`) VALUES
(1, 'testimonial-img-2.jpg', 'Awesome Products Are Here', 'Jannat'),
(2, 'WhatsApp Image 2020-03-21 at 6.00.57 AM (2).jpeg', 'Dt collection Have Awesome Collection of products...', 'What a deal from Dt Collection'),
(3, 'dummy.jpg', 'Dt collection has a great and latest collection of clothes I got my surprise box What are you waiting for  buy now.', 'Bilaal Khan'),
(4, 'dummy.jpg', 'Best Collection of clothes are here grab the offers..!', 'Safat Tigala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_gallery`
--
ALTER TABLE `home_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_banner`
--
ALTER TABLE `latest_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_gallery`
--
ALTER TABLE `home_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `latest_banner`
--
ALTER TABLE `latest_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
