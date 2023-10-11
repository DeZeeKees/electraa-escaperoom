-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2023 at 09:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electraa`
--

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE `numbers` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `number` int NOT NULL,
  `video` text COLLATE utf8mb4_general_ci NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `numbers`
--

INSERT INTO `numbers` (`id`, `name`, `number`, `video`, `active`) VALUES
(1, '10 wisselschakelaar', 10795462, 'https://www.youtube.com/watch?v=qfDZNUOtah0', 1),
(2, '11 centraaldoos', 11833614, 'https://www.youtube.com/watch?v=S2hsRyXABBE', 1),
(3, '12 werkschakelaar', 12396126, 'https://youtu.be/l0tMC430i-0?si=i9eIYs-d_LnT6_kg', 1),
(4, '13 noodstopschakelaar', 13754381, 'https://youtu.be/mQaQmdq2QtU?si=v20BLbYoCfWzOvCR', 1),
(5, '14 hoofdschakelaar', 14725266, 'https://youtu.be/uwF8z-dtHoc?si=bo8WddDEHXxZI1vJ', 1),
(6, '15', 15444089, '', 1),
(7, '16 B16 automaat', 16867944, 'https://youtu.be/OcVB1hesdrE?si=ccqGdTcsIPTpCRI0', 1),
(8, '17 aardlekschakelaar', 17376216, 'https://www.youtube.com/watch?v=e7xunYB1xkA', 1),
(9, '18 wandcontactdoos', 18228166, '', 1),
(10, '19 multimeter', 19328153, 'https://youtu.be/AphYCE9iiyk?si=0COCXbt-jmWmUCNi', 1),
(11, '20 kniptang', 20502158, '', 1),
(12, '21 kruisschakelaar', 21297288, 'https://www.youtube.com/watch?v=j10_nGgUI3Q', 1),
(13, '22 striptang', 22811127, 'https://www.youtube.com/watch?v=KcBwvOTwyzc', 1),
(14, ' 23 PVC buis', 23584885, 'https://www.youtube.com/watch?v=X4C238JuoDU', 1),
(15, '24 hostalit buis', 24734641, '', 1),
(16, '25', 25255035, '', 1),
(17, '26', 26627954, '', 1),
(18, '27', 27392110, '', 1),
(19, '28', 28524675, '', 1),
(20, '29', 29557577, '', 1),
(21, '30', 30871013, '', 1),
(22, '31', 31243535, '', 1),
(23, '32', 32802635, '', 1),
(24, '33', 33825989, '', 1),
(25, '34', 34552341, '', 1),
(26, '35', 35356920, '', 1),
(27, '36', 36797761, '', 1),
(28, '37', 37206928, '', 1),
(29, '38', 38725026, '', 1),
(30, '39', 39641213, '', 1),
(31, '40', 40832337, '', 1),
(32, '41', 41731164, '', 1),
(33, '42', 42172436, '', 1),
(34, '43', 43792459, '', 1),
(35, '44', 44686687, '', 1),
(36, '45', 45188578, '', 1),
(37, '46', 46462947, '', 1),
(38, '47', 47873215, '', 1),
(39, '48', 48833250, '', 1),
(40, '49', 49557449, '', 1),
(41, '50', 50141080, '', 1),
(42, '51', 51445127, '', 1),
(43, '52', 52518944, '', 1),
(44, '53', 53188542, '', 1),
(45, '54', 54391833, '', 1),
(46, '55', 55407656, '', 1),
(47, '56', 56651450, '', 1),
(48, '57', 57218022, '', 1),
(49, '58', 58278324, '', 1),
(50, '59', 59853886, '', 1),
(51, '60', 60568743, '', 1),
(52, '61', 61354745, '', 1),
(53, '62', 62587425, '', 1),
(54, '63', 63841821, '', 1),
(55, '64', 64794427, '', 1),
(56, '65', 65732431, '', 1),
(57, '66', 66178031, '', 1),
(58, '67', 67237861, '', 1),
(59, '68', 68595412, '', 1),
(60, '69', 69745265, '', 1),
(61, '70', 70446748, '', 1),
(62, '71', 71557947, '', 1),
(63, '72', 72688841, '', 1),
(64, '73', 73455984, '', 1),
(65, '74', 74587622, '', 1),
(66, '75', 75208045, '', 1),
(67, '76', 76394884, '', 1),
(68, '77', 77211086, '', 1),
(69, '78', 78313764, '', 1),
(70, '79', 79125487, '', 1),
(71, '80', 80147119, '', 1),
(72, '81', 81873231, '', 1),
(73, '82', 82693743, '', 1),
(74, '83', 83131564, '', 1),
(75, '84', 84224015, '', 1),
(76, '85', 85372753, '', 1),
(77, '86', 86804219, '', 1),
(78, '87', 87882841, '', 1),
(79, '88', 88768762, '', 1),
(80, '89', 89846763, '', 1),
(81, '90', 90265265, '', 1),
(82, '91', 91676344, '', 1),
(83, '92', 92801539, '', 1),
(84, '93', 93548868, '', 1),
(85, '94', 94704227, '', 1),
(86, '95', 95426249, '', 1),
(87, '96', 96421234, '', 1),
(88, '97', 97553034, '', 1),
(89, '98', 98143677, '', 1),
(90, '99', 99506910, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
