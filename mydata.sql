SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `formchefs` (
  `pseudoo` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobilenumber` int not null,
  `gender` varchar(10) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `idtype` varchar(30) NOT NULL,
  `idnumber` int NOT NULL,
  `issueddate` date NOT NULL,
  `issuedstate` varchar(30) NOT NULL,
  `civilstatus` varchar(30) NOT NULL,
  `yearsofexp` int NOT NULL,
  `position` varchar(255) NOT NULL,
  `profcarrer` varchar(255) NOT NULL
    
   

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

