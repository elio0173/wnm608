-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2022 at 12:32 AM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eliohung_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Godzilla (1991)', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 270, 'Monster', '2022-04-16 23:57:57', '2022-04-16 23:57:57', 'This product is a reproduction of the model Mr. Yuji Sakai spent 9 hours creating during an online modeling event he held in 2020 as numerous Godzilla fans watched the process in real-time. ', 'godzilla1991.png', 'godzilla1991_img1.png, godzilla1991_img2.png'),
(2, 'Godzilla (1954)', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 555, 'Monster', '2022-04-17 00:00:45', '2022-04-17 00:00:45', 'The Godzilla 1954 garage kit released by Inoue Arts in 1986 showed off Godzilla in its pose as it landed in Tokyo and has been transformed into a fully painted soft vinyl figurine standing at 21.65 in. tall!', 'godzilla1954.png', 'godzilla1954_img1.png, godzilla1954_img2.png '),
(3, 'Godzilla 2000 Millennium', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 300, 'Monster', '2022-04-17 00:02:44', '2022-04-17 00:02:44', 'Godzilla 2000: Millennium (released in 1999) was a much-awaited Godzilla film for fans, whose production was announced after a four-year hiatus following the previous installment in the franchise.', 'godzilla2000.png', 'godzilla2000_img1.png, godzilla2000_img2.png'),
(4, 'Godzilla 89', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 350, 'Monster', '2022-04-17 00:05:44', '2022-04-17 00:05:44', 'Sculpted by Mark Newman and Hector Arce, designed by Eric Siebenaler, and painted by Hector Arce, the GODZILLA \'89 Premium Scale Statue comes with a switch-out mouth (open or closed).', 'godzilla89.png', 'godzilla89_img1.png, godzilla89_img2.png'),
(5, 'Ryu Evil Ryu', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 605, 'Street Fighter', '2022-04-17 00:07:57', '2022-04-17 00:07:57', 'Ryu is the only character to appear in every Street Fighter game and every crossover. Capcom’s unofficial mascot and ambassador for other media. The irrefutable star of the #1 fighting game in history. Pop Culture Shock Collectibles is proud to present their very first 1:3 scale statue of Ryu, one of the most recognizable and beloved characters in all of gaming.', 'evilryu.png', 'evilryu_img1.png, evilryu_img2.png, '),
(6, 'Guile Ultimate', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 855, 'Street Fighter', '2022-04-17 00:09:58', '2022-04-17 00:09:58', 'A fierce fighter and a loyal soldier, Guile will stop at nothing to take down Shadaloo, the mysterious organization responsible for the disappearance of his close friend and mentor, Charlie Nash. ', 'gulie.png', 'gulie_img1.png, gulie_img2.png'),
(7, 'Chun-Li', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 355, 'Street Fighter', '2022-04-17 00:11:47', '2022-04-17 00:11:47', 'Street Fighter\'s Chun-Li joins Capcom\'s Figure Builder Creator\'s Model line!\r\n\r\nStanding at over 16\" tall, the graceful, first female fighter in the series is seen showing off her muscular thighs in purple tights and a blue qipao, ready to take on any opponent. ', 'chunli.png', 'chunli_img1.png, chunli_img2.png'),
(8, 'Akuma 10 Year', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 475, 'Street Fighter', '2022-04-17 00:13:50', '2022-04-17 00:13:50', 'The 10th Anniversary Akuma 1:4 Mixed Media Statue celebrates 10 years since Pop Culture Shock first released their iconic Akuma statue way back in 2007, while also paying tribute to the characters exciting modern appearance.', 'akuma.png', 'akuma_img1.png, akuma_img2.png'),
(9, 'Gandalf the Grey', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 350, 'Movies', '2022-04-17 00:20:51', '2022-04-17 00:20:51', 'Fans of The Lord of the Rings, don\'t miss your chance to add this Gandalf the Grey collectible to your Lord of the Rings collection!', 'thegrey.png', 'thegrey_img1.png, thegrey_img2.png'),
(10, 'Marty McFly and Einstein', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 285, 'Movies', '2022-04-17 00:22:35', '2022-04-17 00:22:35', 'The movie-accurate collectible figure is meticulously crafted based on the image of Michael J. Fox as Marty McFly in the movie, featuring a newly developed head sculpt with astonishing likeness, skillfully tailored outfit, stunningly detailed accessories including a camcorder, portable audio cassette player with headset, a watch, a skateboard, a red backpack, a handout, and a display base!', 'marty.png', 'marty_img1.png, marty_img2.png'),
(11, 'Doc Brown', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 270, 'Movies', '2022-04-17 00:24:38', '2022-04-17 00:24:38', 'Masterfully crafted based on the appearance of Christopher Lloyd as Dr. Emmett Brown in Back to The Future, the sixth scale figure features a newly painted head sculpt with incredible likeness; a finely tailored protective jumpsuit comes with a pouch and bag to store his equipment.', 'doc.png', 'doc_img1.png, doc_img2.png'),
(12, 'Peter Venkman', 'https://eliohung.com/aau/wnm608/hung.elio/index.php', 400, 'Movies', '2022-04-17 00:25:54', '2022-04-17 00:25:54', 'Featuring an incredible likeness of the inimitable Bill Murray in character as Venkman, this incredibly realistic statue stands approx 19” tall on its Ghostbusters themed base. Standing in classic Ghostbusting pose, Venkman is captured with Neutrona Wand in hand and comes complete with an intricately detailed Proton Pack.', 'peter.png', 'peter_img1.png, peter_img2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
