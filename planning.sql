-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 26 juil. 2018 à 08:15
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `calendar`
--

DELIMITER $$
--
-- Fonctions
--
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `LEVENSHTEIN` (`s1` VARCHAR(255), `s2` VARCHAR(255)) RETURNS INT(11) BEGIN
	DECLARE s1_len, s2_len, i, j, c, c_temp, cost INT;
	DECLARE s1_char CHAR;
	DECLARE cv0, cv1 VARBINARY(256);
	SET s1_len = CHAR_LENGTH(s1), s2_len = CHAR_LENGTH(s2), cv1 = 0x00, j = 1, i = 1, c = 0;
	IF s1 = s2 THEN
		RETURN 0;
	ELSEIF s1_len = 0 THEN
		RETURN s2_len;
	ELSEIF s2_len = 0 THEN
		RETURN s1_len;
	ELSE
		WHILE j <= s2_len DO
			SET cv1 = CONCAT(cv1, UNHEX(HEX(j))), j = j + 1;
		END WHILE;
		WHILE i <= s1_len DO
			SET s1_char = SUBSTRING(s1, i, 1), c = i, cv0 = UNHEX(HEX(i)), j = 1;
			WHILE j <= s2_len DO
				SET c = c + 1;
				IF s1_char = SUBSTRING(s2, j, 1) THEN SET cost = 0; ELSE SET cost = 1; END IF;
				SET c_temp = CONV(HEX(SUBSTRING(cv1, j, 1)), 16, 10) + cost;
				IF c > c_temp THEN SET c = c_temp; END IF;
				SET c_temp = CONV(HEX(SUBSTRING(cv1, j+1, 1)), 16, 10) + 1;
				IF c > c_temp THEN SET c = c_temp; END IF;
				SET cv0 = CONCAT(cv0, UNHEX(HEX(c))), j = j + 1;
			END WHILE;
			SET cv1 = cv0, i = i + 1;
		END WHILE;
	END IF;
	RETURN c;
END$$

CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `LEVENSHTEIN_RATIO` (`s1` VARCHAR(255), `s2` VARCHAR(255)) RETURNS INT(11) BEGIN
    DECLARE s1_len, s2_len, max_len INT;
    SET s1_len = LENGTH(s1), s2_len = LENGTH(s2);
    IF s1_len > s2_len THEN SET max_len = s1_len; ELSE SET max_len = s2_len; END IF;
    RETURN ROUND((1 - LEVENSHTEIN(s1, s2) / max_len) * 100);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `actor`
--

INSERT INTO `actor` (`id`, `name`, `enabled`) VALUES
(2, 'Mohamed', 0),
(3, 'Omar', 1),
(4, 'Damien', 1),
(5, 'Laurence', 0),
(6, 'Christian', 1),
(7, 'Niaki', 1),
(8, 'Thierry', 1),
(9, 'Pierre', 1),
(10, 'Daye', 0);

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id`, `name`, `position`) VALUES
(30, 'Dessin', 0),
(31, 'Degarnissage', 2),
(32, 'Moussage', 3),
(33, 'Coupe', 4),
(34, 'Couture', 5),
(35, 'Garnissage Acces-sit', 6),
(36, 'Garnissage Clestophe', 7),
(37, 'Prise de gabarit', 8),
(38, 'Soudure', 9),
(39, 'Menuiserie', 1),
(40, 'Fixation Plaque', 10),
(41, 'Expedition/Logistique', 11);

-- --------------------------------------------------------

--
-- Structure de la table `competence_actor`
--

CREATE TABLE `competence_actor` (
  `competence_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `competence_actor`
--

INSERT INTO `competence_actor` (`competence_id`, `actor_id`) VALUES
(30, 4),
(31, 6),
(31, 7),
(31, 10),
(32, 6),
(32, 7),
(32, 10),
(33, 3),
(33, 4),
(33, 5),
(34, 2),
(34, 3),
(34, 5),
(35, 6),
(36, 6),
(37, 2),
(37, 6),
(38, 6),
(38, 7),
(39, 4),
(39, 9),
(40, 6),
(41, 8);

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `family_id` int(11) DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desComm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `itemSubfamily_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `item_family`
--

CREATE TABLE `item_family` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `item_sub_family`
--

CREATE TABLE `item_sub_family` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `main_planification`
--

CREATE TABLE `main_planification` (
  `id` int(11) NOT NULL,
  `date_planif` datetime DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `starting_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `SaleDocumentLine_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `main_sous_planification`
--

CREATE TABLE `main_sous_planification` (
  `id` int(11) NOT NULL,
  `planif_id` int(11) DEFAULT NULL,
  `competences` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time_planif` time NOT NULL,
  `starting_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `time_previs` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20171205124025'),
('20171227184340'),
('20171228135410'),
('20180423233251'),
('20180427224529'),
('20180427230600'),
('20180427235445'),
('20180502160947'),
('20180513131704'),
('20180513133716'),
('20180520184916');

-- --------------------------------------------------------

--
-- Structure de la table `sale_document`
--

CREATE TABLE `sale_document` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `documentDate` datetime NOT NULL,
  `documentnumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documentWishDate` date DEFAULT NULL,
  `documentValidDate` date DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customerName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numberPrefix` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `total_time` time DEFAULT NULL,
  `documentEndDateFabric` date DEFAULT NULL,
  `catEnd` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sale_document_line`
--

CREATE TABLE `sale_document_line` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documentId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `realQuantity` int(11) DEFAULT NULL,
  `deliveryDate` datetime DEFAULT NULL,
  `deliveryState` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saleDocument_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Planification_id` int(11) DEFAULT NULL,
  `total_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sousplanification_actor`
--

CREATE TABLE `sousplanification_actor` (
  `sousplanification_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `roles`) VALUES
(7, 'jess', '$2y$13$9RsJWbKORygK40f.RuV7yeQ.7DHjp4mtgnkkUoxJmjUQX7cPw.Th.', '[\"ROLE_ADMIN\"]'),
(8, 'ben', '$2y$13$YNv27WFrlpTmikbQ7d9mqOe5U2gKbW2Yy5yPYkuUuwqHaGMC3r89u', '[\"ROLE_ADMIN\"]');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_94D4687F5E237E06` (`name`),
  ADD UNIQUE KEY `UNIQ_94D4687F462CE4F5` (`position`);

--
-- Index pour la table `competence_actor`
--
ALTER TABLE `competence_actor`
  ADD PRIMARY KEY (`actor_id`,`competence_id`),
  ADD KEY `IDX_CE57071F15761DAB` (`competence_id`),
  ADD KEY `IDX_CE57071F10DAF24A` (`actor_id`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1F1B251EC35E566A` (`family_id`),
  ADD UNIQUE KEY `UNIQ_1F1B251EF1D5CC63` (`itemSubfamily_id`);

--
-- Index pour la table `item_family`
--
ALTER TABLE `item_family`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `item_sub_family`
--
ALTER TABLE `item_sub_family`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `main_planification`
--
ALTER TABLE `main_planification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_4D649D8610E9AED9` (`SaleDocumentLine_id`);

--
-- Index pour la table `main_sous_planification`
--
ALTER TABLE `main_sous_planification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EC7410C79DBEEA35` (`planif_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `sale_document`
--
ALTER TABLE `sale_document`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C61D66DC750985BA` (`documentnumber`),
  ADD KEY `IDX_C61D66DC9395C3F3` (`customer_id`);

--
-- Index pour la table `sale_document_line`
--
ALTER TABLE `sale_document_line`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5727BE81F16E39BF` (`Planification_id`),
  ADD KEY `IDX_5727BE81DBBCE3DC` (`saleDocument_id`),
  ADD KEY `UNIQ_5727BE81126F525E` (`item_id`);

--
-- Index pour la table `sousplanification_actor`
--
ALTER TABLE `sousplanification_actor`
  ADD PRIMARY KEY (`sousplanification_id`,`actor_id`),
  ADD KEY `IDX_92A6061757FBE842` (`sousplanification_id`),
  ADD KEY `IDX_92A6061710DAF24A` (`actor_id`);

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `item_family`
--
ALTER TABLE `item_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `item_sub_family`
--
ALTER TABLE `item_sub_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `main_planification`
--
ALTER TABLE `main_planification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `main_sous_planification`
--
ALTER TABLE `main_sous_planification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `competence_actor`
--
ALTER TABLE `competence_actor`
  ADD CONSTRAINT `FK_CE57071F10DAF24A` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CE57071F15761DAB` FOREIGN KEY (`competence_id`) REFERENCES `competence` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `FK_1F1B251EC35E566A` FOREIGN KEY (`family_id`) REFERENCES `item_family` (`id`),
  ADD CONSTRAINT `FK_1F1B251EF1D5CC63` FOREIGN KEY (`itemSubfamily_id`) REFERENCES `item_sub_family` (`id`);

--
-- Contraintes pour la table `main_planification`
--
ALTER TABLE `main_planification`
  ADD CONSTRAINT `FK_4D649D8610E9AED9` FOREIGN KEY (`SaleDocumentLine_id`) REFERENCES `sale_document_line` (`id`);

--
-- Contraintes pour la table `main_sous_planification`
--
ALTER TABLE `main_sous_planification`
  ADD CONSTRAINT `FK_EC7410C79DBEEA35` FOREIGN KEY (`planif_id`) REFERENCES `main_planification` (`id`);

--
-- Contraintes pour la table `sale_document_line`
--
ALTER TABLE `sale_document_line`
  ADD CONSTRAINT `FK_5727BE81126F525E` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `FK_5727BE81DBBCE3DC` FOREIGN KEY (`saleDocument_id`) REFERENCES `sale_document` (`id`),
  ADD CONSTRAINT `FK_5727BE81F16E39BF` FOREIGN KEY (`Planification_id`) REFERENCES `main_planification` (`id`);

--
-- Contraintes pour la table `sousplanification_actor`
--
ALTER TABLE `sousplanification_actor`
  ADD CONSTRAINT `FK_92A6061710DAF24A` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_92A6061757FBE842` FOREIGN KEY (`sousplanification_id`) REFERENCES `main_sous_planification` (`id`) ON DELETE CASCADE;
