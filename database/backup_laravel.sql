-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para laravel
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `laravel`;

-- Copiando estrutura para tabela laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT 'user',
  `status` tinyint(1) DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.users: ~10 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `avatar`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'João Silva', 'joao@example.com', '2025-07-09 12:26:22', '$2y$10$PzKgPvMTwBv1bm6vLQrUFe0nJxT9zqBzWcxWZC9OQdlvGqS/jYwBO', '6199990001', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrvFCa3P2rPQFag1T986q58oxWfyENmDu3CdCuGZjO-0bCDfMMtaFKVXz8bNU4_LgXBT8&usqp=CAU', 'admin', 1, NULL, '2025-07-05 11:26:22', '2025-07-18 14:40:15'),
	(2, 'Maria Oliveira', 'maria@example.com', '2025-07-09 12:26:22', '$2y$10$PzKgPvMTwBv1bm6vLQrUFe0nJxT9zqBzWcxWZC9OQdlvGqS/jYwBO', '6199990002', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRotM-gJvQ61RjcHcKW13WKYuGQhVjE0YeBjP5RayQJeSF_0RRuuqq7MpGZG1Yi7UDxoyY&usqp=CAU', 'user', 1, NULL, '2025-07-09 12:26:22', '2025-07-18 14:40:27'),
	(3, 'Carlos Souza', 'carlos@example.com', '2025-07-09 12:26:22', '$2y$10$PzKgPvMTwBv1bm6vLQrUFe0nJxT9zqBzWcxWZC9OQdlvGqS/jYwBO', '6199990003', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTNBcGwUYXrD0SbJgrOttI0uMkNYpQqcvh1Q&s', 'user', 1, NULL, '2025-07-02 12:26:22', '2025-07-18 14:42:11'),
	(4, 'Ana Lima', 'ana@example.com', '2025-07-09 12:26:22', '$2y$10$PzKgPvMTwBv1bm6vLQrUFe0nJxT9zqBzWcxWZC9OQdlvGqS/jYwBO', '6199990004', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6TRBBvdtbn5c-E_RAECDa4TGtueuUb0hEgA&s', 'admin', 1, NULL, '2025-07-09 12:26:22', '2025-07-18 14:39:35'),
	(5, 'Pedro Costa', 'pedro@example.com', '2025-07-09 12:26:22', '$2y$10$PzKgPvMTwBv1bm6vLQrUFe0nJxT9zqBzWcxWZC9OQdlvGqS/jYwBO', '6199990005', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPHTTsQITS9fA5gjwTR6f2vElt5Ecm194Npw&s', 'user', 1, NULL, '2025-07-05 12:26:22', '2025-07-18 14:42:37'),
	(6, 'Juliana Rocha', 'juliana@example.com', '2025-07-09 12:26:22', '$2y$10$PzKgPvMTwBv1bm6vLQrUFe0nJxT9zqBzWcxWZC9OQdlvGqS/jYwBO', '6199990006', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxZg6OjZID7YUuq3dlS5koJ6AsoW3nqIzCkQ&s', 'user', 0, NULL, '2025-07-05 12:26:22', '2025-07-18 14:42:39'),
	(7, 'Ricardo Alves', 'ricardo@example.com', '2025-07-09 12:26:22', '$2y$10$PzKgPvMTwBv1bm6vLQrUFe0nJxT9zqBzWcxWZC9OQdlvGqS/jYwBO', '6199990007', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv3lOWrzPBkuP6NqfN-RzAJbHP2jcXz3r7_g&s', 'admin', 1, NULL, '2025-07-09 12:26:22', '2025-07-18 14:43:38'),
	(8, 'Larissa Mendes', 'larissa@example.com', '2025-07-09 12:26:22', '$2y$10$PzKgPvMTwBv1bm6vLQrUFe0nJxT9zqBzWcxWZC9OQdlvGqS/jYwBO', '6199990008', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIK5C5Y4rk-oVsDtchBPhn_9GxHuMtWhJ32Q&s', 'user', 1, NULL, '2025-07-09 12:26:22', '2025-07-18 14:43:20'),
	(9, 'André Freitas', 'andre@example.com', '2025-07-09 12:26:22', '$2y$10$PzKgPvMTwBv1bm6vLQrUFe0nJxT9zqBzWcxWZC9OQdlvGqS/jYwBO', '6199990009', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6AF97bGdN6ab-G2xXDkdU42p5qxHiOGSDYg&s', 'user', 1, NULL, '2025-07-09 12:26:22', '2025-07-18 14:43:52'),
	(10, 'Beatriz Nunes', 'beatriz@example.com', '2025-07-09 12:26:22', '$2y$10$PzKgPvMTwBv1bm6vLQrUFe0nJxT9zqBzWcxWZC9OQdlvGqS/jYwBO', '6199990010', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBijD6e9cE0jeGgCdMsR816i4-D304xylFIw&s', 'user', 0, NULL, '2025-07-09 12:26:22', '2025-07-18 14:44:02');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
