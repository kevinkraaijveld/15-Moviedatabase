-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 13 jun 2018 om 09:58
-- Serverversie: 5.6.37
-- PHP-versie: 7.1.8

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
-- Tabelstructuur voor tabel `episodes`
--

CREATE TABLE IF NOT EXISTS `episodes` (
  `episode_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `episode_nr` int(11) NOT NULL,
  `episode_name` varchar(255) NOT NULL,
  `episode_duration` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `episodes`
--

INSERT INTO `episodes` (`episode_id`, `film_id`, `season_id`, `episode_nr`, `episode_name`, `episode_duration`) VALUES
(2, 5, 1, 1, 'Days Gone Bye', 45),
(4, 3, 1, 1, 'Winter Is Coming', 60),
(5, 3, 1, 2, 'The Kingsroad', 60),
(6, 3, 1, 3, 'Lord Snow', 60),
(7, 3, 1, 4, 'Cripples, Bastards, and Broken Things', 60),
(8, 3, 1, 5, 'The Wolf and the Lion', 60),
(9, 3, 1, 6, 'A Golden Crown', 60),
(10, 3, 1, 7, 'You Win or You Die', 60),
(11, 3, 1, 8, 'The Pointy End', 60),
(12, 3, 1, 9, 'Baelor', 60),
(13, 3, 1, 10, 'Fire and Blood', 60),
(14, 3, 2, 1, 'The North Remembers', 60),
(15, 3, 2, 2, 'Nightlands', 60),
(16, 3, 2, 3, 'What Is Dead May Never Die', 60),
(17, 3, 2, 4, 'Garden of Bones', 60),
(18, 3, 2, 5, 'The Ghost of Harrenhal', 60),
(19, 3, 2, 6, 'The Old Gods and the New', 60),
(20, 3, 2, 7, 'A Man Without Honor', 60),
(21, 3, 2, 8, 'The Prince of Winterfell', 60),
(22, 3, 2, 9, 'Blackwater', 60),
(23, 3, 2, 10, 'Valar Morghulis', 60),
(25, 3, 3, 1, 'Valar Dohaeris', 60),
(26, 3, 3, 2, 'Dark Wings, Dark Words', 60),
(27, 3, 3, 3, 'Walk of Punishment', 60),
(28, 3, 3, 4, 'And Now His Watch Is Ended', 60),
(29, 3, 3, 5, 'Kissed by Fire', 60),
(30, 3, 3, 6, 'The Climb', 60),
(31, 3, 3, 7, 'The Bear and the Maiden Fair', 60),
(32, 3, 3, 8, 'Second Sons', 60),
(33, 3, 3, 9, 'The Rains of Castamere', 60),
(34, 3, 3, 10, 'Mhysa', 60),
(35, 3, 4, 1, 'Two Swords', 60),
(36, 3, 4, 2, 'The Lion and the Rose', 60),
(37, 3, 4, 3, 'Breaker of Chains', 60),
(38, 3, 4, 4, 'Oathkeeper', 60),
(39, 3, 4, 5, 'First of His Name', 60),
(40, 3, 4, 6, 'The Laws of Gods and Men', 60),
(41, 3, 4, 7, 'Mockingbird', 60),
(42, 3, 4, 8, 'The Mountain and the Viper', 60),
(43, 3, 4, 9, 'The Watchers on the Wall', 60),
(44, 3, 4, 10, 'The Children', 60),
(45, 3, 5, 1, 'The Wars to Come', 60),
(46, 3, 5, 2, 'The House of Black and White', 60),
(47, 3, 5, 3, 'High Sparrow', 60),
(48, 3, 5, 4, 'Sons of the Harpy', 60),
(49, 3, 5, 5, 'Kill the Boy', 60),
(50, 3, 5, 6, 'Unbowed, Unbent, Unbroken', 60),
(51, 3, 5, 7, 'The Gift', 60),
(52, 3, 5, 8, 'Hardhome', 60),
(53, 3, 5, 9, 'The Dance of Dragons', 60),
(54, 3, 5, 10, 'Mother''s Mercy', 60),
(55, 3, 6, 1, 'The Red Woman', 60),
(56, 3, 6, 2, 'Home', 60),
(57, 3, 6, 3, 'Oathbreaker', 60),
(58, 3, 6, 4, 'Book of the Stranger', 60),
(59, 3, 6, 5, 'The Door', 60),
(60, 3, 6, 6, 'Blood of my Blood', 60),
(61, 3, 6, 7, 'The Broken Man', 60),
(62, 3, 6, 8, 'No One', 60),
(63, 3, 6, 9, 'Battle of the Bastards', 60),
(64, 3, 6, 10, 'The Winds of Winter', 60),
(65, 3, 7, 1, 'Dragonstone', 60),
(66, 3, 7, 2, 'Stormborn', 60),
(67, 3, 7, 3, 'The Queen''s Justice', 60),
(68, 3, 7, 4, 'The Spoils of War', 60),
(69, 3, 7, 5, 'Eastwatch', 60),
(70, 3, 7, 6, 'Beyond the Wall', 60),
(71, 3, 7, 7, 'The Dragon and the Wolf', 60),
(72, 5, 2, 1, 'What Lies Ahead', 45),
(73, 6, 1, 1, 'Cartman Gets an Anal Probe ', 22),
(74, 6, 1, 2, 'Weight Gain 4000', 22),
(75, 6, 1, 3, 'Volcano ', 22),
(76, 6, 1, 4, 'Big Gay Al''s Big Gay Boat Ride', 22),
(77, 6, 1, 5, 'An Elephant Makes Love to a Pig', 22);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `films`
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `films`
--

INSERT INTO `films` (`film_id`, `film_name`, `type_id`, `genre_id`, `film_duration`, `film_episodes`, `film_rating`, `film_season`, `film_origin`) VALUES
(1, 'Lord of the Rings', 1, 1, '360', '6', '3', NULL, 'Netherlands'),
(2, 'Harry Potter', 1, 2, '1040', '8', '2', NULL, 'U.S.A'),
(3, 'Game of Thrones', 2, 1, '4020', '70', '5', 8, 'U.S.A'),
(4, 'Hunger Games', 1, 3, '460', '4', '5', NULL, 'U.S.A'),
(5, 'Walking Dead', 2, 4, '1200', '80', '1', 9, 'U.S.A'),
(6, 'South Park', 2, 5, '800', '400', '4', 21, 'U.S.A'),
(8, 'Shape of Water', 1, 6, '120', '1', '4', NULL, 'U.S.A'),
(9, 'War of the Worlds', 1, 3, '120', '1', '4', NULL, 'U.S.A');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_description`) VALUES
(1, 'Fantasy'),
(2, 'Magic'),
(3, 'Action'),
(4, 'Zombie'),
(5, 'Comedy'),
(6, 'Romantic');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `type_id` int(11) NOT NULL,
  `type_description` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `types`
--

INSERT INTO `types` (`type_id`, `type_description`) VALUES
(1, 'Movie'),
(2, 'Serie');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`episode_id`);

--
-- Indexen voor tabel `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`film_id`),
  ADD KEY `fk_filmGenre` (`genre_id`);

--
-- Indexen voor tabel `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexen voor tabel `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `episodes`
--
ALTER TABLE `episodes`
  MODIFY `episode_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT voor een tabel `films`
--
ALTER TABLE `films`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `fk_filmGenre` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
