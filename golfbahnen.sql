-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Sep 2017 um 21:18
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `golfbahnen`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bewertung`
--

CREATE TABLE `bewertung` (
  `golfbahn_id` int(5) UNSIGNED NOT NULL,
  `vote_up` int(5) UNSIGNED DEFAULT NULL,
  `vote_down` int(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `bewertung`
--

INSERT INTO `bewertung` (`golfbahn_id`, `vote_up`, `vote_down`) VALUES
(1, 5, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `golfbahn`
--

CREATE TABLE `golfbahn` (
  `golfbahn_id` int(10) UNSIGNED NOT NULL,
  `beschreibung` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `golfbahn`
--

INSERT INTO `golfbahn` (`golfbahn_id`, `beschreibung`) VALUES
(1, 'Golfbahn Map1'),
(2, 'Golfbahn Map2'),
(3, 'Golfbahn Map3'),
(4, 'Golfbahn Map4'),
(5, 'Golfbahn Map5'),
(6, 'Golfbahn Map6'),
(7, 'Golfbahn Map7'),
(8, 'Golfbahn Map8'),
(9, 'Golfbahn Map9'),
(10, 'Golfbahn Map10'),
(11, 'Golfbahn Map11'),
(12, 'Golfbahn Map12'),
(13, 'Golfbahn Map13'),
(14, 'Golfbahn Map14'),
(15, 'Golfbahn Map15'),
(16, 'Golfbahn Map16');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `koordinaten`
--

CREATE TABLE `koordinaten` (
  `koordinate_id` int(5) UNSIGNED NOT NULL,
  `x_koordinate` int(5) DEFAULT NULL,
  `y_koordinate` int(5) DEFAULT NULL,
  `extras` varchar(50) NOT NULL,
  `zeichnung_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `koordinaten`
--

INSERT INTO `koordinaten` (`koordinate_id`, `x_koordinate`, `y_koordinate`, `extras`, `zeichnung_id`) VALUES
(1, 770, 235, '', 1),
(2, 270, 305, '', 2),
(3, 400, 170, '', 2),
(4, 600, 305, '', 2),
(5, 770, 235, '', 2),
(6, 650, 170, '', 3),
(7, 650, 306, '', 5),
(8, 50, 306, '', 6),
(9, 150, 200, '', 7),
(10, 150, 270, '', 7),
(11, 50, 270, '', 7),
(12, 400, 305, '', 9),
(13, 600, 170, '', 9),
(14, 775, 235, '', 9),
(15, 650, 170, '', 10),
(16, 650, 306, '', 12),
(17, 50, 306, '', 13),
(18, 450, 220, '', 15),
(19, 400, 250, '', 15),
(20, 350, 200, '', 15),
(21, 400, 180, '', 15),
(22, 630, 250, '', 16),
(23, 580, 230, '', 16),
(24, 550, 280, '', 16),
(25, 600, 300, '', 16),
(26, 700, 204, '', 19),
(27, 700, 243, '', 20),
(28, 780, 220, '', 22),
(29, 350, 380, '', 23),
(30, 710, 205, '', 23),
(31, 780, 220, '', 23),
(32, 300, 305, '', 24),
(33, 380, 170, '', 24),
(34, 550, 305, '', 24),
(35, 780, 235, '', 24),
(36, 650, 170, '', 25),
(37, 650, 306, '', 27),
(38, 50, 306, '', 28),
(39, 400, 170, '', 33),
(40, 600, 305, '', 33),
(41, 780, 235, '', 33),
(42, 650, 170, '', 34),
(43, 650, 306, '', 36),
(44, 50, 306, '', 37),
(45, 330, 250, '', 38),
(46, 360, 250, '', 38),
(47, 390, 307, '', 38),
(48, 530, 227, '', 39),
(49, 560, 227, '', 39),
(50, 590, 170, '', 39),
(51, 500, 170, '', 39),
(52, 150, 200, '', 41),
(53, 150, 270, '', 41),
(54, 50, 270, '', 41),
(55, 250, 350, '', 42),
(56, 290, 235, '', 42),
(57, 420, 170, '', 42),
(58, 911, 320, '', 42),
(59, 800, 245, '', 42),
(60, 650, 170, '', 43),
(61, 250, 600, '', 44),
(62, 650, 306, '', 46),
(63, 400, 600, '', 47),
(64, 400, 600, '', 48),
(65, 350, 170, '', 49),
(66, 850, 220, '', 51),
(67, 150, 175, '', 57),
(68, 150, 265, '', 57),
(69, 80, 265, '', 57),
(70, 600, 173, '', 58),
(71, 920, 180, '', 58),
(72, 810, 265, '', 58),
(73, 770, 240, '', 58),
(74, 600, 302, '', 59),
(75, 923, 288, '', 59),
(76, 810, 215, '', 59),
(77, 770, 240, '', 59),
(78, 650, 170, '', 60),
(79, 150, 306, '', 61),
(80, 650, 306, '', 63),
(81, 50, 306, '', 64),
(82, 820, 210, '', 66),
(83, 800, 190, '', 66),
(84, 770, 220, '', 66),
(85, 820, 270, '', 67),
(86, 800, 285, '', 67),
(87, 770, 250, '', 67),
(88, 650, 170, '', 68),
(89, 650, 306, '', 68),
(90, 770, 235, '', 69),
(91, 270, 305, '', 70),
(92, 400, 170, '', 70),
(93, 600, 305, '', 70),
(94, 770, 235, '', 70),
(95, 650, 170, '', 71),
(96, 650, 306, '', 73),
(97, 50, 306, '', 74),
(98, 150, 200, '', 75),
(99, 150, 270, '', 75),
(100, 50, 270, '', 75),
(101, 770, 235, '', 77),
(102, 270, 305, '', 78),
(103, 400, 170, '', 78),
(104, 600, 305, '', 78),
(105, 770, 235, '', 78),
(106, 650, 170, '', 79),
(107, 650, 306, '', 81),
(108, 50, 306, '', 82),
(109, 150, 200, '', 83),
(110, 150, 270, '', 83),
(111, 50, 270, '', 83),
(112, 770, 240, '', 85),
(113, 420, 306, '', 86),
(114, 770, 240, '', 86),
(115, 650, 170, '', 87),
(116, 650, 306, '', 89),
(117, 325, 175, '', 93),
(118, 650, 170, '', 94),
(119, 325, 300, '', 96),
(120, 650, 306, '', 97),
(121, 50, 306, '', 98),
(122, 150, 200, '', 100),
(123, 150, 270, '', 100),
(124, 50, 270, '', 100),
(125, 770, 240, '', 102),
(126, 650, 170, '', 103),
(127, 650, 306, '', 105),
(128, 50, 306, '', 106),
(129, 150, 200, '', 108),
(130, 150, 270, '', 108),
(131, 50, 270, '', 108),
(132, 450, 250, '', 110),
(133, 450, 220, '', 111),
(134, 770, 235, '', 112),
(135, 400, 300, '', 114),
(136, 300, 100, '', 115),
(137, 800, 100, '', 116),
(138, 900, 300, '', 117),
(139, 600, 300, '', 118),
(140, 700, 500, '', 119),
(141, 200, 500, '', 120),
(142, 50, 300, '', 121),
(143, 300, 500, '', 123),
(144, 400, 500, '', 124),
(145, 650, 100, '', 124),
(146, 750, 200, '', 124),
(147, 650, 170, '', 125),
(148, 150, 306, '', 126),
(149, 650, 306, '', 128),
(150, 50, 306, '', 129),
(151, 770, 238, '', 133),
(152, 650, 170, '', 134),
(153, 150, 306, '', 135),
(154, 650, 306, '', 137),
(155, 50, 306, '', 138),
(156, 765, 230, '', 142),
(157, 765, 246, '', 143),
(158, 650, 230, '', 144),
(159, 650, 246, '', 145),
(160, 650, 246, '', 146),
(161, 650, 230, '', 147),
(162, 600, 306, '', 148),
(163, 600, 170, '', 149),
(164, 770, 238, '', 150),
(165, 50, 306, '', 90),
(166, 440, 250, '', 91),
(167, 428, 274, '', 152),
(168, 400, 230, '', 153),
(169, 390, 200, '', 154),
(170, 440, 194, '', 156),
(171, 426, 175, '', 158),
(172, 420, 306, '', 161),
(173, 770, 240, '', 161);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zeichnung`
--

CREATE TABLE `zeichnung` (
  `z_d` int(11) NOT NULL,
  `pos_x` int(11) DEFAULT NULL,
  `pos_y` int(11) DEFAULT NULL,
  `objekt` varchar(500) DEFAULT NULL,
  `farbe` varchar(20) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `special_object` tinyint(1) NOT NULL DEFAULT '0',
  `g_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `zeichnung`
--

INSERT INTO `zeichnung` (`z_d`, `pos_x`, `pos_y`, `objekt`, `farbe`, `titel`, `special_object`, `g_id`) VALUES
(1, 129, 235, NULL, 'blue', 'Blaue Linie', 0, 1),
(2, 129, 235, NULL, 'red', 'Rote Linie', 0, 1),
(3, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 1),
(4, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', '', 'Kreis', 0, 1),
(5, 50, 306, NULL, '', 'unbekannt', 0, 1),
(6, 50, 170, NULL, '', 'unbekannt', 0, 1),
(7, 50, 200, NULL, 'black', 'schwarze Linie', 0, 1),
(8, NULL, NULL, 'arc(790,238,15,0*Math.PI,2*Math.PI);', '#3AAD55', '', 0, 1),
(9, 120, 235, NULL, 'red', 'undefined', 0, 2),
(10, 50, 170, NULL, 'black', 'undefined', 0, 2),
(11, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', '', 'Kreis', 0, 2),
(12, 50, 306, NULL, '', 'undefined', 0, 2),
(13, 50, 170, NULL, '', 'undefined', 0, 2),
(14, NULL, NULL, 'arc(790,238,15,0*Math.PI,2*Math.PI);', '#3AAD55', 'Kreis', 0, 2),
(15, 400, 180, NULL, 'yellow', 'Rechteck', 0, 2),
(16, 600, 300, NULL, 'green', 'Rechteck', 0, 2),
(17, NULL, NULL, 'rect(80,80,820,300);', 'black', 'Rechteck', 0, 3),
(18, NULL, NULL, 'arc(783, 220, 50, 1.1*Math.PI, 0.85*Math.PI);', 'black', 'Kreis', 0, 3),
(19, 737, 204, NULL, '', 'undefined', 0, 3),
(20, 738, 243, NULL, '', 'undefined', 0, 3),
(21, NULL, NULL, 'arc(785,220,15,0*Math.PI,2*Math.PI);', '#3AAD55', 'Kreis', 0, 3),
(22, 120, 220, NULL, 'blue', 'undefined', 0, 3),
(23, 120, 220, NULL, 'red', 'undefined', 0, 3),
(24, 120, 235, NULL, 'red', 'Rote Linie', 0, 4),
(25, 50, 170, NULL, 'black', '', 0, 4),
(26, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', '', '', 0, 4),
(27, 50, 306, NULL, '', '', 0, 4),
(28, 50, 170, NULL, '', '', 0, 4),
(29, NULL, NULL, 'arc(790, 238, 20, 0*Math.PI, 2*Math.PI, false);', '#3AAD55', '', 0, 4),
(30, NULL, NULL, 'rect(250, 170, 20, 70);', 'yellow', '', 0, 4),
(31, NULL, NULL, 'rect(400, 236, 20, 70);', 'blue', '', 0, 4),
(32, NULL, NULL, 'rect(550, 170, 20, 70);', 'red', '', 0, 4),
(33, 120, 235, NULL, 'red', 'Rote Linie', 0, 5),
(34, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 5),
(35, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', '', '', 0, 5),
(36, 50, 306, NULL, '', '', 0, 5),
(37, 50, 170, NULL, '', '', 0, 5),
(38, 300, 307, NULL, 'yellow', '', 0, 5),
(39, 500, 170, NULL, 'yellow', '', 0, 5),
(40, NULL, NULL, 'arc(790,238,15,0*Math.PI,2*Math.PI);', '#3AAD55', '', 0, 5),
(41, 50, 200, NULL, 'black', '', 0, 5),
(42, 330, 480, NULL, 'red', 'Rote Linie', 0, 6),
(43, 250, 170, NULL, 'black', 'Schwarze Linie', 0, 6),
(44, 250, 170, NULL, '', '', 0, 6),
(45, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', '', 'Kreis', 0, 6),
(46, 400, 306, NULL, '', '', 0, 6),
(47, 400, 306, NULL, '', '', 0, 6),
(48, 250, 600, NULL, '', '', 0, 6),
(50, NULL, NULL, 'arc(790,238,15,0*Math.PI,2*Math.PI);', '', 'Kreis', 0, 6),
(51, 120, 220, NULL, 'blue', 'Blaue Linie', 0, 7),
(52, NULL, NULL, 'rect(80,150,315,140);', 'black', 'Schwarze Linie', 0, 7),
(53, NULL, NULL, 'rect(615,150,315,140);', 'black', '', 0, 7),
(54, NULL, NULL, 'arc(505,205,123,1.15*Math.PI,1.85*Math.PI);', '', '', 0, 7),
(55, NULL, NULL, 'arc(505,235,123,0.85*Math.PI,0.15*Math.PI,true);', '', '', 0, 7),
(56, NULL, NULL, 'arc(850,220,20,0*Math.PI,2*Math.PI,false);', '#3AAD55', 'Kreis', 0, 7),
(57, 80, 175, NULL, 'black', '', 0, 7),
(58, 113, 238, NULL, 'blue', 'Blaue Linie', 0, 8),
(59, 113, 238, NULL, 'red', 'Rote Linie', 0, 8),
(60, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 8),
(61, 150, 170, NULL, '', '', 0, 8),
(62, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', '', '', 0, 8),
(63, 50, 306, '', '', '', 0, 8),
(64, 50, 170, '', '', '', 0, 8),
(65, NULL, NULL, 'arc(770,238,15,0*Math.PI,2*Math.PI,false);', '#3AAD55', 'Kreis', 0, 8),
(66, 770, 220, '', 'black', '', 0, 8),
(67, 770, 250, '', 'black', '', 0, 8),
(68, 650, 170, NULL, '', '', 0, 8),
(69, 129, 235, NULL, 'blue', 'Blaue Linie', 0, 9),
(70, 129, 235, NULL, 'red', 'Rote Linie', 0, 9),
(71, 50, 170, NULL, 'black', '', 0, 9),
(72, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', '', '', 0, 9),
(73, 50, 306, NULL, '', '', 0, 9),
(74, 50, 170, NULL, '', '', 0, 9),
(75, 50, 200, NULL, '', '', 0, 9),
(76, NULL, NULL, 'arc(790, 238, 20, 0*Math.PI, 2*Math.PI, false);', '#3AAD55', '', 0, 9),
(77, 129, 235, NULL, 'blue', 'Blaue Linie', 0, 10),
(78, 0, 0, NULL, 'red', 'Rote Linie', 0, 10),
(79, 50, 170, NULL, 'black', '', 0, 10),
(80, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', '', '', 0, 10),
(81, 50, 306, NULL, '', '', 0, 10),
(82, 50, 170, NULL, '', '', 0, 10),
(83, 50, 200, NULL, '', '', 0, 10),
(84, NULL, NULL, 'arc(790, 238, 20, 0*Math.PI, 2*Math.PI);', '#3AAD55', '', 0, 10),
(85, 123, 240, NULL, 'blue', 'Blaue Linie', 0, 11),
(86, 123, 240, NULL, 'red', 'Rote Linie', 0, 11),
(87, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 11),
(88, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', 'black', 'Kreis', 0, 11),
(89, 50, 306, NULL, 'black', 'Schwarze Linie', 0, 11),
(90, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 11),
(91, 400, 250, NULL, 'black', 'Schwarze Linie', 0, 11),
(92, NULL, NULL, 'arc(410, 250, 30, 0*Math.PI, 0.3*Math.PI);', 'black', 'Kreis', 0, 11),
(93, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 12),
(94, 325, 175, NULL, 'black', 'Schwarze Linie', 0, 12),
(95, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', 'black', 'Kreis', 0, 12),
(96, 50, 306, NULL, 'black', 'Schwarze Linie', 0, 12),
(97, 325, 300, NULL, 'black', 'Schwarze Linie', 0, 12),
(98, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 12),
(99, NULL, NULL, 'arc(113,238,10,0*Math.PI,2*Math.PI);', 'black', 'Kreis', 0, 12),
(100, 50, 200, NULL, 'black', 'Schwarze Linie', 0, 12),
(101, NULL, NULL, 'arc(790,238,15,0*Math.PI,2*Math.PI);', '#3AAD55', 'Kreis', 0, 12),
(102, 123, 240, NULL, 'blue', 'Blaue Linie', 0, 12),
(103, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 13),
(104, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', 'black', 'Kreis', 0, 13),
(105, 50, 306, NULL, 'black', 'Schwarze Linie', 0, 13),
(106, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 13),
(107, NULL, NULL, 'arc(113,238,10,0*Math.PI,2*Math.PI);', 'black', 'Kreis', 0, 13),
(108, 50, 200, NULL, 'black', 'Schwarze Linie', 0, 13),
(109, NULL, NULL, 'arc(790,238,15,0*Math.PI,2*Math.PI);', '#3AAD55', 'Kreis', 0, 13),
(110, 300, 250, NULL, 'black', 'Schwarze Linie', 0, 13),
(111, 300, 220, NULL, 'black', 'Schwarze Linie', 0, 13),
(112, 129, 235, NULL, 'blue', 'Blaue Linie', 0, 13),
(113, NULL, NULL, 'arc(183, 350, 10, 0, 2*Math.PI);', 'black', 'Kreis', 0, 14),
(114, 50, 300, NULL, 'black', 'Schwarze Linie', 0, 14),
(115, 400, 300, NULL, 'black', 'Schwarze Linie', 0, 14),
(116, 300, 100, NULL, 'black', 'Schwarze Linie', 0, 14),
(117, 800, 100, NULL, 'black', 'Schwarze Linie', 0, 14),
(118, 900, 300, NULL, 'black', 'Schwarze Linie', 0, 14),
(119, 600, 300, NULL, 'black', 'Schwarze Linie', 0, 14),
(120, 700, 500, NULL, 'black', 'Schwarze Linie', 0, 14),
(121, 200, 500, NULL, 'black', 'Schwarze Linie', 0, 14),
(122, NULL, NULL, 'arc(750, 200, 10, 0, 2*Math.PI, false);', 'black', 'Kreis', 0, 14),
(123, 150, 300, NULL, 'black', 'Schwarze Linie', 0, 14),
(124, 183, 350, NULL, 'black', 'Schwarze Linie', 0, 14),
(125, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 15),
(126, 150, 170, NULL, 'black', 'Schwarze Linie', 0, 15),
(127, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI);', 'black', 'Kreis', 0, 15),
(128, 50, 306, NULL, 'black', 'Schwarze Linie', 0, 15),
(129, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 15),
(130, NULL, NULL, 'arc(113,238,10,0*Math.PI,2*Math.PI);', 'black', 'Kreis', 0, 15),
(131, NULL, NULL, 'arc(770, 238, 75, 0*Math.PI, 2*Math.PI);', '#C1B8B8', 'Kreis', 0, 15),
(132, NULL, NULL, 'arc(770, 238, 10, 0*Math.PI, 2*Math.PI);', '#010000', 'Kreis', 0, 15),
(133, 113, 238, NULL, 'blue', 'Blaue Linie', 0, 15),
(134, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 16),
(135, 150, 170, NULL, 'black', 'Schwarze Linie', 0, 16),
(136, NULL, NULL, 'arc(783, 238, 150, 1.15*Math.PI, 0.85*Math.PI, false);', 'black', 'Kreis', 0, 16),
(137, 50, 306, NULL, 'black', 'Schwarze Linie', 0, 16),
(138, 50, 170, NULL, 'black', 'Schwarze Linie', 0, 16),
(139, NULL, NULL, 'arc(113,238,10,0*Math.PI,2*Math.PI);', 'black', 'Kreis', 0, 16),
(140, NULL, NULL, 'arc(770, 238, 10, 0*Math.PI, 2*Math.PI, false);', '#3AAD55', 'Kreis', 0, 16),
(141, NULL, NULL, 'arc(770, 238, 60, 1.25*Math.PI, 0.75*Math.PI);', 'black', 'Kreis', 0, 16),
(142, 728, 195, NULL, 'black', 'Schwarze Linie', 0, 16),
(143, 728, 280, NULL, 'black', 'Schwarze Linie', 0, 16),
(144, 765, 230, NULL, 'black', 'Schwarze Linie', 0, 16),
(145, 765, 246, NULL, 'black', 'Schwarze Linie', 0, 16),
(146, 728, 280, NULL, 'black', 'Schwarze Linie', 0, 16),
(147, 728, 195, NULL, 'black', 'Schwarze Linie', 0, 16),
(148, 650, 246, NULL, 'black', 'Schwarze Linie', 0, 16),
(149, 650, 230, NULL, 'black', 'Schwarze Linie', 0, 16),
(150, 113, 238, NULL, 'blue', 'Blaue Linie', 0, 16),
(151, NULL, NULL, 'arc(430, 250, 30, 0.7*Math.PI, 1*Math.PI);', 'black', 'Kreis', 0, 11),
(152, 412, 274, NULL, 'black', 'Schwarze Linie', 0, 11),
(153, 440, 230, NULL, 'black', 'Schwarze Linie', 0, 11),
(154, 400, 230, NULL, 'black', 'Schwarze Linie', 0, 11),
(155, NULL, NULL, 'arc(409.5,195, 20, 0.9*Math.PI, 1.5*Math.PI);', 'black', 'Kreis', 0, 11),
(156, 440, 230, NULL, 'black', 'Schwarze Linie', 0, 11),
(157, NULL, NULL, 'arc(420,194,20,1.6*Math.PI,0*Math.PI);', 'black', 'Kreis', 0, 11),
(158, 409, 175, NULL, 'black', 'Schwarze Linie', 0, 11),
(159, NULL, NULL, 'arc(113,238,10,0*Math.PI,2*Math.PI);', 'black', 'Kreis', 0, 11),
(160, NULL, NULL, 'arc(790,238,15,0*Math.PI,2*Math.PI);', '#3AAD55', 'Kreis', 0, 11),
(161, 123, 240, NULL, 'red', 'Rote Linie', 0, 13);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bewertung`
--
ALTER TABLE `bewertung`
  ADD PRIMARY KEY (`golfbahn_id`);

--
-- Indizes für die Tabelle `golfbahn`
--
ALTER TABLE `golfbahn`
  ADD PRIMARY KEY (`golfbahn_id`);

--
-- Indizes für die Tabelle `koordinaten`
--
ALTER TABLE `koordinaten`
  ADD PRIMARY KEY (`koordinate_id`);

--
-- Indizes für die Tabelle `zeichnung`
--
ALTER TABLE `zeichnung`
  ADD PRIMARY KEY (`z_d`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bewertung`
--
ALTER TABLE `bewertung`
  MODIFY `golfbahn_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `golfbahn`
--
ALTER TABLE `golfbahn`
  MODIFY `golfbahn_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT für Tabelle `koordinaten`
--
ALTER TABLE `koordinaten`
  MODIFY `koordinate_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
--
-- AUTO_INCREMENT für Tabelle `zeichnung`
--
ALTER TABLE `zeichnung`
  MODIFY `z_d` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
