-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2016 at 12:55 AM
-- Server version: 5.5.44-0+deb8u1
-- PHP Version: 5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yourcellular`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_process`
--

CREATE TABLE IF NOT EXISTS `order_process` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `model` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products_accessories`
--

CREATE TABLE IF NOT EXISTS `products_accessories` (
`id` int(11) NOT NULL,
  `image_dir` varchar(100) NOT NULL,
  `make` varchar(30) NOT NULL,
  `specifications` text NOT NULL,
  `model` varchar(255) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `price` int(10) NOT NULL,
  `brief_description` text CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `stock` int(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_accessories`
--

INSERT INTO `products_accessories` (`id`, `image_dir`, `make`, `specifications`, `model`, `price`, `brief_description`, `stock`) VALUES
(2, 'webpage/Images/shopItems/accessories/888462671262-large.png', 'Apple', 'Warranty\r\n\r\n    1 year of hardware repair coverage through the limited warranty\r\n\r\nTalk Time\r\n\r\n    Up to 18 hours of battery life\r\n\r\nWeight\r\n\r\n    1.41 ounces (case weight)\r\n\r\nDimensions\r\n\r\n    38.6 mm x 33.3 mm x 10.5 mm\r\n\r\nTechnologies\r\n\r\n    Bluetooth 4.0, Ambient light sensor, Sapphire crystal display, Retina display with Force Touch, Heart rate sensor, accelerometer, and gyroscope, Speaker and microphone, Wi-Fi (802.11b/g/n 2.4GHz), Splash and water resistant\r\n\r\nWearing Style\r\n\r\n    Watch\r\n\r\nIn The Box\r\n\r\n    Apple Watch, Magnetic charging cable (2 m), USB power adapter (5W), Sport Band and Quick Start Guide\r\n\r\n', 'Apple Watch: 38mm', 549, 'To wear it is to love it. Receive and respond to notifications in an instant.\r\n Track your daily activity. Control your music using only your voice. \r\nPay for groceries just like that. With Apple Watch, \r\nimportant information and essential features are always just a raise of the\r\n wrist away.\r\n\r\n? Stainless steel case: The case is crafted from a refined 316L stainless \r\nsteel that?s been cold forged,\r\n making it up to 80 percent harder. It?s less susceptible to nicks and \r\ncorrosion and has a beautiful mirror finish.\r\n? Sapphire crystal display: The display is protected by ultra-hard, polished,\r\n precision-machined sapphire crystal.\r\n? High-performance sport band: The durable fluoroelastomer band is remarkably\r\n flexible, light,and soft. Fits 130 - 200 mm (5.12 - 7.87 inch) wrists.\r\n? Requires an iPhone 5, 5c, 5s, 6, 6 Plus, 6s, or 6s Plus and iOS 8.2 or later. ', 87),
(3, 'webpage/Images/shopItems/accessories/848447010240-large.png', 'Beats', 'Warranty\r\n\r\n    1 year limited through Beats\r\n\r\nTalk Time\r\n\r\n    up to 12 hours (wireless), 20 hours (wired)\r\n\r\nWeight\r\n\r\n    9.1 ounces\r\n\r\nDimensions\r\n\r\n    9.6 x 7.3 x 4.5 inches\r\n\r\nTechnologies\r\n\r\n    Bluetooth\r\n\r\nWearing Style\r\n\r\n    Over-Ear\r\n\r\nIn The Box\r\n\r\n    Beats Studio Wireless™ headphones, RemoteTalk™ cable,\r\n    3.5mm audio cable, USB 2.0 charging cable (USB-A to USB Micro-B),\r\n     USB power adapter, Hard shell carrying case, Quick Start Guide\r\n     and Warranty card\r\n\r\n', 'Beats? Studio 2 Wireless Over-Ear Headphones - Matte Black', 379, '\r\n\r\n    *Pair and play with your Bluetooth? device with 30 foot range\r\n    *Dual-mode Adaptive Noise Canceling\r\n    *Iconic Beats sound\r\n    *12 hour rechargeable battery with Fuel Gauge ', 88),
(4, 'webpage/Images/shopItems/accessories/SUPM45767-large.png', 'UE MEGABOOM', 'Talk Time\r\n\r\n    2.5 hours\r\n\r\nStandby Time\r\n\r\n    20 hours\r\n\r\nWeight\r\n\r\n    30.93 ounces\r\n\r\nDimensions\r\n\r\n    3.3 x 8.9 inches\r\n\r\nTechnologies\r\n\r\n    Bluetooth® or 3.5 mm audio output\r\n\r\nIn The Box\r\n\r\n    1 UE MEGABOOM, Micro USB cable, Power Adapter and User Guide\r\n\r\n', 'UE MEGABOOM Wireless Bluetooth? Speaker - Lava Red', 299, '*360-degree sound with deep bass.\r\n*Wirelessly connect a second UE MEGABOOM \r\n  or UE BOOM portable wireless speaker.\r\n*100 ft Bluetooth wireless range; 20-hour \r\n  rechargeable battery; Ultra-fast micro USB charging.\r\n*UE MEGABOOM app for additional features and control.', 98),
(5, 'webpage/Images/shopItems/accessories/TMOM64672-large.png', 'LG', '\r\nSpecifications\r\nWarranty\r\n\r\n    1 Year Limited Manufacturer Warranty Through Lg\r\n\r\nWeight\r\n\r\n    4.11 Ounces\r\n\r\nDimensions\r\n\r\n    7.31 x 6.46 x 1.81 inches\r\n\r\nIn The Box\r\n\r\n    360 VR with Type C cable, Light Blocker, Lens Cleaner, Case, Quick Start Guide and Manual\r\n\r\n', 'LG 360 VR', 199, '\r\n    *Qualcomm Snapdragon 820 Processor ? premium 2.2 GHz \r\n         Quad-Core quad-core processor supports \r\n         superior visual graphics and performance speeds.\r\n    *639 ppi Dual Display ? dual display with high pixel \r\n      density for first-class visual quality\r\n   * Ergonomic Design ? lightweight, face-conforming\r\n       frame that folds up for easy portability\r\n    *6-axis Motion Tracking ? tracks every subtle movement \r\n       of your head is tracked to provide a genuinely lifelike visual ', 98);

-- --------------------------------------------------------

--
-- Table structure for table `products_phone`
--

CREATE TABLE IF NOT EXISTS `products_phone` (
`id` int(11) NOT NULL,
  `image_dir` varchar(200) NOT NULL,
  `make` varchar(30) NOT NULL,
  `specifications` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `brief_description` text NOT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_phone`
--

INSERT INTO `products_phone` (`id`, `image_dir`, `make`, `specifications`, `model`, `price`, `brief_description`, `stock`) VALUES
(4, 'webpage/Images/shopItems/phones/samsung-galaxy-a9-2016-.jpg', 'Samsung', 'NETWORK	Technology	\r\nGSM / HSPA / LTE\r\nLAUNCH	Announced	2015, December\r\nStatus	Available. Released 2016, January\r\nBODY	Dimensions	161.7 x 80.9 x 7.4 mm (6.37 x 3.19 x 0.29 in)\r\nWeight	200 g (7.05 oz)\r\nBuild	Corning Gorilla Glass 4 back panel\r\nSIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)\r\nDISPLAY	Type	Super AMOLED capacitive touchscreen, 16M colors\r\nSize	6.0 inches (~75.9% screen-to-body ratio)\r\nResolution	1080 x 1920 pixels (~367 ppi pixel density)\r\nMultitouch	Yes\r\nProtection	Corning Gorilla Glass 4\r\nPLATFORM	OS	Android OS, v5.1.1 (Lollipop), planned upgrade to v6.0 (Marshmallow)\r\nChipset	Qualcomm MSM8976 Snapdragon 652\r\nCPU	Quad-core 1.8 GHz Cortex-A72 & quad-core 1.2 GHz Cortex-A53\r\nGPU	Adreno 510\r\nMEMORY	Card slot	microSD, up to 128 GB (dedicated slot)\r\nInternal	32 GB, 3 GB RAM\r\nCAMERA	Primary	13 MP, f/1.9, 28mm, OIS, autofocus, LED flash, check quality\r\nFeatures	1/3" sensor size, 1.12 µm pixel size, geo-tagging, touch focus, face detection, panorama, HDR\r\nVideo	1080p@30fps, check quality\r\nSecondary	8 MP, f/1.9, 24mm, 1080p\r\nSOUND	Alert types	Vibration; MP3, WAV ringtones\r\nLoudspeaker	Yes\r\n3.5mm jack	Yes\r\nCOMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot\r\nBluetooth	v4.1, A2DP, EDR, LE\r\nGPS	Yes, with A-GPS, GLONASS/ BDS (market dependant)\r\nNFC	Yes\r\nRadio	FM radio, RDS, recording\r\nUSB	microUSB v2.0\r\nFEATURES	Sensors	Fingerprint, accelerometer, gyro, proximity, compass\r\nMessaging	SMS(threaded view), MMS, Email, Push Mail, IM\r\nBrowser	HTML5\r\nJava	No\r\n 	- Fast battery charging\r\n- ANT+ support\r\n- Active noise cancellation with dedicated mic\r\n- MP4/WMV/H.264 player\r\n- MP3/WAV/WMA/eAAC+/FLAC player\r\n- Photo/video editor\r\n- Document viewer\r\nBATTERY	 	Non-removable Li-Ion 4000 mAh battery\r\nMISC	Colors	Pearl White, Midnight Black, Champagne Gold, Pink\r\nSAR US	1.19 W/kg (head)     1.33 W/kg (body)    \r\nSAR EU	0.18 W/kg (head)     0.55 W/kg (body)    \r\nPrice group	9/10\r\nTESTS	Performance	Basemark OS II 2.0: 1529 / Basemark X: 15290\r\nDisplay	Contrast ratio: Infinite (nominal), 3.817 (sunlight)\r\nCamera	Photo / Video\r\nLoudspeaker	Voice 65dB / Noise 72dB / Ring 65dB\r\nBattery life	\r\nEndurance rating 103h', 'Samsung Galaxy A9', 599, 'Fingerprint, accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2\r\nSMS(threaded view), MMS, Email, Push Mail, IM\r\n- Fast battery charging: 60% in 30 min (Quick Charge 2.0)\r\n- Wireless charging (Qi/PMA) - market dependent\r\n- ANT+ support\r\n- S-Voice natural language commands and dictation\r\n- OneDrive (115 GB cloud storage)\r\n- Active noise cancellation with dedicated mic\r\n- MP4/DivX/XviD/WMV/H.264 player\r\n- MP3/WAV/WMA/eAAC+/FLAC player\r\n- Photo/video editor\r\n- Document editor', 0),
(6, 'webpage/Images/shopItems/phones/samsung-galaxy-s7-edge-.jpg', 'Samsung', 'Network 	Technology 	\r\nGSM / HSPA / LTE\r\nLaunch 	Announced 	2016, February\r\nStatus 	Available. Released 2016, March\r\nBody 	Dimensions 	150.9 x 72.6 x 7.7 mm (5.94 x 2.86 x 0.30 in)\r\nWeight 	157 g (5.54 oz)\r\nBuild 	Corning Gorilla Glass 4 back panel\r\nSIM 	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)\r\n 	- Samsung Pay (Visa, MasterCard certified)\r\n- IP68 certified - dust proof and water resistant over 1.5 meter and 30 minutes\r\nDisplay 	Type 	Super AMOLED capacitive touchscreen, 16M colors\r\nSize 	5.5 inches (~76.1% screen-to-body ratio)\r\nResolution 	1440 x 2560 pixels (~534 ppi pixel density)\r\nMultitouch 	Yes\r\nProtection 	Corning Gorilla Glass 4\r\n 	- Always-on display\r\n- TouchWiz UI\r\n- Curved edge screen\r\nPlatform 	OS 	Android OS, v6.0 (Marshmallow)\r\nChipset 	Qualcomm MSM8996 Snapdragon 820\r\nExynos 8890 Octa\r\nCPU 	Dual-core 2.15 GHz Kryo & dual-core 1.6 GHz Kryo\r\nQuad-core 2.3 GHz Mongoose + quad-core 1.6 GHz Cortex-A53\r\nGPU 	Adreno 530\r\nMali-T880 MP12\r\nMemory 	Card slot 	microSD, up to 200 GB (dedicated slot) - single-SIM model\r\nmicroSD, up to 200 GB (uses SIM 2 slot) - dual-SIM model\r\nInternal 	32/64 GB, 4 GB RAM\r\nCamera 	Primary 	12 MP, f/1.7, 26mm, phase detection autofocus, OIS, LED flash, check quality\r\nFeatures 	1/2.6" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus, face/smile detection, Auto HDR, panorama\r\nVideo 	2160p@30fps, 1080p@60fps, 720p@240fps, HDR, dual-video rec., check quality\r\nSecondary 	5 MP, f/1.7, 22mm, dual video call, Auto HDR\r\nSound 	Alert types 	Vibration; MP3, WAV ringtones\r\nLoudspeaker 	Yes\r\n3.5mm jack 	Yes\r\n 	- 24-bit/192kHz audio\r\nComms 	WLAN 	Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot\r\nBluetooth 	v4.2, A2DP, LE, aptX\r\nGPS 	Yes, with A-GPS, GLONASS, BDS\r\nNFC 	Yes\r\nRadio 	No\r\nUSB 	microUSB v2.0, USB Host\r\nFeatures 	Sensors 	Fingerprint, accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2\r\nMessaging 	SMS(threaded view), MMS, Email, Push Mail, IM\r\nBrowser 	HTML5\r\nJava 	No\r\n 	- Fast battery charging: 60% in 30 min (Quick Charge 2.0)\r\n- Wireless charging (Qi/PMA) - market dependent\r\n- ANT+ support\r\n- S-Voice natural language commands and dictation\r\n- OneDrive (115 GB cloud storage)\r\n- Active noise cancellation with dedicated mic\r\n- MP4/DivX/XviD/WMV/H.264 player\r\n- MP3/WAV/WMA/eAAC+/FLAC player\r\n- Photo/video editor\r\n- Document editor\r\nBattery 	  	Non-removable Li-Ion 3600 mAh battery\r\nTalk time 	Up to 27 h (3G)\r\nMusic play 	Up to 74 h\r\nMisc 	Colors 	Black, White, Gold, Silver, Pink Gold\r\nSAR US 	1.17 W/kg (head)     1.59 W/kg (body)    \r\nSAR EU 	0.26 W/kg (head)     0.51 W/kg (body)    \r\nPrice group 	9/10\r\nTests 	Performance 	Basemark OS II: 2107 / Basemark OS II 2.0: 2050\r\nBasemark X: 28480\r\nDisplay 	Contrast ratio: Infinite (nominal), 4.439 (sunlight)\r\nCamera 	Photo / Video\r\nLoudspeaker 	Voice 66dB / Noise 62dB / Ring 66dB\r\nAudio quality 	Noise -92.5dB / Crosstalk -92.2dB\r\nBattery life 	\r\nEndurance rating 98h', 'Samsung Galaxy Edge 7', 699, 'Fingerprint, accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2\r\nSMS(threaded view), MMS, Email, Push Mail, IM\r\n- Fast battery charging: 60% in 30 min (Quick Charge 2.0)\r\n- Wireless charging (Qi/PMA) - market dependent\r\n- ANT+ support\r\n- S-Voice natural language commands and dictation\r\n- OneDrive (115 GB cloud storage)\r\n- Active noise cancellation with dedicated mic\r\n- MP4/DivX/XviD/WMV/H.264 player\r\n- MP3/WAV/WMA/eAAC+/FLAC player\r\n- Photo/video editor\r\n- Document editor', 89),
(7, 'webpage/Images/shopItems/phones/apple-iphone-6-plus-1.jpg', 'Apple', 'Network 	Technology 	\r\n		GSM / CDMA / HSPA / EVDO / LTE\r\n		Launch 	Announced 	2014, September\r\n		Status 	Available. Released 2014, September\r\n		Body 	Dimensions 	158.1 x 77.8 x 7.1 mm (6.22 x 3.06 x 0.28 in)\r\n		Weight 	172 g (6.07 oz)\r\n		SIM 	Nano-SIM\r\n 		- Apple Pay (Visa, MasterCard, AMEX certified)\r\nDisplay 	Type 	LED-backlit IPS LCD, capacitive touchscreen, 16M colors\r\n		Size 	5.5 inches (~67.8% screen-to-body ratio)\r\n		Resolution 	1080 x 1920 pixels (~401 ppi pixel density)\r\n		Multitouch 	Yes\r\n		Protection 	Ion-strengthened glass, oleophobic coating\r\n 		- Display Zoom\r\n		Platform 	OS 	iOS 8, upgradable to iOS 9.3.2\r\nChipset 	Apple A8\r\n		CPU 	Dual-core 1.4 GHz Typhoon (ARM v8-based)\r\n		GPU 	PowerVR GX6450 (quad-core graphics)\r\nMemory 	Card 	slot 	No\r\n		Internal 	16/64/128 GB, 1 GB RAM DDR3\r\nCamera 		Primary 	8 MP, f/2.2, 29mm, phase detection autofocus, OIS, dual-LED (dual tone) flash, check quality\r\n		Features 	1/3" sensor size, 1.5 µm pixel size, touch focus, geo-tagging, face/smile detection, HDR (photo/panorama)\r\n		Video 	1080p@60fps, 720p@240fps, check quality\r\n		Secondary 	1.2 MP, f/2.2, 31mm, 720p@30fps, face detection, HDR, FaceTime over Wi-Fi or Cellular\r\nSound 		Alert types 	Vibration, proprietary ringtones\r\n		Loudspeaker 	Yes\r\n		3.5mm jack 	Yes\r\n 		- 16-bit/44.1kHz audio\r\nComms 		WLAN 	Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot\r\nBluetooth 	v4.0, A2DP, LE\r\nGPS 		Yes, with A-GPS, GLONASS\r\nNFC 		Yes (Apple Pay only)\r\nRadio 		No\r\nUSB 		v2.0, reversible connector\r\nFeatures 	Sensors 	Fingerprint, accelerometer, gyro, proximity, compass, barometer\r\n		Messaging 	iMessage, SMS (threaded view), MMS, Email, Push Email\r\n		Browser 	HTML5 (Safari)\r\n		Java 	No\r\n 		- Active noise cancellation with dedicated mic\r\n		- Siri natural language commands and dictation\r\n		- iCloud cloud service\r\n		- MP3/WAV/AAX+/AIFF/Apple Lossless player\r\n		- MP4/H.264 player\r\n		- Audio/video/photo editor\r\n		- Document editor\r\nBattery   	Non-removable Li-Po 2915 mAh battery (11.1 Wh)\r\n			Stand-by 	Up to 384 h (3G)\r\n		Talk time 	Up to 24 h (3G)\r\n		Music play 	Up to 80 h\r\n		Misc 	Colors 	Space Gray, Silver, Gold\r\n		SAR US 	1.19 W/kg (head)     1.19 W/kg (body)    \r\n		SAR EU 	0.99 W/kg (head)     0.91 W/kg (body)    \r\n		Price group 	9/10\r\n', 'Iphone 6 Plus', 799, 'GSM / CDMA / HSPA / EVDO / LTE\r\nLaunch 	Announced 	2014, September\r\nStatus 	Available. Released 2014, September\r\nBody 	Dimensions 	158.1 x 77.8 x 7.1 mm\r\n (6.22 x 3.06 x 0.28 in)\r\nWeight 	172 g (6.07 oz)\r\nSIM 	Nano-SIM\r\nApple Pay (Visa, MasterCard, AMEX certified)', 99),
(8, 'webpage/Images/shopItems/phones/apple-iphone-se-00.jpg', 'Apple', 'Network 	Technology 	\r\n		GSM / CDMA / HSPA / EVDO / LTE\r\n		Launch 	Announced 	2016, March\r\n		Status 	Available. Released 2016, March\r\n		Body 	Dimensions 	123.8 x 58.6 x 7.6 mm (4.87 x 2.31 x 0.30 in)\r\n		Weight 	113 g (3.99 oz)\r\n		SIM 	Nano-SIM\r\n 		 Apple Pay (Visa, MasterCard, AMEX certified)\r\nDisplay 	Type 	LED-backlit IPS LCD, capacitive touchscreen, 16M colors\r\n		Size 	4.0 inches (~60.8% screen-to-body ratio)\r\n		Resolution 	640 x 1136 pixels (~326 ppi pixel density)\r\n		Multitouch 	Yes\r\n		Platform 	OS 	iOS 9.3.2\r\nChipset 	Apple A9\r\n		CPU 	Dual-core 1.84 GHz Twister\r\n		GPU 	PowerVR GT7600 (six-core graphics)\r\nMemory 		Card slot 	No\r\n		Internal 	16/64 GB, 2 GB RAM\r\nCamera 		Primary 	12 MP, f/2.2, 29mm, phase detection autofocus, dual-LED (dual tone) flash, check quality\r\nFeatures 	1/3" sensor size, 1.22 µm pixel size, geo-tagging, simultaneous 4K video and 8MP image recording, touch focus, face/smile detection, HDR (photo/panorama)\r\n		Video 	2160p@30fps, 1080p@30/60fps, 1080p@120fps, 720p@240fps, check quality\r\n		Secondary 	1.2 MP, f/2.4, 31mm, 720p@30fps, face detection, HDR, FaceTime over Wi-Fi or Cellular\r\nSound 		Alert types 	Vibration, proprietary ringtones\r\n		Loudspeaker 	Yes\r\n		3.5mm jack 	Yes\r\n 		- 16-bit/44.1kHz audio\r\nComms 		WLAN 	Wi-Fi 802.11 a/b/g/n/ac, hotspot\r\n		Bluetooth 	v4.2, A2DP, LE\r\n		GPS 	Yes, with A-GPS, GLONASS\r\n		NFC 	Yes (Apple Pay only)\r\n		Radio 	No\r\n		USB 	v2.0, reversible connector\r\nFeatures 	Sensors 	Fingerprint, accelerometer, gyro, proximity, compass\r\n		Messaging 	iMessage, SMS (threaded view), MMS, Email, Push Email\r\n		Browser 	HTML5 (Safari)\r\nJava 		No\r\n 		- Active noise cancellation with dedicated mic\r\n		- Siri natural language commands and dictation\r\n		- iCloud cloud service\r\n		- MP3/WAV/AAX+/AIFF/Apple Lossless player\r\n		- MP4/H.264 player\r\n		- Audio/video/photo editor\r\n		- Document editor\r\nBattery 	  	Non-removable Li-Po 1624 mAh battery (6.21 Wh)\r\n		Stand-by 	Up to 240 h (2G) / Up to 240 h (3G)\r\n		Talk time 	Up to 14 h (3G)\r\n		Music play 	Up to 50 h\r\nMisc 		Colors 	Space Gray, Silver, Gold, Rose Gold\r\n		SAR US 	1.17 W/kg (head)     1.19 W/kg (body)    \r\n		SAR EU 	0.97 W/kg (head)     0.99 W/kg (body)    \r\n		Price group 	8/10', 'Iphone 5SE', 499, 'Launch 	Announced 	2016, March\r\nStatus 	Available. Released 2016, March\r\nBody 	Dimensions 	123.8 x 58.6 x 7.6\r\n mm (4.87 x 2.31 x 0.30 in)\r\nWeight 	113 g (3.99 oz)\r\nSIM 	Nano-SIM\r\n Apple Pay (Visa, MasterCard, AMEX certified)', 98);

-- --------------------------------------------------------

--
-- Table structure for table `products_plans`
--

CREATE TABLE IF NOT EXISTS `products_plans` (
`id` int(11) NOT NULL,
  `image_dir` text NOT NULL,
  `make` varchar(255) NOT NULL,
  `minute_` varchar(255) NOT NULL,
  `model` text NOT NULL,
  `price_` int(111) NOT NULL,
  `text_` varchar(255) NOT NULL,
  `data_` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_plans`
--

INSERT INTO `products_plans` (`id`, `image_dir`, `make`, `minute_`, `model`, `price_`, `text_`, `data_`) VALUES
(1, 'webpage/Images/individualplan_icon.gif', 'YourCellular', 'Unlimited', 'PayPerGo', 20, 'Unlimited', '2'),
(2, 'webpage/Images/familyplan_icon.gif', 'YourCellular', 'Unlimited', 'SuperSaver', 30, 'Unlimited', '6'),
(3, 'webpage/Images/payasyougo_icon.gif', 'YourCellular', 'Unlimited', 'Ultimate', 60, 'Unlimited', '60');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_id`, `password`, `email`) VALUES
(40, 'Abdullah', 'Shaief', 'what', '®£Ä\rXnl­–z	­Œ¿', 'amq_shaief@yahoo.com'),
(41, 'Abdullah', 'Shaief', 'shaief', '®£Ä\rXnl­–z	­Œ¿', 'abshaief@gmail.com'),
(44, 'Rahat', 'Chowdhury', 'rahat107', 'M!1®ndß¿kÙü@…', 'c.rahat@rocketmail.com'),
(45, 'rafe', 'rahman', 'rafe_rahman', 'GÅ¬Ëô%«åðf]¾H', 'txt@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_process`
--
ALTER TABLE `order_process`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products_accessories`
--
ALTER TABLE `products_accessories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_phone`
--
ALTER TABLE `products_phone`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_plans`
--
ALTER TABLE `products_plans`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_process`
--
ALTER TABLE `order_process`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products_accessories`
--
ALTER TABLE `products_accessories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products_phone`
--
ALTER TABLE `products_phone`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products_plans`
--
ALTER TABLE `products_plans`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
