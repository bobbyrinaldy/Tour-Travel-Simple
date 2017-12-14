-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jumlah_orang` int(11) NOT NULL,
  `date` date NOT NULL,
  `package_id` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `is_approve` int(10) NOT NULL DEFAULT '0',
  `is_confirm` int(10) NOT NULL DEFAULT '0',
  `foto` text,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `package_id` (`package_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`),
  CONSTRAINT `bookings_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `bookings` (`id`, `jumlah_orang`, `date`, `package_id`, `user_id`, `is_approve`, `is_confirm`, `foto`, `created_at`, `updated_at`) VALUES
(3,	10,	'2017-01-24',	7,	1,	2,	0,	NULL,	'2017-12-05 19:09:24',	'2017-12-05 19:09:24'),
(4,	5,	'2017-01-10',	7,	1,	1,	0,	NULL,	'2017-12-09 23:58:50',	'2017-12-09 23:58:50'),
(5,	1,	'2017-12-10',	7,	1,	1,	0,	NULL,	'2017-12-10 00:00:56',	'2017-12-10 00:00:56'),
(6,	2,	'2017-12-10',	7,	1,	1,	0,	NULL,	'2017-12-10 00:01:53',	'2017-12-10 00:01:53'),
(7,	2,	'2017-12-21',	7,	1,	1,	0,	NULL,	'2017-12-10 00:03:05',	'2017-12-10 00:03:05'),
(8,	2,	'2017-12-11',	7,	1,	1,	1,	'bukti.jpg',	'2017-12-10 00:05:14',	'2017-12-13 10:39:59'),
(9,	2,	'2017-12-25',	7,	1,	1,	0,	NULL,	'2017-12-10 00:06:10',	'2017-12-10 00:06:10'),
(10,	5,	'2017-12-11',	7,	1,	1,	0,	NULL,	'2017-12-10 05:22:59',	'2017-12-10 05:22:59');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3,	'2014_10_12_000000_create_users_table',	1),
(4,	'2014_10_12_100000_create_password_resets_table',	1);

DROP TABLE IF EXISTS `packages`;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` text NOT NULL,
  `tujuan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `image` text NOT NULL,
  `keterangan` text,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `packages` (`id`, `nama_paket`, `tujuan`, `harga`, `image`, `keterangan`, `user_id`, `created_at`, `updated_at`) VALUES
(7,	'JOGJA 4 Hari 2 Malam (OP)',	'Yogyakarta',	1000000,	'234682.jpg',	'<p style=\"border: 0px; margin-bottom: 15px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 14px; text-align: justify;\"><strong style=\"border: 0px; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Yogyakarta</strong> merupakan salah satu provinsi di Indonesia yang terletak di bagian selatan Pulau Jawa bagian tengah. Berdasarkan data sejarah yang ada, sebelum Indonesia merdeka Yogyakarta telah memiliki pemerintahan sendiri dengan sebutan Daerah Swapraja yang merupakan gabungan dari Kasultanan Ngayokyakarta Hadiningrat dengan Kadipaten Pakualaman dan telah mendapat pengakuan dari dunia internasional. Namun setelah diumumkan Proklamasi Kemerdekaan Republik Indonesia, mereka menyatakan niatnya untuk bergabung menjadi satu dengan Republik Indonesia dan menggunakan nama Daerah Istimewa Yogyakarta.</p><p style=\"border: 0px; margin-bottom: 15px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 14px; text-align: justify;\"><a href=\"https://erbinabaroes.files.wordpress.com/2013/08/prambanan-temple-yogyakarta-travel-destination-1.jpg\" style=\"border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration-line: underline;\"><img data-attachment-id=\"917\" data-permalink=\"https://erbinabaroes.wordpress.com/2013/08/09/yogyakarta-kota-para-pelajar-dan-para-traveler-di-indonesia/prambanan-temple-yogyakarta-travel-destination-1/\" data-orig-file=\"https://erbinabaroes.files.wordpress.com/2013/08/prambanan-temple-yogyakarta-travel-destination-1.jpg\" data-orig-size=\"800,600\" data-comments-opened=\"1\" data-image-meta=\"{\"aperture\":\"0\",\"credit\":\"\",\"camera\":\"\",\"caption\":\"\",\"created_timestamp\":\"0\",\"copyright\":\"\",\"focal_length\":\"0\",\"iso\":\"0\",\"shutter_speed\":\"0\",\"title\":\"\"}\" data-image-title=\"prambanan temple yogyakarta travel destination 1\" data-image-description=\"\" data-medium-file=\"https://erbinabaroes.files.wordpress.com/2013/08/prambanan-temple-yogyakarta-travel-destination-1.jpg?w=300&h=225\" data-large-file=\"https://erbinabaroes.files.wordpress.com/2013/08/prambanan-temple-yogyakarta-travel-destination-1.jpg?w=500\" class=\"aligncenter size-medium wp-image-917\" alt=\"prambanan temple yogyakarta travel destination 1\" src=\"https://erbinabaroes.files.wordpress.com/2013/08/prambanan-temple-yogyakarta-travel-destination-1.jpg?w=300&h=225\" width=\"300\" height=\"225\" srcset=\"https://erbinabaroes.files.wordpress.com/2013/08/prambanan-temple-yogyakarta-travel-destination-1.jpg?w=300&h=225 300w, https://erbinabaroes.files.wordpress.com/2013/08/prambanan-temple-yogyakarta-travel-destination-1.jpg?w=600&h=450 600w, https://erbinabaroes.files.wordpress.com/2013/08/prambanan-temple-yogyakarta-travel-destination-1.jpg?w=150&h=113 150w\" sizes=\"(max-width: 300px) 100vw, 300px\" style=\"height: auto; max-width: 100%; margin-bottom: 2px; clear: both; display: block; margin-left: auto; margin-right: auto;\"></a></p><p style=\"border: 0px; margin-bottom: 15px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 14px; text-align: justify;\">Travel industry saat ini telah menjadi salah satu pemicu peningkatan perekonomian di <em style=\"border: 0px; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Yogyakarta</em> karena secara geografis Yogyakarta memiliki banyak lokasi wisata yang mudah ditempuh dan sangat terjangkau oleh berbagai kalangan. Selain itu budaya, kreativitas seni dan sikap ramah masyarakat Yogyakarta juga turut memegang peranan penting dalam meningkatkan kunjungan wisatawan domestic maupun mancanegara.</p><p style=\"border: 0px; margin-bottom: 15px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 14px; text-align: justify;\">Keistimewaan lainnya yang dimiliki <span style=\"border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-decoration-line: underline;\">Yogyakarta</span> adalah sebagai gudang masyarakat terpelajar dari seluruh Indonesia. Bisa dikatakan bahwa Yogyakarta merupakan miniaturenya Indonesia karena terdapat keberagaman suku, agama, bahasa dan budaya yang berbeda – beda yang dibawa setiap pelajar dari berbagai pulau yang ada di Indonesia. Oleh karena itu Daerah Istimewa Yogkarta juga dikenal sebagai Kota Pelajar di Indonesia.</p>',	1,	'2017-10-27 21:43:50',	'2017-11-11 19:19:12'),
(11,	'Bandung Paris Van Java',	'Bandung',	10000000,	'bandung (1).jpg',	'',	1,	'2017-10-27 21:54:03',	'2017-10-27 21:54:03');

DROP TABLE IF EXISTS `packages_activity`;
CREATE TABLE `packages_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `nama_aktivitas` text NOT NULL,
  `jam` text,
  `hari_ke` text NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `package_id` (`package_id`),
  CONSTRAINT `packages_activity_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `packages_activity` (`id`, `package_id`, `nama_aktivitas`, `jam`, `hari_ke`, `keterangan`, `created_at`, `updated_at`) VALUES
(1,	7,	'Candi Borobudur',	'08:40',	'1',	'<p>Berkumpul di gerbang Candi</p>',	'2017-11-11 18:40:57',	'2017-11-11 18:40:57'),
(2,	7,	'YOGYAKARTA FULLDAY ( B’fast, Lunch, Dinner )',	'19:24',	'2',	'<p>Tiba Di Candisari kebumen untuk sarapan pagi dan bersih2</p>',	'2017-12-02 05:25:14',	'2017-12-02 05:40:41'),
(3,	7,	'YOGYAKARTA FULLDAY ( B’fast, Lunch, Dinner )',	'20:29',	'2',	'<p>Menuju PD.BPR Yogja<br></p>',	'2017-12-02 05:29:26',	'2017-12-02 05:29:26'),
(4,	7,	'YOGYAKARTA FULLDAY ( B’fast, Lunch, Dinner )',	'21:31',	'2',	'<p>Tiba di BPR JOGJA<br></p>',	'2017-12-02 05:31:17',	'2017-12-02 05:31:17'),
(5,	7,	'BANDUNG - YOGYAKARTA (Snack,Dinner)',	'22:31',	'3',	'<p>Makan siang di Lokal resto<br></p>',	'2017-12-02 05:31:35',	'2017-12-02 05:31:35'),
(6,	11,	'aaa',	NULL,	'1',	'<p>asdas</p>',	'2017-12-10 07:39:07',	'2017-12-10 07:39:07');

DROP TABLE IF EXISTS `packages_hotel`;
CREATE TABLE `packages_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `image` text,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `package_id` (`package_id`),
  CONSTRAINT `packages_hotel_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `packages_hotel` (`id`, `package_id`, `nama`, `harga`, `image`, `created_at`, `updated_at`) VALUES
(1,	7,	'Hotel IBIS Yogyakarta',	3000000,	NULL,	'2017-11-11 18:41:22',	'2017-11-11 18:41:22'),
(2,	7,	'Hotel The Trans',	1000000,	NULL,	'2017-12-10 00:15:47',	'2017-12-10 00:15:47'),
(3,	7,	'Hotel Parahyangan Bandung',	300000,	NULL,	'2017-12-10 00:17:02',	'2017-12-10 00:17:02');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Rajadi Prasetya',	'admin',	'bobbybhaktirinaldy@gmail.com',	'$2y$10$SCu8GEnclyoa7zLr5Mb./uOQOEBtdLySSqgaO9xUzslxc/8lmi6Yu',	'admin',	'1zkGBsaxCtqHeh3E054V8K5jkhHV7WrU16YybYPJBilo78XYl3NtN5SUO6xW',	'2017-10-12 00:22:32',	'2017-10-12 00:22:32'),
(2,	'Bobby Bhakti Rinaldy',	'bobbyrinaldy',	'bobbyrinaldy10@gmail.com',	'$2y$10$SH9W4w32/M1TQip7wloXouEB8QSbRijpU2XB/jd0EJV5YOfRgEO0W',	'user',	'IgashiMmRyG1s0nX2PbzenkmHTcL7yDgEPEJN9pdDwVDX3T0uTLavNW1FaFY',	'2017-12-13 08:09:19',	'2017-12-13 08:09:19'),
(3,	'Ade Mugni Rusmana',	'ademugni',	'bobbyrinaldy105@gmail.com',	'$2y$10$n1xLOVvC5Dj6mtEeGetlhuXURUJk7TvHMeCjvmaqYpcLwrMIxXfFC',	'user',	'9lO74lMXKFI3eufM4zUwuReuBzFH97Jps7COlJlr9w0fGjThQzD2GT8IZZyB',	'2017-12-13 08:16:05',	'2017-12-13 08:16:05'),
(4,	'Gerry',	'gerry',	'gerryfr@gmail.com',	'$2y$10$ocw.ZyqPs8ikottcEsJe0uLQV4.D92ehenIUwB0wrggQN5POEZ8Ce',	'admin',	'VCkddE3Gbx0t9YhZphkJ5BXyYkxaU1Jj2i4Ug1NVo4WLxm3XN9qmFpwk63mP',	'2017-12-13 11:32:36',	'2017-12-13 23:53:58');

-- 2017-12-14 06:56:32
