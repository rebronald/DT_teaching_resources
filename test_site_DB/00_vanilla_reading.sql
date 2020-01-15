-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2018 at 01:59 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `00_vanilla_reading`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_books`
--

CREATE TABLE `all_books` (
  `ID` int(11) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Genre` varchar(50) NOT NULL,
  `Rating` int(1) NOT NULL,
  `Review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_books`
--

INSERT INTO `all_books` (`ID`, `Title`, `Author`, `Genre`, `Rating`, `Review`) VALUES
(1, 'Hitchhiker\'s Guide to the Galaxy', 'Douglas Adams', 'Humour', 3, 'The book is not as good as its cult status would lead one to believe. Whilst it has some memorable quotes and a number of cool ideas the overall plot is weak and often the jokes / humour are simply not all that funny. This book may well appeal to a younger audience but for me it was quite a disappointment.'),
(2, 'Saturn Run', 'John Sandford and Ctein', 'Sci Fi', 4, 'The story is fast moving and compelling. The characters are well developed and as a reader I became quite invested in their personal stories. Whilst the book took quite a while to read, the journey was worthwhile. The Physics underlying the novel has been well researched and this helps to make the story both interesting and believable.'),
(3, 'Don\'t Make Me Think', 'Steve Krug', 'Non Fiction', 5, 'Don\'t Make me Think is a fun, practical book that describes the need for frequent, informal testing to ensure that an interface (such as a website) is easy to use. The book\'s informal style is appealing and whilst some of the material is out of date, most of the information easy to understand and implement.  This is a \'must read\' for anyone involved with the design or development of websites / interfaces.'),
(4, 'This was a man', 'Jeffrey Archer', 'Historical Fiction', 4, 'This was a thoroughly enjoyable read that provided a deeply satisfying ending to the Clifton Chronicles.  Whilst the story is fictitious, the setting, believable characters and tight writing made it feel as if it could have been real.'),
(5, 'Honour\'s knight', 'Rachel Bach', 'Sci Fi', 3, 'This is the sequel to \'Fortune\'s Pawn\' and it is every bit as enjoyable as its predecessor.  The premise is fun (but unlikely).  This is a very light read and is the literary equivalent of junk food - enjoyable to consume but not all that beneficial for one\'s intellect.  Bach is best enjoyed in moderation.'),
(6, 'Fortune\'s Pawn', 'Rachel Bach', 'Sci Fi', 3, 'A great light read - perfect for long journeys or when one is too tired for something more substantial.  Whilst the novel was fun, the story is also firmly in the \'forgettable\' category.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_books`
--
ALTER TABLE `all_books`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_books`
--
ALTER TABLE `all_books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
