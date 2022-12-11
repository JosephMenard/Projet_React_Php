CREATE TABLE IF NOT EXISTS Post
(
    id      INT             NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title   VARCHAR(200)    NOT NULL,
    content TEXT,
    date    DATETIME
);
INSERT INTO `Post` (`id`, `title`, `content`, `date`) VALUES (NULL, '1', 'azrtrtz', '2022-12-07 21:45:06');
INSERT INTO `Post` (`id`, `title`, `content`, `date`) VALUES ('2', 'La Suède lance la chasse aux sans-papiers', 'Vous pouvez partager un article en cliquant sur les icônes de partage en haut à droite de celui-ci. \r\nLa reproduction totale ou partielle d’un article, sans l’autorisation écrite et préalable du Monde, est strictement interdite. \r\nPour plus d’informations, consultez nos conditions générales de vente. \r\nPour toute demande d’autorisation, contactez droitsdauteur@lemonde.fr. \r\nEn tant qu’abonné, vous pouvez offrir jusqu’à cinq articles par mois à l’un de vos proches grâce à la fonctionnalité « Offrir un article ». \r\n\r\nhttps://www.lemonde.fr/international/article/2022/12/07/la-suede-lance-la-chasse-aux-sans-papiers_6153409_3210.html\r\n\r\nSur son compte Instagram, le 5 décembre, la nouvelle ministre de l’immigration suédoise, Maria Stenergard, pose en chemisier noir, les mains à plat devant elle sur une table, comme pour montrer sa détermination. Sous son portrait, une citation tirée d’une interview qu’elle a donnée le même jour au journal Expressen : « Ceux qui n’ont pas le droit d’être en Suède doivent être expulsés. » Dans l’entretien, elle précise que son objectif est d’« éradiquer la société de l’ombre ».\r\n\r\nPendant la campagne pour les élections législatives, qui ont eu lieu en septembre, la droite et l’extrême droite ont promis d’intensifier les expulsions d’immigrés clandestins. Les conservateurs, chrétiens-démocrates et libéraux, qui gouvernent depuis le 18 octobre avec le soutien des Démocrates de Suède (SD), une formation d’extrême droite, estiment qu’ils seraient 100 000 dans le pays. Ces chiffres ne sont pas confirmés par la police des frontières, selon laquelle 18 000 personnes faisaient l’objet d’une obligation de quitter le territoire fin 2021, parmi lesquelles environ 10 000 avaient disparu.\r\n\r\n', '2022-12-08 09:36:48');
CREATE TABLE IF NOT EXISTS User
(
    id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    lastname VARCHAR(200)  NOT NULL,
    firstname VARCHAR(200)  NOT NULL,
    email  VARCHAR(200)  NOT NULL,
    password TEXT
);
INSERT INTO `User` (`id`, `lastname`, `firstname`, `email`, `password`) VALUES ('1', 'herby', 'nerilus', 'nerilus.h@gmail.Com', 'azerty');
/* Création de la table `User` */
-- DROP TABLE IF EXISTS `Users`;
-- CREATE TABLE IF NOT EXISTS `Users`(
--     `id` integer(11) NOT NULL AUTO_INCREMENT,
--     `lastname` varchar(40),
--     `firstname` varchar(40),
--     `login` varchar(30) NOT NULL UNIQUE,
--     `password` varchar(60) NOT NULL,
--     PRIMARY KEY (`id`)
-- );

-- /* Insertion d'un utilisateur avec le role admin dans la table `User`*/
-- INSERT INTO `Users` (`id`, `lastname`, `firstname`,`login`, `password`) VALUES
-- ('1', 'Admin', 'Admin', 'admin', '$2y$10$OgGilVcpTrARPRsrx8YZf.GRCGW3EAugei7htlwYaGDdbROVRY2pu');
-- INSERT INTO `Users` (`id`, `lastname`, `firstname`,`login`, `password`) VALUES
--     ('2', 'ROMAIN', 'ROMAIN', 'ROMAIN', '$2y$10$OgGilVcpTrARPRsrx8YZf.GRCGW3EAugei7htlwYaGDdbROVRY2pu');

-- /* Création de la table `Post` */
-- DROP TABLE IF EXISTS `Post`;
-- CREATE TABLE IF NOT EXISTS `Post` (
--     `id` integer NOT NULL AUTO_INCREMENT,
--     `title` varchar(255) NOT NULL,
--     `content` text NOT NULL,
--     `authorId` int NOT NULL,
--     `image` varchar (255),
--     `created_at` datetime DEFAULT NULL,
--     `updated_at` datetime DEFAULT NULL,
--      PRIMARY KEY (`id`)
-- );

-- /* Insertion de deux post du compte Admin dans la table `Post` */
-- INSERT INTO `Post` (`id`,`title`, `content`, `authorId`,`created_at`,`updated_at`) VALUES
-- (1,'Premier Post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pharetra massa sit amet gravida tempus. Etiam mattis varius ipsum et viverra. Fusce sit amet bibendum eros, vel varius quam. Maecenas.',1, '2022-11-16 16:15:24', '2022-11-16 16:15:24'),
-- (2,'Second Post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pharetra massa sit amet gravida tempus. Etiam mattis varius ipsum et viverra. Fusce sit amet bibendum eros, vel varius quam. Maecenas.',1, '2022-11-17 08:35:42', '2022-11-17 08:35:42');







