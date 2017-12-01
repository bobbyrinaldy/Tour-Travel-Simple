-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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
  `jam` text NOT NULL,
  `hari_ke` text NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `package_id` (`package_id`),
  CONSTRAINT `packages_activity_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `packages_activity` (`id`, `package_id`, `nama_aktivitas`, `jam`, `hari_ke`, `keterangan`, `created_at`, `updated_at`) VALUES
(1,	7,	'Candi Borobudur',	'08:40',	'1',	'<p>Berkumpul di gerbang Candi</p>',	'2017-11-11 18:40:57',	'2017-11-11 18:40:57');

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
(1,	7,	'Hotel IBIS Yogyakarta',	3000000,	NULL,	'2017-11-11 18:41:22',	'2017-11-11 18:41:22');

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
  `status` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'admin',	'admin@travel.com',	'$2y$10$TMRpKzGb35byUNUZr31rouwHG/rqGHq9.xlOyt3ZJlt6FLlXhHFrW',	'admin',	'IlLjZxPeUGTjew1pFkXCLjrb88GDkiHLPyF6so5pVZbD0slpXudMVVw8j1IC',	'2017-10-12 00:22:32',	'2017-10-12 00:22:32');

-- 2017-12-01 07:30:51
