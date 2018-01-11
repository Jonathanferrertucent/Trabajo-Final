-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2018 a las 17:13:15
-- Versión del servidor: 5.7.17
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quizproject`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiz`
--

CREATE TABLE `quiz` (
  `ID` int(11) NOT NULL,
  `Question` varchar(250) NOT NULL,
  `Answer1` varchar(250) NOT NULL,
  `Answer2` varchar(250) NOT NULL,
  `Answer3` varchar(250) NOT NULL,
  `Answer4` varchar(250) NOT NULL,
  `CorrectAnsw` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quiz`
--

INSERT INTO `quiz` (`ID`, `Question`, `Answer1`, `Answer2`, `Answer3`, `Answer4`, `CorrectAnsw`) VALUES
(1, 'What does HTML stand for?', 'Hyper Text Markup Language', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'Highly Text Markup Language', 'Hyper Text Markup Language'),
(2, 'Who is making the Web standards?', 'Microsoft', 'Google', 'The World Wide Web Consortium', 'Mozilla', 'The World Wide Web Consortium'),
(3, 'What is the HTML element to bold a text?', 'b', 'bold', 'wide', 'big', 'b'),
(4, 'What is the HTML tag for a link?', 'link', 'ref', 'a', 'hper', 'a'),
(5, 'What does CSS stand for?', 'Creative Style Sheets', 'Colorful Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets', 'Cascading Style Sheets'),
(6, 'Where in an HTML document is the correct place to refer to an external style sheet?', 'In the body section', 'At the end of the document', 'At the top of the document', 'In the head section ', 'In the head section '),
(7, 'Which HTML tag is used to define an internal style sheet?', 'script', 'css', 'style', 'link', 'style'),
(8, 'Which is the correct CSS syntax?', 'body:color=black;', '{body;color:black;}', 'body {color: black;}', '{body:color=black;}', 'body {color: black;}'),
(9, 'Which property is used to change the background color?', 'background-color', 'color', 'bgcolor', 'bg-color', 'background-color'),
(10, 'What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Personal Hypertext Processor', 'Personal Home Page', 'Private Home Page', 'PHP: Hypertext Preprocessor'),
(11, 'Which of the following is the way to create comments in PHP?', '// commented code to end of line', '/* commented code here */', '# commented code to end of line', 'all of the above - correct', 'all of the above - correct'),
(12, 'What is the correct way to end a PHP statement?', ';', '.', ':', 'New Line', ';'),
(13, 'PHP server scripts are surrounded by delimiters, which?', '<?php ... /?>', '<?php ... ?>', '<script ... /script>', '<amp ... /amp>', '<?php ... ?>'),
(14, 'What language does the computer use and understand?', 'High-level', 'Assembly', 'Machine', 'None of the above', 'Machine'),
(15, 'Which of the following is the most powerful type of computer?', 'Super–micro', 'Super conductor', 'Super computer', 'Megaframe', 'Super computer'),
(16, 'C is', 'A third generation high level language', 'A machine language', 'An assembly language', 'All of the above', 'A third generation high level language'),
(17, 'One byte is equivalent to', '4 bits', '8 bits', '16 bits', '32 bits', '8 bits');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `quiz`
--
ALTER TABLE `quiz`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
