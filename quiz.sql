-- phpMyAdmin SQL Dump
-- version 2.10.0.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 27, 2011 at 01:05 AM
-- Server version: 5.0.37
-- PHP Version: 5.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `quiz`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `email` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(30) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES ('awsafrahman@google.com', 'awsaf111');

-- --------------------------------------------------------

-- 
-- Table structure for table `css_result`
-- 

CREATE TABLE `css_result` (
  `ques_no` int(11) NOT NULL,
  `ans` varchar(10) NOT NULL,
  PRIMARY KEY  (`ques_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `css_result`
-- 

INSERT INTO `css_result` VALUES (1, 'b');
INSERT INTO `css_result` VALUES (2, 'b');
INSERT INTO `css_result` VALUES (3, 'c');
INSERT INTO `css_result` VALUES (4, 'd');
INSERT INTO `css_result` VALUES (5, 'b');
INSERT INTO `css_result` VALUES (6, 'd');
INSERT INTO `css_result` VALUES (7, 'b');
INSERT INTO `css_result` VALUES (8, 'd');
INSERT INTO `css_result` VALUES (9, 'a');
INSERT INTO `css_result` VALUES (10, 'b');
INSERT INTO `css_result` VALUES (11, 'd');
INSERT INTO `css_result` VALUES (12, 'd');
INSERT INTO `css_result` VALUES (13, 'd');
INSERT INTO `css_result` VALUES (14, 'b');
INSERT INTO `css_result` VALUES (15, 'd');
INSERT INTO `css_result` VALUES (16, 'd');
INSERT INTO `css_result` VALUES (17, 'a');
INSERT INTO `css_result` VALUES (18, 'b');
INSERT INTO `css_result` VALUES (19, 'c');
INSERT INTO `css_result` VALUES (20, 'd');

-- --------------------------------------------------------

-- 
-- Table structure for table `html_result`
-- 

CREATE TABLE `html_result` (
  `ques_no` int(11) NOT NULL,
  `ans` varchar(10) NOT NULL,
  PRIMARY KEY  (`ques_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `html_result`
-- 

INSERT INTO `html_result` VALUES (1, 'c');
INSERT INTO `html_result` VALUES (2, 'b');
INSERT INTO `html_result` VALUES (3, 'c');
INSERT INTO `html_result` VALUES (4, 'a');
INSERT INTO `html_result` VALUES (5, 'b');
INSERT INTO `html_result` VALUES (6, 'a');
INSERT INTO `html_result` VALUES (7, 'c');
INSERT INTO `html_result` VALUES (8, 'a');
INSERT INTO `html_result` VALUES (9, 'a');
INSERT INTO `html_result` VALUES (10, 'c');
INSERT INTO `html_result` VALUES (11, 'c');
INSERT INTO `html_result` VALUES (12, 'b');
INSERT INTO `html_result` VALUES (13, 'c');
INSERT INTO `html_result` VALUES (14, 'b');
INSERT INTO `html_result` VALUES (15, 'b');
INSERT INTO `html_result` VALUES (16, 'a');
INSERT INTO `html_result` VALUES (17, 'a');
INSERT INTO `html_result` VALUES (18, 'b');
INSERT INTO `html_result` VALUES (19, 'c');
INSERT INTO `html_result` VALUES (20, 'b');


-- --------------------------------------------------------

-- 
-- Table structure for table `info`
-- 

CREATE TABLE `info` (
  `name` varchar(30) collate latin1_general_ci NOT NULL,
  `email` varchar(30) collate latin1_general_ci NOT NULL,
  `course` varchar(30) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `info`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `js_result`
-- 

CREATE TABLE `js_result` (
  `ques_no` int(11) NOT NULL,
  `ans` varchar(10) NOT NULL,
  PRIMARY KEY  (`ques_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `js_result`
-- 

INSERT INTO `js_result` VALUES (1, 'b');
INSERT INTO `js_result` VALUES (2, 'b');
INSERT INTO `js_result` VALUES (3, 'a');
INSERT INTO `js_result` VALUES (4, 'c');
INSERT INTO `js_result` VALUES (5, 'b');

-- --------------------------------------------------------

-- 
-- Table structure for table `php_result`
-- 

CREATE TABLE `php_result` (
  `ques_no` int(11) NOT NULL,
  `ans` varchar(10) NOT NULL,
  PRIMARY KEY  (`ques_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `php_result`
-- 

INSERT INTO `php_result` VALUES (1, 'a');
INSERT INTO `php_result` VALUES (2, 'a');
INSERT INTO `php_result` VALUES (3, 'a');
INSERT INTO `php_result` VALUES (4, 'a');
INSERT INTO `php_result` VALUES (5, 'b');

-- --------------------------------------------------------

-- 
-- Table structure for table `record`
-- 

CREATE TABLE `record` (
  `name` varchar(30) collate latin1_general_ci NOT NULL,
  `email` varchar(30) collate latin1_general_ci NOT NULL,
  `course` varchar(30) collate latin1_general_ci NOT NULL,
  `score` int(30) NOT NULL,
  `date` varchar(30) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `record`
-- 

INSERT INTO `record` VALUES ('awsaf', 'asd@asd.com', 'html', 80, '27-12-11');
INSERT INTO `record` VALUES ('munrat', 'afif@yahoo.com', 'html', 100, '26-12-11');
INSERT INTO `record` VALUES ('sajid', 'arian@gmail.com', 'php', 40, '27-12-11');
