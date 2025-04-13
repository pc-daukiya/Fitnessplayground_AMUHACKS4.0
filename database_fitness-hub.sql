-- Database schema for Fitness PlayGround project
CREATE DATABASE IF NOT EXISTS `databasefitnesshub`;
USE `databasefitnesshub`;

-- Users table for normal login
CREATE TABLE IF NOT EXISTS `usertable` (
  `userid` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `code` VARCHAR(100),
  `status` ENUM('active', 'inactive') DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Users table for premium login
CREATE TABLE IF NOT EXISTS `premium_usertable` (
  `userid` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `code` VARCHAR(100),
  `status` ENUM('active', 'inactive') DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Products table for e-commerce
CREATE TABLE IF NOT EXISTS `products` (
  `pid` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `description` TEXT,
  `price` DECIMAL(10,2) NOT NULL,
  `image` VARCHAR(255),
  `category` VARCHAR(50),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Cart table
CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` INT AUTO_INCREMENT PRIMARY KEY,
  `userid` INT NOT NULL,
  `pid` INT NOT NULL,
  `quantity` INT DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`userid`) REFERENCES `usertable`(`userid`),
  FOREIGN KEY (`pid`) REFERENCES `products`(`pid`)
);

-- Orders table
CREATE TABLE IF NOT EXISTS `placeorder` (
  `orderid` INT AUTO_INCREMENT PRIMARY KEY,
  `userid` INT NOT NULL,
  `cartid` INT NOT NULL,
  `pid` INT NOT NULL,
  `order_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `status` ENUM('pending', 'shipped', 'delivered') DEFAULT 'pending',
  FOREIGN KEY (`userid`) REFERENCES `usertable`(`userid`),
  FOREIGN KEY (`cartid`) REFERENCES `cart`(`cartid`),
  FOREIGN KEY (`pid`) REFERENCES `products`(`pid`)
);

-- Sample data for testing
INSERT INTO `usertable` (`name`, `email`, `password`, `code`, `status`) VALUES
('Test Customer', 'customer@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '123456', 'active');

INSERT INTO `premium_usertable` (`name`, `email`, `password`, `code`, `status`) VALUES
('Premium User', 'premium@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '654321', 'active');

INSERT INTO `products` (`name`, `description`, `price`, `category`) VALUES
('Yoga Mat', 'Premium non-slip yoga mat', 29.99, 'yoga'),
('Dumbbell Set', '5kg adjustable dumbbells', 49.99, 'weights'),
('Resistance Bands', 'Set of 3 resistance bands', 19.99, 'accessories');
