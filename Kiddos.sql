-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour kiddos
DROP DATABASE IF EXISTS `kiddos`;
CREATE DATABASE IF NOT EXISTS `kiddos` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `kiddos`;

-- Listage de la structure de la table kiddos. admins
DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.admins : ~0 rows (environ)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. autres
DROP TABLE IF EXISTS `autres`;
CREATE TABLE IF NOT EXISTS `autres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.autres : ~0 rows (environ)
/*!40000 ALTER TABLE `autres` DISABLE KEYS */;
/*!40000 ALTER TABLE `autres` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. classe_selecteds
DROP TABLE IF EXISTS `classe_selecteds`;
CREATE TABLE IF NOT EXISTS `classe_selecteds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.classe_selecteds : ~0 rows (environ)
/*!40000 ALTER TABLE `classe_selecteds` DISABLE KEYS */;
/*!40000 ALTER TABLE `classe_selecteds` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.contacts : ~0 rows (environ)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. dars
DROP TABLE IF EXISTS `dars`;
CREATE TABLE IF NOT EXISTS `dars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.dars : ~0 rows (environ)
/*!40000 ALTER TABLE `dars` DISABLE KEYS */;
/*!40000 ALTER TABLE `dars` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. dars2s
DROP TABLE IF EXISTS `dars2s`;
CREATE TABLE IF NOT EXISTS `dars2s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `resultatdars2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_20` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_21` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_22` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_23` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_25` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_26` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_27` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_28` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_29` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_30` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2_31` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dars2s_users_id_foreign` (`users_id`),
  CONSTRAINT `dars2s_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.dars2s : ~0 rows (environ)
/*!40000 ALTER TABLE `dars2s` DISABLE KEYS */;
/*!40000 ALTER TABLE `dars2s` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. dars3s
DROP TABLE IF EXISTS `dars3s`;
CREATE TABLE IF NOT EXISTS `dars3s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `resultatdars3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_20` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_21` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_22` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_23` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_25` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3_26` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dars3s_users_id_foreign` (`users_id`),
  CONSTRAINT `dars3s_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.dars3s : ~0 rows (environ)
/*!40000 ALTER TABLE `dars3s` DISABLE KEYS */;
/*!40000 ALTER TABLE `dars3s` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. devoirs
DROP TABLE IF EXISTS `devoirs`;
CREATE TABLE IF NOT EXISTS `devoirs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.devoirs : ~0 rows (environ)
/*!40000 ALTER TABLE `devoirs` DISABLE KEYS */;
/*!40000 ALTER TABLE `devoirs` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. feedbacks
DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_info` text COLLATE utf8mb4_unicode_ci,
  `reviewed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `feedbacks_type_index` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.feedbacks : ~0 rows (environ)
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedbacks` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. files
DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.files : ~0 rows (environ)
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. idmajs
DROP TABLE IF EXISTS `idmajs`;
CREATE TABLE IF NOT EXISTS `idmajs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `resultatidmaj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmaj_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idmajs_users_id_foreign` (`users_id`),
  CONSTRAINT `idmajs_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.idmajs : ~0 rows (environ)
/*!40000 ALTER TABLE `idmajs` DISABLE KEYS */;
/*!40000 ALTER TABLE `idmajs` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.migrations : ~23 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_01_01_000000_create_feedbacks_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2021_12_25_190328_create_admins_table', 1),
	(7, '2021_12_25_190407_create_profs_table', 1),
	(8, '2022_03_07_192101_create_classe_selecteds_table', 1),
	(9, '2022_03_12_181712_create_resulats_table', 1),
	(10, '2022_03_17_152145_create_resultatdars1s_table', 1),
	(11, '2022_03_18_204016_create_resultatdars2s_table', 1),
	(12, '2022_03_18_221001_create_dars2s_table', 1),
	(13, '2022_03_20_135908_create_resultatdars3s_table', 1),
	(14, '2022_03_20_141641_create_dars3s_table', 1),
	(15, '2022_03_21_202403_create_idmajs_table', 1),
	(16, '2022_03_21_202810_create_resultat_idmajs_table', 1),
	(17, '2022_03_22_123720_create_contacts_table', 1),
	(18, '2022_03_24_204609_create_dars_table', 1),
	(19, '2022_03_24_204713_create_devoirs_table', 1),
	(20, '2022_03_24_204758_create_wadhaayas_table', 1),
	(21, '2022_03_24_204826_create_autres_table', 1),
	(22, '2022_03_25_000723_create_vedos_table', 1),
	(23, '2022_03_25_103808_create_files_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. profs
DROP TABLE IF EXISTS `profs`;
CREATE TABLE IF NOT EXISTS `profs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profs_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.profs : ~0 rows (environ)
/*!40000 ALTER TABLE `profs` DISABLE KEYS */;
/*!40000 ALTER TABLE `profs` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. resulats
DROP TABLE IF EXISTS `resulats`;
CREATE TABLE IF NOT EXISTS `resulats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.resulats : ~0 rows (environ)
/*!40000 ALTER TABLE `resulats` DISABLE KEYS */;
/*!40000 ALTER TABLE `resulats` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. resultatdars1s
DROP TABLE IF EXISTS `resultatdars1s`;
CREATE TABLE IF NOT EXISTS `resultatdars1s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.resultatdars1s : ~0 rows (environ)
/*!40000 ALTER TABLE `resultatdars1s` DISABLE KEYS */;
/*!40000 ALTER TABLE `resultatdars1s` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. resultatdars2s
DROP TABLE IF EXISTS `resultatdars2s`;
CREATE TABLE IF NOT EXISTS `resultatdars2s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.resultatdars2s : ~0 rows (environ)
/*!40000 ALTER TABLE `resultatdars2s` DISABLE KEYS */;
/*!40000 ALTER TABLE `resultatdars2s` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. resultatdars3s
DROP TABLE IF EXISTS `resultatdars3s`;
CREATE TABLE IF NOT EXISTS `resultatdars3s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.resultatdars3s : ~0 rows (environ)
/*!40000 ALTER TABLE `resultatdars3s` DISABLE KEYS */;
/*!40000 ALTER TABLE `resultatdars3s` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. resultat_idmajs
DROP TABLE IF EXISTS `resultat_idmajs`;
CREATE TABLE IF NOT EXISTS `resultat_idmajs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.resultat_idmajs : ~0 rows (environ)
/*!40000 ALTER TABLE `resultat_idmajs` DISABLE KEYS */;
/*!40000 ALTER TABLE `resultat_idmajs` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `devoir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resultatdars1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resultatdars2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resultatdars3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resultatidmaj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars20` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars21` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars22` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars23` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars25` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars26` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars27` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dars28` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. vedos
DROP TABLE IF EXISTS `vedos`;
CREATE TABLE IF NOT EXISTS `vedos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.vedos : ~0 rows (environ)
/*!40000 ALTER TABLE `vedos` DISABLE KEYS */;
/*!40000 ALTER TABLE `vedos` ENABLE KEYS */;

-- Listage de la structure de la table kiddos. wadhaayas
DROP TABLE IF EXISTS `wadhaayas`;
CREATE TABLE IF NOT EXISTS `wadhaayas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddos.wadhaayas : ~0 rows (environ)
/*!40000 ALTER TABLE `wadhaayas` DISABLE KEYS */;
/*!40000 ALTER TABLE `wadhaayas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
