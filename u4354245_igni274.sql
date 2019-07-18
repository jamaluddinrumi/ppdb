-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 05:47 PM
-- Server version: 10.2.25-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u4354245_igni274`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `berita` text NOT NULL,
  `tanggal_dipublikasikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `berita`, `tanggal_dipublikasikan`) VALUES
(1, 'Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.\r\n\r\nAenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna.\r\n\r\nVestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.\r\n\r\nMaecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.', '2019-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `isi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `isi`) VALUES
(1, 'whatsapp', '813-9297-9131');

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persyaratan`
--

INSERT INTO `persyaratan` (`id`, `body`) VALUES
(1, '<ul>\r\n	<li>Morbi leo risus, <i>porta</i> <b>ac</b> <u>consectetur</u> ac, vestibulum at eros.</li>\r\n	<li>Etiam porta sem malesuada magna mollis euismod.</li>\r\n	<li>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</li>\r\n	<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n	<li>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</li>\r\n	<li>Etiam porta sem malesuada magna mollis euismod.</li>\r\n	<li>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</li>\r\n	<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n	<li>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</li>\r\n	<li>Etiam porta sem malesuada magna mollis euismod.</li>\r\n	<li>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</li>\r\n	<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `asal_sekolah` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_di_yogyakarta` text NOT NULL,
  `alamat_asal` text NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `nama_orangtua` varchar(128) NOT NULL,
  `alamat_orangtua` varchar(128) NOT NULL,
  `agama_orangtua` varchar(128) NOT NULL,
  `pekerjaan_orangtua` varchar(128) NOT NULL,
  `nama_wali` varchar(128) NOT NULL,
  `alamat_di_yogyakarta_orangtua` text NOT NULL,
  `nama_sekolah` varchar(128) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `nilai_bahasa_indonesia` float NOT NULL,
  `nilai_bahasa_inggris` float NOT NULL,
  `nilai_matematika` float NOT NULL,
  `nilai_ipa` float NOT NULL,
  `nilai_total_ujian` float NOT NULL,
  `prestasi_non_akademis_1` text NOT NULL,
  `prestasi_non_akademis_2` text NOT NULL,
  `peminatan` varchar(128) NOT NULL,
  `diterima` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nama`, `asal_sekolah`, `tempat_lahir`, `tanggal_lahir`, `alamat_di_yogyakarta`, `alamat_asal`, `jenis_kelamin`, `agama`, `nama_orangtua`, `alamat_orangtua`, `agama_orangtua`, `pekerjaan_orangtua`, `nama_wali`, `alamat_di_yogyakarta_orangtua`, `nama_sekolah`, `alamat_sekolah`, `nilai_bahasa_indonesia`, `nilai_bahasa_inggris`, `nilai_matematika`, `nilai_ipa`, `nilai_total_ujian`, `prestasi_non_akademis_1`, `prestasi_non_akademis_2`, `peminatan`, `diterima`) VALUES
(1, '234234232323', 'Abu Bakar Ash Shiddiq', 'SMP NU 3 Yogyakarta', 'asdf', '2019-07-16', 'asdf', 'asdf', 'perempuan', 'buddha', 'asdf', 'asdf', 'katolik', 'adsf', 'asdf', 'asdf', 'asdf', 'adsf', 23.23, 43.23, 23.43, 43.23, 23.22, 'asdf', '', 'ipa', 0),
(2, '92387923792376', 'Ibnu Sina', 'SMP Muhammadiyah 1 Yogyakarta', 'asdfaf', '2019-07-01', 'adsf', 'adsf', 'laki-laki', 'buddha', 'adsf', 'adsf', 'katolik', 'adsf', 'adf', 'adsf', 'adf', 'adsf', 77.77, 82.23, 33.43, 53.23, 123.22, 'adfasdfadsf', '', 'ipa', 0),
(8, '23423423423', 'Aisyah RA', 'SMP Al Azhar 3 Malang', 'asdfasdfasdf', '2019-07-08', 'asdf', 'asdf', 'perempuan', 'kristen', 'asdfasd', 'asdf', 'islam', 'asdfasdf', 'asdf', 'asdf', 'asdf', 'asdf', 53.23, 90.2, 23.5, 12.23, 101.52, 'Aafdsfasdf', 'Tasdfasdf', 'ipa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$kIglgZJkh.2spNFsbV1yFeC.snoKsIbpsRUNSSyQ.FOV.YjsokA9G', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1562765225, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'timtam@ppdb.innaweb.com', '$2y$12$uqTkQMMFWOiuTRCoCeC1ReiXR8yqSkR9QPnbAS96yvE6Na1h9XVEC', 'timtam@ppdb.innaweb.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1562571957, 1563470288, 1, 'Tim', 'Tam', 'SMA Muhammadiyah 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(6, 2, 1),
(7, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
