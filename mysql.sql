SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE DATABASE `studentinfo`;
USE `studentinfo`;


CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` longtext NOT NULL,
  `rollno` mediumtext NOT NULL,
  `regno` int(11) NOT NULL,
  `dname` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ;


INSERT INTO `students` (`id`, `sname`, `rollno`, `regno`, `dname`) VALUES
(21, 'Gulsan Kumar Jena', 'IIN-07-23', 1, 'Telecommunication'),
(22, 'Rahul Mahajan', 'IIN-06-22', 132, 'Computer Science'),
(30, 'Akshar Patel', 'IIN-05-18', 345, 'Information Technology');
