-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2022 at 03:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenify_database`
--
CREATE DATABASE IF NOT EXISTS `greenify_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `greenify_database`;

-- --------------------------------------------------------

--
-- Table structure for table `consoles`
--

CREATE TABLE `consoles` (
  `serial` int(5) NOT NULL,
  `image_path` varchar(600) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(445) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consoles`
--

INSERT INTO `consoles` (`serial`, `image_path`, `brand`, `title`, `price`, `description`) VALUES
(1, 'images/products/consoles/nintendo-switch1.jpg', 'Nintendo', 'Nintendo Switch Console + 6 Games', '1650.20', 'Nintendo Switch is designed to fit your life, transforming from home console to portable system in a snap. The included Joy‑Con controllers give you total gameplay flexibility. Flip the stand to share the screen, then share the fun with a multiplayer game. HD Rumble puts you in the game with physical feedback, while the IR Motion Camera opens up new experiences.'),
(2, 'images/products/consoles/ps4-hd.jpg', 'Sony', 'Sony PlayStation 4 1TB Console', '960.99', 'Join Samurai warriors, hardened survivors and mighty gods in some of the most acclaimed titles ever made, including games created by PlayStation Studios that you cant play anywhere else. The PS4 console, delivering awesome gaming power, incredible entertainment and vibrant HDR technology. Store your games, apps, screenshots and videos with up to 1TB storage inside the PS4 console.'),
(3, 'images/products/consoles/ps5-vrr-notext.jpg', 'Sony', 'PS5 2TB Console With 2 Controllers', '1205.00', 'Join Samurai warriors, hardened survivors and mighty gods in some of the most acclaimed titles ever made, including games created by PlayStation Studios that you cant play anywhere else. The PS5 console, delivering awesome gaming power, incredible entertainment and vibrant HDR technology. Store your games, apps, screenshots and videos with up to 2TB storage inside the PS5 console.'),
(4, 'images/products/consoles/s-l500.jpg', 'Microsoft', 'Xbox Series X 1TB SSD Console', '2356.00', 'Only NEW and SEALED complete bundles will be eligible for returns. Introducing the all new Xbox Series X Introducing Xbox Series X, the fastest, most powerful Xbox ever. Play thousands of titles from four generations of consoles—all games look and play best on Xbox Series X. At the heart of Series X is the Xbox Velocity Architecture.'),
(5, 'images/products/consoles/s-l1600.jpg', 'Nintendo', 'Nintendo Switch OLED Model Pokémon Scarlet ', '1428.00', 'Nintendo Switch is designed to fit your life, transforming from home console to portable system in a snap. The included Joy‑Con controllers give you total gameplay flexibility. Flip the stand to share the screen, then share the fun with a multiplayer game. HD Rumble puts you in the game with physical feedback, while the IR Motion Camera opens up new experiences.'),
(6, 'images/products/consoles/s-l500-1.jpg', 'Sony', 'Gotham Knights (Sony PlayStation 5, 2022)', '230.00', 'Join Samurai warriors, hardened survivors and mighty gods in some of the most acclaimed titles ever made, including games created by PlayStation Studios that you cant play anywhere else. The PS5 console, delivering awesome gaming power, incredible entertainment and vibrant HDR technology. Store your games, apps, screenshots and videos with up to 2TB storage inside the PS5 console.'),
(7, 'images/products/consoles/s-l1600-1.jpg', 'Sony', 'God of War: Ragnarok COLLECTORS OR JOTNAR', '590.00', 'Google Tensor, our custom-built chip, keeps your phone fast, your games rich, and your personal info safe. Capture more light and detail in every shot. Experience Pixel in a whole new way with an all-day adaptive battery. Backed by the Titan M2 security chip, 5 years of updates, and the Security hub, your protection is built into Pixel. Google Tensor’s custom image processor lets the Pixel Camera capture fun times.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`Name`, `Email`, `Phone`, `Message`) VALUES
('Amaan Khan', 'akhan4603@gmail.com', 1154276796, 'hi'),
('Amaan Khan', 'akhan4603@gmail.com', 1154276796, 'hi'),
('Amaan Khan', 'akhan4603@gmail.com', 1154276796, ''),
('amman', 'amaan.a4603@gmail.com', 1154276796, 'hi'),
('amman', 'amaan.a4603@gmail.com', 1154276796, 'hi'),
('amaman', 'amaan.a4603@gmail.com', 1154276796, 'hellooooooooooo'),
('Faraj Shaikh', 'farajshaikhalt@gmail.com', 1154199749, 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `gadgets`
--

CREATE TABLE `gadgets` (
  `serial` int(5) NOT NULL,
  `image_path` varchar(600) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(445) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gadgets`
--

INSERT INTO `gadgets` (`serial`, `image_path`, `brand`, `title`, `price`, `description`) VALUES
(1, 'images/products/gadgets/azeada-headphones.jpeg', 'Azeada', 'Azeada Tws Wireless Bt5.0', '178.00', '5.4-inch Super Retina XDR display. Ceramic Shield, tougher than any smartphone glass. A14 Bionic chip, the fastest chip ever in a smartphone. Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion, Smart HDR 3, 4K Dolby Vision HDR recording. 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording.'),
(2, 'images/products/gadgets/s-l1600.png', 'Turtle', 'Turtle Beach Elite Atlas Pro PC Headset', '478.00', '5.4-inch Super Retina XDR display. Ceramic Shield, tougher than any smartphone glass. A14 Bionic chip, the fastest chip ever in a smartphone. Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion, Smart HDR 3, 4K Dolby Vision HDR recording. 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording.'),
(3, 'images/products/gadgets/s-l1600435.jpg', 'Steel', 'SteelSeries Arctis 9 Wireless Gaming Headset', '199.00', 'Zoom in to explore the mystery of the celestial at night, watch an eagle hovering over trees or examine the delicate details of crystal. The HUAWEI P30 Pro is accentuating a new peak of smartphone photography. The new periscope telephoto lens allows more optical zooming capabilities to be tucked in a compact body without losing image quality. Experience more everyday with the full support of a long-lasting 4,200mAh battery.'),
(4, 'images/products/gadgets/ssty67.jpg', 'HyperX', 'HyperX CloudX Stinger Core Wireless Gaming Headset', '219.00', 'Co-developed with Hasselblad, the exclusive Hasselblad Camera for Mobile delivers multiple breakthroughs including Natural Color Calibration. Every moment comes to life in ultra-smooth and hyper-realistic 8K. Shoot and edit your cinematic masterpieces on the go with powerful effects. Our most advanced display achieves optical clarity and speed evolved to the next level. The next-generation QHD+ 120 Hz screen refresh rate elevates experience.'),
(5, 'images/products/gadgets/f901600.jpg', 'Nintendo', 'Nintendo Wii Golf Club Baseball Bat', '149.00', 'Co-developed with Hasselblad, the exclusive Hasselblad Camera for Mobile delivers multiple breakthroughs including Natural Color Calibration. Every moment comes to life in ultra-smooth and hyper-realistic 8K. Shoot and edit your cinematic masterpieces on the go with powerful effects. Our most advanced display achieves optical clarity and speed evolved to the next level. The next-generation QHD+ 120 Hz screen refresh rate elevates experience.');

-- --------------------------------------------------------

--
-- Table structure for table `home_appliances`
--

CREATE TABLE `home_appliances` (
  `serial` int(5) NOT NULL,
  `image_path` varchar(600) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(445) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_appliances`
--

INSERT INTO `home_appliances` (`serial`, `image_path`, `brand`, `title`, `price`, `description`) VALUES
(1, 'images/products/home_appliances/ew897d9sf.jpg', 'Dorn', 'Mini Fridge Small Refrigerator Compact', '1085.00', '5.4-inch Super Retina XDR display. Ceramic Shield, tougher than any smartphone glass. A14 Bionic chip, the fastest chip ever in a smartphone. Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion, Smart HDR 3, 4K Dolby Vision HDR recording. 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording.'),
(2, 'images/products/home_appliances/sd89f.jpg', 'Xin', '6L9L Car Refrigerator Freezer Heat and Cold', '199.00', '5.4-inch Super Retina XDR display. Ceramic Shield, tougher than any smartphone glass. A14 Bionic chip, the fastest chip ever in a smartphone. Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion, Smart HDR 3, 4K Dolby Vision HDR recording. 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording.'),
(3, 'images/products/home_appliances/sdfs-94.jpg', 'RV Electronics', '17lbs Portable Mini Twin Washing Machine', '1659.00', 'Zoom in to explore the mystery of the celestial at night, watch an eagle hovering over trees or examine the delicate details of crystal. The HUAWEI P30 Pro is accentuating a new peak of smartphone photography. The new periscope telephoto lens allows more optical zooming capabilities to be tucked in a compact body without losing image quality. Experience more everyday with the full support of a long-lasting 4,200mAh battery.'),
(4, 'images/products/home_appliances/uiwqe87.jpg', 'Basket', 'Basket Air Fryer Silicone Pot', '24.95', 'Co-developed with Hasselblad, the exclusive Hasselblad Camera for Mobile delivers multiple breakthroughs including Natural Color Calibration. Every moment comes to life in ultra-smooth and hyper-realistic 8K. Shoot and edit your cinematic masterpieces on the go with powerful effects. Our most advanced display achieves optical clarity and speed evolved to the next level. The next-generation QHD+ 120 Hz screen refresh rate elevates experience.'),
(5, 'images/products/home_appliances/qp898.png', 'Generic', 'Air Fryer with 100 Recipes Cookbook', '447.25', 'Co-developed with Hasselblad, the exclusive Hasselblad Camera for Mobile delivers multiple breakthroughs including Natural Color Calibration. Every moment comes to life in ultra-smooth and hyper-realistic 8K. Shoot and edit your cinematic masterpieces on the go with powerful effects. Our most advanced display achieves optical clarity and speed evolved to the next level. The next-generation QHD+ 120 Hz screen refresh rate elevates experience.'),
(6, 'images/products/home_appliances/dsfs7.jpg', 'Generic', 'Sausage Machine Kitchen Sausage Maker', '57.99', 'The 90Hz display has a 50% higher refresh rate when compared to a conventional 60Hz display, resulting in a seamless and smooth visual experience. The realme 6 Pro comes with the built-in SOLOOP app. This magical app allows you to instantly generate a lively, interesting, and professional short video simply by selecting a recorded video clip. The charging algorithm developed for the realme 6 Pro includes five layers of security protection.');

-- --------------------------------------------------------

--
-- Table structure for table `smart_phones`
--

CREATE TABLE `smart_phones` (
  `serial` int(5) NOT NULL,
  `image_path` varchar(600) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(445) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smart_phones`
--

INSERT INTO `smart_phones` (`serial`, `image_path`, `brand`, `title`, `price`, `description`) VALUES
(1, 'images/products/smart-phones/iPhone12-blue.jpeg', 'Apple', 'iPhone 12 128GB - Blue', '1985.00', '5.4-inch Super Retina XDR display. Ceramic Shield, tougher than any smartphone glass. A14 Bionic chip, the fastest chip ever in a smartphone. Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion, Smart HDR 3, 4K Dolby Vision HDR recording. 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording.'),
(2, 'images/products/smart-phones/iphone11-green.jpg', 'Apple', 'iPhone 11 256GB - Green', '1599.00', '5.4-inch Super Retina XDR display. Ceramic Shield, tougher than any smartphone glass. A14 Bionic chip, the fastest chip ever in a smartphone. Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion, Smart HDR 3, 4K Dolby Vision HDR recording. 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording.'),
(3, 'images/products/smart-phones/huawei-p30pro.jpg', 'Huawei', 'Huawei Sale P30 Pro 8Gb + 128Gb', '1099.00', 'Zoom in to explore the mystery of the celestial at night, watch an eagle hovering over trees or examine the delicate details of crystal. The HUAWEI P30 Pro is accentuating a new peak of smartphone photography. The new periscope telephoto lens allows more optical zooming capabilities to be tucked in a compact body without losing image quality. Experience more everyday with the full support of a long-lasting 4,200mAh battery.'),
(4, 'images/products/smart-phones/oneplus-9pro.jpg', 'OnePlus', 'OnePlus 9 Pro 8GB RAM + 256GB ROM', '2199.00', 'Co-developed with Hasselblad, the exclusive Hasselblad Camera for Mobile delivers multiple breakthroughs including Natural Color Calibration. Every moment comes to life in ultra-smooth and hyper-realistic 8K. Shoot and edit your cinematic masterpieces on the go with powerful effects. Our most advanced display achieves optical clarity and speed evolved to the next level. The next-generation QHD+ 120 Hz screen refresh rate elevates experience.'),
(5, 'images/products/smart-phones/oneplus10-pro.jpg', 'OnePlus', 'OnePlus 10 Pro [12+256GB]', '2699.00', 'Co-developed with Hasselblad, the exclusive Hasselblad Camera for Mobile delivers multiple breakthroughs including Natural Color Calibration. Every moment comes to life in ultra-smooth and hyper-realistic 8K. Shoot and edit your cinematic masterpieces on the go with powerful effects. Our most advanced display achieves optical clarity and speed evolved to the next level. The next-generation QHD+ 120 Hz screen refresh rate elevates experience.'),
(6, 'images/products/smart-phones/realme-6pro.jpg', 'Realme', 'Realme 6 Pro 6.5” 128GB', '650.00', 'The 90Hz display has a 50% higher refresh rate when compared to a conventional 60Hz display, resulting in a seamless and smooth visual experience. The realme 6 Pro comes with the built-in SOLOOP app. This magical app allows you to instantly generate a lively, interesting, and professional short video simply by selecting a recorded video clip. The charging algorithm developed for the realme 6 Pro includes five layers of security protection.'),
(7, 'images/products/smart-phones/pixel6.jpg', 'Google', 'Pixel 6 128gb - Sorta Seafoam', '1950.00', 'Google Tensor, our custom-built chip, keeps your phone fast, your games rich, and your personal info safe. Capture more light and detail in every shot. Experience Pixel in a whole new way with an all-day adaptive battery. Backed by the Titan M2 security chip, 5 years of updates, and the Security hub, your protection is built into Pixel. Google Tensor’s custom image processor lets the Pixel Camera capture fun times.'),
(8, 'images/products/smart-phones/samsung-s21plus.jpg', 'Samsung', 'Samsung Galaxy S21 Plus 5G 8/256Gb', '1799.00', 'Never miss that perfect shot again. Meet Galaxy S21 5G and S21+ 5G. Designed to revolutionize video and photography, with beyond cinematic 8K resolution so you can snap epic photos right out of video. It has it all in two sizes: 64MP, our fastest chipset and a massive all-day battery. Total eye candy - Brilliant and protective from the inside out.'),
(9, 'images/products/smart-phones/samsung-zflip4.jpg', 'Samsung', 'Samsung Galaxy Z Flip 4 8+256GB', '2999.00', 'Never miss that perfect shot again. Meet Galaxy Z Flip4. Designed to revolutionize video and photography, with beyond cinematic 8K resolution so you can snap epic photos right out of video. It has it all in two sizes: 64MP, our fastest chipset and a massive all-day battery. Total eye candy - Brilliant and protective from the inside out.'),
(10, 'images/products/smart-phones/iphone13promax.jpg', 'Apple', 'iPhone 13 Pro Max 256Gb - Sierra Blue', '4000.00', '5.4-inch Super Retina XDR display. Ceramic Shield, tougher than any smartphone glass. A14 Bionic chip, the fastest chip ever in a smartphone. Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion, Smart HDR 3, 4K Dolby Vision HDR recording. 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_role_id` int(11) DEFAULT 2,
  `name` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_role_id`, `name`, `email`, `phone`, `password`) VALUES
(1, 1, 'Greenify Admin', 'admin@greenify.com', 0, '21232f297a57a5a743894a0e4a801fc3'),
(2, 2, 'Amaan Ahmed', 'akhan4603@gmail.com', 1154276784, 'c8b43d7d6d99697f96500940a99ab549'),
(3, 2, 'Faraj Shaikh', 'farajshaikh1@gmail.com', 1154199648, '549381dc9d8121919771354d0a3453b1'),
(4, 2, 'Danish Faid', 'danishfk@gmail.com', 193215050, '44e4ee5bef76d68a0a41b97bc848ff71'),
(5, 2, 'Sharifah Hannah', 'hannahsh123@gmail.com', 111353487, 'd8704242529ed8335002faca459b0062'),
(6, 2, 'Chiew Kar', 'chiewkar12@gmail.com', 102359684, 'babdd9f2d6321f42d08313f3ec0c30d7'),
(7, 2, 'Raman SK', 'ramansk45@gmail.com', 1139494856, '87b32c11e59b4d4c603f393600e43463'),
(8, 2, 'Simran Mehta', 'simmi99@yahoo.com', 115674991, '9f71261b1a5f76921005a93c7086beed'),
(9, 2, 'Joshua Jazz', 'jzjsh4675@gmail.com', 126879458, '480ae353d68e51c4d602d3b4333002f3'),
(10, 2, 'Dominic Angel', 'dominic@yahoo.com', 126584965, '480ae353d68e51c4d602d3b4333002f3'),
(11, 2, 'Jun Sheng', 'jssheng@gmail.com', 176841548, '8cdc75ada814247539a3d34a1fbf6682'),
(12, 2, 'Emily Michael', 'emmimc@gmail.com', 178563848, 'aa75c2b36d96f4c79fa13b5da94330d9'),
(13, 2, 'Justin Phang', 'justin@gmail.com', 198841584, 'ad5ff1433da4b20d270273b78eb64de2'),
(14, 2, 'Sofia Binti', 'sofiaaa@gmail.com', 124587931, 'a29dfc89415407f754b6e0ecd1b2c225'),
(15, 2, 'Motilal Nehru', 'motilal@gmail.com', 1126357854, 'b86bb5e00e002e595af7bf9e55d2993d'),
(16, 2, 'Shaheen Abubakar', 'shaheen@gmail.com', 1169346789, '0be754a9c5ce973712133b987087c3f4'),
(17, 2, 'Kareem Jabbar', 'kj4563@gmail.com', 189653456, '8dd8e139848751926c8dc1a99fac8e72'),
(18, 2, 'Kambar Mirmanov', 'kmbmir@gmail.com', 178976352, 'ef866f4dca76fe6e8488efafc5c48d94'),
(19, 2, 'Egor Voronianski', 'egorr@gmail.com', 136548756, '83abc946f498d34d9c4da827a4da2a43'),
(20, 2, 'Rayan Khalid', 'rayankh@yahoo.com', 186439865, '922ca1ba7030dbd31023e5a4db9e09a7'),
(21, 2, 'Felicia Jones', 'feliciaaa@gmail.com', 145683215, '47d0795006e5019dfb98968be3f9d771'),
(22, 2, 'Aranav Mehta', 'aranav56@gmail.com', 143375962, 'c65f88cad6d785036cac7ac4b613479b'),
(23, 2, 'Mani Mujeeb', 'manimujeeb12@gmail.com', 176589632, 'dc0642932dc7bb255afeecb6faab42cc'),
(24, 2, 'Hannah Najdi', 'najdihannah12@gmail.com', 1111549632, 'd8704242529ed8335002faca459b0062'),
(25, 2, 'Faizan Ahmed', 'fazzy123@gmail.com', 179624685, '8fa99d8062a4c44f0d46af06c4e41f60'),
(26, 2, 'Ridwan Shaikh', 'ridwann@gmail.com', 178526935, '43534dd7f74ec71111e5feff6825d92d'),
(27, 2, 'Shahrukh Khan', 'shahrukh@gmail.com', 116548529, '8f8439c28a6ae39ca17dbb3817232294'),
(28, 2, 'Abigail James', 'abigail675@gmail.com', 1137489635, 'a34ceaf2bc140eefd87ce9c408fac0a3'),
(29, 2, 'Marcus Tan', 'marcus@gmail.com', 1123789652, '335cd9d484bbbd7b839c9fe87553274c'),
(30, 2, 'Hassif mubarak', 'hassif@gmail.com', 196327859, '15286dae3ed98c501466e5d590480e47'),
(31, 2, 'Tan Wei', 'tanwei876@gmail.com', 132329654, '3fe2664780b3be7541657496ad523fc4'),
(32, 2, 'Vladmir Putin', 'motherrussia@gmail.com', 1154199432, 'cbd357125a99321c2a08e0206a97622f');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `user_role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id`, `user_role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consoles`
--
ALTER TABLE `consoles`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `gadgets`
--
ALTER TABLE `gadgets`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `home_appliances`
--
ALTER TABLE `home_appliances`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `smart_phones`
--
ALTER TABLE `smart_phones`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consoles`
--
ALTER TABLE `consoles`
  MODIFY `serial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gadgets`
--
ALTER TABLE `gadgets`
  MODIFY `serial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_appliances`
--
ALTER TABLE `home_appliances`
  MODIFY `serial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `smart_phones`
--
ALTER TABLE `smart_phones`
  MODIFY `serial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
