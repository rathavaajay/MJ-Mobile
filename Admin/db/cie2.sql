-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 03, 2022 at 09:19 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `cie2`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `product`
-- 

CREATE TABLE `product` (
  `id` int(11) NOT NULL auto_increment,
  `pro_name` varchar(20) collate latin1_general_ci NOT NULL,
  `pro_price` varchar(20) collate latin1_general_ci NOT NULL,
  `Company` varchar(20) collate latin1_general_ci NOT NULL,
  `Quantity` varchar(20) collate latin1_general_ci NOT NULL,
  `photo` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `product`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `user_detail`
-- 

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `username` varchar(20) collate latin1_general_ci NOT NULL,
  `password` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `user_detail`
-- 

INSERT INTO `user_detail` (`id`, `username`, `password`) VALUES 
(1, 'admin', 'admin');
