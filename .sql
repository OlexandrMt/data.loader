SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+02:00";

CREATE TABLE `Person` (
	`id` int NOT NULL AUTO_INCREMENT,
	`surname` varchar(255) NOT NULL,
	`name` varchar(255) NOT NULL,
	`birthday_date` DATE NOT NULL,
	`phone_number` varchar(255) NOT NULL,
	`avatar` varchar(255) NOT NULL DEFAULT 'default_avatar.png',
	`created_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;