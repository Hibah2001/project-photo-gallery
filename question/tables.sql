--
-- Database: `tutorialzine_demos`
--

-- --------------------------------------------------------

--
-- Table structure for table `qod_answers`
--

CREATE TABLE IF NOT EXISTS `qod_answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qid` int(5) unsigned NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `qid` (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `qod_answers`
--

-- --------------------------------------------------------

--
-- Table structure for table `qod_questions`
--

CREATE TABLE IF NOT EXISTS `qod_questions` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `qod_questions`
--

INSERT INTO `qod_questions` (`id`, `question`) VALUES
(1, 'How do turtles work?'),
(2, 'What does Santa do during the summer?'),
(3, 'Why are oranges round?'),
(4, 'Why Hawaii And Norway are not near each other?'),
(5, 'Frogs - friends or foes?'),
(6, 'Hot or cold?'),
(7, 'Do you like chocolate?'),
(8, 'Do pandas really know kung-fu?'),
(9, 'Which is heavier - 10 donkeys or an elephant?');
