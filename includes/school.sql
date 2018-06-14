-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 08:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deafsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `sch_id` int(3) NOT NULL,
  `sch_name` varchar(160) NOT NULL,
  `sch_address` varchar(150) NOT NULL,
  `sch_type` varchar(15) NOT NULL,
  `sch_ownership` int(2) NOT NULL COMMENT '0 = private; 1 = public',
  `sch_level` varchar(4) NOT NULL COMMENT 'P = primary, S = secondary, PS = primary and secondary; JS= junior secondary; SS = senior secondary; NPS = Nursery, Primary and Secondary; C = College; NP = Nursery/Primary',
  `sch_state` varchar(12) NOT NULL,
  `sch_visibility` int(11) NOT NULL COMMENT '0 means the school has not been approved to be visible in search results. 1 means otherwise.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`sch_id`, `sch_name`, `sch_address`, `sch_type`, `sch_ownership`, `sch_level`, `sch_state`, `sch_visibility`) VALUES
(2, 'Special Education Center for the Deaf', '', 'Specialized ', 0, '', 'Abia State', 1),
(3, 'Special School for the Deaf', 'Kuje, Abuja', 'Specialized ', 0, 'P', 'Abuja', 1),
(4, 'Junior Secondary School, Pasali', 'Kuje, Abuja', 'Mainstream', 0, 'JS', 'Abuja', 1),
(5, 'Government Secondary School', 'Kuje, Abuja', 'Mainstream', 0, 'S', 'Abuja', 1),
(6, 'Stella Obasanjo, Child Care Trust for the Deaf and LD', 'Bwari, FCT, Abuja.', 'Inclusive', 0, 'P', 'Abuja', 1),
(7, 'Special Education Center Jada ', 'Jada, Adamawa ', 'Specialized ', 0, 'NP', 'Adamawa', 1),
(8, 'School for special needs children', 'Remi,Yola South Adamawa ', 'Specialized ', 0, 'PS', 'Adamawa', 1),
(9, 'Special Education Center', 'Mubi, Adamawa ', 'Specialized ', 0, 'NPS', 'Adamawa', 1),
(10, 'St. Vincent de Paul', 'AdiahaObong, Uyo', 'Inclusive', 0, 'NP', 'Akwa Ibom', 1),
(11, 'Special Education Center ', 'Mbiaobong, Uyo', 'Inclusive', 0, 'PS', 'Akwa Ibom', 1),
(12, 'Special Education Center', 'Oron Road, Uyo', 'Specialized ', 0, 'P', 'Akwa Ibom', 1),
(13, 'St. Louise Special School', 'Ikot Ekpene.', 'Inclusive', 0, 'NPS', 'Akwa Ibom', 1),
(14, 'Special Education Center', 'Yelwa Lebura', 'Specialized ', 0, 'PS', 'Bauchi', 1),
(15, 'CEFN Special School ', 'Onyepa, Otukpo', 'Specialized ', 0, '', 'Benue', 1),
(16, 'Special Needs Education', 'Lamisula, Maiduguri', 'Specialized ', 0, 'PS', 'Borno', 1),
(17, 'Hillcrest JSpecial Needs School', 'Calabar', '', 0, 'P', 'Cross River ', 1),
(18, 'Hillcrest SSpecial Needs School', 'Calabar', '', 0, 'S', 'Cross River ', 1),
(19, 'Greenland Schools', 'Calabar', 'Mainstream', 0, 'S', 'Cross River ', 1),
(20, 'Ministry of Education Special Education Center', 'Calabar', 'Specialized ', 0, 'PS', 'Cross River ', 1),
(21, 'Alderstown School for the Deaf', 'Warri', 'Specialized ', 0, 'P', 'Delta', 1),
(22, 'Ekiti State School for the Deaf ', 'Ikoro', 'Specialized ', 0, 'PS', 'Ekiti', 1),
(23, 'EVAMI Special School ', 'Plot R8 Ozubulu Str. Industrial Layout, Enugu', 'Inclusive', 0, 'P', 'Enugu', 1),
(24, 'Special Education Center', 'Gombe', 'Specialized ', 0, 'PS', 'Gombe', 1),
(25, 'School for the Hearing Impairment ', 'Kalatungo', 'Specialized ', 0, 'PS', 'Gombe', 1),
(26, 'School for the Hearing Impairment ', 'Billiri', 'Specialized ', 0, 'PS', 'Gombe', 1),
(27, 'Secondary School for the Deaf ', 'Ofekata, Orodo', 'Specialized ', 0, 'S', 'Imo', 1),
(28, 'School for the Deaf and Mentally Challenged', 'Orlu', 'Inclusive', 0, 'P', 'Imo', 1),
(29, 'Special Education Center', 'Owerri', 'Specialized ', 0, 'P', 'Imo', 1),
(30, 'School for the Hearing Impaired ', '', 'Specialized ', 0, 'PS', 'Jigawa', 1),
(31, 'Special Education School [KASSES].', 'G.G.S.S Independence Way, Kaduna', 'Specialized ', 0, '', 'Kaduna', 1),
(32, 'Demonstration School for Deaf Children ', 'Kawo', 'Specialized ', 0, 'P', 'Kaduna', 1),
(33, 'Special Education Center Kafanchan', 'Kafanchan', 'Specialized ', 0, '', 'Kaduna', 1),
(34, 'Tundun Maliki School for the Deaf', 'Tundun Maliki', 'Specialized ', 0, 'S', 'Kano', 1),
(35, 'Special Education school ', 'K/BukiyyaDala, Kano ', 'Specialized ', 0, 'PS', 'Kano', 1),
(36, 'Special Education School', 'Kura', 'Specialized ', 0, 'PS', 'Kano', 1),
(37, 'Special Education School for the Deaf', 'Nassarawa', 'Specialized ', 0, 'PS', 'Kano', 1),
(38, 'Special Education Primary School for the Deaf ', 'Dambatta', 'Mainstream', 0, 'P', 'Kano', 1),
(39, 'Usman International School and Special Education Center', 'Kano', 'Specialized ', 0, 'PS', 'Kano', 1),
(40, 'Habiba International Academy school for the Deaf ', 'Naibawa', 'Specialized ', 0, 'PS', 'Kano', 1),
(41, 'Special Education School for the Deaf ', 'Rano', 'Specialized ', 0, '', 'Kano', 1),
(42, 'Daura school for the Deaf Katsina', 'Daura', 'Specialized ', 0, '', 'Katsina', 1),
(43, 'Emir School for the Deaf ', 'Katsina', 'Specialized ', 0, '', 'Katsina', 1),
(44, 'Jibia school for the Deaf ', 'Jibia', 'Specialized ', 0, '', 'Katsina', 1),
(45, 'Government School for the Deaf ', 'Malumfashi', 'Specialized ', 0, '', 'Katsina', 1),
(46, 'School for Special Needs', 'TudunBuzuBirnin ', 'Specialized ', 0, 'PS', 'Kebbi', 1),
(47, 'Christian Mission in Many Lands (CMML) Special School ', 'Iyale,Anyigba', 'Specialized ', 0, 'P', 'Kogi', 1),
(48, 'KwaraState School for Special Needs', '', 'Specialized ', 0, '', 'Kwara', 1),
(49, 'Jevarom Nur. &Pri. School', 'Keffi', 'Inclusive', 0, 'NP', 'Nassarawa', 1),
(50, 'Mada Hills Secondary School', 'Akwanga', 'Mainstream', 0, 'S', 'Nassarawa', 1),
(51, 'Abdu Zanga Primary School', 'Keffi', 'Mainstream', 0, 'P', 'Nassarawa', 1),
(52, 'School for Special Needs ', 'Nassarawa', 'Specialized ', 0, '', 'Nassarawa', 1),
(53, 'Duglu School for the Deaf ', 'Duduguru Obi ', 'Specialized ', 0, '', 'Nassarawa', 1),
(54, 'School for Children with Special Needs', 'Ijebu-Ode ', 'Inclusive', 0, 'P', 'Ogun', 1),
(55, 'Adeola Odutola College', 'Ijebu-Ode ', 'Mainstream', 0, 'C', 'Ogun', 1),
(56, 'School for Children with Special Needs', 'Ilaro and Abeokuta', 'Inclusive', 0, 'S', 'Ogun', 1),
(57, 'Yewa College', 'Ilaro', 'Mainstream', 0, 'S', 'Ogun', 1),
(58, 'St. Peters College', 'Olomoro, Abeokuta', 'Mainstream', 0, 'S', 'Ogun', 1),
(59, 'Ondo State Schoolfor the Hearing Impaired, ', 'Old Stadium Rd. Akure', 'Specialized ', 0, 'PS', 'Ondo', 1),
(60, 'Andrew Foster School for the Deaf (Christian Mission School for the Deaf)', 'Onireke,Ibadan', 'Specialized ', 0, 'NPS', 'Oyo', 1),
(61, 'Ibadan School for the Deaf', 'Ibadan', 'Specialized ', 0, 'PS', 'Oyo', 1),
(62, 'Baptist Secondary School ', 'Ibadan', 'Mainstream', 0, 'S', 'Oyo', 1),
(63, 'Ijokodo High School', 'Polytechnic Road Ibadan, Ibadan', 'Mainstream', 0, 'S', 'Oyo', 1),
(64, 'HLA Primary School for the Handicapped', 'Agodi gate, Ibadan', 'Inclusive', 0, 'P', 'Oyo', 1),
(65, 'Oyo State School for the Deaf ', 'Eruwa', '', 0, '', 'Oyo', 1),
(66, 'School for the Deaf', 'Saki', '', 0, '', 'Oyo', 1),
(67, 'Community Handicapped School for the Deaf', 'Ogbomosho', 'Specialized ', 0, 'PS', 'Oyo', 1),
(68, 'Plateau State School for the Deaf', 'Bassa', 'Specialized ', 0, 'S', 'Plateau', 1),
(69, 'Model Teaching Center', 'Jos North', '', 0, '', 'Plateau', 1),
(70, 'Otana Disabilities Integrated Center', 'OtanaHouse,Jos North', 'Inclusive', 0, '', 'Plateau', 1),
(71, 'Isiamiya Primary School, Jos, Deaf/blind Unit', 'Achi Road,Jos', 'Inclusive', 0, '', 'Plateau', 1),
(72, 'Ganka International School of Inclusive Education ', 'Zaria Road, Jos', 'Mainstream', 0, '', 'Plateau', 1),
(73, 'Special Heart Royal Academy', 'Woji, Port Harcourt', 'Inclusive', 0, 'P', 'Rivers', 1),
(74, 'Link Visual Academy', 'Elelenwo, Port Harcourt', 'Inclusive', 0, 'P', 'Rivers', 1),
(75, 'Special Education School for the Deaf ', 'Sokoto', 'Specialized ', 0, '', 'Sokoto', 1),
(76, 'Abdulrasheed Adisa Raji Special School ', 'Sokoto', 'Specialized ', 0, '', 'Sokoto', 1),
(77, 'Special Education Center', 'PotiskumYobe', 'Specialized ', 0, '', 'Yobe', 1),
(78, 'School for Special Education ', 'Tudun Wada Gusau', 'Specialized ', 0, '', 'Zamfara', 1),
(79, 'Amosun Primary School', 'Agege', 'Mainstream', 0, 'P', 'Lagos', 1),
(80, 'Oore Ofe Primary School', 'Dopemu, Agege', 'Mainstream', 0, 'P', 'Lagos', 1),
(81, 'Sanngo Junior Secondary School', 'Agege', 'Mainstream', 0, 'JS', 'Lagos', 1),
(82, 'Anglican Primary School', 'Ajeromi/Ifelodun ', 'Mainstream', 0, 'P', 'Lagos', 1),
(83, 'L.G Primary School', 'Igando,Alimosho', 'Mainstream', 0, 'P', 'Lagos', 1),
(84, 'Oki Primary School', 'Iyana-Ipaja', 'Mainstream', 0, 'P', 'Lagos', 1),
(85, 'Amuwo-Odofin Primary School', 'Miles 2, Amuwo-Odofin ', 'Mainstream', 0, 'P', 'Lagos', 1),
(86, 'Central Primary School', 'Festac, Amuwo-Odofin ', 'Mainstream', 0, 'P', 'Lagos', 1),
(87, 'Methodist Primary School', 'Apapa', 'Mainstream', 0, 'P', 'Lagos', 1),
(88, 'Sari Iganmu Primary School', 'Apapa', 'Mainstream', 0, 'P', 'Lagos', 1),
(89, 'Muslim Primary School', 'Badagry', 'Mainstream', 0, 'P', 'Lagos', 1),
(90, 'L.A Primary School', 'Ajara, Badagry', 'Mainstream', 0, 'P', 'Lagos', 1),
(91, 'Methodist Junior/Senior High School', 'Badagry', 'Mainstream', 0, 'S', 'Lagos', 1),
(92, 'Ansa UdDeen Primary School', 'Epe', 'Mainstream', 0, 'P', 'Lagos', 1),
(93, 'Methodist Primary School', 'Agbowa', 'Mainstream', 0, 'P', 'Lagos', 1),
(94, 'Lagos State Model College', 'Epe', 'Mainstream', 0, 'C', 'Lagos', 1),
(95, 'Army Children''s School', 'Bonny Camp, Eti-Osa', 'Mainstream', 0, '', 'Lagos', 1),
(96, 'Addo Primary School', 'Eti-Osa', 'Mainstream', 0, 'P', 'Lagos', 1),
(97, 'Roman Catholic Mission Primary School', 'Okunraye, Ijebu Lekki', 'Mainstream', 0, 'P', 'Lagos', 1),
(99, 'All Saints P School', 'Iju Road, Ifako', 'Mainstream', 0, 'P', 'Lagos', 1),
(100, 'New Oko-Oba Primary School', 'Fagba', 'Mainstream', 0, 'P', 'Lagos', 1),
(101, 'Bola Memorial Primary School', 'Ikeja', 'Mainstream', 0, 'P', 'Lagos', 1),
(102, 'Ikeja Junior High School ', 'Ikeja', 'Mainstream', 0, 'JS', 'Lagos', 1),
(103, 'Ikeja Senior High School, ', 'Ikeja', 'Mainstream', 0, 'SS', 'Lagos', 1),
(104, 'Estate Primary School', 'Estate, Ogba', 'Mainstream', 0, 'P', 'Lagos', 1),
(105, 'Local government Primary School', 'Ipakodo', 'Mainstream', 0, 'P', 'Lagos', 1),
(106, 'Ipakodo Junior High School', 'Ipakodo', 'Mainstream', 0, 'JS', 'Lagos', 1),
(107, 'Ipakodo Senior High School', 'Ipakodo', 'Mainstream', 0, 'SS', 'Lagos', 1),
(108, 'Maryland Children Primary School', 'Kosofe', 'Mainstream', 0, 'P', 'Lagos', 1),
(109, 'GRA Primary School', 'Kosofe', 'Mainstream', 0, 'P', 'Lagos', 1),
(110, 'Ereko Methodist Primary School', 'Lagos Island', 'Mainstream', 0, 'P', 'Lagos', 1),
(111, 'Saint Joseph Primary School', 'Elegbata, Lagos Island', 'Mainstream', 0, 'P', 'Lagos', 1),
(112, 'Ojuwoye Community Primary School', 'Mushin ', 'Mainstream', 0, 'P', 'Lagos', 1),
(113, 'Olisa Primary School Papa-Ajao', 'Mushin ', 'Mainstream', 0, 'P', 'Lagos', 1),
(114, 'Aganju-Aka Primary School', 'Okoko, Ojo ', 'Mainstream', 0, 'P', 'Lagos', 1),
(115, 'Community Pimary School', 'Ajangbandi', 'Mainstream', 0, 'P', 'Lagos', 1),
(116, 'Central Primary School', 'Oshodi', 'Mainstream', 0, 'P', 'Lagos', 1),
(117, 'Wesley Primary School 1 for the Deaf', 'Surulere', 'Mainstream', 0, 'P', 'Lagos', 1),
(118, 'Wesley Primary School 2 for the Deaf', 'Surulere', 'Mainstream', 0, 'P', 'Lagos', 1),
(119, 'State Junior Grammar School', 'Itolo, Surulere', 'Mainstream', 0, 'P', 'Lagos', 1),
(120, 'State Senior Grammar Schoo', 'Itolo, Surulere', 'Mainstream', 0, 'P', 'Lagos', 1),
(121, 'Safrel Speech and Language Development Centre', 'Ikorodu', 'Mainstream', 0, 'P', 'Lagos', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`sch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `sch_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
