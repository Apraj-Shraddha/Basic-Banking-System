
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contact` (
  `sr` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contact` (`sr`, `name`, `email`, `message`) VALUES
(13, 'Rohit Mahajan', 'rohitm.official404@g', 'What is the python course fee?'),
(14, 'Rohit', 'adef32795@gmail.com', 'This is a demo paregraph!'),
(15, 'Rohit', 'adef327095@gmail.com', 'This is a para!'),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, 'Rohit Mahajan', 'rdm@gmail.com', 'this is my new contact email');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Siraj', 'khan@gmail.com', 40000),
(2, 'Piyush', 'raut@gmail.com', 55000),
(3, 'Sakshi', 'patil@gmail.com', 45000),
(4, 'Ankush', 'chopra@gmail.com', 40000),
(5, 'Pooja', 'sawant@gmail.com', 55000),
(6, 'Purva', 'kapoor@gmail.com', 30000),
(7, 'Deepa', 'rawool@gmail.com', 50000),
(8, 'Juhi', 'chawla@gmail.com', 40000),
(9, 'Rahul', 'jadhav@gmail.com', 30000),
(10, 'Chetan', 'chaudary@gmail.com', 50000);

--
-- Indexes for dumped tables
--

ALTER TABLE `contact`
  ADD PRIMARY KEY (`sr`);
--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

ALTER TABLE `contact`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;


