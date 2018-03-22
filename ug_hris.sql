-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 11:13 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ug_hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `ug_r_departments`
--

CREATE TABLE `ug_r_departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(125) NOT NULL,
  `department_description` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ug_r_departments`
--

INSERT INTO `ug_r_departments` (`department_id`, `department_name`, `department_description`) VALUES
(1, 'Admin', 'Monitoring and keeping the system working'),
(2, 'Security department', 'Maintaining the company safe'),
(3, 'Factory worker', 'Works at the production area');

-- --------------------------------------------------------

--
-- Table structure for table `ug_r_employee`
--

CREATE TABLE `ug_r_employee` (
  `emp_id` int(11) NOT NULL,
  `emp_lastname` varchar(250) NOT NULL,
  `emp_firstname` varchar(250) NOT NULL,
  `emp_middlename` varchar(20) NOT NULL,
  `emp_contact_no` varchar(250) NOT NULL,
  `emp_email` varchar(250) NOT NULL,
  `emp_address` varchar(250) NOT NULL,
  `department_id` int(11) NOT NULL,
  `emp_active_tag` tinyint(1) NOT NULL,
  `emp_archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ug_r_employee`
--

INSERT INTO `ug_r_employee` (`emp_id`, `emp_lastname`, `emp_firstname`, `emp_middlename`, `emp_contact_no`, `emp_email`, `emp_address`, `department_id`, `emp_active_tag`, `emp_archive`) VALUES
(1, 'Johanson', 'Scarlett', 'F', '+639124121422', 'Scar_Johanson@gmail.com', 'Korea', 2, 1, 0),
(2, 'Margot', 'Robbie', 'H', '+639273151241', 'quinn_harley@yahoo.com', 'Cambodia', 3, 0, 1),
(3, 'Pondavilla', 'Jonathan', 'Z', '+639752715068', 'joathan.pondavilla23@gmail.com', 'Calamba City, Laguna', 3, 1, 1),
(4, 'Jarce', 'Christiano', 'B', '+632394948901', 'tanjarce@gmail.com', 'Sto.domingo st. mayapa calamba city', 3, 1, 1),
(7, 'Magandi', 'Carlo', 'S', '+631203980912', 'carlo@yahoo.com', 'Pasay', 4, 0, 1),
(8, 'Ongcal', 'Ahdonis', 'F', '+639197870722', 'ongcal_jomar24@yahoo.com.ph', 'San Cristobal Calamba City', 1, 1, 1),
(9, 'Dummy1', 'Dummy1', 'W', '+632222222222', 'dummy@yahoo.com1', 'Dy1', 2, 0, 0),
(10, 'Dummy1', 'Dummy1', '2', '+632222222222', 'dummy@yahoo.com1', 'Dummy1', 2, 0, 0),
(11, 'Pondavilla', 'Jericho', 'Jericho', '+631234567890', 'jericho.pondavilla@gmail.com', 'Lawa, Calamba City', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ug_r_records`
--

CREATE TABLE `ug_r_records` (
  `rec_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `rec_sender` int(11) NOT NULL,
  `rec_subject` varchar(50) NOT NULL,
  `rec_comment` text NOT NULL,
  `rec_date` date NOT NULL,
  `rec_archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ug_r_records`
--

INSERT INTO `ug_r_records` (`rec_id`, `emp_id`, `rec_sender`, `rec_subject`, `rec_comment`, `rec_date`, `rec_archive`) VALUES
(1, 1, 8, 'Absent', 'Dear Scarlett, \r\nThis woman leave the department without a permission from the admin.\r\n                                      ', '2017-11-21', 1),
(2, 4, 8, 'Promotion', 'Cool Kidney, Sweaty heart      ', '2017-11-22', 1),
(3, 8, 8, 'Sunction', 'You just broke the most expensive machine in the company.\r\n  ', '2017-11-17', 1),
(4, 3, 8, 'Asdfgh', '        jghfhghjkl;\'', '2015-12-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ug_r_users`
--

CREATE TABLE `ug_r_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_active_tag` tinyint(1) NOT NULL,
  `night_mode` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ug_r_users`
--

INSERT INTO `ug_r_users` (`user_id`, `user_name`, `user_password`, `emp_id`, `role_id`, `user_active_tag`, `night_mode`) VALUES
(1, 'admin', '$2y$10$E/h9NCYsOJYK2nvknjK5u.7yxgKwIuLqCzriackZGO0wBrraIG7aS', 8, 1, 1, '0'),
(4, 'jomar', 'jomar', 1, 1, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `ug_r_user_roles`
--

CREATE TABLE `ug_r_user_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ug_r_user_roles`
--

INSERT INTO `ug_r_user_roles` (`role_id`, `role_name`, `role_description`) VALUES
(1, 'Admin', 'Admin'),
(2, 'Board member', 'Board Masters'),
(4, 'Maintinance', 'Maintaining the Facilities');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ug_r_departments`
--
ALTER TABLE `ug_r_departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `ug_r_employee`
--
ALTER TABLE `ug_r_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `ug_r_records`
--
ALTER TABLE `ug_r_records`
  ADD PRIMARY KEY (`rec_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `rec_sender` (`rec_sender`);

--
-- Indexes for table `ug_r_users`
--
ALTER TABLE `ug_r_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `ug_r_user_roles`
--
ALTER TABLE `ug_r_user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ug_r_departments`
--
ALTER TABLE `ug_r_departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ug_r_employee`
--
ALTER TABLE `ug_r_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ug_r_records`
--
ALTER TABLE `ug_r_records`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ug_r_users`
--
ALTER TABLE `ug_r_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ug_r_user_roles`
--
ALTER TABLE `ug_r_user_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ug_r_records`
--
ALTER TABLE `ug_r_records`
  ADD CONSTRAINT `ug_r_records_ibfk_1` FOREIGN KEY (`rec_id`) REFERENCES `ug_r_employee` (`emp_id`);

--
-- Constraints for table `ug_r_users`
--
ALTER TABLE `ug_r_users`
  ADD CONSTRAINT `ug_r_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ug_r_employee` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
