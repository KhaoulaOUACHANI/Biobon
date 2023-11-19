-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 19 nov. 2023 à 20:03
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Biobonbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `Boutique`
--

CREATE TABLE `Boutique` (
  `id_boutique` int(11) NOT NULL,
  `nom_boutique` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `num_tel` int(11) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Boutique`
--

INSERT INTO `Boutique` (`id_boutique`, `nom_boutique`, `adresse`, `num_tel`, `ville`, `pays`) VALUES
(13, 'Boutique J', '123 Rue de la Liberté', 787654326, 'Lyon', 'France'),
(14, 'Boutique K', '456 Main Street', 747839865, 'Los Angeles', 'USA'),
(15, 'Boutique L', '789 High Street', 753782936, 'London', 'UK'),
(16, 'Boutique M', '42 Avenue des Champs-Élysées', 739281307, 'Paris', 'France'),
(17, 'Boutique N', '1010 Broadway', 738736549, 'New York', 'USA'),
(18, 'Boutique O', '33 Oxford Street', 736564658, 'London', 'UK'),
(19, 'Boutique P', '1 Rue de la République', 765486739, 'Marseille', 'France'),
(20, 'Boutique Q', '987 Market Street', 767936786, 'San Francisco', 'USA'),
(21, 'Boutique R', '11 Downing Street', 753947529, 'London', 'UK'),
(22, 'Boutique S', '1234 Baker Street', 734821970, 'Toulouse', 'France'),
(23, 'Boutique T', '567 Wall Street', 767397529, 'Miami', 'USA'),
(24, 'Boutique U', '99 Parliament Street', 774398475, 'Edinburgh', 'UK');

-- --------------------------------------------------------

--
-- Structure de la table `Commandes`
--

CREATE TABLE `Commandes` (
  `id_commandes` int(11) NOT NULL,
  `total_ht` decimal(10,2) NOT NULL,
  `total_ttc` decimal(10,2) NOT NULL,
  `nom_article` varchar(255) NOT NULL,
  `promo` decimal(5,2) DEFAULT NULL,
  `numero_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Commandes`
--

INSERT INTO `Commandes` (`id_commandes`, `total_ht`, `total_ttc`, `nom_article`, `promo`, `numero_commande`) VALUES
(1, '45.00', '49.50', 'Produit 13', '9.50', 947483983),
(2, '67.95', '74.74', 'Produit 14', '6.79', 345543323),
(3, '29.99', '29.99', 'Produit 15', NULL, 456765433),
(4, '24.99', '27.49', 'Produit 16', '2.50', 876543456),
(5, '54.99', '60.49', 'Produit 17', '5.50', 126432454),
(6, '19.99', '19.99', 'Produit 18', NULL, 654367854);

-- --------------------------------------------------------

--
-- Structure de la table `Commande_Produits`
--

CREATE TABLE `Commande_Produits` (
  `id_commande_produits` int(11) NOT NULL,
  `Commande_id` int(11) NOT NULL,
  `Produits_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Produits`
--

CREATE TABLE `Produits` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `description_produit` text,
  `reference_produit` varchar(100) DEFAULT NULL,
  `image_produit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Produits`
--

INSERT INTO `Produits` (`id_produit`, `nom_produit`, `prix`, `description_produit`, `reference_produit`, `image_produit`) VALUES
(1, 'Bonbon Gélifié Fraise', '1.50', 'Le Bonbon Gélifié Fraise est un incontournable pour les amateurs de saveurs fruitées. Fabriqué avec une recette secrète transmise de génération en génération, ce bonbon gélifié à la fraise est une véritable explosion de goût. Chaque bouchée offre une combinaison parfaite de douceur et d\'acidité, éveillant vos papilles à une symphonie de saveurs fruitées. Les fraises utilisées sont soigneusement sélectionnées pour garantir la meilleure qualité, ce qui se ressent à chaque dégustation. Nos bonbons gélifiés à la fraise sont parfaits pour une petite douceur à tout moment de la journée.', 'PROD-75329', 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(2, 'Oursons en Guimauve', '2.00', 'Les Oursons en Guimauve sont une véritable caresse pour l\'âme gourmande. Chacun de ces oursons moelleux est enveloppé dans une guimauve d\'une douceur irrésistible, puis délicatement enrobé de chocolat au lait de première qualité. La combinaison de la guimauve fondante et du chocolat crémeux crée une expérience gustative exceptionnelle. Lorsque vous croquez dans un Ourson en Guimauve, vous découvrirez un mélange parfait d\'arômes sucrés qui fondent en bouche. Ces oursons sont parfaits pour un moment de réconfort ou pour partager avec vos proches.', 'PROD-11233', 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(3, 'Dragées au Chocolat', '1.75', 'Nos Dragées au Chocolat Noir sont conçues pour satisfaire les palais les plus exigeants. Chaque dragée est fabriquée à partir de chocolat noir riche et intensément corsé, offrant une expérience de dégustation profonde et sophistiquée. Le chocolat noir est soigneusement enrobé d\'une fine couche de sucre pour créer un contraste parfait entre le croquant et la douceur. Les dragées au chocolat noir sont un choix élégant pour ceux qui apprécient la subtilité et la complexité des saveurs du chocolat noir.', 'PROD-22244', 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(4, 'Cœurs en Sucre Candies', '1.25', 'Les Cœurs en Sucre Candies sont bien plus qu\'un simple bonbon ; ce sont de petites œuvres d\'art sucrées. Chaque bonbon est soigneusement façonné en forme de cœur et offre une explosion de saveurs acidulées et fruitées. Parfait pour les fêtes et les célébrations, ces bonbons apportent une touche de romance à chaque instant. Leur saveur acidulée éveille vos sens et les rend irrésistibles pour les amateurs de douceurs fruitées. Les Cœurs en Sucre Candies sont un témoignage d\'amour pour les bonbons et la gourmandise.', 'PROD-12121', 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(5, 'Bonbon Acidulé Citron', '1.50', 'Les Cœurs en Sucre Candies sont bien plus qu\'un simple bonbon ; ce sont de petites œuvres d\'art sucrées. Chaque bonbon est soigneusement façonné en forme de cœur et offre une explosion de saveurs acidulées et fruitées. Parfait pour les fêtes et les célébrations, ces bonbons apportent une touche de romance à chaque instant. Leur saveur acidulée éveille vos sens et les rend irrésistibles pour les amateurs de douceurs fruitées. Les Cœurs en Sucre Candies sont un témoignage d\'amour pour les bonbons et la gourmandise.', 'PROD-78787', 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(6, 'Bâtonnets de Réglisse', '1.75', 'Les Bâtonnets de Réglisse sont une véritable révélation pour les amateurs de réglisse authentique. Fabriqués à partir d\'extrait pur de réglisse, ces bâtonnets offrent une saveur profonde et complexe qui évoque la nostalgie des bonbons d\'antan. Chaque bâtonnet est soigneusement confectionné pour capturer la saveur naturelle de la réglisse. La texture à la fois ferme et fondante de ces bonbons en fait une expérience unique à chaque bouchée. Les Bâtonnets de Réglisse sont parfaits pour satisfaire vos envies de réglisse traditionnelle.', 'PROD-33333', 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(7, 'Bonbon Fruity Gummies', '2.25', 'Les Bonbons Fruity Gummies sont une célébration de la diversité des saveurs fruitées. Cet assortiment de bonbons gélifiés vous emmène dans un voyage gustatif à travers un arc-en-ciel de fruits exotiques et familiers. Chaque bonbon est une explosion de saveur, allant de la douceur des fraises à l\'acidité des agrumes. Les textures moelleuses et gélifiées des bonbons offrent une expérience tactile agréable. Les Bonbons Fruity Gummies sont parfaits pour ceux qui aiment varier les plaisirs et explorer de nouvelles saveurs.', NULL, 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(8, 'Caramels au Beurre Salé', '2.50', 'Les Caramels au Beurre Salé sont une symphonie de douceur et de salinité qui danse sur votre langue. Ces délicieux caramels sont fabriqués à partir de beurre salé de qualité supérieure, ce qui leur confère une richesse de saveur inégalée. Chaque caramel est cuit à la perfection pour obtenir la consistance idéale, à la fois fondante et légèrement croquante. Lorsque vous dégustez un Caramel au Beurre Salé, vous êtes transporté dans un monde de gourmandise sucrée-salée. Ces caramels sont parfaits pour ceux qui apprécient la complexité des saveurs.', NULL, 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(9, 'Pastilles Mentholées', '1.75', 'Les Pastilles Mentholées sont le remède parfait pour rafraîchir votre haleine et revitaliser vos sens. Chaque pastille est imprégnée de l\'arôme naturel du menthol, offrant une fraîcheur intense qui vous redonne de l\'énergie. Les pastilles se dissolvent lentement dans votre bouche, libérant progressivement le menthol rafraîchissant. Parfaites pour les moments où vous avez besoin d\'une bouffée d\'air frais, ces pastilles mentholées sont un incontournable pour les amateurs de fraîcheur.', NULL, 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(10, 'Bonbon Fraise Tagada', '1.50', 'Les Bonbons Fraise Tagada sont une icône de la gourmandise depuis des générations. Ces délicieux bonbons gélifiés à la fraise sont enrobés d\'une fine couche de sucre, créant une texture unique à la fois tendre et croquante. Chaque bonbon évoque la saveur sucrée des fraises mûres à la perfection. Les Bonbons Fraise Tagada sont parfaits pour les moments de détente et de partage. Leur forme reconnaissable en fait un symbole de la douceur à l\'état pur.', NULL, 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(11, 'Bonbon Acidulé Cerise', '1.50', 'Le Bonbon Acidulé Cerise est une explosion de saveur pour les amateurs de saveurs fruitées et acidulées. Ces bonbons combinent l\'acidité vive de la cerise avec une douceur sucrée pour créer une expérience gustative équilibrée. Chaque bonbon est une invitation à la découverte de la saveur naturelle de la cerise, avec une pointe d\'acidité qui réveille vos sens. Les Bonbons Acidulés Cerise sont parfaits pour ceux qui aiment les saveurs fruitées avec un petit piquant.', NULL, 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(12, 'Chamallows Multicolores', '2.00', 'Les Chamallows Multicolores sont une explosion de couleurs et de douceur. Ces marshmallows moelleux et colorés apportent une touche de gaieté à chaque bouchée. Que vous les dégustiez seuls, les grilliez sur un feu de camp ou les utilisiez pour créer des guimauves fondantes dans votre chocolat chaud, les Chamallows Multicolores apportent une dose de réconfort sucré à chaque instant. Leur texture légère et leur variété de couleurs les rendent irrésistibles pour les amateurs de douceurs ludiques.', NULL, 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8'),
(13, 'Pastilles à la Violette', '1.75', 'Les Pastilles à la Violette sont un trésor pour les amateurs de saveurs florales délicates. Ces pastilles captent l\'essence subtile et parfumée de la violette, offrant une expérience gustative unique. Chaque pastille libère progressivement la douceur de la violette dans votre bouche, créant une sensation de raffinement. Les Pastilles à la Violette sont idéales pour ceux qui recherchent une saveur unique et mémorable, rappelant les jardins en fleurs et les parfums envoûtants.', NULL, 'https://img.freepik.com/free-photo/bright-candies-isolated-white_144627-915.jpg?w=1380&t=st=1699278911~exp=1699279511~hmac=7860fbee40e5d4aa76111368127df8ac6ecdb4b2b3dbe8dd4058b75178c342c8');

-- --------------------------------------------------------

--
-- Structure de la table `Produits_Boutique`
--

CREATE TABLE `Produits_Boutique` (
  `id_produits_boutique` int(11) NOT NULL,
  `Produits_id` int(11) NOT NULL,
  `Boutique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Produits_Boutique`
--

INSERT INTO `Produits_Boutique` (`id_produits_boutique`, `Produits_id`, `Boutique_id`) VALUES
(1, 1, 16),
(2, 2, 15),
(3, 4, 15),
(4, 4, 18);

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse_mail` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `numero_tel` int(11) DEFAULT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`id_utilisateur`, `nom`, `prenom`, `adresse_mail`, `mot_de_passe`, `numero_tel`, `date_de_naissance`, `ville`, `pays`) VALUES
(1, 'Martin', 'Sophie', 'sophie.martin@email.com', 'secure123', 739487290, '1985-05-15', 'Paris', 'France'),
(2, 'Brown', 'Jessica', 'jessica.brown@email.com', 'pass123', 748593027, '1990-09-25', 'New York', 'USA'),
(3, 'Johnson', 'Michael', 'michael.johnson@email.com', 'mysecurepwd', 748769230, '1992-12-21', 'London', 'UK'),
(4, 'Dupont', 'Marie', 'marie.dupont@email.com', 'password123', 745821309, '1988-07-30', 'Lyon', 'France'),
(5, 'Williams', 'Olivia', 'olivia.williams@email.com', 'mdp123', 739205726, '1995-02-15', 'Los Angeles', 'USA'),
(6, 'Garcia', 'Carlos', 'carlos.garcia@email.com', 'securepwd', 798457382, '1980-03-07', 'Manchester', 'UK'),
(7, 'Lefebvre', 'Pierre', 'pierre.lefebvre@email.com', 'password456', 794287453, '1993-01-12', 'Marseille', 'France'),
(8, 'Smith', 'James', 'james.smith@email.com', 'mysecret', 798034157, '1997-11-18', 'San Francisco', 'USA'),
(9, 'White', 'Emily', 'emily.white@email.com', 'pass123', 745820943, '1996-08-27', 'Edinburgh', 'UK'),
(10, 'khaoula', 'ouachani', 'khaoula@gmail.com', '$2y$10$ih2B1kuMq092DLMuDSZmm.axHZyv./4cJy/gdHBd/4undCb19yZsC', NULL, NULL, NULL, NULL),
(11, 'Aya', 'Benmakhlouf', 'ayaB@gmail.com', '$2y$10$xswq/E.MsYvNj/j.ZHOOUe8yX4IdwBDBAgGJY6P2Dl/U6jFDydF.C', NULL, NULL, NULL, NULL),
(12, 'Aya', 'Benmakhlouf', 'ayaB@gmail.com', '$2y$10$kipEhsGmLCoQkXNcuA/TKusbvywcrhlhRPbxaJuvI42X3XMbPQMAG', NULL, NULL, NULL, NULL),
(13, 'Aya', 'Benmakhlouf', 'ayaB@gmail.com', '$2y$10$gg8jq2cXB/eUJP.XoORHue8wU.n82WdzUaAKJVU6OgOCosYlovIY2', NULL, NULL, NULL, NULL),
(14, 'Aya', 'Benmakhlouf', 'ayaB@gmail.com', '$2y$10$HlEQd2V3rGrLv9IKQfYEMehu6iH2ZTEcGJlqiU4kXhTrvj0ZvcmPK', NULL, NULL, NULL, NULL),
(15, 'Aya', 'Benmakhlouf', 'ayaB@gmail.com', '$2y$10$WV8M6oaJSH6/JS5wD8/q0OXFtlu1JfO.o63U3txH8QoluD8vBSIxW', NULL, NULL, NULL, NULL),
(16, 'Aya', 'Benmakhlouf', 'ayaB@gmail.com', '$2y$10$w8ZPc6iSdUKj/.4eho9jy.mbAWPicWb14F7pAwnRitzovZvoby9v6', NULL, NULL, NULL, NULL),
(17, 'Aya', 'Benmakhlouf', 'ayaB@gmail.com', '$2y$10$QptZbmtg.gLrnxi/b6w5U.WSok1.H3nxPsM.g8xrcShbVzDkYcNvi', NULL, NULL, NULL, NULL),
(18, 'Aya', 'izfs', 'aya@gmail.com', '$2y$10$QigJ4j35V6pWZfL.3iy1.u.WDIWdNuJV7Mejwt3.mpiBW8Ldxb9a.', NULL, NULL, NULL, NULL),
(19, 'khaoula', 'iygebd', 'khaoula@gmail.com', '$2y$10$jl3NAosjQx3i1nmG4/YLJuClPqM9pUcFhNVVgswMqYKRY8cNhsPlG', NULL, NULL, NULL, NULL),
(20, 'khaoula69@gmail.com', 'ouch', 'k.ouchanii@gmail.com', '$2y$10$6lwX6zr0j0bPfAD0McKruOCRLC1r1nQ6M38cWm9kC98IJnXlJ5pnO', NULL, NULL, NULL, NULL),
(21, 'khaoula69@gmail.com', 'ouch', 'k.ouchanii@gmail.com', '$2y$10$qELNI6Ytqzn5sK8Xr9BpSOJdCNJKdRs8dAtT81ycIt6uPsdq8VS56', NULL, NULL, NULL, NULL),
(22, 'khaoula69@gmail.com', 'ouch', 'k.ouchanii@gmail.com', '$2y$10$DTEjQtq.5kAb/Pulu9QcU.KWFqxvLOE8/1JzYxz4f6y6Rjfc323Nu', NULL, NULL, NULL, NULL),
(23, 'khaoula69@gmail.com', 'ouch', 'k.ouchanii@gmail.com', '$2y$10$.g6HjFu2pMV/Im1qQoo5xO3e7f4WuPVui5SFvdBXaNvg/p1jQ7/xK', NULL, NULL, NULL, NULL),
(24, 'k', 'o', 'k.ouachanii@gmail.com', '$2y$10$A3KEJiGqz0WOu4UFkunQ1u3A9fKi9Lm2Am9.YRpeaZsJMS2y0LjJ2', NULL, NULL, NULL, NULL),
(25, 'Aya', 'gjuhhukjgj', 'aya@gmail.com', '$2y$10$BTh0o4Bnlt9G0M6PPSfGZOhjkUGu641zyKK8D2JSPO1Hgb6pcCYLO', NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Boutique`
--
ALTER TABLE `Boutique`
  ADD PRIMARY KEY (`id_boutique`);

--
-- Index pour la table `Commandes`
--
ALTER TABLE `Commandes`
  ADD PRIMARY KEY (`id_commandes`);

--
-- Index pour la table `Commande_Produits`
--
ALTER TABLE `Commande_Produits`
  ADD PRIMARY KEY (`id_commande_produits`),
  ADD KEY `Commande_id` (`Commande_id`),
  ADD KEY `Produits_id` (`Produits_id`);

--
-- Index pour la table `Produits`
--
ALTER TABLE `Produits`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `Produits_Boutique`
--
ALTER TABLE `Produits_Boutique`
  ADD PRIMARY KEY (`id_produits_boutique`),
  ADD KEY `Boutique_id` (`Boutique_id`),
  ADD KEY `Produits_id` (`Produits_id`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Boutique`
--
ALTER TABLE `Boutique`
  MODIFY `id_boutique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `Commandes`
--
ALTER TABLE `Commandes`
  MODIFY `id_commandes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Commande_Produits`
--
ALTER TABLE `Commande_Produits`
  MODIFY `id_commande_produits` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Produits`
--
ALTER TABLE `Produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `Produits_Boutique`
--
ALTER TABLE `Produits_Boutique`
  MODIFY `id_produits_boutique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Commande_Produits`
--
ALTER TABLE `Commande_Produits`
  ADD CONSTRAINT `commande_produits_ibfk_1` FOREIGN KEY (`Commande_id`) REFERENCES `Commandes` (`id_commandes`),
  ADD CONSTRAINT `commande_produits_ibfk_2` FOREIGN KEY (`Produits_id`) REFERENCES `Produits` (`id_produit`);

--
-- Contraintes pour la table `Produits_Boutique`
--
ALTER TABLE `Produits_Boutique`
  ADD CONSTRAINT `produits_boutique_ibfk_1` FOREIGN KEY (`Boutique_id`) REFERENCES `Boutique` (`id_boutique`),
  ADD CONSTRAINT `produits_boutique_ibfk_2` FOREIGN KEY (`Produits_id`) REFERENCES `Produits` (`id_produit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
