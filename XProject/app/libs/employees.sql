-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 04, 2023 lúc 11:07 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(1, 'Jasper Elwill', '9 Oneill Way', 5823),
(2, 'Toinette Stanney', '6 Sundown Alley', 4645),
(3, 'Randell Zanassi', '64 Bobwhite Point', 3269),
(4, 'Erhard Handrock', '673 Sommers Junction', 6075),
(5, 'Killy Summerson', '1164 Sage Terrace', 2186),
(6, 'Aliza Filasov', '017 Monterey Avenue', 8307),
(7, 'Junie Parnby', '581 Mosinee Center', 9111),
(8, 'Ambrosio Rewbottom', '9218 Kinsman Road', 2768),
(9, 'Clay Fanshaw', '9612 Everett Circle', 2702),
(10, 'Ralph Cusworth', '4500 Holmberg Road', 9756),
(11, 'Gisele Thomkins', '022 Lakewood Circle', 7276),
(12, 'Catlin MacGrath', '25 Hallows Trail', 6572),
(13, 'Tybie MacQuaker', '05974 Steensland Center', 6463),
(14, 'Cass Suart', '87 Emmet Drive', 5054),
(15, 'Giff Fearnley', '0 Debra Street', 4705),
(16, 'Wiley Titmarsh', '7688 Monument Crossing', 4800),
(17, 'Carolina Boswell', '6310 Eagle Crest Street', 4967),
(18, 'Jerrold Adamovitz', '5 Sage Parkway', 9264),
(19, 'Liz Mugridge', '1 Alpine Trail', 8324),
(20, 'Margie Bedminster', '8 Oneill Avenue', 6806),
(21, 'Carena Dillimore', '1 Stephen Junction', 4575),
(22, 'Vittoria Olivet', '365 Mesta Park', 2769),
(23, 'Tate Meggison', '9 Bonner Hill', 5498),
(24, 'Janka Gove', '459 Blue Bill Park Alley', 6746),
(25, 'Heath O\'Hegertie', '1 Mcbride Drive', 7081),
(26, 'Hadleigh Keys', '43206 Stephen Parkway', 7590),
(27, 'Lesly Poyntz', '71 Delaware Drive', 2818),
(28, 'Merrile Spenclay', '8976 Bluestem Hill', 4003),
(29, 'Harwilll Collop', '216 Armistice Place', 8874),
(30, 'Algernon Lionel', '9 Judy Road', 9388),
(31, 'Brigida Mumbeson', '43925 Warrior Road', 8070),
(32, 'Ogdon Rickardsson', '995 Muir Lane', 7933),
(33, 'Blondelle Donoher', '410 Green Trail', 5754),
(34, 'Francklin Bohl', '32286 Rusk Parkway', 1712),
(35, 'Ivy Johnsey', '781 Green Ridge Place', 1953),
(36, 'Reginald Gother', '4519 Sugar Park', 9047),
(37, 'Kermit Deelay', '2316 Maple Wood Street', 4627),
(38, 'Royal Sirett', '28868 Rieder Court', 6781),
(39, 'Sibylle Karet', '78111 Walton Avenue', 3213),
(40, 'Morgan Challender', '495 Rowland Way', 3265),
(41, 'Gav Creavan', '55219 Clemons Crossing', 4009),
(42, 'Alena Metzing', '10650 Corry Lane', 6660),
(43, 'Euphemia Coslitt', '31099 Darwin Plaza', 2026),
(44, 'Lee Gurnett', '381 Valley Edge Park', 4377),
(45, 'Ilyssa Unwin', '5685 Bultman Place', 2822),
(46, 'Jany Adnam', '05 American Crossing', 9778),
(47, 'Gill Skep', '26545 Corben Trail', 3220),
(48, 'Louise Pestricke', '97 Montana Street', 3684),
(49, 'Celine McKinna', '96 Rowland Lane', 5880),
(50, 'Merilyn Hainge', '02 Mayfield Circle', 2253);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
