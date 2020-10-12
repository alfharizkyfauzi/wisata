-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Sep 2020 pada 22.24
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `subtitle` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(256) NOT NULL,
  `facebook` varchar(256) DEFAULT NULL,
  `twitter` varchar(256) DEFAULT NULL,
  `linkedin` varchar(256) DEFAULT NULL,
  `instagram` varchar(256) DEFAULT NULL,
  `youtube` varchar(256) DEFAULT NULL,
  `github` varchar(256) DEFAULT NULL,
  `image` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aboutus`
--

INSERT INTO `aboutus` (`id`, `name`, `subtitle`, `description`, `address`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `github`, `image`, `date_created`) VALUES
(1, 'Alfharizky Fauzi', 'Fullstack Web Developer', 'Hello. My name is Alfharizky Fauzi, and now i\'m currently living in Bogor, Indonesia. I\'m a student in Gunadarma University, Informatics Engineering.\r\ncontact details: alfharizkyfauzi110999@gmail.com ', 'dirumah aja | Stay at home | I Love My Selfadsadsadsada', 'https://www.facebook.com/alfharizky.fauzi/', 'asdadsasdsadsadsadasda', 'https://www.linkedin.com/in/alfharizky-fauzi-20628817b/', 'https://www.instagram.com/alfharizky/', 'https://www.youtube.com/channel/UCuVJAKhCsG99kMxrUzK32fQ', 'https://github.com/alfharizkyfauzi', 'demo-image.png', 1600833510);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumbotron`
--

CREATE TABLE `jumbotron` (
  `id` int(11) NOT NULL,
  `title1` varchar(128) NOT NULL,
  `title2` varchar(128) NOT NULL,
  `title3` varchar(128) NOT NULL,
  `description1` varchar(256) NOT NULL,
  `description2` varchar(256) NOT NULL,
  `description3` varchar(256) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image3` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jumbotron`
--

INSERT INTO `jumbotron` (`id`, `title1`, `title2`, `title3`, `description1`, `description2`, `description3`, `image1`, `image2`, `image3`) VALUES
(1, 'Image 1asdsadadadadadsadsada', 'Image 2', 'Image 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'ii3d0x4j9ge01.jpg', 'landscape-austria-water-nature-mountains-hd-wallpaper-preview.jpg', 'AGhdpJ.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `sub_title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(128) DEFAULT NULL,
  `image2` varchar(128) DEFAULT NULL,
  `image3` varchar(128) DEFAULT NULL,
  `address` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`id`, `title`, `sub_title`, `description`, `image1`, `image2`, `image3`, `address`, `date_created`) VALUES
(1, 'cobaasadad', 'ssadadadadasd', 'asdad asdasdsa asdadsad asdasdadasd asdas', 'd6cca717eb5af1b13fe2afe5c62a2238.jpg', NULL, 'a.PNG', 'coba', 1600698282),
(2, 'cobaasadad', 'ssadadadadasd', 'asdad asdasdsa asdadsad asdasdadasd asdas', 'd6cca717eb5af1b13fe2afe5c62a2238.jpg', NULL, NULL, 'coba', 1600698282),
(4, 'cobaasadad', 'ssadadadadasdasdsadadasdad', 'asdad asdasdsa asdadsad asdasdadasd asdas', '0_(1).jpg', 'a.PNG', NULL, 'cobaasdsadaasd', 1600698805),
(6, 'What is Lorem Ipsum?', 'adsadad', 'asdsadsadadsadsad', 'fde426588f03a1a3012aa03221b3b55d.jpg', '7c97d151b497c21f10568b1b17248724.jpg', 'd091b58cec218e16bc5531445b9c6d25.jpg', 'asdsadsadasd', 1601109434),
(7, 'Sample Question', 'asdsadsadsad', 'avasdasdsdsadadafsavsvdvv', '6b71a22aaaae808bbb9ffd63cc7b442d.jpg', 'b5e6fd39a6a134962faf74d83e19c54f.png', 'a2fa6fd158fb32722557c4f4da6d91b4.jpg', 'casdadsadsada', 1601109464),
(8, 'Download Miraclebox 2.69 Crack', 'asdsadaavav', 'sdsavavavzvzgjnaljnsldnadjabfsanfa', '876919138f14176a6587865030123a4f.jpg', 'a5d7c7b66f264df6e3b7ac628a694822.gif', NULL, 'vvsvdvddavvdvdavavadvdv', 1601109515),
(9, 'Pembekalan Relawan Pajak 2019/2020 [20 September 2019]', 'asdsavavav', 'asdjasjdabkhsbkjdabdkadbjsbdksadsabdad', '6dc9b0df63d436858d71ce868e73c3f0.png', 'f7763dbfc92dd3e880d41d19bd48b50c.jpeg', NULL, 'jkjsdjldanlsdladksadsadsad', 1601109570),
(10, 'sadasdadasdasdsdsad ', 'asd', 'asdaasvonlnl andsadsad', NULL, '43a5e6b1abf365e37666ac06bee70ac4.jpg', NULL, 'sadsadasd', 1601109604),
(11, 'pjinjkmunjn kunkjnjkn', 'dfdhfgdhfdbfabmhb', 'dafafafafasfaasf', 'af8d63a477078732b79ff9d9fc60873f.jpg', NULL, '0a21e44df44210ac9a80625fc737bec6.jpg', 'fdfdfdfdfdfdfdf', 1601109649);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Alfharizky Fauzi', 'alfharizky110999@gmail.com', 'default.jpg', '$2y$10$/4fmS1Wub7jLwrgV.ERilOdX/exONhNGcYmJbUqdfqvpBUEVKRGKu', 2, 1, 1598289266),
(4, 'Administrator', 'admin@gmail.com', 'default.jpg', '$2y$10$IehsHmaOHhyqE.P0Oru6Kum6DS4/wY8jdNH8dczmpPS/q..Z1EvZ6', 1, 1, 1598292995),
(5, 'nugrahanagi', 'nugrahanagi@gmail.com', 'demo-image.jpg', '$2y$10$xyEIlegQOzU2lFriMO0BTOroPAAToo8/phKPFsRPbo4COuRAWpEIO', 2, 1, 1598566786),
(6, 'coba11111', 'coba@gmail.com', 'default.jpg', '$2y$10$bl2l1DzuE7EklI86r9LNnOldx7f5eHK4xyW3FvOR0zDAQRaDdIePO', 5, 0, 1600591990),
(7, 'coba1111dasadad', 'adadad@student.gunadarma.ac.id', 'default.jpg', '$2y$10$ZjkRIAQ4er8CrGQucWhwn.g6RyghNlMSyPPsBWcqpsbksQ8iVqfMa', 5, 1, 1601103918);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(7, 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'Menu'),
(5, 'Posting'),
(6, 'coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(5, 'coba111111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'administrator', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'administrator/role', 'fas fa-fw fa-user-tie', 1),
(7, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(8, 5, 'Post Management', 'posting', 'fas fa-fw fa-database', 1),
(10, 1, 'Users', 'administrator/users', 'fas fa-fw fa-users', 1),
(11, 5, 'About Us', 'posting/about', 'fas fa-fw fa-database', 1),
(12, 5, 'Jumbotron', 'posting/jumbotron', 'fas fa-fw fa-database', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumbotron`
--
ALTER TABLE `jumbotron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jumbotron`
--
ALTER TABLE `jumbotron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
