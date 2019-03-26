-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2018 lúc 10:10 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `busbooking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `availability`
--

CREATE TABLE `availability` (
  `id` int(10) UNSIGNED NOT NULL,
  `bus` int(10) UNSIGNED DEFAULT NULL,
  `route` int(10) UNSIGNED DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `amount` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `availability`
--

INSERT INTO `availability` (`id`, `bus`, `route`, `date`, `time`, `amount`, `status`) VALUES
(1, 1, 1, '2018-05-20', '13:00:00', 1, 'available'),
(2, 1, 2, '2018-05-22', '20:00:00', 2, 'available'),
(3, 2, 1, '2018-06-05', '13:00:00', 1, 'available');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` int(10) UNSIGNED DEFAULT NULL,
  `fullname` int(10) UNSIGNED DEFAULT NULL,
  `phone` int(10) UNSIGNED DEFAULT NULL,
  `bus` int(10) UNSIGNED DEFAULT NULL,
  `seat` int(10) UNSIGNED DEFAULT NULL,
  `date` int(10) UNSIGNED DEFAULT '1',
  `time` int(10) UNSIGNED DEFAULT NULL,
  `luggage` varchar(40) DEFAULT NULL,
  `amount` int(10) UNSIGNED DEFAULT NULL,
  `date_booked` date DEFAULT NULL,
  `field11` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bookings`
--

INSERT INTO `bookings` (`id`, `id_number`, `fullname`, `phone`, `bus`, `seat`, `date`, `time`, `luggage`, `amount`, `date_booked`, `field11`) VALUES
(3, 1, 1, 1, 1, 5, 1, 1, NULL, 1, NULL, NULL),
(4, 1, 1, 1, 3, 9, 3, 3, '1', 3, NULL, NULL),
(5, 2, 2, 2, 3, 1, 3, 3, NULL, 3, '2018-05-20', NULL),
(6, 3, 3, 3, 3, 5, 3, 3, NULL, 3, '2018-05-20', NULL),
(8, 2, 2, 2, 1, 10, 1, 1, '1', 1, '2018-12-07', NULL),
(9, 3, 3, 3, 1, 1, 1, 1, '1', 1, '2018-12-07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buses`
--

CREATE TABLE `buses` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `buses`
--

INSERT INTO `buses` (`id`, `number`) VALUES
(1, '36A88888'),
(2, '36A66666'),
(3, '36A11111'),
(4, '36A22222'),
(5, '36A33333'),
(6, '36A55555');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buses_backup_20181208055023`
--

CREATE TABLE `buses_backup_20181208055023` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `buses_backup_20181208055023`
--

INSERT INTO `buses_backup_20181208055023` (`id`, `number`) VALUES
(1, 'KBX 1234'),
(2, 'KBZ 8283'),
(3, '36A11111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `id_number` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `phone`, `id_number`) VALUES
(1, 'Ronaldo', '098888888', '201820192020'),
(2, 'Ngọc', '0987654321', '19071990'),
(3, 'Ngọc Nam', '0123456789', '10061993');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(31, 1, 'buses', 0, 0, 0, 0),
(32, 1, 'seats', 0, 0, 0, 0),
(33, 1, 'availability', 0, 0, 0, 0),
(34, 1, 'bookings', 0, 0, 0, 0),
(35, 1, 'routes', 0, 0, 0, 0),
(36, 1, 'customers', 0, 0, 0, 0),
(37, 2, 'buses', 1, 3, 3, 3),
(38, 2, 'seats', 1, 3, 3, 3),
(39, 2, 'availability', 1, 3, 3, 3),
(40, 2, 'bookings', 1, 3, 3, 3),
(41, 2, 'routes', 1, 3, 3, 3),
(42, 2, 'customers', 1, 3, 3, 3),
(43, 3, 'buses', 0, 3, 0, 0),
(44, 3, 'seats', 0, 3, 0, 0),
(45, 3, 'availability', 0, 3, 0, 0),
(46, 3, 'bookings', 1, 1, 1, 1),
(47, 3, 'routes', 0, 3, 0, 0),
(48, 3, 'customers', 1, 1, 1, 1),
(55, 4, 'buses', 0, 3, 3, 3),
(56, 4, 'seats', 0, 3, 3, 3),
(57, 4, 'availability', 0, 3, 3, 3),
(58, 4, 'bookings', 0, 0, 0, 0),
(59, 4, 'routes', 0, 3, 3, 3),
(60, 4, 'customers', 0, 3, 3, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`) VALUES
(1, 'anonymous', 'Nhóm ẩn danh được tạo tự động vào 2018-12-10', 0, 0),
(2, 'Admins', 'Nhóm ẩn danh được tạo tự động vào 2018-12-10', 0, 1),
(3, 'Khách Hàng', 'Nhóm ẩn danh được tạo tự động vào 2018-12-10', 1, 0),
(4, 'NamIT', 'Nhóm ẩn danh được tạo tự động vào 2018-12-10', 0, 1),
(5, 'vodanh', 'Anonymous group created automatically on 2018-12-07', 0, 0),
(6, '', 'Anonymous group created automatically on 2018-12-08', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(20) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'buses', '1', 'admin', 1526809520, 1544245009, 2),
(2, 'seats', '1', 'admin', 1526809541, 1526809541, 2),
(3, 'seats', '2', 'admin', 1526809550, 1526809550, 2),
(4, 'seats', '3', 'admin', 1526809559, 1526809559, 2),
(5, 'seats', '4', 'admin', 1526809568, 1526809568, 2),
(6, 'seats', '5', 'admin', 1526809577, 1526809577, 2),
(7, 'seats', '6', 'admin', 1526809587, 1526809587, 2),
(8, 'seats', '7', 'admin', 1526809597, 1526809597, 2),
(9, 'seats', '8', 'admin', 1526809605, 1526809605, 2),
(10, 'seats', '9', 'admin', 1526809615, 1526809615, 2),
(11, 'seats', '10', 'admin', 1526809623, 1526809623, 2),
(12, 'routes', '1', 'admin', 1526809669, 1544196497, 2),
(13, 'routes', '2', 'admin', 1526809686, 1544196470, 2),
(14, 'availability', '1', 'admin', 1526809809, 1526810984, 2),
(15, 'availability', '2', 'admin', 1526809852, 1544198836, 2),
(16, 'customers', '1', 'admin', 1526810032, 1544196364, 2),
(19, 'bookings', '3', 'admin', 1526812704, 1526812704, 2),
(20, 'buses', '2', 'admin', 1526820828, 1544244987, 2),
(21, 'availability', '3', 'admin', 1526820876, 1526820876, 2),
(22, 'bookings', '4', 'admin', 1526820948, 1526820948, 2),
(23, 'customers', '2', '', 1526822459, 1544196338, 3),
(24, 'bookings', '5', '', 1526824428, 1526824428, 3),
(25, 'customers', '3', 'admin', 1526845211, 1544196279, 2),
(26, 'bookings', '6', 'admin', 1526845238, 1526845238, 2),
(28, 'bookings', '8', 'admin', 1544170679, 1544170679, 2),
(29, 'bookings', '9', 'admin', 1544196513, 1544196513, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text,
  `custom2` text,
  `custom3` text,
  `custom4` text,
  `comments` text,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`) VALUES
('', NULL, NULL, '2018-12-08', 6, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2018-12-08', NULL, NULL),
('admin', '5a1760628ea739e61d9bb798b50542d5', 'admin@admin.com', '2018-05-20', 2, 0, 1, '1', '2', '3', '4', 'Admin member created automatically on 2018-05-20\nRecord updated automatically on 2018-05-20\nmember updated his profile on 12/07/2018, 03:16 am from IP address ::1\nmember updated his profile on 12/07/2018, 03:16 am from IP address ::1\nRecord updated automatically on 2018-12-07\nBản ghi được cập nhật tự động vào 2018-12-07\nBản ghi được cập nhật tự động vào 2018-12-07\nBản ghi được cập nhật tự động vào 2018-12-07\nBản ghi được cập nhật tự động vào 2018-12-07', NULL, NULL),
('hacker', NULL, NULL, '2018-12-08', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2018-12-08', NULL, NULL),
('khtest', 'e10adc3949ba59abbe56e057f20f883e', 'khtest@gmail.com', '2018-12-07', 3, 0, 1, '', '', '', '', 'member signed up through the registration form.', NULL, NULL),
('namit', '759caf96ec326a72ab63f929170cbfb4', 'namit@gmail.com', '2018-12-07', 2, 0, 1, '1', '2', '3', '4', '\nmember updated his profile on 12/07/2018, 09:02 am from IP address ::1', NULL, NULL),
('namit90', 'e10adc3949ba59abbe56e057f20f883e', 'namit90@gmail.com', '2018-12-07', 3, 0, 1, '', '', '', '', '', NULL, NULL),
('quantri', 'cbb14005b60beb85f7bf18e0cb468ac1', 'quantri@gmail.com', '2018-05-20', 2, 0, 1, '1', '2', '3', '4', 'Admin member created automatically on 2018-05-20\r\nRecord updated automatically on 2018-05-20\r\nmember updated his profile on 12/07/2018, 03:16 am from IP address ::1\r\nmember updated his profile on 12/07/2018, 03:16 am from IP address ::1\r\nRecord updated automatically on 2018-12-07', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `routes`
--

CREATE TABLE `routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `time` varchar(40) DEFAULT NULL,
  `amount` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `routes`
--

INSERT INTO `routes` (`id`, `name`, `time`, `amount`) VALUES
(1, 'Thanh Hóa - Ninh Bình', 'day', '50000'),
(2, 'Thái Nguyên - Hà Nội', 'day', '100000'),
(3, 'Thanh Hoa - Nghe An', 'day', '100000'),
(4, 'Thanh Hoa - Ha Nam', 'day', '50000'),
(5, 'Thanh Hoa - Ha Noi', 'day', '120000'),
(6, 'Thanh Hoa - Thai Nguyen', 'day', '130000'),
(7, 'Thanh Hoa - Da Nang', 'day', '140000'),
(8, 'Thai Nguyen - Tuyen Quang', 'day', '150000'),
(9, 'Thai Nguyen - Cao Bang', 'day', '160000'),
(10, 'Thai Nguyen - Lang Son', 'day', '170000'),
(11, 'Thai Nguyen - Ha Giang', 'day', '180000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `routes_backup_20181208071301`
--

CREATE TABLE `routes_backup_20181208071301` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `time` varchar(40) DEFAULT NULL,
  `amount` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `routes_backup_20181208071301`
--

INSERT INTO `routes_backup_20181208071301` (`id`, `name`, `time`, `amount`) VALUES
(1, 'Thanh Hóa - Ninh Bình', 'day', '50000'),
(2, 'Thái Nguyên - Hà Nội', 'day', '100000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seats`
--

CREATE TABLE `seats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `seats`
--

INSERT INTO `seats` (`id`, `name`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5'),
(6, 'A6'),
(7, 'A7'),
(8, 'A8'),
(9, 'A9'),
(10, 'A10'),
(11, 'A11'),
(12, 'A12'),
(13, 'A13'),
(14, 'A14'),
(15, 'A15'),
(16, 'A16'),
(17, 'A17'),
(18, 'A18'),
(19, 'A19'),
(20, 'A20'),
(21, 'A21'),
(22, 'A22'),
(23, 'A23'),
(24, 'A24'),
(25, 'A25'),
(26, 'A26'),
(27, 'A27'),
(28, 'A28'),
(29, 'A29'),
(30, 'A30'),
(31, 'A31'),
(32, 'A32'),
(33, 'A33'),
(34, 'A34'),
(35, 'A35'),
(36, 'A36'),
(37, 'A37'),
(38, 'A38'),
(39, 'A39'),
(40, 'A40'),
(41, 'A41'),
(42, 'A42'),
(43, 'A43'),
(44, 'A44'),
(45, 'A45'),
(46, 'A46'),
(47, 'A47'),
(48, 'A48'),
(49, 'A49'),
(50, 'A50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seats_backup_20181208055932`
--

CREATE TABLE `seats_backup_20181208055932` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `seats_backup_20181208055932`
--

INSERT INTO `seats_backup_20181208055932` (`id`, `name`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5'),
(6, 'A6'),
(7, 'A7'),
(8, 'A8'),
(9, 'A9'),
(10, 'A10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seats_backup_20181208060155`
--

CREATE TABLE `seats_backup_20181208060155` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `seats_backup_20181208060155`
--

INSERT INTO `seats_backup_20181208060155` (`id`, `name`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5'),
(6, 'A6'),
(7, 'A7'),
(8, 'A8'),
(9, 'A9'),
(10, 'A10'),
(11, 'A11'),
(12, 'A12'),
(13, 'A13'),
(14, 'A14'),
(15, 'A15'),
(16, 'A16'),
(17, 'A17'),
(18, 'A18'),
(19, 'A19'),
(20, 'A20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bus` (`bus`),
  ADD KEY `route` (`route`);

--
-- Chỉ mục cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_number` (`id_number`),
  ADD KEY `bus` (`bus`),
  ADD KEY `seat` (`seat`);

--
-- Chỉ mục cho bảng `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `buses_backup_20181208055023`
--
ALTER TABLE `buses_backup_20181208055023`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Chỉ mục cho bảng `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Chỉ mục cho bảng `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Chỉ mục cho bảng `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Chỉ mục cho bảng `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Chỉ mục cho bảng `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `routes_backup_20181208071301`
--
ALTER TABLE `routes_backup_20181208071301`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `seats_backup_20181208055932`
--
ALTER TABLE `seats_backup_20181208055932`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `seats_backup_20181208060155`
--
ALTER TABLE `seats_backup_20181208060155`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `buses_backup_20181208055023`
--
ALTER TABLE `buses_backup_20181208055023`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `routes_backup_20181208071301`
--
ALTER TABLE `routes_backup_20181208071301`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `seats_backup_20181208055932`
--
ALTER TABLE `seats_backup_20181208055932`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `seats_backup_20181208060155`
--
ALTER TABLE `seats_backup_20181208060155`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
