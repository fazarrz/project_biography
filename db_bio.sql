-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 03:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biography`
--

CREATE TABLE `tbl_biography` (
  `id_bio` int(11) NOT NULL,
  `title_bio` varchar(100) NOT NULL,
  `text_bio` text NOT NULL,
  `img_bio` varchar(100) NOT NULL,
  `tgl_bio` datetime NOT NULL,
  `status_bio` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_biography`
--

INSERT INTO `tbl_biography` (`id_bio`, `title_bio`, `text_bio`, `img_bio`, `tgl_bio`, `status_bio`, `id_category`, `id_user`) VALUES
(16, 'Mark Zuberbergs', 'Mark Jukerberg adalah seorang intrepeuner di bidang teknologi yang membuat sosial media seperti facebook dan instagram.\r\n\r\ndjsakasjdkajskdja', 'mark2.jpg', '2021-12-30 22:36:38', 1, 77, 2),
(17, 'Tanboy', 'Tukang makan yang sukses dibidang vlogger', 'tanboy.jpg', '2021-12-16 08:52:41', 1, 76, 2),
(21, 'Jokowi Dodo', 'Presiden Sekarang', 'index.jpg', '2021-12-30 22:38:57', 1, 77, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(10) NOT NULL,
  `name_category` varchar(50) NOT NULL,
  `img_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name_category`, `img_category`) VALUES
(76, 'Makanan', 'food.jpeg'),
(77, 'Teknologi', 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id_comment` int(15) NOT NULL,
  `id_bio` int(15) NOT NULL,
  `name_comment` varchar(100) NOT NULL,
  `email_comment` varchar(100) NOT NULL,
  `tgl_comment` date NOT NULL,
  `content_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id_comment`, `id_bio`, `name_comment`, `email_comment`, `tgl_comment`, `content_comment`) VALUES
(22, 16, 'Rizky', 'r@ky.com', '2021-12-29', 'Wah hebat.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_data`
--

CREATE TABLE `tbl_user_data` (
  `id_user` int(10) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `pass_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_data`
--

INSERT INTO `tbl_user_data` (`id_user`, `name_user`, `user_name`, `pass_user`) VALUES
(2, 'Dell Jhons', 'delljhons', '51a32d722dd3b81772a68c7449d5e62d'),
(10, 'Fazar Dwi Septian', 'fazar', '09a7adc4950a0eed39b3c182dd948bcc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_biography`
--
ALTER TABLE `tbl_biography`
  ADD PRIMARY KEY (`id_bio`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_bio` (`id_bio`);

--
-- Indexes for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_biography`
--
ALTER TABLE `tbl_biography`
  MODIFY `id_bio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id_comment` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_biography`
--
ALTER TABLE `tbl_biography`
  ADD CONSTRAINT `tbl_biography_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `tbl_category` (`id_category`),
  ADD CONSTRAINT `tbl_biography_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user_data` (`id_user`);

--
-- Constraints for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`id_bio`) REFERENCES `tbl_biography` (`id_bio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
