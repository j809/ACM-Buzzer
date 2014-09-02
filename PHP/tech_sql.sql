-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2014 at 09:50 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ACM_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `techiq`
--

CREATE TABLE `techiq` (
  `no` int(10) NOT NULL,
  `name` varchar(100) default NULL,
  `score` int(10) default '0',
  PRIMARY KEY  (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `techiq`
--

INSERT INTO `techiq` (`no`, `name`, `score`) VALUES
(1, 'team a', 10),
(2, 'team b', 10),
(3, 'team c', 0),
(4, 'team d', 10),
(5, 'team e', 10);
