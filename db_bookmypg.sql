-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 04:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bookmypg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(80) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Aayushi Modi', 'aayushi@gmail.com', 'Aayushi@123'),
(2, 'Mitesh Panchal', 'meet@gmail.com', 'Mitesh@123'),
(3, 'Vansh Bhavsar', 'vansh@gmail.com', 'Vansh@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(8) NOT NULL,
  `booking_name` varchar(100) NOT NULL,
  `booking_dates` date NOT NULL,
  `pg_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `booking_details` text NOT NULL,
  `booking_status` text NOT NULL,
  `booking_amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_name`, `booking_dates`, `pg_id`, `user_id`, `booking_details`, `booking_status`, `booking_amount`) VALUES
(1, 'Hema Patel', '2022-01-01', 3, 1, '1 BHK ', 'Half Payment', 12500),
(2, 'Ami Modi', '2023-02-20', 4, 4, '2 BHK', 'Fully Payment', 23000),
(3, 'Mansi Modi', '2023-03-21', 9, 1, 'Single Room for 1 year ,\r\ntake Advance Amenities ', 'Deposited Amount 2000/-', 8000),
(4, 'sada', '2023-04-12', 0, 1, 'sad', 'Pending', 0),
(5, 'dsf', '2023-04-12', 1, 1, 'sdf', 'Pending', 0),
(6, 'sdf', '2023-04-12', 1, 1, 'sdf', 'Pending', 12500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Single Room'),
(2, 'Double Room'),
(3, 'Triple Room'),
(4, 'Adjacent Room'),
(5, 'Studio Room');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(8) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `description`, `date`, `user_id`) VALUES
(1, 'This is the best sites for booking paying guest house.', '2020-01-01', 3),
(2, 'Provide good eminities.', '2021-02-01', 1),
(3, 'Best sites for pg.', '2023-02-01', 3),
(4, 'BOOK MY PG  is the Largest network of PG in Ahmedabad . Providing luxurious paying guest services at a very low price including all facilities. You have to just visit the PG or call us once and your search is end here. According to our guests and some local media houses, It  is the Best PG in Ahmedabad for newbies who come here for study and jobs.\nOur only aim is to provide home-like living facilities to our guests and make their life better.', '2023-03-21', 6),
(5, 'Nice Website', '2023-04-12', 0),
(6, 'ds', '2023-04-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_owner`
--

CREATE TABLE `tbl_owner` (
  `owner_id` int(8) NOT NULL,
  `owner_name` varchar(80) NOT NULL,
  `owner_email` varchar(20) NOT NULL,
  `owner_password` varchar(20) NOT NULL,
  `owner_mobileno` varchar(10) NOT NULL,
  `owner_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_owner`
--

INSERT INTO `tbl_owner` (`owner_id`, `owner_name`, `owner_email`, `owner_password`, `owner_mobileno`, `owner_address`) VALUES
(1, 'Mitesh Panchal', 'meet@gmail.com', 'Mitesh@123', '9839849871', 'Ahemdabad'),
(2, 'Vansh Bhavsar', 'vansh@gmail.com', 'Vansh@123', '9484587534', 'Ahemdabad'),
(3, 'Aayushi Modi', 'aayushi@gmail.com', 'Aayushi@123', '9724344887', 'Ahemdabad'),
(4, 'xyz', 'xyz123@gmail.com', 'Aayushi@123', '3886678788', 'Ahemdabad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(80) NOT NULL,
  `package_details` text NOT NULL,
  `package_price` int(8) NOT NULL,
  `package_imagepath` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`package_id`, `package_name`, `package_details`, `package_price`, `package_imagepath`) VALUES
(1, 'Standard room', '1 BHK ', 20000, 'pg.jpg'),
(2, 'Adjacent Room', 'Single Bedroom', 20500, 'singlebed.jpg'),
(3, 'Single Room', '1 BHK for 1year.', 35000, 'room.webp'),
(4, 'Studio Room', '1 BHK', 20000, 'studio_room.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(8) NOT NULL,
  `amount` int(8) NOT NULL,
  `pg_id` int(8) NOT NULL,
  `status` text NOT NULL,
  `method` varchar(15) NOT NULL,
  `transaction_id` varchar(8) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `amount`, `pg_id`, `status`, `method`, `transaction_id`, `date`) VALUES
(1, 5000, 1, '1 BHK for 6 month (Half Payment)', 'Cash', '101', '2020-02-02'),
(2, 10000, 3, '2 BHK for 1 year (Half payment)', 'UPI ', '102', '2020-02-01'),
(3, 24500, 4, '1 BHK for 6 month.', 'Cash', '104', '2020-04-24'),
(4, 0, 0, 'Confirmed', 'Cash', '', '2023-04-12'),
(5, 0, 1, 'Confirmed', 'Cash', '1', '2023-04-12'),
(6, 12500, 1, 'Confirmed', 'Cash', '1', '2023-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pgmaster`
--

CREATE TABLE `tbl_pgmaster` (
  `pg_id` int(8) NOT NULL,
  `pg_name` varchar(80) NOT NULL,
  `pg_details` text NOT NULL,
  `pg_areaid` int(8) NOT NULL,
  `pg_address` varchar(80) NOT NULL,
  `pg_photos` varchar(100) NOT NULL,
  `pg_amount` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pgmaster`
--

INSERT INTO `tbl_pgmaster` (`pg_id`, `pg_name`, `pg_details`, `pg_areaid`, `pg_address`, `pg_photos`, `pg_amount`, `category_id`, `owner_id`) VALUES
(1, 'Vishal\'s PG', 'A Professionally Managed PG Home in the Satellite, Ahmedabad. Located in a Safe Neighborhood. This PG has Double, Triple, Four, and Other Occupancy types. This PG is Nearby Major Commercial and Educational hubs.', 2, 'Navranpura', 'single_room.jpg', 12500, 1, 1),
(2, 'Kripal Homes', '1 BHK ', 3, 'Vastral,Ahmedabad', 'double_room.jpg', 15000, 2, 3),
(3, 'Rajhans Boys PG', '2 BHK', 4, 'Naranpura, Ahmedabad', 'room.webp', 20000, 2, 1),
(4, 'Paying guest house ', '2BHK', 5, 'Vastrapur,Ahmedabad', 'room5.jpeg', 24500, 2, 2),
(5, 'J C Sharing Tenancy PG', 'Triple sharing room with AC', 1, 'Ambawadi, Ahmedabad', 'triple_bed.jpg', 11000, 3, 3),
(6, 'Shri Nivas Villa ', '1 BHK ', 6, 'Shella,Ahmedabad', 'private_room_1.jpg', 20000, 1, 2),
(7, 'Ridhidev Nivas ', 'Furnished with extra amenities', 8, 'Prahladnagar,Ahmedabad', 'sharing_room_stanzastyle.jpg', 13500, 2, 1),
(8, 'Prem PG house', '1BHK wirth AC(Furnished)', 7, 'Bopal, Ahmedabad', 'single_bed.jpg', 12000, 1, 1),
(9, 'Shri Nivas Villa ', '1 BHK double sharing room', 9, 'Gota, Ahmedabad', 'sharing room 2.jpg', 9500, 2, 3),
(10, 'Shivansh residency', '3BHK Flat', 3, 'Vastral, Ahmedabad', '3BHK.jpg', 24000, 4, 2),
(11, 'Ridhi Apartment ', '2BHK with Furnished', 6, 'Shella, Ahmedabad', '2BHK.jpg', 10500, 2, 3),
(12, 'Simarn PG House', 'Double Sharing', 5, 'Vastrapur,Ahmedabad', 'double_sharing.jpg', 15200, 2, 1),
(13, 'Pal Pg', 'single furnished ', 6, 'Shella, Ahmedabad', 'Four_Sharing_Unfurnished.jpeg', 15500, 1, 1),
(14, 'Shri Nivas Villa ', 'Single  Room with Furnished', 4, 'Navranpura', 'single (2).jpg', 20000, 1, 3),
(15, 'Staywell Paying Guest House ', 'Single Room with Furnished and AC', 1, 'Ambawadi, Ahmedabad', 'single (3).jpg', 13000, 1, 2),
(16, 'Paying Guest in Ahemdabad', 'Tripal Sharing with AC and Furnished', 7, 'Bopal, Ahmedabad', 'Tripal_Sharing_with FurnishedRoom.jpg', 12000, 2, 2),
(17, 'Kripal Homes', 'Single Room with AC', 8, 'Prahladnagar,Ahmedabad', 'single (5).jpg', 9500, 1, 3),
(18, 'Surya PG ', 'Double Sharing with Furnished ', 9, 'Gota, Ahmedabad', 'double_sharing.jpg', 12500, 2, 2),
(19, 'Dream House PG', 'Tripal Sharing with Furnished ', 13, 'Vasna,Ahmedabad', 'triple_room_with_furnished.jpg', 14000, 3, 2),
(20, 'Maple Door PG', 'Double Sharing with AC ', 12, 'Paldi,Ahmedabad', 'Double_Sharing (4).jpg', 11000, 2, 1),
(21, 'Laxmi Palace PG', 'Double Sharing with basic amenities', 10, 'Thaltej,Ahmedabad', 'Double_Sharing (3).jpg', 7500, 2, 2),
(22, 'Alisha  Paying Guest ', 'Sharing Room with basic amenities', 9, 'Gota, Ahmedabad', 'double_sharing (5).jpg', 6000, 2, 3),
(23, 'Stanza Living PG House ', 'Sharing room with good amenities (Furnished, AC etc...)', 11, 'C.G.Road, Ahmedabad', 'sharing_room_stanzastyle.jpg', 18000, 4, 3),
(24, 'APRO PG House', 'Double Sharing with Basic amenities', 10, 'Thaltej,Ahmedabad', 'Double_Sharing_with_basic_amenities.jpg', 12000, 2, 2),
(25, 'Purv Apartment ', 'A Professionally Managed PG Home in the Satellite, Ahmedabad. Located in a Safe Neighborhood. This PG has Double, Triple, Four, and Other Occupancy types. This PG is Nearby Major Commercial and Educational hubs.', 10, 'Thaltej,Ahmedabad', 'vishal1.jpeg', 14000, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pgphotos`
--

CREATE TABLE `tbl_pgphotos` (
  `photo_id` int(8) NOT NULL,
  `photo_path` varchar(250) NOT NULL,
  `pg_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pgphotos`
--

INSERT INTO `tbl_pgphotos` (`photo_id`, `photo_path`, `pg_id`) VALUES
(1, '2BHK.jpg', 1),
(2, '3BHK.jpg', 1),
(3, 'double_room.jpg', 1),
(4, 'single (3).jpg', 2),
(5, 'stanza_living_tripleroom.jpg', 23),
(6, 'singleroom', 18),
(7, 'stanza_living_singleroom.jpg', 23),
(8, 'stanza_living_doubleroom.jpg', 23),
(9, 'double_sharing (5).jpg', 17),
(10, 'tripleroom.jpg', 5),
(11, 'triple_room_with_furnished.jpg', 10),
(12, 'living_room_5member_apartment.jpg', 11),
(13, 'garden_apartment.jpg', 11),
(15, 'exterior_part_apartment.jpg', 9),
(16, '14_2.jpg', 20),
(17, '2.jpg', 12),
(18, '2_1.jpg', 12),
(19, '2_2.jpg', 5),
(20, '3.jpg', 5),
(21, '3_1.jpg', 10),
(22, '1.jpg', 15),
(23, '1_1.jpg', 15),
(24, '1_3.jpg', 15),
(25, '1_4.jpg', 16),
(26, '1_5', 21),
(27, '3_2.jpg.crdownload', 21),
(28, 'l1.jpg', 21),
(29, 'l2.jpg', 22),
(30, '3_3.jpg', 18),
(31, '3_4.webp', 13),
(32, 's1.jpg', 19),
(33, 'triple_bed.jpg', 22),
(34, 's2.jpg', 22),
(35, 'GR2-348005-1650509_400_540.jpeg', 24),
(36, 's3.jpg', 24),
(37, 's4.jpg', 24),
(38, 'l1.jpg', 19),
(39, 'l3.jpg', 19),
(40, '14_1.jpg', 20),
(41, 'f4.jpg', 3),
(42, 'l5.jpg', 3),
(43, 'l6.jpg', 3),
(44, 's3.jpg', 2),
(45, 's5.jpg', 2),
(46, '11_1.jpg', 4),
(47, '11_2.jpg', 4),
(48, '11_3.jpg', 4),
(49, '12_1.jpg', 6),
(50, '12_2.jpg', 6),
(51, '12_3.jpg', 6),
(52, '13_1.jpeg', 7),
(53, '13_2.jpeg', 7),
(54, '13_3.jpeg', 7),
(57, '15_2.jpeg', 8),
(58, '15_1.jpeg', 8),
(60, '16_1.jpeg', 10),
(61, '16_2.jpeg', 12),
(62, '16_3.jpeg', 13),
(63, '15_3.jpeg', 9),
(64, '17_1.jpg', 8),
(65, '17_2.jpg', 9),
(66, '17_3.jpg', 11),
(67, '18_1.jpg', 17),
(68, '18_2.jpg', 13),
(69, '18_2.jpg', 18),
(70, '18_3.jpg', 17),
(71, '19_1.jpg', 20),
(72, '20_1.jpg', 14),
(73, '20_2.jpg', 14),
(74, '20_3.png', 14),
(75, '22_1.jpg', 16),
(76, '22_2.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(8) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_mobileno` varchar(20) NOT NULL,
  `user_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_gender`, `user_email`, `user_password`, `user_mobileno`, `user_address`) VALUES
(1, 'Ami Solanki', 'Female', 'ami@gmail.com', '123', '', ''),
(2, 'Jay Maheta', 'Male', 'jay@gmail.com', 'Jay@123', '', ''),
(3, 'Aesha Modi', 'Female', 'aesha@gmail.com', 'aesha@123', '', ''),
(4, 'Shreya Patel', 'Female', 'shreya@gmail.com', 'shreya@098', '', ''),
(5, 'Mansi Modi', 'Female', 'mansi@gmail.com', 'Mansi@098', '', ''),
(6, 'Aayushi Modi', 'Female', 'aayushimodi0703@gmai', 'Aayushi@123', '', ''),
(7, 'Meet Panchal', 'Male', 'meet@gmail.com', 'mitesh@123', '', ''),
(8, 'asd', 'Male', 'jinal@gmail.com', '2323', '4234324', 'sdfsdfds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`),
  ADD UNIQUE KEY `admin_email_2` (`admin_email`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_pgmaster`
--
ALTER TABLE `tbl_pgmaster`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `tbl_pgphotos`
--
ALTER TABLE `tbl_pgphotos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `student_id` (`user_id`),
  ADD UNIQUE KEY `student_id_2` (`user_id`),
  ADD UNIQUE KEY `student_id_3` (`user_id`),
  ADD UNIQUE KEY `student_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  MODIFY `owner_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pgmaster`
--
ALTER TABLE `tbl_pgmaster`
  MODIFY `pg_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_pgphotos`
--
ALTER TABLE `tbl_pgphotos`
  MODIFY `photo_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
