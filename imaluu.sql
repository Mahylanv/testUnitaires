-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 09 août 2023 à 19:19
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `imaluu`
--

-- --------------------------------------------------------

--
-- Structure de la table `continent_destination`
--

CREATE TABLE `continent_destination` (
  `id_continent` int(3) NOT NULL,
  `continent_destination` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `continent_destination`
--

INSERT INTO `continent_destination` (`id_continent`, `continent_destination`) VALUES
(1, 'Afrique'),
(2, 'Amerique Du Nord'),
(3, 'Amerique Du Sud'),
(4, 'Asie'),
(5, 'Europe'),
(6, 'Océanie');

-- --------------------------------------------------------

--
-- Structure de la table `continent_hotel`
--

CREATE TABLE `continent_hotel` (
  `id_continent_hotel` int(3) NOT NULL,
  `continent_hotel` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `id_destination` int(3) NOT NULL,
  `titre` varchar(240) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `img1` varchar(240) NOT NULL,
  `img2` varchar(240) NOT NULL,
  `img3` varchar(240) NOT NULL,
  `map` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `destination`
--

INSERT INTO `destination` (`id_destination`, `titre`, `description1`, `description2`, `img1`, `img2`, `img3`, `map`) VALUES
(4, 'Finlande', 'TEST', 'TEST', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1682001489086!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(9, 'Finlande', 'aa', 'aa', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(10, 'Resort', 'aa', 'aaaaaaa', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', '', ''),
(13, 'Finlande', 'aaa', 'aaa', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(14, 'Resort', 'r', 'r', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'Test'),
(15, 'Finlande', 'ttt', 'ttt', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(16, 'Destination', 'aaaa', 'aaa', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://img-19.commentcamarche.net/wzKKufHO7dLH-WPFdXJHEmOmi7E=/1500x/smart/2d8c2b30aee345008ee860087f8bcdc9/ccmcms-commentcamarche/36120212.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(17, 'Destination', 'aaa', 'aaa', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://img-19.commentcamarche.net/wzKKufHO7dLH-WPFdXJHEmOmi7E=/1500x/smart/2d8c2b30aee345008ee860087f8bcdc9/ccmcms-commentcamarche/36120212.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(19, 'Finlande', '123', '456', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQv3Hcg4Ax8V6PC6UsY8_ISERwWTE2GaeVmCOr1hMKqA&s', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(20, 'Finlande', 'a', 'a', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'a'),
(21, 'Finlande', 'tttt', 'tttt', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(22, 'Paysage', '^g', 'gg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS75ebrwvgVW5Ks_oLfCbG8Httf3_9g-Ynl_Q&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS75ebrwvgVW5Ks_oLfCbG8Httf3_9g-Ynl_Q&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS75ebrwvgVW5Ks_oLfCbG8Httf3_9g-Ynl_Q&usqp=CAU', 'g'),
(23, 'marchea', 'HEHO', 'Please', 'https://www.guerillaweb.ca/wp-content/uploads/2014/09/photos-libre-de-droits.jpg', 'https://www.guerillaweb.ca/wp-content/uploads/2014/09/photos-libre-de-droits.jpg', 'https://www.guerillaweb.ca/wp-content/uploads/2014/09/photos-libre-de-droits.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(25, 'Finlande', 'aa', 'aa', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'Test'),
(26, '', 'a', '', '', '', '', ''),
(27, 'Destination', 'z', 'z', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(28, 'Plage', 'aa', 'aa', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIx_reP2jkHtcEsyPe4dgNlvkWZHXjjxSm9Q&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIx_reP2jkHtcEsyPe4dgNlvkWZHXjjxSm9Q&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIx_reP2jkHtcEsyPe4dgNlvkWZHXjjxSm9Q&usqp=CAU', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(29, 'Desert', 'chaud', 'chaud', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(30, 'Destination', 'z', 'z', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(31, 'Finlande', 'yt', 'ty', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(32, 'a', 'aaa', 'aaa', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.guerillaweb.ca/wp-content/uploads/2014/09/photos-libre-de-droits.jpg', 'https://www.guerillaweb.ca/wp-content/uploads/2014/09/photos-libre-de-droits.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(35, 'a', 'a', 'a', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'a'),
(36, 'Paysage', 'ee', 'ee', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(37, 'Finlande', 'ii', 'ii', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(38, 'Rmain', 'enfin ?', 'a', 'https://www.freecodecamp.org/news/content/images/2022/09/jonatan-pie-3l3RwQdHRHg-unsplash.jpg', 'https://www.freecodecamp.org/news/content/images/2022/09/jonatan-pie-3l3RwQdHRHg-unsplash.jpg', 'https://www.freecodecamp.org/news/content/images/2022/09/jonatan-pie-3l3RwQdHRHg-unsplash.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(39, 'Finlande', 'aa', 'aa', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'aa'),
(40, 'Vacances', 'aa', 'aa', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://www.guerillaweb.ca/wp-content/uploads/2014/09/photos-libre-de-droits.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'Floride'),
(41, 'Vacances Au Portugal', 'aa', 'aa', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://www.guerillaweb.ca/wp-content/uploads/2014/09/photos-libre-de-droits.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'Floride'),
(43, 'Finlande', 'a', 'a', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'aa'),
(44, 'Finlande', 'e', 'e', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'aa'),
(45, 'Finlande', 'aller', 'paris', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'aa'),
(49, 'Finlande', 'Mahylan', 'Veclin', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'aa'),
(50, 'Finlande', 'Mahylan', '87', 'https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(3) NOT NULL,
  `titre` varchar(240) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `img1` varchar(240) NOT NULL,
  `img2` varchar(240) NOT NULL,
  `img3` varchar(240) NOT NULL,
  `map` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `titre`, `description1`, `description2`, `img1`, `img2`, `img3`, `map`) VALUES
(9, 'Resort', 'Hotel 5*****', '', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42010.95276407257!2d2.2300828!3d48.8451555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe%20Parc%20des%20Princes!5e0!3m2!1sfr!2sfr!4v1681998566034!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(10, 'Finlande', '&é\"\'(-è', 'é\"t', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', 'https://cdn.pixabay.com/photo/2023/04/15/10/48/desert-7927409_960_720.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `relation_continent_destination`
--

CREATE TABLE `relation_continent_destination` (
  `id_relation` int(3) NOT NULL,
  `id_destination` int(3) NOT NULL,
  `id_continent` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `relation_continent_destination`
--

INSERT INTO `relation_continent_destination` (`id_relation`, `id_destination`, `id_continent`) VALUES
(2, 12, 5),
(4, 14, 6),
(5, 15, 4),
(17, 27, 3),
(21, 31, 2),
(26, 36, 1),
(28, 38, 5),
(29, 39, 1),
(30, 40, 3),
(31, 41, 2),
(32, 42, 5),
(33, 43, 5),
(34, 44, 1),
(35, 45, 6),
(36, 46, 1),
(37, 47, 1),
(38, 48, 1),
(39, 49, 1),
(40, 50, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `email`, `mdp`, `statut`) VALUES
(1, 'Mahylan', 'Mahylan.veclin@gmail.com', '$2y$10$K4HjF9c63jx8LCUVpK/JzO0d3Pgv9tamsGNiYA/giDzSqF5FcczTW', 1),
(2, 'admin', 'admin@gmail.com', '$2y$10$cG4dHmGFaXee0qaODbX6N.0IqG4s9iHEZKSkxyCGVxFu0Bhe/6Ixq', 1),
(3, 'Statut2', 'Statut2@gmail.com', '$2y$10$4tSDUlOx5K29N3EoFcKwi.XgeGcpmvdJOXp6XyhHiy/rDZzOigDxO', 2),
(5, 'testtest', 'test.test@test.test', '$2y$10$xp.2Fi4yUqXQGjkHxyfuV.HgDeY1ZOnCxRS5HJgKJBlLWq8hCUzDC', 1),
(7, 'Romain', 'Romain@gmail.com', '$2y$10$lhpKlfgMhHlgo6MN0sTMLO0ShACv.l.IAf6yfa/J0rkfXGqfGI0Ei', 1),
(15, 'Statut3', 'sen.va@bye.com', '$2y$10$qKqBvGHBDqn0f5PEC/6UxuWGwh/lynBjrre4wh2iGrdie.m32OQ1e', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `continent_destination`
--
ALTER TABLE `continent_destination`
  ADD PRIMARY KEY (`id_continent`);

--
-- Index pour la table `continent_hotel`
--
ALTER TABLE `continent_hotel`
  ADD PRIMARY KEY (`id_continent_hotel`);

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id_destination`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Index pour la table `relation_continent_destination`
--
ALTER TABLE `relation_continent_destination`
  ADD PRIMARY KEY (`id_relation`),
  ADD KEY `id_destination` (`id_destination`) USING BTREE,
  ADD KEY `id_continent` (`id_continent`) USING BTREE;

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `pseudo` (`pseudo`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `continent_destination`
--
ALTER TABLE `continent_destination`
  MODIFY `id_continent` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `continent_hotel`
--
ALTER TABLE `continent_hotel`
  MODIFY `id_continent_hotel` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `destination`
--
ALTER TABLE `destination`
  MODIFY `id_destination` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `relation_continent_destination`
--
ALTER TABLE `relation_continent_destination`
  MODIFY `id_relation` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
