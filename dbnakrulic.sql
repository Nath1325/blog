-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 15 jan. 2019 à 13:28
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbnakrulic`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(10) NOT NULL AUTO_INCREMENT,
  `id_article` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `contenu` varchar(500) NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `id_article`, `username`, `contenu`) VALUES
(3, 1, 'xX_Killer63_Xxx', 'trop bien cet article lol'),
(4, 1, 'El_famoso', 'J\'avoue '),
(8, 3, '18cmVeineux', 'j\'ai pas compris\r\n'),
(9, 3, 'RebeuDeter1m95', 'pq c\'est pas ecrit en franÃ§ais?'),
(14, 1, 'Larry', 'ayaaaaaa'),
(15, 2, 'BgDu45', 'salut'),
(16, 2, 'anonymous', 'coucou'),
(17, 4, 'azerty4566', 'xDD'),
(18, 13, 'QwErTy12345', 'Il est vraiment nul cet article'),
(19, 13, 'SniperXxXFlashscope', 'j\'avoue '),
(20, 11, 'anonymousdu45', 'hein'),
(21, 13, 'lkjlkj', 'lkjklj'),
(22, 13, 'lkjlkj', 'lkjkljlkjkljklj'),
(23, 1, 'nath', 'yooo les kheys'),
(24, 15, 'fikret', 'yo les kheys'),
(25, 15, 'nathan', 'tg'),
(26, 16, 'fd', 'ereeee');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_article` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `article` varchar(10000) NOT NULL,
  `date_publication` date NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_article`, `id_user`, `titre`, `article`, `date_publication`) VALUES
(1, 1, 'Nam nibh tortor, varius eget lorem vitae, porta mollis elit.', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam imperdiet ac erat sed dapibus. Mauris mi enim, semper sit amet est nec, congue ultrices odio. In blandit, neque eu mattis volutpat, lacus turpis lobortis massa, in dictum justo nisi non metus. Sed tincidunt dignissim purus, vel porttitor lorem faucibus non. Sed eu finibus sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer lobortis, neque id ultrices luctus, mi neque sagittis libero, in faucibus arcu nulla ac elit.<br>\r\n<br>\r\nVestibulum justo massa, placerat ullamcorper nulla at, porta ultricies justo. In maximus non lacus et vulputate. Morbi lacinia turpis sed sem cursus, aliquam condimentum lacus tempus. Sed gravida pulvinar urna. Proin tempus volutpat lorem non faucibus. Ut ullamcorper, tellus laoreet aliquam commodo, arcu nulla euismod ipsum, eget consectetur odio magna at tellus. Duis ullamcorper justo nec odio bibendum blandit id ut nunc.<br>\r\n<br>\r\nProin nec tincidunt ex. Aenean efficitur, est ut pretium sodales, tellus ipsum mattis risus, sed congue metus massa nec nisi. Mauris lobortis sagittis diam, consequat dictum lectus ultrices sit amet. Mauris in magna non ante hendrerit placerat eget eu ligula. Mauris a dignissim leo. Nulla semper gravida felis id semper. Aenean eget magna turpis. Nulla arcu lectus, dapibus a efficitur sit amet, sodales ac velit. Morbi tellus purus, rutrum id rutrum eu, congue nec sem. Duis vel dapibus lorem. <br>', '2018-12-02'),
(2, 2, 'Maecenas efficitur tellus velit, eu sollicitudin mauris pretium eget. Aliquam non erat laoreet, molestie.', 'In gravida diam id velit tempor, sed rhoncus est cursus. Curabitur venenatis nisi ac lectus convallis, vel lobortis arcu vulputate. Integer non sodales mi. Maecenas ultricies lacus id nisl posuere, sed condimentum libero commodo. Ut suscipit finibus arcu ut luctus. Sed nisl nibh, lacinia in mauris at, hendrerit ultrices turpis. Vestibulum cursus ornare lorem, ut mollis purus lacinia in.<br>\r\n<br>\r\nVestibulum at arcu eget massa vulputate commodo. Mauris congue sodales leo vel volutpat. Aenean eu ipsum id turpis sagittis fringilla id in nibh. Curabitur rhoncus justo sit amet feugiat commodo. Vivamus elit orci, rhoncus sit amet dapibus non, convallis volutpat nulla. In molestie vehicula rhoncus. Donec viverra ullamcorper volutpat. Praesent iaculis, urna ut laoreet tristique, sem metus hendrerit nulla, non vehicula nunc lacus finibus odio. Aenean congue, felis et congue mattis, lacus ligula euismod neque, et ullamcorper quam elit non lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut vehicula ligula eget ex tempor, at hendrerit erat finibus. Duis lacinia et risus quis gravida. Nam hendrerit semper urna, sed convallis massa sollicitudin non. Maecenas eu ante eget metus imperdiet vulputate. Fusce mollis, massa a ornare porttitor, diam elit gravida augue, a pulvinar felis tellus in ante. <br>\r\n<br>', '2018-12-13'),
(3, 2, 'Ut mollis id dui et rutrum. Cras sagittis ipsum nec nulla sagittis sollicitudin.', ' Phasellus diam tortor, vestibulum non eros ac, dictum euismod orci. Morbi magna nisi, blandit nec vehicula sit amet, commodo eget urna. Pellentesque tempus tempus lacus, ut convallis mi. Nulla facilisi. Nam aliquam varius ornare. Nam risus lorem, scelerisque vitae porta faucibus, tempor a neque. Nulla ut fermentum augue. In varius sem quis metus vestibulum, volutpat laoreet tellus vehicula.\r\n\r\nNullam euismod dictum urna nec viverra. Vestibulum placerat libero vitae orci interdum ullamcorper. Donec elementum turpis a enim euismod lacinia. Morbi feugiat leo risus, blandit placerat lorem ullamcorper sed. Sed vulputate, nisi vitae \r\n<br>\r\nelementum vulputate, ligula libero dapibus metus, vel bibendum leo dui eu lorem. Morbi vitae magna ligula. Phasellus a lobortis ante. Quisque a arcu dui. Duis sodales dignissim feugiat.<br>\r\n<br>\r\nSed ultricies aliquet leo, quis mollis purus dapibus quis. Donec suscipit urna libero, id mattis sem dignissim ut. Donec a tellus elementum, congue arcu sed, consequat enim. Sed posuere mattis felis sit amet fermentum. Vestibulum eu nulla non sapien elementum tincidunt a quis odio. Sed sit amet imperdiet libero, in mollis lorem. Duis quis metus ac leo sollicitudin sollicitudin. Duis tempus, erat et vulputate ultricies, enim sapien facilisis felis, in condimentum turpis lacus id erat.<br>\r\n<br> Suspendisse varius at est vel hendrerit. In hac habitasse platea dictumst. Aliquam malesuada urna a tellus dictum, eget tincidunt tellus rutrum. Quisque egestas mi semper tortor consequat, ac suscipit quam pharetra. Proin molestie sem nec dictum tempor. Cras a ornare turpis, sit amet fermentum quam. <br>', '2019-01-10'),
(4, 1, 'Nulla fringilla a enim vel luctus. Aliquam sem odio, elementum vel odio et, ullamcorper egestas ante.', 'Donec quis hendrerit metus. Fusce id consequat ante. Duis a varius dolor. In varius augue ut congue malesuada. Nulla facilisi. In hac habitasse platea dictumst. Donec mauris odio, euismod in diam ut, consectetur commodo lorem. Cras dapibus interdum quam, auctor bibendum ex iaculis in. Curabitur egestas enim in cursus elementum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur scelerisque erat nibh, vel iaculis odio faucibus vitae. Aliquam erat volutpat. Nulla ut nulla quis nibh suscipit cursus sed nec eros. Pellentesque consequat lacinia aliquet. ', '2019-01-12'),
(11, 1, 'Test de la fonction poster article.', 'Petit test pour voir si Ã§a marche bien.\r\n<h1> test insertion html </h1>', '2019-01-13'),
(13, 1, 'Deuxieme test champ vide.', 'Ã§a marche !', '2019-01-13'),
(15, 1, 'test', 'test', '2019-01-14'),
(16, 1, 'vvvvvvvv', 'fff', '2019-01-14');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `pseudo` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `mdp` varchar(42) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `pseudo`, `mail`, `mdp`) VALUES
(1, 'krulic', 'nathan', 'nath', 'krulic1325@gmail.com', '2e8aa918660411855c6d44d5bb2da677aa033255'),
(2, 'elayadi', 'mehdi', 'mehd', 'mehdi@gmail.com', 'd8932fd49bb05ff0670c3545d15547cb7baaf208');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `news` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
