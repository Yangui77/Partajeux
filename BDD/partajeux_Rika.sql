-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Jan 2018 um 21:52
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `partajeux`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `console`
--

CREATE TABLE `console` (
  `idConsole` int(11) NOT NULL,
  `NomConsole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `console`
--

INSERT INTO `console` (`idConsole`, `NomConsole`) VALUES
(6, ' Xbox 360'),
(4, 'Nindendo 3DS'),
(1, 'Nintendo Switch'),
(7, 'PC (Windows)'),
(5, 'PS3'),
(2, 'PS4'),
(8, 'Wii U'),
(3, 'Xbox one');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `consoledispo`
--

CREATE TABLE `consoledispo` (
  `idConsole` int(11) NOT NULL,
  `idJeux` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `consoledispo`
--

INSERT INTO `consoledispo` (`idConsole`, `idJeux`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 2),
(2, 3),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(3, 2),
(3, 3),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(5, 9),
(5, 10),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(7, 4),
(7, 5),
(7, 6),
(7, 7),
(7, 8),
(7, 9),
(7, 10),
(7, 11),
(7, 12),
(7, 13),
(8, 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `echange`
--

CREATE TABLE `echange` (
  `idUtilisateur1` int(11) NOT NULL,
  `idUtilisateur2` int(11) NOT NULL,
  `Lieu` varchar(45) NOT NULL,
  `Date` datetime NOT NULL,
  `Durée` int(11) NOT NULL,
  `idJeux` int(11) NOT NULL,
  `Text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `jeux`
--

CREATE TABLE `jeux` (
  `idJeux` int(11) NOT NULL,
  `NomJeux` varchar(45) NOT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Année` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `jeux`
--

INSERT INTO `jeux` (`idJeux`, `NomJeux`, `Description`, `Année`) VALUES
(1, 'The Legend of Zelda : Breath of the Wild', 'The Legend of Zelda : Breath of the Wild est un jeu d\'action/aventure. Link se réveille d\'un sommeil de 100 ans dans un royaume d\'Hyrule dévasté. Il lui faudra percer les mystères du passé et vaincre Ganon, le fléau. L\'aventure prend place dans un gigantesque monde ouvert et accorde ainsi une part importante à l\'exploration. Le titre a été pensé pour que le joueur puisse aller où il veut dès le début, s\'éloignant de la linéarité habituelle de la série.', '2017'),
(2, 'FIFA 18', 'EA SPORTS™ FIFA 18 sur Nintendo Switch est le jeu de football le plus immersif, le plus axé sur les réseaux sociaux et le plus authentique jamais créé pour les possesseurs de consoles Nintendo. Le jeu regorge de fonctionnalités, et vous pouvez désormais affronter le monde entier où, quand et avec qui vous le souhaitez de manières uniques avec EA SPORTS™ FIFA 18 sur Nintendo Switch.\r\n', '2017'),
(3, 'Rocket League', 'Rendez-vous sur le terrain pour expérimenter un mode hors ligne complet, de multiples types de jeux, des matchs en ligne* pour le fun ou compétitifs et les \"Mutators\" spéciaux qui vous permettent de totalement changer les règles du jeu.\r\n\r\nExprimez-vous grâce au riche système de customisation et affrontez vos adversaires qui jouent sur d\'autres plateformes* !\r\n\r\nCe n\'est pas tout ! Des voitures de combat à l\'effigie de Mario, Luigi et Metroid vont débarquer dans Rocket League, sur Nintendo Switch!\r\n', '2017'),
(4, 'Assassin\'s Creed', 'L\'histoire est axée sur Desmond Miles qui revit les actions de son ancêtre à l\'aide d\'une machine nommée « Animus ». Son aïeul Altaïr est un assassin d\'élite agissant en Terre sainte à l\'époque de la troisième croisade. Tombé en disgrâce, Altaïr doit exécuter plusieurs missions pour regagner son rang dans sa communauté.', '2007'),
(5, 'Assassin\'s Creed II', 'Le récit reprend exactement là où le premier Assassin\'s Creed s\'est arrêté : Desmond est face à des inscriptions étranges écrites en sang sur le mur de sa chambre qu\'il voit grâce à la « vision d\'aigle ». Lucy entre et lui demande de rentrer à nouveau dans l\'Animus. Il assiste alors à la naissance d\'un certain Ezio Auditore da Firenze. Les deux fuient ensuite rapidement le bâtiment d\'Abstergo. Arrivé à un entrepôt qui semble être la cachette des Assassins, Lucy explique qu\'elle voudrait avoir Desmond dans leur camp. Elle lui propose de s\'entraîner rapidement grâce à l\'effet secondaire de l\'Animus qui lui permettra d\'acquérir l\'expérience d\'Ezio, son ancêtre. Desmond accepte et rencontre le reste de l\'équipe : Rebecca Crane qui s\'occupe de l\'Animus 2.0 des Assassins, et Shaun Hastings, tacticien et historien sarcastique. Desmond ne tarde pas à rentrer dans la machine…', '2009'),
(6, 'Assassin\'s Creed Brotherhood', 'Assassin\'s Creed Brotherhood est la suite directe d’Assassin\'s Creed II. Il reprend pour personnage principal Ezio Auditores, devenu depuis un grand maître assassin. L\'action se déroule principalement à Rome durant la Renaissance, ville qui apparait brièvement dans la dernière mission de l\'épisode précédent, et en Espagne en 1507.', '2010'),
(7, 'Assassin\'s Creed Revelations', 'La majorité de l\'intrigue se déroule avec Ezio à Constantinople (l\'Istanbul moderne), à partir de 1511. Au début du jeu, Ezio découvre que l\'ancêtre de Desmond Miles, Altaïr a caché dans la capitale ottomane des clés menant à une arme capable de mettre fin définitivement à la guerre entre les Assassins et les Templiers.', '2010'),
(8, 'Assassin\'s Creed III', 'Le jeu est la suite de Assassin\'s Creed: Revelations. Comme dans les autres opus de la série, le joueur contrôle Desmond Miles au XXIe siècle.\r\nDans Revelations, Desmond a découvert la localisation du dernier Temple aux États-Unis et doit dès lors trouver la clé qui permet de l\'ouvrir.\r\n\r\nPour cela, il entre dans l\'Animus afin de revivre la mémoire de l\'un de ses ancêtres : Ratonhnhaké:ton un jeune homme de la tribu Mohawk, né au XVIIIe siècle dans l\'Amérique coloniale de l\'union d\'un père anglais et d\'une mère amérindienne. Lorsque son village est incendié par les Britanniques, il part rejoindre la Confrérie des Assassins, en recrute six et prend alors part à la révolution américaine.', '2012'),
(9, 'Assassin’s Creed IV Black Flag', 'Comme c\'est le cas dans les précédents jeux de la série, l\'histoire est divisée en deux moitiés entrelacées, comprenant une phase dans un monde futuriste, et une autre dans un cadre historique, les événements de chacun influençant l\'autre.\r\n\r\nDe nos jours, le personnage du joueur est engagé par Abstergo Entertainment - une filiale d\'Abstergo Industries - en tant que chercheur afin d\'utiliser l\'Animus et d\'examiner les souvenirs de Desmond Miles et ses ancêtres. Bien qu\'il ait déjà été établi que l\'Animus ne peut être utilisé que pour afficher les souvenirs de ses ancêtres directs, la fin d’Assassin\'s Creed III implique que l\'Animus fonctionne désormais de la même manière qu\'un ordinateur. Face à cette nouvelle possibilité, Abstergo demande au participant de se concentrer spécifiquement sur les souvenirs d\'Edward Kenway.', '2013'),
(10, 'Assassin’s Creed Rogue', 'Le joueur incarne Shay Patrick Cormac, un ancien Assassin devenu Templier. Après une mission ayant tourné au drame, il renie la Confrérie des Assassins et s’oppose à eux. Désormais, dans le contexte troublé de la guerre de Sept Ans, il n’a plus qu\'un objectif : traquer et éliminer tous les Assassins.', '2014'),
(11, 'Assassin\'s Creed Unity', 'Le joueur incarne Arno Victor Dorian, un jeune homme hanté par une terrible tragédie et qui s\'est enrôlé chez les Assassins pour combattre la corruption qui gangrène la France, au temps de la Révolution française. Il utilise une nouvelle arme, la « Lame Fantôme », une arbalète à courte portée attachée au poignet, sur le modèle des lames cachées. Ces mêmes lames cachées sont toujours présentes, mais intégrées dans le système d\'arbalète.', '2014'),
(12, 'Assassin\'s Creed Syndicate', 'L\'intrigue se déroule dans le Londres des années 1860, où Jacob et Evie Frye arrivent à Londres dans le but de vaincre le templier Crawford Starrick et son organisation, qui contrôle divers rouages importants de la société londonienne (usines, transports, médecine, politique, criminalité...). Ils sont assistés par Henry Green, le Grand Maître Assassin de la confrérie de Londres. Mais le frère et la sœur sont divisés quant à la manière de procéder. Jacob souhaite libérer la ville et former son gang. Quant à Evie, elle est à la recherche d\'un fragment d\'Eden caché dans la ville.\r\n\r\nEn 2015, le joueur continue toujours d\'utiliser Helix afin d\'aider les assassins du présent à retrouver des artefacts de la première civilisation via les mémoires de Jacob et Evie. Mais Otso Berg et ses acolytes templiers (rencontrés dans Assassin\'s Creed: Rogue) sont sur leurs traces.', '2015'),
(13, 'Assassin\'s Creed Origins', 'L\'histoire se déroule en 49 av. J.-C. dans l\'Égypte antique. Elle met en scène Bayek, un Medjaÿ, à l\'époque de la création de la confrérie des Assassins. Cet assassin sera confronté à « l\'Ordre des Anciens » qui préfigure les futurs antagonistes Templiers des épisodes précédents. Les membres de l\'Ordre des Anciens que rencontre Bayek apparaissent sous des pseudonymes. Ainsi, le joueur affronte successivement le Héron, l\'Ibis, l\'Hippopotame, le Scarabée, la Hyène, le Lézard, le Crocodile, le Scorpion, le Lion et le Chacal.\r\n\r\nLe jeu met en scène des personnages historiques tels que Cléopâtre VII, Jules César ou encore Ptolémée XIII.\r\n\r\nEn 2017, le joueur incarne une employée d\'Abstergo envoyée en Égypte, du nom de Layla Hassan, qui explore les mémoires de Bayek.', '2017');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `jeuxvoulu`
--

CREATE TABLE `jeuxvoulu` (
  `idUtilisateur` int(11) NOT NULL,
  `idJeux` int(11) NOT NULL,
  `idConsole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `jeuxvoulu`
--

INSERT INTO `jeuxvoulu` (`idUtilisateur`, `idJeux`, `idConsole`) VALUES
(1, 3, 1),
(3, 1, 1),
(42, 2, 3),
(1, 2, 1),
(1, 2, 3),
(42, 3, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `possedejeux`
--

CREATE TABLE `possedejeux` (
  `idJeux` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idConsole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `possedejeux`
--

INSERT INTO `possedejeux` (`idJeux`, `idUtilisateur`, `idConsole`) VALUES
(1, 1, 1),
(2, 1, 2),
(1, 42, 1),
(2, 42, 1),
(2, 42, 2),
(2, 42, 3),
(2, 115, 1),
(2, 115, 2),
(4, 115, 7);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `utilisateur`
--

CREATE TABLE `utilisateur` (
  `NomUtilisateur` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Mdp` varchar(45) NOT NULL,
  `Identifiant` varchar(45) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `Photo` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `utilisateur`
--

INSERT INTO `utilisateur` (`NomUtilisateur`, `Email`, `Mdp`, `Identifiant`, `idUtilisateur`, `Photo`) VALUES
('fuditphu', 'caca@gmail.com', 'caca', 'yangui', 1, NULL),
('caca', 'pipi@gmail.com', 'cacapipi', 'pipicaca', 3, NULL),
('kiki', 'kiki@mgail.com', 'kiki', 'kiki', 6, NULL),
('franck', 'dang@fran.com', 'dako', 'dako', 7, NULL),
('bonjour', 'bonjour@gmail.com', 'djaio', 'djaio', 20, NULL),
('naruto', 'sasuke@gmail.com', 'nani', 'dandaoi', 21, NULL),
('fuditphu', 'moi@gmail.com', 'nani', 'kokokok', 25, NULL),
('bonjour', 'bruh@gmail.com', 'blablabla', 'bruh', 26, NULL),
('caca', 'caca@gmail.com', 'pipi', 'daidai', 27, NULL),
('cnai', 'cani@gmail.com', 'danio', 'danio', 28, NULL),
('cnazi', 'cani@gmail.com', 'coucou', 'cacacaca', 29, NULL),
('penus', 'psaip@mgialc.com', 'caca', 'pouloulou', 30, NULL),
('dzaji', 'zdjiap@gmaic.com', 'caca', 'naninanani', 31, NULL),
('ckazo', 'cazko@gmail.com', 'caca', 'cacacacacaca', 32, NULL),
('czako', 'cako@gmail.com', 'sasa', 'cacaprout', 33, NULL),
('kiki', 'kiki@mgail.com', 'kiki', 'cacabe', 34, NULL),
('ko', 'cako@gmail.com', 'dako', 'cacacaz', 35, NULL),
('kiki', 'kiki@mgail.com', 'kiki', 'kikikiki', 36, NULL),
('denazareth', 'Jesus@gmail.com', 'hahaha', 'Jesus', 37, NULL),
('jeaneude', 'da@gmail.com', 'caca', 'poa', 38, NULL),
('da', 'da@gmail.com', 'caca', 'sasa', 39, NULL),
('dada', 'da@gmail.com', 'caca', 'sada', 40, NULL),
('da', 'da@gmail.com', 'caca', 'dadada', 41, NULL),
('caca', 'caca@gmail.com', 'caca', 'caca', 42, NULL),
('', '', '', '', 105, NULL),
('caca', 'ca@da', 'dada', 'dadadadada', 111, NULL),
('test', 'u@a.de', 'test', 'test2', 115, NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`idConsole`),
  ADD UNIQUE KEY `idConsole` (`idConsole`),
  ADD UNIQUE KEY `NomConsole` (`NomConsole`);

--
-- Indizes für die Tabelle `consoledispo`
--
ALTER TABLE `consoledispo`
  ADD PRIMARY KEY (`idConsole`,`idJeux`);

--
-- Indizes für die Tabelle `echange`
--
ALTER TABLE `echange`
  ADD KEY `caca` (`idJeux`),
  ADD KEY `fk_num_client` (`idUtilisateur1`),
  ADD KEY `fk_client_numero` (`idUtilisateur2`);

--
-- Indizes für die Tabelle `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`idJeux`),
  ADD UNIQUE KEY `NomJeux_UNIQUE` (`NomJeux`);

--
-- Indizes für die Tabelle `jeuxvoulu`
--
ALTER TABLE `jeuxvoulu`
  ADD KEY `kkkk` (`idUtilisateur`);

--
-- Indizes für die Tabelle `possedejeux`
--
ALTER TABLE `possedejeux`
  ADD KEY `idJeux` (`idJeux`),
  ADD KEY `idUtilisateur` (`idUtilisateur`);

--
-- Indizes für die Tabelle `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`),
  ADD UNIQUE KEY `Identifiant_UNIQUE` (`Identifiant`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `console`
--
ALTER TABLE `console`
  MODIFY `idConsole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT für Tabelle `jeux`
--
ALTER TABLE `jeux`
  MODIFY `idJeux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT für Tabelle `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `echange`
--
ALTER TABLE `echange`
  ADD CONSTRAINT `caca` FOREIGN KEY (`idJeux`) REFERENCES `jeux` (`idJeux`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_client_numero` FOREIGN KEY (`idUtilisateur2`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `fk_num_client` FOREIGN KEY (`idUtilisateur1`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Constraints der Tabelle `jeuxvoulu`
--
ALTER TABLE `jeuxvoulu`
  ADD CONSTRAINT `evzevz` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `fdd` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `fk` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `fkazok` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `jeuxvoulu_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `kkkk` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Constraints der Tabelle `possedejeux`
--
ALTER TABLE `possedejeux`
  ADD CONSTRAINT `idJeux` FOREIGN KEY (`idJeux`) REFERENCES `jeux` (`idJeux`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
