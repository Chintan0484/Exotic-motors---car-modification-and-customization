-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 08:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `car_make` varchar(255) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `year_of_manufacture` varchar(4) NOT NULL,
  `license_plate_number` varchar(20) NOT NULL,
  `desired_car_color` varchar(255) NOT NULL,
  `skin_wrap_options` varchar(255) NOT NULL,
  `additional_modifications` text NOT NULL,
  `current_car_photo` varchar(255) NOT NULL,
  `desired_look_photo` varchar(255) NOT NULL,
  `preferred_service_date` date NOT NULL,
  `preferred_service_time` time NOT NULL,
  `additional_notes` text NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(2, 'abc@gmail.com'),
(3, 'adesharabrijesh8@gmail.com'),
(4, 'brijeshadeshara21@gnu.ac.in'),
(5, 'mnp.09.06.03@gmail.com'),
(1, 'Thisisshit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'All-Terrain Pro', 'Ideal for off-road adventures with superior grip and durability.', '350.00', 'images/Tires/1.png'),
(2, 'RoadMaster Elite', 'Perfect for long highway journeys with enhanced comfort and low noise.', '400.00', 'images/Tires/2.png'),
(3, 'Urban Cruiser', 'Designed for city driving with excellent handling and fuel efficiency.', '380.00', 'images/Tires/3.png'),
(4, 'TrailBlazer', 'Robust tires for rugged terrains, offering stability and control.', '360.00', 'images/Tires/4.png'),
(5, 'SpeedRacer', 'High-performance tires for sports cars, ensuring speed and agility.', '420.00', 'images/Tires/5.png'),
(6, 'Mountain Climber', 'Ideal for mountainous regions, providing traction and resilience.', '370.00', 'images/Tires/6.png'),
(7, 'City Explorer', 'Best suited for urban environments with smooth rides and long life.', '390.00', 'images/Tires/7.png'),
(8, 'Desert Runner', 'Specialized for desert conditions, offering stability and endurance.', '410.00', 'images/Tires/8.png'),
(9, 'Winter Warrior', 'Engineered for snowy and icy roads, providing safety and reliability.', '430.00', 'images/Tires/9.png'),
(10, 'SuperFast Charger', 'High-speed charger for rapid battery replenishment.', '500.00', 'images/chargings/1.png'),
(11, 'EcoCharge Plus', 'Environmentally friendly charger with energy-saving features.', '450.00', 'images/chargings/2.png'),
(12, 'UltraPower Charger', 'Provides maximum power output for fast charging.', '520.00', 'images/chargings/3.png'),
(13, 'TravelBuddy Charger', 'Compact and portable charger, ideal for travel.', '430.00', 'images/chargings/4.png'),
(14, 'HomeBase Charger', 'Reliable home charger with smart charging capabilities.', '470.00', 'images/chargings/5.png'),
(15, 'ProCharge Station', 'Professional-grade charger for high-performance needs.', '550.00', 'images/chargings/6.png'),
(16, 'QuickBoost Charger', 'Ensures quick charging with safety features.', '480.00', 'images/chargings/7.png'),
(17, 'DualPort Charger', 'Charges two devices simultaneously with efficiency.', '490.00', 'images/chargings/8.png'),
(18, 'SolarCharge', 'Solar-powered charger for sustainable energy use.', '530.00', 'images/chargings/9.png'),
(19, 'High Performance Disc Brake', 'High-performance disc brake for smooth braking.', '5200.00', 'images/Discbrake/1.png'),
(20, 'Premium Disc Brake', 'Premium disc brake with durable construction.', '4800.00', 'images/Discbrake/2.png'),
(21, 'All-Weather Disc Brake', 'Reliable disc brake designed for all-weather conditions.', '4900.00', 'images/Discbrake/3.png'),
(22, 'Efficient Disc Brake', 'Efficient disc brake for enhanced stopping power.', '4500.00', 'images/Discbrake/4.png'),
(23, 'Advanced Disc Brake', 'Advanced disc brake for superior performance.', '5100.00', 'images/Discbrake/5.png'),
(24, 'Heavy-Duty Disc Brake', 'Heavy-duty disc brake for rugged terrain.', '5300.00', 'images/Discbrake/6.png'),
(25, 'Precision Disc Brake', 'Precision disc brake for optimal control.', '4700.00', 'images/Discbrake/7.png'),
(26, 'Innovative Disc Brake', 'Innovative disc brake for smooth braking experience.', '5000.00', 'images/Discbrake/8.png'),
(27, 'Versatile Disc Brake', 'Versatile disc brake suitable for various riding styles.', '4800.00', 'images/Discbrake/9.png'),
(28, 'Premium Exhaust System', 'High-quality exhaust system for premium performance.', '6000.00', 'images/Exhaust/1.png'),
(29, 'Sport Performance Exhaust', 'Enhanced exhaust system for sports cars.', '5500.00', 'images/Exhaust/2.png'),
(30, 'Silent Performance Exhaust', 'Performance exhaust system with reduced noise.', '5800.00', 'images/Exhaust/3.png'),
(31, 'High-Performance Exhaust', 'Top-notch exhaust system for maximum performance.', '6200.00', 'images/Exhaust/4.png'),
(32, 'Carbon Fiber Exhaust', 'Exhaust system crafted from lightweight carbon fiber.', '7000.00', 'images/Exhaust/5.png'),
(33, 'Stainless Steel Exhaust', 'Durable stainless steel exhaust system for longevity.', '5400.00', 'images/Exhaust/6.png'),
(34, 'Performance Cat-Back Exhaust', 'Cat-back exhaust system for enhanced performance.', '5800.00', 'images/Exhaust/7.png'),
(35, 'Dual Exhaust System', 'Exhaust system with dual pipes for increased performance.', '6300.00', 'images/Exhaust/8.png'),
(36, 'Turbo-Back Exhaust', 'Exhaust system designed for turbocharged engines.', '6500.00', 'images/Exhaust/9.png'),
(37, 'LED Headlights', 'High-intensity LED headlights for improved visibility.', '5500.00', 'images/Headlights/1.png'),
(38, 'Xenon Headlights', 'Bright xenon headlights for enhanced illumination.', '5800.00', 'images/Headlights/2.png'),
(39, 'Halogen Headlights', 'Traditional halogen headlights for reliable performance.', '5000.00', 'images/Headlights/3.png'),
(40, 'Projector Headlights', 'Headlights with projector lenses for focused light beams.', '6000.00', 'images/Headlights/4.png'),
(41, 'HID Headlights', 'High-intensity discharge headlights for superior brightness.', '6200.00', 'images/Headlights/5.png'),
(42, 'Adaptive Headlights', 'Headlights with adaptive technology for dynamic lighting.', '6500.00', 'images/Headlights/6.png'),
(43, 'Sequential Headlights', 'Headlights with sequential turn signals for modern styling.', '5800.00', 'images/Headlights/7.png'),
(44, 'Cornering Headlights', 'Headlights with cornering functionality for improved safety.', '6200.00', 'images/Headlights/8.png'),
(45, 'Laser Headlights', 'Cutting-edge laser headlights for maximum brightness and range.', '7000.00', 'images/Headlights/9.png'),
(46, 'Leather Seats', 'Premium leather seats for luxury and comfort.', '3200.00', 'images/Interior/1.png'),
(47, 'Dashboard Cover', 'Protective cover for your dashboard.', '1500.00', 'images/Interior/2.png'),
(48, 'Floor Mats', 'Durable floor mats to keep your car clean.', '800.00', 'images/Interior/3.png'),
(49, 'Steering Wheel Cover', 'Comfortable and stylish steering wheel cover.', '500.00', 'images/Interior/4.png'),
(50, 'Seat Covers', 'High-quality seat covers for protection and style.', '1200.00', 'images/Interior/5.png'),
(51, 'Gear Knob', 'Ergonomic gear knob for smooth shifting.', '350.00', 'images/Interior/6.png'),
(52, 'Sun Visor', 'Sun visor to protect from glare.', '200.00', 'images/Interior/7.png'),
(53, 'Arm Rest', 'Comfortable arm rest for added support.', '900.00', 'images/Interior/8.png'),
(54, 'Head Rest', 'Adjustable head rest for comfort.', '700.00', 'images/Interior/9.png'),
(55, 'Leather Seatcover', 'High-quality leather seat cover for a premium look.', '4500.00', 'images/Seatcover/1.png'),
(56, 'Fabric Seatcover', 'Durable and comfortable fabric seat cover.', '4500.00', 'images/Seatcover/2.png'),
(57, 'Custom Seatcover', 'Custom-fit seat cover for a perfect match.', '4500.00', 'images/Seatcover/3.png'),
(58, 'Sporty Seatcover', 'Sporty design seat cover for a stylish look.', '4500.00', 'images/Seatcover/4.png'),
(59, 'Luxury Seatcover', 'Luxurious seat cover for enhanced comfort.', '4500.00', 'images/Seatcover/5.png'),
(60, 'Waterproof Seatcover', 'Waterproof seat cover to protect against spills.', '4500.00', 'images/Seatcover/6.png'),
(61, 'Eco-friendly Seatcover', 'Eco-friendly seat cover made from recycled materials.', '4500.00', 'images/Seatcover/7.png'),
(62, 'Heated Seatcover', 'Heated seat cover for added warmth in winter.', '4500.00', 'images/Seatcover/8.png'),
(63, 'Cooling Seatcover', 'Cooling seat cover for comfort in summer.', '4500.00', 'images/Seatcover/9.png'),
(64, 'Basic Sound System', 'Basic sound system with clear audio quality.', '4500.00', 'images/Soundsystem/1.png'),
(65, 'Advanced Sound System', 'Advanced sound system with enhanced bass.', '4500.00', 'images/Soundsystem/2.png'),
(66, 'Premium Sound System', 'Premium sound system with surround sound.', '4500.00', 'images/Soundsystem/3.png'),
(67, 'Portable Sound System', 'Portable sound system for on-the-go music.', '4500.00', 'images/Soundsystem/4.png'),
(68, 'Wireless Sound System', 'Wireless sound system with Bluetooth connectivity.', '4500.00', 'images/Soundsystem/5.png'),
(69, 'Home Theater System', 'Home theater sound system for an immersive experience.', '4500.00', 'images/Soundsystem/6.png'),
(70, 'Car Sound System', 'Car sound system with powerful speakers.', '4500.00', 'images/Soundsystem/7.png'),
(71, 'Outdoor Sound System', 'Outdoor sound system designed for open spaces.', '4500.00', 'images/Soundsystem/8.png'),
(72, 'Studio Sound System', 'Studio-quality sound system for professionals.', '4500.00', 'images/Soundsystem/9.png'),
(82, 'Premium Suspension', 'Top-of-the-line suspension system for ultimate comfort and performance.', '4200.00', 'images/Suspension/1.png'),
(83, 'Comfort Suspension', 'Provides a smooth and comfortable ride for everyday driving.', '4300.00', 'images/Suspension/2.png'),
(84, 'Sport Suspension', 'Enhances handling and responsiveness for sporty driving.', '4400.00', 'images/Suspension/3.png'),
(85, 'Performance Suspension', 'Optimized for maximum performance and cornering capabilities.', '4500.00', 'images/Suspension/4.png'),
(86, 'Off-Road Suspension', 'Designed to tackle rough terrain and off-road adventures.', '4600.00', 'images/Suspension/5.png'),
(87, 'Adjustable Suspension', 'Allows customization of ride height and stiffness for versatile driving conditions.', '4700.00', 'images/Suspension/6.png'),
(88, 'Heavy-Duty Suspension', 'Built to handle heavy loads and towing with ease.', '4800.00', 'images/Suspension/7.png'),
(89, 'Eco-Friendly Suspension', 'Environmentally-friendly suspension system with improved fuel efficiency.', '4900.00', 'images/Suspension/8.png'),
(90, 'Luxury Suspension', 'Provides a plush and luxurious ride experience with advanced damping technology.', '5000.00', 'images/Suspension/9.png'),
(91, 'Premium Alloys', 'Premium quality alloy wheels', '5500.00', 'images/Alloys/1.png'),
(92, 'Sports Alloys', 'Alloy wheels suitable for sports cars', '5000.00', 'images/Alloys/2.png'),
(93, 'Luxury Alloys', 'High-end alloy wheels for luxury vehicles', '6000.00', 'images/Alloys/3.png'),
(94, 'Off-road Alloys', 'Durable alloy wheels for off-road vehicles', '4800.00', 'images/Alloys/4.png'),
(95, 'Custom Alloys', 'Custom-designed alloy wheels', '5200.00', 'images/Alloys/5.png'),
(96, 'Classic Alloys', 'Timeless design alloy wheels', '4700.00', 'images/Alloys/6.png'),
(97, 'Performance Alloys', 'Alloy wheels optimized for performance', '5400.00', 'images/Alloys/7.png'),
(98, 'Racing Alloys', 'Alloy wheels designed for racing cars', '5300.00', 'images/Alloys/8.png'),
(99, 'Street Alloys', 'Stylish alloy wheels for street cars', '5100.00', 'images/Alloys/9.png');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `purchase_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `user_id`, `product_id`, `quantity`, `purchase_date`) VALUES
(1, 5, 1, 5, '2024-05-22 20:33:49'),
(2, 5, 1, 1, '2024-05-22 20:47:36'),
(3, 5, 1, 7, '2024-05-22 20:48:59'),
(4, 5, 1, 3, '2024-06-07 20:05:45'),
(5, 5, 19, 3, '2024-06-07 20:05:45'),
(6, 5, 91, 1, '2024-06-07 20:05:45'),
(7, 5, 98, 1, '2024-06-07 20:05:45'),
(8, 5, 93, 3, '2024-06-07 20:05:45'),
(9, 5, 2, 1, '2024-06-07 20:05:45'),
(10, 5, 82, 1, '2024-06-07 20:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Brijesh Adeshara', 'adesharabrijesh8@gmail.com', '$2y$10$gFLJM06j5X9wmFg3blubTuZEsOrHfsMEq5i35QDM9WFwRi6cYqbqu'),
(2, 'ADESHARA', 'mrhashtag292@gmail.com', '$2y$10$tjqMwA95FSb/GEltjdXMROw85nRqCr6967Z5CzK6RL4spK50f2g5m'),
(3, 'Dharmik', 'happybhaiya001@gmail.com', '$2y$10$QlPSuJyqBGvwpJal0/CNFuq82WB150Nv7wa/VSnSQ/rZM5lzZWfSS'),
(4, 'Brijesh Adeshara', 'brijeshadeshara21@gnu.ac.in', '$2y$10$CJbzqd.PXdILc05y5I5eGufyK4bJ6hYRg3TkHJqA4mcsDxhJF.snO'),
(5, 'Manthan', 'mnp.09.06.03@gmail.com', '$2y$10$ti3vqFluUs.OkmSXxkNxp.im0xnN3gv5Zq5KDq9wx1SADnAMFt7jq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
