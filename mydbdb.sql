-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 08:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydbdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DisplayAllJobs` ()  NO SQL
select jobs.job_id as job_id, jobs.employer_id as employer_id,jobs.jobTitle as jobTitle,jobtype.jobtype as jobtype,qualification.qualification as qualification,deadline,salaryrange.salaryrange as salary from jobs join jobtype on jobtype.jobtype_id=jobs.jobType join qualification on qualification.qualification_id=jobs.qualification join salaryrange on salaryrange.salaryrange_id = jobs.salary order by job_id desc$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `created_at`) VALUES
(34, 'Accounting / Finance', '2020-02-25 08:43:53'),
(35, 'Health Care', '2020-02-25 08:44:02'),
(36, 'Garments / Textile', '2020-02-25 08:44:08'),
(37, 'Telecommunication', '2020-02-25 08:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `employer_id` int(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employer_id`, `emailaddress`, `password`, `created_at`) VALUES
(15, 'tyler@gmail.com', 'tyler', '2020-02-21 19:20:36'),
(16, 'kim@gmail.com', 'kim', '2020-02-21 19:20:36'),
(17, 'foul@gmail.com', 'FOUL', '2020-02-22 17:40:37'),
(18, 'bony@gmail.com', 'bony', '2020-02-22 20:22:08'),
(19, 'boss@gmail.com', 'boss', '2020-02-25 10:09:14'),
(20, 'damon@gmail.com', 'damon', '2020-03-07 02:06:21'),
(22, 'johndoe@gmail.com', 'johndoe', '2020-03-09 02:39:38'),
(23, 'neil@gmail.com', 'neil', '2020-03-10 22:25:08');

--
-- Triggers `employer`
--
DELIMITER $$
CREATE TRIGGER `employer_default_profile` AFTER INSERT ON `employer` FOR EACH ROW BEGIN 
INSERT INTO employer_profile (`employer_id`) VALUES (NEW.employer_id); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employer_profile`
--

CREATE TABLE `employer_profile` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `companyname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `aboutus` text NOT NULL,
  `videolink` varchar(255) NOT NULL,
  `imagesource` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_profile`
--

INSERT INTO `employer_profile` (`id`, `employer_id`, `image`, `companyname`, `phone`, `address`, `category`, `aboutus`, `videolink`, `imagesource`, `created_at`) VALUES
(19, 15, 'proposal.png', 'tyler', '9999', '    Cebu', 'UI designer', '   hehejfghjkdfghj dfghyuidfghj', 'okfsdadfxcvbgmjmnbgfdas', '', '2020-03-10 07:42:51'),
(20, 16, NULL, 'kim', '', '', '', '', '', '', '2020-02-25 18:34:04'),
(21, 17, 'proposal.png', 'kim', '9999', ' Cebu', 'ui', ' ', 'hehe', '', '2020-02-22 17:41:15'),
(22, 18, 'proposal.png', 'Bony ', '', '   ', '', '   ', '', '', '2020-02-22 20:23:47'),
(23, 19, NULL, '', '', '', '', '', '', '', '2020-02-25 10:09:14'),
(24, 20, NULL, 'rftgyhujk', '', ' ', '', ' ', '', '', '2020-03-07 02:07:10'),
(26, 22, NULL, '', '', '', '', '', '', '', '2020-03-09 02:39:38'),
(27, 23, NULL, '', '', '', '', '', '', '', '2020-03-10 22:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(11) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`experience_id`, `experience`, `created_at`) VALUES
(3, 'Less than 1 Year', '2020-02-25 08:54:25'),
(4, '2 Year', '2020-02-25 08:56:05'),
(5, '3 Year', '2020-02-25 08:56:10'),
(6, '4 Year', '2020-02-25 08:56:21'),
(7, 'Over 5 Year', '2020-02-25 08:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `freelancer_id` int(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`freelancer_id`, `emailaddress`, `password`, `created_at`) VALUES
(1, 'janedoe@gmail.com', 'janedoe', 2147483647),
(2, 'boss@gmail.com', 'boss', 2147483647),
(3, 'johndoe@gmail.com', 'johndoe', 2147483647),
(4, 'emily@gmail.com', 'emily', 2147483647),
(6, 'neil@gmail.com', 'neil', 2147483647),
(7, 'bony@gmail.com', 'bony', 2147483647);

--
-- Triggers `freelancer`
--
DELIMITER $$
CREATE TRIGGER `freelancer_default_profile` AFTER INSERT ON `freelancer` FOR EACH ROW BEGIN 
INSERT INTO freelancer_profile (`freelancer_id`) VALUES (NEW.freelancer_id);
INSERT INTO resume (`freelancer_id`) VALUES (NEW.freelancer_id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_profile`
--

CREATE TABLE `freelancer_profile` (
  `id` int(255) NOT NULL,
  `freelancer_id` int(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `expertise` varchar(255) DEFAULT NULL,
  `aboutme` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelancer_profile`
--

INSERT INTO `freelancer_profile` (`id`, `freelancer_id`, `image`, `firstname`, `lastname`, `phone`, `address`, `expertise`, `aboutme`, `created_at`) VALUES
(1, 3, 'ERD using Dia Example.jpg', 'John', 'Doe', ' 09090909', 'Washington D.C', 'UI & UX Designer', 'I am pretty.', '2020-03-09 02:40:20'),
(2, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 09:15:33'),
(4, 6, 'proposal.png', 'neil', 'neil', '767', 'asdas', 'sd', ' sdfsdf', '2020-03-10 22:25:43'),
(5, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 22:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender`, `created_at`) VALUES
(1, 'Male', '2020-02-25 09:17:07'),
(3, 'Female', '2020-02-25 09:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplication`
--

CREATE TABLE `jobapplication` (
  `id` int(11) NOT NULL,
  `employer_id` int(255) NOT NULL,
  `freelancer_id` int(255) NOT NULL,
  `job_id` int(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `contactinfo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobapplication`
--

INSERT INTO `jobapplication` (`id`, `employer_id`, `freelancer_id`, `job_id`, `subject`, `message`, `contactinfo`, `created_at`) VALUES
(51, 0, 3, 134, 'sadas', 'ghjhjgMessage', 'gjhbmContact Info', '2020-03-10 03:29:50'),
(52, 0, 3, 134, 'sfsdf', 'dasdaMessage', 'sdfsdfContact Info', '2020-03-10 04:03:26'),
(53, 0, 3, 134, 'sfsdf', 'dasdaMessage', 'sdfsdfContact Info', '2020-03-10 04:03:59'),
(54, 0, 3, 134, 'sfsdf', 'dasdaMessage', 'sdfsdfContact Info', '2020-03-10 04:11:28'),
(55, 0, 3, 134, 'sfsdf', 'dasdaMessage', 'sdfsdfContact Info', '2020-03-10 04:12:11'),
(56, 0, 3, 134, 'sfsdf', 'dasdaMessage', 'sdfsdfContact Info', '2020-03-10 04:17:34'),
(57, 0, 3, 134, 'sfsdf', 'dasdaMessage', 'sdfsdfContact Info', '2020-03-10 04:18:37'),
(58, 0, 3, 134, 'hhghg', 'hgjhg', 'dasdsads', '2020-03-10 04:19:40'),
(59, 0, 3, 134, 'hhghg', 'hgjhg', 'dasdsads', '2020-03-10 04:20:42'),
(60, 0, 3, 134, 'hhghg', 'hgjhg', 'dasdsads', '2020-03-10 04:20:48'),
(61, 0, 3, 134, 'hhghg', 'hgjhg', 'dasdsads', '2020-03-10 04:21:03'),
(62, 0, 3, 138, 'dasd', 'kjhkMessage', 'hjhkjContact Info', '2020-03-10 04:32:10'),
(63, 0, 3, 138, 'dasd', 'kjhkMessage', 'hjhkjContact Info', '2020-03-10 04:33:41'),
(64, 0, 3, 133, 'dasdsad', 'Messagedsadsadsad', 'sadsadsadsad', '2020-03-10 04:54:43'),
(65, 0, 1, 136, 'sadsada', 'sadsad', 'sdcsf', '2020-03-10 05:15:52'),
(66, 0, 1, 138, 'asdsadjha', 'jasdhasd', 'sjdhsjh', '2020-03-10 05:16:35'),
(67, 0, 3, 138, 'hghjg', 'gfhgf', 'dgsda', '2020-03-10 05:18:14'),
(68, 0, 1, 133, 'hghfjkl', 'Message', 'ghjklContact Info', '2020-03-10 05:19:34'),
(69, 0, 2, 138, 'sdasdas', 'jhgjhMessage', 'gghContact Info', '2020-03-10 05:25:14'),
(70, 0, 6, 139, 'kim', 'Messagesadas', 'Contact Infosadas', '2020-03-10 22:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(255) NOT NULL,
  `employer_id` int(255) NOT NULL,
  `jobTitle` varchar(255) DEFAULT NULL,
  `jobCategory` varchar(255) DEFAULT NULL,
  `jobType` varchar(255) DEFAULT NULL,
  `salary` int(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `qualification` varchar(9999) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `vacancy` int(255) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `jobDescription` varchar(255) DEFAULT NULL,
  `Responsibilities` text DEFAULT NULL,
  `education` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `employer_id`, `jobTitle`, `jobCategory`, `jobType`, `salary`, `experience`, `qualification`, `gender`, `vacancy`, `deadline`, `jobDescription`, `Responsibilities`, `education`, `created_at`) VALUES
(133, 15, 'bbbbb End Developer', '36', '4', 2, '5', '2', '3', 4, '2020-02-12', '<p><em><span style=\"text-decoration: underline;\"><strong>Green</strong></span></em></p>', '<ul>\r\n<li>Blue</li>\r\n<li>Violet</li>\r\n<li>Purple</li>\r\n</ul>', '<ol>\r\n<li>Pink</li>\r\n<li>Red</li>\r\n<li>Magenta</li>\r\n<li>Cyan</li>\r\n</ol>', '2020-03-10 22:22:36'),
(134, 16, 'UI Designer', '34', '2', 3, '7', '1', '1', 3, '2020-02-26', '', '', '', '2020-02-25 17:55:56'),
(135, 15, 'Full Stack Developer', '35', '2', 2, '3', '1', '3', 5, '2020-02-27', '', '', '', '2020-02-27 11:04:57'),
(136, 15, 'Singer', '35', '2', 3, '4', '1', '3', 8, '2020-12-31', '<p>Bluer than blue.</p>', '<ul>\r\n<li>Bluer than blue.</li>\r\n<li>Green</li>\r\n<li>Pink</li>\r\n</ul>', '<ol>\r\n<li>kim&nbsp;</li>\r\n</ol>\r\n<p>Bluer than blue.</p>', '2020-02-27 11:35:24'),
(138, 15, 'Front End Developer', '37', '3', 2, '4', '1', '1', 23, '2020-03-19', '<ol>\r\n<li>sAS</li>\r\n</ol>', '', '', '2020-03-10 22:22:06'),
(139, 15, 'ui DESIGNER', '36', '3', 2, '4', '1', '1', 23, '2020-03-13', '<ul>\r\n<li>QWEQWEQ</li>\r\n<li>QWEQW</li>\r\n<li>DSAD</li>\r\n</ul>', '<p>DASD</p>', '<p>ASDASD</p>', '2020-03-10 22:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `jobtype`
--

CREATE TABLE `jobtype` (
  `jobtype_id` int(11) NOT NULL,
  `jobtype` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobtype`
--

INSERT INTO `jobtype` (`jobtype_id`, `jobtype`, `created_at`) VALUES
(2, 'Part Time', '2020-02-25 09:07:49'),
(3, 'Full Time', '2020-02-25 09:07:55'),
(4, 'Temporary', '2020-02-25 09:08:06'),
(5, 'Permanent', '2020-02-25 09:08:12'),
(6, 'Freelance', '2020-02-25 09:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qualification_id` int(11) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qualification_id`, `qualification`, `created_at`) VALUES
(1, 'Beginner', '2020-02-25 17:32:48'),
(2, 'Intermediate', '2020-02-25 17:32:49'),
(3, 'Expert', '2020-02-25 17:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `resume_id` int(255) NOT NULL,
  `freelancer_id` int(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `salaryrange` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `education_background` text DEFAULT NULL,
  `work_experience` text DEFAULT NULL,
  `professional_skill` text DEFAULT NULL,
  `special_qualification` text DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`resume_id`, `freelancer_id`, `category`, `location`, `status`, `experience`, `salaryrange`, `gender`, `age`, `qualification`, `education_background`, `work_experience`, `professional_skill`, `special_qualification`, `birthdate`, `nationality`, `created_at`) VALUES
(1, 4, 'UI & UX Designer', 'Philippines,6000', 'Full Time', '5 Years Above', '$3 - $5/hr', 'Male', 34, 'Intermediate', '<p>sadsa</p>', '<p>sadsa</p>', '<p>sadsad</p>', '<p>sadsadas</p>', '2020-03-10', 'filipino', '2020-03-10 09:15:33'),
(2, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 17:25:05'),
(3, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 22:25:43'),
(4, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 22:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `salaryrange`
--

CREATE TABLE `salaryrange` (
  `salaryrange_id` int(11) NOT NULL,
  `salaryrange` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salaryrange`
--

INSERT INTO `salaryrange` (`salaryrange_id`, `salaryrange`, `created_at`) VALUES
(2, 'Less than $5', '2020-02-25 09:13:00'),
(3, '$5 - $10', '2020-02-25 09:13:15'),
(4, 'More than $10', '2020-02-25 09:13:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `employer_profile`
--
ALTER TABLE `employer_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employer_id` (`employer_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`freelancer_id`);

--
-- Indexes for table `freelancer_profile`
--
ALTER TABLE `freelancer_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `jobapplication`
--
ALTER TABLE `jobapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `jobtype`
--
ALTER TABLE `jobtype`
  ADD PRIMARY KEY (`jobtype_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qualification_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `salaryrange`
--
ALTER TABLE `salaryrange`
  ADD PRIMARY KEY (`salaryrange_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `employer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employer_profile`
--
ALTER TABLE `employer_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `freelancer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `freelancer_profile`
--
ALTER TABLE `freelancer_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobapplication`
--
ALTER TABLE `jobapplication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `jobtype`
--
ALTER TABLE `jobtype`
  MODIFY `jobtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qualification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resume_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salaryrange`
--
ALTER TABLE `salaryrange`
  MODIFY `salaryrange_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employer_profile`
--
ALTER TABLE `employer_profile`
  ADD CONSTRAINT `employer_id` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`employer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
