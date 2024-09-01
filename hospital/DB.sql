
-- Database: `hosptial`
--
CREATE DATABASE IF NOT EXISTS `hosptial` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hosptial`;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `email`, `date`) VALUES
(1, 'ahmed fahim', 'ahmed@mail.com', '2022-09-01'),
(2, 'أحمد فهيم', 'ahme@mail.com', '2002-02-01'),
(3, 'moahmed', 'moh@mail.com', '2023-09-01'),
(4, 'shosho', 'shosho@mail.com', '2012-09-11'),
(5, 'shosho', 'shosho@mail.com', '2012-09-11'),
(6, 'ali ', 'ali22a@mail.com ', '2022-02-02'),
(7, 'ali ', 'ali@mail.com ', '2022-01-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
