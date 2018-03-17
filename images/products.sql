-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2013 at 06:18 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pid` varchar(20) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pdescp` varchar(200) NOT NULL,
  `pimage` varchar(50) NOT NULL,
  `pcost` float NOT NULL,
  `pcategory` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pid`, `pname`, `pdescp`, `pimage`, `pcost`, `pcategory`) VALUES
(1, 'm0000', 'Nokia Lumia 520 (Black)', 'Windows Phone 8 OS, 5 MP Primary Camera, 4-inch Touchscreen ,1 Ghz Processor', 'm0000.jpg', 8099, 'mobile'),
(2, 'm0001', 'Samsung Galaxy S Duos S7562 (Pure White)', 'Android v4.0 OS 0.3 MP Secondary Camera Dual SIM (GSM + GSM) 5 MP Primary Camera', 'm0001.jpg', 9592, 'mobile'),
(3, 'm0002', 'Nokia Asha 501 (Black)', '3.2 MP Primary Camera 3-inch Touchscreen Dual SIM (GSM + GSM) FM Radio', 'm0002.jpg', 4295, 'mobile'),
(4, 'm0003', 'Samsung Galaxy S Duos S7562 (Black)', '0.3 MP Secondary Camera Android v4.0 OS Dual SIM (GSM + GSM) 5 MP Primary Camera', 'm0003.jpg', 9592, 'm'),
(5, 'm0004', 'Nokia Lumia 520 (White)', 'Windows Phone 8 OS 5 MP Primary Camera 1 Ghz Processor 4-inch Touchscreen', 'm0004.jpg', 7906, 'mobile'),
(6, 'm0005', 'Micromax Bolt A27 (Black)', 'Android v2.3.5 OS 0.3 MP Primary Camera Dual SIM (GSM + GSM) 3.5-inch Touchscreen', 'm0005.jpg', 2979, 'mobile'),
(7, 'm0006', 'Micromax Canvas 4 A210 (Grey)', '13 MP Primary Camera 5 MP Secondary Camera Android v4.2.1 OS Dual SIM (GSM + GSM)', 'm0006.jpg', 16099, 'mobile'),
(8, 'm0007', 'Samsung Galaxy Pocket Neo S5312 (Metallic Silver)', 'Android v4.1 OS 2 MP Primary Camera 3-inch Touchscreen Smart Dual Active SIM', 'm0007.jpg', 4199, 'mobile'),
(9, 'm0008', 'Nokia Asha 502 (Black)', '3-inch LCD Display FM Radio 5 MP Primary Camera Dual SIM (GSM + GSM)', 'm0008.jpg', 5799, 'mobile'),
(10, 'm0009', 'XOLO Q1000 Opus (White)', '5 MP Primary Camera 0.3 MP Secondary Camera Dual SIM (GSM + GSM) Android v4.2 OS', 'm0009.jpg', 9838, 'mobile'),
(11, 'm0010', 'Micromax Canvas HD A116i (White)', '2 MP Secondary Camera Dual SIM (GSM + GSM) Android v4.2.1 OS 8 MP Primary Camera', 'm0010.jpg', 13295, 'mobile'),
(12, 'm0011', 'Karbonn Titanium X (White)', 'Android v4.2 OS 5 MP Secondary Camera 5-inch Touchscreen 13 MP Primary Camera', 'm0011.jpg', 16990, 'mobile'),
(13, 'm0012', 'Samsung Galaxy S Duos 2 S7582 (Black)', 'Android v4.2 OS Dual SIM (GSM + GSM) 0.3 MP Secondary Camera 5 MP Primary Camera', 'm0012.jpg', 10659, 'mobile'),
(14, 'm0013', 'Swingtel Tigertab (White)', '1 Year Warranty and Free Transit Insurance', 'm0013.jpg', 8925, 'mobile'),
(15, 'm0014', 'Karbonn Titanium S5 Plus (White)', '8 MP Primary Camera Digital Secondary Camera Android v4.2 OS Dual SIM (GSM + GSM)', 'm0014.jpg', 10750, 'mobile'),
(16, 'm0015', 'XOLO Q500 (White)', 'Dual SIM (GSM + GSM) Android v4.1 OS 0.3 MP Secondary Camera 5 MP Primary Camera', 'm0015.jpg', 7519, 'mobile'),
(17, 'm0016', 'Micromax Bolt A58 (Black)', '2 MP Primary Camera Android v4.2.2 OS Dual SIM (GSM + GSM) 3.5-inch Touchscreen', 'm0016.jpg', 4500, 'mobile'),
(18, 'm0017', 'Lenovo IdeaPhone S720 (White)', 'RAM 512MB + ROM 4GB 1GHz Dual Core, 8MP 4.5 inches Android 4.0 Dual Sim, Dual Cam', 'm0017.jpg', 9999, 'mobile'),
(19, 'm0018', 'Karbonn Titanium S2 (Black)', 'Quad Core Processor Dual SIM (GSM + GSM) Android v4.2.1 OS 8 MP Primary Camera', 'm0018.jpg', 7199, 'mobile'),
(20, 'm0019', 'Nokia 101 (Pre Black)', 'Dual SIM 1.8-inch LCD Screen Alphanumeric Keypad FM Radio', 'm0019.jpg', 1799, 'mobile'),
(21, 'm0020', 'Micromax Bolt A27 (Black)', 'Android v2.3.5 OS 0.3 MP Primary Camera Dual SIM (GSM + GSM) 3.5-inch Touchscreen', 'm0020.jpg', 2979, 'mobile'),
(22, 'm0021', 'Samsung Guru 1200 (Indigo Blue)', 'Alphanumeric Keypad Anti-dust Keypad 2G Network Support 1.5-inch TFT Screen', 'm0021.jpg', 1070, 'mobile'),
(23, 'm0022', 'Huawei Ascend P6 (Black)', '4.7-inch HD Touchscreen Android v4.2.2 OS 8 MP Primary Camera 5 MP Secondary Camera', 'm0022.jpg', 25499, 'mobile'),
(24, 'm0023', 'Apple iPhone 5C (Yellow, with 16 GB)', 'iOS 7 FaceTime HD Camera 8 MP iSight Camera Full HD Recording', 'm0023.jpg', 39590, 'mobile'),
(25, 'm0024', 'Samsung Rex 90 S5292 (Gold Brown)', 'FM Radio with Recording Dual SIM (GSM + GSM) 3.2 MP Primary Camera 3.5-inch Touchscreen', 'm0024.jpg', 4599, 'mobile'),
(26, 'm0025', 'Karbonn Smart A29 (Black)', 'Dual SIM (GSM + GSM) Android v4.1.2 OS 8 MP Primary Camera 2 MP Secondary Camera', 'm0025.jpg', 7999, 'mobile'),
(27, 'm0026', 'HTC Butterfly X920D (Glamor White)', '2.1 MP Secondary Camera Android v4.1 OS 8 MP Primary Camera 5-inch Touchscreen', 'm0026.jpg', 26999, 'mobile'),
(28, 'm0027', 'Samsung Galaxy Young S6312 (Metallic Silver)', 'Android v4.1 OS Dual SIM (GSM + GSM) 3.2-inch Touchscreen 3 MP Primary Camera', 'm0027.jpg', 6999, 'mobile'),
(29, 'm0028', 'Karbonn K101* (Black & Red)', 'Alphanumeric Keypad Primary Camera Support 1.8-inch LCD Screen Dual SIM (GSM + GSM)', 'm0028.jpg', 949, 'mobile'),
(30, 'm0029', 'Nokia 105 (Black)', '1.4-inch LCD Screen FM Radio Alphanumeric Keypad', 'm0029.jpg', 1165, 'mobile'),
(31, 'm0030', 'Apple iPhone 5S (Gold, with 16 GB)', '8 MP iSight Camera iOS 7 Full HD Recording FaceTime HD Camera', 'm0030.jpg', 52366, 'mobile'),
(32, 'm0031', 'Sony Xperia E (Black)', '3.2 MP Primary Camera Android v4.1 OS 3.5-inch Touchscreen 1 GHz Processor', 'm0031.jpg', 8099, 'mobile'),
(33, 'm0032', 'Micromax X103i (White)', '0.3 MP Primary Camera FM Radio Dual SIM (GSM + GSM) Alphanumeric Keypad', 'm0032.jpg', 1199, 'mobile'),
(34, 'm0033', 'Sony Xperia U (Black Pink)', '5 MP Primary Camera 3.5-inch TFT Touchscreen Android v2.3 OS 0.3 MP Secondary Camera', 'm0033.jpg', 12590, 'mobile'),
(35, 'm0034', 'Sony Xperia Neo L (Glossy Black)', 'Android v4.0 OS 5 MP Primary Camera 0.3 MP Secondary Camera 4-inch TFT Touchscreen', 'm0034.jpg', 13550, 'mobile'),
(36, 'm0035', 'Sony Xperia L (Rose Red)', '8 MP Primary Camera 0.3 MP Secondary Camera Android v4.1 OS 4.3-inch Touchscreen', 'm0035.jpg', 16350, 'mobile'),
(37, 'm0036', 'Sony Xperia Miro (Black)', 'Android v4.0 OS 5 MP Primary Camera 0.3 MP Secondary Camera 3.5-inch Touchscreen', 'm0036.jpg', 12540, 'mobile'),
(38, 'm0037', 'Sony Xperia L (Starry Black)', '8 MP Primary Camera Android v4.1 OS 0.3 MP Secondary Camera 4.3-inch Touchscreen', 'm0037.jpg', 16100, 'mobile'),
(39, 'm0038', 'Apple iPhone 5C (Pink, with 16 GB)', 'FaceTime HD Camera iOS 7 8 MP iSight Camera Full HD Recording', 'm0038.jpg', 39480, 'mobile'),
(40, 'm0039', 'Apple iPhone 5C (Blue, with 16 GB)', 'iOS 7 Full HD Recording FaceTime HD Camera 8 MP iSight Camera', 'm0039.jpg', 40559, 'mobile'),
(41, 'l0000', 'HP Pavilion 15-E015TX Laptop (3rd Gen Ci5/ 4GB/ 1T', '4 GB DDR3 Core i5 (3rd Gen) 1 TB Windows 8', 'l0000.jpg', 43564, 'laptops'),
(42, 'l0001', 'HP 450 Laptop (3rd Gen Ci3/ 4GB/ 500GB/ DOS) (Grey', 'Core i3 (3rd Gen) 4 GB DDR3 500 GB Free DOS', 'l0001.jpg', 30500, 'laptops'),
(43, 'l0002', 'HP Pavilion G4-1315AU Laptop (APU A4/ 4GB/ 500GB/ ', 'APU Dual Core A4 4 GB DDR3 500 GB Free DOS', 'l0002.jpg', 26209, 'laptops'),
(44, 'l0003', 'HP Pavilion 1000-1B02AU Laptop (APU Dual Core/ 2GB', 'Free DOS 320 GB APU Dual Core 2 GB DDR3', 'l0003.jpg', 21490, 'laptops'),
(45, 'l0004', 'HP 455 Laptop (APU Dual Core/ 2GB/ 500GB/ DOS) (Ch', 'Free DOS APU Dual Core 2 GB DDR3 500 GB', 'l0004.jpg', 21670, 'laptops'),
(46, 'l0005', 'HP Pavilion 15-n012TX Laptop (4th Gen Ci5/ 4GB/ 1T', 'Core i5 (4th Gen) 4 GB DDR3 1 TB Windows 8', 'l0005.jpg', 48050, 'laptops'),
(47, 'l0006', 'HP 650 Laptop (2nd Gen Ci3/ 2GB/ 500GB/ DOS) (Impr', '2 GB DDR3 Core i3 (2nd Gen) Free DOS 500 GB', 'l0006.jpg', 28990, 'laptops'),
(48, 'l0007', 'HP 450 Laptop (3rd Gen Ci3/ 4GB/ 500GB/ DOS) (Grey', '4 GB DDR3\n500 GB\nCore i3 (3rd Gen)\nFree DOS', 'l0007.jpg', 29200, 'laptops'),
(49, 'l0008', 'Lenovo Essential G585 (59-348455) Laptop (APU Dual', 'APU Dual Core Free DOS 500 GB 2 GB DDR3', 'l0008.jpg', 21250, 'laptops'),
(50, 'l0009', 'HP Pavilion 15-E016TX Laptop (3rd Gen Ci5/ 4GB/ 1T', '1 TB Core i5 (3rd Gen) 4 GB DDR3 Windows 8', 'l0009.jpg', 46433, 'laptops'),
(51, 'l0010', 'HP Pavilion G6-2312AX Laptop (APU Quad Core A10/ 4', '4 GB DDR3 Windows 8 1 TB APU Quad Core A10', 'l0010', 42990, 'laptops'),
(52, 'l0011', 'HP Pavilion G6-2236TX Laptop (3rd Gen Ci7/ 8GB/ 1T', 'Windows 8 Core i7 (3rd Gen) 1 TB 8 GB DDR3', 'l0011.jpg', 70000, 'laptops'),
(53, 'l0012', 'HP Pavilion Touchsmart 14-B172TX Sleekbook (3rd Ge', 'Core i5 (3rd Gen) 4 GB DDR3 500 GB Windows 8', 'l0012.jpg', 44990, 'laptops'),
(54, 'l0013', 'HP 2000-2D02TU Laptop (2nd Gen PDC/ 4GB/ 500GB/ DO', '4 GB DDR3 500 GB PentiumDualCore:2ndGen Free DOS', 'l0013.jpg', 25690, 'laptops'),
(55, 'l0014', 'HP Envy TouchSmart 15-J001TX Laptop (4th Gen Ci7/ ', '1 TB Core i7 (4th Gen) Windows 8 8 GB DDR3', 'l0014.jpg', 82160, 'laptops'),
(56, 'l0015', 'HP Pavilion 15-n013TX Laptop (4th Gen Ci5/ 4GB/ 1T', 'Windows 8 Core i5 (4th Gen) 4 GB DDR3 1 TB', 'l0015.jpg', 47990, 'laptops'),
(57, 'l0016', 'HP Envy M6-1213TX Laptop (3rd Gen Ci5/ 8GB/ 1TB/ W', '8 GB DDR3 Core i5 (3rd Gen) Windows 8 1 TB', 'l0016.jpg', 56090, 'laptops'),
(58, 'l0017', 'HP Pavilion 15-n010TX Laptop (3rd Gen Ci3/ 4GB/ 50', '4 GB DDR3\n500 GB\nWindows 8\nCore i3 (3rd Gen)', 'l0017.jpg', 37990, 'laptops'),
(59, 'l0018', 'HP 2000-2d01TU Laptop (2nd Gen CDC/ 2GB/ 500GB/ DO', 'CeleronDualCore:2ndGen 2 GB DDR3 500 GB Free DOS', 'l0018.jpg', 25730, 'laptops'),
(60, 'l0019', 'HP Envy Spectre XT 13-2001TU Ultrabook (3rd Gen Ci', '4 GB DDR3 Core i5 (3rd Gen) Windows 7 Home Premium 128 GB SSD', 'l0019.jpg', 56990, 'laptops'),
(61, 'l0020', 'HP Pavilion 15-e024TU Laptop (3rd Gen Ci3/ 2GB/ 50', '2 GB DDR3 500 GB Windows 8 Core i3 (3rd Gen)', 'l0020.jpg', 31990, 'laptops'),
(62, 'l0021', 'HP Pavilion Touchsmart 14-B172TX Sleekbook (3rd Ge', 'Core i5 (3rd Gen) 4 GB DDR3 500 GB Windows 8', 'l0021.jpg', 44990, 'laptops'),
(63, 'l0022', 'HP Pavilion 15-E039TX Laptop (3rd Gen Ci5/ 4GB/ 1T', 'Core i5 (3rd Gen) Windows 8 4 GB DDR3 1 TB', 'l0022.jpg', 45290, 'laptops'),
(64, 'l0023', 'HP 14-Q001TU Chromebook (4th Gen CDC/ 4GB/ 16GB SS', 'Chrome OS CeleronDualCore:4thGen 2 GB 16 GB SSD', 'l0023.jpg', 26990, 'laptops'),
(65, 'l0024', 'HP 4540s ProBook (3rd Gen Ci5/ 4GB/ 750GB/ Win8/ 1', 'Core i5 (3rd Gen) 750 GB Windows 8 4 GB DDR3', 'l0024.jpg', 43990, 'laptops'),
(66, 'l0025', 'HP 15-E039TX 15E Series Laptop (Pearl White)', '', 'l0025.jpg', 45490, 'laptops'),
(67, 'l0026', 'HP Pavilion 15-n003TX Laptop (4th Gen Ci5/ 4GB/ 1T', '4 GB DDR3 Windows 8 1 TB Core i5 (4th Gen)', 'l0026.jpg', 46290, 'laptops'),
(68, 'l0027', 'HP Pavilion 15-n012TX Laptop (4th Gen Ci5/ 4GB/ 1T', 'Core i5 (4th Gen) 4 GB DDR3 1 TB Windows 8', 'l0027.jpg', 48050, 'laptops'),
(69, 'l0028', 'HP Pavilion 15-e008TU Laptop (3rd Gen Ci5/ 4GB/ 50', '', 'l0028.jpg', 41580, 'laptops'),
(70, 'l0029', 'HP 15-E015TX 15E Series Laptop (Silver)', '', 'l0029.jpg', 44240, 'laptops'),
(71, 'l0030', 'HP Pavilion 14-n009TU Laptop (4th Gen Ci5/ 4GB/ 50', 'Windows 8 500 GB 4 GB DDR3 Core i5 (4th Gen)', 'l0030.jpg', 41930, 'laptops'),
(72, 'l0031', 'HP Pavilion 15-n039TX Laptop (3rd Gen Ci3/ 4GB/ 1T', '', 'l0031.jpg', 37490, 'laptops'),
(73, 'l0032', 'Lenovo Essential G505s (59-380146) Laptop (APU Qua', '8 GB DDR3 1 TB APU Quad Core A10 Free DOS', 'l0032.jpg', 37990, ''),
(74, 'l0033', 'Lenovo Essential G505s (59-379862) Laptop (APU Qua', 'Free DOS 8 GB DDR3 APU Quad Core A8 1 TB', 'l0033.jpg', 33490, 'laptops'),
(75, 'l0034', 'HP Pavilion 15-n020AX Laptop (APU Quad Core/ 4GB/ ', '4 GB DDR3 APU Quad Core A4 Ubuntu 1 TB', 'l0034.jpg', 29490, 'laptops'),
(76, 'l0035', 'HP Pavilion 15-e026AX Laptop (APU Quad Core A10/ 8', 'APU Quad Core A10 8 GB DDR3 Free DOS 1 TB', 'l0035.jpg', 38990, 'laptops'),
(77, 'l0036', 'HP Pavilion 15-e026AX Laptop (APU Quad Core A10/ 8', '4 GB DDR3 Windows 7 Home Premium 1 TB APU Quad Core A6', 'l0036.jpg', 31900, 'laptops'),
(78, 'l0037', 'HP Pavilion TouchSmart 11-e006AU Laptop (APU Dual ', 'APU Dual Core A4 Windows 8 500 GB 4 GB DDR3', 'l0037.jpg', 29590, 'laptops'),
(79, 'l0038', 'Lenovo Essential G505S (59-380131) Laptop (APU Qua', '4 GB DDR3 APU Quad Core A10 Windows 8 1 TB', 'l0038.jpg', 41700, 'laptops'),
(80, 'l0039', 'Dell Inspiron 15 Laptop (4th Gen Ci5/ 6GB/ 1TB/ Ub', '', 'l0039.jpg', 46190, 'laptops'),
(81, 'c0000', 'Canon EOS 1100D SLR (Brown, with Kit (EF-S 18-55 I', '12.2 Megapixels CMOS with 2.7 inch LCD', 'c0000.jpg', 24646, 'cameras'),
(82, 'c0001', 'Nikon D5200 SLR (Black, with AF-S 18-55 mm VR Kit ', '24.1 Megapixels CMOS with 3 inch LCD', 'c0001.jpg', 42995, 'cameras'),
(83, 'c0002', 'Sony Cyber-shot DSC-W730 Point & Shoot (Black)', '16.1 Megapixels Optical Zoom: 8x CCD Image Sensor with 2.7 inch LCD', 'c0002.jpg', 7799, 'cameras'),
(84, 'c0003', 'Nikon D3100 SLR (Black, with ( AF-S 18-55mm VR Kit', '14.2 Megapixels CMOS Interchangeable lens c... with 3 inch LCD', 'c0003.jpg', 23999, 'cameras'),
(85, 'c0004', 'Sony Cyber-shot DSC-HX300 Point & Shoot (Black)', '20.4 Megapixels Optical Zoom: 50x Exmor R CMOS Image Sensor with 3 inch LCD', 'c0004.jpg', 24291, 'cameras'),
(86, 'c0005', 'Nikon Coolpix L28 Point & Shoot (Black)', '20.1 Megapixels Optical Zoom: 5x CCD Image Sensor with 3 inch LCD', 'c0005.jpg', 5499, 'cameras'),
(87, 'c0006', 'Nikon D5100 SLR (Black, with AF-S 18-55mm VR Kit L', '16.2 Megapixels CMOS with 3 inch LCD', 'c0006.jpg', 29770, 'cameras'),
(88, 'c0007', 'Sony Cyber-shot DSC-W710 Point & Shoot (Black)', '16.1 Megapixels Optical Zoom: 5x CCD Image Sensor with 2.7 inch LCD', 'c0007.jpg', 6400, 'cameras'),
(89, 'c0008', 'Nikon Coolpix L28 Point & Shoot (Red)', '20.1 Megapixels Optical Zoom: 5x CCD Image Sensor with 3 inch LCD', 'c0008.jpg', 5410, 'cameras'),
(90, 'c0009', 'Nikon Coolpix L820 Advance Point and shoot (Black)', '16.0 Megapixels Optical Zoom: 30x CMOS with 3 inch LCD', 'c0009.jpg', 14299, 'cameras'),
(91, 'c0010', 'Nikon Coolpix L27 Point & Shoot (Black)', '16.1 Megapixels Optical Zoom: 5x CCD Image Sensor with 2.7 inch LCD', 'c0010.jpg', 4990, 'cameras'),
(92, 'c0011', 'Canon EOS 600D SLR (Black, with Kit I EF-S18-55mm ', '18 Megapixels CMOS Interchangeable Lens C... with 3 inch LCD', 'c0011.jpg', 33945, 'cameras'),
(93, 'c0012', 'Nikon D3200 SLR (Black, with 18-55 mm VR Kit Lens)', '24.2 Megapixels CMOS with 3 inch LCD', 'c0012.jpg', 30299, 'cameras'),
(94, 'c0013', 'Sony DSC-H100 Point & Shoot', '16.1 Megapixels Optical Zoom: 21x Super HAD CCD Image Se... with 3 inch LCD', 'c0013.jpg', 11899, 'cameras'),
(95, 'c0014', 'Canon EOS 1100D SLR (Black, with Double Lens Kit (', '12.2 Megapixels CMOS with 2.7 inch LCD', 'c0014.jpg', 31035, 'cameras'),
(96, 'c0015', 'Sony Cyber-shot DSC-H200 Point & Shoot (Black)', '20.1 Megapixels Optical Zoom: 26x Super HAD CCD Image Se... with 3 inch LCD', 'c0015.jpg', 12350, 'cameras'),
(97, 'c0016', 'Nikon Coolpix L27 Point & Shoot (Red)', '16.1 Megapixels Optical Zoom: 5x CCD Image Sensor with 2.7 inch LCD', 'c0016.jpg', 4740, 'cameras'),
(98, 'c0017', 'Nikon Coolpix L820 Advance Point and shoot (Plum)', '16.0 Megapixels Optical Zoom: 30x CMOS with 3 inch LCD', 'c0017.jpg', 14299, 'cameras'),
(99, 'c0018', 'Sony Cyber-shot DSC-W710 Point & Shoot (Pink)', '16.1 Megapixels Optical Zoom: 5x CCD Image Sensor with 2.7 inch LCD', 'c0018.jpg', 6490, 'cameras'),
(100, 'c0019', 'Nikon Coolpix L320 Advance Point and shoot (Black)', '16.1 Megapixels Optical Zoom: 26x CCD with 3 inch LCD', 'c0019.jpg', 10750, 'cameras'),
(101, 'c0020', 'Canon PowerShot SX160 IS Point & Shoot (Black)', '16.0 Megapixels Optical Zoom: 16x CCD Image Sensor with 3 inch LCD', 'c0020.jpg', 9695, 'cameras'),
(102, 'c0021', 'Canon PowerShot SX500 IS Point & Shoot', '16.0 Megapixels Optical Zoom: 30x CCD Image Sensor with 3 inch LCD', 'c0021.jpg', 15514, 'cameras'),
(103, 'c0022', 'Sony Cyber-shot DSC-W710 Point & Shoot (Silver)', '16.1 Megapixels Optical Zoom: 5x CCD Image Sensor with 2.7 inch LCD', 'c0022.jpg', 5841, 'cameras'),
(104, 'c0023', 'Fujifilm AX550 Point & Shoot (Blue)', '16.0 Megapixels Optical Zoom: 5x CCD Image Sensor with 2.7 inch LCD', 'c0023.jpg', 4499, 'cameras'),
(105, 'c0024', 'Nikon Coolpix L28 Point & Shoot (Pink)', '20.1 Megapixels Optical Zoom: 5x CCD Image Sensor with 3 inch LCD', 'c0024.jpg', 5355, 'cameras'),
(106, 'c0025', 'Nikon Coolpix S3500 Point & Shoot (Black)', '20.1 Megapixels Optical Zoom: 7x CCD Image Sensor with 2.7 inch LCD', 'c0025.jpg', 7155, 'cameras'),
(107, 'c0026', 'Nikon Coolpix L28 Point & Shoot\n(Silver)', '20.1 Megapixels\nOptical Zoom: 5x\nCCD Image Sensor\nwith 3 inch LCD', 'c0026.jpg', 5355, 'cameras'),
(108, 'c0027', 'Sony Cyber-shot DSC-WX60 Point & Shoot (Black)', '16.2 Megapixels Optical Zoom: 8x Exmor R CMOS Image Sensor with 2.7 inch LCD', 'c0027.jpg', 8991, 'cameras'),
(109, 'c0028', 'Canon IXUS 510 HS Point & Shoot (Black)', '10.1 Megapixels Optical Zoom: 12x CMOS Image Sensor with 3.2 inch LCD', 'c0028.jpg', 7998, 'cameras'),
(110, 'c0029', 'Nikon Coolpix L27 Point & Shoot (Silver)', '16.1 Megapixels Optical Zoom: 5x CCD Image Sensor with 2.7 inch LCD', 'c0029.jpg', 4699, 'cameras'),
(111, 'c0030', 'Sony Cyber-shot DSC-W730 Point & Shoot (Silver)', '16.1 Megapixels Optical Zoom: 8x CCD Image Sensor with 2.7 inch LCD', 'c0030', 7646, 'cameras'),
(112, 'c0031', 'Canon PowerShot A2500 Advance Point and shoot (Red', '16 Megapixels Optical Zoom: 5x CCD with 2.7 inch LCD', 'c0031.jpg', 5395, 'cameras'),
(113, 'c0032', 'Canon PowerShot A2500 Advance Point and shoot (Bla', '16 Megapixels Optical Zoom: 5x CCD with 2.7 inch LCD', 'c0032.jpg', 5350, 'cameras'),
(114, 'c0033', 'Sony Cyber-shot DSC-WX200 Point & Shoot (Black)', '18.2 Megapixels Optical Zoom: 10x Exmor R CMOS Image Sensor with 2.7 inch LCD', 'c0033.jpg', 13750, 'cameras'),
(115, 'c0034', 'Nikon Coolpix S3500 Point & Shoot (Silver)', '20.1 Megapixels Optical Zoom: 7x CCD Image Sensor with 2.7 inch LCD', 'c0034.jpg', 7155, 'cameras'),
(116, 'c0035', 'Canon IXUS 125 HS Point & Shoot (Blue)', '16.1 Megapixels Optical Zoom: 5x CMOS Image Sensor with 3 inch LCD', 'c0035.jpg', 7495, 'cameras'),
(117, 'c0036', 'Canon IXUS 132 Advance Point and shoot (Blue)', '16.0 Megapixels Optical Zoom: 8x CCD with 2.7 inch LCD', 'c0036.jpg', 6890, 'cameras'),
(118, 'c0037', 'Panasonic Lumix DMC-FH4 Point & Shoot (Black)', '14.1 Megapixels Optical Zoom: 4x CCD Image Sensor with 2.7 inch LCD', 'c0037.jpg', 4990, 'cameras'),
(119, 'c0038', 'Canon IXUS 125 HS Point & Shoot (Red)', '16.1 Megapixels Optical Zoom: 5x CMOS Image Sensor with 3 inch LCD', 'c0038.jpg', 7900, 'cameras'),
(120, 'c0039', 'Canon PowerShot A3400 IS Point & Shoot (Red)', '16.0 Megapixels Optical Zoom: 5x CCD Image Sensor with 3 inch LCD', 'c0039.jpg', 5950, 'cameras');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
