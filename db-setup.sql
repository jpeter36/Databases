-- CREATE TABLE Customer (
-- 	CustomerID INT AUTO_INCREMENT PRIMARY KEY,
-- 	FirstName VARCHAR(255),
-- 	LastName VARCHAR(255),
-- 	Email VARCHAR(255),
-- 	Address VARCHAR(255),
-- 	PhoneNumber VARCHAR(255),
-- 	Registration_date TIMESTAMP
-- );

-- CREATE TABLE CustomerCred (
-- 	UserName VARCHAR(255) PRIMARY KEY,
-- 	Password VARCHAR(255),
-- 	CustomerID INT FOREIGN KEY REFERENCES Customer(CustomerID)
-- );

-- CREATE TABLE Product (
-- 	ProductID INT AUTO_INCREMENT PRIMARY KEY,
-- 	ProdName VARCHAR(255),
-- 	ProdDesc VARCHAR(1024),
-- 	Stock INT,
-- 	Price VARCHAR(255),
-- 	Size VARCHAR(255),
-- 	Color VARCHAR(255)
-- );

-- CREATE TABLE Images (
-- 	ImageID INT AUTO_INCREMENT PRIMARY KEY,
-- 	FilePath VARCHAR(255),
-- 	ProductID INT FOREIGN KEY REFERENCES Product(ProductID)
-- );

-- CREATE TABLE Cart (
-- 	CartID INT AUTO_INCREMENT PRIMARY KEY,
-- 	CustomerID INT FOREIGN KEY REFERENCES Customer(CustomerID)
-- );

-- CREATE TABLE CartProducts (
-- 	CartProdID INT AUTO_INCREMENT PRIMARY KEY,
-- 	ProductID INT FOREIGN KEY REFERENCES Product(ProductID),
-- 	CartID INT FOREIGN KEY REFERENCES Cart(CartID)
-- );

-- CREATE TABLE Order (
-- 	OrderNumber INT AUTO_INCREMENT PRIMARY KEY,
-- 	OrderTime TIMESTAMP,
-- 	Quantiy VARCHAR(255),
-- 	CustomerID INT FOREIGN KEY REFERENCES Customer(CustomerID)
-- );


-- Host: localhost
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IT350`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `ProductID` smallint(5) UNSIGNED NOT NULL,
  `CustomerID` smallint(5) UNSIGNED NOT NULL,
  `dates` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Comments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `CustomerID` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `LoginEntry` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `ProductID` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `CustomerID` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
IT350.sql
Displaying IT350.sql.