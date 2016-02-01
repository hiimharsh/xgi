-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2016 at 09:27 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgegloba_clanwarsregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(255) NOT NULL,
  `player_name` varchar(255) NOT NULL,
  `player_mobile` varchar(255) NOT NULL,
  `player_email` varchar(255) NOT NULL,
  `player_team` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_name`, `player_mobile`, `player_email`, `player_team`) VALUES
(2, 'd', 'd', 'd', 1),
(3, 'd', 'd', 'd', 1),
(4, 'd', 'd', 'd', 1),
(5, 'd', 'd', 'd', 1),
(6, 'd', 'd', 'd', 1),
(7, 'd', 'd', 'd', 1),
(8, 'vdsvsdv', 'sdvdsv', 'sdvsdv', 2),
(9, 'dsvv', 'vsdvsad', 'sdvdsav', 2),
(10, 'vsd', 'sdvsav', 'sdava', 2),
(11, 'sdvsv', 'sdvsvav', 'sdvdsv', 2),
(12, 'savdsav', 'vsdvdsvsa', 'dsvsdvsd', 2),
(13, 'dsvdsvdsa', 'sdvavsa', 'sdvsdvsv', 2),
(14, 'vdsvsdv', 'sdvdsv', 'sdvsdv', 3),
(15, 'dsvv', 'vsdvsad', 'sdvdsav', 3),
(16, 'vsd', 'sdvsav', 'sdava', 3),
(17, 'sdvsv', 'sdvsvav', 'sdvdsv', 3),
(18, 'savdsav', 'vsdvdsvsa', 'dsvsdvsd', 3),
(19, 'dsvdsvdsa', 'sdvavsa', 'sdvsdvsv', 3),
(20, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 4),
(21, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 4),
(22, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 4),
(23, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 4),
(24, 'gedgedg', 'deg', 'vbgdfre', 4),
(25, 'segv', 'gedg', 'rerfdevbgdfe', 4),
(26, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 5),
(27, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 5),
(28, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 5),
(29, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 5),
(30, 'gedgedg', 'deg', 'vbgdfre', 5),
(31, 'segv', 'gedg', 'rerfdevbgdfe', 5),
(32, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 6),
(33, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 6),
(34, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 6),
(35, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 6),
(36, 'gedgedg', 'deg', 'vbgdfre', 6),
(37, 'segv', 'gedg', 'rerfdevbgdfe', 6),
(38, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 7),
(39, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 7),
(40, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 7),
(41, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 7),
(42, 'gedgedg', 'deg', 'vbgdfre', 7),
(43, 'segv', 'gedg', 'rerfdevbgdfe', 7),
(44, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 8),
(45, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 8),
(46, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 8),
(47, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 8),
(48, 'gedgedg', 'deg', 'vbgdfre', 8),
(49, 'segv', 'gedg', 'rerfdevbgdfe', 8),
(50, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 9),
(51, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 9),
(52, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 9),
(53, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 9),
(54, 'gedgedg', 'deg', 'vbgdfre', 9),
(55, 'segv', 'gedg', 'rerfdevbgdfe', 9),
(56, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 10),
(57, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 10),
(58, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 10),
(59, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 10),
(60, 'gedgedg', 'deg', 'vbgdfre', 10),
(61, 'segv', 'gedg', 'rerfdevbgdfe', 10),
(62, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 11),
(63, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 11),
(64, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 11),
(65, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 11),
(66, 'gedgedg', 'deg', 'vbgdfre', 11),
(67, 'segv', 'gedg', 'rerfdevbgdfe', 11),
(68, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 12),
(69, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 12),
(70, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 12),
(71, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 12),
(72, 'gedgedg', 'deg', 'vbgdfre', 12),
(73, 'segv', 'gedg', 'rerfdevbgdfe', 12),
(74, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 13),
(75, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 13),
(76, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 13),
(77, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 13),
(78, 'gedgedg', 'deg', 'vbgdfre', 13),
(79, 'segv', 'gedg', 'rerfdevbgdfe', 13),
(80, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 14),
(81, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 14),
(82, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 14),
(83, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 14),
(84, 'gedgedg', 'deg', 'vbgdfre', 14),
(85, 'segv', 'gedg', 'rerfdevbgdfe', 14),
(86, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 15),
(87, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 15),
(88, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 15),
(89, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 15),
(90, 'gedgedg', 'deg', 'vbgdfre', 15),
(91, 'segv', 'gedg', 'rerfdevbgdfe', 15),
(92, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 16),
(93, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 16),
(94, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 16),
(95, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 16),
(96, 'gedgedg', 'deg', 'vbgdfre', 16),
(97, 'segv', 'gedg', 'rerfdevbgdfe', 16),
(98, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 17),
(99, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 17),
(100, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 17),
(101, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 17),
(102, 'gedgedg', 'deg', 'vbgdfre', 17),
(103, 'segv', 'gedg', 'rerfdevbgdfe', 17),
(104, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 18),
(105, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 18),
(106, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 18),
(107, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 18),
(108, 'gedgedg', 'deg', 'vbgdfre', 18),
(109, 'segv', 'gedg', 'rerfdevbgdfe', 18),
(110, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 19),
(111, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 19),
(112, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 19),
(113, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 19),
(114, 'gedgedg', 'deg', 'vbgdfre', 19),
(115, 'segv', 'gedg', 'rerfdevbgdfe', 19),
(116, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 20),
(117, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 20),
(118, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 20),
(119, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 20),
(120, 'gedgedg', 'deg', 'vbgdfre', 20),
(121, 'segv', 'gedg', 'rerfdevbgdfe', 20),
(122, 'frdebggvb', 'degvbdegvb', 'regvdsevg', 21),
(123, 'redvbgdfvbg', 'gbedsgv', 'desgvdrefvbg', 21),
(124, 'rvbgdfsrevbg', 'bedgvedg', 'rdfegvbdegvbfsegv', 21),
(125, 'sevbgdfegvbfseg', 'egege', 'edfgefe', 21),
(126, 'gedgedg', 'deg', 'vbgdfre', 21),
(127, 'segv', 'gedg', 'rerfdevbgdfe', 21);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(255) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_city` varchar(255) NOT NULL,
  `team_qualifier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_city`, `team_qualifier`) VALUES
(1, 'd', 'd', ''),
(2, 'awsd', 'dsvc', ''),
(3, 'awsd', 'dsvc', ''),
(4, 'gsewrgvre', 'vbgrefbfrvbg', ''),
(5, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(6, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(7, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(8, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(9, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(10, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(11, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(12, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(13, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(14, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(15, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(16, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(17, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(18, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(19, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(20, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi'),
(21, 'gsewrgvre', 'vbgrefbfrvbg', 'delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
