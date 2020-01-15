-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 11:19 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vkey` varchar(100) NOT NULL,
  `veryfied` tinyint(4) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `midname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `affiliate` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `signature` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`, `vkey`, `veryfied`, `salutation`, `firstname`, `midname`, `lastname`, `gender`, `affiliate`, `url`, `signature`, `phone`, `image`, `state`, `datetime`) VALUES
(9, 'intelvic', 'nnnnnnnnn', '', '31afd39f79d27483a9cc3ec39b38f1db', 0, 'mr', 'victor', '', '', 'male', '\r\n        ', '', '', 0, '', '', '2019-09-24 09:46:59'),
(10, '', '', '', 'ae973fd802c91e1ac6c1d067e29177cb', 0, '', '', '', '', 'male', '\r\n        ', '', '', 0, '', '', '2019-09-24 09:47:32'),
(11, '', '', '', 'f9cb2f978a29ffb818c3cd6af4ffbe1a', 0, '', '', '', '', 'male', '\r\n        ', '', 'bence-balla-schottner-YD_cfxdYWdA-unsplash.jpg', 0, '8ecb472fb7e3baebfb37ce95418c24d8.jpg', '', '2019-09-24 10:14:27'),
(12, 'intelvic', 'mmmmm', 'charity.jv.jvo@gmail.com', 'f0bd9a7b3f4e0160f87c9805f09dd188', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', '\r\n        mmmmmmmmmmmmmm', 'https://www.facebook.com', '3D-Mobile-Display-MockUp.png', 2147483647, '8ecb472fb7e3baebfb37ce95418c24d8.jpg', 'ketu lagos state', '2019-09-24 10:15:45'),
(13, 'vikki_234', 'nnnnnn', 'charity.jv.jvo@gmail.com', '2741aa61af39b4d4a698715b10408615', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', '\r\n        ggggggggggggg', 'https://www.facebook.com', '60913599_651699315300578_9211723093410578432_n.jpg', 2147483647, '8ecb472fb7e3baebfb37ce95418c24d8.jpg', 'ketu lagos state', '2019-09-24 10:16:52'),
(14, 'intelvic', 'bhbhbh', 'charity.jv.jvo@gmail.com', 'f53b2d1512283bae0a25fb3df38783b7', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', '\r\n        mmmmmmmmmmmmm', 'https://www.facebook.com', '58c829d0555bc_thumb900.jpg', 2147483647, '8ecb472fb7e3baebfb37ce95418c24d8.jpg', 'ketu lagos state', '2019-09-24 10:29:22'),
(15, 'intelvic', 'njnjnj', 'charity.jv.jvo@gmail.com', '43762c323315ca0a4ca24fb3253e2e7c', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', '\r\n        jhgfd,m', 'https://www.facebook.com', 'bence-balla-schottner-YD_cfxdYWdA-unsplash.jpg', 2147483647, '8ecb472fb7e3baebfb37ce95418c24d8.jpg', 'ketu lagos state', '2019-09-24 10:31:29'),
(16, 'intelvic', 'jjjjjjjj', 'charity.jv.jvo@gmail.com', '7dccbff7e1dab966101555e7cd6ec220', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', '\r\n        mklm;kl/,', 'https://www.facebook.com', '60817383_2324273340949384_6367079310246805504_n.jpg', 2147483647, '8ecb472fb7e3baebfb37ce95418c24d8.jpg', 'ketu lagos state', '2019-09-24 10:32:34'),
(17, 'intelvic', 'cccccccc', 'charity.jv.jvo@gmail.com', 'dc73e7143b0932672849cc18ac2eb05b', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', '\r\n        cccccccc', 'https://www.facebook.com', '8ecb472fb7e3baebfb37ce95418c24d8.jpg', 2147483647, '3D-Mobile-Display-MockUp.png', 'ketu lagos state', '2019-09-24 10:34:53'),
(18, '', '', '', '16cab13fd23baa0e99a111ac689fde86', 0, '', '', '', '', 'male', '\r\n        ', '', '', 0, '', '', '2019-09-25 12:41:06'),
(19, '', '', '', 'b51e6d82c7a0bab33b92273eab900199', 0, '', '', '', '', 'male', '\r\n        ', '', '', 0, '', '', '2019-09-25 12:41:56'),
(20, '', '', '', '991e6392fa0e4d195221336472fdc4ab', 0, '', '', '', '', 'male', '\r\n        ', '', '', 0, '', '', '2019-09-25 12:42:05'),
(21, '', '', '', 'b9f260c7d2d7bdaeaee18fef0ab7ab7e', 0, '', '', '', '', 'male', '\r\n        ', '', '', 0, '', '', '2019-09-25 12:42:22'),
(22, 'intelvic', 'bbbbbb', 'charity.jv.jvo@gmail.com', 'f9c431a6c06f32cd827c7371044233a7', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', 'bbbbbbbbbbbbbbbbbbbbbb\r\n        ', 'https://www.facebook.com', '', 2147483647, '60913599_651699315300578_9211723093410578432_n.jpg', 'ketu lagos state', '2019-09-25 13:00:32'),
(23, 'intelvic', 'vvvvvv', 'charity.jv.jvo@gmail.com', '3fff2b6ccf393a57e012f84760c46606', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', 'vvvvvvvvvvvvvvvvv\r\n        ', 'https://www.facebook.com', '', 2147483647, '8ecb472fb7e3baebfb37ce95418c24d8.jpg', 'ketu lagos state', '2019-09-25 13:04:06'),
(24, 'intelvic', 'ffffff', 'charity.jv.jvo@gmail.com', '6b9ab777cacabbc1a04ddd38fce17600', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', '\r\n       ffffffffffffffffffffffff ', 'https://www.facebook.com', '', 2147483647, '3D-Mobile-Display-MockUp.png', 'ketu lagos state', '2019-09-25 13:10:30'),
(25, 'intelvic', 'cccccc', 'charity.jv.jvo@gmail.com', 'e4f8fce81c87865981e0e9840b1c1240', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', 'cccccccccccccccccc\r\n        ', 'https://www.facebook.com', '', 2147483647, '60913599_651699315300578_9211723093410578432_n.jpg', 'ketu lagos state', '2019-09-25 13:15:30'),
(26, 'intelvic', 'ffffff', 'charity.jv.jvo@gmail.com', '32396499763aec32b0e4c64a01a1136d', 0, 'mr', 'victor', 'password', 'Jimoh', 'male', '\r\n        ', 'https://www.facebook.com', '', 2147483647, '8ecb472fb7e3baebfb37ce95418c24d8.jpg', 'ketu lagos state', '2019-09-25 13:21:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
