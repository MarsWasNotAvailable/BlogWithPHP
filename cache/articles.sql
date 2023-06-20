-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2023 at 10:35 AM
-- Server version: 5.7.40
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_cookery`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idArticles` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(128) NOT NULL,
  `Date` date NOT NULL,
  `Category` varchar(80) NOT NULL,
  `ImageLink` varchar(250) NOT NULL,
  `Link` varchar(250) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`idArticles`),
  UNIQUE KEY `Title` (`Title`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`idArticles`, `Title`, `Date`, `Category`, `ImageLink`, `Link`, `Description`) VALUES
(1, 'Poulet Korma', '2020-06-01', 'Plat', 'recipe1.jpeg', 'article-individual.php', 'Le poulet Korma une recette venue d\'Asie centrale qui peut etre un peu ou tres epice, et peut se faire avec du mouton, du poulet, du boeuf ou du gibier.'),
(2, 'Glace a la cardamome', '2023-06-21', 'Dessert', 'recipe2.jpeg', 'article-individual.php', 'La glace a la cardamome essayez cette glace appelee kulfi. Entierement vegan, elle est composee de lait de coco, noix de coco raepe, sucre de coco, safran et cardamome pour un resultat frais, doux et irresistiblement parfume.'),
(3, 'Salade mediteraneen', '2017-06-21', 'Entree', 'recipe3.jpeg', 'article-individual.php', 'La salade nicoise une recette classique francaise de salade froide de riz agrementee de legumes au thon et oeufs. Ideal pour un repas frais d\'ete, un pique-nique improvise.'),
(4, 'Dhal salade', '2023-03-07', 'Entree', 'recipe4.jpeg', 'article-individual.php', 'Le dhal est un plat d\'origine indienne a base de legumineuses. Il est souvent a base de lentilles corail mais il peut etre aussi cuisine avec des pois chiches.\r\nVous pouvez deguster le dhal de lentilles corail avec un petit pain indien qui se presente sous forme de galette, le chapati.'),
(5, 'Pizza', '2013-06-26', 'Plat', 'recipe5.jpeg', 'article-individual.php', 'La pizza est un plat d\'origine italienne fait d\'une pate a pain etalee et de coulis de tomates, recouverte de divers ingredients et cuite au four (a bois, a gaz ou electrique).'),
(6, 'Chutney', '2020-09-24', 'Aperitifs', 'recipe6.jpeg', 'article-individual.php', 'Le chutney : une sauce, souvent aigre-douce, servie en accompagnement de la cuisine indienne, de la cuisine pakistanaise et de la cuisine sud-africaine.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
