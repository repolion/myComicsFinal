-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Décembre 2016 à 01:23
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetlion`
--

-- --------------------------------------------------------

--
-- Structure de la table `collection_users`
--

CREATE TABLE `collection_users` (
  `id_user` int(11) DEFAULT NULL,
  `id_comics` int(11) DEFAULT NULL,
  `table_comics` text,
  `favoris` int(11) DEFAULT NULL,
  `lu` int(11) DEFAULT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dc_comics`
--

CREATE TABLE `dc_comics` (
  `id` int(11) NOT NULL,
  `titre` varchar(40) NOT NULL,
  `tome` int(11) NOT NULL,
  `collection` varchar(40) NOT NULL,
  `cover` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `mots_cles` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `dc_comics`
--

INSERT INTO `dc_comics` (`id`, `titre`, `tome`, `collection`, `cover`, `description`, `mots_cles`) VALUES
(1, 'Batman, La mort en cette cité', 1, 'dc_comics', 'batman_dini', 'Batman n''est pas seulement un super-héros, il est aussi le plus grand détective du monde. Si ses enquêtes l''amène souvent à se confronter à la pègre de Gotham, il devra cette fois-ci s''escrimer devant la haute société. Sur son chemin, il croisera le Sphinx, devenu enquêteur pour les plus fortunés, et développera même une romance contrariée avec la magicienne Zatanna. \r\n\r\n(DETECTIVE COMICS #821, 822, 823, 824, 826, 827, 828, 831, 833, 834, 837)', 'batman paul dini'),
(2, 'Batman, les rue de Gotham', 3, 'dc_comics', 'batman_dini2', 'Avec la disparition de Batman, suite à sa confrontation fatale avec Darkseid, un nouveau Batman fait son apparition à Gotham City. Comment la police de Gotham va-t-elle appréhender ce « nouveau » Chevalier Noir ? Sera-t-il seulement à la hauteur de son modèle ? C''est ce que le commissaire Gordon s''apprête à découvrir alors que Firefly déclenche une série d''incendies dévastateurs dans toute la ville. Au même moment, le milliardaire Bruce Wayne et ses projets de rénovations font les gros titres des journaux, s''attirant inexplicablement l''hostilité de Batman, Robin et des membres de la Justice League.', 'batman');

-- --------------------------------------------------------

--
-- Structure de la table `login_users`
--

CREATE TABLE `login_users` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `cle_d_activation` varchar(32) NOT NULL,
  `actif` int(11) NOT NULL,
  `newsletter` varchar(5) NOT NULL,
  `droits` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `login_users`
--

INSERT INTO `login_users` (`id`, `nom`, `prenom`, `password`, `email`, `cle_d_activation`, `actif`, `newsletter`, `droits`) VALUES
(29, 'Cordier', 'Olivier', '41bc5cc23a0da6c27b26c7fa3654c6d535c81f5a', 'mycomicsinfo@gmail.com', 'a78dd0dc62dca7ab619fe0726d5bec1d', 1, 'off', 1),
(35, 'Cordier', 'Olivier', '41bc5cc23a0da6c27b26c7fa3654c6d535c81f5a', 'cordier.olivier83@gmail.com', 'bf4a4a5cff52d73341a0dc9f60c2492e', 1, 'off', 0),
(38, 'Vansteenkiste', 'Nicolas', '41bc5cc23a0da6c27b26c7fa3654c6d535c81f5a', 'nvansteenkiste@heb.be', 'a3ce1996f00540512d8cbcd97b6cedf3', 1, 'off', 1);

-- --------------------------------------------------------

--
-- Structure de la table `marvel_now`
--

CREATE TABLE `marvel_now` (
  `id` int(11) NOT NULL,
  `titre` varchar(40) NOT NULL,
  `tome` int(11) NOT NULL,
  `collection` varchar(40) NOT NULL,
  `cover` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `mots_cles` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `marvel_now`
--

INSERT INTO `marvel_now` (`id`, `titre`, `tome`, `collection`, `cover`, `description`, `mots_cles`) VALUES
(1, 'All New Xmen', 1, 'marvel_now', 'All_New_Xmen_tome1', 'Les cinq premiers élèves du professeur X - Cyclope, Marvel Girl, Iceberg, Angel et le Fauve - débarquent à notre époque ! Et ils trouvent leur avenir et la concrétisation du rêve de Xavier bien éloignés de ce qu''ils avaient imaginés Avec des suppléments inédits ! (Contient les épisodes US All-New X-Men 1-5)', 'All new xmen X-men x men'),
(2, 'All New Xmen', 2, 'marvel_now', 'All_New_Xmen_tome2', 'Les premiers X-Men tentent de s''accoutumer ? notre ?poque mais la situation se complique soudainement lorsqu''ils deviennent la cible de Mystique et de Dents de Sabre ! Dans un m?me temps, certains mutants envisagent de rejoindre l''?quipe r?volutionnaire dirig?e par Cyclope. D?couvrez aussi leur rencontre avec les Avengers, en visite ? l''?cole d''Enseignement Sup?rieur Jean Grey. (Contient les ?pisodes US All-New X-Men 6-10, publi?s pr?c?demment dans X-MEN (V4) 3 ? 5)', 'All new xmen X-men x men'),
(3, 'All New Xmen', 3, 'marvel_now', 'All_New_Xmen_tome3', 'Les premiers X-Men s''adaptent peu ? peu ? leur nouvelle ?poque. Tandis que Jean Grey repousse les limites de ses pouvoirs, un autre membre prend la d?cision de rejoindre Cyclope et son ?quipe de r?volutionnaires. Puis, les jeunes X-Men sont confront?s aux Uncanny Avengers. (Contient les ?pisodes US All-New X-Men 11-15, publi?s pr?c?demment dans les revues X-MEN (V4) 5 ? 8)', 'All new xmen X-men x men'),
(4, 'All New Xmen', 4, 'marvel_now', 'All_New_Xmen_tome4', 'Le continuum espace-temps est en danger depuis l''arriv?e des tout premiers X-Men dans le pr?sent. Mais une autre ?quipe venue du futur va les forcer ? repartir. Les jeunes Cyclope et Marvel Girl prennent alors la fuite tandis qu''un myst?rieux ennemi attaque l''?cole d''Enseignement Sup?rieur Jean Grey. (Contient les ?pisodes US X-Men: Battle of the Atom 1-2 ; All-New X-Men 16-17 ; X-Men (2013) 5-6 ; Uncanny X-Men (2013) 12-13 ; Wolverine and the X-Men (2011) 36-37, publi?s pr?c?demment dans les revues X-MEN (V4) 9 et 10)', 'All new xmen X-men x men'),
(6, 'All New Xmen', 6, 'marvel_now', 'All_New_Xmen_tome6', 'Depuis son retour des prisons spatiales Shi''ar, la jeune Jean Grey est diff?rente, ses pouvoirs ont chang?. Mais elle a peu de temps pour explorer ses nouvelles capacit?s, car les X-Men doivent faire face ? la Confr?rie des Mauvais Mutants venus du futur ! (Contient les ?pisodes US All-New X-Men (2013) 25-30, publi?s pr?c?demment dans les revues X-MEN (V4) 18-22)', 'All new xmen X-men x men'),
(7, 'All New Xmen', 7, 'marvel_now', 'All_New_Xmen_tome7', 'Les jeunes X-Men voyagent aux quatre coins de l''univers Ultimate. Ils y rencontrent entre autres Miles Morales ! Avec l''aide de Spider-Man, pourront-ils rentrer chez eux ? (Contient les ?pisodes US All-New X-Men (2012) 31-36, publi?s pr?c?demment dans les revues X-MEN (V4) 18-22)', 'All new xmen X-men x men'),
(8, 'The Amazing Spiderman', 2, 'marvel_now', 'Amazing_Spiderman_tome2', 'Spider-Man fait ?quipe avec Miss Marvel et retrouve une figure de son pass?. Peter Parker ne se doute pas que la guerre du Spider-Verse a d?but?? (Contient les ?pisodes US Amazing spider-Man (2014) 7-8, Superior Spider-Man 32-33 et Free Comic book Day Spider-Man 2014, publi?s pr?c?demment dans les revues SPIDER-MAN (V5) 3-5)', 'amazing spiderman spider spider-man'),
(9, 'The Amazing Spiderman', 1, 'marvel_now', 'Amazing_Spiderman_tome1', 'Electro n''arrive plus ? contr?ler ses pouvoirs depuis qu''ils ont ?t? modifi?s par Spider-Man. La Chatte Noire est devenue la ris?e de New-York ? cause du Tisseur. Les deux vilains s?allient donc pour mieux se venger ! Peter Parker va devoir g?rer les cons?quences des actes du Spider-Man sup?rieur. (Contient les ?pisodes US Amazing Spider-Man (2014) 1-6, publi?s pr?c?demment dans les revues SPIDER-MAN (V5) 1-4)', 'amazing spiderman spider spider-man'),
(10, 'Iron Man', 1, 'marvel_now', 'Ironman_tome1', 'Tony Stark d?couvre que son amie, la scientifique Maya Hansen, vient d''?tre assassin?e. Celle-ci a fabriqu? une arme redoutable, le technovirus Extremis, qui risque d?sormais tomber entre de mauvaises mains. Iron Man doit affronter des ennemis sans piti? et, pour cela, mettre au point une nouvelle armure ! (Contient les ?pisodes US Iron Man (2013) 1-5, publi?s pr?c?demment dans IRON MAN (V4) 1 ? 3)', 'iron man ironman iron-man'),
(11, 'Iron Man', 2, 'marvel_now', 'Ironman_tome2', 'Iron Man part pour l''espace ! Mais son voyage risque de mal tourner puisque le c?l?bre Avenger se retrouve accus? d''un crime. Une aventure ?troitement li?e aux ?v?nements d''Avengers vs X-Men et durant laquelle Tony Stark se mesure au mercenaire T?te de Mort. Puis, le d?but d''une grande saga qui l?ve le voile sur les v?ritables origines d''Iron Man. (Contient les ?pisodes US Iron Man (2013) 6-11, publi?s pr?c?demment dans IRON MAN (V4) 4 ? 7)', 'iron man ironman iron-man'),
(12, 'Iron Man', 3, 'marvel_now', 'Ironman_tome3', 'Pr?parez-vous ? d''incroyables r?v?lations concernant les origines de Tony Stark ! La v?rit? concernant 451 est r?v?l?e tandis qu''Iron Man doit lutter contre un robot qui peut prendre possession de son armure : T?te de Mort. Une aventure spatiale qui va d?cider du sort de deux mondes et bouleverser la vie de Tony... pour toujours ! (Contient les ?pisodes US Iron Man (2013) 12-17, publi?s pr?c?demment dans les revues IRON MAN (V4) 7 ? 10)', 'iron man ironman iron-man'),
(13, 'Iron Man', 4, 'marvel_now', 'Ironman_tome4', 'Iron Man est de retour sur Terre. En parcourant les ?toiles, Tony Stark a fait des d?couvertes sur son pass?, notamment qu?il avait un fr?re ! Ensemble, ils vont construire la ville du futur? si les sbires du Mandarin le veulent bien. (Contient les ?pisodes US Iron Man (2013) 18-22 et 20.INH, publi?s pr?c?demment dans les revues IRON MAN (V4) 11-17)', 'iron man ironman iron-man'),
(14, 'Iron Man', 5, 'marvel_now', 'Ironman_tome5', 'Iron Man affronte l?adversaire de Thor, l?Elfe Noir Malekith. Confront? ? un adversaire pratiquant la magie qu?il abhorre, Tony Stark va devoir trouver de nouveaux alli?s. (Contient les ?pisodes US Iron Man (2013) 23-28, publi?s pr?c?demment dans les revues IRON MAN (V4) 19-23)', 'iron man ironman iron-man'),
(15, 'Captain America', 1, 'marvel_now', 'Captain_America_tome1', 'Projet? loin de chez lui, Captain America se retrouve dans le monde inhospitalier de la Dimension Z. Pas de pays, pas d''alli?s? la Sentinelle de la Libert? n''a plus rien ? prot?ger ! ? part, peut-?tre, le bien le plus pr?cieux de son ennemi Arnim Zola : son fils ! Avec des suppl?ments in?dits ! (Contient les ?pisodes US Captain America (2013) 1-5)', 'captain america capitaine'),
(16, 'The superior Spider-Man', 1, 'marvel_now', 'The_Superior_Spiderman_tome1', 'Le nouveau Spider-Man est arriv? et il est beaucoup mieux que le pr?c?dent ! Plus intelligent, plus fort? sup?rieur, quoi ! Et il va vite pouvoir le prouver face aux Sinister Six ! D?couvrez d?s ? pr?sent le d?but d''une nouvelle ?re arachn?enne. Avec des suppl?ments in?dits ! (Contient les ?pisodes US Superior Spider-Man 1-5)', 'superior spiderman spider spider-man'),
(17, 'Avengers', 1, 'marvel_now', 'Avengers_tome1', 'Les plus grands h?ros de la Terre, les Avengers, ont pour mission de prot?ger le monde contre les dangers qui le menacent. Dans ce but, ils d?cident de "voir plus grand" et recrutent de nouveaux membres tandis que les extraterrestres Ex Nihilo et Abyss attaquent la plan?te ! (Contient les ?pisodes US Avengers (2013) 1-6, publi?s pr?c?demment dans AVENGERS (V4) 1 ? 3)', 'avengers'),
(18, 'Les Gardiens de la galaxie', 1, 'marvel_now', 'Gardiens_tome1', 'Alors qu''ils ne sont pas sens?s s''approcher de la Terre, Star-Lord, Gamora, Drax le Destructeur, Rocket Raccoon et Groot vont braver cette interdiction et accueillir un nouveau membre : l''Invincible Iron Man. Ensemble, ces h?ros cosmiques doivent prot?ger Londres, th??tre d''une invasion d''aliens Badoon. D?couvrez en pr?ambule les origines de Peter Quill, alias Star-Lord ! (Contient les ?pisodes US Guardians of the Galaxy (2013) 0.1, 1-3 ; Guardians of the Galaxy : Tomorrow''s Avengers 1(I-II-III-IV) , publi?s pr?c?demment dans IRON MAN (V4) 1 ? 3, 5 ? 7)', 'guardian of the galaxy gardiens de la galaxie'),
(19, 'X-Men', 1, 'marvel_now', 'X_men_tome1', 'Assistez ? la formation d''une ?quipe exclusivement f?minine ! Au cours d''un voyage en Europe, la jeune mutante nomm?e Jubil? porte secours ? un nourrisson apr?s une terrible explosion. Tandis qu''elle s''appr?te ? retourner aupr?s des X-Men, elle s''aper?oit qu''un homme myst?rieux est ? ses trousses... (Contient les ?pisodes US X-Men (2013) 1-4, publi?s pr?c?demment dans X-MEN UNIVERSE (V4) 3 ? 6)', ' xmen X-men x men'),
(20, 'The superior Spider-Man', 2, 'marvel_now', 'The_Superior_Spiderman_tome2', 'Le Spider-Man sup?rieur va-t-il se faire exclure des Avengers suite ? ses r?centes actions ? Face ? un h?ros qui se comporte comme un vilain, une personne d?cide d''agir. Le fant?me de Peter Parker va se battre pour reprendre le contr?le de son corps, de son esprit et de son destin ! Est-ce la fin pour Otto Octavius... ? (Contient les ?pisodes US Superior Spider-Man 6-10, publi?s pr?c?demment dans SPIDER-MAN (V4) 3 ? 6)', 'superior spiderman spider spider-man'),
(21, 'Thor', 1, 'marvel_now', 'Thor_tome1', 'En 893, en Islande, Thor d?couvre le corps d''un dieu rejet? sur le rivage. De nos jours, sur la plan?te Indigarr, il r?pond ? la pri?re d''une petite fille vivant dans un monde sans divinit?. Dans le futur, Thor est le roi de la cit? d''Asgard mais aussi le dernier survivant de son peuple. Ce vieux souverain fatigu? s''appr?te ? mener un ultime combat... Trois ?poques diff?rentes li?es par un m?me myst?re o? les diverses incarnations de Thor croisent la route de Gorr, le terrible Massacreur de Dieux ! (Contient les ?pisodes US Thor: God of Thunder 1-5, publi?s pr?c?demment dans AVENGERS UNIVERSE 1 ? 5)', 'thor'),
(22, 'Avengers', 2, 'marvel_now', 'Avengers_tome2', 'Les Avengers font face ? une nouvelle menace ! Le Flash Blanc atteint la Terre et cause l''apparition d''un h?ros aux pouvoirs d?mesur?s. ?paul?s par les membres d''Alpha Flight, Captain America et ses alli?s tentent par ailleurs de mettre un terme aux plans d''Ex Nihilo et Abyss. Puis, les Avengers partent espionner l''A.I.M. ? Hong Kong. (Contient les ?pisodes US Avengers (2013) 7-11, publi?s pr?c?demment dans AVENGERS (V4) 4 ? 6)', 'avengers'),
(23, 'Deadpool', 1, 'marvel_now', 'Deadpool_tome1', 'Une arm?e de zombies d?ferle sur New York? mais ces morts-vivants sont en r?alit? les anciens pr?sidents des ?tats-Unis ! Un seul h?ros Marvel a les comp?tences n?cessaires pour les arr?ter : Deadpool. Le mercenaire disert va notamment affronter Richard Nixon et Abraham Lincoln puis se mesurer ? Ronald Reagan... dans l''espace ! (Contient les ?pisodes US Deadpool (2013) 1-6, publi?s pr?c?demment dans DEADPOOL (V4) 1 ? 3)', ''),
(24, 'Nova', 1, 'marvel_now', 'Nova_tome1', 'D?couvrez les origines de Nova ! Un jeune gar?on pr?nomm? Sam Alexander r?alise que les histoires du Nova Corps sont bel et bien r?elles. H?ritant du casque de Nova, il va se trouver au c?ur d''un conflit intergalactique et croiser la route des Gardiens de la Galaxie. (Contient les ?pisodes US Nova (2013) 1-5, publi?s pr?c?demment dans IRON MAN (V4) 1 ? 4, 6)', 'nova'),
(25, 'Captain America', 2, 'marvel_now', 'Captain_America_tome2', 'Le voyage dans la Dimension Z touche ? sa fin. Mais quel sort attend Captain America ? Va-t-il parvenir ? s''?chapper de ce monde cauchemardesque ? Le destin de Ian se joue aujourd''hui et les plans d''Arnim Zola nous sont enfin r?v?l?s. (Contient les ?pisodes US Captain America (2013) 6-10, publi?s pr?c?demment dans les revues AVENGERS UNIVERSE 7, 9 ? 12)', 'captain america capitaine'),
(26, 'Hulk', 1, 'marvel_now', 'Hulk_tome1', 'L''indestructible Hulk arrive dans la collection MARVEL NOW! Dans cette s?rie, Bruce Banner devient un agent au service du S.H.I.E.L.D. et doit pour sa premi?re mission, neutraliser l''Homme Pentatronique et le redoutable Attuma. Mais l''organisation dirig?e par Maria Hill dissimule de lourds secrets... (Contient les ?pisodes US Indestructible Hulk 1-5, publi?s pr?c?demment dans les revues AVENGERS UNIVERSE 1 ? 5)', 'hulk'),
(27, 'Les Gardiens de la galaxie', 2, 'marvel_now', 'Gardiens_tome2', 'Suite ? la grande saga Age of Ultron, la myst?rieuse Angela appara?t dans l''univers Marvel et croise la route des Gardiens de la Galaxie ! Star-Lord et ses alli?s sont ensuite oppos?s aux arm?es de Thanos au cours du conflit spatial Infinity. (Contient les ?pisodes US Guardians of the Galaxy (2013) 4-10, publi?s pr?c?demment dans les revues IRON MAN (V4) 7 ? 11, 13 et 14)', 'guardian of the galaxy gardiens de la galaxie'),
(28, 'New Avengers', 1, 'marvel_now', 'New_Avengers_tome1', 'Un ?trange ph?nom?ne fait son apparition et la Terre est soudain menac?e de destruction. Iron Man, Fl?che Noire, Namor, Mr Fantastique, le Docteur Strange et la Panth?re Noire prennent alors une dramatique d?cision : an?antir des mondes pour prot?ger le leur ! (Contient les ?pisodes US New Avengers (2013) 1-6, publi?s pr?c?demment dans les revues AVENGERS (V4) 1 ? 6)', ''),
(29, 'Thor', 2, 'marvel_now', 'Thor_tome2', 'Thor se retrouve r?duit en esclavage aux c?t?s de plusieurs divinit?s. Tous travaillent ? la construction d''une machine qui risque de changer ? jamais le visage de la cr?ation. Mais le dieu du tonnerre compte bien se lib?rer et affronter Gorr ! (Contient les ?pisodes US Thor: God of Thunder 6-11, publi?s pr?c?demment dans les revues AVENGERS UNIVERSE 6, 8 ? 12)', 'thor'),
(30, 'The superior Spider-Man', 4, 'marvel_now', 'The_Superior_Spiderman_tome4', 'Spider-Man 2099 arrive ? notre ?poque et se retrouve confront? ? son homologue du pr?sent : le Spider-Man sup?rieur ! Ensuite, Otto Octavius rencontre la Chatte Noire et, sous les traits de Peter Parker, pr?sente sa th?se. (Contient les ?pisodes US Superior Spider-Man 17-21, publi?s pr?c?demment dans les revues SPIDER-MAN (V4) 9 ? 11)', 'superior spider man spiderman spider-man'),
(31, 'Uncanny X-Men', 1, 'marvel_now', 'Uncanny_Xmen_tome1', 'Depuis la fin d''Avengers vs X-Men, Cyclope et son ?quipe de X-Men sont devenus des hors-la-loi. Ils veulent d?sormais venir en aide aux nouveaux mutants mais de nombreux obstacles les attendent, que ce soit les Sentinelles ou la pr?sence d''un tra?tre dans leur rang ! (Contient les ?pisodes US Uncanny X-Men (2013) 1-4, publi?s pr?c?demment dans les revues X-MEN (V4) 1 ? 4)', 'uncanny xmen x men x-men'),
(32, 'Avengers', 4, 'marvel_now', 'Avengers_tome4', 'Infinity se poursuit ! Dans l''espace, les Avengers rejoignent le Conseil Galactique afin d''affronter de redoutables adversaires : les B?tisseurs. Mais seul un plan d?sesp?r? peut permettre ? Captain America et ses co?quipiers de sortir victorieux de la plus grande bataille de l''univers Marvel. (Contient les ?pisodes US Avengers (2013) 18-23, publi?s pr?c?demment dans les revues AVENGERS (V4) 9 ? 13)', 'avengers'),
(33, 'New Avengers', 2, 'marvel_now', 'New_Avengers_tome2', 'Tandis que les Avengers partent dans l''espace, une guerre ?clate entre le Wakanda et Atlantis. Le conflit commence ? faire ses premi?res victimes et un membre des Illuminati est alors amen? ? faire un choix difficile. Pendant ce temps, Thanos et ses arm?es envahissent la Terre et une nouvelle incursion se produit. (Contient les ?pisodes US New Avengers (2013) 7-12, publi?s pr?c?demment dans les revues AVENGERS (V4) 6, 7, 9, 10, 12, 14)', 'new avengers'),
(34, 'Deadpool', 2, 'marvel_now', 'Deadpool_tome2', 'Apr?s avoir fait ?quipe avec Iron Man, Deadpool est engag? par un d?mon pour r?cup?rer des ?mes damn?es. Le mercenaire va aussi combattre un homme aux pouvoirs aquatiques et rencontrer le Spider-Man sup?rieur. (Contient les ?pisodes US Deadpool (2013) 7-12, publi?s pr?c?demment dans les revues DEADPOOL (V4) 4 et 5)', 'deadpool dead pool'),
(35, 'Uncanny X-Men', 2, 'marvel_now', 'Uncanny_Xmen_tome2', '? peine a-t-elle le temps de prendre ses marques que l??quipe de Cyclope doit affronter un ancien adversaire du Docteur Strange : le redoutable Dormammu ! D?couvrirez aussi les secrets de Magie suite ? Avengers vs X-Men. (Contient les ?pisodes US Uncanny X-Men (2013) 5-11, publi?s pr?c?demment dans les revues X-MEN (V4) 5 ? 8)', 'uncanny xmen x men x-men'),
(36, 'Nova', 2, 'marvel_now', 'Nova_tome2', 'Les origines du nouveau Nova sont d?sormais connues, mais pour devenir un h?ros, le jeune Sam Alexander doit... demander l''autorisation ? sa m?re ! Apr?s avoir rencontr? le Spider-Man sup?rieur, Nova va se retrouver au c?ur des ?v?nements d''Infinity et se mesurera ? Thanos. (Contient les ?pisodes US Nova (2013) 6-10, publi?s pr?c?demment dans les revues IRON MAN (V4) 9 ? 12)', 'nova'),
(37, 'The superior Spider-Man', 5, 'marvel_now', 'The_Superior_Spiderman_tome5', 'Otto Octavius, alias le Spider-Man sup?rieur, doit faire face ? Venom, sans savoir que le symbiote est d?sormais contr?l? par Flash Thompson. Et, priv? des souvenirs de Peter Parker, la menace d''?tre d?couvert devient encore plus dangereuse que Venom lui-m?me ! (Contient les ?pisodes US Superior Spider-Man 22-26, Annual 1, publi?s pr?c?demment dans les revues SPIDER-MAN (V4) 12 ? 15)', 'superior spiderman spider man spider-man'),
(38, 'Avengers', 5, 'marvel_now', 'Avengers_tome5', 'Apr?s les ?v?nements d''Infinity, Captain America et Iron Man composent une nouvelle ?quipe d''Avengers et d?couvrent qu''une plan?te vagabonde risque d''entrer en collision avec la Terre ! Heureusement, un myst?rieux visiteur du futur va leur venir en aide. Bruce Banner, quant ? lui, m?ne l''enqu?te et confronte Tony Stark sur ses actions. (Contient les ?pisodes US Avengers (2013) 24-28, publi?s pr?c?demment dans les revues AVENGERS (V4) 15-17)', 'avengers'),
(39, 'Uncanny X-Men', 3, 'marvel_now', 'Uncanny_Xmen_tome3', 'Les cons?quences de La Bataille de l''Atome se font sentir. L''?cole a bien chang? et Kitty Pryde ainsi que les premiers X-Men rejoignent l''?quipe de Cyclope ! Magn?to, quant ? lui, part en mission en solo tandis que les X-Woman constatent l''apparition de nouveaux Inhumains. Pendant ce temps, les jeunes mutants se lancent dans une dangereuse aventure. (Contient les ?pisodes US Uncanny X-Men (2013) 14-18, publi?s pr?c?demment dans les revues X-MEN (V4) 11 et 15-17)', 'uncanny xmen x men x-men'),
(40, 'Deadpool', 3, 'marvel_now', 'Deadpool_tome3', 'D?couvrez Deadpool dans une incroyable aventure qui se d?roule ? l??poque des seventies ! Le mercenaire va notamment s?associer ? Luke Cage et Iron Fist. Puis, Deadpool, hant? par son pass? au sein du programme Arme X, demande de l?aide ? Captain America et Wolverine. (Contient les ?pisodes US Deadpool (2013) 13-19, publi?s pr?c?demment dans les revues DEADPOOL (V4) 6-8)', 'deadpool dead pool'),
(41, 'New Avengers', 3, 'marvel_now', 'New_Avengers_tome3', 'Les illuminati font face aux cons?quences des brumes t?ratog?nes. Ils doivent aussi en apprendre d?avantage sur les incursions et d?couvrir le secret de Black Swan. Mais lorsque les pr?tres noirs s?appr?tent ? d?truire la Terre, le Docteur Strange est le seul en mesure de les arr?ter. Une nouvelle fois, un monde va devoir dispara?tre pour sauver le n?tre... (Contient les ?pisodes US New Avengers (2013) 13-17, publi?s pr?c?demment dans les revues AVENGERS (V4) 15-19)', 'new avengers'),
(42, 'Avengers', 6, 'marvel_now', 'Avengers_tome6', 'Tandis que les Avengers font face aux Avengers, la gemme du temps r?appara?t et emporte les plus grands h?ros de la Terre ? travers les ?poques. Ils devront multiplier leurs efforts pour tenter de sauver ce qu?il reste de leur ?quipe. (Contient les ?pisodes US Avengers (2013) 29-34, publi?s pr?c?demment dans les revues AVENGERS (V4) 18-21)', 'avengers'),
(43, 'Nova', 3, 'marvel_now', 'Nova_tome3', 'Sur la piste des membres disparus du Nova corps, Nova parvient ? sauver la vie de certains de ses nouveaux amis. Mais tandis que Sam enqu?te sur la disparition de son p?re, il se fait un nouvel ennemi. Comme si cela ne suffisait pas, Beta Ray Bill arrive sur Terre avec la volont? d''en d?coudre. (Contient les ?pisodes US Nova (2013) 10(II-III),11-16, publi?s pr?c?demment dans les revues IRON MAN (V3) 12, 15-16 et LES GARDIENS DE LA GALAXIE 1-3)', 'nova'),
(44, 'The superior Spider-Man', 6, 'marvel_now', 'The_Superior_Spiderman_tome6', 'Le Bouffon Vert a pris le contr?le de la p?gre de New York et la m?tropole a ?t? mise ? feu et ? sang. Le temps est venu pour Otto Octavius de prouver qu?il est vraiment un h?ros pr?t ? tous les sacrifices. (Contient les ?pisodes US Superior Spider-Man 27-31 et Annual 2, publi?s pr?c?demment dans les revues SPIDER-MAN (V4) 16-18)', 'superior spiderman spider man spider-man'),
(45, 'Les Gardiens de la galaxie', 3, 'marvel_now', 'Gardiens_tome3', 'L''agent Venom et Captain Marvel rejoignent l''?quipe des Gardiens de la Galaxie, alors que le groupe vole en ?clats. Star-Lord est captur? par son p?re, tandis que Drax doit affronter le terrible Gladiator. (Contient les ?pisodes US Guardians of the Galaxy (2013) 14-1, Annual 1 et FCBD GotG 2014, publi?s pr?c?demment dans les revues LES GARDIENS DE LA GALAXIE 1-3 et IRON MAN (V4) 17)', 'guardian of the galaxy gardiens de la galaxie'),
(46, 'Rocket Raccoon', 1, 'marvel_now', 'Rocket_Raccoon_tome1', 'Lorsqu''il n''accompagne pas les Gardiens de la Galaxie, Rocket travaille en solo ou avec Groot sur des missions de moindres envergures : sauver des princesses, remplir des contrats? Tandis que d''anciennes affaires refont surface, Rocket entend pour la premi?re fois parler d''un autre membre de son esp?ce. (Contient les ?pisodes US Rocket Raccoon 1-6, publi?s pr?c?demment dans les revues LES GARDIENS DE LA GALAXIE 1-8)', 'rocket raccoon'),
(47, 'Uncanny Avengers', 5, 'marvel_now', 'Uncanny_Avengers_tome5', 'La Division Unit? des Avengers a r?ussi ? vaincre Kang et ? sauver la Terre mais les h?ros sont ? bout de souffle et traumatis?s. Malheureusement, pas le temps de se reposer : Cr?ne Rouge poss?de d?sormais les pouvoirs de Charles Xavier et compte bien s''en servir. Les Avengers vont devoir faire confiance ? Magneto pour les aider. (Contient les ?pisodes US Uncanny Avengers (2013) 23-25 et Annual 1 et Magneto (2014) 9-10, publi?s pr?c?demment dans les revues UNCANNY AVENGERS (V2) 7-8 et X-MEN UNIVERSE (V4) 23)', 'uncanny avengers'),
(48, 'Captain America', 4, 'marvel_now', 'Captain_America_tome4', 'Captain America, aid? du Faucon et de Jet Black (la fille du super-vilain Arnim Zola) se retrouve face ? de nouveaux ennemis plus redoutables que pr?vu. Le Docteur C?r?bulles et le Clou de Fer veulent d?truire le S.H.I.E.L.D. et sont pr?ts ? tout pour cela. (Contient les ?pisodes US Captain America (2013) 16-21, publi?s pr?c?demment dans les revues AVENGERS UNIVERSE 18-22)', 'captain america capitaine'),
(49, 'Hulk', 2, 'marvel_now', 'Hulk_tome2', 'Bruce Banner, d?sormais ? la t?te d?une ?quipe scientifique du S.H.I.E.L.D, emm?ne son groupe en mission dans le royaume du froid : Jotunheim. Les G?ants du froid pr?voient d?envahir la Terre et Bruce doit laisser ? Hulk le soin d?emp?cher ce d?sastre. Heureusement, il peut compter sur l?aide de Thor, le Dieu du Tonnerre, qui pourtant ne semble pas se souvenir de lui... (Contient les ?pisodes US Indestructible Hulk 6-10, publi?s pr?c?demment dans les revues AVENGERS UNIVERSE 6-10)', 'hulk'),
(50, 'Uncanny X-Men', 4, 'marvel_now', 'Uncanny_Xmen_tome4', 'Les Sentinelles chasseuses de mutants continuent d?attaquer les X-Men. Cyclope demande des comptes ? Maria Hill, la directrice du S.H.I.E.L.D. Cette derni?re esp?re que Dazzler, son agent de liaison aupr?s de la communaut? mutante, pourra d?samorcer cette situation. Mais ce qu?elle ne sait pas, c?est que Dazzler a ?t? remplac?e par la terroriste Mystique. (Contient les ?pisodes US Uncanny X-Men (2013) 19-25, publi?s pr?c?demment dans les revues X-MEN 18-21)', 'uncanny xmen x men x-men'),
(51, 'Deadpool', 4, 'marvel_now', 'Deadpool_tome4', 'Pour sauver son amie, l?agent du S.H.I.E.L.D. Emily Preston, Deadpool va devoir affronter l?organisation d?espionnage. Il pourra compter sur une aide pour le moins inattendue : celle de l?agent Coulson ! (Contient les ?pisodes US Deadpool (2013) 20-25, publi?s pr?c?demment dans les revues DEADPOOL 8-9 et DEADPOOL HORS SERIE 1)', 'deadpool dead pool'),
(52, 'Captain America', 5, 'marvel_now', 'Captain_America_tome5', 'Arnim Zola, le scientifique nazi qui a tourment? Captain America est de retour et il est accompagn? d?une arm?e. Steve Rogers ?tant d?sormais un vieillard priv? du s?rum du super-soldat, le Faucon et les Avengers vont devoir combattre sans la L?gende Vivante. (Contient les ?pisodes US Captain America (2013) 22-25 et Marvel 75th Anniversary Celebration 1 (III), publi?s pr?c?demment dans les revues AVENGERS UNIVERSE 23 et AVENGERS (V4) 26)', 'captain america capitaine'),
(53, 'X-Men', 3, 'marvel_now', 'X_men_tome3', 'Les X-men de Tornade d?fendent l??cole Jean Grey lorsqu?elle est prise d?assaut par des super-vilains. Jubil?e va devoir r?fl?chir ? la fa?on de g?rer son nouveau r?le de m?re adoptive dans ce contexte dangereux. (Contient les ?pisodes US X-Men (2013) 13-17, publi?s pr?c?demment dans les revues X-MEN UNIVERSE (V4) 19-23)', 'x-men x men xmen'),
(54, 'Les Gardiens de la galaxie', 4, 'marvel_now', 'Gardiens_tome4', 'Star-Lord r?v?le enfin ? Gamora ce qu?il s?est pass? quand il a disparu dans une autre dimension. Ensuite, ils partent sur la plan?te d?origine de Venom. (Contient les ?pisodes US Guardians of the Galaxy (2013) 18-23, publi?s pr?c?demment dans les revues LES GARDIENS DE LA GALAXIE 4-8)', 'guardian of the galaxy gardiens de la galaxy'),
(60, 'Civil War', 1, 'marvel_now', 'Civil_War_01', 'L''univers Marvel est en train de changer. Suite à une terrible tragédie, le congrès des Etats-Unis propose que les surhumains dévoilent leur identité officielle en se démasquant devant les membres du gouvernement. Les plus grand champions de la nation son divisés. Ils doivent prendre chacun cette décision qui pourrait bouleverser à jamais le cours de leur existence.', 'civil war guerre civile civilwar'),
(61, 'Civil War', 3, 'marvel_now', 'Civil_War_03', 'Ce nouvel album explore les répercussions de l’affrontement qui a divisé les héros Marvel. La bouche bée et les yeux grands ouverts, apprêtez-vous à découvrir Civil War : Front Line. Cette saga s''intéresse aux journalistes qui tentent de faire la part des choses dans un conflit complexe, à Speedball, le principal responsable de la crise (il doit maintenant répondre de ses crimes), ainsi qu’au conflit entre Namor et les forces d''Atlantis, qui promet de nouvelles révélations sur l''ensemble de la saga !', 'civil war civilwar guerre civile'),
(63, 'Civil War', 4, 'marvel_now', 'Civil_War_04', 'Le retour de Thor aura-t-il une incidence sur l''issue du combat qui oppose Iron Man à Captain America ? Et comment le dieu du Tonnerre est-il revenu d''outre-tombe ? Autant de questions auxquelles devront répondre Mark Millar et Steve McNiven. ', 'civil war civilwar guerre civile');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `laDate` datetime NOT NULL,
  `article` text NOT NULL,
  `auteur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `laDate`, `article`, `auteur`) VALUES
(46, '2016-12-20 21:48:50', '<li>Dernières modifications avant remise</li>\r\n<li>Pas mal de modification concernant vérification de formulaires côté serveur</li>\r\n<li>Résolutions de quelques bugs</li>', 'Olivier');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `dc_comics`
--
ALTER TABLE `dc_comics`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marvel_now`
--
ALTER TABLE `marvel_now`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `dc_comics`
--
ALTER TABLE `dc_comics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `login_users`
--
ALTER TABLE `login_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `marvel_now`
--
ALTER TABLE `marvel_now`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
