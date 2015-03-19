-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2015 at 02:08 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hsp`
--
CREATE DATABASE IF NOT EXISTS `hsp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hsp`;

-- --------------------------------------------------------

--
-- Table structure for table `accesslevel`
--

CREATE TABLE IF NOT EXISTS `accesslevel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1177 ;

--
-- Dumping data for table `brandcategory`
--

INSERT INTO `brandcategory` (`id`, `brand`, `category`) VALUES
(6, 15, 1),
(7, 15, 2),
(8, 15, 3),
(24, 16, 1),
(25, 16, 2),
(34, 17, 1),
(35, 17, 2),
(37, 1, 1),
(42, 20, 8),
(55, 28, 4),
(136, 61, 35),
(183, 79, 4),
(367, 152, 15),
(368, 152, 16),
(369, 152, 17),
(442, 185, 26),
(446, 187, 43),
(447, 187, 44),
(608, 18, 4),
(609, 19, 5),
(610, 19, 6),
(611, 19, 7),
(612, 21, 5),
(613, 21, 6),
(614, 21, 7),
(615, 22, 4),
(616, 23, 9),
(617, 23, 10),
(618, 23, 11),
(619, 23, 12),
(620, 24, 13),
(621, 25, 4),
(622, 26, 14),
(623, 27, 14),
(624, 29, 14),
(625, 30, 14),
(626, 31, 15),
(627, 31, 16),
(628, 31, 17),
(629, 32, 18),
(630, 32, 19),
(631, 32, 20),
(632, 32, 21),
(633, 33, 5),
(634, 33, 6),
(635, 33, 7),
(636, 34, 9),
(637, 34, 10),
(638, 34, 11),
(639, 34, 12),
(640, 35, 9),
(641, 35, 10),
(642, 35, 11),
(643, 35, 12),
(644, 36, 9),
(645, 36, 10),
(646, 36, 11),
(647, 36, 12),
(648, 37, 22),
(649, 38, 18),
(650, 38, 19),
(651, 38, 20),
(652, 38, 21),
(653, 39, 4),
(654, 40, 23),
(655, 40, 24),
(656, 40, 25),
(657, 41, 26),
(658, 42, 27),
(659, 42, 28),
(660, 42, 29),
(661, 43, 15),
(662, 43, 16),
(663, 43, 17),
(664, 44, 9),
(665, 44, 10),
(666, 44, 11),
(667, 44, 12),
(668, 45, 26),
(669, 46, 30),
(670, 46, 31),
(671, 47, 27),
(672, 47, 28),
(673, 47, 29),
(674, 49, 27),
(675, 49, 28),
(676, 49, 29),
(677, 50, 27),
(678, 50, 28),
(679, 50, 29),
(680, 51, 22),
(681, 52, 26),
(682, 53, 15),
(683, 53, 16),
(684, 53, 17),
(685, 54, 32),
(686, 54, 33),
(687, 54, 34),
(688, 55, 26),
(689, 56, 18),
(690, 56, 19),
(691, 56, 20),
(692, 56, 21),
(693, 57, 9),
(694, 57, 10),
(695, 57, 11),
(696, 57, 12),
(697, 58, 9),
(698, 58, 10),
(699, 58, 11),
(700, 58, 12),
(701, 59, 4),
(702, 60, 13),
(703, 62, 5),
(704, 62, 6),
(705, 62, 7),
(706, 63, 18),
(707, 63, 19),
(708, 63, 20),
(709, 63, 21),
(710, 64, 9),
(711, 64, 10),
(712, 64, 11),
(713, 64, 12),
(714, 65, 8),
(715, 66, 27),
(716, 66, 28),
(717, 66, 29),
(718, 67, 26),
(719, 68, 27),
(720, 68, 28),
(721, 68, 29),
(722, 69, 27),
(723, 69, 28),
(724, 69, 29),
(725, 70, 22),
(726, 71, 27),
(727, 71, 28),
(728, 71, 29),
(729, 72, 9),
(730, 72, 10),
(731, 72, 11),
(732, 72, 12),
(733, 73, 15),
(734, 73, 16),
(735, 73, 17),
(736, 74, 9),
(737, 74, 10),
(738, 74, 11),
(739, 74, 12),
(740, 75, 26),
(741, 76, 36),
(742, 76, 37),
(743, 76, 38),
(744, 77, 18),
(745, 77, 19),
(746, 77, 20),
(747, 77, 21),
(748, 78, 22),
(749, 80, 27),
(750, 80, 28),
(751, 80, 29),
(752, 81, 26),
(753, 82, 15),
(754, 82, 16),
(755, 82, 17),
(756, 83, 22),
(757, 84, 22),
(758, 85, 36),
(759, 85, 37),
(760, 85, 38),
(761, 86, 26),
(762, 87, 8),
(763, 88, 5),
(764, 88, 6),
(765, 88, 7),
(766, 89, 22),
(767, 90, 18),
(768, 90, 19),
(769, 90, 20),
(770, 90, 21),
(771, 91, 22),
(772, 92, 23),
(773, 92, 24),
(774, 92, 25),
(775, 93, 18),
(776, 93, 19),
(777, 93, 20),
(778, 93, 21),
(779, 94, 4),
(780, 95, 5),
(781, 95, 6),
(782, 95, 7),
(783, 96, 9),
(784, 96, 10),
(785, 96, 11),
(786, 96, 12),
(787, 97, 27),
(788, 97, 28),
(789, 97, 29),
(790, 98, 18),
(791, 98, 19),
(792, 98, 20),
(793, 98, 21),
(794, 99, 26),
(795, 100, 22),
(796, 101, 27),
(797, 101, 28),
(798, 101, 29),
(799, 102, 4),
(804, 103, 9),
(805, 103, 10),
(806, 103, 11),
(807, 103, 12),
(808, 104, 9),
(809, 104, 10),
(810, 104, 11),
(811, 104, 12),
(812, 105, 22),
(813, 106, 5),
(814, 106, 6),
(815, 106, 7),
(816, 107, 27),
(817, 107, 28),
(818, 107, 29),
(819, 108, 26),
(820, 109, 39),
(821, 109, 40),
(822, 109, 41),
(823, 109, 42),
(824, 110, 15),
(825, 110, 16),
(826, 110, 17),
(827, 111, 9),
(828, 111, 10),
(829, 111, 11),
(830, 111, 12),
(831, 112, 5),
(832, 112, 6),
(833, 112, 7),
(834, 113, 9),
(835, 113, 10),
(836, 113, 11),
(837, 113, 12),
(838, 114, 26),
(839, 115, 9),
(840, 115, 10),
(841, 115, 11),
(842, 115, 12),
(843, 116, 9),
(844, 116, 10),
(845, 116, 11),
(846, 116, 12),
(847, 117, 27),
(848, 117, 28),
(849, 117, 29),
(850, 118, 8),
(851, 119, 18),
(852, 119, 19),
(853, 119, 20),
(854, 119, 21),
(855, 120, 8),
(856, 121, 5),
(857, 121, 6),
(858, 121, 7),
(859, 122, 26),
(860, 123, 4),
(861, 124, 18),
(862, 124, 19),
(863, 124, 20),
(864, 124, 21),
(865, 125, 9),
(866, 125, 10),
(867, 125, 11),
(868, 125, 12),
(869, 126, 5),
(870, 126, 6),
(871, 126, 7),
(872, 127, 22),
(873, 128, 18),
(874, 128, 19),
(875, 128, 20),
(876, 128, 21),
(877, 129, 9),
(878, 129, 10),
(879, 129, 11),
(880, 129, 12),
(881, 130, 18),
(882, 130, 19),
(883, 130, 20),
(884, 130, 21),
(885, 131, 14),
(886, 132, 26),
(887, 133, 18),
(888, 133, 19),
(889, 133, 20),
(890, 133, 21),
(891, 134, 8),
(892, 135, 4),
(893, 136, 22),
(894, 137, 22),
(895, 138, 30),
(896, 138, 31),
(897, 139, 18),
(898, 139, 19),
(899, 139, 20),
(900, 139, 21),
(901, 140, 9),
(902, 140, 10),
(903, 140, 11),
(904, 140, 12),
(905, 141, 26),
(906, 142, 18),
(907, 142, 19),
(908, 142, 20),
(909, 142, 21),
(910, 143, 27),
(911, 143, 28),
(912, 143, 29),
(913, 144, 27),
(914, 144, 28),
(915, 144, 29),
(916, 145, 4),
(917, 146, 30),
(918, 146, 31),
(919, 147, 27),
(920, 147, 28),
(921, 147, 29),
(922, 148, 36),
(923, 148, 37),
(924, 148, 38),
(925, 149, 27),
(926, 149, 28),
(927, 149, 29),
(928, 150, 9),
(929, 150, 10),
(930, 150, 11),
(931, 150, 12),
(932, 151, 9),
(933, 151, 10),
(934, 151, 11),
(935, 151, 12),
(937, 153, 4),
(938, 154, 4),
(939, 155, 36),
(940, 155, 37),
(941, 155, 38),
(942, 156, 36),
(943, 156, 37),
(944, 156, 38),
(945, 157, 13),
(946, 158, 26),
(947, 159, 43),
(948, 159, 44),
(949, 160, 15),
(950, 160, 16),
(951, 160, 17),
(952, 161, 9),
(953, 161, 10),
(954, 161, 11),
(955, 161, 12),
(956, 162, 27),
(957, 162, 28),
(958, 162, 29),
(959, 163, 39),
(960, 163, 40),
(961, 163, 41),
(962, 163, 42),
(963, 164, 36),
(964, 164, 37),
(965, 164, 38),
(966, 165, 4),
(967, 166, 8),
(968, 167, 32),
(969, 167, 33),
(970, 167, 34),
(971, 168, 30),
(972, 168, 31),
(973, 169, 18),
(974, 169, 19),
(975, 169, 20),
(976, 169, 21),
(977, 170, 18),
(978, 170, 19),
(979, 170, 20),
(980, 170, 21),
(981, 171, 22),
(982, 172, 4),
(983, 173, 26),
(984, 174, 26),
(985, 175, 9),
(986, 175, 10),
(987, 175, 11),
(988, 175, 12),
(989, 176, 22),
(990, 177, 27),
(991, 177, 28),
(992, 177, 29),
(995, 178, 4),
(998, 179, 43),
(999, 179, 44),
(1000, 180, 27),
(1001, 180, 28),
(1002, 180, 29),
(1003, 181, 5),
(1004, 181, 6),
(1005, 181, 7),
(1006, 182, 36),
(1007, 182, 37),
(1008, 182, 38),
(1009, 183, 32),
(1010, 183, 33),
(1011, 183, 34),
(1012, 184, 22),
(1013, 186, 5),
(1014, 186, 6),
(1015, 186, 7),
(1016, 188, 15),
(1017, 188, 16),
(1018, 188, 17),
(1019, 189, 9),
(1020, 189, 10),
(1021, 189, 11),
(1022, 189, 12),
(1023, 190, 14),
(1024, 191, 9),
(1025, 191, 10),
(1026, 191, 11),
(1027, 191, 12),
(1028, 192, 27),
(1029, 192, 28),
(1030, 192, 29),
(1031, 193, 9),
(1032, 193, 10),
(1033, 193, 11),
(1034, 193, 12),
(1035, 194, 15),
(1036, 194, 16),
(1037, 194, 17),
(1038, 195, 5),
(1039, 195, 6),
(1040, 195, 7),
(1041, 196, 14),
(1042, 197, 8),
(1043, 198, 36),
(1044, 198, 37),
(1045, 198, 38),
(1046, 199, 36),
(1047, 199, 37),
(1048, 199, 38),
(1049, 200, 22),
(1050, 201, 27),
(1051, 201, 28),
(1052, 201, 29),
(1053, 202, 4),
(1054, 203, 15),
(1055, 203, 16),
(1056, 203, 17),
(1057, 204, 43),
(1058, 204, 44),
(1059, 205, 27),
(1060, 205, 28),
(1061, 205, 29),
(1062, 206, 9),
(1063, 206, 10),
(1064, 206, 11),
(1065, 206, 12),
(1066, 207, 9),
(1067, 207, 10),
(1068, 207, 11),
(1069, 207, 12),
(1070, 208, 27),
(1071, 208, 28),
(1072, 208, 29),
(1073, 209, 18),
(1074, 209, 19),
(1075, 209, 20),
(1076, 209, 21),
(1077, 210, 18),
(1078, 210, 19),
(1079, 210, 20),
(1080, 210, 21),
(1081, 211, 22),
(1082, 212, 5),
(1083, 212, 6),
(1084, 212, 7),
(1085, 213, 5),
(1086, 213, 6),
(1087, 213, 7),
(1088, 214, 5),
(1089, 214, 6),
(1090, 214, 7),
(1091, 215, 27),
(1092, 215, 28),
(1093, 215, 29),
(1094, 216, 27),
(1095, 216, 28),
(1096, 216, 29),
(1097, 217, 18),
(1098, 217, 19),
(1099, 217, 20),
(1100, 217, 21),
(1101, 218, 36),
(1102, 218, 37),
(1103, 218, 38),
(1104, 219, 30),
(1105, 219, 31),
(1106, 220, 27),
(1107, 220, 28),
(1108, 220, 29),
(1109, 221, 15),
(1110, 221, 16),
(1111, 221, 17),
(1112, 222, 26),
(1113, 223, 18),
(1114, 223, 19),
(1115, 223, 20),
(1116, 223, 21),
(1117, 224, 27),
(1118, 224, 28),
(1119, 224, 29),
(1120, 225, 26),
(1121, 226, 5),
(1122, 226, 6),
(1123, 226, 7),
(1124, 227, 22),
(1125, 228, 13),
(1126, 229, 9),
(1127, 229, 10),
(1128, 229, 11),
(1129, 229, 12),
(1130, 230, 4),
(1131, 231, 18),
(1132, 231, 19),
(1133, 231, 20),
(1134, 231, 21),
(1135, 232, 27),
(1136, 232, 28),
(1137, 232, 29),
(1138, 233, 8),
(1139, 234, 9),
(1140, 234, 10),
(1141, 234, 11),
(1142, 234, 12),
(1143, 235, 22),
(1144, 236, 13),
(1145, 237, 15),
(1146, 237, 16),
(1147, 237, 17),
(1148, 238, 22),
(1149, 239, 8),
(1150, 240, 22),
(1151, 241, 4),
(1152, 242, 9),
(1153, 242, 10),
(1154, 242, 11),
(1155, 242, 12),
(1156, 243, 22),
(1157, 244, 4),
(1158, 245, 36),
(1159, 245, 37),
(1160, 245, 38),
(1161, 246, 15),
(1162, 246, 16),
(1163, 246, 17),
(1164, 247, 5),
(1165, 247, 6),
(1166, 247, 7),
(1167, 248, 36),
(1168, 248, 37),
(1169, 248, 38),
(1170, 249, 22),
(1171, 250, 22),
(1172, 251, 30),
(1173, 251, 31),
(1174, 252, 26),
(1175, 253, 43),
(1176, 253, 44);

-- --------------------------------------------------------

--
-- Table structure for table `brandimage`
--

CREATE TABLE IF NOT EXISTS `brandimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `brandimage`
--

INSERT INTO `brandimage` (`id`, `name`, `image`, `order`, `brand`) VALUES
(3, 'demo', '', 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `categoryforbrand`
--

CREATE TABLE IF NOT EXISTS `categoryforbrand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `categoryforbrand`
--

INSERT INTO `categoryforbrand` (`id`, `name`, `order`) VALUES
(1, 'category for brand1', 1),
(2, 'Cat 2', 0),
(3, 'brand category 3', 3),
(4, 'Womens Fashion', 0),
(5, 'Watches', 0),
(6, ' Jewellery ', 0),
(7, ' Fashion Accessories', 0),
(8, '', 0),
(9, 'Foot Fashion', 0),
(10, ' Bags', 0),
(11, ' Luggage ', 0),
(12, ' Accessories', 0),
(13, 'Kids Fashion', 0),
(14, 'Designer Wear', 0),
(15, 'Electronics', 0),
(16, ' Gizmos ', 0),
(17, ' Gadgets', 0),
(18, 'Cosmetics', 0),
(19, ' Salon', 0),
(20, ' Spas ', 0),
(21, ' Optics', 0),
(22, 'General Fashion', 0),
(23, 'Hypermarkets', 0),
(24, ' Supermarket ', 0),
(25, ' Gourmet', 0),
(26, 'Mens Fashion', 0),
(27, 'Cafes', 0),
(28, ' Restaurants ', 0),
(29, ' Desserts', 0),
(30, 'Department Stores', 0),
(31, ' Mini Department Store', 0),
(32, 'Multiplex', 0),
(33, ' FEC ', 0),
(34, ' Entertainment', 0),
(35, 'Service', 0),
(36, 'Home Decor / Accessories', 0),
(37, ' Gifts ', 0),
(38, ' Hobbies', 0),
(39, 'Books', 0),
(40, ' Music', 0),
(41, ' Toys ', 0),
(42, ' Games', 0),
(43, 'Sportswear ', 0),
(44, ' Sportsgear', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categoryfordine`
--

CREATE TABLE IF NOT EXISTS `categoryfordine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categoryfordine`
--

INSERT INTO `categoryfordine` (`id`, `name`, `order`) VALUES
(1, 'Dine cat 1', 1),
(3, 'Dine Category 3', 3),
(4, 'Cafes', 0),
(5, ' Restaurants ', 0),
(6, ' Desserts', 0),
(7, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `title`, `text`, `image`, `date`, `timestamp`) VALUES
(1, 'About Us', 'High Street Phoenix (HSP) is the first retail led consumption centre developed in India over a sprawling 3.3 million square feet. It houses over 500 brands including a variety of F&B, entertainment, commercial and residential complexes.', '', '0000-00-00', '2015-02-28 07:44:41'),
(2, 'ZARA', '', 'for_zara1.jpg', '0000-00-00', '2015-02-28 07:14:25'),
(3, 'Brands', 'Welcome to your High Street Phoenix shopping guide ! At HSP, we have hundreds of brands for every preference and price range, guaranteeing you will find whatever you are looking for.', '', '0000-00-00', '2015-02-23 11:23:52'),
(4, 'VEROMODA', '', 'for_vero.jpg', '0000-00-00', '2015-02-28 07:28:52'),
(5, 'Shop In Style', '', 'shoppingbags.jpg', '0000-00-00', '2015-02-28 07:32:42'),
(6, 'Unleash your Child''s Inner Artist', 'Register your kids for an exciting art and craft workshop ...', '', '0000-00-00', '2015-02-23 11:26:45'),
(7, 'International Clown Festival', 'The International Clown Festival has been in India for over a month and this seems to be just like the fun event we witnessed in ...', '', '0000-00-00', '2015-02-23 11:27:12'),
(8, 'Hall of Fame', 'HSP was awarded India’s Best Existing Neighbourhood Shopping Mall 2013-2014 by Estate Avenues.', '', '0000-00-00', '2015-02-28 07:49:01'),
(9, 'Shop & Win', 'Grab daily and weekly Prizes too. Shop worth Rs.3000 or above and get a chance to win a trip to the destination ...', '', '2015-03-10', '2015-02-25 10:40:11'),
(10, 'Home Banner', '', 'main_banner6.jpg', '0000-00-00', '2015-02-24 12:58:33'),
(11, 'demo', 'demo', '', '0000-00-00', '2015-02-24 12:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `configlogo`
--

CREATE TABLE IF NOT EXISTS `configlogo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `configlogo`
--

INSERT INTO `configlogo` (`id`, `title`, `logo`, `timestamp`) VALUES
(1, 'Adidas', 'brand1.png', '2015-02-23 11:08:31'),
(2, 'demo', 'brand2.png', '2015-02-23 11:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `configvideo`
--

CREATE TABLE IF NOT EXISTS `configvideo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dine` int(11) NOT NULL,
  `amenity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dinecategory`
--

CREATE TABLE IF NOT EXISTS `dinecategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dine` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=194 ;

--
-- Dumping data for table `dinecategory`
--

INSERT INTO `dinecategory` (`id`, `dine`, `category`) VALUES
(12, 5, 1),
(13, 5, 3),
(14, 6, 1),
(15, 6, 3),
(17, 7, 1),
(73, 27, 4),
(74, 27, 5),
(75, 27, 6),
(109, 8, 4),
(110, 8, 5),
(111, 8, 6),
(112, 9, 4),
(113, 9, 5),
(114, 9, 6),
(115, 10, 7),
(116, 11, 4),
(117, 11, 5),
(118, 11, 6),
(119, 12, 4),
(120, 12, 5),
(121, 12, 6),
(122, 13, 4),
(123, 13, 5),
(124, 13, 6),
(125, 14, 4),
(126, 14, 5),
(127, 14, 6),
(128, 15, 4),
(129, 15, 5),
(130, 15, 6),
(131, 16, 4),
(132, 16, 5),
(133, 16, 6),
(134, 17, 4),
(135, 17, 5),
(136, 17, 6),
(137, 18, 4),
(138, 18, 5),
(139, 18, 6),
(140, 19, 4),
(141, 19, 5),
(142, 19, 6),
(143, 20, 4),
(144, 20, 5),
(145, 20, 6),
(146, 21, 4),
(147, 21, 5),
(148, 21, 6),
(149, 22, 4),
(150, 22, 5),
(151, 22, 6),
(152, 23, 4),
(153, 23, 5),
(154, 23, 6),
(155, 24, 4),
(156, 24, 5),
(157, 24, 6),
(158, 25, 4),
(159, 25, 5),
(160, 25, 6),
(161, 26, 4),
(162, 26, 5),
(163, 26, 6),
(164, 28, 4),
(165, 28, 5),
(166, 28, 6),
(167, 29, 4),
(168, 29, 5),
(169, 29, 6),
(170, 30, 4),
(171, 30, 5),
(172, 30, 6),
(173, 31, 4),
(174, 31, 5),
(175, 31, 6),
(176, 32, 4),
(177, 32, 5),
(178, 32, 6),
(179, 33, 4),
(180, 33, 5),
(181, 33, 6),
(182, 34, 4),
(183, 34, 5),
(184, 34, 6),
(185, 35, 4),
(186, 35, 5),
(187, 35, 6),
(188, 36, 4),
(189, 36, 5),
(190, 36, 6),
(191, 37, 4),
(192, 37, 5),
(193, 37, 6);

-- --------------------------------------------------------

--
-- Table structure for table `dineimage`
--

CREATE TABLE IF NOT EXISTS `dineimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `dine` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dineimage`
--

INSERT INTO `dineimage` (`id`, `name`, `image`, `order`, `dine`) VALUES
(1, 'demo', '12.jpg', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `eventimage`
--

CREATE TABLE IF NOT EXISTS `eventimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eventimage`
--

INSERT INTO `eventimage` (`id`, `name`, `image`, `order`, `event`) VALUES
(1, 'demo2', '14.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hsp_brand`
--

CREATE TABLE IF NOT EXISTS `hsp_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `stars` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=254 ;

--
-- Dumping data for table `hsp_brand`
--

INSERT INTO `hsp_brand` (`id`, `name`, `hours`, `location`, `isfeatured`, `isnew`, `description`, `logo`, `json`, `contactno`, `email`, `facebook`, `twitter`, `instagram`, `googleplus`, `image`, `specialoffer`, `specialofferimage`, `stars`, `duration`) VALUES
(18, 'ACCESS', 'All week days - 11am to 10pm.', 'High Street Unit', '1', '1', 'For computer, laptops and cell phone products, Access has some unusual merchandise and accessories including international brands .', 'access_logo.jpg', '', '', '', '', '', '', '', 'access_cover_image.jpg', '', '', '', ''),
(19, 'Accessorize', 'All week days - 11am to 10pm.', 'Palladium Level 3 , Grand Galleria', '1', '1', 'U.K. based brand, provides great accessories options, pick a whole range to match your outfit and style.', 'accessorize_logo.jpg', '', '', '', '', '', '', '', 'accessorize_cover_image.jpg', '', '', '', ''),
(20, 'Accessorize Gold', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'Adidas', 'All week days - 11am to 10pm.', 'SkyZone Ground Level', '1', '1', 'One of the most respected sports brand - Adidas offers a wide range of sports footwear for key games such as soccer and cricket. Plus walking and running pairs are also displayed. The brand has also including fitness equipment and accessories and apparel. One of the most respected sports brand - Adidas offers a wide range of sports footwear for key games such as soccer and cricket. Plus walking and running pairs are also displayed. The brand has also including fitness equipment and accessories and apparel.', 'addidas_logo.jpg', '', '', '', '', '', '', '', 'addidas_cover.jpg', '', '', '', ''),
(22, 'Aftershock London', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', '“Glamour with a touch of elegance -Payce Business Solutions Pvt. Ltd proudly introduces an aspirational fashion brand "AFTERSHOCK LONDON in India. Firmly established in the fashion market as a brand delivering the concept of "affordable glamour" and "affordable luxury" to its very esteemed customers. We are enthused with the opening of our flagship “AFTERSHOCK LONDON store in Mumbai at the Palladium early this November,says Manoj Jain, director of Payce Business Solutions Pvt Ltd - India. The new store has a clean, unique, modern feel and offers a curated selection of apparel, shoes, jewelery and handbags for todays women!! Currently having over 150 stores , concessions around the world and adding another 110 stores globally over the next few years makes the brand an international success story. Being one of the youngest , most dynamic British brands to receive an award by Her Majesty, Queen Elizabeth II of Great Britain for excellence in bringing British fashion to many countries, India being the next. Celebrity followers include Madonna, Uma Thurman, Paris Hilton to name but a few. Our fashion Signature is the use of exuberant colour schemes and beautiful design Work. Soft, feminine, vintage inspired pieces contrast against sharp, clean modern shapes that emphasizes the art of dressing up and there is a 90s influence of voluminous blouses and pleated trousers partnered with ethereal and luxe knitwear. Textures are contrasted and colours range from muted pastels to sophisticated dusky midnight shades. Shapes, on the other hand, are timeless and range from tailored and feminine with A-lines and dropped waists over straight cigarette pants to slightly oversized pieces. Evening wear takes an inspiration from the world of glitter , glamour boasting of signature fringing and tassel style dresses, precious embellishment and beadwork. Sequins, floor length gowns in dusky pink and blue hues are contrasted with darker jacquards in magenta and petrol blues. Our range is highlighted with absolutely stunning clutches and dazzling gold chains. Not to mention how intricately crafted jewellery, classy bags, stylish shoes, scarves, belts , beautiful hair accessories complement the overall look. “Our store brings the brand to life in a new and exciting way taking fashion to another level with an edited assortment of trends, inspiring head-to toe looks and in-store associates to help our fashion-focused customers find styles , colors well suited to them. You have to see it to believe it says Brand manager Amrita Mehta for AFTERSHOCK LONDON India. "Let your wardrobe blossom!"', 'aftershock_logo.jpg', '', '', '', '', '', '', '', 'aftershock_cover.png', '', '', '', ''),
(23, 'Aldo', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'ALDO India provides an unparalleled selection of the latest footwear and accessories for both men and women, with on-trend styles at a fair price. ALDO has also introduced their Accessories collection. Customers can enjoy the same quality and affordability in accessories as they have come to expect in footwear. Every season ALDO Accessories reveals a new selection of merchandise that is fresh, on-trend and reflective of what is hot on the global fashion scene. This unique retail concept has quickly become a top destination for all the must-haves in accessories and handbags.', 'aldo_logo.jpg', '', '', '', '', '', '', '', 'aldo_img.jpg', '', '', '', ''),
(24, 'Allen Solly (Kids)', 'All week days - 11am to 10pm.', 'Grand Galleria Ground Level', '1', '1', 'Love to effortlessly look good anytime,anywhere? Say hello to Allen Sollys new womenswear collection. Now Seamlessly glide from am to pm with impeccable style as you strike the perfect balance between comfort , elegant. A meeting at noon,a quiet lunch for two, or a fun night out with the girls....No matter where you are or what the occasion is, your casually chic style will be a forever trender.', 'allen_logo.jpg', '', '', '', '', '', '', '', 'allen.jpg', '', '', '', ''),
(25, 'Allen Solly (Women)', '', '', '1', '1', '', 'allen_logo1.jpg', '', '', '', '', '', '', '', 'allen1.jpg', '', '', '', ''),
(26, 'AM PM', 'All week days - 11am to 10pm.', 'Palladium - Third Floor', '1', '1', '', 'ampm_logo.jpg', '', '', '', '', '', '', '', 'ampm.png', '', '', '', ''),
(27, 'Amber , Shirin', 'All week days - 11am to 10pm.', 'Palladium', '1', '1', 'In the discerning world of creative Indian fashion design, Amber and Shirin are two designers who have it all. Almost 20 years of combined experience, loads of creativity, a strong in-house design team and skilled professionals. Ensuring that every ensemble that is created from their studio is exquisite in cut, color and design.While their forte lies in wedding trousseaus and personalized wardrobes, their ready-to-wear ensembles are highly appreciated and are now retailing from several hi profile fashion studios in India, Dubai, New York and London. Catering to men and womens wear, an Amber and Shirin branded ensemble is now something that discerning clients would look forward to having in their wardrobes. Their designs are exclusive and rarely duplicated.', 'amber_n_shirin_logo.jpg', '', '', '', '', '', '', '', 'amber_n_shirin.jpg', '', '', '', ''),
(28, 'And', 'All week days - 11am to 10pm.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 'Anita Dongre', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'ANITA DONGRE TIMELESS delves into the heritage of Indian textiles and puts together traditional weaves and silks from master weavers all over the country to create styles that are classic, feminine, and eternal, and can be handed down from one generation to the next. A collection that embodies the beauty of hand crafted embroideries and fabrics. This label brings together couture sensibilities and timeless style. Aptly called ANITA DONGRE TIMELESS, this eternal occasion wear is a fashion statement that adds elegance and grace to your wardrobe.', 'anita_dongre.jpg', '', '', '', '', '', '', '', 'anita_dongre_logo.jpg', '', '', '', ''),
(30, 'Anita Dongre(Bridal)', 'All week days - 11am to 10pm.', 'SkyZone Ground Level', '1', '1', 'ANITA DONGRE TIMELESS delves into the heritage of Indian textiles and puts together traditional weaves and silks from master weavers all over the country to create styles that are classic, feminine, and eternal, and can be handed down from one generation to the next. A collection that embodies the beauty of hand crafted embroideries and fabrics. This label brings together couture sensibilities and timeless style. Aptly called ANITA DONGRE TIMELESS, this eternal occasion wear is a fashion statement that adds elegance and grace to your wardrobe.', '', '', '', '', '', '', '', '', 'anita_dongre_bridal.jpg', '', '', '', ''),
(31, 'Aptronix', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Aptronix', 'aptronix_logo.jpg', '', '', '', '', '', '', '', 'aptronix.png', '', '', '', ''),
(32, 'AROMA THAI Foot Spa', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'AromaThai Foot Spa now at High Street Phoenix: Getting a foot massage is no longer synonymous with Thailand. Here in Mumbai we strive to bring a Thai way of life for the tired feet of the locals. The foot has nerve endings from every organ in your body and when accurate pressure is applied, it provides relief to the rest of the body. AromaThai has professionally trained reflexology therapists certified by the Thai Ministry to tend to you in a relaxing atmosphere. Here in a surrounding of dark wood, soft lighting and beige recliners you will feel your worries slip away as our professionals knead your legs and feet with special aromatherapy oils. Our treatments have been specifically designed to energize your body and soul, providing you with a total experience that will leave you relaxed, revitalized, and replenished.', 'aroma_thai.jpg', '', '', '', '', '', '', '', 'aroma.jpg', '', '', '', ''),
(33, 'Ayesha', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Ayesha is a must-visit for the fun and fantabulous fashion essentials available to all! Ayesha is your one-stop-candy shop for fantabulous fashion essentials.', 'ayesha_logo.jpg', '', '', '', '', '', '', '', 'ayesha.jpg', '', '', '', ''),
(34, 'Bally', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Bally heralds its 160th year anniversary with a celebratory range of shoes and bags for men and women. These eye-catching creations speak of the heritage and craftsmanship of Bally, with a hint of contemporary wit.', 'bally_logo.jpg', '', '', '', '', '', '', '', 'bally.jpg', '', '', '', ''),
(35, 'Basecamp Traveller', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Basecamp is a unique concept in India that houses over 600 options designed bearing in mind the various needs and desires of the traveller. It is the ultimate one stop travel lifestyle destination that provides a range of products to make travel convenient and easy for the adventurous, leisure and business traveler. The store has a blend of various products like overnight office bags, laptop bags and trolley bags for the business traveller and even high utility one for the adventure and leisure traveler - camping gear, backpack bags, torchlights, camp stoves, portable water filters for the backpack / adventurous camping traveler. Basecamp houses brands from internationally reputed companies known for their travel and accessories gear. The brand products are from companies like Victorinox Travel Gear ( Switzerland), Victorinox Pocket Tools (Switzerland), Maglite Flash Lights ( USA), Design Go- Travel Accessories ( UK), Crossings Travel and Outdoor Gear ( Singapore), Katadyn Water Purifying Bottles (Switzerland), Laken Water Bottles(Spain), Optimus- Traveling Cooking Systems(USA) to name a few. Now traveller can have a choice of products to cater to his /her needs and requirements.', 'basecamplogo.jpg', '', '', '', '', '', '', '', 'basecamp_traveller.jpg', '', '', '', ''),
(36, 'BATA', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'We will provide updated information soon', 'bata_logo.jpg', '', '', '', '', '', '', '', 'bata.jpg', '', '', '', ''),
(37, 'BEING HUMAN', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'Being Human Clothing - A Clothing line with a heart, provides for a world-class fashionable product coupled with the satisfaction of doing good. The Brand strive to bring to its consumers the best of international fast fashion in India.', 'b_h_logo.jpg', '', '', '', '', '', '', '', 'being_human.png', '', '', '', ''),
(38, 'Bhandare Eyecare', 'All week days - 11am to 10pm.', 'High Street Units', '1', '1', 'Bhandare Opticians, started 75 years ago is one of Indias fastest growing optical retail chains. The family owned business is managed by Mr. Ajoy Bhandare the third generation family member and now plans to corporotise in order to facilitate fast growth to cash in on the Indian retail revolution. The Company is Mumbai based and for the last 70 years was one of the citys most prominent Opticians. It deals in eye testing, spectacles prescription, contact lenses fitting and designer eyewear frames and sunglasses. It was the pioneer of contact lenses fitting in India in 1956.It has been renowned for its accuracy in spectacle dispensing.', 'bhandaarelogo.jpg', '', '', '', '', '', '', '', 'bhandare.jpg', '', '', '', ''),
(39, 'Biba', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'The Word BIBA in Punjabi is an endearment for a young and pretty girl implying sublime qualities, so it was the name decided by Meena Bindra, the founder of BIBA for her line of Salwar, Kameez and Dupattas started in 1986. It was a line which was fashionable and affordable which is what BIBA stands for Fashion at affordable prices. New ranges were added with time and BIBA started a very stylish Mix-n-Match range which was added as a second category. The Mix-n-Match in BIBA is very contemporary in feel and look, while the Salwar Kameez are very ethnic with focus on Indian crafted look, hand block prints and vegetable dyes, Indian handlooms with Traditional embroideries and other Indian Techniques and sensibilities applied in the making of the Garment.', 'biba_logo.jpg', '', '', '', '', '', '', '', 'biba.jpg', '', '', '', ''),
(40, 'Big Bazaar', 'All week days - 11am to 10pm.', 'courtyard', '1', '1', 'Big Bazaar is designed as an agglomeration of bazaars or Indian markets with clusters offering a wide range of merchandise including fashion and apparels, food products, general merchandise, furniture, electronics, books, fast food and leisure and entertainment sections. Food Bazaar, a supermarket format was incorporated within Big Bazaar in 2002 and is now present within every Big Bazaar as well as in independent locations.', 'b_b_logo.jpg', '', '', '', '', '', '', '', 'big_bazaar.jpg', '', '', '', ''),
(41, 'Black Berrys', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'For real sharp clothing, Black Berrys provides quality fits in formal wear for both men and women. One can also pick selected accessories to coordinate.', 'bberry_logo.jpg', '', '', '', '', '', '', '', 'blackberry.jpg', '', '', '', ''),
(42, 'Bombay Blue', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Bombay Blue, is a multi-cuisine restaurant which has a vastly diverse menu and has created a niche for life-style, full service and casual dining. Its diverse menu consisting of Indian, Italian, Mexican, Lebanese, Sizzlers, and Beverages- presents tempting choice for food lovers across all segments. Besides its signature Sizzling Brownies Channa Batura, Special Kids Menu and Value Meals were introduced as a pioneering concepts, as were unlimited refills of beverages.', 'bombay_blue_logo.jpg', '', '', '', '', '', '', '', 'bombay_blue.jpg', '', '', '', ''),
(43, 'Bose Store', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', '+91-24961999 / 2999, manager.bbp@panindiafoods.com', 'bose_logo.jpg', '', '', '', '', '', '', '', 'bose.jpg', '', '', '', ''),
(44, 'Bottega Veneta', 'All week days - 11am to 10pm.', 'Palladium Ground floor', '1', '1', '"Discretion, quality, and craftsmanship Bottega Veneta has created a new standard of luxury since its founding in Vicenza in 1966. Steeped in the traditions of Italys master leather craftsmen and long celebrated for its extraordinary leather goods, Bottega Veneta has recently emerged as one of the worlds premier luxury brands. The companys famous motto, then your own initials are enough, expresses a philosophy of individuality and confidence that now applies to a range of products including womens and mes accessories, luggage, fine jewelry, and more. "', 'bottega.jpg', '', '', '', '', '', '', '', 'bottega_veneta.jpg', '', '', '', ''),
(45, 'Brooks Brothers', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'As Americas oldest retailer, Brooks Brothers has long been a fashion innovator. Established in New York City in 1818, Brooks Brothers was the first to offer ready-to-wear clothing and has continued throughout history with iconic product introductions including: seersucker, madras, the non-iron shirt and the original button-down collar. Nearly two centuries later, Brooks Brothers is proud to uphold the same traditions and values and to be the destination for ladies and gentlemen from every generation. In recognition of the passion for personalization, the brand’s Made To Measure service offers a collection of finest fabrics, combined with its world famous make. Since its founding 196 years ago in New York, Brooks Brothers has become a legendary international brand while maintaining a steadfast commitment to exceptional service, quality, style and value.', 'brook_brothers_logo.jpg', '', '', '', '', '', '', '', 'brooks_brother.png', '', '', '', ''),
(46, 'Burberry', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Burberry Group is a British luxury fashion house, manufacturing clothing, fragrance, and fashion accessories. Its distinctive tartan pattern has become one of its most widely copied trademarks. Burberry is most famous for its iconic trench coat, which was invented by founder Thomas Burberry. The company has branded stores and franchises around the world, and is now available at The Palladium.', 'burberry_logo.jpg', '', '', '', '', '', '', '', 'burberry.jpg', '', '', '', ''),
(47, 'Burger King', 'All week days - 11am to 10pm.', 'Courtyard Ground Level', '1', '1', 'Every day, more than 11 million guests visit BURGER KING(r) restaurants around the world. And they do so because our restaurants are known for serving high-quality, great-tasting, and affordable food. Founded in 1954, BURGER KING(r) is the second largest fast food hamburger chain in the world with about 13,000 restaurants operating in 100 countries. The original HOME OF THE WHOPPER(r), our commitment to premium ingredients, signature recipes, and family-friendly dining experiences is what has defined our brand for more than 50 successful years.', 'burger_king_logo.png', '', '', '', '', '', '', '', 'burger_king.png', '', '', '', ''),
(48, 'Byblos', 'All week days - 11am to 10pm.', 'Sai Service Area', '1', '1', 'Byblos is a fun, edgy restaurant in phoenix mills, lower parel with a trendy and sleek atmosphere. Playful food meets serious and elegant plating. Byblos Food and Wine hopes to herald a new food renaissance, with renewed interest in fresh, additive free food that is organic and locally sourced. Byblos transforms the restaurant space into a socially dynamic one, where the interplay begins not only between the diner and the food, but between all the senses.', 'byblos_logo.jpg', '', '', '', '', '', '', '', 'byblos.png', '', '', '', ''),
(49, 'Café Moshes', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Moshes has the distinction of being the only signature chain of restaurants and cafes in Mumbai. Each outlet comes with an unspoken pledge made from the freshest and the most natural ingredients and prepared in the traditional way. The freshness flows into the casual and comfortable ambience which exudes warmth and cheerfulness.', 'cafe_moshes_logo.jpg', '', '', '', '', '', '', '', 'cafe_moshes.jpg', '', '', '', ''),
(50, 'California Pizza Kitchen', 'All week days - 11am to 10pm.', 'Courtyard First level', '1', '1', 'It all begins with an imagination and ends with unforgettable flavours at California Pizza Kitchen. The restaurant has been successful in spreading its mission of providing innovative recipes, brought to life with fresh, high quality ingredients. California Pizza Kitchen is exquisitely ornamented with warm colours and rich textures. The open-exhibition kitchen takes centre stage where guests can watch all novel creations being prepared first hand. Extending its hospitality further, California Pizza Kitchen brings unique and wholesome offering for foodies by providing them an exceptional gourmet experience specially designed by our expert Chef. From hearth-baked pizzas, speciality pastas, creative salads, appetizers, soups, sandwiches and desserts, California Pizza Kitchen has won legions of food experts. The palatable menu comprises of an array of dishes ranging from pizzas to pastas including highlights such as Thai Crunch Salad, BBQ Salad, Spicy Chipotle Chicken Pizza, Chicken Carnitas Pizza, Fire Roasted Vegetable Pizza, Tostada Pizza, BBQ Chicken Pizza, Chicken Fajita Pizza to name a few. Adding tang to the food flavours are the refreshing Coolers, Iced Teas , Lemonades. And for the perfect finish, end your meal on a sweet note with desserts such as the signature Red Velvet Cake and Tiramisu.', 'california_p_k_logo.jpg', '', '', '', '', '', '', '', 'california_p_k.jpg', '', '', '', ''),
(51, 'Calvin Klein Jeans', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'From the designer himself, Calvin Klein, offers options for men and women in casual wear including accessories', 'c_k_logo.jpg', '', '', '', '', '', '', '', 'c_k.jpg', '', '', '', ''),
(52, 'CANALI', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'The range of Canali products broadened with the launch of the Canali Proposta and Canali Exclusive lines, as well as expanding to encompass an accessories collection of shirts, ties, belts, shoes and the distinctive line of Canali Sportswear. In its third generation, Canali today constitutes a design and manufacturing group, with seven centers of production located in Italy - all connected with its headquarters at Sovico, near Milan. Each garment is tailored and produced in Italy. Canali has now opened its doors at The Palladium.', 'canali_logo.jpg', '', '', '', '', '', '', '', 'canali.jpg', '', '', '', ''),
(53, 'Canon', '', '', '1', '1', '', 'canon.jpg', '', '', '', '', '', '', '', 'canon_img.jpg', '', '', '', ''),
(54, 'Canvas Laugh Club', 'All week days - 11am to 10pm.', 'Palladium', '1', '1', 'Canvas Laugh Club is India’s Foremost Comedy Club where everyday our customers come with colleagues, friends and families to see the Best Comedy Shows and unwind after a long-day. We work with the top artists in the country to produce shows, generate content, develop new comedy talent, and spread awareness of the art form that we love. We also curate a program of the best shows and artists at India’s first and only venue dedicated to the genre of live comedy, the Canvas Laugh Club, Mumbai. Our venue, it’s a club and particularly its notorious green rooms are frequented by the crème of the comedy circuit, on any night of the week there are always a few lingering around.', 'canvas_laugh_club_logo.jpg', '', '', '', '', '', '', '', 'canvas_laugh_club.png', '', '', '', ''),
(55, 'CELIO', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Specialists in men ready-to-wear, Celio offers its customers trousers, shirts, sweaters, t-shirts, polo-shirts, suits, jackets, belts, ties and boxer shorts. A fashion collection, reinterpreted every season in order to remain the most innovative, structured around our three categories - Sportswear, Casual and Business.', 'celio_logo.jpg', '', '', '', '', '', '', '', 'celio.jpg', '', '', '', ''),
(56, 'Chanel', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Chanel is a French fashion house founded by the couturier Gabrielle Coco Chanel, recognized as one of the most established in haute couture, specializing in luxury goods (haute couture, ready-to-wear, handbags, perfumery, and cosmetics among others. The Chanel store is now open at The Palladium', 'chanel_logo.jpg', '', '', '', '', '', '', '', 'chanel.png', '', '', '', ''),
(57, 'Charles , Keith', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'Charles , Keith brings shoppers a plethora of stylish footwear and accessories! This new store at Grand Galleria has everything from basic pumps to wedges. The brand exudes style and confidence, caters to all you fashion forward and trendy shoppers! Charles , Keith not only complements but completes your wardrobe. Be assured to find great shoes and bags here!', 'charles_and_keith_logo.jpg', '', '', '', '', '', '', '', 'charles_and_keith.jpg', '', '', '', ''),
(58, 'CHEEMO', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'The store provides leather footwear, bags, handbags, purses and accessories in classic and contemporary styles', 'cheemo_logo.jpg', '', '', '', '', '', '', '', 'cheemo.jpg', '', '', '', ''),
(59, 'Chemistry', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The founders of Chemistry, Sunil and Shalia Jhangiani, saw a need to bring on trend fashion to stylish young Indian woman. Who follow international style trends and want a wardrobe that reflects their experimental and confident style. Chemistry collections take inspiration from the catwalks of Europe, whilst also working in collaboration with trend and colour forecasting agencies, from across the world. Chemistry wants to offer Indian women access to exciting on-trend casual fashion. Which compliment both the Indian female form and with fabrics suited to the Indian climate.', 'chemistry_logo.jpg', '', '', '', '', '', '', '', 'chemistry.jpg', '', '', '', ''),
(60, 'Chicco', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Its a babys day out at High Street Phoenix as Chicco, the worlds favorite baby care brand opens its flagship store to celebrate the festive season. Chicco is constantly thinking of ways to keep babies safe and happy, whether its playing, relaxing, travelling, eating or sleeping - everything has one purpose - the smile of a baby.', 'chicco_logo.jpg', '', '', '', '', '', '', '', 'chicco.jpg', '', '', '', ''),
(61, 'CitiBank', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 'CLAIRES', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Claire’s Stores Inc is one of the world’s leading specialty retailers of fashionable jewellery and accessories for young women, teens, tweens and kids. Its vision is to inspire girls and women around the world to become their best selves by providing products and experiences that empower them to express their own unique individual styles. Claire’s® represents a "Girl’s Best Friend" and a favourite shopping destination for teens, tweens, and kids. With constant celebrity/brand associations ,from Katy Perry, One Direction and Vamps to Frozen, Hello Kitty, Disney Princess and more, Claire’s ®keep things fun and exciting.', 'claires_logo.jpg', '', '', '', '', '', '', '', 'claires.png', '', '', '', ''),
(63, 'Clarins', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'French , European leader in skincare. Clarins products are 100% plant based and offers solutions to various skin concerns. Clarins always strives to offer the best products based on a detailed skin analysis at the accessible prices.', 'clarins_logo.jpg', '', '', '', '', '', '', '', 'clarins.jpg', '', '', '', ''),
(64, 'Clarks', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'Clarks has been committed to selling shoes that offer superior quality, style and comfort. Clakrs offers a huge variety of shoes found in sections such as boots, casual and sandals for both genders.', 'clarks_logo.jpg', '', '', '', '', '', '', '', 'clarks.jpg', '', '', '', ''),
(65, 'clinque', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'Founded on the philosophy that great skin can be created, Clinique pioneered the dermatologist-developed cosmetics brand. Each beautifully crafted Clinique skin care and make up product is Allergy tested and 100% fragrance free - crucial in a world where allergies have been labeled the modern epidemic.', 'clinique_logo.jpg', '', '', '', '', '', '', '', 'clinique.jpg', '', '', '', ''),
(66, 'Coffee Bean , Tea Leaf', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Founded in 1963, The Coffee Bean , Tea Leaf® is the oldest and largest privately-held chain of specialty coffee and tea stores in the United States. With a reputation for excellence, the company is a leader in product innovations, having developed the original Ice Blended® beverage. Providing the highest quality coffees and teas for 50 years, The Coffee Bean , Tea Leaf® currently has more than 800 stores. These stores blanket the world in markets such as The United States, Singapore, Malaysia, Korea, Brunei, Indonesia, UAE, Israel, Australia, China, Kuwait, Egypt, Qatar, and the Philippines and continue to expand both domestically and internationally.  In India, it has outlets in Delhi, Mumbai, Kolkata and Hyderabad. Coffee Bean in India has made a mark by offering the International coffee experience besides the food specially made for the Indian markets. Besides the signature Ice Blended , Coffee Bean in India has signature sandwiches, chocolate fondues etc. ', 'c_b_t_l_logo.jpg', '', '', '', '', '', '', '', 'c_b_t_l.jpg', '', '', '', ''),
(67, 'Color plus', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', '+912224966067 / 9324652233 ,cbtlhspmum@panindiafoods.com', 'color_plus_logo.jpg', '', '', '', '', '', '', '', 'colorplus.jpg', '', '', '', ''),
(68, 'Copper Chimney', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Timeless craft of Great North Indian Cuisine - that is Copper Chimney for you !! Declared as the undisputed capital of authentic north Indian cuisine by food lovers, Copper Chimney has been Mumbais foremost culinary landmark.The signature dishes include Chelo Kebab, Jinga Nisha,Vegetable Kheema, Benarasi Pulao that have been prepared with our trademarked spices and mixes.', 'cooper_chimney_logo.jpg', '', '', '', '', '', '', '', 'cooper_chimney.jpg', '', '', '', ''),
(69, 'Costa Coffee', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Costa Coffee - A Haven for Coffee lovers a perfect lace for conversation over coffee. Every single Costa store/staff is professionally trained in the art of coffee making by our experts. Costa Coffee promises you a perfect cup of Costa coffee every time you visit.', 'costa_logo.jpg', '', '', '', '', '', '', '', 'costa_coffeee.jpg', '', '', '', ''),
(70, 'Cotton World', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'Cotton World is Indians first store dedicated to natural clothing, offering a variety of comfortable and quality rich clothes for men , women.', 'cotton_world_logo.jpg', '', '', '', '', '', '', '', 'cotton_world.jpg', '', '', '', ''),
(71, 'Cream Centre', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Cream Centre has transcended generations to emerge as the leading vegetarian restaurant with all-time favorites and inventive culnary innovations in an inviting ambience to a discerning clientele. Cream Centre first claimed its fame with its still best selling dish, The Original Channa Bhaturas and other Punjabi dishes. The restaurant has adapted to changing trends and created original dishes like the Worlds Best Nachos  Mera Chhota Sizzler, Mera Thali and Sizzling Brownie Fundae', 'cream_center_logo.jpg', '', '', '', '', '', '', '', 'cream_center.jpg', '', '', '', ''),
(72, 'Crocs', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'The international brand for its unusal shape in footwear Crocs provides a good option for those looking for the wet weather and casual wear with bold and bright colours. The store stocks for the entire family including children and toddlers alike.', 'crocs_logo.jpg', '', '', '', '', '', '', '', 'crocs.jpg', '', '', '', ''),
(73, 'CROMA', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Opened in Dec 2008, the High Street Phoenix store of Croma, The Electronics Megastore has catered to and delighted myriads of customers by satisfying not just their electronics needs but also by providing them a world class shopping experience through our 15,000 sq.ft. of great shopping ambience, wide range of products, robust after sales service and our trained and knowledgeable sales executives who help consumers make informed purchase decisions. Croma is owned and run by Infiniti Retail Limited, a 100% subsidiary of Tata Sons. Woolworths Ltd, the Australian retail giant, provides technical support and strategic sourcing facilities from its global network.', 'croma_logo.jpg', '', '', '', '', '', '', '', 'croma.jpg', '', '', '', ''),
(74, 'Da Milano', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'Chic, fancy and very handy handbags, Da Milano provides quality and classy bags and accessories for women.', 'da_milano.jpg', '', '', '', '', '', '', '', 'da_milano1.jpg', '', '', '', ''),
(75, 'Daniel Hecter', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The renowed brand for men in semi formal formal and casual wear.', 'daniel_hechter_logo.jpg', '', '', '', '', '', '', '', 'daniel_hechter.jpg', '', '', '', ''),
(76, 'Davidoff', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'We remain loyal to Zino Davidoff’s demanding and innovative principles which built the brand and created the myth of Davidoff. This is not only the heritage bestowed upon us by Zino, it’s the map that guides us on our quest forward. The Davidoff philosophy means finding true luxury in living passionately and intensely, living every moment fully, to the limit. The world is a borderless wonderland, full of never-ending inspirations and opportunities to bring together the finest materials and ingredients. It is this passion for exploring the new, uncovering and discovering the ultimate in design, craftsmanship and innovation that underscores Davidoff bedrock belief - because life is too precious for compromise, only the best will do. Zino Davidoffs vision and principle to travel the world in quest for inspiration and his commitment to offer ultimate quality is embodied by every product bearing Davidoff brand name. Zinos pure pleasure in life, his spirit and in-depth expertise combined with his special ability to treat every customer with special attention, contributes to the companys global success. Davidoffs prime focus has always been quality. Forever determined to offer the best, inspirations from all over the world are translated into products of perfection. Expertise and passion are an integral part of the development process which emphasizes the uniqueness. Elegant understatement, iconic design and premium ingredients combined with perfect craftsmanship: these are the fundamental characteristics of all Davidoff products, which support the holistic and mobile lifestyle of todays cultivated global citizens.', 'davidoffs_logo.jpg', '', '', '', '', '', '', '', 'davidoffs.png', '', '', '', ''),
(77, 'Dessange Paris', 'Opening Soon', 'Skyzone Level One', '1', '1', 'No1 “Huate Coiffure" in the world as it’s rightly called; DESSANGE is undoubtedly world’s leading International salon and spa with around 2000 salons in 47 countries. Femininity, elegance and charm - three words define the world of DESSANGE, a house of luxury dedicated to womens beauty. Aiming to offer state of art, a global concept of beauty that combines the elegance, personality and quality of a genuinely tailor-made offering, Dessange Paris opened its gates in Mumbai with two signature salon located at Kemps corner and Bandra and will soon be opening its third signature salon at High Street Phoenix, Lower Parel. This salon and spa expertise extends to the core of the brands product ranges, with hair care, make-up, face and body care formulas that offer every woman a glamorous aura, a sensory experience and a professional result.', 'dessange_logo.png', '', '', '', '', '', '', '', 'dessange.png', '', '', '', ''),
(78, 'Diesel', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Diesel S.P.A. is an Italian design company. It is best known for luxury, pret-a-porter clothing aimed at the young adult market, particularly jeans. The Diesel store is now open at The Palladium.', 'diesel_logo.jpg', '', '', '', '', '', '', '', 'diesel.jpg', '', '', '', ''),
(79, 'DKNY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'Dominos', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'The current Dominos menu features a variety of Italian-American entrees and side dishes. Pizza is the primary focus, with traditional, specialty and custom pizzas available in a variety of crust styles and toppings. Additional entrees include pasta bread bowls and oven-baked sandwiches. The menu offers chicken side dishes, breadsticks and salads, as well as beverages and desserts.', 'dominos_logo.jpg', '', '', '', '', '', '', '', 'dominos.jpg', '', '', '', ''),
(81, 'Dune London', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'The Dune Group is one of the most influential global players in fashion footwear and accessories. Founded in 1992 in London, Dune has rapidly expanded to include over 300 outlets across UK, Europe, Russia and the Middle east, as well as online. Our unique collections are all beautifully designed in-house offering a style for every occasion, and are adored by celebrities and fashionistas with a flair for style, highest expectations in quality and attention to detail. The Dune range of men’s and ladies footwear, bags and accessories is the epitome of affordable luxury.', 'dune_logo.jpg', '', '', '', '', '', '', '', 'dune.jpg', '', '', '', ''),
(82, 'E Dresses', 'All week days - 11am to 10pm.', 'Palladium HSU Ground Level', '1', '1', 'We dream big and never settle for the status. Our focus is to provide best service to the customers with Hi-tech accessories that look as good as they function. Incorporated in 2013, one of the leading of various Hi -tech mobile accessories and digital media. company founder Mr. Ashish Thakkar he has one of the best experience in the field of hi-tech Lifestyle Gadgets and many more.......', 'e_dress_logo.jpg', '', '', '', '', '', '', '', 'e_dress.png', '', '', '', ''),
(83, 'Ed Hardy', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'Ed Hardy is an internationally recognized brand and enjoys the status of a cult classic with massive fan following. An alternative lifestyle brand at its core, the brand celebrates classic American tattoos as an art form. Don Ed Hardy is considered by many to be the Godfather of Tattoo. His work offers timeless and a distinct artistic appeal. The mission of the brand is to stay true to the essence of Don Ed Hardy’s vision for his art, and celebrate its history and beauty by creating dynamic apparel and related lifestyle products. Ed Hardy offers Menswear across various categories including Shirts, T-shirts, Jeans, Jackets, Trousers and Shorts. The brand has recently launched its Womenswear range.', 'ed_hardy_logo.jpg', '', '', '', '', '', '', '', 'ed_hardy.png', '', '', '', ''),
(84, 'Emporio Armani', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'The label features ready-to-wear and accessories. Emporio Armani is available in its 13 stores in the U.S. and over 140 worldwide,and on the brands website. In January 2010, famed football star Cristiano Ronaldo and Hollywood movie star Megan Fox became the male and female face and body of Emporio Armani. The store is now open at The Palladium.', 'emporio_armani_logo.jpg', '', '', '', '', '', '', '', 'emporio_armani.png', '', '', '', ''),
(85, 'Episode', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Episode, Indias premiere silversmiths, wallow its presence at Mumbais most adored retail space High Street Phoenix. Exemplifying luxury, Episode vintage in silver design and craftsmanship can be traced back to 1882. The store offers a large variety of silver , brass designs for ones home, gifting and for the corporate. Episode offers the same quality and design as it sells to its international clients like Armani, Lambert, Ralph Lauren, etc. Products include table and serve ware, uniquely designed deities like Ganeshas, decorative products like candle stands, vases, personal gifts as well as articles for your bar. The baby range is unique in itself. Custom made wedding invites for bridal trousseau, return gifts are among episodes vast repertoire of exclusive designs in silverware.', 'episode_logo.jpg', '', '', '', '', '', '', '', 'episode.jpg', '', '', '', ''),
(86, 'Ermengildo Zegna', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Known for its bespoke suits, Italian luxury menswear retailer Ermenegildo Zegna specializes in off-the-shelf and custom-made shirts and suits.', 'ermenegildo_logo.jpg', '', '', '', '', '', '', '', 'ermenegildo.jpg', '', '', '', ''),
(87, 'Estee Lauder', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', '"Every woman can be beautiful."- Estée Lauder Estée Lauder is one of the world’s most renowned beauty companies. Our skincare, makeup and fragrance products are innovative, technologically advanced and proven effective. Estée Lauder has earned a worldwide reputation for elegance, luxury and superior quality, and our products are sold in more than 140 countries and territories. For over 60 years, we have stayed true to the unshakeable belief that inspired Mrs. Estée Lauder to found her company in 1946: the belief that every woman can be beautiful. Today, that simple notion has literally changed the face of the beauty business. Welcome to the world of Estée Lauder.', 'estee_lauder_logo.jpg', '', '', '', '', '', '', '', 'estee_lauder.jpg', '', '', '', ''),
(88, 'Ethos Summit', 'All week days - 11am to 10pm.', 'Palladium', '1', '1', 'Ethos Watches is Indias largest chain of luxury watch boutiques, with 44 stores across 14 cities. Founded with the vision to be the biggest and finest retailer of premium and luxury watches in India, Ethos incorporates exemplary ethical and customer service standards. With a well-balanced and diverse portfolio of men’s and women’s timepieces, we are leaders in the Indian watch industry. Influenced by the world of luxury and culture, Ethos curates the best of the world’s iconic watch brands, including Rolex, Cartier, Omega, Breitling, IWC, TAG, Blancpain, Carl F. Bucherer, Longines, JLC and Rado, amongst others. Through our commitment to customer service, Ethos brings sophistication, style advice and knowledge to watch enthusiasts across India. Our stores are located at Mumbai, Bangalore, Chennai, Hyderabad, Delhi, Gurgaon, Chandigarh, Pune, Ahmadabad, Nagpur, Aurangabad, Bhopal, Surat and Ludhiana. Ethos also has a strong presence in travel retail, with airport stores at Delhi - International and Domestic, Bangalore ,International, Mumbai ,Domestic, Hyderabad ,International and Domestic and Ahmadabad –Domestic. Launched in 2012, www.Ethoswatches.com is a niche, one-of-a-kind portal. With over 6000 spectacular watches on display - each meticulously segregated by filters including Brand, Price, Gender, Movement, Case Material, Strap Type and Water Resistance, to name a few, and over 50 luxury brands, watch enthusiasts are offered a varied collection to choose from. The website clocks over 360,000 visits and 1.8 million page views and over 12,000 calls received by the Luxury Watch Helpline every month. The unique watch concierge service is the country’s only ‘luxury watch helpline where customers can dial in and speak with exclusive ‘Luxury Watch Consultants for assistance in choosing a premium timepiece. For more details, visit ethoswatches.com.', 'ethos_logo.jpg', '', '', '', '', '', '', '', 'ethos.jpg', '', '', '', ''),
(89, 'Fab India', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Fab India is Indias largest private platform for products that are made from traditional techniques, skills and hand-based processes. Fab Indias products are natural, craft based, contemporary, and affordable.', 'fab_india_logo.jpg', '', '', '', '', '', '', '', 'fab_india.jpg', '', '', '', ''),
(90, 'Faces', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'High Street Phoenix presents Faces a store that offers an exclusive line of Cosmetics just in time for the festive season. With a proud Canadian heritage spanning 40 years, FACES Cosmetics offers an exclusive line of makeup, skincare products and personal care accessories. FACES operate a state-of-the-art R,D and product testing facility at Toronto, while its products are manufactured in North America and Asia. Not tested on animals, FACES products are hypoallergenic and conform to the most stringent quality and safety requirements.', 'faces_logo.jpg', '', '', '', '', '', '', '', 'faces.jpg', '', '', '', ''),
(91, 'FCUK', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'Founded in 1972 by Stephen Marks, French Connection, the edgy, attitudinal, high street British fashion brand set out to create well-designed and fashion-forward clothing with a quirky spin on design.', 'fcuk_logo.jpg', '', '', '', '', '', '', '', 'fcuk.jpg', '', '', '', ''),
(92, 'Food Hall', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The supermarket for gourmet food, fruits and vegetables , ready-to eat meals and snacks, beverages and dairy products plus a whole lot more can be shopped here.', 'foodhall_logo.jpg', '', '', '', '', '', '', '', 'foodhall.jpg', '', '', '', ''),
(93, 'FOREST ESSENTIALS', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'Pure natural body products that include scrubs, moisturizers, exfoliaters, bath crystals, conditioners and oils, Forest Essentials provides them all. An excellent options for gifting to oneself and loved ones.', 'forest_essentials_logo.jpg', '', '', '', '', '', '', '', 'frest_essentials.jpg', '', '', '', ''),
(94, 'Forever New', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Forever New ensures customers are always able to find the latest must have items to add to their wardrobe, with prices to suit every budget.', 'forever_new_logo.jpg', '', '', '', '', '', '', '', 'forever_new.jpg', '', '', '', ''),
(95, 'Fossil', 'All week days - 11am to 10pm.', 'Palladium HSU Ground Level', '1', '1', 'Fossil Group Inc. (NASDAQ: FOSL) is a global company specializing in the design, innovation, and marketing of fashion lifestyle and accessory products. At the heart of Fossil’s vision is a commitment to fostering creativity and delivering the best in design through the company’s namesake FOSSIL brand and a portfolio of internationally recognized owned and licensed brands. The FOSSIL brand is rooted in authenticity and a distinctive modern-vintage design aesthetic. With nearly 400 stores worldwide and a strong global e-commerce business (www.fossil.com). Fossil is internationally known for its eclectic assortment of lifestyle and accessory items including watches, jewellery, handbags, and clothing. The company is constantly developing its multi-brand portfolio through its core competencies in innovative branding, world-class design, and dynamic global distribution', 'fossil_logo.jpg', '', '', '', '', '', '', '', 'fossil.jpg', '', '', '', ''),
(96, 'Furla', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Italian brand Furla is known for its exclusive range of of leather handbags, shoes and accessories small leather goods such as belts, wallets and purses.', 'furla_logo.jpg', '', '', '', '', '', '', '', 'furla.jpg', '', '', '', ''),
(97, 'Gajalee', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Each restaurant provides a rich , unique course of coastal cuisine, prepared by expert chefs, who are true masters in their craft. In fact, some of the culinary innovations at Gajalee have gone on to become household names including the Bombil Fry (Bombay Duck), the Clam Koshimbir , the Prawns Pickle.', 'gajalee_logo.jpg', '', '', '', '', '', '', '', 'gajalee.png', '', '', '', '');
INSERT INTO `hsp_brand` (`id`, `name`, `hours`, `location`, `isfeatured`, `isnew`, `description`, `logo`, `json`, `contactno`, `email`, `facebook`, `twitter`, `instagram`, `googleplus`, `image`, `specialoffer`, `specialofferimage`, `stars`, `duration`) VALUES
(98, 'Gangar Eyenation', 'All week days - 11am to 10pm.', 'Sky Zone First Level', '1', '1', 'High Street Phoenix in Lower Parel has always been associated with up-marked brands, style and high fashion! And now, it has another feather in its cap. Gangar Eyenation, easily Mumbais most stylish eyewear store has opened its swanky doors in Lower Parel at High Street Phoenix. What started off as a one-store dream has now emerged into a trendy chain of 44 stores located all across Mumbai, Pune and Gujarat? Gangar Eyenation has certainly done the metropolis proud with its unique growth story. With the launch of this High Street Phoenix store, Gangar Eyenation has clearly emerged as the one-stop shop for trendy Mumbaikars looking for the most contemporary spectacles, contact lenses, sunglasses, powered sunglasses and eye care advice. About GANGAR EYENATION Gangar Opticians Pvt. Ltd. has established themselves as one of the countrys top opticians with over 4 decades of experience in eyewear solutions. We established in 1977 and are promoted by the Gangar’s, India´s most respected and well known optician family. With a trusted family name behind us, this professionally-managed brand has transformed itself into a fast growing and rapidly expanding chain of eyewear solutions. Today, Gangar Eyenation has grown from a single store to one of the largest chains of eyewear solutions with over 40 stores in Mumbai, Pune, Surat , Vadodara', 'gangar_eye_nation_logo.jpg', '', '', '', '', '', '', '', 'gangar_eye_nation.jpg', '', '', '', ''),
(99, 'GANT', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'n/a', 'gant_logo.jpg', '', '', '', '', '', '', '', 'gant.jpg', '', '', '', ''),
(100, 'GAS', 'All week days - 11am to 10pm.', 'Courtyard Ground Floor', '1', '1', 'We have been running for the last thirty years. We have sped up and we have slowed down. We have succeeded and we have outdone ourselves. We have fallen down and we have picked ourselves back up again. We have not stopped a second giving you the purest and most innovative denim, catalyser of a timeless total look. Grit, dynamism, determination and a pinch of (lucid) folly are the values that have been crucial to overcoming the difficulties and achieving the successes that have marked GAS’s 30 years. A link between denim and the world of bikers, inseparable since the days of the legendary "rebels" An attitude that we also find in sport, especially in motorcycling, and whose riders are a constant source of inspiration. A relationship that has acquired a very special value for GAS during its long partnership with the world’s leading motorcycle manufacturer and its Repsol Honda MotoGP team, 2013 World Champions with the baby champ, Marc Márquez.', 'gas_logo.jpg', '', '', '', '', '', '', '', 'gas.png', '', '', '', ''),
(101, 'Gelato Italiano', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Gelato is an ancient Italian frozen dessert, a far more recent variant of which is ice cream. As such, gelato is made with some of the same ingredients as most other frozen dairy desserts. Milk, cream, various sugars, flavoring including fruit and nut purees are the main ingredients.', 'gelato_logo.jpg', '', '', '', '', '', '', '', 'gelato.jpg', '', '', '', ''),
(102, 'GLOBAL DESI', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'Brought to you by well know Indian fashion designer- Anita Dongre, brings classic and premium Indian wear for women.', 'global_desi_logo.jpg', '', '', '', '', '', '', '', 'global_desi.jpg', '', '', '', ''),
(103, 'GOSSIP', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'Step in for some interesting and classy choices in footwear for men, women and children.', '', '', '', '', '', '', '', '', 'gossip1.jpg', '', '', '', ''),
(104, 'Gucci', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Founded in Florence in 1921, Gucci is one of the worlds leading luxury fashion brands.', 'gucci_logo.jpg', '', '', '', '', '', '', '', 'gucci.jpg', '', '', '', ''),
(105, 'Guess', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Guess, the premium apparel and accessories brand for men and women was established in 1981. GUESS began as a jeans company and has since successfully grown into a global lifestyle brand. Today GUESS designs, markets and distributes full collections of women and men apparel as well as accessories. The store is now open at The Palladium.', 'guess_accesories_logo.jpg', '', '', '', '', '', '', '', 'guess.jpg', '', '', '', ''),
(106, 'Guess Accessories', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'High Street Phoenix launches the Guess Accessories Store this season at the Grand Galleria and presents two exciting collections as well. To slake the shopping needs of every girl, Guess Accessories presents: The GUESS Jewellery Spring 2011 Collection, and the GUESS Dynamite Leo collection of animal print arm candies. The Guess Jewellery Spring 2011 Collection, is all about dramatic pieces with playful styles that are sure to be must haves in any girls accessory shopping list. This collection has the perfect assortment to represent the young and innocent side of every Guess Girl. Trust this fresh collection to become your latest crush!', 'guess_accesories_logo1.jpg', '', '', '', '', '', '', '', 'guess_accesories.jpg', '', '', '', ''),
(107, 'Haagen Dazs', 'All week days - 11am to 10pm.', 'Food Court', '1', '1', 'Haagen-Dazs offers the purest and finest ingredients in the world and crafts them into the best ice cream, sorbet and frozen yogurt available. Come treat yourself to the finest ice cream desserts at Haagen-Dazs!', 'haagen_dazs_logo.jpg', '', '', '', '', '', '', '', 'haagen_dazs.jpg', '', '', '', ''),
(108, 'Hackett London', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'We pride ourselves on having our own point of view on menswear, based on authentic British style. With a worldwide reputation for designer menswear, personal tailoring and accessories, we are the home of essential British clothing and style.', 'hackett_london_logo.jpg', '', '', '', '', '', '', '', 'hackett_london.png', '', '', '', ''),
(109, 'Hamleys', 'All week days - 11am to 10pm.', 'courtyard', '1', '1', 'Hamleys is one of the worlds largest toy shops. It stocks toys and gifts for children of all ages. Considered a haven for children, they boast of everything from soft toys to video games.', 'hamleys_logo.jpg', '', '', '', '', '', '', '', 'hamleys.jpg', '', '', '', ''),
(110, 'Harman Kardon', 'All week days - 11am to 10pm.', 'Grand Galleria Ground Level', '1', '1', 'Harman Kardon, a unit of Harman International Industries, Incorporated, designs and builds audio equipment for consumers and the automotive industry. Harman Kardon focuses tightly on the needs of listeners. It applies the stratospheric standards of the most finicky audiophile to DVD players, audio/video receivers and other sound systems that anyone can use easily.By integrating the highest audio standards into sleek and simple-to-use products, Harman Kardon delivers a listening experience like no other. Today, in every Harman Kardon product you will not only find the most innovative, technologically advanced audio solution, you willfind a caliber of industrial design and user interaction that makes itan objet d’art within the modern home. But this is not a case of equaldedication to both audio and form. We believe they are inseparable.', 'harman_kardon_logo.jpg', '', '', '', '', '', '', '', 'harman_kardon.jpg', '', '', '', ''),
(111, 'Heel , Buckle', 'All week days - 11am to 10pm.', 'Palladium level 3', '1', '1', 'Launched as a bespoke studio in London’s Hampstead, in 2011, Heel , Buckle has since its inception, had one overriding objective: to bring to its customers footwear that is distinctive not just in terms of its style and look, but also exceptional with regards to quality. Now in our retail avatar, we personally select all the designs we stock and specifically customise them for the markets we operate in - so rest assured that when you shop at Heel , Buckle, the shoes you purchase will be unmatched in their style quotient and reflect a level of elegance that only results from the passionate effort we put in at everything we do at Heel , Buckle. Being a multi-brand concept footwear label, we have the advantage of scouting global trends and brands, and stocking only those designs we find worthy of our discerning clientele. So go ahead and acquaint yourselves with Heel , Buckle, and remember: elegance begins with the shoes. ', 'heel_buckle_logo.jpg', '', '', '', '', '', '', '', 'heel_buckle.jpg', '', '', '', ''),
(112, 'Helios', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'Helios the high-end multi-brand watch chain houses over 40 premium international watch brands. Launched by Titan Industries, Indias largest watch manufacturer, Helios provides a buying experience unparalleled in the Indian context and triggers the taste-buds of the most discerning watch connoisseur. Providing a premium buying and watch owning experience for the global Indian through the international premium watch brands the store has in-store knowledgeable consultants whose will help you in choose from over 40 international watch brands including Versace, Emporio Armani, Roberto Cavalli, Paco Rabanne, Baume , Mercier, Movado, Hugo Boss, Fossil, FCUK, Titan, Xylys, DKNY, Nina Ricci, Esprit, Tommy Hilfiger, Citizen, Seiko, etc.', 'helios_logo.jpg', '', '', '', '', '', '', '', 'helios.jpg', '', '', '', ''),
(113, 'HiDesign', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'Hidesign has grown into a global brand recognized for its quality, ecological values and personalized service. By keeping its focus on a classic contemporary look, Hidesign caters to the savvy and sophisticated urban professional. The leather collection includes handbags, clutches, briefcases, laptop cases, wallets, belts and garments.', 'hidesign_logo.jpg', '', '', '', '', '', '', '', 'hidesign.jpg', '', '', '', ''),
(114, 'Hugo Boss', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Formal wear for men including accessories for men, Hugo Boss provides wonderful options for men in the category.', 'hugo_boss_logo.jpg', '', '', '', '', '', '', '', 'hugo_boss.jpg', '', '', '', ''),
(115, 'Hush Puppies', 'All week days - 11am to 10pm.', 'SkyZone Ground Level', '1', '1', 'For ultimate soft and comfortable international footwear Hush Puppies provides an excellent range of footwear for men and women for formal and informal occasions.', 'hushpuppies_logo.jpg', '', '', '', '', '', '', '', 'hush_puppies.jpg', '', '', '', ''),
(116, 'Inc-5', 'All week days - 11am to 10pm.', 'SkyZone Ground Level', '1', '1', 'Inc. 5 provides a good range of footwear for men and women. Formal pairs from leading national brands are also stocked including its home grown labels that allow for good selection and various price points .', 'inc_logo.jpg', '', '', '', '', '', '', '', 'inc.jpg', '', '', '', ''),
(117, 'Indigo Deli', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'The Indigo Deli is a full service gourmet hub. Spread over the mezzanine floor, it is both a restaurant and fine food/kitchen store. It boasts an extensive all-day dining menu of breakfast, sandwiches, coffees, teas and fine wines.', 'indigo_logo.jpg', '', '', '', '', '', '', '', 'indigo.jpg', '', '', '', ''),
(118, 'Induslnd Bank', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Induslnd bank ATM', 'induslnd_bank_logo.jpg', '', '', '', '', '', '', '', 'induslnd_bank.gif', '', '', '', ''),
(119, 'INGLOT', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'INGLOT Cosmetics launches their brand new store in Mumbai atPalladium Mall, located in Lower Parel. Following the success of INGLOTS existing stores around the country the new store in Mumbai is one of a kind. It offers a complete range of high-end cosmetics with an exhaustive collection, including over 200 shades of eye shadow, nail polish and over 150 shades of lipstick. Additionally, the brand also offers selective products which are exclusive to the Palladium store. Inglot being one of the world’s leading cosmetics and make-up brand offers a unique blend of vibrant and gorgeous colour product lines. Spread over 450 sq. ft approx, the new Inglot store is more spacious and offers the latest trends in make-up, truly making it a women’s paradise.Designed by the Inglot International Team, the store features the first INGLOT Video Wall. The visually pleasing wall is one huge screen comprised of 6 smaller screens. We are constantly developing new products like the world’s first ever Breathable Nail Enamel ensuring better health care for nails whilst enhancing their beauty, colour play mascara, body pigments etc.Our unique and economical Freedom System allows customers to experiment with countless shades and colour combinations of different face products, giving them the opportunity to create their own customized colour palette." With elegant interiors and an international ambience the new Inglot Store gives women an ultimate cosmetic shopping experience, thus making it a much sought after shopping destination!', 'inglot_logo.jpg', '', '', '', '', '', '', '', 'inglot.jpg', '', '', '', ''),
(120, 'I store by rel', 'All week days - 11am to 10pm.', 'Palladium (Second floor)', '1', '1', 'The Apple Macintosh brand for all Mac products and accessories. You can also get your systems fixed here as it doubles as a service centre.', '', '', '', '', '', '', '', '', 'i_store.jpg', '', '', '', ''),
(121, 'Its About Time', 'All week days - 11am to 10pm.', 'Palladium High Street Units', '1', '1', 'Its About Time - offers one of the finest collection of swiss watches in India.', 'its_abour_time_logo.jpg', '', '', '', '', '', '', '', 'its_abour_time.png', '', '', '', ''),
(122, 'Jack , Jones', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'Jack and Jones is a democratic jeans brand making it easy for fashion conscious men to create their own personal style. The four lines, Jeans intelligence, Premium, Premium Vintage and Premium Tech have quite different target groups and expressions design-wise. All the four brand-lines have trendy, relaxed and cool designs with super fits, offering great styles to young jeans freaks as well as grown up rebels.', 'jack_n_jones_logo.jpg', '', '', '', '', '', '', '', 'jack_n_jones.jpg', '', '', '', ''),
(123, 'Jashn', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Jashn Sarees is known for their traditional and elegant sarees. Jashn Sarees specialise in bridals and traditional sarees, but have a variety of contemporary styles too.', 'jashn_logo.jpg', '', '', '', '', '', '', '', 'jashn.jpg', '', '', '', ''),
(124, 'JCB', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'When you think haute, think Jean - Claude Biguine.  With perfectly crafted hair and skin products, coupled with services that far exceed mere indulgence, weve taken our place amongst the most chic salon-spa chains in the world. And wed like to think, the trendiest.  Our top French stylists and aestheticians work closely with trained Indian beauty experts, to discover looks that perfectly complement our Indian patrons.  And as experts in the art of beauty, we also act responsibly. By giving back to the environment. With the independently developed Biguine Bio, a 100% organic range of skin products that offers beauty au natural.  Reasons enough to pay us a visit? We certainly think so.', 'jean_c_b_logo.jpg', '', '', '', '', '', '', '', 'jean_c_b.jpg', '', '', '', ''),
(125, 'Jimmy Choo', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', '"Jimmy Choo is an iconic luxury lifestyle brand defined by an empowered sense of glamour and a confident sense of style. Founded in 1996 by couture shoe designer Jimmy Choo, and then Vogue accessories editor Tamara Mellon, the products are synonymous as utterly sexy, elegant and unique with a deeply feminine and sensual, sculpted silhouettes. A pioneer in the art of celebrity dressing , a celebrity favourite, Jimmy Choo today encompasses a complete luxury lifestyle accessory brand with womens shoes, handbags, small leather goods, scarves, sunglasses, eyewear, belts, mens shoes and fragrance. "', 'jimmy_choo_logo.jpg', '', '', '', '', '', '', '', 'jimmy_choo.jpg', '', '', '', ''),
(126, 'Just In Vogue', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Just In Vogue is an exclusive destination of luxury watches from International brands like Kenneth Cole, Skagen, Aspen, Tissot , Calvin Klein, Emporio Armani all under one roof. With a well balanced spectrum of Indian , International watch brands, customers are guaranteed an international shopping experience and a wide offering, while selecting a watch to match their style. Other world famous brands available at Just In Vogue are Guess, Police, Pierre Cardin, DKNY, Fossil, Esprit, Ed Hardy, Diesel, Rado, Tommy Hilfiger, Paco Rabanne, Being Human, Casio, Citizen and more. Just In Vogue is an exclusive destination of luxury watches from International brands like Kenneth Cole, Skagen, Aspen, Tissot , Calvin Klein, Emporio Armani all under one roof. With a well balanced spectrum of Indian , International watch brands, customers are guaranteed an international shopping experience and a wide offering, while selecting a watch to match their style. Other world famous brands available at Just In Vogue are Guess, Police, Pierre Cardin, DKNY, Fossil, Esprit, Ed Hardy, Diesel, Rado, Tommy Hilfiger, Paco Rabanne, Being Human, Casio, Citizen and more.', 'just_in_vogue_logo.jpg', '', '', '', '', '', '', '', 'just_in_vogue.jpg', '', '', '', ''),
(127, 'KENNETH COLE', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'Kenneth Cole is a quintessential metropolitan lifestyle brand for modern men and women who are confident, clever and cool. Located on level 2, this is the India flagship store of the brand.', 'keneth_cole_logo.jpg', '', '', '', '', '', '', '', 'keneth_cole.jpg', '', '', '', ''),
(128, 'Kiehls', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Kiehls was founded as an old-world apothecary in New Yorks East Village neighborhood over 150 years ago. Throughout the years, we have remained dedicated to providing our patrons uniquely efficacious skin and hair products through the most attentive, personalized service. Each of us is committed to serving our customers and communities alike through the highest service standards.', 'kiehls.jpg', '', '', '', '', '', '', '', 'kiehls1.jpg', '', '', '', ''),
(129, 'Kipling', 'All week days - 11am to 10pm.', 'Palladium Third level', '1', '1', 'The KIPLING story is one of great passion, creative and entrepreneurial spirit. It all started in 1987 in a small flat in Antwerp, the city of fashion. Three keen enthusiasts decided to make their entrance into the fashion world with a trendy yet affordable collection of bags. Armed with a strong brand, a powerful image, and an extensive range of fashionable, practical and high quality bags, KIPLING has been busy conquering the world over the last 25 years. Or as the British quality newspaper puts it: ‘KIPLING has taken the bag world by storm��? Every bag has its own mascot monkey dangling from it. Today, KIPLING plays a part in the everyday life of nearly 40 million women in more than 64countries throughout the world. Their KIPLING accompanies them on their way to work, on their shopping trips, whilst playing sports, at work, and on their evenings out. No wonder because KIPLING bags are simply unique, they are not only super trendy but they are also of high quality, practical and affordable.', 'kipling_logo.jpg', '', '', '', '', '', '', '', 'kipling.jpg', '', '', '', ''),
(130, 'La Prairie', 'All week days - 11am to 10pm.', 'Palladium Ground Floor', '1', '1', '"In a quest for ageless beauty and infinite luxury, la prairie goes beyond ordinary skincare to intercept ageing at its source. our exquisite cellular creams, serums, treatments and skincare lines all perform with unparalleled refinement and results. this commitment to exceptional skincare treatment has made la prairie the choice of the world’s most discerning women. experience the promise of timeless beauty, fulfilled. it all began with a quest for timeless beauty, the primary mission of the clinique la prairie in Montreux, Switzerland and the inspiration for our revolutionary skincare formulas. a pioneer in cellular anti-ageing therapies, la prairie has always harnessed ingredients both rare and beneficial. today, with cutting edge biotechnology and our patented cellular complex, the formulations have become the most luxurious on earth. a pioneer in cellular anti-ageing therapies and cutting edge biotechnology, laboratories la prairie cellular research is at the heart of a revolution in skincare. our exclusive cellular complex is a patented formula which activates the skins metabolism and delays the signs of ageing. this breakthrough enhances the capacity of skin cells to survive and promotes the skin’s natural defense system."', 'la_prairie_logo.jpg', '', '', '', '', '', '', '', 'la_prairie.jpg', '', '', '', ''),
(131, 'Label by Ritu Kumar', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'In 2002, Ritu Kumar launched a sub-brand LABEL Ritu Kumar. LABEL uses the established forte of traditional Indian aesthetic to create fashion oriented international products. The brand’s charter involves pushing boundaries and forging alliances with design talent across the world to create a unique, sophisticated product. This is aimed at the young, global Indian woman with a contemporary lifestyle. LABEL retails from most Ritu Kumar stores as well as some standalone stores.', 'label_logo.png', '', '', '', '', '', '', '', 'label.jpg', '', '', '', ''),
(132, 'Lacoste', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'At the end of the 1920s, Rene Lacoste, for his own personal use, designed and had a batch of loose-knit cotton shirts made. Comfortable and completely sweat-absorbent, this shirt made it easier to bear the heat on the American courts. It was an immediate revolution for tennis players of the time, who up to then had been wearing long-sleeved traditional city shirts with warp and weft fabric. The first LACOSTE shirt was white, slightly shorter than its contemporaries, with short sleeves and a ribbed collar. Its light, loose-knit fabric represented none other than the "jersey petit pique". By teaming up with the great hosier Andre Gillier in 1933, Rene Lacoste launched the industrial production of his polo shirt marked with a crocodile and thus gave birth to the LACOSTE L.12.12 shirt; L for Lacoste, 1 to describe the fabric, petit pique cotton, 2 for the short sleeve design (for a long sleeve it would be 1312), and finally 12, the number of versions presented to Rene Lacoste. It was the first time a brand was visible on the outside of a piece of clothing.', 'lacoste_logo.jpg', '', '', '', '', '', '', '', 'lacoste.jpg', '', '', '', ''),
(133, 'Lakme Absolute', 'All week days - 11am to 10pm.', 'Grand Galleria Ground Level', '1', '1', 'Contemporary Indian beauty expert Lakmé continuously innovates to offer a wide range of high performance and world class color cosmetics, skincare products, and beauty salons. Combining international cosmetic technology with an in-depth understanding of the Indian woman’s needs, Lakmé also offers its consumers a comprehensive beauty experience through its products and services at the Lakmé Salons and Studios.', 'lakme_logo.jpg', '', '', '', '', '', '', '', 'lakme.jpg', '', '', '', ''),
(134, 'Lancome', 'All week days - 11am to 10pm.', 'Temporarily closed. Opening soon at Palladium Second Level', '1', '1', 'Touted as the worlds No. 1 luxury beauty brand, Lancome unveils its flagship boutique at High Street Phoenix. The objective of Lancome products is to bring the best of science that pleasures the senses. Lancome at High Street Phoenix offers Skincare, Make up and Fragrances that are best sellers worldwide.', 'lancome_logo.jpg', '', '', '', '', '', '', '', 'lancome.jpg', '', '', '', ''),
(135, 'LATIN QUARTERS', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Semi casual, evening and party wear and accessories for women with a streak of designer style and substance.', 'latin_quarters_logo.jpg', '', '', '', '', '', '', '', 'latin_quarters.png', '', '', '', ''),
(136, 'Lee', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Lee was one of the first international brand to be made available to the Indian market, the first to offer such a wide range in Jeans fashion apparel for men and women offering a variety of fits and fabrics .', 'lee_logo.jpg', '', '', '', '', '', '', '', 'lee.jpg', '', '', '', ''),
(137, 'Levis', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'One of the pioneers in denim wear, Levis is well known for jeans and accessories clothing in American. Levis provides wide range and fit for casual wear for young and adults alike looking for great pair of jeans .', 'levis_logo.jpg', '', '', '', '', '', '', '', 'levis.jpg', '', '', '', ''),
(138, 'Lifestyle', 'All week days - 11am to 10pm.', 'SkyZone', '1', '1', 'The departmental store has a range of merchandise that include apparel, sportswear, household items, children and infant wear. The range also include accessories both from internatioanl and national brands.', 'lifestyle_logo.jpg', '', '', '', '', '', '', '', 'lifestyle.jpg', '', '', '', ''),
(139, 'Loccitane', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'The story of L’OCCITANE began in 1976, in the hills of Haute-Provence, a region of Southern France that lies between the Alps and the Mediterranean. LOCCITANE has drawn inspiration from traditional Provencal techniques to create natural beauty products devoted to well-being and the pleasure of taking care of oneself. Nurtured by encounters and journeys, the brand has grown and developed. There is a story behind all of our products, most often related to the land of Provence. The meaning and purpose of the brand are based on strong values: respect for both man and environment, with an emphasis on exchange and sharing. In 1989, beyond the Mediterranean, LOCCITANE initiated a sustainable development program in Burkina Faso around the production of Shea Butter. In 1997, it introduced Braille Labelling on its packaging for the first time. And in 2006, it created the first large-scale organic Immortelle plantation in Corsica, to protect integrity of the Corsican Maquis.', 'loccitane_logo.jpg', '', '', '', '', '', '', '', 'loccitane.jpg', '', '', '', ''),
(140, 'Lords Shoes', 'All week days - 11am to 10pm.', 'HSU Ground Level', '1', '1', 'A leading trendsetter and popular footwear brand for 4 decades LORD’S is a name synonymous with reliability and quality, an image guaranteeing style and comfort, a brand that has earned its reputation and goodwill by catering to the footwear needs of families for over 40 years. Lord’s is today one of the leading trendsetters specializing in footwear retail. Awards ISAA 2012 award for the ‘Most Admired Footwear Retailer -West -at the India Fashion Forum. ISAA 2013 award for the "Most Admired Footwear Retailer -West"', 'lords_logo.jpg', '', '', '', '', '', '', '', 'lords.png', '', '', '', ''),
(141, 'Louis Philippe', 'All week days - 11am to 10pm.', 'SkyZone Ground Level', '1', '1', 'Louis Philippe offers mens formal shirts and suits including accessories that are quality crafted for style and comfort. The range gives you the serious look you always wanted for formal meetings and office wear on the go.', 'louis_philippe_logo.jpg', '', '', '', '', '', '', '', 'louis_philippe.jpg', '', '', '', ''),
(142, 'Mac, Clinique , Estee Lauder', 'All week days - 11am to 10pm.', 'Palladium Second Floor', '1', '1', 'MAC (Make-up Art Cosmetics), a leading brand of professional cosmetics, was created in Toronto, Canada in 1984 and is part of The Estée Lauder Companies, Inc. The company’s popularity has grown through a tradition of word-of-mouth endorsement from makeup artists, models, photographers and journalists around the world. MAC is now sold in 89 countries/territories worldwide. Follow MAC and MAC Senior Artists on Twitter @MACcosmetics (twitter.com/maccosmetics and a list of the Senior Artists can be found here twitter.com/MACcosmetics/mac-senior-artists/members), become a MAC fan on Facebook (facebook.com/maccosmetics) and watch MACvideos on YouTube (youtube.com/maccosmetics). For a MAC location visit maccosmetics.in', 'mac_logo.jpg', '', '', '', '', '', '', '', 'mac.jpg', '', '', '', ''),
(143, 'Mad Over Donuts', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'We believe your donuts should taste great every time and we source the highest quality ingredients from around the globe to give you that Love at First Bite!® experience. We believe in freshness and make our donuts fresh throughout the day. We believe in something for everybody and have dozens of flavours to pick from including glaze, fruit, chocolate and even savoury , spicy donuts.', 'mad_over_donuts_logo.jpg', '', '', '', '', '', '', '', 'mad_over_donuts.jpg', '', '', '', ''),
(144, 'Mainland China', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The latest brand launched by the group promises another gastronomic adventure. Mainland China now brings all the legendary kitchens of Far-East under one roof - from the streets of Hong Kong, Singapore, Malaysia, Thailand, Japan, Korea, Myanmar and of course, China. In an happening format with a live kitchen, it adds an exciting new dimension to Mainland China. Cuisine Asia - parent to civilizations and home to more people than the world put together, is bound through time by one thing - their love for food. Hundreds of aromatic herbs, thousands of exotic ingredients and sauces, millions of flavours, all steamed, tossed, stirred and fried in the legendary kitchens of Asia - this sums up Mainland China Asia Kitchen. Happy eating or as they say in Chinese, Chiåh Kah på!', 'mainland_china_logo.jpg', '', '', '', '', '', '', '', 'mainland_china.jpg', '', '', '', ''),
(145, 'Mango', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'MANGO - Spanish fashion brand for women is a prestigious multinational company dedicated to the design, manufacture and marketing of clothing garments and accessories for women. At Mango, our activity goes beyond the design, manufacture and marketing of clothing garments and accessories for women: It is the creation of a concept. MANGO is a brand of feminine fashion, with own-label designs for urban women between the ages of 18 to 35, who like dressing according to the latest trends at a reasonable price, with a good price / quality quotient.', 'mango_logo.jpg', '', '', '', '', '', '', '', 'mango.jpg', '', '', '', ''),
(146, 'Marks , Spencers', 'All week days - 11am to 10pm.', 'Skyzone Ground Level +1', '1', '1', 'One of the UKs leading retailers in India, M,S offers high quality, great value clothing and home productss such as womens , mens clothing as well as homeware, perfumes , skincare products', 'm_n_s_logo.jpg', '', '', '', '', '', '', '', 'm_n_s.jpg', '', '', '', ''),
(147, 'Maroosh', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'A Semi-Mediterranean-North-Indian-Lebanses joint, Maroosh serves food ranging from rolls to falafels to biryanis', 'maroosh_logo.jpg', '', '', '', '', '', '', '', 'maroosh.jpg', '', '', '', ''),
(148, 'Maspar', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Maspar was set up in the year 2002. With over 40 years of experience in manufacturing and supplying to international brands, maspar was set up specifically to cater to the Indian market and the products are designed according to international trends. maspar operates through its 9 exclusive stores in India, and has expanded its presence in 35 different locations since the last 4 years in Home Décor Stores, and is further expanding their presence in Independent retailers across India and in the International market. Maspar offers a complete solution to furnish with their completely co-ordinate textiles for every room of the house living-room, bed-room, bathroom and the dining hall. maspar also offers a range of accessories both for personal use and gifting made from maspar fabrics. For further information, please log on to: www.maspar.com', 'maspar_logo.jpg', '', '', '', '', '', '', '', 'maspar.png', '', '', '', ''),
(149, 'McDonalds Restaurant', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'McDonalds Corporation is the worlds largest chain of burger fast food restaurants, serving more than 58 million customers daily. They dish out burgers, french fries, wraps, milk shakes and ice creams that many consider irresistible.', 'mc_donald_logo.jpg', '', '', '', '', '', '', '', 'mc_donald.jpg', '', '', '', ''),
(150, 'Metro Shoes', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Metro provides you a range of instore brand range of quality footwear for the entire family. The store also stocks accessories.', 'metro_shoes_logo.jpg', '', '', '', '', '', '', '', 'metro_shoes.jpg', '', '', '', ''),
(151, 'Michael Kors', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Michael Kors is a world-renowned, award-winning designer of luxury accessories and ready-to-wear. His namesake company, established in 1981, currently produces a range of products under his signature Michael Kors Collection and MICHAEL Michael Kors labels. These products include accessories, footwear, watches, jewelry, men’s and women’s ready-to-wear, eyewear and a full line of fragrance products. Behind this burgeoning empire stands a singular designer with an innate sense of glamour and an unfailing eye for timeless chic. Michael Kors has won numerous awards within the fashion industry, been honored for his philanthropy, and earned the respect and affection of millions. Wholly dedicated to a vision of style that is as pragmatic as it is indulgent, as timeless as it is modern, Michael Kors has created an enduring and iconic luxury lifestyle empire with a global reach.', 'michael_kors.jpg', '', '', '', '', '', '', '', 'michael_kors1.jpg', '', '', '', ''),
(152, 'Microsoft Priority', 'All week days - 11am to 10pm.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(153, 'Mineral', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'Mineral, a ready-to-wear label which brings postmodernism to fashion. The collection is inspired by the color of minerals. Look forward to a play of different fabrics, recombination of prints with checks and extraordinary silhouettes. Textures like crush and pleats mingle with romantic floral prints, stripes and checks. All this is further amalgamated in a crochet with a palette of cottons and linens. Bright, fun cottons are styled with bright accessories to give you that chic, grungy look for the summer.', 'mineral_logo2.jpg', '', '', '', '', '', '', '', 'mineral.jpg', '', '', '', ''),
(154, 'Mogra', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Mogra has a range of exclusive garments for women ranging from designer tussor, kancheepuram, kalamkari and georgette saris to casual wear in knits and cotton. Party wear with crystal encrusted corsets is a favorite with many customers. This store was the first in Gayatri Ruias chain of exclusive stores for the trendy person of any age.', 'mogra_logo.jpg', '', '', '', '', '', '', '', 'mogra.jpg', '', '', '', ''),
(155, 'Mont Blanc', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Luxury German brand Montblanc has embraced the traditions of lasting value and exquisite designs for over 100 years. Its uncompromising demands on shape, style, materials and workmanship have been reflected in its products. Montblanc star emblem represents the snow-covered peak of the Mont Blanc - the highest European mountain, symbolising the brand’s commitment to the highest quality and finest European craftsmanship. The iconic Montblanc emblem is a symbol of excellence, the pinnacle of luxury writing instruments, timepieces, jewelry, leather, fragrances and sunglasses and with its roots in writing, the brand has made an enduring commitment to encourage excellence through cultural initiatives. Montblanc writing instruments are a tribute to the finest master craftsmen. The brand is known for their excellence in designing the iconic Meisterstuck fountain pens in Hamburg since 1924. This year the luxe writing instrument celebrated its 90 years of the spirit of Meisterstück, introducing icons for the time to come. It was 1997 when then-Montblanc CEO Norbert Platt faced the wristwatch press after the introduction of the first Montblanc watches. Montblanc Montre S.A. was established in Le Locle - the heart of the Swiss watch industry - to maintain the brands philosophy of master craftsmanship and to satisfy the high quality expectations made on Meisterstuck watches. The first Montblanc watch collection, with design cues from the popular Montblanc Meisterstuck pen, was far from a mere novelty. The Montblanc Meisterstuck watch proved to be the success that put Montblanc watches on the road to haute horlogerie, and by 2006, Montblanc was a full-fledged manufacture. The high-end leather goods are crafted from the finest quality materials, and range from bags, wallets, money clips and diaries. The boutique is here to cater to the needs of customers looking for gifting options as well as items for personal use. Making available all these products at the boutique, the store is here to cater to the needs of the brand patrons. The boutique at Palladium Mall is spread across 1100 sq ft. and gives the ultimate shopping experience to the shoppers. The store also displays a huge image of the Hollywood veteran actor Hugh Jackman who was announced as its global brand ambassador of Montblanc this year at the Salon International de la Haute Horlogerie (SIHH) in Geneva, Switzerland. Individual, timeless and exclusive, it is the epitome of everything Montblanc stands for.', 'mont_blanc_logo.jpg', '', '', '', '', '', '', '', 'mont_blanc.jpg', '', '', '', ''),
(156, 'Montegrappa', 'All week days - 11am to 10pm.', 'Palladium Level One', '1', '1', 'Founded in 1912, Montegrappa is Italy’s first manufacturer of luxury writing instruments. The company continues to operate in the same historic building in Bassano del Grappa in the prosperous north-eastern part of Italy. The brand is well-known for its rich heritage and expertise in manufacturing the world’s most beautiful pens, tastefully handcrafted by skilled Italian artisans. Montegrappa′s craftsmen boast the world′s most expensive pen ever sold, the Tibaldi Fuglor Nucturnus, which was sold at an auction in 2010 for USD $8.5M. Montegrappa pens symbolise the pinnacle of power and the ultimate luxury gift. Today, Montegrappa continues a long tradition of craftsmanship in producing exquisite hand-made masterpieces that celebrate mankinds mastery of the written word. Appreciated by pen collectors, writers, statesmen and celebrities, as well as anyone with an appreciation of the finer things in life, Montegrappas products embody the pride, passion, style and sophistication that make up the soul of Italy. In addition to celebrating modern and contemporary musicians such as Frank Sinatra and Elvis Presley, Montegrappa also has a long association with the classics and classical music. Montegrappa′s Stradivari pens, dedicated to the legendary 17th century violin maker have become collectibles. It is a tradition at Montegrappa to honor notable personalities from various walks of life - people who have influenced and inspired generations in their own unique style. The recent additions to this esteemed list include the football legend Pele, Music Composer and Producer Quincy Jones, all time F1 racing champion Ayrton Senna and Khalil Gibran, one of the most celebrated poets in the history of mankind. And then there is the unique piece of art, the Guardian Angel pen, dedicated not to any living legend, but to the otherworldly spirit who watches over us in times of grief and difficulty. With such a diverse portfolio of brilliant masterpieces, writing instruments continue to be the main focus of the company. But at the same time, Montegrappa also offers a wide range of elegant wristwatches, cufflinks, fragrance and leather accessories that suit the taste and style of every individual.', 'montegrappa_logo.jpg', '', '', '', '', '', '', '', 'montegrappa.jpg', '', '', '', ''),
(157, 'Mother Care', 'All week days - 11am to 10pm.', 'SkyZone First Level', '1', '1', 'Mothercare specialises in quality, safety and innovative products and services for mothers, mothers-to-be, babies and young children.', 'mothercare_logo.jpg', '', '', '', '', '', '', '', 'mothercare.jpg', '', '', '', ''),
(158, 'NAUTICA', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'Founded in 1983, Nautica® is a leading global lifestyle brand ranging from men’s, women’s and children’s apparel and accessories to a complete home collection. Nautica® products are refined casual classics inspired and energized by the water that are always crisp, clean and distinct. Today Nautica® is available in more than 75 countries with 265 full price Nautica® branded stores and over 3,000 Nautica branded shop-in-shops worldwide. In 2003, the Company was acquired by VF Corporation, a global leader in branded lifestyle apparel and footwear with more than 30 brands. The company’s five largest brands are The North Face®, Vans®, Wrangler®, Timberland®, and Lee®. Other brands include 7 For All Mankind®, Bulwark®, Eagle Creek®, Eastpak®, Ella Moss®, JanSport®, Kipling®, lucy®, Majestic®, Napapijri®, Nautica®, Red Kap®, Reef®, Riders®, Splendid® and SmartWool®. For additional information, please go to www.nautica.com and www.vfc.com.', 'nautica_logo.jpg', '', '', '', '', '', '', '', 'nautica.png', '', '', '', ''),
(159, 'Nike', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'The most popular brand in sports has a range of sportswear for men and women including sports equipemnt and fitness gear.', 'nike_logo.jpg', '', '', '', '', '', '', '', 'nike.jpg', '', '', '', ''),
(160, 'Nikon', 'All week days - 11am to 10pm.', 'High Street Units', '1', '1', 'Nikon India, the 100% subsidiary of Nikon Corporation, leader in imaging technology, recently inaugurated its D-SLR zone in association with Colo Color Pvt.ltd. - Mumbai. The inauguration is in line with Nikons plan to expand its presence in the Western India through increased retail outlets. The new D-SLR Zone will give customers access to the entire range of Nikon D-SLR cameras along with the COOLPIX range, Nikon 1 series, Nikon Sport Optics range, array of NIKKOR lenses , Nikon accessories. The company has adopted such retail concept providing customers the opportunity to experience world-class products before they make a purchase decision.', 'nikon_logo.jpg', '', '', '', '', '', '', '', 'nikon.jpg', '', '', '', ''),
(161, 'Nine West', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'Nine West Group, Inc. is a footwear company that specializes in women shoes. The company manufactures both women casual and women dress footwear. Nine West shoes are known for their fit, comfort and style. The company is dedicated to bringing women the latest look in footwear fashion at affordable prices. The store is now open at The Palladium.', 'nine_west_logo.jpg', '', '', '', '', '', '', '', 'nine_west.jpg', '', '', '', ''),
(162, 'Noodle Bar', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'The destination for Oriental cuisine which offers diners a menu thats as diverse as the countries the dishes originate in. Pick from a range of tantalizing soups, and steaming dumplings to begin your dining experience.', 'noodle_bar_logo.jpg', '', '', '', '', '', '', '', 'noodle_bar.jpg', '', '', '', ''),
(163, 'OM Book Shop', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Om Book Shop has a large collection of books and great bargains. There is something there for everyone from art to computers to fashion', 'om_book_shop_logo.jpg', '', '', '', '', '', '', '', 'om_book_shop.jpg', '', '', '', ''),
(164, 'Om Ved', 'All week days - 11am to 10pm.', 'Grand Galleria', '0', '1', 'Omved is a different type of store the first of its kind in the world. So whether youre after high quality organic spices endorsed by Eco Cert, Ayurganic - herbaldyed organic, bath and bed linen, pvc free yoga mats, non-toxic incense or 100% chemical free body, hair and face care products, were your natural choice.', 'omved_logo.jpg', '', '', '', '', '', '', '', 'omved.jpg', '', '', '', ''),
(165, 'ONLY (palladium)', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'ONLY wants to create a denim revolution, spreading the true jeans-attitude to everybody. The aim is to transform the everyday life from grey and monotonous to fun, colorful and creatively eventful. As an original jeans brand, you11 find all must haves within jeans fashion and fittings in ONLY collections. No matter if it is the everyday outfit or the look for a Friday night out ONLY has the clothes for your closet.', 'only_(palladium)_logo.jpg', '', '', '', '', '', '', '', 'only_(palladium).jpg', '', '', '', ''),
(166, 'only (skyzone)', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'ONLY wants to create a denim revolution, spreading the true jeans-attitude to everybody. The aim is to transform the everyday life from grey and monotonous to fun, colorful and creatively eventful. As an original jeans brand, you11 find all must haves within jeans fashion and fittings in ONLY collections. No matter if it is the everyday outfit or the look for a Friday night out ONLY has the clothes for your closet.', 'only_(skyzone)_logo.jpg', '', '', '', '', '', '', '', 'only_(skyzone).jpg', '', '', '', ''),
(167, 'Orama', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Orama Carnival Street at High Street Phoenix is the perfect family , kids entertainment zone.', 'orama_logo.jpg', '', '', '', '', '', '', '', 'orama.jpg', '', '', '', ''),
(168, 'Pantaloons', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Pantaloons provides a range of apparel options for both men and women. The store stocks formal, informal, Indian, sportswear including a range of accessories for each section. The store covers 3 floors of quality merchandise from both home made, national and internatioanl brands .', 'pantaloons_logo.jpg', '', '', '', '', '', '', '', 'pantaloons.jpg', '', '', '', ''),
(169, 'Parcos', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'PARCOS gives your shopping experience a makeover! Find all the premium brands like Aigner, Azzaro, Burberry, Calvin Klien, Carolina Herrera, Cartier, Davidoff, DKNY, Dolce , Gabbana, Elizabeth Arden, Escada, Ferrari, Givenchy, Gucci, Georgio Armani, Isse Miyake, Jean Paul Galutier, Kenzo, Loewe, Lanvin, Lacoste, Nina Ricci, Paco Rabanne, Prada, Ralph Lauren, Thierry Mugler, Versace, and Yves Saint Laurent in one store now! Are you heading to PARCOS soon', 'parcos_logo.jpg', '', '', '', '', '', '', '', 'parcos.png', '', '', '', ''),
(170, 'Parcos Skincare', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'Parcos Lux brings a truly International Beauty shopping environment to the Indian Consumer, where great attention to detail has been made in every aspect. Beauty is at the core of all we do and we hope it is reflected in our stores . The stores boast of some of the top Luxury brands in the world, set in an equally luxurious store environment. Skincare , Make up brands include- Sisley, Clarins, Guerlain, Elizabeth Arden, Shiseido and Dior and additionally a variety of the most luxurious fragrance brands. At Parcos, our focus is to educate customers on maintaining healthy and glowing skin, teaching different makeup application methods, to make theirBeauty experience more satisfying. Beauty Consultants ensure the customer is truly looked after and well informed. Everything about Beauty excites us and we try to create a space where the Customer can feel at ease to shop for their favoriteBeauty Brands. Indeed, even the name PARCOS is an abbreviation of the Frenchwords, "Parfums , Cosmetique", meaning Perfumes , Cosmetics. Parcos Lux stores are currently located at Phoenix Mills and Kemps Corner in Mumbai. For further details please see -www.facebook.com/ParcosIndia', 'parcos_skincare_logo.jpg', '', '', '', '', '', '', '', 'parcos_skincare.png', '', '', '', ''),
(171, 'Park Avenue', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'From the house of Raymond, Park Avenue provides formal wear with accessories to both men and women.', 'park_avenue_logo.jpg', '', '', '', '', '', '', '', 'park_avenue.jpg', '', '', '', '');
INSERT INTO `hsp_brand` (`id`, `name`, `hours`, `location`, `isfeatured`, `isnew`, `description`, `logo`, `json`, `contactno`, `email`, `facebook`, `twitter`, `instagram`, `googleplus`, `image`, `specialoffer`, `specialofferimage`, `stars`, `duration`) VALUES
(172, 'Patchouli', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Patchouli, the fashion store at Grand Galleria, High Street Phoenix, Mumbai is the latest retail statement from the multi-faceted Gayatri Ruia. The stores USP is its range of chic and stylish, wearable and affordable designs in cotton crafts and traditional, indigenous fabric and embellishments married with international styling and trends. Patchouli houses collections from several designers and labels some of which include Ruh by Pooja Singhal, Linarika by Lina Tipnis, Let Me Be, Rachna Shah, Aparna Kayal, Earth Shines etc. Patchouli presents both known as well as upcoming and an in-house line as well. Apparel and specially customized accessories alongwith saris,dupattas, stoles and yardage will complete the merchandize offering.The sizing too ranges from xs to xxl thus further customizing the line. Another important highlight of the collections at Patchouli is Ahilya a not for profit organization formed as a collaborative initiative with Gayatri Ruia. The objective behind Ahilya is to reincarnate and reintroduce the gradually fading craft of Maheshwari weaves.', 'patchouli_logo.jpg', '', '', '', '', '', '', '', 'patchouli.jpg', '', '', '', ''),
(173, 'Paul , Shark', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Paul,Shark is an Italian luxury sportswear brand distinguished by the unmistakable shark logo. This distinctive insignia has over the years become synonymous with freedom, casual elegance and comfort around the world. The Paul,Shark consumer is sporty, well off, travels for business or for pleasure and plays at least a couple of sports but above all he loves the weekend and relaxing outdoors. The Paul,Shark store at Palladium, Mumbai offers the Indian consumers a complete menswear collection that can be worn in diverse social occasions like workplace, holiday, leisure time and traveling. The collection includes a bright and colorful selection of casual yet elegant polos and shirts, trousers, shorts, lightweight and technical outerwear which can stylishly teamed with fine accessories and footwear.', 'paul_and_shark.jpg', '', '', '', '', '', '', '', 'paul_and_shark1.jpg', '', '', '', ''),
(174, 'Paul Smith', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Paul Smith offers a handpicked selection of luxury leather goods, acsessories and watches.', 'paul_smith_logo.jpg', '', '', '', '', '', '', '', 'paul_smith.jpg', '', '', '', ''),
(175, 'Pavers England', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'A Global chain of luxury and fashionable shoes, Pavers England at Grand Galleria, High Street Phoenix is where you should go to for trendy, chic and very comfortable shoes and accessories. Pavers England offers a vast range of mens and womens footwear that fits well and helps you walk with comfort. The Pavers England store at High Street Phoenix is a heaven of style, class and trend. With a large collection of shoes and accessories on their flamboyant shelves, a visit here is a shoppers delight!', 'pavers_england_logo.jpg', '', '', '', '', '', '', '', 'pavers_england.jpg', '', '', '', ''),
(176, 'Pepe Jeans', 'All week days - 11am to 10pm.', 'SkyZone Ground Level', '1', '1', 'Pepe Jeans store at High Street Phoenix is one of the flagship stores in Mumbai. With a sprawling space of 900 sq. ft. and located in the fashionable Sky Zone area, this store is the ultimate one-stop destination for the latest fashion trends in denim and casual wear for the young and fashion conscious. On entering the store one gets transferred to the city of London. Separate wall units and display systems dedicated for various collections add to the grandeur of the store. International fashion trends can be spotted at this store the same time they are in Pepe European Store. Shoppers are treated to cutting edge European trends and international styles.', 'pepe_jeans_logo.jpg', '', '', '', '', '', '', '', 'pepe_jeans.jpg', '', '', '', ''),
(177, 'Play/Ra (Tryst)', 'All week days - 11am to 10pm.', '', '1', '0', '', 'tryst_logo.jpg', '', '', '', '', '', '', '', 'tryst.png', '', '', '', ''),
(178, 'PROMOD', 'All week days - 11am to 10pm.', 'Palladium, First Level', '1', '1', 'We will provide updated information soon', 'promod_logo.jpg', '', '', '', '', '', '', '', 'promod.png', '', '', '', ''),
(179, 'Puma', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Puma sportswear provide range of sports merchandise including sportswear, apparel and gear to chose from.', 'puma_logo.jpg', '', '', '', '', '', '', '', 'puma.jpg', '', '', '', ''),
(180, 'PUNJAB GRILL', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The restaurant offers good wholesome and quality Punjabi ethnic cuisine.', 'punjab_grill_logo.jpg', '', '', '', '', '', '', '', 'punjab_grill.jpg', '', '', '', ''),
(181, 'PURE GOLD', 'All week days - 11am to 10pm.', 'Grand Galleria Ground Level', '1', '1', 'Pure Gold Jewellers is the realization of a dream and the fulfilment of a vision: to create a brand that consistently delights the customer with excellence and innovation. It all began two decades ago in 1989, when Firoz Merchant, breathed life into an idea that took shape as the first Pure Gold Jewellers store. Being over 2 decades in the market, Pure Gold Jewellers has matured over the years with more than 125 stores in the Middle East and Asia. We are also in the process of opening further 450 stores worldwide. We have strength of 1,500 staff including 180 professionals. By combining the latest design, extensive retail experience, and a range of innovative concepts . Today, Pure Gold Jewellers has developed as a leading jeweller in the Middle East and Asia with two factories in India and one in China, employing over 2,000 craftsmen and professionals, all of which dedicated , qualified to cater to the needs of its fast growing clientele. Thereby having 3500 associates under Pure Gold Group. Pure Commitment Excellence and innovation are the two pillars on which Pure Gold Jewellers has been built. As a market leader in this trade for the past two decades, we have shown the way forward by becoming the first jewellery retailers to gain ISO certification in the year 2002. In 2008, 2009, 2010, 2011 and for the fifth time, Pure Gold Jewellers was awarded "Best Service Performance Brand" in the Large Business Category by the Department of Economic Development, Government of Dubai. This award is a recognition of Pure Gold Jewellers excellent standards of customer service and our ethical best practices We provide: A certificate of genuineness -ensuring only original, best-quality jewellery. Lifetime exchange -Allowing exchange of jewellery at any time. Lifetime repair -providing complete peace of mind, at all times. We thus ensure that the benefits, which come with our jewellery, are as exceptional as the jewellery itself.', 'pure_gold_logo.png', '', '', '', '', '', '', '', 'pure_gold.png', '', '', '', ''),
(182, 'Pure Living', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'Pure Home + Living, is a contemporary store with a wide range of products for the modern, Indian home. Pure Home+Living is a contemporary store designed to transform your home and living spaces. Our products are handpicked from across the globe to lend a stunning appeal to your home with colors that reflect mood of your life. Add Pure Elegance to your home with our selection of furniture, bedding, tableware, furnishing, decoration, mirrors and more.', 'pure_living_logo.jpg', '', '', '', '', '', '', '', 'pure_living.jpg', '', '', '', ''),
(183, 'PVR Cinemas', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'PVR Cinemas is one of the best multiplex and offers best services to its customers.', 'pvr_cinema_logo.jpg', '', '', '', '', '', '', '', 'pvr_cinema.jpg', '', '', '', ''),
(184, 'Quiksilver , Roxy', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Quiksilver designs, produces and distributes clothing, accessories and related products for young-minded people and develops brands that represent a casual lifestyle driven from a board riding heritage. Quiksilvers authenticity is evident in its innovative products, events and retail environments across the globe.', 'quick_silver_logo.jpg', '', '', '', '', '', '', '', 'Quick_silver.jpg', '', '', '', ''),
(185, 'Raymond MtoM', 'All week days - 11am to 10pm.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(186, 'Raymond Weil', 'All week days - 11am to 10pm.', 'High Street Unit', '1', '1', 'The Brand RAYMOND WEIL brings together all the elements of excellence of the Swiss luxury watch making industry. Precision, quality, reliability, nobility and technical nature of the materials are many standards that the Geneva-based Brand combines to create its models. This know-how confers RAYMOND WEIL its watch making legitimacy.', 'raymond_weil_logo.png', '', '', '', '', '', '', '', 'raymond_weil.jpg', '', '', '', ''),
(188, 'Reliance Digital express', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'Reliance Digital Express is an Apple Premium Reseller and your local Apple expert. iStore offers a range of Apple products and accessories. In addition, they offer services and workshops around all Apple products.', 'reliance_digital_express_logo.jpg', '', '', '', '', '', '', '', 'reliance_digital_express.jpg', '', '', '', ''),
(189, 'Rocia', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Rocia provides international range of quality footwear for men and women.', 'rocia_logo.jpg', '', '', '', '', '', '', '', 'rocia.jpg', '', '', '', ''),
(190, 'Rohit Bal', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'One of Indias most famous and leading mens fashion designer, this boutique in particular stocks unquie designs in ethnic and contemporary outfits for women .', 'Rohit_bal_logo.jpg', '', '', '', '', '', '', '', 'rohit_bal.jpg', '', '', '', ''),
(191, 'ROSSO BRUNELLO', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'In 2010, ROSSO BRUNELLO, a Malaysian brand was first launched in New Delhi. The brand deals in products of genuine Spanish calf leather for men and man made leather for women. The brand brings unconventional styles and diverse choices to inspire men , women to explore new definition of fashion in footwear. The brand has since further expanded with 8 exclusive stores across India. The collection for men offers contemporary footwear, while the womens collection offers a diverse line of footwear resonating elegance and sophistication with feminine demeanor and classic designs of hand bags and wallets with a modernistic twist. Grand Galleria is one of the best malls of Mumbai. Its is situated in Lower Parel west .The flagship store of Rosso Brunello is located in this mall.', 'rosso_brunello_logo.jpg', '', '', '', '', '', '', '', 'rosso_brunello.png', '', '', '', ''),
(192, 'Royce', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'ROYCE is a Japanese chocolate maker and confectioner based in Hokkaido, Japan’s northernmost island. ROYCE has grown from Hokkaido’s best-kept secret to an international phenomenon by crafting confectioneries that are brimming with flavor and bursting with originality. After 30 years of traveling the world, ROYCE has finally arrived in India.', 'royce_logo.jpg', '', '', '', '', '', '', '', 'royce.jpg', '', '', '', ''),
(193, 'SAMSONITE BLACK LABEL', 'All week days - 11am to 10pm.', 'Palladium Third level', '1', '1', 'Samsonite, created in 1910 by entrepreneurial Colorado native Jesse Shwayder, is the world’s leading luggage brand. Inspiring travel world-wide, Samsonite helps global travelers to cover miles and create memories with revolutionary travel solutions. Preserving the brands longstanding history of breakthroughs in research and development, Samsonite has embedded its place at the forefront of the travel world with a number of industry firsts. Showing commitment to innovation, the unique hard side collections made with the revolutionary Curv® material and the soft side ranges created with Advanced Hybrid Technology(TM) (AHT) join a wide spectrum of business, casual and personal accessory products in upholding Samsonite’s position as a market leader and trendsetter. Remembering past triumphs but always looking forward, Samsonite maintains a worldwide vision that continues to enable', 'samsonite_logo.jpg', '', '', '', '', '', '', '', 'samsonite.png', '', '', '', ''),
(194, 'Samsung', 'All week days - 11am to 10pm.', 'High Street Units', '1', '1', 'Visit the store to browse through the latest application and new designs in Samsung smartphones.', 'samsung_logo.png', '', '', '', '', '', '', '', 'samsung.jpg', '', '', '', ''),
(195, 'Satya Paul Acc', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Satya Paul is a premier designer label synonymous with signature prints, evocatively feminine designs and timeless style that has established itself as a global brand, unhindered by national boundaries. Satya Paul has achieved an inimitable style. The look is distinguished and identifiable on the street. Every collection centers around a fashion forward theme, keeping the brand abreast of each season trends and looks.', 'satya_paul_accesories_logo.jpg', '', '', '', '', '', '', '', 'satya_paul_accesories.jpg', '', '', '', ''),
(196, 'Satya Paul Signature', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Satya Paul is a premier designer label synonymous with signature prints, evocatively feminine designs and timeless style that has established itself as a global brand, unhindered by national boundaries. Satya Paul has achieved an inimitable style. The look is distinguished and identifiable on the street. Every collection centers around a fashion forward theme, keeping the brand abreast of each seasons trends and looks.', 'satya_paul_signature_logo.jpg', '', '', '', '', '', '', '', 'satya_paul_signature.jpg', '', '', '', ''),
(197, 'seven east', 'All week days - 11am to 10pm.', 'Seven East, has a multi ethnic logo, etched in symbolism and traditional. Ethnicity, grace, versatility and energy are all a part of the logo. The signature script for the logo , in "lady silver" hue, speaks of the rich attention to detail received by eve', '1', '1', 'Seven East, has a multi ethnic logo, etched in symbolism and traditional. Ethnicity, grace, versatility and energy are all a part of the logo. The signature script for the logo , in "lady silver" hue, speaks of the rich attention to detail received by every garment; and how it adds to the style quotient of every woman.', 'seven_east_logo.jpg', '', '', '', '', '', '', '', 'seven_east.jpg', '', '', '', ''),
(198, 'Shahenaz Home Shop', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The store has premium home decor products such as cushion covers and accessories such as tassels, drapes and curtain rings etc .', 'shehnaz_home_shop_logo.jpg', '', '', '', '', '', '', '', 'shehnaz_home_shop.jpg', '', '', '', ''),
(199, 'Shaze', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Shazé is a premium lifestyle brand that believes in creating only the finest Designs. Crafted by the most talented artisans and craftsmen from across the globe, each design is handpicked with a keen eye on subtlety, finesse, artistry and uniqueness. Our range consists of exquisite products ranging from Home décor, Pooja collection, Idols, Barware, Candle stands, Photo Frames , more.', 'shaze_logo.jpg', '', '', '', '', '', '', '', 'shaze.jpg', '', '', '', ''),
(200, 'SISLEY', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Sisley represents an unmistakable fashion presence in the clothing world, and a recognizable way of dressing. Every season, Sisley launches men and womens collections whose basic objective is to be always on the same wavelength as those who follow fashion and keep themselves abreast of the trendiest tendencies.', 'sisley_logo.jpg', '', '', '', '', '', '', '', 'sisley.jpg', '', '', '', ''),
(201, 'Smoke House Deli', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Located in the bustling hub of High Street Phoenix is Mumbais newest gourmet haven - Smoke House Deli. Brought to Mumbai by Impresario Entertainment , Hospitality Pvt Ltd. This all-day cafe and delicatessen is open from 9am till midnight. Begin at breakfast with supple vanilla pancakes, rich maple syrup and cream, lavish in a light lunch of smoked chicken and asparagus salad and then digest until its time to devour a dinner of slow cooked lamb shanks. And if that isnt enough, the cafe also features a wide range of cocktails, wines, beer as well as the finest white , dark spirits and single malts to round up the experience.', 'smoke_house_deli_logo.jpg', '', '', '', '', '', '', '', 'smoke_house_deli.jpg', '', '', '', ''),
(202, 'Soch', 'All week days - 11am to 10pm.', 'Skyzone First level', '1', '1', '"SOCH is designed for the modern Indian woman. The brand offers a wide range of designer ethnic wear like sarees, salwar suits and kurtas. Also available are a variety of chudidars and patialas, which when mixed and matched make for a unique style statement. The collection is perfect for a party, the office or just a night out. What’s more, with a presence in over 46 locations, nationally, it’s always easy to find a SOCH retailer. Fashioned from fabrics like cottons, chiffons, and blends, SOCH is for women of all ages who effortlessly balance work and home while still looking their best. Every week, new outfits are added to the collection, bringing the latest trends as they happen. From chic embroideries to authentic block-printed patterns, there’s a perfect outfit for every occasion."', 'soch_logo.jpg', '', '', '', '', '', '', '', 'soch.jpg', '', '', '', ''),
(203, 'Sony Centre', 'All week days - 11am to 10pm.', 'High Street Units', '1', '1', 'Sony is one of the worlds leading manufacturers for consumer electronics and broadcast , professional products. Established for more half a decade, Sony is known for it innovative and high quality products. This section takes you through all the Sony products from its establishment till now.', 'sony_center_logo.jpg', '', '', '', '', '', '', '', 'sony_center.jpg', '', '', '', ''),
(204, 'SportXS', 'All week days - 11am to 10pm.', 'Grand Galleria Ground Level', '1', '1', 'SPORTXS celebrates one of the oldest human activities - SPORTS. SPORTXS as a retail chain started in 2009 with its first store in Bangalore and now with more than 18 stores across at prime malls across India, encouraging people to test, feel and buy sports gear, equipment and accessories. SPORTXS is the ultimate destination where a plethora of emotions come together to celebrate sport, ambition and integrity. We believe in creating a well organized and pulsating environment that at present showcases over 4000 products across 32 sport categories and 60+ brands. SPORTXS has created a platform for sport lovers, enthusiasts and professionals alike to come together and share their common passion. SPORTXS is expanding rapidly across the scene, allowing sports enthusiasts to across India to enjoy access to high-quality sports equipment. Explore , Engage theory brings customers closer to a sport of their liking by allowing them touch and feel. Taking its proven Explore , Engage theory online, SPORTXS is offering good quality products from world renowned brands and exhaustive product categories. SPORTXS strives to help our customers make informed choices along with personal attention to every customer. Mission: To enhance the online shopping experience by providing a simple, memorable and easy solution to your online shopping needs. Thereby, creating a platform for strong and lengthy relationship based on Sports. Vision: Creating an environment for the people through easily accessible platform of ecommerce and mobile websites and helping promote sports as a life style in India.', 'sport_xs_logo.jpg', '', '', '', '', '', '', '', 'sport_xs.jpg', '', '', '', ''),
(205, 'Starbucks', 'All week days - 11am to 10pm.', 'Grand Galleria First level', '1', '1', 'The Starbucks store at High Street Phoenix, Lower Parel provides that distinct Third Place, between work and home, and opportunities to connect with others over handcrafted beverages prepared by passionate baristas. The store design is inspired by textile mills - an integral part of Mumbai’s history. Weaving in colourful cotton spool art and woven railings, the store integrates authentic factory windows, raw concrete finishing, white brick wall contrast with warm woods and luxurious rich fabrics. Suspended ceiling fans and plush patio seating create an inviting experience and a “warehouse artisan palette is used to compliment the former textile mill at this location. The store is open for customers from 8am to 1.30am every day.', 'satrbucks_logo.png', '', '', '', '', '', '', '', 'starbucks_coffee.jpg', '', '', '', ''),
(206, 'Steve Madden', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Steve Madden is an iconic footwear brand from New York. Steve Madden designs, sources and markets fashion-forward footwear and accessories for women, men and children. Steve Madden brand represents a lifestyle. Inspired by rock and roll, fused with a jolt of sex appeal and urban edge, Madden continues to create designs that are innovative, fun, sometimes wild and always spot-on-chic. In the last twenty years, the company has made significant and groundbreaking strides in expanded collections, categories, licensing agreements and acquisitions. Steve Madden has entered India through a long term license agreement with Reliance Brands Limited. Through this association, Steve Madden products will be available through exclusive monobrand stores and premium department stores in all major cities across India. Positioned as a bridge between hi-street and luxury, the brand will offer a cutting-edge range of fashion forward, of-the-moment designs across footwear and a variety of accessories. The stores will also offer Madden Girl, a fashionable line for younger girls who wish to make a statement. In addition to marketing products under its owned brands including Steve Madden, Steven by Steve Madden, Madden Girl, Betsey Johnson, Betseyville and Big Buddha, the Company is the licensee of various brands including Olsenboye for footwear, handbags and belts, Elizabeth and James, l.e.i. and Glo for footwear and Daisy Fuentes for handbags.', 'steve_madden_logo.jpg', '', '', '', '', '', '', '', 'steve_madden.jpg', '', '', '', ''),
(207, 'Stuart Weitzman', 'All week days - 11am to 10pm.', 'Palladium', '1', '1', 'Capturing the attention of a stylish shoe - obsessed women of all ages, Stuart Weitzman understands that a great shoe is about more than just a form of function; it is about making women feel beautiful. For over 25 years, Stuart Weitzman has been committed to creating this experience, making shoes that care, adorn and adore a woman’s foot - shoes that ignite her imagination, making her feel glamorous. It produces over 600 styles a year, inventing new silhouettes, adapting wondrous materials and engineering the most comfortable fit.', 'stuart_weizman_logo.jpg', '', '', '', '', '', '', '', 'stuart_weizman.jpg', '', '', '', ''),
(208, 'Subway', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'The all American snack brand for healty, fresh and nutrious subways and sandwiches can be found here. The outlet also stocks cold beverages and cookies . One can pick up a mini meal, deli sandwich or salads on the go.', 'subway_logo.jpg', '', '', '', '', '', '', '', 'subway.jpg', '', '', '', ''),
(209, 'Sukho Thai', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Take a break from your routine and unwind in an air of peace and tranquility at our luxury spa. Indulge your senses with exotic Thai foot massages to create a rejuvenating experience. Sukho Thai Spa offers an ambiance that?? truly world class! Inside the spa, all you can hear is the sound of tinkling water and soothing music. Well trained therapists work their Thai magic on your feet making you sink into your cozy chair. Fruits served after your therapy, tickle your taste buds and will make you say ??nce is just not enough!', 'sukho_thai_logo.jpg', '', '', '', '', '', '', '', 'sukho_thai.jpg', '', '', '', ''),
(210, 'Sunglass Hut', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Sunglass Hut is an international retailer of sunglasses and sunglass accessories founded in Miami, Florida in 1971. Sunglass Hut is part of the Italian-based Luxottica Group, the worlds largest eyewear company. The store is now open at The Palladium', 'sunglass_hut_logo.jpg', '', '', '', '', '', '', '', 'sunglass_hut.jpg', '', '', '', ''),
(211, 'Super Dry', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'Superdry is an international brand of apparel with its origins in Great Britain and design inspiration from Japan and classic Americana. The tagline BRITISH DESIGN. SPIRIT OF JAPANs reflects the origins as do the clothes and accessories. It is a young brand (estd. 2004) and shot to fame and popularity after being sported by top celebrities and style icons like David Beckham, Kate Beckinsale and Zac Efron. It was the fastest growing British Apparel Brand in 2010-11 with stock prices going through the roof. Positioned as a campus lifestyle brand internationally.', 'superdry_logo.jpg', '', '', '', '', '', '', '', 'superdry.jpg', '', '', '', ''),
(212, 'Swarovski', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'In 2010, Swarovski unveiled the new retail design- Crystal Forest and launched it in Mumbais Palladium. The concept embraces a crystal Forest theme, highlighting the infinite possibilities of crystal and illustrates the companys deep affinity with nature. Outside the boutique, the concept interprets the Crystal Forest using a myriad of stainless steel prisms. This sparkling facade takes on the lights and reflections. The unfolding metal facets intrigue with their infinite depths and rich abundance.', 'swarovski_logo.jpg', '', '', '', '', '', '', '', 'swarovski.jpg', '', '', '', ''),
(213, 'Swatch', 'All week days - 11am to 10pm.', 'High Street Units', '1', '1', 'Swatch watches are one of the finest swiss watches. They have the widest collection of watches catering to the youth of today.', 'swatch_logo.jpg', '', '', '', '', '', '', '', 'swatch.jpg', '', '', '', ''),
(214, 'Tanishq', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Tanishq is the largest national jewelry brand of India and also the first to provide a written guarantee for purity of gold and certification of diamonds. Tanishq offers exquisite designs with ever growing collections and has recently launched Aria a traditional 7 stone collection. Making the perfect Diwali gift for your loved ones, this collection offers a traditional and modern range of jewelry from 22 Kt. to 18 Kt. gold, studded with diamonds, rubies, emeralds and other stones.', 'tanishq_logo.jpg', '', '', '', '', '', '', '', 'tanishq.jpg', '', '', '', ''),
(215, 'TGI Friday', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'The restaurant serves TEX- MEX cuisine and can seat 152 people. The operating hours are from 12 PM- till midnight. Happy Hours ( Buy one get one free on the entire beverage menu)- are applicable between 5 pm - 8.30 pm every day.', 'tgi_fridays_logo.jpg', '', '', '', '', '', '', '', 'tgi_fridays.jpg', '', '', '', ''),
(216, 'The Big Kahuna', 'All week days - 11am to 10pm.', 'Foodcourt', '1', '1', 'The Big Kahuna has a decidedly easy vibe and is the kind of place you can easily spend a few hours, pacing the booze with food from their cross-continental menu. Based on the music they play, Mai Tai, located opposite the PVR Cinema box-office, is for Latin pop lovers.', 'the_big_kahuna_logo.jpg', '', '', '', '', '', '', '', 'the_big_kahuna.jpg', '', '', '', ''),
(217, 'The Body Shop', 'All week days - 11am to 10pm.', 'Palladium HSU Ground Level and Skyzone Level One', '1', '1', 'The Body Shop International Plc is the original ethical cosmetics company, now operating more than 2,500 stores in over 60 markets worldwide. The Body Shop has constantly sought out wonderful natural ingredients from all four corners of the globe to bring you products bursting with effectiveness, to enhance your natural beauty. We strive to use our planets resources wisely, searching for outstanding natural materials and ingredients from across the globe to include in our range of products.', 'the_body_shop_logo.jpg', '', '', '', '', '', '', '', 'the_body_shop.jpg', '', '', '', ''),
(218, 'The Bombay Store', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'As a contemporary lifestyle store, it specialises in Indianised gifts and home products. The Bombay Store offers its customers an array of beautifully designed products such as fine tableware and luxurious home decor items, pure authentic skin care and home fragrances, silver plated accessories and a stylised range of apparels based on natural hand woven fabrics, using traditional craft skills.', 'the_bombay_store_logo.jpg', '', '', '', '', '', '', '', 'the_bombay_store.jpg', '', '', '', ''),
(219, 'The Collective', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'The leading lifestyle store for international brands in formal, casual and semi formal wear for men and women. The store has an excellent collection in accessories, shoes and even an in house salon and cafe !', 'the_collective_logo.jpg', '', '', '', '', '', '', '', 'the_collective.jpg', '', '', '', ''),
(220, 'The Irish House', 'All week days - 11am to 10pm.', 'Courtyard Second Level', '1', '1', 'A lively pub for beer lovers, sports fanatics and gourmands of the city - The Irish House is your perfect neighbourhood hangout. The ambiance captures the spirit of traditional pubs back in grand old Ireland and emulates that same welcoming feel. The award-winning brand is known for its energetic vibe, friendly service and a great offering. The highlights of The Irish House include a large screen for sports matches, one of the largest bars with beers from all over the world and live events. The food menu brings the right balance of classic and contemporary pub grub with signature items like the Fish n Chips and Grande Nachos.', 'the_irish_house_logo.jpg', '', '', '', '', '', '', '', 'the_irish_house.jpg', '', '', '', ''),
(221, 'The Mobile Store', 'All week days - 11am to 10pm.', 'High Street Units', '1', '1', 'The Mobile Store format is a one stop mobile solution shop that provides, multi brand handsets, accessories, connections, repairs, VAS etc all under one roof. The Mobile Store caters to the Indian consumers choice of the widest and most comprehensive range of mobile phones with special offers from all the key brands available across the globe. The Mobile Store offers complete telecom solutions right from handset purchase to the choice of service operator and miscellaneous services like monthly bill collections etc., the stores also offer connections (pre paid and post paid), accessories and VAS including the latest ring tones, wallpapers and gaming and prompt after sales service, available not only in the city of purchase but in all The Mobile Store outlets across the country.', 'the_mobile_store_logo.jpg', '', '', '', '', '', '', '', 'the_mobile_store.jpg', '', '', '', ''),
(222, 'The Raymond Shop', 'All week days - 11am to 10pm.', 'Palladium Third Floor', '1', '1', '"For over 80 years, Raymond is counted as one of the worlds premier manufacturers of worsted suiting fabric in fine grade wool, in the same league as the finest that Europe has to offer. Today, the Raymond product range includes pure wools, wool blended with exotic fibres like camel hair, cashmere and angora and innovative blends of wool with polyester, linen and silk. Offering suiting and trousering fabric for all occasions and needs."', 'the_raymond_shop_logo.jpg', '', '', '', '', '', '', '', 'the_raymond_shop.jpg', '', '', '', ''),
(223, 'The Thai Spa', 'All week days - 11am to 10pm.', 'Skyzone 1st Floor', '1', '1', 'The Thai Spa is one of the leading spa chain in India having a strong presence in the East, and West and gradually making its presence felt in other parts of the nation as well. Dedicated to provide premium spa services, it has been a pioneer in many ways in terms of international tie ups, spreading geographically to B Towns, retaining the best masseurs in business and providing delightful services to a cross-section of clients. With 21 branches spread in various cities like Amritsar, Ahmedabad, Bangalore, Guwahati,Kolkata, Mumbai, Pune,Raipur, Surat and Siliguri, we are coming up in a new site in High Street Phoenix, with new interiors and better facilities.', 'the_thai_spa_logo.png', '', '', '', '', '', '', '', 'the_thai_spa.png', '', '', '', ''),
(224, 'The United Sports Bar , Grill', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The United Sports Bar , Grill is a full service, casual all-day dining cafe bar that features predominantly western cuisine and local specialties to suit the taste buds of diners across the region. In addition, there is also strong emphasis on creative cocktails, live telecast of sports events, "live" entertainment from popular artistes and special themed parties. It is a place where likeminded individuals gather over great drinks and food.', 'the_united_sport_bar_and_grill_logo.jpg', '', '', '', '', '', '', '', 'the_united_sport_bar_and_grill.jpg', '', '', '', ''),
(225, 'Thomas Pink', 'All week days - 11am to 10pm.', 'Second floor of Palladium mall', '1', '1', 'Thomas Pink carries on the name and tradition of Mr. Pink, crafting shirts, which enshrine British sartorial heritage. It’s also renowned for luxurious Shirts, silk ties, knitwear, accessories and tailoring. Every Thomas Pink shirt is an exercise in perfection. All our shirts have been crafted to the same exacting standards, keeping alive the impeccable heritage of Londons Jermyn Street, home of traditional British shirt-making. Constructed from the finest-quality two-fold cotton, immaculately cut and finished, Pink shirts are crisp, comfortable and look the part anywhere from the boardroom to the ballroom. The Thomas Pink Store located on the second floor of palladium mall is the second store in the country and houses the famous White shirt Bar.', 'thomas_pink_logo.jpg', '', '', '', '', '', '', '', 'thomas_pink.jpg', '', '', '', ''),
(226, 'Tissot', 'All week days - 11am to 10pm.', 'Palladium HSU Ground Level', '1', '1', 'Swatch watches are one of the finest swiss watches. They have the widest collection of luxury watches appealing to the high-end consumers.', 'tissot_logo.jpg', '', '', '', '', '', '', '', 'tissot.jpg', '', '', '', ''),
(227, 'Tommy Hilfiger', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'American designer wear for casual semi formal wear and accessories for men and women.', 'tommy_hilfiger_logo.jpg', '', '', '', '', '', '', '', 'tommy_hilfiger.png', '', '', '', ''),
(228, 'Tommy Hilfiger’s Children Wear', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The Tommy Hilfiger Group is one of the worlds most recognized designer apparel brands. Their Classic American Cool style is reflected in their preppy americana clothes. They focus on designing and marketing high-quality menswear, womenswear, denim collections, childrens apparel and mens tailored(formal) collections. In addition, the Group offers complementary lifestyle products such as Eyewear, Sunwear, Watches, Handbags, Socks, Small leather goods and Luggage. Merchandise under the Tommy Hilfiger brands is available to consumers in India through an extensive network of franchised free-standing stores and shop-in-shops in more than 65 cities, including New Delhi, Mumbai, Bangalore, Chandigarh and Hyderabad. Tommy Hilfiger Childrenswear is: - First international Childrenswear brand in India - Collection: Youthful, fun and preppy. - Target age group: 2-16 years. - Key Products: Classic polo tees, preppy shirts, shorts, jeans, sweaters, jackets, vests, cute dresses and skirts', 'tommy_hilfiger_childrenwear_logo.jpg', '', '', '', '', '', '', '', 'tommy_hilfiger_childrenwear.jpg', '', '', '', ''),
(229, 'Tresmode', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Tresmode, a brand synonymous with uber chic footwear, was launched into the Indian market in 2007 with the first flagship store in Mumbai. Within four years, Tresmode has not only created a presence across the country but also internationally and retails in cities such as Mumbai, Delhi, Pune, Goa, Bangalore, Chennai and Kathmandu. Designed at a studio in Florence, Tresmodes shoes are then manufactured across the world. With young, cool and fashion forward designs, the brand is known for keeping up with the latest trends as seen on the ramps in London, New York, Paris and Milan. Combining state-of-the art quality with edgy design, Tresmode took on European footwear designer Emmanuel Rossi as the Head of Brand Development. What sets Tresmode above the rest is the ability to bring the hottest international styles to the Indian market and ensure that the clientele are being given the best of latest fashion to adorn their feet. Tresmodes versatile collection from party to work wear appeals to the urban clientele whose fashion tastes are constantly evolving. Within a short time, Tresmode has truly established its name and become a celeb favorite with stars such as Bipasha Basu, Deepika Padukone, Genelia Dsouza, Priyanka Chopra, Monikangana Dutta, Minnisha Lamba, Sonam Kapoor, Sushmita Sen, Shahid Kapoor, Vivek Oberoi and Prateik Babbar sporting their shoes.', 'tresmode_logo.jpg', '', '', '', '', '', '', '', 'tresmode.jpg', '', '', '', ''),
(230, 'Triumph', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Triumph International is one of the world’s largest lingerie manufacturers.', 'triumph_logo.jpg', '', '', '', '', '', '', '', 'triumph.jpg', '', '', '', ''),
(231, 'Truefitt , Hill', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'Truefitt , Hill is the oldest barber shop in the world and the only one to hold a Royal Warrant to H.R.H The Duke of Edinburgh. Catering to the exact standards of London’s gentry, when vanity and good grooming were the essential mark of the gentleman, Truefitt offered its demanding clientele a new level of service unsurpassed anywhere in the world. During Truefitt’s unique history the company has had the honour of serving the Monarchs of Great Britain throughout nine consecutive reigns. The Royal connection continues to this day by Truefitt’s barbers who visit either Buckingham Palace or Windsor Castle to attend H.R.H. Many other legendary figures of the world also enjoyed Truefitt’s touch including Charles Dickens, William Thackeray, Lord Byron, Oscar Wilde and many more. Truefitt , Hill also makes a wide range of Colognes, Aftershaves, Shaving creams and accessories, Hair products as well as other bath products. In India Truefitt , Hill is about providing a one-stop-shop for men by providing a unique grooming service, as well as retailing the mens products.', 'truefit_n_hill_logo.jpg', '', '', '', '', '', '', '', 'truefit_n_hill.png', '', '', '', ''),
(232, 'Trupti', 'All week days - 11am to 10pm.', 'High Street Units', '1', '1', 'Trupti at High Street Phoenix offers a varierty of Indian snacks, mithais, namkeen, samosas, lip-smacking chocolates and pastries, chat items, etc.', 'trupti_sweets_logo.jpg', '', '', '', '', '', '', '', 'trupti_sweets.jpg', '', '', '', ''),
(233, 'Tryst', 'Wednesday, Thursday, Friday, Saturday Operational Hours : 10.00 pm to 01.30 am', 'Courtyard Second Level', '1', '1', 'Tryst', 'tryst_logo1.jpg', '', '', '', '', '', '', '', 'tryst1.png', '', '', '', ''),
(234, 'Tumi', 'All week days - 11am to 10pm.', 'Palladium', '1', '1', 'Tumi is the leading international brand of luxury travel, business, and lifestyle accessories. Since its founding in 1975, Tumi has become the brand of choice for the worlds most discerning business professionals, influential thought leaders, sports and entertainment celebrities, and demanding travelers. Tumis luxury travel and business collections are the ultimate in terms of style and performance. Their core collections are modern classics - the epitome of Tumis iconic aesthetics, advanced technology and unparalleled functionality makes it perfect for constant travelers!', 'tumi_logo.jpg', '', '', '', '', '', '', '', 'tumi.jpg', '', '', '', ''),
(235, 'UCB', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'Benetton Group is present in 120 countries around the world. Its core business is fashion apparel. A group with a strong Italian character, whose style, quality and passion are clearly seen in its brand. We offer high quality customer services.', 'ucb_logo.jpg', '', '', '', '', '', '', '', 'ucb.jpg', '', '', '', ''),
(236, 'UCB Kids', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'Benetton Group is present in 120 countries around the world. Its core business is fashion apparel. A group with a strong Italian character, whose style, quality and passion are clearly seen in its brand. We offer high quality customer services.', 'ucb_logo1.jpg', '', '', '', '', '', '', '', 'ucb_kids.jpg', '', '', '', ''),
(237, 'Univercell', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'UniverCell has the first mover advantage and has pioneered its way through the mobile industry. There are 200,000 people buying UniverCell handsets every month. This is the highest of any retailer in India. One out of every three handsets sold in the market is from UniverCell.', 'univercell_sync_logo.jpg', '', '', '', '', '', '', '', 'univercell_sync.jpg', '', '', '', ''),
(238, 'US Polo', 'All week days - 11am to 10pm.', 'Palladium Second Level', '1', '1', 'Arvinds Lifestyles Energie brand is for people who have been wearing jeans but need something more innovative and premium. U S Polo offers a range of shirts, T-shirts and jeans in the casual and premium range.', 'us_polo_logo.jpg', '', '', '', '', '', '', '', 'us_polo.jpg', '', '', '', ''),
(239, 'US Polo Kids', 'All week days - 11am to 10pm.', 'Palladium', '1', '1', 'U.S. Polo Assn. brand products are authentic and officially sanctioned by the United States Polo Association, the governing body for the sport of polo in the United States since 1890.', 'u_s_polo_kids_logo.jpg', '', '', '', '', '', '', '', 'u_s_polo_kids.png', '', '', '', ''),
(240, 'Van Heusen', 'All week days - 11am to 10pm.', 'Grand Galleria Ground Level', '1', '1', 'Van Heusen is a premium lifestyle brand for men, women and youth. The brand embodies fashion for the corporate and reflects the current expression of elegance in todays context. Van Heusen believes that the design drivers for the brand are fashion and sophistication. The brand covers all aspects of an individuals clothing needs, be it corporate wear, casual wear, party wear or ceremonial wear, making it a complete lifestyle brand in the truest sense. The core audience is professionals and corporate executives - men and women who are successful, focused, articulate, well-traveled, and confident and have a sense of style about them. They pursue success just as they do their other interests and passions, learning and exploring everything that comes their way.', 'van_heusen_logo.jpg', '', '', '', '', '', '', '', 'van_heusen.jpg', '', '', '', ''),
(241, 'Van Heusen (Women)', 'All week days - 11am to 10pm.', 'Skyzone First level', '1', '1', 'Van Heusen is a premium lifestyle brand for men, women and youth. The brand embodies fashion for the corporate and reflects the current expression of elegance in todays context. Van Heusen believes that the design drivers for the brand are fashion and sophistication. The brand covers all aspects of an individuals clothing needs, be it corporate wear, casual wear, party wear or ceremonial wear, making it a complete lifestyle brand in the truest sense. The core audience is professionals and corporate executives - men and women who are successful, focused, articulate, well-traveled, confident and have a sense of style about them. They pursue success just as they do their other interests and passions, learning and exploring everything that comes their way.', 'van_heusen_women_logo.jpg', '', '', '', '', '', '', '', 'van_heusen_women.jpg', '', '', '', ''),
(242, 'Vanilla Moon', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'Vanilla Moon is a leading brand of womens fashion footwear in India. The Brand is aimed at the chic sophisticated urban lady who understands quality. The shoes are designed by a team of experienced Italian designers and great attention is given to quality control and manufacturing processes.', 'vanilla_moon_logo.jpg', '', '', '', '', '', '', '', 'vanilla_moon.jpg', '', '', '', ''),
(243, 'Vans', 'All week days - 11am to 10pm.', 'Skyzone Ground Floor', '1', '1', 'Vans is a United States-based manufacturer of sneakers, skateboarding shoes, BMX shoes, snowboarding boots, and other shoe types.', 'vans_logo.png', '', '', '', '', '', '', '', 'vans.jpg', '', '', '', ''),
(244, 'Vero moda', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'Fashion is the foundation of Vero Modas existence. Vero Moda is contemporary international fashion with widespread appeal to young women all over the world. The ability to constantly follow trend developments and to adjust to the changing needs of the customers and the markets provides Vero Moda a solid and unique foothold within womens fashion clothing. Also providing the right product at the right time and at the right place helps the brand to serve fashion to its consumer at a faster pace.', 'vero_moda_logo.jpg', '', '', '', '', '', '', '', 'vero_moda.jpg', '', '', '', ''),
(245, 'Villeroy , Boch', 'All week days - 11am to 10pm.', 'Palladium Ground Floor', '1', '1', 'Villeroy , Boch is one of the world’s largest producers of premium ceramics, making everything from coffee mugs to sinks. Our products include: plates, stemware, cutlery, sinks, baths and toilets. Villeroy , Boch is a highly innovative company with a time-honoured tradition. Since its origins over 260 years ago, the ceramics manufacturing company founded in 1748 has developed into an international lifestyle brand. Villeroy , Boch is represented in 125 countries around the world. The headquarters of the listed company are located in Mettlach in Saarland, Germany.', 'villeroy_n_boch_logo.jpg', '', '', '', '', '', '', '', 'villeroy_n_boch.png', '', '', '', ''),
(246, 'VU TECHNOLOGIES', 'All week days - 11am to 10pm.', 'GG Connect', '1', '1', 'VU is a California based Luxury Display Brand. Vu is the leader in innovative technology and the store houses the latest display products. Designed by Pinakin, the Vu Suite gives a luxurious and modern lounge look, which puts our clientele at ease and lets them experience the luxury in technology. The store is now open at The Palladium. The VU Suite at Palladium, High Street Phoenix, does not offer TVs on display, it offers an experience! Unlike most electronic and television stores which are cramped and stocked with products without much breathing space; at the Vu Suite one gets the feel of a lounge which allows you to experience each product at our own pace.', 'v_u_technology_logo.jpg', '', '', '', '', '', '', '', 'v_u_technology.jpg', '', '', '', ''),
(247, 'Watches , More', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Founded in the year 1981, the Rose Group, under the leadership of Mr. Biren Vaidya, is the purveyor of jewellery, watches and lifestyle accessories that range from fashion to high-end customized luxury. Over 25 leading International brands are marketed, distributed or retailed through 600 points of sales, across 45 cities in India, through the Rose Group!', 'watches_n_more_logo.jpg', '', '', '', '', '', '', '', 'watches_n_more.jpg', '', '', '', ''),
(248, 'William Penn', 'All week days - 11am to 10pm.', 'Grand Galleria', '1', '1', 'William Penn - The World Pen Store, is Indias only multi-brand retail store chain housing the most premium brands in fine writing instruments, desktop and lifestyle accessories from the world over. William Penn currently features over 18 brands of fine writing instruments; from the world renowned Sheaffer, Cross and Waterman to the elite Conway Stewart, the luxury brands like Mont Blanc, Caran , ST Dupont, to the fashionable Cartier, the precision engineered Porsche Design, the practical Lamy and Pelikan and the true writing delight Sailor. William Penn also retails unique desktop and lifestyle accessories including gold-plated stationery by El Casco, elegant mens accessories by Dalvey, Sheaffer, exquisite leather accessories by Chamois. Its an ideal destination for Exclusive Gifting both individual and corporate.he store has introduced a novel concept of displaying Pen of the Month.', 'william_penn_logo.jpg', '', '', '', '', '', '', '', 'william_penn.jpg', '', '', '', '');
INSERT INTO `hsp_brand` (`id`, `name`, `hours`, `location`, `isfeatured`, `isnew`, `description`, `logo`, `json`, `contactno`, `email`, `facebook`, `twitter`, `instagram`, `googleplus`, `image`, `specialoffer`, `specialofferimage`, `stars`, `duration`) VALUES
(249, 'Wills Lifestyle', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'TCs Wills Lifestyle presents a complete fashion wardrobe that complements every facet of your personality at work, when you are relaxed, while you party and for those special occasions. Discover a tempting range of designer wear, work wear, relaxed wear, Club Wear and fashion accessories.', 'will_lifestyle.jpg', '', '', '', '', '', '', '', 'wills_lifestyle.jpg', '', '', '', ''),
(250, 'Wrangler', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Wrangler is one of the serious brands in denim wear giving you choices for both that casual and semi formal look.', 'wrangler_logo.jpg', '', '', '', '', '', '', '', 'wrangler.jpg', '', '', '', ''),
(251, 'Zara', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'The Spanish brand provides a wide choice of apparel both in casual and semi formal wear for men, women and children. The store also has a wide range of accessories for men and women. The store is now open at The Palladium', 'zara_logo.jpg', '', '', '', '', '', '', '', 'zara.jpg', '', '', '', ''),
(252, 'Zodiac', 'All week days - 11am to 10pm.', 'High Street Units', '1', '1', 'Zodiac is one of the largest shirt companies in the world and sells quality shirts to the best stores across the globe. Zodiac has been a quality manufacturer of fashion garments for the last 50 years and is considered to be one of the finest quality shirt makers. All shirts are made from the finest fabrics sourced worldwide so as to give quality, value for money products. Zodiac shirts offer quality at affordable prices ranging from Rs. 699 to Rs. 2,200.', 'zodiac_logo.jpg', '', '', '', '', '', '', '', 'zodiac.jpg', '', '', '', ''),
(253, 'Reebok', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Reebok provides international sports wear and accessories merchandise. The store also stocks contemporary sports clothing as per various well known sports events such as F1, T20 and so forth. It has also instore fitness products and accessories.', 'reebok_logo.jpg', '[{"label":"Meta Title","type":"text","classes":"","placeholder":"","value":""},{"label":"Meta Description","type":"textarea","classes":"","placeholder":"","value":""},{"label":"Meta Keywords","type":"textarea","classes":"","placeholder":"","value":""}]', '', '', '', '', '', '', 'reebok.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hsp_brandcategory`
--

CREATE TABLE IF NOT EXISTS `hsp_brandcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` int(11) NOT NULL,
  `description` text NOT NULL,
  `json` text NOT NULL,
  `isfeatured` int(11) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `specialofferimage` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `hsp_dine`
--

INSERT INTO `hsp_dine` (`id`, `name`, `hours`, `location`, `isfeatured`, `isnew`, `description`, `json`, `logo`, `email`, `contactno`, `facebook`, `twitter`, `instagram`, `googleplus`, `floor`, `image`, `specialoffer`, `specialofferimage`, `duration`) VALUES
(8, 'Bombay Blue', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Bombay Blue, is a multi-cuisine restaurant which has a vastly diverse menu and has created a niche for life-style, full service and casual dining. Its diverse menu consisting of Indian, Italian, Mexican, Lebanese, Sizzlers, and Beverages- presents tempting choice for food lovers across all segments. Besides its signature Sizzling Brownies Channa Batura, Special Kids Menu and Value Meals were introduced as a pioneering concepts, as were unlimited refills of beverages.', '', 'bombay_blue_logo1.jpg', '', '', '', '', '', '', '0', 'bombay_blue1.jpg', '', '', ''),
(9, 'Burger King', 'All week days - 11am to 10pm.', 'Courtyard Ground Level', '1', '1', 'Every day, more than 11 million guests visit BURGER KING(r) restaurants around the world. And they do so because our restaurants are known for serving high-quality, great-tasting, and affordable food. Founded in 1954, BURGER KING(r) is the second largest fast food hamburger chain in the world with about 13,000 restaurants operating in 100 countries. The original HOME OF THE WHOPPER(r), our commitment to premium ingredients, signature recipes, and family-friendly dining experiences is what has defined our brand for more than 50 successful years.', '', 'burger_king_logo1.png', '', '', '', '', '', '', '0', 'burger_king1.png', '', '', ''),
(10, 'Byblos', 'All week days - 11am to 10pm.', 'Sai Service Area', '1', '1', 'Byblos is a fun, edgy restaurant in phoenix mills, lower parel with a trendy and sleek atmosphere. Playful food meets serious and elegant plating. Byblos Food and Wine hopes to herald a new food renaissance, with renewed interest in fresh, additive free food that is organic and locally sourced. Byblos transforms the restaurant space into a socially dynamic one, where the interplay begins not only between the diner and the food, but between all the senses.', '', 'byblos_logo1.jpg', '', '', '', '', '', '', '0', 'byblos1.png', '', '', ''),
(11, 'Café Moshes', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'Moshes has the distinction of being the only signature chain of restaurants and cafes in Mumbai. Each outlet comes with an unspoken pledge made from the freshest and the most natural ingredients and prepared in the traditional way. The freshness flows into the casual and comfortable ambience which exudes warmth and cheerfulness.', '', 'cafe_moshes_logo1.jpg', '', '', '', '', '', '', '0', 'cafe_moshes1.jpg', '', '', ''),
(12, 'California Pizza Kitchen', 'All week days - 11am to 10pm.', 'Courtyard First level', '1', '1', 'It all begins with an imagination and ends with unforgettable flavours at California Pizza Kitchen. The restaurant has been successful in spreading its mission of providing innovative recipes, brought to life with fresh, high quality ingredients. California Pizza Kitchen is exquisitely ornamented with warm colours and rich textures. The open-exhibition kitchen takes centre stage where guests can watch all novel creations being prepared first hand. Extending its hospitality further, California Pizza Kitchen brings unique and wholesome offering for foodies by providing them an exceptional gourmet experience specially designed by our expert Chef. From hearth-baked pizzas, speciality pastas, creative salads, appetizers, soups, sandwiches and desserts, California Pizza Kitchen has won legions of food experts. The palatable menu comprises of an array of dishes ranging from pizzas to pastas including highlights such as Thai Crunch Salad, BBQ Salad, Spicy Chipotle Chicken Pizza, Chicken Carnitas Pizza, Fire Roasted Vegetable Pizza, Tostada Pizza, BBQ Chicken Pizza, Chicken Fajita Pizza to name a few. Adding tang to the food flavours are the refreshing Coolers, Iced Teas , Lemonades. And for the perfect finish, end your meal on a sweet note with desserts such as the signature Red Velvet Cake and Tiramisu.', '', 'california_p_k_logo1.jpg', '', '', '', '', '', '', '0', 'california_p_k1.jpg', '', '', ''),
(13, 'Coffee Bean , Tea Leaf', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'Founded in 1963, The Coffee Bean , Tea Leaf® is the oldest and largest privately-held chain of specialty coffee and tea stores in the United States. With a reputation for excellence, the company is a leader in product innovations, having developed the original Ice Blended® beverage. Providing the highest quality coffees and teas for 50 years, The Coffee Bean , Tea Leaf® currently has more than 800 stores. These stores blanket the world in markets such as The United States, Singapore, Malaysia, Korea, Brunei, Indonesia, UAE, Israel, Australia, China, Kuwait, Egypt, Qatar, and the Philippines and continue to expand both domestically and internationally.  In India, it has outlets in Delhi, Mumbai, Kolkata and Hyderabad. Coffee Bean in India has made a mark by offering the International coffee experience besides the food specially made for the Indian markets. Besides the signature Ice Blended , Coffee Bean in India has signature sandwiches, chocolate fondues etc. ', '', 'c_b_t_l_logo1.jpg', '', '', '', '', '', '', '0', 'c_b_t_l1.jpg', '', '', ''),
(14, 'Copper Chimney', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Timeless craft of Great North Indian Cuisine - that is Copper Chimney for you !! Declared as the undisputed capital of authentic north Indian cuisine by food lovers, Copper Chimney has been Mumbais foremost culinary landmark.The signature dishes include Chelo Kebab, Jinga Nisha,Vegetable Kheema, Benarasi Pulao that have been prepared with our trademarked spices and mixes.', '', 'cooper_chimney_logo1.jpg', '', '', '', '', '', '', '0', 'cooper_chimney1.jpg', '', '', ''),
(15, 'Costa Coffee', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Costa Coffee - A Haven for Coffee lovers a perfect lace for conversation over coffee. Every single Costa store/staff is professionally trained in the art of coffee making by our experts. Costa Coffee promises you a perfect cup of Costa coffee every time you visit.', '', 'costa_logo1.jpg', '', '', '', '', '', '', '0', 'costa_coffeee1.jpg', '', '', ''),
(16, 'Cream Centre', 'All week days - 11am to 10pm.', 'Skyzone First Level', '1', '1', 'Cream Centre has transcended generations to emerge as the leading vegetarian restaurant with all-time favorites and inventive culnary innovations in an inviting ambience to a discerning clientele. Cream Centre first claimed its fame with its still best selling dish, The Original Channa Bhaturas and other Punjabi dishes. The restaurant has adapted to changing trends and created original dishes like the Worlds Best Nachos  Mera Chhota Sizzler, Mera Thali and Sizzling Brownie Fundae', '', 'cream_center_logo1.jpg', '', '', '', '', '', '', '0', 'cream_center1.jpg', '', '', ''),
(17, 'Dominos', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'The current Dominos menu features a variety of Italian-American entrees and side dishes. Pizza is the primary focus, with traditional, specialty and custom pizzas available in a variety of crust styles and toppings. Additional entrees include pasta bread bowls and oven-baked sandwiches. The menu offers chicken side dishes, breadsticks and salads, as well as beverages and desserts.', '', 'dominos_logo1.jpg', '', '', '', '', '', '', '0', 'dominos1.jpg', '', '', ''),
(18, 'Gajalee', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Each restaurant provides a rich , unique course of coastal cuisine, prepared by expert chefs, who are true masters in their craft. In fact, some of the culinary innovations at Gajalee have gone on to become household names including the Bombil Fry (Bombay Duck), the Clam Koshimbir , the Prawns Pickle.', '', 'gajalee_logo1.jpg', '', '', '', '', '', '', '0', 'gajalee1.png', '', '', ''),
(19, 'Gelato Italiano', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Gelato is an ancient Italian frozen dessert, a far more recent variant of which is ice cream. As such, gelato is made with some of the same ingredients as most other frozen dairy desserts. Milk, cream, various sugars, flavoring including fruit and nut purees are the main ingredients.', '', 'gelato_logo1.jpg', '', '', '', '', '', '', '0', 'gelato1.jpg', '', '', ''),
(20, 'Haagen Dazs', 'All week days - 11am to 10pm.', 'Food Court', '1', '1', 'Haagen-Dazs offers the purest and finest ingredients in the world and crafts them into the best ice cream, sorbet and frozen yogurt available. Come treat yourself to the finest ice cream desserts at Haagen-Dazs!', '', 'haagen_dazs_logo1.jpg', '', '', '', '', '', '', '0', 'haagen_dazs1.jpg', '', '', ''),
(21, 'Indigo Deli', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'The Indigo Deli is a full service gourmet hub. Spread over the mezzanine floor, it is both a restaurant and fine food/kitchen store. It boasts an extensive all-day dining menu of breakfast, sandwiches, coffees, teas and fine wines.', '', 'indigo_logo1.jpg', '', '', '', '', '', '', '0', 'indigo1.jpg', '', '', ''),
(22, 'Mad Over Donuts', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'We believe your donuts should taste great every time and we source the highest quality ingredients from around the globe to give you that Love at First Bite!® experience. We believe in freshness and make our donuts fresh throughout the day. We believe in something for everybody and have dozens of flavours to pick from including glaze, fruit, chocolate and even savoury , spicy donuts.', '', 'mad_over_donuts_logo1.jpg', '', '', '', '', '', '', '0', 'mad_over_donuts1.jpg', '', '', ''),
(23, 'Mainland China', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The latest brand launched by the group promises another gastronomic adventure. Mainland China now brings all the legendary kitchens of Far-East under one roof - from the streets of Hong Kong, Singapore, Malaysia, Thailand, Japan, Korea, Myanmar and of course, China. In an happening format with a live kitchen, it adds an exciting new dimension to Mainland China. Cuisine Asia - parent to civilizations and home to more people than the world put together, is bound through time by one thing - their love for food. Hundreds of aromatic herbs, thousands of exotic ingredients and sauces, millions of flavours, all steamed, tossed, stirred and fried in the legendary kitchens of Asia - this sums up Mainland China Asia Kitchen. Happy eating or as they say in Chinese, Chiåh Kah på!', '', 'mainland_china_logo1.jpg', '', '', '', '', '', '', '0', 'mainland_china1.jpg', '', '', ''),
(24, 'Maroosh', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'A Semi-Mediterranean-North-Indian-Lebanses joint, Maroosh serves food ranging from rolls to falafels to biryanis', '', 'maroosh_logo1.jpg', '', '', '', '', '', '', '0', 'maroosh1.jpg', '', '', ''),
(25, 'McDonalds Restaurant', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'McDonalds Corporation is the worlds largest chain of burger fast food restaurants, serving more than 58 million customers daily. They dish out burgers, french fries, wraps, milk shakes and ice creams that many consider irresistible.', '', 'mc_donald_logo1.jpg', '', '', '', '', '', '', '0', 'mc_donald1.jpg', '', '', ''),
(26, 'Noodle Bar', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'The destination for Oriental cuisine which offers diners a menu thats as diverse as the countries the dishes originate in. Pick from a range of tantalizing soups, and steaming dumplings to begin your dining experience.', '', 'noodle_bar_logo1.jpg', '', '', '', '', '', '', '0', 'noodle_bar1.jpg', '', '', ''),
(27, 'Play/Ra (Tryst)', 'All week days - 11am to 10pm.', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'PUNJAB GRILL', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The restaurant offers good wholesome and quality Punjabi ethnic cuisine.', '', 'punjab_grill_logo1.jpg', '', '', '', '', '', '', '0', 'punjab_grill1.jpg', '', '', ''),
(29, 'Royce', 'All week days - 11am to 10pm.', 'Palladium Ground Level', '1', '1', 'ROYCE is a Japanese chocolate maker and confectioner based in Hokkaido, Japan’s northernmost island. ROYCE has grown from Hokkaido’s best-kept secret to an international phenomenon by crafting confectioneries that are brimming with flavor and bursting with originality. After 30 years of traveling the world, ROYCE has finally arrived in India.', '', 'royce_logo1.jpg', '', '', '', '', '', '', '0', 'royce1.jpg', '', '', ''),
(30, 'Smoke House Deli', 'All week days - 11am to 10pm.', 'Courtyard', '1', '1', 'Located in the bustling hub of High Street Phoenix is Mumbais newest gourmet haven - Smoke House Deli. Brought to Mumbai by Impresario Entertainment , Hospitality Pvt Ltd. This all-day cafe and delicatessen is open from 9am till midnight. Begin at breakfast with supple vanilla pancakes, rich maple syrup and cream, lavish in a light lunch of smoked chicken and asparagus salad and then digest until its time to devour a dinner of slow cooked lamb shanks. And if that isnt enough, the cafe also features a wide range of cocktails, wines, beer as well as the finest white , dark spirits and single malts to round up the experience.', '', 'smoke_house_deli_logo1.jpg', '', '', '', '', '', '', '0', 'smoke_house_deli1.jpg', '', '', ''),
(31, 'Starbucks', 'All week days - 11am to 10pm.', 'Grand Galleria First level', '1', '1', 'The Starbucks store at High Street Phoenix, Lower Parel provides that distinct Third Place, between work and home, and opportunities to connect with others over handcrafted beverages prepared by passionate baristas. The store design is inspired by textile mills - an integral part of Mumbai’s history. Weaving in colourful cotton spool art and woven railings, the store integrates authentic factory windows, raw concrete finishing, white brick wall contrast with warm woods and luxurious rich fabrics. Suspended ceiling fans and plush patio seating create an inviting experience and a “warehouse artisan palette is used to compliment the former textile mill at this location. The store is open for customers from 8am to 1.30am every day.', '', 'satrbucks_logo1.png', '', '', '', '', '', '', '0', 'starbucks_coffee1.jpg', '', '', ''),
(32, 'Subway', 'All week days - 11am to 10pm.', 'Skyzone Ground Level', '1', '1', 'The all American snack brand for healty, fresh and nutrious subways and sandwiches can be found here. The outlet also stocks cold beverages and cookies . One can pick up a mini meal, deli sandwich or salads on the go.', '', 'subway_logo1.jpg', '', '', '', '', '', '', '0', 'subway1.jpg', '', '', ''),
(33, 'TGI Friday', 'All week days - 11am to 10pm.', 'Palladium First Level', '1', '1', 'The restaurant serves TEX- MEX cuisine and can seat 152 people. The operating hours are from 12 PM- till midnight. Happy Hours ( Buy one get one free on the entire beverage menu)- are applicable between 5 pm - 8.30 pm every day.', '', 'tgi_fridays_logo1.jpg', '', '', '', '', '', '', '0', 'tgi_fridays1.jpg', '', '', ''),
(34, 'The Big Kahuna', 'All week days - 11am to 10pm.', 'Foodcourt', '1', '1', 'The Big Kahuna has a decidedly easy vibe and is the kind of place you can easily spend a few hours, pacing the booze with food from their cross-continental menu. Based on the music they play, Mai Tai, located opposite the PVR Cinema box-office, is for Latin pop lovers.', '', 'the_big_kahuna_logo1.jpg', '', '', '', '', '', '', '0', 'the_big_kahuna1.jpg', '', '', ''),
(35, 'The Irish House', 'All week days - 11am to 10pm.', 'Courtyard Second Level', '1', '1', 'A lively pub for beer lovers, sports fanatics and gourmands of the city - The Irish House is your perfect neighbourhood hangout. The ambiance captures the spirit of traditional pubs back in grand old Ireland and emulates that same welcoming feel. The award-winning brand is known for its energetic vibe, friendly service and a great offering. The highlights of The Irish House include a large screen for sports matches, one of the largest bars with beers from all over the world and live events. The food menu brings the right balance of classic and contemporary pub grub with signature items like the Fish n Chips and Grande Nachos.', '', 'the_irish_house_logo1.jpg', '', '', '', '', '', '', '0', 'the_irish_house1.jpg', '', '', ''),
(36, 'The United Sports Bar , Grill', 'All week days - 11am to 10pm.', 'Palladium Third Level', '1', '1', 'The United Sports Bar , Grill is a full service, casual all-day dining cafe bar that features predominantly western cuisine and local specialties to suit the taste buds of diners across the region. In addition, there is also strong emphasis on creative cocktails, live telecast of sports events, "live" entertainment from popular artistes and special themed parties. It is a place where likeminded individuals gather over great drinks and food.', '', 'the_united_sport_bar_and_grill_logo1.jpg', '', '', '', '', '', '', '0', 'the_united_sport_bar_and_grill1.jpg', '', '', ''),
(37, 'Trupti', 'All week days - 11am to 10pm.', 'High Street Units', '1', '1', 'Trupti at High Street Phoenix offers a varierty of Indian snacks, mithais, namkeen, samosas, lip-smacking chocolates and pastries, chat items, etc.', '', 'trupti_sweets_logo1.jpg', '', '', '', '', '', '', '0', 'trupti_sweets1.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hsp_dinecategory`
--

CREATE TABLE IF NOT EXISTS `hsp_dinecategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `dine` int(11) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `dine` int(11) NOT NULL,
  `description` text NOT NULL,
  `isfeatured` varchar(255) NOT NULL,
  `json` text NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `linktype` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
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
  `access` int(11) NOT NULL,
  UNIQUE KEY `menu` (`menu`,`access`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `json` text NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `onuser` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
