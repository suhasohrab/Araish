-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 10:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_user_name` varchar(10) NOT NULL,
  `admin_pass` varchar(8) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_user_name`, `admin_pass`, `useremail`, `image_dir`) VALUES
('admin', '123', 'admin@gmail.com', 'images/admin_pro.png');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `cart_added` datetime DEFAULT curdate(),
  `user_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `pro_id`, `cart_added`, `user_name`) VALUES
(3, 5, '2021-06-06 00:00:00', 'amir'),
(8, 4, '2021-06-07 00:00:00', 'amir'),
(9, 14, '2021-06-07 00:00:00', 'amir'),
(10, 7, '2021-06-07 00:00:00', 'amir'),
(48, 8, '2021-06-14 00:00:00', 'zeb'),
(58, 3, '2021-06-14 00:00:00', 'zeb'),
(60, 1, '2021-06-14 00:00:00', 'zeb'),
(64, 7, '2021-06-14 00:00:00', 'zeb'),
(66, 15, '2021-06-17 00:00:00', 'zeb'),
(77, 15, '2022-07-13 00:00:00', 'afzalhumaa@gmail.com'),
(78, 15, '2022-07-13 00:00:00', 'afzalhumaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `e_wallet`
--

CREATE TABLE `e_wallet` (
  `wallet_id` int(10) NOT NULL,
  `balance` double NOT NULL,
  `total_withdraw` double NOT NULL,
  `reward_amount` double DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_wallet`
--

INSERT INTO `e_wallet` (`wallet_id`, `balance`, `total_withdraw`, `reward_amount`, `user_email`, `image_dir`) VALUES
(1, 0, 0, 250, 'l@gmail.com', NULL),
(2, 0, 0, 0, 'r@gmail.com', NULL),
(3, 0, 0, 0, 'h@gmail.com', NULL),
(4, 0, 0, 0, 'amir@gmail.com', NULL),
(5, 0, 0, 0, 'sabir@gmail.com', NULL),
(6, 0, 0, 0, 'new@gmail.com', NULL),
(7, 0, 0, 0, 'tempo@tempMail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `online_chat`
--

CREATE TABLE `online_chat` (
  `chat_id` int(10) NOT NULL,
  `customer_messege` varchar(255) NOT NULL,
  `moderator_reply` varchar(255) DEFAULT NULL,
  `moderatormod_user_id` int(10) DEFAULT NULL,
  `chat_created_date` date NOT NULL,
  `time` time DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_chat`
--

INSERT INTO `online_chat` (`chat_id`, `customer_messege`, `moderator_reply`, `moderatormod_user_id`, `chat_created_date`, `time`, `user_email`, `image_dir`) VALUES
(1, 'hello', NULL, NULL, '2020-09-27', '11:29:44', 'azhn@gmail.com', NULL),
(2, 'Is there any one ? i need help ? ', 'Assalamualaikum ? how can help you ? ', NULL, '2020-09-27', '11:55:58', 'azhn@gmail.com', NULL),
(3, 'My product is not good, it is broken .', 'Can you send me the order no ? ', NULL, '2020-09-27', '12:24:55', 'azhn@gmail.com', NULL),
(4, 'Order no: 234242. please give get the product as fast as possible. I need it fast.  ', 'ok. I forwarded the order to the refund department.they will contact you. Is there anything more i can do .!', NULL, '2020-09-27', '12:34:18', 'azhn@gmail.com', NULL),
(5, 'Thank you. I got their call. ', NULL, NULL, '2020-09-27', '01:18:37', 'azhn@gmail.com', NULL),
(6, 'Thank you again working ', NULL, NULL, '2020-09-27', '02:33:19', 'azhn@gmail.com', NULL),
(7, 'Hello. Is there any one', NULL, NULL, '2020-09-28', '12:33:17', 'l@gmail.com', NULL),
(8, 'Ok. ', NULL, NULL, '2020-09-28', '12:33:43', 'l@gmail.com', NULL),
(9, 'Hello ; ', NULL, NULL, '2020-09-28', '12:46:47', 'r@gmail.com', NULL),
(10, 'hi', NULL, NULL, '2020-09-28', '01:01:17', 'h@gmail.com', NULL),
(11, 'Hello, is anyone there?', NULL, NULL, '2020-09-28', '11:54:08', 'azhn@gmail.com', NULL),
(12, 'Hello', NULL, NULL, '2020-09-29', '07:06:04', 'azhn@gmail.com', NULL),
(13, 'hi', NULL, NULL, '2020-09-29', '11:35:42', 'azhn@gmail.com', NULL),
(14, 'hi', NULL, NULL, '2020-09-29', '11:43:54', 'azhn@gmail.com', NULL),
(15, 'hi', NULL, NULL, '2020-09-29', '12:03:13', 'azhn@gmail.com', NULL),
(16, 'hi', NULL, NULL, '2020-09-29', '12:10:20', 'azhn@gmail.com', NULL),
(17, '                        jhiojl', NULL, NULL, '2021-06-08', '09:43:47', 'amir', NULL),
(18, '                        ok', NULL, NULL, '2021-06-08', '09:45:23', 'amir', NULL),
(19, 'jkj kj', NULL, NULL, '2021-06-08', '09:50:23', 'amir', NULL),
(20, '555', NULL, NULL, '2021-06-17', '11:56:01', 'zeb', NULL),
(21, '                        jhnmn', NULL, NULL, '2021-06-17', '11:56:08', 'zeb', NULL),
(22, '                 hi\r\n       ', NULL, NULL, '2022-07-12', '07:14:15', 'afzalhumaa@gmail.com', NULL),
(23, '                       okay', NULL, NULL, '2022-07-12', '07:14:27', 'afzalhumaa@gmail.com', NULL),
(24, '                        okay', NULL, NULL, '2022-07-12', '07:14:33', 'afzalhumaa@gmail.com', NULL),
(25, '                        ', NULL, NULL, '2022-07-12', '07:14:34', 'afzalhumaa@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `order_id` int(11) NOT NULL,
  `ordered_by` varchar(50) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_cat` varchar(30) NOT NULL,
  `pro_quantity` int(11) NOT NULL,
  `pro_total_amount` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `ordered_by_user_email` varchar(50) NOT NULL,
  `order_total_amouont` double NOT NULL,
  `order_total_quantity` int(10) NOT NULL,
  `order_date` datetime NOT NULL,
  `cart_id` int(10) NOT NULL,
  `product_ids_list` varchar(300) NOT NULL,
  `cart_addede_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(20) DEFAULT 'placed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `ordered_by_user_email`, `order_total_amouont`, `order_total_quantity`, `order_date`, `cart_id`, `product_ids_list`, `cart_addede_datetime`, `order_status`) VALUES
(2, 'azhn@gmail.com', 850, 3, '2020-09-27 05:41:04', 4, ' 0, 13, 15, 2', '2020-09-30 04:36:54', 'Delivered'),
(4, 'azhn@gmail.com', 1625, 5, '2020-09-27 06:00:15', 9, ' 0, 15, 14, 13, 10, 9', '2020-09-29 02:13:39', 'Delivered'),
(5, 'azhn@gmail.com', 935, 4, '2020-09-26 07:03:21', 12, ' 0, 14, 10, 9, 1', '2020-10-01 03:29:29', 'Delivered'),
(6, 'l@gmail.com', 600, 3, '2020-09-28 12:28:36', 16, ' 0, 3, 12, 7', '2020-09-29 05:54:28', 'Delivered'),
(7, 'r@gmail.com', 1075, 3, '2020-09-28 12:47:55', 19, ' 0, 3, 5, 4', '2020-10-01 03:29:33', 'Delivered'),
(8, 'azhn@gmail.com', 475, 2, '2020-09-28 09:55:03', 37, ' 0, 14, 2', '2020-09-29 06:14:22', 'Delivered'),
(9, 'azhn@gmail.com', 475, 2, '2020-09-28 10:49:53', 37, ' 0, 14, 2', '2022-07-13 12:18:12', 'Delivered'),
(10, 'azhn@gmail.com', 1455, 5, '2020-09-29 11:50:43', 54, ' 0, 8, 3, 13, 17, 15', '2021-02-20 15:38:53', 'Delivered'),
(24, 'zeb', 380, 2, '2021-06-14 10:27:49', 47, ' 0, 17, 4', '2021-06-13 18:00:00', 'placed'),
(25, 'afzalhumaa@gmail.com', 725, 2, '2022-07-12 06:03:07', 70, ' 0, 3, 5', '2022-07-11 19:00:00', 'placed');

-- --------------------------------------------------------

--
-- Table structure for table `porduct_sales`
--

CREATE TABLE `porduct_sales` (
  `name` char(1) DEFAULT NULL,
  `counts` decimal(10,0) DEFAULT NULL,
  `details` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `published_date` date NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `post_cat` varchar(20) NOT NULL,
  `topic_name` varchar(50) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `published_date`, `author_name`, `post_cat`, `topic_name`, `details`, `image_dir`) VALUES
(1, '2022-08-01', 'Newchapter.com', 'blogs', '22 Health and Wellness Tips for 2022', 'Health and Wellness Tips for 2022:\n1. Exercise\nRegular\n2. Drink Water Regularly\n3. Track Your Fitness\n4. Take a Multivitamin\n5. Stand Up Every 30 Minutes While Working\n6. Get Outside\n7. Drink Smoothies\n8.Get enough sleep\n9. Choose Organic Foods When Possible\n10. Practice Gratitude Journaling\n11. Read Books\n12. Eat More Fruits and Vegetables\n13. Fix Your Posture\n14. Take a Daily Probiotic\n15. Get Vaccinated\n16. Minimize Your Sugar Intake\n17. Meditate\n18. Listen to Music\n19. Spend Time with Friends and Family\n20. Put Down Electronics\n20. Put Down Electronics\n21. Adopt a Hobby\n22. Organize Your Days', 'images/Posts/blog1.jpg'),
(2, '2020-09-29', 'World Health Organization', 'blogs', '10 Tips for Healthy Teeth & Gums', 'Brushing and flossing are staples in a good dental routine. However, there are other things you can do to help maintain healthy teeth and gums, which will benefit your overall wellbeing.\n1) BRUSH YOUR TEETH TWICE A DAY FOR TWO MINUTES EACH TIME\n2. FLOSS DAILY.\n3. REPLACE YOUR TOOTHBRUSH AT THE SIGNS OF WEAR.\n4. VISIT YOUR DENTIST EVERY SIX MONTHS.\n5. MAINTAIN A HEALTHY DIET.\n6. USE DENTAL HYGIENE PRODUCTS.\n7. KEEP HYDRATED THROUGHOUT THE DAY.\n8. DON\'T SMOKE.\n9. CONSIDER DENTAL SEALANTS.\n10. REGULARLY EXAMINE THE INSIDE OF YOUR MOUTH AT HOME.', 'images/Posts/blog4.jpg'),
(3, '2020-09-29', 'World Health Organization', 'healthcare', 'What are the benefits of Sanitation?', 'Benefits of improving sanitation\nextend well beyond reducing the risk of diarrhoea. These include:\n\nreducing the spread of intestinal worms, schistosomiasis and trachoma, which are neglected tropical diseases that cause suffering for millions;\nreducing the severity and impact of malnutrition;\npromoting dignity and boosting safety, particularly among women and girls;\npromoting school attendance: girls’ school attendance is particularly boosted by the provision of separate sanitary facilities;\nreducing the spread of antimicrobial resistance;\npotential recovery of water, renewable energy and nutrients from faecal waste; and\npotential to mitigate water scarcity through safe use of wastewater for irrigation especially in areas most affected by climate change.', 'images/Posts/sani.jpg'),
(4, '2022-08-01', 'Admin', 'offer', '10% off for every new customer!', '10% for every new customer. Orders that exceed 2000 limit are applicable.', 'images/Posts/blog3.jpeg'),
(5, '2020-09-29', 'everydayhealth.com', 'blogs', 'A Guide to Good Personal Hygiene', 'If you want to minimize your risk of infection and also enhance your overall health, follow these basic personal hygiene habits:\n\nBathe regularly. Wash your body and your hair often. “I’m not saying that you need to shower or bathe every day,” remarks Dr. Novey. “But you should clean your body and shampoo your hair at regular intervals that work for you.” Your body is constantly shedding skin. Novey explains, “That skin needs to come off. Otherwise, it will cake up and can cause illnesses.”\nTrim your nails. Keeping your finger and toenails trimmed and in good shape will prevent problems such as hang nails and infected nail beds. Feet that are clean and dry are less likely to contract athlete’s foot, Novey says.\nBrush and floss. Ideally, you should brush your teeth after every meal. At the very least, brush your teeth twice a day and floss daily. Brushing minimizes the accumulation of bacteria in your mouth, which can cause tooth decay and gum disease, Novey says. Flossing, too, helps m', 'images/Posts/blog5.jpg'),
(6, '0000-00-00', 'World Health Organization', 'blogs', 'Medicines to Keep at Home', 'Minor illness and mild aches or pains are common. It is useful to keep a few medicines at home in case you need something when you can\'t get to a pharmacy. Always read the labels carefully and follow the instructions, and store the medicines out of the reach of children.\r\n1) Paracetamol\r\n2) Anti-inflammatory painkillers\r\n3) Antihistamines\r\n4) Antacids\r\n5) Hydrocortisone cream\r\n6) Antiseptic cream\r\n7) Bonjela\r\n8) Steri-strips\r\n9) Sunnyplast\r\n10) pair of tweezers ', 'images/Posts/blog6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_name` varchar(50) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `quantity_stored` int(10) DEFAULT NULL,
  `quatity_sold` int(10) DEFAULT NULL,
  `price_per_unit` double NOT NULL,
  `pro_cat` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `disease_name` varchar(255) DEFAULT NULL,
  `image_blob` blob DEFAULT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_name`, `pro_id`, `quantity_stored`, `quatity_sold`, `price_per_unit`, `pro_cat`, `details`, `brand`, `disease_name`, `image_blob`, `image_dir`) VALUES
('Dettol ', 2, 55, 5, 20, 'healthcare', 'very popular Soap', 'Dettol', 'none', 0x6e6f6e65, 'images/Products/dettolSoap.jpg'),
('Dettol Handwash', 2, 155, 50, 125, 'healthcare', 'Anti-bactarial soap', 'Dettol', 'none', 0x6e6f6e65, 'images/image7.jpg'),
('Face Mask', 3, 25, 50, 250, 'healthcare', ' worn by health professionals during healthcare procedures', 'Henry', 'none', 0x6e6f6e65, 'images/image8.jpg'),
('Dettol Hand Sanitizer', 4, 24, 50, 350, 'healthcare', 'Anti-bactarial', 'Dettol', 'none', 0x6e6f6e65, 'images/image4.jpg'),
('SNAZII', 5, 45, 50, 475, 'healthcare', 'Foot health', 'SNAZII', 'none', 0x6e6f6e65, 'images/image10.jpg'),
('Baby food', 6, 30, 5, 335, 'babycare', 'Food for baby', 'Yellow', 'none', 0x6e6f6e65, 'images/image20.jpg'),
('Nido', 7, 145, 50, 225, 'babycare', 'Food for baby', 'NIDO', 'none', 0x6e6f6e65, 'images/image14.jpg'),
('Water pot', 8, 25, 50, 450, 'babycare', 'Mask', 'Henry', 'none', 0x6e6f6e65, 'images/image17.jpg'),
('Yellow baby food jar', 9, 24, 50, 350, 'babycare', 'Baby food jar', 'Yellow', 'none', 0x6e6f6e65, 'images/image18.jpg'),
('Pampers', 10, 20, 50, 200, 'babycare', 'for babies', 'Pampers', 'none', 0x6e6f6e65, 'images/image16.jpg'),
('Oral Gel', 11, 30, 5, 35, 'medicine', 'gel spray', 'Oral', 'none', 0x6e6f6e65, 'images/image6.jpg'),
('Chestal', 12, 145, 50, 125, 'medicine', 'medicine for cough', 'Chestal', 'none', 0x6e6f6e65, 'images/image21.jpg'),
('Dropper bottle', 13, 25, 50, 250, 'medicine', 'dropper', 'Drop', 'none', 0x6e6f6e65, 'images/image22.jpg'),
('Esticof-LVP', 14, 24, 50, 350, 'medicine', 'very popular worldwide', 'LVP', 'none', 0x6e6f6e65, 'images/image23.jpg'),
('Telfast', 15, 45, 50, 475, 'medicine', 'very popular worldwide', 'Telfast', 'none', 0x6e6f6e65, 'images/image24.jpg'),
('Baby Carriage', 16, 10, 5, 1700, 'babycare', 'A baby carriage by RFL.', 'RFL', NULL, NULL, 'images/Products/cart2.png'),
('Piriteze', 17, 30, 5, 100, 'medicine', 'A medicine, Brand unknown.', 'Unknown', 'Unknown', NULL, 'images/Products/image26.jpg'),
('Napa Tablet', 18, 40, 0, 100, 'medicine', 'A well known medicine for cold and fever', 'Beximco', NULL, NULL, 'images/Products/dhjbpbof5u4zavj99q9g.jpg'),
('Napa Extend', 19, 25, 0, 100, 'medicine', 'A well known medicine for cold and fever', 'Beximco', 'Fever', NULL, 'images/Products/dhjbpbof5u4zavj99q9g.jpg'),
('Hami Baby Food', 20, 30, 0, 85, 'babycare', 'A baby food from Hami.', 'Hami', NULL, NULL, 'images/Products/ee.jpg'),
('Fosa', 21, 100, 0, 2383, 'healthcare', 'It is used to prevent and treat certain types of bone loss (osteoporosis) in adults', ' OBS Pakistan Pvt. Ltd.', NULL, NULL, 'images/Products/200px-Fosamax.gif'),
('Cool & Cool Nursing Pads Hygienic With Ultra Absor', 23, 20, 0, 720, 'babycare', 'The present product is also for the best benefit of breast feeding mothers. The cool and cool baby nursing pads are simpler enough in usage.  All you have to do is to remove to adhesive tapes and insert the ultra-soft breathable nursing pad in the underga', 'Cool&Cool', NULL, NULL, 'images/Products/Nursing Pad.webp'),
('PREGNANCY TEST STRIP FA SINGLE', 24, 20, 0, 66.5, 'healthcare', 'First Answer Pregnancy Test strip is intended for use by adult women. It helps to detect the hormone level that is responsible for pregnancy detection. In pregnancy the sooner you get to know that you have conceived, the better it is. This test gives 99.9', 'BRIGHT VISION', NULL, NULL, 'images/Products/strip.webp'),
('Always Thicks Sanitary Pads Extra Long Trio Pack 2', 25, 20, 0, 649, 'healthcare', 'Up to 100% dryness & comfort even when you move, with our patented Mesh topsheet Mesh top sheet keeping wetness away from skin Anti-leakage barriers in the front, back, and center Provides up to 100 percent dryness and comfort Extra-absorbent core instant', 'P&G', NULL, NULL, 'images/Products/always.jpg'),
('Avent Natural Single Electric Breast Pump SCF332/0', 26, 20, 0, 38995, 'healthcare', 'When you are comfortable and relaxed, your milk flows more easily. That is why we created our most comfortable breast pump yet: Sit comfortably with no need to lean forward and let our soft massage cushion gently stimulate your milk flow.', 'Avent', NULL, NULL, 'images/Products/avent.jpg'),
('Avent Soothing Nipple Cream 30ml', 27, 20, 0, 2220, 'healthcare', 'Moisturises and softens dry or sensitive nipples. Easy to apply and no need to remove before breastfeeding.', 'Avent', NULL, NULL, 'images/Products/avent-soothing.jpg'),
('Butterfly Breathable Extra Large', 28, 20, 0, 300, 'healthcare', 'Prepare to leave no stone unturned even on your heaviest flow days with our Maxi Thick range! Super absorbent, comfortable, and of course, breathable - Butterfly Breathables Maxi Thick is the answer to any period-related concerns!  Dry Mesh Top Sheet Brea', 'Santex', NULL, NULL, 'images/Products/butter.png'),
('Meiji Mamilac Powdered Milk 350g', 29, 20, 0, 1370, 'healthcare', 'Meiji Powder Milk Mamilac contains DHA which is essential for the growth & development of Eye & Brain. It also Fortifies Folic Acid which prevents neural tube defects in infants.', 'Meiji', NULL, NULL, 'images/Products/meiji.jpg'),
('Panasonic 3 In 1 Wet/Dry Epilator, ES-EU20-P', 30, 20, 0, 9000, 'healthcare', ' Panasonic 3 in 1 Wet/Dry Epilator, ES-EU20-P', 'Panasonic', NULL, NULL, 'images/Products/ep.png'),
('Always Feminine Wipes-To-Go Fresh & Clean Wipes, 2', 31, 20, 0, 980, 'healthcare', 'Always Feminine Wipes-To-Go Fresh & Clean Wipes, 20-Pack', 'Always', NULL, NULL, 'images/Products/alwayssss.jfif'),
('Panadol', 32, 20, 0, 300, 'medicine', 'This medicine is used to treat mild to moderate pain (from headaches, menstrual periods, toothaches, backaches, osteoarthritis, or cold/flu aches and pains) and to reduce fever.', 'GSK Consumer Healthcare', 'Fever', NULL, 'images/Products/panadoll.jpg'),
('Gillette Venus Smooth Cartridges, 4-Pack', 33, 20, 0, 1950, 'healthcare', 'Provides a clean and secure hair removal experience Gives a close, smooth and fine shaving results Convenient, quick and easy shaving Comes with a soft-grip gel handle Compatible refills – fits all Venus razor handles (except Simply Venus) Available in 4-', 'Gillette', NULL, NULL, 'images/Products/venus.jpg'),
('Strepsils Comfort Orignal', 34, 20, 0, 90, 'medicine', 'Strepsils offers relief for all types of sore throats. Even if your sore throat has become too painful, there is a solution that Strepsils can offer you for fast and targeted relief.', 'Reckitt', NULL, NULL, 'images/Products/strepsils.jpg'),
('Voltral Emulgel', 35, 20, 0, 280, 'medicine', 'Voltral Emulgel 1% gel', 'GSK Consumer Healthcare', 'backpain', NULL, 'images/Products/voltral.jpg'),
('Baby Feeder', 36, 20, 0, 200, 'babycare', 'Baby Bottle', 'China', NULL, NULL, 'images/Products/bottle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE `refund` (
  `id` int(10) NOT NULL,
  `request_refund` varchar(1000) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `admin_reply` varchar(255) DEFAULT NULL,
  `admin_user_name` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refund`
--

INSERT INTO `refund` (`id`, `request_refund`, `user_email`, `status`, `admin_reply`, `admin_user_name`) VALUES
(3, 'A wrong product was delivered, I want refund', 'azhn@gmail.com', 'applied', NULL, NULL),
(7, 'order id: 5\r\nI mistakenly ordered some products, now I would like to refund.', 'azhn@gmail.com', 'applied', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upload_prescription`
--

CREATE TABLE `upload_prescription` (
  `image_dir` varchar(255) NOT NULL,
  `id` int(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `up_date` date NOT NULL,
  `order_details` varchar(255) DEFAULT NULL,
  `user_email_moderator` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_prescription`
--

INSERT INTO `upload_prescription` (`image_dir`, `id`, `user_email`, `up_date`, `order_details`, `user_email_moderator`) VALUES
('images/prescription.jpg', 6, 'r@gmail.com ', '2020-09-28', NULL, NULL),
('images/open_reading_frame.jpg', 11, 'zeb ', '2021-06-17', NULL, NULL),
('images/c3af2fec150a7842fb26d92799d163b2.jpg', 28, 'zeb ', '2021-06-18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(20) DEFAULT curdate(),
  `address` varchar(200) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_joined` varchar(15) DEFAULT curdate(),
  `user_cat` varchar(20) NOT NULL,
  `image_dir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`Name`, `email`, `dob`, `address`, `phone_number`, `user_name`, `password`, `date_joined`, `user_cat`, `image_dir`) VALUES
('Henry', 'h@gmail.com', '2021-10-20', 'Texux,US', '01155215151', 'Hen', 'hen123', '2020-09-28', 'customer', 'images/Users/admin_pro.png'),
('Leemon', 'l@gmail.com', '1998-09-23', 'Vatara,Gulshan 2,Dhaka', '01180976200', 'lee', 'lee1234', '2020-09-27', 'customer', 'images/e92338a85fbc158105aa0f18e0008a2e.png'),
('Muzna Askari', 'muzuzuzu@gmail.com', '01-12-1997', 'Karachi', '000000', 'zeb', '121', '2020-09-25', 'moderator', 'images/Users/icon10.jpg'),
('user1', 'new@gmail.com', '2020-09-16', 'New Market', '01231231232', 'new', '123', '2020-09-29', 'customer', 'images/cart1.png'),
('Sabir', 'sabir@gmail.com', '2020-09-05', 'Sylhet', '01231231232', 'sabir', 'sabir01', '2020-09-29', 'customer', 'images/Users/icon3.jpg'),
('Suha Sohrab', 'suha@gmail.com', '00000', 'Karachi', '000000', 'amir', 'amir', '2020-09-29', 'moderator', 'images/Users/icon2.jpg'),
('Temporary Name', 'tempo@tempMail.com', '2021-06-05', 'temp address', '9384332222', 'tempUser', 'tempPass', '2021-06-05', 'customer', 'images/fb_bnw.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_user_name`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_wallet`
--
ALTER TABLE `e_wallet`
  ADD PRIMARY KEY (`wallet_id`,`user_email`);

--
-- Indexes for table `online_chat`
--
ALTER TABLE `online_chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `refund`
--
ALTER TABLE `refund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_prescription`
--
ALTER TABLE `upload_prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `e_wallet`
--
ALTER TABLE `e_wallet`
  MODIFY `wallet_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `online_chat`
--
ALTER TABLE `online_chat`
  MODIFY `chat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `refund`
--
ALTER TABLE `refund`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `upload_prescription`
--
ALTER TABLE `upload_prescription`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
