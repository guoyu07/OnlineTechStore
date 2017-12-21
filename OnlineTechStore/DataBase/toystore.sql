-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2015 at 04:19 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(1, 'Apple'),
(2, 'laptop'),
(3, 'mobile'),
(4, 'Building blocks'),
(5, 'dolls'),
(6, 'education'),
(7, 'electronic'),
(8, 'games and puzzles'),
(9, 'General'),
(10, 'musical'),
(11, 'outdoor'),
(12, 'remote control'),
(13, 'sports');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `toyId` int(11) NOT NULL,
  `toyName` varchar(200) NOT NULL,
  `toyPrice` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `toyId`, `toyName`, `toyPrice`) VALUES
(1, 'preethi@yahoo.com', 56, 'Musical-Drum', 67),
(5, 'preethi@gmail.com', 38, 'Electric Remote Control', 100),
(6, 'preethi@gmail.com', 73, 'learning numbers', 50),
(15, 'preethi@yahoo.com', 3, 'Art Craft-Coloring Set', 40),
(16, 'preethi@yahoo.com', 8, 'Barbie Bike', 260);

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE IF NOT EXISTS `toys` (
  `toyId` int(11) NOT NULL AUTO_INCREMENT,
  `toyName` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL,
  `toyDesc` text NOT NULL,
  `toyPrice` int(11) NOT NULL,
  `toyImage` varchar(100) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`toyId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`toyId`, `toyName`, `cid`, `toyDesc`, `toyPrice`, `toyImage`, `Gender`, `quantity`) VALUES
(1, 'iphone 5', 1, 'mobile ', 75, 'quo.jpg', 'Girl', 9),
(2, 'iphone 6', 1, 'iphone 6', 50, 'quo.jpg', 'Girl', 9),
(3, 'ipad', 1, 'Using Colors for drawing..', 40, 'quo.jpg', 'Girl', 9),
(4, 'ArtCraft-Construction Paper', 1, 'Paper for art/craft', 400, 'images/Construction-Paper.jpg', 'Boy', 10),
(5, 'Art Craft-Crayola Coloring Set', 1, 'Crayola crayons', 60, 'images/Crayola.jpg', 'Boy', 10),
(6, 'Barbie Cycle', 2, 'Cycle for barbie girls', 260, 'images/bcycle.jpg', 'Girl', 10),
(7, 'Butterfly Barbie', 2, 'Butterfly barbie girls', 260, 'images/bfly.jpg', 'Girl', 10),
(8, 'Barbie Bike', 2, 'Bike for barbie girls', 260, 'images/bgirlbike.jpg', 'Girl', 9),
(9, 'Barbie Kids', 2, 'barbie for kids play', 260, 'images/bkids.jpg', 'Girl', 10),
(10, 'Pink Barbie Princess', 2, 'Pink Princess', 200, 'images/bpink.jpg', 'Girl', 10),
(11, 'Bike-Truck', 3, 'A colorful truck for kids under age 5', 20, 'images/truck.jpg', 'Boy', 10),
(12, 'Bike-Lorry', 3, 'Kids play kit lorry', 150, 'images/lorry.jpg', 'Boy', 10),
(13, 'Bike-Toy Scotter', 3, 'A toy scotter with 3 peddles', 150, 'images/toy-scotter.jpg', 'Boy', 10),
(14, 'Bike-Red Scotter', 3, ' creative red scotter', 150, 'images/red-scotter.jpg', 'Boy', 10),
(15, 'Bike-Pink Scotter', 3, 'Pink scotter for girls', 150, 'images/pinkscotter.jpg', 'Girl', 10),
(16, 'Bike-Blue Scotter', 3, 'Blue scotter for boys', 150, 'images/blue-scotter.jpg', 'Boy', 10),
(17, 'Building Block''s Snake', 4, 'Build a snake pattern with the blocks', 50, 'images/snake.jpg', 'Boy', 10),
(18, 'Building Blocks House', 4, 'Manage to create a house of your imagination', 150, 'images/house.jpg', 'Girl', 10),
(19, 'Blocks', 4, 'Create an art with the help of the kit..!', 150, 'images/download.jpg', 'Boy', 10),
(20, 'Blocking the blocks', 4, 'BLOCKS with blocks', 150, 'images/blocks.jpg', 'Boy', 10),
(21, 'Building Block-Dog', 4, 'Want a pet made up of blocks', 150, 'images/dog.jpg', 'Boy', 10),
(22, 'Building block-Castle', 4, 'Want a castle of building blocks', 150, 'images/castle.jpg', 'Girl', 10),
(23, 'Bear doll', 5, 'Soft Polar Bear', 68, 'images/bear.jpg', 'Girl', 10),
(24, 'Desc doll', 5, 'Wanna have the despicable me..!', 68, 'images/des.jpg', 'Boy', 10),
(25, 'dora doll', 5, 'A Dora toy for the dora fans', 68, 'images/dora.jpg', 'Girl', 10),
(26, 'giraff doll', 5, 'Giraff Soft Toy', 68, 'images/giraff.jpg', 'Boy', 10),
(27, 'hairy doll', 5, 'A hairy Soft toy', 68, 'images/hairy.jpg', 'Girl', 10),
(28, 'pikachu doll', 5, 'Pokemon Pikachu', 68, 'images/pikachu.jpg', 'Boy', 10),
(29, 'Learn Abascus', 6, 'Abascus with alphabets for growing kidos', 98, 'images/abascus.jpg', 'Girl', 10),
(30, 'Learn Abascus 2', 6, 'Abascus for growing kidos,learn maths', 98, 'images/abascus1.jpg', 'Boy', 10),
(31, 'Learn Body parts educational Toy', 6, 'Learn the different body parts', 98, 'images/Body.jpg', 'Girl', 10),
(32, 'Learning clock', 6, 'Whats the time now', 98, 'images/clock.jpg', 'Boy', 10),
(33, 'match-education', 6, 'Match the shapes and fill in', 98, 'images/match.jpg', 'Boy', 10),
(34, 'puzzle-education', 6, 'Create a animal by joining the puzzle pieces', 98, 'images/puzzle.jpg', 'Girl', 10),
(35, 'Electronic Helicopter', 7, 'Like the Helicopters..!', 100, 'images/helicopter.jpg', 'Boy', 10),
(36, 'Electronic Joystick', 7, 'Have fun of games with joystick', 100, 'images/Joystick.jpg', 'Boy', 10),
(37, 'Electronic Piano', 7, 'A kids piano set', 100, 'images/piano.jpg', 'Girl', 10),
(38, 'Electric Remote Control', 7, 'A remote controllled helicopter', 100, 'images/remotecontrol.jpg', 'Boy', 10),
(39, 'Electric Robotic Dog', 7, 'A robotic dog to play with you', 100, 'images/Robot.jpg', 'Boy', 10),
(40, 'Sports-Basketball', 13, 'A basketball kit', 80, 'images/Basketball.jpg', 'Boy', 10),
(41, 'Sports-Bowling', 13, 'Bowling kit', 80, 'images/bowling.jpg', 'Girl', 10),
(42, 'Sports-Football', 13, 'Football kit', 80, 'images/football.jpg', 'Boy', 10),
(43, 'Sports-Golf', 13, 'Golf kit', 80, 'images/golf.jpg', 'Boy', 10),
(44, 'Sports-Throw', 13, 'Throw plates', 80, 'images/throw.jpg', 'Boy', 10),
(45, 'Remote Control-Antenna Car', 12, 'Antenna Car', 80, 'images/antenna.jpg', 'Boy', 10),
(46, 'Remote Control-Car', 12, 'Car', 80, 'images/car.jpg', 'Boy', 10),
(47, 'Remote Control-Jet', 12, 'Jet', 80, 'images/jet.jpg', 'Boy', 10),
(48, 'Remote Control-Race Car', 12, 'Toy race car', 80, 'images/racecar.jpg', 'Boy', 10),
(49, 'Remote Control-Orange Car', 12, 'Orange race car', 80, 'images/orange.jpg', 'Boy', 10),
(50, 'Outdoor-Seesaw', 11, 'Kids Seesaw', 67, 'images/seesaw.jpg', 'Girl', 10),
(51, 'Outdoor-Slide', 11, 'Kids Slide', 67, 'images/slide.jpg', 'Girl', 10),
(52, 'Outdoor-Swim', 11, 'Swim water tub', 67, 'images/swim.jpg', 'Boy', 10),
(53, 'Outdoor-Swing', 11, 'Comfort Swing', 67, 'images/swing.jpg', 'Girl', 10),
(54, 'Outdoor-Tent', 11, 'Camping Tent', 67, 'images/tent.jpg', 'Boy', 10),
(55, 'Musical-Play Set', 10, 'Entire play set', 67, 'images/all.jpg', 'Boy', 10),
(56, 'Musical-Drum', 10, 'Drum Set', 67, 'images/drum.jpg', 'Boy', 10),
(57, 'Musical-Guitar', 10, 'Kids play guitar', 67, 'images/guitar.jpg', 'Boy', 10),
(58, 'Musical-Drums', 10, 'Drumer set', 67, 'images/mdrum.jpg', 'Girl', 10),
(60, 'Connect the dots-puzzle', 8, 'Connect and color', 35, 'images/connect.jpg', 'Girl', 10),
(61, 'Find it-game', 8, 'Finds the parts and place them', 35, 'images/find.jpg', 'Boy', 0),
(62, 'Maze-puzzle', 8, 'Find the way out', 35, 'images/maze.jpg', 'Girl', 0),
(63, 'Placing-game', 8, 'Place in the correct position', 35, 'images/place.jpg', 'Girl', 0),
(66, 'Cubix', 9, 'Can u solve it', 35, 'images/cubix.jpg', 'Boy', 0),
(70, 'car toy', 9, 'A toy car for kids to run around with', 50, 'images/car toy.jpg', 'Boy', 0),
(71, 'barbie-doll', 9, 'Princess barbie for baby girls', 40, 'images/barbie-doll.jpg', 'Girl', 0),
(72, 'Electric Robot ', 7, 'An electric robot that moves around and talks ', 20, 'images/robot toy.jpg', 'Boy', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(100) NOT NULL DEFAULT 'Customer',
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `password`, `usertype`, `address`, `city`, `state`, `phone`) VALUES
(1, 'swetha88@gmail.com', 'HelloKitty', 'admin', 'McCallum Blvd', 'Dallas', 'Texas', 2142268097),
(2, 'preethi@yahoo.com', 'preethi', 'Customer', 'Richardson', 'Dallas', 'Texas', 4563217589),
(3, 'admin@admin.com', 'adminuser', 'admin', 'McCallum Blvd', 'Dallas', 'Texas', 5641235785),
(11, 'priya@gmail.com', 'priya12', 'Customer', 'Coit Road', 'Dallas', 'Texas', 5687412545);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
