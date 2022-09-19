-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 sep. 2022 à 17:52
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `connexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(1, 'Jo', 'jo@gmail.com', '90073695', '54', 'Kpalimé', 4, '2022-08-11', '2022-08-06'),
(2, 'ffff', 'sylvieabalo48@gmail.com', '92073695', '24', 'kpalimé', 12, '2022-08-18', '2022-09-03'),
(3, 'ffff', 'sylvieabalo48@gmail.com', '92073695', '24', 'kpalimé', 12, '2022-08-18', '2022-09-03'),
(4, 's', 'sylvieabalo48@gmail.com', '90073695', '5', 'f', 2, '2022-08-26', '2022-08-28'),
(5, 's', 'sylvieabalo48@gmail.com', '90073695', '5', 'f', 2, '2022-08-26', '2022-08-28'),
(6, 's', 'sylvieabalo48@gmail.com', '90073695', '5', 'f', 2, '2022-08-26', '2022-08-28'),
(7, 'Doe', 'doe@gmail.com', '90073695', '54', 'Atakpame', 5, '2022-09-02', '2022-08-21'),
(8, 'kokoi', 'kokou@gmail.com', '98 95 95 95', '45', 'sokodé', 2, '2022-08-31', '2022-09-02'),
(9, 'isabelle', 'zaza@gmail.com', '4553', '4', 'tsévié', 3, '2022-09-14', '2022-09-17'),
(10, 'isabelle', 'zaza@gmail.com', '4553', '4', 'tsévié', 3, '2022-09-14', '2022-09-17'),
(11, 'isabelle', 'zaza@gmail.com', '4553', '4', 'tsévié', 3, '2022-09-14', '2022-09-17'),
(12, 'MARIE', 'marie@gmail.com', '90073695', '2', 'SOTOBOUA', 2, '2022-09-19', '2022-09-21'),
(13, 'MARIE', 'marie@gmail.com', '90073695', '2', 'SOTOBOUA', 2, '2022-09-19', '2022-09-21'),
(14, 'MARIE', 'marie@gmail.com', '90073695', '2', 'SOTOBOUA', 2, '2022-09-19', '2022-09-21'),
(15, 'machoudi', 'machou@gmail.com', '92073695', '45', 'mono', 3, '2022-09-19', '2022-09-21'),
(16, 'toussaint', 'toussaint@gmail.com', '98 95 95 95', '3', 'kara', 4, '2022-09-19', '2022-09-23'),
(17, 'rrrr', 'zaza@gmail.com', '98 95 95 95', '4', 'Kpalimé', 3, '2022-09-19', '2022-09-22'),
(18, 'rrrr', 'zaza@gmail.com', '98 95 95 95', '4', 'Kpalimé', 3, '2022-09-19', '2022-09-22'),
(19, 'rrrr', 'zaza@gmail.com', '98 95 95 95', '4', 'Kpalimé', 3, '2022-09-19', '2022-09-22'),
(20, 'rrrr', 'zaza@gmail.com', '98 95 95 95', '4', 'Kpalimé', 3, '2022-09-19', '2022-09-22'),
(21, 'sylvie', 'sylvieabalo48@gmail.com', '984657', '12', 'kara', 14, '2022-09-20', '2022-09-06'),
(22, 'sylvie', 'sylvieabalo48@gmail.com', '984657', '12', 'kara', 14, '2022-09-20', '2022-09-06');

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE `galerie` (
  `ID` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `nom`, `email`, `phone`, `message`) VALUES
(2, 'doe', 'doe@gmail.com', '9563', 'hello'),
(3, 'Doe ', 'sylvieabalo48@gmail.com', '98 95 95 95', 'hello'),
(4, 'yayya', 'yaya@gmail.com', '90073695', 'hi'),
(5, 'yayya', 'yaya@gmail.com', '90073695', 'hi'),
(6, 'yayya', 'yaya@gmail.com', '90073695', 'hi'),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, 'mariam', 'mariam@gmail.com', '90073695', 'coucou'),
(16, 'jean', 'jean@gmail.com', '98 95 95 95', 'comment vas-tu'),
(17, 'jean', 'jean@gmail.com', '98 95 95 95', 'comment vas-tu'),
(18, 'jean', 'jean@gmail.com', '98 95 95 95', 'comment vas-tu');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'jo@gmail.com'),
(2, 'jo@gmail.com'),
(3, 'ama@gmail.com'),
(4, ''),
(5, 'sylvieabalo48@gmail.com'),
(6, 'sylvieabalo48@gmail.com'),
(7, ''),
(8, ''),
(9, 'vino@gmail.com'),
(10, 'sylvieabalo48@gmail.com'),
(11, 'sylvieabalo48@gmail.com'),
(12, 'sylvieabalo48@gmail.com'),
(13, 'sylvieabalo48@gmail.com'),
(14, 'sidonie@gmail.com'),
(15, 'sidonie@gmail.com'),
(16, 'sylvieabalo48@gmail.com'),
(17, 'sylvieabalo48@gmail.com'),
(18, 'sylvieabalo48@gmail.com'),
(19, 'sylvieabalo48@gmail.com'),
(20, 'arlette@gmail.com'),
(21, 'sidonie@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `services_ajdl`
--

CREATE TABLE `services_ajdl` (
  `ID` int(255) NOT NULL,
  `SERVICE` varchar(255) NOT NULL,
  `PRIX` varchar(255) NOT NULL,
  `PHOTO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services_ajdl`
--

INSERT INTO `services_ajdl` (`ID`, `SERVICE`, `PRIX`, `PHOTO`) VALUES
(4, 'rANDONNEE', '10000 FCFA', 'IMAGES/63.jpg'),
(5, 'TREKKING', '10000 FCFA', 'IMAGES/images1.jpg'),
(6, 'PROMENADE', '10000 FCFA', 'IMAGES/65.jpg'),
(7, 'GUIDE', '10000 FCFA', 'IMAGES/IMG-20220818-WA0007.jpg'),
(8, 'VISITE DES SITES TOURISTIQUES', '10000 FCFA', 'IMAGES/64.jpg'),
(9, 'ATELIER DE NATTE TRADITIONNELLE', '10000 FCFA', 'IMAGES/66.jpg'),
(10, 'ATELIER DE PEINTURE VEGETALE', '10000 FCFA', 'IMAGES/67.jpg'),
(11, 'TREKKING AVEC BIOUAC', '10000 CFA', 'IMAGES/68.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `ip`, `token`, `date_inscription`) VALUES
(0, 'jojo', 'jo@gmail.com', '$2y$12$7HcMCcLNURt2CVAYJfgLmOuTbx5Nzrita59E4ZItuweYbvQusvqDi', '127.0.0.1', '', '2022-08-22 15:40:26'),
(0, 'doe', 'doe@gmail.com', '$2y$12$N.5ZEok6fv2073/b7kyBJ.guXFpCmV7LgqhvSTXmqoBAb8Iby9C6G', '127.0.0.1', '74c5fd50806f8939f1a3386c6292316b9006512c76989c6fad2c5eb9ffa34f6804f24207c996b8fa207342e9d12b5b4325dabdb497c72082de878ce1112425c4', '2022-08-22 15:56:28'),
(0, 'sysy', 'sysy@gmail.com', '$2y$12$frZzdCPdPZlA2.Cm1PRUV..F/tGCgKZn6QNDBq6pap0ZWxSbHmOva', '127.0.0.1', '2234924e613ebbec0a6c51d5666523029b913bfb044d3e7765d9076848d83f7126fbf3e6853dd421511e1a2865cf8ba8436ca1ab1c469be68d71f186b2ac122d', '2022-08-22 16:08:02'),
(0, 'abalo sylvie', 'dede@gmail.com', '$2y$12$83a.rRvozOyPzisz.eCjkOdoja2ekNjgSaAivLWlicXuqf98QRUnO', '127.0.0.1', 'b8ddd1ac84a3e76208ea74d4bbcb937df5ae29afca7718f4713389e983000c13d46da08913ef92969a0e6f6d3db8e9855fa8dcbd098b4f4b6a907f399714fe0d', '2022-08-22 16:15:01'),
(0, 'yawa yawa', 'yawa@gmail.com', '$2y$12$JBHffT5FpfhlwXOhl3x/5OFkPalLwNwZxEUIPdE.LAC1i8orkxBmm', '127.0.0.1', 'ac91d30fa2971c8acf67a2b7bcd26608ffb4aae00098f19824ab88dd2f0d9e8731466f33df59e21fdb889b1a3f45f98827e9eef60b6c758cbadc6ef51b65322d', '2022-08-22 16:34:56'),
(0, 'ghislaine', 'ghis@gmail.com', '$2y$12$OsYUJQlBRZXH4oLueQDi9uekuCRg6QPgI3nE/wnsSIUyfcmQ5zNlS', '127.0.0.1', '0915eedcd2fbfbf3ce96292e984be7d972b5d9620032ac910c1218d70c02f117738b596468107ac84e3393670fd9952a81fc3ebfdebb641ad9c5bfbb740f82cf', '2022-08-22 22:16:31'),
(0, 'rere', 'rere@gmail.com', '$2y$12$Q/GUD7k5GhJ84JMtNegxp.FGomt9GgxZtumV.n1uC5Wm4QytEWLc2', '127.0.0.1', '139706ca43e8cc71b15b1921859dc600d303b3013fa7d1e87ef028d297971db30034078376073346764182bcf695b5a6fcfa73a90c63a7fd8ad949fe2089e6d7', '2022-08-22 23:57:45'),
(0, 'abalo', 'gygy@gmail.com', '$2y$12$IbQscZkdUYPRmb.TbAitTuhazeUoPSHW4mp460cnuSu4qVrFr6B.W', '127.0.0.1', '214b270b4b9786f1a0a0a724f991d91a4ed25fb78338d60736a8468d49b571a66455bd70b5e61af4b3da83747f91046f28e93d5dcf9c85cf7be3731aec98017a', '2022-08-23 13:10:38'),
(0, 'ab', 'ab@gmail.com', '$2y$12$xLecgnZSwqIODfsl5cVc8OSiqwBj621psfTEJnR01lURvOkIwjGcq', '127.0.0.1', '8411b26a867efad96f32a7b1a0189ab0a453c6a80ee3c85cb1f8a2bc7aa8eac3f4586f031d9e93a9b2ec0cd03cd4b8d8f52b19811cdcad8e20976955f21414fc', '2022-08-25 16:51:25'),
(0, 'albert', 'albert@gmail.com', '$2y$12$XQYi49peURy0kUXLS/HY1eQzsiQTl4WiACUm.AONIM4qqxy.KxT9W', '127.0.0.1', '35d35cb5a8ffd44b609d253c6bf3eed506988c2c00e27069975d30c8a2405dbc1bc81344b3939b9ce5d45751c73ca61ed0a12f1dccd6ccd552e9c1726dbf1007', '2022-08-26 17:26:30'),
(0, 'solim', 'solim@gmail.com', '$2y$12$kITmmFyNvsACAvxePb5bKumNhdWsfUY/6QQUYKoaUraKprQUwq9m2', '127.0.0.1', 'fd3b744009015e6e2649e1381687c268ee957cadbfe27b1a32b3912cba1e57afcf526a2ff70f8a754b8ea13a339377dcf2d47d0697b9aed3d6e09b940d540ac5', '2022-08-31 14:59:24'),
(0, 'yaya', 'yaya@gmail.com', '$2y$12$sIwdZuwzaIdDfKg6psXiB.MEk1Z/yjW99odp1mNSApPrLRMdWLOQG', '127.0.0.1', '008aef6fd4d3cc62045cf78c7d1d4d15b0f206f62e1b659f6f2f4ce0068cfda37522038d2b674e5d99c246cf086c510ca85f2ebdbfc4267845a3c3c6b2fc243e', '2022-09-05 14:24:50'),
(0, 'abb', 'abb@gmail.com', '$2y$12$dKjTJ2WQk3u28QCbcrkDo.NpDO1XG.aWrsKYetQ9ZqA1jtobojMTe', '127.0.0.1', '94bca270668e996524134a81081d53747777812fb296d6223e81894e30d9273f89e96d7e47403a9c2cbd400143ea01624a06bb1b99dca08a2ae4dee7ba9ce18c', '2022-09-18 21:44:35');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs_admin`
--

CREATE TABLE `utilisateurs_admin` (
  `login` varchar(200) NOT NULL,
  `motPasse` varchar(200) NOT NULL,
  `my_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs_admin`
--

INSERT INTO `utilisateurs_admin` (`login`, `motPasse`, `my_photo`) VALUES
('sylvie', 'sylvie', './IMAGES/73.webp');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services_ajdl`
--
ALTER TABLE `services_ajdl`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateurs_admin`
--
ALTER TABLE `utilisateurs_admin`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
