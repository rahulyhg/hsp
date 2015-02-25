-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2015 at 12:06 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wohligco_hsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslevel`
--

CREATE TABLE IF NOT EXISTS `accesslevel` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `accesslevel`
--

INSERT INTO `accesslevel` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'Operator'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `amenity`
--

CREATE TABLE IF NOT EXISTS `amenity` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `amenity`
--

INSERT INTO `amenity` (`id`, `name`, `order`) VALUES
(1, 'Bar Available', 1),
(2, 'Happy Hours', 2),
(3, 'Child-Friendly', 3),
(4, 'Live Match Screening On Projector.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `brandcategory`
--

CREATE TABLE IF NOT EXISTS `brandcategory` (
`id` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `brandcategory`
--

INSERT INTO `brandcategory` (`id`, `brand`, `category`) VALUES
(6, 15, 1),
(7, 15, 2),
(8, 15, 3),
(9, 1, 1),
(24, 16, 1),
(25, 16, 2),
(34, 17, 1),
(35, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categoryforbrand`
--

CREATE TABLE IF NOT EXISTS `categoryforbrand` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categoryforbrand`
--

INSERT INTO `categoryforbrand` (`id`, `name`, `order`) VALUES
(1, 'category for brand1', 1),
(2, 'Cat 2', 0),
(3, 'brand category 3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `categoryfordine`
--

CREATE TABLE IF NOT EXISTS `categoryfordine` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categoryfordine`
--

INSERT INTO `categoryfordine` (`id`, `name`, `order`) VALUES
(1, 'Dine cat 1', 1),
(3, 'Dine Category 3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `phone`, `comment`, `timestamp`) VALUES
(1, 'Avinash', 'avinash@wohlig.com', '8989898989', 'Nice Website', '2015-02-23 11:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `title`, `text`, `image`, `date`, `timestamp`) VALUES
(1, 'About Us', 'Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Vivamus gravida aliquet eros.', '', '0000-00-00', '2015-02-23 10:07:54'),
(2, 'ZARA', '', 'block2.jpg', '0000-00-00', '2015-02-23 11:20:12'),
(3, 'Brands', 'Welcome to your High Street Phoenix shopping guide ! At HSP, we have hundreds of brands for every preference and price range, guaranteeing you will find whatever you are looking for.', '', '0000-00-00', '2015-02-23 11:23:52'),
(4, 'VEROMODA', '', 'block3.jpg', '0000-00-00', '2015-02-23 11:24:24'),
(5, 'T.G.I Friday''s', '', 'block4.jpg', '0000-00-00', '2015-02-23 11:25:15'),
(6, 'Unleash your Child''s Inner Artist', 'Register your kids for an exciting art and craft workshop ...', '', '0000-00-00', '2015-02-23 11:26:45'),
(7, 'International Clown Festival', 'The International Clown Festival has been in India for over a month and this seems to be just like the fun event we witnessed in ...', '', '0000-00-00', '2015-02-23 11:27:12'),
(8, 'Shop and Win', 'Grab daily and weekly Prizes too. Shop worth Rs.3000 or above and get a chance to win a trip to the destination ...', '', '0000-00-00', '2015-02-23 11:27:42'),
(9, 'Shop & Win', 'Grab daily and weekly Prizes too. Shop worth Rs.3000 or above and get a chance to win a trip to the destination ...', '', '2015-03-10', '2015-02-25 10:40:11'),
(10, 'Home Banner', '', 'main_banner6.jpg', '0000-00-00', '2015-02-24 12:58:33'),
(11, 'demo', 'demo', '', '0000-00-00', '2015-02-24 12:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `configlogo`
--

CREATE TABLE IF NOT EXISTS `configlogo` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `configlogo`
--

INSERT INTO `configlogo` (`id`, `title`, `logo`, `timestamp`) VALUES
(1, 'Adidas', 'brand1.png', '2015-02-23 11:08:31'),
(2, 'demo', 'brand2.png', '2015-02-23 11:03:17'),
(3, 'pixolo', 'pixolo.png', '2015-02-25 11:04:57'),
(4, 'wohlig', 'wohlig.png', '2015-02-25 11:04:57'),
(5, 'tushar', 'tushar.png', '2015-02-25 11:06:04'),
(6, 'cs', 'cs.png', '2015-02-25 11:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `configvideo`
--

CREATE TABLE IF NOT EXISTS `configvideo` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `configvideo`
--

INSERT INTO `configvideo` (`id`, `title`, `video`, `timestamp`) VALUES
(1, 'Home Page Video', 'video1.mp4', '2015-02-23 10:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `dineamenity`
--

CREATE TABLE IF NOT EXISTS `dineamenity` (
`id` int(11) NOT NULL,
  `dine` int(11) NOT NULL,
  `amenity` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dineamenity`
--

INSERT INTO `dineamenity` (`id`, `dine`, `amenity`) VALUES
(4, 5, 1),
(5, 5, 3),
(6, 6, 2),
(7, 6, 3),
(9, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dinecategory`
--

CREATE TABLE IF NOT EXISTS `dinecategory` (
`id` int(11) NOT NULL,
  `dine` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `dinecategory`
--

INSERT INTO `dinecategory` (`id`, `dine`, `category`) VALUES
(12, 5, 1),
(13, 5, 3),
(14, 6, 1),
(15, 6, 3),
(17, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hsp_brand`
--

CREATE TABLE IF NOT EXISTS `hsp_brand` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `isfeatured` varchar(255) NOT NULL,
  `isnew` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `json` text NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `specialoffer` text NOT NULL,
  `specialofferimage` varchar(255) NOT NULL,
  `stars` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `hsp_brand`
--

INSERT INTO `hsp_brand` (`id`, `name`, `hours`, `location`, `isfeatured`, `isnew`, `description`, `logo`, `json`, `contactno`, `email`, `facebook`, `twitter`, `instagram`, `googleplus`, `image`, `specialoffer`, `specialofferimage`, `stars`) VALUES
(1, 'Adidas', '9', 'Thane', '1', '1', 'Adidas is the best brand.', 'nav2.png', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"2"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"2"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"2"}]', '8989878788', 'adidas@gmail.com', '2', '2', '2', '2', '', '', '', ''),
(13, 'asc', '2', '2', '1', '1', '2', 'Nature_at_its_Best!!!.png', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"2"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"2"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"2"}]', '', '', '', '', '', '', '', '', '', ''),
(14, '2', '2', '2', '1', '1', '2', '', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"2"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"2"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"2"}]', '', '', '', '', '', '', '', '', '', ''),
(15, 'demo', '10', '2', '1', '1', 'ajsnxaksj', 'event488.jpg', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"2"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"iuniu"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"kjnj"}]', '232323', 'EricVan@wohlig.com', '', '', '', '', '', '', '', ''),
(16, '8', '8', '8', '1', '1', '8', 'block42.jpg', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"8"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"8"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"8"}]', '8', '8', '8', '8', '8', '8', 'main_banner4.jpg', '', '', ''),
(17, '5', '5', '5', '1', '1', '5', 'block21.jpg', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"bhb"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"m j"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"iuniu"}]', '5', '5', '5', '5', '5', '5', 'main_banner_old.jpg', 'jsndck', 'main_banner_m3.jpg', ''),
(18, 'new brand', '10-12', 'gr floor', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hsp_brandcategory`
--

CREATE TABLE IF NOT EXISTS `hsp_brandcategory` (
`id` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hsp_brandcategory`
--

INSERT INTO `hsp_brandcategory` (`id`, `brand`, `name`, `order`) VALUES
(1, 1, 'demo', 1),
(2, 2, 'demo2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hsp_branddeal`
--

CREATE TABLE IF NOT EXISTS `hsp_branddeal` (
`id` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `description` text NOT NULL,
  `json` text NOT NULL,
  `isfeatured` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hsp_branddeal`
--

INSERT INTO `hsp_branddeal` (`id`, `brand`, `description`, `json`, `isfeatured`) VALUES
(1, 1, 'desc', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"asccsa"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"asca"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"asc"}]', 1),
(2, 2, 'ddd', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"asccsa"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"asca"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"asc"}]', 1),
(4, 1, 'kajka', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"asccsa"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"asca"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"asc"}]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hsp_dine`
--

CREATE TABLE IF NOT EXISTS `hsp_dine` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `isfeatured` varchar(255) NOT NULL,
  `isnew` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `json` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `specialoffer` text NOT NULL,
  `specialofferimage` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hsp_dine`
--

INSERT INTO `hsp_dine` (`id`, `name`, `hours`, `location`, `isfeatured`, `isnew`, `description`, `json`, `logo`, `email`, `contactno`, `facebook`, `twitter`, `instagram`, `googleplus`, `floor`, `image`, `specialoffer`, `specialofferimage`) VALUES
(1, 'avinash', '10', 'karjat', '0', '0', 'demo', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"kjjnk"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"nkj"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"oini"}]', 'event4881.jpg', '', '', '', '', '', '', '', '', '', ''),
(2, 'avinash', '10', 'karjat', '0', '0', 'demo', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"kjjnk"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"nkj"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"oini"}]', 'Nature_at_its_Best!!!1.png', '', '', '', '', '', '', '', '', '', ''),
(3, 'asxas', '2', 'Ghatkopar', '1', '1', 'jhbjh', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"kjjnk"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"nkj"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"oini"}]', '', '', '', '', '', '', '', '', '', '', ''),
(5, '99', '9', '9', '1', '1', '9', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"9"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"9"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"9"}]', 'event4882.jpg', '', '', '', '', '', '', '', '', '', ''),
(6, '2', '2', '2', '1', '1', '2', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"2"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"2"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"2"}]', 'event48821.jpg', '2@2.com', '222', '2', '2', '2', '2', '', '', '', ''),
(7, '8', '8', '8', '1', '1', '8', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"6"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"6"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"6"}]', 'block43.jpg', '8', '8', '8', '8', '8', '8', '0', 'main_banner5.jpg', 'iuanis', 'main_banner_m4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hsp_dinecategory`
--

CREATE TABLE IF NOT EXISTS `hsp_dinecategory` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `dine` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hsp_dinecategory`
--

INSERT INTO `hsp_dinecategory` (`id`, `name`, `order`, `dine`) VALUES
(1, 'avi', 1, 1),
(2, 'avinash9', 6, 2),
(3, 'name', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hsp_dinedeal`
--

CREATE TABLE IF NOT EXISTS `hsp_dinedeal` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dine` int(11) NOT NULL,
  `description` text NOT NULL,
  `isfeatured` varchar(255) NOT NULL,
  `json` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hsp_dinedeal`
--

INSERT INTO `hsp_dinedeal` (`id`, `name`, `dine`, `description`, `isfeatured`, `json`) VALUES
(1, 'Deal 1', 2, 'desc', '1', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"axa"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"asxa"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"axas"}]'),
(2, 'DEal 2', 1, 'desc1', '0', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"axa"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"asxa"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"axas"}]'),
(3, 'Deal 33', 1, 'asxasx', '1', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"axa"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"asxa"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"axas"}]'),
(4, 'Deal 4', 6, 'demo', '1', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"demo"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"demo"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"demo"}]'),
(5, 'demosjhbsj', 1, 'jhbjc', '1', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"2"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"2"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"2"}]');

-- --------------------------------------------------------

--
-- Table structure for table `hsp_event`
--

CREATE TABLE IF NOT EXISTS `hsp_event` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `json` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hsp_event`
--

INSERT INTO `hsp_event` (`id`, `name`, `date`, `day`, `time`, `json`, `logo`, `facebook`, `twitter`, `instagram`, `googleplus`, `description`) VALUES
(1, 'cultural', '2015-02-11', 'Monday', '10-2', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"aaa"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"jhbjh"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"oijoi"}]', 'event48812.jpg', '2', '2', '2', '2', ''),
(2, 'demo', '2015-02-06', 'Tuesday', '10 AM to 2 PM', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"aaa"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"jhbjh"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"oijoi"}]', '31.jpg', '', '', '', '', ''),
(3, '2', '2015-02-07', '2', '2', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"2"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"2"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"2"}]', 'event48811.jpg', '', '', '', '', ''),
(8, 'Event Demo', '2015-02-25', '', '', '', '', '', '', '', '', 'andlkadkas'),
(10, 'event New', '2015-02-25', 'wed', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `logintype`
--

CREATE TABLE IF NOT EXISTS `logintype` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `logintype`
--

INSERT INTO `logintype` (`id`, `name`) VALUES
(1, 'Facebook'),
(2, 'Twitter'),
(3, 'Email'),
(4, 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `linktype` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `keyword`, `url`, `linktype`, `parent`, `isactive`, `order`, `icon`) VALUES
(1, 'Users', '', '', 'site/viewusers', 1, 0, 1, 1, 'icon-user'),
(4, 'Dashboard', '', '', 'site/index', 1, 0, 1, 0, 'icon-dashboard'),
(5, 'Brand', '', '', '', 1, 0, 1, 2, 'icon-user'),
(6, 'Dine', '', '', '', 1, 0, 1, 3, 'icon-user'),
(7, 'Event', '', '', 'site/viewevent', 1, 0, 1, 4, 'icon-user'),
(8, 'View Brand', '', '', 'site/viewbrand', 1, 5, 1, 1, 'icon-user'),
(9, 'Brand Category', '', '', 'site/viewcategoryforbrand', 1, 5, 1, 2, 'icon-user'),
(10, 'View Dine', '', '', 'site/viewdine', 1, 6, 1, 1, 'icon-user'),
(11, 'Dine Category', '', '', 'site/viewcategoryfordine', 1, 6, 1, 2, 'icon-user'),
(12, 'Dine Amenity', '', '', 'site/viewamenity', 1, 6, 1, 3, 'icon-user'),
(13, 'Home', '', '', '', 1, 0, 1, 7, 'icon-user'),
(14, 'Content', '', '', 'site/viewconfig', 1, 13, 1, 1, 'icon-user'),
(15, 'Video', '', '', 'site/viewvideo', 1, 13, 1, 2, 'icon-user'),
(16, 'Brand Logo', '', '', 'site/viewlogo', 1, 13, 1, 3, 'icon-user'),
(17, 'Comment', '', '', 'site/viewcomment', 1, 0, 1, 8, 'icon-user');

-- --------------------------------------------------------

--
-- Table structure for table `menuaccess`
--

CREATE TABLE IF NOT EXISTS `menuaccess` (
  `menu` int(11) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuaccess`
--

INSERT INTO `menuaccess` (`menu`, `access`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(7, 3),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'inactive'),
(2, 'Active'),
(3, 'Waiting'),
(4, 'Active Waiting'),
(5, 'Blocked');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `accesslevel` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `socialid` varchar(255) NOT NULL,
  `logintype` int(11) NOT NULL,
  `json` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json`) VALUES
(1, 'wohlig', 'a63526467438df9566c508027d9cb06b', 'wohlig@wohlig.com', 1, '0000-00-00 00:00:00', 1, NULL, '', '', 0, ''),
(4, 'pratik', '0cb2b62754dfd12b6ed0161d4b447df7', 'pratik@wohlig.com', 1, '2014-05-12 06:52:44', 1, NULL, 'pratik', '1', 1, ''),
(5, 'wohlig123', 'wohlig123', 'wohlig1@wohlig.com', 1, '2014-05-12 06:52:44', 1, NULL, '', '', 0, ''),
(6, 'wohlig1', 'a63526467438df9566c508027d9cb06b', 'wohlig2@wohlig.com', 1, '2014-05-12 06:52:44', 1, NULL, '', '', 0, ''),
(7, 'Avinash', '7b0a80efe0d324e937bbfc7716fb15d3', 'avinash@wohlig.com', 1, '2014-10-17 06:22:29', 1, NULL, '', '', 1, ''),
(9, 'avinash', 'a208e5837519309129fa466b0c68396b', 'a@email.com', 2, '2014-12-03 11:06:19', 3, '', '', '123', 1, 'demojson'),
(13, 'aaa', 'a208e5837519309129fa466b0c68396b', 'aaa3@email.com', 3, '2014-12-04 06:55:42', 3, NULL, '', '1', 2, 'userjson'),
(14, 'aaaaaaaaaa', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'a88@email.com', 1, '2015-02-08 18:04:26', 1, '', '', 'aaaaaaaa', 1, '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":"aaa"},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":"aaa"},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":"aaa"}]');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
`id` int(11) NOT NULL,
  `onuser` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `onuser`, `status`, `description`, `timestamp`) VALUES
(1, 1, 1, 'User Address Edited', '2014-05-12 06:50:21'),
(2, 1, 1, 'User Details Edited', '2014-05-12 06:51:43'),
(3, 1, 1, 'User Details Edited', '2014-05-12 06:51:53'),
(4, 4, 1, 'User Created', '2014-05-12 06:52:44'),
(5, 4, 1, 'User Address Edited', '2014-05-12 12:31:48'),
(6, 23, 2, 'User Created', '2014-10-07 06:46:55'),
(7, 24, 2, 'User Created', '2014-10-07 06:48:25'),
(8, 25, 2, 'User Created', '2014-10-07 06:49:04'),
(9, 26, 2, 'User Created', '2014-10-07 06:49:16'),
(10, 27, 2, 'User Created', '2014-10-07 06:52:18'),
(11, 28, 2, 'User Created', '2014-10-07 06:52:45'),
(12, 29, 2, 'User Created', '2014-10-07 06:53:10'),
(13, 30, 2, 'User Created', '2014-10-07 06:53:33'),
(14, 31, 2, 'User Created', '2014-10-07 06:55:03'),
(15, 32, 2, 'User Created', '2014-10-07 06:55:33'),
(16, 33, 2, 'User Created', '2014-10-07 06:59:32'),
(17, 34, 2, 'User Created', '2014-10-07 07:01:18'),
(18, 35, 2, 'User Created', '2014-10-07 07:01:50'),
(19, 34, 2, 'User Details Edited', '2014-10-07 07:04:34'),
(20, 18, 2, 'User Details Edited', '2014-10-07 07:05:11'),
(21, 18, 2, 'User Details Edited', '2014-10-07 07:05:45'),
(22, 18, 2, 'User Details Edited', '2014-10-07 07:06:03'),
(23, 7, 6, 'User Created', '2014-10-17 06:22:29'),
(24, 7, 6, 'User Details Edited', '2014-10-17 06:32:22'),
(25, 7, 6, 'User Details Edited', '2014-10-17 06:32:37'),
(26, 8, 6, 'User Created', '2014-11-15 12:05:52'),
(27, 9, 6, 'User Created', '2014-12-02 10:46:36'),
(28, 9, 6, 'User Details Edited', '2014-12-02 10:47:34'),
(29, 4, 6, 'User Details Edited', '2014-12-03 10:34:49'),
(30, 4, 6, 'User Details Edited', '2014-12-03 10:36:34'),
(31, 4, 6, 'User Details Edited', '2014-12-03 10:36:49'),
(32, 8, 6, 'User Details Edited', '2014-12-03 10:47:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslevel`
--
ALTER TABLE `accesslevel`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `amenity`
--
ALTER TABLE `amenity`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandcategory`
--
ALTER TABLE `brandcategory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryforbrand`
--
ALTER TABLE `categoryforbrand`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryfordine`
--
ALTER TABLE `categoryfordine`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configlogo`
--
ALTER TABLE `configlogo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configvideo`
--
ALTER TABLE `configvideo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dineamenity`
--
ALTER TABLE `dineamenity`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinecategory`
--
ALTER TABLE `dinecategory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsp_brand`
--
ALTER TABLE `hsp_brand`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsp_brandcategory`
--
ALTER TABLE `hsp_brandcategory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsp_branddeal`
--
ALTER TABLE `hsp_branddeal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsp_dine`
--
ALTER TABLE `hsp_dine`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsp_dinecategory`
--
ALTER TABLE `hsp_dinecategory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsp_dinedeal`
--
ALTER TABLE `hsp_dinedeal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsp_event`
--
ALTER TABLE `hsp_event`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintype`
--
ALTER TABLE `logintype`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuaccess`
--
ALTER TABLE `menuaccess`
 ADD UNIQUE KEY `menu` (`menu`,`access`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslevel`
--
ALTER TABLE `accesslevel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `amenity`
--
ALTER TABLE `amenity`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `brandcategory`
--
ALTER TABLE `brandcategory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `categoryforbrand`
--
ALTER TABLE `categoryforbrand`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categoryfordine`
--
ALTER TABLE `categoryfordine`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `configlogo`
--
ALTER TABLE `configlogo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `configvideo`
--
ALTER TABLE `configvideo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dineamenity`
--
ALTER TABLE `dineamenity`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dinecategory`
--
ALTER TABLE `dinecategory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `hsp_brand`
--
ALTER TABLE `hsp_brand`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `hsp_brandcategory`
--
ALTER TABLE `hsp_brandcategory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hsp_branddeal`
--
ALTER TABLE `hsp_branddeal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hsp_dine`
--
ALTER TABLE `hsp_dine`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hsp_dinecategory`
--
ALTER TABLE `hsp_dinecategory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hsp_dinedeal`
--
ALTER TABLE `hsp_dinedeal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hsp_event`
--
ALTER TABLE `hsp_event`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `logintype`
--
ALTER TABLE `logintype`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
