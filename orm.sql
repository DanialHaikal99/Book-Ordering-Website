-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 08:06 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orm`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(7, 'cimb_click_apps.jpg', 110550, 2),
(8, '11.fantastic.jpg', 320570, 0),
(9, '12.romance2.jpg', 72958, 1),
(10, 'danial.zip', 14009, 0),
(11, '12.romance2 (1).jpg', 72958, 0),
(12, '12.romance2.jpg', 72958, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orm_book`
--

CREATE TABLE `orm_book` (
  `book_id` bigint(20) NOT NULL,
  `book_title` varchar(60) NOT NULL,
  `book_price` decimal(20,0) NOT NULL,
  `book_description` varchar(1000) NOT NULL,
  `book_author` varchar(60) NOT NULL,
  `book_image` text NOT NULL,
  `book_genre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orm_book`
--

INSERT INTO `orm_book` (`book_id`, `book_title`, `book_price`, `book_description`, `book_author`, `book_image`, `book_genre`) VALUES
(22, 'Romance II', '15', 'Danial Haikal, a programmer made a romance book. Shocking.', 'Danial', 'img/12.romance2.jpg', 'romance'),
(23, 'Percy Jackson ', '10', '        War in Mount Olympus. Check. Gods Fall. Check. What more can you ask?', 'Rick Riordan', 'img/1.thunder.jpg', 'fantasy'),
(24, '300 : The War of 3000 B.C', '20', ' From Frank Miller, an award winning comic book writer, comes a story of leonidas and his triumph.', 'Frank Miller', 'img/2.300.jpg', 'fantasy'),
(25, 'The Beauty That Remains', '20', 'A story of a heartfelt student struggling in college. Love breaks through, or does it?', 'Ashley Woodfolk', 'img/3.beauty.jpg', 'fiction'),
(26, 'The Catcher In The Rye', '30', 'A powerful of a story of a woman breaking its chains from a abusing husband.', 'Tom Kang', 'img/5.rye.jpg', 'fiction'),
(27, 'The Fault In Our Stars', '30', 'Sickness is pain and given, until one day Amy founds her truly love. Will he love her back?', 'John Green', 'img/8.fault.jpg', 'romance');

-- --------------------------------------------------------

--
-- Table structure for table `orm_customer`
--

CREATE TABLE `orm_customer` (
  `customer_id` bigint(20) NOT NULL,
  `customer_username` varchar(60) NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orm_customer`
--

INSERT INTO `orm_customer` (`customer_id`, `customer_username`, `customer_name`, `customer_address`, `customer_phone`, `customer_email`) VALUES
(15, 'henry124', 'Law JunJun', 'Tiga 9139139193139913913sdfushd', '013-2439-266', 'henryhack@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `orm_feedback`
--

CREATE TABLE `orm_feedback` (
  `feedback_id` bigint(20) NOT NULL,
  `feedback_name` varchar(500) NOT NULL,
  `feedback_subject` varchar(500) NOT NULL,
  `feedback_message` varchar(3000) NOT NULL,
  `feedback_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orm_feedback`
--

INSERT INTO `orm_feedback` (`feedback_id`, `feedback_name`, `feedback_subject`, `feedback_message`, `feedback_email`) VALUES
(4, 'Henry', 'Book havent arrive', 'Book havent arrive for two days', 'danial@gmail.com'),
(5, 'Danial Henry', 'Book didnt arrive', 'book didnt arrive', 'danialhaikal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orm_order`
--

CREATE TABLE `orm_order` (
  `order_id` bigint(20) NOT NULL,
  `order_name` varchar(500) NOT NULL,
  `order_email` varchar(500) NOT NULL,
  `order_address` varchar(1000) NOT NULL,
  `order_phone` varchar(500) NOT NULL,
  `order_bank` varchar(500) NOT NULL,
  `order_bankname` varchar(500) NOT NULL,
  `order_book` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orm_order`
--

INSERT INTO `orm_order` (`order_id`, `order_name`, `order_email`, `order_address`, `order_phone`, `order_bank`, `order_bankname`, `order_book`) VALUES
(4, 'Danial Henry', 'danialhenry@gmail.com', 'Boleh 9139139193139913913sdfushd', '012-2639-265', '179972141979', 'Maybank', '3 walking dead, 3 fault in our stars'),
(8, 'Law Junwei', 'henryhacker@gmail.com', 'No 9139139193139913913sdfushd', '013-2439-265', '169972141979', 'Cimb', '2 walking dead, 3 fault in our stars'),
(9, 'Danial Henry', 'danial@gmail.com', 'No 9139139193139913913sdfushd', '012-2323-232', '169972141979', 'Cimb', '2 walking dead, 3 fault in our stars');

-- --------------------------------------------------------

--
-- Table structure for table `orm_user`
--

CREATE TABLE `orm_user` (
  `user_id` bigint(20) NOT NULL,
  `user_username` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orm_user`
--

INSERT INTO `orm_user` (`user_id`, `user_username`, `user_password`, `user_type`) VALUES
(8, 'admin', '3051999', 'admin'),
(15, 'henry124', '124', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orm_book`
--
ALTER TABLE `orm_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `orm_customer`
--
ALTER TABLE `orm_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orm_feedback`
--
ALTER TABLE `orm_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `orm_order`
--
ALTER TABLE `orm_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orm_user`
--
ALTER TABLE `orm_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orm_book`
--
ALTER TABLE `orm_book`
  MODIFY `book_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orm_customer`
--
ALTER TABLE `orm_customer`
  MODIFY `customer_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orm_feedback`
--
ALTER TABLE `orm_feedback`
  MODIFY `feedback_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orm_order`
--
ALTER TABLE `orm_order`
  MODIFY `order_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orm_user`
--
ALTER TABLE `orm_user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
