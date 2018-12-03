-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 ديسمبر 2018 الساعة 00:27
-- إصدار الخادم: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- بنية الجدول `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `time` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `todo`
--

INSERT INTO `todo` (`id`, `img`, `name`, `date`, `time`, `description`, `capacity`, `email`, `number`, `address`, `URL`, `Type`) VALUES
(1, 'https://cdn.kurier.at/img/100/224/218/diefuerchterlichenfuenf-0-290x500.jpg', 'Die fürchterlichen Fünf', '2018-12-04 10:30:00', '0000-00-00 00:00:00', 'Das Next Liberty macht Theater für Kinder und Jugendliche zwischen 4 und 16 Jahren.\r\n\r\nDie dritte Spielstätte der Bühnen Graz besteht in dieser Form seit dem Herbst 1995: Unter dem Titel \"Next Liberty\" (als Verweis auf die dominierende \"Freiheitsstatue\" v', '200 Person', '\r\n abeigl@theater-graz.com', 23654, 'Kaiser-Josef-Platz 10', ' www.nextliberty.com', 'THEATER'),
(2, 'https://cdn.kurier.at/img/100/201/496/next-liberty-der-schueler-gerber-124-c-lupi-spuma-290x500.jpg', 'Next Liberty', '2018-12-04 09:30:00', '0000-00-00 00:00:00', 'Die dritte Spielstätte der Bühnen Graz besteht in dieser Form seit dem Herbst 1995: Unter dem Titel \"Next Liberty\" (als Verweis auf die dominierende \"Freiheitsstatue\" vor dem Eingang) ist in dem ehemaligen Kinosaal der Thalia eine Bühne mit einem eigenen ', '50 Person', ' abeigl@theater-graz.com', 487843, 'Kaiser-Josef-Platz 10', ' www.nextliberty.com', 'THEATER'),
(3, 'https://cdn.kurier.at/img/100/213/096/conchita-band-290x500.jpg', 'Treibhaus', '2018-12-05 08:30:00', '0000-00-00 00:00:00', 'Allzuleicht macht es das Treibhaus seinen möglichen Besuchern wirklich nicht. Mehr als in einer Weise steht es abseits vom Innsbrucker Tourismustrampelpfad und der diesen unterwürfig ebnenden Kultur. Zwar zentral in der Innenstadt gelegen, weisen keine Sc', '60 Person', ' office@treibhaus.at', 325235, 'Angerzellgasse 8', ' www.treibhaus.at', 'POP / ROCK'),
(4, 'https://cdn.kurier.at/img/100/193/632/fantastischen-vier-html-290x500.jpg', 'Die Fantastischen Vier', '2019-01-09 08:00:00', '0000-00-00 00:00:00', 'Es gibt keine wie sie. Die Fantastischen Vier, die unverwüstlichen Wegbereiter des deutschen Sprechgesangs, sind auch 2018, im neunundzwanzigsten Jahr ihrer Karriere, mit einem neuem Album auf \"Captain Fantastic Tour\".', '150 Person', ' tickets@stadthalle.com', 487843, 'Vogelweidplatz 14', ' www.stadthalle.com', 'Kino'),
(5, 'https://cdn.kurier.at/img/100/232/625/fearleaders-vienna-290x500.jpg', 'Fearleaders Vienna', '2018-12-22 21:00:00', '0000-00-00 00:00:00', 'Der Fearelli 2019 Kalender kann und soll als Handbuch zu einem besseren Self in unserer sustainable eco-friendly Feelgood-Bubble gelesen werden. Täglich aufs Neue erinnert er sie und unsere Follower mit den heißesten Wohlfühltipps und den erfolgreichsten ', '150 Person', 'info@wuk.at', 1401210, '1090 Wien, Währinger Straße 59', ' www.wuk.at/programm/fearleaders-vienna-yolo-forever', 'Tanz'),
(6, 'https://cdn.kurier.at/img/100/232/709/sternennacht-290x500.jpg', 'Sternennacht', '2018-12-07 23:00:00', '0000-00-00 00:00:00', 'Sternennacht (niederländisch De sterrennacht) ist eines der bekanntesten Gemälde des niederländischen Künstlers Vincent van Gogh. Zuordnen lässt es sich dem späten Impressionismus und dem frühen Expressionismus.\r\nNur wenige Gründe sind bekannt, die den Kü', '200 Person', 'stern777@gmail.com', 325235, '1080 Wien, U-Bahnbogen 39-40, Lerchenfeldergürtel', 'www.facebook.com/events/182760612674743', 'PARTY'),
(7, 'https://cdn.kurier.at/img/100/232/392/2yrs-journey-to-tarab-290x500.jpg', '2 YRS Journey to Tarab | The Pyramid of Life', '2018-12-08 23:00:00', '0000-00-00 00:00:00', 'Samstag, 08. Dezember, kurz vor 12: Die Sirenen der allseits beliebten Apollo 12 spucken, wie wild und fast pünklich um 12, Konfetti aus allen Rohren. Es sind auch nur 11 von 12 Prosetscho Flaschen im Gefrierfach geplatzt, denn Journey to Tarab feiert 2 j', '100 Person', 'tarab77@gmail.com', 23576, '1090 Wien - Alsergrund, Spittelauer Lände 12', ' journeytotarab.at', 'PARTY'),
(8, 'https://cdn.kurier.at/img/100/223/182/heuschreckj.png', 'Kindertheater Heuschreck - Die Schatztaucherin', '2019-01-26 06:00:00', '0000-00-00 00:00:00', 'Theater Heuschreck präsentiert ein Generationen-Stück über eine quicklebendige Oma, die noch längst nicht zum alten Eisen gehört und ein sensibles Mädchen, das durch diese Großmutter wieder neues Vertrauen in die Welt und Lebensfreude gewinnt…', '75 Person', 'kind7777@gmail.com', 487843, '1010 Wien, Riemergasse 11', ' www.heuschreck.at', 'MUSICAL · THEATER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
