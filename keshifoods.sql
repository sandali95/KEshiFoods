-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 22, 2017 at 03:59 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

DROP TABLE IF EXISTS `advanced_payment`;
CREATE TABLE IF NOT EXISTS `advanced_payment` (
  `emp_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`emp_id`,`month`)
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

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bill_no` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `customer_name` varchar(45) DEFAULT NULL,
  `total_val` int(11) DEFAULT NULL,
  PRIMARY KEY (`bill_no`)
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

DROP TABLE IF EXISTS `bill_item`;
CREATE TABLE IF NOT EXISTS `bill_item` (
  `bill_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `total_val_perItem` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bill_no`,`product_id`),
  KEY `bill_item_product_No_idx` (`product_id`)
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

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `emp_gender` varchar(11) NOT NULL,
  `emp_address` varchar(100) DEFAULT NULL,
  `emp_contact_num` int(11) DEFAULT NULL,
  `emp_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_gender`, `emp_address`, `emp_contact_num`, `emp_type`) VALUES
(1, 'Shaminda', 'Male', 'Godakawela', 771114723, 'Manager'),
(1000, 'Hewawissa', '0', 'Gampaha', 332222222, 'Manager'),
(1001, 'Kamal', '0', 'Colombo', 712222222, 'worker');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `item_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
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

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `stock_id` int(10) NOT NULL,
  `invoice_num` varchar(25) NOT NULL,
  `invoice_date` date NOT NULL,
  `item_quantity` float NOT NULL,
  PRIMARY KEY (`invoice_num`)
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

DROP TABLE IF EXISTS `salary_payment`;
CREATE TABLE IF NOT EXISTS `salary_payment` (
  `emp_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`,`month`)
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

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `stock_id` int(11) NOT NULL,
  `stock_name` varchar(45) DEFAULT NULL,
  `tot_quantity` int(11) NOT NULL,
  PRIMARY KEY (`stock_id`)
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

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `userpass` varchar(45) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `userpass`) VALUES
('admin@keshi', 'admin@keshi');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
