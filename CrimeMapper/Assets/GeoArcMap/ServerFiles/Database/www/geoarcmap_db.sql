-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: mysql1.paris1.alwaysdata.com
-- Generation Time: Jan 02, 2017 at 04:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geoarcmap_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `login_name` varchar(64) NOT NULL,
  `login_pass` varchar(64) NOT NULL,
  `name` varchar(64) CHARACTER SET utf16 NOT NULL,
  `organization` varchar(128) CHARACTER SET utf16 NOT NULL,
  `rank` enum('UNKNOWN','ASSISTANT','EMPLOYEE','DIRECTOR') NOT NULL,
  `type` enum('UNKNOWN','SERVICE_PROVIDER','CORPORATE','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `date_created`, `login_name`, `login_pass`, `name`, `organization`, `rank`, `type`) VALUES
(1, '2016-11-20', 'sbillault', 'sbillault.geoarcmap.2016', 'Serge Billault', 'Indiana Jones Fundation', 'EMPLOYEE', 'CORPORATE'),
(2, '2016-11-20', 'fmaestre', 'fmaestre', 'Frank Maestre', 'Indiana Jones Fundation', 'DIRECTOR', 'CORPORATE');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_found` date NOT NULL,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dsc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `alt` float NOT NULL,
  `pic` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `site_id`, `date_created`, `date_found`, `name`, `dsc`, `lat`, `lng`, `alt`, `pic`) VALUES
(-2032438669, 449928427, '2016-12-16', '2016-12-20', 'Marco Polo', 'Boat lover', 40.8235, -8.27454, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-1951583605, -690055404, '2016-12-16', '2017-01-02', 'Tumb 002', '', -33.201, 19.5615, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-1825484322, -977661270, '2016-12-16', '2016-12-17', 'Cairo', 'Endroit momifiant', 30.04, 31.23, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-1189152073, -690055404, '2016-12-16', '2017-01-02', 'Tumb 003', '', -33.3264, 19.455, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-1121372120, -690055404, '2016-12-16', '2017-01-02', 'Ancient tumbs', 'Burried 200 feet under', -34.1254, 19.5958, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-1081181518, 683164552, '2016-12-16', '2016-12-16', 'Archimedes', 'Killed by a roman soldier before he could invent the computer', 41.0714, 15.3483, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-874688093, -977661270, '2016-12-16', '2016-12-16', 'Embouchure du Nil', 'Ca t en bouche un coin', 30.6092, 30.9885, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-857130750, 999511151, '2016-12-16', '2016-12-17', '221 B Baker Street', 'Sherlock home', 51.917, -1.81961, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-847835301, -690055404, '2016-12-16', '2016-12-16', 'Encore un test', 'Encore un test', -28.8996, 19.6359, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-847256848, -790575242, '2016-12-20', '2016-12-20', 'Paris', 'Capitale de la France', 48.859, 2.34673, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-328739069, 683164552, '2016-12-16', '2016-12-16', 'Botte italienne', 'hmmmmm', 39.6649, 16.1124, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-307757316, 0, '2016-12-19', '2016-12-25', 'L''accent', 'l''espace d''un instant, j''ai cru que je ne trouverais jamais jusqu''à ce que je me rappele de mysqli_real_escape_string', -9.99823, 2.90277, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(-145866135, -977661270, '2016-12-16', '2016-12-23', 'Nil', 'Bon pour se beigner si on aime les crocodiles', 26.8845, 31.4883, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(153038815, 0, '2016-12-19', '2016-12-25', 'Holé', 'Tout plein d''accents partout comme au mois d''Août', -12.6312, 0.989615, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(266178240, -790575242, '2016-12-16', '2016-12-17', 'Corse', 'Pays des vendettas explosives', 42.3402, 9.10188, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(1046264067, -790575242, '2016-12-16', '2016-12-16', 'Bretagne', 'Region des chapeaux ronds', 48.3491, -2.96832, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(1120557141, -690055404, '2016-12-16', '2017-01-02', 'Tumb 001', '', -33.4876, 20.9429, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(1277420719, 449928427, '2016-12-16', '2016-12-20', 'Frontière', 'Taxes', 42.2939, -0.001312, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg'),
(2109595146, 449928427, '2016-12-16', '2016-12-25', 'Zorro', 'Inventeur du Z Buffer', 39.4635, -5.42938, 0, 'Spraycan-Rodeo-Girl-by-Banksy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_funded` date NOT NULL,
  `name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dsc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `date_created`, `date_funded`, `name`, `dsc`) VALUES
(1, '2016-11-20', '2001-07-04', 'Indiana Jones Fundation', 'The goal of the Indiana Jones Fundation is to retrieve the Lost Panties Of Lara Croft by any mean deemed necessary');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_opened` date NOT NULL,
  `date_closed` date NOT NULL,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dsc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `alt` float NOT NULL,
  `pic` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `date_created`, `date_opened`, `date_closed`, `name`, `dsc`, `lat`, `lng`, `alt`, `pic`) VALUES
(-977661270, '2016-12-16', '2016-12-24', '2016-12-24', 'Egypt', 'Pays des pyramides', 26.1985, 28.3307, 0, 'default_site_pic.jpg'),
(-790575242, '2016-12-16', '2016-12-16', '2016-12-16', 'France', 'Pays de nos ancetres Gaulois', 46.4118, 2.8405, 0, 'default_site_pic.jpg'),
(-690055404, '2016-12-16', '2017-01-01', '2017-01-01', 'South Africa EH-247', 'Tumbs discovered recently between 1987 and 2004', -33.483, 19.627, 0, 'default_site_pic.jpg'),
(449928427, '2016-12-16', '2016-12-16', '2016-12-16', 'Spain', 'Hola', 40.8607, -4.20877, 0, 'default_site_pic.jpg'),
(683164552, '2016-12-16', '2016-12-21', '2016-12-21', 'Italy', 'Pays des premiere ministres chaudes', 41.9828, 13.9772, 0, 'default_site_pic.jpg'),
(999511151, '2016-12-16', '2016-12-16', '2016-12-16', 'England', 'The life of Brian', 52.7876, -1.39401, 0, 'default_site_pic.jpg'),
(1787473633, '2016-12-16', '2016-12-16', '2016-12-16', 'Greenwich', 'Prime meridian', 51.4822, -0.005127, 0, 'default_site_pic.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
