-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 03:04 AM
-- Server version: 10.3.37-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spcccsne_spc_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_token`
--

CREATE TABLE `access_token` (
  `token_id` int(11) NOT NULL,
  `access_token` varchar(75) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `access_token`
--

INSERT INTO `access_token` (`token_id`, `access_token`, `user_id`) VALUES
(373, '8ebhcrqdvl7xwyf6iz41j2p3msntk9u50gao', 31),
(374, 'zm7l5h9kyputix1eq3onb48w2fjad0sc6rgv', 32),
(375, '1j5mf0p3r8z9kobscqyaxhlv4iwg2nude7t6', 32),
(376, 'qhr792y1tp4xfeuj35k8vdsmlg0wn6bozaci', 31),
(377, 'yh7i8q1c69juzrmfekw34gl2p5oxdvbnas0t', 31),
(378, 'd9h17qaz6irubvxky054ej8pnf2g3ltcwmso', 32),
(379, 'j6fw1ltigdcuzyobshpqe8kr3nm540v927xa', 31),
(380, 'jgxotnf6ksep78mzqr29d4ulchiw15va0b3y', 32),
(381, '2ae0zxyqkv14iotm8736lbjf5rhdwpgsnc9u', 32),
(382, '1brwqhku4g67z89vycmtaoels0nf2pdx5i3j', 32),
(383, '8nl60iocmwpvbrsdfuh5y1qez9ktjax472g3', 32),
(384, '4h5kbz2ydajmgeq91cnsxfu0prltwi73v68o', 31),
(385, 'znrlbg6chxqmjdaf74w5tevi3y081u9opks2', 32),
(386, '2cs4h7f0imvynub56qdr8x3lkgzpaejo9wt1', 32),
(387, 'c5w7adyzhn0xfvsq3elo241g6ki8bm9ptujr', 32),
(388, 'btwea5zki173cyxgofljqv9uh4r2nm06d8ps', 32),
(389, '7h3uabmcg4nep1ikfwr268tqlzo90y5sxvdj', 32),
(390, 'g13t4xfw9mhbsdu2zpay7ejoi56nvl8cqk0r', 32),
(391, 'qfk7a3iv16d2xsre40mly9ughbncw5j8otzp', 32),
(392, '1icko6a4u05g2sl3wr8ent7zxmp9jqhfbdvy', 34),
(393, 'izw89e2n7ad6kfmgjotb4yvhurpl0sx53c1q', 34),
(394, 'is80adbe42rjhcov1lg3nt5mq7xpwky9fzu6', 32),
(395, '92dsguzbylia6hctwmkjeo4r31qx0n5fp8v7', 32),
(396, '8b2oj3idst07f4mnlhac1kzgvuwqy95rpx6e', 32),
(397, 'a2gbdlfr0w9vsu6m4jx8eznhp1c53kt7iyqo', 31),
(398, 'qgu7hbaio8cfrskp4t19x0ny5v6ej3mlzd2w', 31),
(399, 'l6vnztopjdh7u502gbw4fsiaqy389cxke1rm', 31),
(400, 'rgo6mv8dkh5p7ze94xc2jau0wl1nqbsiy3ft', 32),
(401, 'sqietgu489xf537cnkmj61pvb2o0lzywrhda', 31),
(402, 'xvo8l5ez7wkbgrqu4ap32cti9smfn6h0jdy1', 31),
(403, 'ql2wu7x4di18zybn3rphjsvaftg6ke9moc05', 31),
(404, 'wma7r86b5uq1h4v0xptgodfle9ijky2s3cnz', 31),
(405, 'z1u350qmlrbhta4cjxwo6ksign9yp8ved72f', 31),
(406, '2i574bmqhyxwafj3dtezorvpcuglk0ns6189', 32),
(407, 'i1d2gj5bopvaqluzwketr478y9fnmxc3s6h0', 31),
(408, 'i03j2ur5dzhqekptva194o8ml76ysxwcfbgn', 31),
(409, 'bnspvx17azdh9i4c2ugr3ltme86jw5yofqk0', 31),
(410, '54kib0s3guazqp6e2vyt7fchjn1w8odm9lrx', 32),
(411, 'tx9l8du5417gvbn3oca6jq0zhrfmikpesw2y', 34),
(412, 'r39n8zsfolv76bpwg02xukqma5hje1cit4yd', 34),
(413, 'dpwbh1i6mto5vz9cflxn2eaj73u80sgrq4ky', 32),
(414, 'oamhsgz3u10wq5ikft2d8v769lnerbpxj4yc', 32),
(415, '5ndwscov26gx4yfhzjke3uam0qli19t7pr8b', 32),
(416, 'gz1wqbpyu86jfvst20k53rlmdxnh4iae79co', 32),
(417, 'le2dk4ubcgr7wjf1536zm8nohsqyai0tx9vp', 32),
(418, '8w50p4kcjxftizbosvgeqn6d3lyha19mru72', 34),
(419, '93fekrjyu7ozhi4tcpvxwqmsng6b508l2d1a', 34),
(420, '8zkhla3tcgw5unodx10se4vr2yib9fm6p7qj', 32),
(421, 'ejyv4mgidcuh8x0bsrtq2f6p9wkna7zl13o5', 32),
(422, '3fo567bpxgwy1dmr0vljsn9eizcuqa2h84tk', 32),
(423, 'oty4rkja7d86ubeg19zwc3x2npfvl50hisqm', 32),
(424, 'yrz0wj7c39q6kd5olxit4sbh8mfgp2anu1ve', 32),
(425, 'zakmtilxf1v35e4qh2cr0db69upg8n7owsjy', 32);

-- --------------------------------------------------------

--
-- Table structure for table `alumni_evulation`
--

CREATE TABLE `alumni_evulation` (
  `alum_evu_id` int(11) NOT NULL,
  `bullet_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `survey_info_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni_evulation`
--

INSERT INTO `alumni_evulation` (`alum_evu_id`, `bullet_id`, `user_id`, `survey_info_id`, `created_at`) VALUES
(1, 3, 23, 2, '2022-12-09 14:41:12'),
(2, 6, 23, 2, '2022-12-09 14:41:12'),
(3, 11, 23, 2, '2022-12-09 14:41:12'),
(4, 4, 31, 3, '2022-12-11 05:02:04'),
(5, 7, 31, 3, '2022-12-11 05:02:04'),
(6, 16, 31, 3, '2022-12-11 05:02:04'),
(7, 1, 32, 4, '2022-12-11 06:32:57'),
(8, 9, 32, 4, '2022-12-11 06:32:57'),
(9, 14, 32, 4, '2022-12-11 06:32:57'),
(10, 1, 34, 5, '2022-12-14 04:15:48'),
(11, 5, 34, 5, '2022-12-14 04:15:48'),
(12, 21, 34, 5, '2022-12-14 04:15:48'),
(13, 29, 34, 5, '2022-12-14 04:15:48'),
(14, 46, 34, 5, '2022-12-14 04:15:48'),
(15, 94, 34, 5, '2022-12-14 04:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicant_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL DEFAULT 0,
  `p_info_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1 = declined, 2 = hired',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `approval_users`
--

CREATE TABLE `approval_users` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approval_users`
--

INSERT INTO `approval_users` (`id`, `type`) VALUES
(0, 'Pending'),
(1, 'Confirmed'),
(2, 'Enable'),
(3, 'Disapproved');

-- --------------------------------------------------------

--
-- Table structure for table `bullet_survey`
--

CREATE TABLE `bullet_survey` (
  `bullet_id` int(11) NOT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `survey_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bullet_survey`
--

INSERT INTO `bullet_survey` (`bullet_id`, `descriptions`, `status`, `survey_id`, `created_at`, `updated_at`) VALUES
(1, 'Lack of Work Experience', 0, 1, '2022-12-07 14:59:36', '2022-12-07 14:59:42'),
(2, 'Taking Advanced Studies/Second degree Program', 0, 1, '2022-12-07 15:00:28', '2022-12-07 15:02:51'),
(3, 'Prenancy/Family Concern', 0, 1, '2022-12-07 15:00:50', '2022-12-07 15:02:48'),
(4, 'Engaging in Business', 0, 1, '2022-12-07 15:01:10', '2022-12-07 15:01:10'),
(5, 'Unemployed', 0, 2, '2022-12-07 15:01:34', '2022-12-07 15:01:38'),
(6, 'Job Order', 0, 2, '2022-12-07 15:01:46', '2022-12-07 15:01:46'),
(7, 'Self Employed', 0, 2, '2022-12-07 15:01:59', '2022-12-07 15:01:59'),
(8, 'Contractual', 0, 2, '2022-12-07 15:02:08', '2022-12-07 15:02:08'),
(9, 'Project-based', 0, 2, '2022-12-07 15:02:19', '2022-12-07 15:02:19'),
(10, 'Regular/Permanent', 0, 2, '2022-12-07 15:02:43', '2022-12-07 15:02:43'),
(12, 'Internet Research', 0, 3, '2022-12-11 04:40:55', '2022-12-11 04:40:55'),
(13, 'MS office skils', 0, 3, '2022-12-11 04:41:16', '2022-12-11 04:41:16'),
(14, 'Time Management', 0, 3, '2022-12-11 04:41:31', '2022-12-11 04:41:31'),
(15, 'Teaching', 0, 3, '2022-12-11 04:41:44', '2022-12-11 04:41:44'),
(16, 'Communication Skills', 0, 3, '2022-12-11 04:42:06', '2022-12-11 04:42:06'),
(17, 'Plan making', 0, 3, '2022-12-11 07:32:41', '2022-12-11 07:32:41'),
(18, 'Problem solving regarding to civil works', 0, 3, '2022-12-11 07:33:09', '2022-12-11 07:33:09'),
(19, 'Sociable', 0, 3, '2022-12-11 07:33:19', '2022-12-11 07:33:19'),
(20, 'Being confident in any circumstances', 0, 3, '2022-12-11 07:33:40', '2022-12-11 07:33:40'),
(21, 'Business', 0, 3, '2022-12-11 07:34:08', '2022-12-11 07:34:08'),
(22, 'Planning and Designing', 0, 3, '2022-12-11 07:34:19', '2022-12-11 07:34:19'),
(26, 'Leader skills', 0, 10, '2022-12-11 07:42:06', '2022-12-11 07:42:06'),
(27, 'Teamwork skills', 0, 10, '2022-12-11 07:42:15', '2022-12-11 07:42:15'),
(28, 'Work Ethics', 0, 10, '2022-12-11 07:42:23', '2022-12-11 07:42:23'),
(29, 'Interpersonal Skills', 0, 10, '2022-12-11 07:42:32', '2022-12-11 07:42:32'),
(30, 'Problem-solving skills', 0, 10, '2022-12-11 07:42:38', '2022-12-11 07:42:38'),
(31, 'Writting Skills', 0, 10, '2022-12-11 07:42:45', '2022-12-11 07:42:45'),
(32, 'Decision-making skills', 0, 10, '2022-12-11 07:42:51', '2022-12-11 07:42:51'),
(33, 'Research skill', 0, 10, '2022-12-11 07:42:59', '2022-12-11 07:42:59'),
(34, 'Strategic ICT skills', 0, 10, '2022-12-11 07:43:19', '2022-12-11 07:43:19'),
(35, 'Teaching Skills', 0, 10, '2022-12-11 07:43:25', '2022-12-11 07:43:25'),
(36, 'Analytical and Critical Thinking skills', 0, 10, '2022-12-11 07:43:30', '2022-12-11 07:43:30'),
(37, 'Ability to apply expert thinking ', 0, 10, '2022-12-11 07:43:36', '2022-12-11 07:43:36'),
(38, 'Innovate/Creative skills', 0, 10, '2022-12-11 07:43:41', '2022-12-11 07:43:41'),
(39, 'Verbal skills', 0, 10, '2022-12-11 07:43:46', '2022-12-11 07:43:46'),
(40, 'Organizing skills', 0, 10, '2022-12-11 07:43:53', '2022-12-11 07:43:53'),
(41, 'Site engineer', 0, 11, '2022-12-11 07:44:32', '2022-12-11 07:44:32'),
(42, 'Research engineer', 0, 11, '2022-12-11 07:44:36', '2022-12-11 07:44:36'),
(43, 'Engineer II', 0, 11, '2022-12-11 07:44:40', '2022-12-11 07:44:40'),
(44, 'Project engineer', 0, 11, '2022-12-11 07:44:45', '2022-12-11 07:44:45'),
(45, 'Cadet engineer', 0, 11, '2022-12-11 07:44:53', '2022-12-11 07:44:53'),
(46, 'Facilities engineer', 0, 11, '2022-12-11 07:45:01', '2022-12-11 07:45:01'),
(47, 'Electrical site engineer', 0, 11, '2022-12-11 07:45:06', '2022-12-11 07:45:06'),
(48, 'Drive test engineer', 0, 11, '2022-12-11 07:45:11', '2022-12-11 07:45:11'),
(49, 'Shift mechanical engineer', 0, 11, '2022-12-11 07:45:18', '2022-12-11 07:45:18'),
(50, 'Safety engineer', 0, 11, '2022-12-11 07:45:23', '2022-12-11 07:45:23'),
(51, 'Design and estimate engineer', 0, 11, '2022-12-11 07:45:29', '2022-12-11 07:45:29'),
(52, 'Teacher I', 0, 11, '2022-12-11 07:45:49', '2022-12-11 07:45:49'),
(53, 'English as Second Language (ESL) Teacher', 0, 11, '2022-12-11 07:45:54', '2022-12-11 07:45:54'),
(54, 'Manager', 0, 11, '2022-12-11 07:45:59', '2022-12-11 07:45:59'),
(55, 'IT support', 0, 11, '2022-12-11 07:46:06', '2022-12-11 07:46:06'),
(56, 'Web Developer', 0, 11, '2022-12-11 07:46:11', '2022-12-11 07:46:11'),
(57, 'Data Analysist ', 0, 11, '2022-12-11 07:48:13', '2022-12-11 07:48:13'),
(58, 'Software Engineer', 0, 11, '2022-12-11 07:48:18', '2022-12-11 07:48:18'),
(59, 'Account Clerk', 0, 11, '2022-12-11 07:48:22', '2022-12-11 07:48:22'),
(60, 'Cashier', 0, 11, '2022-12-11 07:48:29', '2022-12-11 07:48:29'),
(61, 'Virtual Assistant', 0, 11, '2022-12-11 07:48:33', '2022-12-11 07:48:33'),
(62, 'Seasonal Protocol Specialist', 0, 11, '2022-12-11 07:48:37', '2022-12-11 07:48:37'),
(63, 'Sales Consultant', 0, 11, '2022-12-11 07:48:42', '2022-12-11 07:48:42'),
(64, 'Eletrical Control Operator', 0, 11, '2022-12-11 07:48:47', '2022-12-11 07:48:47'),
(65, 'Sales Agent', 0, 11, '2022-12-11 07:48:51', '2022-12-11 07:48:51'),
(66, 'Assistant Head Guard', 0, 11, '2022-12-11 07:48:56', '2022-12-11 07:48:56'),
(67, 'Producation Associate', 0, 11, '2022-12-11 07:49:01', '2022-12-11 07:49:01'),
(68, 'Businessman', 0, 11, '2022-12-11 07:49:06', '2022-12-11 07:49:06'),
(69, 'Fire Officer I', 0, 11, '2022-12-11 07:49:10', '2022-12-11 07:49:10'),
(70, 'Assistant Electrician', 0, 11, '2022-12-11 07:49:24', '2022-12-11 07:49:24'),
(71, 'Personal', 0, 11, '2022-12-11 07:49:29', '2022-12-11 07:49:29'),
(72, 'Supervisor', 0, 11, '2022-12-11 07:49:34', '2022-12-11 07:49:34'),
(73, 'Control Operator', 0, 11, '2022-12-11 07:49:39', '2022-12-11 07:49:39'),
(74, 'Human Resource Officer', 0, 11, '2022-12-11 07:49:48', '2022-12-11 07:49:48'),
(75, 'Asst. Plant Operator', 0, 11, '2022-12-11 07:49:53', '2022-12-11 07:49:53'),
(76, 'Engineer', 0, 12, '2022-12-11 07:51:52', '2022-12-11 07:51:52'),
(77, 'Project engineer', 0, 12, '2022-12-11 07:51:59', '2022-12-11 07:51:59'),
(78, 'Cadet engineer', 0, 12, '2022-12-11 07:52:04', '2022-12-11 07:52:04'),
(79, 'Maintenance engineer', 0, 12, '2022-12-11 07:52:09', '2022-12-11 07:52:09'),
(80, 'Private Engineer', 0, 12, '2022-12-11 07:52:14', '2022-12-11 07:52:14'),
(81, 'Resident engineer', 0, 12, '2022-12-11 07:52:18', '2022-12-11 07:52:18'),
(83, 'Teacher/College Instructor', 0, 12, '2022-12-11 07:53:14', '2022-12-11 07:53:14'),
(84, 'Private School Teacher', 0, 12, '2022-12-11 07:53:19', '2022-12-11 07:53:19'),
(85, 'English as Second Language (ESL) Teacher', 0, 12, '2022-12-11 07:53:24', '2022-12-11 07:53:24'),
(86, 'Substiture Teacher', 0, 12, '2022-12-11 07:53:29', '2022-12-11 07:53:29'),
(87, 'Public School Teacher', 0, 12, '2022-12-11 07:53:35', '2022-12-11 07:53:35'),
(88, 'Volunteer Teacher', 0, 12, '2022-12-11 07:53:40', '2022-12-11 07:53:40'),
(89, 'Engineer Instructor', 0, 12, '2022-12-11 07:53:46', '2022-12-11 07:53:46'),
(90, 'Part-time Instructor', 0, 12, '2022-12-11 07:53:52', '2022-12-11 07:53:52'),
(91, 'Tutor', 0, 12, '2022-12-11 07:53:59', '2022-12-11 07:53:59'),
(92, 'Cashier', 0, 12, '2022-12-11 07:54:29', '2022-12-11 07:54:29'),
(93, 'Administrative Aide', 0, 12, '2022-12-11 07:54:35', '2022-12-11 07:54:35'),
(94, 'Accounting Clerk', 0, 12, '2022-12-11 07:54:40', '2022-12-11 07:54:40'),
(95, 'Freelance Virtual Assistant', 0, 12, '2022-12-11 07:54:45', '2022-12-11 07:54:45'),
(96, 'Data Encoder', 0, 12, '2022-12-11 07:54:50', '2022-12-11 07:54:50'),
(97, 'IT Support', 0, 12, '2022-12-11 07:54:55', '2022-12-11 07:54:55'),
(98, 'Web Developer', 0, 12, '2022-12-11 07:55:00', '2022-12-11 07:55:00'),
(99, 'Software Engineer', 0, 12, '2022-12-11 07:55:06', '2022-12-11 07:55:06'),
(100, 'Sales Consultant', 0, 12, '2022-12-11 07:55:13', '2022-12-11 07:55:13'),
(101, 'Office Staff', 0, 12, '2022-12-11 07:55:19', '2022-12-11 07:55:19'),
(102, 'Contractor', 0, 12, '2022-12-11 07:55:24', '2022-12-11 07:55:24'),
(103, 'Security Guard', 0, 12, '2022-12-11 07:55:32', '2022-12-11 07:55:32'),
(104, 'Plant Operator', 0, 12, '2022-12-11 07:55:39', '2022-12-11 07:55:39'),
(105, 'Customer Service', 0, 12, '2022-12-11 07:55:43', '2022-12-11 07:55:43'),
(106, 'Techinical Sales Support', 0, 12, '2022-12-11 07:55:49', '2022-12-11 07:55:49'),
(107, 'Senior Technician', 0, 12, '2022-12-11 07:55:54', '2022-12-11 07:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `code`, `descriptions`, `created_at`) VALUES
(1, 'BSIT', 'Bachelor of Science in Information Technology', '2022-11-17 16:05:10'),
(2, 'BSCS', 'bachelor of science in computer science', '2022-11-17 16:05:22'),
(3, 'BSCE', 'Bachelor of Science in Civil Engineering', '2022-12-11 04:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `cron_job`
--

CREATE TABLE `cron_job` (
  `cron_job` int(11) NOT NULL,
  `request_body` text NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cron_job`
--

INSERT INTO `cron_job` (`cron_job`, `request_body`, `status_id`, `type`, `created_at`, `updated_at`) VALUES
(3, '{\"text\":\"Hi Marvin, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"to\":\"09755983121\",\"type\":\"sms\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:00'),
(4, '{\"type\":\"email\",\"email\":\"marvin@gmail.com\",\"firstname\":\"marvin\",\"message\":\"Hi Marvin, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Event Announcement!...\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:02'),
(5, '{\"text\":\"Hi Carlito, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"to\":\"09519449123\",\"type\":\"sms\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:03'),
(6, '{\"type\":\"email\",\"email\":\"ker8171999@gmail.com\",\"firstname\":\"Carlito\",\"message\":\"Hi Carlito, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Event Announcement!...\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:05'),
(7, '{\"text\":\"Hi Mokers1, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"to\":\"09755983121\",\"type\":\"sms\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:07'),
(8, '{\"type\":\"email\",\"email\":\"mokers11@gmail.com\",\"firstname\":\"mokers1\",\"message\":\"Hi Mokers1, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Event Announcement!...\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:09'),
(9, '{\"text\":\"Hi Jericho, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"to\":\"09691352671\",\"type\":\"sms\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:10'),
(10, '{\"type\":\"email\",\"email\":\"jerichobalucan.180106@gmail.com\",\"firstname\":\"jericho\",\"message\":\"Hi Jericho, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Event Announcement!...\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:12'),
(11, '{\"text\":\"Hi Carlene, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"to\":\"09650533306\",\"type\":\"sms\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:13'),
(12, '{\"type\":\"email\",\"email\":\"carlitomontes.180097@gmail.com\",\"firstname\":\"Carlene\",\"message\":\"Hi Carlene, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Event Announcement!...\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:15'),
(13, '{\"text\":\"Hi Testing01, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"to\":\"09519449123\",\"type\":\"sms\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:16'),
(14, '{\"type\":\"email\",\"email\":\"marvinvillanea1@gmail.com\",\"firstname\":\"testing01\",\"message\":\"Hi Testing01, We would like to know you that we have upcoming event for WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Event Announcement!...\"}', 1, 0, '2022-12-11 04:47:49', '2022-12-11 05:09:18'),
(15, '{\"text\":\"Hi Marvin, Good day! We have new job offer from GOOGLE INC.. Job Title : Senior Developer. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"to\":\"09755983121\",\"type\":\"sms\"}', 1, 0, '2022-12-11 04:51:16', '2022-12-11 05:09:19'),
(16, '{\"type\":\"email\",\"email\":\"marvin@gmail.com\",\"firstname\":\"marvin\",\"message\":\"Hi Marvin, Good day! We have new job offer from GOOGLE INC.. Job Title : Senior Developer. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Job Offered\"}', 1, 0, '2022-12-11 04:51:16', '2022-12-11 05:09:21'),
(17, '{\"text\":\"Hi Carlito, Good day! We have new job offer from GOOGLE INC.. Job Title : Senior Developer. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"to\":\"09519449123\",\"type\":\"sms\"}', 1, 0, '2022-12-11 04:51:16', '2022-12-11 05:09:23'),
(18, '{\"type\":\"email\",\"email\":\"ker8171999@gmail.com\",\"firstname\":\"Carlito\",\"message\":\"Hi Carlito, Good day! We have new job offer from GOOGLE INC.. Job Title : Senior Developer. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Job Offered\"}', 1, 0, '2022-12-11 04:51:16', '2022-12-11 05:09:25'),
(19, '{\"text\":\"Hi Carlene, Good day! We have new job offer from GOOGLE INC.. Job Title : Senior Developer. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"to\":\"09650533306\",\"type\":\"sms\"}', 1, 0, '2022-12-11 04:51:16', '2022-12-11 05:09:26'),
(20, '{\"type\":\"email\",\"email\":\"carlitomontes.180097@gmail.com\",\"firstname\":\"Carlene\",\"message\":\"Hi Carlene, Good day! We have new job offer from GOOGLE INC.. Job Title : Senior Developer. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Job Offered\"}', 1, 0, '2022-12-11 04:51:16', '2022-12-11 05:09:28'),
(23, '{\"text\":\"Hi Marvin. Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.\",\"to\":\"09519449123\",\"type\":\"sms\"}', 1, 0, '2022-12-11 04:59:58', '2022-12-11 05:09:29'),
(24, '{\"type\":\"email\",\"email\":\"marvinvillanea1@gmail.com\",\"firstname\":\"marvin\",\"message\":\"Hi Marvin. Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"Verification Approval\"}', 1, 0, '2022-12-11 04:59:58', '2022-12-11 05:09:31'),
(25, '{\"text\":\"Hi Marvin, We would like to know you that we have upcoming event for PLANINNNG\\r\\n. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"to\":\"09519449123\",\"type\":\"sms\"}', 1, 0, '2022-12-11 05:04:19', '2022-12-11 05:09:32'),
(26, '{\"type\":\"email\",\"email\":\"marvinvillanea1@gmail.com\",\"firstname\":\"marvin\",\"message\":\"Hi Marvin, We would like to know you that we have upcoming event for PLANINNNG\\r\\n. We hope that you join and have fun. Thank you. SPC Alumni Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Event Announcement!...\"}', 1, 0, '2022-12-11 05:04:19', '2022-12-11 05:09:34'),
(27, '{\"text\":\"Hi Carlito. Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.\",\"to\":\"09519449123\",\"type\":\"sms\"}', 1, 0, '2022-12-11 06:02:40', '2022-12-11 08:10:31'),
(28, '{\"type\":\"email\",\"email\":\"ker8171999@gmail.com\",\"firstname\":\"Carlito\",\"message\":\"Hi Carlito. Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"Verification Approval\"}', 1, 0, '2022-12-11 06:02:40', '2022-12-11 08:10:33'),
(29, '{\"text\":\"Hi Jericho. Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.\",\"to\":\"09694352671\",\"type\":\"sms\"}', 1, 0, '2022-12-12 14:05:29', '2022-12-12 14:05:34'),
(30, '{\"type\":\"email\",\"email\":\"jerichobalucan@gmail.com\",\"firstname\":\"Jericho\",\"message\":\"Hi Jericho. Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"Verification Approval\"}', 1, 0, '2022-12-12 14:05:29', '2022-12-12 14:05:37'),
(31, '{\"text\":\"Hi Jericho. Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.\",\"to\":\"09691352671\",\"type\":\"sms\"}', 1, 0, '2022-12-12 14:08:41', '2022-12-12 14:08:45'),
(32, '{\"type\":\"email\",\"email\":\"jerichobalucan.180106@gmail.com\",\"firstname\":\"Jericho\",\"message\":\"Hi Jericho. Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"Verification Approval\"}', 1, 0, '2022-12-12 14:08:41', '2022-12-12 14:08:47'),
(33, '{\"text\":\"Hi Marvin, Good day! We have new job offer from ILIGAN MEDICAL CENTER COLLEGE. Job Title : DEAN FOR THE COLLEGE OF COMPUTER STUDIES. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"to\":\"09519449123\",\"type\":\"sms\"}', 1, 0, '2022-12-12 15:24:32', '2022-12-12 15:24:40'),
(34, '{\"type\":\"email\",\"email\":\"marvinvillanea1@gmail.com\",\"firstname\":\"marvin\",\"message\":\"Hi Marvin, Good day! We have new job offer from ILIGAN MEDICAL CENTER COLLEGE. Job Title : DEAN FOR THE COLLEGE OF COMPUTER STUDIES. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Job Offered\"}', 1, 0, '2022-12-12 15:24:32', '2022-12-12 15:24:45'),
(35, '{\"text\":\"Hi Jericho, Good day! We have new job offer from ILIGAN MEDICAL CENTER COLLEGE. Job Title : DEAN FOR THE COLLEGE OF COMPUTER STUDIES. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"to\":\"09694352671\",\"type\":\"sms\"}', 1, 0, '2022-12-12 15:24:32', '2022-12-12 15:24:46'),
(36, '{\"type\":\"email\",\"email\":\"jerichobalucan@gmail.com\",\"firstname\":\"Jericho\",\"message\":\"Hi Jericho, Good day! We have new job offer from ILIGAN MEDICAL CENTER COLLEGE. Job Title : DEAN FOR THE COLLEGE OF COMPUTER STUDIES. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Job Offered\"}', 1, 0, '2022-12-12 15:24:32', '2022-12-12 15:24:51'),
(37, '{\"text\":\"Hi Jericho, Good day! We have new job offer from ILIGAN MEDICAL CENTER COLLEGE. Job Title : DEAN FOR THE COLLEGE OF COMPUTER STUDIES. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"to\":\"09691352671\",\"type\":\"sms\"}', 1, 0, '2022-12-12 15:24:32', '2022-12-12 15:24:52'),
(38, '{\"type\":\"email\",\"email\":\"jerichobalucan.180106@gmail.com\",\"firstname\":\"Jericho\",\"message\":\"Hi Jericho, Good day! We have new job offer from ILIGAN MEDICAL CENTER COLLEGE. Job Title : DEAN FOR THE COLLEGE OF COMPUTER STUDIES. If you\'re willing to apply please visit to our app for more information. Thank you and have A nice day. From Alumni SPC \",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"New Job Offered\"}', 1, 0, '2022-12-12 15:24:32', '2022-12-12 15:24:56'),
(39, '{\"text\":\"Hi Test. Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.\",\"to\":\"09650533306\",\"type\":\"sms\"}', 1, 0, '2022-12-13 02:20:45', '2022-12-13 02:21:00'),
(40, '{\"type\":\"email\",\"email\":\"test@gmail.com\",\"firstname\":\"Test\",\"message\":\"Hi Test. Good day. We would like you to know, your application was approved. Congratulations. From Alumni SPC Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"Verification Approval\"}', 1, 0, '2022-12-13 02:20:45', '2022-12-13 02:21:02'),
(41, '{\"text\":\"Hi Test2. Good day. We would like you to know, your application was rejected due to lack of requirements. Thank you for understanding. From Alumni SPC Administrator.\",\"to\":\"09519449123\",\"type\":\"sms\"}', 1, 0, '2022-12-13 02:29:08', '2022-12-13 02:29:11'),
(42, '{\"type\":\"email\",\"email\":\"carlitomontes.180097@gmail.com\",\"firstname\":\"test2\",\"message\":\"Hi Test2. Good day. We would like you to know, your application was rejected due to lack of requirements. Thank you for understanding. From Alumni SPC Administrator.\",\"setFRom\":\"SPC Alumni Administrator\",\"subject\":\"Verification Approval\"}', 1, 0, '2022-12-13 02:29:08', '2022-12-13 02:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `error_logs`
--

CREATE TABLE `error_logs` (
  `iderror_logs` int(11) NOT NULL,
  `descriptions` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `error_logs`
--

INSERT INTO `error_logs` (`iderror_logs`, `descriptions`, `created_at`) VALUES
(432, '{\"company_name\":\"GOOGLE INC.\",\"job_title\":\"Senior Developer\",\"course\":\"1\",\"job_description\":\"10 years experience \\r\\nWilling to work abroad \\r\\nSKILL PHP MYSQL \\r\\nFULLSTACK DEVELOPER\\r\\nTEAM WORK\\r\\n\",\"min\":\"10000\",\"max\":\"100000\",\"type_time\":\"Full-Time\",\"address\":\"Morales Street, Pob. West, Santa Ignacia\",\"submit\":\"save us\"}', '2022-12-11 04:51:16'),
(433, '{\"company_name\":\"SPC ILIGAN CITY\",\"job_title\":\"Engineering\",\"course\":\"3\",\"job_description\":\"An Engineer , or Senior Engineer, uses math and science to solve different technical problems. Their main duties include developing new products for companies or individuals to use, providing maintenance to current products to enhance use and designing new machines to improve an organization\'s efficiencies\",\"min\":\"10000\",\"max\":\"1000000\",\"type_time\":\"Full-Time\",\"address\":\"Morales Street, Pob. West, Santa Ignacia\",\"submit\":\"save us\"}', '2022-12-11 04:52:53'),
(434, '{\"first_name\":\"marvin\",\"last_name\":\"villanea\",\"mobile\":\"09519449123\",\"email\":\"marvinvillana1@gmail.com\",\"password\":\"marvin123\",\"sy\":\"4\",\"course\":\"1\"}', '2022-12-11 04:56:42'),
(435, '{\"type\":\"USD\",\"amount\":23.36398799999999909005055087618529796600341796875}', '2022-12-11 04:57:04'),
(436, '{\"first_name\":\"marvin\",\"last_name\":\"villanea\",\"mobile\":\"09519449123\",\"email\":\"marvinvillanea1@gmail.com\",\"password\":\"marvin123\",\"sy\":\"4\",\"course\":\"1\"}', '2022-12-11 04:59:51'),
(437, '{\"type\":\"USD\",\"amount\":23.36398799999999909005055087618529796600341796875}', '2022-12-11 04:59:58'),
(438, '{\"token\":\"8ebhcrqdvl7xwyf6iz41j2p3msntk9u50gao\"}', '2022-12-11 05:00:07'),
(439, '{\"token\":\"8ebhcrqdvl7xwyf6iz41j2p3msntk9u50gao\"}', '2022-12-11 05:00:22'),
(440, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"8ebhcrqdvl7xwyf6iz41j2p3msntk9u50gao\\\" )  ) \"', '2022-12-11 05:00:22'),
(441, '\"token=8ebhcrqdvl7xwyf6iz41j2p3msntk9u50gao&age=22-25&sex=M&civil_status=S&office_address=PUBLIC+PLAZA&year_graduated=4&course_taken=1&bullet_survey%5B%5D=4&bullet_survey%5B%5D=7&bullet_survey%5B%5D=16\"', '2022-12-11 05:02:04'),
(442, '{\"token\":\"8ebhcrqdvl7xwyf6iz41j2p3msntk9u50gao\",\"age\":\"22-25\",\"sex\":\"M\",\"civil_status\":\"S\",\"office_address\":\"PUBLIC PLAZA\",\"year_graduated\":\"4\",\"course_taken\":\"1\",\"bullet_survey\":[\"4\",\"7\",\"16\"]}', '2022-12-11 05:02:04'),
(443, '{\"company_name\":\"GOOGLE INC.\",\"job_title\":\"Social Media Manager\",\"course\":\"2\",\"job_description\":\"A Social Media Manager is responsible for overseeing a company\'s interactions with the public by implementing social media platforms\' content strategies. Their duties include analyzing engagement data, identifying trends in customer interactions and planning digital campaigns to build community online.\",\"min\":\"20000\",\"max\":\"200000\",\"type_time\":\"Part-Time\",\"address\":\"Mountain View, California, United States\",\"submit\":\"save us\"}', '2022-12-11 05:03:14'),
(444, '{\"token\":\"8ebhcrqdvl7xwyf6iz41j2p3msntk9u50gao\"}', '2022-12-11 05:03:35'),
(445, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"8ebhcrqdvl7xwyf6iz41j2p3msntk9u50gao\\\" )  ) \"', '2022-12-11 05:03:35'),
(446, '{\"event_name\":\"PLANING\",\"when\":\"2022-12-11T13:04\",\"where\":\"Saray\",\"descriptions\":\"PLANINNNG\\r\\n\",\"submit\":\"save us\"}', '2022-12-11 05:04:19'),
(447, '{\"first_name\":\"Carlito\",\"last_name\":\"Montes\",\"mobile\":\"09519449123\",\"email\":\"ker8171999@gmail.com\",\"password\":\"mokers1\",\"sy\":\"4\",\"course\":\"2\"}', '2022-12-11 06:01:52'),
(448, '{\"type\":\"USD\",\"amount\":23.24398800000000164800439961254596710205078125}', '2022-12-11 06:02:40'),
(449, '{\"token\":\"zm7l5h9kyputix1eq3onb48w2fjad0sc6rgv\"}', '2022-12-11 06:03:03'),
(450, '{\"token\":\"1j5mf0p3r8z9kobscqyaxhlv4iwg2nude7t6\"}', '2022-12-11 06:31:19'),
(451, '{\"token\":\"1j5mf0p3r8z9kobscqyaxhlv4iwg2nude7t6\"}', '2022-12-11 06:31:23'),
(452, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"1j5mf0p3r8z9kobscqyaxhlv4iwg2nude7t6\\\" )  ) \"', '2022-12-11 06:31:23'),
(453, '\"token=1j5mf0p3r8z9kobscqyaxhlv4iwg2nude7t6&age=22-25&sex=M&civil_status=S&office_address=Saray+Iligan+City&year_graduated=4&course_taken=2&bullet_survey%5B%5D=1&bullet_survey%5B%5D=9&bullet_survey%5B%5D=14\"', '2022-12-11 06:32:57'),
(454, '{\"token\":\"1j5mf0p3r8z9kobscqyaxhlv4iwg2nude7t6\",\"age\":\"22-25\",\"sex\":\"M\",\"civil_status\":\"S\",\"office_address\":\"Saray Iligan City\",\"year_graduated\":\"4\",\"course_taken\":\"2\",\"bullet_survey\":[\"1\",\"9\",\"14\"]}', '2022-12-11 06:32:57'),
(455, '{\"token\":\"1j5mf0p3r8z9kobscqyaxhlv4iwg2nude7t6\"}', '2022-12-11 06:34:46'),
(456, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"1j5mf0p3r8z9kobscqyaxhlv4iwg2nude7t6\\\" )  ) \"', '2022-12-11 06:34:46'),
(457, '{\"token\":\"qhr792y1tp4xfeuj35k8vdsmlg0wn6bozaci\"}', '2022-12-11 06:42:45'),
(458, '{\"token\":\"yh7i8q1c69juzrmfekw34gl2p5oxdvbnas0t\"}', '2022-12-11 06:44:43'),
(459, '{\"token\":\"d9h17qaz6irubvxky054ej8pnf2g3ltcwmso\"}', '2022-12-11 06:48:01'),
(460, '{\"token\":\"j6fw1ltigdcuzyobshpqe8kr3nm540v927xa\"}', '2022-12-11 06:49:06'),
(461, '{\"token\":\"jgxotnf6ksep78mzqr29d4ulchiw15va0b3y\"}', '2022-12-11 06:52:23'),
(462, '{\"token\":\"jgxotnf6ksep78mzqr29d4ulchiw15va0b3y\"}', '2022-12-11 06:52:36'),
(463, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"jgxotnf6ksep78mzqr29d4ulchiw15va0b3y\\\" )  ) \"', '2022-12-11 06:52:36'),
(464, '{\"token\":\"jgxotnf6ksep78mzqr29d4ulchiw15va0b3y\"}', '2022-12-11 06:52:53'),
(465, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"jgxotnf6ksep78mzqr29d4ulchiw15va0b3y\\\" )  ) \"', '2022-12-11 06:52:53'),
(466, '{\"token\":\"2ae0zxyqkv14iotm8736lbjf5rhdwpgsnc9u\"}', '2022-12-11 06:55:22'),
(467, '{\"token\":\"2ae0zxyqkv14iotm8736lbjf5rhdwpgsnc9u\"}', '2022-12-11 06:55:59'),
(468, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"2ae0zxyqkv14iotm8736lbjf5rhdwpgsnc9u\\\" )  ) \"', '2022-12-11 06:55:59'),
(469, '{\"token\":\"1brwqhku4g67z89vycmtaoels0nf2pdx5i3j\"}', '2022-12-11 06:58:33'),
(470, '{\"token\":\"1brwqhku4g67z89vycmtaoels0nf2pdx5i3j\"}', '2022-12-11 06:58:36'),
(471, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"1brwqhku4g67z89vycmtaoels0nf2pdx5i3j\\\" )  ) \"', '2022-12-11 06:58:36'),
(472, '{\"token\":\"1brwqhku4g67z89vycmtaoels0nf2pdx5i3j\"}', '2022-12-11 07:00:40'),
(473, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"1brwqhku4g67z89vycmtaoels0nf2pdx5i3j\\\" )  ) \"', '2022-12-11 07:00:40'),
(474, '\"token=1brwqhku4g67z89vycmtaoels0nf2pdx5i3j&office_address=\"', '2022-12-11 07:01:09'),
(475, '{\"token\":\"1brwqhku4g67z89vycmtaoels0nf2pdx5i3j\",\"office_address\":\"\"}', '2022-12-11 07:01:09'),
(476, '{\"token\":\"8nl60iocmwpvbrsdfuh5y1qez9ktjax472g3\"}', '2022-12-11 07:07:07'),
(477, '\"token=8nl60iocmwpvbrsdfuh5y1qez9ktjax472g3&age=26-30&sex=M&civil_status=S&office_address=Saray+Iligan+City+&year_graduated=3&course_taken=3&bullet_survey%5B%5D=3&bullet_survey%5B%5D=5&bullet_survey%5B%5D=13\"', '2022-12-11 07:09:38'),
(478, '{\"token\":\"8nl60iocmwpvbrsdfuh5y1qez9ktjax472g3\",\"age\":\"26-30\",\"sex\":\"M\",\"civil_status\":\"S\",\"office_address\":\"Saray Iligan City \",\"year_graduated\":\"3\",\"course_taken\":\"3\",\"bullet_survey\":[\"3\",\"5\",\"13\"]}', '2022-12-11 07:09:38'),
(479, '{\"token\":\"8nl60iocmwpvbrsdfuh5y1qez9ktjax472g3\"}', '2022-12-11 07:13:21'),
(480, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"8nl60iocmwpvbrsdfuh5y1qez9ktjax472g3\\\" )  ) \"', '2022-12-11 07:13:21'),
(481, '{\"token\":\"4h5kbz2ydajmgeq91cnsxfu0prltwi73v68o\"}', '2022-12-11 07:19:04'),
(482, '{\"token\":\"znrlbg6chxqmjdaf74w5tevi3y081u9opks2\"}', '2022-12-11 07:22:48'),
(483, '{\"token\":\"znrlbg6chxqmjdaf74w5tevi3y081u9opks2\"}', '2022-12-11 07:23:33'),
(484, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"znrlbg6chxqmjdaf74w5tevi3y081u9opks2\\\" )  ) \"', '2022-12-11 07:23:33'),
(485, '{\"token\":\"2cs4h7f0imvynub56qdr8x3lkgzpaejo9wt1\"}', '2022-12-11 07:56:49'),
(486, '{\"token\":\"c5w7adyzhn0xfvsq3elo241g6ki8bm9ptujr\"}', '2022-12-11 08:07:25'),
(487, '{\"token\":\"c5w7adyzhn0xfvsq3elo241g6ki8bm9ptujr\"}', '2022-12-11 08:07:29'),
(488, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"c5w7adyzhn0xfvsq3elo241g6ki8bm9ptujr\\\" )  ) \"', '2022-12-11 08:07:29'),
(489, '{\"token\":\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\"}', '2022-12-11 11:45:53'),
(490, '{\"token\":\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\"}', '2022-12-11 11:45:59'),
(491, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\\\" )  ) \"', '2022-12-11 11:45:59'),
(492, '{\"token\":\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\"}', '2022-12-11 11:46:19'),
(493, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\\\" )  ) \"', '2022-12-11 11:46:19'),
(494, '{\"token\":\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\"}', '2022-12-11 11:46:20'),
(495, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\\\" )  ) \"', '2022-12-11 11:46:20'),
(496, '{\"token\":\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\"}', '2022-12-11 11:46:20'),
(497, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\\\" )  ) \"', '2022-12-11 11:46:20'),
(498, '{\"token\":\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\"}', '2022-12-11 11:46:21'),
(499, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\\\" )  ) \"', '2022-12-11 11:46:21'),
(500, '{\"token\":\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\"}', '2022-12-11 11:46:21'),
(501, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"btwea5zki173cyxgofljqv9uh4r2nm06d8ps\\\" )  ) \"', '2022-12-11 11:46:21'),
(502, '{\"token\":\"7h3uabmcg4nep1ikfwr268tqlzo90y5sxvdj\"}', '2022-12-12 00:39:10'),
(503, '{\"token\":\"7h3uabmcg4nep1ikfwr268tqlzo90y5sxvdj\"}', '2022-12-12 00:39:14'),
(504, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"7h3uabmcg4nep1ikfwr268tqlzo90y5sxvdj\\\" )  ) \"', '2022-12-12 00:39:14'),
(505, '{\"token\":\"g13t4xfw9mhbsdu2zpay7ejoi56nvl8cqk0r\"}', '2022-12-12 00:40:07'),
(506, '{\"token\":\"qfk7a3iv16d2xsre40mly9ughbncw5j8otzp\"}', '2022-12-12 01:31:37'),
(507, '{\"token\":\"qfk7a3iv16d2xsre40mly9ughbncw5j8otzp\"}', '2022-12-12 01:31:51'),
(508, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"qfk7a3iv16d2xsre40mly9ughbncw5j8otzp\\\" )  ) \"', '2022-12-12 01:31:51'),
(509, '{\"first_name\":\"Jericho\",\"last_name\":\"Balucan\",\"mobile\":\"09694352671\",\"email\":\"jerichobalucan@gmail.com\",\"password\":\"123456\",\"sy\":\"3\",\"course\":\"1\"}', '2022-12-12 14:05:20'),
(510, '{\"type\":\"USD\",\"amount\":23.237988000000001420630724169313907623291015625}', '2022-12-12 14:05:29'),
(511, '{\"first_name\":\"Jericho\",\"last_name\":\"Balucan\",\"mobile\":\"09691352671\",\"email\":\"jerichobalucan.180106@gmail.com\",\"password\":\"123456\",\"sy\":\"3\",\"course\":\"1\"}', '2022-12-12 14:08:35'),
(512, '{\"type\":\"USD\",\"amount\":23.23198800000000119325704872608184814453125}', '2022-12-12 14:08:41'),
(513, '{\"token\":\"1icko6a4u05g2sl3wr8ent7zxmp9jqhfbdvy\"}', '2022-12-12 14:11:57'),
(514, '{\"token\":\"1icko6a4u05g2sl3wr8ent7zxmp9jqhfbdvy\"}', '2022-12-12 14:12:12'),
(515, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"1icko6a4u05g2sl3wr8ent7zxmp9jqhfbdvy\\\" )  ) \"', '2022-12-12 14:12:12'),
(516, '{\"token\":\"1icko6a4u05g2sl3wr8ent7zxmp9jqhfbdvy\"}', '2022-12-12 14:12:12'),
(517, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"1icko6a4u05g2sl3wr8ent7zxmp9jqhfbdvy\\\" )  ) \"', '2022-12-12 14:12:12'),
(518, '{\"token\":\"1icko6a4u05g2sl3wr8ent7zxmp9jqhfbdvy\"}', '2022-12-12 14:12:13'),
(519, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"1icko6a4u05g2sl3wr8ent7zxmp9jqhfbdvy\\\" )  ) \"', '2022-12-12 14:12:13'),
(520, '{\"token\":\"1icko6a4u05g2sl3wr8ent7zxmp9jqhfbdvy\"}', '2022-12-12 14:12:17'),
(521, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"1icko6a4u05g2sl3wr8ent7zxmp9jqhfbdvy\\\" )  ) \"', '2022-12-12 14:12:17'),
(522, '{\"company_name\":\"ILIGAN MEDICAL CENTER COLLEGE\",\"job_title\":\"DEAN FOR THE COLLEGE OF COMPUTER STUDIES\",\"course\":\"1\",\"job_description\":\"- MASTER\'S DEGREE IN COMPUTER SCIENCE\\r\\n- PREFERABLY WITH (5) YEARS OF SATISFACTORY TEACHING EXPERIENCE\\r\\n-(2) TWO YEARS OF MANAGERIAL EXPERIENCE\\r\\n- MUST BE PROFICIENT IN WRITTEN AND ORAL COMMUNICATION\\r\\n- MUST BE GOOD MORAL CHARACTER; AND \\r\\n- COMPUTER LITERATE\\r\\n\\r\\nSEND YOUR RESUME AND APPLICATION LETTER TO\\r\\nimcchrd@gmail.com or Visit the HR office\",\"min\":\"500\",\"max\":\"30000\",\"type_time\":\"Full-Time\",\"address\":\"San Miguel Village Pala-O\",\"submit\":\"save us\"}', '2022-12-12 15:24:32'),
(523, '{\"token\":\"izw89e2n7ad6kfmgjotb4yvhurpl0sx53c1q\"}', '2022-12-12 15:25:40'),
(524, '{\"token\":\"izw89e2n7ad6kfmgjotb4yvhurpl0sx53c1q\"}', '2022-12-12 15:25:46'),
(525, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"izw89e2n7ad6kfmgjotb4yvhurpl0sx53c1q\\\" )  ) \"', '2022-12-12 15:25:46'),
(526, '{\"token\":\"is80adbe42rjhcov1lg3nt5mq7xpwky9fzu6\"}', '2022-12-12 15:28:48'),
(527, '{\"token\":\"is80adbe42rjhcov1lg3nt5mq7xpwky9fzu6\"}', '2022-12-12 15:28:53'),
(528, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"is80adbe42rjhcov1lg3nt5mq7xpwky9fzu6\\\" )  ) \"', '2022-12-12 15:28:53'),
(529, '{\"token\":\"92dsguzbylia6hctwmkjeo4r31qx0n5fp8v7\"}', '2022-12-13 02:02:11'),
(530, '{\"token\":\"92dsguzbylia6hctwmkjeo4r31qx0n5fp8v7\"}', '2022-12-13 02:02:18'),
(531, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"92dsguzbylia6hctwmkjeo4r31qx0n5fp8v7\\\" )  ) \"', '2022-12-13 02:02:18'),
(532, '{\"token\":\"8b2oj3idst07f4mnlhac1kzgvuwqy95rpx6e\"}', '2022-12-13 02:12:53'),
(533, '{\"token\":\"8b2oj3idst07f4mnlhac1kzgvuwqy95rpx6e\"}', '2022-12-13 02:13:47'),
(534, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"8b2oj3idst07f4mnlhac1kzgvuwqy95rpx6e\\\" )  ) \"', '2022-12-13 02:13:47'),
(535, '{\"first_name\":\"Test\",\"last_name\":\"Test\",\"mobile\":\"09650533306\",\"email\":\"test@gmail.com\",\"password\":\"123456\",\"sy\":\"2\",\"course\":\"1\"}', '2022-12-13 02:20:01'),
(536, '{\"type\":\"USD\",\"amount\":23.189987999999999601641320623457431793212890625}', '2022-12-13 02:20:45'),
(537, '{\"first_name\":\"test2\",\"last_name\":\"tes2\",\"mobile\":\"09519449123\",\"email\":\"carlitomontes.180097@gmail.com\",\"password\":\"123456\",\"sy\":\"1\",\"course\":\"1\"}', '2022-12-13 02:28:35'),
(538, '{\"type\":\"USD\",\"amount\":23.183987999999999374267645180225372314453125}', '2022-12-13 02:29:08'),
(539, '{\"token\":\"a2gbdlfr0w9vsu6m4jx8eznhp1c53kt7iyqo\"}', '2022-12-13 07:27:12'),
(540, '{\"token\":\"qgu7hbaio8cfrskp4t19x0ny5v6ej3mlzd2w\"}', '2022-12-13 07:27:13'),
(541, '{\"token\":\"l6vnztopjdh7u502gbw4fsiaqy389cxke1rm\"}', '2022-12-13 07:27:14'),
(542, '{\"token\":\"a2gbdlfr0w9vsu6m4jx8eznhp1c53kt7iyqo\"}', '2022-12-13 07:27:48'),
(543, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"a2gbdlfr0w9vsu6m4jx8eznhp1c53kt7iyqo\\\" )  ) \"', '2022-12-13 07:27:48'),
(544, '\"token=a2gbdlfr0w9vsu6m4jx8eznhp1c53kt7iyqo&office_address=\"', '2022-12-13 07:30:21'),
(545, '{\"token\":\"a2gbdlfr0w9vsu6m4jx8eznhp1c53kt7iyqo\",\"office_address\":\"\"}', '2022-12-13 07:30:21'),
(546, '\"token=a2gbdlfr0w9vsu6m4jx8eznhp1c53kt7iyqo&office_address=&bullet_survey%5B%5D=80\"', '2022-12-13 07:30:34'),
(547, '{\"token\":\"a2gbdlfr0w9vsu6m4jx8eznhp1c53kt7iyqo\",\"office_address\":\"\",\"bullet_survey\":[\"80\"]}', '2022-12-13 07:30:34'),
(548, '\"token=a2gbdlfr0w9vsu6m4jx8eznhp1c53kt7iyqo&office_address=&bullet_survey%5B%5D=80\"', '2022-12-13 07:30:37'),
(549, '{\"token\":\"a2gbdlfr0w9vsu6m4jx8eznhp1c53kt7iyqo\",\"office_address\":\"\",\"bullet_survey\":[\"80\"]}', '2022-12-13 07:30:37'),
(550, '{\"token\":\"rgo6mv8dkh5p7ze94xc2jau0wl1nqbsiy3ft\"}', '2022-12-13 08:23:14'),
(551, '{\"token\":\"sqietgu489xf537cnkmj61pvb2o0lzywrhda\"}', '2022-12-13 08:28:32'),
(552, '{\"token\":\"xvo8l5ez7wkbgrqu4ap32cti9smfn6h0jdy1\"}', '2022-12-13 08:36:59'),
(553, '{\"token\":\"ql2wu7x4di18zybn3rphjsvaftg6ke9moc05\"}', '2022-12-13 08:42:56'),
(554, '{\"token\":\"wma7r86b5uq1h4v0xptgodfle9ijky2s3cnz\"}', '2022-12-13 08:51:33'),
(555, '{\"token\":\"z1u350qmlrbhta4cjxwo6ksign9yp8ved72f\"}', '2022-12-13 08:51:33'),
(556, '{\"token\":\"z1u350qmlrbhta4cjxwo6ksign9yp8ved72f\"}', '2022-12-13 08:51:44'),
(557, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"z1u350qmlrbhta4cjxwo6ksign9yp8ved72f\\\" )  ) \"', '2022-12-13 08:51:44'),
(558, '{\"token\":\"2i574bmqhyxwafj3dtezorvpcuglk0ns6189\"}', '2022-12-13 08:54:41'),
(559, '{\"token\":\"2i574bmqhyxwafj3dtezorvpcuglk0ns6189\"}', '2022-12-13 08:54:55'),
(560, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"2i574bmqhyxwafj3dtezorvpcuglk0ns6189\\\" )  ) \"', '2022-12-13 08:54:55'),
(561, '{\"token\":\"2i574bmqhyxwafj3dtezorvpcuglk0ns6189\"}', '2022-12-13 08:56:00'),
(562, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"2i574bmqhyxwafj3dtezorvpcuglk0ns6189\\\" )  ) \"', '2022-12-13 08:56:00'),
(563, '{\"token\":\"i1d2gj5bopvaqluzwketr478y9fnmxc3s6h0\"}', '2022-12-13 09:00:19'),
(564, '{\"token\":\"i03j2ur5dzhqekptva194o8ml76ysxwcfbgn\"}', '2022-12-13 09:01:50'),
(565, '{\"token\":\"bnspvx17azdh9i4c2ugr3ltme86jw5yofqk0\"}', '2022-12-13 09:03:57'),
(566, '{\"token\":\"54kib0s3guazqp6e2vyt7fchjn1w8odm9lrx\"}', '2022-12-13 09:08:14'),
(567, '{\"token\":\"54kib0s3guazqp6e2vyt7fchjn1w8odm9lrx\"}', '2022-12-13 09:08:41'),
(568, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"54kib0s3guazqp6e2vyt7fchjn1w8odm9lrx\\\" )  ) \"', '2022-12-13 09:08:41'),
(569, '{\"token\":\"tx9l8du5417gvbn3oca6jq0zhrfmikpesw2y\"}', '2022-12-13 09:09:13'),
(570, '{\"token\":\"r39n8zsfolv76bpwg02xukqma5hje1cit4yd\"}', '2022-12-13 09:09:13'),
(571, '{\"token\":\"r39n8zsfolv76bpwg02xukqma5hje1cit4yd\"}', '2022-12-13 09:09:18'),
(572, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"r39n8zsfolv76bpwg02xukqma5hje1cit4yd\\\" )  ) \"', '2022-12-13 09:09:18'),
(573, '{\"token\":\"54kib0s3guazqp6e2vyt7fchjn1w8odm9lrx\"}', '2022-12-13 09:10:22'),
(574, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"54kib0s3guazqp6e2vyt7fchjn1w8odm9lrx\\\" )  ) \"', '2022-12-13 09:10:22'),
(575, '{\"token\":\"54kib0s3guazqp6e2vyt7fchjn1w8odm9lrx\"}', '2022-12-13 09:23:00'),
(576, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"54kib0s3guazqp6e2vyt7fchjn1w8odm9lrx\\\" )  ) \"', '2022-12-13 09:23:00'),
(577, '{\"token\":\"dpwbh1i6mto5vz9cflxn2eaj73u80sgrq4ky\"}', '2022-12-13 11:09:37'),
(578, '{\"token\":\"dpwbh1i6mto5vz9cflxn2eaj73u80sgrq4ky\"}', '2022-12-13 11:29:53'),
(579, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"dpwbh1i6mto5vz9cflxn2eaj73u80sgrq4ky\\\" )  ) \"', '2022-12-13 11:29:53'),
(580, '{\"token\":\"oamhsgz3u10wq5ikft2d8v769lnerbpxj4yc\"}', '2022-12-13 11:31:43'),
(581, '{\"token\":\"oamhsgz3u10wq5ikft2d8v769lnerbpxj4yc\"}', '2022-12-13 11:31:49'),
(582, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"oamhsgz3u10wq5ikft2d8v769lnerbpxj4yc\\\" )  ) \"', '2022-12-13 11:31:49'),
(583, '{\"token\":\"5ndwscov26gx4yfhzjke3uam0qli19t7pr8b\"}', '2022-12-13 11:33:07'),
(584, '{\"token\":\"5ndwscov26gx4yfhzjke3uam0qli19t7pr8b\"}', '2022-12-13 11:33:11'),
(585, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"5ndwscov26gx4yfhzjke3uam0qli19t7pr8b\\\" )  ) \"', '2022-12-13 11:33:11'),
(586, '{\"token\":\"gz1wqbpyu86jfvst20k53rlmdxnh4iae79co\"}', '2022-12-14 00:23:28'),
(587, '{\"token\":\"gz1wqbpyu86jfvst20k53rlmdxnh4iae79co\"}', '2022-12-14 00:23:43'),
(588, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"gz1wqbpyu86jfvst20k53rlmdxnh4iae79co\\\" )  ) \"', '2022-12-14 00:23:43'),
(589, '{\"token\":\"le2dk4ubcgr7wjf1536zm8nohsqyai0tx9vp\"}', '2022-12-14 02:26:56'),
(590, '{\"token\":\"le2dk4ubcgr7wjf1536zm8nohsqyai0tx9vp\"}', '2022-12-14 02:27:12'),
(591, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"le2dk4ubcgr7wjf1536zm8nohsqyai0tx9vp\\\" )  ) \"', '2022-12-14 02:27:12'),
(592, '{\"token\":\"8w50p4kcjxftizbosvgeqn6d3lyha19mru72\"}', '2022-12-14 04:13:35'),
(593, '{\"token\":\"8w50p4kcjxftizbosvgeqn6d3lyha19mru72\"}', '2022-12-14 04:14:43'),
(594, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"8w50p4kcjxftizbosvgeqn6d3lyha19mru72\\\" )  ) \"', '2022-12-14 04:14:43'),
(595, '\"token=8w50p4kcjxftizbosvgeqn6d3lyha19mru72&age=22-25&sex=M&civil_status=S&office_address=Pala-o+Iligan+City&year_graduated=3&course_taken=1&bullet_survey%5B%5D=1&bullet_survey%5B%5D=5&bullet_survey%5B%5D=21&bullet_survey%5B%5D=29&bullet_survey%5B%5D=46&bullet_survey%5B%5D=94\"', '2022-12-14 04:15:48'),
(596, '{\"token\":\"8w50p4kcjxftizbosvgeqn6d3lyha19mru72\",\"age\":\"22-25\",\"sex\":\"M\",\"civil_status\":\"S\",\"office_address\":\"Pala-o Iligan City\",\"year_graduated\":\"3\",\"course_taken\":\"1\",\"bullet_survey\":[\"1\",\"5\",\"21\",\"29\",\"46\",\"94\"]}', '2022-12-14 04:15:48'),
(597, '{\"token\":\"93fekrjyu7ozhi4tcpvxwqmsng6b508l2d1a\"}', '2022-12-14 04:17:29'),
(598, '{\"token\":\"8zkhla3tcgw5unodx10se4vr2yib9fm6p7qj\"}', '2022-12-14 08:54:12'),
(599, '{\"token\":\"8zkhla3tcgw5unodx10se4vr2yib9fm6p7qj\"}', '2022-12-14 08:54:32'),
(600, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"8zkhla3tcgw5unodx10se4vr2yib9fm6p7qj\\\" )  ) \"', '2022-12-14 08:54:32'),
(601, '{\"token\":\"ejyv4mgidcuh8x0bsrtq2f6p9wkna7zl13o5\"}', '2022-12-14 10:16:43'),
(602, '{\"token\":\"ejyv4mgidcuh8x0bsrtq2f6p9wkna7zl13o5\"}', '2022-12-14 10:16:59'),
(603, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"ejyv4mgidcuh8x0bsrtq2f6p9wkna7zl13o5\\\" )  ) \"', '2022-12-14 10:16:59'),
(604, '{\"token\":\"3fo567bpxgwy1dmr0vljsn9eizcuqa2h84tk\"}', '2022-12-15 02:57:44'),
(605, '{\"token\":\"3fo567bpxgwy1dmr0vljsn9eizcuqa2h84tk\"}', '2022-12-15 02:58:22'),
(606, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"3fo567bpxgwy1dmr0vljsn9eizcuqa2h84tk\\\" )  ) \"', '2022-12-15 02:58:22'),
(607, '\"token=3fo567bpxgwy1dmr0vljsn9eizcuqa2h84tk&office_address=\"', '2022-12-15 02:58:55'),
(608, '{\"token\":\"3fo567bpxgwy1dmr0vljsn9eizcuqa2h84tk\",\"office_address\":\"\"}', '2022-12-15 02:58:55'),
(609, '\"token=3fo567bpxgwy1dmr0vljsn9eizcuqa2h84tk&office_address=\"', '2022-12-15 02:59:00'),
(610, '{\"token\":\"3fo567bpxgwy1dmr0vljsn9eizcuqa2h84tk\",\"office_address\":\"\"}', '2022-12-15 02:59:00'),
(611, '{\"token\":\"oty4rkja7d86ubeg19zwc3x2npfvl50hisqm\"}', '2022-12-15 03:23:53'),
(612, '{\"token\":\"yrz0wj7c39q6kd5olxit4sbh8mfgp2anu1ve\"}', '2022-12-15 05:20:46'),
(613, '{\"token\":\"yrz0wj7c39q6kd5olxit4sbh8mfgp2anu1ve\"}', '2022-12-15 05:20:54'),
(614, '\"where course_id =  ( select course_id from personal_info where user_id = ( select user_id from access_token where access_token = \\\"yrz0wj7c39q6kd5olxit4sbh8mfgp2anu1ve\\\" )  ) \"', '2022-12-15 05:20:54'),
(615, '{\"token\":\"zakmtilxf1v35e4qh2cr0db69upg8n7owsjy\"}', '2022-12-15 05:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL DEFAULT '0',
  `when` datetime NOT NULL,
  `where` varchar(255) NOT NULL DEFAULT '0',
  `desciptions` varchar(255) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `when`, `where`, `desciptions`, `status`, `banner`, `created_at`, `updated_at`) VALUES
(3, 'INTERNET OF THING', '2022-12-25 12:46:00', 'SPC ILIGAN GYM', 'WHERE WHITE T-SHIRT AND BRING YOUR OWN SNACK ALSO WATER', 0, 'https://spc-alumni.spc-ccs.net/images/event_logo/INTERNET OF THING_1670734069.png', '2022-12-11 04:47:49', '2022-12-11 04:47:49'),
(4, 'PLANING', '2022-12-11 13:04:00', 'Saray', 'PLANINNNG\r\n', 0, 'https://spc-alumni.spc-ccs.net/images/event_logo/PLANING_1670735059.png', '2022-12-11 05:04:19', '2022-12-11 05:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL DEFAULT '0',
  `job_descriptions` varchar(2000) NOT NULL DEFAULT '0',
  `course_id` int(11) NOT NULL DEFAULT 0,
  `job_image` varchar(255) NOT NULL DEFAULT '0',
  `min_salary` decimal(20,6) NOT NULL DEFAULT 0.000000,
  `max_salary` decimal(20,6) NOT NULL DEFAULT 0.000000,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = active, 1 = not active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(255) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `time_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `job_descriptions`, `course_id`, `job_image`, `min_salary`, `max_salary`, `status`, `created_at`, `updated_at`, `address`, `company_name`, `time_type`) VALUES
(19, 'Senior Developer', '10 years experience \r\nWilling to work abroad \r\nSKILL PHP MYSQL \r\nFULLSTACK DEVELOPER\r\nTEAM WORK\r\n', 1, 'https://spc-alumni.spc-ccs.net/images/company_logo/GOOGLE INC._1670734276.jpg', '10000.000000', '100000.000000', 0, '2022-12-11 04:51:16', '2022-12-11 04:51:16', 'Morales Street, Pob. West, Santa Ignacia', 'GOOGLE INC.', 'Full-Time'),
(20, 'Engineering', 'An Engineer , or Senior Engineer, uses math and science to solve different technical problems. Their main duties include developing new products for companies or individuals to use, providing maintenance to current products to enhance use and designing new machines to improve an organization\'s efficiencies', 3, 'https://spc-alumni.spc-ccs.net/images/company_logo/SPC ILIGAN CITY_1670734374.jfif', '10000.000000', '1000000.000000', 0, '2022-12-11 04:52:53', '2022-12-11 04:52:53', 'Morales Street, Pob. West, Santa Ignacia', 'SPC ILIGAN CITY', 'Full-Time'),
(21, 'Social Media Manager', 'A Social Media Manager is responsible for overseeing a company\'s interactions with the public by implementing social media platforms\' content strategies. Their duties include analyzing engagement data, identifying trends in customer interactions and planning digital campaigns to build community online.', 2, 'https://spc-alumni.spc-ccs.net/images/company_logo/GOOGLE INC._1670734995.png', '20000.000000', '200000.000000', 0, '2022-12-11 05:03:14', '2022-12-11 05:03:14', 'Mountain View, California, United States', 'GOOGLE INC.', 'Part-Time'),
(22, 'DEAN FOR THE COLLEGE OF COMPUTER STUDIES', '- MASTER\'S DEGREE IN COMPUTER SCIENCE\r\n- PREFERABLY WITH (5) YEARS OF SATISFACTORY TEACHING EXPERIENCE\r\n-(2) TWO YEARS OF MANAGERIAL EXPERIENCE\r\n- MUST BE PROFICIENT IN WRITTEN AND ORAL COMMUNICATION\r\n- MUST BE GOOD MORAL CHARACTER; AND \r\n- COMPUTER LITERATE\r\n\r\nSEND YOUR RESUME AND APPLICATION LETTER TO\r\nimcchrd@gmail.com or Visit the HR office', 1, 'https://spc-alumni.spc-ccs.net/images/company_logo/ILIGAN MEDICAL CENTER COLLEGE_1670858673.jpg', '501.000000', '30000.000000', 0, '2022-12-12 15:24:32', '2022-12-14 09:01:46', 'San Miguel Village Pala-O', 'ILIGAN MEDICAL CENTER COLLEGE', 'Full-Time');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `p_info_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `house_no` varchar(255) DEFAULT NULL,
  `discrict_code` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `verify_number` tinyint(4) DEFAULT 0 COMMENT '0 = not verify, 1 = verify',
  `course_id` int(11) DEFAULT NULL,
  `sy_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`p_info_id`, `user_id`, `first_name`, `last_name`, `middle_name`, `street`, `city`, `province`, `zip_code`, `zone`, `landmark`, `barangay`, `house_no`, `discrict_code`, `address`, `birthdate`, `gender`, `contact_no`, `image`, `created_at`, `updated_at`, `verify_number`, `course_id`, `sy_id`) VALUES
(44, 31, 'marvin', 'villaneas', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Saray Purok 2. Iligan City Lanao Del Norte', NULL, NULL, '09519449123', 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', '2022-12-11 04:59:51', '2022-12-13 09:01:17', 0, 1, 4),
(45, 32, 'Carlito', 'Montes', 'Flordeliz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Saray Purok 2. Iligan City Lanao Del Norte', NULL, NULL, '09519449123', 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', '2022-12-11 06:01:52', '2022-12-11 06:06:21', 0, 2, 4),
(46, 33, 'Jericho', 'Balucan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Saray Purok 2. Iligan City Lanao Del Norte', NULL, NULL, '09694352671', 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', '2022-12-12 14:05:20', '2022-12-13 09:01:19', 0, 1, 3),
(47, 34, 'Jericho', 'Balucan', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pala-O Purok 16. Iligan City ', NULL, NULL, '09691352671', 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', '2022-12-12 14:08:35', '2022-12-14 04:14:08', 0, 1, 3),
(48, 35, 'Test', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Saray Purok 2. Iligan City Lanao Del Norte', NULL, NULL, '09650533306', 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', '2022-12-13 02:20:01', '2022-12-13 09:01:24', 0, 1, 2),
(49, 36, 'test2', 'tes2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Saray Purok 2. Iligan City Lanao Del Norte', NULL, NULL, '09519449123', 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', '2022-12-13 02:28:35', '2022-12-13 09:01:26', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` int(11) NOT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `status_id` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`survey_id`, `descriptions`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Reasons of Unemployed ', 0, '2022-12-07 14:52:33', '2022-12-07 14:52:33'),
(2, 'Current Employment Status of Alumni', 0, '2022-12-07 14:53:04', '2022-12-07 14:53:04'),
(3, 'Skills Developed from SPC - Acquired', 0, '2022-12-08 16:59:38', '2022-12-08 16:59:38'),
(10, 'General rank Skills in terms of applicability in current job', 0, '2022-12-11 07:41:58', '2022-12-11 07:41:58'),
(11, 'Position in Current Occupation', 0, '2022-12-11 07:44:20', '2022-12-11 07:44:20'),
(12, 'First Job After Graduation', 0, '2022-12-11 07:51:46', '2022-12-11 07:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `survey_information`
--

CREATE TABLE `survey_information` (
  `survey_info_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `civil_status` varchar(50) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `sy_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_information`
--

INSERT INTO `survey_information` (`survey_info_id`, `user_id`, `age`, `sex`, `civil_status`, `office_address`, `sy_id`, `course_id`, `created_at`) VALUES
(3, 31, '22-25', 'M', 'S', 'PUBLIC PLAZA', 4, 1, '2022-12-11 05:02:04'),
(4, 32, '22-25', 'M', 'S', 'Saray Iligan City', 4, 2, '2022-12-11 06:32:57'),
(5, 34, '22-25', 'M', 'S', 'Pala-o Iligan City', 3, 1, '2022-12-14 04:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE `sy` (
  `sy_id` int(11) NOT NULL,
  `sy` varchar(50) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`sy_id`, `sy`, `created_at`) VALUES
(1, '2021-2022', '2022-11-17 16:26:02'),
(2, '2020-2021', '2022-11-17 16:26:15'),
(3, '2019-2020', '2022-11-17 16:26:26'),
(4, '2022-2023', '2022-12-11 04:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL COMMENT '0 = not verify, 1 = verify',
  `user_type` varchar(45) DEFAULT NULL,
  `user_status` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `user_type`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', '1', '1', 0, '2022-09-23 02:36:01', '2022-09-23 02:36:01'),
(31, 'marvin', 'marvinvillanea1@gmail.com', 'marvin123', '1', '2', 0, '2022-12-10 20:59:51', '2022-12-12 23:25:58'),
(32, 'Carlito', 'ker8171999@gmail.com', 'mokers1', '1', '2', 0, '2022-12-10 22:01:52', '2022-12-12 23:26:00'),
(33, 'Jericho', 'jerichobalucan@gmail.com', '123456', '1', '2', 0, '2022-12-12 06:05:20', '2022-12-12 06:07:24'),
(34, 'Jericho', 'jerichobalucan.180106@gmail.com', '123456', '1', '2', 0, '2022-12-12 06:08:35', '2022-12-12 06:08:40'),
(35, 'Test', 'test@gmail.com', '123456', '1', '2', 0, '2022-12-12 18:20:01', '2022-12-12 18:20:44'),
(36, 'test2', 'carlitomontes.180097@gmail.com', '123456', '3', '2', 0, '2022-12-12 18:28:35', '2022-12-12 18:29:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_token`
--
ALTER TABLE `access_token`
  ADD PRIMARY KEY (`token_id`);

--
-- Indexes for table `alumni_evulation`
--
ALTER TABLE `alumni_evulation`
  ADD PRIMARY KEY (`alum_evu_id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `approval_users`
--
ALTER TABLE `approval_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bullet_survey`
--
ALTER TABLE `bullet_survey`
  ADD PRIMARY KEY (`bullet_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `cron_job`
--
ALTER TABLE `cron_job`
  ADD PRIMARY KEY (`cron_job`);

--
-- Indexes for table `error_logs`
--
ALTER TABLE `error_logs`
  ADD PRIMARY KEY (`iderror_logs`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`p_info_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey_information`
--
ALTER TABLE `survey_information`
  ADD PRIMARY KEY (`survey_info_id`);

--
-- Indexes for table `sy`
--
ALTER TABLE `sy`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_token`
--
ALTER TABLE `access_token`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT for table `alumni_evulation`
--
ALTER TABLE `alumni_evulation`
  MODIFY `alum_evu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `approval_users`
--
ALTER TABLE `approval_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bullet_survey`
--
ALTER TABLE `bullet_survey`
  MODIFY `bullet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cron_job`
--
ALTER TABLE `cron_job`
  MODIFY `cron_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `error_logs`
--
ALTER TABLE `error_logs`
  MODIFY `iderror_logs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=616;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `p_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `survey_information`
--
ALTER TABLE `survey_information`
  MODIFY `survey_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sy`
--
ALTER TABLE `sy`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
