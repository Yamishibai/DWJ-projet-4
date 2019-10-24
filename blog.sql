-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 12 oct. 2019 à 17:33
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

DROP TABLE IF EXISTS `billet`;
CREATE TABLE IF NOT EXISTS `billet` (
  `id_billet` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `contenu` text CHARACTER SET utf8 NOT NULL,
  `date_billet` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_billet`)
) ENGINE=MyISAM AUTO_INCREMENT=158 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`id_billet`, `titre`, `contenu`, `date_billet`) VALUES
(152, 'chapitre 1', '&lt;script&gt;alert(\"tu t\'es fait scripter\")&lt;/script&gt;', '2019-09-27 23:21:46'),
(140, 'Aurore boréale, un monde de lumière et de ténèbre ', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.skyscanner.fr/wp-content/uploads/2018/05/680-aurora-borealis-alaska-22-sept-14.jpg?fit=680,454\" alt=\"\" width=\"395\" height=\"264\" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla efficitur massa ex, facilisis volutpat mi malesuada rutrum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin in orci a sapien gravida volutpat nec ut nisi. Vestibulum vitae tellus quis sem egestas interdum vel a urna. Vestibulum sed purus maximus, aliquet lectus non, vehicula tortor. Praesent mollis finibus turpis, porttitor pellentesque mi consequat ut. Fusce vitae tortor mattis quam egestas semper sed nec nulla. Nunc ipsum mauris, tristique vel ornare nec, auctor sed lorem. Pellentesque hendrerit in libero eget rhoncus. Quisque a sollicitudin ante, eu viverra massa. Praesent non lorem non ipsum pulvinar posuere. Aenean vitae aliquam eros, quis porttitor quam. Nulla feugiat justo id eros volutpat, sit amet sodales tellus facilisis. Mauris ac massa sagittis, porta leo sit amet, eleifend neque. Pellentesque mi elit, mollis eget urna sit amet, feugiat vehicula ex.</p>\r\n<p>In feugiat viverra lorem nec imperdiet. Suspendisse hendrerit vulputate magna, eu commodo turpis. Sed nec sapien nec dolor dapibus mattis. Etiam mi nisi, interdum vel augue in, bibendum fermentum ex. Etiam a quam sit amet massa vehicula convallis. Nam euismod leo et erat porttitor lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec in accumsan ligula. Proin dignissim elementum diam. Maecenas feugiat ultricies feugiat.</p>\r\n<p>Sed vitae sem in lectus faucibus malesuada eu eu ex. Cras ornare mollis posuere. Donec vitae diam porta, ultricies sem quis, faucibus tortor. Mauris vel nibh dictum leo iaculis elementum. Suspendisse potenti. Mauris luctus felis tortor, non pharetra nisl mollis at. Nam facilisis vehicula fermentum. Morbi feugiat semper volutpat. Phasellus finibus diam dolor, vitae tincidunt eros fringilla in. Nullam sed semper leo. Etiam condimentum libero tellus, eu aliquet eros pharetra sed. Maecenas pulvinar nisl faucibus, consequat ligula eu, venenatis nibh. Nunc at magna tellus. Vestibulum ac posuere ante. Cras gravida ornare cursus. Phasellus sodales cursus mauris vitae posuere.</p>\r\n<p>Donec rutrum rhoncus tellus, ut elementum justo vehicula sit amet. Nam id felis nec velit vulputate consectetur. Sed mollis pellentesque viverra. Suspendisse potenti. In porttitor risus leo, eu venenatis diam blandit eu. Vestibulum pharetra convallis elit vel efficitur. Aliquam eu nisl laoreet, tristique orci eu, condimentum nulla. Mauris lacinia mattis ex, ut scelerisque turpis ullamcorper nec. Sed sed porttitor diam, non commodo tortor. Donec vestibulum erat non justo volutpat, at dapibus urna luctus. Sed sodales luctus tellus at posuere. Fusce ultrices augue leo, sit amet ullamcorper sapien pretium vel. Quisque euismod libero odio, id consectetur leo malesuada eget. Nam imperdiet risus quam, et mattis eros pretium id.</p>\r\n<p>Mauris vehicula convallis augue, at tristique felis. Vivamus nibh nunc, interdum quis pharetra non, malesuada ac enim. Sed erat nulla, suscipit a porttitor eget, elementum in elit. Proin maximus nisi vel enim tristique consequat. Proin varius posuere magna, porttitor consectetur turpis lacinia vitae. Integer malesuada iaculis tristique. Ut vulputate mollis est, in suscipit eros consectetur pulvinar. Maecenas a nisi nec lectus varius pellentesque. Donec ut augue vestibulum, bibendum metus quis, elementum mauris. Aenean consequat erat non leo bibendum, sit amet cursus arcu aliquam. Donec id rutrum ligula, id tristique lacus. Mauris porttitor lacus et egestas bibendum. Morbi pulvinar nec felis sit amet commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>', '2019-09-15 13:14:03'),
(142, 'Alaska mon parc adoré que j\'aime et vénère comme un dieu', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://upload.wikimedia.org/wikipedia/commons/9/9e/Mount_McKinley_Alaska.jpg\" alt=\"\" width=\"320\" height=\"213\" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper elit vel volutpat congue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse at consectetur urna. Aliquam vel libero vel nisi consequat convallis. Nulla mauris odio, venenatis sed neque semper, tempor consectetur sem. Proin in est scelerisque, lacinia nibh in, faucibus justo. Quisque a leo laoreet, porttitor arcu eu, maximus eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam ut urna sem. Pellentesque nec faucibus nisl. Pellentesque eu porta turpis. Suspendisse metus mauris, lobortis non libero ut, rutrum dapibus erat. Nam suscipit nunc id lacinia egestas. In vulputate urna sit amet euismod congue.</p>\r\n<p>Nunc eget hendrerit nibh. Nullam eget mi nibh. Praesent maximus faucibus ligula. Praesent eleifend metus est, a rutrum justo egestas id. Donec viverra neque et egestas feugiat. In sed elit at elit accumsan dignissim at ut nisl. Aliquam varius cursus eros eget ornare. Cras ut quam quis metus feugiat ultricies.</p>\r\n<p>Donec id malesuada nisl. Etiam dignissim maximus ante ut egestas. Suspendisse nec leo in risus pretium pellentesque. Maecenas elementum, nisi quis blandit euismod, enim nunc vehicula nisl, eget vestibulum lectus nisi id magna. Quisque maximus ac massa ac commodo. Duis et porttitor mi. Maecenas rutrum mattis turpis. Proin in leo vitae eros faucibus posuere id nec ante. Mauris rutrum justo sed volutpat finibus. Sed ultrices bibendum fringilla. Curabitur rhoncus egestas mi at imperdiet. Integer tempus arcu quis leo posuere, vitae vulputate sapien rhoncus. Vestibulum efficitur nisl ut mollis gravida. Pellentesque et ligula vel metus luctus feugiat vel a lorem. Donec eu diam interdum, porta dolor quis, sollicitudin elit.</p>\r\n<p>Curabitur dapibus luctus elit. Nunc sagittis nisi at nisl luctus, sed tincidunt neque iaculis. Vivamus blandit, ante non sodales facilisis, orci nulla rutrum massa, quis pretium velit nunc ac eros. Nam tristique tellus ut pretium viverra. Nullam lacinia, diam ut pulvinar fringilla, dolor orci accumsan ante, id laoreet nisl massa a mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed imperdiet odio non nunc ornare interdum. Fusce diam quam, porta vel mattis non, tempus vitae ipsum. Fusce sed felis vel ex aliquam convallis ut quis quam.</p>\r\n<p>Integer lacinia egestas aliquet. Vestibulum imperdiet pharetra viverra. Aliquam et nisl erat. Donec ornare eros et maximus condimentum. Ut velit nisl, euismod vel orci nec, convallis auctor libero. Sed sit amet consequat libero. Morbi tempus at erat et convallis. Suspendisse et pulvinar arcu, sit amet posuere velit.</p>\r\n<p>\"&gt;</p>', '2019-09-20 11:17:27'),
(136, 'Voyage en bateau dans les rivières de l\'Alaska', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.skyscanner.fr/wp-content/uploads/2018/05/680-cruise-ship-glacier-bay-inside-passage-alaska-22-sept-14.jpg?fit=680,454\" alt=\"\" width=\"473\" height=\"316\" /></p>\r\n<p style=\"text-align: left;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis non quam non suscipit. Nullam ullamcorper nisl efficitur accumsan imperdiet. Etiam in leo enim. Etiam a eros accumsan, convallis magna in, tempor magna. Nunc non tincidunt purus, id pharetra velit. Nullam feugiat orci eu tellus sollicitudin ullamcorper. Donec et magna et erat sagittis laoreet non ut metus. Nulla porttitor nulla lectus, ultricies maximus sapien aliquam sagittis. Nunc eu consectetur lectus, in faucibus lectus. Pellentesque posuere aliquam mauris, tincidunt dictum elit posuere vel. Sed faucibus fringilla vehicula. Praesent quis libero a odio tincidunt interdum. Sed eleifend justo at lacus iaculis, at commodo nibh suscipit.</p>\r\n<p>In maximus semper tempus. Vivamus gravida, justo vitae consectetur lacinia, metus lorem aliquet lorem, eu facilisis odio est et elit. Fusce dictum sollicitudin risus, sit amet eleifend odio bibendum sit amet. In pellentesque at leo eu tempus. In mattis aliquet ante a iaculis. Proin porttitor, velit eu dignissim suscipit, sem enim finibus arcu, vel dapibus odio quam ac risus. Integer in nulla eget massa pellentesque tincidunt. Aenean tincidunt justo purus, ut cursus odio aliquam vel. Morbi imperdiet felis eu purus tincidunt pulvinar. Sed ullamcorper lorem leo, non auctor ex efficitur vitae. Cras et nulla fermentum, convallis tortor at, feugiat erat. Phasellus pulvinar diam ante, vel commodo lectus laoreet posuere. Phasellus in volutpat odio. Quisque vitae commodo quam, in faucibus sapien. Pellentesque lobortis tincidunt neque, vitae consequat diam imperdiet ac. Ut blandit, urna ac rutrum elementum, est libero volutpat tortor, ac finibus nunc lorem et risus.</p>\r\n<p>Maecenas tempor, tortor eu rutrum condimentum, metus nisl pharetra arcu, vitae varius lectus lorem porta quam. Etiam sagittis auctor dui vitae ullamcorper. Morbi ultricies semper arcu. Nunc efficitur quam mauris, non rhoncus urna elementum sit amet. Etiam tortor leo, maximus vel nisl at, consequat faucibus tortor. Morbi semper eleifend sapien, ac efficitur mi posuere sed. Nam non tempor tortor. Phasellus vitae purus dapibus, faucibus justo non, tincidunt ex. Maecenas eget ante tortor. Suspendisse potenti. Morbi molestie eros sed blandit iaculis.</p>\r\n<p>Aenean a mattis metus. Pellentesque euismod finibus erat non maximus. Etiam mattis turpis non purus vestibulum, id congue nisi rhoncus. Quisque dignissim neque felis, pretium iaculis mi rutrum quis. Duis lobortis nibh et sapien suscipit, vel laoreet libero lobortis. Sed egestas dolor vel diam mattis, et efficitur lorem auctor. Donec porttitor ex et viverra ullamcorper. Vivamus metus enim, placerat sed faucibus nec, iaculis a neque. Quisque imperdiet lacus eu dolor iaculis bibendum. Duis ac finibus lacus. Praesent euismod mi id mollis facilisis.</p>\r\n<p>Curabitur eget leo elit. Aliquam malesuada tortor ut tincidunt egestas. Nam risus mauris, semper sed felis quis, efficitur varius eros. Fusce molestie gravida lacinia. Vivamus varius odio augue, et consequat risus lacinia a. Pellentesque at arcu a dui tempor sodales ut non risus. Nunc a eros enim. Pellentesque in mattis eros, eu luctus diam. Aenean ac ultrices nibh.</p>', '2019-09-12 10:36:51'),
(149, 'Mont Foraker', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Mount_foraker.jpg/1200px-Mount_foraker.jpg\" alt=\"\" width=\"467\" height=\"311\" /></p>\r\n<p>ndrerit pellentesque. Nam facilisis nunc in libero aliquam, quis tempus risus bibendum. Praesent ac fermentum nulla, in facilisis enim. Duis finibus nunc at orci pellentesque, rhoncus dapibus enim rhoncus. Phasellus ut justo ipsum. Vestibulum non turpis non turpis tincidunt gravida. Morbi finibus neque in vestibulum mattis. Integer et quam at lectus ullamcorper aliquet at eu neque. Quisque viverra sodales dapibus. Donec non mollis massa. Etiam cursus eros auctor velit tincidunt, nec gravida ex tempus.</p>\r\n<p>Aliquam et nulla sem. Sed rhoncus nisi pellentesque accumsan tempus. Fusce leo lectus, ultricies a consequat nec, facilisis eu enim. Phasellus at ipsum faucibus felis sagittis egestas sit amet in libero. Integer ullamcorper lorem et lobortis consequat. Pellentesque rhoncus justo lectus, eu iaculis purus molestie eu. Maecenas eget iaculis odio, quis tempus sem. Vestibulum interdum nibh sem, vitae ultrices diam hendrerit in. Donec odio orci, rhoncus in mi vitae, facilisis mattis odio. Morbi eu consectetur nulla, et bibendum tortor. Vivamus malesuada tortor ut convallis sagittis. Nulla venenatis viverra enim, vestibulum aliquam ligula pretium ac.</p>\r\n<p>Nam nec ligula in augue cursus semper. Mauris hendrerit sem sit amet nulla mattis aliquam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam vestibulum mauris nec semper imperdiet. Phasellus rutrum sollicitudin velit sed pharetra. Fusce et euismod eros. Fusce a risus quis urna rhoncus fermentum.</p>\r\n<p>Integer dui diam, porttitor a varius non, rutrum eu lacus. Curabitur pretium nisl augue, eu gravida metus consequat vel. Etiam porta justo erat, sed imperdiet lacus consequat in. Donec felis tortor, commodo at sodales ut, aliquet vel erat. Praesent aliquam odio nec mattis vulputate. Duis porttitor quam sapien, at interdum risus ullamcorper eu. Ut sem nibh, vestibulum a lectus ut, gravida pretium eros. Morbi ullamcorper placerat tellus eu semper. Integer vestibulum elit vel purus eleifend, at varius risus porta. Aliquam ut sem suscipit, elementum felis a, pretium velit. Curabitur turpis nulla, malesuada eu porta imperdiet, ultrices et tellus.</p>\r\n<p>Aenean vel pharetra eros, eu commodo tellus. Curabitur ut commodo tortor, a cursus eros. Vivamus interdum elit quis leo ultricies, vel dignissim dolor cursus. Ut luctus neque augue. Donec vitae maximus massa, eu posuere metus. Pellentesque vestibulum fringilla purus ut tincidunt. Maecenas ornare euismod auctor. Fusce nec fringilla turpis, nec suscipit urna. Ut viverra dui ut neque iaculis, nec vestibulum lacus interdum. In interdum et ex in accumsan. Sed luctus tortor ut mattis varius. Nulla finibus fermentum arcu, id egestas magna dapibus ut. Pellentesque blandit laoreet erat, elementum dapibus felis commod</p>', '2019-09-26 20:18:12');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id_billet` int(11) NOT NULL,
  `pseudo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `commentaire` text CHARACTER SET utf8 NOT NULL,
  `date_comment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `signalement` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=MyISAM AUTO_INCREMENT=180 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `id_billet`, `pseudo`, `commentaire`, `date_comment`, `signalement`) VALUES
(177, 142, 'yeah', 'yo', '2019-09-26 19:24:46', 0),
(176, 142, 'Maria', 'xs', '2019-09-25 22:39:43', 0),
(175, 142, 'scsx', '^l', '2019-09-25 22:21:27', 0),
(174, 142, 'elodie', 'cool', '2019-09-25 21:52:27', 0),
(168, 142, 'bataman', 'pourquoi ne pas parler de chauve souris', '2019-09-21 15:30:20', 0),
(170, 136, 'saddiq', 'j\'aimes ce chapitre', '2019-09-21 15:31:32', 0),
(179, 152, 'Maria', 'c\'est naze', '2019-09-27 23:22:33', 1),
(178, 142, 'Maria', '\r\n', '2019-09-27 11:11:26', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_admin` varchar(255) NOT NULL,
  `login_admin` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_admin`, `pseudo_admin`, `login_admin`) VALUES
(1, 'Jean', 'e6fb06210fafc02fd7479ddbed2d042cc3a5155e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
