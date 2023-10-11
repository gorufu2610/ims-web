-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 02:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `ims_file`
--

CREATE TABLE `ims_file` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `img` text NOT NULL,
  `headline` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ims_file`
--

INSERT INTO `ims_file` (`id`, `subject`, `details`, `img`, `headline`) VALUES
(28, 'Assassin’s Creed Mirage เปิดตัวได้สวยในตลาดสหราชอาณาจักร', 'ความสำเร็จอย่างต่อเนื่องของเกมกีฬาค่าย EA นั้นไม่ใช่เรื่องน่าแปลกใจอะไร เพราะในฝั่งตะวันตก ไม่ว่าเกม FIFA(หรือปัจจุบันเปลี่ยนเป็นชื่อเกมว่า EA Sport แล้ว) จะออกวางขายกี่ภาค ตัวเกมก็ยังได้รับความนิยมอย่างล้นหลามอยู่เสมอ ซึ่งมองแล้วก็นับว่า Assassin\'s Creed Mirage ทำผลงานได้น่าพอใจ\r\n\r\nในส่วนของอันดับอื่นๆ นั้น Mario Kart 8 Deluxe และ Hogwarts Legacy ครองอันดับที่ 4 และ 5 ไว้ได้ ในขณะที่ Mortal Kombat 1 ตกจากอันดับ 2 ไปที่อันดับ 8 ส่วนอันดับเกมขายดีทั้ง 10 อันดับจะมีเกมอะไรบ้างนั้น เราเรียงไว้ให้ด้านล่างครับ\r\n\r\nEA Sports FC 24\r\nAssassin\'s Creed: Mirage\r\nDetective Pikachu Returns\r\nMario Kart 8 Deluxe\r\nHogwarts Legacy\r\nCall of Duty: Modern Warfare 2\r\nStar Wars Jedi: Survivor\r\nMortal Kombat 1\r\nMinecraft (Nintendo Switch)\r\nThe Legend of Zelda: Tears of the Kingdom\r\nAssassin’s Creed Mirage วางขายแล้ววันนี้บนแพลตฟอร์ม PlayStation 5, PlayStation 4, Xbox One, Xbox Series, iOS, และ PC บนร้านค้า Steam', 'Screenshot 2023-10-11 180749.jpg', 'จากข้อมูของเว็บไซต์ Game Industry ระบุข้อมูลจำนวนการขายของเกมในประเทศเครือสหราชอาณาจักร สรุปออกมาเป็นชาร์ท 10 เกมด้วยกัน โดยเกม Assassin’s Creed Mirage เกมแฟรนไชส์นักฆ่าไต่ตึกภาคล่าสุดของค่าย Ubisoft เปิดตัวได้สวย แม้จะน่าเสียดายที่ทำได้ที่อันดับที่ 2 เท่'),
(29, 'ทีมงาน Final Fantasy 7 Rebirth ไขข้อกระจ่าง ความหมายของ Artwork และโลโก้เกม', 'Square Enix ได้ปล่อยข้อมูลใหม่ของเกม Final Fantasy 7 Rebirth ผ่านแอคเคาท์ทวิตเตอร์ หรือ X ของเกมโดยอธิบายถึงที่มาที่ไป และความหมายของอาร์ตเวิร์คของเกมที่จะกลายเป็นภาพปกของกล่องเกมด้วย ซึ่งจากปากคำของผู้กำกับศิลป์ของเกมอย่างคุณ Tetsuya Nomura ตัวอาร์ตเวิร์คนี้นำเสนอโลกที่แตกต่างกันทั้งสามใบของตัวละคร Cloud, Sephiroth, และ Zack ที่ซึ่งพวกเขาใช้ชีวิตอยู่ โดยจากที่ Square Enix ระบุไว้นั้นการที่ Cloud และ Zack ยืนอยู่ที่ด้านข้างสองฝั่งของภาพอาร์ตของเกม Final Fantasy 7 Rebirth นั้นสื่อถึงการที่โชคชะตาของทั้งสองคนต้องถูกฉีกกระชากออกจากกันเพราะผลลัพธ์จากการกระทำของตัวร้ายหลักของเกมอย่าง Sephiroth โดยสีของท้องฟ้าด้านหลังของทั้งคู่นั้นสื่อถึงเปลวเพลิงและเลือด อันเป็นผลมาจากการกระทำของ Sephiroth ด้วย ซึ่งทางสตูดิโอผู้สร้างนั้นระบุไว้ว่าเฉดสีแดงที่ขอบด้านล่างของตัวโลโก้เกมก็สื่อถึงธีมเรื่องราวในลักษณะเดียวกันนี้เอง\r\n\r\nข้อมูลก่อนหน้านี้ ทางผู้กำกับ Naoki Hamaguchi ได้เปิดเผยว่าตัวเกมจะต้องการพื้นที่ติดตั้งมากถึง 150GB และจำนวนแผ่นเกมที่มีให้ของเกมภาคนี้ต้องใช้มากถึงสองแผ่น Blu-ray ด้วยกัน\r\n\r\nFinal Fantasy 7 Rebirth กำหนดการวางขายในวันที่ 29 กุมภาพันธ์ปีหน้า และจะเป็นเกม Exclusive แบบจำกัดวันบนแพลตฟอร์ม Playstation 5 (และยังไม่ได้กำหนดไว้ว่าจะลงให้กับแพลตฟอร์มอื่นในวันไหนหลังวางขาย) ', '2.jpg', 'Square Enix ได้ปล่อยข้อมูลใหม่ของเกม Final Fantasy 7 Rebirth ผ่านแอคเคาท์ทวิตเตอร์ หรือ X ของเกมโดยอธิบายถึงที่มาที่ไป และความหมายของอาร์ตเวิร์คของเกมที่จะกลายเป็นภาพปกของกล่องเกมด้วย'),
(30, 'เปิดตัว Playstation 5 Slim รุ่นใหม่บางกว่า น้ำหนักเบากว่าเดิม', 'Sony Interactive Entertainment ประกาศเปิดตัวเครื่องเกม Playstation 5 รุ่นใหม่ที่บางกว่าเดิม แต่ยังคงประสิทธิภาพการเล่นที่ทรงพลังเหมือนเดิมทั้งแบบมีเครื่องอ่านแผ่นและไม่มี โดยจะวางขายที่แรกในประเทศสหรัฐอเมริกาก่อน แล้วจากนั้นจะวางขายทั่วโลกภายหลัง โดยตอนนี้มีวันที่วางขายแน่นอนในญี่ปุ่นแล้วโดยจะเป็นวันที่ 10 พฤศจิกายน\r\n\r\nPlaystation 5 โมเดลใหม่นี้จะลดขนา่ดของตัวเครื่องลงประมาณ 30 เปอร์เซ็นต์ ส่งผลให้น้ำหนักของเครื่องโดยรวมลดลงไปประมาณ 18 เปอร์เซ็นต์ (สำหรับรุ่นมาตรฐาน) และ 24 เปอร์เซ็นต์ (สำหรับรุ่นไม่มีที่อ่านแผ่น) เมื่อเทียบกับเครื่องรุ่นก่อนหน้านี้ และนอกจากฟีเจอร์มาตรฐานทั้งหมดมาครบแล้ว เครื่องยังได้รับดีไซน์ใหม่บางส่วน และอัพเกรดพื้นที่จุข้อมูลของเครื่องขึ้นเป็น 1 TB ด้วย', 'Screenshot 2023-10-11 182731.jpg', 'Sony Interactive Entertainment ประกาศเปิดตัวเครื่องเกม Playstation 5 รุ่นใหม่ที่บางกว่าเดิม'),
(31, 'จริงจังไปหน่อย 2 ตำรวจติดเกม Pokémon Go จนไม่ได้ตามจับคนร้าย', 'เหตุการณ์ดังกล่าวนี้เกิดขึ้นมานานแล้วตั้งแต่คดีเมื่อปี 2017 แล้ว ซึ่งเป็นช่วงที่เกม Pokémon Go กำลังได้รับความนิยมมาก เพียงแต่ตอนนี้เพิ่งจะปล่อยคลิปที่ถ่ายไว้ออกมาเผยแพร่จนเป็นข่าว เพราะคลิปดังกล่าวมีการถูกใช้ในชั้นศาลระหว่างการสู้คดีเมื่อช่วงปีที่ผ่านมา เหตุการณ์ดังกล่าวเกิดขึ้นในระหว่างที่สองนายตำรวจ Louis Lozano และ Eric Mitchell ได้รับมอบหมายให้ไล่ตามล่าคนร้าย ที่ขับรถฝ่าด่านหลบหนี แต่สองนายตำรวจนี้กลับไม่ขับรถตามรถคนร้าย กลับขับรถออกนอกเส้นทางไปไล่จับโปเกมอน Snorlax และ Togetic แทน แถมยังโกหกเหตุผลที่ขับรถออกนอกเส้นทางด้วย จนโดนจับได้และถูกไล่ออกในปีต่อมา\r\n\r\nอย่างไรก็ตามแม้ว่าจะไม่มีคลิปวิดีโอหลักฐานนี้ แต่นายตำรวจระดับสูงก็สงสัยในการกระทำของทั้งคู่อยู่แล้ว เพราะว่าไม่ยอมตอบวิทยุสื่อสารเลยนานถึงกว่า 40 นาที ในช่วงที่ทำภารกิจ ก็เลยมีการตามสืบหาสาเหตุจนรู้ความจริง และที่ต้องไล่ทั้งคู่ออก เพราะทั้งคู่ไม่เพียงละเว้นการปฏิบัติหน้าที่เท่านั้น แต่ยังโกหกอีกด้วย', 'Screenshot 2023-10-11 182854.jpg', 'การมุ่งมั่นทำอะไรบางอย่างจนเกินไปบางทีก็ทำให้เราขาดสติหรือไม่มีสมาธิไปทำอย่างอื่นได้ เช่นเดียวกับสองเจ้าหน้าที่ตำรวจของเมืองลอสแองเจลิส ที่มัวแต่จับโปเกมอนในเกม Pokémon Go จนไม่สนใจภารกิจให้ช่วยไล่ตามจับคนร้าย ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ims_file`
--
ALTER TABLE `ims_file`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ims_file`
--
ALTER TABLE `ims_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
