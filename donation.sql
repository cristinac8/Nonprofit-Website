-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/

-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `titleRO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entryRO` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `blogs` (`id`, `title`, `entry`, `photo`, `url`, `view`, `titleRO`, `entryRO`, `created_at`, `updated_at`) VALUES
(1, 'Stories title EN Update', 'stories-title-en', 0, 'Stories title RO Update', 
'Stories description EN Update Stories description EN Update Stories description EN Update Stories description EN Update Stories description EN Update Stories description EN Update\r\n');


CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titleRO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionRO` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `campaigns` (`id`, `title`, `description`, `photo`, `created_at`, `updated_at`, `titleRO`, `descriptionRO`) VALUES
(1, 'The flames burned down our house!', 'Imagine working hard and making sacrifices your whole life to own your own home and have a place to raise your children, only to have it all fall apart in a matter of hours right in front of you. Well, this is the situation of the Popescu family from Toca, jud. Dolj.
These hard-working people felt the ground shaking under their feet when a normal day turned into a nightmare.
This tragedy put them in the position of selling everything they had in order to start building a new house, thus preventing the family from earning a living. "Together with my husband, before we were homeless, we were doing the best we could. We carried wood for people, we chopped it, we still managed with the animals, we still had hope. But now we have nothing, and the children have to be fed."
They have clearly expressed their desire to work, but given the deprived area they live in, the possibilities are very slim. We want to be close to them and with your help we would like to raise funds so that they can buy a horse, a cow, wood cutting tools, a stove, because the one they have can hardly be called that and some food.
Together we are strong! Join the Popescu familys relief team!', '22-01-19tara.jpeg', '2022-01-19 22:19:24', '2022-01-19 23:05:39', 'Flăcările ne-au mistuit casa!', 'Imaginati-va ca o viata intreaga munciti din greu si faceti sacrificii ca sa aveti si voi casuta proprie si sa aveti un loc in care sa va cresteti copiii, ca mai apoi totul sa se distruga in cateva ore chiar in fata ochilor vostri. Ei bine cam aceasta este situatia familiei Popescu din Toca, jud. Dolj.
Acesti oameni muncitori au simtit au simtit ca pamantul li se cutremura sub picioare atunci cand o zi normala s-a transformat intr-una de cosmar.
Aceasta tragedie i-a pus in situatia de a vinde tot ce aveau, pentru a putea incepe constructia unei noi casute, impiedicand astfel familia sa-si mai castige existenta. “Impreuna cu sotul, inainte sa ramanem fara casa, ne descurcam cum puteam. Duceam lemne pentru oameni, le taiam, ne mai descurcam cu animalele, aveam totusi o speranta. Insa acum nu mai avem nimic, iar copiii trebuie hraniti.”
Ei si-au expus clar dorinta de a munci, dar avand in vedere zona defavorizata in care traiesc, posibilitatile sunt foarte mici. Noi vrem sa le fim aproape si cu ajutorul vostru am dori sa strangem fonduri pentru ca ei sa sa isi poata achizitiona un cal, o vaca, ustensile de taiere a lemnului, o soba, pentru ca cea pe care o au greu se poate numi asa si niste alimente.
Impreuna suntem puternici! Alatura-te in echipa de ajutor a familiei Popescu!');


CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campaignID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `donations` (`id`, `campaignID`, `userID`, `amount`, `text`, `status`, `created_at`, `updated_at`) VALUES

(?, 3, 2, 15, 2022-01-24 20:09:20, 2022-01-24 20:15:20);



CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_18_035635_create_campaigns_table', 1),
(6, '2021_12_18_042711_create_donations_table', 1),
(7, '2021_12_18_042815_create_blogs_table', 1);



CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` int(11) NOT NULL COMMENT '0 female 1 male',
  `role` int(11) NOT NULL COMMENT '1 admin 0 client',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `users` (`id`, `name`, `email`, `password`, `dateOfBirth`, `gender`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Antalute Cristina', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-12-07', 0, 1, '2021-12-18 00:20:07', '2021-12-18 06:07:47');


ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);


ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);


ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);


ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

