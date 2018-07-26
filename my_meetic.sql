-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 26 Juillet 2018 à 13:42
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_meetic`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `sexe` varchar(100) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `statue` varchar(100) DEFAULT NULL,
  `compte_supprimer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `date_naissance`, `sexe`, `ville`, `email`, `password`, `statue`, `compte_supprimer`) VALUES
(24, 'BLOHORN', 'Barbara', '1993-06-01', 'homme', 'Lyon', 'barbara.blohorn@epitech.eu', 'lol', 'on', NULL),
(25, 'BLOHORN', 'barbara', '1993-06-01', 'femme', 'Gaillard', 'barbara.blohorn@epitech.eu', 'lol', 'on', NULL),
(26, 'Martinot', 'Vivien', '1993-11-01', 'homme', 'Moulins', 'vivien.martinot@epitech.eu', 'xd', NULL, NULL),
(27, 'Gomez', 'Raphael', '1999-02-02', 'homme', 'Tours', 'gomez.raphael@epitech.eu', 'popo', NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Blo ho    rn', 'Bar bar    a', '1993-06-01', 'femme', 'Jura', 'barbara.blohorn@lol.fr', 'plpl', NULL, NULL),
(30, 'Blohorn', 'Bar bar    a', '1993-06-01', 'femme', 'Jura', 'barbara.blohorn@lol.fr', 'plpl', NULL, NULL),
(31, 'Blobloblo', 'l        ol ', '1993-06-01', 'femme', 'perigueux', 'lol@mail.fr', 'xd', NULL, NULL),
(32, 'Gomez', 'Raphael', '1999-02-02', 'homme', 'Tours', 'gomez.raphael@epitech.eu', 'popo', NULL, NULL),
(33, 'Defontaine', 'Quentin', '2002-01-01', 'homme', 'nord', 'defontaine@lol.com', 'defond', NULL, NULL),
(34, 'Blobloblo', 'lol', '1993-06-01', 'femme', 'perigueux', 'lol@mail.fr', 'xd', NULL, NULL),
(35, 'Babsy', 'LOL', '1993-06-01', 'femme', 'lol', 'lol@lol.fr', 'zouzou', NULL, NULL),
(36, 'Defontaine', 'Quentin', '2002-01-01', 'homme', 'nord', 'defontaine@lol.com', 'defond', NULL, NULL),
(37, 'kuzunoha', 'Barbara', '1993-06-01', 'homme', 'Lyon', 'kuzunohaSymple@lol.fr', 'lol', NULL, NULL),
(38, 'Hola', 'Gracia', '1993-06-01', 'femme', 'Grenoble', 'kikoo@kikoo.fr', 'kikoo', NULL, NULL),
(39, 'Heuline', 'floflo', '1993-06-01', 'homme', 'Grenoble', 'floflo@lol.fr', 'floflo', NULL, NULL),
(40, 'Blohorn', 'lol', '1993-06-01', 'Homme', 'Lyon', 'zouzou@zouzou', '', NULL, NULL),
(41, 'Kuzu', 'Noha', '1993-06-01', 'femme', 'Lyon', 'kuzu@kuzulive.fr', 'lol', NULL, NULL),
(42, 'lola', 'garcia', '1993-06-01', 'femme', 'Lyon', 'lol@lolololo.fr', 'xd', NULL, NULL),
(43, 'Barbara', 'l', '1993-06-01', 'femme', 'Paris', 'paris@l.fr', 'fr', NULL, NULL),
(44, 'barbara', 'jean-pierre', '1993-06-01', 'femme', 'Lyon', 'mmm@mm.com', 'lol', NULL, NULL),
(45, 'Bonjour', 'Salut', '2014-08-29', 'homme', 'zou', 'zou@hotmail.frlol', '', NULL, NULL),
(46, 'Blohorn', 'Barbara', '2004-06-01', 'femme', 'Lyon', 'zuzu@zuzu.com', 'zu', NULL, NULL),
(47, 'barbara', 'lol', '2018-01-01', 'homme', 'Lyon', 'lili@lili.fr', 'lili', NULL, NULL),
(48, 'barbara', 'lol', '1993-06-01', 'homme', 'Lyon', 'barbara.bloho@epitech.eu', 'lol', NULL, NULL),
(49, 'Guerra', 'Antoine', '1996-09-20', 'homme', 'Lyon', 'antoine.guerra@epitech.eu', 'lol', NULL, NULL),
(50, 'lol', 'lol', '2018-01-01', 'homme', 'lol', 'lollolol@lololol.fr', 'lol', NULL, NULL),
(51, 'Blohorn', 'Barbara', '1993-06-01', 'femme', 'Lyon', 'babsy.bloblo@babsy.fr', 'lol', NULL, NULL),
(52, 'barbara', 'barabr', '2018-01-01', 'femme', 'lol', 'lol.lol.lol@lol.lol.fr', 'lol', NULL, NULL),
(53, 'lo', 'lo', '1994-08-01', 'homme', 'lo', 'dtyuio@fghjk.rt', 'lo', NULL, NULL),
(54, 'lo', 'mp', '1990-04-30', 'homme', 'kjhgffgh', 'oiuuuuuuuuuuu@fr.fr', 'oiu', NULL, NULL),
(55, 'isjd', 'sdj', '1986-01-01', 'homme', 'lkj', 'lkjhsjkf@dkjj.fr', 'lol', NULL, NULL),
(56, 'mlnflkjh', 'kjhhj', '1993-06-01', 'homme', 'kjh', 'sdzozjdqlfknsel@dkfnkd.fr', 'lol', NULL, NULL),
(57, 'mlnflkjh', 'kjhhj', '1993-06-01', 'homme', 'kjh', 'sdzozjdqlfknsel@dkflnkd.fr', 'lol', NULL, NULL),
(58, 'mlnflkjh', 'kjhhj', '1993-06-01', 'homme', 'kjh', 'sdzozjdkkkqlfknsel@dkflnkd.fr', 'lol', NULL, NULL),
(59, 'mlnflkjh', 'kjhhj', '1993-06-01', 'homme', 'kjh', 'ggggsdzozjdkkkqlfknsel@dkflnkd.fr', 'lol', NULL, NULL),
(60, 'mlnflkjh', 'kjhhj', '1993-06-01', 'homme', 'kjh', 'ggggllllsdzozjdkkkqlfknsel@dkflnkd.fr', 'lol', NULL, NULL),
(61, 'mlnflkjh', 'kjhhj', '1993-06-01', 'homme', 'kjh', 'ggggllllsdzoppzjdkkkqlfknsel@dkflnkd.fr', 'lol', NULL, NULL),
(62, 'mlnflkjh', 'kjhhj', '1993-06-01', 'homme', 'kjh', 'ggggllllsdhhzoppzjdkkkqlfknsel@dkflnkd.fr', 'lol', NULL, NULL),
(63, 'mlnflkjh', 'kjhhj', '1993-06-01', 'homme', 'kjh', 'ggggllllsdlllhhzoppzjdkkkqlfknsel@dkflnkd.fr', 'lol', NULL, NULL),
(64, 'mlnflkjh', 'kjhhj', '1993-06-01', 'homme', 'kjh', 'ggggllllshhhdlllhhzoppzjdkkkqlfknsel@dkflnkd.fr', 'lol', NULL, NULL),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL),
(66, 'kii', 'kiu', '2016-01-01', 'homme', 'kjh', 'iy@kskjdd.fr', 'lol', NULL, NULL),
(67, 'kii', 'kiu', '1934-01-01', 'homme', 'kjh', 'iy@kskjkdd.fr', 'lol', 'on', NULL),
(68, 'kii', 'kiu', '2014-01-01', 'homme', 'kjh', 'iy@kskjkdjjjd.fr', 'lol', 'of', NULL),
(69, 'lol', 'lol', '2004-01-01', 'homme', 'lol', 'lol@lol.lol', 'lol', 'of', NULL),
(70, 'Barbara', 'Arara', '1993-06-01', 'femme', 'Villeurbanne', 'villeurbanne@ville.fr', 'lol', 'on', NULL),
(71, 'barbaea', 'jdkspoff', '2013-08-01', 'homme', 'lkjkd', 'sfjkehflzejdkzue@lol.com', 'lol', 'of', NULL),
(72, 'Symple', 'Kuzunoha', '1993-06-01', 'femme', 'Villeurbanne', 'kuzu@noha.com', '$2y$10$6nLpU0ZVq6PPj32ghZwCF.Z3wB4esRYLaexf/IXdsDqtt4EODzCsG', 'on', NULL),
(73, 'zouzou', 'zouzou', '1985-08-15', 'homme', 'zouzou', 'land@fr.com', '$2y$10$RfneN3hMnMiKcX7nshsp..m640PJqfJ7Fc5EeC8jMtPTuuGgspwKe', 'on', NULL),
(74, 'Bonjour', 'Bonjour', '1993-06-01', 'femme', 'Bonjour', 'bonjour@matin.com', '$2y$10$XS4CdIGypGat.qkZ.VItK.WIKh0dpYGsV95sbz8gNiXqR74BSSHPO', 'on', NULL),
(75, 'looool', 'loool', '1987-12-01', 'homme', 'loool', 'coucou@coucou.com', '$2y$10$QRJ9jVb7AostZWfCzQMzDuxuQPHkZ01hON0UDlgw96g5tQSFxr1WG', 'on', NULL),
(76, 'max', 'max', '2018-01-01', 'homme', 'tt', 'm.m@m', '$2y$10$ke04erYHEAo/lzw3uqmRhOu0jAdYjCwguwVRtGxI.I.7Fw4dPTWoq', 'of', NULL),
(77, 'm', 'm', '1965-01-01', 'homme', 'm', 'mm@m.m', '$2y$10$biuZLcfySMOaevAI.uMlh.8eBOBsmtgno6Eg8CBC1HEsQSlpfuQ4u', 'on', NULL),
(78, 'lol', 'lol', '1993-06-01', 'homme', 'zuzu', 'lulu@lulu', 'lol', 'on', NULL),
(79, 'ola', 'ola', '2015-11-01', 'homme', 'ok', 'ok@ok', '$2y$10$gRprLZ12T/yRJ9xRHNMUH.dRH09Sfnu5f/k1Bo.kVCVI1yawGc32i', 'of', NULL),
(80, 'Blohorn', 'Barbara', '1993-06-01', 'Femme', 'Villeurbanne', 'baba@baba', '$2y$10$3nLfYBvGxNaQpJtmJ9bRyum641Q7wow59Jtwg7GCvHJWfGrdynZKy', 'on', 'delete'),
(81, 'Lala', 'lulu', '1963-06-01', 'Femme', 'Lalaville', 'lala@lulu', '$2y$10$bpPZESc9B8GkuoBguPNjqeoUGv2fp2NE6BuQStNN43x/zz9gd6m2m', 'on', NULL),
(82, 'Chambru', 'Loris', '1997-05-16', 'homme', 'Miribel', 'loris.chambru@epitech.eu', '$2y$10$NYgxK1kyGym6mXSeOaSWCeVL2QkoAKyG/iWpZQnJinREIOC7rPGUy', 'on', NULL),
(83, 'gomess', 'raphael', '1994-09-09', 'homme', 'tours', 'raphael@hotmail.fr', '$2y$10$J7CibA2D674Q9uQyq3FVrO8xBcNB/gkxsphzxNkjDrrkfdvQvkG3u', 'on', 'delete'),
(84, 'heuline', 'flo', '2010-09-09', 'homme', 'metz', 'flolegay@hotmail.fr', '$2y$10$xEu/JY3aty5L6WGBzUPC1unPRWnIL83lBbHvfUst9RkWzHgGIZm5a', 'of', NULL),
(85, 'merault', 'shade', '1995-09-09', 'homme', 'tours', 'shade@hotmail.fr', '$2y$10$sV9VUp.EpPb5ivW3J8qWYOwmc45aMrxTmQtPYyApbaMpRaGN1tSGS', 'on', NULL),
(86, 'ijjujuj', 'jjjhjhjhjh', '2000-12-01', 'homme', 'nhhgfghhh', 'theo@hotmail.fr', '$2y$10$7O9B2DwBsebit7y3.rbk.OZ71wYoyY4qbPuXh9sa7qjeBRpfEMOma', 'of', NULL),
(87, 'ertyitygyuyu', 'kloioio', '1932-11-30', 'homme', 'kldkdk', 'gomes@hotmail.fr', '$2y$10$UnOU7vkQEd3lme6nBDNGEe5PbKgQeZ71tHmYxnE3dgolPkhh6v1ui', 'on', NULL),
(88, 'chapel', 'kevin', '1973-04-06', 'autre', 'Lyon', 'chapel@hotmail.fr', '$2y$10$/QnDUMuFXbP14nPUiErE8eoqSLHf.gip.iSK5Psfy2sidIHXvz2ea', 'on', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
