-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 01:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saugat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(50) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `category` varchar(20) NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `productname`, `details`, `features`, `price`, `category`, `images`) VALUES
(1, 'Athlete Stereo Headphone ', 'SK U103388515_NP-1024096943        Model MS771A', 'The headphone can be steadily clasped on the foldable holder and be 360 degree rotated. The small and practical phone holder swivels without taking off phone. It`s small and can be folded which can easy to carry.', 240.75, 'wireless', 'wireless1.jpg'),
(2, 'Nia Q1 Bluetooth Headsets', 'SK U101664656_NP-1022422513 , Compatible Devices :Not Specified, Model :Q1', 'Features: Bluetooth, Micro SD Card Play, FM Radio, Audio Input.', 580.1, 'wireless', 'wireless2.png'),
(3, 'HS-612 Headphone', 'Brand JEDEL SK UOT776EL1A0WX4NAFAMZ-73166', 'Color: Black, Headphone Type: Over Ear , Headphones Brand: Jedel, Compatible With: All ,Connectivity: Wired', 450, 'wired', 'wired1.png'),
(4, 'Sennheiser Headphone', 'Robust 3m detachable cable and 6.3mm jack ,Powered by proprietary Sennheiser 38mm, 50-ohm transducers', 'Soft, replaceable ear pads for enhanced comfort.', 66.85, 'wired', 'wired2.png'),
(5, 'Cyber Acoustics Stereo Headset', '3.5mm with Headphones and Noise Cancelling Microphone.', 'EASY TO USE DURABLE DESIGN QUALITY GUARANTEED.', 299.99, 'wired', 'wired3.png'),
(6, 'Encore Stereo Headphones', '4-foot cord ,3.5mm right-angle plug.', 'Leatherette earpads on these school headphones are comfortable to wear for extended use.', 109.99, 'wired', 'wired4.png'),
(7, 'Linkerpard male to male Cable', '3.5 mm Male to Male 4.9 Feet, 1.5 Meters.', 'Slim Step-down Design, Universal Compatibility.', 7.99, 'accessories', 'accessoriesaudiocord.png'),
(8, 'Aux 3.5mm  Cable', '3.5mm Jack Wire Coiled.', 'Compatible with any cellphone and ipod and iphone, ALL MP3 players with a 3.5 mm input.', 7.5, 'accessories', 'accessoriesaudiocorddjcable.png'),
(9, 'Headset Travel Bag ', 'Color:black  , Dimensions:21*19.6cm  ,\r\nMaterial: nylon & velvet.', 'This carry case is designed to carry general kinds of headphones with headband on the market.  Hardened interior shell with nylon fabric outer can protect your headphone very well.', 7, 'accessories', 'accessoriescarrycase.png'),
(10, 'Khanka Hard Travel Case ', 'Khanka Hard Travel Case Replacement for Skullcandy Hesh 2 Bluetooth Wireless Over-Ear Headphones.', 'Hand Strap For keeping your devices safe and handy,Lightweight. ', 13.99, 'accessories', 'accessoriescase.png'),
(11, 'DianaLHodge Wired T Shirt  ', '100% Cotton. Short Sleeve, Round Neck, Fashion Design Printed.', 'Loose Fit, Casual Look, Easy To Match. Soft And Breathable Fabric, Lightweight, Comfortable To Skin.', 13.99, 'accessories', 'accessorieswiredtshirt.png'),
(12, 'YASUOA Earphone Pouch', 'Package included 3 pieces headphone bags, each size is 21*23cm/9.05*8.27\'.', 'Made with PU leather, Durable Materials, soft headphone travel bag with drawstring closure.', 8.5, 'accessories', 'imagesaccessoriesdrawstringpouch.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
