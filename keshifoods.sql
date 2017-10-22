-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 08:39 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keshifoods`
--

-- --------------------------------------------------------

--
-- Table structure for table `advanced_payment`
--

CREATE TABLE `advanced_payment` (
  `emp_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advanced_payment`
--

INSERT INTO `advanced_payment` (`emp_id`, `month`, `date`, `amount`) VALUES
(1000, 'April', '2017-05-28', 2800),
(1000, 'June', '2017-06-02', 8000),
(1000, 'May', '2017-05-31', 5000),
(1001, 'June', '2017-06-02', 2000),
(1001, 'May', '2017-05-31', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_no` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `customer_name` varchar(45) DEFAULT NULL,
  `total_val` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_no`, `date`, `customer_name`, `total_val`) VALUES
(1250, '2017-06-15', 'Nihal Super', 6100),
(1500, '2017-05-30', 'Testing Customer', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `bill_item`
--

CREATE TABLE `bill_item` (
  `bill_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `total_val_perItem` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_item`
--

INSERT INTO `bill_item` (`bill_no`, `product_id`, `qty`, `unit_price`, `total_val_perItem`) VALUES
(1250, 100, 10, 150, '1500'),
(1250, 101, 20, 80, '1600'),
(1250, 106, 20, 100, '2000'),
(1250, 107, 20, 50, '1000'),
(1500, 100, 10, 1015, '10150'),
(1500, 101, 10, 1010, '10100'),
(1500, 102, 10, 15, '150'),
(1500, 109, 15, 10, '150');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `emp_address` varchar(100) DEFAULT NULL,
  `emp_contact_num` int(11) DEFAULT NULL,
  `emp_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_address`, `emp_contact_num`, `emp_type`) VALUES
(1000, 'Hewawissa', 'Gampaha', 332222222, 'Manager'),
(1001, 'Kamal', 'Colombo', 712222222, 'worker');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `item_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_name`, `item_price`) VALUES
(100, 'Mashmellows 200g', NULL),
(101, 'Mashmellows 100g', NULL),
(102, 'Mashmellows (Bottle)', NULL),
(103, 'Three Color Jujubes (150g)', NULL),
(104, 'Three Color Jujubes (100g)', NULL),
(105, 'Jujubes (150g)', NULL),
(106, 'Jujubes (100g)', NULL),
(107, 'Jujubes (50g)', NULL),
(108, 'Jujubes (Bottlle)', NULL),
(109, 'Peni Kaju (Bottle)', 0),
(110, 'Pani Kaju (9pcs)', NULL),
(111, 'Rulan (Bottle)', NULL),
(112, 'Rulan (Slabs)', NULL),
(113, 'KiriTofee (Bottle)', NULL),
(114, 'KiriTofee ( Packet)', NULL),
(115, 'eee', 44);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `stock_id` int(10) NOT NULL,
  `invoice_num` varchar(25) NOT NULL,
  `invoice_date` date NOT NULL,
  `item_quantity` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`stock_id`, `invoice_num`, `invoice_date`, `item_quantity`) VALUES
(1003, '12345', '0000-00-00', 6),
(1003, '111111', '0000-00-00', 2),
(1002, '23464', '0000-00-00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `salary_payment`
--

CREATE TABLE `salary_payment` (
  `emp_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_payment`
--

INSERT INTO `salary_payment` (`emp_id`, `month`, `date`, `amount`) VALUES
(1000, 'January', '2017-01-10', 50000),
(1000, 'May', '2017-06-30', 50000),
(1001, 'January', '2017-01-30', 20000),
(1001, 'May', '2017-06-30', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `stock_name` varchar(45) DEFAULT NULL,
  `tot_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `stock_name`, `tot_quantity`) VALUES
(1001, 'Flour', 0),
(1002, 'Bread', 3),
(1003, 'Sugar', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `userpass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `userpass`) VALUES
('admin@keshi', 'admin@keshi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advanced_payment`
--
ALTER TABLE `advanced_payment`
  ADD PRIMARY KEY (`emp_id`,`month`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `bill_item`
--
ALTER TABLE `bill_item`
  ADD PRIMARY KEY (`bill_no`,`product_id`),
  ADD KEY `bill_item_product_No_idx` (`product_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`invoice_num`);

--
-- Indexes for table `salary_payment`
--
ALTER TABLE `salary_payment`
  ADD PRIMARY KEY (`emp_id`,`month`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advanced_payment`
--
ALTER TABLE `advanced_payment`
  ADD CONSTRAINT `advaced_pay` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill_item`
--
ALTER TABLE `bill_item`
  ADD CONSTRAINT `BillItem_bill_no` FOREIGN KEY (`bill_no`) REFERENCES `bill` (`bill_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `BillItem_product_no` FOREIGN KEY (`product_id`) REFERENCES `product` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary_payment`
--
ALTER TABLE `salary_payment`
  ADD CONSTRAINT `sal_pay_emp` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
