-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2016 at 12:23 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `mac_blogs`
--

CREATE TABLE `mac_blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mac_blogs`
--

INSERT INTO `mac_blogs` (`id`, `title`, `subtitle`, `content`, `image`, `category`, `tags`, `user`, `created_at`, `updated_at`) VALUES
(1, 'I believe every human has a finite number of heartbeats. I don''t intend to waste any of mine.', 'Love yourself more', '<p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman''s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>\r\n<p>Science cuts two ways, of course; its products can be used for both good and evil. But there''s no turning back from science. The early warnings about technological dangers also come from science.</p>\r\n<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>', 'http://www.gettyimages.ca/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg', 'Nature', 'Birds, Life, Peace', 'ThemeAxe', '2016-11-04 03:45:28', NULL),
(2, 'Man must explore, and this is exploration at its greatest', 'Problems look mighty small from 150 miles up', '<p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman''s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>\r\n<p>Science cuts two ways, of course; its products can be used for both good and evil. But there''s no turning back from science. The early warnings about technological dangers also come from science.</p>\r\n<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>', 'https://il8.picdn.net/shutterstock/videos/6961699/thumb/1.jpg', 'Travel', 'Nature, Space, Awesome', 'ThemeAxe', '2016-11-03 03:45:28', NULL),
(3, 'Laravel Its My First Post', 'Feeling awesome!', '                            <p>Never in all their history have men been able truly \r\nto conceive of the world as one: a single sphere, a globe, having the \r\nqualities of a globe, a round earth in which all the directions \r\neventually meet, in which there is no center because every point, or \r\nnone, is center — an equal earth which all men occupy as equals. The \r\nairman''s earth, if free men make it, will be truly round: a globe in \r\npractice, not in theory.</p>\r\n\r\n    <p>Science cuts two ways, of course; its products can be used for \r\nboth good and evil. But there''s no turning back from science. The early \r\nwarnings about technological dangers also come from science.</p>\r\n\r\n    <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>\r\n\r\n    <p>A Chinese tale tells of some men sent to harm a young girl who, \r\nupon seeing her beauty, become her protectors rather than her violators.\r\n That''s how I felt seeing the Earth for the first time. I could not help\r\n but love and cherish her.</p>\r\n\r\n    <p>For those who have seen the Earth from space, and for the \r\nhundreds and perhaps thousands more who will, the experience most \r\ncertainly changes your perspective. The things that we share in our \r\nworld are far more valuable than those which divide us.</p>\r\n\r\n    <h2 class="section-heading">The Final Frontier</h2>\r\n\r\n    <p>There can be no thought of finishing for ‘aiming for the stars.’ \r\nBoth figuratively and literally, it is a task to occupy the generations.\r\n And no matter how much progress one makes, there is always the thrill \r\nof just beginning.</p>\r\n\r\n    <p>There can be no thought of finishing for ‘aiming for the stars.’ \r\nBoth figuratively and literally, it is a task to occupy the generations.\r\n And no matter how much progress one makes, there is always the thrill \r\nof just beginning.</p>\r\n\r\n    <blockquote>The dreams of yesterday are the hopes of today and the \r\nreality of tomorrow. Science has not yet mastered prophecy. We predict \r\ntoo much for the next year and yet far too little for the next ten.</blockquote>\r\n\r\n    <p>Spaceflights cannot be stopped. This is not the work of any one \r\nman or even a group of men. It is a historical process which mankind is \r\ncarrying out in accordance with the natural laws of human development.</p>\r\n\r\n    <h2 class="section-heading">Reaching for the Stars</h2>\r\n\r\n    <p>As we got further and further away, it [the Earth] diminished in \r\nsize. Finally it shrank to the size of a marble, the most beautiful you \r\ncan imagine. That beautiful, warm, living object looked so fragile, so \r\ndelicate, that if you touched it with a finger it would crumble and fall\r\n apart. Seeing this has to change a man.</p>\r\n\r\n    <a href="http://localhost:8000/post#">\r\n        <img class="img-responsive" src="http://localhost:8000/img/post-sample-image.jpg" alt="">\r\n    </a>\r\n    <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>\r\n\r\n    <p>Space, the final frontier. These are the voyages of the Starship \r\nEnterprise. Its five-year mission: to explore strange new worlds, to \r\nseek out new life and new civilizations, to boldly go where no man has \r\ngone before.</p>\r\n\r\n    <p>As I stand out here in the wonders of the unknown at Hadley, I \r\nsort of realize there’s a fundamental truth to our nature, Man must \r\nexplore, and this is exploration at its greatest.</p>\r\n\r\n    <p>Placeholder text by <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>', '', 'Laravel', 'Laravel, Blog, MiniMac, First, Leo', 'shahriar', '2016-11-09 00:30:52', '2016-11-09 00:30:52'),
(4, 'Second post', 'Trying message display', 'This is the content of the second post.<br>', '', 'Blog', 'Message, Post', 'shahriar', '2016-11-09 01:04:51', '2016-11-09 01:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `mac_migrations`
--

CREATE TABLE `mac_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mac_migrations`
--

INSERT INTO `mac_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_11_04_051109_create_blog_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mac_password_resets`
--

CREATE TABLE `mac_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mac_users`
--

CREATE TABLE `mac_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mac_users`
--

INSERT INTO `mac_users` (`id`, `name`, `usertype`, `image`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lnYHJ8IQMi', 'user', '', 'Tr75LhA9H3@gmail.com', '$2y$10$XDU9JT4Vp/BjgpAp3eYSf.ZiZ3Fjcg.fzpqZSGZWQdt/LqsSq1/sa', NULL, NULL, NULL),
(2, 'admin', 'admin', '', 'admin@gmail.com', '$2y$10$plKtbpma0Gj4rdTsClec.uWQ8Ays4r4hs9qdC9PpSu2JhnREKPrLy', 'PgKk74paF88urZ14MWFkCbsaSdC5NCo85Eld1kLeHdWxozlfJodOaGgiMYrt', NULL, '2016-11-03 03:31:02'),
(3, 'shahriar', 'user', '', 'shahriar@gmail.com', '$2y$10$D9igZXcJ1x9bT4WyzEY1PO3CQF9fPiPhwDRCWQgMntWigduBM.u5K', 'AXq2LzfDHod5H4UH7DtBnjpHrISrH4QxIv9vdQP3NeEO0DKx7pQuUuMt63ii', '2016-11-03 03:45:28', '2016-11-04 03:06:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mac_blogs`
--
ALTER TABLE `mac_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mac_migrations`
--
ALTER TABLE `mac_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mac_password_resets`
--
ALTER TABLE `mac_password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `mac_users`
--
ALTER TABLE `mac_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mac_blogs`
--
ALTER TABLE `mac_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mac_migrations`
--
ALTER TABLE `mac_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mac_users`
--
ALTER TABLE `mac_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
