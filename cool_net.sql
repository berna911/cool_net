-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2017 at 02:14 AM
-- Server version: 5.5.53
-- PHP Version: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cool_net`
--

-- --------------------------------------------------------

--
-- Table structure for table `us_albums`
--

CREATE TABLE `us_albums` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `us_career`
--

CREATE TABLE `us_career` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_jobPlace` varchar(255) NOT NULL,
  `car_start` int(4) NOT NULL,
  `car_end` int(4) NOT NULL,
  `car_country` varchar(150) NOT NULL,
  `car_dol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `us_career`
--

INSERT INTO `us_career` (`id`, `user_id`, `car_jobPlace`, `car_start`, `car_end`, `car_country`, `car_dol`) VALUES
(1, 0, 'Mvc', 2012, 2015, 'Ukr', 'Front-end'),
(2, 3, 'Mvc', 2012, 2015, 'Ukr', 'Front-end');

-- --------------------------------------------------------

--
-- Table structure for table `us_dialogs`
--

CREATE TABLE `us_dialogs` (
  `id` int(11) NOT NULL,
  `users` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `us_dialogs`
--

INSERT INTO `us_dialogs` (`id`, `users`) VALUES
(1, '3;4'),
(2, '3;5'),
(3, '4;5');

-- --------------------------------------------------------

--
-- Table structure for table `us_highObr`
--

CREATE TABLE `us_highObr` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `high_country` varchar(100) NOT NULL,
  `high_city` varchar(100) NOT NULL,
  `high_vuz` varchar(255) NOT NULL,
  `high_fakultet` varchar(255) NOT NULL,
  `study_form` enum('Очная','Очно-заочная','Заочная','Экстернат','Дистанционная') NOT NULL,
  `high_status` varchar(50) NOT NULL,
  `high_date` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `us_highObr`
--

INSERT INTO `us_highObr` (`id`, `user_id`, `high_country`, `high_city`, `high_vuz`, `high_fakultet`, `study_form`, `high_status`, `high_date`) VALUES
(1, 0, 'Ukr', 'Zhit', 'ZTK', 'Programming', 'Дистанционная', 'Student', 2017),
(2, 3, 'Ukr', 'Zhit', 'ZTK', 'Programming', 'Дистанционная', 'Student', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `us_main`
--

CREATE TABLE `us_main` (
  `id` int(11) NOT NULL,
  `sys_email` varchar(25) NOT NULL,
  `sys_telephone` varchar(30) NOT NULL,
  `sys_link` varchar(25) NOT NULL,
  `sys_avatar` varchar(200) NOT NULL,
  `main_status` varchar(150) NOT NULL,
  `main_name` varchar(30) NOT NULL,
  `main_lastName` varchar(15) NOT NULL,
  `main_sex` varchar(80) NOT NULL,
  `main_relationship` enum('Не женат','Всречаюсь','Помолвлен','Женат','В гражданском браке','Влюблён','Всё сложно','В активном поиске') NOT NULL,
  `main_birthdate` date NOT NULL,
  `main_city` varchar(70) NOT NULL,
  `main_languages` varchar(255) NOT NULL,
  `main_grandfamily` varchar(255) NOT NULL,
  `main_family` varchar(255) NOT NULL,
  `main_brSys` varchar(255) NOT NULL,
  `main_childs` varchar(255) NOT NULL,
  `main_grandchilds` varchar(255) NOT NULL,
  `main_birthdayShow` enum('Не показувати дату народження','Показувати тількі місяць та день','Показувати тільки дату народження') NOT NULL,
  `cont_country` varchar(40) NOT NULL,
  `cont_city` varchar(60) NOT NULL,
  `cont_rayon` varchar(60) NOT NULL,
  `cont_metro` varchar(40) NOT NULL,
  `cont_street` varchar(150) NOT NULL,
  `cont_name` varchar(150) NOT NULL,
  `cont_telephone` varchar(150) NOT NULL,
  `cont_secondTelephone` varchar(150) NOT NULL,
  `cont_skype` varchar(150) NOT NULL,
  `cont_sait` varchar(150) NOT NULL,
  `int_deatel` text NOT NULL,
  `int_interest` text NOT NULL,
  `int_music` text NOT NULL,
  `int_films` text NOT NULL,
  `int_teleshow` text NOT NULL,
  `int_books` text NOT NULL,
  `int_games` text NOT NULL,
  `int_citats` text NOT NULL,
  `int_about` text NOT NULL,
  `lifePos_politic` enum('Индифферентные','Коммунистические','Социалистические','Умеренные','Либеральные','Консервативные','Монархические','Ультраконсервативные','Либертариансие') NOT NULL,
  `lifePos_world` varchar(150) NOT NULL,
  `lifePos_life` enum('Семья и дети','Карьера и деньги','Развлечения и отдых','Наука и исследование','Совершенствование мира','Саморазвитие','Касота и искусство','Слава и влияние') NOT NULL,
  `lifePos_people` enum('Ум и креативность','Доброта и честность','Красота и здоровье','Власть и богатство','Смелость и упорстно','Юмор и жизнелюбие') NOT NULL,
  `lifePos_smoke` enum('Резко негативное','Негативное','Компромиссное','Нейтральное','Положительное') NOT NULL,
  `lifePos_alco` enum('Резко негативное','Негативное','Положительное','Компромиссное','Нейтральное') NOT NULL,
  `lifePos_vdoh` varchar(150) NOT NULL,
  `rel_friends` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `us_main`
--

INSERT INTO `us_main` (`id`, `sys_email`, `sys_telephone`, `sys_link`, `sys_avatar`, `main_status`, `main_name`, `main_lastName`, `main_sex`, `main_relationship`, `main_birthdate`, `main_city`, `main_languages`, `main_grandfamily`, `main_family`, `main_brSys`, `main_childs`, `main_grandchilds`, `main_birthdayShow`, `cont_country`, `cont_city`, `cont_rayon`, `cont_metro`, `cont_street`, `cont_name`, `cont_telephone`, `cont_secondTelephone`, `cont_skype`, `cont_sait`, `int_deatel`, `int_interest`, `int_music`, `int_films`, `int_teleshow`, `int_books`, `int_games`, `int_citats`, `int_about`, `lifePos_politic`, `lifePos_world`, `lifePos_life`, `lifePos_people`, `lifePos_smoke`, `lifePos_alco`, `lifePos_vdoh`, `rel_friends`) VALUES
(3, 'b.xack@mail.ru', '380918023071', 'csm', 'header.jpg', 'Yo bich motherfuckааааааа', 'max', 'Berna', 'M', 'Помолвлен', '2017-06-14', 'Rado', 'Ukr', 'Bab', 'Pap', 'Sys', 'Ch', 'GChi', 'Показувати тількі місяць та день', 'Ukr', 'Zhit', 'Bogun', 'Met', 'Kot', 'Zt', '380973503137', '380918023071', 'berna9111', 'https://cn.net', 'Programmer', 'Programming', 'Dance', 'Fightings', 'No', 'About programming', 'Logic', 'It\'s good', 'Cool guy', 'Умеренные', 'Poh', 'Карьера и деньги', 'Власть и богатство', 'Компромиссное', 'Негативное', 'Played', '5;4;'),
(4, 'dinchik@mail.ua', '380634203560', 'csm.net/denchik', 'denia.png', 'Всім хаюшкі', 'Денис', 'Шатилович', 'M', 'В активном поиске', '1999-07-20', 'Радомишль', 'Українська;Англійська;Російська;', 'Бабуся;Дідусь;', 'Мама;Батько;', 'Брат;Сестра;', '', '', 'Показувати тільки дату народження', 'Україна', 'Київ', 'Шелявський', 'Шелявська', 'Шалявка 19', 'Гуртожиток НАУ', '380634203560', '380654278923', 'denchik', 'csm.net/denchik', 'Студент', 'Волейбол, бокс', 'Російський Реп, dance.', 'Бойовички, про бізнес.', 'Не цікавлять.', 'Зв\'язані з маркетингом.', 'Far cry, Crysis.', '', 'Норм поц', 'Умеренные', '', 'Развлечения и отдых', 'Ум и креативность', 'Резко негативное', 'Нейтральное', 'Єбланство.', '3;'),
(5, 'vovanich@ukr.net', '380638907634', 'csm.net/vovanich', 'vovanich.png', 'Го го го ', 'Вован', 'Марчук', 'M', 'Всречаюсь', '1998-07-28', 'Радомишль', 'Українська;Російська;', 'Бабуся;Дідусь;', 'Мама;Тато;', 'Сестра;Брат;', '', '', 'Показувати тільки дату народження', 'Україна', 'Київ', 'Солом\'янський', 'Вокзальна', 'вул.Солом\'янська 17', 'будинок 3А', '380639874561', '', 'vovanich', 'csm.net/vovanich', 'Охоронна служба', 'Бокс, волейбол, тяжка атлетика і т.д.', 'Російський реп, dance.', 'Бойовики та інша хрінь.', 'Не цікавлять', 'Том сойер, гаррі поттер.', 'Не граю.', '', 'Чоткій пацан.', 'Умеренные', '', 'Развлечения и отдых', 'Доброта и честность', 'Резко негативное', 'Положительное', 'Спорт', '');

-- --------------------------------------------------------

--
-- Table structure for table `us_messages`
--

CREATE TABLE `us_messages` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `dialog_id` int(11) NOT NULL,
  `text` mediumtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `us_messages`
--

INSERT INTO `us_messages` (`id`, `from_id`, `dialog_id`, `text`, `date`) VALUES
(1, 3, 1, 'Привіт', '2017-07-10'),
(2, 3, 2, 'Здоров', '0000-00-00'),
(3, 4, 1, 'Привіт', '2017-07-10'),
(4, 5, 2, 'Здоров', '2017-07-10'),
(11, 3, 1, 'Шо ти там?', '2017-07-10'),
(12, 4, 1, 'Та хоть би шо)', '2017-07-10'),
(13, 4, 1, 'Еееех', '2017-07-18'),
(14, 4, 1, 'Короч бро, я погнав, чуть шо, пиши)', '2017-07-18'),
(15, 3, 1, 'Ну давай, потов спишемся', '2017-07-18'),
(16, 4, 3, 'Привіт Вован, як ти там?)', '2017-07-18'),
(17, 4, 3, 'Еееей', '2017-07-18'),
(18, 5, 3, 'Та норм так, а ти шо там?', '2017-07-18'),
(19, 5, 2, 'Шо ти там берна?', '2017-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `us_photo`
--

CREATE TABLE `us_photo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `us_photo`
--

INSERT INTO `us_photo` (`id`, `user_id`, `photo`) VALUES
(1, 4, 'denia.png'),
(2, 4, 'denia2.png'),
(3, 4, 'denia3.png'),
(4, 4, 'denia4.png'),
(5, 5, 'vovanich.png'),
(8, 5, 'vovanich2.png'),
(9, 5, 'vovanich3.png'),
(10, 5, 'vovanich4.png'),
(11, 3, 'header.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `us_posts`
--

CREATE TABLE `us_posts` (
  `id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `us_posts`
--

INSERT INTO `us_posts` (`id`, `author`, `date`, `text`, `likes`) VALUES
(1, 3, '2017-07-02', 'Всім привіт - це мій перший пост.', 0),
(3, 3, '2017-07-07', 'Це мій другий пост', 0),
(4, 4, '2017-07-08', 'Привіт!)\r\nЯ Денис і це мій перший пост!))) ', 0),
(5, 4, '2017-07-08', 'Привіт!)\r\nЯ Денис і це мій перший пост!))) ', 0),
(6, 5, '2017-07-05', 'Привіт, я Вова!)\r\nЦе мій перший пост!)))', 0),
(7, 5, '2017-07-09', 'Привіт, я Вова і це мій другий пост!)', 0),
(8, 5, '2017-07-09', 'Привіт, я Вова і це мій другий пост!)', 0),
(9, 3, '0000-00-00', 'Привіт - це мій ще один пост!))', 0),
(10, 3, '0000-00-00', 'А це ще один пост', 0),
(11, 3, '0000-00-00', 'І ще один, пустий пост', 0),
(12, 3, '0000-00-00', 'Привіт, а тут ще один пост', 0),
(13, 3, '0000-00-00', 'На і ще один пост', 0),
(14, 3, '0000-00-00', 'Поїхали по новому', 0),
(15, 3, '0000-00-00', 'Тестовий пост', 0),
(16, 3, '0000-00-00', 'І ще один тестовий', 0),
(17, 3, '0000-00-00', 'Третій тестовий пост', 0),
(18, 3, '0000-00-00', 'Четвертитй тестовий пост', 0),
(19, 3, '0000-00-00', 'Мугуууу', 0),
(20, 3, '0000-00-00', 'Мугуууу', 0),
(21, 3, '2017-07-09', 'Мугуууу', 0),
(22, 3, '2017-07-18', 'І тааак', 0),
(23, 4, '2017-07-18', 'Привіт, це мій перший тестовий пост', 0);

-- --------------------------------------------------------

--
-- Table structure for table `us_srObr`
--

CREATE TABLE `us_srObr` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sr_country` varchar(100) NOT NULL,
  `sr_school` varchar(255) NOT NULL,
  `sr_start` int(4) NOT NULL,
  `sr_end` int(4) NOT NULL,
  `sr_date` int(4) NOT NULL,
  `sr_class` varchar(4) NOT NULL,
  `sr_specialization` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `us_srObr`
--

INSERT INTO `us_srObr` (`id`, `user_id`, `sr_country`, `sr_school`, `sr_start`, `sr_end`, `sr_date`, `sr_class`, `sr_specialization`) VALUES
(2, 3, 'fewfwe', 'fewfwe', 2311, 2133, 2311, '1', 'fwefwe');

-- --------------------------------------------------------

--
-- Table structure for table `us_war`
--

CREATE TABLE `us_war` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `war_country` varchar(150) NOT NULL,
  `war_chast` varchar(150) NOT NULL,
  `war_start` int(4) NOT NULL,
  `war_end` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `us_war`
--

INSERT INTO `us_war` (`id`, `user_id`, `war_country`, `war_chast`, `war_start`, `war_end`) VALUES
(1, 3, 'Ukr', 'ffewfgwe', 2311, 2314);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `us_albums`
--
ALTER TABLE `us_albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us_career`
--
ALTER TABLE `us_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us_dialogs`
--
ALTER TABLE `us_dialogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us_highObr`
--
ALTER TABLE `us_highObr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us_main`
--
ALTER TABLE `us_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us_messages`
--
ALTER TABLE `us_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us_photo`
--
ALTER TABLE `us_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us_posts`
--
ALTER TABLE `us_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us_srObr`
--
ALTER TABLE `us_srObr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us_war`
--
ALTER TABLE `us_war`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `us_albums`
--
ALTER TABLE `us_albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `us_career`
--
ALTER TABLE `us_career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `us_dialogs`
--
ALTER TABLE `us_dialogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `us_highObr`
--
ALTER TABLE `us_highObr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `us_main`
--
ALTER TABLE `us_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `us_messages`
--
ALTER TABLE `us_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `us_photo`
--
ALTER TABLE `us_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `us_posts`
--
ALTER TABLE `us_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `us_srObr`
--
ALTER TABLE `us_srObr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `us_war`
--
ALTER TABLE `us_war`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
