-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 04:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `barangay` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `contactnumber` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpassword` varchar(250) NOT NULL,
  `companyname` varchar(250) NOT NULL,
  `contactpersonname` varchar(250) NOT NULL,
  `contactpersonposition` varchar(250) NOT NULL,
  `first_login` int(11) NOT NULL,
  `profile_pic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `firstname`, `middlename`, `lastname`, `birthday`, `sex`, `barangay`, `city`, `province`, `zipcode`, `contactnumber`, `email`, `username`, `password`, `confirmpassword`, `companyname`, `contactpersonname`, `contactpersonposition`, `first_login`, `profile_pic`) VALUES
(22, 'Janice Celine', 'Cabasag', 'Chang', '2000-02-08', 'female', 'ayala', 'zambocity', 'delsur', 7000, 2147483647, 'jayceexd27@gmail.com', 'kailinchang', '$2y$10$Tkmih9drBRhTew6egKW8y.mkzfTmkJOyV.SWEKih99ss/0F2iT116', '$2y$10$Ra1jC0pbgYMZQqJRiYEUCemtKn5iFO9hWm5bsUzMyvzN3OV3fmRAe', '', '', '', 0, ''),
(23, '', '', '', '0000-00-00', '', 'stamaria', 'Zambo City', 'Del Sur', 7000, 2147483647, 'kccmalldezamboanga@gmail.com', '', '$2y$10$xlJ0VHZwKGSPOc4PikutZ.CY5Ov86.G7QXVj.LEhW0KUDY.a5ijAu', '$2y$10$cOrp3oiALI68CaRbXF3C2.RWeZaiApA2SexQztOlFW9pBlMC9g.8u', 'KCC Mall De Zamnoanga', 'Janice Chang', 'Manager', 0, ''),
(24, 'Mohammad Sali', 'Sangka', 'Jauhari', '2000-01-28', 'male', 'baliwasan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$S.LB1kM3vDxiIOt.F.e41ORjhMOenTPW3Er0NBTnGifeJbAdV8ud2', '$2y$10$rVScj9qHraS8aMJYnogOWeZWHEVzKjoc5cukiei.XgCGyPDn7/Xwq', '', '', '', 1, ''),
(25, 'Mohammad Sali', 'Sangka', 'Jauhari', '2000-01-28', 'male', 'baliwasan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$UH8spnDyDjb2c4NGnh7yBeGXJi4upsbP1GoQtm3POcFNK1Cc5QiIG', '$2y$10$1o9XZyp1o0RguFhpQzQm6OY.BycQnWjf178P0.3ADBosECDfzpGu6', '', '', '', 1, ''),
(26, 'Mohammad Sali', 'Sangka', 'Jauhari', '2000-01-28', 'male', 'baliwasan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$UwpdloXH2jItLsr3OoXsiOk5E6Wlx2r7m1sIELTaQOmN3ase6ah8S', '$2y$10$bzot/.YylIequBzAoHdvLOlep2o4HD1u68TPQ46YiFM.nZUf6mZNq', '', '', '', 1, ''),
(27, 'Mohammad Sali', 'Sangka', 'Jauhari', '2000-01-28', 'male', 'baliwasan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$q8yLOqEFjQJh8pefAiRBNu.r68FAQpaTpQgbpsW4gYWHaBksBxoyK', '$2y$10$vHBOX7hLAMXsEJriBxxTAevfGTapxFbrVYQp7Uydp4Jk6GwkQp/wW', '', '', '', 1, ''),
(28, 'Mohammad Sali', 'Sangka', 'Jauhari', '2000-01-28', 'male', 'baliwasan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$qvVIqGznjYAnCC2NeHG6Ye/PLgKk1eLrM6xub1CPLcGtK2Bo2w7bW', '$2y$10$xIoMncz7M9XQI2TgWE0tmO9y9fMKB6HxSImMFHHU4zl/U0m/5A1hi', '', '', '', 1, ''),
(29, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-02-18', 'male', 'baliwasan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$F7To1njn73zW0PK8EXtHJ.9mcGoBJmMwlHHTmjiPKzhaUsPxJ8XJS', '$2y$10$zs6AKHUhSKhM1KB/16TMEOqcOZSVYW8.v7VL9CloAUEWvu1SYVi7u', '', '', '', 1, ''),
(30, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-02-06', 'female', 'zone1', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$1QHzdcJ7Ux7E5VCWnbMte.yjRdd93OjoFTnP8bPKkJhtWEOFu35Tm', '$2y$10$BrjVIGf7R5wgJM3nyl40wevGW9CstcFjYY2dtJnkSdjo0qgxE0s4y', '', '', '', 1, ''),
(31, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-02-06', 'female', 'zone1', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$bO5MXpvKLjD1SF5ApiwZ8umd1GF7DlhL6xoFfP2OZ1w0cVlUfl5mG', '$2y$10$un/IoRNxZX4zgUE8XfrxsuSIWbWtytlB/Afig/oVcSXJCUfHl8WLW', '', '', '', 1, ''),
(32, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-01-31', 'female', 'zone4', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$PnwpqPNb5NoX.O9NG605Ee/5qp2kR8wZELKVIz6QvJHvrBYBwHZwe', '$2y$10$eSDfHCxxTE./vYUuZIx3.O09rn53Ba1nGH/qsfXCdvqPTeqRKWwOm', '', '', '', 1, ''),
(33, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-01-31', 'female', 'zone4', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$vCbKZgTBZmAnmZo8c5YgOOIFaK7xocenrBUOWmAqrwARCS.78TnxK', '$2y$10$R6OpxlvzflgzLahBjJPoRubjIvYWZcvKEYyp6qn.qse651nC3cNGS', '', '', '', 1, ''),
(34, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-01-31', 'female', 'zone4', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$uiv/t.IiOiXQM9hRxBsjJOZJII5xQMed60sZBWSs6FP47Y/T2pYKS', '$2y$10$6hs1wrfks5oJA9kZ4zNQxerppKFG37w5GivpKPj.P9TZbkJ1awd/a', '', '', '', 1, ''),
(35, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-04-13', 'female', 'cabatangan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$QHRPvH4BdmCHUeyXchlyi.lBbi9fDp28C7J1ruFU59Z.NRE5cMdVC', '$2y$10$h5.umKErM0tvr7gvUItIKOwjswZeHUvLSiZs.SJ.JNWvjIhH3fZ/6', '', '', '', 1, ''),
(36, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-04-13', 'female', 'cabatangan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$x3J5IHMQL44l0Lk.YTDYiOi/BQxnF/B7X/Z4NAqP3a84QixUwt8hW', '$2y$10$5XbqbB1B/D128yUfaVOGPecZzmeGDmWTNwahADij3j4MvWMZ89m0e', '', '', '', 1, ''),
(37, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-04-13', 'female', 'cabatangan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$xU9a0MODYOQCEzOq8aWxkuTfkrmm1iMzFv/V/IDZaxWQHtyARBy.i', '$2y$10$EyyyK8.dFKOAdREBtkKrT.Z2EsRaIIxUCsww2jEO7oHhRuO6eOZjm', '', '', '', 1, ''),
(38, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-04-13', 'female', 'cabatangan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$VEXlbXdBeq.YxHuUgMHpgewsxzT7Fw.qkE7lH0gXtN50ck2oT4hfq', '$2y$10$B4BBy6AsYO7nF.clD7Q8C.56V/dvuX8Y4DVKu/WcYUriMt8CvvvK2', '', '', '', 1, ''),
(39, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-04-13', 'female', 'cabatangan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$5iXQXv63e6Df5udfXz3O4uoukUwij5xiw7zunmQnatrbE5Cy4Wohe', '$2y$10$HG0U2Ev.wrkN0NM3rt/NxuLgYxCmaIn04ha1bfpAVTc6SNjJ41LcS', '', '', '', 1, ''),
(40, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-04-13', 'female', 'cabatangan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$70BFZbSlV.E4mx4T1J4InO.jXqFx5fHHERYpcoYCwyqwKGYiZw0Sy', '$2y$10$u3ROmWDBUyf183xz2zrk8ub3NVMtH5YR7c//Kb/3B01ZASNv3XUNa', '', '', '', 1, ''),
(41, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-04-13', 'female', 'cabatangan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$daHvqer.yS2PC0hOtR4bJOtUEVU2Eh84MccOtY.KJ02yiRdnE/.XO', '$2y$10$vEwuxPF.Q3oo3AwLwQ7IR.zdNI6j35CZWuneEwCihipdPTcmBfMym', '', '', '', 1, ''),
(42, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-04-13', 'female', 'cabatangan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$0bcRgZ53PbGszgXKCr9Neek/EAd6QracADAavB/gXM96tYQkcd9SW', '$2y$10$h7fjPsxbzgkGrXJKiGZntO0xIVzlzsrxly5HzAYlwYVEsNfBKceIa', '', '', '', 1, ''),
(43, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-04-13', 'female', 'cabatangan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$YAkDpFzl/ZIO7TJ2gr7kZ.bBncQIbdlDfGP3L4YvbAkbTGMR6n9te', '$2y$10$lNvzFNK.T/KcIR04Kaq.ZeWsHkrF0FsISOMVPgVkGuBAkfdfAMN/W', '', '', '', 1, ''),
(44, 'Mohammad Sali', 'Sangka', 'Jauhari', '2024-04-13', 'female', 'cabatangan', 'zambocity', 'delsur', 7000, 2147483647, 'mohammadsalij@gmail.com', 'Mj123', '$2y$10$Ni55Eygx7mBlSn2Vm85qQeitostTt0nrOrsIfoa2Er4X36OLPug8O', '$2y$10$3I4RMySIRV29pDQZK2BbVuSDo3/F4AssSLhvPTmvMirJ5Yaak6RpC', '', '', '', 1, ''),
(45, 'Al-hamja', 'Sangka', 'Ibrahim', '2024-01-28', 'male', 'busay', 'zambocity', 'delsur', 7000, 2147483647, 'cheezy.cham@gmail.com', 'chum', '$2y$10$lIZrrUqxgg2ztA5aweNny.a40abxG5GhzhGbi5BYzYG3N/9HG53O.', '$2y$10$MfkEoougjRFLYRt0/DcUeO94zb8j2wt3xGY8XF5S5jH/iF7pdK/Mm', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `vehicletype` varchar(250) NOT NULL,
  `platenumber` varchar(20) NOT NULL,
  `model` varchar(250) NOT NULL,
  `engine` varchar(250) NOT NULL,
  `transmission` varchar(250) NOT NULL,
  `exterior` varchar(250) NOT NULL,
  `bodystyle` varchar(250) NOT NULL,
  `seating` varchar(250) NOT NULL,
  `interior` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `account_ID`, `vehicletype`, `platenumber`, `model`, `engine`, `transmission`, `exterior`, `bodystyle`, `seating`, `interior`) VALUES
(0, 0, 'motorcycle', 'qaz123', 'qwerty', 'asdfg', 'zxcvb', 'qazxsw', 'edcvfr', 'tgbnhy', 'ujmkiol'),
(4, 0, 'motorcycle', 'qaz123', 'qwerty', 'asdfg', 'zxcvb', 'poiuy', 'lkjhg', 'mnbvc', 'ujmkiol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
