-- Create students table
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `student_no` varchar(255) NOT NULL UNIQUE,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL UNIQUE,
  `phone` varchar(255) NULL,
  `address` varchar(255) NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
