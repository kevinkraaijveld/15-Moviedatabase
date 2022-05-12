-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2022 at 10:33 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE IF NOT EXISTS `episodes` (
  `episode_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `episode_nr` int(11) NOT NULL,
  `episode_name` varchar(255) NOT NULL,
  `episode_duration` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`episode_id`, `film_id`, `season_id`, `episode_nr`, `episode_name`, `episode_duration`) VALUES
(1, 2, 1, 1, 'Birth', 30),
(2, 2, 1, 2, 'Training Day', 30),
(3, 2, 1, 3, 'Bad Mummies', 30),
(4, 2, 1, 4, 'Rutgers is for Lovers', 30),
(5, 2, 1, 5, 'Love in the Time of Postpartum', 30),
(6, 2, 1, 6, 'The Addiction Angel', 30),
(7, 2, 1, 7, 'International Creature Convention', 30),
(8, 2, 1, 8, 'The Light', 30),
(9, 2, 1, 9, 'It''s Almost Over', 30),
(10, 2, 1, 10, 'Shitstorm', 30),
(11, 8, 1, 1, 'Contact', 60),
(12, 8, 1, 2, 'Unbound', 60),
(13, 8, 1, 3, 'Emergence', 60),
(14, 8, 1, 4, 'Homecoming', 60),
(15, 8, 1, 5, 'Reckoning', 60),
(16, 8, 1, 6, 'Solace', 60),
(17, 8, 1, 7, 'Inheritance', 60),
(18, 8, 1, 8, 'Allegiance', 60),
(19, 8, 1, 9, 'Bamboozled', 60),
(20, 13, 9, 1, 'Are You There Shim? It''s Me, Ian.', 60),
(21, 13, 9, 2, 'Mo White!', 60),
(22, 13, 9, 3, 'Weirdo Gallagher Vortex', 60),
(23, 13, 9, 4, 'Do Right, Vote White!', 60),
(24, 13, 9, 5, 'Black-Haired Ginger', 60),
(25, 13, 9, 6, 'Face It, You''re Gorgeous', 60),
(26, 13, 9, 7, 'Down Like the Titanic', 60),
(27, 13, 9, 8, 'The Apple Doesn''t Fall Far From the Alibi', 60),
(28, 13, 9, 9, 'BOOOOOOOOOOOONE!', 60),
(29, 13, 9, 10, 'Los Diablos!', 60),
(30, 13, 9, 11, 'The Hobo Games', 60),
(31, 13, 9, 12, 'You''ll Know the Bottom When You Hit It', 60),
(32, 13, 9, 13, 'Lost', 60),
(33, 13, 9, 14, 'Found', 60),
(34, 13, 10, 1, 'We Few, We Lucky Few, We Band of Gallaghers!', 60),
(35, 13, 10, 2, 'Sleep Well My Prince for Tomorrow You Shal Be King', 60),
(36, 13, 10, 3, 'Which America?', 60),
(37, 13, 10, 4, 'A Little Gallagher Goes a Long Way', 60),
(38, 13, 10, 5, 'Sparky', 60),
(39, 13, 10, 6, 'Adios Gringos', 60),
(40, 13, 10, 7, 'Citizen Carl', 60),
(41, 13, 10, 8, 'Debbie Might Be a Prostitute', 60),
(42, 13, 10, 9, 'O Captain, My Captain', 60),
(43, 13, 10, 10, 'Now Leaving Illinois', 60),
(44, 13, 10, 11, 'Location, Location, Location', 60),
(45, 13, 10, 12, '"Gallavich!"', 60),
(46, 13, 11, 1, 'This Is Chicago', 60),
(47, 13, 11, 2, 'Go Home, Gentrifier!', 60),
(48, 13, 11, 3, 'Frances Francis Franny Frank', 60),
(49, 13, 11, 4, 'NIMBY', 60),
(50, 13, 11, 5, 'Slaughter', 60),
(51, 13, 11, 6, 'Do Not Go Gentle Into That Good... Eh, Screw It', 60),
(52, 13, 11, 7, 'Two at a Biker Bar, One in the Lake', 60),
(53, 13, 11, 8, 'Cancelled', 60),
(54, 13, 11, 9, 'Survivors', 60),
(55, 13, 11, 10, 'DNR', 60),
(56, 13, 11, 11, 'The Fickle Lady Is Calling It Quits', 60),
(57, 13, 11, 12, 'Father Frank, Full of Grace', 60),
(58, 14, 5, 1, 'Family Leave', 25),
(59, 14, 5, 2, 'Self-Deportation', 25),
(60, 14, 5, 3, 'Everyone Gets Atrophy', 25),
(61, 14, 5, 4, 'An Old Start', 25),
(62, 14, 5, 5, 'Sinking Feelings', 25),
(63, 14, 5, 6, 'Emotional Baggage', 25),
(64, 14, 5, 7, 'Rom-Traum', 25),
(65, 14, 5, 8, 'Premature Independence', 25),
(66, 14, 5, 9, 'Unexpected Company', 25),
(67, 14, 5, 10, 'Taste Makers', 25),
(68, 14, 5, 11, 'Chain Migration', 25),
(69, 14, 5, 12, 'Check Mates', 25),
(70, 14, 5, 13, 'The Untethered Sole', 25),
(71, 14, 5, 14, 'Saving for Arraignment Day', 25),
(72, 14, 5, 15, 'Courting Disasters', 25),
(73, 14, 5, 16, 'The Fallout', 25),
(74, 15, 11, 1, 'Hard Rock Nick', 20),
(75, 15, 10, 2, 'Tirdy Works', 20),
(76, 15, 10, 3, 'Pony Play', 20),
(77, 15, 10, 4, 'Energy Drink Reviewer', 20),
(78, 15, 10, 5, 'Vape Bros', 20),
(79, 15, 10, 6, 'Sneeze Guy', 20),
(80, 15, 10, 7, 'Big Arms Guy', 20),
(81, 15, 11, 8, 'Mom-Son Sex Podcast', 20),
(82, 15, 11, 9, 'Golf Girl Trick Shots', 20),
(83, 15, 1, 10, 'ToshCon: Where Are They Now?', 20),
(84, 15, 11, 11, 'SteveWillDoIt', 20),
(85, 15, 11, 12, 'Brother K', 20),
(86, 15, 11, 13, '"I Eat Ass" Free Speech Defender', 20),
(87, 15, 11, 14, 'Misha', 20),
(88, 15, 11, 15, 'BarSoap Guy', 20),
(89, 15, 11, 16, 'Burping Girl', 20),
(90, 15, 11, 17, 'Super Bitch', 20),
(91, 15, 11, 18, 'Pot Brothers At Law', 20),
(92, 15, 11, 19, 'Dumped Wife''s Revenge', 20),
(93, 15, 11, 20, '2019 Year in Review', 20),
(94, 15, 12, 1, 'RIP Castro', 20),
(95, 15, 12, 2, 'Rebecca Black', 20),
(96, 15, 12, 3, 'Trap Gardener', 20),
(97, 15, 12, 4, 'Cat Food Reviewer', 20),
(98, 15, 12, 5, 'Bodybuilder Vs.', 20),
(99, 15, 12, 6, 'Popstar Nima', 20),
(100, 15, 12, 7, 'Rax Roast Beef Guy', 20),
(101, 15, 12, 8, 'Nill the Cat', 20),
(102, 15, 12, 9, 'Ruairi Rap Reviews', 20),
(103, 15, 12, 10, 'The Masked Cewebrity Singer', 20),
(104, 16, 1, 1, 'The Bleedin'' in Sweden', 30),
(105, 16, 1, 2, 'Saturday Bloody Saturday', 30),
(106, 16, 1, 3, 'The Trough', 30),
(107, 16, 1, 4, '''F'' Is for Halloween', 30),
(108, 16, 1, 5, 'Bill Murphy''s Day Off', 30),
(109, 16, 1, 6, 'O Holy Moly Night', 30),
(110, 16, 2, 1, 'Heavy Sledding', 30),
(111, 16, 2, 2, 'A Girl Named Sue', 30),
(112, 16, 2, 3, 'The Liar''s Club', 30),
(113, 16, 2, 4, 'Night Shift', 30),
(114, 16, 2, 5, 'Breaking Bill', 30),
(115, 16, 2, 6, 'This Is Not Good', 30),
(116, 16, 2, 7, 'Fight Night', 30),
(117, 16, 2, 8, 'F Is for Fixing It', 30),
(118, 16, 2, 9, 'Pray Away', 30),
(119, 16, 2, 10, 'Landing the Plane', 30),
(120, 16, 3, 1, 'Are You Ready for the Summer?', 30),
(121, 16, 3, 2, 'Paul Lynde to Block', 30),
(122, 16, 3, 3, 'The Stinger', 30),
(123, 16, 3, 4, 'Mr. Murphy''s Wild Ride', 30),
(124, 16, 3, 5, 'Battle of the Sexes', 30),
(125, 16, 3, 6, 'Punch Drunk', 30),
(126, 16, 3, 7, 'Summer Vacation', 30),
(127, 16, 3, 8, 'It''s In His Blood', 30),
(128, 16, 3, 9, 'Frank the Father', 30),
(129, 16, 3, 10, 'Bill Murphy''s Night Off', 30),
(130, 16, 4, 1, 'Father Confessor', 30),
(131, 16, 4, 2, 'Nothing is Impossible', 30),
(132, 16, 4, 3, 'Bring Me a Tooth', 30),
(133, 16, 4, 4, 'The "B" Word', 30),
(134, 16, 4, 5, 'Just Breathe', 30),
(135, 16, 4, 6, 'Come to Papa', 30),
(136, 16, 4, 7, 'R is for Rosie', 30),
(137, 16, 4, 8, 'Murphy and Son', 30),
(138, 16, 4, 9, 'Land Ho!', 30),
(139, 16, 4, 10, 'Baby, Baby, Baby', 30),
(140, 16, 5, 1, 'The Mahogany Fortress', 30),
(141, 16, 5, 2, 'The Rustland Massacre', 30),
(142, 16, 5, 3, 'Blind Alley', 30),
(143, 16, 5, 4, 'Thank You So Much', 30),
(144, 16, 5, 5, 'The Searchers', 30),
(145, 16, 5, 6, 'Screw Ups', 30),
(146, 16, 5, 7, 'A Very Merry F***ing Christmas', 30),
(147, 16, 5, 8, 'Bye Bye Frankie', 30),
(148, 17, 24, 1, 'The Pandemic Special', 45),
(149, 17, 24, 2, 'South ParQ Vaccination Special', 45),
(150, 17, 25, 1, 'Pajama Day', 20),
(151, 17, 25, 2, 'The Big Fix', 20),
(152, 17, 25, 3, 'City People', 20),
(153, 17, 25, 4, 'Back to the Cold War', 20),
(154, 17, 25, 5, 'Help, My Teenager Hates Me!', 20),
(155, 17, 25, 6, 'Credigree Weed St. Patrick''s Day Special', 20),
(156, 18, 20, 1, 'LASIK Instinct', 20),
(157, 18, 20, 2, 'Rock Hard', 20),
(158, 18, 20, 3, 'Must Love Dogs', 20),
(159, 18, 20, 4, '80''s Guy', 20),
(160, 18, 20, 5, 'Brief Encounter', 20),
(161, 18, 20, 6, 'Cootie & The Blowhard', 20),
(162, 18, 20, 7, 'Peterschmidt Manor', 20),
(163, 18, 20, 8, 'The Birthday Bootlegger', 20),
(164, 18, 20, 9, 'The Fatman Always Rings Twice', 20),
(165, 18, 20, 10, 'Christmas Crime', 20),
(166, 18, 20, 11, 'Mister Act', 20),
(167, 18, 20, 12, 'The Lois Quagmire', 20),
(168, 18, 20, 13, 'Lawyer Guy', 20),
(169, 18, 20, 14, 'HBO-No', 20),
(170, 18, 20, 15, 'Hard Boiled Meg', 20),
(171, 18, 20, 16, 'Prescription Heroine', 20),
(172, 18, 20, 17, 'All About Alana', 20),
(173, 18, 20, 18, 'Girlfriend, Eh?', 20),
(174, 18, 20, 19, 'First Blood', 20),
(175, 18, 20, 20, 'Jersey Bore', 20);

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `film_id` int(11) NOT NULL,
  `film_name` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `film_duration` varchar(50) NOT NULL,
  `film_episodes` varchar(50) NOT NULL,
  `film_rating` varchar(1) NOT NULL,
  `film_season` int(2) DEFAULT NULL,
  `film_origin` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`film_id`, `film_name`, `type_id`, `genre_id`, `film_duration`, `film_episodes`, `film_rating`, `film_season`, `film_origin`) VALUES
(1, 'Eternals', 1, 7, '157', '', '', NULL, 'USA'),
(2, 'Human resorces', 2, 5, '', '10', '', 1, 'USA'),
(3, 'Father Stu', 1, 9, '124', '', '', NULL, 'USA'),
(4, 'Cyrano', 1, 9, '124', '', '', NULL, 'USA'),
(5, 'Mary Magdalene', 1, 9, '120', '', '', NULL, 'UK'),
(6, 'Ted K', 1, 9, '120', '', '', NULL, 'USA'),
(7, 'The batman', 1, 7, '176', '', '', NULL, 'USA'),
(8, 'Halo', 2, 3, '', '9', '', 1, 'USA'),
(9, 'The innocents', 1, 1, '117', '', '', NULL, 'USA'),
(10, 'The Lost Girls', 1, 9, '100', '', '', NULL, 'UK'),
(11, 'The Secrets of Dumbledore', 1, 2, '142', '', '', NULL, 'USA'),
(12, 'Godzilla vs. Kong', 1, 3, '113', '', '', NULL, 'USA'),
(13, 'Shameless', 2, 5, '', '24', '', 11, 'USA'),
(14, 'Arrested Development', 2, 5, '', '16', '', 5, 'USA'),
(15, 'Tosh.o', 2, 5, '', '30', '', 12, 'USA'),
(16, 'F Is for Family', 2, 5, '', '18', '', 5, 'USA'),
(17, 'South Park', 2, 5, '', '6', '', 25, 'USA'),
(18, 'Family Guy', 2, 5, '', '20', '', 20, 'USA'),
(19, 'Last Week Tonight', 1, 5, '30', '', '', NULL, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_description`) VALUES
(1, 'Fantasy'),
(2, 'Magic'),
(3, 'Action'),
(4, 'Zombie'),
(5, 'Comedy'),
(6, 'Romantic'),
(7, 'Superhero'),
(9, 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `type_id` int(11) NOT NULL,
  `type_description` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_description`) VALUES
(1, 'Movie'),
(2, 'Serie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`episode_id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`film_id`),
  ADD KEY `fk_filmGenre` (`genre_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `episode_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `fk_filmGenre` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
